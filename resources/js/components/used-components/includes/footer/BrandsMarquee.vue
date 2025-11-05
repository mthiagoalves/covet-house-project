<script setup lang="ts">

const brands = [
    {
        altText: 'Brand Boca do Lobo',
        imgSrc: '/images/brands-footer/bl.jpg',
        href: 'https://www.bocadolobo.com/en/landing-page/ready-to-ship/?utm_source=website&utm_medium=partnersfooter&utm_content=covethouse-readytoship&utm_campaign=readytoship'
    },
    {
        altText: 'Brand Luxxu',
        imgSrc: '/images/brands-footer/lx.jpg',
        href: 'https://www.luxxu.net/downloads/luxury-houses-premium-collection-volume-2?utm_source=website&utm_medium=partnersfooter&utm_content=covethouse-lifestyle-luxuryhouses2&utm_campaign=luxuryhousesbook'
    },
    {
        altText: 'Brand Circu',
        imgSrc: '/images/brands-footer/cc.jpg',
        href: 'https://www.circu.net/?utm_source=website&utm_medium=partnersfootercvt&utm_content=covethouse-circu-homepage&utm_campaign=homepage'
    },
    {
        altText: 'Brand Maison Valentina',
        imgSrc: '/images/brands-footer/mv.jpg',
        href: 'https://www.maisonvalentina.net/en/room-by-room/a-fusion-of-classic-elegance-and-contemporary-luxury-in-bathroom-design'
    },
    {
        altText: 'Brand Covet Collection',
        imgSrc: '/images/brands-footer/cvn.jpg',
        href: 'https://covetcollection.eu/?utm_source=website&utm_medium=partnersfooterch&utm_content=covethouse-covetcollection-homepage&utm_campaign=homepage'
    },
    {
        altText: 'Brand Koket',
        imgSrc: '/images/brands-footer/kk.jpg',
        href: 'https://www.bykoket.com/?utm_source=website&utm_medium=partnersfooterch&utm_content=covethouse-koket-homepage&utm_campaign=homepage'
    },
    {
        altText: 'Brand Caffe Latte',
        imgSrc: '/images/brands-footer/cl.jpg',
        href: 'https://www.caffelattehome.com/?utm_source=website&utm_medium=partnersfootercvt&utm_content=covethouse-caffelatte-homepage&utm_campaign=homepage'
    },
    {
        altText: 'Brand Brabbu',
        imgSrc: '/images/brands-footer/bb.jpg',
        href: 'https://www.brabbu.com/room-by-room/nature-inspired-living-room-design-in-green-tones'
    },
    {
        altText: 'Brand DelightFull',
        imgSrc: '/images/brands-footer/dl.jpg',
        href: 'https://delightfull.eu/en/landing-page/stock-upto55off?utm_source=covethouse&utm_medium=partnersfooter&utm_content=covethouse-stockcampaign23&utm_campaign=stock'
    },
    {
        altText: 'Brand Essential Home',
        imgSrc: '/images/brands-footer/eh.jpg',
        href: 'https://essentialhome.eu/campaigns/stock-upto55off?utm_source=covethouse&utm_medium=partnersfooter&utm_content=covethouse-stockcampaign23&utm_campaign=stock'
    },
    {
        altText: 'Brand Home Society',
        imgSrc: '/images/brands-footer/hs.jpg',
        href: 'https://homessociety.com/room-by-room?utm_source=website&utm_medium=partnersfooter&utm_content=covethouse-roombyroom&utm_campaign=brandawareness'
    },
    {
        altText: 'Brand Mid Century Club',
        imgSrc: '/images/brands-footer/mcc.jpg',
        href: 'https://www.midcenturyclub.com/product/antin-sideboard?utm_source=website&utm_medium=partnersfooter&utm_content=rugsociety-antin&utm_campaign=product'
    },
    {
        altText: 'Brand PullCast',
        imgSrc: '/images/brands-footer/pl.jpg',
        href: 'https://www.pullcast.eu/collections/new-collection?utm_source=website&utm_medium=partnersfooter&utm_content=covethouse-lifestyle&utm_campaign=newproducts'
    },
    {
        altText: 'Brand Rug Society',
        imgSrc: '/images/brands-footer/rs.jpg',
        href: 'https://rugsociety.eu/room-by-room/contemporary-reading-corner-with-green-hues-and-the-unique-oscar-ii-rug'
    },
];
</script>

<template>
    <div class="w-full bg-black text-white">
        <h3 class="text-white text-[20px] text-center py-5 font-light tracking-wider">OUR BRANDS</h3>

        <div class="w-full overflow-hidden">
            <div class="flex animate-marquee hover:pause">
                <a v-for="brand in brands" :key="brand.altText" :href="brand.href" target="_blank"
                    class="relative block w-96 h-96 flex-shrink-0 mx-[3px]">
                <img :src="brand.imgSrc" :alt="brand.altText"
                    class="absolute inset-0 w-m-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity" />
                </a>
            </div>
        </div>
    </div>
</template>

<style>
@keyframes marquee {
    0% {
        transform: translateX(0%);
    }

    100% {
        transform: translateX(-50%);
    }
}

.animate-marquee {
    animation: marquee 10s linear infinite;
}

.hover\:pause:hover {
    animation-play-state: paused;
}
</style>
