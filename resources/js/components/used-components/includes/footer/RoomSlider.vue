<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Navigation } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { useGeneralModal } from '@/composables/useGeneralModal';
import 'swiper/css';
import 'swiper/css/navigation';

const rooms = [
    {
        title: 'BEDROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-1.jpg',
        priceHref: '/get-price/bedroom-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'LIVING ROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-2.jpg',
        priceHref: '/get-price/living-room-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'DINING ROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-3.jpg',
        priceHref: '/get-price/dining-room-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'KIDS ROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-4.jpg',
        priceHref: '/get-price/kids-room-item',
        aspectRatio: 'landscape'
    },
    {
        title: 'BEDROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-5.jpg',
        priceHref: '/get-price/bedroom-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'LIVING ROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-6.jpg',
        priceHref: '/get-price/living-room-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'DINING ROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-7.jpg',
        priceHref: '/get-price/dining-room-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'KIDS ROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-8.jpg',
        priceHref: '/get-price/kids-room-item',
        aspectRatio: 'landscape'
    },
    {
        title: 'BEDROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-9.jpg',
        priceHref: '/get-price/bedroom-item',
        aspectRatio: 'portrait'
    },
    {
        title: 'LIVING ROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-10.jpg',
        priceHref: '/get-price/living-room-item',
        aspectRatio: 'landscape'
    },
    {
        title: 'DINING ROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-11.jpg',
        priceHref: '/get-price/dining-room-item',
        aspectRatio: 'landscape'
    },
    {
        title: 'KIDS ROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-12.jpg',
        priceHref: '/get-price/kids-room-item',
        aspectRatio: 'landscape'
    },
    {
        title: 'KIDS ROOM',
        href: '/inspirations',
        imgSrc: '/images/room-slider/room-slider-13.jpg',
        priceHref: '/get-price/kids-room-item',
        aspectRatio: 'landscape'
    }
];

const props = defineProps<{
    hideTitle: boolean;
}>();

const modules = [Navigation];

const { open } = useGeneralModal();

function openGeneralModal(room: any) {
    const modalData = {
        title: room.title,
        imgSrc: room.imgSrc,
        href: room.href,
        pagePosition: 'Bottom',
        formType: 'Price',
        page: 'Landing Pages',
        btnName: 'GET ROOM PRICE'
    };
    open(modalData);
}
</script>

<template>
    <div class="w-full room-slider bg-black">
        <h3 v-if="!hideTitle" class="text-white text-[20px] text-center py-5 font-light tracking-wider">SHOP BY ROOM
        </h3>
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
                        <button @click.prevent="openGeneralModal(room)"
                            class="text-[12px] font-light tracking-wider text-white transition-colors border-b border-white cursor-pointer">
                            GET ROOM PRICE >
                        </button>
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
</style>
