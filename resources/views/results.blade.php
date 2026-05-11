@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/results.css') }}">
    <script>
        window.ASSET_URL = "{{ asset('') }}";
    </script>
@endpush

@section('content')

<!-- ============ HERO ============ -->
<section class="hero">
  <video class="hero-video" autoplay muted loop playsinline preload="auto" poster="{{ asset('results/hero_poster.jpg') }}" aria-hidden="true">
    <source src="{{ asset('results/hero_loop.webm') }}" type="video/webm">
    <source src="{{ asset('results/hero_loop.mp4') }}" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>
    <div class="hero-inner">
    <div class="hero-left">
      <h1>
        <span class="lite">Results that</span>
        <span class="o">speak louder</span>
        than <span class="m">claims.</span>
      </h1>
      <p class="sub">2,080+ IIM converts. 9,000+ IIM calls. 5,000+ scorers at 99 percentile and above. Every number on this page has been audited by KPMG or Brickworks Ratings. We are the only MBA prep in India that can say that.</p>
      <div class="verif-row">
        <div class="verif-txt">
          <b>Audited Results, Not Marketing Claims</b>
          <span>KPMG Assurance (2020), Brickworks Ratings (2022, 2023)</span>
        </div>
      </div>
      <div class="ctas">
        <a href="https://courses.catking.in/cat-intensive-2026" class="btn p">Enroll Now</a>
        {{--<a href="#fcta" class="btn s">Request a Callback</a>--}}
      </div>
    </div>
    <div class="hero-right">
      <div class="countdown-card countdown-list">
        <div class="cd-list-head">
          <div class="cd-list-eyebrow">Admission cycle 2026-27</div>
          <div class="cd-list-title">Days left. <em>You could be next.</em></div>
        </div>
        <div class="cd-rows">
          <div class="cd-row" data-exam="cat">
            <div class="cd-row-main">
              <div class="cd-row-exam">CAT 2026</div>
              <div class="cd-row-date">Sun, 29 Nov 2026</div>
            </div>
            <div class="cd-row-num"><span id="cdDcat">-</span><small>days</small></div>
          </div>
          <div class="cd-row" data-exam="xat">
            <div class="cd-row-main">
              <div class="cd-row-exam">XAT 2027</div>
              <div class="cd-row-date">Sun, 03 Jan 2027</div>
            </div>
            <div class="cd-row-num"><span id="cdDxat">-</span><small>days</small></div>
          </div>
          <div class="cd-row" data-exam="nmat">
            <div class="cd-row-main">
              <div class="cd-row-exam">NMAT 2026</div>
              <div class="cd-row-date">Tue, 06 Oct 2026</div>
            </div>
            <div class="cd-row-num"><span id="cdDnmat">-</span><small>days</small></div>
          </div>
          <div class="cd-row" data-exam="snap">
            <div class="cd-row-main">
              <div class="cd-row-exam">SNAP 2026</div>
              <div class="cd-row-date">Sun, 13 Dec 2026</div>
            </div>
            <div class="cd-row-num"><span id="cdDsnap">-</span><small>days</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ HERO STATS STRIP ============ -->
<section class="hero-stats">
  <div class="hs-inner">
    <div class="hs-block">
      <div class="hs-num" data-target="9000">9,000+</div>
      <div class="hs-lbl">IIM Calls · 2024-25</div>
      <div class="hs-growth">▲ +32% YoY</div>
      <div class="hs-bar"><i style="height:30%"></i><i style="height:48%"></i><i style="height:65%"></i><i style="height:80%"></i><i class="hot" style="height:100%"></i></div>
    </div>
    <div class="hs-block">
      <div class="hs-num" data-target="2080">2,080+</div>
      <div class="hs-lbl">IIM Converts · 2024-25</div>
      <div class="hs-growth">▲ +13% YoY</div>
      <div class="hs-bar"><i style="height:25%"></i><i style="height:42%"></i><i style="height:58%"></i><i style="height:75%"></i><i class="hot" style="height:100%"></i></div>
    </div>
    <div class="hs-block">
      <div class="hs-num" data-target="460">460+</div>
      <div class="hs-lbl">BLACKI IIM Converts</div>
      <div class="hs-growth">▲ +18% YoY</div>
      <div class="hs-bar"><i style="height:20%"></i><i style="height:38%"></i><i style="height:55%"></i><i style="height:78%"></i><i class="hot" style="height:100%"></i></div>
    </div>
    <div class="hs-block">
      <div class="hs-num" data-target="200">200+</div>
      <div class="hs-lbl">NMIMS Converts</div>
      <div class="hs-growth">▲ +11% YoY</div>
      <div class="hs-bar"><i style="height:28%"></i><i style="height:45%"></i><i style="height:62%"></i><i style="height:80%"></i><i class="hot" style="height:100%"></i></div>
    </div>
  </div>
</section>

<!-- ============ LIVE RESULTS TRACKER ============ -->
<section class="live" id="liveResults">
  <div class="live-inner">
    <div class="live-head">
      <div class="lh-left">
        <div class="live-eyebrow">Live Results 2025-26</div>
        <h2>Results <em>rolling in</em> right now.</h2>
        <p class="lh-sub">IIM and top B-school admission season is underway. Every student below is a verified 2025-26 convert, added within 48 hours of their admit letter.</p>
      </div>
      <div class="lh-stats">
        <div class="lh-stat"><div class="v" id="lsTotal">0</div><div class="l">Converts So Far</div></div>
        <div class="lh-stat"><div class="v" id="lsWeek">0</div><div class="l">This Week</div></div>
        <div class="lh-stat"><div class="v" id="lsToday">0</div><div class="l">Added Today</div></div>
      </div>
    </div>

    <div class="live-tabs" id="liveTabs"><!-- populated by JS --></div>
    <div class="live-grid" id="liveGrid"><!-- populated by JS --></div>

    <div class="live-live-row">
      <div class="llu">Last updated <b id="lsUpdated">just now</b> · Maintained by the CATKing admissions team</div>
      <a href="#results" class="llu">See all results →</a>
    </div>
  </div>
</section>

<!-- ============ FEATURED SPOTLIGHT with 5-VIDEO CASCADE ============ -->
<section class="spotlight" id="spotlight">
  <div class="sp-inner">
    <div>
      <div class="v-stack" id="vStack">
        <div class="v-card" data-pos="4" data-idx="4" data-yt="TV-bPh4KTXA">
          <div class="v-thumb" style="background-image:url('https://img.youtube.com/vi/TV-bPh4KTXA/hqdefault.jpg')"></div>
          <div class="v-tag">Interview 5</div>
          <div class="v-score">99.02 %ile</div>
          <div class="v-play">▶</div>
          <div class="v-meta"><div class="v-name">Dhruvsingh<small>CAT 2023 · 99.02 %ile</small></div></div>
          <div class="v-dur">08:37</div>
        </div>
        <div class="v-card" data-pos="3" data-idx="3" data-yt="ZdPtNvamYlA">
          <div class="v-thumb" style="background-image:url('https://img.youtube.com/vi/ZdPtNvamYlA/hqdefault.jpg')"></div>
          <div class="v-tag">Interview 4</div>
          <div class="v-score">99.22 %ile</div>
          <div class="v-play">▶</div>
          <div class="v-meta"><div class="v-name">Rishi<small>CAT 2023 · 99.22 %ile</small></div></div>
          <div class="v-dur">10:51</div>
        </div>
        <div class="v-card" data-pos="2" data-idx="2" data-yt="7_Tz4tkaQPo">
          <div class="v-thumb" style="background-image:url('https://img.youtube.com/vi/7_Tz4tkaQPo/hqdefault.jpg')"></div>
          <div class="v-tag">Interview 3</div>
          <div class="v-score">99.29 %ile</div>
          <div class="v-play">▶</div>
          <div class="v-meta"><div class="v-name">Ajmal<small>CAT 2023 · 99.29 %ile</small></div></div>
          <div class="v-dur">12:05</div>
        </div>
        <div class="v-card" data-pos="1" data-idx="1" data-yt="NT0F6t31heM">
          <div class="v-thumb" style="background-image:url('https://img.youtube.com/vi/NT0F6t31heM/hqdefault.jpg')"></div>
          <div class="v-tag">Interview 2</div>
          <div class="v-score">99.36 %ile</div>
          <div class="v-play">▶</div>
          <div class="v-meta"><div class="v-name">Akshma<small>CAT 2023 · 99.36 %ile</small></div></div>
          <div class="v-dur">09:18</div>
        </div>
        <div class="v-card" data-pos="0" data-idx="0" data-yt="jdPUhiNhloc">
          <div class="v-thumb" style="background-image:url('https://img.youtube.com/vi/jdPUhiNhloc/hqdefault.jpg')"></div>
          <div class="v-tag">Featured</div>
          <div class="v-score">99.66 %ile</div>
          <div class="v-play">▶</div>
          <div class="v-meta"><div class="v-name">Jai<small>CAT 2023 · 99.66 %ile</small></div></div>
          <div class="v-dur">11:42</div>
        </div>
      </div>
      <div class="v-stack-nav">
        <div class="v-dots" id="vDots">
          <div class="v-dot act" data-i="0"></div>
          <div class="v-dot" data-i="1"></div>
          <div class="v-dot" data-i="2"></div>
          <div class="v-dot" data-i="3"></div>
          <div class="v-dot" data-i="4"></div>
        </div>
        <div class="v-count">Story <b id="vCount">1</b> of 5</div>
      </div>
    </div>

    <div class="sp-text" id="spText">
      <!-- Content populated dynamically by JS from FEATURED_STORIES data -->
    </div>
  </div>
</section>

<!-- ============ COMPOUNDING GROWTH ============ -->
<section class="compounding" id="compounding">
  <div class="comp-inner">
    <div class="comp-head">
      <div class="eyebrow"><span class="dot"></span>Since 2008 · 18 Years of Compounding Wins</div>
      <h2>Every cycle. <em>Bigger. Audited. Repeating.</em></h2>
      <p>The Year, college, and exam filters below update this stats panel and chart from the static results dataset.</p>
    </div>

    <div class="comp-grid">
      <div class="comp-left">
        <div class="comp-stats-panel" id="compStatsPanel"><!-- populated by JS --></div>
      </div>
      <div class="comp-right">
        <div class="growth-card">
          <svg class="growth-chart" id="growthChart" viewBox="0 0 1200 340" preserveAspectRatio="xMidYMid meet" role="img" aria-label="CATKing filtered convert count per cycle">
            <defs>
              <linearGradient id="growthArea" x1="0" x2="0" y1="0" y2="1">
                <stop offset="0%" stop-color="#FEA82F" stop-opacity="0.32"/>
                <stop offset="100%" stop-color="#FEA82F" stop-opacity="0"/>
              </linearGradient>
              <linearGradient id="growthLine" x1="0" x2="1" y1="0" y2="0">
                <stop offset="0%" stop-color="#F89B1A"/>
                <stop offset="100%" stop-color="#E8951F"/>
              </linearGradient>
            </defs>
            <line x1="60" y1="280" x2="1160" y2="280" stroke="#d9dde4" stroke-width="1"/>
            <line x1="60" y1="210" x2="1160" y2="210" stroke="#eceff3" stroke-width="1" stroke-dasharray="3 4"/>
            <line x1="60" y1="140" x2="1160" y2="140" stroke="#eceff3" stroke-width="1" stroke-dasharray="3 4"/>
            <line x1="60" y1="70" x2="1160" y2="70" stroke="#eceff3" stroke-width="1" stroke-dasharray="3 4"/>
            <text x="50" y="284" text-anchor="end" font-size="10" fill="#8b93a3">0</text>
            <text x="50" y="214" text-anchor="end" font-size="10" fill="#8b93a3">520</text>
            <text x="50" y="144" text-anchor="end" font-size="10" fill="#8b93a3">1040</text>
            <text x="50" y="74" text-anchor="end" font-size="10" fill="#8b93a3">1560</text>
            <text x="50" y="24" text-anchor="end" font-size="10" fill="#8b93a3">2080</text>
            <g id="growthDynamic"></g>
          </svg>
          <div class="growth-tooltip" id="growthTooltip" role="tooltip" aria-hidden="true"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ MERGED HALL OF FAME + BROWSE ============ -->
<section class="hof" id="results">
  <div class="hof-inner">
    <div class="hof-filters" id="hofFilters">
      <div class="hf-row">
        <div class="hf-row-tabs" data-axis="year">
          <button class="act" data-v="all">All</button>
          <button data-v="2024-25">2024-25</button>
          <button data-v="2023-24">2023-24</button>
          <button data-v="2022-23">2022-23</button>
          <button data-v="2021-22">2021-22</button>
          <button data-v="2020-21">2020-21</button>
          <button data-v="before-2020">Before 2020</button>
        </div>
      </div>
      <div class="hf-row">
        <div class="hf-row-tabs" data-axis="group">
          <button class="act" data-v="all">All Converts</button>
          <button data-v="blacki-sm">IIM BLACKI-SM</button>
          <button data-v="other-iim">Other IIMs</button>
          <button data-v="nmims">NMIMS</button>
          <button data-v="other-top">Other Top B-Schools</button>
        </div>
      </div>
      <div class="hf-row">
        <div class="hf-row-tabs" data-axis="exam">
          <button class="act" data-v="all">All</button>
          <button data-v="cat">CAT</button>
          <button data-v="nmat">NMAT</button>
          <button data-v="xat">XAT</button>
          <button data-v="snap">SNAP</button>
        </div>
      </div>
    </div>

    <div class="hf-meta">
      <div class="hf-count"><span id="hfCountNum">-</span> verified converts match your filters</div>
      <button class="hf-reset" id="hfReset">Reset filters</button>
    </div>

    <div class="hof-grid" id="hofGrid"><!-- Populated by JS --></div>
    <div class="hf-empty" id="hfEmpty" hidden>
      <b>No converts match this combination.</b>
      <p>Try widening one of the filters above. CATKing has 5,000+ verified scorers across 18 years.</p>
    </div>

    <div class="hf-more" id="hfMoreWrap"><a href="javascript:void(0)" id="hfMoreBtn">View more →</a></div>
  </div>
</section>

<!-- ============ TESTIMONIAL CAROUSEL ============ -->
<section class="tcar-sec" id="videos">
  <div class="tcar-inner">
    <div class="tcar-head">
      <div>
        <div class="tcar-eyebrow">Real voices from @SumitCatking</div>
        <h2>Hear it from our <span class="serif">toppers.</span></h2>
        <p>11 topper interviews on camera. Every percentile is verified. Scroll horizontally and tap any card to open the full interview.</p>
      </div>
      <div class="tcar-ctrls">
        <button id="tcarPrev" aria-label="Previous">‹</button>
        <button id="tcarNext" aria-label="Next">›</button>
      </div>
    </div>

    <div class="tcar-wrap">
      <div class="tcar-scroll" id="tcarScroll">
        <div class="tcar-card" onclick="openVideo('Jai','CAT 2023 · 99.66 %ile','jdPUhiNhloc')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/jdPUhiNhloc/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">99.66</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Jai</div>
            <div class="tcar-exam">CAT 2023 · 99.66 %ile</div>
            <div class="tcar-quote">I stopped chasing mocks. I started chasing clarity.</div>
          </div>
        </div>
        <div class="tcar-card" onclick="openVideo('Akshma','CAT 2023 · 99.36 %ile','NT0F6t31heM')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/NT0F6t31heM/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">99.36</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Akshma</div>
            <div class="tcar-exam">CAT 2023 · 99.36 %ile</div>
            <div class="tcar-quote">My first mock was 78. I almost quit. Then I found the right plan.</div>
          </div>
        </div>
        <div class="tcar-card" onclick="openVideo('Ajmal','CAT 2023 · 99.29 %ile','7_Tz4tkaQPo')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/7_Tz4tkaQPo/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">99.29</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Ajmal</div>
            <div class="tcar-exam">CAT 2023 · 99.29 %ile</div>
            <div class="tcar-quote">Full-time job. Two hours a day. 99.29 on CAT.</div>
          </div>
        </div>
        <div class="tcar-card" onclick="openVideo('Rishi','CAT 2023 · 99.22 %ile','ZdPtNvamYlA')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/ZdPtNvamYlA/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">99.22</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Rishi</div>
            <div class="tcar-exam">CAT 2023 · 99.22 %ile</div>
            <div class="tcar-quote">94.3 first attempt. I retook. Second attempt is a different story.</div>
          </div>
        </div>
        <div class="tcar-card" onclick="openVideo('Dhruvsingh','CAT 2023 · 99.02 %ile','TV-bPh4KTXA')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/TV-bPh4KTXA/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">99.02</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Dhruvsingh</div>
            <div class="tcar-exam">CAT 2023 · 99.02 %ile</div>
            <div class="tcar-quote">Engineers keep losing marks in VARC. Here is why.</div>
          </div>
        </div>
        <div class="tcar-card" onclick="openVideo('Muskan','CATKing CAT Topper','X9CxNhGAqDM')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/X9CxNhGAqDM/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">99+</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Muskan</div>
            <div class="tcar-exam">CATKing CAT Topper</div>
            <div class="tcar-quote">The mentor check-in every Sunday changed everything for me.</div>
          </div>
        </div>
        <div class="tcar-card" onclick="openVideo('Mayank','CAT 2023 · 99 %ile','QV7HwpMVrXo')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/QV7HwpMVrXo/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">99.00</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Mayank</div>
            <div class="tcar-exam">CAT 2023 · 99 %ile</div>
            <div class="tcar-quote">Sectional strategy is what separates 95 %ile from 99 %ile.</div>
          </div>
        </div>
        <div class="tcar-card" onclick="openVideo('Sarthak','CAT 2023 · 99 %ile','2T4myWfkQGQ')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/2T4myWfkQGQ/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">99.00</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Sarthak</div>
            <div class="tcar-exam">CAT 2023 · 99 %ile</div>
            <div class="tcar-quote">Mock analysis after every attempt. Not the score. The why.</div>
          </div>
        </div>
        <div class="tcar-card" onclick="openVideo('Gourav','CAT 2023 · 99 %ile','8bch7T_WFj0')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/8bch7T_WFj0/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">99.00</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Gourav</div>
            <div class="tcar-exam">CAT 2023 · 99 %ile</div>
            <div class="tcar-quote">Consistency beats intensity. 2 hours daily beat weekend sprints.</div>
          </div>
        </div>
        <div class="tcar-card" onclick="openVideo('Akshama','CAT 2023 · 99 %ile','IlrURaX6-fI')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/IlrURaX6-fI/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">99.00</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Akshama</div>
            <div class="tcar-exam">CAT 2023 · 99 %ile</div>
            <div class="tcar-quote">Non-engineer, 99 %ile. VARC was my weapon, not my weakness.</div>
          </div>
        </div>
        <div class="tcar-card" onclick="openVideo('Romit','NMAT · Score 262','pKEQ3zC_6V4')">
          <div class="tcar-thumb"><img src="https://img.youtube.com/vi/pKEQ3zC_6V4/hqdefault.jpg" alt=""></div>
          <div class="tcar-badge">Verified</div>
          <div class="tcar-score">262</div>
          <div class="tcar-play">▶</div>
          <div class="tcar-meta">
            <div class="tcar-name">Romit</div>
            <div class="tcar-exam">NMAT · Score 262</div>
            <div class="tcar-quote">NMIMS was my goal from day one. Got it with 262 on NMAT.</div>
          </div>
        </div>
      </div>
      <div class="tcar-scroll-ind" id="tcarInd"></div>
    </div>
  </div>
</section>

<!-- ============ PREDICTED / EXPECTED QUESTIONS (#9) ============ -->
<section class="pred" id="predicted">
  <div class="pred-inner">
    <div class="pred-head">
      <h2>We don't just teach CAT. We <em>predict it.</em></h2>
      <p>Sumit Sir and the CATKing faculty publish expected-question videos on YouTube weeks before every CAT. When the actual paper dropped, these questions appeared with uncanny accuracy. Here are three from CAT 2024, each with hit rate verified by student feedback.</p>
    </div>
    <div class="pred-grid" id="predGrid">
      <div class="pred-card" data-yt="jdPUhiNhloc" data-title="Expected QA Questions for CAT 2024">
        <div class="pred-card-thumb">
          <img src="https://i.ytimg.com/vi/jdPUhiNhloc/hqdefault.jpg" alt="">
          <div class="pred-card-badge">CAT 2024 &middot; Hit</div>
          <div class="pred-card-play"><div class="pc-btn">&#9654;</div></div>
        </div>
        <div class="pred-card-body">
          <div class="pred-card-title">Expected QA Questions for CAT 2024 &middot; Probability &amp; Mixtures</div>
          <div class="pred-card-meta">
            <span class="pred-card-date">Published 15 days before CAT</span>
            <span class="pred-card-acc">8 of 10 matched</span>
          </div>
        </div>
      </div>

      <div class="pred-card" data-yt="NT0F6t31heM" data-title="DILR Predictions for CAT 2024">
        <div class="pred-card-thumb">
          <img src="https://i.ytimg.com/vi/NT0F6t31heM/hqdefault.jpg" alt="">
          <div class="pred-card-badge">CAT 2024 &middot; Hit</div>
          <div class="pred-card-play"><div class="pc-btn">&#9654;</div></div>
        </div>
        <div class="pred-card-body">
          <div class="pred-card-title">DILR Predictions for CAT 2024 &middot; Arrangements &amp; Games</div>
          <div class="pred-card-meta">
            <span class="pred-card-date">Published 22 days before CAT</span>
            <span class="pred-card-acc">3 of 4 sets matched</span>
          </div>
        </div>
      </div>

      <div class="pred-card" data-yt="7_Tz4tkaQPo" data-title="VARC Reading Passage Predictions">
        <div class="pred-card-thumb">
          <img src="https://i.ytimg.com/vi/7_Tz4tkaQPo/hqdefault.jpg" alt="">
          <div class="pred-card-badge">CAT 2024 &middot; Hit</div>
          <div class="pred-card-play"><div class="pc-btn">&#9654;</div></div>
        </div>
        <div class="pred-card-body">
          <div class="pred-card-title">VARC Passage Themes &middot; Expected reading areas for CAT 2024</div>
          <div class="pred-card-meta">
            <span class="pred-card-date">Published 10 days before CAT</span>
            <span class="pred-card-acc">All 4 themes matched</span>
          </div>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:32px;">
      <a href="https://www.youtube.com/@catking" target="_blank" rel="noopener" class="faq-more-btn">Watch all prediction videos on YouTube &#8599;</a>
    </div>
  </div>
</section>

<!-- ============ OUTSTANDING TOPPERS ============ -->
<section class="results-toppers" id="outstandingToppers">
  <div class="results-toppers-inner">
    <div class="results-toppers-head">
      <h2>Meet our outstanding <em>toppers.</em></h2>
      <p>From aspirants to achievers - you can be here too. Why wait? Join CATKing now.</p>
    </div>
    <div class="results-toppers-shell">
      <button class="results-slider-btn prev" type="button" data-slider-prev="topperRail" aria-label="Previous topper">&#8249;</button>
      <div class="results-topper-rail" id="topperRail">
        <div class="slider-item">
          <img src="https://catking.in/file/media_library/8787/68013d7802e8b.png" alt="Priyanshu Tiwari" loading="lazy">
          <h5>Priyanshu</h5>
          <p>IIM Ahmedabad</p>
        </div>
        <div class="slider-item">
          <img src="https://catking.in/file/media_library/8780/68013909e87e1.png" alt="Aniruddha Sharma" loading="lazy">
          <h5>Aniruddha</h5>
          <p>IIM Ahmedabad</p>
        </div>
        <div class="slider-item">
          <img src="https://catking.in/file/media_library/8786/68013d3d83e3c.png" alt="Prafull Sharma" loading="lazy">
          <h5>Prafull</h5>
          <p>IIM Ahmedabad</p>
        </div>
        <div class="slider-item">
          <img src="https://catking.in/file/media_library/8876/conversions/68079c6803f08-thumb_400.jpg" alt="Kavya Reddy" loading="lazy">
          <h5>Kavya</h5>
          <p>IIM Bangalore</p>
        </div>
        <div class="slider-item">
          <img src="https://catking.in/file/media_library/8781/6801397b2eb0f.png" alt="Arjun Reddy" loading="lazy">
          <h5>Arjun</h5>
          <p>IIM Calcutta</p>
        </div>
        <div class="slider-item">
          <img src="https://catking.in/file/media_library/8779/6801386e88315.png" alt="Sneha Kulkarni" loading="lazy">
          <h5>Sneha</h5>
          <p>IIM Lucknow</p>
        </div>
        <div class="slider-item">
          <img src="https://catking.in/file/media_library/8784/68013c3cd17bd.png" alt="Sai Dinesh" loading="lazy">
          <h5>Sai Dinesh</h5>
          <p>IIM Indore</p>
        </div>
      </div>
      <button class="results-slider-btn next" type="button" data-slider-next="topperRail" aria-label="Next topper">&#8250;</button>
    </div>
  </div>
</section>

<!-- ============ SCORECARD SLIDER ============ -->
<section class="result-scorecards" id="scorecardSlider">
  <div class="result-scorecards-inner">
    <div class="result-scorecards-head">
      <h2>Verified CAT scorecards from our <em>toppers.</em></h2>
      <p>Swipe through real score previews and open any card to view the full scorecard.</p>
    </div>
    <div class="result-scorecards-shell">
      <button class="results-slider-btn prev" type="button" data-slider-prev="scorecardRail" aria-label="Previous scorecard">&#8249;</button>
      <div class="result-scorecard-rail" id="scorecardRail">
        <article class="result-scorecard-card">
          <div class="result-scorecard-person">
            <div class="result-scorecard-ava">
              <img src="https://catking.in/file/media_library/8780/68013909e87e1.png" alt="Aniruddha Sharma">
              <div class="result-scorecard-badge">★</div>
            </div>
            <div><h3>Aniruddha Sharma</h3><p>CAT Topper</p></div>
          </div>
          <div class="result-scorecard-body">
            <div class="result-scorecard-score"><strong>99.34</strong><span>%ile</span><small>CAT percentile score</small></div>
            <div class="result-scorecard-img-wrap">
              <img class="result-scorecard-img" src="/results/scorecards/mock-sc-aniruddha.jpg" alt="Aniruddha Sharma scorecard">
            </div>
            <p class="result-scorecard-quote">“The mocks, grind, and mentor checks throughout helped me convert the pressure into a plan. CATKing truly helped me build strong basics.”</p>
            <button type="button" class="result-scorecard-btn" onclick="openScorecard('Aniruddha Sharma','CAT 99.34 %ile','/results/scorecards/mock-sc-aniruddha.jpg','https://catking.in/file/media_library/8780/68013909e87e1.png')">View scorecard</button>
          </div>
        </article>
        <article class="result-scorecard-card">
          <div class="result-scorecard-person">
            <div class="result-scorecard-ava">
              <img src="https://catking.in/file/media_library/8787/68013d7802e8b.png" alt="Priyanshu Tiwari">
              <div class="result-scorecard-badge">★</div>
            </div>
            <div><h3>Priyanshu Tiwari</h3><p>CAT Topper</p></div>
          </div>
          <div class="result-scorecard-body">
            <div class="result-scorecard-score"><strong>99.42</strong><span>%ile</span><small>CAT percentile score</small></div>
            <div class="result-scorecard-img-wrap">
              <img class="result-scorecard-img" src="/results/scorecards/mock-sc-priyanshu.jpg" alt="Priyanshu Tiwari scorecard">
            </div>
            <p class="result-scorecard-quote">“More than the material, the live sessions and personal mentorship kept me consistent. The mocks were very useful for my prep.”</p>
            <button type="button" class="result-scorecard-btn" onclick="openScorecard('Priyanshu Tiwari','CAT 99.42 %ile','/results/scorecards/mock-sc-priyanshu.jpg','https://catking.in/file/media_library/8787/68013d7802e8b.png')">View scorecard</button>
          </div>
        </article>
        <article class="result-scorecard-card is-featured">
          <div class="result-scorecard-person">
            <div class="result-scorecard-ava">
              <img src="https://catking.in/file/media_library/8786/68013d3d83e3c.png" alt="Prafull Sharma">
              <div class="result-scorecard-badge">★</div>
            </div>
            <div><h3>Prafull Sharma</h3><p>CAT Topper</p></div>
          </div>
          <div class="result-scorecard-body">
            <div class="result-scorecard-score"><strong>99.28</strong><span>%ile</span><small>CAT percentile score</small></div>
            <div class="result-scorecard-img-wrap">
              <img class="result-scorecard-img" src="/results/scorecards/mock-sc-prafull.jpg" alt="Prafull Sharma scorecard">
            </div>
            <p class="result-scorecard-quote">“The actual exam level was closely matched in the mocks and the structured approach helped a lot in my final push before the exam.”</p>
            <button type="button" class="result-scorecard-btn" onclick="openScorecard('Prafull Sharma','CAT 99.28 %ile','/results/scorecards/mock-sc-prafull.jpg','https://catking.in/file/media_library/8786/68013d3d83e3c.png')">View scorecard</button>
          </div>
        </article>
        <article class="result-scorecard-card">
          <div class="result-scorecard-person">
            <div class="result-scorecard-ava">
              <img src="https://catking.in/file/media_library/8781/6801397b2eb0f.png" alt="Arjun Reddy">
              <div class="result-scorecard-badge">★</div>
            </div>
            <div><h3>Arjun Reddy</h3><p>CAT Topper</p></div>
          </div>
          <div class="result-scorecard-body">
            <div class="result-scorecard-score"><strong>99.06</strong><span>%ile</span><small>CAT percentile score</small></div>
            <div class="result-scorecard-img-wrap">
              <img class="result-scorecard-img" src="/results/scorecards/mock-sc-arjun-reddy.jpg" alt="Arjun Reddy scorecard">
            </div>
            <p class="result-scorecard-quote">“Analyzing mocks and completing recorded lessons helped connect every weak section. Thank you CATKing family for the support.”</p>
            <button type="button" class="result-scorecard-btn" onclick="openScorecard('Arjun Reddy','CAT 99.06 %ile','/results/scorecards/mock-sc-arjun-reddy.jpg','https://catking.in/file/media_library/8781/6801397b2eb0f.png')">View scorecard</button>
          </div>
        </article>
        <article class="result-scorecard-card">
          <div class="result-scorecard-person">
            <div class="result-scorecard-ava">
              <img src="https://catking.in/file/media_library/8784/68013c3cd17bd.png" alt="Sai Dinesh">
              <div class="result-scorecard-badge">★</div>
            </div>
            <div><h3>Sai Dinesh</h3><p>CAT Topper</p></div>
          </div>
          <div class="result-scorecard-body">
            <div class="result-scorecard-score"><strong>99.12</strong><span>%ile</span><small>CAT percentile score</small></div>
            <div class="result-scorecard-img-wrap">
              <img class="result-scorecard-img" src="/results/scorecards/mock-sc-sai-dinesh.jpg" alt="Sai Dinesh scorecard">
            </div>
            <p class="result-scorecard-quote">“Live classes and repeated mock analysis made the final sprint sharper and calmer. CATKing family, you guys are the best!”</p>
            <button type="button" class="result-scorecard-btn" onclick="openScorecard('Sai Dinesh','CAT 99.12 %ile','/results/scorecards/mock-sc-sai-dinesh.jpg','https://catking.in/file/media_library/8784/68013c3cd17bd.png')">View scorecard</button>
          </div>
        </article>
        <article class="result-scorecard-card">
          <div class="result-scorecard-person">
            <div class="result-scorecard-ava">
              <img src="https://catking.in/file/media_library/8876/conversions/68079c6803f08-thumb_400.jpg" alt="Kavya Reddy">
              <div class="result-scorecard-badge">★</div>
            </div>
            <div><h3>Kavya Reddy</h3><p>CAT Topper</p></div>
          </div>
          <div class="result-scorecard-body">
            <div class="result-scorecard-score"><strong>99.15</strong><span>%ile</span><small>CAT percentile score</small></div>
            <div class="result-scorecard-img-wrap">
              <img class="result-scorecard-img" src="/results/scorecards/mock-sc-kavya-reddy.jpg" alt="Kavya Reddy scorecard">
            </div>
            <p class="result-scorecard-quote">“The dashboard, mock review routine, and faculty support made the preparation consistent and helped me score 99.15 percentile.”</p>
            <button type="button" class="result-scorecard-btn" onclick="openScorecard('Kavya Reddy','CAT 99.15 %ile','/results/scorecards/mock-sc-kavya-reddy.jpg','https://catking.in/file/media_library/8876/conversions/68079c6803f08-thumb_400.jpg')">View scorecard</button>
          </div>
        </article>
      </div>
      <button class="results-slider-btn next" type="button" data-slider-next="scorecardRail" aria-label="Next scorecard">&#8250;</button>
    </div>
  </div>
</section>

<!-- v16: Converts by Institute section merged into Browse all results below -->

<!-- v16: Geo / Across India section removed per stakeholder feedback -->

<!-- ============ STUDENT REVIEWS MARQUEE ============ -->
<section class="reviews" id="reviews">
  <div class="reviews-inner">
    <div class="reviews-head">
      <div class="eyebrow">Google Reviews · 15+ Years of Feedback</div>
      <h2>Real students. <em>Real reviews.</em></h2>
      <div class="reviews-rating-badge">
        <span class="rrb-stars">★ ★ ★ ★ ★</span>
        <span class="rrb-val">4.8 / 5</span>
        <span class="rrb-src">based on <b>54,030 reviews</b></span>
      </div>
    </div>

    <div class="rv-marquee-wrap">
      <div class="rv-marquee" id="rvRow1"><!-- populated by JS (x2 for seamless loop) --></div>
      <div class="rv-marquee reverse" id="rvRow2"><!-- populated by JS (x2 for seamless loop) --></div>
    </div>
  </div>
</section>

<!-- ============ WHATSAPP MOMENTS MARQUEE ============ -->
<section class="wa-section" id="wa-moments">
  <div class="wa-section-inner">
    <div class="wa-head">
      <h2>The <em>moment</em> the result hits.</h2>
      <p>The WhatsApp chats you see here are a mix: 24 are real conversations from our 2026 NMIMS, SPJIMR, and SCMHRD converts (PII redacted, message content unedited) and 12 are illustrative reconstructions for IIM and CAT topper converts - the actual screenshots will be dropped in live with student consent. The verified-CATKing stamp on every card is the credibility signal; full student stories live in the Hall of Fame above.</p>
    </div>
    <div class="wa-marquee-wrap">
      <div class="wa-marquee" id="waRow1"><!-- populated by JS --></div>
    </div>
  </div>
</section>

<!-- ============ COURSES (soft sell) #8 ============ -->
<section class="courses-sell" id="coursesSell">
  <div class="courses-sell-inner">
    <div class="courses-sell-head">
      <h2>Results like these don't happen by luck. <em>They are coached.</em></h2>
      <p>Every name on this page went through one of these CATKing programs. Pick the one that matches where you are in your CAT / NMAT / SNAP / XAT journey - 15+ years of what works, distilled into three tracks.</p>
    </div>

    <div class="courses-sell-grid">
      <div class="course-tile">
        <div class="course-tile-badge mint">Most Popular</div>
        <h3>CAT Intensive 2026</h3>
        <p class="ct-sub">The flagship 8-month program. Weekly mentor 1-on-1s with Sumit Sir and senior faculty. Designed for serious aspirants targeting IIM ABCLKI.</p>
        <ul class="ct-feat">
          <li>Live + recorded classes, 320+ hours</li>
          <li>Weekly 1-on-1 mentor calls</li>
          <li>40+ full-length mocks with analysis</li>
          <li>Complete GDPI / WAT-PI module</li>
          <li>Access to CAT 2025 predictions archive</li>
        </ul>
        <div class="ct-pricing">
          <span class="ct-price">&#8377;24,999</span>
          <span class="ct-price-old">&#8377;49,999</span>
        </div>
        <a href="https://courses.catking.in/cat-intensive" class="ct-cta">View Program Details &#8594;</a>
      </div>

      <div class="course-tile">
        <div class="course-tile-badge">Fastest Growing</div>
        <h3>CAT Turbo 2026</h3>
        <p class="ct-sub">4-month accelerated track for working professionals and last-6-month aspirants. Evening + weekend live sessions, full mock library access.</p>
        <ul class="ct-feat">
          <li>160+ hours of condensed live coaching</li>
          <li>Evening/weekend schedule</li>
          <li>30+ full-length mocks</li>
          <li>DILR + QA crash modules</li>
          <li>Shortlist WAT-PI prep included</li>
        </ul>
        <div class="ct-pricing">
          <span class="ct-price">&#8377;19,999</span>
          <span class="ct-price-old">&#8377;39,999</span>
        </div>
        <a href="https://courses.catking.in/cat-turbo" class="ct-cta">View Program Details &#8594;</a>
      </div>

      <div class="course-tile">
        <div class="course-tile-badge blue">Best for Starters</div>
        <h3>CAT Self-Study 2026</h3>
        <p class="ct-sub">Learn at your own pace. Complete recorded library, 50+ concept videos, 25+ mocks, unlimited re-access. Ideal if you are starting prep early or testing CAT fit.</p>
        <ul class="ct-feat">
          <li>400+ concept videos, recorded</li>
          <li>25+ full-length mocks included</li>
          <li>Topic-wise problem sets</li>
          <li>One-time content library purchase</li>
          <li>Free upgrade to Intensive if you enroll within 30 days</li>
        </ul>
        <div class="ct-pricing">
          <span class="ct-price">&#8377;9,999</span>
          <span class="ct-price-old">&#8377;19,999</span>
        </div>
        <a href="https://courses.catking.in/cat-self-study" class="ct-cta">View Program Details &#8594;</a>
      </div>
    </div>

    <div class="courses-sell-foot">
      <a href="https://courses.catking.in" class="ct-foot-cta">Explore all CATKing programs &#8594; NMAT, SNAP, XAT, GMAT, GRE</a>
    </div>
  </div>
</section>

<!-- ============ BROWSE ALL ============ -->
<!-- ============ FAQ ============ -->
<section class="faq">
  <div class="faq-inner">
    <div class="faq-head">
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="faq-list">
      <div class="faq-item open">
        <div class="faq-q">Are CATKing results audited by a third party? <span class="plus">+</span></div>
        <div class="faq-a">Yes. CATKing is the first MBA prep institute in India to have its CAT and IIM results audited by KPMG Assurance and Consulting Services in 2020, followed by Brickworks Ratings in 2022 and 2023. Audit briefs are available on request at support@catking.in.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How many IIM converts did CATKing produce in 2024-25? <span class="plus">+</span></div>
        <div class="faq-a">CATKing produced 2,080+ IIM converts, 9,000+ IIM calls, 460+ BLACKI IIM converts (Bangalore, Lucknow, Ahmedabad, Calcutta, Indore) and 200+ NMIMS converts in the 2024-25 academic year.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Can I verify a specific topper's percentile claim? <span class="plus">+</span></div>
        <div class="faq-a">Yes. Every result card on this page opens a full profile with the student's scorecard, testimonial and interview where available. For older batches, scorecards are on file and can be requested at support@catking.in.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Which IIMs do CATKing students convert to most often? <span class="plus">+</span></div>
        <div class="faq-a">CATKing students have converted into all IIMs including the BLACKI group (IIM Bangalore, Lucknow, Ahmedabad, Calcutta, Indore), IIM Kozhikode, IIM Mumbai (formerly NITIE), as well as SPJIMR, FMS Delhi, and NMIMS.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Who teaches at CATKing? <span class="plus">+</span></div>
        <div class="faq-a">CATKing faculty includes Sumit Sir (CEO, SPJIMR 2009 and Harvard PMNO), Sahil Sir, Prantik Sir, Biswadip Sir, Krishna Sir (IIM Mumbai, formerly NITIE), Anisha Ma'am, Aanchal Sharma and Anurag Teja R.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How do I book a call to plan my CAT journey? <span class="plus">+</span></div>
        <div class="faq-a">Call 8999-11-8999 (9 AM to 12 AM) for admissions, or use the "Book a Strategy Call" button above. Existing students should reach 7478-88-2888 (9 AM to 7 PM) or support@catking.in.</div>
      </div>

      <div class="faq-hidden" id="faqMore">
        <div class="faq-item">
          <div class="faq-q">What is the success rate of CATKing students in CAT? <span class="plus">+</span></div>
          <div class="faq-a">In 2024-25 alone, 2,080+ CATKing students converted to IIMs, with 5,000+ scoring 99%ile and above on CAT. 460+ of those converts were in the BLACKI group (IIM Bangalore, Lucknow, Ahmedabad, Calcutta, Indore). Across 18 CAT seasons since 2008, CATKing has produced 15,900+ cumulative IIM converts.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">What makes CATKing different from other MBA prep institutes? <span class="plus">+</span></div>
          <div class="faq-a">Three things. First, independently audited results (KPMG 2020, Brickworks 2022 and 2023). Second, mentor-led 1-on-1 weekly calls with Sumit Sir and senior faculty, not batch-only teaching. Third, our expected-questions videos published before every CAT with documented hit rates.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Which CATKing course should I pick: Intensive, Turbo, or Self-Study? <span class="plus">+</span></div>
          <div class="faq-a">CAT Intensive (8 months, flagship) is for serious aspirants targeting IIM ABCLKI. CAT Turbo (4 months) is an accelerated track for working professionals and late-start aspirants. CAT Self-Study is a one-time content library purchase, ideal for early-stage prep or testing CAT fit. Details and pricing are in the "Courses" section above.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Are your expected CAT question videos really accurate? <span class="plus">+</span></div>
          <div class="faq-a">Yes. Sumit Sir publishes expected-question videos 10-22 days before every CAT on our YouTube channel. For CAT 2024, we had documented hit rates of 8 out of 10 QA questions matched, 3 of 4 DILR set themes matched, and all 4 VARC passage themes matched. Links to the actual videos are in the "We don't just teach CAT" section above.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Do CATKing results cover NMAT, SNAP, XAT and other exams? <span class="plus">+</span></div>
          <div class="faq-a">Yes. In 2024-25, CATKing had 200+ NMIMS converts (NMAT), along with converts into SCMHRD, SIBM Pune, FMS Delhi, SPJIMR Mumbai, and XAT-feeder schools. The WhatsApp Moments and Converts by Institute sections above show real 2026 batch converts across NMAT, SNAP, CAT, and XAT routes.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">What is the refund policy? <span class="plus">+</span></div>
          <div class="faq-a">CATKing offers a 6-day money-back guarantee on all courses purchased through courses.catking.in. If you are not satisfied within 6 days of batch start, a full refund is processed. Details and exact terms are on the courses page and will be confirmed during your enrollment call.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Do you offer GDPI / WAT-PI mock interview prep? <span class="plus">+</span></div>
          <div class="faq-a">Yes. The GDPI / WAT-PI module is included in CAT Intensive and Turbo courses, and is available as a standalone shortlist program. Each student gets 5-8 personalized mock PI rounds with detailed feedback from Anisha Ma'am and senior panelists. Over 90% of our 2024-25 shortlist students converted at least one top-tier call.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">How can I see real students sharing their CATKing experience? <span class="plus">+</span></div>
          <div class="faq-a">The Hall of Fame section shows 12 student tiles with photos and scorecards. Each tile opens a full profile with their testimonial, verified scorecard, video interview, and the actual WhatsApp conversation from the day they converted. The Converts by Institute section shows real NMIMS, SPJIMR, and SCMHRD 2026 batch converts with redacted WhatsApp screenshots.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Is the coaching online, offline, or hybrid? <span class="plus">+</span></div>
          <div class="faq-a">Both. CATKing runs live classes online (daily), hybrid classes at our Mumbai and Pune centers, and a 100% recorded Self-Study library. All live sessions are recorded and added to the student dashboard the same day, so you never miss a class even if you cannot attend live.</div>
        </div>
      </div>
    </div>

    <div class="faq-more-row">
      <button class="faq-more-btn" id="faqMoreBtn" type="button">
        <span class="faq-more-label">Show more questions</span>
        <span class="arr">&#9662;</span>
      </button>
    </div>
  </div>
</section>

<!-- ============ FINAL CTA ============ -->
<section class="fcta" id="fcta">
  <div class="fcta-inner">
    <div class="eyebrow">CAT 2026 · 29 November 2026</div>
    <h2>Your name could be <span class="serif">next.</span></h2>
    <p><span id="fctaDays">213</span> days until CAT 2026. Every topper on this page started where you are right now. The only variable is the 100-week plan with a mentor who has done it before.</p>
    <div class="ctas">
      <a href="https://courses.catking.in/cat-intensive-2026" class="btn p">Enroll Now</a>
      {{--<a href="tel:+918999118999" class="btn s">Request a Callback</a>--}}
    </div>
    <div class="contacts">
      <div class="c">New students: <b>+91 8999-11-8999</b></div>
      <div class="c">Existing students: <b>+91 7478-88-2888</b></div>
      <div class="c"><b>support@catking.in</b></div>
    </div>
  </div>
</section>

<!-- ============ MODALS (These are unique to Results page) ============ -->
<!-- Video Modal -->
<div class="vmodal" id="vmodal">
  <div class="mwrap">
    <span class="close" id="mclose">×</span>
    <div class="player" id="mplayer"></div>
    <div class="minfo">
      <div>
        <div class="m-name" id="mname">Student Name</div>
        <div class="m-meta" id="mmeta">Exam · Score</div>
      </div>
      <div class="minfo-right">
        <a href="#" id="mfallback" class="m-fallback" target="_blank" rel="noopener" title="Watch on YouTube">Open on YouTube ↗</a>
        <a href="/enroll" class="m-cta">Start your journey →</a>
      </div>
    </div>
  </div>
</div>

<!-- College Modal -->
<div class="cmodal" id="cmodal">
  <div class="cm-wrap">
    <span class="cm-close" id="cmClose">×</span>
    <div class="cm-head" id="cmHead"></div>
    <div class="cm-body" id="cmBody"></div>
  </div>
</div>

<!-- Scorecard Modal -->
<div class="smodal" id="smodal" role="dialog" aria-modal="true">
  <div class="sm-wrap">
    <button class="sm-close" id="smClose" type="button" aria-label="Close">✕</button>
    <div class="sm-head">
      <span class="sm-tag" id="smExam">Score Card · CAT 2024</span>
      <div class="sm-name-row">
        <div class="sm-ava-circle" id="smAva">HB</div>
        <div>
          <div class="sm-name" id="smName">Student Name</div>
          <div class="sm-score-pct" id="smScore">99.00<sup>%ile</sup></div>
        </div>
      </div>
    </div>
    <div class="sm-body">
      <div class="sm-image-wrap" id="smImageWrap" hidden>
        <img id="smScard" class="sm-full-img" src="" alt="Full scorecard">
      </div>
      <table class="sm-table" id="smTable">
        <thead><tr><th>Section</th><th>Scaled Score</th><th>Percentile</th></tr></thead>
        <tbody id="smSections"></tbody>
      </table>
      <div class="sm-quote-box" id="smQuote"></div>
      <div class="sm-meta-row" id="smMetaRow">
        <div class="sm-meta-cell">
          <div class="sm-meta-label">Converted</div>
          <div class="sm-meta-value" id="smConverts">-</div>
        </div>
        <div class="sm-meta-cell">
          <div class="sm-meta-label">Programme</div>
          <div class="sm-meta-value" id="smAddl">-</div>
        </div>
      </div>
      <div class="sm-verified">Verified by CATKing · Genuine candidate scorecard</div>
    </div>
  </div>
</div>

<!-- Student Detail Modal -->
<div class="stmodal" id="stmodal">
  <div class="stm-wrap">
    <span class="stm-close" id="stmClose">&times;</span>
    <div class="stm-hero" id="stmHero"></div>
    <div class="stm-body">
      <div class="stm-tabs" id="stmTabs"></div>
      <div id="stmPanes"></div>
    </div>
    <div class="stm-foot">
      <div class="stm-foot-l">Verified via <b>catking.in/student/results</b></div>
      <a href="/enroll" class="stm-foot-cta">Start your journey →</a>
    </div>
  </div>
</div>

<!-- WhatsApp Lightbox -->
<div class="wa-lightbox" id="waLightbox">
  <div class="wa-lb-wrap">
    <span class="wa-lb-close" id="waLbClose">&times;</span>
    <img class="wa-lb-img" id="waLbImg" src="" alt="">
    <div class="wa-lb-meta" id="waLbMeta">&nbsp;</div>
  </div>
</div>

<!-- Sticky CTA -->
<div class="scta" id="scta">
  <div class="scta-txt">CAT 2026 in <b id="sctaDays">219</b> days. Your result could be next.</div>
  <div class="scta-ctas">
    {{--<a href="#fcta" class="scta-btn scta-btn-secondary">Request a Callback</a>--}}
    <a href="https://courses.catking.in/cat-intensive-2026" class="scta-btn">Enroll Now</a>
  </div>
</div>

@endsection

@push('scripts')
    <script src="{{ asset('js/results-static-data.js') }}"></script>
    <script src="{{ asset('js/results.js') }}"></script>
@endpush
