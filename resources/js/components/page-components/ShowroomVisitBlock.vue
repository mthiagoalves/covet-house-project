<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { countries } from '@/data/countries'; // Certifique-se que este arquivo existe
import { industries } from '@/data/industries';

const props = defineProps<{
    showroomName: string;
    title_form?: string;
    description: string; // O texto longo sobre "48H with Covet House..."
    imageUrl: string;
}>();

const form = useForm({
    profile_type: 'professional',
    first_name: '',
    last_name: '',
    email: '',
    country: '',
    phone: '',
    date: '',
    time: '',
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
    <div class="w-full flex flex-col md:flex-row min-h-[600px] md:h-[calc(100svh-108px)]">

        <div class="w-full md:w-1/2 relative group overflow-hidden">
            <img :src="imageUrl" :alt="showroomName" class="absolute inset-0 w-full h-full object-cover" />

            <div class="absolute inset-0 bg-black/60"></div>

            <div class="absolute inset-0 p-8 md:p-16 flex flex-col justify-center text-white">
                <h3
                    class="text-xl md:text-3xl font-normal tracking-[0.15em] uppercase mb-2 border-b border-[#bca479] pb-4 inline-block text-white">
                    {{ showroomName }}
                </h3>

                <div
                    class="text-[10px] md:text-sm leading-relaxed space-y-4 text-justify font-light tracking-wide uppercase">
                    <p>{{ description }}</p>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 bg-black text-white p-8 md:p-16 flex flex-col justify-center">

            <h2 class="text-2xl md:text-3xl font-light tracking-[0.1em] uppercase mb-1">
                {{ title_form }}
            </h2>

            <p class="text-xs font-bold tracking-widest uppercase mb-8 text-gray-200">
                SCHEDULE YOUR APPOINTMENT
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
                        <option v-for="c in countries" :key="c.code" :value="c.code" class="text-black">{{ c.name }}</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="relative">
                        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" v-model="form.date"
                            placeholder="DD-MM-YYYY*" :class="inputClass" required>
                    </div>
                    <div class="relative">
                        <input type="text" onfocus="(this.type='time')" onblur="(this.type='text')" v-model="form.time"
                            placeholder="--:--*" :class="inputClass" required>
                    </div>
                </div>

                <template v-if="form.profile_type === 'professional'">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 animate-fade-in">
                        <input type="text" v-model="form.company" placeholder="COMPANY*" :class="inputClass" required>

                        <select v-model="form.industry"
                            :class="[inputClass, form.industry === '' ? 'text-gray-500' : 'text-black']" required>
                            <option value="" disabled selected>SELECT INDUSTRY*</option>
                            <option v-for="ind in industries" :key="ind" :value="ind" class="text-black">{{ ind }}</option>
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
                        {{ form.processing ? 'SENDING...' : 'SCHEDULE A VISIT' }}
                    </button></div>

            </form>
        </div>

    </div>
</template>

