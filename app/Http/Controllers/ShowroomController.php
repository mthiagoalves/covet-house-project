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
                    'title' => 'Boca do Lobo',
                    'hotspots' => [
                        [
                            'product_name' => 'Lapiaz Console',
                            'product_slug' => 'lapiaz-console',
                            'top' => '47%',
                            'left' => '8%'
                        ],
                        [
                            'product_name' => 'Glance Mirror',
                            'product_slug' => 'glance-mirror',
                            'top' => '23%',
                            'left' => '17%'
                        ],
                        [
                            'product_name' => 'Symphony Cabinet',
                            'product_slug' => 'symphony-cabinet',
                            'top' => '37%',
                            'left' => '36%'
                        ],
                        [
                            'product_name' => 'Hera Suspension Lamp',
                            'product_slug' => 'hera-suspension-lamp',
                            'top' => '16%',
                            'left' => '46%'
                        ],
                        [
                            'product_name' => 'Metamorphosis Dining Table',
                            'product_slug' => 'metamorphosis-dining-table',
                            'top' => '51%',
                            'left' => '46%'
                        ],
                        [
                            'product_name' => 'Lapiaz Mirror',
                            'product_slug' => 'lapiaz-mirror',
                            'top' => '27%',
                            'left' => '77%'
                        ],
                        [
                            'product_name' => 'Voltaire Walnut Sideboard',
                            'product_slug' => 'voltaire-walnut-sideboard',
                            'top' => '47%',
                            'left' => '81%'
                        ],
                        [
                            'product_name' => 'Nº11 Dining Chair',
                            'product_slug' => 'n11-dining-chair',
                            'top' => '65%',
                            'left' => '74%'
                        ],
                    ]

                ],
                1 => [
                    'title' => 'Luxxu',
                    'hotspots' => [
                        [
                            'product_name' => 'Littus Dining Table',
                            'product_slug' => 'littus-dining-table',
                            'top' => '72%',
                            'left' => '50%'
                        ],
                        [
                            'product_name' => 'Tenor Sideboard',
                            'product_slug' => 'tenor-sideboard',
                            'top' => '57%',
                            'left' => '16%'
                        ],
                        [
                            'product_name' => 'Empire II Suspension Lamp',
                            'product_slug' => 'empire-ii-suspension-lamp',
                            'top' => '21%',
                            'left' => '45%'
                        ],
                    ]
                ],
                2 => [
                    'title' => 'Maison Valentina',
                    'hotspots' => [
                        [
                            'product_name' => 'Darian Freestanding',
                            'product_slug' => 'darian-freestanding',
                            'top' => '49%',
                            'left' => '10%'
                        ],
                        [
                            'product_name' => 'Colosseum Mirror',
                            'product_slug' => 'colosseum-mirror',
                            'top' => '29%',
                            'left' => '22%'
                        ],
                    ]
                ],
                3 => [
                    'title' => 'Circu',
                    'hotspots' => [
                        [
                            'product_name' => 'Fantasy Air Balloon Lounge',
                            'product_slug' => 'fantasy-air-balloon-lounge',
                            'top' => '34%',
                            'left' => '43%'
                        ],
                    ]
                ],
                4 => [
                    'title' => 'Brabbu',
                    'hotspots' => [
                        [
                            'product_name' => 'Ardara Console',
                            'product_slug' => 'ardara-console',
                            'top' => '72%',
                            'left' => '54%'
                        ],
                        [
                            'product_name' => 'Cay Rectangular Mirror',
                            'product_slug' => 'cay-rectangular-mirror',
                            'top' => '17%',
                            'left' => '23%'
                        ],
                    ]
                ],
                5 => [
                    'title' => 'Caffe Latte',
                    'hotspots' => [
                        [
                            'product_name' => 'Maya Armchair',
                            'product_slug' => 'maya-armchair',
                            'top' => '70%',
                            'left' => '11%'
                        ],
                        [
                            'product_name' => 'Capuchin Modular Sofa',
                            'product_slug' => 'imperfectio-sofa',
                            'top' => '63%',
                            'left' => '39%'
                        ],
                        [
                            'product_name' => 'Matheny Round Suspension',
                            'product_slug' => 'matheny-round-suspension',
                            'top' => '21%',
                            'left' => '44%'
                        ],
                    ]
                ],
                6 => [
                    'title' => 'Delightfull & Essential home',
                    'hotspots' => [
                        [
                            'product_name' => 'Altura Mirror',
                            'product_slug' => 'altura-mirror',
                            'top' => '32%',
                            'left' => '8%'
                        ],
                        [
                            'product_name' => 'Amy Floor Lamp',
                            'product_slug' => 'amy-floor-lamp',
                            'top' => '28%',
                            'left' => '22%'
                        ],
                        [
                            'product_name' => 'Altura Mirror',
                            'product_slug' => 'altura-mirror',
                            'top' => '67%',
                            'left' => '26%'
                        ],
                        [
                            'product_name' => 'Craig Console Table',
                            'product_slug' => 'craig-console-table',
                            'top' => '32%',
                            'left' => '8%'
                        ],
                        [
                            'product_name' => 'Katia Table Lamp',
                            'product_slug' => 'katia-table-lamp',
                            'top' => '52%',
                            'left' => '37%'
                        ],
                        [
                            'product_name' => 'Anthony Sideboard',
                            'product_slug' => 'anthony-sideboard',
                            'top' => '42%',
                            'left' => '48%'
                        ],
                        [
                            'product_name' => 'Turner Table Lamp',
                            'product_slug' => 'turner-table-lamp',
                            'top' => '32%',
                            'left' => '58%'
                        ],
                        [
                            'product_name' => 'Ike Suspension Lamp',
                            'product_slug' => 'ike-suspension-lamp',
                            'top' => '20%',
                            'left' => '52%'
                        ],
                    ]
                ],
                7 => [
                    'title' => 'Rug`Society',
                    'hotspots' => [
                        [
                            'product_name' => 'Turner Table Lamp',
                            'product_slug' => 'turner-table-lamp',
                            'top' => '38%',
                            'left' => '3%'
                        ],
                        [
                            'product_name' => 'Iguazu Armchair',
                            'product_slug' => 'iguazu-armchair',
                            'top' => '53%',
                            'left' => '11%'
                        ],
                        [
                            'product_name' => 'Botti Side Table',
                            'product_slug' => 'botti-side-table',
                            'top' => '61%',
                            'left' => '22%'
                        ],
                        [
                            'product_name' => 'Imperial Snake Rug',
                            'product_slug' => 'imperial-snake-rug',
                            'top' => '82%',
                            'left' => '19%'
                        ],
                        [
                            'product_name' => 'Charla Dining Chair',
                            'product_slug' => 'charla-dining-chair',
                            'top' => '65%',
                            'left' => '42%'
                        ],
                        [
                            'product_name' => 'Apotheosis XL Dining Table',
                            'product_slug' => 'apothosis-xl-dining-table',
                            'top' => '54%',
                            'left' => '39%'
                        ],
                        [
                            'product_name' => 'Moka Dining Chair',
                            'product_slug' => 'moka-dining-chair',
                            'top' => '57%',
                            'left' => '66%'
                        ],
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
        $showroomConfig = $fullConfig[$slug] ?? [];

        $showroomConfig = $fullConfig[$slug] ?? [];
        if (File::exists($path)) {
            $files = File::files($path);
            natsort($files);

            $files = array_values($files);

            foreach ($files as $index => $file) {
                $config = $showroomConfig[$index] ?? [];

                $hotspots = [];
                $title = null;
                if (isset($config['hotspots'])) {
                    $hotspots = $config['hotspots'];
                    $title = $config['title'] ?? null;
                } else {
                    $hotspots = $config;
                }

                $gridData[] = [
                    'url' => "/images/showrooms/grid-section/{$slug}/" . $file->getFilename(),
                    'hotspots' => $hotspots,
                    'title' => $title
                ];
            }
        }

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
