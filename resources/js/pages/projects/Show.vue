<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import { Download } from 'lucide-vue-next';
import { useGeneralModal } from '@/composables/useGeneralModal';
import BestSellersProducts from '@/components/page-components/BestSellersProducts.vue';

const props = defineProps<{
    project: any;
    gridImages: number;
    relatedProducts: any[];
}>();

const modalData = {
    title: props.project.title,
    slug: props.project.slug,
    formType: 'Project',
    btnName: 'DOWNLOAD NOW'
}

const { open: openGeneralModal } = useGeneralModal();

const totalImages = props.gridImages;

const remainder = totalImages % 3;

const initialCount = totalImages < 3 ? totalImages : totalImages - remainder;

const itemsToShow = ref(initialCount);

const hasMore = computed(() => {
    return itemsToShow.value < totalImages;
});

const loadMore = () => {
    itemsToShow.value = totalImages;
};
</script>

<template>

    <Head :title="props.project.title" />

    <div
        class="hero-banner relative w-full hero-height flex items-center justify-center text-center text-white overflow-hidden">

        <div class="absolute inset-0 w-full h-full">
            <picture>
                <source media="(min-width: 768px)" :srcset="`/images/projects/${props.project.slug}.jpg`">

                <img :src="`/images/projects/thumbnails/${props.project.slug}.jpg`" :alt="props.project.title"
                    class="w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-105" />
            </picture>

            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
        </div>

        <div class="relative z-10 w-full p-6 pb-6">
            <div class="absolute inset-0 from-black/70 via-black/40 to-transparent"></div>

            <h1 class="relative z-10 text-[11px] md:text-[18px] font-bold tracking-wider leading-relaxed uppercase"
                v-html="props.project.title"></h1>

            <h2 class="relative z-10 text-[11px] md:text-sm font-light tracking-wider leading-relaxed uppercase"
                v-html="props.project.subtitle"></h2>
        </div>
    </div>

    <div class="w-full bg-[#eeeeee] pb-4 px-10">

        <div class="text-center py-16 md:py-7 px-4 w-2/3 mx-auto">
            <h2 class="text-xl md:text-2xl font-light uppercase tracking-[0.2em] mb-4 text-black"
                v-html="props.project.title">
            </h2>
            <p class="text-[10px] md:text-[13px] text-gray-500 uppercase tracking-widest font-medium"
                v-html="props.project.description">
            </p>
        </div>
        <div class="flex justify-center mb-10">
            <a @click="openGeneralModal(modalData)"
                class="bg-black text-white text-[10px] md:text-[11px] font-light py-3 px-8 uppercase tracking-[0.2em] cursor-pointer flex items-center gap-3 hover:bg-[#bca479] transition-colors duration-300">
                Download Full Project
                <Download class="w-4 h-4" />
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-1.5">
            <div v-for="i in itemsToShow" :key="i" class="relative group overflow-hidden">
                <img :src="`/images/projects/${props.project.slug}/${props.project.slug}-${i}.jpg`"
                    :alt="`${props.project.title} image ${i}`" class="w-full h-full object-cover" loading="lazy" />
            </div>
        </div>

        <div v-if="hasMore" class="mt-4 text-center w-full flex justify-center">
            <button @click="loadMore"
                class="bg-[#222] border border-[#333] text-white text-[10px] font-bold py-2 px-12 tracking-[0.2em] uppercase hover:bg-[#bca479] hover:border-[#bca479] transition-all duration-300 cursor-pointer">
                Load More
            </button>
        </div>
    </div>

    <BestSellersProducts :title='"OUR CURATED PIECES"' :products="relatedProducts" />

</template>

<style scoped>
.hero-banner {
    min-height: calc(100svh - 72px);
    background-size: cover;
    background-position: center center;
}

@media (min-width: 768px) {
    .hero-banner {
        min-height: calc(100svh - 108px);
    }
}
</style>
