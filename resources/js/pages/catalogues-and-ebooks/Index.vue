<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import CataloguesHero from '@/components/page-components/CataloguesHero.vue';
import CatalogueGrid from '@/components/page-components/CatalogueGrid.vue';

defineProps<{
    pageTitle: string;
    featuredCatalogue: any;
    regularCatalogues: any[];
}>();
</script>

<template>

    <Head :title="pageTitle" />

    <CataloguesHero title="The Ultimate Inspirations Design Book" slug="the-ultimate-inspirations-design-book" />

    <div class="relative z-10 bg-white min-h-screen w-full md:mt-[410px]">

        <div class="max-w-full mx-auto px-4 py-4">
            <h2 class="text-2xl font-bold text-center mb-5 uppercase tracking-widest">
                ALL EDITORIAL CONTENT
            </h2>

            <CatalogueGrid :featured="featuredCatalogue" :list="regularCatalogues" />
        </div>

        <div class="bg-gray-100 py-20 text-center">
            <p class="text-sm text-gray-500">END OF CATALOGUES</p>
        </div>

    </div>

</template>
