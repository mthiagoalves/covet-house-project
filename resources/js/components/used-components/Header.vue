<script setup lang="ts">
import { ref, onMounted, onBeforeUnmount } from 'vue'

/* ---------- Links e categorias ---------- */
const utilityLinks = [
    { label: 'ABOUT', href: '/about' },
    { label: 'CONTACT US', href: '/contact' },
    { label: 'CATALOGUE', href: '/catalogues', icon: 'download' },
    { label: '$ STOCKLIST', href: '/stocklist' },
]

const mainLinks = [
    { label: 'BRANDS', href: '/brands', caret: true },
    { label: 'SHOWROOMS', href: '/showrooms', caret: true },
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

/* ---------- Estado header ---------- */
const mobileOpen = ref(false)
const isSticky = ref(false)
function onScrollHeader() {
    isSticky.value = window.scrollY > 24
    // fecha dropdown ao rolar
    if (dropdownOpen.value) closeDropdown()
}

/* ---------- Dropdown BRANDS/SHOWROOMS ---------- */
type DropName = 'brands' | 'showrooms'
const dropdownOpen = ref<DropName | null>(null)
const dropdownWidth = 280 // px
const dropdownLeft = ref(0) // posição X (px) do painel
const dropdownTop = ref(0)  // posição Y (px) do painel
const caretOffset = ref(24) // deslocamento do caret dentro do painel
let closeTimer: ReturnType<typeof setTimeout> | null = null

const brandsBtnRef = ref<HTMLElement | null>(null)
const showroomsBtnRef = ref<HTMLElement | null>(null)

const brandsItems = [
    'ALL BRANDS', 'BOCA DO LOBO', 'LUXXU', 'CIRCU', 'MAISON VALENTINA', 'COVET COLLECTION',
    'KOKET', 'CAFFE LATTE', 'BRABBU', 'DELIGHTFULL', 'ESSENTIAL HOME', 'RUG SOCIETY', 'PULLCAST'
]
const showroomItems = [
    'COVET DOURO', 'COVET TOWN',
]

function clamp(n: number, min: number, max: number) { return Math.max(min, Math.min(n, max)) }

function computePositionFor(el: HTMLElement) {
    const tBox = el.getBoundingClientRect()
    const centerX = tBox.left + tBox.width / 2
    const left = clamp(centerX - dropdownWidth / 2, 8, window.innerWidth - dropdownWidth - 8)
    const top = Math.round(tBox.bottom + 8) // 8px abaixo do trigger
    dropdownLeft.value = Math.round(left)
    dropdownTop.value = top
    caretOffset.value = Math.round(centerX - left) // caret centralizado no trigger
}

function openDropdown(name: DropName, el?: HTMLElement) {
    const trigger = el ?? (name === 'brands' ? brandsBtnRef.value : showroomsBtnRef.value)
    if (!trigger) { dropdownOpen.value = name; return }
    computePositionFor(trigger)
    dropdownOpen.value = name
    if (closeTimer) { clearTimeout(closeTimer); closeTimer = null }
}

function scheduleClose() {
    if (closeTimer) clearTimeout(closeTimer)
    closeTimer = setTimeout(() => closeDropdown(), 10)
}
function cancelClose() {
    if (closeTimer) { clearTimeout(closeTimer); closeTimer = null }
}
function closeDropdown() {
    dropdownOpen.value = null
    if (closeTimer) { clearTimeout(closeTimer); closeTimer = null }
}

function onKeydown(e: KeyboardEvent) {
    if (e.key === 'Escape') closeDropdown()
}

onMounted(() => {
    window.addEventListener('scroll', onScrollHeader)
    window.addEventListener('keydown', onKeydown)
})
onBeforeUnmount(() => {
    window.removeEventListener('scroll', onScrollHeader)
    window.removeEventListener('keydown', onKeydown)
})
</script>

<template>
    <header :class="['w-full z-40', isSticky ? 'sticky top-0 shadow-[0_1px_0_rgba(255,255,255,0.06)]' : '']">
        <!-- Topbar -->
        <div class="hidden md:block w-full bg-[#333333] text-white text-[12px] tracking-[0.666px]">
            <div class="mx-auto flex justify-between px-4">
                <nav class="flex items-center gap-4 h-8" role="navigation" aria-label="Utility">
                    <a v-for="l in utilityLinks" :key="l.label" :href="l.href"
                        class="hover:text-[#bca479] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#bca479] rounded flex items-center gap-1">
                        <span v-if="l.icon === 'download'" aria-hidden="true">⬇</span>{{ l.label }}
                    </a>
                </nav>

                <nav class="hidden md:flex items-center gap-4 h-8" role="navigation" aria-label="Main">
                    <!-- BRANDS trigger -->
                    <a ref="brandsBtnRef" href="/brands"
                        @mouseenter="openDropdown('brands', $event.currentTarget as HTMLElement)"
                        @focus="openDropdown('brands', $event.currentTarget as HTMLElement)" @mouseleave="scheduleClose"
                        class="hover:text-[#ffffff] text-[#ffffffcc] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#ffffff] rounded relative">
                        <span>BRANDS</span><span aria-hidden="true"> ▾</span>
                    </a>

                    <!-- SHOWROOMS trigger -->
                    <a ref="showroomsBtnRef" href="/showrooms"
                        @mouseenter="openDropdown('showrooms', $event.currentTarget as HTMLElement)"
                        @focus="openDropdown('showrooms', $event.currentTarget as HTMLElement)"
                        @mouseleave="scheduleClose"
                        class="hover:text-[#ffffff] text-[#ffffffcc] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#ffffff] rounded relative">
                        <span>SHOWROOMS</span><span aria-hidden="true"> ▾</span>
                    </a>

                    <!-- Demais links -->
                    <a v-for="l in mainLinks.filter(x => x.label !== 'BRANDS' && x.label !== 'SHOWROOMS')"
                        :key="l.label" :href="l.href"
                        :class="['hover:text-[#ffffff]', l.highlight ? 'text-red-400' : 'text-[#ffffffcc]']">
                        <span>{{ l.label }}</span><span v-if="l.caret" aria-hidden="true"> ▾</span>
                    </a>

                    <div class="ml-2 flex items-center">
                        <button
                            class="hover:text-[#ffffff] p-1 rounded focus:outline-none focus-visible:ring-2 focus-visible:ring-[#bca479]"
                            aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5">
                                <circle cx="11" cy="11" r="7" />
                                <path d="M20 20l-3.5-3.5" />
                            </svg>
                        </button>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Barra principal + categorias -->
        <div class="w-full bg-black text-gray-200">
            <div class="mx-auto max-w-full px-4">
                <div class="h-[72px] flex items-center justify-between">
                    <div class="flex items-center gap-3 justify-between md:w-1/5 w-full">
                        <button class="md:hidden" @click="mobileOpen = true" aria-label="Open menu">
                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class="w-6 h-6" fill='none'
                                stroke='currentColor' stroke-width='1.5'>
                                <path d='M4 7h16M4 12h16M4 17h16' />
                            </svg>
                        </button>
                        <a href="/" class="block" aria-label="Home">
                            <img src="/images/header/logo.png" alt="Logo Covet House" class="w-[167px] h-auto">
                        </a>

                        <button class="hover:text-[#bca479] md:hidden" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
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
                                    <a href="#" class="hover:text-[#bca479] inline-block">{{ c }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mx-auto max-w-full">
                            <ul
                                class="hidden md:flex items-center md:justify-end gap-4 h-9 text-[11px] text-white border-t-white border-t">
                                <li v-for="c in roomCats" :key="c">
                                    <a href="#" class="hover:text-[#bca479] pb-2">{{ c }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Dropdown overlay (desktop) -->
        <div v-show="dropdownOpen" class="hidden md:block fixed inset-0 z-50" @mousemove="cancelClose"
            @mouseleave="scheduleClose">
            <!-- Clicar fora fecha -->
            <div class="absolute inset-0" @click="closeDropdown"></div>

            <!-- Painel -->
            <div class="absolute bg-white text-[#2b2b2b] shadow-xl rounded-sm border border-black/5 w-[280px] select-none"
                :style="{ left: dropdownLeft + 'px', top: dropdownTop + 'px', width: dropdownWidth + 'px' }" role="menu"
                aria-label="Submenu">
                <!-- Caret -->
                <div class="absolute -top-2 w-4 h-4 bg-white rotate-45 shadow-[_-1px_-1px_0_0_rgba(0,0,0,0.06)]"
                    :style="{ left: Math.max(8, Math.min(caretOffset - 8, dropdownWidth - 24)) + 'px' }"
                    aria-hidden="true"></div>

                <ul class="py-2 text-[12px] tracking-[0.06em]">
                    <li v-for="(item, idx) in (dropdownOpen === 'brands' ? brandsItems : showroomItems)" :key="idx"
                        role="none">
                        <a href="#" role="menuitem"
                            class="flex items-center justify-between px-4 py-3 hover:bg-black/5 border-t border-black/5 first:border-t-0 uppercase">
                            <span>{{ item }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Mobile drawer -->
        <div v-if="mobileOpen" class="fixed inset-0 z-50">
            <div class="absolute inset-0 bg-black/50" @click="mobileOpen = false"></div>
            <aside class="absolute left-0 top-0 h-full w-80 max-w-[85vw] bg-[#0e0e0f] text-gray-200 shadow-xl"
                role="dialog" aria-modal="true" aria-label="Mobile menu">
                <div class="h-[72px] flex items-center justify-between px-4 border-b border-white/10">
                    <a href="/" class="block" aria-label="Home">
                        <img src="/images/header/logo.png" alt="Logo Covet House" class="w-[167px] h-auto">
                    </a>
                    <button @click="mobileOpen = false" aria-label="Close menu"
                        class="p-2 hover:bg-white/5 rounded">✕</button>
                </div>
                <nav class="p-4 space-y-1 text-sm">
                    <div class="text-xs text-gray-400 mb-2">MENU</div>
                    <a v-for="l in mainLinks" :key="l.label" :href="l.href"
                        class="block px-3 py-2 rounded hover:bg-white/5">{{ l.label }}</a>
                    <div class="text-xs text-gray-400 mt-4 mb-2">PRODUCTS</div>
                    <a v-for="c in productCats" :key="c" href="#" class="block px-3 py-1.5 rounded hover:bg-white/5">{{
                        c }}</a>
                    <div class="text-xs text-gray-400 mt-4 mb-2">ROOMS</div>
                    <a v-for="c in roomCats" :key="c" href="#" class="block px-3 py-1.5 rounded hover:bg-white/5">{{ c
                    }}</a>
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
