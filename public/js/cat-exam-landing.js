// ───────────────────────────────────────────────────────────────
// CATKing Site Logic — Scroll Animations, Modals & Mega Menus
// ───────────────────────────────────────────────────────────────


// Sub-nav active state - IntersectionObserver for smooth section-in-view detection
(function setupSubNavActive() {
  const links = Array.from(document.querySelectorAll('.sub-nav a[href^="#"]:not(.cta)'));
  const subNavInner = document.querySelector('.sub-nav-inner');
  if (!links.length) return;

  const pairs = links
    .map(link => {
      const id = link.getAttribute('href').slice(1);
      const section = document.getElementById(id);
      return section ? { id, link, section } : null;
    })
    .filter(Boolean);

  if (!pairs.length) return;

  function scrollNavIntoView(link) {
    if (!subNavInner) return;
    const linkRect = link.getBoundingClientRect();
    const navRect = subNavInner.getBoundingClientRect();
    if (linkRect.left < navRect.left + 40 || linkRect.right > navRect.right - 40) {
      subNavInner.scrollTo({
        left: link.offsetLeft - navRect.width / 2 + linkRect.width / 2,
        behavior: 'smooth'
      });
    }
  }

  function setActive(targetPair) {
    if (!targetPair) return;
    if (targetPair.link.classList.contains('act')) return;
    links.forEach(l => l.classList.remove('act'));
    targetPair.link.classList.add('act');
    scrollNavIntoView(targetPair.link);
  }

  // Sort pairs by document position so the spy works correctly even when
  // the nav order doesn't match document order (e.g. Dates listed before Workshop in nav,
  // but #workshop appears before #dates in the page body).
  const docOrderPairs = [...pairs].sort((a, b) => {
    const aTop = a.section.getBoundingClientRect().top + window.scrollY;
    const bTop = b.section.getBoundingClientRect().top + window.scrollY;
    return aTop - bTop;
  });

  // Viewport-probe scroll-spy: find the section currently occupying a probe point
  // just below the sticky stack. This matches what the user visually perceives as
  // the "current" section, and correctly handles sections in document flow that
  // are NOT in the nav (like #pyq, #counsellor) - those sections won't break the spy.
  function updateByScroll() {
    const stickyStackHeight = 102; // top-nav 54 + sub-nav ~48
    const probeY = stickyStackHeight + 50; // probe 50px below the sticky stack
    const scrollPos = window.scrollY || document.documentElement.scrollTop;

    // Near-bottom edge case: if user scrolled to absolute bottom, activate last NAV pair
    if (window.innerHeight + scrollPos >= document.documentElement.scrollHeight - 50) {
      setActive(docOrderPairs[docOrderPairs.length - 1]);
      return;
    }

    let currentPair = docOrderPairs[0];
    for (const pair of docOrderPairs) {
      const rect = pair.section.getBoundingClientRect();
      // If this section currently spans the probe point in viewport, it's the active one
      if (rect.top <= probeY && rect.bottom > probeY) {
        currentPair = pair;
        break;
      }
      // If we've already scrolled past this section entirely (its bottom is above probe),
      // keep it as the "last seen" - this handles the case where the user is in a
      // section that doesn't have a nav entry (e.g. #pyq is between #resources and #insights
      // in document, but only #resources and #insights are in the nav).
      if (rect.bottom <= probeY) {
        currentPair = pair;
      }
      // If section is entirely below the probe, we're done iterating.
      if (rect.top > probeY) {
        break;
      }
    }

    setActive(currentPair);
  }

  let ticking = false;
  function onScroll() {
    if (ticking) return;
    ticking = true;
    window.requestAnimationFrame(() => {
      updateByScroll();
      ticking = false;
    });
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll, { passive: true });

  // Also handle smooth click-to-scroll so the clicked link highlights immediately
  links.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const id = link.getAttribute('href').slice(1);
      const section = document.getElementById(id);
      if (!section) return;
      // Land the section's top at viewport-y ≈ 130 (just above the probe point at 152)
      // so the probe-based spy immediately picks it up as the active section.
      const targetY = section.getBoundingClientRect().top + window.scrollY - 130;
      window.scrollTo({ top: targetY, behavior: 'smooth' });
      // Set active immediately on click for snappy feedback
      links.forEach(l => l.classList.remove('act'));
      link.classList.add('act');
    });
  });

  // Initial paint + late-layout catches
  updateByScroll();
  setTimeout(updateByScroll, 400);
  setTimeout(updateByScroll, 1200);
})();

// Curriculum tabs
document.querySelectorAll('.curr-tabs .tab').forEach(tab => tab.onclick = () => {
  const phase = tab.dataset.phase;
  document.querySelectorAll('.curr-tabs .tab').forEach(t => t.classList.remove('act'));
  tab.classList.add('act');
  document.querySelectorAll('.curr-body').forEach(b => b.classList.toggle('act', b.dataset.phase === phase));
});

// Course variant tabs
document.querySelectorAll('.cv-tabs .tab').forEach(tab => tab.onclick = () => {
  document.querySelectorAll('.cv-tabs .tab').forEach(t => t.classList.remove('act'));
  tab.classList.add('act');
});

// Mute toggle
// (mute button logic moved below)

// Reveal on scroll (fade-up animations)
const obs = new IntersectionObserver(entries => entries.forEach(e => e.isIntersecting && e.target.classList.add('in')), { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

// (v5 counters disabled in favour of richer counters below with data-suffix support)

// Capsule scroll controls
const capRow = document.getElementById('capsuleRow');
if (capRow) {
  document.querySelector('.cap-prev')?.addEventListener('click', () => capRow.scrollBy({ left: -340, behavior: 'smooth' }));
  document.querySelector('.cap-next')?.addEventListener('click', () => capRow.scrollBy({ left: 340, behavior: 'smooth' }));
}


// Animated counters (IntersectionObserver + ease-out cubic)
const counters = document.querySelectorAll('.cnt');
const counterObs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (!e.isIntersecting || e.target.dataset.done) return;
    e.target.dataset.done = '1';
    const el = e.target;
    const target = parseInt(el.dataset.target, 10);
    const suffix = el.dataset.suffix || '';
    const duration = 1600;
    const startTime = performance.now();
    const tick = (now) => {
      const elapsed = now - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const value = Math.round(target * eased);
      el.textContent = value.toLocaleString('en-IN') + suffix;
      if (progress < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
  });
}, { threshold: 0.4 });
counters.forEach(c => counterObs.observe(c));

// (capsule scroll handled by base script above)

// Hero mute toggle (visual only)
const muteBtn = document.querySelector('.mute-btn');
if (muteBtn) {
  muteBtn.addEventListener('click', () => {
    muteBtn.textContent = muteBtn.textContent.trim() === '🔇' ? '🔊' : '🔇';
  });
}


// CAT 2026 countdown timer (days only) + next-Monday batch start date
(function catCountdown() {
  const targetDate = new Date('2026-11-29T08:30:00+05:30').getTime();
  const elDays = document.getElementById('cdDays');
  const elMonday = document.getElementById('cdMonday');
  if (!elDays) return;

  const MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

  // Returns the next upcoming Monday. If today is Monday, returns today.
  // (Logic: Sun -> +1, Mon -> +0, Tue..Sat -> next Mon.)
  function nextMonday() {
    const d = new Date();
    const day = d.getDay();           // 0=Sun, 1=Mon, ..., 6=Sat
    let add;
    if (day === 0) add = 1;            // Sun -> tomorrow
    else if (day === 1) add = 0;       // Mon -> today
    else add = 8 - day;                // Tue..Sat -> next Mon
    d.setDate(d.getDate() + add);
    return d;
  }
  function fmtMonday(d) {
    return String(d.getDate()).padStart(2, '0') + ' ' + MONTHS[d.getMonth()];
  }

  function tick() {
    const now = Date.now();
    const diff = targetDate - now;
    const days = diff > 0 ? Math.ceil(diff / (1000 * 60 * 60 * 24)) : 0;
    elDays.textContent = days;
    if (elMonday) elMonday.textContent = fmtMonday(nextMonday());
  }
  tick();
  // Days and the next-Monday date both change at most once per day.
  // Polling hourly handles the midnight rollover gracefully.
  setInterval(tick, 60 * 60 * 1000);
})();

// Faculty carousel scroll
(function facultyCarousel() {
  const rail = document.getElementById('facultyRail');
  if (!rail) return;
  const prev = document.querySelector('.fac-prev');
  const next = document.querySelector('.fac-next');
  const scrollAmount = 246; // tile width + gap
  if (prev) prev.addEventListener('click', () => rail.scrollBy({ left: -scrollAmount, behavior: 'smooth' }));
  if (next) next.addEventListener('click', () => rail.scrollBy({ left: scrollAmount, behavior: 'smooth' }));
})();

// FAQ View More toggle
(function faqViewMore() {
  const btn = document.getElementById('faqMoreBtn');
  const hidden = document.getElementById('faqHidden');
  if (!btn || !hidden) return;
  btn.addEventListener('click', () => {
    const expanded = hidden.classList.toggle('expanded');
    btn.classList.toggle('expanded', expanded);
    const count = hidden.querySelectorAll('details').length;
    btn.textContent = expanded ? 'Show fewer questions ↑' : `View ${count} more questions ↓`;
  });
})();

// Flip cards: tap to flip (for touch devices); hover works on desktop via CSS
(function flipCards() {
  document.querySelectorAll('.flip-tc').forEach(card => {
    card.addEventListener('click', () => {
      card.classList.toggle('flipped');
    });
  });
})();

(function setupSmartToasts() {
  var stack = document.getElementById('toastStack');
  if (!stack) return;

  // Suppress for the rest of the session if user dismissed
  var off = false;
  try { off = sessionStorage.getItem('toastsDismissed') === '1'; } catch (e) { }
  if (off) return;

  // Announcements queue. Each toast has 'kind' (discount/fomo/urgency/info/social_proof)
  // for visual variant. Optional 'cta' object {label, href} renders an inline button.
  var announcements = [
    {
      kind: 'social_proof',
      svg: '<svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>',
      cls: 'mint',
      title: 'Pratyasha just enrolled in CAT Intensive 2026',
      msg: '2 minutes ago · joined SPJIMR-track batch'
    },
    {
      kind: 'discount',
      svg: '<svg viewBox="0 0 24 24"><path d="M19.41 12.06L8.41 1.06C8.05.7 7.55.5 7.04.5H3C1.9.5 1 1.4 1 2.5v4.04c0 .51.2 1.01.56 1.37l11 11c.78.78 2.05.78 2.83 0l4.02-4.02c.78-.78.78-2.05 0-2.83zM5 6.5C4.17 6.5 3.5 5.83 3.5 5S4.17 3.5 5 3.5 6.5 4.17 6.5 5 5.83 6.5 5 6.5z"/></svg>',
      cls: '',
      title: '50% OFF on all CAT 2026 plans',
      msg: 'Use code <b>CATKing50</b> · early-bird window',
      cta: { label: 'Claim', href: '#courses' }
    },
    {
      kind: 'social_proof',
      svg: '<svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>',
      cls: 'mint',
      title: '4.5 / 5 across 10,000+ students',
      msg: '18 years of CAT coaching · 460+ BLACKI converts'
    },
    {
      kind: 'fomo',
      svg: '<svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></svg>',
      cls: 'ink',
      title: 'CAT Turbo - 42 seats left',
      msg: 'Live morning batch starting next week',
      cta: { label: 'Book', href: '#courses' }
    },
    {
      kind: 'social_proof',
      svg: '<svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>',
      cls: 'mint',
      title: 'Akshat just converted XLRI Jamshedpur',
      msg: 'CATKing student · CAT 2024 batch'
    },
    {
      kind: 'info',
      svg: '<svg viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5C3.89 4 3 4.9 3 6v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/></svg>',
      cls: 'mint',
      title: 'Free workshop with Sumit Sir',
      msg: 'This Saturday, 6 PM IST · 90 min profile review',
      cta: { label: 'Reserve', href: '#workshop' }
    },
    {
      kind: 'social_proof',
      svg: '<svg viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm-2 14h4v-7h3l-3.86-5.79C13 8.81 12.55 8.5 12 8.5s-1 .31-1.14.71L7 15h3v7zM4.5 11c.83 0 1.5-.67 1.5-1.5S5.33 8 4.5 8 3 8.67 3 9.5 3.67 11 4.5 11zm0 11h2v-7H7v-2.5c0-.74-.5-1.4-1.21-1.65A2.493 2.493 0 0 0 2 13.16V22h2.5zm15-11c.83 0 1.5-.67 1.5-1.5S20.33 8 19.5 8 18 8.67 18 9.5s.67 1.5 1.5 1.5zm-2.5 4.5c0-1.13-.65-2.13-1.62-2.62A2.499 2.499 0 0 0 17 13.16V22h2.5v-7H21v7H22v-9.5c0-1.38-1.12-2.5-2.5-2.5z"/></svg>',
      cls: 'mint',
      title: '2,080+ IIM converts in CAT 2024-25',
      msg: 'Audited by KPMG and Brickworks Ratings'
    },
    {
      kind: 'urgency',
      svg: '<svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>',
      cls: '',
      title: '209 days left until CAT 2026',
      msg: 'Most 99+%ilers start prep 8 to 12 months out',
      cta: { label: 'Start', href: '#courses' }
    },
    {
      kind: 'social_proof',
      svg: '<svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>',
      cls: 'mint',
      title: 'Aditi Shukla just converted NMIMS Mumbai',
      msg: '12 minutes ago · CATKing CAT 2024 alumna'
    },
    {
      kind: 'info',
      svg: '<svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg>',
      cls: 'ink',
      title: 'EMI from ₹8,333 a month',
      msg: 'Razorpay 3-month no-cost EMI · all CAT plans',
      cta: { label: 'View', href: '#courses' }
    }
  ];

  var idx = 0;
  var DURATION_MS = 5000;        // each toast visible for 5s (was 7s)
  var GAP_MS = 18000;            // 18s gap between toasts (was 4.5s) - 4x calmer rhythm
  var FIRST_DELAY_MS = 12000;    // first toast appears 12s after page load (was 5s)
  var current = null;
  var nextTimer = null;

  function buildToast(data) {
    var t = document.createElement('div');
    t.className = 'toast toast-' + (data.kind || 'info');
    t.setAttribute('role', 'status');
    t.style.setProperty('--toast-duration', (DURATION_MS / 1000) + 's');
    var ctaHtml = '';
    if (data.cta && data.cta.label && data.cta.href) {
      ctaHtml = '<a class="toast-cta" href="' + data.cta.href + '">' + data.cta.label + '</a>';
    }
    t.innerHTML =
      '<div class="toast-ico ' + (data.cls || '') + '" aria-hidden="true">' + data.svg + '</div>' +
      '<div class="toast-body">' +
      '<div class="toast-title">' + data.title + '</div>' +
      '<div class="toast-msg">' + data.msg + '</div>' +
      '</div>' +
      ctaHtml +
      '<button class="toast-x" type="button" aria-label="Dismiss">&times;</button>' +
      '<div class="toast-progress" aria-hidden="true"></div>';
    return t;
  }

  function dismiss(toast, opts) {
    if (!toast || toast.classList.contains('out')) return;
    toast.classList.remove('in');
    toast.classList.add('out');
    setTimeout(function () {
      if (toast.parentNode) toast.parentNode.removeChild(toast);
    }, 360);
    if (opts && opts.userClosedAll) {
      try { sessionStorage.setItem('toastsDismissed', '1'); } catch (e) { }
      clearTimeout(nextTimer);
      // Don't queue any more
      cycle = function () { };
    }
  }

  function showNext() {
    var data = announcements[idx % announcements.length];
    idx++;
    var toast = buildToast(data);
    stack.appendChild(toast);
    current = toast;

    // Force reflow then add .in to trigger transition
    void toast.offsetWidth;
    toast.classList.add('in');

    var hoverPaused = false;
    toast.addEventListener('mouseenter', function () { hoverPaused = true; });
    toast.addEventListener('mouseleave', function () { hoverPaused = false; });

    // Manual dismiss
    toast.querySelector('.toast-x').addEventListener('click', function () {
      // First dismiss this toast; if user closes 2 in a row, suppress for session
      var firedQuickClose = toast.dataset.quickClosed === '1';
      dismiss(toast);
      // If user has manually closed twice in a row, kill the cycle
      if (quickCloseCount >= 1) {
        try { sessionStorage.setItem('toastsDismissed', '1'); } catch (e) { }
        clearTimeout(nextTimer);
        cycle = function () { };
      } else {
        quickCloseCount++;
      }
    });

    // Auto-dismiss after DURATION_MS, but pause while hovered
    var autoDismissAt = Date.now() + DURATION_MS;
    var checkDismiss = function () {
      if (hoverPaused) { setTimeout(checkDismiss, 200); return; }
      if (Date.now() >= autoDismissAt) {
        dismiss(toast);
        nextTimer = setTimeout(cycle, GAP_MS);
      } else {
        setTimeout(checkDismiss, Math.max(120, autoDismissAt - Date.now()));
      }
    };
    setTimeout(checkDismiss, DURATION_MS);
  }

  var quickCloseCount = 0;
  var cycle = function () { showNext(); };

  // Reset quickCloseCount if user lets one auto-dismiss naturally
  // (we re-arm on natural cycle)
  var baseCycle = cycle;
  cycle = function () {
    quickCloseCount = 0;
    baseCycle();
  };

  // Kick off (Disabled to prevent collision with new enrollment toast)
  // nextTimer = setTimeout(cycle, FIRST_DELAY_MS);

  // Don't show if user has prefers-reduced-data (basic respect for slow connections)
  if (navigator.connection && navigator.connection.saveData) {
    clearTimeout(nextTimer);
  }
})();
// ----- Workshop / Enquiry Modal -----
function openEnquiryModal() {
  /*const m = document.getElementById('enquiryModal');
  if (m) {
    m.classList.add('show');
    document.body.style.overflow = 'hidden';
  }*/
}
function closeEnquiryModal() {
  const m = document.getElementById('enquiryModal');
  if (m) {
    m.classList.remove('show');
    document.body.style.overflow = '';
  }
}
// Click outside to close
document.getElementById('enquiryModal')?.addEventListener('click', function (e) {
  if (e.target === this) closeEnquiryModal();
});
// Esc to close
document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape') {
    closeEnquiryModal();
    closePdfModal();
    closeLoginModal();
  }
});

// ----- PDF Download Modal -----
function openPdfModal() {
  const m = document.getElementById('pdfModal');
  if (m) {
    m.classList.add('show');
    document.body.style.overflow = 'hidden';
  }
}
function closePdfModal() {
  const m = document.getElementById('pdfModal');
  if (m) {
    m.classList.remove('show');
    document.body.style.overflow = '';
  }
}
function submitPdfForm() {
  // Logic for PDF form submission
  alert('PDF form submitted! (demo)');
  closePdfModal();
}

function closeLoginModal() {
  const m = document.getElementById('loginModal');
  if (m) {
    m.classList.remove('show');
    document.body.style.overflow = '';
  }
}

function openLoginModal() {
  const m = document.getElementById('loginModal');
  if (m) {
    m.classList.add('show');
    document.body.style.overflow = 'hidden';
  }
}

function submitEnquiry(event) {
  event.preventDefault();
  alert('Enquiry submitted! (demo)');
  closeEnquiryModal();
}


// Wire up all .pdf-gate buttons (PYQ tiles + any other gated downloads)
document.addEventListener('click', function (e) {
  const btn = e.target.closest('.pdf-gate');
  if (!btn) return;
  e.preventDefault();
  const url = btn.dataset.pdfUrl;
  const title = btn.dataset.pdfTitle;
  const kind = btn.dataset.pdfKind;
  if (url && typeof openPdfModal === 'function') {
    openPdfModal(url, title, kind);
  }
});

// Click outside closes the modal
document.getElementById('pdfModal')?.addEventListener('click', function (e) {
  if (e.target === this) closePdfModal();
});


// ----- Top-nav Mega Menus & Mobile Drawer (Moved to header.js) -----

// ----- Smooth-scroll for in-page anchors (sub-nav, footer) -----

// ----- Lite-YouTube embed: thumbnail loads, click swaps to iframe with autoplay -----
(function liteYouTube() {
  const els = document.querySelectorAll('.lite-yt');
  if (!els.length) return;

  els.forEach(el => {
    const id = el.dataset.videoid;
    if (!id) return;

    // Set high-quality thumbnail as background
    const img = new Image();
    img.onload = () => {
      // Only use thumbnail if it loaded properly (YouTube returns a 120x90 placeholder for invalid IDs)
      if (img.naturalWidth > 200) {
        el.style.backgroundImage = `url(https://i.ytimg.com/vi/${id}/hqdefault.jpg)`;
      }
    };
    img.src = `https://i.ytimg.com/vi/${id}/hqdefault.jpg`;

    // Click → swap to iframe with autoplay
    el.addEventListener('click', function (e) {
      if (el.classList.contains('activated')) return;
      e.preventDefault();
      const iframe = document.createElement('iframe');
      iframe.setAttribute('allow', 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; fullscreen; web-share');
      iframe.setAttribute('allowfullscreen', '');
      iframe.setAttribute('title', 'YouTube video');
      iframe.setAttribute('src', `https://www.youtube-nocookie.com/embed/${id}?autoplay=1&rel=0&modestbranding=1&playsinline=1`);
      el.classList.add('activated');
      el.appendChild(iframe);
    });

    // Preconnect on hover for speed
    let preconnected = false;
    el.addEventListener('pointerover', () => {
      if (preconnected) return;
      preconnected = true;
      const links = [
        ['preconnect', 'https://www.youtube-nocookie.com'],
        ['preconnect', 'https://www.google.com'],
        ['preconnect', 'https://googleads.g.doubleclick.net'],
        ['preconnect', 'https://static.doubleclick.net']
      ];
      links.forEach(([rel, href]) => {
        const link = document.createElement('link');
        link.rel = rel; link.href = href;
        document.head.appendChild(link);
      });
    }, { once: true });
  });
})();

// ----- WHATSAPP MARQUEE - 20 verified students with REAL WhatsApp screenshots -----
// Source: 2025-26 results bundle (zip uploaded May 2026). Each entry has a real
// WhatsApp message screenshot at /whatsapp/{sid}.jpg. Mix: 6 NMIMS, 4 SPJIMR,
// 3 XLRI, 3 SCMHRD, 3 SIBM, 2 FMS - total 20 across 6 top MBA institutes.
// PII redaction: only first name + institute kept. No CK hash ID rendered.
(function waMarquee() {
  // Each entry: sid (matches image filename), img (relative path),
  // who (display name), score (institute label shown on card + stamp).
  var WA_CARDS = [
    // SPJIMR Mumbai converts (4)
    { sid: "pratyasha-spjimr", img: "whatsapp/pratyasha-spjimr.jpg", who: "Pratyasha", score: "SPJIMR Mumbai" },
    { sid: "aayush-spjimr", img: "whatsapp/aayush-spjimr.jpg", who: "Aayush Mandal", score: "SPJIMR Mumbai" },
    { sid: "kavya-spjimr", img: "whatsapp/kavya-spjimr.jpg", who: "Kavya", score: "SPJIMR Mumbai" },
    { sid: "paridhi-spjimr", img: "whatsapp/paridhi-spjimr.jpg", who: "Paridhi", score: "SPJIMR Mumbai" },

    // XLRI Jamshedpur converts (3)
    { sid: "akshat-xlri", img: "whatsapp/akshat-xlri.jpg", who: "Akshat", score: "XLRI Jamshedpur" },
    { sid: "gurtavrein-xlri", img: "whatsapp/gurtavrein-xlri.jpg", who: "Gurtavrein", score: "XLRI Jamshedpur" },
    { sid: "morris-xlri", img: "whatsapp/morris-xlri.jpg", who: "Morris", score: "XLRI Jamshedpur" },

    // NMIMS Mumbai converts (5)
    { sid: "aayush-rathi-nmims", img: "whatsapp/aayush-rathi-nmims.jpg", who: "Aayush Rathi", score: "NMIMS Mumbai" },
    { sid: "aditi-nmims", img: "whatsapp/aditi-nmims.jpg", who: "Aditi Shukla", score: "NMIMS Mumbai" },
    { sid: "hardik-nmims", img: "whatsapp/hardik-nmims.jpg", who: "Hardik", score: "NMIMS Mumbai" },
    { sid: "agastya-nmims", img: "whatsapp/agastya-nmims.jpg", who: "Agastya", score: "NMIMS Mumbai" },
    { sid: "anamika-nmims", img: "whatsapp/anamika-nmims.jpg", who: "Anamika", score: "NMIMS Mumbai" },

    // SCMHRD Pune converts (3)
    { sid: "ashish-scmhrd", img: "whatsapp/ashish-scmhrd.jpg", who: "Ashish Ranjan", score: "SCMHRD Pune" },
    { sid: "nandini-scmhrd", img: "whatsapp/nandini-scmhrd.jpg", who: "Nandini", score: "SCMHRD Pune" },
    { sid: "faraz-scmhrd", img: "whatsapp/faraz-scmhrd.jpg", who: "Faraz", score: "SCMHRD Pune" },

    // SIBM Pune converts (3)
    { sid: "manthan-sibm", img: "whatsapp/manthan-sibm.jpg", who: "Manthan", score: "SIBM Pune" },
    { sid: "audriza-sibm", img: "whatsapp/audriza-sibm.jpg", who: "Audriza", score: "SIBM Pune" },
    { sid: "agnip-sibm", img: "whatsapp/agnip-sibm.jpg", who: "Agnip", score: "SIBM Pune" },

    // FMS Delhi converts (2)
    { sid: "pranjal-fms", img: "whatsapp/pranjal-fms.jpg", who: "Pranjal", score: "FMS Delhi" },
    { sid: "vaishnavi-fms", img: "whatsapp/vaishnavi-fms.jpg", who: "Vaishnavi", score: "FMS Delhi" }
  ];

  // Derive a friendly institute label for the verified-CATKing stamp overlay
  function waInstituteLabel(c) {
    var s = (c.score || '').toLowerCase();
    if (s.indexOf('iim ahmedabad') >= 0 || s.indexOf('iim-a') >= 0) return 'IIM-A Convert';
    if (s.indexOf('iim bangalore') >= 0 || s.indexOf('iim-b') >= 0) return 'IIM-B Convert';
    if (s.indexOf('iim calcutta') >= 0 || s.indexOf('iim-c') >= 0) return 'IIM-C Convert';
    if (s.indexOf('iim lucknow') >= 0 || s.indexOf('iim-l') >= 0) return 'IIM-L Convert';
    if (s.indexOf('iim indore') >= 0 || s.indexOf('iim-i') >= 0) return 'IIM-I Convert';
    if (s.indexOf('iim kozhikode') >= 0 || s.indexOf('iim-k') >= 0) return 'IIM-K Convert';
    if (s.indexOf('iim mumbai') >= 0) return 'IIM-M Convert';
    if (s.indexOf('spjimr') >= 0) return 'SPJIMR Convert';
    if (s.indexOf('xlri') >= 0) return 'XLRI Convert';
    if (s.indexOf('scmhrd') >= 0) return 'SCMHRD Convert';
    if (s.indexOf('sibm') >= 0) return 'SIBM Convert';
    if (s.indexOf('nmims') >= 0) return 'NMIMS Convert';
    if (s.indexOf('mdi') >= 0) return 'MDI Convert';
    if (s.indexOf('fms') >= 0) return 'FMS Convert';
    if (s.indexOf('99') >= 0) return 'CAT 99%ile+';
    return 'CATKing Topper';
  }

  // (waCkId helper removed in v7.7 - CK-XXXXX line is no longer rendered.)

  function buildWaStamp(c) {
    var inst = waInstituteLabel(c);
    return '<div class="wa-stamp">' +
      '<div class="wa-stamp-outer">' +
      '<div class="wa-stamp-top">Verified CATKing</div>' +
      '<div class="wa-stamp-ctr">' + inst + '</div>' +
      '</div>' +
      '</div>';
  }

  // Generate a CSS-rendered placeholder for cards that don't have a real screenshot yet
  // (production environment will swap these for actual whatsapp/{slug}.jpg uploads)
  function buildPlaceholder(c) {
    var initial = (c.who || 'X').charAt(0).toUpperCase();
    var firstMsg = '';
    var celebrate = c.score;
    var s = (c.score || '').toLowerCase();
    // Pick a contextual short message based on the institute
    if (s.indexOf('spjimr') >= 0) {
      firstMsg = 'Just wanted to thank the CATking team. Converted SPJIMR!';
    } else if (s.indexOf('nmat') >= 0) {
      firstMsg = 'NMAT cleared. NMIMS Mumbai is mine. Thank you Sumit Sir 🙏';
    } else if (s.indexOf('nmims mumbai') >= 0) {
      firstMsg = 'This is my offer letter for NMIMS Mumbai. Does this mean I am selected?';
    } else if (s.indexOf('nmims') >= 0) {
      firstMsg = 'Mam got selection for ' + c.score + '. Thank you for ur guidance.';
    } else if (s.indexOf('scmhrd') >= 0) {
      firstMsg = 'Just found out that I converted SCMHRD. Couldn\'t have done without your guidance and Catking family.';
    } else if (s.indexOf('iim mumbai') >= 0) {
      firstMsg = 'Got the IIM Mumbai admit letter today! Honestly still in disbelief 🎉';
    } else if (s.indexOf('iim') >= 0) {
      firstMsg = 'Sir, I converted ' + c.score + ' 🙏';
    } else if (s.indexOf('mdi') >= 0) {
      firstMsg = 'MDI Gurgaon admit confirmed! Thank you for the constant push, Sumit Sir.';
    } else if (s.indexOf('99') >= 0) {
      firstMsg = 'Sumit Sir! Got my result - ' + c.score + ' 🎉';
    } else {
      firstMsg = 'Thank you Sumit Sir, finally cracked it!';
    }
    return '<div class="wa-card-img">' +
      '<div class="ph-bar">' +
      '<div class="ph-av">' + initial + '</div>' +
      '<div class="ph-name">CATKing · ' + c.who + '</div>' +
      '</div>' +
      '<div class="ph-msg">' + firstMsg + '</div>' +
      '<div class="ph-celebrate">' + celebrate + '</div>' +
      '</div>';
  }

  function renderWaCard(c) {
    // Production behaviour: try the real screenshot first from /whatsapp/{sid}.jpg.
    // If the file is missing or fails to load, the onerror handler swaps to the
    // CSS-rendered placeholder so the section never shows a broken image icon.
    // Backend operators only need to drop files at /whatsapp/{sid}.jpg matching
    // each entry's sid in WA_CARDS - no JS changes required to enable real images.
    var stamp = buildWaStamp(c);
    var placeholderHtml = buildPlaceholder(c);
    // Escape placeholder HTML for safe injection into onerror attribute
    var placeholderEscaped = placeholderHtml.replace(/'/g, "&#39;").replace(/"/g, "&quot;");
    var imgHtml =
      '<div class="wa-card-img has-img" data-fallback="' + placeholderEscaped + '">' +
      '<img src="' + c.img + '" alt="' + c.who + ' WhatsApp message" loading="lazy" ' +
      'onerror="(function(img){var p=img.parentElement;p.classList.remove(&quot;has-img&quot;);p.innerHTML=p.getAttribute(&quot;data-fallback&quot;);})(this)">' +
      '</div>';
    return '<div class="wa-card" data-sid="' + c.sid + '">' +
      imgHtml +
      stamp +
      '<div class="wa-card-caption">' +
      '<b>' + c.who + '</b>' +
      '<span class="wa-card-score">' + c.score + '</span>' +
      '</div>' +
      '</div>';
  }

  var row = document.getElementById('waRow1');
  if (!row) return;
  // Render twice for seamless infinite scroll
  row.innerHTML = WA_CARDS.map(renderWaCard).join('') + WA_CARDS.map(renderWaCard).join('');
})();

// Auto-show Enquiry Modal after 5s
window.addEventListener('load', function () {
  setTimeout(function () {
    if (!sessionStorage.getItem('enquiry_shown')) {
      /*openEnquiryModal();*/
      sessionStorage.setItem('enquiry_shown', '1');
    }
  }, 5000);
});

