@extends('layouts.master')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/cat-details-extra.css') }}">
        <style>
            /* Force overflow visibility on parents to allow position:sticky to work */
            html, body {
                overflow-x: visible !important;
            }
            .cat-exam-details-page {
                overflow: visible !important;
            }

            /* Custom sub-header for this page */
            .sub-nav {
                position: -webkit-sticky !important;
                position: sticky !important;
                top: 54px !important; /* Matches desktop main header height in this theme */
                left: 0 !important;
                right: 0 !important;
                height: 60px !important;
                z-index: 1090 !important; /* Just below main header (1100) */
                background: #ffffff !important;
                margin: 0 !important;
                border-bottom: 1px solid #e6e6ec !important;
                display: flex !important;
                align-items: center !important;
                box-shadow: 0 2px 10px rgba(0,0,0,0.05) !important;
            }
            .sub-nav-inner {
                height: 100% !important;
                display: flex !important;
                align-items: center !important;
                width: 100% !important;
                max-width: 1200px !important;
                margin: 0 auto !important;
                padding: 0 20px !important;
            }
            body {
                padding-top: 54px !important; /* Matches main header height */
            }
            .cat-exam-details-page {
                /* No initial padding needed as sub-nav is now sticky below hero */
            }
            @media (max-width: 1024px) {
                .sub-nav {
                    top: 58px !important;
                }
                body {
                    padding-top: 58px !important;
                }
            }
            @media (max-width: 780px) {
                .sub-nav {
                    top: 54px !important;
                    height: 54px !important;
                }
                body {
                    padding-top: 54px !important;
                }
            }
        </style>
    @endpush

    <div class="cat-exam-details-page">
        @include('exams.cat_content')
    </div>

    @include('exams.cat_modals')

    @push('scripts')
        <script src="{{ asset('js/cat-details.js') }}" defer></script>
        <script src="{{ asset('js/cat-whatsapp.js') }}" defer></script>
    @endpush
@endsection
