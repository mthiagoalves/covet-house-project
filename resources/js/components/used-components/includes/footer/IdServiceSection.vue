<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="w-full bg-black">
        <div class="mx-auto max-w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-4 md:pr-[6px]">
                    <Link href="#" class="relative block w-full h-full">
                    <video src="/videos/project-video.mp4" class="w-full h-full object-cover" autoplay loop muted
                        playsinline>
                        Seu navegador não suporta a tag de vídeo.
                    </video>
                    <div class="absolute -bottom-0.5 left-0 w-full h-1/2 bg-gradient-to-t from-black/70 to-transparent">
                    </div>
                    <div class="absolute bottom-6 left-0 text-white w-full text-center z-10">
                        <h3 class="text-sm font-bold">PROJECTS</h3>
                        <Link href="#"
                            class="text-[12px] font-light tracking-wider text-white transition-colors border-b border-white">
                        DISCOVER MORE
                        </Link>
                    </div>
                    </Link>
                </div>
                <div class="lg:col-span-8 pt-[6px] md:pt-0">
                    <div class="relative w-full h-full">
                        <img src="/images/banners/id-service.jpg" alt="The Most Powerful Tool to Inspire"
                            class="w-full h-full object-cover hidden md:block">
                        <img src="/images/banners/id-service-m.jpg" alt="The Most Powerful Tool to Inspire"
                            class="w-full h-full object-cover block md:hidden">
                        <div
                            class="absolute -bottom-0.5 left-0 w-full h-1/2 bg-gradient-to-t from-black/70 to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-0 text-white w-full text-center z-10">
                            <h3 class="text-sm font-bold uppercase">Looking for Interior Design Solutions <br
                                    class="md:hidden block"> for Your
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
    </div>
</template>
