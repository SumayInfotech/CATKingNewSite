<!-- ─────────────────────────────────────────
     CAT ENQUIRY POPUP
     ───────────────────────────────────────── -->
<div class="modal-backdrop" id="enquiryModal" role="dialog" aria-modal="true" aria-labelledby="enquiryHeading">
  <div class="enquiry-modal" role="document">
    <button class="modal-close" type="button" onclick="closeEnquiryModal()" aria-label="Close enquiry form">✕</button>
    <div class="enquiry-top-tagline">Connect with Alumni of B-Schools <strong>IIMs, NMIMS, SPJIMR, SCMHRD</strong></div>
    <div class="enquiry-banner">
      <img src="{{ asset('images/home/popup-alumni-collage.jpg') }}" alt="CATKing Alumni" class="section-bg-img" loading="lazy">
    </div>
    <div class="enquiry-body">
      <h3 class="enquiry-heading" id="enquiryHeading">Book your <em>session</em>, clear your doubts.</h3>
      <p class="enquiry-sub">A free 30-minute call with our IIM-alumni mentor — get a personalised CAT 2026 plan.</p>

      <form class="enquiry-form" id="enquiryForm" onsubmit="submitEnquiry(event)">
        <input class="enquiry-input" type="text" name="name" placeholder="Full name" required autocomplete="name" />
        <input class="enquiry-input" type="email" name="email" placeholder="Email address" required autocomplete="email" />
        <input class="enquiry-input" type="tel" name="phone" placeholder="Mobile number (+91)" required autocomplete="tel" pattern="[0-9+ ]{8,16}" />
        <button class="enquiry-submit" type="submit">
          Start Your Prep Now
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </button>
        <p class="enquiry-foot">By booking, you agree to receive a callback from our mentor team. No spam, ever.</p>
      </form>

      <div class="enquiry-success" id="enquirySuccess">
        <div class="enquiry-success-check">✓</div>
        <h4>Booking received!</h4>
        <p>Our mentor will call you within the next 24 hours. Check your inbox for a confirmation email.</p>
      </div>
    </div>
  </div>
</div>

<!-- ─────────────────────────────────────────
     LOGIN / SIGNUP MODAL
     ───────────────────────────────────────── -->
<div class="modal-backdrop" id="loginModal" role="dialog" aria-modal="true" aria-labelledby="loginModalTitle">
  <div class="login-modal" role="document">
    <button class="login-modal-close" type="button" onclick="closeLoginModal()" aria-label="Close">✕</button>

    <!-- LEFT: Form side -->
    <div class="login-form-side">
      <h3 class="login-title" id="loginModalTitle">Unlock Your Journey with CATKing! <span class="wave" aria-hidden="true">👋</span></h3>
      <p class="login-sub">Log in to your CATKing account now!</p>

      <label class="login-label" for="loginInput">Email / Phone Number<span class="req">*</span></label>
      <input
        type="text"
        id="loginInput"
        class="login-input"
        placeholder="Enter your email / phone number"
        autocomplete="email"
      />

      <button class="login-otp-btn" type="button" onclick="alert('OTP sent! (demo)')">Send OTP</button>

      <div class="login-divider"><span>OR</span></div>

      <a href="https://catking.in/auth/google" target="_blank" rel="noopener" class="login-google-btn">
        <svg viewBox="0 0 18 18" aria-hidden="true">
          <path fill="#4285F4" d="M17.64 9.2c0-.64-.06-1.25-.16-1.84H9v3.49h4.84c-.21 1.13-.85 2.08-1.81 2.72v2.26h2.92c1.71-1.57 2.69-3.89 2.69-6.63z"/>
          <path fill="#34A853" d="M9 18c2.43 0 4.47-.81 5.96-2.18l-2.92-2.26c-.81.54-1.84.86-3.04.86-2.34 0-4.32-1.58-5.03-3.7H.95v2.33C2.44 15.99 5.48 18 9 18z"/>
          <path fill="#FBBC05" d="M3.97 10.71c-.18-.54-.28-1.11-.28-1.71s.1-1.17.28-1.71V4.96H.95C.34 6.18 0 7.55 0 9s.34 2.82.95 4.04l3.02-2.33z"/>
          <path fill="#EA4335" d="M9 3.58c1.32 0 2.51.45 3.44 1.35l2.58-2.58C13.46.89 11.43 0 9 0 5.48 0 2.44 2.01.95 4.96l3.02 2.33C4.68 5.16 6.66 3.58 9 3.58z"/>
        </svg>
        Sign in with Google
      </a>

      <div class="login-toggle">
        <a href="https://catking.in/login" target="_blank" rel="noopener">Signup</a>
        <span class="login-pipe">/</span>
        <a href="https://catking.in/login" target="_blank" rel="noopener">Login</a>
        <span> with Email</span>
      </div>
    </div>

    <!-- RIGHT: Feature highlights with amber tick checklist -->
    <div class="login-feature-side">
      <div class="login-feature">
        <div class="login-feature-tick">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <span>CAT Turbo 2026</span>
      </div>
      <div class="login-feature">
        <div class="login-feature-tick">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <span>CAT Intensive 2026</span>
      </div>
      <div class="login-feature">
        <div class="login-feature-tick">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <span>CAT Course for Repeaters (90–95)</span>
      </div>
      <div class="login-feature">
        <div class="login-feature-tick">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <span>NMAT 2026</span>
      </div>
      <div class="login-feature">
        <div class="login-feature-tick">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <span>CAT Course for Repeaters (95+)</span>
      </div>
    </div>
  </div>
</div>

<!-- ─────────────────────────────────────────
     YOUTUBE VIDEO MODAL — Plays topper reels
     ───────────────────────────────────────── -->
<div class="modal-backdrop" id="ytModal" role="dialog" aria-modal="true" aria-label="Video player">
  <div class="yt-modal" role="document">
    <button class="modal-close" type="button" onclick="closeYtModal()" aria-label="Close video">✕</button>
    <iframe id="ytFrame" src="" title="CATKing topper video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</div>

<!-- ─────────────────────────────────────────
     PDF DOWNLOAD MODAL
     ───────────────────────────────────────── -->
<div class="modal-backdrop" id="pdfModal" role="dialog" aria-modal="true" aria-labelledby="pdfModalTitle">
  <div class="modal" role="document">
    <button class="modal-close" type="button" onclick="closePdfModal()" aria-label="Close">✕</button>

    <!-- HEADER (changes based on step) -->
    <div class="modal-header" id="pdfHeaderList">
      <div>
        <h3 id="pdfModalTitle">Free PDFs &amp; Handbooks</h3>
        <div class="modal-sub">Pick any resource — download in 30 seconds</div>
      </div>
    </div>

    <div class="modal-header" id="pdfHeaderForm" style="display:none;">
      <button class="modal-back" type="button" onclick="showPdfList()" aria-label="Back to PDF list">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
        Back
      </button>
      <div>
        <h3>One quick step</h3>
        <div class="modal-sub">Sign in to unlock your free download</div>
      </div>
    </div>

    <!-- STEP 1: PDF LIST -->
    <div class="modal-body modal-list" id="pdfListView">
      <div class="pdf-grid" id="pdfGrid">
        <!-- populated by JS -->
      </div>
    </div>

    <!-- STEP 2: AUTH FORM -->
    <div class="modal-body modal-form" id="pdfFormView">
      <div class="form-card" id="formMain">
        <div class="form-pdf-pill" id="selectedPdfPill">Formula Book</div>
        <h4 id="formTitle">Sign in to download</h4>
        <p class="form-desc" id="formDesc">Enter your mobile number — we'll send the PDF link instantly.</p>

        <div class="phone-input">
          <span class="prefix">+91</span>
          <input type="tel" id="mobileInput" placeholder="Mobile number" maxlength="10" inputmode="numeric" autocomplete="tel">
        </div>

        <input type="text" class="form-input" id="nameInput" placeholder="Full name" autocomplete="name" style="display:none;">
        <input type="email" class="form-input" id="emailInput" placeholder="Email address" autocomplete="email" style="display:none;">

        <button class="form-submit" type="button" id="formSubmitBtn" onclick="submitPdfForm()">Download PDF</button>

        <div class="form-divider">OR</div>

        <button class="form-google" type="button" onclick="continueWithGoogle()">
          <svg viewBox="0 0 48 48" aria-hidden="true">
            <path fill="currentColor" d="M43.6 20.5H42V20H24v8h11.3c-1.6 4.7-6.1 8-11.3 8-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 5.8 1.2 7.9 3.1l5.7-5.7C34 6.1 29.3 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20 20-8.9 20-20c0-1.3-.1-2.4-.4-3.5z"/>
          </svg>
          Continue with Google
        </button>

        <div class="form-toggle" id="formToggle">
          New to CATKing?
          <button type="button" onclick="toggleSignMode()" id="toggleBtn">Sign Up</button>
        </div>
      </div>

      <div class="form-success" id="formSuccess">
        <div class="check">✓</div>
        <h4>You're in!</h4>
        <p id="successMsg">Your PDF is downloading and you've been logged in.</p>
      </div>
    </div>
  </div>
</div>
