@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/mcq.css') }}">
<style>
    .questions-page-wrapper {
        background: #fcfcfd;
        min-height: 100vh;
    }
    .questions-container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 60px 24px;
        font-family: 'DM Sans', sans-serif;
    }
    .questions-layout {
        display: grid;
        grid-template-columns: 1fr 380px;
        gap: 40px;
        align-items: start;
    }
    .questions-main {
        min-width: 0; /* Fix flexbox overflow */
    }
    
    /* Premium Result Card */
    .result-card {
        background: #fff;
        border: 1px solid #eef0f2;
        border-radius: 24px;
        padding: 50px 40px;
        text-align: center;
        margin-bottom: 50px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.03);
        position: relative;
        overflow: hidden;
    }
    .result-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; height: 6px;
        background: linear-gradient(90deg, var(--orange), var(--orange-dk));
    }
    .result-card h2 {
        font-size: 32px;
        font-weight: 800;
        margin-bottom: 15px;
        color: var(--ink);
    }
    .result-card h2 span {
        color: var(--orange);
    }
    .result-card p {
        color: #666;
        font-size: 17px;
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto 30px;
    }
    .result-card .sad-mascot-container {
        margin: 30px 0;
        display: flex;
        justify-content: center;
    }
    
    .course-links {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 40px;
        flex-wrap: wrap;
    }
    .course-btn {
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 100px;
        padding: 12px 24px;
        display: flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        color: var(--ink);
        font-weight: 700;
        font-size: 15px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,0.04);
    }
    .course-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.08);
        border-color: var(--orange);
    }
    .buy-now {
        background: var(--orange);
        color: var(--ink);
        padding: 6px 16px;
        border-radius: 100px;
        font-size: 13px;
        font-weight: 800;
        transition: all 0.2s;
    }
    .course-btn:hover .buy-now {
        background: var(--ink);
        color: var(--orange);
    }

    /* Enhanced Question Item */
    .question-item {
        background: #fff;
        border: 1px solid #eef0f2;
        border-radius: 24px;
        padding: 40px;
        margin-bottom: 40px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    }
    .question-item:hover {
        border-color: #cbd5e1;
        box-shadow: 0 20px 50px rgba(0,0,0,0.04);
    }
    .question-text {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 30px;
        line-height: 1.7;
        color: var(--ink);
    }
    /* Specifically for VARC passages */
    .question-text strong {
        color: var(--orange-dk);
    }
    .question-image {
        max-width: 100%;
        margin-bottom: 30px;
        border-radius: 16px;
        border: 1px solid #f0f0f0;
        box-shadow: 0 10px 20px rgba(0,0,0,0.02);
    }
    
    .options-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .option-item {
        background: #fff;
        padding: 20px 28px;
        border-radius: 16px;
        font-size: 16px;
        color: #444;
        border: 2px solid #f1f3f5;
        display: flex;
        align-items: center;
        gap: 18px;
        cursor: pointer;
        transition: all 0.25s ease;
        font-weight: 500;
        position: relative;
    }
    .option-item::before {
        content: '';
        width: 24px;
        height: 24px;
        border-radius: 50%;
        border: 2px solid #cbd5e1;
        flex-shrink: 0;
        transition: all 0.2s;
    }
    .option-item:hover {
        background: #f8fafc;
        border-color: #cbd5e1;
    }
    .option-item.selected::before {
        border-color: var(--orange);
        background: var(--orange);
        box-shadow: inset 0 0 0 4px #fff;
    }
    
    .option-item.correct {
        background: #ecfdf5;
        border-color: #10b981;
        color: #065f46;
    }
    .option-item.correct::before {
        border-color: #10b981;
        background: #10b981;
        box-shadow: inset 0 0 0 4px #fff;
    }
    .option-item.wrong {
        background: #fef2f2;
        border-color: #ef4444;
        color: #991b1b;
    }
    .option-item.wrong::before {
        border-color: #ef4444;
        background: #ef4444;
        box-shadow: inset 0 0 0 4px #fff;
    }
    
    .question-footer {
        display: none;
        justify-content: flex-end;
        align-items: center;
        gap: 20px;
        margin-top: 35px;
        padding-top: 30px;
        border-top: 1px solid #f1f3f5;
        animation: premiumReveal 0.5s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }
    @keyframes premiumReveal {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .ans-box {
        background: #f8fafc;
        padding: 14px 30px;
        border-radius: 12px;
        font-weight: 800;
        color: #475569;
        font-size: 15px;
        border: 1px solid #e2e8f0;
    }
    .explanation-btn {
        background: var(--ink);
        color: var(--orange);
        padding: 14px 40px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 800;
        border: none;
        cursor: pointer;
        font-size: 15px;
        transition: all 0.3s;
        box-shadow: 0 10px 20px rgba(15, 16, 33, 0.1);
    }
    .explanation-btn:hover {
        background: var(--orange);
        color: var(--ink);
        transform: translateY(-2px);
    }
    .explanation-content {
        margin-top: 25px;
        padding: 30px;
        background: #fcfcfd;
        border: 1px solid #f1f3f5;
        border-radius: 16px;
        display: none;
        line-height: 1.8;
        font-size: 16px;
        color: #444;
    }

    /* Premium Sidebar */
    .questions-sidebar {
        position: sticky;
        top: 120px;
    }
    .sidebar-card {
        background: #fff;
        border: 1px solid #eef0f2;
        border-radius: 24px;
        padding: 35px 25px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.03);
    }
    .sidebar-title {
        font-size: 20px;
        font-weight: 800;
        margin-bottom: 25px;
        color: var(--ink);
        display: flex;
        align-items: center;
        gap: 12px;
        padding-left: 10px;
        border-left: 4px solid var(--orange);
    }
    
    /* Video Playlist Style */
    .sidebar-video-playlist {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .video-item {
        border-radius: 16px;
        overflow: hidden;
        background: #f8fafc;
        border: 1px solid #f1f3f5;
        transition: all 0.3s;
    }
    .video-item:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        border-color: var(--orange);
    }
    .video-item iframe {
        width: 100%;
        aspect-ratio: 16/9;
        display: block;
    }
    .video-info {
        padding: 15px;
    }
    .video-info span {
        font-size: 11px;
        text-transform: uppercase;
        font-weight: 800;
        color: var(--orange-dk);
        display: block;
        margin-bottom: 5px;
    }
    .video-info strong {
        font-size: 14px;
        font-weight: 700;
        color: var(--ink);
        line-height: 1.4;
        display: block;
    }

    @media (max-width: 1100px) {
        .questions-layout { grid-template-columns: 1fr; }
        .questions-sidebar { position: static; max-width: 600px; margin: 0 auto; }
    }
</style>
@endpush

@section('content')
<main class="mcq-page questions-page-wrapper">
    <section class="mcq-hero">
        <div class="section-inner">
            <h1>{{ $test['name'] }} <span>Practice</span></h1>
        </div>
    </section>

    <div class="questions-container">
        
        {{-- Mock Result Card --}}
        <div class="result-card">
            <h2>Hey <span>Aspirant</span>,</h2>
            <p>We're sorry to inform you that you did not meet the required cutoff for our CATKing Scholarship test. So you are not eligible for discounts on our courses at this time.</p>
            
            <div class="sad-mascot-container">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="#CBD5E1" stroke-width="1.5"/>
                    <path d="M8 15.5C8 15.5 9.5 13.5 12 13.5C14.5 13.5 16 15.5 16 15.5" stroke="#FEA525" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="9" cy="9.5" r="1.2" fill="#475569"/>
                    <circle cx="15" cy="9.5" r="1.2" fill="#475569"/>
                </svg>
            </div>
            
            <p><strong>But don't worry!</strong><br>You can still take advantage of our ongoing discounts of up to <span style="color:var(--orange)">50%</span> on our premium courses available on the website.</p>
            
            <div class="course-links">
                <a href="https://courses.catking.in/courses/cat-2025-turbo" class="course-btn">
                    CAT Turbo Course <span class="buy-now">Buy Now</span>
                </a>
                <a href="https://courses.catking.in/courses/cat-2025-intensive" class="course-btn">
                    CAT Intensive Course <span class="buy-now">Buy Now</span>
                </a>
                <a href="https://courses.catking.in/courses/cat-2025-advance" class="course-btn">
                    CAT Self Study Course <span class="buy-now">Buy Now</span>
                </a>
            </div>
        </div>

        <div class="questions-layout">
            <div class="questions-main">
                @foreach($questions as $index => $question)
                    <div class="question-item">
                        <div class="question-text">
                            <span style="color:var(--orange-dk); font-weight:900; margin-right:10px;">Q.{{ $index + 1 }}</span> {!! $question['name'] !!}
                        </div>

                        @if(isset($question['question_file_data']['full']))
                            <img src="https://catking.in/file/{{ $question['question_file_data']['full'] }}" class="question-image" alt="Question Image">
                        @endif

                        <div class="options-list" data-correct="{{ $question['answer'] }}">
                            <div class="option-item" data-idx="1" onclick="selectOption(this)">A. {!! $question['option1'] !!}</div>
                            <div class="option-item" data-idx="2" onclick="selectOption(this)">B. {!! $question['option2'] !!}</div>
                            <div class="option-item" data-idx="3" onclick="selectOption(this)">C. {!! $question['option3'] !!}</div>
                            <div class="option-item" data-idx="4" onclick="selectOption(this)">D. {!! $question['option4'] !!}</div>
                        </div>

                        <div class="question-footer" id="footer-{{ $question['id'] }}">
                            <div class="ans-box">Correct Answer: {{ strtoupper($question['answer'] == 1 ? 'A' : ($question['answer'] == 2 ? 'B' : ($question['answer'] == 3 ? 'C' : 'D'))) }}</div>
                            <button class="explanation-btn" onclick="toggleExplanation('expl-{{ $question['id'] }}')">Show Explanation</button>
                        </div>

                        <div class="explanation-content" id="expl-{{ $question['id'] }}">
                            <h4 style="margin-bottom:15px; color:var(--ink); font-weight:800; font-size:18px;">Detailed Analysis:</h4>
                            <div style="color:#555; line-height:1.8;">
                                {!! $question['explanation'] !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="questions-sidebar">
                <div class="sidebar-card">
                    <h3 class="sidebar-title">Useful Resources</h3>
                    
                    <div class="sidebar-video-playlist">
                        {{-- Manually refining the sidebar content if it's just raw HTML --}}
                        @php
                            // Check if other_content contains youtube links and style them
                            $sidebarContent = $test['other_content'];
                            // Attempt to wrap existing iframes in our premium classes via string replacement if needed,
                            // or just render it if it's already styled.
                            // Given the screenshot, let's assume it has some iframes.
                        @endphp
                        
                        <div class="sidebar-content-raw">
                            {!! $sidebarContent !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    function selectOption(el) {
        const list = el.parentElement;
        const correctIdx = list.getAttribute('data-correct');
        const selectedIdx = el.getAttribute('data-idx');
        const questionItem = list.parentElement;
        const footer = questionItem.querySelector('.question-footer');

        if (list.classList.contains('answered')) return;
        list.classList.add('answered');

        const options = list.querySelectorAll('.option-item');
        options.forEach(opt => {
            const idx = opt.getAttribute('data-idx');
            if (idx == correctIdx) {
                opt.classList.add('correct');
            } else if (idx == selectedIdx) {
                opt.classList.add('wrong');
            }
        });

        footer.style.display = 'flex';
    }

    function toggleExplanation(id) {
        var el = document.getElementById(id);
        var btn = event.target;
        if (el.style.display === 'block') {
            el.style.display = 'none';
            btn.innerText = 'Show Explanation';
        } else {
            el.style.display = 'block';
            btn.innerText = 'Hide Explanation';
        }
    }

    // Auto-style iframes in sidebar
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarIframes = document.querySelectorAll('.questions-sidebar iframe');
        sidebarIframes.forEach(iframe => {
            const wrapper = document.createElement('div');
            wrapper.className = 'video-item';
            iframe.parentNode.insertBefore(wrapper, iframe);
            wrapper.appendChild(iframe);
        });
    });
</script>
@endpush
