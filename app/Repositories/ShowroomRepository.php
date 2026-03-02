<?php

namespace App\Repositories;

use App\Models\Showroom;

class ShowroomRepository
{
    /**
     * Retorna os showrooms para a listagem (ex: grade de showrooms).
     * Selecionamos apenas o necessário para não trafegar dados inúteis.
     */
    public function getAllForIndex()
    {
        return Showroom::select('id', 'name', 'slug', 'location', 'title_form', 'description', 'address', 'email', 'phone')
            ->orderBy('name', 'asc')
            ->get();
    }

    /**
     * Busca os detalhes completos de um showroom.
     */
    public function findBySlug(string $slug)
    {
        return Showroom::where('slug', $slug)->firstOrFail();
    }
}
