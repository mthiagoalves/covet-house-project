<script setup lang="ts">
import HeroBannerProjects from '@/components/page-components/HeroBannerProjects.vue';
import { Head } from '@inertiajs/vue3';


defineProps<{
    allProjects: any[];
}>();


</script>

<template>

    <Head title="Projects" />

    <HeroBannerProjects :projects=allProjects />

</template>
