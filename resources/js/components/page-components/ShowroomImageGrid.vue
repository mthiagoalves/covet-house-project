<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

interface Hotspot {
    top: string;
    left: string;
    product_name: string;
    product_slug: string;
}

interface GridItem {
    url: string;
    hotspots: Hotspot[];
    title?: string | null;
}

const props = defineProps<{
    images: GridItem[]; // Atualizado para receber objetos
}>();

// Função que define a classe de cada imagem baseada na sua posição
const getImageClass = (index: number) => {
    const i = index % 8;
    switch (i) {
        case 0: return 'md:col-span-2';
        case 1: return 'md:col-span-1';
        case 2: return 'md:col-span-1';
        case 3: return 'md:col-span-1';
        case 4: return 'md:col-span-1';
        case 5: return 'md:col-span-2';
        case 6: return 'md:col-span-2';
        case 7: return 'md:col-span-2';
        default: return 'md:col-span-1';
    }
};
</script>

<template>
    <div class="w-full bg-black pt-16 md:py-[6px]">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-[6px] auto-rows-[300px] md:auto-rows-[600px]">

            <div v-for="(item, index) in images" :key="index" class="relative overflow-hidden group w-full h-full"
                :class="getImageClass(index)">
                <img :src="item.url" :alt="`Showroom detail ${index + 1}`" class="w-full h-full object-cover"
                    loading="lazy" />

                <div
                    class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors duration-300 pointer-events-none">
                </div>
                <div v-if="item.title" class="absolute top-6 left-6 z-20 pointer-events-none">
                    <h4 class="text-white font-bold uppercase tracking-widest text-sm md:text-base drop-shadow-md">
                        {{ item.title }}
                    </h4>
                </div>
                <div v-for="(hotspot, idx) in item.hotspots" :key="idx"
                    class="absolute z-20 w-8 h-8 flex items-center justify-center cursor-pointer group/hotspot"
                    :style="{ top: hotspot.top, left: hotspot.left }">
                    <div class="absolute w-full h-full bg-white rounded-full opacity-50 animate-ping"></div>
                    <Link :href="`/products/${hotspot.product_slug}`">
                        <div
                            class="relative w-8 h-8 bg-transparent border border-white rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                            <div class="w-1 h-1 bg-white rounded-full"></div>
                        </div>
                    </Link>

                    <Link :href="`/products/${hotspot.product_slug}`"
                        class="absolute bottom-full ml-3 bg-white text-gray-500 text-[10px] font-normal uppercase tracking-widest z-[99] py-3 px-4 shadow-lg opacity-0 group-hover/hotspot:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none group-hover/hotspot:pointer-events-auto hidden md:block">
                        {{ hotspot.product_name }}
                    </Link>
                </div>

            </div>

        </div>

    </div>
</template>
