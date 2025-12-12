<script setup lang="ts">
import ShowroomHero from '@/components/page-components/ShowroomHero.vue';
import ShowroomVisitBlock from '@/components/page-components/ShowroomVisitBlock.vue';
import { useGeneralModal } from '@/composables/useGeneralModal';
import { Head } from '@inertiajs/vue3';
import 'swiper/css';
import 'swiper/css/navigation';
import { Autoplay, Navigation } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';

const props = defineProps<{
    showroom: any;
    gallery: string[];
    heroSlides: any[]; // <-- Recebe do controller
}>();

const { open: openGeneral } = useGeneralModal();

const openBookVisit = () => {
    openGeneral({
        title: `VISIT ${props.showroom.name}`,
        slug: `visit-${props.showroom.slug}`,
        btnName: 'REQUEST VISIT',
        formType: 'Visit'
    });
};

const visitDescription = "Interior designers from all over the world are invited to come to Porto to celebrate design and the excellence of craftsmanship with Covet House. '48H with Covet House in Porto' consists of a visit to Covet House's brand new 4000 sqm showroom featuring a wide range of product categories and styles in a unique exhibition concept. The showroom features our famous best-selling designs and will be updated with new products every season. Moreover, visitors will tour the several production units and meet our skilled craftsmen in person while also being acquainted with our new and improved production capacity.";

const modules = [Navigation, Autoplay];
</script>

<template>

    <Head :title="showroom.name" />

    <ShowroomHero :slides="heroSlides" />

    <ShowroomVisitBlock :showroom-name="showroom.name" :description="visitDescription"
        :image-url="showroom.cover_image" />

    <div class="pt-[72px] md:pt-[108px] bg-white min-h-screen">

        <div class="relative w-full h-[60vh] md:h-[70vh]">
            <img :src="showroom.cover_image" :alt="showroom.name" class="w-full h-full object-cover" />
            <div
                class="absolute inset-0 bg-black/30 flex flex-col items-center justify-center text-white p-4 text-center">
                <h1 class="text-4xl md:text-6xl font-light tracking-[0.2em] uppercase mb-4">
                    {{ showroom.name }}
                </h1>
                <p class="text-sm font-bold tracking-widest uppercase">
                    {{ showroom.location }}
                </p>
            </div>
        </div>

        <div class="max-w-[1400px] mx-auto px-4 py-16 md:py-24 grid grid-cols-1 lg:grid-cols-12 gap-12">

            <div class="lg:col-span-4 flex flex-col gap-8">
                <div>
                    <h3 class="text-xl font-light tracking-widest uppercase mb-6 border-b border-black pb-4">
                        ABOUT THE SPACE
                    </h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        {{ showroom.description }}
                    </p>
                </div>

                <div class="bg-[#f9f9f9] p-8">
                    <h4 class="font-bold text-xs tracking-widest uppercase mb-4">CONTACTS & LOCATION</h4>
                    <p class="text-xs text-gray-600 mb-2">{{ showroom.address }}</p>
                    <p class="text-xs text-gray-600 mb-2">Email: {{ showroom.email }}</p>
                    <p class="text-xs text-gray-600 mb-6">Phone: {{ showroom.phone }}</p>

                    <button @click="openBookVisit"
                        class="w-full bg-black text-white text-[10px] font-bold py-3 uppercase tracking-widest hover:bg-[#bca479] transition-colors">
                        BOOK A VISIT
                    </button>
                </div>
            </div>

            <div class="lg:col-span-8">
                <Swiper :modules="modules" :slides-per-view="1" :space-between="20" :navigation="true" :loop="true"
                    :autoplay="{ delay: 4000 }" class="w-full h-[400px] md:h-[600px]">
                    <SwiperSlide v-for="(img, idx) in gallery" :key="idx">
                        <img :src="img" class="w-full h-full object-cover" />
                    </SwiperSlide>
                </Swiper>
            </div>

        </div>

    </div>
</template>

<style scoped>
/* Customização simples das setas do Swiper */
:deep(.swiper-button-next),
:deep(.swiper-button-prev) {
    color: white;
    text-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
}
</style>
