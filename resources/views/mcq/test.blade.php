@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mcq.css') }}">
    <style>
        .test-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            font-family: 'DM Sans', sans-serif;
        }
        .test-content {
            margin-top: 30px;
            line-height: 1.8;
            color: #444;
            font-size: 16px;
        }
        .test-content table {
            width: 100% !important;
            margin: 30px 0;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        }
        .test-content td, .test-content th {
            padding: 15px 20px;
            border: 1px solid #eee;
        }
        .test-content th {
            background: #f8fafc;
            font-weight: 800;
            color: var(--ink);
        }
        .test-start-section {
            margin-top: 60px;
            padding-top: 40px;
            border-top: 1px solid #f1f3f5;
            text-align: center;
        }
        .back-link {
            text-decoration: none;
            color: #64748b;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 30px;
            transition: color 0.2s;
        }
        .back-link:hover {
            color: var(--orange);
        }
        .happy-learning {
            margin-top: 30px;
            font-weight: 700;
            color: #94a3b8;
            font-size: 18px;
            font-style: italic;
        }
        .start-exam-card-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .start-exam-card {
            max-width: 400px;
            width: 100%;
        }
    </style>
@endpush

@section('content')
<main class="mcq-page">
    <section class="mcq-hero">
        <div class="section-inner">
            <h1>{{ $category['name'] }} <span>Practice</span></h1>
        </div>
    </section>

    <div class="test-container">
        <div class="test-header">
            <a href="{{ route('mcq.category', $category['slug']) }}" class="back-link">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Back to Category
            </a>
        </div>

        <div class="test-content">
            {!! $category['description'] !!}
        </div>

        <div class="test-start-section">
            <div class="start-exam-card-wrapper">
                <div class="exam-card start-exam-card">
                    <a href="{{ route('mcq.questions', $test['slug']) }}" class="exam-card-inner">
                        <div class="exam-card-head">
                            <h3>Start {{ $test['name'] }}</h3>
                            <p>Ready to begin your practice?</p>
                        </div>
                        <span class="exam-card-link">Begin Test Now →</span>
                    </a>
                </div>
            </div>
            <p class="happy-learning">Happy Learning!</p>
        </div>
    </div>
</main>
@endsection
