<script setup lang="ts">

const props = defineProps<{
    showroomName: string;
    showroomSlug: string;
    virtualTourUrl: string;
}>();

</script>

<template>
    <div class="w-full relative bg-black overflow-hidden">
        <a :href="virtualTourUrl" target="_blank" rel="noopener noreferrer" class="block w-full">
            <picture>
                <source media="(max-width: 767px)"
                    :srcset="`/images/showrooms/${showroomSlug}/virtual-tour-${showroomSlug}-m.jpg`">

                <img :src="`/images/showrooms/${showroomSlug}/virtual-tour-${showroomSlug}.jpg`"
                    :alt="`${showroomName} Virtual Tour`" class="w-full h-auto object-cover" loading="lazy" />
            </picture>
        </a>
    </div>
</template>
