<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CatalogueAndEbooksController extends Controller
{
    public function index()
    {
        return Inertia::render('catalogues-and-ebooks/Index', [
            'pageTitle' => 'Catalogues & Ebooks',
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
