<script setup lang="ts">
import { ref, computed } from 'vue';
import { ChevronDown, ShieldCheck } from 'lucide-vue-next';
import FaqBlock from '@/components/page-components/FaqBlock.vue';

// Definição de tipos para os dados
interface FaqItem {
    title: string;
    content: string;
}

// Props que o componente espera receber
const props = defineProps<{
    accordionData: Record<string, FaqItem[]>; // Um objeto onde a chave é uma string e o valor é uma lista de FAQs
    googleContent: string; // O conteúdo HTML para a aba Google
}>();

// As abas continuam aqui pois fazem parte da estrutura do componente
const tabs = [
    { id: 'data_privacy', label: 'DATA PRIVACY' },
    { id: 'cookies', label: 'COOKIES' },
    { id: 'third_party', label: 'THIRD-PARTY' },
    { id: 'google', label: 'GOOGLE' },
];

const activeTab = ref('data_privacy');

// Computada atualizada para usar 'props.accordionData'
const currentAccordionData = computed(() => {
    return props.accordionData[activeTab.value] || [];
});

const openIndex = ref<number | null>(null);
const toggle = (index: number) => {
    openIndex.value = openIndex.value === index ? null : index;
};
</script>

<template>
    <div class="w-full bg-white pt-16 pb-8 px-4 text-black border-t border-gray-100" id="privacy-policy">
        <div class="max-w-7xl mx-auto text-center">

            <div class="mb-12">
                <div class="flex justify-center mb-4">
                    <ShieldCheck :stroke-width="1" class="w-10 h-10 text-black" />
                </div>
                <h2 class="text-xl md:text-2xl uppercase tracking-[0.2em] mb-4">
                    <span class="font-bold">PRIVACY</span> <span class="font-light">POLICY</span>
                </h2>
                <div class="w-18 h-px bg-[#bca479] mx-auto mb-6"></div>
                <p class="text-md text-gray-600 leading-relaxed mx-auto">
                    Terms and Conditions are subject to change at any time, without prior notice. These Conditions can
                    be saved electronically or printed by all users of our Website. <br> These Conditions will apply to
                    all
                    transactions carried out by placing an order via our Website or Email from COVET HOUSE’s Sales
                    Representative, it is implied that you accept our terms and conditions as listed below: <br>
                    Updated version 10/01/2025
                </p>
            </div>

            <div
                class="flex flex-wrap justify-center gap-6 md:gap-10 text-[10px] md:text-xs mb-2 font-bold tracking-widest uppercase pb-4 mx-auto max-w-3xl">
                <button v-for="tab in tabs" :key="tab.id" @click="activeTab = tab.id"
                    class="transition-colors duration-300 pb-1 relative cursor-pointer"
                    :class="activeTab === tab.id ? 'text-black' : 'text-gray-400 hover:text-gray-600'">
                    {{ tab.label }}
                    <span v-if="activeTab === tab.id"
                        class="absolute bottom-[-17px] left-0 right-0 h-[2px] bg-[#bca479]"></span>
                </button>
            </div>

            <div class="text-left mx-auto">

                <div v-if="activeTab === 'google'" class="text-md text-gray-500 leading-relaxed animate-fade-in px-4">
                    <div v-html="googleContent"></div>
                </div>

                <div v-else class="animate-fade-in">
                    <div class="border-t border-gray-200">
                        <div v-for="(accordionData, index) in currentAccordionData" :key="index"
                            class="border-b border-gray-200">

                            <button @click="toggle(index)"
                                class="w-full flex items-center py-2 text-left focus:outline-none group hover:bg-gray-50 transition-colors cursor-pointer">
                                <div class="mr-4 text-gray-500 group-hover:text-[#bca479] transition-colors">
                                    <ChevronDown :stroke-width="1" class="w-6 h-6 transition-transform duration-300"
                                        :class="openIndex === index ? 'rotate-180' : 'rotate-0'" />
                                </div>

                                <span
                                    class="text-xs md:text-xs font-bold tracking-widest uppercase text-gray-500 group-hover:text-[#bca479] transition-colors">
                                    {{ accordionData.title }}
                                </span>
                            </button>

                            <div class="grid transition-[grid-template-rows,opacity] duration-500 ease-in-out"
                                :class="openIndex === index ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                                <div class="overflow-hidden">
                                    <div class="pt-2 pb-6 px-8 text-md text-gray-500 leading-relaxed space-y-2"
                                        v-html="accordionData.content"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-10">
                <h3 class="text-md font-bold uppercase tracking-widest text-gray-500 mb-8">
                    PLEASE, TAKE A MINUTE TO UPDATE YOUR SUBSCRIPTION PREFERENCES
                </h3>

                <div class="space-y-6 text-[10px] md:text-xs text-black uppercase tracking-wider">
                    <p>DO YOU WANT TO UNSUSBKCRIBE FROM OUR EMAIL LIST?</p>
                    <div class="space-y-2 text-gray-600 max-w-7xl mx-auto leading-relaxed normal-case">
                        <p>Well, we’re really sorry to see you leave...</p>
                        <p>As you may know, Covet House represents more than 11 furniture brands and our main goal is to
                            help you to guide you through a thousand products.</p>
                        <p>Please bear in mind that Covet House is only responsible for its own email marketing
                            campaigns, and any type of newsletter or email from our partner brands it’s not our
                            responsibility.</p>
                        <p>Thank you and we hope that you can find the inspiration you need for all your projects!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.animate-fade-in {
    animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(5px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
