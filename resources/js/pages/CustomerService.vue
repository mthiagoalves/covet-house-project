<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { countries } from '@/data/countries';
import { industries } from '@/data/industries';
import { FileText, MessageCircleQuestionIcon, ShieldCheck } from 'lucide-vue-next';
import TermsBlock from '@/components/page-components/TermsBlock.vue';


// Dados dos Links de Topo
const serviceLinks = [
    {
        title: 'TERMS AND CONDITIONS',
        href: '#terms-and-conditions',
        icon: FileText
    },
    {
        title: "FAQ'S",
        href: '#faqs',
        icon: MessageCircleQuestionIcon
    },
    {
        title: 'PRIVACY POLICY',
        href: '#privacy-policy',
        icon: ShieldCheck
    }
];

// Lógica do Formulário
const form = useForm({
    profile_type: 'professional',
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    country: '',
    industry: '',
    company: '',
    website: '',
    message: ''
});

const termsData = [
    {
        title: 'PRICES',
        content: `<ol class="list-decimal pl-4 space-y-2">
                <li>We reserve the right, without prior notice, to discontinue products or change specifications and prices on products;</li>
                <li>Prices always refer to a single unit and VAT is not included in the price. Legal tax and fees must be subsequently added to the price;</li>
                <li>Price excludes shipping or assembly service;</li>
                <li>Specifically, on Upholstery items, the price includes the standard fabric according the grade specified; In case a different fabric from one of the brands from Covet House is required, or COM/COL option, price will be provided according your requirement and client must contact the sales Representative for pricing.</li>
                <li>Standard packaging is included in the price. Should the client require specific packaging, it will be charged accordingly.</li>
            </ol>` },
    {
        title: 'ACCOUNTS & PAYMENT TERMS', content: `<ol class="list-decimal pl-4 space-y-3 marker:text-gray-900">
  <li>
    All accounts will be registered once the first Proforma Invoice COVET
    (FPCVT) is issued;
  </li>
  <li>
    Client has to provide valid company details such as: Billing name, Billing
    address, VAT number (company registration number or resale certificate
    number).
  </li>
  <li>
    Proforma Invoices will require a 50% deposit to start the production of
    orders and the payment of the final balance prior shipping or pick up from
    Portugal; We reserve the right to negotiate a deposit higher than 60% for
    large value orders;
  </li>
  <li>
    Customized/bespoke proformas will require 100% of the payment;
  </li>
  <li>
Proforma Invoices must be signed and stamped by the client in order to approve the
    described content;  </li>
  <li>Payment must be made by wire transfer <span class="text-black font-bold">(in Euros € or in Dollars $)</span> and a
      confirmation (receipt) of the transfer must be send to the sales
      representative. Payment also confirms data described on proforma
      Invoice;
  </li>
</ol>

<div
  class="my-6 grid grid-cols-1 md:grid-cols-2 gap-6 bg-gray-50 p-5 rounded border border-gray-100 text-[10px] md:text-xs"
>
  <div>
    <p class="font-bold text-black mb-1">COVET LDA</p>
    <p class="text-gray-500 mb-2 italic">Bank Details - BPI Account EUR</p>
    <div class="space-y-1 text-gray-700 font-mono">
      <p><span class="font-semibold">NIB:</span> 0010 0000 55721160001 68</p>
      <p>
        <span class="font-semibold">IBAN:</span> PT50 0010 0000 5572 1160 0016 8
      </p>
      <p><span class="font-semibold">SWIFT:</span> BBPIPTPL</p>
    </div>
  </div>

  <div>
    <p class="font-bold text-black mb-1">COVET LDA</p>
    <p class="text-gray-500 mb-2 italic">Bank Details - BPI Account USD</p>
    <div class="space-y-1 text-gray-700 font-mono">
      <p><span class="font-semibold">NIB:</span> 0010 9999 55721160601 88</p>
      <p>
        <span class="font-semibold">IBAN:</span> PT50 0010 9999 5572 1160 6018 8
      </p>
      <p><span class="font-semibold">SWIFT:</span> BBPIPTPL</p>
    </div>
  </div>
</div>
<ol class="list-decimal pl-4 space-y-3 marker:text-gray-900" start="7">
  <li>
    All products are property of COVET HOUSE until full payment is received.
  </li>
  <li>
    COVET HOUSE reserve the right to defer the dispatch date until the balance of the order is received.
  </li>
</ol>
` },
    {
        title: 'PRODUCT & STORAGE FEES', content: `<ol class="list-decimal pl-4 space-y-3 marker:text-gray-900">
                <li>COVET HOUSE reserves the right to apply a warehouse fee except for mutual agreement between both parties.</li>
                <li>Upon completion, an additional storage fee of 120€/m3 per week will be charged to any stored merchandise if the invoice balance is not fully paid and shipping arrangements have not been made within 2 weeks from the date the goods are received in our warehouse.</li>
                <li>This fee will be cumulative until the remaining amount (invoice balance and storage fees) is fully paid and shipping arrangements have been made.</li>
            </ol>
` },
    {
        title: 'LEAD TIMES', content: `<ol class="list-decimal pl-4 space-y-3 marker:text-gray-900">
                <li>All quoted completion and delivery dates are estimates only.</li>
                <li>Production time from Covet House’s brands is 4 to 6 weeks. Sales representative will inform the correct lead time, depending on the brands’ orders.</li>
                <li>For pieces with custom specifications or orders of large quantities COVET HOUSE reserves the right to agree with the client on a different lead time.</li>
                <li>Lead time for orders with COM products only start once the fabric arrives at our office and is properly identified.</li>
                <li>All fabrics must be identified with the proper document – provided by Covet House sales rep.</li>
                <li>COVET HOUSE is not responsible for delays in production or any fabric misuse if the fabric is sent without identification by the client.</li>
                <li>COVET HOUSE is not responsible for delay in production time if there is failure in submitting the confirmation (receipt) of the transfer.</li>
            </ol>
` },
    {
        title: 'STOCK & OUTLET PRODUCTS', content: `<ol class="list-decimal pl-4 space-y-3 marker:text-gray-900">
                <li>We keep a reasonable number of products in Stock and a product only can be reserved upon a deposit received from the client.</li>
                <li>We offer great deals on all available floor and sample items, up to 70% off. These items have been used in showrooms, trade shows or other product placement events. Therefore, finishes variations, slight different dimensions and minor imperfections may occur from the standard product displayed on our website and catalogues. We will provide details about individual condition of each item upon request. COVET HOUSE Outlet items are available to be purchased at their current condition. We take all reasonable care to ensure that the product descriptions and details provided are accurate before purchase. Items are subject to availability and quantities are limited. Outlet sales are final – no returns or refunds.</li>
                <li>Availability of the product must be confirmed with the sales representative, due to our stock turnover.</li>

            </ol>
` },
    {
        title: 'INTERNET POLICY', content: `<ol class="list-decimal pl-4 space-y-3 marker:text-gray-900">
                <li>Dealer internet websites may neither advertise, nor in any way display the COVET HOUSE name, logo, product images or any other branded company symbols or information without prior written consent from the company.</li>
                <li>Dealer websites may not display pricing on COVET HOUSE products, promotional offers, discounts or value statements (e.g. lowest price). Please contact COVET HOUSE for further company guidelines on internet/marketing usage.</li>

            </ol>
`},
    { title: 'DISTRIBUTION POLICY', content: 'Contact our the sales representative or via our general email info@covethouse.eu for further information.' },
    {
        title: 'PRODUCT', content: `<ol class="list-decimal pl-4 space-y-3 marker:text-gray-900">
                <li>Each COVET HOUSE brand design is hand crafted. While every effort is made to maintain uniformity, slight variations may occur.</li>
                <li>COVET HOUSE is free of committing any design improvement without notification. Images on catalogue or website may vary from the final product. We work every day to enhance the quality of our products aesthetically, usability and reliability.</li>
                <li>For custom requirements every case will assessed individually by our design team. If a custom drawing is required there can have a fee applied to the service.</li>

            </ol>
` },
    { title: 'SAMPLES', content: `<p> COVET HOUSE has samples available of all its standard finishes, for hard case and fabrics. If the clients wishes to acquire any of the finishes they should contact, via email at <a href="mailto:info@covethouse.eu" class="font-black font-bold">info@covethouse.eu</a> or the sales representative in order to purchase them. When a fee for the sample is applied, it is deduced in your next order with COVET HOUSE. </p>` },
    { title: 'COPY RIGHTS', content: `<p> All rights reserved. No part of COVET HOUSE design pieces may be reproduced, distributed, or transmitted in any form or by any means, including prototyping, 3D drawings, or other electronic or mechanical methods, without the prior written permission of the brand, except noncommercial uses permitted by copyright law. For permission requests, write to the brand, addressed “Attention: Copy Right permission,” at <a href="mailto:info@covethouse.eu" class="font-black font-bold">info@covethouse.eu</a>. </p>` },
    {
        title: 'FREIGHT POLICY & DAMAGE CLAIMS', content: `<ol class="list-decimal pl-4 space-y-3 marker:text-gray-900">
                <li>Shipping Incoterm could be Ex Works (EXW), DAP or DDP – Origin Porto, Portugal;</li>
                <li>All the transports made by COVET Lda are insured. If transportation is arranged by COVET HOUSE, fees will be charged separately from the product(s) value. Standard shipping quotation includes door-to-door, drop off service only. If a different service or urgent delivery is required, the customer must clearly request it when placing the order and will be charged accordingly. All products are carefully packed and inspected prior to shipment.</li>
                <li>POD must be signed with reservations. In case of apparent damage, the customer must open the goods in front of the carrier and mention the damages on POD. The customer should keep the products in the final destination and save the packages. In case of no apparent damage, the customer must mention on POD – “received the goods but will be checked the state”. In this case, the customer has a maximum of 7 business days, after delivery, to claim.</li>
                <li>We are not responsible for damages caused by handling, loading or unloading by people acting on behalf of the customer. COVET HOUSE is not responsible for loss or damage in transit. Should visible or concealed damage occur in transit, immediately notify the delivering carrier with initial notification of intent to file a claim.</li>
                <li>Any damage should be communicated to the sales rep during the first 48 hours after receiving the order; photographic and video evidence of the damages should be sent via email. Failure to report concealed damage within 48 hours of reception may result in the denial of the claim. Proving that any damage in the piece(s) caused by the transport requires re-placement, COVET HOUSE compromises to exchange the damaged part or complete piece(s) within a period agreed with the customer.</li>

            </ol>
` },
    {
        title: 'ORDER CANCELLATION', content: 'Merchandise is manufactured upon the receipt of the order and deposit. Cancellations will not be accepted after 5 working days from the order issue date. A 50% restocking fee for standard orders and 60% for orders with custom products will be applied to any cancellations received after the order issue date.'
    },
];

const submit = () => {
    console.log('Customer Service form submitted', form.data);
    // form.post('/customer-service-submit');
};

// Estilo dos inputs (Borda cinza, fundo branco, texto pequeno)
const inputClass = "w-full bg-white border border-gray-300 py-2 px-2 text-gray-700 placeholder-gray-400 text-xs tracking-wider focus:ring-1 focus:ring-black focus:border-black transition-colors";
</script>

<template>

    <Head title="Customer Service" />

    <div class="w-full bg-white">
        <div class="flex items-center justify-center gap-6 py-8 w-full max-w-7xl mx-auto bg-white">
            <h1 class="text-2xl md:text-[26px] uppercase tracking-wider">
                <span class="font-bold">CUSTOMER</span> <span class="font-light">SERVICE</span>
            </h1>
        </div>
        <div class="w-full bg-[#f9f9f9] px-4 py-16">
            <div class="max-w-7xl mx-auto text-center">



                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-4xl mx-auto">
                    <Link v-for="link in serviceLinks" :key="link.title" :href="link.href"
                        class="flex flex-col items-center group">
                    <div class="mb-6 transition-transform duration-300 group-hover:scale-110">
                        <component :is="link.icon" :stroke-width="1" class="w-16 h-16 text-black" />
                    </div>
                    <div class="w-18 h-px bg-[#bca479] mx-auto mb-6"></div>

                    <h3
                        class="text-sm font-bold tracking-widest uppercase text-gray-800 group-hover:text-black transition-colors">
                        {{ link.title }}
                    </h3>
                    </Link>
                </div>

            </div>
        </div>

        <div class="w-full bg-white py-8 px-4">
            <div class="max-w-7xl mx-auto text-center">
                <div class="flex items-center justify-center gap-6 pb-8  bg-white">
                    <div class="h-px bg-gray-300 flex-grow max-w-full"></div>
                    <h2 class="text-lg font-bold tracking-[0.2em] uppercase text-black relative inline-block">
                        SEND US A MESSAGE
                    </h2>
                    <div class="h-px bg-gray-300 flex-grow max-w-full"></div>
                </div>
                <p class="text-md text-gray-500 leading-relaxed mb-6 max-w-2xl mx-auto">
                    If you have questions or need any general information <br class="hidden md:block"> our customer
                    service team will be happy
                    to assist you.
                </p>

                <form @submit.prevent="submit" class="max-w-full mx-auto text-left space-y-1">

                    <div class="mb-2">
                        <p class="text-[10px] text-gray-400 mb-2 uppercase tracking-wider">SELECT YOUR PROFILE:</p>
                        <div class="flex gap-6 text-[10px] font-bold tracking-widest uppercase">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" v-model="form.profile_type" value="professional"
                                    class="text-black focus:ring-black border-gray-300">
                                PROFESSIONAL
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" v-model="form.profile_type" value="private"
                                    class="text-black focus:ring-black border-gray-300">
                                PRIVATE CLIENT
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                        <input type="text" v-model="form.first_name" placeholder="FIRST NAME*" :class="inputClass"
                            required>
                        <input type="text" v-model="form.last_name" placeholder="LAST NAME*" :class="inputClass"
                            required>
                    </div>

                    <input type="email" v-model="form.email" placeholder="EMAIL*" :class="inputClass" required>

                    <input type="tel" v-model="form.phone" placeholder="PHONE*" :class="inputClass">

                    <select v-model="form.country"
                        :class="[inputClass, form.country === '' ? 'text-gray-400' : 'text-gray-700']">
                        <option value="" disabled selected>SELECT YOUR COUNTRY</option>
                        <option v-for="country in countries" :key="country.code" :value="country.code">{{ country.name
                        }}</option>
                    </select>

                    <template v-if="form.profile_type === 'professional'">
                        <select v-model="form.industry"
                            :class="[inputClass, form.industry === '' ? 'text-gray-400' : 'text-gray-700']">
                            <option value="" disabled selected>SELECT INDUSTRY</option>
                            <option v-for="ind in industries" :key="ind" :value="ind">{{ ind }}</option>
                        </select>
                        <input type="text" v-model="form.company" placeholder="COMPANY*" :class="inputClass" required>
                        <input type="text" v-model="form.website" placeholder="WEBSITE" :class="inputClass">
                    </template>

                    <textarea v-model="form.message" rows="6" placeholder="MESSAGE" :class="inputClass"></textarea>

                    <div class="flex justify-between">
                        <div class="text-[9px] text-grey-500 text-left leading-tight"> BY CLICKING REQUEST YOU CONFIRM
                            THAT YOU HAVE <br>
                            READ AND ACCEPTED OUR <a href="#" class="text-[#bca479]">PRIVACY POLICY</a>. </div>
                        <button type="submit"
                            class="bg-black text-white text-[10px] font-bold py-2 px-18 tracking-widest hover:bg-gray-900 cursor-pointer transition-colors uppercase"
                            :disabled="form.processing">
                            CONTACT US
                        </button>
                    </div>

                </form>

            </div>
        </div>

        <TermsBlock :terms="termsData" />
    </div>
</template>
