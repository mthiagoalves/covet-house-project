<script setup lang="ts">
import { ref, computed } from 'vue';
// Imports do Swiper
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, FreeMode } from 'swiper/modules';
import type { Swiper as SwiperType } from 'swiper';

// Importar CSS do Swiper (Ajuste conforme sua instalação, às vezes é 'swiper/swiper-bundle.css')
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/free-mode';

const props = defineProps<{
    slug: string;
}>();

// Gera as 5 imagens automaticamente
const galleryImages = computed(() => {
    return Array.from({ length: 5 }, (_, i) => {
        const index = i + 1;
        return {
            id: index,
            src: `/images/catalogues-and-ebooks/${props.slug}/grid/${props.slug}-grid-${index}.jpg`,
            srcMobile: `/images/catalogues-and-ebooks/${props.slug}/grid/${props.slug}-grid-${index}-m.jpg`,
            alt: `${props.slug} gallery page ${index}`
        };
    });
});

// Instância do Swiper para controlar os botões externos
const swiperInstance = ref<SwiperType | null>(null);

const onSwiper = (swiper: SwiperType) => {
    swiperInstance.value = swiper;
};

// Módulos que vamos usar
const modules = [Navigation, FreeMode];
</script>

<template>
    <div id="gallery-section" class="bg-[#eeeeee] py-1.5 relative text-white group/gallery">
        <div class="cursor-grab active:cursor-grabbing">

            <Swiper :modules="modules" :slides-per-view="'auto'" :space-between="6" :grab-cursor="true"
                :free-mode="true" :navigation="true" :loop="true" @swiper="onSwiper"
                class="h-[40vh] md:h-[60vh] w-full">
                <SwiperSlide v-for="img in galleryImages" :key="img.id" class="!w-auto h-full">

                    <picture class="h-full w-auto block shadow-2xl">
                        <source media="(max-width: 768px)" :srcset="img.srcMobile" />

                        <img :src="img.src" :alt="img.alt" class="h-full w-auto object-contain bg-[#1a1a1a]"
                            loading="lazy" />
                    </picture>

                </SwiperSlide>
            </Swiper>
        </div>
    </div>
</template>

<style scoped>
/* Ajuste fino caso o CSS global do Swiper interfira */
:deep(.swiper-wrapper) {
    align-items: center;
}
</style>
