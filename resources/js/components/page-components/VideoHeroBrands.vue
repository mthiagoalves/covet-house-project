<script setup lang="ts">
import { computed, ref } from 'vue';

const props = defineProps<{
    videoUrlBase: string;
    title?: string;
    subtitle?: string;
    link?: string;
}>();

const videoPlayer = ref<HTMLVideoElement | null>(null);

const desktopVideoUrlMp4 = computed(() => `${props.videoUrlBase}.mp4`);
</script>

<template>
    <div class="video-hero-banner relative w-full overflow-hidden text-white">
        <a>
            <video ref="videoPlayer" class="absolute inset-0 w-full h-full object-cover z-0" autoplay loop muted
                playsinline preload="auto">
                <source :src="desktopVideoUrlMp4" type="video/mp4" media="all and (min-width: 768px)">
                <source :src="desktopVideoUrlMp4" type="video/mp4" media="(max-width: 767px)">
                O seu navegador não suporta a tag de vídeo.
            </video>
        </a>

        <div class="absolute w-full z-20 h-full flex flex-col items-center justify-center pointer-events-none select-none">

            <p class="text-3xl font-bold uppercase tracking-widest mt-auto pb-1 flex flex-col items-center gap-1 text-shadow-2xs">
                {{ title }}</p>

            <div class="pb-10 flex flex-col items-center gap-1">
                <p class="text-lg tracking-widest text-center">{{ subtitle }}</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.video-hero-banner {
    min-height: calc(100svh - 72px);
}

@media (min-width: 768px) {
    .video-hero-banner {
        min-height: calc(100svh - 108px);
    }
}
</style>
