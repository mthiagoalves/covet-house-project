<script setup lang="ts">
import Footer from '@/components/used-components/Footer.vue';
import Header from '@/components/used-components/Header.vue';
import { useGeneralModal } from '@/composables/useGeneralModal';
import GeneralModal from '@/components/used-components/includes/modals/GeneralModal.vue';
import { useSearchModal } from '@/composables/useSearchModal';
import SearchModal from '@/components/used-components/includes/modals/SearchModal.vue';
import type { BreadcrumbItemType } from '@/types';

interface Props {
    breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});

const { isOpen } = useGeneralModal();
const { isOpen: isSearchOpen } = useSearchModal();
</script>

<template>
    <div class="min-h-screen bg-gray-50 text-gray-900">
        <Header />
        <main class="max-w-full">
            <slot />
        </main>
        <GeneralModal v-if="isOpen" />
        <SearchModal v-if="isSearchOpen" />
        <Footer />
    </div>
</template>
