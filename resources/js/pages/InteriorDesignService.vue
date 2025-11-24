<script setup lang="ts">
import VideoHero from '@/components/page-components/VideoHero.vue';
import { Head } from '@inertiajs/vue3';
import { useGeneralModal } from '@/composables/useGeneralModal';
import InteriorDesignSteps from '@/components/page-components/InteriorDesignSteps.vue';
import PackagesBlock from '@/components/page-components/PackagesBlock.vue';
import ProjectShowcaseSlider from '@/components/page-components/ProjectShowcaseSlider.vue';
import BestSellersProducts from '@/components/page-components/BestSellersProducts.vue';
import CategorySlider from '@/components/page-components/CategorySlider.vue';
import FormHomepage from '@/components/used-components/includes/FormHomepage.vue';

const { open: openGeneralModal } = useGeneralModal();

const videoHeroData = {
    videoUrlBase: '/videos/interior-design-service',
};


defineProps<{
    projectsSlider: any[];
    relatedProducts: any[];
}>();
</script>

<template>

    <Head title="Inteior Design Service" />

    <VideoHero :video-url-base="videoHeroData.videoUrlBase" />

    <div class="max-w-7xl mx-auto py-8 px-6 text-justify [text-align-last:center]" id="main-content">
        <p class="text-sm font-normal">
            Covet House allows our clients to bring to life their dream spaces, with a highly specialized Interior
            Design service, tailored to every taste, aesthetic and desire. Being able to carefully choose from a panoply
            of products, ranging from casegoods to upholstery, lighting to accessories and even hardware. Offering
            endless possibilities and unique combinations from an impressive portfolio of 12 luxurious brands, our
            Interior Design Services is comprised of four packs, each one with its specifications, to better suit your
            vision. Our team will aid you to select not only the most suitable pieces for your spaces but also provide
            all the tools and facilitate the transformation from paper to existence, by also ordering and delivering the
            products selected. Let us help you turn your dreams into reality.
        </p>

        <button class="bg-black text-xs tracking-wider text-white px-10 py-1.5 mt-5 hover:bg-gray-900 cursor-pointer"
            @click="openGeneralModal({
                title: 'Get Started ID Service',
                formType: 'Contact',
                btnName: 'GET STARTED'
            })">GET STARTED</button>
    </div>

    <InteriorDesignSteps />

    <PackagesBlock />

    <ProjectShowcaseSlider :slides="projectsSlider" />

    <FormHomepage  class="mt-1"/>

    <CategorySlider class="mt-1" />

    <BestSellersProducts :title='"best sellers"' :products="relatedProducts" />

</template>
