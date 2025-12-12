<script setup lang="ts">
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Autoplay, EffectFade, Pagination, Navigation } from 'swiper/modules';
import { ref } from 'vue';
import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

const modules = [Autoplay, EffectFade, Pagination, Navigation];

interface Slide {
    url: string;
    title: string;
    subtitle: string;
    link_url?: string;
}

defineProps<{
    slides: Slide[];
}>();

// Estado reativo simples. O Vue propaga isso para todos os vídeos via :muted
const isMuted = ref(true);

function toggleMute() {
    isMuted.value = !isMuted.value;
}
</script>

<template>
    <div class="w-full relative h-[calc(100svh-72px)] md:h-[calc(100svh-108px)] bg-black overflow-hidden">

        <div v-if="slides.length === 1" class="relative w-full h-full">
            <video class="absolute inset-0 w-full h-full object-cover" autoplay loop playsinline :muted="isMuted">
                <source :src="`${slides[0].url}.mp4`" type="video/mp4" media="(min-width: 768px)">
                <source :src="`${slides[0].url}-m.mp4`" type="video/mp4" media="(max-width: 767px)">
            </video>

            <div
                class="absolute w-full z-20 h-full flex flex-col items-center justify-center pointer-events-none select-none text-white">
                <p
                    class="text-2xl font-bold uppercase tracking-widest mt-auto pb-1 flex flex-col items-center gap-1 text-shadow-2xs">
                    {{ slides[0].title }}
                </p>
                <div class="pb-10 flex flex-col items-center gap-1">
                    <p class="tracking-widest text-center font-light">{{ slides[0].subtitle }}</p>
                </div>

                <a v-if="slides[0].link_url" :href="slides[0].link_url" target="_blank"
                    class="bg-transparent text-white text-[10px] font-bold py-3 px-15 tracking-widest border-white border-1 hover:bg-white hover:text-black cursor-pointer transition-colors uppercase pointer-events-auto mb-10">
                    explore
                </a>
            </div>

            <button @click="toggleMute"
                class="absolute bottom-6 left-10 z-30 w-8 h-8 text-white opacity-70 hover:opacity-100 transition-opacity cursor-pointer"
                aria-label="Toggle mute">
                <img v-if="isMuted" src="/images/icons/speakers-white-mute.png" class="h-5" alt="Muted">
                <img v-else src="/images/icons/speakers-white.png" class="h-5" alt="Unmuted">
            </button>
        </div>

        <Swiper v-else :modules="modules" :slides-per-view="1" :loop="true" :effect="'fade'" :speed="700"
            :autoplay="{ delay: 6000, disableOnInteraction: false }" :pagination="{ clickable: true }"
            :navigation="true" class="h-full w-full showroom-hero-swiper">
            <SwiperSlide v-for="(slide, index) in slides" :key="index" class="relative w-full h-full">
                <video class="absolute inset-0 w-full h-full object-cover" autoplay loop :muted="isMuted" playsinline>
                    <source :src="`${slide.url}.mp4`" type="video/mp4" media="(min-width: 768px)">
                    <source :src="`${slide.url}-m.mp4`" type="video/mp4" media="(max-width: 767px)">
                </video>

                <div
                    class="absolute w-full z-50 h-full flex flex-col items-center justify-center text-white pointer-events-none">
                    <p
                        class="text-2xl font-bold uppercase tracking-widest mt-auto pb-1 flex flex-col items-center gap-1 text-shadow-2xs">
                        {{ slide.title }}
                    </p>

                    <div class="pb-2 flex flex-col items-center gap-1">
                        <p class="tracking-widest text-center font-light">{{ slide.subtitle }}</p>
                    </div>

                    <a v-if="slide.link_url" :href="slide.link_url" target="_blank"
                        class="bg-transparent text-white text-[10px] font-bold py-3 px-15 tracking-widest border-white border-1 hover:bg-white hover:text-black cursor-pointer transition-colors uppercase w-full md:w-auto mb-10 pointer-events-auto">
                        explore
                    </a>
                </div>

                <button @click="toggleMute"
                    class="absolute bottom-6 left-10 w-8 h-8 text-white opacity-70 hover:opacity-100 transition-opacity cursor-pointer z-50"
                    aria-label="Toggle mute">
                    <img v-if="isMuted" src="/images/icons/speakers-white-mute.png" class="h-5" alt="Muted">
                    <img v-else src="/images/icons/speakers-white.png" class="h-5" alt="Unmuted">
                </button>
            </SwiperSlide>
        </Swiper>
    </div>
</template>

<style>
/* Seus estilos mantidos */
.video-hero-banner {
    min-height: calc(100svh - 72px);
}

@media (min-width: 768px) {
    .video-hero-banner {
        min-height: calc(100svh - 108px);
    }
}

.showroom-hero-swiper .swiper-pagination-bullet {
    background: white;
    opacity: 0.5;
    width: 10px;
    height: 10px;
    margin: 0 6px !important;
}

.showroom-hero-swiper .swiper-pagination-bullet-active {
    opacity: 1;
    background: #bca479;
}

.showroom-hero-swiper .swiper-button-next,
.showroom-hero-swiper .swiper-button-prev {
    color: white;
    opacity: 0.5;
    transform: scale(0.7);
    transition: opacity 0.3s;
}

.showroom-hero-swiper .swiper-button-next:hover,
.showroom-hero-swiper .swiper-button-prev:hover {
    opacity: 1;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fadeInUp 1s ease-out forwards;
}

.delay-100 {
    animation-delay: 0.2s;
}
</style>
