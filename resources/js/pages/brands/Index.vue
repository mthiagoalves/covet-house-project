<script setup lang="ts">
import BrandSection from '@/components/page-components/BrandSection.vue';
import VideoHero from '@/components/page-components/VideoHero.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted, onUnmounted, ref } from 'vue';
import BrandsHeader from '@/components/page-components/BrandsHeader.vue';

const videoHeroData = {
    videoUrlBase: '/videos/covet-house-brands',
    title: '',
    subtitle: ''
};

interface Brand {
    name: string;
    slug: string;
    website: string;
    website_text: string;
    subtitle: string;
    description: string;
    image_count: number; // <-- Adicionado
    socials: { instagram?: string; facebook?: string; linkedin?: string; };
}

defineProps<{
    pageTitle: string;
    brands: Brand[];
}>();

const heroRef = ref<HTMLElement | null>(null);
const showBrandsHeader = ref(false);

let observer: IntersectionObserver | null = null;

onMounted(() => {
    document.body.style.overflow = 'hidden';

    const options = {
        root: null,
        threshold: 0.1,
    };

    observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            showBrandsHeader.value = !entry.isIntersecting;
        });
    }, options);

    if (heroRef.value) {
        observer.observe(heroRef.value);
    }
});

onUnmounted(() => {
    document.body.style.overflow = '';
    if (observer) {
        observer.disconnect();
    }
});

</script>

<template>

    <Head :title="pageTitle" />
    <BrandsHeader :brands="brands" class="transition-transform duration-500 ease-in-out"
        :class="showBrandsHeader ? 'translate-y-0' : '-translate-y-full'" />
    <div
        class="md:h-[calc(100svh-108px)] w-full overflow-y-scroll md:snap-y md:snap-mandatory scroll-smooth hidden-scrollbar">

        <div class="snap-start" ref="heroRef">
            <VideoHero :video-url-base="videoHeroData.videoUrlBase" :title="videoHeroData.title"
                :subtitle="videoHeroData.subtitle" />
        </div>

        <BrandSection v-for="(brand, index) in brands" :key="brand.slug" :brand="brand" :index="index"
            :id="`brand-${index}`" />
    </div>
</template>

<style scoped>
/* Esconde a barra de rolagem deste componente para ficar visualmente limpo */
div::-webkit-scrollbar {
    width: 0px;
    background: transparent;
}

div {
    -ms-overflow-style: none;
    /* IE and Edge */
    scrollbar-width: none;
    /* Firefox */
}
</style>
