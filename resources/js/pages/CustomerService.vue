<script setup lang="ts">
	import { Head, Link, useForm } from '@inertiajs/vue3';
	import { countries } from '@/data/countries';
	import { industries } from '@/data/industries';
	import { FileText, MessageCircleQuestionIcon, ShieldCheck } from 'lucide-vue-next';
	import TermsBlock from '@/components/page-components/TermsBlock.vue';
	import FaqBlock from '@/components/page-components/FaqBlock.vue';
	import PrivacyPolicyBlock from '@/components/page-components/PrivacyPolicyBlock.vue';


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

	const faqData = [
	    {
	        title: 'ORDERS',
	        content: `<p>
	            How do I place an order? <br>
	            To order one of our exclusive pieces please fill the form to be contacted or send us an email to <a href="mailto:info@covethouse.eu" class="font-bold text-black">info@covethouse.eu</a>.
	            <br><br>
	            When will my order ship? When will it arrive?<br>
	            Your order will be shipped once the production is complete and you have made the full payment. The delivery time depends on the shipping options you choose and on your location.<br><br>

	            Do we need to open a trade account?<br>
	            All accounts will only be registered once the first proforma Invoice is issued. THE CLIENT HAS TO PROVIDE VALID COMPANY DETAILS SUCH AS BILLING NAME, BILLING ADDRESS, VAT NUMBER (COMPANY REGISTRATION
	            NUMBER OR RESALE NUMBER). <br>
	            The Trade discount can be applied for initial quotes with the valid VAT, Registration number or resale certificate number.<br><br>

	            What is the status of my order? How do I track my order?<br>
	            You can always check the status of your order by email with your sales representative and we also provide details about updates before shipping.<br><br>

	            Is Packaging included in my order?<br>
	            Packging is included in the price. When the use of a wooden box is mandatory, the client must let his sales representative know when placing the order. Also, if the client requires specific packging, it will be charged accordingly.<br><br>

	            I couldn’t find the answer I’m looking for here, what do I do now?<br>
	            Send us an email! Our customer service team will be happy to help with any other question you may have! Send your name, PF number (if applicable), and question to <a href="mailto:concierge@covethouse.eu" class="font-bold text-black">concierge@covethouse.eu</a> .<br>
	            Our hours of operation for customer service are Monday through Friday, 9 a.m. to 6.30 p.m. Portuguese time, excluding weekends and major portuguese holidays. Our customer service teams will do their best to respond as quickly as possible.<br><br>

	            Do you want to carry us in your store?<br>
	            Please, contact our team at info@covethouse.eu in order to receive our wholesale conditions. </p>
	        `
	    },
	    {
	        title: 'DESIGN AND PRODUCTION',
	        content: `<p>
	                    Can the pieces be customized?<br>
	                    Yes, we can produce custom pieces, per prior approval from our design department.<br><br>

	                    When does the production start?<br>
	                    Once you place your order we will send you a Proforma invoice stating all the details regarding your order and how to proceed. Once you made the advanced payment we will start the production. 40% advanced payment is required for standard orders and 50% for custom orders.<br><br>

	                    What is the lead-time of production?<br>
	                    Production time is between 7 to 14 weeks and depends on the brand represented by Covet House.
	                    Delivery time is not included.<br><br>

	                    Where are your headquarters located? And the production?<br>
	                    They are both located in Oporto, one of the best European destinations, a historical city in the North of Portugal.
	                </p>
	`
	    },
	    {
	        title: 'PAYMENT',
	        content: `<p>
	                    How are your payment conditions?<br>
	                    Proforma Invoices will require a 40% deposit with the order and the balance prior to shipping from Portugal (shipping EXW Portugal).<br>
	                    Customized pro-forma orders will require 50% deposit.<br>
	                    All pieces are the property of Covet House until payment in full is received.<br>
	                    We reserve the right to defer the dispatch date until the balance of the order is received.<br><br>
	                    All the prices are ex-VAT?<br>
	                    All our prices are tax-free so they do not include the VAT.

	                </p>
	                `
	    },
	    {
	        title: 'SHIPPING',
	        content: `<p>
	                        What shipping options do you offer?<br>
	                        If you wish you can schedule the transport from our factory to the desired location. If you prefer we can help you thru the process and find the best available transport option for you. In this case we will be happy to assist you and clarify any question during the transport period. Please make sure that the shipping address is correct, as we’re unable to redirect orders once they are on their way to you. Although, if you choose to select the transportation company by yourself we don’t take any responsibility for anything related with this matter.<br><br>
	                        Do you ship overseas?<br>
	                        Covet House sells its pieces all over the world and we provide help with the transportation. We work closely with our shipping partners to minimize the potential impact of custom delays on our overseas customers.

	                    </p>
	                    `
	    },
	    {
	        title: 'WARRANTY',
	        content: `<p>
	                    What is your return/exchange policy?<br>
	                    No returns will be accepted without written consent from Covet House.<br>
	                    Unauthorized returns will be refused at the customers expense. For authorized return we will provide all the information needed.<br><br>

	                    How do you proceed if the pieces arrive damaged to the final destination?<br>
	                    All our pieces leave our factory in perfect condition and perfectly packed. We are not responsible for loss or damage in transit. If a visible or concealed damage occurs in transit, please notify immediately the delivering carrier with a file notification of claim intention. Please note: Failure to report concealed damage within fifteen days of receipt will result in the denial of your claim. Any damage should also be communicated to Covet House during the first 48 hours after receiving the order; photographic evidence of the damages should be sent by email to  <a href="mailto:customerservice@covethouse.eu" class="font-bold text-black">customerservice@covethouse.eu</a> or to the sales representative.<br><br>

	                    Do you offer a repairs service?<br>
	                    If the product is correctly used it and for some reason it gets damage, we will take responsibility and repair it.<br><br>

	                    How can I clean my product?<br>
	                    Each product has a clean and care guide. You will find the most suitable cleaning option in our website, in each product page, or with your sales representative.<br><br>

	                    How long is the products warranty?<br>
	                    We offer a 2 years warranty as long as the products is correctly used and maintained in the most suitable conditions.
	                </p>`
	    }
	];

	const privacyAccordionData = {
	    data_privacy: [
	        { title: 'What personal information do we collect from the people that visit our blog, website or app?', content: 'When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, mailing address, phone number, Job or other details to help you with your experience.' },
	        { title: 'When do we collect information?', content: 'We collect information from you when you register on our site, place an order, subscribe to a newsletter, respond to a survey, download content or fill out a form or enter information on our site.' },
	        {
	            title: 'How do we use your information?', content: `<p>
	We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:
	</p>

	<ul class="list-disc pl-6 space-y-2 text-sm">
	    <li>To allow us to better service you in responding to your customer service requests.</li>
	    <li>To administer a contest, promotion, survey or other site feature.</li>
	    <li>To send periodic emails regarding your order or other products and services.</li>
	    <li>To follow up with them after correspondence (live chat, email or phone inquiries)</li>
	</ul>
	` },
	        {
	            title: 'How do we protect your information?', content: `<p>
	        We do not use vulnerability scanning and/or scanning to PCI standards. <br><br>

	        We only provide articles and information. We never ask for credit card numbers.<br><br>

	        We do not use Malware Scanning.<br><br>

	        Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, all sensitive/credit information you supply is encrypted via Secure Socket Layer (SSL) technology.<br><br>

	        We implement a variety of security measures when a user enters, submits, or accesses their information to maintain the safety of your personal information.<br><br>

	        All transactions are processed through a gateway provider and are not stored or processed on our servers.<br><br>
	        </p>` },
	    ],
	    cookies: [
	        { title: 'Do we use cookies?', content: 'Yes. Cookies are small files that a site or its service provider transfers to your computer’s hard drive through your Web browser (if you allow) that enables the site’s or service provider’s systems to recognize your browser and capture and remember certain information. For instance, we use cookies to help us remember and process the items in your shopping cart. They are also used to help us understand your preferences based on previous or current site activity, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.' },
	        {
	            title: 'We use cookies to:', content: `<ul class="list-disc pl-6 space-y-2 text-sm">
	    <li>Help remember and process the items in the shopping cart.</li>
	    <li>Understand and save user’s preferences for future visits.</li>
	    <li>Keep track of advertisements.</li>
	    <li>Compile aggregate data about site traffic and site interactions in order to offer better site experiences and tools in the future. We may also use trusted third-party services that track this information on our behalf.</li>
	</ul>

	<p>
	You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser settings. Since browser is a little different, look at your browser’s Help Menu to learn the correct way to modify your cookies.<br><br>

	If you turn cookies off, Some of the features that make your site experience more efficient may not function properly.It won’t affect the user’s experience that make your site experience more efficient and may not function properly.
	</p>` },
	    ],
	    third_party: [
	        {
	            title: 'Third-party disclosure', content: `<p>
	We do not sell, trade, or otherwise transfer to outside parties your Personally Identifiable Information unless we provide users with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential. We may also release information when it’s release is appropriate to comply with the law, enforce our site policies, or protect ours or others’ rights, property or safety.<br><br>

	However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.
	</p>` },
	        { title: 'Third-party links', content: 'Occasionally, at our discretion, we may include or offer third-party products or services on our website. These third-party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.' },
	    ]
	};

	// 2. Conteúdo HTML para a aba Google
	const googlePrivacyContent = `
	    <div class="space-y-4">
	        <p>Google’s advertising requirements can be summed up by Google’s Advertising Principles. They are put in place to provide a positive experience for users. <a href="https://support.google.com/adwordspolicy/answer/1316548?hl=en" target="_blank" class="font-black text-bold">https://support.google.com/adwordspolicy/answer/1316548?hl=en</a><br><br>

	We use Google AdSense Advertising on our website.<br><br>

	Google, as a third-party vendor, uses cookies to serve ads on our site. Google’s use of the DART cookie enables it to serve ads to our users based on previous visits to our site and other sites on the Internet. Users may opt-out of the use of the DART cookie by visiting the Google Ad and Content Network privacy policy.</p>
	    </div>
	`;

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
								}}
							</option>
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
								THAT YOU HAVE <br class="hidden md:block">
								READ AND ACCEPTED OUR <a href="#" class="text-[#bca479]">PRIVACY POLICY</a>.
							</div>
							<button type="submit"
								class="bg-black text-white text-[10px] font-bold py-2 px-10 md:px-18 tracking-widest hover:bg-gray-900 cursor-pointer transition-colors uppercase"
								:disabled="form.processing">
							CONTACT US
							</button>
						</div>
					</form>
				</div>
			</div>
			<TermsBlock :terms="termsData" />
			<FaqBlock :faqs="faqData" />
			<PrivacyPolicyBlock :accordion-data="privacyAccordionData" :google-content="googlePrivacyContent" />
		</div>
</template>
