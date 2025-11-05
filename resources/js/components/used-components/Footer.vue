<script setup lang="ts">
import FormHomepage from './includes/FormHomepage.vue';
import RoomSlider from './includes/footer/RoomSlider.vue';
import IdServiceSection from './includes/footer/IdServiceSection.vue';
import EbookSlider from './includes/footer/EbookSlider.vue';
import BrandsMarquee from './includes/footer/BrandsMarquee.vue';
import AppFooter from './includes/footer/AppFooter.vue';
import ScrollToTopButton from './includes/footer/ScrollToTopButton.vue';
import SocialSidebar from './includes/footer/SocialSidebar.vue';

</script>

<template>
    <RoomSlider class="pb-[4px]" />
    <FormHomepage />
    <IdServiceSection class="pt-[6px]" />
    <EbookSlider />
    <BrandsMarquee />
    <AppFooter />
    <ScrollToTopButton />
    <SocialSidebar />
</template>
