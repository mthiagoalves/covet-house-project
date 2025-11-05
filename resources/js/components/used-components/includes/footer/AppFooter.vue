<script setup lang="ts">
import { useForm, Link } from '@inertiajs/vue3';

const newsletterForm = useForm({
    email: '',
});
const submitNewsletter = () => {
    newsletterForm.post('/subscribe-newsletter', {
        onSuccess: () => newsletterForm.reset(),
        preserveScroll: true,
    });
};

const socialLinks = [
    { name: 'Instagram', href: 'https://www.instagram.com/covethouse_/', src: 'instagram.png' },
    { name: 'TikTok', href: 'https://www.tiktok.com/@covethouse_', src: 'tiktok.png' },
    { name: 'LinkedIn', href: 'https://www.linkedin.com/company/covethousedesign', src: 'linkedin.png' },
    { name: 'Pinterest', href: 'https://www.pinterest.com/covet__house/', src: 'pinterest.png' },
];
const footerLinks = [
    { label: 'FINISHES & MATERIALS', href: '#' },
    { label: 'TALK WITH A DESIGNER', href: '#' },
    { label: 'CUSTOMER SERVICE', href: '#' },
    { label: 'CONTACT US', href: '#' },
];
const logos = [
    { name: 'Covet Design Group', href: 'https://covetgroup.com/?utm_source=website&utm_medium=partnersfooter&utm_content=covethouse-lifestyle&utm_campaign=brandawareness', src: '/images/logos/covet-group-logo.png' },
    { name: 'Covet Collection', href: 'https://covetcollection.eu/?utm_source=website&utm_medium=partnersfooter&utm_content=covethouse-lifestyle&utm_campaign=brandawareness', src: '/images/logos/covet-collection-logo.png' },
];

</script>

<template>
    <footer class="w-full bg-black text-gray-400 py-12 px-6">
        <div class="max-w-11/12 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div>
                    <h4 class="text-sm font-light text-white tracking-widest mb-1">SUBSCRIBE OUR <span
                            class="font-bold">NEWSLETTER</span></h4>
                    <form @submit.prevent="submitNewsletter" class="flex items-center border border-white">
                        <input type="email" v-model="newsletterForm.email" placeholder="EMAIL*"
                            class="w-full bg-transparent border-0 text-white placeholder-gray-500 text-sm focus:ring-0 px-2 focus:outline-none"
                            required>
                        <button type="submit"
                            class="text-xs text-white font-semibold whitespace-nowrap px-10 py-2 border-l cursor-pointer border-white hover:bg-white hover:text-black duration-300 transition-colors"
                            :disabled="newsletterForm.processing">
                            SUBSCRIBE
                        </button>
                    </form>
                    <p class="text-[9px] text-white mt-1 tracking-widest">
                        BY CLICKING REQUEST, YOU CONFIRM THAT YOU HAVE <br> READ AND ACCEPTED OUR
                        <Link href="/privacy-policy" class="text-[#bca479]">PRIVACY POLICY</Link>.
                    </p>
                </div>

                <div class="flex items-center justify-center pt-8 md:pt-0">
                    <nav class="flex gap-6">
                        <Link v-for="social in socialLinks" :key="social.name" :href="social.href"
                            class="hover:text-white" :aria-label="social.name">
                        <img :src="`/images/icons/${social.src}`" :alt="social.name"
                            class="h-5 w-5 invert-75 hover:invert transition-all duration-300"> </Link>
                    </nav>
                </div>
                <div class="flex justify-center md:justify-end pt-4 md:pt-0">
                    <nav class="flex flex-col md:flex-row gap-5 items-center text-xs font-light tracking-wider">
                        <Link v-for="link in footerLinks" :key="link.label" :href="link.href"
                            class="hover:text-white text-[11px] transition-all duration-300">
                        {{ link.label }}
                        </Link>
                    </nav>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 flex justify-center items-center gap-10">
                <Link v-for="logo in logos" :key="logo.name" :href="logo.href">
                <img :src="logo.src" :alt="logo.name" class="h-8 grayscale opacity-80 hover:opacity-100 transition-all">
                </Link>
            </div>

        </div>
    </footer>
</template>
