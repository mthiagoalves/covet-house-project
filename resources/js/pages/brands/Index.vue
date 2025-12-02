<script setup lang="ts">
import VideoHero from '@/components/page-components/VideoHero.vue';
import { Head } from '@inertiajs/vue3';

const videoHeroData = {
    videoUrlBase: '/videos/covet-house-about-hero',
    title: '',
    subtitle: ''
};

interface Brand {
    name: string;
    slug: string;
    logo: string;
    cover_image: string;
    description: string;
}

defineProps<{
    pageTitle: string;
    brands: Brand[];
    hero: {
        imageUrl: string;
        title: string;
        altText: string;
    };
}>();
</script>

<template>

    <Head :title="pageTitle" />


    <VideoHero :video-url-base="videoHeroData.videoUrlBase" :title="videoHeroData.title"
        :subtitle="videoHeroData.subtitle" />

</template>
