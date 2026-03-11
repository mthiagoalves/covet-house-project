<?php

namespace App\Repositories;

use App\Models\Subcategory;

class SubcategoryRepository
{
    /**
     * Retorna todas as subcategorias (opcionalmente carregando o nome da categoria pai)
     */
    public function getAll()
    {
        return Subcategory::select('id', 'category_id', 'name', 'slug')
            ->with('category:id,name,slug') // Traz a categoria pai junto!
            ->orderBy('name', 'asc')
            ->get();
    }

    /**
     * Busca uma subcategoria específica pelo slug
     */
    public function findBySlug(string $slug)
    {
        return Subcategory::where('slug', $slug)
            ->with('category:id,name,slug')
            ->firstOrFail();
    }

    /**
     * NOVO: Busca todas as subcategorias de uma Categoria Específica.
     * Excelente para fazer filtros de menu no frontend!
     */
    public function getByCategory(int $categoryId)
    {
        return Subcategory::where('category_id', $categoryId)
            ->orderBy('name', 'asc')
            ->get();
    }
}
