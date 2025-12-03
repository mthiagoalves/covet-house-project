<script setup lang="ts">
import BrandSection from '@/components/page-components/BrandSection.vue';
import VideoHero from '@/components/page-components/VideoHero.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted, onUnmounted } from 'vue';

const videoHeroData = {
    videoUrlBase: '/videos/covet-house-brands',
    title: '',
    subtitle: ''
};

interface Brand {
    name: string;
    slug: string;
    website: string;
    subtitle: string;
    description: string;
    image_count: number; // <-- Adicionado
    socials: { instagram?: string; facebook?: string; linkedin?: string; };
}

defineProps<{
    pageTitle: string;
    brands: Brand[];
}>();

// 2. Lógica para remover a barra de rolagem dupla
onMounted(() => {
    // Trava o scroll do site principal, deixando apenas o scroll deste componente funcionar
    document.body.style.overflow = 'hidden';
});

onUnmounted(() => {
    // Restaura o scroll normal quando sair desta página
    document.body.style.overflow = '';
});
</script>

<template>
    <div
        class="md:h-[calc(100svh-108px)] w-full overflow-y-scroll md:snap-y md:snap-mandatory scroll-smooth hidden-scrollbar">

        <div class="snap-start">
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
