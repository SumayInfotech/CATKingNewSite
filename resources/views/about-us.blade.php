@extends('layouts.master')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
@endpush

@section('content')
    <main class="about-page">

        {{-- ══════════════════════════════════════
             HERO SECTION
        ══════════════════════════════════════ --}}
        <section class="about-hero">
            <div class="section-inner">
                <div class="hero-text">
                    <h1>Discover Best Classes For The Best <em>Learning</em></h1>
                    <p>CATKing is a Focused Ed — Tech Company established in 2008. Located in the Financial Capital of India, Mumbai is a one-stop destination for each MBA/MS aspirant focused on strategic, engaging and high-quality education.</p>
                </div>
                <div class="hero-image">
                    {{--<div class="image-placeholder">
                        <span>existing graduation-cap + books image sits here unchanged</span>
                    </div>--}}
                </div>
            </div>
        </section>

        {{-- ══════════════════════════════════════
             WHO WE ARE SECTION
        ══════════════════════════════════════ --}}
        <section class="about-intro">
            <div class="section-inner">
                <h2>Who We <em>Are</em></h2>
                <div class="intro-content">
                    <p>We at <strong>CATKing</strong> believe that Education with a blend of strategy can change the way Education is perceived globally. At <strong>CATKing</strong>, our purpose is to improve the quality of education, PAN India by devoting ourselves to one vision i.e. <strong>Empowering with knowledge.</strong></p>

                    <p>Our Team comprises of IIMs, SP Jain, NMIMS, JBIMS and NIT alumni and students. We are committed to putting all our expertise and research resources to bring innovative products to the consumers in terms of quality, efficacy, and simplicity.</p>

                    <a href="https://courses.catking.in/" target="_blank" rel="noopener" class="btn-toppers">
                        Get trained by toppers and get your dream college &rarr;
                    </a>
                </div>
            </div>
        </section>

        {{-- ══════════════════════════════════════
             BOTTOM BLOCKS
        ══════════════════════════════════════ --}}
        <section class="about-blocks">
            <div class="section-inner">

                {{-- Partner with Us --}}
                <div class="block-item">
                    <h3>Partner with <em>Us</em></h3>
                    <p>CATKing is the fastest growing MBA prep organization with its reach to one lakh plus MBA aspirants every year. We have been consistently helping students take the right decision in their career and producing rankers in exams like CAT, CET, XAT, SNAP, TISS, CMAT, GRE, GMAT & BankPO. We help B-schools leverage this brand presence and enhance their visibility among the students.</p>
                    <a href="#" class="link-more">Learn More</a>
                </div>

                {{-- Careers @ CATKing --}}
                <div class="block-item">
                    <h3>Careers @ <em>CATKing</em></h3>
                    <p>If you are excited about challenging roles and are interested in pushing your limits, this is the place for you.</p>
                    <p>If you are interested in joining as an MLP please follow <a href="#" style="color:var(--orange); text-decoration: underline;">this link</a> to join the list of interns from the Top BSchool.</p>
                    <a href="#" class="link-more">Learn More</a>
                </div>

            </div>
        </section>

    </main>
@endsection
