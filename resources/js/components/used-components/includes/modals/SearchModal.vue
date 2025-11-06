<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { useSearchModal } from '@/composables/useSearchModal';
import { onMounted, ref } from 'vue';

// Pega a função 'close' do nosso "cérebro"
const { close } = useSearchModal();

// Cria um formulário do Inertia para a busca
const form = useForm({
    query: '',
});

const submitSearch = () => {
    // Por hora, apenas fechamos e logamos.
    // No futuro, você usaria:
    // form.get(route('products.search'), {
    //     onSuccess: () => close()
    // });
    console.log('Buscando por:', form.query);
    close();
};

// Lógica para auto-focar o input quando o modal abrir
const searchInput = ref<HTMLInputElement | null>(null);
onMounted(() => {
    searchInput.value?.focus();
});
</script>

<template>
    <transition
        enter-active-class="transition-opacity duration-300 ease-out"
        enter-from-class="opacity-0"
        enter-to-class="opacity-100"
        leave-active-class="transition-opacity duration-200 ease-in"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0"
    >
        <div
            class="fixed inset-0 z-50 bg-black/70 flex items-center justify-center p-4"
            @click.self="close" >
            <button
                @click="close"
                class="absolute top-6 right-6 text-4xl text-gray-300 hover:text-white transition-colors cursor-pointer"
                aria-label="Close search"
            >
                &times;
            </button>

            <transition
                enter-active-class="transition-all duration-300 ease-out"
                enter-from-class="opacity-0 -translate-y-4"
                enter-to-class="opacity-100 translate-y-0"
                leave-active-class="transition-all duration-200 ease-in"
                leave-from-class="opacity-100 translate-y-0"
                leave-to-class="opacity-0 -translate-y-4"
            >
                <form @submit.prevent="submitSearch" class="w-full max-w-2xl">
                    <div class="relative flex items-center">
                        <input
                            ref="searchInput"
                            type="text"
                            v-model="form.query"
                            placeholder="Search..."
                            class="w-full text-xl py-4 pl-6 pr-20 bg-white border-0 shadow-lg text-black placeholder-gray-500 focus:ring-0 rounded-none"
                        >
                        <button
                            type="submit"
                            class="absolute right-0 top-0 h-full w-16 bg-black text-white flex items-center justify-center hover:bg-gray-800 transition-colors"
                            aria-label="Submit search"
                            :disabled="form.processing"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </transition>
        </div>
    </transition>
</template>
