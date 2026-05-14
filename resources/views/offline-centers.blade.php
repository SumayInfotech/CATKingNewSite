@extends('layouts.master')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/offline-centers.css') }}">
@endpush

@section('content')
    <main class="offline-page">

        {{-- ══════════════════════════════════════
             HERO
        ══════════════════════════════════════ --}}
        <section class="offline-hero">
            <div class="section-inner">
                <div class="hero-eyebrow">Now Available Offline</div>
                <h1>CATKing Offline Coaching Centers in <em>Mumbai</em></h1>
                <p class="hero-desc">Looking for the best CAT coaching in Mumbai? CATKing now offers offline MBA entrance coaching at our Mumbai centers in Andheri, Borivali, and Thane.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Andheri</span>
                    <span class="hero-badge">Borivali</span>
                    <span class="hero-badge">Thane</span>
                </div>
            </div>
        </section>

        {{-- ══════════════════════════════════════
             FACULTY BANNER
        ══════════════════════════════════════ --}}
        {{--<div class="faculty-banner-section mt-100">
            <div class="section-inner">
                <div class="faculty-banner-inner">
                    <img src="{{ asset('images/offline_banner_1.jpg') }}" alt="CATKing Faculty — Offline Coaching Centers Mumbai">
                </div>
            </div>
        </div>--}}

        {{-- ══════════════════════════════════════
             CENTER CARDS
        ══════════════════════════════════════ --}}
        <section class="centers-section mt-100">
            <div class="section-inner">

                <div class="centers-header">
                    <div class="section-label">Our Locations</div>
                    <h2 class="section-title">Find a Center <em>Near You</em></h2>
                </div>

                <div class="centers-grid">

                    {{-- Andheri --}}
                    <div class="center-card card-andheri">
                        <div class="center-card-head">
                            <span class="center-pill">Andheri</span>
                        </div>
                        <div class="center-card-body">
                            <h3 class="center-name">CATKing Coaching Center — Andheri</h3>
                            <div class="center-row">
                                <div class="center-row-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                </div>
                                <div class="center-row-content">
                                    <span class="center-row-label">Address</span>
                                    <p class="center-row-text">Office No. 201, 2nd Floor, Vertex Vikas Building, Andheri (East), Mumbai — 400069</p>
                                </div>
                            </div>
                            <div class="center-row">
                                <div class="center-row-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.88 4.18 2 2 0 012.86 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.08-1.08a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                                </div>
                                <div class="center-row-content">
                                    <span class="center-row-label">Phone</span>
                                    <p class="center-row-text">8999118999</p>
                                    <p class="center-row-sub">9:00 AM — 12:00 AM</p>
                                </div>
                            </div>
                            <a href="https://www.google.com/maps/place/19%C2%B007'12.0%22N+72%C2%B050'56.7%22E/@19.120009,72.849078,17z/data=!3m1!4b1!4m4!3m3!8m2!3d19.120009!4d72.849078?entry=ttu&g_ep=EgoyMDI2MDUxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener" class="btn-direction">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                                Get Direction
                            </a>
                        </div>
                    </div>

                    {{-- Thane --}}
                    <div class="center-card card-thane">
                        <div class="center-card-head">
                            <span class="center-pill">Thane</span>
                        </div>
                        <div class="center-card-body">
                            <h3 class="center-name">CATKing Coaching Center — Thane</h3>
                            <div class="center-row">
                                <div class="center-row-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                </div>
                                <div class="center-row-content">
                                    <span class="center-row-label">Address</span>
                                    <p class="center-row-text">2nd Floor, Above Khandelwal Sweets, Opp. Thane Railway Station, Thane (West) — 400601</p>
                                </div>
                            </div>
                            <div class="center-row">
                                <div class="center-row-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.88 4.18 2 2 0 012.86 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.08-1.08a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                                </div>
                                <div class="center-row-content">
                                    <span class="center-row-label">Phone</span>
                                    <p class="center-row-text">8999118999</p>
                                    <p class="center-row-sub">9:00 AM — 12:00 AM</p>
                                </div>
                            </div>
                            <a href="google.com/maps/place/CATKing+-+CAT+Exam+Coaching+in+Thane/@19.1875723,72.9758431,17z/data=!3m1!4b1!4m6!3m5!1s0x3be7b9f26e8f6e01:0xcb69b3f95386fe0e!8m2!3d19.1875723!4d72.9758431!16s%2Fg%2F11h6tkc6x6?entry=tts&g_ep=EgoyMDI1MDUxMS4wIPu8ASoASAFQAw%3D%3D&skid=8cd7aa1d-b964-4d53-86e0-2275cd440b98" target="_blank" rel="noopener" class="btn-direction">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                                Get Direction
                            </a>
                        </div>
                    </div>

                    {{-- Borivali --}}
                    <div class="center-card card-borivali">
                        <div class="center-card-head">
                            <span class="center-pill">Borivali</span>
                        </div>
                        <div class="center-card-body">
                            <h3 class="center-name">CATKing Coaching Center — Borivali</h3>
                            <div class="center-row">
                                <div class="center-row-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                </div>
                                <div class="center-row-content">
                                    <span class="center-row-label">Address</span>
                                    <p class="center-row-text">3rd Floor, 310, Sai Leela Apt, Swami Vivekananda Rd, opp. Moksh Plaza, Datta Park, Borivali West, Mumbai</p>
                                </div>
                            </div>
                            <div class="center-row">
                                <div class="center-row-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.88 4.18 2 2 0 012.86 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.08-1.08a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                                </div>
                                <div class="center-row-content">
                                    <span class="center-row-label">Phone</span>
                                    <p class="center-row-text">8999118999</p>
                                    <p class="center-row-sub">9:00 AM — 12:00 AM</p>
                                </div>
                            </div>
                            <a href="https://www.google.com/maps/search/19.225750,+72.855104?entry=tts&g_ep=EgoyMDI1MDUxMS4wIPu8ASoASAFQAw%3D%3D&skid=fed6ce38-7218-47ad-b97d-3fba7fd31962" target="_blank" rel="noopener" class="btn-direction">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                                Get Direction
                            </a>
                        </div>
                    </div>

                </div>{{-- /centers-grid --}}
            </div>{{-- /section-inner --}}
        </section>

        {{-- ══════════════════════════════════════
             ABOUT
        ══════════════════════════════════════ --}}
        <hr class="section-divider">
        <section class="about-section">
            <div class="section-inner">

                <div class="about-text">
                    <div class="section-label">About Our Centers</div>
                    <h2 class="section-title">Visit CATKing's <em>Offline</em> Coaching Centers in Mumbai</h2>
                    <p>CATKing, India's trusted MBA entrance coaching institute, is now available offline across Mumbai! Our strategically located centers in <strong>Andheri</strong>, <strong>Borivali</strong>, and <strong>Thane</strong> offer expert-led classroom coaching, mock tests, and doubt-solving sessions.</p>
                    <p>Whether you're aiming for CAT, NMAT, CET, SNAP, XAT, or other competitive exams, our experienced faculty and structured programs will help you achieve your dream B-school.</p>
                </div>

                <div class="about-stats">
                    <div class="stat-box">
                        <div class="stat-num">18<span>+</span></div>
                        <div class="stat-desc">Years of MBA coaching excellence</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-num">1200<span>+</span></div>
                        <div class="stat-desc">B-schools our students have cracked</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-num">3</div>
                        <div class="stat-desc">Mumbai centers — Andheri, Borivali & Thane</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-num">6<span>+</span></div>
                        <div class="stat-desc">Exams covered — CAT, NMAT, CET, SNAP & more</div>
                    </div>
                </div>

            </div>{{-- /section-inner --}}
        </section>

        {{-- ══════════════════════════════════════
             CONTACT
        ══════════════════════════════════════ --}}
        <section class="contact-section">
            <div class="section-inner">

                <div class="section-label">Reach Out</div>
                <h2 class="section-title">Get in <em>Touch</em> with CATKing</h2>
                <p class="contact-intro">For general inquiries, class schedules, or batch details, feel free to reach out to our team.</p>

                <div class="contact-grid">
                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div class="contact-card-label">Email</div>
                        <div class="contact-card-value"><a href="mailto:support@catking.in">support@catking.in</a></div>
                        <div class="contact-card-sub">We reply within 24 hours</div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.88 4.18 2 2 0 012.86 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.08-1.08a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        </div>
                        <div class="contact-card-label">New Students</div>
                        <div class="contact-card-value">+91 89991 18999</div>
                        <div class="contact-card-sub">9 AM – 12 AM</div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.88 4.18 2 2 0 012.86 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.08-1.08a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        </div>
                        <div class="contact-card-label">Existing Students</div>
                        <div class="contact-card-value">+91 74788 82888</div>
                        <div class="contact-card-sub">9 AM – 7 PM</div>
                    </div>
                </div>{{-- /contact-grid --}}

                <button type="button" class="btn-callback" onclick="openEnquiryModal()">
                    Request Call Back
                </button>

            </div>{{-- /section-inner --}}
        </section>

    </main>
@endsection
