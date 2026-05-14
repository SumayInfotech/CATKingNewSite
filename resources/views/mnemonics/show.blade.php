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
                    <h1>{{ $mnemonic['name'] }}</h1>
                </div>
            </div>
        </section>

        {{-- ══════════════════════════════════════
             DETAIL SECTION
        ══════════════════════════════════════ --}}
        <section class="mnemonic-detail">
            <div class="section-inner">
                
                <div class="mnemonic-layout">
                    
                    {{-- Main Content Column --}}
                    <div class="mnemonic-main">
                        <div class="detail-header">
                            <h2>{{ $mnemonic['name'] }}</h2>
                            
                            {{-- Chapter Selector Dropdown --}}
                            <select class="chapter-select" onchange="window.location.href=this.value">
                                @foreach($mnemonics as $m)
                                    <option value="{{ route('mnemonic.show', $m['slug']) }}" {{ $m['slug'] == $mnemonic['slug'] ? 'selected' : '' }}>
                                        Chapter {{ $m['chapter'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="detail-content">
                            @php
                                // Fix image paths in description if they are relative
                                $description = $mnemonic['description'];
                                $description = str_replace('src="/storage/', 'src="https://catking.in/storage/', $description);
                            @endphp
                            {!! $description !!}
                        </div>

                        {{-- Pagination Navigation --}}
                        <div class="mnemonic-nav">
                            @if($prev)
                                <a href="{{ route('mnemonic.show', $prev['slug']) }}" class="nav-btn prev">
                                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                                    <span>Chapter {{ $prev['chapter'] }}</span>
                                </a>
                            @else
                                <div></div>
                            @endif

                            @if($next)
                                <a href="{{ route('mnemonic.show', $next['slug']) }}" class="nav-btn next">
                                    <span>Chapter {{ $next['chapter'] }}</span>
                                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                                </a>
                            @else
                                <div></div>
                            @endif
                        </div>
                    </div>

                    {{-- Right Sidebar --}}
                    <aside class="detail-sidebar">
                        <div class="sidebar-title">CHAPTERS</div>
                        <div class="sidebar-list">
                            @foreach($mnemonics as $m)
                                <a href="{{ route('mnemonic.show', $m['slug']) }}" class="sidebar-item {{ $m['slug'] == $mnemonic['slug'] ? 'active' : '' }}">
                                    <div class="sidebar-thumb">
                                        @if(isset($m['file_data']['full']))
                                            <img src="https://catking.in/file/{{ $m['file_data']['full'] }}" alt="{{ $m['name'] }}">
                                        @else
                                            <span style="font-size: 10px; color: #ccc;">img</span>
                                        @endif
                                    </div>
                                    <h4>Chapter {{ $m['chapter'] }}: {{ $m['name'] }}</h4>
                                </a>
                            @endforeach
                        </div>
                        <div class="sidebar-footer">
                            + chapters {{ count($mnemonics) }} total
                        </div>
                    </aside>

                </div>

            </div>
        </section>

    </main>
@endsection
