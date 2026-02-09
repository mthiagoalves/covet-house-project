<script setup lang="ts">
import BestSellersProducts from '@/components/page-components/BestSellersProducts.vue';
import CategorySlider from '@/components/page-components/CategorySlider.vue';
import HeroBannerProjects from '@/components/page-components/HeroBannerProjects.vue';
import InteriorDesignSteps from '@/components/page-components/InteriorDesignSteps.vue';
import PackagesBlock from '@/components/page-components/PackagesBlock.vue';
import VideoHero from '@/components/page-components/VideoHero.vue';
import FormHomepage from '@/components/used-components/includes/FormHomepage.vue';
import { useGeneralModal } from '@/composables/useGeneralModal';
import { Head } from '@inertiajs/vue3';

const { open: openGeneralModal } = useGeneralModal();

const videoHeroData = {
    videoUrlBase: '/videos/interior-design-service',
};


defineProps<{
    allProjects: any[];
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

    <div class="flex items-center justify-center gap-6 mb-6">
        <div class="h-px bg-gray-300 flex-grow md:max-w-full"></div>

        <h2 class="text-xl md:text-2xl font-light tracking-[0.2em] uppercase text-center whitespace-nowrap">
            OUR PROJECTS
        </h2>

        <div class="h-px bg-gray-300 flex-grow md:max-w-full"></div>
    </div>

    <HeroBannerProjects :projects=allProjects />

    <FormHomepage class="mt-1" />

    <CategorySlider class="mt-1" />

    <BestSellersProducts :title='"best sellers"' :products="relatedProducts" />

</template>
