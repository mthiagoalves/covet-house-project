<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;

class ShowroomController extends Controller
{
    private function getMockShowrooms()
    {
        return [
            [
                'name' => 'COVET DOURO',
                'slug' => 'covet-douro',
                'title_form' => 'SCHEDULE YOUR VISIT TO COVET DOURO',
                'location' => 'Porto, Portugal',
                'cover_image' => '/images/showrooms/covet-douro/covet-douro.jpg',
                'description' => 'An ancient three-floor waterfront mansion in Oporto, filled with remarkable architectural details that hold the glory from a noble past and traditions of Portugal.',
                'address' => 'Avenida da República, Gaia - Portugal',
                'email' => 'douro@covethouse.eu',
                'phone' => '+351 912 345 678',
            ],
            [
                'name' => 'Curated Showroom - The Ultimate Luxury Experience',
                'slug' => 'curated-showroom-the-ultimate-luxury-experience',
                'location' => 'Porto, Portugal',
                'title_form' => 'Covet House`s brand new 4`000 sqm showroom',
                'cover_image' => '/images/showrooms/the-ultimate-curated-design-digital-showroom/the-ultimate-curated-design-digital-showroom.jpg',
                'description' => 'A private showroom in the heart of London’s design district, offering an intimate design experience.',
                'address' => '1 Regent Street, London - UK',
                'email' => 'london@covethouse.eu',
                'phone' => '+44 20 1234 5678',
            ]
        ];
    }

    /**
     * Helper para buscar imagens dinamicamente na pasta
     */
    private function getShowroomImages($slug)
    {
        $path = public_path("images/showrooms/ambiences-section/{$slug}");
        $images = [];

        if (File::exists($path)) {
            $files = File::files($path);

            natsort($files);

            foreach ($files as $file) {

                $images[] = "/images/showrooms/ambiences-section/{$slug}/" . $file->getFilename();
            }
        }


        if (empty($images)) {
            return [
                "https://placehold.co/1200x800/ccc/333?text={$slug}+1",
                "https://placehold.co/1200x800/ccc/333?text={$slug}+2",
            ];
        }

        return $images;
    }

    /**
     * AQUI VOCÊ DEFINE TUDO MANUALMENTE
     * O índice (0, 1, 2...) corresponde à ordem das imagens na pasta (alfabética).
     */
    private function getManualHotspots()
    {
        return [
            'covet-douro' => [

                0 => [
                    [
                        'product_name' => 'Lapiaz White Headboard',
                        'product_slug' => 'imperfectio-sofa',
                        'top' => '33%',
                        'left' => '50%'
                    ],
                    [
                        'product_name' => 'Lapiaz Table Lamp',
                        'product_slug' => 'lapiaz-table-lamp',
                        'top' => '40%',
                        'left' => '19%'
                    ],
                    [
                        'product_name' => 'Frank Nightstand',
                        'product_slug' => 'frank-nightstand',
                        'top' => '52%',
                        'left' => '80%'
                    ]
                ],
                1 => [
                    [
                        'product_name' => 'nº 11 Dining Chair',
                        'product_slug' => 'n11-dining-chair',
                        'top' => '69%',
                        'left' => '14%'
                    ],
                    [
                        'product_name' => 'Empire Dining Table',
                        'product_slug' => 'empire-dining-table',
                        'top' => '56%',
                        'left' => '43%'
                    ],
                    [
                        'product_name' => 'Emporium Gold Fur Chair',
                        'product_slug' => 'emporium-gold-fur-chair',
                        'top' => '69%',
                        'left' => '80%'
                    ],
                    [
                        'product_name' => 'Guggenheim Patch Cabinet',
                        'product_slug' => 'guggenheim-patch-cabinet',
                        'top' => '36%',
                        'left' => '13%'
                    ],
                    [
                        'product_name' => 'Palatino Slim Display Case',
                        'product_slug' => 'palatino-slim-display-case',
                        'top' => '34%',
                        'left' => '80%'
                    ],
                    [
                        'product_name' => 'Charles Suspension Lamp',
                        'product_slug' => 'charles-suspension-lamp',
                        'top' => '20%',
                        'left' => '35%'
                    ],
                ],

                // Imagem 3 (Index 2)
                2 => [
                    [
                        'product_name' => 'Maya Armchair',
                        'product_slug' => 'maya-armchair',
                        'top' => '60%',
                        'left' => '20%'
                    ]
                ],
                3 => [
                    [
                        'product_name' => 'Sika Armchair',
                        'product_slug' => 'sika-armchair',
                        'top' => '60%',
                        'left' => '76%'
                    ],
                    [
                        'product_name' => 'Amy Floor Lamp',
                        'product_slug' => 'amy-floor-lamp',
                        'top' => '36%',
                        'left' => '51%'
                    ],
                    [
                        'product_name' => 'Equator Copper Globe Bar',
                        'product_slug' => 'equator-copper-globe-bar',
                        'top' => '54%',
                        'left' => '14%'
                    ],
                    [
                        'product_name' => 'Symphony Cabinet',
                        'product_slug' => 'symphony-cabinet',
                        'top' => '28%',
                        'left' => '29%'
                    ],
                ],
                4 => [
                    [
                        'product_name' => 'Coleccionista Bookcase',
                        'product_slug' => 'coleccionista-bookcase',
                        'top' => '10%',
                        'left' => '22%'
                    ],
                    [
                        'product_name' => 'Sequoia Center Table',
                        'product_slug' => 'sequoia-center-table',
                        'top' => '72%',
                        'left' => '41%'
                    ],
                ],
                5 => [
                    [
                        'product_name' => 'Cyrus Table Lamp',
                        'product_slug' => 'cyrus-table-lamp',
                        'top' => '40%',
                        'left' => '56%'
                    ],
                    [
                        'product_name' => 'Sophia Bed',
                        'product_slug' => 'sophia-bed',
                        'top' => '40%',
                        'left' => '45%'
                    ],
                ],
                6 => [
                    [
                        'product_name' => 'Venice Mirror',
                        'product_slug' => 'venice-mirror',
                        'top' => '16%',
                        'left' => '20%'
                    ],
                    [
                        'product_name' => 'Sika Armchair',
                        'product_slug' => 'sika-armchair',
                        'top' => '52%',
                        'left' => '41%'
                    ],
                    [
                        'product_name' => 'Sinatra Floor Lamp',
                        'product_slug' => 'sinatra-floor-lamp',
                        'top' => '30%',
                        'left' => '63%'
                    ],
                    [
                        'product_name' => 'Bryce Side Table',
                        'product_slug' => 'bryce-side-table',
                        'top' => '73%',
                        'left' => '21%'
                    ],
                ],
                7 => [
                    [
                        'product_name' => 'Luray Side Table',
                        'product_slug' => 'luray-side-table',
                        'top' => '66%',
                        'left' => '7%'
                    ],
                    [
                        'product_name' => 'Hanna Floor Lamp',
                        'product_slug' => 'hanna-floor-lamp',
                        'top' => '29%',
                        'left' => '32%'
                    ],
                    [
                        'product_name' => 'Botti Floor Lamp',
                        'product_slug' => 'botti-floor-lamp',
                        'top' => '29%',
                        'left' => '64%'
                    ],
                    [
                        'product_name' => 'Malay 2 SEAT SOFA',
                        'product_slug' => 'malay-2-seat-sofa',
                        'top' => '57%',
                        'left' => '88%'
                    ],
                    [
                        'product_name' => 'Lallan Center Table',
                        'product_slug' => 'lallan-center-table',
                        'top' => '74%',
                        'left' => '58%'
                    ],
                ],
            ],
            'curated-showroom-the-ultimate-luxury-experience' => [

                0 => [
                    [
                        'product_name' => 'Lapiaz White Headboard',
                        'product_slug' => 'imperfectio-sofa',
                        'top' => '33%',
                        'left' => '50%'
                    ],
                    [
                        'product_name' => 'Lapiaz Table Lamp',
                        'product_slug' => 'lapiaz-table-lamp',
                        'top' => '40%',
                        'left' => '19%'
                    ],
                    [
                        'product_name' => 'Frank Nightstand',
                        'product_slug' => 'frank-nightstand',
                        'top' => '52%',
                        'left' => '80%'
                    ]
                ],
                1 => [
                    [
                        'product_name' => 'nº 11 Dining Chair',
                        'product_slug' => 'n11-dining-chair',
                        'top' => '69%',
                        'left' => '14%'
                    ],
                    [
                        'product_name' => 'Empire Dining Table',
                        'product_slug' => 'empire-dining-table',
                        'top' => '56%',
                        'left' => '43%'
                    ],
                    [
                        'product_name' => 'Emporium Gold Fur Chair',
                        'product_slug' => 'emporium-gold-fur-chair',
                        'top' => '69%',
                        'left' => '80%'
                    ],
                    [
                        'product_name' => 'Guggenheim Patch Cabinet',
                        'product_slug' => 'guggenheim-patch-cabinet',
                        'top' => '36%',
                        'left' => '13%'
                    ],
                    [
                        'product_name' => 'Palatino Slim Display Case',
                        'product_slug' => 'palatino-slim-display-case',
                        'top' => '34%',
                        'left' => '80%'
                    ],
                    [
                        'product_name' => 'Charles Suspension Lamp',
                        'product_slug' => 'charles-suspension-lamp',
                        'top' => '20%',
                        'left' => '35%'
                    ],
                ],

                // Imagem 3 (Index 2)
                2 => [
                    [
                        'product_name' => 'PIXEL CABINET',
                        'product_slug' => 'pixel-cabinet',
                        'top' => '50%',
                        'left' => '50%'
                    ]
                ],
            ],

        ];
    }

    private function getShowroomGridImages($slug)
    {
        $path = public_path("images/showrooms/grid-section/{$slug}");
        $gridData = [];

        $fullConfig = $this->getManualHotspots();

        // 2. Filtra APENAS a configuração do showroom atual usando o $slug
        // Se não encontrar o slug no array, usa um array vazio []
        $showroomConfig = $fullConfig[$slug] ?? [];
        if (File::exists($path)) {
            $files = File::files($path);
            natsort($files); // Ordena: 1.jpg, 2.jpg...

            // Reindexa o array para garantir que começa do 0 sequencialmente
            $files = array_values($files);

            foreach ($files as $index => $file) {
                $hotspots = $showroomConfig[$index] ?? [];
                $gridData[] = [
                    'url' => "/images/showrooms/grid-section/{$slug}/" . $file->getFilename(),
                    'hotspots' => $hotspots
                ];
            }
        }

        // Mock de Fallback (apenas se a pasta estiver vazia)
        if (empty($gridData)) {
            for ($i = 0; $i < 8; $i++) {
                $gridData[] = [
                    'url' => "https://placehold.co/800x800/e5e5e5/333?text=Grid+" . ($i + 1),
                    'hotspots' => []
                ];
            }
        }

        return $gridData;
    }

    /**
     * Lista todos os Showrooms (/showrooms)
     */
    public function index()
    {
        return Inertia::render('showrooms/Index', [
            'pageTitle' => 'Our Showrooms',
            'showrooms' => $this->getMockShowrooms(),
            'hero' => [
                'imageUrl' => 'https://placehold.co/1920x800/111/fff?text=Showrooms+Hero',
                'title' => 'EXPERIENCE LUXURY DESIGN<br/><b>VISIT OUR SHOWROOMS</b>',
                'altText' => 'Covet House Showrooms'
            ]
        ]);
    }

    /**
     * Detalhe do Showroom (/showrooms/{slug})
     */
    public function show($slug)
    {
        $showrooms = collect($this->getMockShowrooms());
        $showroom = $showrooms->firstWhere('slug', $slug);

        if (!$showroom) {
            abort(404);
        }

        $gallery = $this->getShowroomImages($slug);

        $gridImages = $this->getShowroomGridImages($slug);

        $heroSlides = [];

        if ($slug === 'covet-douro') {
            $heroSlides = [
                [
                    'url' => "/videos/showrooms/{$slug}",
                    'title' => $showroom['name'],
                    'subtitle' => 'SHOWROOM',
                    'link_url' => 'https://covethouse.eu/virtual-tours/douro/',

                ],
                [
                    'url' => "/videos/showrooms/virtual-tour-{$slug}",
                    'title' => 'VITUAL TOUR',
                    'subtitle' => '360º',
                    'link_url' => 'https://www.youtube.com/watch?v=q8kllBLg0LQ',
                ]
            ];
        } else {
            $heroSlides = [
                [
                    'url' => "/videos/showrooms/{$slug}",
                    'title' => $showroom['name'],
                    'subtitle' => 'SHOWROOM',
                    'link_url' => '',
                ]
            ];
        }

        return Inertia::render('showrooms/Show', [
            'showroom' => $showroom,
            'gallery' => $gallery,
            'heroSlides' => $heroSlides,
            'gridImages' => $gridImages
        ]);
    }
}
