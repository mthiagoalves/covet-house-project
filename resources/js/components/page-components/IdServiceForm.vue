<script setup lang="ts">
import { Link, useForm } from '@inertiajs/vue3';
import { countries } from '@/data/countries'; // Certifique-se que este arquivo existe
import { industries } from '@/data/industries';

const form = useForm({
    profile_type: 'professional',
    first_name: '',
    last_name: '',
    email: '',
    country: '',
    phone: '',
    company: '',
    industry: '',
    website: '',
});

const submit = () => {
    console.log('Visit Request:', form.data);
    // form.post('/visit-request');
};

const inputClass = "w-full bg-transparent border border-gray-200 py-2 px-4 text-xs placeholder-white tracking-wider text-white placeholder-gray-500 focus:ring-1 focus:ring-black focus:border-black transition-colors uppercase";
</script>

<template>
    <div class="w-full flex flex-col md:flex-row min-h-[600px] md:h-[calc(100svh-200px)]">

        <div class="w-full md:w-1/2 relative group overflow-hidden">
            <Link href="/interior-design-service">
                <img src="/images/interior-design-service/backformright-id-service-form-new.jpg"
                    alt=" DESIGN A LUXURY ROOM OR AN ENTIRE HOUSE WITH US!"
                    class="absolute inset-0 w-full h-full object-cover" />
            </Link>
        </div>

        <div class="w-full md:w-1/2 bg-black text-white p-8 md:p-16 flex flex-col justify-center">

            <h2 class="text-2xl md:text-lg font-light tracking-[0.1em] uppercase mb-1">
                DESIGN A LUXURY ROOM OR AN ENTIRE HOUSE WITH US!
            </h2>
            <p class="text-xs font-bold tracking-widest uppercase mb-8 text-gray-200">
                AN INTERIOR DESIGN SERVICE SPECIALLY TAILORED FOR YOU
            </p>
            <form @submit.prevent="submit" class="space-y-4 w-full">

                <div class="mb-4">
                    <p class="text-[9px] text-gray-500 mb-2 uppercase tracking-wider">SELECT YOUR PROFILE:</p>
                    <div class="flex gap-6 text-[10px] font-bold tracking-widest uppercase">
                        <label class="flex items-center gap-2 cursor-pointer hover:text-gray-300 transition-colors">
                            <input type="radio" v-model="form.profile_type" value="professional"
                                class="text-white bg-transparent focus:ring-white border-white accent-white">
                            PROFESSIONAL
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer hover:text-gray-300 transition-colors">
                            <input type="radio" v-model="form.profile_type" value="private"
                                class="text-white bg-transparent focus:ring-white border-white accent-white">
                            PRIVATE CLIENT
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" v-model="form.first_name" placeholder="FIRST NAME*" :class="inputClass" required>
                    <input type="text" v-model="form.last_name" placeholder="LAST NAME*" :class="inputClass" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="email" v-model="form.email" placeholder="EMAIL*" :class="inputClass" required>
                    <input type="tel" v-model="form.phone" placeholder="PHONE*" :class="inputClass" required>
                </div>

                <div>
                    <select v-model="form.country"
                        :class="[inputClass, form.country === '' ? 'text-gray-500' : 'text-black']" required>
                        <option value="" disabled selected>COUNTRY*</option>
                        <option v-for="c in countries" :key="c.code" :value="c.code" class="text-black">{{ c.name }}
                        </option>
                    </select>
                </div>

                <template v-if="form.profile_type === 'professional'">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 animate-fade-in">
                        <input type="text" v-model="form.company" placeholder="COMPANY*" :class="inputClass" required>

                        <select v-model="form.industry"
                            :class="[inputClass, form.industry === '' ? 'text-gray-500' : 'text-black']" required>
                            <option value="" disabled selected>SELECT INDUSTRY*</option>
                            <option v-for="ind in industries" :key="ind" :value="ind" class="text-black">{{ ind }}
                            </option>
                        </select>
                    </div>
                    <div class="animate-fade-in">
                        <input type="text" v-model="form.website" placeholder="WEBSITE*" :class="inputClass" required>
                    </div>
                </template>

                <div class="flex items-start justify-between gap-2"><label for="terms" class="text-[10px]"> BY CLICKING
                        REQUEST YOU CONFIRM THAT YOU HAVE <br class="hidden md:block"> READ AND ACCEPTED OUR <a
                            class="text-[#bca479]" href="">PRIVACY POLICY.</a></label><button type="submit"
                        class="bg-white text-black py-2 px-10 text-[10px] font-semibold tracking-wider hover:bg-gray-200 transition-colors disabled:opacity-50 cursor-pointer">
                        {{ form.processing ? 'SENDING...' : 'CONTACT US' }}
                    </button></div>

            </form>
        </div>

    </div>
</template>
