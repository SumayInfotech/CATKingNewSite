
  <!-- ============ WORKSHOP REGISTRATION MODAL ============ -->
  <div class="cat-modal-bg" id="workshopModal" role="dialog" aria-modal="true" aria-labelledby="wsModalTitle">
    <div class="cat-modal-card">
      <button class="cat-modal-close" type="button" onclick="closeWorkshopModal()" aria-label="Close">&times;</button>
      <div class="cat-modal-head">
        <h3 id="wsModalTitle">Reserve your seat for <em>Sumit Sir's</em> live profile-review workshop</h3>
        <div class="when">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"
            style="vertical-align:-2px;margin-right:4px;">
            <path
              d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm-7-7h5v5h-5z" />
          </svg>
          Free · Live · Every Saturday 6 PM IST · Registrations close 5:45 PM
        </div>
      </div>
      <div class="cat-modal-body">
        <label for="wsName">Full Name</label>
        <input type="text" id="wsName" placeholder="Your name" required>
        <label for="wsEmail">Email</label>
        <input type="email" id="wsEmail" placeholder="you@example.com" required>
        <label for="wsPhone">WhatsApp number</label>
        <input type="tel" id="wsPhone" placeholder="+91 9XXXX XXXXX" required>
        <label for="wsAttempt">First-time taker or Repeater?</label>
        <select id="wsAttempt">
          <option>First-time CAT taker</option>
          <option>Repeater (95+ percentile)</option>
          <option>Repeater (90-95)</option>
          <option>Repeater (below 90)</option>
          <option>Just exploring MBA options</option>
        </select>
        <a href="https://us06web.zoom.us/webinar/register/WN_t9jqD7-ES6GHrC79B639Sw" target="_blank" rel="noopener"
          class="cat-modal-cta">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
            <path
              d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15l-5-5 1.41-1.41L11 14.17l7.59-7.59L20 8l-9 9z" />
          </svg>
          Continue to Zoom Registration
        </a>
        <div class="cat-modal-foot">
          After clicking, you'll register on Zoom and get the meeting link by email.<br>
          Already registered? <a href="https://chat.whatsapp.com/IzLUzgZ1lIw3HDm3KRILMM" target="_blank"
            rel="noopener">Join the WhatsApp community →</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ============ PDF LEAD-GATE MODAL (PYQs, Handbooks, Study Plans) ============ -->
  <div class="cat-modal-bg" id="pdfGateModal" role="dialog" aria-modal="true" aria-labelledby="pdfGateTitle">
    <div class="cat-modal-card">
      <button class="cat-modal-close" type="button" onclick="closePdfGateModal()" aria-label="Close">&times;</button>
      <div class="cat-modal-head">
        <h3 id="pdfGateTitle">Get your <em>free download</em></h3>
        <div class="when" id="pdfGateSubtitle">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"
            style="vertical-align:-2px;margin-right:4px;">
            <path
              d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z" />
          </svg>
          <span id="pdfGateDocName">Instant download</span>
        </div>
      </div>
      <div class="cat-modal-body">
        <p style="font-size:13px;color:var(--muted);line-height:1.5;margin-bottom:16px;">Tell us a little about you and
          the download will start instantly. We'll also share weekly CAT prep tips and free workshop invites -
          unsubscribe anytime.</p>
        <label for="pdfName">Full Name</label>
        <input type="text" id="pdfName" placeholder="Your name" required>
        <label for="pdfEmail">Email</label>
        <input type="email" id="pdfEmail" placeholder="you@example.com" required>
        <label for="pdfPhone">WhatsApp number</label>
        <input type="tel" id="pdfPhone" placeholder="+91 9XXXX XXXXX" required>
        <label for="pdfStage">Where are you in your CAT journey?</label>
        <select id="pdfStage">
          <option>Just exploring MBA / CAT</option>
          <option>Starting prep for CAT 2026</option>
          <option>Already preparing - want to improve</option>
          <option>Repeater (95+ %ile last attempt)</option>
          <option>Repeater (90-95 %ile last attempt)</option>
          <option>Repeater (below 90 %ile)</option>
        </select>
        <button type="button" class="cat-modal-cta" onclick="submitPdfGate()">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
            <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z" />
          </svg>
          Get my free download
        </button>
        <div class="cat-modal-foot">
          Already shared your email? It will <b>auto-skip</b> the form next time.<br>
          Need help? <a href="https://wa.me/918999118999" target="_blank" rel="noopener">WhatsApp +91 8999-11-8999 →</a>
        </div>
      </div>
    </div>
  </div>
