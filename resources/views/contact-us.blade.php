@extends('layouts.master')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contact-us.css') }}">
@endpush

@section('content')
    <main class="contact-page">

        {{-- ══════════════════════════════════════
             HERO
        ══════════════════════════════════════ --}}
        <section class="contact-hero">
            <div class="section-inner">
                <h1>Contact <em>Us</em></h1>
                <p>Get in touch with us to learn about the courses offered.</p>

                <div class="foot-social">
                    <a href="https://chat.whatsapp.com/IzLUzgZ1lIw3HDm3KRILMM" target="_blank" rel="noopener" aria-label="WhatsApp"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M.057 24l1.687-6.163a11.867 11.867 0 0 1-1.587-5.946C.16 5.335 5.495 0 12.05 0a11.817 11.817 0 0 1 8.413 3.488 11.824 11.824 0 0 1 3.48 8.414c-.003 6.557-5.338 11.892-11.893 11.892a11.9 11.9 0 0 1-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884a9.86 9.86 0 0 0 1.51 5.26l.6.95-1 3.65 3.747-.974-.368-.585zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.149-.173.198-.297.297-.495.099-.198.05-.371-.025-.52-.074-.149-.669-1.611-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.371-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z"/></svg></a>
                    <a href="https://www.youtube.com/@SumitCatking" target="_blank" rel="noopener" aria-label="YouTube"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
                    <a href="https://www.instagram.com/catkingeducare/" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg></a>
                    <a href="https://www.facebook.com/rahulcatking/?fref=ts" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                </div>
            </div>
        </section>

        {{-- ══════════════════════════════════════
             MAIN CONTENT
        ══════════════════════════════════════ --}}
        <section class="contact-main">
            <div class="section-inner">

                {{-- Left: CATKing Centers --}}
                <div class="contact-info">
                    <h2>CATKing Centers</h2>

                    {{-- Andheri --}}
                    <div class="center-info-block">
                        <h3>CAT Classes in <span>Andheri</span></h3>
                        <p>Office No. 201, 2nd Floor, Vertex Vikas Building, Andheri (East), Mumbai — 400069</p>
                        <div class="info-item">
                            <strong>Phone:</strong> <span class="val">8999118999</span> <span class="time">9 AM — 7 PM</span>
                        </div>
                        <div class="info-item">
                            <strong>Email:</strong> <span class="val">support@catking.in</span>
                        </div>
                    </div>

                    {{-- Borivali --}}
                    <div class="center-info-block">
                        <h3>CAT Classes in <span>Borivali</span></h3>
                        <p>3rd Floor, Sai Leela Apt, Swami Vivekananda Rd, opp. Moksh Plaza, Borivali West, Mumbai — 400092</p>
                        <div class="info-item">
                            <strong>Phone:</strong> <span class="val">8999118999</span> <span class="time">9 AM — 7 PM</span>
                        </div>
                        <div class="info-item">
                            <strong>Email:</strong> <span class="val">support@catking.in</span>
                        </div>
                    </div>

                    {{-- Thane --}}
                    <div class="center-info-block">
                        <h3>CAT Classes in <span>Thane</span></h3>
                        <p>2nd Floor, Above Khandelwal Sweets, Opp. Thane Railway Station, Ambedkar Chowk, Thane (West) — 400601</p>
                        <div class="info-item">
                            <strong>Phone:</strong> <span class="val">8999118999</span> <span class="time">9 AM — 7 PM</span>
                        </div>
                        <div class="info-item">
                            <strong>Email:</strong> <span class="val">support@catking.in</span>
                        </div>
                    </div>

                </div>

                {{-- Right: Form --}}
                <div class="contact-form">
                    <div class="form-card">
                        <h2>Get in Touch</h2>
                        <form onsubmit="return false;">
                            <div class="form-group">
                                <label>Full Name <span>*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label>Email <span>*</span></label>
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number <span>*</span></label>
                                    <input type="tel" class="form-control" placeholder="Enter mobile number">
                                </div>
                            </div>

                            <button type="button" class="btn-send-otp">Send OTP</button>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" rows="4" placeholder="Your message..."></textarea>
                            </div>

                            <div class="recaptcha-placeholder">
                                <input type="checkbox" id="robot-check">
                                <label for="robot-check">I'm not a robot</label>
                                <span style="margin-left: auto; font-size: 11px; color: #999;">reCAPTCHA</span>
                            </div>

                            <button type="submit" class="btn-submit">Submit Details</button>
                        </form>
                    </div>
                </div>

            </div>
        </section>

    </main>
@endsection
