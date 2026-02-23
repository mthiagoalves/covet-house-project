<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\File;


class ProjectsController extends Controller
{

    private  $productsMock = [
        [
            'id' => 101,
            'name' => 'LAPIAZ SIDEBOARD',
            'slug' => 'lapiaz-sideboard',
            'type' => 'product',
            'main_image_url' => 'https://placehold.co/800x800/eee/333?text=Lapiaz',
            'brand' => ['name' => 'BOCA DO LOBO'],
            'category' => ['name' => 'Casegoods', 'slug' => 'casegoods', 'subcategory' => ['name' => 'Sideboards', 'slug' => 'sideboards']]
        ],
        [
            'id' => 102,
            'name' => 'CHARLA DINING CHAIR',
            'slug' => 'charla-dining-chair',
            'type' => 'product',
            'main_image_url' => 'https://placehold.co/800x800/ddd/333?text=Charla',
            'brand' => ['name' => 'LUXXU'],
            'category' => ['name' => 'Seatings', 'slug' => 'seatings', 'subcategory' => ['name' => 'Chairs', 'slug' => 'chairs']]
        ],
        [
            'id' => 103,
            'name' => 'ARDARA CONSOLE TABLE',
            'slug' => 'ardara-console',
            'type' => 'product',
            'main_image_url' => 'https://placehold.co/800x800/ccc/333?text=Ardara',
            'brand' => ['name' => 'BRABBU'],
            'category' => ['name' => 'Casegoods', 'slug' => 'casegoods', 'subcategory' => ['name' => 'Consoles', 'slug' => 'consoles']]
        ],
        [
            'id' => 101,
            'name' => 'LAPIAZ SIDEBOARD',
            'slug' => 'lapiaz-sideboard',
            'type' => 'product',
            'main_image_url' => 'https://placehold.co/800x800/eee/333?text=Lapiaz',
            'brand' => ['name' => 'BOCA DO LOBO'],
            'category' => ['name' => 'Casegoods', 'slug' => 'casegoods', 'subcategory' => ['name' => 'Sideboards', 'slug' => 'sideboards']]
        ],
        [
            'id' => 102,
            'name' => 'CHARLA DINING CHAIR',
            'slug' => 'charla-dining-chair',
            'type' => 'product',
            'main_image_url' => 'https://placehold.co/800x800/ddd/333?text=Charla',
            'brand' => ['name' => 'LUXXU'],
            'category' => ['name' => 'Seatings', 'slug' => 'seatings', 'subcategory' => ['name' => 'Chairs', 'slug' => 'chairs']]
        ],
        [
            'id' => 103,
            'name' => 'ARDARA CONSOLE TABLE',
            'slug' => 'ardara-console',
            'type' => 'product',
            'main_image_url' => 'https://placehold.co/800x800/ccc/333?text=Ardara',
            'brand' => ['name' => 'BRABBU'],
            'category' => ['name' => 'Casegoods', 'slug' => 'casegoods', 'subcategory' => ['name' => 'Consoles', 'slug' => 'consoles']]
        ],
    ];

    private $allProjects = [
        [
            'slug' => 'sky-high-dwelling',
            'title' => 'Sky-high Dwelling',
            'subtitle' => 'An Upscale Apartment In India by Covet House',
            'description' => 'Covet House redefines luxury living once again by blending pure elegance and contemporary warmth. Conceived as a sanctuary in the sky, this distinguished residence unfolds through a carefully curated journey of light-filled spaces, rich materials and sculptural forms that speak to both comfort and sophistication. From the gracious entry hall to the tranquil private suites, every corner is thoughtfully composed to evoke serenity, proportion and a sense of effortless grace. Welcome to India in a dwelling where architectural precision meets thoughtful living and timeless design embraces the everyday.',
        ],
        [
            'slug' => 'a-modern-haven-by-the-lake',
            'title' => 'A MODERN HAVEN BY THE LAKE',
            'subtitle' => 'A SWISS VILLA BETWEEN GENEVA AND LAUSANNE',
            'description' => 'Where the stillness of the lake meets the pulse of contemporary design, this extraordinary villa offers more than just a place to live—it offers a way to feel. Set in a privileged location between Geneva and Lausanne, this architectural gem invites you to experience life surrounded by natural beauty and quiet sophistication. With approximately 600m² of living space, the villa has been thoughtfully created for those who expect only the exceptional. Step inside and let the light guide you through spaces that breathe elegance and calm. Expansive interiors unfold with grace: from an airy living area designed for gathering, to intimate corners crafted for reflection and serenity. Every room is a dialogue between form and feeling—modern lines softened by the textures of nature This home isn’t just smart—it’s soulful. Fully automated yet effortlessly warm, it brings comfort to life in the most meaningful ways. The lounge invites laughter, the master suite invites dreams. Outside, the lake whispers its rhythm. Terraces open to the sky, and each moment becomes a memory waiting to be made. This is not just a villa. It’s a modern sanctuary—designed to move you, to inspire you, and to welcome you home.',
        ],
        [
            'slug' => 'opulence-revealed-a-journey-inside-a-classic-dubai-villa',
            'title' => 'Opulence Revealed',
            'subtitle' => 'A Journey Inside a Classic Dubai Villa',
            'description' => 'Situated in the heart of the “City of Gold,” this villa, designed by Covet House, is a celebration of modern classic design. The residence seamlessly combines the grandeur of classic style with contemporary sophistication, creating spaces that reflect both tradition and modernity. Details such as marble and boiserie evoke the splendor of classic design, while Covet House’s contemporary furniture adds a touch of innovation. The neutral color palette, with predominantly darker tones, creates a warm and luxurious atmosphere, balancing elegance and comfort. Inspired by Middle Eastern influences, the villa also features a strong presence of Western sophistication. This captivating project exemplifies how luxury can be harmoniously lived through a careful fusion of the classic and the modern.',
        ],
        [
            'title' => 'CONTEMPORARY OASIS',
            'subtitle' => 'INSIDE A MODERN SAINT PETERSBURG VILLA',
            'description' => 'Welcome to a home where contemporary design meets luxurious comfort. This exquisite modern villa in Russia is thoughtfully crafted to provide an exceptional living experience. From the grand entrance and elegant foyer to the sophisticated home office, every space is tailored to balance beauty and functionality. The heart of the home features an inviting living room and a refined dining area perfect for entertaining. The stylish kitchen serves as a vibrant hub, while the leisure lounge and private cinema promise endless enjoyment and relaxation. The villa’s private retreats, including a serene master suite and personalized teen and kids’ bedrooms, ensure comfort for every member of the family. Even the garage is designed with efficiency and style in mind. Every detail in this villa creates a seamless blend of elegance and warmth, offering a perfect sanctuary for both quiet moments and vibrant gatherings.',
            'slug' => 'contemporary-oasis',
        ],
        [
            'slug' => 'an-outer-space-mission-room',
            'title' => 'An Outer Space Misson',
            'subtitle' => 'With Cozy Studio',
            'description' => 'Circu continues its mission to bring pieces from out of this world continues and this one is no different. Spoiler alert: We had a major help for this one.When we talk about the mission we mean NASA style. Circu partner up with Cozy Studio, and its designer, Renata Aquino, to bring you a kids room that is out of this world. All you need to do is follow us around and see this amazing project that shines brighter than the moon.',
        ],
        [
            'slug' => 'playground-holidays',
            'title' => 'Playground Holidays',
            'subtitle' => 'The True Colors of Adventure in Vacations',
            'description' => 'Summer vacations are just around the corner, and nothing better than giving children a giant and colorful space, where they will be able to enjoy a super funny and unique environment, where play and happiness are a true art. Inflatables, ball pools, or a gym are always excellent complements of fun and company for the little ones, especially in public amusement or hospitality parks, where parents can leave their children at ease in a safe and welcoming place, without time or space limits. Inspired by the Jungle Book, the Mogli Playhouse was designed by using the elements and the wonders of nature. It`s a dream come true for kids who love the outdoors so much they wish to bring it inside. With this adventurous gym, there`s no limit to imagination and every kid will feel like they are on top of the world.',
        ],
        [
            'slug' => 'timeless-mansion',
            'title' => 'Timeless Mansion',
            'subtitle' => 'Unveiling Refined Luxury In London',
            'description' => 'Nestled within the exclusive enclave of London UK, this prestigious residence epitomizes refined luxury and timeless sophistication. Designed for high-end private living, it boasts expansive floor-to-ceiling windows and sleek lines that create an inviting yet awe-inspiring atmosphere. Behind its modern façade lies exquisitely curated interiors featuring rich materials, dark tones, and iconic design pieces accented with gold. Each room tells a story of elegance and artistry, transforming this home into a sanctuary of distinction. Renowned by their finest craftsmanship, each piece has been carefully selected to create a seamless blend of modern sophistication and timeless elegance, elevating the overall aesthetic of the space.',
        ],
        [
            'slug' => 'parisian-dream-home',
            'title' => 'Parisian Dream Home',
            'subtitle' => 'Blending History, Light and Modern Beauty',
            'description' => 'Imagine stepping into a space where every detail whispers elegance—a harmony of history, light, and modern beauty that defines Parisian interiors. We invite you to explore the essence of timeless elegance, where refined details and classic touches transcend trends, creating intimate and inspiring spaces. In Parisian design, natural light flows freely, amplifying openness and inviting warmth, while expansive layouts seamlessly fuse old-world charm with modern sophistication. Here, curated art and décor tell stories, elevating rooms into curated galleries of taste and texture. This is more than style — it’s a blueprint for creating spaces that captivate, inspire, and endure. Welcome to the Parisian way.',
        ],
    ];

    /**
     * Helper para buscar imagens dinamicamente na pasta
     */
    private function getProjectsImages($slug)
    {
        $path = public_path("images/projects/{$slug}");

        if (File::exists($path)) {
            $files = File::files($path);
        }

        return count($files);
    }

    public function index()
    {


        return Inertia::render('projects/Index', [
            'allProjects' => $this->allProjects,
        ]);
    }

    public function show($slug)
    {
        $project = collect($this->allProjects)->firstWhere('slug', $slug);

        if (!$project) {
            abort(404, 'Project not found');
        }

        $gridImages = $this->getProjectsImages($slug);

        return Inertia::render('projects/Show', [
            'project' => $project,
            'gridImages' => $gridImages,
            'relatedProducts' => $this->productsMock,
            'allProjects' => $this->allProjects,
        ]);
    }
}
