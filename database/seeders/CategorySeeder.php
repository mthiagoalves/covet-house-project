<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Casegoods', 'slug' => 'casegoods'],
            ['name' => 'Seating', 'slug' => 'seating'],
            ['name' => 'Tables', 'slug' => 'tables'],
            ['name' => 'Lighting', 'slug' => 'lighting'],
            ['name' => 'Kids', 'slug' => 'kids'],
            ['name' => 'Bathrooms', 'slug' => 'bathrooms'],
            ['name' => 'Rugs', 'slug' => 'rugs'],
            ['name' => 'Hardware', 'slug' => 'hardware'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
