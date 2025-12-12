<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import HeroBanner from '@/components/page-components/HeroBanner.vue';

defineProps<{
    pageTitle: string;
    hero: any;
    showrooms: any[];
}>();
</script>

<template>

    <Head :title="pageTitle" />

    <div class="bg-white min-h-screen">

        <HeroBanner :image-url="hero.imageUrl" :alt-text="hero.altText" :title="hero.title"
            button-text="EXPLORE LOCATIONS" button-href="#locations" />

        <div id="locations" class="w-full">

            <div v-for="(showroom, index) in showrooms" :key="showroom.slug"
                class="flex flex-col md:flex-row h-auto md:h-[600px] w-full"
                :class="index % 2 !== 0 ? 'md:flex-row-reverse' : ''">
                <div class="w-full md:w-1/2 h-[400px] md:h-full relative overflow-hidden group">
                    <Link :href="`showrooms/${showroom.slug}`" class="block h-full w-full">
                        <img :src="showroom.cover_image" :alt="showroom.name"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div
                            class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100 duration-300">
                            <span
                                class="text-white border border-white px-6 py-2 text-xs font-bold tracking-widest uppercase">
                                VIEW SHOWROOM
                            </span>
                        </div>
                    </Link>
                </div>

                <div
                    class="w-full md:w-1/2 bg-white flex flex-col justify-center items-center text-center p-12 md:p-20">
                    <h3 class="text-sm text-[#bca479] font-bold tracking-widest uppercase mb-4">
                        {{ showroom.location }}
                    </h3>
                    <h2 class="text-3xl md:text-4xl font-light tracking-widest uppercase mb-6 text-black">
                        {{ showroom.name }}
                    </h2>
                    <p class="text-xs md:text-sm text-gray-500 leading-relaxed max-w-md mb-10">
                        {{ showroom.description }}
                    </p>

                    <Link :href="`showrooms/${showroom.slug}`"
                        class="bg-black text-white text-[10px] font-bold py-3 px-8 tracking-widest hover:bg-[#bca479] transition-colors uppercase">
                        DISCOVER MORE
                    </Link>
                </div>
            </div>

        </div>

    </div>
</template>
