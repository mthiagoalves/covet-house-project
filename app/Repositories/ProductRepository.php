<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Collection;

class ProductRepository
{

    /**
     * FUNÇÃO BASE (DRY)
     * Centraliza a formatação, otimiza o select e o eager loading das relações.
     */
    private function fetchAndFormatBase($query): Collection
    {
        return $query
            ->with([
                'brand:id,name,slug',
                'category:id,name,slug',
                'subcategory:id,name,slug'
            ])
            ->select('id', 'brand_id', 'category_id', 'subcategory_id', 'type', 'name', 'slug', 'is_best_seller')
            ->get()
            ->map(function ($product) {
                return [
                    'id'             => $product->id,
                    'type'           => $product->type,
                    'name'           => $product->name,
                    'slug'           => $product->slug,
                    'is_best_seller' => $product->is_best_seller, // Agora funciona sempre!
                    'brand' => [
                        'name' => $product->brand->name ?? '',
                        'slug' => $product->brand->slug ?? '',
                    ],
                    'category' => [
                        'name' => $product->category->name ?? '',
                        'slug' => $product->category->slug ?? '',
                        'subcategory' => [
                            'name' => $product->subcategory->name ?? '',
                            'slug' => $product->subcategory->slug ?? '',
                        ]
                    ]
                ];
            });
    }

    private function fetchAndFormatToAllProducts($query): Collection
    {
        return $this->fetchAndFormatBase($query->where('visible_in_all_products', true));
    }

    private function fetchAndFormatToNewProducts($query): Collection
    {
        return $this->fetchAndFormatBase($query->where('is_new', true));
    }

    private function fetchAndFormatToCategories($query): Collection
    {
        return $this->fetchAndFormatBase($query);
    }

    /**
     * Retorna a listagem de produtos com a estrutura aninhada perfeita.
     */
    public function getAllFormatted()
    {
        $products = $this->fetchAndFormatToAllProducts(Product::query());

        return $products->groupBy('category.slug')->map(function ($items, $slug) {
            return [
                'category_name' => $items->first()['category']['name'],
                'category_slug' => $slug,
                'products'      => $items->values()->toArray(),
            ];
        })->values();
    }

    /**
     * Retorna a listagem de novos produtos com a estrutura aninhada perfeita.
     */
    public function getNewProductsFormatted()
    {
        $products = $this->fetchAndFormatToNewProducts(Product::query());

        // Agrupa e formata para a prop 'productGroups' do Vue
        return $products->groupBy('category.slug')->map(function ($items, $slug) {
            return [
                'category_name' => $items->first()['category']['name'],
                'category_slug' => $slug,
                'products'      => $items->values()->toArray(),
            ];
        })->values();
    }

    /**
     * Retorna os produtos de uma categoria agrupados pelas SUBCATEGORIAS (Para a página interna)
     */
    public function getGroupedBySubcategory(string $categorySlug)
    {
        // 1. Primeiro montamos a query filtrando SOMENTE a categoria desejada
        $query = Product::whereHas('category', function ($q) use ($categorySlug) {
            $q->where('slug', $categorySlug);
        });

        // 2. Passamos essa query filtrada para a sua função DRY formadora
        $products = $this->fetchAndFormatToCategories($query);

        // 3. Agrupa pela subcategoria e formata para o Vue
        return $products->groupBy('category.subcategory.slug')->map(function ($items, $slug) {
            return [
                'category_name' => $items->first()['category']['subcategory']['name'] ?? '',
                'category_slug' => $slug,
                'products'      => $items->values()->toArray(),
            ];
        })->values();
    }

    /**
     * Busca um único produto pelo slug e formata
     */
    public function findBySlugFormatted(string $slug)
    {
        // 1. Adicionamos 'finishes' e 'ambiances' no array do with()
        $product = Product::with([
            'brand:id,name,slug',
            'category:id,name,slug',
            'subcategory:id,name,slug',
            'finishes:id,name,slug,is_standard,visible', // Otimizando a busca de colunas
            'ambiances' // Traz a relação dos ambientes (incluindo a tabela pivot)
        ])
            ->where('slug', $slug)
            ->firstOrFail();

        return [
            'id'             => $product->id,
            'type'           => $product->type,
            'name'           => $product->name,
            'slug'           => $product->slug,
            'has_stock'      => $product->has_stock,
            'description'    => $product->description,
            'dimensions_cm'  => $product->dimensions_cm,
            'dimensions_in'  => $product->dimensions_in,
            'materials_and_finishes' => $product->materials_and_finishes,

            'brand' => [
                'name' => $product->brand->name ?? null,
                'slug' => $product->brand->slug ?? null,
            ],

            'category' => [
                'name' => $product->category->name ?? null,
                'slug' => $product->category->slug ?? null,
                'subcategory' => [
                    'name' => $product->subcategory->name ?? null,
                    'slug' => $product->subcategory->slug ?? null,
                ]
            ],

            // 2. Mapeamos os acabamentos garantindo que só os visíveis retornem
            'finishes' => $product->finishes->map(function ($finish) {
                return [
                    'name'        => $finish->name,
                    'slug'        => $finish->slug,
                    'is_standard' => $finish->is_standard,
                ];
            })->values()->toArray(),

            // 3. Mapeamos os ambientes onde este produto aparece
            'ambiances' => $product->ambiances
                ->where('is_active', true)
                ->unique('id') // unique() garante que o ambiente não duplique caso o SEU produto apareça 2x na mesma sala
                ->map(function ($ambiance) {
                    return [
                        'name' => $ambiance->name,
                        'slug' => $ambiance->slug,

                        // Mapeia TODOS os produtos que pertencem a este ambiente
                        'hotspots' => $ambiance->products->map(function ($ambianceProduct) {
                            return [
                                'product_name' => $ambianceProduct->name,
                                'product_slug' => $ambianceProduct->slug,
                                'top'          => $ambianceProduct->pivot->top ?? null,
                                'left'         => $ambianceProduct->pivot->left ?? null,
                            ];
                        })->toArray(),
                    ];
                })->values()->toArray(),
        ];
    }
}
