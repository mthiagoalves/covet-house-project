<script setup lang="ts">

import { useGeneralModal } from '@/composables/useGeneralModal';
import { useSearchModal } from '@/composables/useSearchModal';
import { Link, usePage } from '@inertiajs/vue3';
import { Download } from 'lucide-vue-next';
import { onBeforeUnmount, onMounted, ref } from 'vue';

const page = usePage();

// Função para verificar se o link está ativo
const isUrlActive = (href: string) => {
    // Se for a home, tem que ser exato
    if (href === '/') {
        return page.url === '/';
    }
    // Para outras páginas, verifica se a URL começa com o href
    // Ex: /about-us ativa o link /about
    return page.url.startsWith(href);
};

const { open: openGeneralModal } = useGeneralModal();

interface LinkItem {
    label: string;
    href: string;
    type: 'link';
    icon?: string;
    modalData?: undefined; // Links nunca têm modalData
}

interface ModalItem {
    label: string;
    href?: undefined; // Modais nunca têm href
    type: 'modal';
    icon?: string;
    modalData: { // Modais SEMPRE têm modalData
        title: string;
        slug: string;
        btnName: string;
        formType: string;
    };
}

type UtilityLink = LinkItem | ModalItem;

// 2. Aplique o tipo ao array
const utilityLinks: UtilityLink[] = [
    {
        label: 'ABOUT',
        href: '/about',
        type: 'link'
    },
    {
        label: 'CONTACT US',
        href: '/contact-us',
        type: 'link'
    },
    {
        label: 'CATALOGUE',
        type: 'modal',
        icon: 'download',
        modalData: {
            title: 'DOWNLOAD CATALOGUE',
            slug: 'catalogue',
            formType: 'Catalogue',
            btnName: 'DOWNLOAD NOW'
        }
    },
    {
        label: '$ STOCKLIST',
        type: 'modal',
        modalData: {
            title: 'GET STOCKLIST',
            slug: 'stocklist',
            formType: 'Stocklist',
            btnName: 'DOWNLOAD NOW'
        }
    },
];
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
        href: '/showrooms/covet-douro',
        caret: true,
        children: [
            { label: 'COVET DOURO', href: '/showrooms/covet-douro' },
            { label: 'COVET TOWN', href: '/showrooms/curated-showroom-the-ultimate-luxury-experience' },
        ]
    },
    { label: 'CATALOGUES & BOOKS', href: '/catalogues-and-ebooks' },
    {
        label: '❤ ROOM BY ROOM',
        href: '/inspirations',
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
        href: '/all-products',
        children: [
            { label: 'ALL PRODUCTS', href: '/all-products' },
            { label: 'NEW PRODUCTS', href: '/new-products' },
            { label: 'CASEGOODS', href: '/category/casegoods' },
            { label: 'SEATING', href: '/category/seating' },
            { label: 'TABLES', href: '/category/tables' },
            { label: 'LIGHTING', href: '/category/lighting' },
            { label: 'KIDS', href: '/category/kids' },
            { label: 'BATHROOMS', href: '/category/bathrooms' },
            { label: 'RUGS', href: '/category/rugs' }
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

const currentUrl = usePage().url;
const isActive = (href: string) => currentUrl === href;

const { open: openSearch } = useSearchModal();
</script>
<template>
    <header :class="['w-full z-40 fixed top-0', isSticky ? 'shadow-[0_1px_0_rgba(255,255,255,0.06)]' : '']">
        <div class="hidden md:block w-full bg-[#333333] text-white text-[12px] tracking-[0.666px]">
            <div class="mx-auto flex justify-between px-4">
                <nav class="flex items-center gap-4 h-7">
                    <template v-for="l in utilityLinks" :key="l.label">

                        <Link v-if="l.type === 'link'" :href="l.href"
                            class="flex items-center gap-1 hover:text-gray-300 transition-colors"
                            :class="isUrlActive(l.href) ? 'text-[#bca479]' : 'hover:text-gray-300 text-white'">
                        {{ l.label }}
                        </Link>

                        <button v-else @click="openGeneralModal(l.modalData)"
                            class="flex items-center gap-1 hover:text-gray-300 transition-colors cursor-pointer">
                            <span v-if="l.icon === 'download'" aria-hidden="true">
                                <Download :stroke-width="1" class="w-3.5 h-3.5 text-white" />
                            </span>
                            {{ l.label }}
                        </button>

                    </template>
                </nav>

                <div class="flex items-center gap-3">
                    <nav class="hidden md:flex items-center gap-4 h-7 text-[12px] text-[#ffffffcc]">
                        <div v-for="l in mainLinks" :key="l.label" class="relative h-full flex items-center"
                            @mouseleave="openDropdown = null">
                            <Link :href="l.href" :class="[
                                // Se estiver ativo -> Dourado
                                isUrlActive(l.href) ? 'text-[#bca479]' : 'text-[#ffffffcc] hover:text-[#ffffff]',

                                // Se tiver highlight (SPECIAL PRICES) -> Vermelho (sobrescreve o resto se necessário)
                                l.highlight ? 'text-red-500 hover:text-red-600' : ''
                            ]" @mouseenter="l.caret ? openDropdown = l.label : openDropdown = null"> <span>{{ l.label
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
                    <button class="hover:text-[#bca479] cursor-pointer" aria-label="Search" @click="openSearch">
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
                        <button class="hover:text-[#bca479] md:hidden" aria-label="Search" @click="openSearch"> <svg
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
                                    <Link :href="child.href" class="hover:text-[#bca479] inline-block"
                                        :class="isUrlActive(child.href) ? 'text-[#bca479]' : 'hover:text-gray-300 text-white'">
                                    {{ child.label }}
                                    </Link>
                                </li>
                            </ul>
                        </div>
                        <div class="mx-auto max-w-full">
                            <ul
                                class="hidden md:flex items-center md:justify-end gap-4 h-9 text-[11px] text-white border-t-[#bca479] border-t">
                                <li v-for="child in mainLinks[3].children" :key="child.label">
                                    <Link :href="child.href" class="hover:text-[#bca479] inline-block"
                                        :class="isUrlActive(child.href) ? 'text-[#bca479]' : 'hover:text-gray-300 text-white'">
                                    {{ child.label }}
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
