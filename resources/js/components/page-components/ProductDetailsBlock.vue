<script setup lang="ts">
import { ref, computed } from 'vue';
import { useGeneralModal } from '@/composables/useGeneralModal';
import { ChevronDown, ChevronUp } from 'lucide-vue-next';
import { useForm } from '@inertiajs/vue3';
import { countries } from '@/data/countries';
import { industries } from '@/data/industries';

const props = defineProps<{
    product: {
        name: string;
        slug: string;
        description: string;
        dimensions_cm: { width: string; depth: string; height: string };
        dimensions_in: { width: string; depth: string; height: string };
        materials: string;
        weight?: string;
        brand: { name: string; slug: string; };
    };
}>();

const { open: openGeneral } = useGeneralModal();

// --- ESTADOS ---
const activeTab = ref('additional_info');
const isExpanded = ref(false); // Controla o "VIEW MORE"

// --- DADOS DAS ABAS ---
const tabs = [
    { id: 'additional_info', label: 'ADDITIONAL INFO' },
    { id: 'customization', label: 'CUSTOMIZATION' },
    { id: 'terms', label: 'TERMS AND CONDITIONS' }
];

// --- CONTEÚDO CUSTOMIZADO PARA CADA ABA ---
// (Você pode mover isso para props ou backend se quiser dinâmico)
const termsContent = `

    <p>Terms and Conditions are subject to change at any time, without prior notice. These Conditions can be saved electronically or printed by all users of our Website. These Conditions will apply to all transactions carried out by placing an order via our Website or Email from COVET HOUSE’s Sales Representative, it is implied that you accept our terms and conditions as listed below: Updated version 10/01/2023</p>

    <h5 class="font-bold">Price</h5>
    <p>1. We reserve the right, without prior notice, to discontinue products or change specifications and prices on products; <br>
        2. Prices always refer to a single unit and VAT is not included in the price. Legal tax and fees must be subsequently added to the price; <br>
        3. The prices are EX WORK Rio Tinto, Portugal. They do not include don´t include shipping or assembly service; <br>
        4. Specifically, on Upholstery items, the price includes the standard fabric; in case a different fabric from one of the brands from Covet House is required, the client should contact the sales Rep enquiry the price; <br>
        5. Standard packaging is included in the price. Should the client require specific packaging, it will be charged accordingly.</p>

    <h5 class="font-bold">Accounts &amp; Payment Terms</h5>
    <p>1. All accounts will be registered once the first Proforma Invoice COVET (FPCVT) is issued;<br>
        2. Client has to provide valid company details such as: Billing name, Billing address, VAT number (company registration number or resale certificate number).<br>
        3. Proforma Invoices will require a 50% deposit to start the production of orders and the payment of the final balance prior shipping or pick up from Portugal; We reserve the right to negotiate a deposit higher than 60% for large value orders;<br>
        4. Customized/bespoke proformas will require 100% of the payment;<br>
        Proforma Invoices must be signed and stamped by the client in order to approve the described content;<br>
        6. Payment must be made by wire transfer (in Euros € or in Dollars $) and a confirmation (receipt) of the transfer must be send to the sales representative. Payment also confirms data described on proforma Invoice;</p>

    <h5 class="font-bold">COVET LDA</h5>
    <p>Bank Details <br>
        BPI Account EUR <br>
        NIB: 0010 0000 55721160001 68 <br>
        IBAN: PT50 0010 0000 5572 1160 0016 8 <br>
        SWIFT: BBPIPTPL </p>

    <h5 class="font-bold">COVET LDA</h5>
    <p>Bank Details <br>
        BPI Account USD <br><br>

        7. All pieces are the property of COVET HOUSE until payment in full is received. <br>
        8. COVET HOUSE reserve the right to defer the dispatch date until the balance of the order is received. </p>

    <h5 class="font-bold">Product &amp; Storage Fees</h5>
    <p>1. COVET HOUSE reserves the right to apply a warehouse fee except for mutual agreement between both parties. <br>
        2. Upon completion, an additional storage fee of 120€/m3 per week will be charged to any stored merchandise if the invoice balance is not fully paid and shipping arrangements have not been made within 2 weeks from the date the goods are received in our warehouse. <br>
        3. This fee will be cumulative until the remaining amount (invoice balance and storage fees) is fully paid and shipping arrangements have been made.</p>

    <h5 class="font-bold">Lead Times</h5>
    <p>1. All quoted completion and delivery dates are estimates only.<br>
        2. Production time from Covet House’s brands is 4 to 6 weeks. Sales representative will inform the correct lead time, depending on the brands’ orders.<br>
        3. For pieces with custom specifications or orders of large quantities COVET HOUSE reserves the right to agree with the client on a different lead time.<br>
        4. Lead time for orders with COM products only start once the fabric arrives at our office and is properly identified.<br>
        5. All fabrics must be identified with the proper document – provided by Covet House sales rep.<br>
        6. COVET HOUSE is not responsible for delays in production or any fabric misuse if the fabric is sent without identification by the client.<br>
        7. COVET HOUSE is not responsible for delay in production time if there is failure in submitting the confirmation (receipt) of the transfer.</p>

    <h5 class="font-bold">Stock &amp; Outlet Products</h5>
    <p>1. We keep a reasonable number of products in Stock and a product only can be reserved upon a deposit received from the client.<br>
        2. We offer great deals on all available floor and sample items, up to 70% off. These items have been used in showrooms, trade shows or other product placement events. Therefore, finishes variations, slight different dimensions and minor imperfections may occur from the standard product displayed on our website and catalogues. We will provide details about individual condition of each item upon request. COVET HOUSE Outlet items are available to be purchased at their current condition. We take all reasonable care to ensure that the product descriptions and details provided are accurate before purchase. Items are subject to availability and quantities are limited. Outlet sales are final – no returns or refunds.<br>
        3. Availability of the product must be confirmed with the sales representative, due to our stock turnover.</p>

`;

// --- IMAGEM TÉCNICA DINÂMICA ---
const technicalImageUrl = computed(() => `/images/products/slide-product-page/casegoods/${props.product.slug}/human-scale.png`);

// --- AÇÕES ---
const toggleExpand = () => {
    isExpanded.value = !isExpanded.value;
};

const openCustomizationModal = () => {
    openGeneral({
        title: 'REQUEST CUSTOMIZATION',
        slug: `${props.product.slug}-customization`,
        btnName: 'SEND REQUEST',
        formType: 'Customization'
    });
};

const customizationForm = useForm({
    profile_type: 'professional',
    first_name: '',
    last_name: '',
    email: '',
    industry: '',
    company: '',
    country: '',
    message: '', // Opcional, para detalhes
});

const submitCustomization = () => {
    // Aqui você enviaria para o backend
    // customizationForm.post('/request-customization');
    console.log('Customization request:', customizationForm.data);
    // Opcional: Abrir modal de sucesso ou resetar
};

const inputClass = "w-full bg-white border border-gray-300 py-2 px-4 text-xs tracking-wider text-gray-700 placeholder-gray-400 focus:ring-1 focus:ring-black focus:border-black transition-colors";
</script>

<template>
    <div class="w-full bg-[#eeeeee] p-4 md:px-15 text-black">
        <div class="mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">

            <div
                class="lg:col-span-2 flex flex-col gap-4 border-l border-gray-300 pl-4 lg:pl-0 lg:border-l-0 lg:border-r-0">
                <button v-for="tab in tabs" :key="tab.id" @click="activeTab = tab.id"
                    class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-left transition-all pl-2 border-l-2 cursor-pointer"
                    :class="activeTab === tab.id ? 'text-black border-[#bca479]' : 'text-gray-400 border-transparent hover:text-gray-600'">
                    {{ tab.label }}
                </button>
            </div>

            <div class="lg:col-span-10">
                <div v-if="activeTab === 'additional_info'"
                    class="mx-auto grid grid-cols-1 lg:grid-cols-12 gap-1 lg:gap-12">
                    <div class="lg:col-span-7">

                        <div class="text-[13px] tracking-widest text-black leading-relaxed mb-8 space-y-4">
                            <div v-html="product.description"></div>
                        </div>
                        <transition enter-active-class="transition-all duration-500 ease-in-out"
                            enter-from-class="max-h-0 opacity-0 overflow-hidden"
                            enter-to-class="max-h-[1000px] opacity-100 overflow-hidden"
                            leave-active-class="transition-all duration-300 ease-in-out"
                            leave-from-class="max-h-[1000px] opacity-100 overflow-hidden"
                            leave-to-class="max-h-0 opacity-0 overflow-hidden">
                            <div v-if="isExpanded" class="text-xs text-gray-600 space-y-6">
                                <div>
                                    <h4 class="font-bold text-black uppercase tracking-widest mb-2">DIMENSIONS</h4>
                                    <div class="text-xs text-gray-500 tracking-wide pl-6">
                                        WIDTH: {{ product.dimensions_cm.width }} <span class="mx-2">|</span>
                                        DEPTH: {{ product.dimensions_cm.depth }} <span class="mx-2">|</span>
                                        HEIGHT: {{ product.dimensions_cm.height }}
                                    </div>
                                    <div class="text-xs text-gray-500 tracking-wide pl-6">
                                        WIDTH: {{ product.dimensions_in.width }} <span class="mx-2">|</span>
                                        DEPTH: {{ product.dimensions_in.depth }} <span class="mx-2">|</span>
                                        HEIGHT: {{ product.dimensions_in.height }}
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-black uppercase tracking-widest mb-2">MATERIALS AND
                                        FINISHES
                                    </h4>
                                    <p class="uppercase pl-6">{{ product.materials }}</p>
                                </div>
                                <div v-if="product.weight">
                                    <h4 class="font-bold text-black uppercase tracking-widest mb-2">WEIGHT</h4>
                                    <p>{{ product.weight }}</p>
                                </div>
                                <p class="mt-4 text-[13px] tracking-widest text-black leading-relaxed">
                                    Discover more about
                                    <span class="font-bold">{{ product.brand.name }}</span>
                                    <a href="#" class="underline hover:text-black"> here</a>.
                                </p>
                            </div>
                        </transition>
                        <div class="flex justify-center my-6">
                            <button @click="toggleExpand"
                                class="flex items-center gap-1 text-xs font-bold uppercase tracking-widest text-gray-500 hover:text-black border-b border-gray-300 pb-1 cursor-pointer">
                                {{ isExpanded ? 'VIEW LESS' : 'VIEW MORE' }}
                                <ChevronUp v-if="isExpanded" class="w-4 h-4" />
                                <ChevronDown v-else class="w-4 h-4" />
                            </button>
                        </div>
                    </div>
                    <div class="lg:col-span-5 flex flex-col items-center justify-end mx-auto"
                        v-if="activeTab === 'additional_info'">

                        <img :src="technicalImageUrl" :alt="`${product.name} Technical Drawing`"
                            class="w-full max-w-[340px] h-auto object-contain mix-blend-multiply" />

                        <button @click="openCustomizationModal"
                            class="w-full bg-[#ccc] text-black text-[10px] font-bold py-2.5 uppercase tracking-widest hover:bg-gray-400 transition-colors text-center cursor-pointer">
                            REQUEST CUSTOMIZATION
                        </button>

                    </div>
                </div>

                <div v-else-if="activeTab === 'customization'">

                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-12">

                        <div class="md:col-span-4 text-xs text-gray-600 leading-relaxed space-y-4">
                            <h3 class="font-bold text-black uppercase tracking-widest mb-2">CUSTOMIZATION</h3>
                            <p>
                                Change dimensions on standard products, as well as finishes and even materials. In the
                                end, our goal is to make our designs highlight the character of your interiors.
                            </p>
                        </div>

                        <div class="md:col-span-8">

                            <form @submit.prevent="submitCustomization" class="space-y-2 w-full">

                                <div class="mb-4">
                                    <p class="text-[10px] text-gray-400 mb-2 uppercase tracking-wider">SELECT YOUR
                                        PROFILE:</p>
                                    <div class="flex gap-6 text-[10px] font-bold tracking-widest uppercase">
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" v-model="customizationForm.profile_type"
                                                value="professional"
                                                class="text-black focus:ring-black border-gray-300">
                                            PROFESSIONAL
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" v-model="customizationForm.profile_type" value="private"
                                                class="text-black focus:ring-black border-gray-300">
                                            PRIVATE CLIENT
                                        </label>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <input type="text" v-model="customizationForm.first_name" placeholder="FIRST NAME*"
                                        :class="inputClass" required>
                                    <input type="text" v-model="customizationForm.last_name" placeholder="LAST NAME*"
                                        :class="inputClass" required>
                                </div>

                                <input type="email" v-model="customizationForm.email" placeholder="EMAIL*"
                                    :class="inputClass" required>

                                <template v-if="customizationForm.profile_type === 'professional'">
                                    <select v-model="customizationForm.industry"
                                        :class="[inputClass, customizationForm.industry === '' ? 'text-gray-400' : 'text-gray-700']">
                                        <option value="" disabled selected>SELECT INDUSTRY</option>
                                        <option v-for="ind in industries" :key="ind" :value="ind">{{ ind }}</option>
                                    </select>
                                    <input type="text" v-model="customizationForm.company" placeholder="COMPANY*"
                                        :class="inputClass" required>
                                </template>

                                <input type="text" v-if="customizationForm.profile_type === 'private'"
                                    placeholder="WEBSITE*" :class="inputClass">


                                <div class="flex items-start justify-between gap-2"><label for="terms"
                                        class="text-[10px]"> BY CLICKING REQUEST YOU
                                        CONFIRM THAT YOU HAVE <br class="hidden md:block"> READ AND ACCEPTED OUR <a
                                            class="text-[#bca479]" href="">PRIVACY POLICY.</a></label>
                                    <button type="submit"
                                        class="bg-black text-white text-[10px] font-bold py-2 px-8 tracking-widest hover:bg-gray-800 transition-colors uppercase w-full md:w-auto cursor-pointer"
                                        :disabled="customizationForm.processing">
                                        REQUEST CUSTOMIZATION
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div v-else-if="activeTab === 'terms'"
                    class="text-xs text-gray-600 leading-relaxed space-y-4 h-[280px] overflow-y-scroll"
                    v-html="termsContent">
                </div>

            </div>



        </div>
    </div>
</template>
