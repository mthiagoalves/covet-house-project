<script setup lang="ts">
import ProductCard from '@/components/product/ProductCard.vue';

interface ProductData {
    id: number;
    name: string;
    slug: string;
    type: 'product';
    main_image_url: string;
    brand: { name: string; };
    category: {
        name: string;
        slug: string;
        subcategory: { name: string; slug: string; }
    };
}

defineProps<{
    title?: string;
    products: ProductData[];
}>();
</script>

<template>
    <div class="w-full bg-white">
        <h3 v-if="title" class="text-center text-xl md:text-2xl font-light tracking-widest uppercase py-5 text-black">
            {{ title }}
        </h3>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-1">
            <ProductCard v-for="product in products" :key="product.id" :product="product" />
        </div>
    </div>
</template>
