<?php

namespace Database\Seeders;

use App\Models\Showroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShowroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $showrooms = [
            [
                'name' => 'COVET DOURO',
                'slug' => 'covet-douro',
                'title_form' => 'SCHEDULE YOUR VISIT TO COVET DOURO',
                'location' => 'Porto, Portugal',
                'description' => 'An ancient three-floor waterfront mansion in Oporto, filled with remarkable architectural details that hold the glory from a noble past and traditions of Portugal.',
                'address' => 'Avenida da República, Gaia - Portugal',
                'email' => 'douro@covethouse.eu',
                'phone' => '+351 912 345 678',
            ],
            [
                'name' => 'Curated Showroom - The Ultimate Luxury Experience',
                'slug' => 'curated-showroom-the-ultimate-luxury-experience',
                'title_form' => 'Covet House`s brand new 4`000 sqm showroom',
                'location' => 'Porto, Portugal',
                'description' => 'A private showroom in the heart of London’s design district, offering an intimate design experience.',
                'address' => '1 Regent Street, London - UK',
                'email' => 'london@covethouse.eu',
                'phone' => '+44 20 1234 5678',
            ]
        ];

        // Salvando um por um para o Eloquent gerenciar o created_at / updated_at
        foreach ($showrooms as $showroom) {
            Showroom::create($showroom);
        }
    }
}
