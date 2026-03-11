<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $mockProducts = [
            [
                'type' => 'product',
                'name' => 'Pixel Cabinet',
                'slug' => 'pixel-cabinet',
                'is_new' => true,
                'has_stock' => false,
                'is_best_seller' => true,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Sideboards',
                        'slug' => 'sideboards'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => true,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Sideboards',
                        'slug' => 'sideboards'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => true,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Sideboards',
                        'slug' => 'sideboards'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Sideboards',
                        'slug' => 'sideboards'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Sideboards',
                        'slug' => 'sideboards'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Sideboards',
                        'slug' => 'sideboards'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Sideboards',
                        'slug' => 'sideboards'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Sideboards',
                        'slug' => 'sideboards'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Sideboards',
                        'slug' => 'sideboards'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Consoles',
                        'slug' => 'consoles'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Consoles',
                        'slug' => 'consoles'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Consoles',
                        'slug' => 'consoles'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Consoles',
                        'slug' => 'consoles'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Consoles',
                        'slug' => 'consoles'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Consoles',
                        'slug' => 'consoles'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Cabinets',
                        'slug' => 'cabinets'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Cabinets',
                        'slug' => 'cabinets'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Cabinets',
                        'slug' => 'cabinets'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Cabinets',
                        'slug' => 'cabinets'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Cabinets',
                        'slug' => 'cabinets'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Cabinets',
                        'slug' => 'cabinets'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Mirrors',
                        'slug' => 'mirrors'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Mirrors',
                        'slug' => 'mirrors'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Mirrors',
                        'slug' => 'mirrors'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Mirrors',
                        'slug' => 'mirrors'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Mirrors',
                        'slug' => 'mirrors'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Mirrors',
                        'slug' => 'mirrors'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Bookcases',
                        'slug' => 'bookcases'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Bookcases',
                        'slug' => 'bookcases'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Bookcases',
                        'slug' => 'bookcases'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Bookcases',
                        'slug' => 'bookcases'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Bookcases',
                        'slug' => 'bookcases'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Bookcases',
                        'slug' => 'bookcases'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Screens',
                        'slug' => 'screens'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Screens',
                        'slug' => 'screens'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Screens',
                        'slug' => 'screens'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Screens',
                        'slug' => 'screens'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Screens',
                        'slug' => 'screens'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Screens',
                        'slug' => 'screens'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => true,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Sofas',
                        'slug' => 'sofas'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => true,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Sofas',
                        'slug' => 'sofas'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => true,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Sofas',
                        'slug' => 'sofas'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Sofas',
                        'slug' => 'sofas'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Sofas',
                        'slug' => 'sofas'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Sofas',
                        'slug' => 'sofas'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Armchairs',
                        'slug' => 'armchairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Armchairs',
                        'slug' => 'armchairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Armchairs',
                        'slug' => 'armchairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Armchairs',
                        'slug' => 'armchairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Armchairs',
                        'slug' => 'armchairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Armchairs',
                        'slug' => 'armchairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Dining Chairs',
                        'slug' => 'dining-chairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Dining Chairs',
                        'slug' => 'dining-chairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Dining Chairs',
                        'slug' => 'dining-chairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Dining Chairs',
                        'slug' => 'dining-chairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Dining Chairs',
                        'slug' => 'dining-chairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Dining Chairs',
                        'slug' => 'dining-chairs'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Counter Stool',
                        'slug' => 'counter-stool'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Counter Stool',
                        'slug' => 'counter-stool'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Counter Stool',
                        'slug' => 'counter-stool'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Counter Stool',
                        'slug' => 'counter-stool'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Counter Stool',
                        'slug' => 'counter-stool'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Counter Stool',
                        'slug' => 'counter-stool'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Stools And Benches',
                        'slug' => 'stools-and-benches'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Stools And Benches',
                        'slug' => 'stools-and-benches'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Stools And Benches',
                        'slug' => 'stools-and-benches'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Stools And Benches',
                        'slug' => 'stools-and-benches'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Stools And Benches',
                        'slug' => 'stools-and-benches'
                    ]
                ]
            ],
            [
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Stools And Benches',
                        'slug' => 'stools-and-benches'
                    ]
                ]
            ],
        ];

        $brandsCache = Brand::all()->keyBy('slug');
        $categoriesCache = Category::all()->keyBy('slug');
        $subcategoriesCache = Subcategory::all()->keyBy('slug');

        $productsToInsert = [];
        $now = now(); // Pega a data atual para o created_at e updated_at

        // 3. Varremos o seu array e montamos o formato que o banco de dados entende (Foreign Keys)
        foreach ($mockProducts as $key => $item) {

            // Tenta pegar os IDs baseados nos slugs que vieram no seu objeto
            $brandId = $brandsCache->get($item['brand']['slug'])?->id;
            $categoryId = $categoriesCache->get($item['category']['slug'])?->id;
            $subcategoryId = $subcategoriesCache->get($item['category']['subcategory']['slug'])?->id;

            // Só insere se encontrar todas as relações corretamente
            if ($brandId && $categoryId && $subcategoryId) {
                $productsToInsert[] = [
                    'brand_id'       => $brandId,
                    'category_id'    => $categoryId,
                    'subcategory_id' => $subcategoryId,
                    'type'           => $item['type'] ?? 'product',
                    'name'           => $item['name'],
                    'slug'           => $item['slug'] . '-' . $key,
                    'description'    => $item['description'] ?? null,
                    'dimensions_cm'  => isset($item['dimensions_cm']) ? json_encode($item['dimensions_cm']) : null,
                    'dimensions_in'  => isset($item['dimensions_in']) ? json_encode($item['dimensions_in']) : null,
                    'materials_and_finishes'    => $item['materials_and_finishes'] ?? null,
                    'visible_in_all_products' => $item['visible_in_all_products'] ?? false,
                    'is_new'         => $item['is_new'] ?? false,
                    'has_stock'      => $item['has_stock'] ?? false,
                    'is_best_seller' => $item['is_best_seller'] ?? false,
                    'created_at'     => $now,
                    'updated_at'     => $now,
                ];
            } else {
                $this->command->warn("Produto '{$item['name']}' ignorado. Verifique se os slugs de Brand, Category ou Subcategory estão corretos.");
            }
        }

        // 4. Salva tudo no banco de dados com uma única query (Bulk Insert)
        if (!empty($productsToInsert)) {
            Product::insert($productsToInsert);
            $this->command->info(count($productsToInsert) . ' produtos inseridos com sucesso!');
        }
    }
}
