<?php

namespace App\Http\Controllers;

use App\Repositories\BrandRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;

class BrandController extends Controller
{

    public function __construct(
        private BrandRepository $brandRepository
    ) {}

    /**
     * Helper para retornar a lista de produtos da marca mocada
     */
    private function getMockBrandProducts()
    {
        return [
            [
                'id' => 101,
                'name' => 'LAPIAZ SIDEBOARD',
                'slug' => 'lapiaz-sideboard',
                'type' => 'product',
                'main_image_url' => 'https://placehold.co/800x800/eee/333?text=Lapiaz',
                'brand' => ['name' => 'BOCA DO LOBO'],
                'category' => ['name' => 'Casegoods', 'slug' => 'casegoods', 'subcategory' => ['name' => 'Sideboards', 'slug' => 'sideboards']]
            ],
            [
                'id' => 102,
                'name' => 'CHARLA DINING CHAIR',
                'slug' => 'charla-dining-chair',
                'type' => 'product',
                'main_image_url' => 'https://placehold.co/800x800/ddd/333?text=Charla',
                'brand' => ['name' => 'LUXXU'],
                'category' => ['name' => 'Seatings', 'slug' => 'seatings', 'subcategory' => ['name' => 'Chairs', 'slug' => 'chairs']]
            ],
            [
                'id' => 103,
                'name' => 'ARDARA CONSOLE TABLE',
                'slug' => 'ardara-console',
                'type' => 'product',
                'main_image_url' => 'https://placehold.co/800x800/ccc/333?text=Ardara',
                'brand' => ['name' => 'BRABBU'],
                'category' => ['name' => 'Casegoods', 'slug' => 'casegoods', 'subcategory' => ['name' => 'Consoles', 'slug' => 'consoles']]
            ],
            [
                'id' => 101,
                'name' => 'LAPIAZ SIDEBOARD',
                'slug' => 'lapiaz-sideboard',
                'type' => 'product',
                'main_image_url' => 'https://placehold.co/800x800/eee/333?text=Lapiaz',
                'brand' => ['name' => 'BOCA DO LOBO'],
                'category' => ['name' => 'Casegoods', 'slug' => 'casegoods', 'subcategory' => ['name' => 'Sideboards', 'slug' => 'sideboards']]
            ],
            [
                'id' => 102,
                'name' => 'CHARLA DINING CHAIR',
                'slug' => 'charla-dining-chair',
                'type' => 'product',
                'main_image_url' => 'https://placehold.co/800x800/ddd/333?text=Charla',
                'brand' => ['name' => 'LUXXU'],
                'category' => ['name' => 'Seatings', 'slug' => 'seatings', 'subcategory' => ['name' => 'Chairs', 'slug' => 'chairs']]
            ],
            [
                'id' => 103,
                'name' => 'ARDARA CONSOLE TABLE',
                'slug' => 'ardara-console',
                'type' => 'product',
                'main_image_url' => 'https://placehold.co/800x800/ccc/333?text=Ardara',
                'brand' => ['name' => 'BRABBU'],
                'category' => ['name' => 'Casegoods', 'slug' => 'casegoods', 'subcategory' => ['name' => 'Consoles', 'slug' => 'consoles']]
            ],
        ];
    }

    /**
     * Helper para injetar a contagem de imagens em cada marca
     */
    private function processBrandsWithImages($brands)
    {
        return array_map(function ($brand) {
            $slug = $brand['slug'];
            $imageCount = 0;

            // Caminho: /public/images/brands/slider-ambiences/{slug}/
            $path = public_path("images/brands/slider-ambiences/{$slug}");

            if (File::exists($path)) {
                $files = File::files($path);

                // Filtra arquivos: ambience-1.jpg, ambience-2.jpg, etc.
                $images = array_filter($files, function ($file) {
                    return preg_match('/^ambience-\d+\.(jpg|jpeg|png|webp)$/i', $file->getFilename());
                });

                $imageCount = count($images);
            }

            // Fallback: Se não tiver imagens na pasta, definimos 1 para não quebrar (ou usamos placeholder no front)
            $brand['image_count'] = $imageCount > 0 ? $imageCount : 0;

            return $brand;
        }, $brands);
    }

    /**
     * Helper para injetar a contagem de imagens da marca individual
     */
    private function countImagesOfTheBrand($slug)
    {
        $imageCount = 0;

        $path = public_path("images/brands/slider-ambiences/{$slug}");

        if (File::exists($path)) {
            $files = File::files($path);

            // Filtra arquivos: ambience-1.jpg, ambience-2.jpg, etc.
            $images = array_filter($files, function ($file) {
                return preg_match('/^ambience-\d+\.(jpg|jpeg|png|webp)$/i', $file->getFilename());
            });

            $imageCount = count($images);
        }

        return $imageCount;
    }

    /**
     * Página Principal de Marcas (/brands)
     * Lista todas as marcas.
     */
    public function index()
    {
        $brands = $this->brandRepository->getAllForIndex();

        $brandsWithImages = $this->processBrandsWithImages($brands->toArray());

        return Inertia::render('brands/Index', [
            'pageTitle' => 'Our Brands',
            'brands' => $brandsWithImages,
            'hero' => [
                'imageUrl' => '/images/banners/brands-hero.jpg',
                'title' => 'THE <b>COVET HOUSE</b> BRANDS<br/>A CURATED SELECTION OF LUXURY DESIGN',
                'altText' => 'Covet House Brands'
            ]
        ]);
    }

    /**
     * Página de Marca Individual (/brands/{slug})
     * Mostra detalhes de uma marca específica.
     */
    public function show($slug)
    {
        $brand = $this->brandRepository->findBySlug($slug);

        if (!$brand) {
            abort(404);
        }

        $countBrandImages = $this->countImagesOfTheBrand($slug);

        $heroData = [
            'videoUrlBase' => "/videos/brands/{$slug}",
            'title' => $brand['name'],
            'subtitle' => $brand['subtitle'] ?? 'LUXURY FURNITURE',
        ];

        return Inertia::render('brands/Show', [
            'brand' => $brand,
            'hero' => $heroData,
            'count_images' => $countBrandImages,
            'relatedProducts' => $this->getMockBrandProducts()

        ]);
    }
}
