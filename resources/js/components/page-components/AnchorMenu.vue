<script setup lang="ts">

interface MenuItem {
    title: string;
    subtitle?: string;
    imageUrl: string;
    altText: string;
    anchorHref: string;
}

defineProps<{
    items: MenuItem[];
}>();

function scrollTo(hash: string) {
    const targetElement = document.querySelector(hash);
    if (!targetElement) return;

    const duration = 1000;
    const headerHeight = window.innerWidth < 768 ? 72 : 108;

    const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY;
    const startPosition = window.scrollY;
    const distance = targetPosition - startPosition - headerHeight;
    let startTime: number | null = null;

    function easeInOutQuad(t: number, b: number, c: number, d: number) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    function animationLoop(currentTime: number) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const nextScrollPosition = easeInOutQuad(timeElapsed, startPosition, distance, duration);

        window.scrollTo(0, nextScrollPosition);

        if (timeElapsed < duration) {
            requestAnimationFrame(animationLoop);
        } else {
            window.scrollTo(0, startPosition + distance);
        }
    }

    requestAnimationFrame(animationLoop);
}
</script>

<template>
    <div v-if="items.length > 1" class="max-w-full mx-auto mb-2 bg-black">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-[6px]">

            <a v-for="item in items" :key="item.title" :href="item.anchorHref" class="relative block bg-[#222]" @click.prevent="scrollTo(item.anchorHref)">
                <img :src="item.imageUrl" :alt="item.altText" loading="lazy" />

                <div class="absolute bottom-0 left-0 right-0 h-1/12 bg-gradient-to-t from-black/50 to-transparent">
                </div>
                <div class="absolute bottom-2 left-0 right-0 text-center text-white">
                    <h3
                        class="absolute bottom-4 md:bottom-4 left-0 right-0 text-center text-white text-xs md:text-sm font-normal tracking-widest uppercase">
                        {{ item.title }}
                    </h3>
                    <p class="text-xs text-gray-400 uppercase">
                        {{ item.subtitle }}
                    </p>
                </div>
            </a>
        </div>
    </div>
</template>
