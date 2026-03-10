<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\File;
use App\Repositories\ProjectRepository;


class ProjectsController extends Controller
{
    public function __construct(
        private ProjectRepository $projectRepository
    ) {}

    private  $productsMock = [
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

    /**
     * Helper para buscar imagens dinamicamente na pasta
     */
    private function getProjectsImages($slug)
    {
        $path = public_path("images/projects/{$slug}");

        if (File::exists($path)) {
            $files = File::files($path);
        }

        return count($files);
    }

    public function index()
    {

        $allProjects = $this->projectRepository->getAllForIndex();

        return Inertia::render('projects/Index', [
            'allProjects' => $allProjects,
        ]);
    }

    public function show($slug)
    {
        $project = $this->projectRepository->findBySlug($slug);

        if (!$project) {
            abort(404, 'Project not found');
        }

        $gridImages = $this->getProjectsImages($slug);

        return Inertia::render('projects/Show', [
            'project' => $project,
            'gridImages' => $gridImages,
            'relatedProducts' => $this->productsMock,
            'allProjects' => $project,
        ]);
    }
}
