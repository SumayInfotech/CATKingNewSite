@extends('layouts.master')

@section('title', 'Leadership Programs - CATKing')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/leadership.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
@endpush

@section('content')
<div class="leadership-page">
    {{-- Tabs Navigation --}}
    <nav class="leadership-tabs">
        <div class="section-inner">
            <a href="{{ route('flp') }}" class="tab-link {{ Route::is('flp') ? 'active' : '' }}">Future Leaders Program</a>
            <a href="{{ route('mlp') }}" class="tab-link {{ Route::is('mlp') ? 'active' : '' }}">Management Leadership Program</a>
            <a href="{{ route('elp') }}" class="tab-link {{ Route::is('elp') ? 'active' : '' }}">Executive Leadership Program</a>
        </div>
    </nav>

    <div class="section-inner">
        @yield('leadership_content')
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    @yield('leadership_scripts')
@endpush
