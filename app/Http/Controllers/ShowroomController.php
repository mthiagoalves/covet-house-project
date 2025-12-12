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
            'heroSlides' => $heroSlides // <-- Novo dado
        ]);
    }
}
