<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import CataloguesHero from '@/components/page-components/CataloguesHero.vue';

defineProps<{
    pageTitle: string;
}>();
</script>

<template>

    <Head :title="pageTitle" />

    <CataloguesHero title="The Ultimate Inspirations Design Book" slug="the-ultimate-inspirations-design-book" />

    <div class="relative z-10 bg-white min-h-screen w-full md:mt-[410px]">

        <div class="max-w-[1400px] mx-auto px-4 py-4">
            <h2 class="text-2xl font-bold text-center mb-5 uppercase tracking-widest">
                ALL EDITORIAL CONTENT
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div v-for="i in 9" :key="i" class="aspect-[3/4] bg-gray-100 flex items-center justify-center">
                    <p class="text-gray-400 uppercase tracking-widest">Catalogue {{ i }}</p>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 py-20 text-center">
            <p class="text-sm text-gray-500">END OF CATALOGUES</p>
        </div>

    </div>

</template>
