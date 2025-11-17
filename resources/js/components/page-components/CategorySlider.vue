<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Autoplay, Navigation } from 'swiper/modules';

import 'swiper/css';

const modules = [Autoplay, Navigation];

const slideData = [
    {
        title: 'SIDEBOARDS',
        imgSrc: '/images/homepage/category-grid/square-images/sideboards.jpg',
        href: '/category/casegoods#sideboards'
    },
    {
        title: 'CONSOLES',
        imgSrc: '/images/homepage/category-grid/square-images/consoles.jpg',
        href: '/category/casegoods#consoles'
    },
    {
        title: 'CABINETS',
        imgSrc: '/images/homepage/category-grid/square-images/cabinets.jpg',
        href: '/category/casegoods#cabinets'
    },
    {
        title: 'MIRRORS',
        imgSrc: '/images/homepage/category-grid/square-images/mirrors.jpg',
        href: '/category/casegoods#mirrors'
    },
    {
        title: 'ARMCHAIRS',
        imgSrc: '/images/homepage/category-grid/square-images/armchairs.jpg',
        href: '/category/seating#armchairs'
    },
    {
        title: 'SOFAS',
        imgSrc: '/images/homepage/category-grid/square-images/sofas.jpg',
        href: '/category/seating#sofas'
    },
    {
        title: 'DINING CHAIRS',
        imgSrc: '/images/homepage/category-grid/square-images/dining-chairs.jpg',
        href: '/category/seating#dining-chairs'
    },
    {
        title: 'CENTER TABLES',
        imgSrc: '/images/homepage/category-grid/square-images/center-tables.jpg',
        href: '/category/tables#center-tables'
    },
    {
        title: 'DINING TABLES',
        imgSrc: '/images/homepage/category-grid/square-images/dining-tables.jpg',
        href: '/category/tables#dining-tables'
    },
    {
        title: 'SUSPENSION LAMPS',
        imgSrc: '/images/homepage/category-grid/square-images/suspension-lamps.jpg',
        href: '/category/lighting#suspension-lamps'
    },
    {
        title: 'WALL LAMPS',
        imgSrc: '/images/homepage/category-grid/square-images/wall-lamps.jpg',
        href: '/category/lighting#wall-lamps'
    },
    {
        title: 'KIDS',
        imgSrc: '/images/homepage/category-grid/square-images/kids.jpg',
        href: '/category/kids'
    },
    {
        title: 'BATHROOMS',
        imgSrc: '/images/homepage/category-grid/square-images/bathrooms.jpg',
        href: '/category/bathrooms'
    },
];
</script>

<template>
    <div class="w-full bg-black">
        <Swiper :modules="modules" :navigation="true" :slides-per-view="1" :space-between="6" :loop="true" :autoplay="{
            delay: 2500,
            disableOnInteraction: false,
        }" :breakpoints="{
            768: {
                slidesPerView: 3,
                spaceBetween: 6
            }
        }">
            <SwiperSlide v-for="slide in slideData" :key="slide.title">
                <Link :href="slide.href" class="relative group block bg-[#222]">
                <img :src="slide.imgSrc" :alt="slide.title" loading="lazy" />
                <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-black/60 to-transparent">
                </div>
                <h3
                    class="absolute bottom-6 left-0 right-0 text-center text-white text-sm font-normal tracking-widest uppercase">
                    {{ slide.title }}
                </h3>
                </Link>
            </SwiperSlide>
        </Swiper>
    </div>
</template>
