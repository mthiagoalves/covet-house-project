<script setup lang="ts">
// Dados estáticos baseados na imagem
const steps = [
    {
        number: '1',
        title: 'IT ALL BEGINS WITH A VISION',
        description: 'Every Covet House project starts with a meaningful conversation—an essential moment where we connect with you, understand your aesthetic, your aspirations, and the way you live. Whether we meet in person or virtually, this dialogue allows us to translate your vision into a clear design direction. It’s the foundation of a journey where creativity, craftsmanship, and luxury come together to shape extraordinary interiors that feel uniquely yours.',
        imgSrc: '/images/interior-design-service/how-it-works-1.jpg'
    },
    {
        number: '2',
        title: 'DESIGNING AND CURATING YOUR SPACE',
        description: 'From here, we begin developing the concept. Guided by your preferences, we create detailed moodboards that reflect the atmosphere and style you envision. We gather all technical information—from architectural details to existing measurements—to ensure accuracy at every step. Together, we curate the perfect selection of furniture, lighting, and accessories from Covet House’s exclusive portfolio or design bespoke pieces tailored specifically for your project. Every choice of material, finish, and color palette is refined collaboratively, ensuring a seamless and sophisticated final result.',
        imgSrc: '/images/interior-design-service/how-it-works-2.jpg'
    },
    {
        number: '3',
        title: 'WHERE THE VISION BECOMES REAL',
        description: 'We then bring your project to life through high-quality 3D renderings, allowing you to experience the textures, lighting, and compositions chosen for your space. This immersive preview shows exactly how each curated piece will harmonize within your interior. Once every detail meets your expectations, our team manages the entire process—ordering, quality control, and worldwide delivery. Covet House is committed to transforming spaces into timeless expressions of luxury, ensuring that your dream interior becomes an exceptional reality.',
        imgSrc: '/images/interior-design-service/how-it-works-3.jpg'
    }
];
</script>

<template>
    <div class="w-full py-6 px-4 text-black">
        <div class="max-w-11/12 mx-auto">
            <div class="flex items-center justify-center gap-6 mb-6">
                <div class="h-px bg-gray-300 flex-grow md:max-w-full"></div>

                <h2 class="text-xl md:text-2xl font-light tracking-[0.2em] uppercase text-center whitespace-nowrap">
                    HOW IT WORKS
                </h2>

                <div class="h-px bg-gray-300 flex-grow md:max-w-full"></div>
            </div>
            <div class="text-center mb-8 max-w-5xl mx-auto">
                <p class="text-sm font-normal">
                    Our Interior Design Service is tailored to help you bring your dream space to life. We offer two
                    structured options to suit different needs, ensuring a smooth and efficient design process.
                    Everything starts with a briefing, where we gather key information about the project, followed by a
                    detailed proposal that guides you through the next steps.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                <div v-for="step in steps" :key="step.number" class="flex flex-col items-center text-center shadow-[0_0_15px_rgba(0,0,0,0.08)]">
                    <div
                        class="w-12 h-12 rounded-full border border-[#bca479] flex items-center justify-center text-[#bca479] text-xl font-semibold my-6">
                        {{ step.number }}
                    </div>

                    <h3 class="text-lg font-bold tracking-widest uppercase text-[#bca479] mb-4 px-4">
                        {{ step.title }}
                    </h3>

                    <div class="w-5/6 h-px bg-[#bca479] mb-6"></div>

                    <p class="text-xs leading-relaxed text-gray-800 mb-8 px-6 min-h-[100px]">
                        {{ step.description }}
                    </p>

                    <div class="w-full mt-auto">
                        <img :src="step.imgSrc" :alt="step.title" class="w-full h-auto object-cover aspect-[4/3]"
                            loading="lazy" />
                    </div>

                </div>

            </div>

            <div class="w-full text-center">
                <button
                    class="bg-black text-xs tracking-wider text-white px-10 py-1.5 mt-5 hover:bg-gray-900 cursor-pointer">TALK
                    WITH DESIGN</button>
            </div>
        </div>
    </div>
</template>
