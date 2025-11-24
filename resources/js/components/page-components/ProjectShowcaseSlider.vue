<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Autoplay, EffectFade } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/effect-fade';

const modules = [Navigation, Autoplay, EffectFade];

interface ProjectSlide {
    id: number;
    image_url: string;
    image_url_mobile: string;
    title: string;
    subtitle: string;
    cta_text: string;
    cta_link: string;
}

defineProps<{
    slides: ProjectSlide[];
}>();
</script>

<template>
    <div class="w-full project-showcase-slider relative">
        <div class="flex items-center justify-center gap-6 mb-6">
            <div class="h-px bg-gray-300 flex-grow md:max-w-full"></div>

            <h2 class="text-xl md:text-2xl font-light tracking-[0.2em] uppercase text-center whitespace-nowrap">
                OUR PROJECTS
            </h2>

            <div class="h-px bg-gray-300 flex-grow md:max-w-full"></div>
        </div>
        <Swiper :modules="modules" :slides-per-view="1" :loop="true" :effect="'fade'" :speed="700" :autoplay="{
            delay: 5000,
            disableOnInteraction: false,
        }" :navigation="true" class="md:h-screen md:max-h-[1080px]">
            <SwiperSlide v-for="slide in slides" :key="slide.id" class="relative w-full h-full">

                <img :src="slide.image_url" :alt="slide.title" class="absolute inset-0 w-full h-full object-cover hidden md:block" />
                <img :src="slide.image_url_mobile" :alt="slide.title" class="block md:hidden" />

                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/5 to-transparent"></div>

                <div
                    class="absolute bottom-0 left-0 right-0 pb-6 md:pb-20 px-4 z-10 flex flex-col items-center text-center text-white">

                    <h2 class="text-sm md:text-xl font-semibold tracking-widest uppercase mb-1">
                        {{ slide.title }}
                    </h2>

                    <p class="text-xs md:text-sm font-normal tracking-[0.2em] uppercase mb-4">
                        {{ slide.subtitle }}
                    </p>

                    <Link :href="slide.cta_link"
                        class="bg-white text-black text-[10px] md:text-xs font-normal py-2 px-10 tracking-widest hover:bg-gray-200 transition-colors uppercase">
                    {{ slide.cta_text }}
                    </Link>
                </div>

            </SwiperSlide>
        </Swiper>
    </div>
</template>
