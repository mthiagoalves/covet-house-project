<script setup lang="ts">
import Header from '@/components/used-components/Header.vue';
import Footer from '@/components/used-components/Footer.vue';
import AppLayout from '@/layouts/app/AppSidebarLayout.vue';
import type { BreadcrumbItemType } from '@/types';

interface Props {
    breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});
</script>

<template>
    <div class="min-h-screen bg-gray-50 text-gray-900">
        <Header />
        <main class="mx-auto max-w-7xl p-6">
            <slot />
        </main>
        <Footer />
    </div>
</template>
