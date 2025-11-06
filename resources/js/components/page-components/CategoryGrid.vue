<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import CategoryFormItem from './CategoryFormItem.vue';


interface LinkItem {
    type: 'link';
    title: string;
    imgSrc: string;
    href: string;
    altText: string;
    imgSrcMobile?: string;
}

interface FormItem {
    type: 'form';
    title: string;
    slug: string;
    imgSrc?: string;
    altText?: string;
}

interface BannerItem {
    title: string;
    imgSrc: string;
    href: string;
    altText: string;
    imgSrcMobile: string;
}

type GridCell = LinkItem | FormItem;


interface CategorySet {
    row1: ReadonlyArray<GridCell>
    row2: ReadonlyArray<GridCell>
    banner?: BannerItem
}
defineProps<{
    sets: Readonly<CategorySet[]>
}>()
const desktopHeroHeight = computed(() => 'calc(100svh - 108px)');
</script>
<template>
    <div class="w-full bg-black">
        <div v-for="(set, setIndex) in sets" :key="`set-${setIndex}`"
            class="max-w-full mx-auto flex flex-col gap-[6px]">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-[6px]">
                <div v-for="(item, index) in set.row1" :key="index">

                    <Link v-if="item.type === 'link'" :href="item.href" class="relative group block bg-black">
                    <img :src="item.imgSrc" :alt="item.altText" loading="lazy" />
                    <div class="absolute bottom-0 left-0 right-0 h-1/12 bg-gradient-to-t from-black/50 to-transparent">
                    </div>
                    <h3
                        class="absolute bottom-4 md:bottom-6 left-0 right-0 text-center text-white text-xs md:text-sm font-normal tracking-widest uppercase">
                        {{ item.title }}
                    </h3>
                    </Link>

                    <CategoryFormItem v-else-if="item.type === 'form'" :title="item.title" :slug="item.slug"
                        :imgSrc="item.imgSrc" :alt="item.altText" />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-[6px]">
                <div v-for="(item, index) in set.row2" :key="index">

                    <Link v-if="item.type === 'link'" :href="item.href" class="relative group block bg-black">
                    <img :src="item.imgSrc" :alt="item.altText" loading="lazy" />
                    <div class="absolute bottom-0 left-0 right-0 h-1/12 bg-gradient-to-t from-black/50 to-transparent">
                    </div>
                    <h3
                        class="absolute bottom-4 md:bottom-6 left-0 right-0 text-center text-white text-xs md:text-sm font-normal tracking-widest uppercase">
                        {{ item.title }}
                    </h3>
                    </Link>

                    <CategoryFormItem v-else-if="item.type === 'form'" :title="item.title" :slug="item.slug"
                        :imgSrc="item.imgSrc" />
                </div>
            </div>

            <div v-if="set.banner" class="grid grid-cols-1 pb-1.5">
                <Link :href="set.banner.href"
                    class="category-banner relative group block aspect-video md:aspect-auto bg-gray-200 dark:bg-gray-800">
                <img :src="set.banner.imgSrc" :alt="set.banner.altText"
                    class="absolute inset-0 w-full h-full object-cover hidden md:block" loading="lazy" />
                <img :src="set.banner.imgSrcMobile" :alt="set.banner.altText"
                    class="block md:hidden" loading="lazy" />
                <div class="absolute bottom-0 left-0 right-0 h-1/12 bg-gradient-to-t from-black/50 to-transparent">
                </div>
                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full text-white text-center p-4">

                    <h3 class="text-[13px] md:text-[18px] font-light tracking-wider uppercase" v-html="set.banner.title">
                    </h3>

                    <div
                        class="inline-block mt-3 text-xs md:text-sm font-light tracking-wider border-b border-white/70 transition-colors">
                        DISCOVER MORE
                    </div>
                </div>
                </Link>
            </div>
        </div>
    </div>
</template>

<style scoped>
@media (min-width: 768px) {
    .category-banner {
        min-height: v-bind(desktopHeroHeight);
    }
}
</style>
