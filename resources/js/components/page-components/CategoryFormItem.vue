<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { useGeneralModal } from '@/composables/useGeneralModal';

const props = defineProps<{
    title: string;
    slug: string;
    imgSrc?: string;
}>();

const form = useForm({
    email: '',
});

const { open: openPriceModal } = useGeneralModal();

const submit = () => {

    openPriceModal({
        title: props.title,
        slug: props.slug,
        email: form.email,
        btnName: 'DOWNLOAD NOW'
    });

    form.reset('email');
};
</script>

<template>
    <div class="w-full h-full flex flex-col items-center text-center text-white relative">

        <img :src="imgSrc" :alt="title" loading="lazy" />

        <div class="absolute bottom-10 md:bottom-15 left-0 w-full">
            <div class="md:max-w-4/5 max-w-11/12 m-auto">
                <h3 class="text-xl md:text-[1.2vw] font-extrabold text-white tracking-wider mt-4 mb-1 md:mb-3 uppercase"
                    v-html="title"></h3>

                <form @submit.prevent="submit" class="w-full">
                    <div class="flex items-center bg-white p-1">
                        <input type="email" v-model="form.email"
                            class="w-full bg-transparent border-0 text-black placeholder-gray-500 focus:ring-0 focus:outline-none text-xs md:text-sm py-2 px-3"
                            placeholder="EMAIL *" required>
                        <button type="submit"
                            class="text-xs text-black font-semibold whitespace-nowrap px-3 py-2 hover:bg-gray-100 transition-colors cursor-pointer"
                            :disabled="form.processing">
                            DOWNLOAD NOW
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
