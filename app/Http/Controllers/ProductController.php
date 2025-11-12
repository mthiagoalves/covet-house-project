<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Retorna um array de dados de produtos falsos (mock data)
     * ATUALIZADO com mais categorias.
     */
    private function getMockProducts(): array
    {
        return [
            [
                'id' => 1,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => true,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 2,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => true,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 3,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => true,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 4,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 5,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 6,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 4,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 5,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 6,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 7,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 8,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 9,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 10,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 11,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 12,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 13,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 14,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 15,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 16,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 17,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 18,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 19,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 20,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 21,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 22,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 23,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 24,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 25,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 26,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 27,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 28,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 29,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 30,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 31,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 32,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 33,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 34,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 35,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 36,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 37,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => true,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 38,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => true,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 39,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => true,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 40,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 41,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 42,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 43,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 44,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 45,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 46,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 47,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 48,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 49,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 50,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 51,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 52,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 53,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 54,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 55,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Bar Counter Stools',
                        'slug' => 'bar-counter-stools'
                    ]
                ]
            ],
            [
                'id' => 56,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Bar Counter Stools',
                        'slug' => 'bar-counter-stools'
                    ]
                ]
            ],
            [
                'id' => 57,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Bar Counter Stools',
                        'slug' => 'bar-counter-stools'
                    ]
                ]
            ],
            [
                'id' => 58,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Bar Counter Stools',
                        'slug' => 'bar-counter-stools'
                    ]
                ]
            ],
            [
                'id' => 59,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Bar Counter Stools',
                        'slug' => 'bar-counter-stools'
                    ]
                ]
            ],
            [
                'id' => 60,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
                'category' => [
                    'name' => 'Seating',
                    'slug' => 'seating',
                    'subcategory' => [
                        'name' => 'Bar Counter Stools',
                        'slug' => 'bar-counter-stools'
                    ]
                ]
            ],
            [
                'id' => 61,
                'type' => 'product',
                'name' => 'Mock Product Alpha',
                'slug' => 'mock-product-alpha',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/333/fff?text=Product+A',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 62,
                'type' => 'product',
                'name' => 'Mock Product Beta',
                'slug' => 'mock-product-beta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/444/fff?text=Product+B',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 63,
                'type' => 'product',
                'name' => 'Mock Product Gamma',
                'slug' => 'mock-product-gamma',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/555/fff?text=Product+G',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 64,
                'type' => 'product',
                'name' => 'Mock Product Delta',
                'slug' => 'mock-product-delta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 65,
                'type' => 'product',
                'name' => 'Mock Product Epsilion',
                'slug' => 'mock-product-epsilion',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
                'id' => 66,
                'type' => 'product',
                'name' => 'Mock Product Zeta',
                'slug' => 'mock-product-zeta',
                'is_new' => false,
                'main_image_url' => 'https://placehold.co/800x800/666/fff?text=Product+D',
                'brand' => ['name' => 'Brand Name', 'slug' => 'brand-name'],
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
    }

    /**
     * NOVA FUNÇÃO: Agrupa e ordena os produtos.
     */
    private function groupAndSortProducts(Collection $products): Collection
    {
        return $products->groupBy('category.name')
            ->map(function (Collection $group) {
                $sortedProducts = $group->sortBy('category.subcategory.name');
                return [
                    'category_name' => $group->first()['category']['name'],
                    'category_slug' => $group->first()['category']['slug'],
                    'products' => $sortedProducts->values()->all(),
                ];
            })
            ->values();
    }

    /**
     * --- NOVA FUNÇÃO ---
     * Agrupa os produtos pela SUBCATEGORIA (para /category/{slug})
     */
    private function groupAndSortBySubcategory(Collection $products): Collection
    {
        // 1. Defina a sua ordem manual preferida.
        //    (Isto substitui a ordem alfabética)
        //    Qualquer subcategoria que NÃO esteja nesta lista aparecerá no FIM.
        $subcategoryOrder = [
            'Sideboards',
            'Consoles',
            'Cabinets',
            'Mirrors',
            'Bookcase',
            'Screens',
            'Sofas',
            'Armchairs',
            'Stools and Benches',
        ];

        return $products->groupBy('category.subcategory.name')

            ->sortBy(function (Collection $group, string $key) use ($subcategoryOrder) {

                $order = array_search($key, $subcategoryOrder);

                return $order === false ? PHP_INT_MAX : $order;
            })

            ->map(function (Collection $group) {
                return [
                    'category_name' => $group->first()['category']['subcategory']['name'],
                    'category_slug' => $group->first()['category']['subcategory']['slug'],
                    'products' => $group->values()->all(),
                ];
            })
            ->values();
    }

    /**
     * Simula um paginator a partir de um array (para manter o frontend consistente)
     */
    private function mockPaginate(Collection $items, int $perPage = 23): array
    {
        return [
            'data' => $items->all(),
            'links' => [],
            'current_page' => 1,
            'total' => $items->count(),
        ];
    }

    /**
     * Mostra 'All Products'
     * Rota: /all-products
     */
    public function allProducts()
    {
        $allProducts = collect($this->getMockProducts());

        $productGroups = $this->groupAndSortProducts($allProducts);

        return Inertia::render('products/Index', [
            'pageTitle' => 'All Products',
            'productGroups' => $productGroups,
        ]);
    }

    /**
     * Mostra 'New Products'
     * Rota: /new-products
     */
    public function newProducts()
    {
        $allProducts = collect($this->getMockProducts());

        $newProductsOnly = $allProducts->filter(function ($product) {
            return isset($product['is_new']) && $product['is_new'] === true;
        });

        $productGroups = $this->groupAndSortProducts($newProductsOnly);

        return Inertia::render('products/Index', [
            'pageTitle' => 'New Products',
            'productGroups' => $productGroups,
        ]);
    }

    /**
     * Mostra produtos por Categoria
     * Rota: /products/category/{slug}
     */
    public function category($slug)
    {
        $allProducts = collect($this->getMockProducts());

        $categoryProducts = $allProducts->filter(function ($product) use ($slug) {
            return $product['category']['slug'] == $slug;
        });

        $subcategoryGroups = $this->groupAndSortBySubcategory($categoryProducts);

        $pageTitle = ucwords(str_replace('-', ' ', $slug));
        $mockCategory = [
            'name' => $pageTitle,
            'description' => "This is a mock description for the {$pageTitle} category.",
            'slug' => $slug
        ];

        return Inertia::render('products/Index', [
            'pageTitle' => $pageTitle,
            'category' => $mockCategory,
            'productGroups' => $subcategoryGroups, // Envia 'productGroups'
        ]);
    }
}
