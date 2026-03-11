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

    private function setIndexSlide($categorySlug, $productSlug, $finishes)
    {
        $productPath = public_path("images/products/{$categorySlug}/{$productSlug}/details-slide/");

        $standardImageCount = 0;
        if (File::exists($productPath)) {
            $files = File::files($productPath);
            $standardImages = array_filter($files, function ($file) use ($productSlug) {
                // Regex estrito: começa com slug, traço, número, ponto, extensão
                // Ex: pixel-cabinet-1.jpg
                return preg_match("/^{$productSlug}-\d+\.(jpg|jpeg|png|webp)$/i", $file->getFilename());
            });
            $standardImageCount = count($standardImages);
        }
        if ($standardImageCount == 0) $standardImageCount = 1;

        $processedFinishes = [];
        $currentSlideIndex = 0;

        foreach ($finishes as $finish) {
            $count = 0;

            if ($finish['is_standard']) {
                // Se for o padrão, usa a contagem que já fizemos
                $count = $standardImageCount;
            } else {
                // Se for um acabamento (ex: walnut), conta: slug-walnut-1.jpg
                if (File::exists($productPath)) {
                    $finishImages = array_filter($files, function ($file) use ($productSlug, $finish) {
                        return preg_match("/^{$productSlug}-{$finish['slug']}-\d+\.(jpg|jpeg|png|webp)$/i", $file->getFilename());
                    });
                    $count = count($finishImages);
                }
            }

            // Se tiver imagens (ou for o padrão), adiciona à lista
            if ($count > 0) {
                $processedFinishes[] = [
                    'name' => $finish['name'],
                    'slug' => $finish['slug'],
                    'image_count' => $count,      // Quantas fotos esse acabamento tem
                    'slide_index' => $currentSlideIndex, // Onde começa no slide
                    'is_standard' => $finish['is_standard']
                ];

                // Incrementa o índice para o próximo acabamento
                $currentSlideIndex += $count;
            }
        }
        return $processedFinishes;
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

        $product['finishes'] = $this->setIndexSlide($product['category']['slug'], $product['slug'], $product['finishes']);;

        return Inertia::render('products/Show', [
            'product' => $product,
            // 'bestSellersProducts' => $this->getBestSellersProducts(),
        ]);
    }
}
