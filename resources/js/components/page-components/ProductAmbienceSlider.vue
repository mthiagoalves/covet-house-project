<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import 'swiper/css';
import 'swiper/css/navigation';
import { Autoplay, Navigation } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';


interface Hotspot {
    product_name: string;
    product_slug: string;
    top: string;
    left: string;
}

interface Ambience {
    name: string;
    slug: string;
    hotspots?: Hotspot[];
}

const props = defineProps<{
    ambiences: Ambience[];
}>();

const modules = [Navigation, Autoplay];
const getAmbienceImage = (slug: string) => `/images/products/ambiences/${slug}.jpg`;
</script>

<template>
    <div class="w-full bg-[#eeeeee] py-1 md:px-15 border-t border-gray-100">
        <div class="relative group">
            <Swiper :modules="modules" :slides-per-view="1" :space-between="6" :loop="true" :navigation="true"
                :autoplay="false" :breakpoints="{
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 4
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 4
                    }
                }" class="main-product-swiper">
                <SwiperSlide v-for="ambience in ambiences" :key="ambience.slug">

                    <img :src="getAmbienceImage(ambience.slug)" :alt="ambience.name" loading="lazy" />
                    <div v-for="(hotspot, idx) in ambience.hotspots" :key="idx"
                        class="absolute z-20 w-8 h-8 flex items-center justify-center cursor-pointer group/hotspot"
                        :style="{ top: hotspot.top, left: hotspot.left }">
                        <div class="absolute w-full h-full bg-white rounded-full opacity-50 animate-ping"></div>
                        <Link :href="`/products/${hotspot.product_slug}`">
                        <div
                            class="relative w-6 h-6 bg-transparent border border-white rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                            <div class="w-1 h-1 bg-white rounded-full"></div>
                        </div>
                        </Link>

                        <Link :href="`/products/${hotspot.product_slug}`"
                            class="absolute left-full ml-3 bg-white text-gray-500 text-[10px] font-normal uppercase tracking-widest z-[99] py-3 px-4 shadow-lg opacity-0 group-hover/hotspot:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none group-hover/hotspot:pointer-events-auto hidden md:block">
                        {{ hotspot.product_name }}
                        <div class="absolute top-1/2 right-full -mt-1 border-4 border-transparent border-r-white"></div>
                        </Link>
                    </div>
                </SwiperSlide>
            </Swiper>

        </div>
    </div>
</template>
<style scoped>
/* Customização das setas do slide principal */
:deep(.swiper-ambiences .swiper-button-next),
:deep(.swiper-ambiences .swiper-button-prev) {
    color: #000;
    transform: scale(0.7);
}
</style>
