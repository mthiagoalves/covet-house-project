<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'BOCA DO LOBO',
                'slug' => 'boca-do-lobo',
                'has_video' => true,
                'subtitle' => 'EXCLUSIVE DESIGN',
                'description' => 'Boca do Lobo was founded in 2005, and early-on committed to encourage and represent the most authentic handcrafting techniques, by understanding and re-interpreting the past through technology and contemporary design. Each creation carries the legacy of centuries of the finest craftsmanship. In the workshops, talented artisans challenge and combine traditional manufacturing techniques with the latest technological methods to shape the high-quality materials into remarkable furniture, upholstery, and lighting pieces, which gives rise to timeless cosmopolitan environments.
                <br/><br/>
                The collections are inspired and accurately handcrafted in Portugal with attention to detail, passion for beauty, and the pure dedication of skilled craftsmen and craftswomen. Boca do Lobo have always been fascinated by the unexpected. The quest for innovation ables the brand to deliver an unparalleled experience and fulfill the most demanding art and design lovers’ desires and needs.',
                'website' => 'https://www.bocadolobo.com/en/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'bocadolobo.com',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/bocadolobo/',
                    'facebook' => 'https://www.pinterest.pt/bocadolobo/',
                    'linkedin' => 'https://www.linkedin.com/in/bocadolobodesign/'
                ]
            ],
            [
                'name' => 'LUXXU',
                'slug' => 'luxxu',
                'has_video' => true,
                'subtitle' => 'MODERN DESIGN AND LIVING',
                'description' => 'Everything we create, we believe in redesigning your definition of art.
                <br/><br/>
                LUXXU’s Empire is shaping its future by setting trends with timeless pieces and refined elegance. Lighting was the start of a luxury journey stating itself as classic with a modern twist.
                <br/><br/>
                Today, a new epoch unveils at LUXXU. Daring designs are symphonies created not only with one key object. Ambiences are an everlasting aesthetic language shared by every element.',
                'website' => 'https://www.luxxu.net/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'luxxu.net',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/luxxumoderndesignliving/',
                    'facebook' => 'https://www.pinterest.pt/luxxu/',
                    'linkedin' => 'https://www.linkedin.com/company/luxxu_modern-lamps/'
                ]
            ],
            [
                'name' => 'CIRCU',
                'slug' => 'circu',
                'has_video' => true,
                'subtitle' => 'MAGICAL FURNITURE',
                'description' => 'CIRCU was built under a dream! The dream is to allow children to live their own fantasies and create a magical world for them to fly under an imagination that has no limit.
                With its hand-crafted and hand-tailored pieces made in Portugal with the finest materials, they deliver only the highest quality furnishings that turn children’s dreams into reality!
                <br/><br/>
                From airplane beds, rocket armchairs to a crib inspired on a hot air balloon, their pieces create moments and experiences between children’s real-world and their fantasies.',
                'website' => 'https://www.circu.net/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'circu.net',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/circu_magical_furniture/',
                    'facebook' => 'https://www.pinterest.pt/circudesign/',
                    'linkedin' => 'https://www.linkedin.com/company/circu-magicalfurniture/'
                ]
            ],
            [
                'name' => 'MAISON VALENTINA',
                'slug' => 'maison-valentina',
                'has_video' => true,
                'subtitle' => 'LUXURY BATHROOMS',
                'description' => 'Maison Valentina was born in Porto, Portugal, aiming to deliver the most exquisite and sophisticated bathroom furniture. Offers high-end solutions made with the finest material selection, combined with rare handwork techniques, contemporary design and assuring supreme quality.',
                'website' => 'https://www.maisonvalentina.net/en/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'maisonvalentina.net',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/maisonvalentinaa/',
                    'facebook' => 'https://www.pinterest.pt/mvalentinabath/',
                    'linkedin' => 'https://www.linkedin.com/company/maison-valentina/'
                ]
            ],
            [
                'name' => 'COVET COLLECTION',
                'slug' => 'covet-collection',
                'has_video' => false,
                'subtitle' => 'DESIGN EDITIONS',
                'description' => 'Covet Collection – Design Editions offers highly curated capsule collections to create show-stopping interiors. These capsules include furniture, lighting and accessories developed in partnership with the world’s most creative minds.
                <br/><br/>
                You will find a large offer in every possible style to make any type of project, thus simplifying the process of finding the right products for space, up to the delivery of the goods.',
                'website' => 'https://covetcollection.eu/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'covetcollection.eu',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/covetcollection_/',
                    'facebook' => 'https://www.pinterest.com/covetcollection_/',
                    'linkedin' => 'https://www.linkedin.com/company/covet-collection'
                ]
            ],
            [
                'name' => 'KOKET',
                'slug' => 'koket',
                'has_video' => true,
                'subtitle' => 'LOVE HAPPENS',
                'description' => 'Daring design aesthetic, high impact events, lavish presentations, notoriously risqué ad campaigns, and inspiring editorial, have an uncanny way of conveying KOKET’s mission to inspire love and empower through its statement pieces and unique design-driven experiences and content.
                <br/><br/>
                The innate desire to seduce and entice its devotees is perfectly illustrated in KOKET’s Guilty Pleasures and Exotic Opulence Collections composed of dramatic casegoods, luscious upholstery, exquisite lighting, and decadent furs; all of which mesmerize with their magical mineral medleys, luxe metallics, vibrant jewel tones, and exotic feathers.
                <br/><br/>
                The line is manufactured by master artisans and jewelers who leave no detail or element forgotten. The brand’s principal designers are a group of exceptionally artistic and well-rounded product designers who are led by Founder & CEO Janet Morais’ creative eye and almost fanatic drive for perfection.',
                'website' => 'https://www.bykoket.com/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'bykoket.com',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/bykoket/',
                    'facebook' => 'https://www.pinterest.pt/bykoket/',
                    'linkedin' => 'https://www.linkedin.com/company/bykoket'
                ]
            ],
            [
                'name' => 'CAFFE LATTE',
                'slug' => 'caffe-latte',
                'has_video' => false,
                'subtitle' => 'NEUTRAL DESIGNS FOR FUNCTIONAL INTERIORS WITH MODERN AESTHETICS',
                'description' => 'CAFFE LATTE is a collection of furniture, lighting and acessories with a remarkable ability to fit into any style of interiors due to its modern aesthetic, minimalist and functional design, and consensual focus on neutral tones.
                <br/><br/>
                The strong yet not overpowering Designs value first and foremost the space and concept they are selected to furnish, while Craftsmanship provides the quality in details that makes all projects unique.',
                'website' => 'http://caffelattehome.com/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'caffelattehome.com',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/caffelattehome/',
                    'facebook' => 'https://www.pinterest.pt/caffelattehome/',
                    'linkedin' => 'https://www.linkedin.com/company/caffelattehome'
                ]
            ],
            [
                'name' => 'BRABBU',
                'slug' => 'brabbu',
                'has_video' => true,
                'subtitle' => 'DESIGN FORCES',
                'description' => 'BRABBU is a design brand that reflects an intense way of living, bringing fierceness, strength and power into an urban lifestyle. With a diverse range of furniture, casegoods, upholstery, lighting and rugs, and through sensory design, we pass on a unique experience in every piece we design and produce.
                <br/><br/>
                Every day our tribe of designers and craftsmen search for the most high-quality materials and innovative techniques to bring the comfort, functionality and personality your spaces deserve.',
                'website' => 'https://www.brabbu.com/home/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'brabbu.com',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/brabbu/',
                    'facebook' => 'https://www.pinterest.pt/brabbu_/',
                    'linkedin' => 'https://www.linkedin.com/company/brabbu-design-forces/'
                ]
            ],
            [
                'name' => 'DELIGHTFULL',
                'slug' => 'delightfull',
                'has_video' => true,
                'subtitle' => 'UNIQUE LAMPS',
                'description' => 'A fresh reinterpretation of mid-century lighting design. We revive design and inspirational art from the 40s to 70s, bringing to you fresh classic lamps with the progress of colors and materials of modern décor. Our mid-century spirit can be suitable for any project customizing any piece that you need.
                <br/><br/>
                We promise you a full experience of the mid-century world, through iconic design around trendsetting places. Today, with a solid structure and factory to provide you with the best you can get, we have solutions for short lead time projects!',
                'website' => 'https://www.delightfull.eu/en/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'delightfull.eu',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/delightfulll/',
                    'facebook' => 'https://www.pinterest.pt/delightfulll/?eq=delightfull&etslf=5515',
                    'linkedin' => 'https://www.linkedin.com/company/delightfull/'
                ]
            ],
            [
                'name' => 'ESSENTIAL HOME',
                'slug' => 'essential-home',
                'has_video' => true,
                'subtitle' => 'MID CENTURY FURNITURE',
                'description' => 'Essential Home is an innovative mid-century modern furniture brand that takes important historical and cinematographic references from the 1930s and 1960s and turns them into unique furnishing pieces. What started out as ‘Essentials’ in 2015, a furniture collection by the mid-century lighting brand DelightFULL, quickly grew to be one of the most elegant representations of mid-century modern design, thus creating a new name, and a new brand, Essential Home.
                <br/><br/>
                “Soon we understood that this collection had a life of its own. Essential Home’ eclectic style inspired us to create more and more. We could no longer keep it inside doors,” said one of the designers involved in the creation of Essential Home.',
                'website' => 'https://www.essentialhome.eu/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'essentialhome.eu',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/essential_home/',
                    'facebook' => 'https://www.pinterest.pt/essentialhomeeu/',
                    'linkedin' => 'https://www.linkedin.com/company/essential-home/'
                ]
            ],
            [
                'name' => 'RUG`SOCIETY',
                'slug' => 'rug-society',
                'has_video' => true,
                'subtitle' => 'THE DELUXE OF PAST & PRESENT',
                'description' => 'Rug`Society is an exquisite Portuguese brand of Rugs and covering sellections, that mainly aims to transform rugs into pieces of art. Rug’Society appears with a strong connotation to the eclectic style, a brand that transmits emotions, and that is our starting point for every different design that we conceive to stimulate and develop new trends.
                <br/><br/>
                It`s time to be masters in tapestry and, for that, Rug`Society presents us with a bold and contemporary design, always thinking in the future, and giving our products uniqueness, exclusiveness and luxury Design.',
                'website' => 'https://www.rugsociety.eu/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness',
                'website_text' => 'rugsociety.eu',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/rug_society/',
                    'facebook' => 'https://www.pinterest.pt/rugsociety/',
                    'linkedin' => 'https://www.linkedin.com/company/rug-society/'
                ]
            ],
            [
                'name' => 'PULLCAST',
                'slug' => 'pullcast',
                'has_video' => true,
                'subtitle' => 'JEWELRY HARDWARE',
                'description' => 'PullCast was born digging deep into the wonders of nature by a jeweller and a designer, which adore collecting objects from outdoor experiences.
                <br/><br/>
                Crossing the worlds of jewerly and design only led to a path of exploring new aesthetic design approaches with architectural and artistic strong influences. Expect to find diverse ranges of styles on collectable sculptural hardware, wide spreading a sense of rarity and legacy, grounded by ancient forms of craft.',
                'website' => 'https://www.pullcast.eu/?utm_source=website&utm_medium=brands&utm_content=covethouse&utm_campaign=brandawareness%20target=',
                'website_text' => 'pullcast.eu',
                'socials' => [
                    'instagram' => 'https://www.instagram.com/pullcast_jewelryhardware/',
                    'facebook' => 'https://www.pinterest.pt/pullcast/',
                    'linkedin' => 'https://www.linkedin.com/company/pullcastsculpt/'
                ]
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand); // <- Se o model for plural, mude para Brands::create
        }
    }
}
