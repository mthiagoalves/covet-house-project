<script setup lang="ts">
import { ref, computed, onMounted, onUnmounted, nextTick, watch } from 'vue';
// Props recebidas do Pai (Index.vue)
const props = defineProps<{
    featured: any;
    list: any[];
}>();

const selectedItems = ref<number[]>([]);

const toggleSelection = (id: number) => {
    if (selectedItems.value.includes(id)) {
        selectedItems.value = selectedItems.value.filter(itemId => itemId !== id);
    } else {
        selectedItems.value.push(id);
    }
};

const isSelected = (id: number) => {
    return selectedItems.value.includes(id);
};

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

const btnClass = "bg-[#333] text-white text-[10px] font-bold py-2 md:px-6 px-2 uppercase tracking-widest hover:bg-[#bca479] transition-colors w-full text-center flex items-center justify-center group";

const featuredCardRef = ref<HTMLElement | null>(null);
const rightColRef = ref<HTMLElement | null>(null);
let resizeObserver: ResizeObserver | null = null;

const syncHeight = () => {
    // Verificação de segurança
    if (!featuredCardRef.value || !rightColRef.value) return;

    // requestAnimationFrame garante que o CSS atualize em sincronia com a taxa de atualização do monitor
    window.requestAnimationFrame(() => {
        // Verificação dupla dentro do frame
        if (!featuredCardRef.value || !rightColRef.value) return;

        // Breakpoint LG do Tailwind é 1024px
        if (window.innerWidth >= 1024) {
            const height = rightColRef.value.offsetHeight;
            featuredCardRef.value.style.height = `${height - 2}px`;
        } else {
            // No mobile, removemos a altura forçada
            featuredCardRef.value.style.height = 'auto';
        }
    });
};

onMounted(() => {
    // 1. Cria o observador para mudanças de conteúdo (Load More)
    resizeObserver = new ResizeObserver(() => syncHeight());
    if (rightColRef.value) resizeObserver.observe(rightColRef.value);

    // 2. Adiciona o listener para redimensionamento da janela
    window.addEventListener('resize', syncHeight);

    // 3. Chamada inicial com delay para garantir que o DOM renderizou imagens/fontes
    setTimeout(syncHeight, 100);
});

onUnmounted(() => {
    if (resizeObserver) resizeObserver.disconnect();
    window.removeEventListener('resize', syncHeight);
});
</script>

<template>
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-3">

        <div ref="featuredCardRef" class="lg:col-span-2 flex flex-col gap-4">
            <div class="flex flex-col items-center justify-center text-center h-full">
                <div class="bg-[#e5e5e5] mb-2 h-full">
                    <div class="w-full h-full relative group cursor-pointer overflow-hidden">
                        <a :href="`/catalogues-and-ebooks/${featured.slug}`">
                            <img :src="featured.image" :alt="featured.title"
                                class="w-full h-full object-cover shadow-lg transition-transform duration-700" />
                        </a>
                    </div>
                </div>

                <h3 class="text-xs font-bold uppercase tracking-widest mb-1">
                    {{ featured.title }}
                </h3>
                <p class="text-[10px] text-gray-500 uppercase tracking-wider mb-3">
                    {{ featured.subtitle }}
                </p>

                <div class="flex items-center gap-3 md:w-2/5">
                    <div @click="toggleSelection(featured.id)"
                        class="w-9 h-9 border border-[#333] flex items-center justify-center cursor-pointer transition-colors duration-200 flex-shrink-0"
                        :class="isSelected(featured.id) ? 'bg-[#333]' : 'bg-transparent hover:bg-gray-200'">
                        <svg v-if="isSelected(featured.id)" xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                        </svg>
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
                    <h4 class="text-xs font-bold uppercase tracking-widest mb-1">{{ item.title }}</h4>
                    <p class="text-[10px] text-gray-500 uppercase tracking-wider mb-3">{{ item.subtitle }}</p>
                    <div class="flex items-center gap-2 md:w-2/3 mt-auto px-2">
                        <div @click="toggleSelection(item.id)"
                            class="w-9 h-9 border border-[#333] flex items-center justify-center cursor-pointer transition-colors duration-200 flex-shrink-0"
                            :class="isSelected(item.id) ? 'bg-[#333]' : 'bg-transparent hover:bg-gray-200'">
                            <svg v-if="isSelected(item.id)" xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <a :href="`/catalogues-and-ebooks/thumbnails/${item.slug}/thumbnail.png`"
                            :class="[btnClass, 'py-2.5']">
                            <span class="text-[7px] md:text-[9px]">Download now</span>
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
            <p class="text-[10px] text-gray-500 uppercase tracking-wider mb-3">{{ item.subtitle }}</p>
            <div class="flex items-center gap-2 md:w-2/3 mt-auto px-2">
                <div @click="toggleSelection(item.id)"
                    class="w-9 h-9 border border-[#333] flex items-center justify-center cursor-pointer transition-colors duration-200 flex-shrink-0"
                    :class="isSelected(item.id) ? 'bg-[#333]' : 'bg-transparent hover:bg-gray-200'">
                    <svg v-if="isSelected(item.id)" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <a :href="`/catalogues-and-ebooks/thumbnails/${item.slug}/thumbnail.png`" :class="[btnClass, 'py-2.5']">
                    <span class="text-[7px] md:text-[9px]">Download now</span>
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
