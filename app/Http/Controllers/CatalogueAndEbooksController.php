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
                'slug' => "catalogue-$i",
                'download_link' => '#',
                'is_featured' => $isFeatured,
            ];
        }

        return collect($catalogues);
    }

    public function index()
    {
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
        ]);
    }

    public function download(Request $request)
    {
        // 1. Validação
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|string',
            'privacy_policy' => 'accepted', // Garante que o checkbox foi marcado
        ]);

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
