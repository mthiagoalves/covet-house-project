<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CatalogueAndEbooksController extends Controller
{
    private function getMockCatalogues()
    {
        $catalogues = [];

        for ($i = 1; $i <= 19; $i++) {

            $isFeatured = ($i === 1);

            $catalogues[] = [
                'id' => $i,
                'title' => $isFeatured ? 'THE ULTIMATE INSPIRATIONS DESIGN BOOK' : "COVET HOUSE NEW CATALOGUE VOL. $i",
                'subtitle' => $isFeatured ? 'EBOOK' : 'CATALOGUE',
                'image' => $isFeatured
                    ? '/images/catalogues-and-ebooks/thumbnails/the-ultimate-inspirations-design-book-featured.png'
                    : "/images/catalogues-and-ebooks/thumbnails/catalogue-covet-house.png",
                'slug' => $isFeatured ? 'the-ultimate-inspirations-design-book' : "catalogue-$i",
                'download_link' => '#',
                'is_featured' => $isFeatured,
            ];
        }

        return collect($catalogues);
    }

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
        $allCatalogues = $this->getMockCatalogues();

        $featuredCatalogue = $allCatalogues->firstWhere('is_featured', true);

        $regularCatalogues = $allCatalogues
            ->where('is_featured', false)
            ->values()
            ->all();

        if (!$featuredCatalogue && count($regularCatalogues) > 0) {
            $featuredCatalogue = $regularCatalogues[0];
            array_shift($regularCatalogues);
        }
        return Inertia::render('catalogues-and-ebooks/Index', [
            'pageTitle' => 'Catalogues & Ebooks',
            'featuredCatalogue' => $featuredCatalogue,
            'regularCatalogues' => $regularCatalogues,
            'relatedProducts' => $productsMock,

        ]);
    }

    public function show($slug)
    {
        // Recupera o mock data (na vida real viria do banco: Catalogue::where('slug', $slug)->firstOrFail())
        $allCatalogues = $this->getMockCatalogues();

        $catalogue = $allCatalogues->firstWhere('slug', $slug);

        if (!$catalogue) {
            abort(404);
        }

        return Inertia::render('catalogues-and-ebooks/Show', [
            'catalogue' => $catalogue,
            'pageTitle' => $catalogue['title'],
        ]);
    }

    public function download(Request $request)
    {
        // 1. Validação
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'country' => 'required|string',
            'privacy_policy' => 'nullable|accepted',
        ]);
dd($request->all());
        // 2. (Opcional) Salvar Lead no Banco de Dados
        // Lead::create($validated);
        // Mail::to($request->email)->send(new EbookRequested($validated));

        // 3. Retorno
        // Opção A: Redirecionar de volta com mensagem de sucesso
        return back()->with('success', 'Thank you! Your download will start automatically.');

        // Opção B: Se quiser forçar o download direto do arquivo (se o arquivo existir)
        // return Storage::download('public/ebooks/inspirations-book.pdf');
    }
}
