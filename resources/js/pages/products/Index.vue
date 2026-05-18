<script setup lang="ts">
import ProductCard from '@/components/product/ProductCard.vue';
import { Head, Link } from '@inertiajs/vue3';
import { computed, onMounted, ref } from 'vue';
import AnchorMenu from '@/components/page-components/AnchorMenu.vue';
import ProductFormCard from '@/components/product/ProductFormCard.vue';

interface ProductData {
    id: number;
    type: 'product';
    name: string;
    slug: string;
    brand: { name: string; slug: string; };
    is_best_seller: boolean;
    category: {
        name: string;
        slug: string;
        subcategory: { name: string; slug: string; }
    };
}

interface FormCardData {
    type: 'form';
    id: string;
    title: string;
    subtitle: string;
    slug: string;
    imgSrc: string;
}

type GridItem = ProductData | FormCardData;

const props = defineProps<{
    pageTitle: string;
    category?: { name: string, description: string, slug: string };
    productGroups?: {
        category_name: string;
        category_slug: string;
        products: ProductData[];
    }[];
}>();

const formCardToInject: FormCardData = {
    type: 'form',
    id: 'form-new-catalogue',
    title: 'NEW CATALOGUE',
    subtitle: 'COVET HOUSE',
    slug: 'new-catalogue-covet-house',
    imgSrc: '/images/homepage/category-grid/new-catalogue-covet-house.jpg',
};

const staticMenuItems = [
    {
        title: 'Casegoods',
        subtitle: 'Explore our curated selection of cabinets, sideboards, and consoles.',
        imageUrl: '/images/anchor-menu/cabinets.jpg',
        altText: 'Elegant casegoods collection featuring cabinets, sideboards, and consoles - discover Covet House`s finest designs.',
        anchorHref: '#casegoods'
    },
    {
        title: 'Seating',
        subtitle: 'Discover a variety of chairs, sofas, and stools for every style.',
        imageUrl: '/images/anchor-menu/armchairs.jpg',
        altText: 'Luxurious seating options including chairs, sofas, and stools - find your perfect fit with Covet House.',
        anchorHref: '#seating'
    },
    {
        title: 'Tables',
        subtitle: 'Browse our range of dining, coffee, and side tables.',
        imageUrl: '/images/anchor-menu/tables.jpg',
        altText: 'Stylish tables collection featuring dining tables, coffee tables, and side tables - shop Covet House`s exclusive designs.',
        anchorHref: '#tables'
    },
    {
        title: 'Lighting',
        subtitle: 'Illuminate your space with our designer lighting fixtures.',
        imageUrl: '/images/anchor-menu/lighting.jpg',
        altText: 'Designer lighting fixtures to brighten your home - explore Covet House`s exquisite lighting collection.',
        anchorHref: '#lighting'
    },
    {
        title: 'Kids',
        subtitle: 'Charming furniture and decor for children’s rooms.',
        imageUrl: '/images/anchor-menu/kids.jpg',
        altText: 'Charming children`s furniture and decor - create a magical space with Covet House`s kids collection.',
        anchorHref: '#kids'
    },
    {
        title: 'Bathrooms',
        subtitle: 'Elegant bathroom furniture and accessories.',
        imageUrl: '/images/anchor-menu/bathrooms.jpg',
        altText: 'Elegant bathroom furniture and accessories - enhance your bathroom with Covet House`s sophisticated designs.',
        anchorHref: '#bathrooms'
    },
];
const INITIAL_COUNT = 6;
const visibleCounts = ref<Record<string, number>>({});

onMounted(() => {
    if (props.category && props.productGroups) {
        props.productGroups.forEach(group => {
            visibleCounts.value[group.category_slug] = INITIAL_COUNT;
        });
    }
});

function loadMore(groupSlug: string) {
    if (visibleCounts.value[groupSlug]) {
        visibleCounts.value[groupSlug] += INITIAL_COUNT;
    }
}

const bestSellers = computed(() => {
    if (!props.productGroups) return [];

    // flatMap: Extrai os produtos de todos os grupos e junta em um único array
    const extracted = props.productGroups.flatMap(group =>
        group.products.filter(item => item.type === 'product' && item.is_best_seller)
    ) as ProductData[];

    // Proteção extra: Remove duplicatas caso o mesmo produto venha em subcategorias diferentes
    const uniqueBestSellers = Array.from(new Map(extracted.map(item => [item.id, item])).values());

    return extracted;
});

const displayGroups = computed(() => {
    if (!props.productGroups) return [];

    return props.productGroups.map(group => {

        let productsWithInjections: GridItem[] = [...group.products];

        // Injeção do Form de Seating
        if (!props.category && group.category_slug === 'seating') {
            productsWithInjections.splice(7, 0, formCardToInject);
        }

        // CÓDIGO REFATORADO: Mais limpo e fácil de dar manutenção
        const casegoodsSubcategories = ['consoles', 'cabinets', 'screens', 'bookcases'];
        if (props.category?.slug === 'casegoods' && casegoodsSubcategories.includes(group.category_slug)) {
            productsWithInjections.splice(4, 0, formCardToInject);
        }

        let finalProductList = productsWithInjections;
        if (props.category) {
            const count = visibleCounts.value[group.category_slug] || INITIAL_COUNT;
            finalProductList = productsWithInjections.slice(0, count);
        }

        return {
            ...group,
            products: finalProductList,
            totalProducts: productsWithInjections.length
        };
    });
});

const menuItems = computed(() => {
    if (props.category && props.productGroups) {

        const excludedSlugs = [
            'bar-chairs',
            'counter-stool',
            'stools-and-benches',
        ];

        return props.productGroups
            .filter(group => !excludedSlugs.includes(group.category_slug))
            .map(group => ({
                title: group.category_name,
                subtitle: `${group.products.length} PRODUCTS`,
                imageUrl: `/images/anchor-menu/${group.category_slug}.jpg` || 'https://placehold.co/840x1060/333/fff?text=?',
                altText: group.category_name,
                anchorHref: `#${group.category_slug}`
            }));
    }
    return staticMenuItems;
});
</script>

<template>

    <Head :title="pageTitle" />

    <div class="bg-[#eeeeee] text-white min-h-screen">
        <AnchorMenu :items="menuItems" />
        <div class="max-w-full mx-auto p-1 text-center">
            <section id="best-sellers"
                class="scroll-mt-[72px] md:scroll-mt-[108px] mb-4">
                <h2 class="text-xl uppercase font-light text-black my-4 tracking-widest">
                    BEST SELLERS
                </h2>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-1">
                    <template v-for="item in bestSellers" :key="'bs-' + item.id">
                        <ProductCard :product="item" />
                    </template>
                </div>
            </section>
            <div v-if="displayGroups.length > 0">
                <section v-for="group in displayGroups" :key="group.category_slug" :id="group.category_slug"
                    class="scroll-mt-[72px] md:scroll-mt-[108px]">

                    <h2 class="text-xl uppercase font-light text-black my-4 tracking-widest">
                        {{ group.category_name }}
                    </h2>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-1">

                        <template v-for="item in group.products" :key="item.id">

                            <ProductCard v-if="item.type === 'product'" :product="item" />

                            <ProductFormCard v-else-if="item.type === 'form'" :form-data="item" />
                        </template>
                    </div>

                    <div v-if="props.category && group.products.length < group.totalProducts"
                        class="text-center mt-4 mb-4">
                        <button @click="loadMore(group.category_slug)"
                            class="text-[#777777] text-xs p-1 cursor-pointer font-semibold tracking-wider border-b border-[#777777]">
                            LOAD MORE >
                        </button>
                    </div>
                    <Link :href="`/category/${group.category_slug}`" v-else-if="!props.category"
                        class="text-black text-[11px] cursor-pointer font-normal tracking-widest border-b border-[#777777] uppercase">
                        SEE ALL {{ group.category_name }} >
                    </Link>
                </section>
            </div>

            <div v-else>
                <p class="text-gray-500">No products found.</p>
            </div>

        </div>
    </div>
</template>
