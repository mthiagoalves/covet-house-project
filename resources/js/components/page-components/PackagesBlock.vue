<script setup lang="ts">
import { useGeneralModal } from '@/composables/useGeneralModal';

const { open: openModal } = useGeneralModal();

const openPackageModal = (packageName: string) => {
    openModal({
        title: `GET STARTED - ${packageName}`,
        slug: `interior-design-${packageName.toLowerCase().replace(' ', '-')}`,
        btnName: 'GET STARTED',
        formType: 'Contact'
    });
};

const packages = [
    {
        title: 'ESSENTIALS PACK',
        subtitle: 'PRE-PROJECT DESIGN',
        description: 'The Essential Pack is the first step in bringing your dream space to life. This pre-project phase focuses on defining the concept and functionality of the space, ensuring that every element aligns with your vision. This pack provides a strong oundation for your project, allowing you to visualize the potential of your space before moving to the next stage.',
        includes: [
            'BRIEFING MEETING - A crucial first step where we gather all the essential information to shape your project. From architectural plans and space photos to style preferences and functional needs.',
            'Moodboard – A curated selection of images, colors, textures, and design elements that capture the essence of your space.',
            '2D Functional Layout – A structured plan that optimizes space distribution and flow.'
        ],
        leadTime: '4 WEEKS',
        isPopular: false
    },
    {
        title: 'PREMIUM PACK',
        subtitle: 'FULL DESIGN DEVELOPMENT',
        description: 'For those who want a complete and immersive design experience, the Premium Pack delivers a fully developed interior concept, ready to bring to life. With this pack, you get a tangible and refined vision of your future space, ensuring every detail is carefully planned before execution.',
        includes: [
            'BRIEFING MEETING - A crucial first step where we gather all the essential information to shape your project. From architectural plans and space photos to style preferences and functional needs.',
            'Moodboard – A curated selection of images, colors, textures, and design elements that capture the essence of your space.',
            '2D Functional Layout – A structured plan that optimizes space distribution and flow.',
            'High-Quality 3D Visualizations – Realistic renders that showcase textures, lighting, and finishes, allowing you to see the final result before execution.',
            'Comprehensive Budget Proposal – A detailed breakdown of costs to turn the design into reality.'
        ],
        leadTime: '8 WEEKS',
        isPopular: true
    }
];
</script>

<template>
    <div class="w-full py-6 px-4 text-black">
        <div class="max-w-11/12 mx-auto">

            <div class="flex items-center justify-center gap-6 mb-8">
                <div class="h-px bg-gray-300 flex-grow max-w-full"></div>
                <h2 class="text-xl md:text-2xl font-light tracking-[0.3em] uppercase text-center whitespace-nowrap">
                    OUR PACKAGES
                </h2>
                <div class="h-px bg-gray-300 flex-grow max-w-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div v-for="pack in packages" :key="pack.title"
                    class="relative bg-white shadow-[0_0_15px_rgba(0,0,0,0.08)] flex flex-col">
                    <div v-if="pack.isPopular"
                        class="bg-[#bca479] text-white text-center py-2 text-xs font-bold tracking-widest uppercase w-full">
                        MOST POPULAR
                    </div>
                    <div v-else class="py-2 w-full opacity-0">HIDDEN</div>

                    <div class="p-6 md:p-8 flex flex-col items-center text-center flex-grow">

                        <h3 class="text-xl font-semibold text-[#bca479] tracking-widest uppercase mb-1">
                            {{ pack.title }}
                        </h3>
                        <h4 class="text-sm font-medium text-[#bca479] tracking-widest uppercase mb-6">
                            {{ pack.subtitle }}
                        </h4>

                        <div class="w-5/6 h-px bg-[#bca479] mb-6"></div>

                        <p class="text-xs md:text-sm text-gray-600 leading-relaxed mb-10">
                            {{ pack.description }}
                        </p>

                        <div class="w-full">
                            <p class="text-xs font-bold uppercase tracking-widest mb-6">
                                THIS PACK INCLUDES +
                            </p>
                            <ul class="space-y-3 mb-10 min-h-[190px]">
                                <li v-for="(item, idx) in pack.includes" :key="idx"
                                    class="text-[10px] md:text-[11px] text-[#bca479] leading-relaxed flex items-start justify-center gap-2" width="100%">
                                    <span class="mt-[3px]">•</span>
                                    <span class="max-w-11/12">{{ item }}</span>
                                </li>
                            </ul>

                            <p class="text-xs font-bold uppercase tracking-widest mb-6 mt-auto">
                                LEAD TIME: {{ pack.leadTime }}
                            </p>

                            <button @click="openPackageModal(pack.title)"
                                class="bg-black text-white text-[10px] font-bold py-3 px-10 tracking-[0.2em] hover:bg-[#bca479] transition-colors uppercase cursor-pointer">
                                GET STARTED
                            </button>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</template>
