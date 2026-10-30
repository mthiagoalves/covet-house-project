<?php

namespace Database\Seeders;

use App\Models\Finish;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FinishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Lista de acabamentos base para criar
        $finishesList = [
            'Standard',
            'Walnut Wood',
            'Oak Wood',
            'Polished Brass',
            'Brushed Brass',
            'Copper',
            'Nero Marquina Marble',
            'Carrara Marble',
            'Gold Plated',
            'Black'
        ];

        $createdFinishes = [];

        foreach ($finishesList as $finishName) {
            $createdFinishes[] = Finish::firstOrCreate(
                ['slug' => Str::slug($finishName)], 
                [
                    'name' => $finishName,
                    'visible' => true
                ]
            );
        }
    }
}
