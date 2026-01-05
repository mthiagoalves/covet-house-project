<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CatalogueAndEbooksController extends Controller
{
    // Função auxiliar para Mock Data
    private function getMockCatalogues()
    {
        $catalogues = [];

        // Vamos gerar 18 itens para ter bastante conteúdo para o Load More
        for ($i = 1; $i <= 18; $i++) {
            $catalogues[] = [
                'id' => $i,
                'title' => $i === 1 ? 'THE ULTIMATE INSPIRATIONS DESIGN BOOK' : "COVET HOUSE NEW CATALOGUE VOL. $i",
                'subtitle' => $i === 1 ? 'EBOOK' : 'CATALOGUE',
                'image' => $i === 1
                    ? '/images/catalogues-and-ebooks/the-ultimate-inspirations-design-book-banner-top-m.jpg' // Imagem real p/ destaque
                    : "https://placehold.co/400x500/e5e5e5/333?text=Catalogue+$i",
                'slug' => "catalogue-$i",
                'download_link' => '#'
            ];
        }

        return $catalogues;
    }

    public function index()
    {
        $allCatalogues = $this->getMockCatalogues();

        // Separa o primeiro como destaque e o resto como lista
        $featuredCatalogue = $allCatalogues[0];
        $regularCatalogues = array_slice($allCatalogues, 1);
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
