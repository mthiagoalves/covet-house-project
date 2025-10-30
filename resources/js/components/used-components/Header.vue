<script setup lang="ts">

import { Link, usePage } from '@inertiajs/vue3';
import { onBeforeUnmount, onMounted, ref } from 'vue';

const utilityLinks = [
    { label: 'ABOUT', href: '/about' },
    { label: 'CONTACT US', href: '/contact' },
    { label: 'CATALOGUE', href: '/catalogues', icon: 'download' },
    { label: '$ STOCKLIST', href: '/stocklist' },
]

const mainLinks = [
    {
        label: 'BRANDS',
        href: '/brands',
        caret: true,
        children: [
            { label: 'ALL BRANDS', href: '/brands' },
            { label: 'BOCA DO LOBO', href: '/brands/boca-do-lobo' },
            { label: 'LUXXU', href: '/brands/luxxu' },
            { label: 'CIRCU', href: '/brands/circu' },
            { label: 'MAISON VALENTINA', href: '/brands/maison-valentina' },
            { label: 'COVET COLLECTION', href: '/brands/covet-collection' },
            { label: 'KOKET', href: '/brands/koket' },
            { label: 'CAFFE LATTE', href: '/brands/caffe-latte' },
            { label: 'BRABBU', href: '/brands/brabbu' },
            { label: 'DELIGHTFULL', href: '/brands/delightfull' },
            { label: 'ESSENTIAL HOME', href: '/brands/essential-home' },
            { label: 'RUG SOCIETY', href: '/brands/rug-society' },
            { label: 'PULLCAST', href: '/brands/pullcast' },
        ]
    },
    {
        label: 'SHOWROOMS',
        href: '/showrooms',
        caret: true,
        children: [ // Adicionei dados de exemplo
            { label: 'COVET DOURO', href: '/showrooms' },
            { label: 'COVET TOWN', href: '/showrooms/london' },
        ]
    },
    { label: 'CATALOGUES & BOOKS', href: '/catalogues-books' },
    { label: '❤ ROOM BY ROOM', href: '/room-by-room' },
    { label: 'PROJECTS', href: '/projects' },
    { label: 'BLOG', href: '/blog' },
    { label: 'PRESS ROOM', href: '/press' },
    { label: 'SPECIAL PRICES', href: '/special-prices', highlight: true },
]


const productCats = [
    'ALL PRODUCTS', 'NEW PRODUCTS', 'CASEGOODS', 'SEATING', 'TABLES', 'LIGHTING', 'KIDS', 'BATHROOMS', 'RUGS'
]
const roomCats = [
    'ENTRYWAYS', 'LIVING ROOMS', 'DINING ROOMS', 'KIDS ROOMS', 'BATHROOMS', 'BEDROOMS', 'OFFICES'
]

const mobileOpen = ref(false)
const isSticky = ref(false)
const openDropdown = ref<string | null>(null)


function onScroll() { isSticky.value = window.scrollY > 24 }


onMounted(() => { window.addEventListener('scroll', onScroll) })
onBeforeUnmount(() => { window.removeEventListener('scroll', onScroll) })

const currentUrl = usePage().url
</script>
<template>
    <header :class="['w-full z-40', isSticky ? 'sticky top-0 shadow-[0_1px_0_rgba(255,255,255,0.06)]' : '']">
        <div class="hidden md:block w-full bg-[#333333] text-white text-[12px] tracking-[0.666px]">
            <div class="mx-auto flex justify-between px-4">
                <nav class="flex items-center gap-4 h-8">
                    <Link v-for="l in utilityLinks" :key="l.label" :href="l.href" class="flex items-center gap-1">
                    <span v-if="l.icon === 'download'" aria-hidden="true">⬇</span>{{ l.label }}
                    </Link>
                </nav>

                <div class="flex items-center gap-3">
                    <nav class="hidden md:flex items-center gap-4 h-8 text-[12px] text-[#ffffffcc]">
                        <div v-for="l in mainLinks" :key="l.label" class="relative h-full flex items-center"
                            @mouseleave="openDropdown = null">
                            <Link :href="l.href"
                                :class="['flex items-center gap-1 h-full hover:text-[#ffffff]', l.highlight ? 'text-red-500 hover:text-red-600' : '']"
                                @mouseenter="l.children ? openDropdown = l.label : openDropdown = null">
                            <span>{{ l.label }}</span>
                            <span v-if="l.caret" aria-hidden="true"> ▾</span>
                            </Link>

                            <transition enter-active-class="transition ease-out duration-200"
                                enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0"
                                leave-active-class="transition ease-in duration-150"
                                leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                                <div v-if="openDropdown === l.label && l.children"
                                    class="absolute top-full left-0 z-50 bg-white text-gray-800 shadow-lg mt-0"
                                    style="min-width: 260px;">
                                    <nav class="py-2">
                                        <Link v-for="child in l.children" :key="child.label" :href="child.href"
                                            class="block w-full px-6 py-3 text-sm text-left hover:bg-gray-100 hover:text-[#bca479] text-[12px]">
                                        {{ child.label }}
                                        </Link>
                                    </nav>
                                </div>
                            </transition>
                        </div>
                    </nav>
                    <button class="hover:text-[#ffffff]" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5">
                            <circle cx="11" cy="11" r="7" />
                            <path d="M20 20l-3.5-3.5" />
                        </svg> </button>
                </div>
            </div>
        </div>

        <div class="w-full bg-black text-gray-200">
            <div class="mx-auto max-w-full px-4">
                <div class="h-18 flex items-center justify-between">
                    <div class="flex items-center gap-3 justify-between">
                        <button class="md:hidden" @click="mobileOpen = true" aria-label="Open menu">
                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class="w-6 h-6" fill='none'
                                stroke='currentColor' stroke-width='1.5'>
                                <path d='M4 7h16M4 12h16M4 17h16' />
                            </svg>
                        </button>
                        <Link href="/" class="block"> <img src="/images/header/logo.png" alt="Logo Covet House"
                            class="w-[167px] h-full">
                        </Link>
                        <button class="hover:text-[#bca479] md:hidden" aria-label="Search"> <svg
                                xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5">
                                <circle cx="11" cy="11" r="7" />
                                <path d="M20 20l-3.5-3.5" />
                            </svg>
                        </button>
                    </div>

                    <div class="md:flex-col">

                        <div class="max-w-full">
                            <ul class="hidden md:flex items-center gap-4 h-8 text-[11px] text-white">
                                <li v-for="(c, idx) in productCats" :key="c">
                                    <Link href="#" class="hover:text-[#bca479] inline-block">{{ c }}</Link>
                                </li>
                            </ul>
                        </div>
                        <div class="mx-auto max-w-full">
                            <ul
                                class="hidden md:flex items-center md:justify-end gap-4 h-9 text-[11px] text-white border-t-white border-t">
                                <li v-for="c in roomCats" :key="c">
                                    <Link href="#" class="hover:text-[#bca479] pb-2">{{ c }}</Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="mobileOpen" class="fixed inset-0 z-50">
            <div class="absolute inset-0 bg-black/50" @click="mobileOpen = false"></div>
            <aside class="absolute left-0 top-0 h-full w-80 max-w-[85vw] bg-[#0e0e0f] text-gray-200 shadow-xl">
                <div class="h-16 flex items-center justify-between px-4 border-b border-white/10">
                    <Link href="/" class="block">
                    <img src="/images/header/logo.png" alt="Logo Covet House" class="w-[167px] h-full">
                    </Link>
                    <button @click="mobileOpen = false" aria-label="Close menu"
                        class="p-2 hover:bg-white/5 rounded">✕</button>
                </div>
                <nav class="p-4 space-y-1 text-sm">
                    <div class="text-xs text-gray-400 mb-2">MENU</div>
                    <Link v-for="l in mainLinks" :key="l.label" :href="l.href"
                        class="block px-3 py-2 rounded hover:bg-white/5">{{ l.label }}</Link>

                    <div class="text-xs text-gray-400 mt-4 mb-2">PRODUCTS</div>
                    <Link v-for="c in productCats" :key="c" href="#" class="block px-3 py-1.5 rounded hover:bg-white/5">
                    {{ c }}</Link>

                    <div class="text-xs text-gray-400 mt-4 mb-2">ROOMS</div>
                    <Link v-for="c in roomCats" :key="c" href="#" class="block px-3 py-1.5 rounded hover:bg-white/5">{{
                        c }}</Link>
                </nav>
            </aside>
        </div>
    </header>
</template>

<style scoped>
:deep(a) {
    letter-spacing: .05em;
}
</style>
