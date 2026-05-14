@extends('layouts.master')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/privacy-policy.css') }}">
@endpush

@section('content')
    <main class="privacy-page">
        <div class="section-inner">
            <header class="privacy-header">
                <h1>Terms and <span>Conditions</span></h1>
                <a href="{{ route('refund-policy') }}" class="refund-banner">
                    Click here to learn about the CATKing Refund Policy →
                </a>
            </header>

            <div class="privacy-content">
                <section>
                    <p>CATKing Educare, often referred to as CATKing founded by Sumit Singh Gandhi, adheres to the following terms and conditions.</p>
                </section>

                <section>
                    <h2>Privacy Policy</h2>
                    <p>We value your trust. In order to honour that trust, CATKing Educare’s adheres to ethical standards in gathering, using, and safeguarding any information you provide. CATKing Educare is a leading edtech company, incorporated in India, for imparting learning. This privacy policy governs your use of the application ‘CATKing Educare’s – The Learning App’ (‘Application’), www.catking.in (‘Website’) and the other associated applications, products, websites and services managed by the Company. Please read this privacy policy (‘Policy’) carefully before using the Application, Website, our services and products, along with the Terms of Use (‘ToU’) provided on the Application and the Website. Your use of the Website, Application, or services in connection with the Application, Website or products (‘Services’), or registrations with us through any modes or usage of any products including through SD cards, tablets or other storage/transmitting device shall signify your acceptance of this Policy and your agreement to be legally bound by the same. If you do not agree with the terms of this Policy, do not use the Website, Application our products or avail any of our Services.</p>
                </section>

                <section>
                    <h2>User Provided Information</h2>
                    <p>The Application/Website/Services/products obtains the information you provide when you download and register for the Application or Services or products. When you register with us, you generally provide (a) your name, age, email address, location, phone number, password and your ward’s educational interests; (b) transaction-related information, such as when you make purchases, respond to any offers, or download or use applications from us; (c) information you provide us when you contact us for help; (d) information you enter into our system when using the Application/Services/products, such as while asking doubts, participating in discussions and taking tests. The said information collected from the users could be categorized as “Personal Information”, “Sensitive Personal Information” and “Associated Information”.</p>
                    <p>You agree to have read and agree to the terms and conditions and authorise CATKing Educare and its representatives to Call, SMS, Email or WhatsApp you about its programmes and offers. This consent overrides any registration for DNC / NDNC. We will use the Information to contact you from time to time, to provide you with the Services, important information, required notices and marketing promotions.</p>
                </section>

                <section>
                    <h2>Automatically Collected Information</h2>
                    <p>In addition, the Application/products/Services may collect certain information automatically, including, but not limited to, the type of mobile device you use, your mobile devices unique device ID, the IP address of your mobile device, your mobile operating system, the type of mobile Internet browsers you use, and information about the way you use the Application/Services/products. As is true of most Mobile applications, we also collect other relevant information as per the permissions that you provide.</p>
                </section>

                <section>
                    <h2>Use of your Personal Information</h2>
                    <p>We use the collected Information to analyse trends, to conduct research, to administer the Application/Services and products, to learn about each user’s learning patterns and movements around the Application/Services and products and to gather demographic information and usage behaviour about our user base as a whole.</p>
                    <p>We may disclose Information:</p>
                    <ul>
                        <li>As required by law, such as to comply with a subpoena, or similar legal process;</li>
                        <li>To enforce applicable ToU, including investigation of potential violations thereof;</li>
                        <li>When we believe in good faith that disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, address security or technical issues or respond to a government request;</li>
                        <li>With our trusted services providers who work on our behalf;</li>
                        <li>To protect against imminent harm to the rights, property or safety of the Application/Website/ its users or the public.</li>
                    </ul>
                </section>

                <section>
                    <h2>Security</h2>
                    <p>We are concerned about safeguarding the confidentiality of your Information. We provide physical, electronic, and procedural safeguards to protect Information we process and maintain. For example, we limit access to this Information to authorized employees only who need to know that information in order to operate, develop or improve our Application/Services/products/Website. Please be aware that, although we endeavor to provide reasonable security for information we process and maintain, no security system can prevent all potential security breaches.</p>
                </section>

                <section>
                    <h2>How Long Do We Retain User Data?</h2>
                    <p>Currently, we plan to retain user data while an account is active and for at least three years afterward. We may alter this practice according to legal and business requirements. For example, we may lengthen the retention period for some data if needed to comply with law or voluntary codes of conduct.</p>
                </section>

                <section>
                    <h2>Terms & Conditions</h2>
                    <p>These Terms & Conditions (“Terms”) of (a) use of our website www.catking.in (“Website”), our applications (“Application”) or any products or services in connection with the Application/ Website/products (“Services”) or (b) any modes of registrations or usage of products, including through SD cards, tablets or other storage/transmitting device are between Think & Learn Private Limited (“Company/We/Us/Our”) and its users (“User/You/Your”).</p>
                    <p>Your use/access/browsing of the Application or Website or the Services or products or registration through any means shall signify Your acceptance of the Terms and Your agreement to be legally bound by the same.</p>
                </section>

                <section>
                    <h2>Intellectual Property</h2>
                    <p>Except as mentioned below, all information, content, material, trademarks, services marks, trade names, and trade secrets including but not limited to the software, text, images, graphics, video, script and audio, contained in the Application, Website, Services and products are proprietary property of the Company (“Proprietary Information”). No Proprietary Information may be copied, downloaded, reproduced, modified, republished, uploaded, posted, transmitted or distributed in any way without obtaining prior written permission from the Company.</p>
                </section>

                <section>
                    <h2>Prohibited Activities</h2>
                    <p>No User shall be permitted to perform any of the following prohibited activities while availing our Services:</p>
                    <ul>
                        <li>Making available any content that is misleading, unlawful, harmful, threatening, abusive, tortious, defamatory, etc.;</li>
                        <li>Stalking, intimidating and/or harassing another;</li>
                        <li>Interfering with any other person’s use or enjoyment of the Application/Website/Services;</li>
                        <li>Committing any act that amounts to the infringement of intellectual property;</li>
                        <li>Post, transmit or make available any material that contains viruses or other computer programming routines that may harm the Application;</li>
                        <li>Use deep-links, page-scrape, robot, spider or other automatic device to monitor any portion of the Application.</li>
                    </ul>
                </section>

                <section>
                    <h2>Disclaimer</h2>
                    <p>THIS WEBSITE, THE APPLICATION AND THE SERVICES ARE PROVIDED ON AN “AS IS” BASIS WITH ALL FAULTS AND WITHOUT ANY WARRANTY OF ANY KIND. THE COMPANY HEREBY DISCLAIMS ALL WARRANTIES AND CONDITIONS WITH REGARD TO THE WEBSITE, APPLICATION/PRODUCTS AND THE SERVICES.</p>
                </section>

                <section>
                    <h2>Contact Information</h2>
                    <div class="contact-info-box">
                        <p><strong>Grievance Officer:</strong> Mr. Pravin Prakash</p>
                        <p><strong>Address:</strong> 4/1, Tower D, 2nd Floor, IBC Knowledge Park, Bannerghatta Main Road, Bangalore – 560029, Karnataka, India.</p>
                        <p><strong>Email:</strong> <a href="mailto:support@catking.in">support@catking.in</a></p>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
