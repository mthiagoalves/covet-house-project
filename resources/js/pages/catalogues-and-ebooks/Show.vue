<script setup lang="ts">
import GallerySlider from '@/components/page-components/GallerySlider.vue';
import { countries } from '@/data/countries';
import { industries } from '@/data/industries';
import { Head, useForm } from '@inertiajs/vue3';
import { onMounted, onUnmounted, ref } from 'vue';

const props = defineProps<{
    catalogue: any;
    pageTitle: string;
}>();

const clientType = ref('professional');
const isExpanded = ref(false);
const isDesktop = ref(true);

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
    type: clientType.value,
    interest_in: props.catalogue.slug,
    interest_in_name: props.catalogue.title,
    form_type: 'Ebooks',
});

const checkIsDesktop = () => {
    isDesktop.value = window.innerWidth >= 1024;
};

const collapseForm = () => {
    isExpanded.value = false;
    form.reset();
};

const handleEmailInput = () => {
    if (!isDesktop.value) return;

    if (form.email.length > 0 && !isExpanded.value) {
        isExpanded.value = true;
    }
};

const submit = () => {
    form.type = clientType.value;

    form.post('/downloads/general-download', {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();

            alert('Success! Your download should start shortly.');
        },
        onError: () => {
            alert('Please check the required fields.');
        }
    });
};

const scrollToGallery = () => {
    const element = document.getElementById('gallery-section');

    if (element) {
        const headerOffset = window.innerWidth >= 768 ? 108 : 72;

        const elementPosition = element.getBoundingClientRect().top + window.scrollY;

        const offsetPosition = elementPosition - headerOffset;

        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });
    }
};

onMounted(() => {
    checkIsDesktop();
    window.addEventListener('resize', checkIsDesktop);
});

onUnmounted(() => {
    window.removeEventListener('resize', checkIsDesktop);
});
const inputClass = "w-full bg-[#eeeeee] border border-[#333333] text-gray-500 placeholder-gray-500 text-[10px] tracking-wider py-2 px-4 focus:border-gray-500 focus:ring-0 transition-colors uppercase outline-none mb-2";
</script>

<template>

    <Head :title="pageTitle" />

    <div class="bg-[#eeeeee] text-white">

        <div class="w-full flex items-center relative overflow-hidden">

            <div class="max-w-full w-full mx-auto pb-8 h-full md:h-[calc(100svh-108px)]">

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-12 items-center h-full">

                    <div class="lg:col-span-8 flex  h-full">
                        <div class="relative w-full max-w-full">
                            <img :src="`/images/catalogues-and-ebooks/${catalogue.slug}/thumbnail.jpg`"
                                :alt="catalogue.title" class="w-auto h-auto" />
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex flex-col justify-start gap-8 h-full px-4 lg:pr-10 lg:py-5">
                        <Transition enter-active-class="transition duration-300 ease-out" enter-from-class="opacity-0"
                            enter-to-class="opacity-100" leave-active-class="transition duration-200 ease-in"
                            leave-from-class="opacity-100" leave-to-class="opacity-0">
                            <div v-if="isExpanded && isDesktop" class="w-full flex justify-end">
                                <button @click="collapseForm"
                                    class="text-gray-400 hover:text-black transition-colors p-2 cursor-pointer group flex items-center gap-1"
                                    title="Close form and show details">
                                    <span
                                        class="text-[9px] uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity duration-300">Close</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </Transition>
                        <Transition enter-active-class="transition duration-500 ease-out"
                            leave-active-class="transition duration-300 ease-in"
                            leave-from-class="opacity-100 translate-y-0 max-h-[500px]"
                            leave-to-class="opacity-0 -translate-y-4 max-h-0 overflow-hidden">
                            <div v-if="!isExpanded || !isDesktop">
                                <p class="text-base text-[#bca479] mb-2 font-light">FREE <span
                                        class="decoration-slice text-gray-900 line-through font-light">90.00€</span></p>

                                <h1
                                    class="text-xl md:text-2xl font-normal uppercase tracking-widest leading-tight mb-2 text-black">
                                    {{ catalogue.title }}
                                </h1>

                                <h2 class="text-sm lg:text-md text-black font-light uppercase tracking-wide mb-4">
                                    IMAGES WORTH OF THOUSAND INSPIRATIONS
                                </h2>

                                <button @click="scrollToGallery"
                                    class="text-[11px] uppercase tracking-widest underline underline-offset-4 text-gray-500 hover:text-[#bca479] transition-colors self-start mb-4 cursor-pointer">
                                    View Gallery
                                </button>
                                <p class="text-xs leading-relaxed text-gray-500 text-justify tracking-[1px]">
                                    More than simple inspirations, creating a beautiful, balanced aesthetic is quite a
                                    task.
                                    With a clear vision of inspiring and delivering design to the world, Covet House
                                    created
                                    powerful ambiances, that indeed are bound to inspire and boost creativity.
                                </p>
                            </div>
                        </Transition>

                        <form @submit.prevent="submit" class="w-full border-t border-gray-800 pt-6">

                            <div class="flex items-center gap-6 mb-5">
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <div
                                        class="w-3 h-3 rounded-full border border-gray-500 flex items-center justify-center p-0.5">
                                        <div v-if="clientType === 'professional'"
                                            class="w-full h-full bg-[#bca479] rounded-full"></div>
                                    </div>
                                    <span :class="clientType === 'professional' ? 'text-[#bca479]' : 'text-gray-500'"
                                        class="text-[9px] uppercase tracking-widest transition-colors">Professional</span>
                                    <input type="radio" value="professional" v-model="clientType" class="hidden">
                                </label>

                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <div
                                        class="w-3 h-3 rounded-full border border-gray-500 flex items-center justify-center p-0.5">
                                        <div v-if="clientType === 'private'"
                                            class="w-full h-full bg-[#bca479] rounded-full"></div>
                                    </div>
                                    <span :class="clientType === 'private' ? 'text-[#bca479]' : 'text-gray-500'"
                                        class="text-[9px] uppercase tracking-widest transition-colors">Private
                                        Client</span>
                                    <input type="radio" value="private" v-model="clientType" class="hidden">
                                </label>
                            </div>

                            <div class="space-y-1">
                                <input type="text" v-model="form.first_name" placeholder="First Name *"
                                    :class="inputClass" required>
                                <input type="text" v-model="form.last_name" placeholder="Last Name *"
                                    :class="inputClass" required>
                                <input type="email" v-model="form.email" placeholder="Email *" :class="inputClass"
                                    @input="handleEmailInput" required>

                                <Transition enter-active-class="transition duration-700 ease-out delay-100"
                                    enter-from-class="opacity-0 translate-y-4 max-h-0"
                                    enter-to-class="opacity-100 translate-y-0 max-h-[1000px]"
                                    leave-active-class="transition duration-300 ease-in"
                                    leave-from-class="opacity-100 max-h-[1000px]" leave-to-class="opacity-0 max-h-0">
                                    <div v-if="isExpanded || !isDesktop" class="overflow-hidden">

                                        <input type="phone" v-model="form.phone" placeholder="Phone"
                                            :class="inputClass">
                                        <select v-model="form.country"
                                            :class="[inputClass, form.country === '' ? 'text-gray-500' : 'text-black']"
                                            required>
                                            <option value="" disabled selected class="text-black">COUNTRY*</option>
                                            <option v-for="c in countries" :key="c.code" :value="c.code"
                                                class="text-black">{{
                                                    c.name }}
                                            </option>
                                        </select>
                                        <select v-if="clientType === 'professional'" v-model="form.industry"
                                            :class="[inputClass, form.industry === '' ? 'text-gray-500' : 'text-black']">
                                            <option value="" disabled selected class="text-black">INDUSTRY*</option>
                                            <option v-for="i in industries" :key="i" :value="i" class="text-black">{{
                                                i }}
                                            </option>
                                        </select>
                                        <input v-if="clientType === 'professional'" type="text" v-model="form.company"
                                            placeholder="Company *" :class="inputClass">
                                        <input v-if="clientType === 'professional'" type="text" v-model="form.website"
                                            placeholder="Website *" :class="inputClass">
                                    </div>
                                </Transition>
                            </div>

                            <div class="mb-5">
                                <p class="text-[8px] text-gray-500 leading-tight uppercase">
                                    By clicking request you confirm that you have read and accepted our <a href="#"
                                        class="underline hover:text-[#bca479]">Privacy Policy</a>.
                                </p>
                            </div>

                            <button type="submit"
                                class="bg-[#222] border border-[#333] max-w-2xs text-white text-[10px] font-bold py-3 px-8 tracking-[0.2em] uppercase hover:bg-[#bca479] hover:text-black transition-all duration-300 w-full cursor-pointer"
                                :disabled="form.processing">
                                {{ form.processing ? 'Processing...' : 'Download Now >' }}
                            </button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <GallerySlider :slug="catalogue.slug" />
</template>
