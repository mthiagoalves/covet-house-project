<?php

namespace App\Repositories;

use App\Models\Catalogue;
use App\Models\CataloguesAndEbooks;

class CataloguesAndEbooksRepository
{
    /**
     * Retorna todos os catálogos ordenados (ex: mais recentes primeiro ou por destaque)
     */
    public function getAllForIndex()
    {
        return CataloguesAndEbooks::select('title', 'type', 'slug', 'external_link', 'is_featured')
            ->whereNot('is_featured', true)
            ->orderBy('id', 'asc')
            ->get();
    }

    /**
     * Opcional: Retorna apenas os destaques (útil para o Hero Banner)
     */
    public function getFeatured()
    {
        return CataloguesAndEbooks::select('title', 'type', 'slug', 'external_link', 'is_featured')
            ->where('is_featured', true)
            ->orderBy('id', 'asc')
            ->get();
    }

    /**
     * Busca um catálogo específico pelo slug
     */
    public function findBySlug(string $slug)
    {
        return CataloguesAndEbooks::where('slug', $slug)->firstOrFail();
    }
}
