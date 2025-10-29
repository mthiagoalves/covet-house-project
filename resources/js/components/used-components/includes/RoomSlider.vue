<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Navigation } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';

import 'swiper/css';
import 'swiper/css/navigation';

const rooms = [
    {
        title: 'BEDROOM',
        href: '/room/bedroom',
        imgSrc: '/images/room-slider/room-slider-1.jpg',
        priceHref: '/get-price/bedroom-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'LIVING ROOM',
        href: '/room/living-room',
        imgSrc: '/images/room-slider/room-slider-2.jpg',
        priceHref: '/get-price/living-room-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'DINING ROOM',
        href: '/room/dining-room',
        imgSrc: '/images/room-slider/room-slider-3.jpg',
        priceHref: '/get-price/dining-room-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'KIDS ROOM',
        href: '/room/kids-room',
        imgSrc: '/images/room-slider/room-slider-4.jpg',
        priceHref: '/get-price/kids-room-item',
        aspectRatio: 'landscape'
    },
    {
        title: 'BEDROOM',
        href: '/room/bedroom',
        imgSrc: '/images/room-slider/room-slider-5.jpg',
        priceHref: '/get-price/bedroom-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'LIVING ROOM',
        href: '/room/living-room',
        imgSrc: '/images/room-slider/room-slider-6.jpg',
        priceHref: '/get-price/living-room-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'DINING ROOM',
        href: '/room/dining-room',
        imgSrc: '/images/room-slider/room-slider-7.jpg',
        priceHref: '/get-price/dining-room-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'KIDS ROOM',
        href: '/room/kids-room',
        imgSrc: '/images/room-slider/room-slider-8.jpg',
        priceHref: '/get-price/kids-room-item',
        aspectRatio: 'landscape'
    },
    {
        title: 'BEDROOM',
        href: '/room/bedroom',
        imgSrc: '/images/room-slider/room-slider-9.jpg',
        priceHref: '/get-price/bedroom-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'LIVING ROOM',
        href: '/room/living-room',
        imgSrc: '/images/room-slider/room-slider-10.jpg',
        priceHref: '/get-price/living-room-item',
        aspectRatio: 'landscape'
    },
    {
        title: 'DINING ROOM',
        href: '/room/dining-room',
        imgSrc: '/images/room-slider/room-slider-11.jpg',
        priceHref: '/get-price/dining-room-item',
        aspectRatio: 'landscape'
    },
    {
        title: 'KIDS ROOM',
        href: '/room/kids-room',
        imgSrc: '/images/room-slider/room-slider-12.jpg',
        priceHref: '/get-price/kids-room-item',
        aspectRatio: 'landscape'
    },
    {
        title: 'KIDS ROOM',
        href: '/room/kids-room',
        imgSrc: '/images/room-slider/room-slider-13.jpg',
        priceHref: '/get-price/kids-room-item',
        aspectRatio: 'landscape'
    }
];

const modules = [Navigation];
</script>

<template>
    <div class="w-full room-slider bg-black">
        <h3 class="text-white text-[20px] text-center py-5 font-normal tracking-wider">SHOP BY ROOM</h3>
        <Swiper :modules="modules" :slides-per-view="1" :space-between="6" :navigation="true" :loop="true" :breakpoints="{
            768: {
                slidesPerView: 2,
                spaceBetween: 6
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 6
            }
        }">
            <SwiperSlide v-for="room in rooms" :key="room.title"
                :class="room.aspectRatio === 'landscape' ? 'slide-landscape' : ''">
                <Link :href="room.href" class="relative block group">
                <img :src="room.imgSrc" :alt="room.title"
                    class="w-full h-auto md:aspect-auto aspect-[3/4] object-cover object-center" />

                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                <div class="absolute bottom-6 left-0 text-white w-full text-center">
                    <h3 class="text-sm font-bold">{{ room.title }}</h3>
                    <Link :href="room.priceHref"
                        class="text-[12px] font-light tracking-wider text-white transition-colors border-b border-white">
                    GET ROOM PRICE >
                    </Link>
                </div>
                </Link>
            </SwiperSlide>
        </Swiper>
    </div>
</template>

<style>
@media (min-width: 756px) {
    .slide-landscape {
        width: auto !important;
        max-width: 59.3% !important
    }
}

.swiper-button-prev,
.swiper-button-next {
    color: #ffffff83;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    transition: ease-in-out;
    transition-duration: .5s;
}

.swiper-button-prev:hover,
.swiper-button-next:hover {
    color: #ffffff;
}

.swiper-button-prev::after,
.swiper-button-next::after {
    font-size: 16px;
}
</style>
