@extends('layouts.master')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mnemonics.css') }}">
@endpush

@section('content')
    <main class="mnemonics-page">

        {{-- ══════════════════════════════════════
             HERO SECTION
        ══════════════════════════════════════ --}}
        <section class="mnemonics-hero">
            <div class="section-inner">
                <div class="hero-content">
                    <h1>Mnemonics</h1>
                    {{--<div class="hero-image">
                        <div class="image-placeholder">
                            <span>existing graduation-cap + books image sits here unchanged</span>
                        </div>
                    </div>--}}
                </div>
            </div>
        </section>

        {{-- ══════════════════════════════════════
             LISTING SECTION
        ══════════════════════════════════════ --}}
        <section class="mnemonics-listing">
            <div class="section-inner">
                <h2>Mnemonics</h2>
                <p class="subtitle">
                    Mnemonics are memory aids or techniques that help individuals remember information more easily. They are strategies or devices that assist in encoding, storing, and retrieving information from memory.
                </p>

                <div class="mnemonics-grid">
                    @foreach($mnemonics as $mnemonic)
                        <div class="mnemonic-card">
                            <div class="card-img">
                                @if(isset($mnemonic['file_data']['full']))
                                    <img src="https://catking.in/file/{{ $mnemonic['file_data']['full'] }}" alt="{{ $mnemonic['name'] }}">
                                @else
                                    <span>illustration</span>
                                @endif
                            </div>
                            <div class="card-body">
                                <h3>Chapter {{ $mnemonic['chapter'] }} : {{ $mnemonic['name'] }}</h3>
                                <a href="{{ route('mnemonic.show', $mnemonic['slug']) }}" class="btn-read">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="grid-footer">
                    {{ count($mnemonics) }} of {{ count($mnemonics) }} chapters shown
                </div>
            </div>
        </section>

    </main>
@endsection
