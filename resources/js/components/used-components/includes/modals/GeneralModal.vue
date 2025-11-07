<script setup lang="ts">
import { useForm, Link } from '@inertiajs/vue3';
import { watch } from 'vue';
import { useGeneralModal } from '@/composables/useGeneralModal';
import { countries } from '@/data/countries'; // Reutilizando sua lista de países

// 1. Pega os dados e a função 'close' do nosso "cérebro"
const { data, close } = useGeneralModal();

// 2. Lógica do formulário (adaptada da sua imagem)
const form = useForm({
    profile_type: 'professional',
    first_name: '',
    last_name: '',
    email: data.value.email || '',
    phone: '',
    company: '',
    country: '',
    terms_accepted: false,
    interest_in: data.value.title + ' Pack' || '',
    slug: data.value.slug || '',
    page: data.value.page || '',
    pagePosition: data.value.pagePosition || '',
    formType: data.value.formType || '',
    btnName: data.value.btnName || 'REQUEST PRICE'
});

watch(() => form.profile_type, (newProfile) => {
    if (newProfile === 'professional') {
        form.reset('phone');
    } else if (newProfile === 'private_client') {
        form.reset('company');
    }
});

const submit = () => {
    form.post('/request-price', {
        onSuccess: () => {
            close();
            form.reset();
        }
    });
};

const inputClass = "w-full bg-white border border-gray-300 text-[10px] py-1.5 px-3 text-black placeholder-gray-500 focus:outline-none focus:border-black focus:ring-0";
</script>

<template>
    <transition enter-active-class="transition-opacity duration-300 ease-out" enter-from-class="opacity-0"
        enter-to-class="opacity-100" leave-active-class="transition-opacity duration-200 ease-in"
        leave-from-class="opacity-100" leave-to-class="opacity-0">
        <div class="fixed inset-0 z-50 bg-black/60 flex items-center justify-center p-4" @click.self="close">
            <transition enter-active-class="transition-all duration-300 ease-out"
                enter-from-class="opacity-0 -translate-y-10" enter-to-class="opacity-100 translate-y-0"
                leave-active-class="transition-all duration-200 ease-in" leave-from-class="opacity-100 translate-y-0"
                leave-to-class="opacity-0 -translate-y-10">
                <div class="relative w-full max-w-2xl bg-white text-black shadow-xl py-4 px-6 text-center">
                    <button @click="close"
                        class="absolute top-1 right-4 text-3xl text-gray-400 hover:text-black cursor-pointer"
                        aria-label="Fechar modal">
                        &times;
                    </button>

                    <h2 class="text-[20px] mt-4 md:mt-0 font-bold uppercase">{{ data.title }}</h2>
                    <p class="md:text-sm text-[11px] text-gray-600 mb-6">Please fill the following form to receive your request</p>

                    <form @submit.prevent="submit" class="space-y-4 text-start">
                        <p class="text-[10px] text-gray-600 mb-1">SELECT YOUR PROFILE:</p>
                        <div class="flex gap-6 mb-4 text-sm">

                            <label class="flex items-center gap-2 cursor-pointer text-[10px]">
                                <input type="radio" v-model="form.profile_type" value="professional"
                                    class="form-radio text-black focus:ring-black">
                                PROFESSIONAL
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer text-[10px]">
                                <input type="radio" v-model="form.profile_type" value="private_client"
                                    class="form-radio text-black focus:ring-black">
                                PRIVATE CLIENT
                            </label>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" v-model="form.first_name" placeholder="FIRST NAME*" :class="inputClass"
                                required>
                            <input type="text" v-model="form.last_name" placeholder="LAST NAME*" :class="inputClass"
                                required>
                        </div>

                        <input type="email" v-model="form.email" placeholder="EMAIL*" :class="inputClass" required>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="tel" v-model="form.phone" placeholder="PHONE*" :class="inputClass" required>
                            <select v-model="form.country" :class="inputClass" required>
                                <option value="" disabled>SELECT YOUR COUNTRY*</option>
                                <option v-for="c in countries" :key="c.code" :value="c.name">{{ c.name }}</option>
                            </select>
                        </div>

                        <div v-if="form.profile_type === 'professional'">
                            <input type="text" v-model="form.company" placeholder="COMPANY*" :class="inputClass"
                                required>
                        </div>
                        <div class="flex md:flex-row flex-col items-start justify-between">
                            <input type="checkbox" v-model="form.terms_accepted" id="modal_terms"
                                class="form-checkbox mt-1 hidden" checked required>
                            <label for="modal_terms" class="text-[9px] text-gray-500">
                                BY CLICKING REQUEST YOU CONFIRM THAT YOU HAVE <br class="hidden md:block">
                                READ AND ACCEPTED OUR
                                <Link href="/privacy-policy" class="text-[#bca479]">PRIVACY POLICY.</Link>
                            </label>
                            <div class="md:text-right mt-2 md:mt-0 ml-auto md:ml-0">
                                <button type="submit" :disabled="form.processing"
                                    class="bg-black text-[11px] text-white py-1.5 px-10 font-light tracking-wider hover:bg-gray-800">
                                    {{ data.btnName }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </transition>
        </div>
    </transition>
</template>
