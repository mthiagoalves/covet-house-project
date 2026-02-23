<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

const props = defineProps<{
    project: any;
}>();
</script>

<template>
    <div class="w-full bg-[#505050] text-gray-300">

        <div class="mx-auto max-w-full">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0">

                <div
                    class="lg:col-span-4 flex flex-col items-center justify-center text-center py-8 bg-[url(/images/backgrounds/background-form-home.jpg)] bg-no-repeat bg-cover">
                    <a :href="`/catalogues-and-ebooks/${props.project.slug}`" class="w-full px-4">
                        <p class="text-base tracking-wider leading-5 font-bold text-white mb-4 uppercase">{{
                            props.project.title }} <br>
                            <span class="text-[12px] font-light">{{ props.project.subtitle }}</span>
                        </p>
                        <img :src="`/images/mockup-ebooks/${props.project.slug}.png`"
                            :alt="`${props.project.title} mockup`" class="mb-4 mx-auto">
                        <p class="border-b border-white text-white tracking-wider transition-colors inline-block">
                            DOWNLOAD NOW
                        </p>
                    </a>
                </div>
                <div
                    class="lg:col-span-8 w-full h-[510px] md:h-full md:bg-[url(/images/banners/id-service.jpg)] bg-[url(/images/banners/id-service-m.jpg)] bg-no-repeat bg-cover bg-bottom relative">
                    <div
                        class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-black/70 to-transparent select-none pointer-events-none">
                    </div>
                    <div class="absolute bottom-6 left-0 text-white w-full text-center z-10">
                        <h3 class="text-md uppercase">Looking for Interior Design Solutions <br class="md:hidden block">
                            for Your
                            Project?</h3>
                        <Link href="#"
                            class="text-[12px] font-light tracking-wider text-white transition-colors border-b border-white">
                            DISCOVER MORE
                        </Link>
                    </div>

                </div>

            </div>
        </div>
    </div>
</template>
