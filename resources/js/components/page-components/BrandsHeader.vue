<script setup lang="ts">

interface Brand {
    name: string;
    slug: string;
}

defineProps<{
    brands: Brand[];
}>();

const scrollToBrand = (index: number) => {
    const element = document.getElementById(`brand-${index}`);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
};
</script>

<template>
    <header class="fixed top-0 left-0 w-full z-50 bg-white shadow-md transition-transform duration-300 transform">
        <div class="max-w-full mx-auto px-4 h-[72px] md:h-[108px] flex items-center justify-center">

            <nav class="hidden md:flex gap-6 overflow-x-auto no-scrollbar">
                <button v-for="(brand, index) in brands" :key="brand.slug" @click="scrollToBrand(index)"
                    class="text-xs font-normal uppercase tracking-widest text-gray-500 hover:text-[#bca479] transition-colors whitespace-nowrap cursor-pointer">
                    {{ brand.name }}
                </button>
            </nav>

            <div class="md:hidden">
                <span class="text-xs font-normal text-gray-500">BRANDS MENU</span>
            </div>

        </div>
    </header>
</template>

<style scoped>
.no-scrollbar::-webkit-scrollbar {
    display: none;
}

.no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
