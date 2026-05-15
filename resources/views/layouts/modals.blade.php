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
      <!-- Login View (Visible by default) -->
      <div id="loginView">
        <h3 class="login-title">Unlock Your Journey with CATKing! <span class="wave" aria-hidden="true">👋</span></h3>
        <p class="login-sub">Log in to your CATKing account now!</p>

        <div class="login-field">
          <label class="login-label">Email / Phone Number<span class="req">*</span></label>
          <input type="text" class="login-input" placeholder="Enter your email / phone number" required>
        </div>

        <button class="login-submit-btn" type="button">Send OTP</button>

        <div class="login-divider"><span>OR</span></div>

        <button type="button" class="social-btn google full-width">
          <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google">
          Sign in with Google
        </button>

        <div class="login-switch center">
          New to CATKing? <a href="javascript:void(0)" onclick="toggleLoginMode('signup')">Signup</a> / <strong>Login</strong> with Email
        </div>
      </div>

      <!-- Signup View (Hidden by default) -->
      <div id="signupView" style="display: none;">
        <h3 class="login-title">Create Your CATKing Account</h3>
        <p class="login-sub">Sign up with your email to begin.</p>

        <div class="login-field">
          <label class="login-label">Name<span class="req">*</span></label>
          <input type="text" class="login-input" placeholder="Enter your full name" required>
        </div>

        <div class="login-field">
          <label class="login-label">Email<span class="req">*</span></label>
          <input type="email" class="login-input" placeholder="example@gmail.com" required>
          <span class="login-error">Email is already exist please login.</span>
        </div>

        <div class="login-field">
          <label class="login-label">Password<span class="req">*</span></label>
          <div class="password-wrapper">
            <input type="password" class="login-input" placeholder="••••••••••" required>
            <button type="button" class="toggle-password"><i class="fa-regular fa-eye-slash"></i></button>
          </div>
        </div>

        <div class="login-field">
          <label class="login-label">Phone Number<span class="req">*</span></label>
          <input type="tel" class="login-input" placeholder="9999999999" required>
        </div>

        <div class="login-terms">
          <input type="checkbox" id="terms" required>
          <label for="terms">I have read and agreed to the <strong>terms and conditions</strong></label>
        </div>

        <button class="login-submit-btn" type="submit">Submit</button>

        <div class="login-divider"><span>OR</span></div>

        <div class="login-social-btns">
          <button type="button" class="social-btn google">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google">
            Sign in with Google
          </button>
          <button type="button" class="social-btn phone">
            <i class="fa-solid fa-phone"></i>
            Continue with Phone
          </button>
        </div>

        <div class="login-switch">
          Already have an account? <a href="javascript:void(0)" onclick="toggleLoginMode('login')">Login</a>
        </div>
      </div>
    </div>

    <!-- RIGHT: Feature highlights -->
    <div class="login-feature-side">
      <div class="feature-list">
        <div class="feature-item">
          <div class="feature-tick">✓</div>
          <span>CAT Turbo 2026</span>
        </div>
        <div class="feature-item">
          <div class="feature-tick">✓</div>
          <span>CAT Intensive 2026</span>
        </div>
        <div class="feature-item">
          <div class="feature-tick">✓</div>
          <span>CAT Course for Repeaters (90-95%ile)</span>
        </div>
        <div class="feature-item">
          <div class="feature-tick">✓</div>
          <span>NMAT 2026</span>
        </div>
        <div class="feature-item">
          <div class="feature-tick">✓</div>
          <span>CAT Course for Repeaters (Above 9...</span>
        </div>
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
