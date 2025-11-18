<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import { countries } from '@/data/countries';
import CategorySlider from '@/components/page-components/CategorySlider.vue';

const form = useForm({
    profile_type: 'professional', // professional | private
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    occupation: '',
    company: '',
    country: '',
    city: '',
    hear_about: '',
    message: '',
    book_meeting: false,
    newsletter: false,
});

const submit = () => {
    console.log('Contact form submitted', form.data);
    // form.post('/contact-submit');
};

const inputClass = "w-full bg-[#f4f4f4] border-0 py-2 px-4 text-gray-700 placeholder-gray-500 text-xs tracking-wider focus:ring-1 focus:ring-black focus:bg-white transition-colors";
</script>

<template>

    <Head title="Contact Us" />

    <div class="w-full bg-white">

        <div class="grid grid-cols-1 lg:grid-cols-2">

            <div class="relative h-96 lg:h-auto min-h-full">
                <img src="/images/contact/ambience-contact.png"
                    class="absolute inset-0 w-full h-full object-cover object-bottom" alt="Contact Us Covet House" />
            </div>

            <div class="p-8 bg-white text-black">
                <div class="mx-auto">

                    <h1 class="text-2xl font-semibold tracking-widest uppercase mb-2">SEND US A MESSAGE</h1>
                    <p class="text-xs text-gray-500 mb-4 uppercase tracking-wide">
                        Please provide your contact information below, along with any questions you may have...
                    </p>

                    <form @submit.prevent="submit" class="space-y-2">

                        <div class="mb-2">
                            <p class="text-xs text-gray-400 mb-2 uppercase">Select Your Profile:</p>
                            <div class="flex gap-6 text-xs font-bold">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" v-model="form.profile_type" value="professional"
                                        class="text-black focus:ring-black">
                                    PROFESSIONAL
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" v-model="form.profile_type" value="private"
                                        class="text-black focus:ring-black">
                                    PRIVATE CLIENT
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <input type="text" v-model="form.first_name" placeholder="FIRST NAME*" :class="inputClass"
                                required>
                            <input type="text" v-model="form.last_name" placeholder="LAST NAME*" :class="inputClass"
                                required>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <input type="email" v-model="form.email" placeholder="EMAIL*" :class="inputClass" required>
                            <input type="tel" v-model="form.phone" placeholder="PHONE*" :class="inputClass" required>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <input type="text" v-model="form.occupation" placeholder="OCCUPATION*" :class="inputClass">
                            <input type="text" v-model="form.company" placeholder="COMPANY*" :class="inputClass">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <select v-model="form.country"
                                :class="[inputClass, form.country === '' ? 'text-gray-500' : 'text-gray-700']">
                                <option value="" disabled selected>SELECT YOUR COUNTRY</option>
                                <option v-for="c in countries" :key="c.code" :value="c.name">{{ c.name }}</option>
                            </select>
                            <input type="text" v-model="form.city" placeholder="CITY*" :class="inputClass">
                        </div>

                        <input type="text" v-model="form.hear_about" placeholder="HOW DID YOU HEAR ABOUT US?*"
                            :class="inputClass">

                        <textarea v-model="form.message" rows="4" placeholder="MESSAGE" :class="inputClass"></textarea>

                        <div class="space-y-2">
                            <label
                                class="flex items-center gap-2 text-[10px] text-gray-500 uppercase tracking-wide cursor-pointer">
                                <input type="checkbox" v-model="form.book_meeting"
                                    class="text-black focus:ring-black border-gray-300">
                                BOOK A MEETING WITH OUR TEAM
                            </label>
                            <label
                                class="flex items-center gap-2 text-[10px] text-gray-500 uppercase tracking-wide cursor-pointer">
                                <input type="checkbox" v-model="form.newsletter"
                                    class="text-black focus:ring-black border-gray-300">
                                JOIN OUR NEWSLETTER
                            </label>
                        </div>

                        <div class="pt-4">
                            <button type="submit"
                                class="bg-black text-white text-xs font-bold py-4 px-10 tracking-widest hover:bg-gray-800 transition-colors uppercase cursor-pointer"
                                :disabled="form.processing">
                                CONTACT US
                            </button>
                        </div>

                    </form>

                    <div class="mt-4 border-t border-gray-200 pt-2">
                        <h3 class="text-lg font-semibold uppercase tracking-widest mb-2">GET IN TOUCH</h3>
                        <p class="text-xs text-gray-500 uppercase tracking-wide leading-relaxed">
                            R. DA PORTELINHA 136, 4435-571 FÂNZERES<br>
                            INFO@COVETHOUSE.EU<br>
                            +351 911 780 428
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <CategorySlider class="mt-1" />

</template>
