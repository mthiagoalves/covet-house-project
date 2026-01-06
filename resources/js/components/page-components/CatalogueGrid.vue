<script setup lang="ts">
import { ref, computed, onMounted, onUnmounted, nextTick, watch } from 'vue';
// Props recebidas do Pai (Index.vue)
const props = defineProps<{
    featured: any;
    list: any[];
}>();

// --- CONFIGURAÇÃO ---
const initialBatch = 6; // Quantos itens aparecem ao lado do destaque
const loadBatch = 10;   // Quantos itens carregam ao clicar em See More

const itemsToShow = ref(initialBatch);

// --- SEPARAÇÃO DAS LISTAS ---

// 1. Lista do Topo (Máximo 6 itens) - Vai para a direita do destaque
const topList = computed(() => {
    // Pega do 0 até o limite atual, mas travado no máximo de 'initialBatch' (6)
    return props.list.slice(0, Math.min(itemsToShow.value, initialBatch));
});

// 2. Lista de Baixo (O Resto) - Vai para o grid 5x5
const bottomList = computed(() => {
    // Se não carregamos mais que 6, retorna vazio.
    // Se carregamos, retorna do 6 até o total atual.
    if (itemsToShow.value <= initialBatch) return [];
    return props.list.slice(initialBatch, itemsToShow.value);
});

const hasMore = computed(() => {
    return itemsToShow.value < props.list.length;
});

const loadMore = async () => {
    itemsToShow.value += loadBatch;
    await nextTick();
    // Re-sincroniza a altura do topo caso algo tenha mudado,
    // embora o load more agora afete principalmente a parte de baixo.
    syncHeight();
};

const btnClass = "bg-[#333] text-white text-[10px] font-bold py-2 px-6 uppercase tracking-widest hover:bg-[#bca479] transition-colors w-full text-center flex items-center justify-center group";

const featuredCardRef = ref<HTMLElement | null>(null);
const rightColRef = ref<HTMLElement | null>(null);
let resizeObserver: ResizeObserver | null = null;

const syncHeight = () => {
    if (!featuredCardRef.value || !rightColRef.value) return;

    if (window.innerWidth >= 1024) {
        const height = rightColRef.value.offsetHeight;
        featuredCardRef.value.style.height = `${height}px`;
    } else {
        featuredCardRef.value.style.height = 'auto';
    }
};

onMounted(() => {
    resizeObserver = new ResizeObserver(() => syncHeight());
    if (rightColRef.value) resizeObserver.observe(rightColRef.value);
    window.addEventListener('resize', syncHeight);
    setTimeout(syncHeight, 100);
});

onUnmounted(() => {
    if (resizeObserver) resizeObserver.disconnect();
    window.removeEventListener('resize', syncHeight);
});
</script>

<template>


    <div class="grid grid-cols-1 lg:grid-cols-5 gap-3">

        <div ref="leftColRef" class="lg:col-span-2 flex flex-col gap-4">
            <div class="flex flex-col items-center justify-center text-center h-full">
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

                <div class="flex items-center gap-3 md:w-2/5">
                    <div
                        class="w-9 h-9 border border-black flex items-center justify-center cursor-pointer hover:bg-black group/check transition-colors flex-shrink-0">
                        <div class="w-2.5 h-2.5 bg-transparent group-hover/check:bg-white transition-colors"></div>
                    </div>

                    <a :href="`/catalogues-and-ebooks/${featured.slug}`" :class="btnClass">
                        <span>Download Now</span>
                        <span
                            class="text-lg leading-none group-hover:translate-x-1 transition-transform ml-2 mb-0.5">›</span>
                    </a>
                </div>

            </div>
        </div>

        <div ref="rightColRef" class="lg:col-span-3 flex flex-col">
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-x-3 gap-y-3">

                <div v-for="item in topList" :key="item.id" class="flex flex-col items-center text-center">
                    <div class="w-full bg-[#e4e4e4] mb-2 relative overflow-hidden cursor-pointer py-4">
                        <a :href="`/catalogues-and-ebooks/${item.slug}`">
                            <img :src="item.image" :alt="item.title"
                                class="w-full h-full object-cover transition-transform duration-500" />
                        </a>
                    </div>
                    <h4 class="text-xs font-bold uppercase tracking-widest mb-1 px-2">{{ item.title }}</h4>
                    <p class="text-[10px] text-gray-500 uppercase tracking-wider mb-6">{{ item.subtitle }}</p>
                    <div class="flex items-center gap-2 md:w-2/3 mt-auto px-2">
                        <div
                            class="w-9 h-9 border border-black flex items-center justify-center cursor-pointer hover:bg-black group/check transition-colors flex-shrink-0">
                            <div class="w-2.5 h-2.5 bg-transparent group-hover/check:bg-white transition-colors"></div>
                        </div>
                        <a :href="`/catalogues-and-ebooks/thumbnails/${item.slug}/thumbnail.png`"
                            :class="[btnClass, 'py-2.5 text-[9px]']">
                            <span>Download</span>
                            <span
                                class="text-base leading-none group-hover:translate-x-1 transition-transform ml-2 mb-0.5">›</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div v-if="bottomList.length > 0"
        class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-3 gap-y-12 animate-fade-in-up mt-6">

        <div v-for="item in bottomList" :key="item.id" class="flex flex-col items-center text-center">
            <div class="w-full bg-[#e4e4e4] mb-2 relative overflow-hidden cursor-pointer py-4">
                <a :href="`/catalogues-and-ebooks/${item.slug}`">
                    <img :src="item.image" :alt="item.title"
                        class="w-full h-full object-cover transition-transform duration-500" />
                </a>
            </div>
            <h4 class="text-xs font-bold uppercase tracking-widest mb-1 px-2">{{ item.title }}</h4>
            <p class="text-[10px] text-gray-500 uppercase tracking-wider mb-6">{{ item.subtitle }}</p>
            <div class="flex items-center gap-2 w-2/3 mt-auto px-2">
                <div
                    class="w-9 h-9 border border-black flex items-center justify-center cursor-pointer hover:bg-black group/check transition-colors flex-shrink-0">
                    <div class="w-2.5 h-2.5 bg-transparent group-hover/check:bg-white transition-colors"></div>
                </div>
                <a :href="`/catalogues-and-ebooks/thumbnails/${item.slug}/thumbnail.png`"
                    :class="[btnClass, 'py-2.5 text-[9px]']">
                    <span>Download</span>
                    <span
                        class="text-base leading-none group-hover:translate-x-1 transition-transform ml-2 mb-0.5">›</span>
                </a>
            </div>
        </div>

    </div>

    <div v-if="hasMore" class="mt-8 text-center w-full max-w-[200px] mx-auto">
        <button @click="loadMore" :class="[btnClass, 'py-2.5 text-[9px] cursor-pointer']">
            See More <span
                class="text-base leading-none group-hover:translate-x-1 transition-transform ml-2 mb-0.5">›</span>
        </button>
    </div>

</template>
