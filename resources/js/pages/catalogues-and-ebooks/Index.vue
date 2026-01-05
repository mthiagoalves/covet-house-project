<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import CataloguesHero from '@/components/page-components/CataloguesHero.vue';

defineProps<{
    pageTitle: string;
}>();
</script>

<template>

    <Head :title="pageTitle" />

    <CataloguesHero />

    <div class="relative z-10 bg-white min-h-screen w-full mt-[400px]">

        <div class="max-w-[1400px] mx-auto px-4 py-20">
            <h2 class="text-3xl font-light text-center mb-10 uppercase tracking-widest">
                Our Latest Catalogues
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
