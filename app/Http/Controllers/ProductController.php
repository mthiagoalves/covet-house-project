<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Inertia\Inertia;
use Illuminate\Support\Facades\File;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    public function __construct(
        private ProductRepository $productRepository,
        private CategoryRepository $categoryRepository,
    ) {}

    /**
     * FUNÇÃO DE APOIO (DRY)
     * Centraliza a busca de produtos relacionados para deixar os métodos limpos.
     */
    private function getRelatedProducts()
    {
        return $this->productRepository->getBestSellersFormatted();
    }

    private function getGalleryData($categorySlug, $productSlug, $finishes)
    {
        $productPath = public_path("images/products/{$categorySlug}/{$productSlug}/details-slide/");

        $standardImageCount = 0;
        $files = [];

        // 1. Busca os arquivos na pasta apenas uma vez
        if (File::exists($productPath)) {
            $files = File::files($productPath);

            $standardImages = array_filter($files, function ($file) use ($productSlug) {
                return preg_match("/^{$productSlug}-\d+\.(jpg|jpeg|png|webp)$/i", $file->getFilename());
            });
            $standardImageCount = count($standardImages);
        }

        // Fallback de segurança
        if ($standardImageCount == 0) $standardImageCount = 1;

        // 2. SE NÃO TIVER ACABAMENTOS: Retorna a contagem padrão e encerra a função
        if (empty($finishes) || (is_object($finishes) && $finishes->isEmpty())) {
            return [
                'image_count' => $standardImageCount,
                'finishes'    => null
            ];
        }

        // 3. SE TIVER ACABAMENTOS: Processa as abas
        $processedFinishes = [];
        $currentSlideIndex = 0;

        foreach ($finishes as $finish) {
            $count = 0;

            if (!empty($files)) {
                $finishImages = array_filter($files, function ($file) use ($productSlug, $finish) {
                    return preg_match("/^{$productSlug}-{$finish['slug']}-\d+\.(jpg|jpeg|png|webp)$/i", $file->getFilename());
                });
                $count = count($finishImages);
            }

            if ($count > 0) {
                $processedFinishes[] = [
                    'name'        => $finish['name'],
                    'slug'        => $finish['slug'],
                    'image_count' => $count,
                    'slide_index' => $currentSlideIndex,
                ];

                $currentSlideIndex += $count;
            }
        }

        return ['finishes' => $processedFinishes];
    }


    /**
     * Mostra 'All Products'
     * Rota: /all-products
     */
    public function allProducts()
    {
        $allProducts = $this->productRepository->getAllFormatted();

        return Inertia::render('products/Index', [
            'pageTitle' => 'All Products',
            'productGroups' => $allProducts,
        ]);
    }

    /**
     * Mostra 'New Products'
     * Rota: /new-products
     */
    public function newProducts()
    {
        $allNewProducts = $this->productRepository->getNewProductsFormatted();

        return Inertia::render('products/Index', [
            'pageTitle' => 'New Products',
            'productGroups' => $allNewProducts,
        ]);
    }

    /**
     * Mostra produtos por Categoria
     * Rota: /products/category/{slug}
     */

    public function category($slug)
    {
        $category = $this->categoryRepository->findBySlug($slug);

        return Inertia::render('products/Index', [
            'pageTitle' => $category->name,
            'category'  => [
                'name'        => $category->name,
                'slug'        => $category->slug,
                'description' => 'Explore our curated selection of ' . strtolower($category->name),
            ],
            'productGroups' => $this->productRepository->getGroupedBySubcategory($slug),
        ]);
    }

    public function show($slug)
    {
        $product = $this->productRepository->findBySlugFormatted($slug);

        $product['finishes'] = $this->getGalleryData($product['category']['slug'], $product['slug'], $product['finishes']);

        return Inertia::render('products/Show', [
            'product' => $product,
            'bestSellersProducts' => $this->getRelatedProducts(),
        ]);
    }
}
