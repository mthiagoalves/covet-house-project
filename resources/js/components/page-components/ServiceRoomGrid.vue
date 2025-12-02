<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

const rooms = [
    {
        title: 'ENTRYWAYS',
        href: '/room-by-room/entryways',
        imgSrc: '/images/products/inspirations-section/entryways.jpg'
    },
    {
        title: 'LIVING ROOMS',
        href: '/room-by-room/living-rooms',
        imgSrc: '/images/products/inspirations-section/living-rooms.jpg'
    },
    {
        title: 'DINING ROOMS',
        href: '/room-by-room/dining-rooms',
        imgSrc: '/images/products/inspirations-section/dining-rooms.jpg'
    },
    {
        title: 'BEDROOMS',
        href: '/room-by-room/bedrooms',
        imgSrc: '/images/products/inspirations-section/bedrooms.jpg'
    }
];
</script>

<template>
    <div class="w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[6px]">

            <Link v-for="room in rooms" :key="room.title" :href="room.href"
                class="relative group block h-[500px] md:h-[600px] overflow-hidden">
            <img :src="room.imgSrc" :alt="room.title"
                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-102"
                loading="lazy" />

            <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity">
            </div>

            <div class="absolute bottom-4 left-0 right-0 text-center">
                <h3 class="text-white text-xs font-normal tracking-[0.2em] uppercase relative inline-block">
                    {{ room.title }}
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-px bg-white transition-all duration-300 group-hover:w-full"></span>
                </h3>
            </div>
            </Link>

        </div>
    </div>
</template>
