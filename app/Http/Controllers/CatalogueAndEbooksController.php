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
}
