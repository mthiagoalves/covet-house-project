<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectsController extends Controller
{

    public function index()
    {
        $allProjects = [
            [
                'title' => 'A MODERN HAVEN BY THE LAKE',
                'subtitle' => 'A SWISS VILLA BETWEEN GENEVA AND LAUSANNE',
                'slug' => 'a-modern-haven-by-the-lake',

            ],
            [
                'title' => 'Opulence Revealed',
                'subtitle' => 'A Journey Inside a Classic Dubai Villa',
                'slug' => 'opulence-revealed-a-journey-inside-a-classic-dubai-villa',

            ],
            [
                'title' => 'CONTEMPORARY OASIS',
                'subtitle' => 'INSIDE A MODERN SAINT PETERSBURG VILLA',
                'slug' => 'contemporary-oasis',

            ],
            [
                'title' => 'An Outer Space Misson',
                'subtitle' => 'With Cozy Studio',
                'slug' => 'an-outer-space-mission-room',

            ],
            [
                'title' => 'Playground Holidays',
                'subtitle' => 'The True Colors of Adventure in Vacations',
                'slug' => 'playground-holidays',

            ],
            [
                'title' => 'Timeless Mansion',
                'subtitle' => 'Unveiling Refined Luxury In London',
                'slug' => 'timeless-mansion',

            ],
            [
                'title' => 'Parisian Dream Home',
                'subtitle' => 'Blending History, Light and Modern Beauty',
                'slug' => 'parisian-dream-home',

            ],
        ];

        return Inertia::render('projects/Index', [
            'allProjects' => $allProjects,
        ]);
    }

    public function show($slug)
    {
        return Inertia::render('projects/Show', [
            'slug' => $slug,
        ]);
    }
}
