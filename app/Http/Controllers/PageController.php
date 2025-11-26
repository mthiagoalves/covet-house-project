<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
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
        $projectsSlider = [
            [
                'id' => 1,
                'image_url' => '/images/our-projects/opulence-revealed-a-journey-inside-a-classic-dubai-villa.jpg',
                'image_url_mobile' => '/images/our-projects/opulence-revealed-a-journey-inside-a-classic-dubai-villa-m.jpg',
                'title' => 'OPULENCE REVEALED',
                'subtitle' => 'A JOURNEY INSIDE A CLASSIC DUBAI VILLA',
                'cta_text' => 'DISCOVER MORE',
                'cta_link' => '/projects/opulence-revealed-a-journey-inside-a-classic-dubai-villa'
            ],
            [
                'id' => 2,
                'image_url' => '/images/our-projects/contemporary-oasis.jpg',
                'image_url_mobile' => '/images/our-projects/contemporary-oasis-m.jpg',
                'title' => 'CONTEMPORARY OASIS',
                'subtitle' => 'INSIDE A MORDERN SAINT PETERSBURG VILLA',
                'cta_text' => 'DISCOVER MORE',
                'cta_link' => '/projects/contemporary-oasis'
            ],
            [
                'id' => 3,
                'image_url' => '/images/our-projects/timeless-mansion.jpg',
                'image_url_mobile' => '/images/our-projects/timeless-mansion-m.jpg',
                'title' => 'TIMELESS MANSION',
                'subtitle' => 'unveiling refined luxury in london',
                'cta_text' => 'DISCOVER MORE',
                'cta_link' => '/projects/timeless-mansion'
            ],
            [
                'id' => 4,
                'image_url' => '/images/our-projects/parisian-dream-home.jpg',
                'image_url_mobile' => '/images/our-projects/parisian-dream-home-m.jpg',
                'title' => 'PARISIAN DREAM HOME',
                'subtitle' => 'BLEDING HISTORY, LIGHT AND MODERN BEAUTY',
                'cta_text' => 'DISCOVER MORE',
                'cta_link' => '/projects/parisian-dream-home'
            ],
            [
                'id' => 5,
                'image_url' => '/images/our-projects/an-outer-space-mission-room.jpg',
                'image_url_mobile' => '/images/our-projects/an-outer-space-mission-room-m.jpg',
                'title' => 'AN OUTER SPACE MISSION',
                'subtitle' => 'COZY STUDIO',
                'cta_text' => 'DISCOVER MORE',
                'cta_link' => '/projects/an-outer-space-mission-room'
            ],
            [
                'id' => 6,
                'image_url' => '/images/our-projects/playground-holidays.jpg',
                'image_url_mobile' => '/images/our-projects/playground-holidays-m.jpg',
                'title' => 'PLAYGROUND HOLIDAYS',
                'subtitle' => 'THE TRUE COLORS OF ADVENTURE IN VACATIONS',
                'cta_text' => 'DISCOVER MORE',
                'cta_link' => '/projects/playground-holidays'
            ]
        ];

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
            'projectsSlider' => $projectsSlider,
            'relatedProducts' => $productsMock

        ]);
    }

    public function customerService()
    {
        return Inertia::render('CustomerService');
    }
}
