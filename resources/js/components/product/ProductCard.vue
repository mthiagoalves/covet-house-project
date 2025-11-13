<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
// Usando 'useGeneralModal' como você definiu no CategoryFormItem
import { useGeneralModal } from '@/composables/useGeneralModal';

// 1. Defina a "forma" (shape) do produto que este card espera
const props = defineProps<{
    product: {
        id: number;
        name: string;
        slug: string;
        main_image_url: string;
        brand: {
            name: string;
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

        <Link href="#" class="block bg-white aspect-square group relative">
        <img :src="product.main_image_url" :alt="product.name" class="w-full h-full object-contain" loading="lazy" />
        </Link>

        <div class="text-black p-2 mb-2 flex flex-col justify-between items-center h-20">
            <div class="text-center">
                <Link href="#">
                <h3 class="font-bold text-[9px] uppercase tracking-wider">{{ product.name }}</h3>
                </Link>
                <Link href="#">
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
