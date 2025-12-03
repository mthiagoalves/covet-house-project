<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Autoplay, EffectFade, Navigation, Pagination } from 'swiper/modules';
import { Instagram, Facebook, Linkedin } from 'lucide-vue-next';
import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/pagination';
import { computed } from 'vue';

const modules = [Autoplay, EffectFade, Pagination, Navigation];

interface Brand {
    name: string;
    slug: string;
    website: string;
    website_text: string;
    subtitle: string;
    description: string;
    image_count: number;
    socials: { instagram?: string; facebook?: string; linkedin?: string; };
}

const props = defineProps<{
    brand: Brand;
    index: number;
}>();

const galleryImages = computed(() => {
    const images = [];
    const count = props.brand.image_count;

    if (count === 0) {
        return [`https://placehold.co/900x1200/222/fff?text=${props.brand.name}+Ambience`];
    }

    for (let i = 1; i <= count; i++) {
        images.push(`/images/brands/slider-ambiences/${props.brand.slug}/ambience-${i}.jpg`);
    }

    return images;
});
</script>

<template>
    <section
        class="w-full flex flex-col md:flex-row snap-start bg-white relative overflow-hidden md:h-[calc(100svh-108px)]">

        <div
            class="w-full md:w-1/2 h-full flex flex-col justify-center items-start text-start p-8 md:p-16 bg-white z-10 relative">

            <div class="mb-1 h-16 flex items-center justify-center">
                <h2 class="text-3xl font-bold tracking-widest">{{ brand.name }}</h2>
            </div>

            <div class="w-2/4 h-px bg-[#bca479] mb-6"></div>

            <h4 class="text-md font-bold tracking-widest uppercase text-gray-400 mb-8">
                {{ brand.subtitle }}
            </h4>

            <p class="text-xs md:text-sm text-gray-600 leading-relaxed mb-10" v-html="brand.description">

            </p>

            <div class="flex gap-4 mb-12">
                <Link :href="`brands/${brand.slug}`"
                    class="bg-black text-white text-[10px] font-bold py-2 px-8 tracking-widest hover:bg-[#bca479] transition-colors uppercase">
                SEE MORE
                </Link>
                <a :href="`${brand.website}`" target="_blank"
                    class="border border-black text-black text-[10px] font-bold py-2 px-8 tracking-widest hover:bg-black hover:text-white transition-colors uppercase">
                    {{brand.website_text}}
                </a>
            </div>

            <div class="flex gap-6 text-gray-400">
                <a v-if="brand.socials.instagram" :href="brand.socials.instagram"
                    class="hover:text-black transition-colors">
                    <Instagram :size="18" />
                </a>
                <a v-if="brand.socials.facebook" :href="brand.socials.facebook"
                    class="hover:text-black transition-colors">
                    <Facebook :size="18" />
                </a>
                <a v-if="brand.socials.linkedin" :href="brand.socials.linkedin"
                    class="hover:text-black transition-colors">
                    <Linkedin :size="18" />
                </a>
            </div>
        </div>

        <div class="w-full md:w-1/2 h-full bg-gray-100">
            <Swiper :modules="modules" :slides-per-view="1" :loop="galleryImages.length > 1" :navigation="true"
                :effect="'fade'" :speed="1500" :autoplay="{ delay: 2500, disableOnInteraction: false }"
                :pagination="{ clickable: true }" class="h-[500px] md:h-full w-full brand-swiper">
                <SwiperSlide v-for="(img, idx) in galleryImages" :key="idx">
                    <img :src="img" :alt="brand.name" class="absolute h-[500px] md:h-full inset-0 md:relative w-full object-cover object-bottom" />
                    <div class="absolute inset-0 bg-black/10"></div>
                </SwiperSlide>
            </Swiper>
        </div>

    </section>
</template>

<style>
/* Estilo da paginação do Swiper neste componente */
.brand-swiper .swiper-pagination-bullet {
    background: white;
    opacity: 0.5;
    width: 10px;
    height: 10px;
}

.brand-swiper .swiper-pagination-bullet-active {
    opacity: 1;
    background: #bca479;
    /* Cor Dourada */
}
</style>
