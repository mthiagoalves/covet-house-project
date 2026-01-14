<script setup lang="ts">
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { useForm } from '@inertiajs/vue3';
import { countries } from '@/data/countries';

const isOpen = ref(false);
const hasShown = ref(false);

const COOKIE_NAME = 'exit_intent_shown';
const TIME_TO_WAIT = 10 * 60 * 1000;

const checkCookie = () => {
    const lastShown = localStorage.getItem(COOKIE_NAME);
    if (!lastShown) return true;

    const now = new Date().getTime();
    return now - parseInt(lastShown) > TIME_TO_WAIT;
};

const setCookie = () => {
    localStorage.setItem(COOKIE_NAME, new Date().getTime().toString());
};

const handleMouseLeave = (e: MouseEvent) => {
    if (e.clientY <= 0) {
        if (!hasShown.value && checkCookie()) {
            isOpen.value = true;
            hasShown.value = true;
            setCookie();
        }
    }
};

onMounted(() => {
    if (window.innerWidth > 768) {
        document.addEventListener('mouseleave', handleMouseLeave);
    }
});

onBeforeUnmount(() => {
    document.removeEventListener('mouseleave', handleMouseLeave);
});

const close = () => {
    isOpen.value = false;
};

const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    country: '',
    industry: '',
    company: '',
    website: '',
    privacy_policy: true,
    type: '',
    interest_in: 'annual-furniture-sale',
    interest_in_name: 'Annual Furniture Sale',
    form_type: 'Ebooks',
});

const submit = () => {
    form.post('/catalogues-and-ebooks/download', {
        onSuccess: () => {
            form.reset();

            alert('Success! Your download should start shortly.');
        },
        onError: () => {
            alert('Please check the required fields.');
        }
    });
};

const contentPopup = {
    title: 'ANNUAL FURNITURE SALE',
    subtitle: 'ELEVATE YOUR PROJECT WITH STATEMENT PIECES IN STOCK',
    imgSrc: '/images/popups/annual-sale-popup.jpg',
};

const inputClass = "w-full bg-white border-0 py-2 px-2 text-black placeholder-gray-500 uppercase text-xs tracking-wider focus:ring-0";
</script>

<template>
    <transition enter-active-class="transition duration-300 ease-out" enter-from-class="opacity-0"
        enter-to-class="opacity-100" leave-active-class="transition duration-200 ease-in" leave-from-class="opacity-100"
        leave-to-class="opacity-0">
        <div v-if="isOpen" class="fixed inset-0 z-[100] flex items-center justify-center px-4">
            <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" @click="close"></div>

            <div
                class="relative w-full max-w-5xl bg-[#202020] text-white shadow-2xl overflow-hidden flex flex-col md:flex-row">

                <button @click="close" class="absolute top-4 right-4 text-gray-400 hover:text-white z-20">
                    ✕
                </button>

                <div class="w-full md:w-5/12 bg-[#202020] relative flex items-center justify-center">
                    <img :src="contentPopup.imgSrc" :alt="contentPopup.title" />
                </div>

                <div class="w-full md:w-7/12 p-10 flex flex-col justify-center text-center">

                    <h2 class="text-2xl md:text-2xl font-bold tracking-widest text-white uppercase">
                        {{ contentPopup.title }}
                    </h2>
                    <p class="text-[10px] md:text-sm text-white tracking-widest mb-6 uppercase">
                        {{ contentPopup.subtitle }} </p>

                    <form @submit.prevent="submit" class="space-y-2">
                        <div class="grid grid-cols-2 gap-2">
                            <input type="text" v-model="form.first_name" placeholder="FIRST NAME*" :class="inputClass"
                                required>
                            <input type="text" v-model="form.last_name" placeholder="LAST NAME*" :class="inputClass"
                                required>
                        </div>

                        <input type="email" v-model="form.email" placeholder="EMAIL*" :class="inputClass" required>
                        <input type="text" v-model="form.phone"
                            placeholder="Phone (Your Phone Help us Speed Up your Request)" :class="inputClass">

                        <select v-model="form.country"
                            :class="[inputClass, form.country === '' ? 'text-gray-500' : 'text-black']" required>
                            <option value="" disabled selected>SELECT YOUR COUNTRY</option>
                            <option v-for="c in countries" :key="c.code" :value="c.name">{{ c.name }}</option>
                        </select>

                        <div class="flex justify-between">
                            <div class="text-[9px] text-white text-left leading-tight">
                                BY CLICKING REQUEST YOU CONFIRM THAT YOU HAVE <br> READ AND ACCEPTED OUR <a href="#"
                                    class="text-[#bca479]">PRIVACY POLICY</a>.
                            </div>

                            <button type="submit"
                                class="bg-white text-black text-[10px] font-normal py-2 px-8 tracking-widest hover:bg-gray-200 transition-colors uppercase cursor-pointer"
                                :disabled="form.processing">
                                {{ form.processing ? 'Processing...' : 'Download Now' }}
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </transition>
</template>
