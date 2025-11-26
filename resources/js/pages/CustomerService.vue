<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { countries } from '@/data/countries';
import { industries } from '@/data/industries';
import { FileText, MessageCircleQuestionIcon, ShieldCheck } from 'lucide-vue-next';


// Dados dos Links de Topo
const serviceLinks = [
    {
        title: 'TERMS AND CONDITIONS',
        href: '#terms-and-conditions',
        icon: FileText
    },
    {
        title: "FAQ'S",
        href: '#faqs',
        icon: MessageCircleQuestionIcon
    },
    {
        title: 'PRIVACY POLICY',
        href: '#privacy-policy',
        icon: ShieldCheck
    }
];

// Lógica do Formulário
const form = useForm({
    profile_type: 'professional',
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    country: '',
    industry: '',
    company: '',
    website: '',
    message: ''
});

const submit = () => {
    console.log('Customer Service form submitted', form.data);
    // form.post('/customer-service-submit');
};

// Estilo dos inputs (Borda cinza, fundo branco, texto pequeno)
const inputClass = "w-full bg-white border border-gray-300 py-2 px-2 text-gray-700 placeholder-gray-400 text-xs tracking-wider focus:ring-1 focus:ring-black focus:border-black transition-colors";
</script>

<template>

    <Head title="Customer Service" />

    <div class="w-full bg-white">
        <div class="flex items-center justify-center gap-6 py-8 w-full max-w-7xl mx-auto bg-white">
            <h1 class="text-2xl md:text-[26px] uppercase tracking-wider">
                <span class="font-bold">CUSTOMER</span> <span class="font-light">SERVICE</span>
            </h1>
        </div>
        <div class="w-full bg-[#f9f9f9] px-4 py-16">
            <div class="max-w-7xl mx-auto text-center">



                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-4xl mx-auto">
                    <Link v-for="link in serviceLinks" :key="link.title" :href="link.href"
                        class="flex flex-col items-center group">
                    <div class="mb-6 transition-transform duration-300 group-hover:scale-110">
                        <component :is="link.icon" :stroke-width="1" class="w-16 h-16 text-black" />
                    </div>

                    <h3
                        class="text-sm font-bold tracking-widest uppercase text-gray-800 group-hover:text-black transition-colors">
                        {{ link.title }}
                    </h3>
                    </Link>
                </div>

            </div>
        </div>

        <div class="w-full bg-white py-8 px-4">
            <div class="max-w-7xl mx-auto text-center">
                <div class="flex items-center justify-center gap-6 pb-8  bg-white">
                    <div class="h-px bg-gray-300 flex-grow max-w-full"></div>
                    <h2 class="text-lg font-bold tracking-[0.2em] uppercase text-black relative inline-block">
                        SEND US A MESSAGE
                    </h2>
                    <div class="h-px bg-gray-300 flex-grow max-w-full"></div>
                </div>
                <p class="text-md text-gray-500 leading-relaxed mb-6 max-w-2xl mx-auto">
                    If you have questions or need any general information <br class="hidden md:block"> our customer
                    service team will be happy
                    to assist you.
                </p>

                <form @submit.prevent="submit" class="max-w-full mx-auto text-left space-y-1">

                    <div class="mb-2">
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

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                        <input type="text" v-model="form.first_name" placeholder="FIRST NAME*" :class="inputClass"
                            required>
                        <input type="text" v-model="form.last_name" placeholder="LAST NAME*" :class="inputClass"
                            required>
                    </div>

                    <input type="email" v-model="form.email" placeholder="EMAIL*" :class="inputClass" required>

                    <input type="tel" v-model="form.phone" placeholder="PHONE*" :class="inputClass">

                    <select v-model="form.country"
                        :class="[inputClass, form.country === '' ? 'text-gray-400' : 'text-gray-700']">
                        <option value="" disabled selected>SELECT YOUR COUNTRY</option>
                        <option v-for="country in countries" :key="country.code" :value="country.code">{{ country.name
                        }}</option>
                    </select>

                    <template v-if="form.profile_type === 'professional'">
                        <select v-model="form.industry"
                            :class="[inputClass, form.industry === '' ? 'text-gray-400' : 'text-gray-700']">
                            <option value="" disabled selected>SELECT INDUSTRY</option>
                            <option v-for="ind in industries" :key="ind" :value="ind">{{ ind }}</option>
                        </select>
                        <input type="text" v-model="form.company" placeholder="COMPANY*" :class="inputClass" required>
                        <input type="text" v-model="form.website" placeholder="WEBSITE" :class="inputClass">
                    </template>

                    <textarea v-model="form.message" rows="6" placeholder="MESSAGE" :class="inputClass"></textarea>

                    <div class="flex justify-between">
                        <div class="text-[9px] text-grey-500 text-left leading-tight"> BY CLICKING REQUEST YOU CONFIRM
                            THAT YOU HAVE <br>
                            READ AND ACCEPTED OUR <a href="#" class="text-[#bca479]">PRIVACY POLICY</a>. </div>
                        <button type="submit"
                            class="bg-black text-white text-[10px] font-bold py-2 px-18 tracking-widest hover:bg-gray-800 transition-colors uppercase"
                            :disabled="form.processing">
                            CONTACT US
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</template>
