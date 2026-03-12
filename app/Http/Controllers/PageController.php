<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{

    public function __construct(
        private ProjectRepository $projectRepository,
        private ProductRepository $productRepository
    ) {}

    /**
     * FUNÇÃO DE APOIO (DRY)
     * Centraliza a busca de produtos relacionados para deixar os métodos limpos.
     */
    private function getRelatedProducts()
    {
        return $this->productRepository->getBestSellersFormatted();
    }

    /** Show Homepage **/

    public function index()
    {
        return Inertia::render('Homepage');
    }

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
        return Inertia::render('Contact', [
            'relatedProducts' => $this->getRelatedProducts(),
        ]);
    }

    /**
     * Show page "Interior Design Service"
     */
    public function interiorDesignService()
    {
        $allProjects = $this->projectRepository->getAllForIndex();

        return Inertia::render('InteriorDesignService', [
            'allProjects' => $allProjects,
            'relatedProducts' => $this->getRelatedProducts(),

        ]);
    }

    public function customerService()
    {
        return Inertia::render('CustomerService');
    }
}
