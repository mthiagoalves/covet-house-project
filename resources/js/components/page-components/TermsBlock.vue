<script setup lang="ts">
import { ref } from 'vue';
import { FileText, ChevronDown, ChevronUp } from 'lucide-vue-next';

// 1. Defina a interface para um item de termo
interface TermItem {
    title: string;
    content: string;
}

// 2. Defina a prop para receber a lista
defineProps<{
    terms: TermItem[];
}>();

// Lógica do Acordeão (permanece igual)
const openIndex = ref<number | null>(null);
const toggle = (index: number) => {
    openIndex.value = openIndex.value === index ? null : index;
};
</script>

<template>
    <div class="w-full bg-white px-4 text-black mb-8" id="terms-and-conditions">
        <div class="max-w-7xl mx-auto">

            <div class="text-center mb-16">
                <p class="text-px text-gray-500 uppercase tracking-widest mb-1">OR CONTACT US DIRECTLY</p>
                <a href="mailto:customerservice@covethouse.eu"
                    class="block text-sm font-medium hover:text-[#bca479] transition-colors">customerservice@covethouse.eu</a>
                <a href="tel:+351911780428"
                    class="block text-sm font-medium hover:text-[#bca479] transition-colors mt-1">+351 911 780 428</a>
            </div>

            <div class="text-center mb-10">
                <div class="flex justify-center mb-4">
                    <FileText :stroke-width="1" class="w-12 h-12 text-black" />
                </div>
                <h2 class="text-xl md:text-2xl uppercase tracking-[0.2em] mb-4">
                    <span class="font-bold">TERMS AND CONDITIONS</span> <span class="font-light">COVET HOUSE</span>
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

            <div class="border-t border-gray-200 mb-10">
                <div v-for="(term, index) in terms" :key="index" class="border-b border-gray-200">

                    <button @click="toggle(index)"
                        class="w-full flex items-center py-2 text-left focus:outline-none group hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="mr-4 text-gray-500 group-hover:text-[#bca479] transition-colors">
                            <ChevronDown :stroke-width="1" class="w-6 h-6 transition-transform duration-300"
                                :class="openIndex === index ? 'rotate-180' : 'rotate-0'" />
                        </div>

                        <span
                            class="text-xs md:text-xs font-bold tracking-widest uppercase text-gray-500 group-hover:text-[#bca479] transition-colors">
                            {{ term.title }}
                        </span>
                    </button>

                    <div class="grid transition-[grid-template-rows,opacity] duration-500 ease-in-out"
                        :class="openIndex === index ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                        <div class="overflow-hidden">
                            <div class="pt-2 pb-6 px-8 text-md text-gray-500 leading-relaxed space-y-2"
                                v-html="term.content"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="text-center">
                <a href="/docs/pdfs/terms-and-conditions-covet-house.pdf" target="_blank" rel="noopener noreferrer"
                    class="inline-block bg-black text-white text-xs font-light py-2 px-10 tracking-widest hover:bg-gray-900 transition-colors uppercase cursor-pointer">
                    DOWNLOAD TERMS AND CONDITIONS
                </a>
            </div>

        </div>
    </div>
</template>
