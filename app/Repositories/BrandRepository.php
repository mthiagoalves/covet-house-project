<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Models\Product;

class BrandRepository
{

    /**
     * Retorna todas as marcas para a página de listagem geral (Index).
     * BEST PRACTICE: Usamos select() para não carregar o campo 'description' (que é texto longo)
     * se não formos usar na grade geral, economizando memória.
     */
    public function getAllForIndex()
    {
        return Brand::select('id', 'name', 'slug', 'subtitle', 'has_video', 'description', 'website', 'website_text', 'socials')
            ->orderBy('name', 'asc')
            ->get();
    }

    public function getProductsForBrandPage($brandId)
    {
        return Product::where('brand_id', $brandId)
            ->with('brand:id,name,slug')
            ->where('show_on_brand_page', true)
            ->select('id', 'brand_id', 'name', 'slug',)
            ->get();
    }

    /**
     * Busca uma marca específica pelo slug para a página individual (Show).
     */
    public function findBySlug(string $slug)
    {
        // firstOrFail() garante que se o slug não existir, o Laravel retorne um erro 404 automaticamente
        return Brand::where('slug', $slug)->firstOrFail();
    }
}
