<script setup lang="ts">
import { useForm, Link } from '@inertiajs/vue3';
import { watch } from 'vue';
import { countries } from '@/data/countries';
import { industries } from '@/data/industries';

const form = useForm({
    profile_type: 'professional',
    first_name: '',
    last_name: '',
    email: '',
    country: '',
    inquiry_type: '',
    company: '',
    website: '',
    phone: '',
});

function submit() {
    // Você vai definir sua rota de 'post' aqui
    // form.post('/catalogue-download', {
    //     onSuccess: () => form.reset(),
    // });
    console.log("Formulário submetido:", form.data());
}

watch(() => form.profile_type, (newProfileType) => {
    if (newProfileType === 'professional') {
        form.reset('phone');
    } else if (newProfileType === 'private_client') {
        form.reset('inquiry_type', 'company', 'website');
        form.inquiry_type = '';
    }
});

const inputClass = "w-full bg-white border-0 border-b text-sm border-gray-500 py-1 px-2 text-black placeholder-gray-400 focus:outline-none focus:border-white focus:ring-0";
</script>

<template>
    <div class="w-full bg-[#505050] text-gray-300">

        <div class="mx-auto max-w-full">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <div class="lg:col-span-8 m-auto md:pr-24">

                    <div class="grid grid-cols-1 md:grid-cols-12 items-center">

                        <div class="md:col-span-5">
                            <img src="/images/mockup-ebooks/the-ultimate-inspirations-design-book.png"
                                alt="The Ultimate Inspirations Design Book - Mockup - Covet House"
                                class="max-w-full h-auto m-auto">
                        </div>

                        <div class="md:col-span-7">
                            <h2 class="text-[16px] font-bold text-white mb-4">THE ULTIMATE INSPIRATIONS DESIGN BOOK</h2>
                            <p class="text-[10px] font-bold mb-2">SELECT YOUR PROFILE</p>

                            <div class="flex gap-4 mb-2 text-[10px]">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" v-model="form.profile_type" value="professional"
                                        class="form-radio bg-transparent border-gray-500 text-white focus:ring-white cursor-pointer">
                                    PROFESSIONAL
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" v-model="form.profile_type" value="private_client"
                                        class="form-radio bg-transparent border-gray-500 text-white focus:ring-white cursor-pointer">
                                    PRIVATE CLIENT
                                </label>
                            </div>

                            <form @submit.prevent="submit" class="space-y-2">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <input type="text" v-model="form.first_name" placeholder="FIRST NAME*"
                                        :class="inputClass" required>
                                    <input type="text" v-model="form.last_name" placeholder="LAST NAME*"
                                        :class="inputClass" required>
                                </div>
                                <input type="email" v-model="form.email" placeholder="EMAIL*" :class="inputClass"
                                    required>
                                <input type="tel" v-model="form.phone" placeholder="PHONE" :class="inputClass"
                                    :required="form.profile_type === 'professional'">
                                <select v-model="form.country" :class="inputClass" required>
                                    <option value="" disabled class="text-black">COUNTRY*</option>
                                    <option v-for="country in countries" :key="country.code" :value="country.name"
                                        class="text-black">
                                        {{ country.name }}
                                    </option>
                                </select>
                                <template v-if="form.profile_type === 'professional'">
                                    <select v-model="form.inquiry_type" :class="inputClass"
                                        :required="form.profile_type === 'professional'">
                                        <option value="" disabled class="text-black">SELECT INDUSTRY*</option>
                                        <option v-for="industry in industries" :key="industry" :value="industry"
                                            class="text-black">
                                            {{ industry }}
                                        </option>
                                    </select>
                                    <input type="text" v-model="form.company" placeholder="COMPANY" :class="inputClass">
                                    <input type="text" v-model="form.website" placeholder="WEBSITE" :class="inputClass">
                                </template>

                                <div class="flex items-start justify-between gap-2">

                                    <label for="terms" class="text-[10px]">
                                        BY CLICKING REQUEST YOU CONFIRM THAT YOU HAVE <br>
                                        READ AND ACCEPTED OUR
                                        <Link href="#" class="text-[#bca479]">PRIVACY POLICY.</Link>
                                    </label>
                                    <button type="submit" :disabled="form.processing"
                                        class="bg-white text-black py-2 px-10 text-[10px] font-semibold tracking-wider hover:bg-gray-200 transition-colors disabled:opacity-50 cursor-pointer">
                                        DOWNLOAD NOW
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 flex flex-col items-center justify-center text-center py-14 bg-[url(/images/backgrounds/background-form-home.jpg)] bg-no-repeat bg-cover">
                    <p class="text-[1.1rem] tracking-wider leading-5 font-bold text-white mb-4">COVET HOUSE <br> <span class="text-[12px]">CATALOGUE</span></p>
                    <img src="/images/mockup-ebooks/catalogue-covet-house.png"
                        alt="The Most Powerful Tool to Inspire" class="max-w-full h-auto mb-6">
                    <Link href="/catalogue/download"
                        class="border-b border-white text-white tracking-wider hover:bg-white hover:text-black transition-colors">
                    DOWNLOAD NOW
                    </Link>
                </div>

            </div>
        </div>
    </div>
</template>
