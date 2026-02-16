<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props = defineProps<{
    projects: any[];
}>();

const totalProjects = props.projects.length;

const remainder = totalProjects % 3;

const initialCount = totalProjects < 3 ? totalProjects : totalProjects - remainder;

const itemsToShow = ref(initialCount);

const visibleProjects = computed(() => {
    return props.projects.slice(0, itemsToShow.value);
});

const hasMore = computed(() => {
    return itemsToShow.value < totalProjects;
});

const loadMore = () => {
    itemsToShow.value = totalProjects;
};
</script>

<template>
    <div class="w-full bg-white pb-4">

        <div class="text-center py-16 md:py-7 px-4">
            <h2 class="text-xl md:text-2xl font-light uppercase tracking-[0.2em] mb-4 text-black">
                Covet House's Design Around the Globe
            </h2>
            <p class="text-[10px] md:text-[13px] text-gray-500 uppercase tracking-widest font-medium">
                The best of contemporary design by distinguished interior designers
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-1 px-1">

            <Link v-for="project in visibleProjects" :key="project.id" :href="`/projects/${project.slug}`"
                class="relative group block w-full overflow-hidden bg-gray-100">
                <img :src="`/images/projects/thumbnails/${project.slug}.jpg`" :alt="project.title"
                    class="transition-transform duration-1000 group-hover:scale-105" loading="lazy" />

                <div
                    class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col items-center justify-center text-center px-3 md:px-8 z-10">

                    <h3
                        class="text-white text-xs md:text-xl font-light uppercase tracking-widest transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        {{ project.title }}
                    </h3>

                    <p
                        class="text-gray-300 text-[9px] md:text-[11px] uppercase tracking-[0.2em] mt-1 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-75 leading-relaxed max-w-[80%]">
                        {{ project.subtitle }}
                    </p>

                </div>
            </Link>

        </div>

        <div v-if="hasMore" class="mt-4 text-center w-full flex justify-center">
            <button @click="loadMore"
                class="bg-[#222] border border-[#333] text-white text-[10px] font-bold py-2 px-12 tracking-[0.2em] uppercase hover:bg-[#bca479] hover:border-[#bca479] transition-all duration-300 cursor-pointer">
                Load More
            </button>
        </div>

    </div>
</template>
