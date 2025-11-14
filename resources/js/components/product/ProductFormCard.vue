<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { useGeneralModal } from '@/composables/useGeneralModal';
import { computed } from 'vue'; // 1. Importe 'computed'

const props = defineProps<{
    formData: {
        title: string;
        subtitle: string;
        slug: string;
        imgSrc: string;
    }
}>();

// ... (A lógica do formulário e do modal não muda) ...
const form = useForm({
    email: '',
});
const { open: openPriceModal } = useGeneralModal();
const submit = () => {
    openPriceModal({
        title: props.formData.title,
        slug: props.formData.slug,
        email: form.email,
        btnName: 'DOWNLOAD NOW'
    });
    form.reset('email');
};

// 2. Crie um 'style' reativo para a imagem de fundo
const backgroundImageStyle = computed(() => ({
    backgroundImage: `url('${props.formData.imgSrc}')`,
    backgroundSize: 'cover',
    backgroundPosition: 'center top'
}));
</script>

<template>
    <div class="flex flex-col bg-[#202020] mb-2">

        <div class="aspect-square relative" :style="backgroundImageStyle">
            <div class="absolute -bottom-17 md:-bottom-10 left-4 right-4">
                <div class="md:max-w-4/5 max-w-11/12 m-auto">
                    <h3 class="text-xs md:text-2xl font-normal text-white tracking-wider mb-3 uppercase">
                        {{ formData.title }} {{ formData.subtitle }}
                    </h3>
                    <form @submit.prevent="submit" class="w-full">
                        <div class="flex items-center bg-white p-1">
                            <input type="email" v-model="form.email"
                                class="w-full bg-transparent border-0 text-black placeholder-gray-500 focus:ring-0 focus:outline-none text-xs md:text-sm py-2 px-3 hidden md:block"
                                placeholder="EMAIL *">
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
    </div>
</template>
