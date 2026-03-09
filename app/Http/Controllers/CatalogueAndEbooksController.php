<?php

namespace App\Http\Controllers;

use App\Repositories\CataloguesAndEbooksRepository;
use Inertia\Inertia;

class CatalogueAndEbooksController extends Controller
{
    public function __construct(
        private CataloguesAndEbooksRepository $catalogueRepository
    ) {}

    public function index()
    {
        $productsMock = [
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

        $cataloguesAndEbooks = $this->catalogueRepository->getAllForIndex();

        $featured = $this->catalogueRepository->getFeatured();

        return Inertia::render('catalogues-and-ebooks/Index', [
            'pageTitle' => 'Catalogues & Ebooks',
            'featuredCatalogue' => $featured->first(),
            'cataloguesAndEbooks' => $cataloguesAndEbooks,
            'relatedProducts' => $productsMock,
        ]);
    }

    public function show($slug)
    {
        $catalogue = $this->catalogueRepository->findBySlug($slug);

        return Inertia::render('catalogues-and-ebooks/Show', [
            'catalogue' => $catalogue,
            'pageTitle' => $catalogue['title'],
        ]);
    }
}
