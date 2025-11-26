<script setup lang="ts">
import { ref } from 'vue';
import { MessageCircleQuestion, ChevronDown } from 'lucide-vue-next'; // Ícone de FAQ

interface FaqItem {
    title: string;
    content: string;
}

defineProps<{
    faqs: FaqItem[];
}>();

const openIndex = ref<number | null>(null);
const toggle = (index: number) => {
    openIndex.value = openIndex.value === index ? null : index;
};
</script>

<template>
    <div class="w-full bg-[#f9f9f9] py-16 px-4 text-black" id="faqs">
        <div class="max-w-7xl mx-auto">

            <div class="text-center mb-12">
                <div class="flex justify-center mb-4">
                    <MessageCircleQuestion :stroke-width="1" class="w-12 h-12 text-black" />
                </div>
                <h2 class="text-xl md:text-2xl uppercase tracking-[0.2em] mb-4">
                    FAQS
                </h2>

                <div class="w-18 h-px bg-[#bca479] mx-auto mb-6"></div>
            </div>

            <div class="border-t border-gray-200">
                <div v-for="(faq, index) in faqs" :key="index" class="border-b border-gray-200">

                    <button @click="toggle(index)"
                        class="w-full flex items-center py-4 px-4 text-left focus:outline-none group transition-colors cursor-pointer"
                        :class="openIndex === index ? 'bg-gray-100 shadow-sm' : 'hover:bg-gray-100'">
                        <div class="mr-4 text-gray-400 group-hover:text-[#bca479] transition-colors">
                            <ChevronDown :stroke-width="1" class="w-4 h-4 transition-transform duration-300"
                                :class="openIndex === index ? 'rotate-180' : 'rotate-0'" />
                        </div>

                        <span
                            class="text-xs md:text-xs  font-bold tracking-widest uppercase text-gray-600 group-hover:text-[#bca479] transition-colors">
                            {{ faq.title }}
                        </span>
                    </button>

                    <div class="grid transition-[grid-template-rows,opacity] duration-500 ease-in-out"
                        :class="openIndex === index ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                        <div class="overflow-hidden">
                            <div class="pt-2 pb-6 px-8 text-md text-gray-500 leading-relaxed space-y-2" v-html="faq.content">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</template>
