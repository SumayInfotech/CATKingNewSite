
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

  const docOrderPairs = [...pairs].sort((a, b) => {
    const aTop = a.section.getBoundingClientRect().top + window.scrollY;
    const bTop = b.section.getBoundingClientRect().top + window.scrollY;
    return aTop - bTop;
  });

  function updateByScroll() {
    const stickyStackHeight = 114; // top-nav 54 + sub-nav 60
    const probeY = stickyStackHeight + 40; 
    const scrollPos = window.scrollY || document.documentElement.scrollTop;

    if (window.innerHeight + scrollPos >= document.documentElement.scrollHeight - 50) {
      setActive(docOrderPairs[docOrderPairs.length - 1]);
      return;
    }

    let currentPair = docOrderPairs[0];
    for (const pair of docOrderPairs) {
      const rect = pair.section.getBoundingClientRect();
      if (rect.top <= probeY && rect.bottom > probeY) {
        currentPair = pair;
        break;
      }
      if (rect.bottom <= probeY) {
        currentPair = pair;
      }
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

  links.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const id = link.getAttribute('href').slice(1);
      const section = document.getElementById(id);
      if (!section) return;
      const targetY = section.getBoundingClientRect().top + window.scrollY - 130;
      window.scrollTo({ top: targetY, behavior: 'smooth' });
      links.forEach(l => l.classList.remove('act'));
      link.classList.add('act');
    });
  });

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

// Reveal on scroll
(function() {
  const revealObs = new IntersectionObserver(entries => entries.forEach(e => e.isIntersecting && e.target.classList.add('in')), { threshold: 0.12 });
  document.querySelectorAll('.reveal, .hi, .accent').forEach(el => revealObs.observe(el));
})();

// Animated counters
(function() {
  const catCounters = document.querySelectorAll('.cnt');
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
  catCounters.forEach(c => counterObs.observe(c));
})();

// Countdown timer
(function catCountdown() {
  const targetDate = new Date('2026-11-29T08:30:00+05:30').getTime();
  const elDays = document.getElementById('cdDays');
  const elMonday = document.getElementById('cdMonday');
  if (!elDays) return;
  const MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  function nextMonday() {
    const d = new Date();
    const day = d.getDay();
    let add = (day === 0) ? 1 : (day === 1 ? 0 : 8 - day);
    d.setDate(d.getDate() + add);
    return d;
  }
  function tick() {
    const now = Date.now();
    const diff = targetDate - now;
    elDays.textContent = diff > 0 ? Math.ceil(diff / (1000 * 60 * 60 * 24)) : 0;
    if (elMonday) {
        const m = nextMonday();
        elMonday.textContent = String(m.getDate()).padStart(2, '0') + ' ' + MONTHS[m.getMonth()];
    }
  }
  tick();
  setInterval(tick, 3600000);
})();

// Timeline highlight
(function catTimelineAutoHighlight() {
  const root = document.getElementById('catTimeline');
  if (!root) return;
  const rows = Array.from(root.querySelectorAll('.tr[data-start][data-end]'));
  function refresh() {
    const todayMs = new Date().setHours(0, 0, 0, 0);
    rows.forEach(row => {
      row.classList.remove('done', 'now');
      const start = Date.parse(row.dataset.start);
      const end = Date.parse(row.dataset.end) + (86400000 - 1);
      if (todayMs > end) {
        row.classList.add('done');
        if (row.querySelector('.state')) row.querySelector('.state').textContent = 'DONE';
      } else if (todayMs >= start && todayMs <= end) {
        row.classList.add('now');
        if (row.querySelector('.state')) row.querySelector('.state').textContent = 'NOW';
      }
    });
  }
  refresh();
  setInterval(refresh, 3600000);
})();

// Modals
function openWorkshopModal() {
  const m = document.getElementById('workshopModal');
  if (m) { m.classList.add('open'); document.body.style.overflow = 'hidden'; }
}
function closeWorkshopModal() {
  const m = document.getElementById('workshopModal');
  if (m) { m.classList.remove('open'); document.body.style.overflow = ''; }
}
document.getElementById('workshopModal')?.addEventListener('click', function(e) { if (e.target === this) closeWorkshopModal(); });

let pendingPdfUrl = null, pendingPdfTitle = null;
function openPdfGateModal(url, title) {
  pendingPdfUrl = url; pendingPdfTitle = title;
  if (sessionStorage.getItem('catking_pdf_lead')) { deliverPendingPdf(); return; }
  const m = document.getElementById('pdfGateModal');
  if (document.getElementById('pdfGateDocName')) document.getElementById('pdfGateDocName').textContent = title + ' - instant download';
  if (m) { m.classList.add('open'); document.body.style.overflow = 'hidden'; }
}
function closePdfGateModal() {
  const m = document.getElementById('pdfGateModal');
  if (m) { m.classList.remove('open'); document.body.style.overflow = ''; }
}
function deliverPendingPdf() {
  if (!pendingPdfUrl) return;
  window.open(pendingPdfUrl, '_blank', 'noopener');
}
function submitPdfGate() {
  const name = document.getElementById('pdfName')?.value, email = document.getElementById('pdfEmail')?.value, phone = document.getElementById('pdfPhone')?.value;
  if (!name || !email || !phone) { alert('Please fill all fields'); return; }
  sessionStorage.setItem('catking_pdf_lead', '1');
  closePdfGateModal();
  setTimeout(deliverPendingPdf, 250);
}
document.addEventListener('click', e => {
  const btn = e.target.closest('.pdf-gate-v6');
  if (btn) { e.preventDefault(); openPdfGateModal(btn.dataset.pdfUrl, btn.dataset.pdfTitle); }
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', function(e) {
    const target = document.querySelector(this.getAttribute('href'));
    if (target && !this.classList.contains('cta')) {
      e.preventDefault();
      window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - 120, behavior: 'smooth' });
    }
  });
});

// Lite YouTube
document.querySelectorAll('.lite-yt').forEach(el => {
  const id = el.dataset.videoid;
  if (!id) return;
  el.style.backgroundImage = `url(https://i.ytimg.com/vi/${id}/hqdefault.jpg)`;
  el.addEventListener('click', function() {
    if (this.classList.contains('activated')) return;
    const iframe = document.createElement('iframe');
    iframe.setAttribute('src', `https://www.youtube-nocookie.com/embed/${id}?autoplay=1&rel=0`);
    iframe.setAttribute('allow', 'autoplay; encrypted-media; picture-in-picture');
    iframe.setAttribute('allowfullscreen', '');
    this.classList.add('activated');
    this.appendChild(iframe);
  });
});

// WhatsApp Marquee - Moved to cat-whatsapp.js to avoid ID conflicts

// Override sticky mobile
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.querySelector('.sticky-mobile a.workshop');
    if (btn) btn.setAttribute('onclick', 'openWorkshopModal()');
});
