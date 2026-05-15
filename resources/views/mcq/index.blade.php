@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mcq.css') }}">
    <style>
        .mcq-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            font-family: 'DM Sans', sans-serif;
        }
        .mcq-header p {
            font-size: 18px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 40px;
            max-width: 900px;
        }
        .mcq-footer-text {
            margin-top: 80px;
            padding: 40px;
            background: var(--bg-light);
            border-radius: 24px;
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            text-align: center;
        }
        .mcq-footer-text a {
            color: var(--orange);
            text-decoration: none;
            font-weight: 700;
            border-bottom: 2px solid transparent;
            transition: all 0.2s;
        }
        .mcq-footer-text a:hover {
            border-bottom-color: var(--orange);
        }
    </style>
@endpush

@section('content')
<main class="mcq-page">
    <section class="mcq-hero">
        <div class="section-inner">
            <h1>All <span>MCQs</span></h1>
        </div>
    </section>

    <div class="mcq-container">
        <div class="mcq-header">
            <p>Welcome to CATKing's comprehensive platform for free Multiple Choice Questions (MCQs)! We are dedicated to providing students with a valuable resource to enhance their learning experience.</p>
        </div>

        <div class="exams-grid">
            @foreach($categories as $category)
                <div class="exam-card">
                    <a href="{{ route('mcq.category', $category['slug']) }}" class="exam-card-inner">
                        <div class="exam-card-head">
                            <h3>{{ $category['name'] }}</h3>
                            <p>Explore Practice Tests</p>
                        </div>
                        <span class="exam-card-link">View Tests →</span>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="mcq-footer-text">
            <p>We'd be glad to welcome you to the CATKing family and help you grow.<br>
            Visit <a href="https://courses.catking.in/" target="_blank">courses.catking.in</a> to explore the courses we offer. Happy learning!</p>
        </div>
    </div>
</main>
@endsection
