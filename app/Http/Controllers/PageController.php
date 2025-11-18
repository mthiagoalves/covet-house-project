<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    /**
     * Show page "About"
     */
    public function about()
    {
        return Inertia::render('About');
    }

    /**
     * Show page "Contact"
     */
    public function contact()
    {
        return Inertia::render('Contact');
    }
}
