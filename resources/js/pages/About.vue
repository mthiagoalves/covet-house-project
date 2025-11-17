<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import VideoHero from '@/components/page-components/VideoHero.vue';
import CategorySlider from '@/components/page-components/CategorySlider.vue';
import FirstVerticalScrollSlider from '@/components/page-components/FirstVerticalScrollSlider.vue';
import { useGeneralModal } from '@/composables/useGeneralModal';

const videoHeroData = {
    videoUrlBase: '/videos/covet-house-about-hero',
    title: '',
    subtitle: ''
};

const whyWorkWithUsData = {

    mainTitle: 'WHY WORK WITH US',
    slides: [
        {
            imgSrc: '/images/about-scroll-slider/tailored-service.jpg',
            items: [
                {
                    title: 'TAILORED SERVICE',
                    description: 'Our team of multilingual Account Executive works as an ambassador of the client inside Covet House and its brands. This avoids the client having to contact one person from each brand if they want to select furniture from different brands.'
                },

            ]
        },
        {
            imgSrc: '/images/about-scroll-slider/stocklist.jpg',
            items: [

                {
                    title: 'STOCKLIST',
                    description: 'Hundreds of products Ready to Ship for those clients who are pressed for time MORE THAN 950 PRODUCTS IN STOCK'
                }
            ]
        },
        {
            imgSrc: '/images/about-scroll-slider/covet-studio.jpg',
            items: [
                {
                    title: 'COVET STUDIO',
                    description: 'Covet Studio is an interior design office created to partner up with Covet House’s clients, professionals and private, and offer all the tools and solutions to satisfy their project needs. We create moodboards, 3D projects, and customize our products by changing dimensions, finishes and even materials.'
                },
            ]
        },
        {
            imgSrc: '/images/about-scroll-slider/bespoke.jpg',
            items: [
                {
                    title: 'BESPOKE PRODUCTIONS',
                    description: 'We understand that each PROJECT is UNIQUE and needs to be treated individually. If you feel the need to DESIGN A PRODUCT to fit a specific spot on your project, send us your PLANS, SKETCH OR IDEA and we will PROTOTYPE AND PRODUCE it for you in our FACTORIES.'
                },
            ]
        },
        {
            imgSrc: '/images/about-scroll-slider/our-own-production.jpg',
            items: [
                {
                    title: 'OUR OWN PRODUCTION',
                    description: 'If you feel the need to Design a product to fit that specific spot on your project, send us your plans, SKETCH YOUR IDEA and we will PROTOTYPE and PRODUCE it for you in our factories.'
                },
            ]
        }
    ]
};

const ourToolsData = {
    mainTitle: 'OUR TOOLS',
    slides: [
        {
            imgSrc: '/images/about-scroll-slider/showrooms.jpg',
            items: [
                {
                    title: 'SHOWROOMS',
                    description: 'We have five showrooms worldwide, each one representing Covet House and all its tools, but designed to please the taste of our local clients.'
                },
            ]
        },
        {
            imgSrc: '/images/about-scroll-slider/website.jpg',
            items: [
                {
                    title: 'WEBSITE',
                    description: 'Our website is one of the most complete interior design platforms on the web. It features all the tools Covet House has to offer, as well as the technical Information for each product in our collection of 2000+'
                }
            ]
        },
        {
            imgSrc: '/images/about-scroll-slider/catalogue-covet-house.jpg',
            items: [
                {
                    title: 'CATALOGUES',
                    description: 'For an extra inspiration, we offer a collection of catalogues, books and ebooks.'
                }
            ]
        },
    ]
};

// 2. Obtenha a função 'open'
const { open: openModal } = useGeneralModal();

// 3. Função para o botão "Newsletter"
function openNewsletterModal() {
    openModal({
        title: 'NEWSLETTER',
        slug: 'newsletter-subscription',
        btnName: 'SUBSCRIBE'
    });
}

function openContactModal() {
    openModal({
        title: 'CONTACT US',
        slug: 'contact-form',
        btnName: 'SEND MESSAGE'
    });
}
</script>

<template>

    <Head title="About Us" />

    <VideoHero :video-url-base="videoHeroData.videoUrlBase" :title="videoHeroData.title"
        :subtitle="videoHeroData.subtitle" />

    <div class="max-w-5xl mx-auto py-12 px-6 text-justify [text-align-last:center]" id="main-content">
        <h2 class="text-4xl font-bold mb-4 text-center">WORLD'S MOST COVETED DESIGNS</h2>
        <p class="text-sm uppercase font-light">
            COVET HOUSE has consolidated its position as the most powerful tool to inspire and to boost creativity over
            the last few years. We take pride in our portfolio of clients with whom we work in close partnership to
            assist in creating the most outstanding interior design projects. We offer 12 brands, more than <span
                class="font-bold">2000
                products</span> in a <span class="font-bold">dozen categories</span>, over <span class="font-bold">1300
                inspirations</span>, and <span class="font-bold">a wide range of styles,
                materials and finishes</span> to suit any type of project.
        </p>
        <p class="text-sm uppercase font-light mt-4">
            COVET HOUSE has consolidated its position as the most powerful tool to inspire and to boost creativity over
            With Covet House, you get one accounter to assist you throughout the full process of prospecting, selecting,
            ordering and delivering our Designs to your private or public projects. We work side by side to solve
            project needs, from quick solutions like ready to ship items if you are pressed for time, to bespoke
            creations that render you project even more suited for its purpose or the concept created. Covet House
            offers everything you need, in one place.
        </p>
    </div>

    <div class="max-w-full">
        <img src="/images/logos/full-brands.png" alt="All brands of Covet Group">
    </div>

    <CategorySlider class="mt-6" />

    <FirstVerticalScrollSlider class="mt-[6px]" :slides="whyWorkWithUsData.slides"
        :main-title="whyWorkWithUsData.mainTitle" />

    <FirstVerticalScrollSlider class="mt-[6px]" :slides="ourToolsData.slides" :main-title="ourToolsData.mainTitle" />

    <div class="w-full bg-white text-black py-20 px-6">
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 relative">

            <div class="absolute left-1/2 top-0 bottom-0 w-px bg-gray-200 hidden md:block"></div>

            <div class="flex flex-col items-center text-center relative z-10">
                <h3 class="text-lg font-semibold uppercase tracking-widest mb-3">
                    NEWSLETTER
                </h3>
                <p class="text-sm text-gray-600 mb-6 max-w-xs">
                    Subscribe to our newsletter and be the first to discover all news.
                </p>
                <button @click="openNewsletterModal" class="border border-black text-black py-2.5 px-10 text-sm font-semibold tracking-wider
                           hover:bg-black hover:text-white transition-colors">
                    SUBSCRIBE NEWS
                </button>
            </div>

            <div class="flex flex-col items-center text-center relative z-10">
                <h3 class="text-lg font-semibold uppercase tracking-widest mb-3">
                    CONTACT
                </h3>
                <p class="text-sm text-gray-600 mb-6 max-w-xs">
                    Let's KEEP the conversation going.
                </p>
                <button @click="openContactModal" class="border border-black text-black py-2.5 px-10 text-sm font-semibold tracking-wider
                           hover:bg-black hover:text-white transition-colors">
                    CONTACT US
                </button>
            </div>

        </div>
    </div>

</template>
