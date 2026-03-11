<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SubcategorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'casegoods' => [
                ['name' => 'Sideboards', 'slug' => 'sideboards'],
                ['name' => 'Consoles', 'slug' => 'consoles'],
                ['name' => 'Cabinets', 'slug' => 'cabinets'],
                ['name' => 'Mirrors', 'slug' => 'mirrors'],
                ['name' => 'Screens', 'slug' => 'screens'],
                ['name' => 'Bookcases', 'slug' => 'bookcases'],
            ],
            'seating' => [
                ['name' => 'Armchairs', 'slug' => 'armchairs'],
                ['name' => 'Sofas', 'slug' => 'sofas'],
                ['name' => 'Dining Chairs', 'slug' => 'dining-chairs'],
                ['name' => 'Bar Chairs', 'slug' => 'bar-chairs'],
                ['name' => 'Counter Stool', 'slug' => 'counter-stool'],
                ['name' => 'Stool and Benches', 'slug' => 'stool-and-benches'],
                ['name' => 'Other Seating', 'slug' => 'other-seating'],
            ],
            'tables' => [
                ['name' => 'Center Tables', 'slug' => 'center-tables'],
                ['name' => 'Dining Tables', 'slug' => 'dining-tables'],
                ['name' => 'Side Tables', 'slug' => 'side-tables'],
                ['name' => 'Desks', 'slug' => 'desks'],
                ['name' => 'Nightstands', 'slug' => 'nightstands'],
                ['name' => 'Other Tables', 'slug' => 'other-tables'],
            ],
            'lighting' => [
                ['name' => 'Suspension Lamps', 'slug' => 'suspension-lamps'],
                ['name' => 'Chandeliers', 'slug' => 'chandeliers'],
                ['name' => 'Pendants', 'slug' => 'pendants'],
                ['name' => 'Wall Lamps', 'slug' => 'wall-lamps'],
                ['name' => 'Table Lamps', 'slug' => 'table-lamps'],
                ['name' => 'Floor Lamps', 'slug' => 'floor-lamps'],
            ],
            'kids' => [
                ['name' => 'Beds', 'slug' => 'beds'],
                ['name' => 'Seating', 'slug' => 'seating'],
                ['name' => 'Storage', 'slug' => 'storage'],
                ['name' => 'Play & Learn', 'slug' => 'play-and-learn'],
                ['name' => 'Mirrors', 'slug' => 'mirrors'],
                ['name' => 'Lighting', 'slug' => 'lighting'],
                ['name' => 'Rugs', 'slug' => 'rugs'],
                ['name' => 'Hardware', 'slug' => 'hardware'],
            ],
            'bathrooms' => [
                ['name' => 'Bathtubs', 'slug' => 'bathtubs'],
                ['name' => 'Free-standing', 'slug' => 'free-standing'],
                ['name' => 'Washbasins', 'slug' => 'washbasins'],
            ]
        ];

        $categories = Category::whereIn('slug', array_keys($data))->get()->keyBy('slug');

        $subcategoriesToInsert = [];
        $now = Carbon::now();
        foreach ($data as $categorySlug => $subcategories) {
            if ($categories->has($categorySlug)) {
                $categoryId = $categories->get($categorySlug)->id;

                foreach ($subcategories as $sub) {
                    $subcategoriesToInsert[] = [
                        'category_id' => $categoryId,
                        'name'        => $sub['name'],
                        'slug'        => $sub['slug'],
                        'created_at'  => $now,
                        'updated_at'  => $now,
                    ];
                }
            }
        }

        // 4. QUERY 2: Insere tudo no banco de dados de uma vez só!
        if (!empty($subcategoriesToInsert)) {
            Subcategory::insert($subcategoriesToInsert);
        }
    }
}
