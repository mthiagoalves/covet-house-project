<?php

namespace App\Repositories;

use App\Models\Ambiance;

class AmbianceRepository
{
    /**
     * Retorna os ambientes com os hotspots formatados para o Vue.
     */
    public function getAllFormatted()
    {
        // 1. Eager Loading apenas das colunas necessárias do produto para poupar RAM
        $ambiances = Ambiance::with('products:id,name,slug')
            ->where('is_active', true)
            ->get();

        // 2. Formata a Collection
        return $ambiances->map(function ($ambiance) {
            return [
                'name'      => $ambiance->name,
                'slug'      => $ambiance->slug,
                'is_active' => $ambiance->is_active,

                // Transforma a relação "products" na array "hotspots"
                'hotspots'  => $ambiance->products->map(function ($product) {
                    return [
                        'product_name' => $product->name,
                        'product_slug' => $product->slug,
                        // As coordenadas vêm da tabela pivot magicamente!
                        'top'          => $product->pivot->top,
                        'left'         => $product->pivot->left,
                    ];
                })->toArray(), // Garante que é um array limpo
            ];
        });
    }
}
