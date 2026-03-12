<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Inertia\Inertia;
use Illuminate\Support\Facades\File;
use App\Repositories\ProjectRepository;


class ProjectsController extends Controller
{
    public function __construct(
        private ProjectRepository $projectRepository,
        private ProductRepository $productRepository,

    ) {}

    /**
     * FUNÇÃO DE APOIO (DRY)
     * Centraliza a busca de produtos relacionados para deixar os métodos limpos.
     */
    private function getRelatedProducts()
    {
        return $this->productRepository->getBestSellersFormatted();
    }

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
            'relatedProducts' =>  $this->getRelatedProducts(),
            'allProjects' => $project,
        ]);
    }
}
