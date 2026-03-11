<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    /**
     * Retorna todas as categorias (útil para montar o Menu do site)
     */
    public function getAll()
    {
        return Category::select('id', 'name', 'slug')
            ->orderBy('name', 'asc')
            ->get();
    }

    /**
     * Busca a categoria pelo slug
     */
    public function findBySlug(string $slug)
    {
        return Category::where('slug', $slug)->select('name', 'slug')->firstOrFail();
    }

    /**
     * Exemplo para o Futuro: Buscar a categoria e já trazer todas as subcategorias dela
     */
    public function findWithSubcategories(string $slug)
    {
        // O método "with" faz o Eager Loading, evitando dezenas de queries separadas no banco
        return Category::with('subcategories')->where('slug', $slug)->firstOrFail();
    }
}
