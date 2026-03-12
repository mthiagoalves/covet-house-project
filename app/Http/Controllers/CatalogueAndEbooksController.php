<?php

namespace App\Http\Controllers;

use App\Repositories\CataloguesAndEbooksRepository;
use App\Repositories\ProductRepository;
use Inertia\Inertia;

class CatalogueAndEbooksController extends Controller
{
    public function __construct(
        private CataloguesAndEbooksRepository $catalogueRepository,
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

    public function index()
    {
        $cataloguesAndEbooks = $this->catalogueRepository->getAllForIndex();

        $featured = $this->catalogueRepository->getFeatured();

        return Inertia::render('catalogues-and-ebooks/Index', [
            'pageTitle' => 'Catalogues & Ebooks',
            'featuredCatalogue' => $featured->first(),
            'cataloguesAndEbooks' => $cataloguesAndEbooks,
            'relatedProducts' => $this->getRelatedProducts(),
        ]);
    }

    public function show($slug)
    {
        $catalogue = $this->catalogueRepository->findBySlug($slug);

        return Inertia::render('catalogues-and-ebooks/Show', [
            'catalogue' => $catalogue,
            'pageTitle' => $catalogue['title'],
        ]);
    }
}
