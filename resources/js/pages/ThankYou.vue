<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ChevronLeft } from 'lucide-vue-next';
</script>

<template>

    <Head title="Thank You" />

    <div class="bg-white flex flex-col">

        <div class="flex-grow flex flex-col items-center justify-center px-4 py-20 text-center">

            <div class="max-w-3xl mx-auto flex flex-col items-center">

                <h1 class="text-2xl md:text-3xl font-bold uppercase tracking-[0.1em] mb-1 text-black">
                    THANK YOU
                </h1>

                <h2 class="text-xl md:text-2xl font-medium uppercase tracking-[0.1em] mb-10 text-black">
                    FOR YOUR REQUEST
                </h2>

                <p class="text-[10px] md:text-[13px] text-gray-500 uppercase tracking-widest mb-8 leading-relaxed">
                    YOU HAVE RECEIVED AN EMAIL WITH THE INFORMATION AT THE EMAIL ADDRESS YOU PROVIDED.
                </p>

                <p class="text-[10px] md:text-[13px] text-gray-500 font-bold uppercase tracking-widest leading-relaxed">
                    OUR TEAM WILL GET BACK TO YOU AS SOON AS POSSIBLE.
                </p>
                <p
                    class="text-[10px] md:text-[13px] text-gray-500 font-bold uppercase tracking-widest mb-10 leading-relaxed">
                    WE LOOK FORWARD TO GET IN TOUCH WITH YOU!
                </p>

                <div class="flex items-center gap-8 mb-8">
                    <a href="#"
                        class="w-8 h-8 rounded-full border border-black flex items-center justify-center transition-colors group">
                        <img src="/images/icons/instagram.png" alt="Instagram"
                            class="h-4 w-4 transition-all duration-300">
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full border border-black flex items-center justify-center transition-colors">
                        <img src="/images/icons/tiktok.png" alt="TikTok" class="h-4 w-4 transition-all duration-300">
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full border border-black flex items-center justify-center transition-colors">
                        <img src="/images/icons/pinterest.png" alt="Pinterest"
                            class="h-4 w-4 transition-all duration-300">
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full border border-black flex items-center justify-center transition-colors">
                        <img src="/images/icons/linkedin.png" alt="LinkedIn"
                            class="h-4 w-4 transition-all duration-300">
                    </a>
                </div>

                <Link href="/"
                    class="text-[10px] md:text-[14px] uppercase tracking-widest underline underline-offset-4 mb-10 hover:text-gray-600 transition-colors">
                    ‹ Go Back
                </Link>

                <div
                    class="flex flex-col md:flex-row items-center gap-4 md:gap-8 text-[10px] md:text-xs uppercase tracking-widest font-medium">
                    <div class="flex items-center gap-2">
                        <a href="https://wa.me/351911780428?text=Hello.%20I%20was%20browsing%20Covet%20House%27s%20Website%20and%20would%20love%20to%20know%20more%20about%20the%20brand%20and%20receive%20your%20latest%20catalogue.%20Thank%20You%21
                        ">
                            <img src="/images/icons/whatsapp.png" alt="Whatsapp"
                                class="h-4 w-4 transition-all duration-300">
                        </a>
                        <span>+351 911 780 428</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <a href="mailto:info@covethouse.eu" class="hover:underline">INFO@COVETHOUSE.EU</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-black text-white py-8 text-center w-full mt-auto">
            <h3 class="text-sm md:text-2xl uppercase tracking-widest font-medium mb-3">
                Do you know our <b>curated products?</b>
            </h3>
            <a href="/products"
                class="text-[10px] md:text-[13px] uppercase tracking-widest underline underline-offset-4 hover:text-gray-300 transition-colors">
                Explore
            </a>
        </div>

    </div>
</template>
