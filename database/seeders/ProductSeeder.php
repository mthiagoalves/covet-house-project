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
                'brand' => ['name' => 'Luxxu', 'slug' => 'luxxu'],
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
                'brand' => ['name' => 'Luxxu', 'slug' => 'luxxu'],
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
                'brand' => ['name' => 'Luxxu', 'slug' => 'luxxu'],
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
                'brand' => ['name' => 'Luxxu', 'slug' => 'luxxu'],
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
                'is_best_seller' => true,
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
                'is_best_seller' => true,
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
                'is_best_seller' => true,
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
                'is_best_seller' => true,
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
                'is_best_seller' => true,
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
