<?php

namespace Database\Seeders;

use App\Models\Ambiance;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmbianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ambiancesData = [
            [
                'name' => 'Classic Hallway',
                'slug' => 'ambience-pixel-cabinet-1',
                'hotspots' => [
                    [
                        'product_slug' => 'empire-wall-lamp',
                        'top' => '45%',
                        'left' => '60%',
                    ],
                    [
                        'product_slug' => 'pixel-cabinet',
                        'top' => '65%',
                        'left' => '20%',
                    ]
                ],
                'is_active' => true
            ],
            [
                'name' => 'Modern Living Room',
                'slug' => 'ambience-pixel-cabinet-2',
                'hotspots' => [
                    [
                        'product_slug' => 'empire-wall-lamp',
                        'top' => '45%',
                        'left' => '60%',
                    ],
                    [
                        'product_slug' => 'pixel-cabinet',
                        'top' => '65%',
                        'left' => '20%',
                    ]
                ],
                'is_active' => true
            ],
            [
                'name' => 'Eclectic Entryway',
                'slug' => 'ambience-pixel-cabinet-3',
                'hotspots' => [
                    [
                        'product_slug' => 'empire-wall-lamp',
                        'top' => '45%',
                        'left' => '60%',
                    ],
                    [
                        'product_slug' => 'pixel-cabinet',
                        'top' => '65%',
                        'left' => '20%',
                    ]
                ],
                'is_active' => true
            ],
            [
                'name' => 'Luxury Office',
                'slug' => 'ambience-pixel-cabinet-4',
                'hotspots' => [
                    [
                        'product_slug' => 'empire-wall-lamp',
                        'top' => '45%',
                        'left' => '60%',
                    ],
                    [
                        'product_slug' => 'pixel-cabinet',
                        'top' => '65%',
                        'left' => '20%',
                    ]
                ],
                'is_active' => true
            ],
        ];

        $productsCache = Product::all()->keyBy('slug');

        foreach ($ambiancesData as $data) {
            $ambiance = Ambiance::create([
                'name'      => $data['name'],
                'slug'      => $data['slug'],
                'is_active' => $data['is_active'] ?? true,
            ]);

            // Se houver hotspots definidos no array, tenta vinculá-los aos produtos reais
            if (isset($data['hotspots'])) {
                foreach ($data['hotspots'] as $hotspot) {

                    // Busca o produto no cache da memória
                    $product = $productsCache->get($hotspot['product_slug']);

                    if ($product) {
                        // Faz o attach (vínculo) salvando as coordenadas na tabela pivot
                        $ambiance->products()->attach($product->id, [
                            'top'  => $hotspot['top'],
                            'left' => $hotspot['left'],
                        ]);
                    } else {
                        // Avisa no console se o produto não existir no banco
                        $this->command->warn("Produto '{$hotspot['product_slug']}' não encontrado para o ambiente '{$data['name']}'. Hotspot ignorado.");
                    }
                }
            }
        }

        $this->command->info('Ambientes e Hotspots importados com sucesso!');
    }
}
