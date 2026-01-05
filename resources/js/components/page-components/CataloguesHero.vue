<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { countries } from '@/data/countries';
import { ref, onMounted, onUnmounted, computed } from 'vue';

const props = defineProps<{
    title: string;
    slug: string;
}>();

const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    country: '',
    interest_in: props.slug,
    interest_in_name: props.title,
    form_type: 'Ebooks',
    privacy_policy: false,
});

const submit = () => {
    form.post('/catalogues-and-ebooks/download', {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            alert('Sucess! Your download should start shortly.');
        },
        onError: () => {
            alert('Please check the required fields.');
        }
    });
};

const inputClass = "w-full bg-transparent border border-white text-white placeholder-white text-[10px] tracking-wider py-2 px-3 focus:border-white focus:ring-0 transition-colors uppercase outline-none";

const isHidden = ref(false);

const handleScroll = () => {
    isHidden.value = window.scrollY >= 520;
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});

const heroStyles = computed(() => {
    return {
        // Se a imagem vier pronta na prop:
        '--bg-desk': `url('/images/catalogues-and-ebooks/${props.slug}-banner-top.jpg')`,

        // OU, se você quiser montar usando o slug como tentou:
        // '--bg-desk': `url('/images/banners/${props.slug}.jpg')`,
    };
});
</script>

<template>
    <div class="md:fixed inset-x-0 top-[72px] md:top-[108px] md:h-[410px] text-white flex items-center justify-center z-0 overflow-hidden transition-opacity duration-300 bg-black bg-cover bg-no-repeat bg-center md:bg-[image:var(--bg-desk)]"
        :style="heroStyles" :class="{ 'opacity-0 pointer-events-none': isHidden }">

        <div
            class="max-w-full w-full mx-auto px-0 pb-5 md:pb-0 grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 items-center h-full">

            <div class="w-full md:col-span-5 px-4 md:col-start-2 flex flex-col justify-center z-10 order-2 md:order-1">
                <h1 class="text-lg md:text-xl font-light tracking-widest uppercase mb-4 text-center md:text-left">
                    {{ $props.title }}
                </h1>

                <form @submit.prevent="submit" class="space-y-2 w-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col">
                            <input type="text" v-model="form.first_name" placeholder="First Name*" :class="inputClass"
                                required>
                        </div>
                        <div class="flex flex-col">
                            <input type="text" v-model="form.last_name" placeholder="Last Name*" :class="inputClass"
                                required>
                        </div>
                    </div>

                    <div>
                        <input type="email" v-model="form.email" placeholder="Email*" :class="inputClass" required>
                    </div>

                    <div>
                        <select v-model="form.country"
                            :class="[inputClass, form.country === '' ? 'text-gray-500' : 'text-black']" required>
                            <option value="" disabled selected>COUNTRY*</option>
                            <option v-for="c in countries" :key="c.code" :value="c.code" class="text-black">{{ c.name }}
                            </option>
                        </select>
                    </div>

                    <div class="flex items-center gap-2 mt-1">
                        <input type="checkbox" id="privacy" v-model="form.privacy_policy"
                            class="bg-transparent border-white rounded-none focus:ring-0 text-white checked:bg-white checked:border-white cursor-pointer w-3 h-3"
                            required>
                        <label for="privacy"
                            class="text-[9px] text-gray-400 leading-tight uppercase tracking-wider cursor-pointer select-none">
                            I HAVE READ AND ACCEPT YOUR <a href="/privacy-policy"
                                class="underline hover:text-white transition-colors">PRIVACY POLICY</a>*
                        </label>
                    </div>

                    <div class="pt-2 text-center md:text-left">
                        <button type="submit"
                            class="border border-white text-white bg-transparent text-[10px] font-bold py-2 px-8 tracking-[0.2em] uppercase hover:bg-white hover:text-black transition-all duration-300 w-full md:w-auto cursor-pointer"
                            :disabled="form.processing">
                            {{ form.processing ? '...' : 'DOWNLOAD NOW' }}
                        </button>
                    </div>

                </form>
            </div>
            <div
                class="md:col-span-5 md:col-start-8 justify-center md:justify-end items-center h-full relative order-1 md:order-2 block md:hidden">
                <picture>
                    <img :src="`/images/catalogues-and-ebooks/${props.slug}-banner-top-m.jpg`" alt="Inspirations Book"
                        class="object-contain max-h-full w-auto drop-shadow-2xl" />
                </picture>
            </div>
        </div>
    </div>
</template>
