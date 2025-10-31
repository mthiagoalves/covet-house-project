<script setup lang="ts">

import { ref, onMounted, onBeforeUnmount } from 'vue';
import { usePage, Link } from '@inertiajs/vue3';

const utilityLinks = [
    { label: 'ABOUT', href: '/about' },
    { label: 'CONTACT US', href: '/contact' },
    { label: 'CATALOGUE', href: '/catalogues', icon: 'download' },
    { label: '$ STOCKLIST', href: '/stocklist' },
]

// --- DADOS ATUALIZADOS ---
// 'roomCats' foi movido para dentro de '❤ ROOM BY ROOM'
const mainLinks = [
    {
        label: 'BRANDS',
        href: '/brands',
        caret: true,
        children: [
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
        children: [
            { label: 'COVET DOURO', href: '/showrooms' },
            { label: 'COVET TOWN', href: '/showrooms/london' },
        ]
    },
    { label: 'CATALOGUES & BOOKS', href: '/catalogues-books' },
    {
        label: '❤ ROOM BY ROOM',
        href: '/room-by-room',
        caret: false,
        children: [
            { label: 'ENTRYWAYS', href: '/rooms/entryways' },
            { label: 'LIVING ROOMS', href: '/rooms/living-rooms' },
            { label: 'DINING ROOMS', href: '/rooms/dining-rooms' },
            { label: 'KIDS ROOMS', href: '/rooms/kids-rooms' },
            { label: 'BATHROOMS', href: '/rooms/bathrooms' },
            { label: 'BEDROOMS', href: '/rooms/bedrooms' },
            { label: 'OFFICES', href: '/rooms/offices' }
        ]
    },
    { label: 'PROJECTS', href: '/projects' },
    { label: 'BLOG', href: '/blog' },
    { label: 'PRESS ROOM', href: '/press' },
    { label: 'SPECIAL PRICES', href: '/special-prices', highlight: true },
]

// 'productCats' foi reestruturado
const productLinks = [
    {
        label: 'PRODUCTS',
        href: '/products',
        children: [
            { label: 'ALL PRODUCTS', href: '/products/all-products' },
            { label: 'NEW PRODUCTS', href: '/products/new-products' },
            { label: 'CASEGOODS', href: '/products/casegoods' },
            { label: 'SEATING', href: '/products/seating' },
            { label: 'TABLES', href: '/products/tables' },
            { label: 'LIGHTING', href: '/products/lighting' },
            { label: 'KIDS', href: '/products/kids' },
            { label: 'BATHROOMS', href: '/products/bathrooms' },
            { label: 'RUGS', href: '/products/rugs' }
        ]
    }
]

const mobileOpen = ref(false)
const isSticky = ref(false)
const openDropdown = ref<string | null>(null)


const mobileOpenMenus = ref<string[]>([])

function toggleMobileMenu(label: string) {
    if (mobileOpenMenus.value.includes(label)) {
        mobileOpenMenus.value = mobileOpenMenus.value.filter(item => item !== label);
    } else {
        mobileOpenMenus.value.push(label);
    }
}

const isMobileMenuOpen = (label: string) => mobileOpenMenus.value.includes(label);


function onScroll() { isSticky.value = window.scrollY > 24 }

onMounted(() => { window.addEventListener('scroll', onScroll) })
onBeforeUnmount(() => { window.removeEventListener('scroll', onScroll) })

const currentUrl = usePage().url
const isActive = (href: string) => currentUrl === href

</script>
<template>
    <header :class="['w-full z-40', isSticky ? 'sticky top-0 shadow-[0_1px_0_rgba(255,255,255,0.06)]' : '']">
        <div class="hidden md:block w-full bg-[#333333] text-white text-[12px] tracking-[0.666px]">
            <div class="mx-auto flex justify-between px-4">
                <nav class="flex items-center gap-4 h-7">
                    <Link v-for="l in utilityLinks" :key="l.label" :href="l.href" class="flex items-center gap-1">
                    <span v-if="l.icon === 'download'" aria-hidden="true">⬇</span>{{ l.label }}
                    </Link>
                </nav>

                <div class="flex items-center gap-3">
                    <nav class="hidden md:flex items-center gap-4 h-7 text-[12px] text-[#ffffffcc]">
                        <div v-for="l in mainLinks" :key="l.label" class="relative h-full flex items-center"
                            @mouseleave="openDropdown = null">
                            <Link :href="l.href"
                                :class="['flex items-center gap-1 h-full hover:text-[#ffffff]', l.highlight ? 'text-red-500 hover:text-red-600' : '']"
                                @mouseenter="l.caret ? openDropdown = l.label : openDropdown = null"> <span>{{ l.label
                                }}</span>

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
                <div class="h-20 flex items-center justify-between">
                    <div class="flex items-center gap-3 justify-between w-full md:w-3/6">
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
                                <li v-for="child in productLinks[0].children" :key="child.label">
                                    <Link :href="child.href" class="hover:text-[#bca479] inline-block">{{ child.label }}
                                    </Link>
                                </li>
                            </ul>
                        </div>
                        <div class="mx-auto max-w-full">
                            <ul
                                class="hidden md:flex items-center md:justify-end gap-4 h-9 text-[11px] text-white border-t-[#bca479] border-t">
                                <li v-for="child in mainLinks[3].children" :key="child.label">
                                    <Link :href="child.href" class="hover:text-[#bca479] inline-block">{{ child.label }}
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="mobileOpen" class="fixed inset-0 z-50">
            <div class="absolute inset-0 bg-black/50" @click="mobileOpen = false"></div>

            <aside
                class="absolute left-0 top-0 h-full w-80 max-w-[85vw] bg-[#0e0e0f] text-gray-200 shadow-xl overflow-y-auto">
                <div
                    class="h-20 flex items-center justify-between px-4 border-b border-white/10 sticky top-0 bg-[#0e0e0f] z-10">
                    <Link href="/" class="block">
                    <img src="/images/header/logo.png" alt="Logo Covet House" class="w-[167px] h-full">
                    </Link>
                    <button @click="mobileOpen = false" aria-label="Close menu"
                        class="p-2 hover:bg-white/5 rounded">✕</button>
                </div>

                <nav class="p-4 text-sm">

                    <div v-for="p in productLinks" :key="p.label" class="border-b border-white/5">

                        <Link v-if="!p.children" :href="p.href" class="block px-3 py-3 rounded hover:bg-white/5">
                        {{ p.label }}
                        </Link>

                        <div v-else>
                            <div class="flex justify-between items-center w-full">

                                <Link :href="p.href" class="flex-grow px-3 py-3 hover:bg-white/5 text-left">
                                {{ p.label }}
                                </Link>

                                <button @click="toggleMobileMenu(p.label)"
                                    class="flex-shrink-0 px-4 py-3 hover:bg-white/5"
                                    :aria-label="'Abrir submenu ' + p.label">
                                    <span class="text-lg">{{ isMobileMenuOpen(p.label) ? '−' : '+' }}</span>
                                </button>
                            </div>

                            <transition enter-active-class="transition-all duration-300 ease-out"
                                leave-active-class="transition-all duration-200 ease-in"
                                enter-from-class="opacity-0 -translate-y-2 max-h-0"
                                enter-to-class="opacity-100 translate-y-0 max-h-screen"
                                leave-from-class="opacity-100 translate-y-0 max-h-screen"
                                leave-to-class="opacity-0 -translate-y-2 max-h-0">
                                <div v-if="isMobileMenuOpen(p.label)" class="overflow-hidden bg-black/20">
                                    <Link v-for="child in p.children" :key="child.label" :href="child.href"
                                        class="block pl-8 pr-3 py-2 text-gray-300 hover:bg-white/10">
                                    {{ child.label }}
                                    </Link>
                                </div>
                            </transition>
                        </div>
                    </div>

                    <div v-for="l in mainLinks" :key="l.label" class="border-b border-white/5">

                        <Link v-if="!l.children" :href="l.href"
                            :class="['block px-3 py-3 rounded hover:bg-white/5', l.highlight ? 'text-red-600' : '']">
                        {{ l.label }}
                        </Link>

                        <div v-else>
                            <div class="flex justify-between items-center w-full">
                                <Link :href="l.href" class="flex-grow px-3 py-3 hover:bg-white/5 text-left">
                                {{ l.label }}
                                </Link>

                                <button @click="toggleMobileMenu(l.label)"
                                    class="flex-shrink-0 px-4 py-3 hover:bg-white/5"
                                    :aria-label="'Abrir submenu ' + l.label">
                                    <span class="text-lg">{{ isMobileMenuOpen(l.label) ? '−' : '+' }}</span>
                                </button>
                            </div>

                            <transition enter-active-class="transition-all duration-300 ease-out"
                                leave-active-class="transition-all duration-200 ease-in"
                                enter-from-class="opacity-0 -translate-y-2 max-h-0"
                                enter-to-class="opacity-100 translate-y-0 max-h-screen"
                                leave-from-class="opacity-100 translate-y-0 max-h-screen"
                                leave-to-class="opacity-0 -translate-y-2 max-h-0">
                                <div v-if="isMobileMenuOpen(l.label)" class="overflow-hidden bg-black/20">
                                    <Link v-for="child in l.children" :key="child.label" :href="child.href"
                                        class="block pl-8 pr-3 py-2 text-gray-300 hover:bg-white/10">
                                    {{ child.label }}
                                    </Link>
                                </div>
                            </transition>
                        </div>
                    </div>
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
