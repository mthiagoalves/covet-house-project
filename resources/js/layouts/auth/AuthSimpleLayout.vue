<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <div class="flex min-h-svh flex-col items-center justify-center gap-6 bg-background p-6 md:p-10 hero-banner">
        <span
            class="absolute top-0 left-0 w-full h-full bg-cover bg-center bg-[linear-gradient(195deg,#42424a_0%,#191919_100%)] opacity-80">
        </span>
        <div class="w-full max-w-sm z-10">
            <div class="flex flex-col gap-8">
                <div class="flex flex-col items-center gap-4">
                    <div class="mb-1 flex h-3xs w-3xs items-center justify-center rounded-md">
                        <AppLogoIcon class="size-9 fill-current text-[var(--foreground)] dark:text-white" />
                    </div>
                    <span class="sr-only">{{ title }}</span>
                    <div class="space-y-2 text-center">
                        <h1 class="text-xl font-medium text-white">{{ title }}</h1>
                        <p class="text-center text-sm text-white">
                            {{ description }}
                        </p>
                    </div>
                </div>
                <slot />
            </div>
        </div>
    </div>
</template>

<style scoped>
.hero-banner {
    min-height: calc(100svh - 72px);
    background: url("/images/homepage/luxury-living-room-with-gold-chandelier-and-curvy-sofas.jpg");
    background-size: cover;
    background-position: center center;
}
</style>
