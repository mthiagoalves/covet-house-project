<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { countries } from '@/data/countries';
import { industries } from '@/data/industries'; // Reutilizando a lista de indústrias

// Dados dos Links de Topo
const serviceLinks = [
    {
        title: 'TERMS AND CONDITIONS',
        href: '/terms-and-conditions',
        icon: 'terms'
    },
    {
        title: "FAQ'S",
        href: '/faqs',
        icon: 'faq'
    },
    {
        title: 'PRIVACY POLICY',
        href: '/privacy-policy',
        icon: 'privacy'
    }
];

// Lógica do Formulário
const form = useForm({
    profile_type: 'professional',
    first_name: '',
    last_name: '',
    email: '',
    industry: '',
    company: '',
    phone: '',
    message: ''
});

const submit = () => {
    console.log('Customer Service form submitted', form.data);
    // form.post('/customer-service-submit');
};

// Estilo dos inputs (Borda cinza, fundo branco, texto pequeno)
const inputClass = "w-full bg-white border border-gray-300 py-3 px-4 text-gray-700 placeholder-gray-400 text-xs tracking-wider focus:ring-1 focus:ring-black focus:border-black transition-colors";
</script>

<template>

    <Head title="Customer Service" />

    <div class="w-full min-h-screen bg-white pt-[72px] md:pt-[108px]">

        <div class="w-full bg-[#f9f9f9] py-16 px-4">
            <div class="max-w-7xl mx-auto text-center">

                <h1 class="text-2xl md:text-3xl uppercase tracking-widest mb-16">
                    <span class="font-bold">CUSTOMER</span> <span class="font-light">SERVICE</span>
                </h1>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-4xl mx-auto">
                    <Link v-for="link in serviceLinks" :key="link.title" :href="link.href"
                        class="flex flex-col items-center group">
                    <div class="mb-6 transition-transform duration-300 group-hover:scale-110">
                        <svg v-if="link.icon === 'terms'" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-black">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 16.5 2.25 2.25L15.75 12.75" />
                        </svg>

                        <svg v-else-if="link.icon === 'faq'" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-black">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            <text x="12" y="10" font-size="8" text-anchor="middle" fill="currentColor"
                                font-weight="bold" dy=".3em">?</text>
                        </svg>

                        <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-black">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            <circle cx="12" cy="12" r="9" stroke-width="1.5" />
                        </svg>
                    </div>

                    <h3
                        class="text-xs font-bold tracking-widest uppercase text-gray-800 group-hover:text-black transition-colors">
                        {{ link.title }}
                    </h3>
                    </Link>
                </div>

            </div>
        </div>

        <div class="w-full bg-white py-16 px-4">
            <div class="max-w-4xl mx-auto text-center">

                <h2 class="text-lg font-bold tracking-[0.2em] uppercase mb-6 text-black relative inline-block">
                    SEND US A MESSAGE
                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 w-24 h-px bg-gray-200"></div>
                </h2>

                <p class="text-sm text-gray-500 leading-relaxed mb-10 max-w-2xl mx-auto">
                    If you have questions or need any general information<br>
                    our customer service team will be happy to assist you.
                </p>

                <form @submit.prevent="submit" class="max-w-3xl mx-auto text-left space-y-4">

                    <div class="mb-6">
                        <p class="text-[10px] text-gray-400 mb-2 uppercase tracking-wider">SELECT YOUR PROFILE:</p>
                        <div class="flex gap-6 text-[10px] font-bold tracking-widest uppercase">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" v-model="form.profile_type" value="professional"
                                    class="text-black focus:ring-black border-gray-300">
                                PROFESSIONAL
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" v-model="form.profile_type" value="private"
                                    class="text-black focus:ring-black border-gray-300">
                                PRIVATE CLIENT
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" v-model="form.first_name" placeholder="FIRST NAME*" :class="inputClass"
                            required>
                        <input type="text" v-model="form.last_name" placeholder="LAST NAME*" :class="inputClass"
                            required>
                    </div>

                    <input type="email" v-model="form.email" placeholder="EMAIL*" :class="inputClass" required>

                    <template v-if="form.profile_type === 'professional'">
                        <select v-model="form.industry"
                            :class="[inputClass, form.industry === '' ? 'text-gray-400' : 'text-gray-700']">
                            <option value="" disabled selected>SELECT INDUSTRY</option>
                            <option v-for="ind in industries" :key="ind" :value="ind">{{ ind }}</option>
                        </select>
                        <input type="text" v-model="form.company" placeholder="COMPANY*" :class="inputClass" required>
                    </template>

                    <template v-else>
                        <input type="tel" v-model="form.phone" placeholder="PHONE*" :class="inputClass">
                    </template>

                    <textarea v-model="form.message" rows="6" placeholder="MESSAGE" :class="inputClass"></textarea>

                    <div class="pt-4 text-right">
                        <button type="submit"
                            class="bg-black text-white text-[10px] font-bold py-3 px-10 tracking-widest hover:bg-gray-800 transition-colors uppercase"
                            :disabled="form.processing">
                            SEND MESSAGE
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</template>
