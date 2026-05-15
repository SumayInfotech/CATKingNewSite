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
    </style>
@endpush

@section('content')
<main class="mcq-page">
    <section class="mcq-hero">
        <div class="section-inner">
            <h1>{{ $category['name'] }} <span>Tests</span></h1>
        </div>
    </section>

    <div class="mcq-container">
        <div class="mcq-header">
            <a href="{{ route('mcq.index') }}" class="back-link">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Back to Categories
            </a>
        </div>

        <div class="exams-grid">
            @foreach($tests as $test)
                <div class="exam-card">
                    <a href="{{ route('mcq.test', $test['slug']) }}" class="exam-card-inner">
                        <div class="exam-card-head">
                            <h3>{{ $test['name'] }}</h3>
                            <p>{{ $category['name'] }} Section</p>
                        </div>
                        <span class="exam-card-link">View Details →</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
