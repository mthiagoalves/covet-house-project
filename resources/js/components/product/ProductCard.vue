<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { useGeneralModal } from '@/composables/useGeneralModal';

const props = defineProps<{
    product: {
        id: number;
        name: string;
        slug: string;
        brand: {
            name: string;
            slug: string;
        }, category: {
            name: string;
            slug: string;
            subcategory: {
                name: string;
                slug: string;
            }
        };
    }
}>();


const { open: openPriceModal } = useGeneralModal();

function openModal() {
    openPriceModal({
        title: props.product.name,
        slug: props.product.slug,
        btnName: 'GET PRICE'
    });
}
</script>

<template>
    <div class="flex flex-col">

        <Link :href="`/products/${product.slug}`" class="block bg-white aspect-square group relative">
        <img :src="`/images/products/thumbnails/${product.slug}-luxury-piece.jpg`" :alt="`${product.name} our luxury piece`" class="w-full h-full object-contain" loading="lazy" />
        </Link>

        <div class="text-black p-2 mb-2 flex flex-col justify-between items-center h-20">
            <div class="text-center">
                <Link :href="`/products/${product.slug}`" class="block">
                <h3 class="font-bold text-[9px] uppercase tracking-wider">{{ product.name }}</h3>
                </Link>
                <Link :href="`/brands/${product.brand.slug}`">
                <p class="text-[11px] uppercase tracking-wider">{{ product.brand.name }}</p>
                </Link>
            </div>

            <button @click="openModal"
                class="text-xs text-white font-semibold whitespace-nowrap cursor-pointer w-full mt-2 py-2 bg-[#333333]">
                GET PRICE &gt;
            </button>
        </div>
    </div>
</template>
