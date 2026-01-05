<script setup lang="ts">
import { ref, computed } from 'vue';
import { Link } from '@inertiajs/vue3';

// Props recebidas do Pai (Index.vue)
const props = defineProps<{
    featured: any;
    list: any[];
}>();

// --- LÓGICA DO LOAD MORE ---
const initialCount = 6;
const itemsToShow = ref(initialCount);

// Lista computada que mostra apenas a quantidade definida em itemsToShow
const visibleList = computed(() => {
    return props.list.slice(0, itemsToShow.value);
});

// Verifica se ainda há itens para mostrar
const hasMore = computed(() => {
    return itemsToShow.value < props.list.length;
});

const loadMore = () => {
    itemsToShow.value += 6; // Carrega mais 6 de cada vez
};

// Estilo comum do botão de download
const btnClass = "bg-[#333] text-white text-[10px] font-bold py-3 px-6 uppercase tracking-widest hover:bg-[#bca479] transition-colors w-full text-center flex items-center justify-center group";
</script>

<template>


    <div class="grid grid-cols-1 lg:grid-cols-5 gap-3">

        <div class="lg:col-span-2 flex flex-col gap-4">
            <div class="flex flex-col items-center text-center h-full">
                <div class="px-8 bg-[#e5e5e5] mb-5">
                    <div class="w-full aspect-[3/4] relative group cursor-pointer overflow-hidden">
                        <a :href="`/catalogues-and-ebooks/${featured.slug}`">
                            <img :src="featured.image" :alt="featured.title"
                                class="w-full h-full object-cover shadow-lg transition-transform duration-700" />
                        </a>
                    </div>
                </div>

                <h3 class="text-xs font-bold uppercase tracking-widest mb-1">
                    {{ featured.title }}
                </h3>
                <p class="text-[10px] text-gray-500 uppercase tracking-wider mb-6">
                    {{ featured.subtitle }}
                </p>

                <div class="flex items-center gap-3 w-2/5">
                    <div
                        class="w-10 h-10 border border-black flex items-center justify-center cursor-pointer hover:bg-black group/check transition-colors flex-shrink-0">
                        <div class="w-3 h-3 bg-transparent group-hover/check:bg-white transition-colors"></div>
                    </div>

                    <a :href="`/catalogues-and-ebooks/${featured.slug}`" :class="btnClass">
                        <span>Download Now</span>
                        <span
                            class="text-lg leading-none group-hover:translate-x-1 transition-transform ml-2 mb-0.5">›</span>
                    </a>
                </div>

            </div>
        </div>

        <div class="lg:col-span-3 flex flex-col">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-3 gap-y-3">

                <div v-for="item in visibleList" :key="item.id" class="flex flex-col items-center text-center">
                    <div class="w-full bg-[#e4e4e4] mb-2 relative overflow-hidden cursor-pointer py-4">
                        <a :href="`/catalogues-and-ebooks/${item.slug}`">
                            <img :src="item.image" :alt="item.title"
                                class="w-full h-full object-cover transition-transform duration-500" />
                        </a>
                    </div>

                    <h4 class="text-[11px] font-bold uppercase tracking-widest mb-1 px-2 line-clamp-2 min-h-[2.5em]">
                        {{ item.title }}
                    </h4>
                    <p class="text-[11px] text-gray-500 uppercase tracking-wider mb-2">
                        {{ item.subtitle }}
                    </p>

                    <div class="flex items-center gap-2 w-2/3 mt-auto px-2">
                        <div
                            class="w-9 h-9 border border-black flex items-center justify-center cursor-pointer hover:bg-black group/check transition-colors flex-shrink-0">
                            <div class="w-2.5 h-2.5 bg-transparent group-hover/check:bg-white transition-colors"></div>
                        </div>

                        <a :href="`/catalogues-and-ebooks/thumbnails/${item.slug}/thumbnail.png`"
                            :class="[btnClass, 'py-2.5 px-4 text-[9px]']">
                            <span>Download</span>
                            <span
                                class="text-base leading-none group-hover:translate-x-1 transition-transform ml-2 mb-0.5">›</span>
                        </a>
                    </div>

                </div>

            </div>

            <div v-if="hasMore" class="mt-16 text-center">
                <button @click="loadMore"
                    class="bg-black text-white text-[10px] font-bold py-4 px-12 tracking-[0.2em] uppercase hover:bg-[#bca479] transition-colors">
                    See More
                </button>
            </div>

        </div>

    </div>

</template>
