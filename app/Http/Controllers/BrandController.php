<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BrandController extends Controller
{
    /**
     * Helper para retornar a lista de marcas mocada
     */
    private function getMockBrands()
    {
        return [
            [
                'name' => 'BOCA DO LOBO',
                'slug' => 'boca-do-lobo',
                'logo' => '/images/brands/boca-do-lobo.png', // Exemplo
                'description' => 'Exclusive design furniture that blends traditional craftsmanship with contemporary design.',
                'cover_image' => 'https://placehold.co/1920x800/333/fff?text=Boca+do+Lobo+Cover'
            ],
            [
                'name' => 'LUXXU',
                'slug' => 'luxxu',
                'logo' => '/images/brands/luxxu.png',
                'description' => 'A harmonious synthesis of innovation and tradition, the rare handwork techniques of the craftsman and contemporary creativity.',
                'cover_image' => 'https://placehold.co/1920x800/444/fff?text=Luxxu+Cover'
            ],
            [
                'name' => 'CIRCU',
                'slug' => 'circu',
                'logo' => '/images/brands/circu.png',
                'description' => 'Magical furniture for children.',
                'cover_image' => 'https://placehold.co/1920x800/555/fff?text=Circu+Cover'
            ],
            // ... adicione as outras marcas aqui se necessário
        ];
    }

    /**
     * Página Principal de Marcas (/brands)
     * Lista todas as marcas.
     */
    public function index()
    {
        return Inertia::render('Brands/Index', [
            'brands' => $this->getMockBrands(),
            'pageTitle' => 'Our Brands'
        ]);
    }

    /**
     * Página de Marca Individual (/brands/{slug})
     * Mostra detalhes de uma marca específica.
     */
    public function show($slug)
    {
        $brands = collect($this->getMockBrands());

        // Encontra a marca pelo slug (simulando banco de dados)
        $brand = $brands->firstWhere('slug', $slug);

        if (!$brand) {
            abort(404); // Retorna 404 se a marca não existir
        }

        return Inertia::render('Brands/Show', [
            'brand' => $brand,
            'pageTitle' => $brand['name']
        ]);
    }
}
