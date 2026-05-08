@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/catking-home.css') }}">
@endpush

@section('content')
<!-- ─────────────────────────────────────────
     1. HERO — Authority + Social Proof + Outcome
     ───────────────────────────────────────── -->
<section class="hero">
    <video
        class="hero-bg-video"
        src="{{ asset('images/home/hero-section-video.mp4') }}"
        autoplay
        muted
        loop
        playsinline
        preload="metadata"
        aria-hidden="true"
    ></video>
    <div class="hero-bg-veil" aria-hidden="true"></div>
    <div class="container">
        <div class="hero-inner hero-inner--centered">
            <div class="hero-center">
                <h1>From <em>struggling</em> with %tiles to walking into your <em>dream IIM</em> with <span class="brand-accent">CATKing</span>.</h1>
                <p class="hero-sub">CATKing's CAT 2026 program is designed by IIM-A, B and C alumni — the same mentors who've coached <strong>1,200+ aspirants into top B-Schools last year alone</strong>.</p>
                <div class="hero-ctas">
                    <a href="https://courses.catking.in/courses/cat-2026-self-study" target="_blank" rel="noopener" class="btn btn-primary">Enroll Now →</a>
                    <a href="https://courses.catking.in/courses/cat-2026-self-study" target="_blank" rel="noopener" class="btn btn-ghost-light">Explore CAT 2026 Course →</a>
                </div>
                <div class="hero-stats">
                    <div>
                        <div class="hero-stat-num">2,080+</div>
                        <div class="hero-stat-lbl">IIM converts (2024–25)</div>
                    </div>
                    <div>
                        <div class="hero-stat-num">460+</div>
                        <div class="hero-stat-lbl">Black IIM converts (2023–24)</div>
                    </div>
                    <div>
                        <div class="hero-stat-num">200+</div>
                        <div class="hero-stat-lbl">NMIMS converts (2023–24)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ─────────────────────────────────────────
     1.5 WHAT YOU'LL GET — Platform overview
     ───────────────────────────────────────── -->
<section class="theme-light section platform-section" id="platform">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Everything in one platform</span>
      <h2 class="section-title">What you'll <em>get</em> with CATKing.</h2>
      <p class="section-sub">A complete ecosystem built to take you from beginner to IIM-ready — with every tool, resource, and support you need.</p>
    </div>

    <div class="platform-grid reveal">
      <!-- Tile 1: Mock Tests -->
      <div class="platform-tile">
        <div class="platform-tile-head">
          <div class="platform-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
          </div>
          <span class="platform-stat">200+ Tests</span>
        </div>
        <div class="platform-title">Live Lectures</div>
        <div class="platform-desc">Daily live sessions with IIM-A/B/C alumni faculty across VARC, DILR &amp; QA — interactive, doubt-friendly classrooms.</div>
      </div>

      <!-- Tile 2: Daily Targets -->
      <div class="platform-tile">
        <div class="platform-tile-head">
          <div class="platform-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
          </div>
          <span class="platform-stat">365 Days</span>
        </div>
        <div class="platform-title">Recorded Lessons</div>
        <div class="platform-desc">Concept videos, walkthroughs and revisions available 24×7 — pause, rewind, replay anytime for 12 months.</div>
      </div>

      <!-- Tile 3: Live Classes -->
      <div class="platform-tile">
        <div class="platform-tile-head">
          <div class="platform-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
          </div>
          <span class="platform-stat">800+ Hours</span>
        </div>
        <div class="platform-title">Mocks</div>
        <div class="platform-desc">Full-length CAT-pattern mocks with detailed analytics, percentile ranking &amp; improvement tracking week-by-week.</div>
      </div>

      <!-- Tile 4: Doubt Solving -->
      <div class="platform-tile">
        <div class="platform-tile-head">
          <div class="platform-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
          </div>
          <span class="platform-stat">130+ Tests</span>
        </div>
        <div class="platform-title">Sectional &amp; Topic-Wise Tests</div>
        <div class="platform-desc">Targeted drills across VARC, DILR &amp; QA. Topic-level diagnostics so you know exactly where to focus next.</div>
      </div>

      <!-- Tile 5: GD/PI Prep -->
      <div class="platform-tile">
        <div class="platform-tile-head">
          <div class="platform-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <span class="platform-stat">50+ Sessions</span>
        </div>
        <div class="platform-title">WAT GD/PI Prep</div>
        <div class="platform-desc">Written Ability, Group Discussion practice, PI mock interviews with IIM-A/B/C alumni interviewers + college strategy.</div>
      </div>

      <!-- Tile 6: 1-on-1 Mentor Reviews -->
      <div class="platform-tile">
        <div class="platform-tile-head">
          <div class="platform-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <span class="platform-stat">24×7 Support</span>
        </div>
        <div class="platform-title">Doubt Solving</div>
        <div class="platform-desc">24×7 doubt resolution via WhatsApp groups, weekly live doubt sessions &amp; dedicated 1:1 mentor support.</div>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────────────────────
     COURSES — Tabbed catalog
     ───────────────────────────────────────── -->
<section class="theme-light section courses-section" id="courses">
  <div class="container">
    <div class="section-head reveal courses-head">
      <h2 class="section-title">CAT Courses and other MBA Courses</h2>
    </div>

    <div class="courses-tabs reveal" role="tablist">
      <button class="courses-tab active" data-cat="cat" type="button" role="tab" aria-selected="true">CAT</button>
      <button class="courses-tab" data-cat="noncat" type="button" role="tab" aria-selected="false">Non-CAT</button>
      <button class="courses-tab" data-cat="mocks" type="button" role="tab" aria-selected="false">Mocks</button>
      <button class="courses-tab" data-cat="gdpi" type="button" role="tab" aria-selected="false">GDPI</button>
    </div>

    <!-- CAT panel -->
    <div class="courses-panel active reveal" data-panel="cat" role="tabpanel">
      <div class="course-grid">

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">CAT Self Study 2026</h3>
            <ul class="course-card-features">
              <li>Concept Builder Videos</li>
              <li>E-books + 200+ Mocks</li>
              <li>130+ LOD1 & LOD2 Practice E-books</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 9,999</span>
              <span class="course-price-was">₹ 19,999</span>
              <span class="course-price-tag">50% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <a href="https://courses.catking.in/courses/cat-2026-self-study" target="_blank" rel="noopener" class="btn course-btn-primary">View Course Page</a>
            </div>
          </div>
        </article>

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">CAT Turbo 2026</h3>
            <ul class="course-card-features">
              <li>Daily Live Classes</li>
              <li>IIM-A/B/C Alumni Mentors</li>
              <li>Full Self-Study Library Included</li>
              <li>1-on-1 Mentor Calls Monthly</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 29,999</span>
              <span class="course-price-was">₹ 49,999</span>
              <span class="course-price-tag">40% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <a href="https://courses.catking.in/courses/cat-2026-turbo" target="_blank" rel="noopener" class="btn course-btn-primary">View Course Page</a>
            </div>
          </div>
        </article>

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">CAT Intensive 2026</h3>
            <ul class="course-card-features">
              <li>Capped Small-Batch Prep</li>
              <li>Daily Targets + Weekend Strategy</li>
              <li>SPJIMR-Alumni Profile Reviews</li>
              <li>Priority Doubt-Solving</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 49,999</span>
              <span class="course-price-was">₹ 79,999</span>
              <span class="course-price-tag">38% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <a href="https://courses.catking.in/courses/cat-intensive-2026" target="_blank" rel="noopener" class="btn course-btn-primary">View Course Page</a>
            </div>
          </div>
        </article>

      </div>
    </div>

    <!-- Non-CAT panel -->
    <div class="courses-panel reveal" data-panel="noncat" role="tabpanel">
      <div class="course-grid">

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">SNAP 2026</h3>
            <ul class="course-card-features">
              <li>QA, GA, Reasoning & Verbal</li>
              <li>12+ Mocks with Analytics</li>
              <li>SIBM, SCMHRD, SIIB Targeted</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 9,999</span>
              <span class="course-price-was">₹ 19,999</span>
              <span class="course-price-tag">50% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">NMAT 2026</h3>
            <ul class="course-card-features">
              <li>Adaptive 3-Attempt Simulation</li>
              <li>Sectional Drills + Cutoffs</li>
              <li>NMIMS Mumbai Calling Tips</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 11,999</span>
              <span class="course-price-was">₹ 22,999</span>
              <span class="course-price-tag">48% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">XAT 2027</h3>
            <ul class="course-card-features">
              <li>Decision Making Module</li>
              <li>GK Practice + Essay Writing</li>
              <li>XLRI / XIMB / SPJIMR Mocks</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 12,999</span>
              <span class="course-price-was">₹ 22,999</span>
              <span class="course-price-tag">43% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card is-extra">
          <div class="course-card-body">
            <h3 class="course-card-title">MICAT 2026-27</h3>
            <ul class="course-card-features">
              <li>Storytelling & Visual Reasoning</li>
              <li>Psychometric Test Prep</li>
              <li>MICA-Alumni Mock Interviews</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 8,999</span>
              <span class="course-price-was">₹ 16,999</span>
              <span class="course-price-tag">47% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card is-extra">
          <div class="course-card-body">
            <h3 class="course-card-title">CMAT 2026 & 27</h3>
            <ul class="course-card-features">
              <li>High-Scoring Strategy Guide</li>
              <li>JBIMS, SIMSREE Shortlist Tips</li>
              <li>Sectional Drills + Mocks</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 7,999</span>
              <span class="course-price-was">₹ 14,999</span>
              <span class="course-price-tag">47% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card is-extra">
          <div class="course-card-body">
            <h3 class="course-card-title">CET 2026</h3>
            <ul class="course-card-features">
              <li>Speed-Focused Strategy</li>
              <li>100+ Mocks + Doubt Sessions</li>
              <li>JBIMS / SIMSREE / PUMBA Prep</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 8,999</span>
              <span class="course-price-was">₹ 15,999</span>
              <span class="course-price-tag">44% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card is-extra">
          <div class="course-card-body">
            <h3 class="course-card-title">MAT 2026</h3>
            <ul class="course-card-features">
              <li>AIMA Pattern-Based Prep</li>
              <li>4-Attempt Scheduling Guide</li>
              <li>IMT, BIMTECH, KJS Shortlist</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 5,999</span>
              <span class="course-price-was">₹ 10,999</span>
              <span class="course-price-tag">45% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card is-extra">
          <div class="course-card-body">
            <h3 class="course-card-title">ATMA 2026</h3>
            <ul class="course-card-features">
              <li>AIMS Pattern-Based Prep</li>
              <li>Welingkar, SIES, IFIM Targeted</li>
              <li>6 Full-Length Mocks</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 4,999</span>
              <span class="course-price-was">₹ 9,999</span>
              <span class="course-price-tag">50% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

      </div>
      <div class="courses-viewall">
        <a href="#" class="courses-viewall-link" data-target="noncat">View all Non-CAT courses →</a>
      </div>
    </div>

    <!-- Mocks panel -->
    <div class="courses-panel reveal" data-panel="mocks" role="tabpanel">
      <div class="course-grid">

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">SNAP Mock Series</h3>
            <ul class="course-card-features">
              <li>10 SNAP-Pattern Mocks</li>
              <li>Video Solutions + Analytics</li>
              <li>Percentile Predictor Tool</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 1,999</span>
              <span class="course-price-was">₹ 3,999</span>
              <span class="course-price-tag">50% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">NMAT Mock Series</h3>
            <ul class="course-card-features">
              <li>Adaptive 3-Attempt Simulation</li>
              <li>Sectional Cutoff Predictor</li>
              <li>Detailed Analytics Dashboard</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 2,499</span>
              <span class="course-price-was">₹ 4,499</span>
              <span class="course-price-tag">44% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">XAT Mock Series</h3>
            <ul class="course-card-features">
              <li>12 XAT-Pattern Mocks</li>
              <li>Decision Making Sets + GK</li>
              <li>Essay Evaluation Rubric</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 2,499</span>
              <span class="course-price-was">₹ 4,499</span>
              <span class="course-price-tag">44% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card is-extra">
          <div class="course-card-body">
            <h3 class="course-card-title">MICAT Mock Series</h3>
            <ul class="course-card-features">
              <li>Visual Reasoning Drills</li>
              <li>Story Writing Prompts</li>
              <li>Psychometric Simulation</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 1,799</span>
              <span class="course-price-was">₹ 3,499</span>
              <span class="course-price-tag">49% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card is-extra">
          <div class="course-card-body">
            <h3 class="course-card-title">CMAT Mock Series</h3>
            <ul class="course-card-features">
              <li>10 CMAT-Pattern Mocks</li>
              <li>QA, LR, LC & GK Coverage</li>
              <li>Cutoff Predictor</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 1,499</span>
              <span class="course-price-was">₹ 2,999</span>
              <span class="course-price-tag">50% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card is-extra">
          <div class="course-card-body">
            <h3 class="course-card-title">CET Mock Series</h3>
            <ul class="course-card-features">
              <li>Speed-Focused 12 Mocks</li>
              <li>JBIMS-Pattern Questions</li>
              <li>Calling-Tip Videos</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 1,499</span>
              <span class="course-price-was">₹ 2,999</span>
              <span class="course-price-tag">50% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card is-extra">
          <div class="course-card-body">
            <h3 class="course-card-title">MAT Mock Series</h3>
            <ul class="course-card-features">
              <li>8 MAT-Pattern Mocks</li>
              <li>AIMA Official Format</li>
              <li>Intelligence + GK Module</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 1,299</span>
              <span class="course-price-was">₹ 2,499</span>
              <span class="course-price-tag">48% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card is-extra">
          <div class="course-card-body">
            <h3 class="course-card-title">ATMA Mock Series</h3>
            <ul class="course-card-features">
              <li>6 Full-Length ATMA Mocks</li>
              <li>AIMS-Affiliated B-School Prep</li>
              <li>Doubt-Clear Calls Included</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 999</span>
              <span class="course-price-was">₹ 1,999</span>
              <span class="course-price-tag">50% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

      </div>
      <div class="courses-viewall">
        <a href="#" class="courses-viewall-link" data-target="mocks">View all Mocks →</a>
      </div>
    </div>

    <!-- GDPI panel -->
    <div class="courses-panel reveal" data-panel="gdpi" role="tabpanel">
      <div class="course-grid">

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">IIM Top B-School</h3>
            <ul class="course-card-features">
              <li>WAT + Profile-Based Prep</li>
              <li>IIM-A/B/C/L/K Alumni Interviewers</li>
              <li>Current Affairs + Mock PI Rounds</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 14,999</span>
              <span class="course-price-was">₹ 24,999</span>
              <span class="course-price-tag">40% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

        <article class="course-card">
          <div class="course-card-body">
            <h3 class="course-card-title">Additional Mocks PI / GD</h3>
            <ul class="course-card-features">
              <li>Top-up Mock GD/PI Rounds</li>
              <li>Peer Feedback + Panel Critique</li>
              <li>Recorded Playback for Review</li>
            </ul>
            <div class="course-card-price">
              <span class="course-price-now">₹ 4,999</span>
              <span class="course-price-was">₹ 8,999</span>
              <span class="course-price-tag">44% OFF</span>
            </div>
            <div class="course-card-ctas course-card-ctas--single">
              <button class="btn course-btn-primary" type="button">View Course Page</button>
            </div>
          </div>
        </article>

      </div>
    </div>

  </div>
</section>


<!-- ─────────────────────────────────────────
     EXAM SPOTLIGHT — Stacked alternating cards
     ───────────────────────────────────────── -->
<section class="theme-light section exam-spotlight-section" id="exam-spotlight">
  <div class="container">
    <div class="section-head reveal exam-spotlight-head">
      <div class="eyebrow">Master every entrance</div>
      <h2 class="section-title">One platform. Every <em>MBA exam</em>.</h2>
      <p class="section-sub">From CAT to NMAT, SNAP to XAT — purpose-built tracks with the same alumni faculty, mock libraries, and 1-on-1 mentorship that put 2,080+ students into top B-Schools last cycle.</p>
    </div>

    <div class="exam-spotlight-stack">

      <!-- Card 1: CAT 2026 -->
      <article class="exam-spotlight-card reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-iima.jpg') }}');" role="img" aria-label="CAT 2026 — gateway to all 22 IIMs"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">01 / 14 · CAT</div>
          <h3 class="exam-spotlight-title">CAT 2026</h3>
          <p class="exam-spotlight-desc">India's most competitive MBA exam. The gateway to all <strong>22 IIMs</strong>, FMS Delhi, SPJIMR, MDI, IITs and 1,200+ top B-Schools. CATKing's flagship program — Self Study, Turbo and Intensive tracks led by Sumit Sir's live VARC plus IIM-A/B/C alumni faculty.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/cat-exam/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/cat-2026-self-study" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>

      <!-- Card 2: NMAT -->
      <article class="exam-spotlight-card flip reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-nmims.jpg') }}');" role="img" aria-label="NMAT 2026 — pathway to NMIMS Mumbai"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">02 / 14 · NMAT</div>
          <h3 class="exam-spotlight-title">NMAT 2026</h3>
          <p class="exam-spotlight-desc">NMIMS Management Aptitude Test — adaptive 3-attempt format with no negative marking. Gateway to <strong>NMIMS Mumbai</strong>, ISB Hyderabad PGP-PRO, SPJIMR PGMPW and other selective programs. Sectional drills, cutoff predictor and shortlist guidance built in.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/nmat/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/nmat-snap-combo-2026" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>

      <!-- Card 3: SNAP -->
      <article class="exam-spotlight-card reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-symbiosis.jpg') }}');" role="img" aria-label="SNAP 2026 — entry to Symbiosis B-Schools"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">03 / 14 · SNAP</div>
          <h3 class="exam-spotlight-title">SNAP 2026</h3>
          <p class="exam-spotlight-desc">Symbiosis National Aptitude Test — covers QA, GA, Reasoning and Verbal across a 60-question paper. The route to <strong>SIBM Pune, SCMHRD, SIIB</strong> and 16 other Symbiosis institutes. CATKing's SNAP track includes 12+ pattern-mocks and SNAP-WAT-PI prep.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/snap/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/snap-nmat-combo-2026" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>

      <!-- Card 4: XAT -->
      <article class="exam-spotlight-card flip reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-xlri.jpg') }}');" role="img" aria-label="XAT 2027 — gateway to XLRI Jamshedpur"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">04 / 14 · XAT</div>
          <h3 class="exam-spotlight-title">XAT 2027</h3>
          <p class="exam-spotlight-desc">Xavier Aptitude Test — features the unique <strong>Decision Making</strong> module and General Knowledge section that no other MBA exam has. Pathway to <strong>XLRI Jamshedpur, XIMB, SPJIMR and IMT</strong>. Includes essay-evaluation rubric and XAT-pattern mocks across years.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/xat/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/xat-turbo" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>
      <!-- Card 05: MICAT -->
      <article class="exam-spotlight-card reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-mica.jpg') }}');" role="img" aria-label="MICAT"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">05 / 14 · MICAT</div>
          <h3 class="exam-spotlight-title">MICAT</h3>
          <p class="exam-spotlight-desc">MICAT (MICA Admission Test) is a national-level entrance exam administered by Mudra Institute of Communications, Ahmedabad (MICA). It serves as a gateway for admission to the PGDM-C (Post Graduate Diploma in Management Communications) and PGDM (Post Graduate Diploma in Management) programs. The exam is conducted twice a year, with MICAT I held in December and MICAT II in January.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/micat/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/micat" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>
      <!-- Card 06: CMAT -->
      <article class="exam-spotlight-card flip reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-jbims.jpg') }}');" role="img" aria-label="CMAT"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">06 / 14 · CMAT</div>
          <h3 class="exam-spotlight-title">CMAT</h3>
          <p class="exam-spotlight-desc">The CMAT exam (Common Management Admission Test) is a national-level computer-based management entrance exam conducted by the National Testing Agency (NTA) on behalf of the All India Council for Technical Education (AICTE). The CMAT is designed for admission into MBA and PGDM programs offered by AICTE-approved institutions and university departments across India.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/cmat/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/cmat-cet-combo-2026" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>
      <!-- Card 07: CET -->
      <article class="exam-spotlight-card reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-jbims.jpg') }}');" role="img" aria-label="CET"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">07 / 14 · CET</div>
          <h3 class="exam-spotlight-title">CET</h3>
          <p class="exam-spotlight-desc">The Government of Maharashtra has established State Common Entrance Test Cell as per Section 10 of the Maharashtra Unaided Private Professional Educational Institutions (Regulation of Admissions and Fees) Act, 2015. The CET Cell conducts various entrance exams for admission to professional courses in the state of Maharashtra, India.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/cet/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/cet-turbo" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>
      <!-- Card 08: GMAT -->
      <article class="exam-spotlight-card flip reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-iima.jpg') }}');" role="img" aria-label="GMAT"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">08 / 14 · GMAT</div>
          <h3 class="exam-spotlight-title">GMAT</h3>
          <p class="exam-spotlight-desc">The GMAT is a computer-based exam that evaluates critical reasoning, problem-solving, data sufficiency, logic, and analytical skills essential for business and management success. It consists of three sections: Verbal Reasoning (21 questions in 45 minutes), Quantitative Reasoning (23 questions in 45 minutes), and Data Insights (20 questions in 45 minutes), total 64 questions in 2 hours and 15 minutes.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/gmat/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/gmat-courses" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>
      <!-- Card 09: IELTS -->
      <article class="exam-spotlight-card reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-iift.jpg') }}');" role="img" aria-label="IELTS"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">09 / 14 · IELTS</div>
          <h3 class="exam-spotlight-title">IELTS</h3>
          <p class="exam-spotlight-desc">The International English Language Testing System (IELTS) is a standardised test conducted for assessing English proficiency of candidates who want to study or work abroad. It assesses listening, reading, speaking and writing skills, and serves as a key admission requirement for top universities in USA, UK, Canada, Australia, New Zealand and 140+ more. IELTS has two versions: Academic (study abroad) and General Training (work visas).</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/ielts/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/ielts-plus-application-special" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>
      <!-- Card 10: NPAT -->
      <article class="exam-spotlight-card flip reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-nmims.jpg') }}');" role="img" aria-label="NPAT"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">10 / 14 · NPAT</div>
          <h3 class="exam-spotlight-title">NPAT</h3>
          <p class="exam-spotlight-desc">NMIMS-NPAT (National Test for Programs After Twelfth) is the official entrance test for admissions to Undergraduate Degree Programs offered by NMIMS after 12th. It covers programs in Commerce, Economics, International Studies, Branding & Advertising, Liberal Arts and Management.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/npat/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/npat-course" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>
      <!-- Card 11: MAT -->
      <article class="exam-spotlight-card reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-imt.jpg') }}');" role="img" aria-label="MAT"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">11 / 14 · MAT</div>
          <h3 class="exam-spotlight-title">MAT</h3>
          <p class="exam-spotlight-desc">MAT 2025 Exam dates are out. MAT 2025 February Exam will be held in two modes: Paper Based Test (PBT) on March 9, 2025 and Computer Based Test (CBT) on March 23, 2025. Registration is open. The exam pattern is divided into 5 sections with 150 total questions. Top MBA colleges accepting MAT scores include BIMTECH Greater Noida, XIME Bangalore, Amrita Coimbatore, IFMR KREA University and Jaipuria Noida.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/mat/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/mat-turbo" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>
      <!-- Card 12: IPMAT -->
      <article class="exam-spotlight-card flip reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-iima.jpg') }}');" role="img" aria-label="IPMAT"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">12 / 14 · IPMAT</div>
          <h3 class="exam-spotlight-title">IPMAT</h3>
          <p class="exam-spotlight-desc">The Integrated Programme in Management Aptitude Test (IPMAT) is a competitive exam for admission to the five-year dual-degree Integrated Programme in Management (BBA+MBA) at top institutions like IIM Indore, IIM Rohtak, IIM Ranchi, IIFT, and TAPMI. It allows students to bypass the CAT or other exams for MBA admission after completing a three-year BBA. Class 12 graduates from 2023 can pursue this program to earn a BBA and MBA from prestigious B-Schools.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/ipmat/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/ipmat-course" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>
      <!-- Card 13: ATMA -->
      <article class="exam-spotlight-card reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-weschool.jpg') }}');" role="img" aria-label="ATMA"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">13 / 14 · ATMA</div>
          <h3 class="exam-spotlight-title">ATMA</h3>
          <p class="exam-spotlight-desc">The AIMS Test for Management Admissions (ATMA) is a national-level exam conducted by the Association of Indian Management Schools (AIMS) for admission to MBA, PGDM, MMS, MCA, and PGDBA courses, accepted by over 750 institutes in India. The exam evaluates aptitude through six sections covering Analytical Reasoning, Quantitative Skills, and Verbal Skills. Conducted multiple times a year in a center-based online format.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/atma/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/atma-turbo" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>
      <!-- Card 14: CUET PG -->
      <article class="exam-spotlight-card flip reveal">
        <div class="exam-spotlight-image" style="background-image: url('{{ asset('images/home/college-tiss.jpg') }}');" role="img" aria-label="CUET PG"></div>
        <div class="exam-spotlight-content">
          <div class="exam-spotlight-num">14 / 14 · CUET PG</div>
          <h3 class="exam-spotlight-title">CUET PG</h3>
          <p class="exam-spotlight-desc">The Common University Entrance Test (CUET) PG, conducted by the National Testing Agency, is for admission to postgraduate courses at Central Universities and participating colleges. The selection process includes an online written exam followed by counseling. In 2023, 142 universities including Delhi University, Banaras Hindu University, Jamia Millia Islamia, GGS IP University and IIIT Lucknow participated in the exam.</p>
          <div class="exam-spotlight-ctas">
            <a href="https://catking.in/exam/cuet/overview" target="_blank" rel="noopener" class="exam-spotlight-cta-primary">Learn More</a>
            <a href="https://courses.catking.in/courses/atma-turbo" target="_blank" rel="noopener" class="exam-spotlight-cta-secondary">View Course</a>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- ─────────────────────────────────────────
     SECTION 4 — SECRETS TO SUCCESS (VIDEO REELS)
     ───────────────────────────────────────── -->
<section class="theme-dark section secrets-section" id="secrets">
  <div class="container">
    <div class="section-head reveal">

      <h2 class="section-title"><em>Secrets</em> to success: CATKing toppers share it all.</h2>
      <p class="section-sub">Hear directly from 99+ percentilers — what worked, what didn't and how they cracked CAT in their own words.</p>
    </div>

    <div class="secrets-marquee-wrap reveal" aria-label="Topper video reels — auto-scrolling. Use arrows or hover to pause.">
      <button class="secrets-arrow prev" type="button" id="secretsPrev" aria-label="Previous video">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
      </button>
      <button class="secrets-arrow next" type="button" id="secretsNext" aria-label="Next video">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
      </button>
      <div class="secrets-marquee">
        <div class="secrets-track" id="secretsTrack">

      <div class="secret-card" role="button" tabindex="0" data-yt="7_Tz4tkaQPo" data-name="Ajmal" style="--thumb: url('https://img.youtube.com/vi/7_Tz4tkaQPo/hqdefault.jpg');" aria-label="Play video: Ajmal — CAT 99.29 %ile">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Ajmal</div>
          <div class="secret-score">CAT 99.29 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="X9CxNhGAqDM" data-name="Muskan" style="--thumb: url('https://img.youtube.com/vi/X9CxNhGAqDM/hqdefault.jpg');" aria-label="Play video: Muskan — CATKing CAT Topper">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Muskan</div>
          <div class="secret-score">CATKing CAT Topper</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="TV-bPh4KTXA" data-name="Dhruvsingh" style="--thumb: url('https://img.youtube.com/vi/TV-bPh4KTXA/hqdefault.jpg');" aria-label="Play video: Dhruvsingh — CAT 99.02 %ile">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Dhruvsingh</div>
          <div class="secret-score">CAT 99.02 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="NT0F6t31heM" data-name="Akshma" style="--thumb: url('https://img.youtube.com/vi/NT0F6t31heM/hqdefault.jpg');" aria-label="Play video: Akshma — CAT 99.36 %ile">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Akshma</div>
          <div class="secret-score">CAT 99.36 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="jdPUhiNhloc" data-name="Jai" style="--thumb: url('https://img.youtube.com/vi/jdPUhiNhloc/hqdefault.jpg');" aria-label="Play video: Jai — CAT 99.66 %ile">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Jai</div>
          <div class="secret-score">CAT 99.66 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="ZdPtNvamYlA" data-name="Rishi" style="--thumb: url('https://img.youtube.com/vi/ZdPtNvamYlA/hqdefault.jpg');" aria-label="Play video: Rishi — CAT 99.22 %ile">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Rishi</div>
          <div class="secret-score">CAT 99.22 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="QV7HwpMVrXo" data-name="Mayank" style="--thumb: url('https://img.youtube.com/vi/QV7HwpMVrXo/hqdefault.jpg');" aria-label="Play video: Mayank — CAT 99 %ile">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Mayank</div>
          <div class="secret-score">CAT 99 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="2T4myWfkQGQ" data-name="Sarthak" style="--thumb: url('https://img.youtube.com/vi/2T4myWfkQGQ/hqdefault.jpg');" aria-label="Play video: Sarthak — CAT 99 %ile">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Sarthak</div>
          <div class="secret-score">CAT 99 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="8bch7T_WFj0" data-name="Gourav" style="--thumb: url('https://img.youtube.com/vi/8bch7T_WFj0/hqdefault.jpg');" aria-label="Play video: Gourav — CAT 99 %ile">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Gourav</div>
          <div class="secret-score">CAT 99 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="IlrURaX6-fI" data-name="Akshama" style="--thumb: url('https://img.youtube.com/vi/IlrURaX6-fI/hqdefault.jpg');" aria-label="Play video: Akshama — CAT 99 %ile">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Akshama</div>
          <div class="secret-score">CAT 99 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="pKEQ3zC_6V4" data-name="Romit" style="--thumb: url('https://img.youtube.com/vi/pKEQ3zC_6V4/hqdefault.jpg');" aria-label="Play video: Romit — NMAT 262 Score">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Romit</div>
          <div class="secret-score">NMAT 262 Score</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="7_Tz4tkaQPo" data-name="Ajmal" style="--thumb: url('https://img.youtube.com/vi/7_Tz4tkaQPo/hqdefault.jpg');" aria-label="Play video: Ajmal — CAT 99.29 %ile" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Ajmal</div>
          <div class="secret-score">CAT 99.29 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="X9CxNhGAqDM" data-name="Muskan" style="--thumb: url('https://img.youtube.com/vi/X9CxNhGAqDM/hqdefault.jpg');" aria-label="Play video: Muskan — CATKing CAT Topper" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Muskan</div>
          <div class="secret-score">CATKing CAT Topper</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="TV-bPh4KTXA" data-name="Dhruvsingh" style="--thumb: url('https://img.youtube.com/vi/TV-bPh4KTXA/hqdefault.jpg');" aria-label="Play video: Dhruvsingh — CAT 99.02 %ile" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Dhruvsingh</div>
          <div class="secret-score">CAT 99.02 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="NT0F6t31heM" data-name="Akshma" style="--thumb: url('https://img.youtube.com/vi/NT0F6t31heM/hqdefault.jpg');" aria-label="Play video: Akshma — CAT 99.36 %ile" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Akshma</div>
          <div class="secret-score">CAT 99.36 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="jdPUhiNhloc" data-name="Jai" style="--thumb: url('https://img.youtube.com/vi/jdPUhiNhloc/hqdefault.jpg');" aria-label="Play video: Jai — CAT 99.66 %ile" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Jai</div>
          <div class="secret-score">CAT 99.66 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="ZdPtNvamYlA" data-name="Rishi" style="--thumb: url('https://img.youtube.com/vi/ZdPtNvamYlA/hqdefault.jpg');" aria-label="Play video: Rishi — CAT 99.22 %ile" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Rishi</div>
          <div class="secret-score">CAT 99.22 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="QV7HwpMVrXo" data-name="Mayank" style="--thumb: url('https://img.youtube.com/vi/QV7HwpMVrXo/hqdefault.jpg');" aria-label="Play video: Mayank — CAT 99 %ile" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Mayank</div>
          <div class="secret-score">CAT 99 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="2T4myWfkQGQ" data-name="Sarthak" style="--thumb: url('https://img.youtube.com/vi/2T4myWfkQGQ/hqdefault.jpg');" aria-label="Play video: Sarthak — CAT 99 %ile" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Sarthak</div>
          <div class="secret-score">CAT 99 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="8bch7T_WFj0" data-name="Gourav" style="--thumb: url('https://img.youtube.com/vi/8bch7T_WFj0/hqdefault.jpg');" aria-label="Play video: Gourav — CAT 99 %ile" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Gourav</div>
          <div class="secret-score">CAT 99 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="IlrURaX6-fI" data-name="Akshama" style="--thumb: url('https://img.youtube.com/vi/IlrURaX6-fI/hqdefault.jpg');" aria-label="Play video: Akshama — CAT 99 %ile" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Akshama</div>
          <div class="secret-score">CAT 99 %ile</div>
        </div>
      </div>

      <div class="secret-card" role="button" tabindex="0" data-yt="pKEQ3zC_6V4" data-name="Romit" style="--thumb: url('https://img.youtube.com/vi/pKEQ3zC_6V4/hqdefault.jpg');" aria-label="Play video: Romit — NMAT 262 Score" aria-hidden="true">
        <span class="secret-pill"><span class="pulse-dot"></span>Reel</span>
        <div class="secret-play">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
        </div>
        <div class="secret-bottom">
          <div class="secret-name">Romit</div>
          <div class="secret-score">NMAT 262 Score</div>
        </div>
      </div>

        </div>
      </div>
    </div>

    <div class="secrets-press reveal">
      <span class="secrets-press-label">As Featured In</span>
      <span class="secrets-press-logo">The Hindu</span>
      <span class="secrets-press-logo">Economic Times</span>
      <span class="secrets-press-logo">YourStory</span>
      <span class="secrets-press-logo">Times of India</span>
      <span class="secrets-press-logo">Mint</span>
      <span class="secrets-press-logo">Forbes India</span>
    </div>
  </div>
</section>

<!-- ─────────────────────────────────────────
     SECTION 3 — SUCCESS STORIES SPEAK LOUDER
     ───────────────────────────────────────── -->
<section class="theme-light section stories-section" id="results">
  <div class="container">
    <div class="section-head reveal">

      <h2 class="section-title">Our success stories speak <em>louder</em>.</h2>
      <p class="section-sub">Join 5,000+ students who cracked CAT with 99+ percentile and made it to their dream IIMs.</p>
    </div>

    <div class="stories-stats reveal">
      <div class="story-stat">
        <div class="story-stat-num"><em>1,247</em></div>
        <div class="story-stat-lbl">Aspirants enrolled this week</div>
      </div>
      <div class="story-stat">
        <div class="story-stat-num"><em>50,000+</em></div>
        <div class="story-stat-lbl">Students mentored since 2014</div>
      </div>
      <div class="story-stat">
        <div class="story-stat-num"><em>4.8</em><small>/5</small></div>
        <div class="story-stat-lbl">Avg rating · 8,400+ reviews</div>
      </div>
      <div class="story-stat">
        <div class="story-stat-num"><em>96%</em></div>
        <div class="story-stat-lbl">Course completion rate</div>
      </div>
    </div>
  </div>

  <!-- Auto-scrolling marquee with flat cards + arrows -->
  <div class="stories-marquee reveal" aria-label="Success stories — auto-scrolling. Use arrows to navigate.">
    <button class="stories-arrow prev" type="button" id="storiesPrev" aria-label="Previous story">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
    </button>
    <button class="stories-arrow next" type="button" id="storiesNext" aria-label="Next story">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
    </button>
    <div class="stories-track" id="storiesTrack">
      <!-- All 27 student cards -->
      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">PC</div>
          <div class="story-head-info">
            <div class="story-name">Protham Saha Chowdhury</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.91<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>27.93</span><span>98.17</span></div>
            <div><span>36.00</span><span>100.00</span></div>
            <div><span>20.78</span><span>95.31</span></div>
            <div><span>84.71</span><span>99.91</span></div>
          </div>
        </div>
        <div class="story-quote">Stay consistent, study from the dashboard, and give mocks. Sahil Sir and Prantik Sir helped a lot. Attending live classes is helpful, the classes are interactive and keep me motivated. I attended All Verbal Classes live so that I can interact with Sumit Sir.</div>
        <button class="story-btn" type="button" onclick="openScorecard(0)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">NA</div>
          <div class="story-head-info">
            <div class="story-name">Naman</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.98<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>18.07</span><span>92.59</span></div>
            <div><span>22.82</span><span>96.13</span></div>
            <div><span>34.20</span><span>99.70</span></div>
            <div><span>75.09</span><span>98.98</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's mocks were calibrated perfectly to actual exam difficulty — the wave-based launches kept me consistently challenged and improving week after week.</div>
        <button class="story-btn" type="button" onclick="openScorecard(1)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">AS</div>
          <div class="story-head-info">
            <div class="story-name">Aashna Suneja</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.48<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>18.07</span><span>92.59</span></div>
            <div><span>29.45</span><span>98.78</span></div>
            <div><span>24.77</span><span>96.91</span></div>
            <div><span>72.29</span><span>98.48</span></div>
          </div>
        </div>
        <div class="story-quote">Sumit Sir's VARC modules cracked the toughest section for me. The doubt-clearing sessions and recorded videos made all the difference in my prep.</div>
        <button class="story-btn" type="button" onclick="openScorecard(2)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">RK</div>
          <div class="story-head-info">
            <div class="story-name">Rohan Khanna</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.37<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>35.10</span><span>99.85</span></div>
            <div><span>22.18</span><span>95.87</span></div>
            <div><span>18.69</span><span>93.36</span></div>
            <div><span>75.97</span><span>99.37</span></div>
          </div>
        </div>
        <div class="story-quote">The level of mentorship at CATKing is unmatched. From doubt-clearing to interview prep, every stage was handled with precision and personal attention.</div>
        <button class="story-btn" type="button" onclick="openScorecard(3)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">AS</div>
          <div class="story-head-info">
            <div class="story-name">Anssh Sharma</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.53<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>19.14</span><span>93.92</span></div>
            <div><span>35.34</span><span>99.89</span></div>
            <div><span>26.60</span><span>97.64</span></div>
            <div><span>81.08</span><span>99.53</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's structured curriculum and analytics dashboard helped me identify weak areas early. The mocks felt exactly like the real CAT — no surprises on D-day.</div>
        <button class="story-btn" type="button" onclick="openScorecard(4)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">DK</div>
          <div class="story-head-info">
            <div class="story-name">Divyansh Kumar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.16<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>20.10</span><span>95.04</span></div>
            <div><span>30.36</span><span>99.06</span></div>
            <div><span>19.56</span><span>94.45</span></div>
            <div><span>70.02</span><span>99.16</span></div>
          </div>
        </div>
        <div class="story-quote">Daily live classes from IIM-A/B/C alumni faculty plus the self-study library gave me everything I needed. The 1-on-1 mentor calls were game-changers.</div>
        <button class="story-btn" type="button" onclick="openScorecard(5)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">PB</div>
          <div class="story-head-info">
            <div class="story-name">Prakhar Baheti</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.02<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>19.14</span><span>93.92</span></div>
            <div><span>35.16</span><span>99.86</span></div>
            <div><span>17.78</span><span>92.22</span></div>
            <div><span>72.08</span><span>99.02</span></div>
          </div>
        </div>
        <div class="story-quote">The 130+ LOD1 & LOD2 practice e-books built my fundamentals brick by brick. By mock 8, I was scoring 95+ consistently.</div>
        <button class="story-btn" type="button" onclick="openScorecard(6)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">DA</div>
          <div class="story-head-info">
            <div class="story-name">Divyam Agarwal</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.00<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>17.31</span><span>91.64</span></div>
            <div><span>34.20</span><span>99.70</span></div>
            <div><span>24.77</span><span>96.91</span></div>
            <div><span>76.28</span><span>99.00</span></div>
          </div>
        </div>
        <div class="story-quote">What sets CATKing apart is the small-batch attention. Daily targets and weekend strategy sessions kept me accountable through the entire 6-month grind.</div>
        <button class="story-btn" type="button" onclick="openScorecard(7)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">AS</div>
          <div class="story-head-info">
            <div class="story-name">Amrit Singh</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.92<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>26.65</span><span>97.66</span></div>
            <div><span>17.39</span><span>91.74</span></div>
            <div><span>20.30</span><span>95.12</span></div>
            <div><span>64.34</span><span>98.92</span></div>
          </div>
        </div>
        <div class="story-quote">From struggling with %tiles to walking into my dream IIM — CATKing's faculty and mock series made the journey not just possible but enjoyable.</div>
        <button class="story-btn" type="button" onclick="openScorecard(8)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">SS</div>
          <div class="story-head-info">
            <div class="story-name">Shivam Singh</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.72<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>26.65</span><span>97.66</span></div>
            <div><span>17.39</span><span>91.74</span></div>
            <div><span>34.62</span><span>99.77</span></div>
            <div><span>78.66</span><span>98.72</span></div>
          </div>
        </div>
        <div class="story-quote">The MICA-alumni mock interviews and SOP reviews polished my profile in ways I didn't think were possible. Truly end-to-end prep.</div>
        <button class="story-btn" type="button" onclick="openScorecard(9)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">PK</div>
          <div class="story-head-info">
            <div class="story-name">Parushi Singh Kunwar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.57<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>25.93</span><span>97.37</span></div>
            <div><span>32.04</span><span>99.34</span></div>
            <div><span>11.32</span><span>82.87</span></div>
            <div><span>69.29</span><span>98.57</span></div>
          </div>
        </div>
        <div class="story-quote">Speed-focused strategy is what I needed for CAT, and CATKing delivered. The sectional drills helped me cross 99 in DILR after months of being stuck at 90.</div>
        <button class="story-btn" type="button" onclick="openScorecard(10)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">AK</div>
          <div class="story-head-info">
            <div class="story-name">Anish Kumar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.42<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>15.93</span><span>89.91</span></div>
            <div><span>27.45</span><span>97.98</span></div>
            <div><span>29.83</span><span>98.93</span></div>
            <div><span>73.21</span><span>98.42</span></div>
          </div>
        </div>
        <div class="story-quote">Stay consistent, study from the dashboard, and give mocks. Sahil Sir and Prantik Sir helped a lot. Attending live classes is helpful, the classes are interactive and keep me motivated. I attended All Verbal Classes live so that I can interact with Sumit Sir.</div>
        <button class="story-btn" type="button" onclick="openScorecard(11)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">PK</div>
          <div class="story-head-info">
            <div class="story-name">Pranav Kumar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.40<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>15.93</span><span>89.91</span></div>
            <div><span>33.42</span><span>99.57</span></div>
            <div><span>20.10</span><span>95.04</span></div>
            <div><span>69.45</span><span>98.40</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's mocks were calibrated perfectly to actual exam difficulty — the wave-based launches kept me consistently challenged and improving week after week.</div>
        <button class="story-btn" type="button" onclick="openScorecard(12)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">NP</div>
          <div class="story-head-info">
            <div class="story-name">Nikhil Patil</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.32<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>14.28</span><span>87.85</span></div>
            <div><span>27.40</span><span>97.96</span></div>
            <div><span>30.72</span><span>99.12</span></div>
            <div><span>72.40</span><span>98.32</span></div>
          </div>
        </div>
        <div class="story-quote">Sumit Sir's VARC modules cracked the toughest section for me. The doubt-clearing sessions and recorded videos made all the difference in my prep.</div>
        <button class="story-btn" type="button" onclick="openScorecard(13)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">PS</div>
          <div class="story-head-info">
            <div class="story-name">Pulkit Saini</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.00<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>18.29</span><span>92.86</span></div>
            <div><span>30.36</span><span>99.06</span></div>
            <div><span>18.69</span><span>93.36</span></div>
            <div><span>67.34</span><span>98.00</span></div>
          </div>
        </div>
        <div class="story-quote">The level of mentorship at CATKing is unmatched. From doubt-clearing to interview prep, every stage was handled with precision and personal attention.</div>
        <button class="story-btn" type="button" onclick="openScorecard(14)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">KP</div>
          <div class="story-head-info">
            <div class="story-name">Karthik Puppala</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">97.97<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>12.38</span><span>85.47</span></div>
            <div><span>28.58</span><span>98.43</span></div>
            <div><span>29.15</span><span>98.66</span></div>
            <div><span>70.11</span><span>97.97</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's structured curriculum and analytics dashboard helped me identify weak areas early. The mocks felt exactly like the real CAT — no surprises on D-day.</div>
        <button class="story-btn" type="button" onclick="openScorecard(15)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">DK</div>
          <div class="story-head-info">
            <div class="story-name">Dheeraj Kumar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">96.80<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>21.17</span><span>95.47</span></div>
            <div><span>15.97</span><span>89.96</span></div>
            <div><span>21.88</span><span>95.75</span></div>
            <div><span>59.02</span><span>96.80</span></div>
          </div>
        </div>
        <div class="story-quote">Daily live classes from IIM-A/B/C alumni faculty plus the self-study library gave me everything I needed. The 1-on-1 mentor calls were game-changers.</div>
        <button class="story-btn" type="button" onclick="openScorecard(16)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">HB</div>
          <div class="story-head-info">
            <div class="story-name">Himanshu Bahekar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">96.50<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>19.33</span><span>94.16</span></div>
            <div><span>18.30</span><span>92.87</span></div>
            <div><span>19.76</span><span>94.70</span></div>
            <div><span>57.39</span><span>96.50</span></div>
          </div>
        </div>
        <div class="story-quote">The 130+ LOD1 & LOD2 practice e-books built my fundamentals brick by brick. By mock 8, I was scoring 95+ consistently.</div>
        <button class="story-btn" type="button" onclick="openScorecard(17)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">ST</div>
          <div class="story-head-info">
            <div class="story-name">Sahil Taneja</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">96.26<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>18.50</span><span>93.13</span></div>
            <div><span>13.45</span><span>86.81</span></div>
            <div><span>26.60</span><span>97.64</span></div>
            <div><span>58.55</span><span>96.26</span></div>
          </div>
        </div>
        <div class="story-quote">What sets CATKing apart is the small-batch attention. Daily targets and weekend strategy sessions kept me accountable through the entire 6-month grind.</div>
        <button class="story-btn" type="button" onclick="openScorecard(18)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">PS</div>
          <div class="story-head-info">
            <div class="story-name">Prakhar Kumar Srivastava</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">95.78<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>20.23</span><span>95.09</span></div>
            <div><span>25.67</span><span>97.27</span></div>
            <div><span>4.25</span><span>60.78</span></div>
            <div><span>50.15</span><span>95.78</span></div>
          </div>
        </div>
        <div class="story-quote">From struggling with %tiles to walking into my dream IIM — CATKing's faculty and mock series made the journey not just possible but enjoyable.</div>
        <button class="story-btn" type="button" onclick="openScorecard(19)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">SU</div>
          <div class="story-head-info">
            <div class="story-name">Sunaina</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">95.70<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>12.79</span><span>85.99</span></div>
            <div><span>26.22</span><span>97.49</span></div>
            <div><span>18.90</span><span>93.63</span></div>
            <div><span>57.91</span><span>95.70</span></div>
          </div>
        </div>
        <div class="story-quote">The MICA-alumni mock interviews and SOP reviews polished my profile in ways I didn't think were possible. Truly end-to-end prep.</div>
        <button class="story-btn" type="button" onclick="openScorecard(20)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">UR</div>
          <div class="story-head-info">
            <div class="story-name">Udit Pragadeesh R</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">95.54<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>18.07</span><span>92.59</span></div>
            <div><span>22.82</span><span>96.13</span></div>
            <div><span>14.38</span><span>87.97</span></div>
            <div><span>55.27</span><span>95.54</span></div>
          </div>
        </div>
        <div class="story-quote">Speed-focused strategy is what I needed for CAT, and CATKing delivered. The sectional drills helped me cross 99 in DILR after months of being stuck at 90.</div>
        <button class="story-btn" type="button" onclick="openScorecard(21)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">UA</div>
          <div class="story-head-info">
            <div class="story-name">Ujjawal Awasthi</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">95.50<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>13.22</span><span>86.53</span></div>
            <div><span>2.72</span><span>45.38</span></div>
            <div><span>22.77</span><span>96.11</span></div>
            <div><span>38.71</span><span>95.50</span></div>
          </div>
        </div>
        <div class="story-quote">Stay consistent, study from the dashboard, and give mocks. Sahil Sir and Prantik Sir helped a lot. Attending live classes is helpful, the classes are interactive and keep me motivated. I attended All Verbal Classes live so that I can interact with Sumit Sir.</div>
        <button class="story-btn" type="button" onclick="openScorecard(22)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">DS</div>
          <div class="story-head-info">
            <div class="story-name">Divyanshu Kumar Singh</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">94.86<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>21.17</span><span>95.47</span></div>
            <div><span>16.73</span><span>90.91</span></div>
            <div><span>11.32</span><span>82.87</span></div>
            <div><span>49.22</span><span>94.86</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's mocks were calibrated perfectly to actual exam difficulty — the wave-based launches kept me consistently challenged and improving week after week.</div>
        <button class="story-btn" type="button" onclick="openScorecard(23)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">VS</div>
          <div class="story-head-info">
            <div class="story-name">Vaibhav Raj Sahni</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.52<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>20.23</span><span>95.09</span></div>
            <div><span>31.26</span><span>99.21</span></div>
            <div><span>31.44</span><span>99.24</span></div>
            <div><span>82.93</span><span>99.52</span></div>
          </div>
        </div>
        <div class="story-quote">Sumit Sir's VARC modules cracked the toughest section for me. The doubt-clearing sessions and recorded videos made all the difference in my prep.</div>
        <button class="story-btn" type="button" onclick="openScorecard(24)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">LA</div>
          <div class="story-head-info">
            <div class="story-name">Lokesh Agarwal</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.44<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>35.10</span><span>99.85</span></div>
            <div><span>30.78</span><span>99.13</span></div>
            <div><span>21.88</span><span>95.75</span></div>
            <div><span>87.76</span><span>99.44</span></div>
          </div>
        </div>
        <div class="story-quote">The level of mentorship at CATKing is unmatched. From doubt-clearing to interview prep, every stage was handled with precision and personal attention.</div>
        <button class="story-btn" type="button" onclick="openScorecard(25)">View scorecard</button>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">UB</div>
          <div class="story-head-info">
            <div class="story-name">Uttarak Bansal</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">93.04<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>16.51</span><span>90.64</span></div>
            <div><span>12.54</span><span>85.68</span></div>
            <div><span>18.29</span><span>92.86</span></div>
            <div><span>47.34</span><span>93.04</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's structured curriculum and analytics dashboard helped me identify weak areas early. The mocks felt exactly like the real CAT — no surprises on D-day.</div>
        <button class="story-btn" type="button" onclick="openScorecard(26)">View scorecard</button>
      </article>

      <!-- Duplicate set for seamless loop -->
      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">PC</div>
          <div class="story-head-info">
            <div class="story-name">Protham Saha Chowdhury</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.91<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>27.93</span><span>98.17</span></div>
            <div><span>36.00</span><span>100.00</span></div>
            <div><span>20.78</span><span>95.31</span></div>
            <div><span>84.71</span><span>99.91</span></div>
          </div>
        </div>
        <div class="story-quote">Stay consistent, study from the dashboard, and give mocks. Sahil Sir and Prantik Sir helped a lot. Attending live classes is helpful, the classes are interactive and keep me motivated. I attended All Verbal Classes live so that I can interact with Sumit Sir.</div>
        <button class="story-btn" type="button" onclick="openScorecard(0)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">NA</div>
          <div class="story-head-info">
            <div class="story-name">Naman</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.98<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>18.07</span><span>92.59</span></div>
            <div><span>22.82</span><span>96.13</span></div>
            <div><span>34.20</span><span>99.70</span></div>
            <div><span>75.09</span><span>98.98</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's mocks were calibrated perfectly to actual exam difficulty — the wave-based launches kept me consistently challenged and improving week after week.</div>
        <button class="story-btn" type="button" onclick="openScorecard(1)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">AS</div>
          <div class="story-head-info">
            <div class="story-name">Aashna Suneja</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.48<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>18.07</span><span>92.59</span></div>
            <div><span>29.45</span><span>98.78</span></div>
            <div><span>24.77</span><span>96.91</span></div>
            <div><span>72.29</span><span>98.48</span></div>
          </div>
        </div>
        <div class="story-quote">Sumit Sir's VARC modules cracked the toughest section for me. The doubt-clearing sessions and recorded videos made all the difference in my prep.</div>
        <button class="story-btn" type="button" onclick="openScorecard(2)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">RK</div>
          <div class="story-head-info">
            <div class="story-name">Rohan Khanna</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.37<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>35.10</span><span>99.85</span></div>
            <div><span>22.18</span><span>95.87</span></div>
            <div><span>18.69</span><span>93.36</span></div>
            <div><span>75.97</span><span>99.37</span></div>
          </div>
        </div>
        <div class="story-quote">The level of mentorship at CATKing is unmatched. From doubt-clearing to interview prep, every stage was handled with precision and personal attention.</div>
        <button class="story-btn" type="button" onclick="openScorecard(3)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">AS</div>
          <div class="story-head-info">
            <div class="story-name">Anssh Sharma</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.53<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>19.14</span><span>93.92</span></div>
            <div><span>35.34</span><span>99.89</span></div>
            <div><span>26.60</span><span>97.64</span></div>
            <div><span>81.08</span><span>99.53</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's structured curriculum and analytics dashboard helped me identify weak areas early. The mocks felt exactly like the real CAT — no surprises on D-day.</div>
        <button class="story-btn" type="button" onclick="openScorecard(4)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">DK</div>
          <div class="story-head-info">
            <div class="story-name">Divyansh Kumar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.16<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>20.10</span><span>95.04</span></div>
            <div><span>30.36</span><span>99.06</span></div>
            <div><span>19.56</span><span>94.45</span></div>
            <div><span>70.02</span><span>99.16</span></div>
          </div>
        </div>
        <div class="story-quote">Daily live classes from IIM-A/B/C alumni faculty plus the self-study library gave me everything I needed. The 1-on-1 mentor calls were game-changers.</div>
        <button class="story-btn" type="button" onclick="openScorecard(5)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">PB</div>
          <div class="story-head-info">
            <div class="story-name">Prakhar Baheti</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.02<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>19.14</span><span>93.92</span></div>
            <div><span>35.16</span><span>99.86</span></div>
            <div><span>17.78</span><span>92.22</span></div>
            <div><span>72.08</span><span>99.02</span></div>
          </div>
        </div>
        <div class="story-quote">The 130+ LOD1 & LOD2 practice e-books built my fundamentals brick by brick. By mock 8, I was scoring 95+ consistently.</div>
        <button class="story-btn" type="button" onclick="openScorecard(6)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">DA</div>
          <div class="story-head-info">
            <div class="story-name">Divyam Agarwal</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.00<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>17.31</span><span>91.64</span></div>
            <div><span>34.20</span><span>99.70</span></div>
            <div><span>24.77</span><span>96.91</span></div>
            <div><span>76.28</span><span>99.00</span></div>
          </div>
        </div>
        <div class="story-quote">What sets CATKing apart is the small-batch attention. Daily targets and weekend strategy sessions kept me accountable through the entire 6-month grind.</div>
        <button class="story-btn" type="button" onclick="openScorecard(7)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">AS</div>
          <div class="story-head-info">
            <div class="story-name">Amrit Singh</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.92<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>26.65</span><span>97.66</span></div>
            <div><span>17.39</span><span>91.74</span></div>
            <div><span>20.30</span><span>95.12</span></div>
            <div><span>64.34</span><span>98.92</span></div>
          </div>
        </div>
        <div class="story-quote">From struggling with %tiles to walking into my dream IIM — CATKing's faculty and mock series made the journey not just possible but enjoyable.</div>
        <button class="story-btn" type="button" onclick="openScorecard(8)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">SS</div>
          <div class="story-head-info">
            <div class="story-name">Shivam Singh</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.72<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>26.65</span><span>97.66</span></div>
            <div><span>17.39</span><span>91.74</span></div>
            <div><span>34.62</span><span>99.77</span></div>
            <div><span>78.66</span><span>98.72</span></div>
          </div>
        </div>
        <div class="story-quote">The MICA-alumni mock interviews and SOP reviews polished my profile in ways I didn't think were possible. Truly end-to-end prep.</div>
        <button class="story-btn" type="button" onclick="openScorecard(9)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">PK</div>
          <div class="story-head-info">
            <div class="story-name">Parushi Singh Kunwar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.57<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>25.93</span><span>97.37</span></div>
            <div><span>32.04</span><span>99.34</span></div>
            <div><span>11.32</span><span>82.87</span></div>
            <div><span>69.29</span><span>98.57</span></div>
          </div>
        </div>
        <div class="story-quote">Speed-focused strategy is what I needed for CAT, and CATKing delivered. The sectional drills helped me cross 99 in DILR after months of being stuck at 90.</div>
        <button class="story-btn" type="button" onclick="openScorecard(10)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">AK</div>
          <div class="story-head-info">
            <div class="story-name">Anish Kumar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.42<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>15.93</span><span>89.91</span></div>
            <div><span>27.45</span><span>97.98</span></div>
            <div><span>29.83</span><span>98.93</span></div>
            <div><span>73.21</span><span>98.42</span></div>
          </div>
        </div>
        <div class="story-quote">Stay consistent, study from the dashboard, and give mocks. Sahil Sir and Prantik Sir helped a lot. Attending live classes is helpful, the classes are interactive and keep me motivated. I attended All Verbal Classes live so that I can interact with Sumit Sir.</div>
        <button class="story-btn" type="button" onclick="openScorecard(11)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">PK</div>
          <div class="story-head-info">
            <div class="story-name">Pranav Kumar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.40<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>15.93</span><span>89.91</span></div>
            <div><span>33.42</span><span>99.57</span></div>
            <div><span>20.10</span><span>95.04</span></div>
            <div><span>69.45</span><span>98.40</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's mocks were calibrated perfectly to actual exam difficulty — the wave-based launches kept me consistently challenged and improving week after week.</div>
        <button class="story-btn" type="button" onclick="openScorecard(12)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">NP</div>
          <div class="story-head-info">
            <div class="story-name">Nikhil Patil</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.32<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>14.28</span><span>87.85</span></div>
            <div><span>27.40</span><span>97.96</span></div>
            <div><span>30.72</span><span>99.12</span></div>
            <div><span>72.40</span><span>98.32</span></div>
          </div>
        </div>
        <div class="story-quote">Sumit Sir's VARC modules cracked the toughest section for me. The doubt-clearing sessions and recorded videos made all the difference in my prep.</div>
        <button class="story-btn" type="button" onclick="openScorecard(13)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">PS</div>
          <div class="story-head-info">
            <div class="story-name">Pulkit Saini</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">98.00<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>18.29</span><span>92.86</span></div>
            <div><span>30.36</span><span>99.06</span></div>
            <div><span>18.69</span><span>93.36</span></div>
            <div><span>67.34</span><span>98.00</span></div>
          </div>
        </div>
        <div class="story-quote">The level of mentorship at CATKing is unmatched. From doubt-clearing to interview prep, every stage was handled with precision and personal attention.</div>
        <button class="story-btn" type="button" onclick="openScorecard(14)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">KP</div>
          <div class="story-head-info">
            <div class="story-name">Karthik Puppala</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">97.97<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>12.38</span><span>85.47</span></div>
            <div><span>28.58</span><span>98.43</span></div>
            <div><span>29.15</span><span>98.66</span></div>
            <div><span>70.11</span><span>97.97</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's structured curriculum and analytics dashboard helped me identify weak areas early. The mocks felt exactly like the real CAT — no surprises on D-day.</div>
        <button class="story-btn" type="button" onclick="openScorecard(15)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">DK</div>
          <div class="story-head-info">
            <div class="story-name">Dheeraj Kumar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">96.80<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>21.17</span><span>95.47</span></div>
            <div><span>15.97</span><span>89.96</span></div>
            <div><span>21.88</span><span>95.75</span></div>
            <div><span>59.02</span><span>96.80</span></div>
          </div>
        </div>
        <div class="story-quote">Daily live classes from IIM-A/B/C alumni faculty plus the self-study library gave me everything I needed. The 1-on-1 mentor calls were game-changers.</div>
        <button class="story-btn" type="button" onclick="openScorecard(16)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">HB</div>
          <div class="story-head-info">
            <div class="story-name">Himanshu Bahekar</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">96.50<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>19.33</span><span>94.16</span></div>
            <div><span>18.30</span><span>92.87</span></div>
            <div><span>19.76</span><span>94.70</span></div>
            <div><span>57.39</span><span>96.50</span></div>
          </div>
        </div>
        <div class="story-quote">The 130+ LOD1 & LOD2 practice e-books built my fundamentals brick by brick. By mock 8, I was scoring 95+ consistently.</div>
        <button class="story-btn" type="button" onclick="openScorecard(17)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">ST</div>
          <div class="story-head-info">
            <div class="story-name">Sahil Taneja</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">96.26<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>18.50</span><span>93.13</span></div>
            <div><span>13.45</span><span>86.81</span></div>
            <div><span>26.60</span><span>97.64</span></div>
            <div><span>58.55</span><span>96.26</span></div>
          </div>
        </div>
        <div class="story-quote">What sets CATKing apart is the small-batch attention. Daily targets and weekend strategy sessions kept me accountable through the entire 6-month grind.</div>
        <button class="story-btn" type="button" onclick="openScorecard(18)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">PS</div>
          <div class="story-head-info">
            <div class="story-name">Prakhar Kumar Srivastava</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">95.78<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>20.23</span><span>95.09</span></div>
            <div><span>25.67</span><span>97.27</span></div>
            <div><span>4.25</span><span>60.78</span></div>
            <div><span>50.15</span><span>95.78</span></div>
          </div>
        </div>
        <div class="story-quote">From struggling with %tiles to walking into my dream IIM — CATKing's faculty and mock series made the journey not just possible but enjoyable.</div>
        <button class="story-btn" type="button" onclick="openScorecard(19)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">SU</div>
          <div class="story-head-info">
            <div class="story-name">Sunaina</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">95.70<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>12.79</span><span>85.99</span></div>
            <div><span>26.22</span><span>97.49</span></div>
            <div><span>18.90</span><span>93.63</span></div>
            <div><span>57.91</span><span>95.70</span></div>
          </div>
        </div>
        <div class="story-quote">The MICA-alumni mock interviews and SOP reviews polished my profile in ways I didn't think were possible. Truly end-to-end prep.</div>
        <button class="story-btn" type="button" onclick="openScorecard(20)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">UR</div>
          <div class="story-head-info">
            <div class="story-name">Udit Pragadeesh R</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">95.54<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>18.07</span><span>92.59</span></div>
            <div><span>22.82</span><span>96.13</span></div>
            <div><span>14.38</span><span>87.97</span></div>
            <div><span>55.27</span><span>95.54</span></div>
          </div>
        </div>
        <div class="story-quote">Speed-focused strategy is what I needed for CAT, and CATKing delivered. The sectional drills helped me cross 99 in DILR after months of being stuck at 90.</div>
        <button class="story-btn" type="button" onclick="openScorecard(21)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">UA</div>
          <div class="story-head-info">
            <div class="story-name">Ujjawal Awasthi</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">95.50<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>13.22</span><span>86.53</span></div>
            <div><span>2.72</span><span>45.38</span></div>
            <div><span>22.77</span><span>96.11</span></div>
            <div><span>38.71</span><span>95.50</span></div>
          </div>
        </div>
        <div class="story-quote">Stay consistent, study from the dashboard, and give mocks. Sahil Sir and Prantik Sir helped a lot. Attending live classes is helpful, the classes are interactive and keep me motivated. I attended All Verbal Classes live so that I can interact with Sumit Sir.</div>
        <button class="story-btn" type="button" onclick="openScorecard(22)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">DS</div>
          <div class="story-head-info">
            <div class="story-name">Divyanshu Kumar Singh</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">94.86<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>21.17</span><span>95.47</span></div>
            <div><span>16.73</span><span>90.91</span></div>
            <div><span>11.32</span><span>82.87</span></div>
            <div><span>49.22</span><span>94.86</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's mocks were calibrated perfectly to actual exam difficulty — the wave-based launches kept me consistently challenged and improving week after week.</div>
        <button class="story-btn" type="button" onclick="openScorecard(23)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">VS</div>
          <div class="story-head-info">
            <div class="story-name">Vaibhav Raj Sahni</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.52<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>20.23</span><span>95.09</span></div>
            <div><span>31.26</span><span>99.21</span></div>
            <div><span>31.44</span><span>99.24</span></div>
            <div><span>82.93</span><span>99.52</span></div>
          </div>
        </div>
        <div class="story-quote">Sumit Sir's VARC modules cracked the toughest section for me. The doubt-clearing sessions and recorded videos made all the difference in my prep.</div>
        <button class="story-btn" type="button" onclick="openScorecard(24)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">LA</div>
          <div class="story-head-info">
            <div class="story-name">Lokesh Agarwal</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">99.44<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>35.10</span><span>99.85</span></div>
            <div><span>30.78</span><span>99.13</span></div>
            <div><span>21.88</span><span>95.75</span></div>
            <div><span>87.76</span><span>99.44</span></div>
          </div>
        </div>
        <div class="story-quote">The level of mentorship at CATKing is unmatched. From doubt-clearing to interview prep, every stage was handled with precision and personal attention.</div>
        <button class="story-btn" type="button" onclick="openScorecard(25)">View scorecard</button>
      </article>

      <article class="story-card" aria-hidden="true">
        <div class="story-head">
          <div class="story-avatar">UB</div>
          <div class="story-head-info">
            <div class="story-name">Uttarak Bansal</div>
            <div class="story-sub">CATKing CAT Topper</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">93.04<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections" aria-label="Section-wise scorecard preview">
          <div class="story-sections-header">
            <div>VARC</div>
            <div>DILR</div>
            <div>QA</div>
            <div>Total</div>
          </div>
          <div class="story-subhead">
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
            <div><span>Scaled</span><span>Percentile</span></div>
          </div>
          <div class="story-sec-grid values">
            <div><span>16.51</span><span>90.64</span></div>
            <div><span>12.54</span><span>85.68</span></div>
            <div><span>18.29</span><span>92.86</span></div>
            <div><span>47.34</span><span>93.04</span></div>
          </div>
        </div>
        <div class="story-quote">CATKing's structured curriculum and analytics dashboard helped me identify weak areas early. The mocks felt exactly like the real CAT — no surprises on D-day.</div>
        <button class="story-btn" type="button" onclick="openScorecard(26)">View scorecard</button>
      </article>

    </div>
  </div>
</section>

<!-- ─────────────────────────────────────────
     2. WHAT WE BELIEVE — Philosophy + Founder video
     ───────────────────────────────────────── -->
<section class="theme-light section section-tight belief-section" id="believe">
  <div class="container">
    <div class="belief-inner reveal">

      <!-- Left: Belief content + 4 tiles -->
      <div class="belief-left">
        <span class="eyebrow">Our Philosophy</span>
        <h2 class="section-title">What we <em>believe</em>.</h2>
        <p class="belief-para">We at CATKing believe that <strong>Education with a blend of strategy</strong> can change the way Education is perceived globally. At CATKing, our purpose is to improve the quality of education, PAN India by devoting ourselves to one vision i.e. <strong>Empowering with knowledge</strong>.</p>

        <div class="belief-tiles">
          <div class="belief-tile">
            <img class="belief-tile-image" src="{{ asset('images/home/tile-mentorship.jpg') }}" alt="" loading="lazy">
            <div class="belief-tile-title">Mentorship</div>
            <div class="belief-tile-desc">Our mentors will actively listen, and assist you in mapping out your journey at every step of the way.</div>
          </div>

          <div class="belief-tile">
            <img class="belief-tile-image" src="{{ asset('images/home/tile-personalized.jpg') }}" alt="" loading="lazy">
            <div class="belief-tile-title">Personalized Learning</div>
            <div class="belief-tile-desc">We believe that each student is unique and deserves personalized attention with our customized study plan.</div>
          </div>

          <div class="belief-tile">
            <img class="belief-tile-image" src="{{ asset('images/home/tile-comprehensive.jpg') }}" alt="" loading="lazy">
            <div class="belief-tile-title">Comprehensive Course</div>
            <div class="belief-tile-desc">Access a vast collection of well-structured study material, including syllabus coverage and practice exercises.</div>
          </div>

          <div class="belief-tile">
            <img class="belief-tile-image" src="{{ asset('images/home/tile-live.jpg') }}" alt="" loading="lazy">
            <div class="belief-tile-title">Interactive Live Sessions</div>
            <div class="belief-tile-desc">Our user-friendly online platform offers seamless navigation, making learning engaging and enjoyable.</div>
          </div>
        </div>
      </div>

      <!-- Right: Video player -->
      <div class="belief-right">
        <a href="https://youtu.be/sORYuzQ3KDw?si=tlFL0eLV70aKklYc" target="_blank" rel="noopener" class="belief-video" aria-label="Play video: Believe in Yourself — CAT Motivation by Sumit Sir">
          <div class="belief-video-play">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
          </div>
        </a>
        <h3 class="belief-video-title">You Are What You <em>Believe</em> Yourself To Be.</h3>
        <p class="belief-video-caption">A short message from Sumit Sir — on belief, conviction, and what it really takes to walk into your dream IIM.</p>
        <a href="https://courses.catking.in/courses/cat-2026-self-study" target="_blank" rel="noopener" class="btn btn-primary belief-video-cta">
          Enroll Now
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ─────────────────────────────────────────
     3. FREE RESOURCES — Reciprocity
     ───────────────────────────────────────── -->
<section class="theme-dark section free-section" id="free">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Free, no signup walls</span>
      <h2 class="section-title">Take what's useful. We earn your trust before asking for it.</h2>
      <p class="section-sub">Four resources our top students used in 2024 to break the 99 percentile. Yours, free — no credit card, no spam emails.</p>
    </div>

    <div class="free-grid reveal">
      <a href="https://catking.in/cat-before-cat/" target="_blank" rel="noopener" class="free-card">
        <span class="free-tag">FREE</span>
        <div class="free-meta">Mock Test</div>
        <div class="free-title">Free Mock Test</div>
        <div class="free-desc">Full-length CAT mock with sectional analysis. Identify your three weakest topics in 90 minutes.</div>
        <div class="free-stat">— 12,000+ aspirants took it this year</div>
        <div class="free-link">Start Free Mock →</div>
      </a>
      <a href="https://catking.in/free-resources" target="_blank" rel="noopener" class="free-card">
        <span class="free-tag">PDF</span>
        <div class="free-meta">Reference Library</div>
        <div class="free-title">Handbooks</div>
        <div class="free-desc">CAT, XAT, NMAT, SNAP, CMAT and CET handbooks — concept summaries, formulas, and topper notes.</div>
        <div class="free-stat">— 6 handbooks, 47,000+ downloads</div>
        <div class="free-link">Browse Handbooks →</div>
      </a>
      <a href="https://learn.catking.in/free-mock-material" target="_blank" rel="noopener" class="free-card">
        <span class="free-tag">PDF</span>
        <div class="free-meta">Past Papers</div>
        <div class="free-title">10 Years CAT PYQs (Solved)</div>
        <div class="free-desc">Every CAT paper from 2015–2024 with detailed solutions and shortcut techniques annotated.</div>
        <div class="free-stat">— 240 pages of solved problems</div>
        <div class="free-link">Get PYQ Pack →</div>
      </a>
      <div class="free-card">
        <span class="free-tag">LIVE</span>
        <div class="free-meta">Webinar</div>
        <div class="free-title">Sunday Strategy Session</div>
        <div class="free-desc">90-minute live session this Sunday at 5 PM IST. Strategy + Q&amp;A with IIM-A mentor Rahul Singh.</div>
        <div class="free-stat">— 2,400 already registered</div>
        <div class="free-link">Reserve Spot →</div>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────────────────────
     5. AUTHORITY — Founder + Faculty
     ───────────────────────────────────────── -->
<section class="theme-light section authority-section" id="mentors">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Authority — The Mentors Behind CATKing</span>
      <h2 class="section-title">CAT was <em>cracked</em> by the people now teaching you. Not theory. Lived experience.</h2>
    </div>

    <div class="founder-block reveal">
      <div class="founder-avatar" style="background-image: url('{{ asset('images/home/faculty-sumit.jpg') }}');" role="img" aria-label="Photo of Sumit Singh Gandhi"></div>
      <div class="founder-text">
        <div class="role">Founder · Lead Mentor</div>
        <h3>Sumit Singh Gandhi</h3>
        <div class="founder-creds">
          <strong>MBA, SPJIMR Mumbai</strong> · CAT 99.9 %ile · Ex-GE · <strong>Executive Management, Harvard Business School</strong>
        </div>
        <div class="founder-quote">
          "I started CATKing because I lost a year preparing wrong. No one I knew had cracked CAT. I built the mentorship I wished I had — that's the only mission here."
        </div>
        <div class="founder-meta">
          <div class="founder-meta-item"><div class="num"><em>11</em> yrs</div><div class="lbl">Teaching CAT</div></div>
          <div class="founder-meta-item"><div class="num"><em>50,000+</em></div><div class="lbl">Aspirants mentored</div></div>
          <div class="founder-meta-item"><div class="num"><em>3,200+</em></div><div class="lbl">Personal 1-on-1 sessions</div></div>
          <div class="founder-meta-item"><div class="num"><em>2</em> books</div><div class="lbl">Published on CAT prep</div></div>
        </div>
      </div>
    </div>

    <div class="faculty-marquee-wrap reveal" aria-label="Faculty members — auto-scrolling. Use arrows to navigate.">
      <button class="faculty-arrow prev" type="button" id="facultyPrev" aria-label="Previous faculty">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
      </button>
      <button class="faculty-arrow next" type="button" id="facultyNext" aria-label="Next faculty">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
      </button>
      <div class="faculty-marquee">
        <div class="faculty-track" id="facultyTrack">
      <div class="faculty-card">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-anisha.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Anisha Ma'am</div>
            <div class="faculty-role">VARC Lead</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, NMIMS</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Executive Management, <strong>Harvard Business School</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Ex-Marico · Ex-Henkel</div></div>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-sahil.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Sahil Sir</div>
            <div class="faculty-role">Quants &amp; DILR Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>NIT</strong> · <strong>ISB Hyderabad</strong> Convert</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">CAT QA <strong>99.9 %ile</strong> · XAT 99 %ile</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">GMAT Quants <strong>100 %iler</strong></div></div>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-prantik.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Prantik Sir</div>
            <div class="faculty-role">Quants &amp; DILR Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, IIM Lucknow</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">CAT QA <strong>98.9 %ile</strong></div></div>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-megha.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Megha Ma'am</div>
            <div class="faculty-role">Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, SCMHRD</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">JP Morgan · Goldman Sachs</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">GMAT <strong>742</strong></div></div>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-biswadip.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Biswadip Sir</div>
            <div class="faculty-role">Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, NMIMS</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">NMAT <strong>220</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">CMAT <strong>AIR 8</strong> (QA 100 %iler)</div></div>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-preet.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Preet Sir</div>
            <div class="faculty-role">Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Reliance Jio</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">NMAT &amp; CET <strong>99 %ile</strong></div></div>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-manoj.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Manoj Sir</div>
            <div class="faculty-role">Quants &amp; DILR Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, IIM Mumbai</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Amazon India</div></div>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-abhishek.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Abhishek Sir</div>
            <div class="faculty-role">Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, JBIMS</strong> · Accenture Strategy</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">CAT QA <strong>99 %ile</strong> · SNAP 99.7 %ile</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">MH-CET <strong>99.7 %ile</strong></div></div>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-monika.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Monika Ma'am</div>
            <div class="faculty-role">Quants &amp; DILR · Doubt Solving</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred">CAT <strong>99.91 %ile</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Quants &amp; DILR Faculty</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Dedicated <strong>Doubt-Solving Mentor</strong></div></div>
        </div>
      </div>

      <div class="faculty-card" aria-hidden="true">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-anisha.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Anisha Ma'am</div>
            <div class="faculty-role">VARC Lead</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, NMIMS</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Executive Management, <strong>Harvard Business School</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Ex-Marico · Ex-Henkel</div></div>
        </div>
      </div>

      <div class="faculty-card" aria-hidden="true">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-sahil.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Sahil Sir</div>
            <div class="faculty-role">Quants &amp; DILR Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>NIT</strong> · <strong>ISB Hyderabad</strong> Convert</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">CAT QA <strong>99.9 %ile</strong> · XAT 99 %ile</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">GMAT Quants <strong>100 %iler</strong></div></div>
        </div>
      </div>

      <div class="faculty-card" aria-hidden="true">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-prantik.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Prantik Sir</div>
            <div class="faculty-role">Quants &amp; DILR Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, IIM Lucknow</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">CAT QA <strong>98.9 %ile</strong></div></div>
        </div>
      </div>

      <div class="faculty-card" aria-hidden="true">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-megha.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Megha Ma'am</div>
            <div class="faculty-role">Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, SCMHRD</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">JP Morgan · Goldman Sachs</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">GMAT <strong>742</strong></div></div>
        </div>
      </div>

      <div class="faculty-card" aria-hidden="true">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-biswadip.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Biswadip Sir</div>
            <div class="faculty-role">Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, NMIMS</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">NMAT <strong>220</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">CMAT <strong>AIR 8</strong> (QA 100 %iler)</div></div>
        </div>
      </div>

      <div class="faculty-card" aria-hidden="true">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-preet.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Preet Sir</div>
            <div class="faculty-role">Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Reliance Jio</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">NMAT &amp; CET <strong>99 %ile</strong></div></div>
        </div>
      </div>

      <div class="faculty-card" aria-hidden="true">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-manoj.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Manoj Sir</div>
            <div class="faculty-role">Quants &amp; DILR Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, IIM Mumbai</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Amazon India</div></div>
        </div>
      </div>

      <div class="faculty-card" aria-hidden="true">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-abhishek.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Abhishek Sir</div>
            <div class="faculty-role">Faculty</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred"><strong>MBA, JBIMS</strong> · Accenture Strategy</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">CAT QA <strong>99 %ile</strong> · SNAP 99.7 %ile</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">MH-CET <strong>99.7 %ile</strong></div></div>
        </div>
      </div>

      <div class="faculty-card" aria-hidden="true">
        <div class="faculty-photo" style="background-image: url('{{ asset('images/home/faculty-monika.jpg') }}');">
          <div class="faculty-name-overlay">
            <div class="faculty-name">Monika Ma'am</div>
            <div class="faculty-role">Quants &amp; DILR · Doubt Solving</div>
          </div>
        </div>
        <div class="faculty-body">
          <div class="faculty-cred-row"><div class="faculty-cred">CAT <strong>99.91 %ile</strong></div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Quants &amp; DILR Faculty</div></div>
          <div class="faculty-cred-row"><div class="faculty-cred">Dedicated <strong>Doubt-Solving Mentor</strong></div></div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────────────────────
     5b. AUTHORITY & EXPERTISE — Media + Events
     Mirrors the dark "Trusted by Toppers & Featured
     Everywhere" reference layout
     ───────────────────────────────────────── -->
<section class="theme-dark section media-section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Authority & Expertise</span>
      <h2 class="section-title">Trusted by Toppers &amp; Featured Everywhere</h2>
      <p class="section-sub">From a weekly podcast to live campus events — CATKing is where India's top MBA aspirants learn.</p>
    </div>

    <div class="media-grid reveal">
      <!-- LEFT COLUMN: Podcast & Media -->
      <div class="media-col">
        <div class="media-col-head podcast">
          <h3>CATKing Podcast &amp; Media</h3>
          <span class="media-badge orange">VIRAL EPISODES</span>
        </div>
        <div class="podcast-grid">
          <a href="https://youtu.be/nqmrrkUvhRw?si=rOT4jZZFpocIOT0a" target="_blank" rel="noopener" class="podcast-card">
            <div class="podcast-thumb t1">
              <div class="podcast-thumb-play">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
            <div class="podcast-body">
              <span class="podcast-tag">MBA Decision</span>
              <div class="podcast-title">Is MBA Worth It?</div>
              <div class="podcast-caption">Figuring Out with Raj Shamani ft. CATKing · 400K+ views</div>
              <span class="podcast-btn">▶ Watch Now</span>
            </div>
          </a>

          <a href="https://youtu.be/NTgNQ7eNMT4?si=P53z-ZEsFssTEjaN" target="_blank" rel="noopener" class="podcast-card">
            <div class="podcast-thumb t2">
              <div class="podcast-thumb-play">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
            <div class="podcast-body">
              <span class="podcast-tag">Keynote</span>
              <div class="podcast-title">TEDx · The Future of Education</div>
              <div class="podcast-caption">Sumit Singh Gandhi at TEDxOFBEDU — on belief, ambition &amp; the MBA dream</div>
              <span class="podcast-btn">▶ Watch Now</span>
            </div>
          </a>

          <a href="https://youtu.be/1nWH3DNGm3o?si=dtv30DRJrlWF19w3" target="_blank" rel="noopener" class="podcast-card">
            <div class="podcast-thumb t3">
              <div class="podcast-thumb-play">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
            <div class="podcast-body">
              <span class="podcast-tag">Founder Story</span>
              <div class="podcast-title">Ashneer Grover — Doglapan &amp; Beyond</div>
              <div class="podcast-caption">CATKing Podcast · 200K+ views · 1:18:55</div>
              <span class="podcast-btn">▶ Watch Now</span>
            </div>
          </a>

          <a href="https://youtu.be/CwgEEXIhdYg?si=m3Mkw-TdbIFyzR6a" target="_blank" rel="noopener" class="podcast-card">
            <div class="podcast-thumb t4">
              <div class="podcast-thumb-play">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
            <div class="podcast-body">
              <span class="podcast-tag">B-School Insider</span>
              <div class="podcast-title">IIM A Took 50 Years. IIM K Just 25.</div>
              <div class="podcast-caption">In conversation with Prof. Debashis · CATKing Podcast</div>
              <span class="podcast-btn">▶ Watch Now</span>
            </div>
          </a>
        </div>
      </div>

      <!-- RIGHT COLUMN: Events & Meet-ups -->
      <div class="media-col">
        <div class="media-col-head events">
          <h3>Events &amp; Meet-ups with CATKing Students</h3>
          <span class="media-badge red">LIMITED SEATS</span>
        </div>

        <div class="event-thumbs-grid">
          <a href="https://www.youtube.com/live/gwJTjOR1gME?si=mJU-pzIxuRrXPMNX" target="_blank" rel="noopener" class="event-thumb workshop">
            <span class="event-thumb-title">CATKing Live Workshop</span>
            <span class="event-thumb-status">Past Event</span>
            <span class="event-thumb-duration">1:14:37</span>
          </a>
          <a href="https://www.youtube.com/live/EpYC0ckU8KA?si=nAF4ZjsTXYjdPdAC" target="_blank" rel="noopener" class="event-thumb live">
            <span class="event-thumb-title">CAT Advice by IIM Convert</span>
            <span class="event-thumb-status live">Live Session</span>
            <span class="event-thumb-duration">31:44</span>
          </a>
        </div>

        <div class="blog-list-head">
          <h4>Latest from the CATKing Blog</h4>
          <a href="https://catking.in/blog" target="_blank" rel="noopener">View all →</a>
        </div>
        <div class="blog-scroller" tabindex="0" aria-label="Scrollable list of recent blog posts">
          <a href="https://catking.in/blog" target="_blank" rel="noopener" class="blog-card">
            <div class="blog-thumb tag-cat">CAT<br>2026</div>
            <div class="blog-info">
              <div class="blog-eyebrow">Strategy</div>
              <div class="blog-title">CAT 2026 Notification: Dates, eligibility &amp; updated pattern</div>
              <div class="blog-meta"><span>5 min read</span><span class="dot"></span><span>Apr 28, 2026</span></div>
            </div>
          </a>
          <a href="https://catking.in/blog" target="_blank" rel="noopener" class="blog-card">
            <div class="blog-thumb tag-iim">IIM<br>A·B·C</div>
            <div class="blog-info">
              <div class="blog-eyebrow">B-School</div>
              <div class="blog-title">Inside IIM Ahmedabad: a day in the life of a PGP first-year</div>
              <div class="blog-meta"><span>8 min read</span><span class="dot"></span><span>Apr 22, 2026</span></div>
            </div>
          </a>
          <a href="https://catking.in/blog" target="_blank" rel="noopener" class="blog-card">
            <div class="blog-thumb tag-prep">VARC</div>
            <div class="blog-info">
              <div class="blog-eyebrow">VARC</div>
              <div class="blog-title">RC Decoded: 7 question patterns CAT keeps asking every year</div>
              <div class="blog-meta"><span>6 min read</span><span class="dot"></span><span>Apr 18, 2026</span></div>
            </div>
          </a>
          <a href="https://catking.in/blog" target="_blank" rel="noopener" class="blog-card">
            <div class="blog-thumb tag-non">XAT<br>2027</div>
            <div class="blog-info">
              <div class="blog-eyebrow">Non-CAT</div>
              <div class="blog-title">XAT Decision Making: how to crack the section that breaks toppers</div>
              <div class="blog-meta"><span>9 min read</span><span class="dot"></span><span>Apr 14, 2026</span></div>
            </div>
          </a>
          <a href="https://catking.in/blog" target="_blank" rel="noopener" class="blog-card">
            <div class="blog-thumb tag-pi">GD<br>PI</div>
            <div class="blog-info">
              <div class="blog-eyebrow">Interview</div>
              <div class="blog-title">25 GD topics likely in the IIM 2026 selection round</div>
              <div class="blog-meta"><span>4 min read</span><span class="dot"></span><span>Apr 10, 2026</span></div>
            </div>
          </a>
          <a href="https://catking.in/blog" target="_blank" rel="noopener" class="blog-card">
            <div class="blog-thumb tag-mba">MBA</div>
            <div class="blog-info">
              <div class="blog-eyebrow">Career</div>
              <div class="blog-title">Is an MBA worth it in 2026? An ROI breakdown across 12 B-schools</div>
              <div class="blog-meta"><span>11 min read</span><span class="dot"></span><span>Apr 5, 2026</span></div>
            </div>
          </a>
          <a href="https://catking.in/blog" target="_blank" rel="noopener" class="blog-card">
            <div class="blog-thumb tag-cat">QA</div>
            <div class="blog-info">
              <div class="blog-eyebrow">Quants</div>
              <div class="blog-title">CAT Quants in 90 days: the topic-priority sequence toppers swear by</div>
              <div class="blog-meta"><span>7 min read</span><span class="dot"></span><span>Mar 29, 2026</span></div>
            </div>
          </a>
          <a href="https://catking.in/blog" target="_blank" rel="noopener" class="blog-card">
            <div class="blog-thumb tag-non">SNAP</div>
            <div class="blog-info">
              <div class="blog-eyebrow">SNAP</div>
              <div class="blog-title">SNAP 2026: section-wise cutoff trend &amp; smart attempt strategy</div>
              <div class="blog-meta"><span>5 min read</span><span class="dot"></span><span>Mar 24, 2026</span></div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────────────────────
     12. COUNSELLING CTA
     ───────────────────────────────────────── -->
<section class="theme-light counsel-section">
  <div class="container">
    <div class="counsel-banner reveal">
      <div class="counsel-banner-content">
        <span class="counsel-banner-eyebrow">Free 30-Min Counselling</span>
        <h2 class="counsel-banner-title">Talk to an <em>IIM mentor</em><br>before you decide.</h2>
        <p class="counsel-banner-sub">No sales pitch. Just a real conversation about your background, target schools, and whether CATKing is the right fit. A mentor will call you within 4 working hours.</p>
        <div class="counsel-banner-stats">
          <div class="counsel-banner-stat">
            <span class="counsel-banner-stat-num">12,000+</span>
            <span class="counsel-banner-stat-lbl">Calls in 2025</span>
          </div>
          <div class="counsel-banner-divider"></div>
          <div class="counsel-banner-stat">
            <span class="counsel-banner-stat-num">2,080+</span>
            <span class="counsel-banner-stat-lbl">IIM Converts 2024-25</span>
          </div>
          <div class="counsel-banner-divider"></div>
          <div class="counsel-banner-stat">
            <span class="counsel-banner-stat-num">4.8★</span>
            <span class="counsel-banner-stat-lbl">Mentor Rating</span>
          </div>
        </div>
      </div>
      <div class="counsel-banner-cta">
        <a href="https://wa.me/918999118999?text=Hi%20I%20would%20like%20to%20book%20a%20free%20counselling%20call" target="_blank" rel="noopener" class="counsel-banner-btn-primary">
          Book Free Counselling
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
        <a href="tel:+918999118999" class="counsel-banner-btn-secondary">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call +91-8999-11-8999
        </a>
        <span class="counsel-banner-trust">No spam · No obligation · Real mentors only</span>
      </div>
    </div>
  </div>
</section>

<!-- ─────────────────────────────────────────
     13. FAQ — Objection handling
     ───────────────────────────────────────── -->
<section class="theme-dark section faq-section" id="faq">
  <div class="container">
    <div class="faq-grid">
      <div class="faq-side reveal">
        <span class="eyebrow">FAQ</span>
        <h2 class="section-title">Frequently Asked <em>Questions</em>.</h2>
        <p class="section-sub">If your question isn't here, WhatsApp us at +91-8999-11-8999 — we usually reply within 30 minutes during the day.</p>
        <div class="faq-socials">
          <a class="faq-social faq-social-whatsapp" href="https://wa.me/918999118999" target="_blank" rel="noopener" aria-label="WhatsApp">
            <svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true">
              <path d="M16.003 3.2c-7.072 0-12.8 5.728-12.8 12.8 0 2.256.592 4.464 1.712 6.4l-1.808 6.6 6.752-1.776a12.78 12.78 0 0 0 6.144 1.568h.004c7.068 0 12.796-5.728 12.796-12.792 0-3.42-1.332-6.632-3.748-9.052A12.706 12.706 0 0 0 16.003 3.2zm0 23.36h-.004a10.604 10.604 0 0 1-5.408-1.484l-.388-.232-4.012 1.052 1.072-3.908-.252-.4a10.586 10.586 0 0 1-1.62-5.616c0-5.856 4.764-10.62 10.616-10.62 2.836 0 5.5 1.108 7.504 3.116a10.55 10.55 0 0 1 3.108 7.508c-.004 5.86-4.764 10.584-10.616 10.584zm5.824-7.948c-.32-.16-1.892-.932-2.184-1.04-.292-.108-.504-.16-.72.16-.212.32-.824 1.04-1.012 1.252-.184.212-.372.236-.692.08-.32-.16-1.348-.496-2.568-1.584-.948-.848-1.588-1.892-1.776-2.212-.184-.32-.02-.492.14-.652.144-.144.32-.372.48-.556.16-.184.212-.32.32-.532.108-.212.052-.4-.028-.556-.08-.16-.72-1.732-.984-2.372-.26-.624-.524-.54-.72-.548-.184-.012-.4-.012-.616-.012-.212 0-.556.08-.848.4-.292.32-1.116 1.092-1.116 2.66 0 1.572 1.144 3.088 1.304 3.3.16.212 2.252 3.44 5.456 4.824.764.328 1.356.524 1.82.672.764.244 1.46.208 2.012.128.616-.092 1.892-.772 2.16-1.52.268-.748.268-1.388.184-1.52-.084-.136-.296-.216-.616-.376z"/>
            </svg>
          </a>
          <a class="faq-social faq-social-instagram" href="https://www.instagram.com/catkingeducare/" target="_blank" rel="noopener" aria-label="Instagram">
            <svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true">
              <path d="M16 5.806c3.32 0 3.713.012 5.024.072 1.213.056 1.871.258 2.31.43.58.226 1 .494 1.434.93.436.436.704.857.93 1.436.172.438.374 1.097.43 2.31.06 1.31.072 1.704.072 5.024 0 3.32-.012 3.713-.072 5.024-.056 1.213-.258 1.871-.43 2.31a3.86 3.86 0 0 1-.93 1.434 3.86 3.86 0 0 1-1.435.93c-.438.172-1.097.374-2.31.43-1.31.06-1.703.072-5.023.072-3.32 0-3.714-.012-5.024-.072-1.213-.056-1.871-.258-2.31-.43a3.86 3.86 0 0 1-1.435-.93 3.86 3.86 0 0 1-.93-1.434c-.172-.439-.374-1.098-.43-2.31-.06-1.312-.072-1.705-.072-5.025 0-3.32.012-3.713.072-5.024.056-1.213.258-1.871.43-2.31.226-.58.494-1 .93-1.435a3.86 3.86 0 0 1 1.435-.93c.438-.172 1.097-.374 2.31-.43C12.287 5.818 12.68 5.806 16 5.806zM16 3.6c-3.378 0-3.8.014-5.127.075-1.323.06-2.227.27-3.018.578a6.078 6.078 0 0 0-2.207 1.435A6.07 6.07 0 0 0 4.213 7.895c-.308.79-.518 1.694-.578 3.018C3.574 12.24 3.56 12.662 3.56 16.04c0 3.378.014 3.8.075 5.127.06 1.323.27 2.227.578 3.018a6.078 6.078 0 0 0 1.435 2.207A6.07 6.07 0 0 0 7.855 27.83c.79.308 1.694.518 3.018.578 1.327.06 1.749.075 5.127.075 3.378 0 3.8-.014 5.127-.075 1.323-.06 2.227-.27 3.018-.578a6.078 6.078 0 0 0 2.207-1.435 6.07 6.07 0 0 0 1.435-2.207c.308-.79.518-1.694.578-3.018.06-1.327.075-1.749.075-5.127 0-3.378-.014-3.8-.075-5.127-.06-1.323-.27-2.227-.578-3.018a6.078 6.078 0 0 0-1.435-2.207A6.07 6.07 0 0 0 24.145 4.253c-.79-.308-1.694-.518-3.018-.578C19.8 3.614 19.378 3.6 16 3.6zm0 5.962a6.478 6.478 0 1 0 0 12.956 6.478 6.478 0 0 0 0-12.956zm0 10.69a4.211 4.211 0 1 1 0-8.423 4.211 4.211 0 0 1 0 8.423zm6.733-12.45a1.514 1.514 0 1 0 0 3.029 1.514 1.514 0 0 0 0-3.029z"/>
            </svg>
          </a>
          <a class="faq-social faq-social-facebook" href="https://www.facebook.com/rahulcatking/?fref=ts" target="_blank" rel="noopener" aria-label="Facebook">
            <svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true">
              <path d="M29 16.09C29 8.876 23.18 3 16 3S3 8.876 3 16.09c0 6.516 4.752 11.917 10.969 12.91v-9.13H10.67v-3.78h3.297v-2.876c0-3.27 1.937-5.075 4.9-5.075 1.42 0 2.905.255 2.905.255v3.21h-1.638c-1.612 0-2.114 1.006-2.114 2.04v2.446h3.6l-.575 3.78h-3.024v9.13C24.247 28.007 29 22.605 29 16.09z"/>
            </svg>
          </a>
          <a class="faq-social faq-social-youtube" href="https://www.youtube.com/@SumitCatking" target="_blank" rel="noopener" aria-label="YouTube">
            <svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true">
              <path d="M28.594 9.34a3.27 3.27 0 0 0-2.302-2.31C24.262 6.485 16 6.485 16 6.485s-8.262 0-10.292.545A3.27 3.27 0 0 0 3.406 9.34C2.864 11.378 2.864 16 2.864 16s0 4.622.542 6.66a3.27 3.27 0 0 0 2.302 2.31C7.738 25.515 16 25.515 16 25.515s8.262 0 10.292-.545a3.27 3.27 0 0 0 2.302-2.31c.542-2.038.542-6.66.542-6.66s0-4.622-.542-6.66zM13.31 19.881V12.12L20.222 16l-6.913 3.881z"/>
            </svg>
          </a>
        </div>
        <div class="faq-side-cta">
          <a class="btn btn-dark" href="https://wa.me/918999118999" target="_blank" rel="noopener">Message Us on WhatsApp</a>
        </div>
      </div>

      <div class="faq-list reveal">
        <div class="faq-item open">
          <button class="faq-q" onclick="toggleFaq(this)">Can I give the same mocks multiple times?</button>
          <div class="faq-a"><div class="faq-a-inner">No, you can't give one mock more than one time but you can hide the answer options in the analytics views — this can allow you to solve the questions again.</div></div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="toggleFaq(this)">Can we upgrade our course later on?</button>
          <div class="faq-a"><div class="faq-a-inner">Yes, you can upgrade your course later on.</div></div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="toggleFaq(this)">Will books be delivered?</button>
          <div class="faq-a"><div class="faq-a-inner">Yes, however, you will need to purchase the hard copy books separately.</div></div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="toggleFaq(this)">Can we download the videos/books or can we get a print out of them?</button>
          <div class="faq-a"><div class="faq-a-inner">No, you cannot download the videos/ebooks. You have to be logged in to the portal to be able to use it.</div></div>
        </div>
        <div class="faq-item">
          <button class="faq-q" onclick="toggleFaq(this)">List of subject Teachers?</button>
          <div class="faq-a"><div class="faq-a-inner">For Verbal Ability we have Sumit Sir (Director of CATKing, MBA SP Jain Mumbai, Exec Management Harvard Business School). For QA/LRDI, we have Biswadip Sir (NMIMS), Sahil Sir (CAT QA 99%iler), Krishna Sir (NITIE) and Anisha Ma'am (MBA NMIMS, PMNO Harvard Business School).</div></div>
        </div>
        <div class="faq-viewall-wrap">
          <a class="faq-viewall-btn" href="https://catking.in/faqs" target="_blank" rel="noopener">
            View all questions →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ─────────────────────────────────────────
     STICKY CTA + LIVE TOAST
     ───────────────────────────────────────── -->
<div class="sticky-cta" id="stickyCta">
  <span class="sticky-msg">May 4 batch · <strong>43 seats remain</strong> · Block your seat with ₹999 (refundable)</span>
  <button class="btn btn-primary">Reserve My Seat →</button>
  <button class="close" onclick="document.getElementById('stickyCta').classList.remove('show')">✕</button>
</div>

<div class="live-toast" id="liveToast">
  <button class="toast-close" onclick="document.getElementById('liveToast').style.display='none'">✕</button>
  <div class="toast-avatar" id="toastAvatar">PR</div>
  <div>
    <div class="toast-name" id="toastName">Priya R. · Delhi</div>
    <div class="toast-msg" id="toastMsg">just enrolled in CAT 2026 Complete</div>
    <div class="toast-time" id="toastTime">2 min ago</div>
  </div>
</div>

<!-- ─────────────────────────────────────────
     SCORECARD MODAL — Click "View Scorecard" to open
     ───────────────────────────────────────── -->
<div class="modal-backdrop" id="scorecardModal" role="dialog" aria-modal="true" aria-labelledby="scorecardModalTitle">
  <div class="scorecard-modal" role="document">
    <button class="modal-close" type="button" onclick="closeScorecardModal()" aria-label="Close">✕</button>
    <div class="scorecard-modal-header">
      <span class="scorecard-modal-tag" id="scoreExam">Score Card · CAT 2024</span>
      <div class="scorecard-modal-name-row">
        <div class="scorecard-modal-avatar" id="scoreAvatar">HB</div>
        <div>
          <div class="scorecard-modal-name" id="scorecardModalTitle">Himanshu Bahekar</div>
          <div class="scorecard-modal-pct" id="scorePct">96.50<sup>%ile</sup></div>
        </div>
      </div>
    </div>
    <div class="scorecard-modal-body">
      <table class="scorecard-table">
        <thead><tr><th>Section</th><th>Scaled Score</th><th>Percentile</th></tr></thead>
        <tbody id="scoreSections">
          <!-- populated by JS -->
        </tbody>
      </table>
      <div class="scorecard-quote-box" id="scoreQuote">
        <!-- populated by JS -->
      </div>
      <div class="scorecard-meta-row">
        <div class="scorecard-meta-cell">
          <div class="scorecard-meta-label">Converted</div>
          <div class="scorecard-meta-value" id="scoreConverts">FORE Delhi · IMT</div>
        </div>
        <div class="scorecard-meta-cell">
          <div class="scorecard-meta-label">Programme</div>
          <div class="scorecard-meta-value" id="scoreAddl">PGDM Core</div>
        </div>
      </div>
      <div class="scorecard-verified">Verified by CATKing · Genuine candidate scorecard</div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
    <script src="{{ asset('js/catking-home.js') }}" defer></script>
@endpush
