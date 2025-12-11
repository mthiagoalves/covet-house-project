<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    private function getMockShowrooms()
    {
        return [
            [
                'name' => 'COVET DOURO',
                'slug' => 'covet-douro',
                'location' => 'Porto, Portugal',
                'cover_image' => 'https://placehold.co/1920x1080/222/fff?text=Covet+Douro+Cover',
                'description' => 'An ancient three-floor waterfront mansion in Oporto, filled with remarkable architectural details that hold the glory from a noble past and traditions of Portugal.',
                'address' => 'Avenida da República, Gaia - Portugal',
                'email' => 'douro@covethouse.eu',
                'phone' => '+351 912 345 678',
                'map_url' => 'https://www.google.com/maps/embed?...', // Link do iframe do Google Maps
                'image_count' => 5 // Mock para a galeria
            ],
            [
                'name' => 'COVET TOWN',
                'slug' => 'london', // Baseado no seu menu (/showrooms/london)
                'location' => 'London, UK',
                'cover_image' => 'https://placehold.co/1920x1080/333/fff?text=Covet+London+Cover',
                'description' => 'A private showroom in the heart of London’s design district, offering an intimate design experience.',
                'address' => '1 Regent Street, London - UK',
                'email' => 'london@covethouse.eu',
                'phone' => '+44 20 1234 5678',
                'map_url' => 'https://www.google.com/maps/embed?...',
                'image_count' => 4
            ]
        ];
    }

    /**
     * Lista todos os Showrooms (/showrooms)
     */
    public function index()
    {
        return Inertia::render('Showrooms/Index', [
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

        // Lógica de Galeria (igual a Brands/Products)
        // Caminho: /images/showrooms/{slug}/gallery-{i}.jpg
        $gallery = [];
        // Se quiser usar a lógica real de arquivos:
        // $path = public_path("images/showrooms/{$slug}");
        // ... (lógica de File::exists) ...

        // Mock rápido da galeria baseado no image_count
        for ($i = 1; $i <= $showroom['image_count']; $i++) {
            // $gallery[] = "/images/showrooms/{$slug}/gallery-{$i}.jpg";
            $gallery[] = "https://placehold.co/1200x800/ccc/333?text={$showroom['name']}+{$i}";
        }

        return Inertia::render('Showrooms/Show', [
            'showroom' => $showroom,
            'gallery' => $gallery
        ]);
    }
}
