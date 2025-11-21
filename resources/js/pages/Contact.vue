<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { countries } from '@/data/countries';
import { hearAboutOptions } from '@/data/hearAboutOptions';
import CategorySlider from '@/components/page-components/CategorySlider.vue';
import BestSellersProducts from '@/components/page-components/BestSellersProducts.vue';

defineProps<{
    relatedProducts: any[];
}>();

const form = useForm({
    profile_type: 'professional',
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

const inputClass = "w-full bg-[#f4f4f4] border py-2 px-4 text-gray-700 placeholder-gray-500 text-xs tracking-wider transition-colors";

const showrooms = [
    {
        title: 'COVET DOURO',
        address: 'AVENIDA CLUBE DE CAÇADORES, 4604 4515-654 PORTO, PORTUGAL',
        imgSrc: '/images/contact/covet-douro.jpg',
        href: '#'
    },
    {
        title: 'COVET VALLEY',
        address: 'TRAVESSA CLUBE DE CAÇADORES, 301 4420-089 GONDOMAR, PORTUGAL',
        imgSrc: '/images/contact/covet-valley.jpg',
        href: '#'
    },
    {
        title: 'COVET TOWN',
        address: 'RUA DA PORTELINHA 136 4435-571 FÂNZERES, PORTUGAL',
        imgSrc: '/images/contact/covet-town-experience.jpg',
        href: '#'
    }
];
</script>

<template>

    <Head title="Contact Us" />

    <div class="w-full bg-[#f4f4f4]">

        <div class="grid grid-cols-1 lg:grid-cols-2">

            <div class="relative h-96 lg:h-auto min-h-full">
                <img src="/images/contact/ambience-contact.jpg"
                    class="absolute inset-0 w-full h-full object-cover object-bottom" alt="Contact Us Covet House" />
            </div>

            <div class="p-8 bg-[#f4f4f4] text-black">
                <div class="mx-auto">

                    <h1 class="text-2xl font-semibold tracking-widest uppercase mb-2">SEND US A MESSAGE</h1>
                    <p class="text-xs text-gray-500 mb-4 uppercase tracking-wide">
                        Please provide your contact information below, along with any questions you may have, so that
                        our team can get in touch with you as soon as possible.


                    </p>

                    <form @submit.prevent="submit" class="space-y-2">

                        <div class="mb-2">
                            <p class="text-xs text-gray-400 mb-2 uppercase">Select Your Profile:</p>
                            <div class="flex gap-6 text-xs font-bold">
                                <label class="flex items-center gap-2 cursor-pointer text-[10px]">
                                    <input type="radio" v-model="form.profile_type" value="professional"
                                        class="text-black focus:ring-black">
                                    PROFESSIONAL
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer text-[10px]">
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

                        <select v-model="form.hear_about" :class="[
                            inputClass,
                            form.hear_about === '' ? 'text-gray-500' : 'text-gray-700'
                        ]">
                            <option value="" disabled selected>HOW DID YOU HEAR ABOUT US?*</option>
                            <option v-for="option in hearAboutOptions" :key="option" :value="option">
                                {{ option }}
                            </option>
                        </select>

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
                            <a href="mailto:info@covethouse.eu">INFO@COVETHOUSE.EU</a><br>
                            T. +351 911 780 428
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="w-full bg-[#f4f4f4]">
        <h2 class="text-center text-xl md:text-2xl font-light tracking-widest uppercase py-5 text-black">
            SHOWROOMS
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-1">

            <div v-for="room in showrooms" :key="room.title" class="relative group w-full overflow-hidden">
                <img :src="room.imgSrc" :alt="room.title" loading="lazy" />

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-90">
                </div>

                <div
                    class="absolute bottom-5 md:bottom-10 left-0 right-0 flex flex-col items-center text-center text-white px-4">

                    <h3 class="text-lg font-bold tracking-wider uppercase mb-1">
                        {{ room.title }}
                    </h3>

                    <p
                        class="text-[10px] font-medium tracking-widest uppercase max-w-xs mb-2 md:mb-6 leading-relaxed opacity-90">
                        {{ room.address }}
                    </p>

                    <Link :href="room.href"
                        class="bg-white text-black text-[10px] font-bold py-2 px-6 tracking-widest hover:bg-gray-200 transition-colors uppercase">
                    DISCOVER MORE
                    </Link>
                </div>
            </div>

        </div>
    </div>

    <CategorySlider class="mt-1" />

    <BestSellersProducts :title='"you may also like"' :products="relatedProducts" />

</template>
