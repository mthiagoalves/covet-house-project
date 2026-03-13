<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    /**
     * Retorna todos os projetos para o Grid/Hero.
     * Não carregamos a 'description' aqui para poupar memória,
     * já que ela só é lida na página individual do projeto.
     */
    public function getAllForIndex()
    {
        return Project::select('id', 'title', 'slug', 'subtitle')
            ->orderBy('id', 'desc')
            ->get();
    }

    /**
     * Busca todos os dados de um projeto específico para a página interna.
     */
    public function findBySlug(string $slug)
    {
        return Project::where('slug', $slug)
            ->with([
                // 1. Adicionamos o subcategory_id na lista de chaves!
                'products:id,brand_id,name,slug',

                // 4. Trazemos a marca
                'products.brand:id,name,slug'
            ])
            ->firstOrFail();
    }
}
