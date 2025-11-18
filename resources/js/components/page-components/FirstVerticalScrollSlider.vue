<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Mousewheel, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';

const modules = [Mousewheel, Pagination];

interface SlideItem {
    title: string;
    description: string;
}

interface Slide {
    imgSrc: string;
    items: SlideItem[];
}
defineProps<{
    mainTitle: string;
    slides: Slide[];
}>();

</script>

<template>
    <div class="relative h-[calc(100svh-72px)] md:h-[calc(100svh-108px)] bg-black text-white">
        <div class="position absolute top-10 md:left-16 z-20 text-center md:text-start w-full">
            <h2 class="text-xl md:text-4xl font-light tracking-widest uppercase mb-10">
                {{ mainTitle }} </h2>
        </div>

        <div class="vertical-pagination gap-5 left-14"></div>
        <Swiper :modules="modules" direction="vertical" class="h-full" :slides-per-view="1" :space-between="0"
            :mousewheel="{
                releaseOnEdges: true,
            }" :pagination="{
                el: '.vertical-pagination',
                clickable: true,
                bulletClass: 'vertical-pagination-bullet',
                bulletActiveClass: 'vertical-pagination-bullet-active',
            }">

            <SwiperSlide v-for="(slide, index) in slides" :key="index" class="w-full md:h-full bg-cover bg-center"
                :style="{ backgroundImage: `url(${slide.imgSrc})` }">
                <div class="relative z-10 max-w-full md:max-w-1/3 h-full flex flex-col justify-center bg-[#00000080]">
                    <div class="w-full md:w-4/5 md:mx-16 px-6">
                        <ul class="space-y-4">
                            <li v-for="item in slide.items" :key="item.title">
                                <h4 class="text-sm font-semibold tracking-wider uppercase">
                                    {{ item.title }}
                                </h4>
                                <p class="text-sm text-gray-300">
                                    {{ item.description }}
                                </p>
                                <Link v-if="item.title === 'STOCKLIST'" href="/in-stock"
                                    class="inline-block mt-8 bg-white text-black py-3 px-10 font-semibold tracking-wider hover:bg-gray-200 transition-colors text-sm">
                                DISCOVER MORE
                                </Link>
                                <Link v-else-if="item.title === 'CATALOGUES'" href="/inspirations/catalogues-and-books"
                                    class="inline-block mt-8 bg-white text-black py-3 px-10 font-semibold tracking-wider hover:bg-gray-200 transition-colors text-sm">
                                DISCOVER MORE
                                </Link>
                            </li>
                        </ul>

                    </div>

                </div>
            </SwiperSlide>
        </Swiper>

        <div class="absolute w-full md:max-w-1/4 bottom-10 md:left-16 z-20 flex flex-col items-center gap-1 cursor-pointer">
            <div class="w-8 h-12 border border-white rounded-full relative flex justify-center pt-2">
                <div class="w-1 h-3 bg-white rounded-full animate-bounce"></div>
            </div>
            <span class="text-xs tracking-widest">Scroll</span>
        </div>
    </div>
</template>

<style>
.vertical-pagination {
    position: absolute;
    left: 50px !important;
    /* Distância da esquerda */
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    display: flex;
    flex-direction: column;
    /* Torna os pontos verticais */
    gap: 20px;
    /* Espaço entre os pontos */
}

/* O ponto individual */
.vertical-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: transparent;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s ease;
}

/* O ponto ativo (onde estamos) */
.vertical-pagination-bullet-active {
    background-color: white;
    border-color: white;
    transform: scale(1.2);
}
</style>
