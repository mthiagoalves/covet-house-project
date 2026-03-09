<?php

namespace App\Repositories;

use App\Models\Catalogue;
use App\Models\CatalogueAndEbooks;

class CatalogueRepository
{
    /**
     * Retorna todos os catálogos ordenados (ex: mais recentes primeiro ou por destaque)
     */
    public function getAllForIndex()
    {
        return CatalogueAndEbooks::select('id', 'title', 'subtitle', 'type', 'slug', 'is_featured')
            ->orderBy('is_featured', 'desc')
            ->orderBy('id', 'desc')
            ->get();
    }

    /**
     * Busca um catálogo específico pelo slug
     */
    public function findBySlug(string $slug)
    {
        return CatalogueAndEbooks::where('slug', $slug)->firstOrFail();
    }
}
