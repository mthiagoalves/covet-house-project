<script setup lang="ts">
import FormHomepage from './includes/FormHomepage.vue';
import RoomSlider from './includes/footer/RoomSlider.vue';
import IdServiceSection from './includes/footer/IdServiceSection.vue';
import EbookSlider from './includes/footer/EbookSlider.vue';
import BrandsMarquee from './includes/footer/BrandsMarquee.vue';
import AppFooter from './includes/footer/AppFooter.vue';
import ScrollToTopButton from './includes/footer/ScrollToTopButton.vue';
import SocialSidebar from './includes/footer/SocialSidebar.vue';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';


const page = usePage();

const isHomepage = computed(() => page.url === '/');
</script>

<template>
    <RoomSlider class="pb-[4px]" />
    <FormHomepage v-if="isHomepage" />
    <IdServiceSection :class="isHomepage ? 'pt-[6px]' : 'pt-[2px]'" />
    <EbookSlider />
    <BrandsMarquee />
    <AppFooter />
    <ScrollToTopButton />
    <SocialSidebar />
</template>
