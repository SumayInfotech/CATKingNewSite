@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/exams.css') }}">
@endpush

@section('content')
<main class="exams-page">
    <!-- ─────────────────────────────────────────
         1. HERO SECTION — Premium centered hero
         ───────────────────────────────────────── -->
    <section class="exams-hero">
        <div class="hero-bg-overlay"></div>
        <div class="container">
            <div class="hero-content reveal">
                <div class="eyebrow">Acing the Journey</div>
                <h1 class="hero-title">Top Entrance <em>Exams</em></h1>
                <p class="hero-sub">Explore the gateway to India's most prestigious B-Schools. From CAT to CMAT, we provide the insights you need to make an informed choice for your MBA career.</p>
                <div class="hero-badges">
                    <span class="badge-pill">16+ Entrance Exams</span>
                    <span class="badge-pill">Expert Analysis</span>
                    <span class="badge-pill">Proven Strategy</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ─────────────────────────────────────────
         2. EXAMS GRID — Modern interactive cards
         ───────────────────────────────────────── -->
    <section class="exams-grid-section section theme-light">
        <div class="container">
            <div class="section-head text-center reveal">
                <h2 class="section-title">The <em>MBA</em> Landscape</h2>
                <p class="section-sub">Select an exam to understand its pattern, syllabus, and how it fits into your admission goals.</p>
            </div>
            
            <div class="exams-grid reveal">
                @php
                    $exams = [
                        ['name' => 'CAT', 'desc' => 'Common Admission Test'],
                        ['name' => 'CMAT', 'desc' => 'Common Management Admission Test'],
                        ['name' => 'XAT', 'desc' => 'Xavier Aptitude Test'],
                        ['name' => 'NMAT', 'desc' => 'NMIMS Management Aptitude Test'],
                        ['name' => 'GMAT', 'desc' => 'Graduate Management Admission Test'],
                        ['name' => 'GRE', 'desc' => 'Graduate Record Examinations'],
                        ['name' => 'SNAP', 'desc' => 'Symbiosis National Aptitude Test'],
                        ['name' => 'MICAT', 'desc' => 'MICA Admission Test'],
                        ['name' => 'MAT', 'desc' => 'Management Aptitude Test'],
                        ['name' => 'IELTS', 'desc' => 'International English Language Testing'],
                        ['name' => 'IPMAT', 'desc' => 'Integrated Programme in Management'],
                        ['name' => 'NPAT', 'desc' => 'NMIMS Programs After Twelfth'],
                        ['name' => 'CUET PG', 'desc' => 'Common University Entrance Test'],
                        ['name' => 'SRCC GBO', 'desc' => 'Global Business Operations'],
                        ['name' => 'ATMA', 'desc' => 'AIMS Test for Management Admissions'],
                        ['name' => 'CET', 'desc' => 'Common Entrance Test']
                    ];
                @endphp

                @foreach($exams as $exam)
                    <div class="exam-card">
                        <div class="exam-card-inner">
                            <div class="exam-card-head">
                                <h3>{{ $exam['name'] }}</h3>
                                <p>{{ $exam['desc'] }}</p>
                            </div>
                            <a href="{{ $exam['name'] === 'CAT' ? route('exam.cat') : 'javascript:void(0)' }}" class="exam-card-link">View Details →</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ─────────────────────────────────────────
         3. STRATEGY SECTION — Editorial Layout
         ───────────────────────────────────────── -->
    <section class="exams-strategy section theme-dark">
        <div class="container">
            <div class="strategy-grid reveal">
                <div class="strategy-left">
                    <div class="eyebrow orange">Tactical Advantage</div>
                    <h2 class="strategy-title">Why should you <em>analyse</em> past papers?</h2>
                    <p class="strategy-text">Would you enter the battle without knowing what the terrain looked like? Even in cricket, the state of the pitch is of crucial importance for either of the teams. Every competitive exam follows a standard pattern and MBA Entrance exams are no different.</p>
                    <p class="strategy-text">To really know the tricks of the trade, it becomes important for every career aspirant to test the battleground. Analysing of past exam papers is exactly what you need to do to kick start your preparations.</p>
                    
                    <div class="strategy-highlights">
                        <div class="highlight-item">
                            <div class="h-icon">✓</div>
                            <div class="h-text">Understand Question Weightage</div>
                        </div>
                        <div class="highlight-item">
                            <div class="h-icon">✓</div>
                            <div class="h-text">Identify Recurring Patterns</div>
                        </div>
                        <div class="highlight-item">
                            <div class="h-icon">✓</div>
                            <div class="h-text">Master Time Management</div>
                        </div>
                    </div>
                </div>
                <div class="strategy-right">
                    <div class="video-wrapper">
                        <div class="video-frame">
                            <iframe 
                                src="https://www.youtube.com/embed/TV-bPh4KTXA" 
                                title="MBA Entrance Strategy" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="video-meta">
                            <span>Featured Strategy Video</span>
                            <strong>Top 5 MBA entrance exams in India</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ─────────────────────────────────────────
         4. SUPPORT SECTION — How We Can Help
         ───────────────────────────────────────── -->
    <section class="exams-support section theme-light">
        <div class="container">
            <div class="support-inner reveal text-center">
                <div class="eyebrow">The CATKing Advantage</div>
                <h2 class="section-title">How <em>we</em> can help?</h2>
                <div class="support-grid">
                    <div class="support-card">
                        <div class="support-icon">📊</div>
                        <h4>Deep Analysis</h4>
                        <p>We provide a detailed break-up of question types and difficulty levels for every section.</p>
                    </div>
                    <div class="support-card">
                        <div class="support-icon">💡</div>
                        <h4>Expert Insights</h4>
                        <p>Compare your answers against our expert NMAT or CAT analysis to find improvement areas.</p>
                    </div>
                    <div class="support-card">
                        <div class="support-icon">🎯</div>
                        <h4>Goal Setting</h4>
                        <p>Note exactly where you went wrong and improve upon similar questions in the future.</p>
                    </div>
                </div>
                <div class="support-cta">
                    <a href="https://courses.catking.in" class="btn btn-primary">Explore All Courses →</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
