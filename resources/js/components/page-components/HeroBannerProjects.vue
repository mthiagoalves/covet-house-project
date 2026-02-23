<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

// Swiper Imports
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Autoplay, EffectFade, Navigation, Pagination } from 'swiper/modules';
import type { Swiper as SwiperType } from 'swiper';

// Swiper CSS
import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Controle do Swiper
const swiperInstance = ref<SwiperType | null>(null);

const onSwiper = (swiper: SwiperType) => {
    swiperInstance.value = swiper;
};

const modules = [Autoplay, EffectFade, Navigation, Pagination];

const props = defineProps<{
    projects: any[];
}>();

</script>

<template>
    <Swiper :modules="modules" :effect="'fade'" :fade-effect="{ crossFade: true }" :speed="1000" :autoplay="{
        delay: 6000,
        disableOnInteraction: false,
    }" :loop="true" :pagination="{ clickable: true }" :navigation="true" @swiper="onSwiper" class="w-full h-full">
        <SwiperSlide v-for="project in projects" :key="project.id">
            <Link :href="`/projects-houses/${project.slug}`">
                <div
                    class="hero-banner relative w-full hero-height flex items-end justify-center text-center text-white overflow-hidden">

                    <div class="absolute inset-0 w-full h-full">
                        <picture>
                            <source media="(min-width: 768px)" :srcset="`/images/projects/${project.slug}.jpg`">

                            <img :src="`/images/projects/thumbnails/${project.slug}.jpg`" :alt="project.title"
                                class="w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-105" />
                        </picture>

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    </div>

                    <div class="relative z-10 w-full p-6 pb-6">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>

                        <h1 class="relative z-10 text-sm md:text-[18px] font-bold tracking-wider leading-relaxed uppercase"
                            v-html="project.title"></h1>

                        <h2 class="relative z-10 text-[11px] md:text-sm font-light tracking-wider leading-relaxed uppercase"
                            v-html="project.subtitle"></h2>

                        <p
                            class="relative z-10 inline-block text-[11px] my-4 bg-white text-black py-2 px-20 font-normal tracking-wider">
                            DISCOVER MORE
                        </p>
                    </div>
                </div>
            </Link>
        </SwiperSlide>
    </Swiper>
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

.animate-fade-in-up {
    animation: fadeInUp 1s ease-out forwards;
    opacity: 0;
    transform: translateY(20px);
}

.delay-100 {
    animation-delay: 0.2s;
}

.delay-200 {
    animation-delay: 0.4s;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

:deep(.swiper-pagination-bullet) {
    background: transparent;
    border: 1px solid white;
    opacity: .8;
    width: 8px;
    height: 8px;
    margin: 0 6px !important;
}

:deep(.swiper-pagination-bullet-active) {
    opacity: 1;
    background: white;
    transform: scale(1.2);
}
</style>
