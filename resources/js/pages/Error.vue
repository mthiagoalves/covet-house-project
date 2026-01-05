<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps<{
    status: number;
}>();

const title = computed(() => {
    return {
        503: 'SERVICE UNAVAILABLE',
        500: 'SERVER ERROR',
        404: 'PAGE NOT FOUND',
        403: 'FORBIDDEN',
    }[props.status];
});

const description = computed(() => {
    return {
        503: 'Sorry, we are doing some maintenance. Please check back soon.',
        500: 'Whoops, something went wrong on our servers.',
        404: 'Oops, the page you are looking for could not be found.',
        403: 'Sorry, you are forbidden from accessing this page.',
    }[props.status];
});
</script>

<template>

    <Head :title="title" />

    <div class="min-h-[600px] w-full flex flex-col items-center justify-center bg-white px-4 text-center">

        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-20 bg-gray-200"></div>

        <h1 class="text-[120px] md:text-[200px] font-light leading-none text-[#bca479] select-none">
            {{ status }}
        </h1>

        <h2 class="text-xl md:text-2xl font-bold tracking-[0.2em] uppercase mb-4 text-black">
            {{ description }}
        </h2>

        <Link href="/"
            class="bg-black text-white text-[10px] font-bold py-4 px-10 tracking-[0.2em] hover:bg-[#bca479] transition-colors uppercase">
            RETURN TO HOMEPAGE
        </Link>

        <div class="absolute bottom-8 text-[9px] text-gray-400 tracking-widest uppercase">
            &copy; COVET HOUSE
        </div>

    </div>
</template>
