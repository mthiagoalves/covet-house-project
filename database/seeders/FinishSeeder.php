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
            ['name' => 'Standard', 'slug' => 'standard', 'visible' => true],
            ['name' => 'Heritage', 'slug' => 'heritage', 'visible' => true],
            ['name' => 'Walnut Edition', 'slug' => 'walnut', 'visible' => true],
        ];

        foreach ($finishes as $finish) {
            Finish::create($finish);
        }
    }
}
