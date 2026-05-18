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
                'name' => 'Mulligan Bookcase',
                'slug' => 'mulligan-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Mulligan Bookcase is a sleek mid-century modern design piece. Built around a gold plated brass structure, holding glossy black poplar doors and drawers, accentuated by contemporary stylish brass handles and smoked glass shelves.',
                'dimensions_cm' => ['width' => '62.4 cm', 'length' => '205 cm', 'height' => '219 cm'],
                'dimensions_in' => ['width' => '24.45"', 'length' => '80.71"', 'height' => '86.22"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'FINISHES: Gold Plated Brass, Smoked Glass and Glossy Black Popular',
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
                'name' => 'Minelli Bookcase',
                'slug' => 'minelli-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Minelli Bookcase is perfect for any mid-century lover. It’s a furniture piece that definitely calls attention in the best way, providing elegance and space with its walnut wood and smoked glass shelves, as well as a whole structure built-in polished brass.',
                'dimensions_cm' => ['width' => '40 cm', 'length' => '144 cm', 'height' => '258 cm'],
                'dimensions_in' => ['width' => '15.75"', 'length' => '56.69"', 'height' => '101.57"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'Polished Brass, Varnished Walnut and Smoked Glass.',
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
                'name' => 'Caffeine Bookcase',
                'slug' => 'caffeine-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Caffeine is one of the biggest components of coffee: strong, exotic, full-bodied and delicate. Caffeine Bookcase is the ideal piece for your modern and contemporary living room, providing elegance and space with its walnut wood matte and bronze matte finishes. The bookcase has modular feet that adapt quickly to any room.',
                'dimensions_cm' => ['width' => '140 cm', 'height' => '204 cm'],
                'dimensions_in' => ['width' => '55.12"', 'height' => '80.3"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'Epoxy Iron Bronze Matte Varnish, Walnut Root Matte Wood Veneer',
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
                'name' => 'Carrera Bookcase',
                'slug' => 'carrera-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Carrera Bookcase, by Covet House, is tall and serves as the homage to this natural, beautiful phenomenon. Extensive utility compartments in dark walnut veneer over a Patagonia marble top, finishing in an exquisite modern metal champagne structure. The massive marble deposits on the border of General Carrera Lake have been eroded away by the water over 6,200 years, resulting in caves, tunnels, and massive columns of pure marble.',
                'dimensions_cm' => ['depth' => '42.8 cm', 'lenght' => '175 cm', 'height' => '182 cm'],
                'dimensions_in' => ['depth' => '16.85"', 'lenght' => '68.89"', 'height' => '71.65"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'DIVIDERS: Wood Veneer Walnut. SHELVES: Marble Patagónia. STRUCTURE: Stainless Steel with Matte champagne textured fine powder',
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
                'name' => 'Fantasy Air L.E Bookcase',
                'slug' => 'fantasy-air-limited-edition-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Fantasy Air Bookcase Limited Edition is a kids’ bookcase inspired by the Disney movie “Up” and it is the perfect storage item for dreamy bedroom decoration. With a creative and playful design, the Fantasy Air Bookcase is inspired by vintage travel suitcases to reinforce the connection between children and exploring. The decorative suitcases are piled up to provide extra storage. The limited-edition exclusivity is provided by the gold leaf applied on the shelves that give a luxurious look to the item. Built-in wood, lacquered in glossy white, with details in synthetic leather and gold plated finishes.',
                'dimensions_cm' => ['width' => '100 cm', 'depth' => '46 cm', 'height' => '190 cm'],
                'dimensions_in' => ['width' => '40"', 'depth' => '18.01"', 'height' => '74.8"'],
                'brand' => ['name' => 'CIRCU', 'slug' => 'circu'],
                'materials_and_finishes' => 'MATERIALS: Wood, Metal, Synthetic Leather, Gold Leaf. FINISHES: Lacquered in glossy white, Metal parts in Gold Plated finishing, Strips in Gold synthetic leather',
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
                'name' => 'Fantasy Air Bookcase',
                'slug' => 'fantasy-air-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Fantasy Air Bookcase is a kids’ bookcase inspired by the Disney movie “Up” and it is the perfect storage item for dreamy bedroom decoration. With a creative and playful design, the Fantasy Air Bookcase is inspired by vintage travel suitcases to reinforce the connection between children and exploring. The decorative suitcases are piled up to provide extra storage. Built-in wood, lacquered in glossy white, with details in synthetic leather and gold plated finishes.',
                'dimensions_cm' => ['width' => '100 cm', 'depth' => '46 cm', 'height' => '190 cm'],
                'dimensions_in' => ['width' => '40"', 'depth' => '18.01"', 'height' => '74.8"'],
                'brand' => ['name' => 'CIRCU', 'slug' => 'circu'],
                'materials_and_finishes' => 'MATERIALS: Wood, Metal, Synthetic Leather, Gold Leaf. FINISHES: Lacquered in glossy white, Metal parts in Gold Plated finishing, Strips in Gold synthetic leather',
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
                'name' => 'Puzzled Bookcase',
                'slug' => 'puzzled-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Puzzled Bookcase was inspired by geometric spaces and with the drive and passion to create a piece where kids can explore their imagination and allow dreams to get out of the box. With the Puzzled Bookcase, every piece of their dreams has now a place to come to life. Just like a puzzle, this magical bookcase will adapt itself to your project design so you can enjoy fullest the space of your room without comprising the style of your decor. Combining brass details with Its acrylic structure and lacquered wood on the base of the shelves, the Illusion Bookcase will be the perfect luxury storage piece for those who seek extra space for their kid’s goods without the feeling of being overcrowded.',
                'dimensions_cm' => ['width' => '171 cm', 'depth' => '53.4 cm', 'height' => '180 cm'],
                'dimensions_in' => ['width' => '67.3"', 'depth' => '21"', 'height' => '70.9"'],
                'brand' => ['name' => 'CIRCU', 'slug' => 'circu'],
                'materials_and_finishes' => 'MATERIALS: Wood, Metal, Synthetic Leather, Gold Leaf. FINISHES: Lacquered in glossy white, Metal parts in Gold Plated finishing, Strips in Gold synthetic leather',
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
                'name' => 'Waltz Bookcase',
                'slug' => 'waltz-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'With an unmistakable style, this exquisite piece joins the best materials with the finest techniques of our craftsman. An anthem of sophistication and exclusive design.',
                'dimensions_cm' => ['width' => '134 cm', 'depth' => '52 cm', 'height' => '200 cm'],
                'dimensions_in' => ['width' => '52.76"', 'depth' => '20.47"', 'height' => '78.74"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Body: Brass, Wood, Glass & Leather. FINISHES: Body: Polished brass, Black lacquer, Walnut Root, Smoked Glass & Black Leather',
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
                'name' => 'LLoyd Bookcase',
                'slug' => 'lloyd-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The Lloyd Bookcase is crafted with timeless and subtle lignes to be able to complement any interior. This functional yet decorative bookcase will subtly enhancing your projects.',
                'dimensions_cm' => ['width' => '173 cm', 'height' => '182 cm'],
                'dimensions_in' => ['width' => '68.71"', 'height' => '71.65"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'Brass, Wood & Leather',
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
                'name' => 'Apotheosis Bookcase',
                'slug' => 'apotheosis-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Apotheosis Bookcase by Luxxu is a true anthem to sophistication and design. Inspired by Greek Mythology, its’ sleek, straight lines make for a magnificent creation and an exclusive design piece, the ultimate product for office spaces and luxurious living rooms.',
                'dimensions_cm' => ['width' => '140 cm', 'depth' => '50 cm', 'height' => '200 cm'],
                'dimensions_in' => ['width' => '55.12"', 'depth' => '19.69"', 'height' => '78.74"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass, Wood & Leather. FINISHES: Polished brass, Walnut Root, Black Lacquer & Black Leather',
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
                'name' => 'Coleccionista Bookcase',
                'slug' => 'coleccionista-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Coleccionista Bookcase drawers’ typology can be chosen according to your tastes and preferences. You may even be inspired by all Boca do Lobo pieces to chose different types of drawers. The Coleccionista Bookcase can be placed or against a wall or it can serve as a separator division. The drawers have double-sided in order you can decorate both divisions, as well as to ensure the functionality of this piece of furniture.',
                'dimensions_cm' => ['width' => '242 cm', 'depth' => '35 cm', 'height' => '362 cm'],
                'dimensions_in' => ['width' => '95.3"', 'depth' => '13.8"', 'height' => '142.5"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Wood, Lacquered, Metal, Ceramics, Silver Leaf, Copper Leaf, Portuguese Tiles and Glass.',
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
                'name' => 'Garrett BookCase',
                'slug' => 'garrett-bookcase',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Garrett Bookcase combines functionality and beauty in an exceptional way. With elegant lines, and impeccable finish, this bookcase is a statement of style for any environment. Inspired by one of Portugal’s most known writer, Almeida Garrett, was born a design piece meant to keep knowledge on display, the Garrett Bookcase by Boca do Lobo. This Bookcase offers an elegant space to display your books, decorative objects and precious collections, adding a touch of sophistication and organization to your living or working space.',
                'dimensions_cm' => ['width' => '220 cm', 'depth' => '40 cm', 'height' => '202 cm'],
                'dimensions_in' => ['width' => '78.7"', 'depth' => '15.7"', 'height' => '79.5"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Black lacquered wood, Casted Brass, Portoro Marble',
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
                'name' => 'Giulietta Screen',
                'slug' => 'giulietta-screen',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Giulietta Screen is a precious crossing curved brass frame of this beautiful screen, named after Giulietta Masina, creates an elegant dialogue with the upholstery – deep yellow or peacock velvet combined with a fifties’ taste fabric.',
                'dimensions_cm' => ['width' => '5 cm', 'length' => '175 cm', 'height' => '172 cm'],
                'dimensions_in' => ['width' => '1.96"', 'length' => '68.89"', 'height' => '67.71"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'FINISHES: Brushed Brass; Cover: Essential Home textile',
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
                'name' => 'Delphi Screen',
                'slug' => 'delphi-screen',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Back to a world of magic, Delphi, ancient Greece’s holiest, prophesied the future of kings and countries. Delphi Screen brings oracle to life through its bird’s eye wood veneer, glossy elm root wood veneer and polished hammered brass. This folding screen is sure to impress.',
                'dimensions_cm' => ['width' => '170 cm', 'depth' => '3 cm', 'height' => '185 cm'],
                'dimensions_in' => ['width' => '66.90"', 'depth' => '1.18"', 'height' => '72.83"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Panels in bird’s eye wood veneer, elm root wood veneer and brass aged patina, Structure in brass',
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
                'name' => 'Hanoi Screen',
                'slug' => 'hanoi-screen',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The Hanoi Screen Divider is structured in gold plated brass and black matte lacquer. Inspired by the cubic shape museum built in Hanoi, Vietnam, to tell stories about its city and people. This screen divider will add a touch of character to your modern interior design.',
                'dimensions_cm' => ['width' => '50 cm', 'depth' => '10 cm', 'max heigth' => '360 cm'],
                'dimensions_in' => ['width' => '19.68"', 'depth' => '3.94"', 'min height' => '320"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Strucuture black matte lacquered, tube gold plated brass.',
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
                'name' => 'Koi II Screen',
                'slug' => 'koi-ii-screen',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Koi II Screen by Brabbu fits in any modern home decor. The Koi scales from the sides of the folding screen shine and reflect the sun on its brass surface. Koi means love and affection so the carp is also a symbol of love and friendship which will be conveyed into a modern home decor.',
                'dimensions_cm' => ['width' => '258 cm', 'depth' => '4 cm', 'heigth' => '180 cm'],
                'dimensions_in' => ['width' => '101.57"', 'depth' => '1.57"', 'height' => '70.86"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Structure in brushed aged brass.',
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
                'name' => 'Koi Screen',
                'slug' => 'koi-screen',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Koi Screen fits in any modern home decor, revealing its capacity to adapt thanks to its natural colour mutations.  The Koi scales from the sides of the folding screen shine and reflect the sun on its brass surface. Koi means love and affection so the carp is also a symbol of love and friendship which will be conveyed into modern home decor.',
                'dimensions_cm' => ['width' => '258 cm', 'depth' => '4 cm', 'heigth' => '121 cm'],
                'dimensions_in' => ['width' => '101.57"', 'depth' => '1.57"', 'height' => '47.63"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Structure in brushed aged brass.',
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
                'name' => 'Arabica Screen',
                'slug' => 'arabica-screen',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Arabica screen is a striking piece of furniture that can really enhance the mood in any space. A visually attracting aesthetic meets a functional purpose with Arabica, made from bronze mirror and Emperador marble with a dark polished finish. The perfect choice for hospitality settings and residential interiors.',
                'dimensions_cm' => ['width' => '87 cm', 'depth' => '4 cm', 'heigth' => '300 cm'],
                'dimensions_in' => ['width' => '32.25"', 'depth' => '1.57"', 'height' => '118.11"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'Bronze Mirror, Emperador Light Marble, Epoxy Stainless Steel Bronze Matte Varnish',
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
                'name' => 'Empire Screen',
                'slug' => 'empire-screen',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Empire Screen by Luxxu donates a deluxe feel to the most stylish spaces. The three panels are made in the smoked mirror and gold plated brass. The Empire Screen is not only important for decoration but these partitions are also convenient to divide spaces. The ultimate luxury for a dressing room by providing privacy.',
                'dimensions_cm' => ['depth' => '4', 'lenght' => '180 cm', 'heigth' => '209 cm'],
                'dimensions_in' => ['depth' => '1.6"', 'lenght' => '70.9"', 'height' => '82.3"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass and Glass. FINISHES: Gold plated & Smoked black mirror',
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
                'name' => 'Gold Folding Screen',
                'slug' => 'gold-folding-screen',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Gold Folding Screen was a status symbol in those ancient times that inspired our present furniture makers who adopted the concept of gold leafing. Our talented designers and master artisans created this highly desirable statement piece that is jewelry for the home. Possession of furniture with gold and silver leafing symbolizes wealth and prosperity.',
                'dimensions_cm' => ['depth' => '14 cm', 'heigth' => '145 cm'],
                'dimensions_in' => ['depth' => '5.5', 'height' => '57.1"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Fiberglass filled with expandable polyurethane.',
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
                'name' => 'Avenue Folding Screen',
                'slug' => 'avenue-folding-screen',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Avenue Folding Screen is a distinctive folding screen so elegant that can be easily placed in your home. Avenue is a striking piece that attracts attention and lightens the mood in any space. Its unique characteristics allow it to become a work of art by itself, or it can serve a functional purpose as a room divider. Place Avenue in your bedroom, in your entrance hall, or in your living room. It will look beautiful in all of these spaces. Composed of six rotating panels finished in gold leaf with a high gloss varnish, black high gloss lacquer, and a geometric mosaic of walnut veneer, and a book-matched ebony veneer covered with high gloss varnish.',
                'dimensions_cm' => ['width' => '185 cm', 'depth' => '4 cm', 'heigth' => '190 cm'],
                'dimensions_in' => ['width' => '72.4"', 'depth' => '1.6', 'height' => '74.8"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Ebony leaf, Walnut Leaf, Golden Leaf and Metal.',
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
                'name' => 'QUANTUM MIRROR',
                'slug' => 'quantum-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'A contemporary descendant of midcentury modern style, the Quantum Mirror is not just a spot-on reﬂection of the atomic age design, it is a leap forward. A set of gold plated spheres arranged in a circular pattern creates a stunning visual effect. It is the ideal finishing touch for a modern living room or bedroom. A magnificent design inspired in the 50’s legacy.',
                'dimensions_cm' => ['width' => '8.3 cm', 'diameter' => '150 cm'],
                'dimensions_in' => ['width' => '3.27"', 'diameter' => '59"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'FINISHES: Brass and Mirror',
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
                'name' => 'Diamond Small Mirror',
                'slug' => 'diamond-small-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Diamond Small Mirror by Essential Home was inspired by the asymmetrical and dazzling shapes of a diamond rock, this five-sided polygon small wall mirror is the ultimate combination of geometry and design. The use of a polished brass structure enhances the luxurious element within this object resulting in a sophisticated dynamic piece that stands out in any ambiance.',
                'dimensions_cm' => ['width' => '14.7 cm', 'length' => '96.3 cm', 'height' => '110 cm'],
                'dimensions_in' => ['width' => '5.79"', 'length' => '37.99"', 'height' => '43.5"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'FINISHES: Polished Brass and Mirror.',
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
                'name' => 'Diamond Mirror',
                'slug' => 'diamond-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Diamond Big Mirror, by Essential Home, is a full-length version of the diamond-shaped mirror. Crafted in a polished brass structure it produces a tall sleek design, merging geometry and innovation in the same object. This Gorgeous piece will add a luxurious and rich element to any interior.',
                'dimensions_cm' => ['width' => '89.1 cm', 'depth' => '15.1 cm', 'height' => '180 cm'],
                'dimensions_in' => ['width' => '35.08"', 'depth' => '5.94"', 'height' => '70.87"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'MATERIALS: BRASS AND CLEAR MIRROR. FINISHES: Polished Brass',
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
                'name' => 'Wilde Mirror',
                'slug' => 'wilde-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Wilde Mirror is a beautifully designed vanity wall mirror. It features three panels and irregular shape with a golden strap of plated brass that evokes a mid-century modern style while adding a hint of reﬁnement to any interior. It can be hanged above a sideboard or a console and still give that retro look to your bedroom or living room.',
                'dimensions_cm' => ['width' => '3 cm', 'length' => '168 cm', 'height' => '101 cm'],
                'dimensions_in' => ['width' => '1.18"', 'length' => '66.14"', 'height' => '38.76"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'FINISHES: Brass and Mirror',
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
                'name' => 'Shirley Mirror',
                'slug' => 'shirley-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Shirley Mirror is a beautiful piece of circular geometry. This large circular mirror is a structure made out of curved tubes of polished golden brass that sustain a large circular mirror in the middle. The polished brass promotes a sense of luxury and the circular shape feels very organic and almost naval-like.',
                'dimensions_cm' => ['width' => '16 cm', 'length' => '124.5 cm', 'height' => '124.5 cm'],
                'dimensions_in' => ['width' => '6.3"', 'length' => '49.02"', 'height' => '49.02"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'Polished Brass, Matte RAL colors and Mirror.',
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
                'name' => 'Kayan Round Mirror',
                'slug' => 'kayan-round-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Kayan Round Mirror will surely spice up a boring wall. Kayan women are known for using neck rings with the intention of lengthening their necks. All the way from Myanmar, Kayan Round Mirror is made of a unique aged brushed brass structure.',
                'dimensions_cm' => ['width' => '95 cm', 'depth' => '4 cm', 'height' => '95 cm'],
                'dimensions_in' => ['width' => '37.4"', 'depth' => '1.6"', 'height' => '37.4"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Aged brushed brass and flat mirror.',
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
                'name' => 'HULI I Mirror',
                'slug' => 'huli-i-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Huli I Mirror, by Brabbu, is inspired by a tribe from Papua New Guinea known for painting their faces yellow, red, and white to impress the enemy. This ritual was the inspiration behind this piece, made of matte casted brass. It is more than a wall mirror, it is a decorative item that will spice any wall.',
                'dimensions_cm' => ['depth' => '6 cm', 'diameter' => '120 cm'],
                'dimensions_in' => ['depth' => '2.36"', 'diameter' => '47.2"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'MATERIALS: CONVEX MIRROR AND CASTED BRASS. FINISHES: Casted Polished Brass Matte',
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
                'name' => 'Helios Mirror',
                'slug' => 'helios-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Helios Mirror by Brabbu was inspired by Greek Mythology, and it means the personification of the Sun. It is said that each dawn, he rose from the far ends of the earth with the shining aureole of the Sun. This inspired the creation of Helios Mirror. With a finish in golden leaf, this decorative mirror will bring a charming touch to a blank wall.',
                'dimensions_cm' => ['width' => '120 cm', 'depth' => '14 cm', 'height' => '120 cm'],
                'dimensions_in' => ['width' => '47.2"', 'depth' => '5.5"', 'height' => '47.2"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'MATERIALS: Glossy Gold Leaf',
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
                'name' => 'Kumi II Mirror',
                'slug' => 'kumi-ii-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'With origins in Japan, Kumi is an oyster with an undeniable beauty. Kumi Mirror pays tribute to its allure through its glossy hammered aged brass. This decorative wall mirror is a treasure coveted by many.',
                'dimensions_cm' => ['width' => '120 cm', 'depth' => '16 cm', 'height' => '100 cm'],
                'dimensions_in' => ['width' => '47.2"', 'depth' => '6.29"', 'height' => '39.37"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Glossy hammered aged brass. Smoked Mirror., Smoked Mirror.',
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
                'name' => 'Kumi I Mirror',
                'slug' => 'kumi-i-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Kumi I Mirror by Brabbu is an oyster with undeniable beauty with origins in Japan. This mirror pays tribute to its allure through its glossy hammered aged brass. This decorative rectangular wall mirror is a treasure coveted by many, place it in any modern home decor and see it come to life!',
                'dimensions_cm' => ['width' => '100 cm', 'depth' => '17 cm', 'height' => '180 cm'],
                'dimensions_in' => ['width' => '39.37"', 'depth' => '6.7"', 'height' => '70.9"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'MATERIALS: Brass, FLAT MIRROR. FINISHES: glossy brushed aged hammered brass',
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
                'name' => 'Saya Mirror',
                'slug' => 'saya-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Saya de Malha Bank, the largest submerged ocean bank in the world, inspired the creation of Saya Mirror. It is composed by a polished nickel concave frame, with an undulating surface covered in casted brass details, and a convex mirror. These shapes recreate the oceanic bank that was named by Portuguese sailors when they were sailing between Cape of Good Hope and India.',
                'dimensions_cm' => ['width' => '115 cm', 'depth' => '16 cm', 'height' => '115 cm'],
                'dimensions_in' => ['width' => '45.27"', 'depth' => '6.29"', 'height' => '45.27"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Concave and convex polished nickel. Casted brass details.',
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
                'name' => 'Cay Rectangular Mirror',
                'slug' => 'cay-rectangular-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Nature in its rawest form flows through this charismatic furniture piece as lava flows from a volcano eruption. Moulded by casted brass and flat mirror, CAY Rectangular Mirror embodies nature’s ultimate scream. Allow yourself to hear the call, feeling its strength and reflecting it into your urban lifestyle.',
                'dimensions_cm' => ['depth' => '6 cm', 'diameter' => '140 cm'],
                'dimensions_in' => ['depth' => '2.36"', 'diameter' => '55.11"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Matte casted brass and flat mirror.',
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
                'name' => 'Cay Mirror',
                'slug' => 'cay-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Nature in its rawest form flows through this charismatic furniture piece as lava flows during a volcano eruption. Cay Mirror embodies nature ́s ultimate scream, molded by casted brass and a flat mirror, Allow yourself to hear the ultimate call, feeling its strength and reflecting it into your urban lifestyle.',
                'dimensions_cm' => ['depth' => '6 cm', 'diameter' => '140 cm'],
                'dimensions_in' => ['depth' => '2.36"', 'diameter' => '55.11"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Matte casted brass and flat mirror.',
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
                'name' => 'Kilimanjaro Mirror',
                'slug' => 'kilimanjaro-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Kilimanjaro mirror was inspired on Mount Kilimanjaro, a dormant volcano in Tanzania and the highest mountain in Africa. Known for its ideal climatic conditions but scarce harvest infrastructure, Tanzania is where the finest exclusive coffee beans come from. Just like that, the Kilimanjaro mirror brings a distinct and refined atmosphere to your home decor where less will always be more.',
                'dimensions_cm' => ['width' => '110 cm', 'depth' => '10 cm', 'height' => '110 cm'],
                'dimensions_in' => ['width' => '43.71"', 'depth' => '3.94"', 'height' => '43.71"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'A square mirror supported by a solid mahogany wood frame.',
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
                'name' => 'Persia Mirror',
                'slug' => 'persia-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Persia mirror seeks to provide a link between the past and the present because we all know coffee is synonymous with cultural heritage. A stylish piece that adds class to any room, Persia’s hexagonal frame is made from either oak or mahogany wood. The wood can be lacquered in white, black, silver or gold.',
                'dimensions_cm' => ['width' => '90 cm', 'depth' => '8 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '35.43"', 'depth' => '3.15"', 'height' => '35.43"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'Convex mirror and a handcrafted octagonal frame.',
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
                'name' => 'Altura Mirror',
                'slug' => 'altura-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Altura Mirror, by Caffe Latte, is a tall mirror that creates the same feelings in your living room or other areas. With balanced and clean designed mirrors on both sides, and adaptability with swivel panels for a different experience each time. Sharp straight lines for a modern appeal and bronze mirror finish for that subtle, yet pronounced, chicness.',
                'dimensions_cm' => ['width' => '43 cm', 'depth' => '3 cm', 'height' => '300 cm'],
                'dimensions_in' => ['width' => '16.93"', 'depth' => '1.18"', 'height' => '118.11"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'Body: Epoxy Stainless Steel Dark Bronze Matte Varnish Bronze Mirror Aged Mirror',
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
                'name' => 'Canephora Mirror',
                'slug' => 'canephora-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Canephora Mirror, though widely known as Coffea robusta, the plant is scientifically identified as Coffea canephora, from which the name of this three-set mirror is taken. The mirror borrows inspiration not only from the name but from the organic shapes of the coffee beans produced by this plant as well. A modern set composed of different sized mirrors, with forms resembling three coffee beans made with extremely high-quality handcrafted techniques, with a reflecting surface enclosed by an exquisite aged brass frame. Canephora mirror is a versatile piece, ideal for an entrance or energizing a living room aesthetic.',
                'dimensions_cm' => ['width' => '242 cm', 'depth' => '10 cm', 'height' => '285 cm'],
                'dimensions_in' => ['width' => '95.27"', 'depth' => '3.9"', 'height' => '112.20"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'Aged brass, regular mirror',
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
                'name' => 'Goddess Mirror',
                'slug' => 'goddess-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The Goddess Mirror is a stunning, brilliant, and unique piece, radiating strength and power. Over 200 brass hands spiral around the circular mirror, symbolically reaching to lift you onto the pedestal where you belong.Each hand is individually crafted by KOKET artisans, then painstakingly polished one by one resulting in this masterful piece of interior jewelry.',
                'dimensions_cm' => ['width' => '150 cm', 'depth' => '20 cm', 'height' => '150 cm'],
                'dimensions_in' => ['width' => '59"', 'depth' => '8"', 'height' => '59"'],
                'brand' => ['name' => 'KOKET', 'slug' => 'koket'],
                'materials_and_finishes' => 'Back: Polished Brass (High Gloss Finish), Mirror: Clear Glass (Convex Mirror), Structure: Polished Brass (High Gloss Finish).',
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
                'name' => 'Revê 2-Tier Mirror',
                'slug' => 'reve-2-tier-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Poetry of design lies in the creation of illusions. Lust after the Revê mirror by Koket finished in a matte exterior with a high gloss metallic interior, unleashing the rules of reality and giving you the power of self-exploration.',
                'dimensions_cm' => ['width' => '145 cm', 'depth' => '30 cm', 'height' => '145 cm'],
                'dimensions_in' => ['width' => '57"', 'depth' => '12"', 'height' => '57"'],
                'brand' => ['name' => 'KOKET', 'slug' => 'koket'],
                'materials_and_finishes' => 'Back: Gold Powder (Matte Finish), Inner Ring: Black Lacquer (Matte Finish), Mirror: Clear Mirror (Convex Mirror), Outer Ring: Bright Gold (High Gloss Finish)',
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
                'name' => 'Serpentine Apple-Shaped Mirror',
                'slug' => 'serpentine-apple-shaped-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Be transformed as you gaze into the Serpentine II’s apple-shaped mirror by Koket. Framed in two intertwined serpent forms made of hand-carved wood this mirror is the perfect way to add a touch of exoticism to any interior setting.',
                'dimensions_cm' => ['width' => '135.8 cm', 'depth' => '9.4 cm', 'height' => '126 cm'],
                'dimensions_in' => ['width' => '53"', 'depth' => '4"', 'height' => '50"'],
                'brand' => ['name' => 'KOKET', 'slug' => 'koket'],
                'materials_and_finishes' => 'Back: Broken Gold Leaf (High Gloss Finish), Mirror: Bronze Mirror (Plain Mirror), Structure: Broken Gold Leaf (High Gloss Finish)',
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
                'name' => 'Mood Mirror',
                'slug' => 'mood-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The MOOD Mirror is the perfect addition to a living room, dining room, or bedroom, adapting to your mood and style. While its primary role is to reflect light and space, the MOOD Mirror transcends mere practicality, becoming a captivating focal point that elevates the aesthetics of any room. Made with poplar wood, glossy gold-plated stainless steel, and a clear mirror, this piece combines function with luxury, offering both utility and beauty.',
                'dimensions_cm' => ['width' => '90 cm', 'depth' => '10.8 cm', 'height' => '100 cm'],
                'dimensions_in' => ['width' => '35.43"', 'depth' => '4.25"', 'height' => '39.34"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: GOLD PLATED STAINLESS STEEL GLOSSY. MIRROR: Clear Mirror',
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
                'name' => 'Fractal Logo Mirror',
                'slug' => 'fractal-logo-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Fractal Logo Mirror, by Covet Collection, is a polished stainless steel mirror, the reflection of harmony in chaos. It is an ode to geometry and simple forms that when repeated in a loop become almost hypnotic.',
                'dimensions_cm' => ['width' => '155 cm', 'depth' => '15 cm', 'height' => '220 cm'],
                'dimensions_in' => ['width' => '61.02"', 'depth' => '5.90"', 'height' => '86.61"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: POLISHED STAINLESS STEEL',
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
                'name' => 'Chiloé Mirror',
                'slug' => 'chiloe-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Chiloé Mirror, by Covet House, is based upon the Chiloe Archipelago of the Patagonian region, with one small island mostly surrounded by water on the eastern and western sides. Chiloé Mirror mirrors exactly this landmass and its morphology. Embodying the island, this mirror has a small Patagonian marble circle, while the two circular mirrors: a clear mirror and an aged mirror, represent the clear and crystal waters of the archipelago. The fine metal champagne finishes and the built-in light elevate the Chiloé Mirror to a refined and timeless piece.',
                'dimensions_cm' => ['depth' => '10 cm', 'length' => '218 cm', 'height' => '147 cm'],
                'dimensions_in' => ['depth' => '3.93"', 'length' => '85.82"', 'height' => '57.9"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: REGULAR MIRROR AGED MIRROR MARBLE PATAGÓNIA. LIGHT LED: LIGHTING TAPE. LIGHT STRUTURE: BRASS PIPE WITH MATE CHAMPAGNE TEXTURED FINE POWDER',
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
                'name' => 'Slater Mirror',
                'slug' => 'slater-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Slater Mirror, by Covet House is the perfect arty piece to add to any room, reflecting some of the best handcraft techniques. Slater Mirror is defined by amorphous and organic shapes, where a mirror is merged with chic metal champagne. Slater Mirror is a set of three pieces, with endless possibilities and combinations.',
                'dimensions_cm' => ['depth' => '3 cm', 'length' => '100 cm', 'height' => '160 cm'],
                'dimensions_in' => ['depth' => '1.18"', 'length' => '39.37"', 'height' => '62.99"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'MIRROR: CLEAR MIRROR, MIRROR FRAME: WOOD WITH MATTE CHAMPAGNE TEXTURED FINE POWDER',
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
                'name' => 'Sapphire Mirror',
                'slug' => 'sapphire-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Sapphire mirror gets its name from its resemblance to the blue precious stone: Sapphire. Made out of Cornered Polished Brass this mirror is a versatile piece for luxury bathrooms. It can be displayed in both vertical or horizontal orientation.',
                'dimensions_cm' => ['width' => '55 cm', 'depth' => '2.5 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '21.65"', 'depth' => '0.98"', 'height' => '35.43"'],
                'brand' => ['name' => 'MAISON VALENTINA', 'slug' => 'maison-valentina'],
                'materials_and_finishes' => 'MATERIALS: Cornered Polished Brass',
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
                'name' => 'Blaze Mirror',
                'slug' => 'blaze-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Blaze Mirror is a fiercely burning fire capable of accentuating any wall and stun you at every look. It features a round mirror made entirely from polished brass and designed with concentric circles. It is accented by engraved nail head trims along the body and a LED strip that provides a soft and cozy light for any ambiance.',
                'dimensions_cm' => ['depth' => '7 cm', 'height' => '120 cm'],
                'dimensions_in' => ['depth' => '2.79"', 'height' => '47.4"'],
                'brand' => ['name' => 'MAISON VALENTINA', 'slug' => 'maison-valentina'],
                'materials_and_finishes' => 'MATERIALS: Body in brass.',
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
                'name' => 'Colosseum Mirror',
                'slug' => 'colosseum-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Colosseum Mirror, by Maison Valentina, is a rounded oblong mirror inspired by the most iconic buildings from Ancient Rome, because of its massive size and concentric shape. It features a frame produced in polished brass accented by an LED strip around the whole body.',
                'dimensions_cm' => ['width' => '100 cm', 'depth' => '7 cm', 'height' => '210 cm'],
                'dimensions_in' => ['width' => '39.37"', 'depth' => '2.79"', 'height' => '82.68"'],
                'brand' => ['name' => 'MAISON VALENTINA', 'slug' => 'maison-valentina'],
                'materials_and_finishes' => 'MATERIALS: Brass, FLAT MIRROR. FINISHES: POLISHED BRASS GLOSSY',
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
                'name' => 'Shield Oval Mirror',
                'slug' => 'shield-oval-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Shield Oval Mirror is a round mirror made entirely from mirror, polished brass and a Nero Marquina marble bar. Inspired in the most ancient and valuable armor, the Shield of Achilles, we re-designed the Shield Mirror, meaning of protection and security. Decorative yet practical, you will have a divine mirror just for you.',
                'dimensions_cm' => ['width' => '90 cm', 'depth' => '8 cm', 'height' => '210 cm'],
                'dimensions_in' => ['width' => '35.43"', 'depth' => '3.15"', 'height' => '82.68"'],
                'brand' => ['name' => 'MAISON VALENTINA', 'slug' => 'maison-valentina'],
                'materials_and_finishes' => 'Brass, mirror and marble.',
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
                'name' => 'Glimmer Mirror',
                'slug' => 'glimmer-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Glimmer Mirror, as its name states, adds to your project a faint and elegant light. Glimmer Mirror’s subtle lines and crystal details are the results of a precise handcrafted process. A precious piece of art with eight brass details adorned with crystal appointments that elevate any environment. Luxury and glamour are surely granted.',
                'dimensions_cm' => ['depth' => '15 cm', 'height' => '120 cm'],
                'dimensions_in' => ['depth' => '5.9"', 'height' => '47.2"'],
                'brand' => ['name' => 'MAISON VALENTINA', 'slug' => 'maison-valentina'],
                'materials_and_finishes' => 'Mirror with brass details and a crystal appointment.',
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
                'name' => 'Tortoise Mirror',
                'slug' => 'tortoise-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'This unique mirror is inspired in the Tortoises hard outer shell. It’s made of high gloss black lacquered wood that contrasts with hexagonal Anthracite, Nero Marquina and Yellow Triano marble details. This glamorous pattern makes this piece easy to combine in different luxurious environments.',
                'dimensions_cm' => ['depth' => '5.3 cm', 'height' => '120 cm'],
                'dimensions_in' => ['depth' => '2.09"', 'height' => '47.2"'],
                'brand' => ['name' => 'MAISON VALENTINA', 'slug' => 'maison-valentina'],
                'materials_and_finishes' => 'MATERIALS: High Gloss black lacquered Wood with hexagonal marble details Polished Brass.',
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
                'name' => 'Colosseum Floor Mirror',
                'slug' => 'colosseum-floor-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Colosseum Floor Mirror, by Maison Valentina, is supported by a Nero Marquina marble base accented by a brass trim around it. The frame structure is built in polished brass tubes, assembled to produce an oblong shape. Colosseum Floor Mirror rings rotate 360 degrees, making this mirror a flexible and perfect piece to decorate your luxury bathroom.',
                'dimensions_cm' => ['width' => '80 cm', 'depth' => '50 cm', 'height' => '203 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '19.69"', 'height' => '79.92"'],
                'brand' => ['name' => 'MAISON VALENTINA', 'slug' => 'maison-valentina'],
                'materials_and_finishes' => 'MATERIALS: Brass, Mirror and Marble. FINISHES: Nero Marquina Marble and Glossy Polished Brass',
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
                'name' => 'SHIELD MIRROR',
                'slug' => 'shield-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The shield is a round mirror made entirely from mirrored glass, polished brass, and a Nero Marquina marble bar. Inspired in the most ancient and valuable armor, the Shield of Achilles, we re-designed the Shield Mirror, the meaning of protection and security. Decorative yet practical, you will have a divine item to boost your modern bathroom interior design.',
                'dimensions_cm' => ['width' => '100 cm', 'depth' => '8 cm', 'height' => '135 cm'],
                'dimensions_in' => ['width' => '39.37"', 'depth' => '3.15"', 'height' => '53.15"'],
                'brand' => ['name' => 'MAISON VALENTINA', 'slug' => 'maison-valentina'],
                'materials_and_finishes' => 'Mirror: Flat Mirror; Structure: Polished Brass; Centre bar: Nero Marquina marble',
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
                'name' => 'Bubble Gum Small Mirror',
                'slug' => 'bubble-gum-small-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Bubble Gum Small Mirror is the accessory you need to embellish any children’s bedroom. With its elegant design inspired by the fun shapes of the kid’s favorite candies, this luxury wall mirror will add playfulness to any project.',
                'dimensions_cm' => ['width' => '110 cm', 'depth' => '4 cm', 'height' => '65 cm'],
                'dimensions_in' => ['width' => '43.30"', 'depth' => '1.57"', 'height' => '25.60"'],
                'brand' => ['name' => 'CIRCU', 'slug' => 'circu'],
                'materials_and_finishes' => 'MATERIALS: Wood, Brass, Velvet, Mirror. FINISHES: Glossy Laquered, Gold Plated and Velvet and LED light',
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
                'name' => 'Bubble Gum Big Mirror',
                'slug' => 'bubble-gum-big-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Bubble Gum Big Mirror is the accessory you need to embellish any children’s bedroom. With its elegant design inspired by the fun shapes of the kid’s favorite candies, this luxury wall mirror will add playfulness to any project.',
                'dimensions_cm' => ['width' => '123 cm', 'depth' => '12 cm', 'height' => '180 cm'],
                'dimensions_in' => ['width' => '48.43"', 'depth' => '4.72"', 'height' => '70.82"'],
                'brand' => ['name' => 'CIRCU', 'slug' => 'circu'],
                'materials_and_finishes' => 'MATERIALS: Wood, Brass, Velvet, Mirror. FINISHES: Glossy Laquered, Gold Plated and Velvet and LED light',
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
                'name' => 'Cloud Mirror',
                'slug' => 'cloud-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Cloud Mirror is the perfect piece of decoration that will embellish any children’s bedroom. It resembles every fantasy story created by Pixar and automatically magnifies the beauty of the room. In front of it, your child can be and do anything he/she dreams of.',
                'dimensions_cm' => ['width' => '76 cm', 'depth' => '40 cm', 'height' => '185 cm'],
                'dimensions_in' => ['width' => '30"', 'depth' => '15.7"', 'height' => '72.8"'],
                'brand' => ['name' => 'CIRCU', 'slug' => 'circu'],
                'materials_and_finishes' => 'MATERIALS: Wood, Mirror and Brass. FINISHES: Light Pink Glossy Varnish',
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
                'name' => 'Chameleon Mirror',
                'slug' => 'chameleon-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Magic Mirror on the wall, who’s the fairest one of all?’’ is one of the most remarkable quotes of the Disney universe and, for Circu, an inspiration for this mirror. This exquisite wall mirror is the perfect piece of decoration to create a charming environment in the child’s bedroom. The varnish applied to the mirror has a Chameleon effect, that gives the illusion of color changing, bringing a magical feeling to this unique item. The Chameleon Mirror is made entirely by hand, using traditional techniques of carving, with a silver leaf finishing.',
                'dimensions_cm' => ['width' => '70 cm', 'depth' => '6 cm', 'height' => '155 cm'],
                'dimensions_in' => ['width' => '27.5"', 'depth' => '2.4"', 'height' => '61"'],
                'brand' => ['name' => 'CIRCU', 'slug' => 'circu'],
                'materials_and_finishes' => 'MATERIALS: Wood. FINISHES: Silver leaf, pink or blue translucent varnish',
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
                'name' => 'Bunny Floor Mirror',
                'slug' => 'bunny-floor-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Inspired by Alice in Wonderland, the Bunny Mirror, by Circu is the perfect piece to add cuteness and embellish any kid’s bedroom. In front of it, the Bunny Mirror promises to take your little one into a fantasy land where he/she can explore their wildest dreams while being fascinated by the beauty of nature.',
                'dimensions_cm' => ['width' => '125 cm', 'depth' => '52 cm', 'height' => '215 cm'],
                'dimensions_in' => ['width' => '49.2"', 'depth' => '20.5"', 'height' => '84.6"'],
                'brand' => ['name' => 'CIRCU', 'slug' => 'circu'],
                'materials_and_finishes' => 'Paris Velvet, Regular Mirror (Silver Mirror)',
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
                'name' => 'Magical Mirror',
                'slug' => 'magical-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Magical Mirror, by Circu is the perfect wall mirror to give your little majesty’s room a charming decor. Inspired by the mirror of the wicked witch of Snow White, this kids’ mirror is also magical! “Magic Mirror on the wall, who’s the fairest one of all?” is one of the most remarkable quotes of the Disney universe and an inspiration for this item. This unique item appears as a normal mirror but, with magic, it turns into a movie screen, due to the 22’’ TV inside. Made entirely by hand, using traditional techniques of carving, Magical Mirror features silver leaf finishes with pink translucent varnish applied.',
                'dimensions_cm' => ['width' => '70 cm', 'depth' => '10 cm', 'height' => '155 cm'],
                'dimensions_in' => ['width' => '27.5"', 'depth' => '3.9"', 'height' => '61"'],
                'brand' => ['name' => 'CIRCU', 'slug' => 'circu'],
                'materials_and_finishes' => 'Silver leaf, Pink Translucent Varnish',
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
                'name' => 'Orbis Mirror',
                'slug' => 'orbis-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Orbis Mirror was inspired by ancient times in history, adopting the same simplicity of the golden era. Creates an atmosphere of irresistible exposure and exclusivity, this creation aims to total immersion in sumptuously glamorous interiors and the gold color enhances the luxurious details present in its design.',
                'dimensions_cm' => ['depth' => '9.1 cm', 'diameter' => '101.3 cm'],
                'dimensions_in' => ['depth' => '3.58"', 'diameter' => '39.8"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass & Mirror. FINISHES: Polished brass & Smoked black mirror',
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
                'name' => 'Crown Mirror',
                'slug' => 'crown-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'More than just a simple piece of art, the Crown Mirror represents a living tribute to beauty. The breathtaking combination of smoked black mirror and gold plated brass, challenges the notion of exquisiteness and breaks all the creative boundaries.',
                'dimensions_cm' => ['depth' => '7.1 cm', 'diameter' => '82.8 cm'],
                'dimensions_in' => ['depth' => '2.8"', 'diameter' => '32.6"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass & Mirror. FINISHES: Gold plated & Smoked black mirror',
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
                'name' => 'Crackle Mirror',
                'slug' => 'crackle-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Crackle Mirror by Luxxu is made of the finest gold-plated brass and smoked black mirror. Inspired by the opulence of golden nuggets it is graced with the ability to create exclusive and refined ambiances. This geometric design resembles a shattered mirror and promises to create the most glamorous interiors.',
                'dimensions_cm' => ['width' => '82 cm', 'depth' => '12.9 cm', 'height' => '144 cm'],
                'dimensions_in' => ['width' => '32.28"', 'depth' => '5.08"', 'height' => '56.69"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass & Mirror. FINISHES: Polished brass & Smoked black mirror',
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
                'name' => 'Darian Mirror',
                'slug' => 'darian-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Darian Gold Mirror by Luxxu is made of brass, the only material that has perfect harmony in order to create a masterpiece like the Darian Gold Mirror. A simple yet unique luxury item that captures both the functionality of a mirror and the splendor of an art piece. Decorative, practical, and divine.',
                'dimensions_cm' => ['depth' => '15 cm', 'height' => '100 cm'],
                'dimensions_in' => ['depth' => '5.9"', 'height' => '39.4"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass & Mirror. FINISHES: Polished brass & Black mirror',
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
                'name' => 'Vertigo Set Mirror',
                'slug' => 'vertigo-set-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The Vertigo Set Mirror is the perfect accent piece for a modern living room, a luxury dining room, a dreamy master bedroom, or a statement entryway. This wall mirror set has a sleek design made of gold-plated brass and smoked black mirror.',
                'dimensions_cm' => ['depth' => '5 cm', 'length' => '179 cm', 'height' => '210 cm'],
                'dimensions_in' => ['depth' => '2"', 'length' => '70.5"', 'height' => '82.7"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'Body: Brass & Mirror. Body: Gold plated & Smoked black mirror',
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
                'name' => 'Metamorphosis Convex Mirror',
                'slug' => 'convex-metamorphosis-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The Convex Metamorphosis Mirror is more than just a simple piece of art. It represents a living tribute to the beauty of an uncompromised mindset, breaking creative boundaries and taking Boca do Lobo to unknown territories never explored before. Playing on the concept of evolution, and challenging the notion of beauty, the Convex Metamorphosis Mirror takes a clean form and transforms it into an exceptional piece of luxury furniture.',
                'dimensions_cm' => ['depth' => '18 cm', 'diameter' => '120 cm'],
                'dimensions_in' => ['depth' => '7.08"', 'diameter' => '47.2"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'The Convex Metamorphosis Mirror is made from brass. Its concave shape is achieved through the manual hammering of a brass sheet, coated in a nickel bath. Its exterior ring is kept simple, treated with varnish coats, and polished to achieve reflection. The insects are also cast from brass, and undergo a chemical treatment for finish.',
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
                'name' => 'Concave Metamorphosis Mirror',
                'slug' => 'concave-metamorphosis-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The Concave Metamorphosis Mirror portrays a territorial dispute, where chaos is indulged and spread across simplicity represented by the clean slate upon which it takes place. A take on metamorphosis from both its literal and philosophical meaning, this luxurious mirror represents the removal of creative boundaries and tests the beauty ideal.',
                'dimensions_cm' => ['width' => '150 cm', 'depth' => '35 cm', 'height' => '150 cm'],
                'dimensions_in' => ['width' => '59.1"', 'depth' => '13.8"', 'height' => '59.1"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'The Concave Metamorphosis Mirror is made from brass. Its is hand hammered to shape, coated in a nickel bath. The insects are also cast from brass, and undergo a chemical treatment for finish.',
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
                'name' => 'Ring Filigree Mirror',
                'slug' => 'ring-filigree-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Ring Filigree Mirror by Boca do Lobo flourishes in a traditional homage to Portuguese culture and commitment, like a jewel that reflects eternal beauty when it is contemplated. The Ring Filigree Mirror edge is made of brass cords gilded in 18k gold, conceiving an exquisite gold round frame that elevates any setting into world-class interiors. A precious piece of art that pays tribute to the finest craftsmanship, ideal for a unique and exclusive home.',
                'dimensions_cm' => ['depth' => '10 cm', 'diameter' => '124 cm'],
                'dimensions_in' => ['depth' => '3.9"', 'diameter' => '48.8"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Wood, brass, mirror',
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
                'name' => 'Marie Antoinette Mirror',
                'slug' => 'marie-antoinette-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Marie Antoinette Mirror by Boca do Lobo represents an attitude and the characteristics of a critical “époque” that shaped French history. Inspired by the controversy behind her time in the French Court and the lavish lifestyle led by the last generation of the French Royal Family, the Marie Antoinette Mirror represents the importance given to greatness and extravagance, from its size to finishing details. A mirror will always be an object that evokes supreme beauty with an inexplicable mystical appreciation.',
                'dimensions_cm' => ['width' => '105 cm', 'depth' => '9 cm', 'height' => '222 cm'],
                'dimensions_in' => ['width' => '41.3"', 'depth' => '3.5"', 'height' => '87.4"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'FINISHES: Black gold with high gloss varnish finish on mahogony structure',
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
                'name' => 'Metamorphosis Mirror',
                'slug' => 'metamorphosis-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Metamorphosis Mirror is a contemporary art imagined for those who appreciate the great things in life, finding beauty in the most unexpected places. Metamorphosis large round wall mirror is conceived with the concave shape of polished stainless steel and coated in a nickel bath. A restless yet sleek gold scorpion of casted brass raises in the centre, landed in a polished stainless steel semi-sphere encircled by a warm light. This statement wall decoration piece is born from the finest craftsmanship for the most exceptional rooms and remarkable interiors. A tribute to the darkest side of nature where challenges never cease to exist.',
                'dimensions_cm' => ['depth' => '22 cm', 'diameter' => '145.5 cm'],
                'dimensions_in' => ['depth' => '8.6"', 'diameter' => '57.2"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'The Concave Metamorphosis Mirror is made from brass. Its is hand hammered to shape, coated in a nickel bath. The insects are also cast from brass, and undergo a chemical treatment for finish.',
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
                'name' => 'Ring Rectangular Mirror',
                'slug' => 'ring-rectangular-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Ring Rectangular Mirror by Boca do Lobo is like a jewel that reflects eternal beauty when it is contemplated, the mirror of the soul, which aspires to the sublime. Exploring the main function of a mirror, the richness of Ring Rectangular Mirror lies within its reflection. Ring evokes an antique unreachable treasure that could only be found in the most remote place on Earth. Ring contains a mirror frame in black lacquered high gloss, with a minimalist line on the outside and another carved handmade on the inside. A precious piece of art with its interior made of refined carved wood as exquisite as its owner. Ideal for a unique and exclusive home, Ring Rectangular Mirror will reflect elegance once it’s in your living room or your bedroom.',
                'dimensions_cm' => ['width' => '100 cm', 'depth' => '12 cm', 'height' => '200 cm'],
                'dimensions_in' => ['width' => '39.4"', 'depth' => '4.7"', 'height' => '78.7"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Wood. FINISHES: mahogany wood, gold leaf, mirror, fixind support',
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
                'name' => 'Ring Round Mirror',
                'slug' => 'ring-round-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Ring Round Mirror, by Boca do Lobo, is like a jewel that reflects eternal beauty when it’s admired, it is the soul, which aspires to the sublime. The richness of this large wall mirror lies within its reflection. Ring Round Mirror evokes an antique unreachable treasure that could only be found in the most remote place on Earth. The Ring Round Mirror contains a mirror frame in black lacquered high gloss, with a minimalist line on the outside and another carved handmade one on the inside. A precious piece of art with its interior made of refined carved wood, as exquisite as its owner. Ideal for a unique and exclusive home, this piece will reflect elegance once it’s in your living room or your bedroom.',
                'dimensions_cm' => ['depth' => '12 cm', 'diameter' => '120 cm'],
                'dimensions_in' => ['depth' => '4.7"', 'diameter' => '47.2"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Mahogany Wood, Gold Leaf, Clear Mirror. FINISHES: Gold Leaf Glossy',
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
                'name' => 'Newton Mirror',
                'slug' => 'newton-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Newton Mirror by Boca do Lobo defies the laws of physics. This futuristic piece of furniture has been designed by taking inspiration from its elder brother – Newton Console. Newton Mirror is a standout piece of international desire that distinguishes itself from all the other designs by its futuristic forms.',
                'dimensions_cm' => ['width' => '117 cm', 'depth' => '12.6 cm', 'height' => '116 cm'],
                'dimensions_in' => ['width' => '46"', 'depth' => '4.9"', 'height' => '45.7"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Aluminum. FINISHES: Black Lacquer and Gold Plated',
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
                'name' => 'Magma Mirror',
                'slug' => 'magma-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Magma Mirror found its inspiration deep beneath the surface of the Earth, where three physical parameters: temperature, pressure, and composition are responsible for creating something so complex and potent. Magma Mirror’s subtle lines are the result of a precise handcrafted process. The shape of the mirror emulate suspended crystals and fragments of unmelted rocks transported in the magma; that crystallized during movement.',
                'dimensions_cm' => ['depth' => '6 cm', 'diameter' => '100 cm'],
                'dimensions_in' => ['depth' => '2.3"', 'diameter' => '39"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Polished Casted Aluminum and mirror.',
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
                'name' => 'Lapiaz Mirror',
                'slug' => 'lapiaz-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Lapiaz Mirror by Boca do Lobo takes exceptional craftsmanship and design to a new realm. Finding beauty in the most unexpected places, Lapiaz Mirror is a contemporary design piece, inspired by authentic karst formations created by surface dissolution, freezing, or thawing of limestone or dolomite rocks. The organic features of Lapiaz Mirror are achieved through the manual fitting of golden polished brass and finishes in polished stainless steel. The hammered gold details and the mirrored façade conveys a beautiful duality between power and refinement to bring a new contemporary verve into interior design. A functional artwork piece born from cold and freshly cracked to show off the world’s rich, golden details.',
                'dimensions_cm' => ['depth' => '18 cm', 'diameter' => '150 cm'],
                'dimensions_in' => ['depth' => '7"', 'diameter' => '59"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Stainless steel and brass. FINISHES: stainless steel structure, with hammered high polished brass.',
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
                'name' => 'Lumiere Rectangular Mirror',
                'slug' => 'lumiere-rectangular-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Lumiere Rectangular Mirror by Boca do Lobo sculpture is made of wood folded by polished stainless steel that portrays a perfect mirror. Through the manual fitting of gold hammered brass sheet bursts an antique fixture with an intricate edge detailing arm topped by an elegant pane lantern hand-sculpted by casting mold. Born from the rich tradition of iron forging and skilled goldsmiths, Lumiere Rectangular Mirror is a soulful piece with classic distinction for outstanding private residences to the greatest contract settings.',
                'dimensions_cm' => ['width' => '150 cm', 'height' => '250 cm'],
                'dimensions_in' => ['width' => '59"', 'height' => '98.4"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Casted Brass, Gold plated brass, STAINLESS STEEL, Wood',
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
                'name' => 'Lumiere Round Mirror',
                'slug' => 'lumiere-round-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Lumiere Round Mirror by Boca do Lobo exemplifies the contemporary dualities of art and functionality. The large round wall lamp sculpture is made of wood folded by polished stainless steel which portrays a perfect mirror. Through the manual fitting of hammered polished brass, sheet bursts an antique fixture with an intricate edge detailing arm topped by an elegant pane lantern hand-sculpted by a casting mold.',
                'dimensions_cm' => ['depth' => '103 cm', 'diameter' => '200 cm', 'height' => '220 cm'],
                'dimensions_in' => ['depth' => '40.5"', 'diameter' => '78.7"', 'height' => '86.6"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Casted Brass, GLASS, Gold plated brass, STAINLESS STEEL, Wood',
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
                'name' => 'Angra Mirror',
                'slug' => 'angra-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Angra Mirror by Boca do Lobo is an exceptional mirror that offers a tribute to the historical city of “Angra do Heroismo” in Azores, Portugal. This seductive and elegant mirror is outstanding in its shape and curved design. The polished brass creates a superb accent providing a glamorous design.',
                'dimensions_cm' => ['depth' => '15 cm', 'diameter' => '110 cm'],
                'dimensions_in' => ['depth' => '5.9"', 'diameter' => '43.3"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Brass, STAINLESS STEEL. FINISHES: Casted Brass, Niquel Plated Stainless Steel',
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
                'name' => 'Halo Mirror',
                'slug' => 'halo-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Halo Mirror by Boca do Lobo was inspired by a phenomenon produced by light interacting with ice crystals suspended in the atmosphere, the Halo. Halos can have many forms, ranging from colored or white rings to arcs and spots in the sky. Composed by a set of three mirrors, it allows for different displays and creative settings. Halo Mirror has three mirrors with different shapes have an elegant gold frame accent, perfect for contemporary interiors and elegant rooms, from stylish bedrooms to upscale halls or living rooms.',
                'dimensions_cm' => ['width' => '150 cm', 'depth' => '9 cm', 'height' => '216 cm'],
                'dimensions_in' => ['width' => '59.1"', 'depth' => '3.5"', 'height' => '85"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Mirror and Brass. FINISHES: Clean Mirror, Polished Hammered Brass',
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
                'name' => 'Robin Mirror',
                'slug' => 'robin-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Robin Mirror by Boca do Lobo embodies the strength and character of the noble ages, giving them a modern approach. By honoring the history of one of the best archers in English literature, this exquisite piece was given a strong visual texture through the use of handmade nails, each one unique in its finishing, size, and character. The fish-eye mirror is supported by a brass structure that turns Robin into one of the most emblematic pieces of the entire collection.',
                'dimensions_cm' => ['diameter' => '120 cm', 'height' => '15 cm'],
                'dimensions_in' => ['diameter' => '47.2"', 'height' => '5.9"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Metal Work, Metal Casting, Wood Work',
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
                'name' => 'Venice Mirror',
                'slug' => 'venice-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Venice Mirror, by Boca do Lobo, is hand-cut and carved by an experienced artisan who’s passion for glasswork goes back as far as his childhood. Venice Mirror represents Boca do Lobo’s ambition to bring value to true craftsmanship through contemporary design. Mirrors are, in some cultures, believed to have enchanting powers thanks to their ability to reflect light and show appearance precisely and incredibly. Through a passionate explosion of romance and drama, the Venice Mirror stirs emotion in anyone that catches its eye.',
                'dimensions_cm' => ['width' => '147 cm', 'depth' => '6 cm', 'height' => '214 cm'],
                'dimensions_in' => ['width' => '57.9"', 'depth' => '2.4"', 'height' => '84.3"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: GLASS, venetian mirror, Wood. FINISHES: Venetian mirror, lacquered wood finished in dark red with a high gloss varnish coat',
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
                'name' => 'Filigree Mirror',
                'slug' => 'filigree-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => true,
                'description' => 'Filigree Mirror by Boca do Lobo resorts to one of the oldest jewelry-making techniques known. Completely handcrafted, with each brass cord fitted with precision, the Filigree Mirror flourishes in a shape traditional to Portuguese culture and art. A true work of art, this luxurious mirror plays tribute to Boca do Lobo’s core values heritage and craftsmanship.',
                'dimensions_cm' => ['width' => '152 cm', 'depth' => '10 cm', 'height' => '99 cm'],
                'dimensions_in' => ['width' => '59.8"', 'depth' => '3.9"', 'height' => '39.8"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Metal Work, Filigree work.',
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
                'name' => 'Glance Mirror',
                'slug' => 'glance-mirror',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => true,
                'description' => 'Glance Mirror, by Boca do Lobo, tells us the story of what seems confused and cluttered can, in a glance, acquire a new meaning, capable of inspiring and becharming us. The crossroads of life, and the reason among the chaos. The concept of a defragmented mirror brings out its noblest gold backdrop, where its unique beauty comes from daring to risk and challenge the conventional.',
                'dimensions_cm' => ['depth' => '4 cm', 'diameter' => '140 cm'],
                'dimensions_in' => ['depth' => '1.6"', 'diameter' => '55.1"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Gold Chrome with Gloss Varnish Finish, Normal Mirror, Solid Wood',
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
                'name' => 'Monocles Tall Cabinet',
                'slug' => 'monocles-tall-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Monocles Tall Cabinet by Essential Home is both a stylish and functional piece of furniture. It blends mid-century charm with a contemporary design style, featuring tapered legs with brass ferrules and a body built in solid walnut wood. Both the sides and back have engraved circles, a high-end detail for any interior design project.',
                'dimensions_cm' => ['width' => '50.8 cm', 'length' => '59.5 cm', 'height' => '173 cm'],
                'dimensions_in' => ['width' => '20"', 'length' => '23.43"', 'height' => '68.11"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'Gold Plated Brass, Matte Black and Varnished Walnut',
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
                'name' => 'Monocles Cabinet',
                'slug' => 'monocles-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Monocles Cabinet by Essential Home is a drinks cabinet with a fresh and sleek look, Monocles Cabinet combines style and functionality. Protruding circles of different sizes at the front, showing that a calculated imperfection goes a long way in design. You’ll find yourself taken back in time as soon as you take a look at this piece.',
                'dimensions_cm' => ['width' => '49.5 cm', 'length' => '168 cm', 'height' => '173 cm'],
                'dimensions_in' => ['width' => '19.4"', 'length' => '66.1"', 'height' => '68.1"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'Gold Plated Brass, Matte Black and Varnished Walnut',
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
                'name' => 'Hepburn Cabinet',
                'slug' => 'hepburn-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Hepburn Cabinet, by Essential Home, was inspired by one of the most refined names in the Hollywood industry. With a body handmade in walnut and two-door handles made of polished brass, this mid-century modern cabinet stands out thanks to its leather upholstered applique at the bottom. The mid-century bar cabinet stands on four slender and handmade polished brass legs. Hepburn Cabinet can be used as a drinks cabinet, sitting well in a modern home bar, or a private country club salon. For an even more unique approach, Hepburn’s many features can be customized to your liking.',
                'dimensions_cm' => ['width' => '52 cm', 'length' => '140 cm', 'height' => '150 cm'],
                'dimensions_in' => ['width' => '20.47"', 'length' => '55.12"', 'height' => '59"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'MATERIALS: Brass, EH beige Leather, Walnut Wood. FINISHES: Polished Brass',
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
                'name' => 'HUANG CABINET',
                'slug' => 'huang-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Huang is a mountain range in eastern China known for its spectacular scenery. Inspired by this magnificence, our designers created HUANG Cabinet. It features an outside in walnut root veneer, an inside in rosewood veneer and details in matte hammered brushed aged brass. This modern wood cabinet brings instant character to modern interior design.',
                'dimensions_cm' => ['width' => '100 cm', 'depth' => '50 cm', 'height' => '210 cm'],
                'dimensions_in' => ['width' => '39.37"', 'depth' => '19.68"', 'height' => '82.67"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Structure in matte walnut root veneer (outside) and in matte palisander wood veneer (inside), with brushed aged hammered matte brass base.',
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
                'name' => 'Camilia Cabinet',
                'slug' => 'camilia-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Designed passionately and exquisitely by the incomparable talents powering KOKET, the Camilia Cabinet was created to grace the most regal of dining rooms with its elegance and splendor. Inspired by the aristocratic palaces of the Alexandrian pashas of Egypt, the mother of pearl Camilia is crowned by an artisan hand-carved peacock, meticulously engraved and delicately finished in metal leaf.',
                'dimensions_cm' => ['width' => '189 cm', 'depth' => '54 cm', 'height' => '91 cm'],
                'dimensions_in' => ['width' => '74"', 'depth' => '21"', 'height' => '36"'],
                'brand' => ['name' => 'KOKET', 'slug' => 'koket'],
                'materials_and_finishes' => 'Back: Poplar Veneer (High Gloss Finish), Base Interior: Gold Leaf (High Gloss Finish), Details: Gold Leaf (High Gloss Finish), Feet: Polished Brass (High Gloss Finish), Interior: Bronze Glass and Poplar Veneer (High Gloss Finish), Structure: Mother Of Pearl Gold, Top: Gold Leaf (High Gloss Finish)',
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
                'name' => 'Temptation Folie Feather Bar Cabinet',
                'slug' => 'temptation-folie-feather-bar-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Enticing admirers with its exotic feather doors and sexy curved lacquered legs, the Temptation Bar Cabinet  by Koket will steal cocktail hour. The chic black and gold interior is perfectly designed to store your wine and cocktail accouterments. Open or closed with its flirty tassel pulls exposed, this bar cabinet is ready for a party or a romantic night in. Cheers!',
                'dimensions_cm' => ['width' => '175 cm', 'depth' => '115 cm', 'height' => '66 cm'],
                'dimensions_in' => ['width' => '69"', 'depth' => '45"', 'height' => '26"'],
                'brand' => ['name' => 'KOKET', 'slug' => 'koket'],
                'materials_and_finishes' => 'Base: Black Lacquer, Door Details: Polished Brass (High Gloss Finish), Door Front: Folie Feathers from the KOKET Textiles collection, Door Structure: Black Lacquer (High Gloss Finish), Drawers Handles: Burlesque Clear Glass Pull, Drawers: Black Lacquer (High Gloss Finish)',
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
                'name' => 'Divine Peacock Feather Armoire',
                'slug' => 'divine-peacock-feather-armoire',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The Divine Peacock Feather Armoire by Koket is an utterly desirable double door pagoda top armoire is covered in delicate, individually placed natural feathers. An exquisite metal ribbon opens the doors to a lavish interior graced with four drawers and two adjustable shelves. The top and base feature a hand-applied metalic leaf for added glamour.',
                'dimensions_cm' => ['width' => '105 cm', 'depth' => '65 cm', 'height' => '210 cm'],
                'dimensions_in' => ['width' => '41"', 'depth' => '26"', 'height' => '83"'],
                'brand' => ['name' => 'KOKET', 'slug' => 'koket'],
                'materials_and_finishes' => 'Base: Gold Leaf (High Gloss Finish), Door Frame: Polished Brass (High Gloss Finish), Doors: Iridescent Peacock Feathers from the KOKET Textiles collection, Handle: Gold Plated Brass and Hammered Pique Brass (High Gloss Finish), Interior: Black Lacquer (High Gloss Finish) and Aged Mirror, Shelves: Smoked Glass, Structure: Black Lacquer (High Gloss Finish), Top: Gold Leaf (High Gloss Finish)',
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
                'name' => 'Spellbound Cabinet',
                'slug' => 'spellbound-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'There is a sense of reveal and conceal as KOKET takes a beautiful chest in high gloss lacquer and adorns it in metal organic lace, revealing a mesmerizing hint of what lies beneath. Interior opens to four drawers embellished with organic hardware with a finish to match the exterior.',
                'dimensions_cm' => ['width' => '205 cm', 'depth' => '57.5 cm', 'height' => '88 cm'],
                'dimensions_in' => ['width' => '81"', 'depth' => '23"', 'height' => '35"'],
                'brand' => ['name' => 'KOKET', 'slug' => 'koket'],
                'materials_and_finishes' => 'Base: Aged Brass (High Gloss Finish), Door Front: Black Lacquer (High Gloss Finish), Door Interior: Black Lacquer (High Gloss Finish), Frame: Aged Gold Leaf (High Gloss Finish), Handle: Aged Brass (High Gloss Finish), Interior: Black Lacquer (High Gloss Finish) and Smoked Glass, Structure: Black Lacquer (High Gloss Finish)',
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
                'name' => 'Anjelica Bar Cabinet',
                'slug' => 'anjelica-bar-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Anjelica Bar Cabinet, by Covet Collection, is an Art Deco-inspired circular bar cabinet with a decidedly modern look that features two sliding doors and an incorporated sliding table to allow the user to pour a drink directly on-site. It also features two white glass shelves and an additional drawer at the bottom. This gorgeous wood bar cabinet is a statement piece for any modern living room.',
                'dimensions_cm' => ['width' => '170 cm', 'depth' => '55 cm', 'height' => '196 cm'],
                'dimensions_in' => ['width' => '66.92"', 'depth' => '21.65"', 'height' => '77.16"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'ASH WOOD MATTE VARNISH, BLACK LEATHER, CLEAR WHITE GLASS, CREAM VELVET, Estremoz marble, Nero Marquina Marble, Polished brass.',
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
                'name' => 'Victoria Cabinet',
                'slug' => 'victoria-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Victoria Cabinet by Boca do Lobo transcends traditional and modern boundaries. Each fusion of art and design is handcrafted from the finest materials by master artisans using production methods developed to preserve traditional techniques and deliver the highest quality.',
                'dimensions_cm' => ['depth' => '64 cm', 'height' => '145 cm'],
                'dimensions_in' => ['depth' => '25.2"', 'height' => '57.1"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Mahogany, Smoked glass, Lacquered black glass, Lacquered in black with a high gloss varnish and a high gloss translucent yellow.',
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
                'name' => 'Guggenheim Patch Cabinet',
                'slug' => 'guggenheim-patch-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Guggenheim Patch Cabinet by Boca do Lobo is between the finest and most elegant cabinets of its collections. This handcrafted, extremely versatile and unique cabinet is ideal for storing glassware and fine silver collectibles in the dining room or any other of your collections – a great compliment to any classic or modern interior setting. The Guggenheim Patch Cabinet is available in two finishes (rosewood or palisander), with black lacquered wood top and legs. Boca do Lobo‘s Guggenheim is handcrafted in Portugal, according to traditional methods, by master artisans who pulse the art of work wood and glass in their veins.',
                'dimensions_cm' => ['width' => '110 cm', 'depth' => '49 cm', 'height' => '210 cm'],
                'dimensions_in' => ['width' => '43.3"', 'depth' => '19.3"', 'height' => '82.7"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Brass, ebony veneer, mahogany wood, mirror, rosewood wood veneer. FINISHES: high gloss varnish, polished ornaments in the glass',
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
                'name' => 'D. Manuel Cabinet',
                'slug' => 'd-manuel-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'D. Manuel Cabinet, by Boca do Lobo, body is made from wood and coated in copper leaf, finished with a black lacquer gradient that highlights its imposing architectural lines, causing the same impression as the first glimpse at a great cathedral. D. Manuel Cabinet has two overlay doors give way to an interior lined in copper that boasts a glass shelf and a set of four drawers. In absolute contrast with the modern body of this statement piece, the legs are carved from solid mahogany and it features a turned twist style, making the D. Manuel Cabinet a versatile cabinet for either classical rooms or modern houses.',
                'dimensions_cm' => ['width' => '116 cm', 'depth' => '60 cm', 'height' => '161 cm'],
                'dimensions_in' => ['width' => '45.7"', 'depth' => '23.6"', 'height' => '63.4"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: LACQUER, Wood. FINISHES: Black Lacquer Gradient, Copper Leaf, Mahogany legs with black lacquer finish.',
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
                'name' => 'ANGRA CUPBOARD',
                'slug' => 'angra-cupboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The Angra Cupboard  by Boca do Lobo is an exquisite fusion of aesthetics and functionality. Perched elegantly on a distinctive curved golden base reminiscent of the captivating cliffs of Angra do Heroismo in Portugal’s Azores, this cupboard transcends mere storage. Crafted with a keen eye for design, the Angra Cupboard invites you to elevate your living space with sophistication. Beyond a mere repository for your belongings, it’s a testament to artistry and the rich tapestry of historical landscapes. Immerse yourself in a design narrative that goes beyond the ordinary, transforming your space into a haven of inspiration and refined style.',
                'dimensions_cm' => ['width' => '116 cm', 'depth' => '60 cm', 'height' => '161 cm'],
                'dimensions_in' => ['width' => '45.7"', 'depth' => '23.6"', 'height' => '63.4"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Base: Polished Hammered Brass, Casted Brass Handles and Smoked Glass, Interior: Smoked Glass Shelf and Grey Mirror, Structure: Black Lacquered Glossy, Top: Sahara Noir Marble',
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
                'name' => 'PIXEL II CABINET',
                'slug' => 'pixel-ii-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Iconic and unparalleled, the Pixel Bar Cabinet by Boca do Lobo presents a ground-breaking work of pioneering design. This piece carries the dedication and art of those who built it, and a variety of traditional production techniques to craft an avant-garde furniture piece that is authentic, joyful and a perfect match for the digital age. Its playful character is captured in shape and colour palette, challenging design and finest craftsmanship. Made out of 1088 triangles, the upper part of the Pixel Bar Cabinet plays with perception and combines exceptional materials with a green composition to give the cabinet a unique, striking design.',
                'dimensions_cm' => ['width' => '91 cm', 'depth' => '46 cm', 'height' => '203 cm'],
                'dimensions_in' => ['width' => '35.8"', 'depth' => '118.1"', 'height' => '79.9"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Acrylic, Gold Leaf, Mirror, Translucid Emerald Lacquer, Triangles: Lacquered Wood, Wood',
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
                'name' => 'D.Heritage Cabinet',
                'slug' => 'd-heritage-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'D.Heritage Cabinet, by Boca do Lobo, is a cross between two of Boca do Lobo’s most iconic design pieces, keeping the form of the Dom Manuel cabinet, with the use of the azulejo finish found on the Heritage pieces. Used to tell tales and stories, azulejo tiles became increasingly popular during King Manuel’s reign, representing a landmark in Portuguese architecture. The D.Heritage Cabinet is a tribute to the country’s grand epoch, as well as to its traditional artisan crafts which Boca do Lobo seeks to keep alive.',
                'dimensions_cm' => ['width' => '85 cm', 'depth' => '45 cm', 'height' => '202 cm'],
                'dimensions_in' => ['width' => '33.5"', 'depth' => '17.7"', 'height' => '79.5"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: GLASS, LACQUER, Tiles. FINISHES: Hand Painted Tiles - Azulejo, Lathe work, Leaf guilding, Mahogany legs with black lacquer finish',
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
                'name' => 'Symphony Cabinet',
                'slug' => 'symphony-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Symphony Cabinet by Boca do Lobo is inspired by the movement and evolution of music, from the natural flow of sound to its various epochs and styles. Re-interpreting key design elements found in church organs, violins and the details of brass instruments, the Symphony Cabinet seeks to move and stir emotion much like a musical composition. Handcrafted from the finest materials, with a vision and aesthetic achieved by our designers and craftsmen alone, the Symphony Cabinet is a quintessential piece of pure elegance and style.',
                'dimensions_cm' => ['width' => '85 cm', 'depth' => '45 cm', 'height' => '202 cm'],
                'dimensions_in' => ['width' => '33.5"', 'depth' => '17.7"', 'height' => '79.5"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: POPLAR ROOT AND BRASS, Steel. FINISHES: GOLD FINISH POPLAR ROOT & POLISHED BRASS, Stainless Steel',
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
                'name' => 'Heritage Cabinet',
                'slug' => 'heritage-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Heritage Cabinet by Boca do Lobo is an elegant décor piece to compliment the decoration of any interior setting. A highly coveted ensemble of hand-painted tiles like those of an expertly curate art collection brings together master artisans and craftsmen for Boca do Lobo’s Heritage. In Heritage Cabinet interior, there is one door and four drawers, fully lined with golden leaf.',
                'dimensions_cm' => ['width' => '92 cm', 'depth' => '50 cm', 'height' => '182 cm'],
                'dimensions_in' => ['width' => '32.6"', 'depth' => '19.7"', 'height' => '71.71"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Gold Leaf, Hand Painted Tiles, Brass, Bronze Glass, Wood lacquered in white a high gloss varnish',
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
                'name' => 'Lapiaz Cabinet',
                'slug' => 'lapiaz-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Lapiaz Cabinet, by Boca do Lobo, takes exceptional craftsmanship and design to a new realm. Finding beauty in the most unexpected places, this contemporary design piece is inspired by authentic karst formations. Its organic features are achieved through the manual fitting of polished brass, and a sharp finish in polished stainless steel that portrays a perfect mirror. Lapiaz Cabinet has different-shaped doors and drawers open to a distinct poplar root wood veneer interior. The hammered gold details and the mirrored façade conveys both dynamics and elegance, a beautiful duality between power and refinement to bring a new contemporary verve into interior design. A functional artwork piece born from cold and freshly cracked to show off the world’s rich, golden details.',
                'dimensions_cm' => ['width' => '91 cm', 'depth' => '46 cm', 'height' => '203 cm'],
                'dimensions_in' => ['width' => '35.83"', 'depth' => '18.11"', 'height' => '79.92"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: STEEL, BRASS, TRANSPARENT GLASS, CLEAR MIRROR. FINISHES: POLISHED STAINLESS STEEL, POPLAR ROOT GLOSSY WOOD VENEER, POLISHED HAMMERED BRASS GLOSSY, GOLD FINISH',
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
                'name' => 'Pixel Cabinet',
                'slug' => 'pixel-cabinet',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => true,
                'description' => 'Pixel Cabinet by Boca do Lobo is an effort to honor the union between design and craftsmanship. The 1088 triangles that complete Pixel Cabinet carries the dedication and art of those who built it – with a diversity of finishes never seen before. The polished brass base gives Pixel Cabinet a unique personality, a strong and at the same time sophisticated character.',
                'dimensions_cm' => ['width' => '81 cm', 'depth' => '60 cm', 'height' => '163 cm'],
                'dimensions_in' => ['width' => '31.5"', 'depth' => '23.6"', 'height' => '64.2"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'BASE: WOOD, MIRROR, ACRYLIC, GOLD LEAF, SILVER LEAF. VARIED CHOICE OF COLORS',
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
                'name' => 'Claire Console Table',
                'slug' => 'claire-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Mid-century meets transitional style in this simple and clean console. Claire Console Table is produced in polished stainless steel and its square body contrasts with the rounded set of drawers and doors. These are finished in birdseye maple leaf to accent its presence. Altogether with the little doorknobs make this a unique piece of mid-century furniture.',
                'dimensions_cm' => ['width' => '40 cm', 'length' => '160 cm', 'height' => '89 cm'],
                'dimensions_in' => ['width' => '16"', 'length' => '63"', 'height' => '35"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'FINISHES: Doors: Bird`s Eye Wood leaf, Frame: Polished Stainless Steel',
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
                'name' => 'Craig Console Table',
                'slug' => 'craig-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Craig Console Table by Essential Home is made with chic polished brass legs and structure, featuring a top made of verde guatemala marble and a gallery shelf for additional storage space in your living room or entryway.',
                'dimensions_cm' => ['width' => '34 cm', 'length' => '122 cm', 'height' => '85 cm'],
                'dimensions_in' => ['width' => '13.3"', 'length' => '48"', 'height' => '33.4"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'MATERIALS: Brass & Marble. FINISHES: Polished Brass and Polished Guatemala Marble',
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
                'name' => 'Cay Console',
                'slug' => 'cay-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Cay Console by Brabbu represents Nature in its rawest form and flows through Cay Console as lava flows from a volcano eruption. With a tabletop in bronze glass and a base in casted brass, this entryway console table embodies nature’s ultimate scream. Allow yourself to hear the call, feeling its strength and reflecting it into your urban lifestyle',
                'dimensions_cm' => ['width' => '86 cm', 'depth' => '50 cm', 'height' => '82 cm'],
                'dimensions_in' => ['width' => '33.9"', 'depth' => '19.7"', 'height' => '32.3"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'MATERIALS: Bronze and Glass. FINISHES: Casted Brass',
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
                'name' => 'Agra Console Table',
                'slug' => 'agra-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Agra Console Table by Brabbu is the modest setting of one of the most famous monuments in the world, the Taj Mahal, also known as the marble mausoleum. Just like it, Agra Console Table is an impressive display of craftsmanship and elegance. Made of Estremoz marble with brass details, this marble console table will add refined grace to any room of your choice.',
                'dimensions_cm' => ['width' => '140 cm', 'depth' => '40 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '55.1"', 'depth' => '15.7"', 'height' => '35.4"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'MATERIALS: Estremoz marble. FINISHES: Estremoz Marble with Gold Plated Details',
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
                'name' => 'Bastei Console',
                'slug' => 'bastei-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Linked by a bridge, Bastei is one of the most famous rock formations in Germany. To honour such outstanding beauty, our designers created Bastei Console, by Brabbu. With a tabletop in glossy walnut root veneer and a base in glossy gold leaf, this modern entryway console table will steal all the attention of any interior design style.',
                'dimensions_cm' => ['width' => '160 cm', 'depth' => '39 cm', 'height' => '89 cm'],
                'dimensions_in' => ['width' => '62.77"', 'depth' => '15.35"', 'height' => '35.03"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Base: Glossy Gold Leaf, Top: Glossy Walnut root veneer',
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
                'name' => 'Kyan Console',
                'slug' => 'kyan-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The incredible Beijing’ skyline inspired our designers to create KYAN Console Table, a strong and edgy furniture piece. Featuring a top in bronze glass and a base in iron with acid reaction finish, this modern console tells a story with an unfinished end.',
                'dimensions_cm' => ['width' => '180 cm', 'depth' => '35 cm', 'height' => '70 cm'],
                'dimensions_in' => ['width' => '70.86"', 'depth' => '13.77"', 'height' => '29.53"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Top in bronze glass and base in iron with acid reaction finish.',
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
                'name' => 'Mecca Console',
                'slug' => 'mecca-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Mosques are magnificent architectural structures in addition to being centers of spiritual devotion. The Mecca Console Table by Brabbu is a striking piece of furniture with brushed brass matte columns that echo the mosques’ ageless architectural legacy. It was painstakingly crafted, drawing inspiration from the grandeur of mosques. A visual masterpiece is created when the opulent Nero Marquina marble top contrasts with this elaborate gold framework, artfully fusing tradition and modernity. The Mecca Console Table is more than just a piece of furniture; it’s a statement of tasteful elegance that turns any space into an opulent haven and iconic living space.',
                'dimensions_cm' => ['width' => '160 cm', 'depth' => '45 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '62.99"', 'depth' => '17.72"', 'height' => '35.43"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'MATERIALS: BASE In Brushed Brass Matte, TOP In Marble Nero Marquina',
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
                'name' => 'Bryce II Console',
                'slug' => 'bryce-ii-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Bryce II Console pays tribute to a giant natural amphitheater caused by erosion through the Paunsaugnt Plateau. This plateau through its unique design in high gloss black lacquer and glossy gold leaf. Or versions in faux-marble painting. It is a plus to any home entryway or even as a plus in the living room or dining room.',
                'dimensions_cm' => ['width' => '160 cm', 'depth' => '40 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '63"', 'depth' => '15.7"', 'height' => '35.43"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'STRUCTURE Black lacquer. God leaf. Glossy varnish, STRUCTURE Faux-marble painting, glossy varnish',
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
                'name' => 'BRYCE I CONSOLE',
                'slug' => 'bryce-i-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Bryce is a giant natural amphitheatre caused by erosion through the Paunsaugnt Plateau. The BRYCE I Console pays tribute to this plateau through its unique design in high gloss black lacquer and glossy gold leaf. The BRYCE Black Lacquer Console Table will be the focus point in every room you set it in.',
                'dimensions_cm' => ['width' => '155 cm', 'depth' => '35 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '61.02"', 'depth' => '13.77"', 'height' => '35.43"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'STRUCTURE Black lacquer. God leaf. Gloss varnish',
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
                'name' => 'Koi Console Table',
                'slug' => 'koi-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Koi Console, by Brabbu, has a base in brushed aged brass and a top in Nero Marquina marble, this foyer table will add refined elegance to any modern interior design. Koi carp is a recurring symbol of Japanese culture. Its natural color mutations reveal its capacity to adapt, just like Koi Console.',
                'dimensions_cm' => ['width' => '160 cm', 'depth' => '45 cm', 'height' => '94 cm'],
                'dimensions_in' => ['width' => '63"', 'depth' => '17.7"', 'height' => '37"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'MATERIALS: Brass, Nero Marquina Marble. FINISHES: Brushed Brass Matte',
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
                'name' => 'Colosseum Console',
                'slug' => 'colosseum-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Colosseum Console, by Brabbu, was created inspired by the Roman Colosseum is one of the new seven wonders of the world. Inspired by its empowering presence. Made of red lacquer with translucent black with gloss varnish, Colosseum Console is a modern console table that will help you bring the most enduring icon of Italy to any home decor.',
                'dimensions_cm' => ['width' => '160 cm', 'depth' => '30 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '63"', 'depth' => '11.81"', 'height' => '35.43"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'MATERIALS: MATERIALS: Structure in nero marquina faux-marble painting glossy. FINISHES: FINISHES: RED LACQUER WITH TRANSLUCENT BLACK GLOSSY VARNISH',
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
                'name' => 'Ardara II Console',
                'slug' => 'ardara-ii-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Ardara II Console Table by Brabbu, was inspired by unique structures – the dolmens are ancient stone monuments from the Neolithic period. With a finish in gold leaf with a gloss varnish, this console table will give a unique twist to any interior design.',
                'dimensions_cm' => ['width' => '160 cm', 'depth' => '40 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '63"', 'depth' => '15.75"', 'height' => '35.43"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'SAHARA NOIR FAUX-MARBLE PAINTING GLOSSY',
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
                'name' => 'Ardara Console',
                'slug' => 'ardara-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => true,
                'description' => 'Ardara Console Table, by Brabbu, has a finish in gold leaf with a gloss varnish, this modern console table will give a unique twist to any interior design. Dolmens are ancient stone monuments from the Neolithic period. These unique structures were the inspiration behind Ardara Console Table.',
                'dimensions_cm' => ['width' => '160 cm', 'depth' => '40 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '63"', 'depth' => '15.75"', 'height' => '35.43"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Structure in gold leaf with gloss varnish.',
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
                'name' => 'Aroma Console',
                'slug' => 'aroma-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Aroma Console by Caffe Latte top is made from luxurious rosewood or palisander, while the support structure comes in stainless steel. No other thing is as uplifting as the coffee’s aroma in the air and this table shows how the smallest details can make the biggest impression in your interiors. If coffee is your ultimate ally throughout the day, then you must have it stylishly.',
                'dimensions_cm' => ['width' => '184 cm', 'depth' => '44 cm', 'height' => '50 cm'],
                'dimensions_in' => ['width' => '72.44"', 'depth' => '17.32"', 'height' => '19.68"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'MATERIALS: STAINLESS STEEL, Wood Veneer. FINISHES: CREAM MATTE LACQUER, EPOXY STAINLESS STEEL BRONZE MATTE VARNISH, PALISANDER MATTE WOOD VENEER',
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
                'name' => 'Lungo Console',
                'slug' => 'lungo-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Lungo Console, by Caffe Latte, is a refreshing, clean, and simplistic design, the Lungo Console’s strict and harsh lines make it the sublime item for a modern interior. A subtle piece that doesn’t overpower or clashes with other designs, but still delivers a sense of splendor and taste, with the prolonged and thin stainless steel with brushed bronze finished legs, embracing a sleek and long Walnut Veneer.',
                'dimensions_cm' => ['width' => '162 cm', 'depth' => '44 cm', 'height' => '99 cm'],
                'dimensions_in' => ['width' => '63.78"', 'depth' => '17.32"', 'height' => '38.97"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'Walnut Matte Wood Veneer or Walnut Root Matte Wood Veneer, Epoxy Iron Bronze Matte Varnish',
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
                'name' => 'Nougat Console',
                'slug' => 'nougat-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Nougat Console seamlessly combines style and functionality to enhance the aesthetic appeal of any space. Made from aged and hammered brushed brass, it is inspired by the balanced fusion of tastes we get when combining coffee and chocolate. Available in nero marquina marble or ash wood, the Nougat Console proves that good design goes beyond aesthetics—it should enhance the way we live. A timeless addition to any modern residential or hospitality interior.',
                'dimensions_cm' => ['width' => '168 cm', 'depth' => '40 cm', 'height' => '88 cm'],
                'dimensions_in' => ['width' => '66.14"', 'depth' => '15.78"', 'height' => '34.64"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'NERO MARQUINA, AGED BRUSHED BRASS HAMMERED, AGED BRUSHED BRASS',
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
                'name' => 'Liberica Console',
                'slug' => 'liberica-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Liberica Console, by Caffe Latte, as harsh and strict lines, from design contrast perfectly with the fluidity and sort of feminine touch of the mirror. Inspired by the Coffea liberica plant, the mirror takes an oval countour, resembling the delicate shape of the plant’s leaf. Liberica Console is stainless steel with a bronze matte base, that simulates the sturdy branches that can grow up to nine meters, holding in perfect harmony a refined marble top. A minimalist design that will not go unnoticed.',
                'dimensions_cm' => ['width' => '180 cm', 'depth' => '40 cm', 'height' => '208 cm'],
                'dimensions_in' => ['width' => '70.87"', 'depth' => '15.78"', 'height' => '81.89"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'Body: White Olimpic Marble, Epoxy Stainless Steel Bronze Matte Varnish, Mirror rim: Epoxy stainless steel brushed bronze varnish, Mirror: Clear Mirror',
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
                'name' => 'Malawi Console',
                'slug' => 'malawi-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Malawi Console , by Caffe Latte is all about minimalist elegance and understated charm. With a top made out of resin travertino marble and lacquered feet, Malawi Console easily sets the tone for a serene ambiance. This console is inspired by Malawi, an African country known for its sweet, delicate, and floral coffee. With a neutral design and functional aesthetic, Malawi Console shows us that there is no second chance to make a good first impression.',
                'dimensions_cm' => ['width' => '180 cm', 'depth' => '46 cm', 'height' => '85 cm'],
                'dimensions_in' => ['width' => '70.87"', 'depth' => '18.11"', 'height' => '33.46"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'LAQUERED BLACK BROWN MATTE, RESIN TRAVERTINE MARBLE',
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
                'name' => 'Empress Console',
                'slug' => 'empress-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The Empress Console is fully aware of her powers, embraced in her untamed magnetic beauty. Exquisite sand-cast brass entangled with amber rock crystals wildly grows across her sleek, curved, ash-black wood veneer. This statement console, available in a left and right, exudes boundless creativity and innovation. Beyond furniture, The Empress Console brings the allure of untamed nature and the sophistication of a work of art where every detail reflects refined craftsmanship.',
                'dimensions_cm' => ['width' => '140 cm', 'depth' => '50 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '55"', 'depth' => '20"', 'height' => '35"'],
                'brand' => ['name' => 'KOKET', 'slug' => 'koket'],
                'materials_and_finishes' => 'Base Detail: Cast Brass (Semi Gloss Finish), Front Detail Stones: Aragonite , Brazilian Citrine and Quartz Crystal, Front Detail: Cast Brass (Semi Gloss Finish), Structure: Black Tulip Veneer (Matte Finish), Top: Cast Brass (Semi Gloss Finish)',
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
                'name' => 'Ribbon Console',
                'slug' => 'ribbon-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Get wrapped up in the rhythmic design of the Ribbon console table by Koket.The provocative twists and turns of the base are delicately adorned in gleaming metalic leaf, mimicking the sheen of a girl’s hair ribbon. The luxury console table’s playful base is topped with a pristine high gloss black lacquer top.',
                'dimensions_cm' => ['width' => '170 cm', 'depth' => '50 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '67"', 'depth' => '20"', 'height' => '35"'],
                'brand' => ['name' => 'KOKET', 'slug' => 'koket'],
                'materials_and_finishes' => 'Base: Broken Gold Leaf (High Gloss Finish) and Black Lacquer (High Gloss Finish), Top: Black Lacquer (High Gloss Finish)',
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
                'name' => 'Dovedale Console',
                'slug' => 'dovedale-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Dovedale Console, by Covet Collection, is a marvelous and discreet console with the incorporated and unifying characteristic of the granite stone in its center for a sublime look. From the Dovedale family, inspired by the Stepping Stone the wooden carved base provides a distinctive natural appeal by being shaped in different levels and different colors, while the hardwood lacquered with amobe-bluette top and drawer uses a contemporary square shape. An indispensable item for any room or setting.',
                'dimensions_cm' => ['width' => '120 cm', 'depth' => '57 cm', 'height' => '68 cm'],
                'dimensions_in' => ['width' => '47.24"', 'depth' => '22.44"', 'height' => '26.77"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: OAK WOOD WITH BLUE STAIN VARNISH, OAK WOOD WITH MATTE STAIN VARNISH. DETAIL: BRILLIANT BLACK CERAMIC STONE',
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
                'name' => 'Valdés Console',
                'slug' => 'valdes-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Valdés Console, by Covet House, is an enormous round mirror combined with a dark walnut top, over two sublime designed legs. Beautifully crafted and naturally inspired. The Valdés Peninsula has been listed as a UNESCO World Heritage Place for its global significance as a site for marine animal conservation, where its shape and crystal-clear water served as the inspiration for this unique console.',
                'dimensions_cm' => ['depth' => '45 cm', 'length' => '200 cm', 'height' => '230 cm'],
                'dimensions_in' => ['depth' => '17.71"', 'length' => '78.74"', 'height' => '90.55"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: DARK WALNUT VENEER, MARBLE PATAGÓNIA. DRAWERS: DARK WALNUT VENEER, IRON WITH MATE CHAMPAGNE TEXTURED FINE POWDER. FEET: Wood with Mate champagne textured fine powder. MIRROR: NORMAL MIRROR WITH EDGE IN IRON WITH MATE CHAMPAGNE TEXTURED FINE POWDER',
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
                'name' => 'Linear Console',
                'slug' => 'linear-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Linear Console, by Covet Collection, is simple in form, yet luxurious in materials and details, this marble and polished stainless steel console are a must-have in modern luxurious interiors. The very definition of elegant luxury.',
                'dimensions_cm' => ['width' => '120 cm', 'depth' => '50 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '47.24"', 'depth' => '16.68"', 'height' => '35.43"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: NERO MARQUINA MARBLE, POLISHED STAINLESS STEEL',
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
                'name' => 'Mood Console',
                'slug' => 'mood-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The MOOD Console is designed to set the tone for your home, defining a modern aesthetic while uplifting your mood. There’s no second chance to make a great first impression, and this console ensures just that. Crafted from glossy, gold-plated stainless steel, it perfectly marries the purity of white with the warmth of gold. This harmonious blend effortlessly enhances any space, making the MOOD Console a must-have for those who appreciate refined elegance and contemporary style.',
                'dimensions_cm' => ['width' => '167 cm', 'depth' => '45 cm', 'height' => '86 cm'],
                'dimensions_in' => ['width' => '65.75"', 'depth' => '17.71"', 'height' => '33.86"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: GOLD PLATED STAINLESS STEEL GLOSSY, WHITE OLIMPIC MARBLE. TOP: GOLD PLATED STAINLESS STEEL GLOSSY',
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
                'name' => 'Anjelica Console',
                'slug' => 'anjelica-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Consoles are versatile pieces that provide a surface without taking up too much space. Anjelica Console, by Covet Collection, is a modern wood and marble console table that features one drawer for extra storage. Its sculptural form and high-end materials bring character and charm to a room, be it a modern hallway or entryway, or living room.',
                'dimensions_cm' => ['width' => '115 cm', 'depth' => '40 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '45.27"', 'depth' => '15.74"', 'height' => '35.43"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: Ash Wood Matte Varnish, Cream Velvet, estremoz marble, NERO MARQUINA MARBLE, POLISHED BRASS',
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
                'name' => 'Plata Console',
                'slug' => 'plata-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Plata Console, by Covet House, its exciting two rounded legs converge with the modern straight lines from the top, creating a combination of both natural and contemporary elements. Named after Rio de Plata, one of the places visited by the Portuguese adventurers in the early European exploration of the Patagonia region, this sublime console has a mix of metal and Patagonia marble.',
                'dimensions_cm' => ['depth' => '40 cm', 'length' => '170 cm', 'height' => '87 cm'],
                'dimensions_in' => ['depth' => '15.74"', 'length' => '62.92"', 'height' => '34.25"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: WOOD WITH MATE CHAMPAGNE TEXTURED FINE POWDER. FEET: MARBLE PATAGÓNIA, Wood with Mate champagne textured fine powder. TOP: MARBLE PATAGÓNIA',
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
                'name' => 'Vertigo Console Table',
                'slug' => 'vertigo-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Prove to be impressive through its conspicuous and elegant lines, the prodigious Vertigo Console Table has a striking dynamic pose. In either modern or classic entrance halls, the shimmering line in gold plated brass merge in any living room decoration in Nero Marquina marble finish. A fascinating and exclusive console that exhales luxury and a cohesive style.',
                'dimensions_cm' => ['depth' => '45 cm', 'length' => '160 cm', 'height' => '92.5 cm'],
                'dimensions_in' => ['depth' => '17.7"', 'length' => '63.1"', 'height' => '36.4"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Body: Brass & Marble. FINISHES: Body: Gold plated & Marble Nero Marquina',
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
                'name' => 'Spear Console Table',
                'slug' => 'spear-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Spear Console Table by Luxxu was designed through an imposing sharp pen. The diversity of its materials from brass, wood, leather, and marble results in a console with straight lines. From Ancient Rome comes its inspiration, bringing a timeless design to this art piece. A symbiosis of toughness and elegance, perfect to bring an environment to its most luxurious ambiance.',
                'dimensions_cm' => ['depth' => '44 cm', 'length' => '138 cm', 'height' => '88.5 cm'],
                'dimensions_in' => ['depth' => '17.3"', 'length' => '54.3"', 'height' => '34.8"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass, Wood Leather & Marble. FINISHES: Polished Brass, Black Lacquer, Black Leather & Nero Marquina Marble',
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
                'name' => 'Apotheosis Console Table',
                'slug' => 'apotheosis-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Apotheosis Console Table by Luxxu is a hymn to sophistication and design, that creates a strong presence that will revolutionize the looks of any project. It’s straight lines make for a glorious construction, embodying the spirit of exclusive design. A daring and elegant balance between marble, lacquer, and brass lines..',
                'dimensions_cm' => ['depth' => '53 cm', 'length' => '180 cm', 'height' => '87 cm'],
                'dimensions_in' => ['depth' => '21"', 'length' => '70.9"', 'height' => '34.3"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass, Wood & Marble. FINISHES: Polished brass, Black lacquer & Nero marquina marble',
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
                'name' => 'Beyond Console',
                'slug' => 'beyond-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => true,
                'description' => 'Beyond Console, by Luxxu, with the best handmade techniques finds balance in a delicate work in wood softened with touches of brass that reflect warm and golden tones on its polished surface. An impressive display of elegance, Beyond Console, shows the exquisite capacity to fill a variety of ambiances thanks to its luxury presence.',
                'dimensions_cm' => ['depth' => '40 cm', 'length' => '160 cm', 'height' => '90 cm'],
                'dimensions_in' => ['depth' => '15.7"', 'length' => '63"', 'height' => '35.4"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass and Wood. FINISHES: Body: Gold plated & Black lacquer',
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
                'name' => 'Myllo Console',
                'slug' => 'myllo-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Myllo Console, by Luxxu, functions as a symbol of solitude and innovation. Composed by Marble and Polished Brass it reflects the rawness and perfection of an engineer’s masterpiece, fragile as it may appear but solid and firm and promises to hold your breath. It’s a statement piece that holds any room’s highest expectations.',
                'dimensions_cm' => ['width' => '142 cm', 'depth' => '36 cm', 'height' => '100 cm'],
                'dimensions_in' => ['width' => '55.9"', 'depth' => '15.17"', 'height' => '39.37"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass, Glass, Wood & Marble. FINISHES: Polished brass, Black glass, Black lacquer & Nero marquina',
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
                'name' => 'Algerone Console',
                'slug' => 'algerone-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Algerone Console, by Luxxu is an opulent console with acute geometric features, inspired by architectural elements. Just like its counterparts, it was designed to remind us of the unique strength and class that only marble has. Its Statuario marble top is supported by a sleek base adorned with synthetic leather and brass details. A design that will redefine the way one perceives console tables.',
                'dimensions_cm' => ['depth' => '47 cm', 'length' => '160 cm', 'height' => '83 cm'],
                'dimensions_in' => ['depth' => '18.5"', 'length' => '62.99"', 'height' => '32.68"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'BODY: gray leather, POLISHED BRASS, Statuário Marble',
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
                'name' => 'Suspicion Console',
                'slug' => 'suspicion-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => true,
                'description' => 'Suspicion Console, by Luxxu, is daringly sculpted in stone and fills any room with lavishing luxury, the zenith between elegance and balance. This marble console table is the epitome of intricate equilibrium, joining marble with fine brass lines.',
                'dimensions_cm' => ['depth' => '40 cm', 'length' => '170 cm', 'height' => '86 cm'],
                'dimensions_in' => ['depth' => '15.7"', 'length' => '66.93"', 'height' => '33.9"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass & Marble. FINISHES: Polished brass, Nero marquina marble & amarillo triana Marble',
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
                'name' => 'Infinity Console',
                'slug' => 'infinity-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Infinity Console is stunning in either modern or classic entrance halls and a great addition to any living room decoration. Handcrafted by our talented craftsmen, this prodigious piece has a striking geometric mosaic wood veneer top and a copper leaf base finished with high gloss varnish. Boca do Lobo’s furniture exhales style, grace and luxury and this is certainly the case for Infinity console, a fascinating and exclusive piece, proven to be impressive and eye-catching through its sinuous and elegant lines. Infinity holds a shimmering aura that gets a classy touch to any living space.',
                'dimensions_cm' => ['depth' => '40 cm', 'height' => '86 cm'],
                'dimensions_in' => ['depth' => '15.7"', 'height' => '33.9"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Wood, Copper leaf, Marquetry in ebony leaf, high gloss varnish',
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
                'name' => 'Sinuous Console',
                'slug' => 'sinuous-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Boca do Lobo is an exclusive design furniture company that transcends the fusion of traditional and contemporary design. With Sinuous Patina Console, you will successfully create a luxurious environment. Sinuous lines draw the elegant character of this console, gathering the styling of the best sellers of Coolors Collection. Sinuous is made for those who love harmonious lines mixed with exquisite detail. Its design is seductive and lures you into a magical and golden world. To achieve extravagance, Boca Do Lobo’s artisans handcrafted the structure in mahogany with a high gloss black lacquer finish and top coated in polished brass plated, bringing up the vivid and bright side of Boca do Lobo. Contains three drawers.',
                'dimensions_cm' => ['depth' => '47 cm', 'height' => '80 cm'],
                'dimensions_in' => ['depth' => '18.5"', 'height' => '31.5"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Mahogany, High Gloss Varnish, Polished Brass',
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
                'name' => 'Lumiere Console',
                'slug' => 'lumiere-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Lumiere Console, by Boca do Lobo. is a sculptural set composed of a large wall mirror, lamp, and console lying in one arched frame made of wood folded by polished stainless steel that portrays a perfect mirror. Through the manual fitting of gold hammered brass sheet bursts an antique fixture with an intricate edge detailing arm topped by an elegant pane lantern hand-sculpted by casting mold. In the lower section, Lumiere Console is a unique console made of cast brass arises to add to this artwork piece an extra functionality.',
                'dimensions_cm' => ['width' => '150 cm', 'depth' => '83 cm', 'height' => '250 cm'],
                'dimensions_in' => ['width' => '59"', 'depth' => '32.68"', 'height' => '98.4"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Glass, Stainless Steel, Wood. FINISHES: Gold plated and Casted Brass',
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
                'name' => 'Lapiaz Console',
                'slug' => 'lapiaz-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Lapiaz Console, by Boca do Lobo takes exceptional craftsmanship and design to a new realm. Finding beauty in the most unexpected places, this contemporary design piece is inspired by authentic karst formations. Its organic features are achieved through the manual fitting of polished brass, and a sharp finish in polished stainless steel that portrays a perfect mirror. The hammered gold details and the mirrored façade conveys both dynamics and elegance, a beautiful duality between power and refinement to bring a new contemporary verve into interior design. Lapiaz Console Table functional artwork piece born from cold and freshly cracked to showing off the world rich, golden details.',
                'dimensions_cm' => ['width' => '170 cm', 'depth' => '40 cm', 'height' => '85 cm'],
                'dimensions_in' => ['width' => '66.9"', 'depth' => '15.7"', 'height' => '33.5"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Brass, Steel, Wood. FINISHES: Polished Brass, Polished Stainless Steel',
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
                'name' => 'Soho Console',
                'slug' => 'soho-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Soho Console, a tribute to Soho Sideboard, has been launched by Boca Do Lobo. A collection of wood drawers finished in mirror and black glass with etched detailing, gold leaf, diamond matched rosewood veneer, high gloss blue or pink lacquer, and white lacquer with hand carved relief patterning. The drawers are accented with handmade brass pulls, some of which are plated in chrome, and cut glass knobs. All the drawers are customized as we also offer you the possibility to change the materials and the finishing.',
                'dimensions_cm' => ['depth' => '43 cm', 'height' => '87 cm'],
                'dimensions_in' => ['depth' => '16.8"', 'height' => '34.3"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Bronze glass, brass, fabric, rosewood, golden leaf, lacquered glass, crystal.',
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
                'name' => 'Empire Console',
                'slug' => 'empire-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Empire Console is a sublime piece built in marble with polished brass details. Its cracks are hand-carved and inserted through polished brass sheets, which are hand-hammered for a unique finish. Empire Console by Boca do Lobo was designed to make an impression. This unique console is a unique masterpiece that will fit perfectly in exclusive entryways or hallways and empowering spaces. Empire Console was made for those with refined minds and tastes.',
                'dimensions_cm' => ['width' => '180 cm', 'depth' => '46 cm', 'height' => '85 cm'],
                'dimensions_in' => ['width' => '70.9"', 'depth' => '18.1"', 'height' => '33.5"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Marble. FINISHES: Nero Marquina Marble',
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
                'name' => 'Stonehenge Console',
                'slug' => 'stonehenge-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Stonehenge Console, by Boca do Lobo, promises to elevate your living space to the next level. The metallic hues make an elegant contrast while beautifully combining and paying tribute to the Neolithic and Bronze Ages. Found inspiration in the prehistoric monument Stonehenge, positioned asymmetrically and composed of striking finishes and materials Brass and Marble.',
                'dimensions_cm' => ['width' => '129 cm', 'depth' => '56 cm', 'height' => '91 cm'],
                'dimensions_in' => ['width' => '51.2"', 'depth' => '22"', 'height' => '35.8"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Brass, GLASS, Marble, Metal. FINISHES: Polished Brass',
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
                'name' => 'Monochrome Console',
                'slug' => 'monochrome-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Monochrome Console is a remarkable piece that stands out in any room or setting, it’s a demonstration of both imagination and strong design skills, combined exceptional craftsmanship. It expresses a leading-edge outlook through its distinct shape and colour. Available in purple and electric blue, the Monochrome transmits attitude and spine.',
                'dimensions_cm' => ['depth' => '54 cm', 'height' => '87 cm'],
                'dimensions_in' => ['depth' => '21.3"', 'height' => '34.3"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Molded fiberglass filled with expandable polyurethane, High gloss electric purple translucid.',
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
                'name' => 'Newton console',
                'slug' => 'newton-console',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Newton Console by Boca do Lobo is a standout piece of international desire that distinguishes itself from all the other designs by its futuristic forms. Defying the laws of physics, this futuristic console has been designed by taking inspiration from its elder brother – Newton dining table.',
                'dimensions_cm' => ['width' => '120 cm', 'depth' => '48 cm', 'height' => '85 cm'],
                'dimensions_in' => ['width' => '47.2"', 'depth' => '18.9"', 'height' => '33.5"'],
                'brand' => ['name' => 'BOCA DO LOBO', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Aluminum, Black Lacquer and Gold Plated.',
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
                'name' => 'Brando Sideboard',
                'slug' => 'brando-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Brando Sideboard is a very inconspicuous piece of modern design that works as a discreetly stylish storage solution. A simple body of solid wood containing six large drawers that is sure to satisfy your room’s storage needs.',
                'dimensions_cm' => ['width' => '52 cm', 'length' => '194 cm', 'height' => '85.2 cm'],
                'dimensions_in' => ['width' => '20.47"', 'length' => '76.38"', 'height' => '33.54"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'Polished Brass and Varnished Walnut',
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
                'name' => 'Franco Sideboard',
                'slug' => 'franco-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Franco Sideboard has very clean lines on the body of solid wood, this is a testament to Scandinavian design. This sideboard is supported by four legs with polished brass tips, which is also present on the drawer handles, and displays rattan grills on the sides instantly evoking nature.',
                'dimensions_cm' => ['width' => '50 cm', 'length' => '180 cm', 'height' => '85 cm'],
                'dimensions_in' => ['width' => '19.69"', 'length' => '70.87"', 'height' => '33.46"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'Polished Brass, Varnished Walnut and Straw.',
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
                'name' => 'Vittorio Sideboard',
                'slug' => 'vittorio-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Vittorio sideboard has a sophisticated design and curvilinear lines, named after the great Vittorio Gassman. The combination of the wooden black lacquered H-shaped legs with a walnut wood body and recessed golden handles, recalls the lines of a blooming flower. The recessed top of this unique sideboard was also handcrafted in Calacatta Oro marble for an extra touch of luxury. *In partnership with Carlo Donati Studio.',
                'dimensions_cm' => ['width' => '217 cm', 'length' => '42.5 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '85.43"', 'length' => '16.72"', 'height' => '35.43"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'FINISHES: Solid Wood Walnut, Brushed Brass and Calacatta Gold Marble',
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
                'name' => 'Edith Sideboard',
                'slug' => 'edith-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Edith Sideboard, by Essential Home is a velvet sideboard, something that makes it a distinctive piece to furnish your living room. It is upholstered with soft velvet, and stands out for its high-end look at the top, making use of a grey textured marble. It features a curvilinear body with sleek and simple legs made of brass, that contrasts with strong accents of gold. A statement storage piece for the retro-chic lovers.',
                'dimensions_cm' => ['width' => '50 cm', 'length' => '180 cm', 'height' => '85 cm'],
                'dimensions_in' => ['width' => '19.69"', 'length' => '70.86"', 'height' => '33.46"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'MATERIALS: Brass, Marble and Essential Home Collection Textile. FINISHES: Body: Brass, Marble and Essential Home Collection Textile, Feet: Brass',
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
                'name' => 'Anthony Sideboard',
                'slug' => 'anthony-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Anthony Sideboard, by Essential Home, was created from a combination of retro and contemporary styles. Stunningly produced in solid walnut wood, Anthony Sideboard is topped by white polished marble and supported by brass square feet. It brings a playful geometric pattern on its doors, accented by its rounded edges and the brass trim all over the body.',
                'dimensions_cm' => ['width' => '220 cm', 'depth' => '50 cm', 'height' => '77.6 cm'],
                'dimensions_in' => ['width' => '86.6"', 'depth' => '19.69"', 'height' => '30.55"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'MATERIALS: Brass, Walnut Wood, Estremoz Marble. FINISHES: Walnut Matte Finish, Polished Brass',
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
                'name' => 'Monocles Sideboard',
                'slug' => 'monocles-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Monocles Sideboard, by Essential Home, is a perfect furniture piece for retro lovers and mid-century admirers. Built entirely out of solid walnut wood, accented by its gold-plated brass front doors that feature a protruding circular design. These circles are then engraved to the back and side of the unit, giving it an extreme character and high-end look.',
                'dimensions_cm' => ['width' => '48.6 cm', 'length' => '162 cm', 'height' => '79.8 cm'],
                'dimensions_in' => ['width' => '19.12"', 'length' => '63.77"', 'height' => '31.41"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'MATERIALS: Brass and Walnut. FINISHES: Gold Plated Brass, Matte Black and Varnished Walnut',
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
                'name' => 'Dandy Sideboard',
                'slug' => 'dandy-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Sleek and stylish, Dandy Sideboard truly embodies the best from Scandinavian design roots. Since it is very versatile, it can be used as a drinks cabinet and be placed both in a living or dressing room.',
                'dimensions_cm' => ['width' => '50.5 cm', 'length' => '210 cm', 'height' => '80.5 cm'],
                'dimensions_in' => ['width' => '19.88"', 'length' => '82.68"', 'height' => '31.69"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'FINISHES: Gold Plated Brass, Varnished Walnut and Straw',
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
                'name' => 'Kahn II sideboard',
                'slug' => 'kahn-ii-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Inspired by the monumental and monolithic style of Louis Kahn, this is a sideboard that will bring a strong presence to your living or dining room with its everlasting and mature look. A perfect design piece for any luxury interior, Kahn surprises with a gorgeous high gloss varnish over the wood.',
                'dimensions_cm' => ['width' => '58 cm', 'length' => '295 cm', 'height' => '81.5 cm'],
                'dimensions_in' => ['width' => '22.83"', 'length' => '87.01"', 'height' => '32.09"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'Black Glass, Walnut & Polished Brass',
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
                'name' => 'Kahn sideboard',
                'slug' => 'kahn-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Kahn Sideboard is a sideboard that will bring a strong presence to your living room. Inspired by the monumental and monolithic style of Louis Kahn, it is produced in black poplar, a type of cottonwood, and brass trims that are laid out symmetrically to provide an overall sense of unity and form. The wooden interior is glazed with a soft caramel tone producing a gorgeous effect as you open its drawers.',
                'dimensions_cm' => ['width' => '58 cm', 'length' => '220 cm', 'height' => '81.5 cm'],
                'dimensions_in' => ['width' => '22.83"', 'length' => '86.6"', 'height' => '32.09"'],
                'brand' => ['name' => 'ESSENTIAL HOME', 'slug' => 'essential-home'],
                'materials_and_finishes' => 'FINISHES: Gold Plated Brass, Glossy Black and Varnished Poplar',
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
                'name' => 'Huang Sideboard',
                'slug' => 'huang-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Baraka Sideboard, by Brabbu, is charismatic by its never-ending contrasts between ancient and contemporary lines. Baraka Sideboard‘s body’s half brightness combines walnut root veneer with brass details, an interior in bird eye wood veneer, and the base in vintage matte brass. This exquisite design piece that stands out outside of historical time will enhance the beauty of Baraka energy in your modern living room set. Baraka is an ancient Sufi word that means ”a blessing – the breath of life -, or essence of life” from which the evolutionary process unfolds.',
                'dimensions_cm' => ['width' => '220 cm', 'depth' => '50 cm', 'height' => '87 cm'],
                'dimensions_in' => ['width' => '86.6"', 'depth' => '19.7"', 'height' => '34.3"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'MATERIALS: Walnut wood and Brass. FINISHES: Matte walnut root veneer (outside) and in matte palisander veneer (inside), with brushed aged and hammed matte brass.',
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
                'name' => 'Baraka Sideboard',
                'slug' => 'baraka-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Baraka Sideboard, by Brabbu, is charismatic by its never-ending contrasts between ancient and contemporary lines. Baraka Sideboard‘s body’s half brightness combines walnut root veneer with brass details, an interior in bird eye wood veneer, and the base in vintage matte brass. This exquisite design piece that stands out outside of historical time will enhance the beauty of Baraka energy in your modern living room set. Baraka is an ancient Sufi word that means ”a blessing – the breath of life -, or essence of life” from which the evolutionary process unfolds.',
                'dimensions_cm' => ['width' => '240 cm', 'depth' => '50 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '94.48"', 'depth' => '19.7"', 'height' => '35.43"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'MATERIALS: Wood and Brass. FINISHES: walnut root veneer matte with polished brass, poplar wood veneer matte, smoked glass and brushed aged matte brass',
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
                'name' => 'Nazca Sideboard',
                'slug' => 'nazca-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Nazca is a tectonic plate located in the southern Pacific Ocean. As a tribute to Mother Earth’s heartbeat, our designers created Nazca Sideboard with a structure in matte walnut root veneer and a base in vintage brass matte. This 4-door sideboard will add a richer earth beat to any home decor.',
                'dimensions_cm' => ['width' => '210 cm', 'depth' => '50 cm', 'height' => '93 cm'],
                'dimensions_in' => ['width' => '82.7"', 'depth' => '19.7"', 'height' => '36.6"'],
                'brand' => ['name' => 'BRABBU', 'slug' => 'brabbu'],
                'materials_and_finishes' => 'Base: Vintage brass matte, Interior: ash wood, Structure: Matte Walnut root veneer',
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
                'name' => 'Latte Sideboard',
                'slug' => 'latte-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Latte Sideboard, by Caffe Latte, is the perfect piece to complete a simple and contemporary design. Versatile, functional, and smooth, Latte Sideboard is lacquered in high gloss cream and gently lies in dark bronze matte feet, with strong lines and a firm personality. This charming sideboard brings instant character and hygge to a minimalist design.',
                'dimensions_cm' => ['width' => '202 cm', 'depth' => '50 cm', 'height' => '78 cm'],
                'dimensions_in' => ['width' => '79.5"', 'depth' => '19.7"', 'height' => '30.7"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'MATERIALS: Bronze Glass. FINISHES: CREAM GLOSSY LACQUER, EPOXY IRON BRONZE MATTE VARNISH',
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
                'name' => 'Boma Sideboard',
                'slug' => 'boma-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Boma Sideboard, by Caffe Latte, was inspired by the Boma Plateau, a region in the east of South Sudan, which is also one of the few places where the wild Coffea arabica grows. This breathtaking landscape serves as inspiration for the Boma Sideboard design, where the round inox aged detail protrudes from the organic pattern of the decape wood, resembling the fantastic mountain that emerges from the plains of the Boma Natural Park.',
                'dimensions_cm' => ['width' => '240 cm', 'depth' => '50 cm', 'height' => '82 cm'],
                'dimensions_in' => ['width' => '94.48"', 'length' => '19.68"', 'height' => '38.28"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'BASE: EPOXY IRON BRONZE MATTE VARNISH, BODY:DECAPE OAK VENEER, HANDLER: EPOXY IRON BRONZE MATTE VARNISH',
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
                'name' => 'Sulu Sideboard',
                'slug' => 'sulu-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Sulu Sideboard, by Caffe Latte, modernistic and sophisticated, the triangular epoxy dark bronze shapes on both doors for this modern sideboard, reflect the erupting volcano that formed the Sulu Archipelago, home of the Kahawa Sūg, or Sulu coffee, a variety with a unique origin. This chic Sulu Sideboard shares a similar creation, a robust rounded walnut veneer matte body with a refined bronze glass top, creating a perfect balance between the materials, without diverging from its inspiration and without compromising its beauty in any room or setting.',
                'dimensions_cm' => ['width' => '56 cm', 'length' => '180 cm', 'height' => '75 cm'],
                'dimensions_in' => ['width' => '22"', 'length' => '70.9"', 'height' => '29.5"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'MATERIALS: Bronze Glass. FINISHES: EPOXY STAINLESS STEEL DARK BRONZE MATTE VARNISH, WALNUT MATTE WOOD VENEER',
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
                'name' => 'Kafe Sideboard',
                'slug' => 'kafe-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Kafe Sideboard is a tribute to the rich coffee culture of Madagascar. Made from a bronze mirror, stainless steel, and the finest wood, Kafe promises to bring warmth and clean-lined minimalism to your living or dining room.',
                'dimensions_cm' => ['width' => '160 cm', 'depth' => '40 cm', 'height' => '80 cm'],
                'dimensions_in' => ['width' => '63"', 'depth' => '15.75"', 'height' => '31.45"'],
                'brand' => ['name' => 'CAFFE LATTE', 'slug' => 'caffe-latte'],
                'materials_and_finishes' => 'Feet: Epoxy Stainless Steel Bronze, Matte Varnish, Structure: Walnut Matte Wood Veneer, Bronze Mirror',
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
                'name' => 'Gallegos Sideboard',
                'slug' => 'gallegos-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Gallegos Sideboard, by Covet Collection, has a spacious compartment and drawer that divide this piece into an attractive form, with four doors for even more storage capacity, revealing a sublime sicomoro wood veneer interior. The Patagonia marble top finishes the look, giving it the distinctive look of the Patagonia collection. Taking its name from the Gallegos River, a body of water that crosses the Patagonian region in Argentina, this elaborate sideboard has a fluid-shaped division crossing its patched ebony body, just like a river carved its way into stone.',
                'dimensions_cm' => ['width' => '220 cm', 'depth' => '54 cm', 'height' => '84 cm'],
                'dimensions_in' => ['width' => '86.61"', 'depth' => '21.26"', 'height' => '33.07"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: INTERIOR: SICOMORO WOOD VENEER, PATCH WOOD EBONY, SMOKED GLASS, WOOD WITH MATE CHAMPAGNE TEXTURED FINE POWDER. FEET: Wood with Mate champagne textured fine powder. TOP: MARBLE PATAGÓNIA',
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
                'name' => 'Anjelica Sideboard',
                'slug' => 'anjelica-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Anjelica Sideboard, by Covet Collection, is an elegant storage solution for the modern dining room. This sideboard features an ash wood structure, a top made in the exclusive White Vogue Estremoz marble, polished brass details, and legs in Nero Marquina. Anjelica features four drawers and two side doors with shelves inside.',
                'dimensions_cm' => ['width' => '180 cm', 'depth' => '45.5 cm', 'height' => '80 cm'],
                'dimensions_in' => ['width' => '70.89"', 'depth' => '17.71"', 'height' => '31.49"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: Ash Wood Matte Varnish, Cream Velvet, estremoz marble, NERO MARQUINA MARBLE, POLISHED BRASS',
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
                'name' => 'Mood Sideboard',
                'slug' => 'mood-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The MOOD Sideboard was crafted to make your home shine brighter than ever. Featuring a base of glossy, gold-plated stainless steel and a top of pristine white Olympic marble, this exquisite piece of furniture will elevate the ambiance of any room to new heights. Designed to add layers of significance to your interior design, the MOOD Sideboard embodies a distinct kind of textural beauty, making it an essential element for a sophisticated and stylish living space.',
                'dimensions_cm' => ['width' => '230 cm', 'depth' => '46 cm', 'height' => '75 cm'],
                'dimensions_in' => ['width' => '90.5"', 'depth' => '18.11"', 'height' => '29.53"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: GOLD PLATED STAINLESS STEEL GLOSSY. TOP: WHITE OLIMPIC MARBLE',
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
                'name' => 'Perito Sideboard',
                'slug' => 'perito-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Perito Sideboard by Covet House was inspired by the Perito Moreno Glacier, one of the most spectacular, and popular, attractions in Patagonia. A massive ice mass, that curiously has a continuous and large plain-like appearance, not organically shaped like most glaciers have. The straight lines are visible on the design of Perito Sideboard, where the dark walnut veneer “V” shaped doors represent the cracks on the ice, and the Patagonian marble top the unusually plain surface of the glacier. The chic champagne metal legs bring to Perito Sideboard the look together, for a powerful sleek aesthetic.',
                'dimensions_cm' => ['depth' => '54 cm', 'length' => '220 cm', 'height' => '84 cm'],
                'dimensions_in' => ['depth' => '21.25"', 'length' => '86.61"', 'height' => '33.07"'],
                'brand' => ['name' => 'COVET COLLECTION', 'slug' => 'covet-collection'],
                'materials_and_finishes' => 'BODY: DARK WALNUT VENEER, INTERIOR: GLASS AND WALNUT VENEER, STAINLESS STEEL WITH MATE CHAMPAGNE TEXTURED FINE POWDER. FEET: STAINLESS STEEL WITH MATTE CHAMPAGNE TEXTURED FINE POWDER. TOP: MARBLE PATAGÓNIA',
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
                'name' => 'Nubian Sideboard',
                'slug' => 'nubian-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Nubian Sideboard is a versatile piece fit for living rooms, dining rooms or elegant hotels. Made with high quality wood and gold brass, it is the embodiment of luxury and an auspicious highlight in any ambiance.',
                'dimensions_cm' => ['depth' => '55 cm', 'length' => '231 cm', 'height' => '89 cm'],
                'dimensions_in' => ['depth' => '21.65"', 'length' => '90.95"', 'height' => '35.04"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Body: Brass, Wood, Marble, Glass & Mirror. FINISHES: Body: Polished Brass, Shiny Black Lacquer, Black Glass, Smoked Mirror, Smoked Glass, Walnut Root & Nero Marquina Marble',
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
                'name' => 'Darian Sideboard',
                'slug' => 'darian-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Darian Sideboard draws inspiration from the power of the shield and sphere of protection, as well as the dynamic from its irregular shape. A precise knowledge of production techniques and materials, each with different specialties, from metal-work to wood carving. It features a cluster of gold plated brass asymmetrical bars envelope a wood structure in black lacquer, the resulting works are a blend of artful and stout personality.',
                'dimensions_cm' => ['width' => '210 cm', 'depth' => '50 cm', 'height' => '92 cm'],
                'dimensions_in' => ['width' => '82.7"', 'depth' => '19.7"', 'height' => '36.2"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Body: Brass & Wood. FINISHES: Body: Polished brass & Black lacquer',
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
                'name' => 'Tenor Sideboard',
                'slug' => 'tenor-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Tenor Sideboard, by Luxxu, was created to be magnanimous in its appearance, the smooth and elegant shapes of this black sideboard, highly stylish, provide a generous amount of storage space being imposing and lends an attractive presence to any room. The gold-plated brass asymmetric bars give the extraordinary touch in framed of this particleboard ends with a textured surface using a black lacquer finish. Tenor Sideboard is a unique product for those who have a peculiar taste for new editions and conceptual designs.',
                'dimensions_cm' => ['width' => '228.8 cm', 'depth' => '50 cm', 'height' => '76 cm'],
                'dimensions_in' => ['width' => '89.8"', 'depth' => '19.7"', 'height' => '30.1"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'MATERIALS: Brass & Wood. FINISHES: Polished brass & Black lacquer',
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
                'name' => 'Algerone Sideboard',
                'slug' => 'algerone-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'The Algerone Sideboard, by Luxxu, showcases a medley of luxurious materials while providing practical functionality. The smoked glass doors add a touch of sophistication and offer a glance at the items stored inside. With the powerful presence of Statuario marble and the opulent appeal of polished brass details, this design piece will make a modern statement in any dining room or hallway decor.',
                'dimensions_cm' => ['depth' => '58 cm', 'length' => '210 cm', 'height' => '78.5 cm'],
                'dimensions_in' => ['depth' => '22.8"', 'length' => '82.68"', 'height' => '31"'],
                'brand' => ['name' => 'LUXXU', 'slug' => 'luxxu'],
                'materials_and_finishes' => 'Grey Leather & Smoked Glass, Polished Brass, Statuario Marble. MATERIALS: Brass, GLASS, Leather, Marble, Wood',
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
                'name' => 'Angra Sideboard',
                'slug' => 'angra-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Angra Sideboard, by Boca do Lobo, is a bold yet elegant black and gold sideboard. The sharp body of the Angra Sideboard is fully covered in black high gloss, and it gently lies in an unexpectedly curved golden base conceived from hammered polished brass, inspired by the cliffs of the historical city of Angra do Heroismo in the Azores island, Portugal. Sophisticated pulls in different organic shapes adorn four doors, each one opens to single drawers on each compartment. Angra Sideboard is a wonderful journey through the know-how of the best craftsmanship that ends with exquisite Shara Noir marble on top.',
                'dimensions_cm' => ['width' => '224 cm', 'depth' => '66 cm', 'height' => '84 cm'],
                'dimensions_in' => ['width' => '88.2"', 'depth' => '26"', 'height' => '33.1"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Wood, Brass, Grey Mirror, Glossy Lacquered paint, Sahara Noir Marble. FINISHES: Polished Brass, Casted Brass, High Gloss Black Lacquered Wood',
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
                'name' => 'Mondrian Sideboard',
                'slug' => 'mondrian-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Mondrian Sideboard by Boca do Lobo is more art than utilitarian furniture. Undoubtedly, it constitutes a unique and collectible object that is different from anything else and exudes a sense of both experimental design and luxury.When art becomes a sideboard your room acquires an evermore-inspiring atmosphere.',
                'dimensions_cm' => ['width' => '186 cm', 'depth' => '53 cm', 'height' => '81 cm'],
                'dimensions_in' => ['width' => '73.2"', 'depth' => '20.9"', 'height' => '31.9"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Brass, fabric, GLASS, Leather, mirror. FINISHES: casted brass hendlers, high gloss varnish',
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
                'name' => 'Pixel Sideboard',
                'slug' => 'pixel-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Pixel Sideboard by Boca do Lobo presents a ground-breaking work of pioneering design. Pixel Sideboard carries the dedication and art of those who built it, a variety of traditional production techniques to craft an avant-garde furniture piece that is authentic, joyful and a perfect match for the digital age. Its playful character is captured in shape and color palette, challenging design and finest craftsmanship. Pixel Sideboard plays with perception and combines exceptional materials with multicolored compositions to give the sideboard a unique, striking design: handmade leaf gilding triangles, 10 different types of wood leafs from palisander to African walnut veneer, and lacquering.',
                'dimensions_cm' => ['width' => '253 cm', 'depth' => '66 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '99.6"', 'depth' => '20.1"', 'height' => '35.43"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Aluminum, Acrylic, Gold',
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
                'name' => 'Piccadilly Sideboard',
                'slug' => 'piccadilly-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Piccadilly Sideboard, another eternal present for you from Boca do Lobo, is an exclusive design piece that combines the dynamism of design with the power of narrative. Piccadilly Sideboard is a highly expressive Limited Edition work, a precise knowledge of craft, materials and production techniques.',
                'dimensions_cm' => ['width' => '196 cm', 'depth' => '51 cm', 'height' => '86 cm'],
                'dimensions_in' => ['width' => '77.2"', 'depth' => '20.1"', 'height' => '33.9"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Poplar and Gold Plated Brass | Finishes: Rosewood veneer, convex mirror, gold leaf, silver leaf.',
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
                'name' => 'Majestic Sideboard',
                'slug' => 'majestic-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'More than just a Café, the Majestic tells the history of Oporto. The Oporto of the twenties, of political gatherings and discuss new ideas. It was also the Belle Epoch period, a time of writers and artists. To honor this period and this emblematic Café, Boca Do Lobo designed Majestic, a modern black sideboard, highly stylish, that provides a generous amount of storage space without being too imposing. It is a unique piece of furniture that lends an attractive presence to any room. Four flush doors open discreetly to the interior of the piece where you will find elegant drawers and functional shelving. Hand carved wood garland drapes the sideboard and functions as the doors pull. The piece is framed in particleboard, which gives the black high gloss lacquer finish its textured appearance.',
                'dimensions_cm' => ['width' => '56 cm', 'height' => '86 cm'],
                'dimensions_in' => ['width' => '22"', 'height' => '33.9"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Mahogany, Silver Leaf in Amethyst, Nickel Plated Brass, Smoked Glass',
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
                'name' => 'Voltaire Walnut Sideboard',
                'slug' => 'voltaire-walnut-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Voltaire Walnut Sideboard, by Boca do Lobo, is a contemporary piece enveloped by manually sculptured panels with decorative elements finished in high gloss black lacquer. The statement twist lies on the asymmetrical hand-hammered fitting of a golden polished brass sheet on the right side of the top, and base detail.',
                'dimensions_cm' => ['width' => '271 cm', 'depth' => '71 cm', 'height' => '96 cm'],
                'dimensions_in' => ['width' => '107"', 'depth' => '28"', 'height' => '38"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Solid walnut wood, polished brass, bronze mirror and glass.',
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
                'name' => 'Soho Sideboard',
                'slug' => 'soho-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Soho Sideboard named the first collection of Boca do Lobo, boosting its first international steps. It was presented for the first time in London, one of the biggest and international stages of design. The attitude and irreverence reflected by this piece made it an icon, never unnoticed in any part of the world. Drawers that count different and varied techniques from glass to wood, lacquer color to mirror and gold leaf compose this contemporary sideboard, finely refined by brass handles. Boca do Lobo’s Soho modern sideboard is an exquisite work of art and one of our best sellers.',
                'dimensions_cm' => ['width' => '48 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '18.9"', 'height' => '35.4"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Bronze glass, brass, fabric, rosewood, golden leaf, lacquered glass, crystal.',
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
                'name' => 'Diamond Emerald Sideboard',
                'slug' => 'diamond-emerald-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Diamond Emerald Sideboard, by Boca do Lobo, with the style of a precious jewel, colored in green emerald, will make a splash in interior design since it is one of the hottest color trends for 2013. Like the amethyst Diamond, the new Diamond Emerald Sideboard also features three highly sculptured doors leading to a gold leaf interior with shelving and two drawers. The exterior of this fanciful piece is now presented in silver leaf finished with a luxurious shade of translucent green emerald with high gloss varnish. And instead of the whimsical lion’s head feet, the new diamond presents a base made from mahogany lined with a bronze mirror.',
                'dimensions_cm' => ['width' => '180 cm', 'depth' => '60 cm', 'height' => '83 cm'],
                'dimensions_in' => ['width' => '70.9"', 'depth' => '23.6"', 'height' => '32.7"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'MATERIALS: Gold Leaf, silver leaf, Wood. FINISHES: translucid emerald lacquer',
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
                'name' => 'Diamond Amethyst Sideboard',
                'slug' => 'diamond-amethyst-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => true,
                'description' => 'Diamond Amethyst Sideboard is a reflection of the furniture jeweler’s expertise and quintessence, undoubtedly deserving its title. This opulent object, full of resources and desire, has two carefully sculpted doors that reveal a gold lined interior with shelves and two drawers. This piece is inspired by the gothic furniture of the romantic period, with its capacity to take advantage of the power of imagination, prevision and escape, without forgetting its unique character.',
                'dimensions_cm' => ['width' => '180 cm', 'depth' => '60 cm', 'height' => '83 cm'],
                'dimensions_in' => ['width' => '70.9"', 'depth' => '23.6"', 'height' => '32.7"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Wood; Gold leaf; Gold and silver leaf with translucid amethyst lacquer.',
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
                'name' => 'Diamond Pyrite Sideboard',
                'slug' => 'diamond-pyrite-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Diamond Pyrite Sideboard by Boca do Lobo was projected to be the jewel in the crown of the Portuguese brand Boca do Lobo. Diamond Pyrite Sideboard is a reflection of the furniture jeweler’s expertise and quintessence, undoubtedly deserving its title. This opulent object, full of resources and desire, has two carefully sculpted doors that reveal a lined interior with shelves and two drawers. This piece is inspired by the gothic furniture of the romantic period, with its capacity to take advantage of the power of imagination, prevision, and escape, without forgetting its unique character.',
                'dimensions_cm' => ['width' => '185 cm', 'depth' => '60 cm', 'height' => '83 cm'],
                'dimensions_in' => ['width' => '72.8"', 'depth' => '23.6"', 'height' => '32.7"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Stainless Steel; Wood Veneer; Polished Brass and Casted Brass.',
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
                'name' => 'Symphony Sideboard',
                'slug' => 'symphony-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => true,
                'description' => 'Symphony Sideboard by Boca do Lobo draws inspiration from church organ tubes, as well as the violin’s details. Like all of Boca do Lobo’s designs, the Symphony Sideboard is hand-made by experienced craftsmen, each with different specialties, from metalwork to wood carving. It features a cluster of polished brass tubes with an exotic wood structure, creating a harmonious artful mix. Through Boca do Lobo’s vision, the Symphony Sideboard seeks to re-interpret classic elements through contemporary design and cutting-edge technology and has become an emblematic piece within the Limited Edition Collection.',
                'dimensions_cm' => ['width' => '232 cm', 'depth' => '45 cm', 'height' => '95 cm'],
                'dimensions_in' => ['width' => '91.3"', 'depth' => '17.7"', 'height' => '37.4"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Black lacquer, Gold plated brass tubes, Palisander veneer',
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
                'name' => 'Lapiaz Sideboard',
                'slug' => 'lapiaz-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => false,
                'description' => 'Lapiaz Sideboard, by Boca do Lobo, originates from one of Boca do Lobo’s iconic design pieces. Based on the same aesthetic that created a legacy, this piece takes exceptional craftsmanship and design to a new realm. Consisting of two individual modules, the Lapiaz is finished in polished stainless steel that portrays a perfect mirror, with a poplar root wood veneer interior.',
                'dimensions_cm' => ['width' => '220 cm', 'depth' => '50 cm', 'height' => '82 cm'],
                'dimensions_in' => ['width' => '86.6"', 'depth' => '19.7"', 'height' => '32.3"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'materials_and_finishes' => 'Brass, wood veneer, lacquer, high gloss varnish, glass.',
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
                'name' => 'Heritage Sideboard',
                'slug' => 'heritage-sideboard',
                'is_new' => false,
                'has_stock' => false,
                'is_best_seller' => true,
                'dimensions_cm' => ['width' => '162 cm', 'depth' => '58 cm', 'height' => '90 cm'],
                'dimensions_in' => ['width' => '63.8"', 'depth' => '22.8"', 'height' => '35.4"'],
                'brand' => ['name' => 'Boca do Lobo', 'slug' => 'boca-do-lobo'],
                'description' => 'Heritage Sideboard by Boca do Lobo presents a different number of layers, where each one tells a different story. Hand-painted-tiles have gained a privileged place in architecture throughout the centuries. Portugal has adopted them like no other country has and in order to honor the Portuguese hand-painted tiles, Boca Do Lobo created Heritage Sideboard.',
                'materials_and_finishes' => 'Hand Painted Tiles - Azulejo, Leaf Guilding, Varnishing',
                'category' => [
                    'name' => 'Casegoods',
                    'slug' => 'casegoods',
                    'subcategory' => [
                        'name' => 'Sideboards',
                        'slug' => 'sideboards'
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
                    'slug'           => $item['slug'],
                    'description'    => $item['description'] ?? null,
                    'dimensions_cm'  => isset($item['dimensions_cm']) ? json_encode($item['dimensions_cm']) : null,
                    'dimensions_in'  => isset($item['dimensions_in']) ? json_encode($item['dimensions_in']) : null,
                    'materials_and_finishes'    => $item['materials_and_finishes'] ?? null,
                    'visible_in_all_products' => $item['visible_in_all_products'] ?? false,
                    'show_on_brand_page' => $item['show_on_brand_page'] ?? false,
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
