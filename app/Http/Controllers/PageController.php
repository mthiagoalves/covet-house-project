<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{

    public function __construct(
        private ProjectRepository $projectRepository
    ) {}

    /** Show Homepage **/

    public function index()
    {
        return Inertia::render('Homepage');
    }

    /**
     * Show page "About"
     */
    public function about()
    {
        return Inertia::render('About');
    }

    /**
     * Show page "Contact"
     */
    public function contact()
    {
        // Dados mocados para o "Related Products" da página de contacto
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

        return Inertia::render('Contact', [
            'relatedProducts' => $productsMock,
        ]);
    }

    /**
     * Show page "Interior Design Service"
     */
    public function interiorDesignService()
    {
        $allProjects = $this->projectRepository->getAllForIndex();

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

        return Inertia::render('InteriorDesignService', [ // Ou o nome da sua página
            'allProjects' => $allProjects,
            'relatedProducts' => $productsMock

        ]);
    }

    public function customerService()
    {
        return Inertia::render('CustomerService');
    }
}
