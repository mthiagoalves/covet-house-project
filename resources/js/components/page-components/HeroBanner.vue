<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps<{
    imageUrl: string;
    altText: string;
    title: string;
    buttonText?: string;
    buttonHref?: string;
}>();

const mobileImageUrl = computed(() => `url('${props.imageUrl}-mobile.jpg')`);
const desktopImageUrl = computed(() => `url('${props.imageUrl}.jpg')`);
</script>

<template>
    <Link :href="buttonHref || '#'">
    <div class="hero-banner relative w-full flex items-end justify-center text-center text-white" role="img"
        :aria-label="altText">
        <div class="relative z-10 w-full p-6 pb-6">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>

            <h1 class="relative z-10 text-[11px] md:text-[18px] font-light tracking-wider leading-relaxed"
                v-html="title"></h1>

            <p
                class="relative z-10 inline-block text-[11px] mt-4 bg-white text-black py-2 px-20 font-normal tracking-wider hover:bg-gray-200 transition-colors">
                {{ buttonText || 'VIEW MORE' }}
            </p>
        </div>
    </div>
    </Link>
</template>

<style scoped>
.hero-banner {
    min-height: calc(100svh - 72px);
    background-image: v-bind(mobileImageUrl);
    background-size: cover;
    background-position: center center;
}

@media (min-width: 768px) {
    .hero-banner {
        min-height: calc(100svh - 108px);
        background-image: v-bind(desktopImageUrl);
    }
}
</style>
