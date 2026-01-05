<script setup lang="ts">
import BestSellersProducts from '@/components/page-components/BestSellersProducts.vue';
<<<<<<< HEAD
<<<<<<< HEAD
import FormShowroomPage from '@/components/page-components/FormShowroomPage.vue';
=======
>>>>>>> 737064ca95d954a1829ca55dcb1f4a1840f7c6c5
=======
>>>>>>> 737064ca95d954a1829ca55dcb1f4a1840f7c6c5
import IdServiceForm from '@/components/page-components/IdServiceForm.vue';
import ShowroomHero from '@/components/page-components/ShowroomHero.vue';
import ShowroomImageGrid from '@/components/page-components/ShowroomImageGrid.vue';
import ShowroomVisitBlock from '@/components/page-components/ShowroomVisitBlock.vue';
import VirtualTourSection from '@/components/page-components/VirtualTourSection.vue';
import { useGeneralModal } from '@/composables/useGeneralModal';
import { Head } from '@inertiajs/vue3';


const props = defineProps<{
    showroom: any;
    gallery: string[];
    heroSlides: any[];
    gridImages: any[];
    relatedProducts: any[];
}>();

const { open: openGeneral } = useGeneralModal();

const openBookVisit = () => {
    openGeneral({
        title: `VISIT ${props.showroom.name}`,
        slug: `visit-${props.showroom.slug}`,
        btnName: 'REQUEST VISIT',
        formType: 'Visit'
    });
};

const visitDescription = "Interior designers from all over the world are invited to come to Porto to celebrate design and the excellence of craftsmanship with Covet House. '48H with Covet House in Porto' consists of a visit to Covet House's brand new 4000 sqm showroom featuring a wide range of product categories and styles in a unique exhibition concept. The showroom features our famous best-selling designs and will be updated with new products every season. Moreover, visitors will tour the several production units and meet our skilled craftsmen in person while also being acquainted with our new and improved production capacity.";

</script>

<template>

    <Head :title="showroom.name" />

    <ShowroomHero :slides="heroSlides" />

    <ShowroomVisitBlock :showroom-name="showroom.name" :description="visitDescription" :image-url="showroom.cover_image"
        :title_form="showroom.title_form" />

    <VirtualTourSection v-if="showroom.slug === 'covet-douro'" :showroom-name="showroom.name"
        :showroom-slug="showroom.slug" :virtual-tour-url="heroSlides[0].link_url" />

    <ShowroomImageGrid :images="gridImages" />

<<<<<<< HEAD
<<<<<<< HEAD
    <FormShowroomPage :title-form="heroSlides[0].title_form" :slug-form="heroSlides[0].slug_form" />

=======
>>>>>>> 737064ca95d954a1829ca55dcb1f4a1840f7c6c5
=======
>>>>>>> 737064ca95d954a1829ca55dcb1f4a1840f7c6c5
    <BestSellersProducts :title='"you may also like"' :products="relatedProducts" />

    <IdServiceForm />

</template>

<style scoped>
/* Customização simples das setas do Swiper */
:deep(.swiper-button-next),
:deep(.swiper-button-prev) {
    color: white;
    text-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
}
</style>
