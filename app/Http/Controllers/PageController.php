<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    /**
     * Mostra a página "About"
     */
    public function about()
    {
        return Inertia::render('About');
    }
}
