<script setup lang="ts">
import { useForm, Link } from '@inertiajs/vue3';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';

const slideData = [
    {
        id: 'modern-haven',
        title: 'A MODERN HAVEN BY THE LAKE',
        subtitle: 'A SWISS VILLA BETWEEN GENEVA AND LAUSANNE',
        imgSrc: '/images/mockup-ebooks/a-modern-haven-by-the-lake.png',
        formPostUrl: '/download-catalogue'
    },
    {
        id: 'powerful-tool',
        title: 'NEW CATALOGUE',
        subtitle: 'COVET HOUSE',
        imgSrc: '/images/mockup-ebooks/catalogue-covet-house.png',
        formPostUrl: '/download-catalogue'
    },
    {
        id: 'inspirations-book',
        title: 'THE ULTIMATE INSPIRATIONS',
        subtitle: 'DESIGN BOOK',
        imgSrc: '/images/mockup-ebooks/the-ultimate-inspirations-design-book.png',
        formPostUrl: '/download-catalogue'
    },
    {
        id: 'inspirations-book',
        title: '100 LUXURY KIDS ROOMS',
        subtitle: 'CIRCU',
        imgSrc: '/images/mockup-ebooks/100-luxury-kids-rooms-circu.png',
        formPostUrl: '/download-catalogue'
    },
    {
        id: 'inspirations-book',
        title: 'THE SIGNATURE CAPSULES INSPIRATIONS DESIGN BOOK',
        subtitle: 'COVET COLLECTION',
        imgSrc: '/images/mockup-ebooks/the-signature-capsules-inspirations-book.png',
        formPostUrl: '/download-catalogue'
    },
    {
        id: 'inspirations-book',
        title: 'NEUTRAL MODERN INSPIRATIONS BOOK',
        subtitle: 'CAFFE LATTE',
        imgSrc: '/images/mockup-ebooks/neutral-modern-inspirations-book-caffe-latte.png',
        formPostUrl: '/download-catalogue'
    },
    {
        id: 'inspirations-book',
        title: 'CATALOGUE',
        subtitle: 'BOCA DO LOBO',
        imgSrc: '/images/mockup-ebooks/catalogue-boca-lobo.png',
        formPostUrl: '/download-catalogue'
    },
    {
        id: 'inspirations-book',
        title: 'COVETED MAGAZINE',
        subtitle: '30TH EDITION',
        imgSrc: '/images/mockup-ebooks/coveted-30.png',
        formPostUrl: '/download-catalogue'
    },
];


const forms = slideData.map(slide => useForm({
    email: '',
    catalogue_id: slide.id
}));

function submit(form: typeof forms[0], url: string) {
    form.post(url, {
        preserveScroll: true,
        onSuccess: () => {
            form.reset('email');
            alert('Download link sent to your email!');
        },
    });
}

const modules = [Navigation];
</script>

<template>
    <div class="w-full bg-black text-gray-300">

        <h3 class="text-white text-[20px] text-center py-5 font-light tracking-wider">LET´S GET <span
                class="font-bold">INSPIRED</span>
        </h3>


        <div class="max-w-full mx-auto catalogue-slider">
            <Swiper :modules="modules" :slides-per-view="1" :space-between="6" :navigation="true" :loop="true"
                :breakpoints="{
                    // 768px (tablets): 2 slides
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 6
                    },
                    // 1024px (desktops): 3 slides
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 6
                    }
                }">
                <SwiperSlide v-for="(slide, index) in slideData" :key="slide.id" class="bg-[#333333]">
                    <div class="flex flex-col text-center my-6">

                        <h3 class="text-sm font-semibold text-white tracking-wider">{{ slide.title }}</h3>
                        <p class="text-sm text-white h-8">{{ slide.subtitle }}</p>

                        <img :src="slide.imgSrc" :alt="slide.title" class="max-w-full h-auto m-auto mb-4"
                            style="max-width: 400px; max-height: 400px;" />

                        <form @submit.prevent="submit(forms[index], slide.formPostUrl)" class="w-9/12 mx-auto">
                            <div class="flex items-center bg-white p-1">
                                <input type="email" v-model="forms[index].email"
                                    class="w-full bg-transparent border-0 text-black placeholder-gray-500 text-sm focus:outline-none px-2"
                                    placeholder="EMAIL*" required>
                                <button type="submit"
                                    class="text-xs text-black font-semibold whitespace-nowrap px-3 py-2 hover:bg-gray-100 transition-colors"
                                    :disabled="forms[index].processing">
                                    DOWNLOAD NOW
                                </button>
                            </div>
                        </form>
                    </div>
                </SwiperSlide>
            </Swiper>
        </div>
    </div>
</template>
