<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref, computed, onMounted } from 'vue';

const props = defineProps<{
    videoUrlBase: string;
    title?: string;
    subtitle?: string;
}>();

const videoPlayer = ref<HTMLVideoElement | null>(null);

const mobileVideoUrl = computed(() => `${props.videoUrlBase}-mobile.mp4`);
const desktopVideoUrlMp4 = computed(() => `${props.videoUrlBase}.mp4`);
const desktopVideoUrlWebm = computed(() => `${props.videoUrlBase}.webm`); // Opcional, mas recomendado

// 4. Lógica de Mute/Unmute (como na imagem)
const isMuted = ref(true);
function toggleMute() {
    if (videoPlayer.value) {
        isMuted.value = !isMuted.value;
        videoPlayer.value.muted = isMuted.value;
    }
}
</script>

<template>
    <div class="video-hero-banner relative w-full overflow-hidden text-white">

        <video ref="videoPlayer" class="absolute inset-0 w-full h-full object-cover z-0" autoplay loop muted playsinline
            preload="auto">
            <source :src="desktopVideoUrlWebm" type="video/webm" media="all and (min-width: 768px)">
            <source :src="desktopVideoUrlMp4" type="video/mp4" media="all and (min-width: 768px)">
            <source :src="desktopVideoUrlMp4" type="video/mp4" media="(max-width: 767px)">
            O seu navegador não suporta a tag de vídeo.
        </video>

        <div class="absolute w-full z-20 h-full flex flex-col items-center justify-center">
            <a href="#main-content" class="mt-auto pb-4 flex flex-col items-center gap-1 cursor-pointer">
                <div class="w-8 h-12 border border-white rounded-full relative flex justify-center pt-2">
                    <div class="w-1 h-3 bg-white rounded-full animate-bounce"></div>
                </div>
                <span class="text-xs tracking-widest">Scroll</span>
            </a>
            <div class="pb-6 flex flex-col items-center gap-1 pointer-events-none select-none">
                <img src="/images/icons/phones-white.png " alt="Icon HeadPhones" class="h-10 w-10">
                <span class="text-xs tracking-widest text-center">To enjoy the full experience, <br> turn on your
                    speakers.</span>
            </div>
        </div>

        <button @click="toggleMute"
            class="absolute bottom-6 left-10 z-30 w-8 h-8 text-white opacity-70 hover:opacity-100 transition-opacity cursor-pointer"
            aria-label="Toggle mute">
            <img v-if="isMuted" src="/images/icons/speakers-white-mute.png" class="h-5">

            <img v-else src="/images/icons/speakers-white.png" class="h-5">

        </button>

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
