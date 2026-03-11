<?php

namespace Database\Seeders;

use App\Models\Finish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $finishes = [
            ['name' => 'Standard', 'slug' => 'standard', 'is_standard' => true, 'visible' => true],
            ['name' => 'Heritage', 'slug' => 'heritage', 'is_standard' => false, 'visible' => true],
            ['name' => 'Walnut Edition', 'slug' => 'walnut', 'is_standard' => false, 'visible' => true],
        ];

        foreach ($finishes as $finish) {
            Finish::create($finish);
        }
    }
}
