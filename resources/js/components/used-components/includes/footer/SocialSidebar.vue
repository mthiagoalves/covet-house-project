<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

const socialLinks = [
    { name: 'Instagram', href: 'https://www.instagram.com/covethouse_/', src: 'instagram.png' },
    { name: 'TikTok', href: 'https://www.tiktok.com/@covethouse_', src: 'tiktok.png' },
    { name: 'LinkedIn', href: 'https://www.linkedin.com/company/covethousedesign', src: 'linkedin.png' },
    { name: 'Pinterest', href: 'https://www.pinterest.com/covet__house/', src: 'pinterest.png' },
    { name: 'Facebook', href: 'https://www.facebook.com/covetlounge', src: 'facebook.png' },
    { name: 'Whatsapp', href: '#', src: 'whatsapp.png' },
];
</script>

<template>
    <nav class="fixed top-5/12 -translate-y-1/2 left-0 z-50 bg-black opacity-70 text-gray-400 p-2
               shadow-lg hidden md:flex flex-col gap-6">
        <Link v-for="social in socialLinks" :key="social.name" :href="social.href" :aria-label="social.name"
            class="hover:text-white transition-colors duration-300" target="_blank" rel="noopener noreferrer">
        <img :src="`/images/icons/${social.src}`" :alt="social.name"
            class="h-4 w-4 invert-75 hover:invert transition-all duration-300"> </Link>
    </nav>
</template>
