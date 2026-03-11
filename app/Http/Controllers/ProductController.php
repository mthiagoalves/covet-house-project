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

        $categorySlug = 'casegoods';
        $productPath = public_path("images/products/slide-product-page/{$categorySlug}/{$slug}");

        // 1. Contar Imagens PADRÃO (slug-1.jpg, slug-2.jpg...)
        $standardImageCount = 0;
        if (File::exists($productPath)) {
            $files = File::files($productPath);
            $standardImages = array_filter($files, function ($file) use ($slug) {
                // Regex estrito: começa com slug, traço, número, ponto, extensão
                // Ex: pixel-cabinet-1.jpg
                return preg_match("/^{$slug}-\d+\.(jpg|jpeg|png|webp)$/i", $file->getFilename());
            });
            $standardImageCount = count($standardImages);
        }
        if ($standardImageCount == 0) $standardImageCount = 1; // Fallback

        // 2. Definir os Acabamentos Disponíveis (Isso viria do banco)
        $finishesData = [
            ['name' => 'Standard', 'slug' => 'standard', 'is_standard' => true, 'visible' => true], // O padrão não tem sufixo no arquivo
            ['name' => 'Heritage', 'slug' => 'heritage', 'is_standard' => false, 'visible' => true],
            ['name' => 'Walnut Edition', 'slug' => 'walnut', 'is_standard' => false, 'visible' => true],
        ];

        // 3. Processar Acabamentos (Contar imagens e definir slide_index)
        $processedFinishes = [];
        $currentSlideIndex = 0; // Começa no 0

        foreach ($finishesData as $finish) {
            $count = 0;

            if ($finish['is_standard']) {
                // Se for o padrão, usa a contagem que já fizemos
                $count = $standardImageCount;
            } else {
                // Se for um acabamento (ex: walnut), conta: slug-walnut-1.jpg
                if (File::exists($productPath)) {
                    $finishImages = array_filter($files, function ($file) use ($slug, $finish) {
                        return preg_match("/^{$slug}-{$finish['slug']}-\d+\.(jpg|jpeg|png|webp)$/i", $file->getFilename());
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

        $product = [
            'id' => 999,
            'name' => 'PIXEL CABINET',
            'slug' => $slug,
            'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
            'category' => [
                'name' => 'Casegoods',
                'slug' => $categorySlug,
                'subcategory' => ['name' => 'Cabinets', 'slug' => 'cabinets']
            ],
            'is_in_stock' => true,
            'description' => '<p><span style="text-decoration: underline;"><em><strong><a href="https://www.bocadolobo.com/en/limited-edition/cabinets-and-bookcases/pixel/">Pixel</a> Cabinet</strong></em></span>&nbsp;by <a href="https://www.covethouse.eu/brands/boca-do-lobo/"><span style="text-decoration: underline;"><em><strong>Boca do Lobo</strong></em></span> </a>is an effort to honor the union between design and craftsmanship. The 1088 triangles that complete&nbsp;<span style="text-decoration: underline;"><em><strong>Pixel Cabinet</strong></em></span> carries the dedication and art of those who built it – with a diversity of finishes never seen before. The polished brass base gives <span style="text-decoration: underline;"><em><strong>Pixel Cabinet</strong></em></span> a unique personality, a strong and at the same time sophisticated character.</p>',
            'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
            'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
            'materials' => 'BASE: WOOD, MIRROR, ACRYLIC, GOLD LEAF, SILVER LEAF. VARIED CHOICE OF COLORS',
            'finishes' => $processedFinishes
        ];

        $relatedAmbiences = [
            [
                'name' => 'Classic Hallway',
                'slug' => 'ambience-pixel-cabinet-1',
                'hotspots' => [
                    [
                        'product_name' => 'EMPIRE WALL LAMP',
                        'product_slug' => 'empire-wall-lamp', // Link para o produto
                        'top' => '45%',  // Posição Vertical
                        'left' => '60%', // Posição Horizontal
                    ],
                    [
                        'product_name' => 'PIXEL CABINET',
                        'product_slug' => 'pixel-cabinet',
                        'top' => '65%',
                        'left' => '20%',
                    ]
                ]
            ],
            [
                'name' => 'Modern Living Room',
                'slug' => 'ambience-pixel-cabinet-2',
                'hotspots' => [
                    [
                        'product_name' => 'EMPIRE WALL LAMP',
                        'product_slug' => 'empire-wall-lamp', // Link para o produto
                        'top' => '45%',  // Posição Vertical
                        'left' => '60%', // Posição Horizontal
                    ],
                    [
                        'product_name' => 'PIXEL CABINET',
                        'product_slug' => 'pixel-cabinet',
                        'top' => '65%',
                        'left' => '20%',
                    ]
                ]
            ],
            [
                'name' => 'Eclectic Entryway',
                'slug' => 'ambience-pixel-cabinet-3',
                'hotspots' => [
                    [
                        'product_name' => 'EMPIRE WALL LAMP',
                        'product_slug' => 'empire-wall-lamp', // Link para o produto
                        'top' => '45%',  // Posição Vertical
                        'left' => '60%', // Posição Horizontal
                    ],
                    [
                        'product_name' => 'PIXEL CABINET',
                        'product_slug' => 'pixel-cabinet',
                        'top' => '65%',
                        'left' => '20%',
                    ]
                ]
            ],
            [
                'name' => 'Luxury Office',
                'slug' => 'ambience-pixel-cabinet-4',
                'hotspots' => [
                    [
                        'product_name' => 'EMPIRE WALL LAMP',
                        'product_slug' => 'empire-wall-lamp', // Link para o produto
                        'top' => '45%',  // Posição Vertical
                        'left' => '60%', // Posição Horizontal
                    ],
                    [
                        'product_name' => 'PIXEL CABINET',
                        'product_slug' => 'pixel-cabinet',
                        'top' => '65%',
                        'left' => '20%',
                    ]
                ]
            ],
        ];



        return Inertia::render('products/Show', [
            'product' => $product,
            'ambiences' => $relatedAmbiences,
            // 'bestSellersProducts' => $this->getBestSellersProducts(),
        ]);
    }
}
