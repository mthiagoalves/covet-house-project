<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import HeroBanner from '@/components/page-components/HeroBanner.vue';
import CategoryGrid from '@/components/page-components/CategoryGrid.vue';


const heroData = {
    imageUrl: '/images/homepage/luxury-living-room-with-gold-chandelier-and-curvy-sofas',
    altText: 'Luxury living room featuring a statement gold chandelier, curved designer sofas, and ornate wall paneling - part of Covet House`s curated design collection.',
    title: `DESIGNED TO FUEL AND INSPIRE YOUR <span class="font-semibold">CREATIVE JOURNEY.</span> A BROAD RANGE OF PRODUCTS <br class="hidden md:block" /> ACROSS MULTIPLE STYLES AND CATEGORIES.`,
    buttonText: 'VIEW MORE',
    buttonHref: '/inspirations'
};

const categoryGridData = [
    {
        row1: [
            { type: 'link', title: 'CABINETS', imgSrc: '/images/homepage/category-grid/pixel-cabinet-with-colorful-mosaic-shade-and-gold-base.jpg', altText: 'Pixel Cabinet featuring a colorful geometric mosaic shade and gold base - explore Covet House`s cabinet collection.', href: '/products/cabinets' },
            { type: 'link', title: 'ENTRYWAYS', imgSrc: '/images/homepage/category-grid/luxury-entryway-with-gold-robin-mirror-blue-patterned-heritage-console-and-coltrane-suspension-lamp.jpg', altText: 'Luxury entryway styling with textured gold robin mirror and blue heritage console - discover more elegant entryway designs', href: '/rooms/entryways' },
            { type: 'link', title: 'SIDEBOARDS', imgSrc: '/images/homepage/category-grid/white-lapiaz-sideboard-gold-resin-inlay.jpg', altText: 'Contemporary Lapiaz sideboard with dramatic gold resin inlay - shop our curated sideboard collection', href: '/products/sideboards' },
        ],
        row2: [
            { type: 'link', title: 'ENTRYWAYS', imgSrc: '/images/homepage/category-grid/luxury-entryway-cay-mirror-ardara-console.jpg', altText: 'Luxury entryway featuring the cay gold-framed mirror and ardara console table - discover more elegant home entrance halls', href: '/products/tables' },
            { type: 'link', title: 'CONSOLES', imgSrc: '/images/homepage/category-grid/black-geometric-suspicion-console-table-with-gold-veining.jpg', altText: 'Modern black Suspicion console table with bold gold veining and angular geometric legs - explore more Covet House`s consoles', href: '/products/seating' },
            { type: 'link', title: 'ENTRYWAYS', imgSrc: '/images/homepage/category-grid/cream-edith-sideboard-with-brass-legs-gold-diamond-mirror.jpg', altText: 'Cream edith sideboard with polished brass legs, paired with the diamond small mirror - for sophisticated entryway styling', href: '/products/lighting' },
        ],
        banner: {
            type: 'link', title: `<span class="font-bold">THE MOST POWERFUL TOOL</span> TO <span class="font-bold">INSPIRE</span> <br class="block md:hidden"> &amp; <span class="font-bold">BOOST CREATIVITY</span>`, imgSrc: '/images/homepage/category-grid/luxury-living-room-black-marble-fireplace-crackle-mirror-and-gold-accent-furniture.jpg', altText: 'Living room featuring a black marble fireplace, the crackle mirror and gold-accented furniture - See for more inspirations', href: '/products/new', imgSrcMobile: '/images/homepage/category-grid/luxury-living-room-black-marble-fireplace-crackle-mirror-and-gold-accent-furniture-mobile.jpg'
        }
    },
    {
        row1: [
            { type: 'link', title: 'DINING ROOMS', imgSrc: '/images/homepage/category-grid/modern-luxury-dining-room-with-arched-entry-crystal-chandelier-and-velvet-chairs-covet-house.jpg', altText: 'Dining room with crystal chandelier and charla chairs surronding a breve II dining table - See more dining room inspirations', href: '/products/rugs' },
            { type: 'link', title: 'DINING TABLES', imgSrc: '/images/homepage/category-grid/sculptural-gold-fortuna-dining-table-with-organic-petal-top.jpg', altText: 'Sculptural gold Fortuna dining table with an organic, petal-shaped top and fluted legs - see the full dining collection.', href: '/rooms/kids' },
            { type: 'link', title: 'DINING ROOMS', imgSrc: '/images/homepage/category-grid/classic-pietra-dining-room-with-marble-table-emerald-soleil-velvet-chairs.jpg', altText: 'Classic dining room with a white marble Pietra table and emerald Soleil velvet chairs - For more opulent dining rooms.', href: '/rooms/bathrooms' },
        ],
        row2: [
            { type: 'link', title: 'MIRRORS', imgSrc: '/images/homepage/category-grid/center-tables.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/mirrors' },
            { type: 'link', title: 'HARDWARE', imgSrc: '/images/homepage/category-grid/living-rooms.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/hardware' },
            { type: 'link', title: 'ACCESSORIES', imgSrc: '/images/homepage/category-grid/consoles.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/accessories' },
        ],
        banner: {
            type: 'link', title: 'wide range of <span class="font-extrabold">products</span> from different <span class="font-extrabold">categories, styles and colors</span>', imgSrc: '/images/homepage/category-grid/banner-big-2.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/stock', imgSrcMobile: '/images/homepage/category-grid/banner-big-2-m.jpg'
        }
    },
    {
        row1: [
            { type: 'link', title: 'DINING TABLES', imgSrc: '/images/homepage/category-grid/dining-tables-2.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/rugs' },
            { type: 'form', title: 'THE ULTIMATE INSPIRATIONS <br class="hidden md:block"> DESIGN BOOK', slug: 'the-ultimate-inspirations-design-book', imgSrc: '/images/homepage/category-grid/the-ultimate-inspirations-design-book.jpg', altText: 'MUDAR A ALT TEXT' },
            { type: 'link', title: 'DINING CHAIRS', imgSrc: '/images/homepage/category-grid/dining-chairs.jpg', altText: 'MUDAR A ALT TEXT', href: '/rooms/bathrooms' },
        ],
        row2: [
            { type: 'link', title: 'OFFICES', imgSrc: '/images/homepage/category-grid/offices.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/mirrors' },
            { type: 'link', title: 'FREESTANDING', imgSrc: '/images/homepage/category-grid/freestanding.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/hardware' },
            { type: 'link', title: 'BATHROOMS', imgSrc: '/images/homepage/category-grid/bathrooms.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/accessories' },
        ],
        banner: {
            type: 'link', title: 'UNLOCK THE MAGIC OF <span class="font-extrabold">SPECIAL PRICES</span> DIVE INTO <span class="font-extrabold">EXCLUSIVE DEALS TODAY!</span>', imgSrc: '/images/homepage/category-grid/banner-big-3.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/stock', imgSrcMobile: '/images/homepage/category-grid/banner-big-3-m.jpg'
        }
    },
    {
        row1: [
            { type: 'link', title: 'AMRCHAIRS', imgSrc: '/images/homepage/category-grid/armchairs.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/rugs' },
            { type: 'link', title: 'ENTRYWAYS', imgSrc: '/images/homepage/category-grid/entryways.jpg', altText: 'MUDAR A ALT TEXT', href: '/rooms/kids' },
            { type: 'link', title: 'MIRRORS', imgSrc: '/images/homepage/category-grid/mirrors.jpg', altText: 'MUDAR A ALT TEXT', href: '/rooms/bathrooms' },
        ],
        row2: [
            { type: 'link', title: 'NEW PROJECT: A SAINT PETERSBURG VILLA STORY', imgSrc: '/images/homepage/category-grid/a-saint-petersburg-villa-story.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/mirrors' },
            { type: 'link', title: 'SIDEBOARDS', imgSrc: '/images/homepage/category-grid/sideboard.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/hardware' },
            { type: 'link', title: 'NEW PROJECT: A MODERN HAVEN BY THE LAKE', imgSrc: '/images/homepage/category-grid/a-modern-haven-by-the-lake.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/accessories' },
        ],
        banner: {
            type: 'link', title: 'FROM CONCEPT TO COMPLETION: <span class="font-extrabold">INTERIOR DESIGN</span> SOLUTIONS THAT <span class="font-extrabold">INSPIRE</span>', imgSrc: '/images/homepage/category-grid/banner-big-4.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/stock', imgSrcMobile: '/images/homepage/category-grid/banner-big-4-m.jpg'
        }
    },
    {
        row1: [
            { type: 'link', title: 'WALL LAMPS', imgSrc: '/images/homepage/category-grid/wall-lamps.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/rugs' },
            { type: 'link', title: 'HOSPITALITY', imgSrc: '/images/homepage/category-grid/hospitality.jpg', altText: 'MUDAR A ALT TEXT', href: '/rooms/kids' },
            { type: 'link', title: 'SUSPENSION LAMPS', imgSrc: '/images/homepage/category-grid/suspension-lamps.jpg', altText: 'MUDAR A ALT TEXT', href: '/rooms/bathrooms' },
        ],
        row2: [
            { type: 'link', title: 'PLAYROOMS', imgSrc: '/images/homepage/category-grid/play-rooms.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/mirrors' },
            { type: 'link', title: 'KIDS', imgSrc: '/images/homepage/category-grid/kids.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/hardware' },
            { type: 'link', title: 'GAME ROOMS', imgSrc: '/images/homepage/category-grid/game-rooms.jpg', altText: 'MUDAR A ALT TEXT', href: '/products/accessories' },
        ],
    },
] as const;
</script>

<template>

    <Head title="Celebrate Design With your Friends"></Head>

    <HeroBanner :image-url="heroData.imageUrl" :title="heroData.title" :button-text="heroData.buttonText"
        :button-href="heroData.buttonHref" :alt-text="heroData.altText" />

    <CategoryGrid :sets="categoryGridData" class="pt-1.5" />
</template>
