<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import { useGeneralModal } from '@/composables/useGeneralModal';

// Ícones Lucide
import {
    Clock,
    FileText,
    Box,
    Layers,
    Maximize,
    Hammer,
    Share2,
    Facebook,
    Twitter,
    Linkedin
} from 'lucide-vue-next';

// Swiper
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Thumbs, Controller } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/thumbs';

// --- PROPS ---
const props = defineProps<{
    product: {
        id: number;
        name: string;
        slug: string;
        description: string;
        is_in_stock: boolean;
        brand: { name: string; slug: string };
        category: { name: string; slug: string; subcategory: { name: string } };
        dimensions_cm: { width: string; depth: string; height: string };
        dimensions_in: { width: string; depth: string; height: string };
        materials: string;
        image_count: number;
        finishes?: Array<{
            name: string;
            slug: string;
            slide_index: number;
            image_count: number;
            is_standard: boolean;
        }>;
    };
}>();

// --- LÓGICA DE IMAGENS DINÂMICAS ---

// 1. Caminho da PASTA (sem o nome do arquivo)
const imageFolder = computed(() =>
    `/images/products/slide-product-page/${props.product.category.slug}/${props.product.slug}`
);

const galleryImages = computed(() => {
    const images: string[] = [];
    const slug = props.product.slug;

    if (props.product.finishes) {
        props.product.finishes.forEach(finish => {
            // Loop para cada imagem deste acabamento (1 até image_count)
            for (let i = 1; i <= finish.image_count; i++) {

                if (finish.is_standard) {
                    // Padrão: pixel-cabinet-1.jpg
                    images.push(`${imageFolder.value}/${slug}-${i}.jpg`);
                } else {
                    // Acabamento: pixel-cabinet-walnut-1.jpg
                    images.push(`${imageFolder.value}/${slug}-${finish.slug}-${i}.jpg`);
                }

            }
        });
    }

    return images;
});

const getFinishImage = (finishSlug: string) => {
    return `${imageFolder.value}/${props.product.slug}-swatch-${finishSlug}.jpg`;
};

// --- SWIPER LOGIC ---
const thumbsSwiper = ref(null);
const mainSwiperInstance = ref(null);
const quantity = ref(1);
const modules = [Navigation, Thumbs, Controller];

const setThumbsSwiper = (swiper: any) => {
    thumbsSwiper.value = swiper;
};

const onMainSwiperInit = (swiper: any) => {
    mainSwiperInstance.value = swiper;
};

// Ao clicar na cor, muda o slide principal
const goToSlide = (index: number) => {
    if (mainSwiperInstance.value) {
        // @ts-ignore
        mainSwiperInstance.value.slideTo(index);
    }
};

// --- MODAIS ---
const { open: openGeneral } = useGeneralModal();

const openGetPrice = () => {
    openGeneral({
        title: props.product.name,
        slug: props.product.slug,
        // Pega a primeira imagem da galeria gerada para o modal
        imgSrc: galleryImages.value[0],
        btnName: 'GET PRICE'
    });
};

const openRequest = (type: string, title: string) => {
    openGeneral({
        title: title,
        slug: `${props.product.slug}-${type}`,
        btnName: 'REQUEST NOW',
        formType: type
    });
};
</script>

<template>

    <Head :title="product.name" />

    <div class="bg-white min-h-screen">

        <div class="mx-auto p-4 md:px-8 md:py-2">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">

                <div class="lg:col-span-8 flex flex-col-reverse lg:flex-row gap-4 h-[600px] lg:h-[800px]">

                    <div class="w-full lg:w-36 h-24 lg:h-full flex-shrink-0">
                        <Swiper @swiper="setThumbsSwiper" :direction="'horizontal'" :space-between="10"
                            :slides-per-view="4" :breakpoints="{
                                1024: {
                                    direction: 'vertical',
                                    slidesPerView: 5,
                                    spaceBetween: 10
                                }
                            }" :modules="modules" class="h-full w-full thumb-swiper">
                            <SwiperSlide v-for="(img, idx) in galleryImages" :key="idx"
                                class="cursor-pointer border border-transparent hover:border-gray-400 transition-colors">
                                <img :src="img" :alt="`${product.name} view ${idx}`"
                                    class="w-full h-full object-cover" />
                            </SwiperSlide>
                        </Swiper>
                    </div>

                    <div class="flex-grow h-full bg-[#f4f4f4] relative min-w-0">
                        <Swiper :modules="modules" :thumbs="{ swiper: thumbsSwiper }" :navigation="true"
                            class="h-full w-full main-product-swiper" @swiper="onMainSwiperInit">
                            <SwiperSlide v-for="(img, idx) in galleryImages" :key="idx">
                                <img :src="img" :alt="product.name" class="w-full h-full object-cover" />
                            </SwiperSlide>
                        </Swiper>

                        <button class="absolute bottom-4 right-4 z-10 text-gray-400 hover:text-black transition-colors">
                            <Maximize class="w-6 h-6" stroke-width="1.5" />
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-4 text-black flex flex-col">

                    <nav class="text-[10px] uppercase text-gray-400 tracking-wider pb-2 border-b border-gray-200">
                        <Link href="/" class="hover:text-black">HOME</Link> /
                        <span class="hover:text-black cursor-pointer">{{ product.category.name }}</span> /
                        <span class="text-black">{{ product.category.subcategory.name }}</span>
                    </nav>

                    <h1 class="text-2xl md:text-3xl font-bold tracking-widest uppercase mb-1 pt-2">
                        {{ product.name }}
                    </h1>
                    <h2
                        class="text-sm text-[#bca479] font-semibold tracking-widest uppercase pb-2 border-b border-gray-200">
                        {{ product.brand.name }}
                    </h2>

                    <div v-if="product.is_in_stock"
                        class="flex items-center gap-2 text-[#4a7c59] text-xs font-bold tracking-wider uppercase mb-2 pt-2">
                        <Clock class="w-4 h-4" />
                        <span>IN STOCK</span>
                    </div>

                    <div class="flex items-stretch gap-4 mb-4">
                        <div class="border border-gray-300 flex items-center px-3 w-20 justify-between">
                            <button @click="quantity > 1 ? quantity-- : null"
                                class="text-gray-500 hover:text-black">-</button>
                            <span class="text-sm font-medium">{{ quantity }}</span>
                            <button @click="quantity++" class="text-gray-500 hover:text-black">+</button>
                        </div>

                        <button @click="openGetPrice"
                            class="bg-[#bca479] text-white flex-grow py-3 px-6 text-xs font-bold tracking-[0.2em] hover:bg-[#a38d65] transition-colors uppercase">
                            GET PRICE
                        </button>
                    </div>

                    <div class="space-y-3 mb-4 border-b border-gray-200 pb-4">
                        <button @click="openRequest('Product Sheet', 'PRODUCT SHEET PDF')"
                            class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider hover:text-[#bca479] transition-colors">
                            <FileText class="w-4 h-4" /> PRODUCT SHEET PDF >
                        </button>
                        <button @click="openRequest('3D Files', 'DOWNLOAD 3D FILES')"
                            class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider hover:text-[#bca479] transition-colors">
                            <Box class="w-4 h-4" /> DOWNLOAD 3D / DWG FILES >
                        </button>
                        <button @click="openRequest('Samples', 'REQUEST SAMPLES')"
                            class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider hover:text-[#bca479] transition-colors">
                            <Layers class="w-4 h-4" /> REQUEST SAMPLES >
                        </button>
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center gap-2 mb-2">
                            <Maximize class="w-4 h-4 text-gray-400 rotate-45" />
                            <span class="text-xs font-bold uppercase tracking-widest">DIMENSIONS:</span>
                        </div>
                        <div class="text-[11px] text-gray-500 tracking-wide pl-6">
                            WIDTH: {{ product.dimensions_cm.width }} <span class="mx-2">|</span>
                            DEPTH: {{ product.dimensions_cm.depth }} <span class="mx-2">|</span>
                            HEIGHT: {{ product.dimensions_cm.height }}
                        </div>
                        <div class="text-[11px] text-gray-500 tracking-wide pl-6">
                            WIDTH: {{ product.dimensions_in.width }} <span class="mx-2">|</span>
                            DEPTH: {{ product.dimensions_in.depth }} <span class="mx-2">|</span>
                            HEIGHT: {{ product.dimensions_in.height }}
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center gap-2 mb-2">
                            <Hammer class="w-4 h-4 text-gray-400" />
                            <span class="text-xs font-bold uppercase tracking-widest">MATERIALS AND FINISHES:</span>
                        </div>
                        <p class="text-[11px] text-gray-500 tracking-wide pl-6 uppercase leading-relaxed">
                            {{ product.materials }}
                        </p>
                    </div>

                    <div v-if="product.finishes && product.finishes.length > 0" class="mb-4">
                        <span
                            class="text-xs font-bold uppercase tracking-widest border-b border-black pb-1 inline-block mb-4">
                            COLOR OPTIONS <span class="text-gray-400 text-[10px] font-normal">- STANDARD</span>
                        </span>

                        <div class="flex gap-4">
                            <div v-for="finish in product.finishes" :key="finish.slug"
                                @click="goToSlide(finish.slide_index)" class="cursor-pointer group relative">
                                <img :src="getFinishImage(finish.slug)" :alt="finish.name"
                                    class="w-12 h-12 rounded-sm border border-gray-200 group-hover:border-black transition-colors" />
                                <span
                                    class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[9px] uppercase whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity bg-white px-1 shadow-sm">
                                    {{ finish.name }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2 mb-2">
                        <button @click="openRequest('Expert', 'TALK WITH A SPECIALIST')"
                            class="w-full bg-[#999] text-black text-[10px] font-bold py-2 uppercase tracking-widest hover:bg-[#999999cd] transition-colors cursor-pointer">
                            TALK WITH A PRODUCT SPECIALIST
                        </button>
                        <button @click="openRequest('Customization', 'REQUEST CUSTOMIZATION')"
                            class="w-full bg-[#999] text-black text-[10px] font-bold py-2 uppercase tracking-widest hover:bg-[#999999cd] transition-colors cursor-pointer">
                            REQUEST CUSTOMIZATION
                        </button>
                    </div>

                    <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                        <span class="text-xs font-bold uppercase tracking-widest">SHARE:</span>
                        <div class="flex gap-4 text-gray-500">
                            <a href="#" class="hover:text-black">
                                <Share2 class="w-4 h-4" />
                            </a>
                            <a href='https://www.facebook.com/sharer/sharer.php?u=https://www.covethouse.eu/products/{{ product. }}'
                                class="hover:text-black">
                                <Facebook class="w-4 h-4" />
                            </a>
                            <a href="#" class="hover:text-black">
                                <Twitter class="w-4 h-4" />
                            </a>
                            <a href="#" class="hover:text-black">
                                <Linkedin class="w-4 h-4" />
                            </a>
                        </div>
                    </div>

                    <p class="text-[9px] text-gray-400 text-center mt-4 uppercase tracking-widest">
                        HANDCRAFTED AND MADE IN PORTUGAL
                    </p>

                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Destaque na thumbnail ativa */
.thumb-swiper .swiper-slide-thumb-active img {
    border: 1px solid #000;
}

/* Customização das setas do slide principal */
:deep(.main-product-swiper .swiper-button-next),
:deep(.main-product-swiper .swiper-button-prev) {
    color: #000;
    transform: scale(0.7);
}
</style>
