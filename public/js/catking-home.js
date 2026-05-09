(function () {
  "use strict";

  // ── Reveal-on-scroll ──
  const obs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('in');
        // Once revealed, we don't need to observe it anymore
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.15 });

  function initReveal() {
    document.querySelectorAll('.reveal').forEach(el => {
      // If already in view (e.g. on page reload), add .in immediately
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        el.classList.add('in');
      } else {
        obs.observe(el);
      }
    });
  }

  // Run on load and after a short delay to catch late-renders
  initReveal();
  setTimeout(initReveal, 400);

  // (Hero carousel removed - replaced by video player)


  // ── FAQ toggle ──
  window.toggleFaq = function(btn) {
    const item = btn.parentElement;
    const wasOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!wasOpen) item.classList.add('open');
  };

  // ── Seats bar fill ──
  setTimeout(() => {
    const bar = document.getElementById('seatsFill');
    if (bar) bar.style.width = '46%'; // 37/80 ≈ 46%
  }, 600);

  // ── Sticky CTA show on scroll ──
  let stickyClosed = false;
  window.addEventListener('scroll', () => {
    const sc = document.getElementById('stickyCta');
    if (!sc || stickyClosed) return;
    if (window.scrollY > 800 && window.scrollY < (document.body.scrollHeight - 1200)) {
      sc.classList.add('show');
    } else {
      sc.classList.remove('show');
    }
  });

  // ── Live enrollment toast ──
  const toastData = [
    { init: 'PR', name: 'Priya R. · Delhi', msg: 'just enrolled in CAT 2026 Complete', time: '2 min ago' },
    { init: 'AK', name: 'Arjun K. · Pune', msg: 'started the Free Diagnostic Mock', time: '5 min ago' },
    { init: 'MS', name: 'Meera S. · Bangalore', msg: 'registered for Sunday Strategy Webinar', time: '7 min ago' },
    { init: 'RV', name: 'Rohit V. · Mumbai', msg: 'reserved a seat in May 4 batch', time: '11 min ago' },
    { init: 'DP', name: 'Divya P. · Hyderabad', msg: 'downloaded the Free 6-Month Planner', time: '13 min ago' },
    { init: 'SK', name: 'Saurabh K. · Chennai', msg: 'booked a free counselling call', time: '16 min ago' },
  ];
  let tIdx = 0;
  function showToast() {
    const t = toastData[tIdx % toastData.length];
    const el = document.getElementById('liveToast');
    if (!el) return;
    const av = document.getElementById('toastAvatar');
    const nm = document.getElementById('toastName');
    const ms = document.getElementById('toastMsg');
    const tm = document.getElementById('toastTime');
    if (av) av.textContent = t.init;
    if (nm) nm.textContent = t.name;
    if (ms) ms.textContent = t.msg;
    if (tm) tm.textContent = t.time;
    el.style.display = 'flex';
    el.style.animation = 'none'; el.offsetHeight; el.style.animation = 'slideUp 0.4s ease';
    tIdx++;
    setTimeout(() => { el.style.opacity = '0'; setTimeout(() => { el.style.display = 'none'; el.style.opacity = '1'; }, 400); }, 5500);
  }
  setTimeout(() => { showToast(); setInterval(showToast, 16000); }, 6000);

  // ─── PDF DOWNLOAD MODAL ───
  const PDF_LIST = [
    { name: 'Formula Book', sub: 'Quant + DI shortcuts · 60 pages' },
    { name: 'Must Do CAT Questions', sub: '500 high-frequency CAT questions' },
    { name: 'CAT Handbook', sub: 'Complete syllabus + strategy guide' },
    { name: 'XAT Handbook', sub: 'Decision-making + GK prep guide' },
    { name: '50 Must Do LR Caselets', sub: 'Logical reasoning practice set' },
    { name: 'Top Bschool Interview Dockets', sub: 'IIM A/B/C/L interview transcripts' },
    { name: 'CMAT Handbook', sub: 'CMAT pattern + practice set' },
    { name: 'CET Handbook', sub: 'MAH-CET 2026 complete guide' },
    { name: 'NMAT Handbook', sub: 'NMIMS admission strategy' },
    { name: 'SNAP Handbook', sub: 'Symbiosis exam pattern + tips' },
    { name: 'Finance Dossier', sub: 'B-school finance terms decoded' }
  ];

  let selectedPdf = null;
  let signMode = 'signin'; // 'signin' or 'signup'

  function pdfInitial(name) {
    return name.split(' ').filter(w => w.length > 1).slice(0, 2).map(w => w[0]).join('').toUpperCase();
  }

  function renderPdfGrid() {
    const grid = document.getElementById('pdfGrid');
    if (!grid) return;
    grid.innerHTML = PDF_LIST.map((p, i) => `
      <button class="pdf-item" type="button" onclick="selectPdf(${i})">
        <span class="pdf-icon">PDF</span>
        <span class="pdf-info">
          <span class="pdf-name">${p.name}</span>
          <span class="pdf-sub">${p.sub}</span>
        </span>
        <span class="pdf-item-arrow" aria-hidden="true">›</span>
      </button>
    `).join('');
  }
  renderPdfGrid();

  // ── Scorecard Modal ──
  const STUDENT_SCORECARDS = [
    {
      initials: 'PC', name: 'Protham Saha Chowdhury', exam: 'CAT 2024-25',
      pct: '99.91',
      sections: [['VARC', '—', '98.17'], ['DILR', '—', '100.00'], ['Quant', '—', '95.31']],
      overall: ['—', '99.91'],
      quote: "CATKing's mocks were calibrated perfectly to actual exam difficulty — the wave-based launches kept me consistently challenged and improving week after week.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 99.91%ile'
    },
    {
      initials: 'NA', name: 'Naman', exam: 'CAT 2024-25',
      pct: '98.98',
      sections: [['VARC', '—', '92.59'], ['DILR', '—', '96.13'], ['Quant', '—', '99.70']],
      overall: ['—', '98.98'],
      quote: "Sumit Sir's VARC modules cracked the toughest section for me. The doubt-clearing sessions and recorded videos made all the difference in my prep.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 98.98%ile'
    },
    {
      initials: 'AS', name: 'Aashna Suneja', exam: 'CAT 2024-25',
      pct: '98.48',
      sections: [['VARC', '—', '92.59'], ['DILR', '—', '98.78'], ['Quant', '—', '96.91']],
      overall: ['—', '98.48'],
      quote: "The level of mentorship at CATKing is unmatched. From doubt-clearing to interview prep, every stage was handled with precision and personal attention.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 98.48%ile'
    },
    {
      initials: 'RK', name: 'Rohan Khanna', exam: 'CAT 2024-25',
      pct: '99.37',
      sections: [['VARC', '—', '99.85'], ['DILR', '—', '95.87'], ['Quant', '—', '93.36']],
      overall: ['—', '99.37'],
      quote: "CATKing's structured curriculum and analytics dashboard helped me identify weak areas early. The mocks felt exactly like the real CAT — no surprises on D-day.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 99.37%ile'
    },
    {
      initials: 'AS', name: 'Anssh Sharma', exam: 'CAT 2024-25',
      pct: '99.53',
      sections: [['VARC', '—', '93.92'], ['DILR', '—', '99.89'], ['Quant', '—', '97.64']],
      overall: ['—', '99.53'],
      quote: "Daily live classes from IIM-A/B/C alumni faculty plus the self-study library gave me everything I needed. The 1-on-1 mentor calls were game-changers.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 99.53%ile'
    },
    {
      initials: 'DK', name: 'Divyansh Kumar', exam: 'CAT 2024-25',
      pct: '99.16',
      sections: [['VARC', '—', '95.04'], ['DILR', '—', '99.06'], ['Quant', '—', '94.45']],
      overall: ['—', '99.16'],
      quote: "The 130+ LOD1 & LOD2 practice e-books built my fundamentals brick by brick. By mock 8, I was scoring 95+ consistently.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 99.16%ile'
    },
    {
      initials: 'PB', name: 'Prakhar Baheti', exam: 'CAT 2024-25',
      pct: '99.02',
      sections: [['VARC', '—', '93.92'], ['DILR', '—', '99.86'], ['Quant', '—', '92.22']],
      overall: ['—', '99.02'],
      quote: "What sets CATKing apart is the small-batch attention. Daily targets and weekend strategy sessions kept me accountable through the entire 6-month grind.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 99.02%ile'
    },
    {
      initials: 'DA', name: 'Divyam Agarwal', exam: 'CAT 2024-25',
      pct: '99.00',
      sections: [['VARC', '—', '91.64'], ['DILR', '—', '99.70'], ['Quant', '—', '96.91']],
      overall: ['—', '99.00'],
      quote: "From struggling with %tiles to walking into my dream IIM — CATKing's faculty and mock series made the journey not just possible but enjoyable.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 99.00%ile'
    },
    {
      initials: 'AS', name: 'Amrit Singh', exam: 'CAT 2024-25',
      pct: '98.92',
      sections: [['VARC', '—', '97.66'], ['DILR', '—', '91.74'], ['Quant', '—', '95.12']],
      overall: ['—', '98.92'],
      quote: "The MICA-alumni mock interviews and SOP reviews polished my profile in ways I didn't think were possible. Truly end-to-end prep.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 98.92%ile'
    },
    {
      initials: 'SS', name: 'Shivam Singh', exam: 'CAT 2024-25',
      pct: '98.72',
      sections: [['VARC', '—', '97.66'], ['DILR', '—', '91.74'], ['Quant', '—', '99.77']],
      overall: ['—', '98.72'],
      quote: "Speed-focused strategy is what I needed for CAT, and CATKing delivered. The sectional drills helped me cross 99 in DILR after months of being stuck at 90.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 98.72%ile'
    },
    {
      initials: 'PK', name: 'Parushi Singh Kunwar', exam: 'CAT 2024-25',
      pct: '98.57',
      sections: [['VARC', '—', '97.37'], ['DILR', '—', '99.34'], ['Quant', '—', '82.87']],
      overall: ['—', '98.57'],
      quote: "CATKing's mocks were calibrated perfectly to actual exam difficulty — the wave-based launches kept me consistently challenged and improving week after week.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 98.57%ile'
    },
    {
      initials: 'AK', name: 'Anish Kumar', exam: 'CAT 2024-25',
      pct: '98.42',
      sections: [['VARC', '—', '89.91'], ['DILR', '—', '97.98'], ['Quant', '—', '98.93']],
      overall: ['—', '98.42'],
      quote: "Sumit Sir's VARC modules cracked the toughest section for me. The doubt-clearing sessions and recorded videos made all the difference in my prep.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 98.42%ile'
    },
    {
      initials: 'PK', name: 'Pranav Kumar', exam: 'CAT 2024-25',
      pct: '98.40',
      sections: [['VARC', '—', '89.91'], ['DILR', '—', '99.57'], ['Quant', '—', '95.04']],
      overall: ['—', '98.40'],
      quote: "The level of mentorship at CATKing is unmatched. From doubt-clearing to interview prep, every stage was handled with precision and personal attention.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 98.40%ile'
    },
    {
      initials: 'NP', name: 'Nikhil Patil', exam: 'CAT 2024-25',
      pct: '98.32',
      sections: [['VARC', '—', '87.85'], ['DILR', '—', '97.96'], ['Quant', '—', '99.12']],
      overall: ['—', '98.32'],
      quote: "CATKing's structured curriculum and analytics dashboard helped me identify weak areas early. The mocks felt exactly like the real CAT — no surprises on D-day.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 98.32%ile'
    },
    {
      initials: 'PS', name: 'Pulkit Saini', exam: 'CAT 2024-25',
      pct: '98.00',
      sections: [['VARC', '—', '92.86'], ['DILR', '—', '99.06'], ['Quant', '—', '93.36']],
      overall: ['—', '98.00'],
      quote: "Daily live classes from IIM-A/B/C alumni faculty plus the self-study library gave me everything I needed. The 1-on-1 mentor calls were game-changers.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 98.00%ile'
    },
    {
      initials: 'KP', name: 'Karthik Puppala', exam: 'CAT 2024-25',
      pct: '97.97',
      sections: [['VARC', '—', '85.47'], ['DILR', '—', '98.43'], ['Quant', '—', '98.66']],
      overall: ['—', '97.97'],
      quote: "The 130+ LOD1 & LOD2 practice e-books built my fundamentals brick by brick. By mock 8, I was scoring 95+ consistently.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 97.97%ile'
    },
    {
      initials: 'DK', name: 'Dheeraj Kumar', exam: 'CAT 2024-25',
      pct: '96.80',
      sections: [['VARC', '—', '95.47'], ['DILR', '—', '89.96'], ['Quant', '—', '95.75']],
      overall: ['—', '96.80'],
      quote: "What sets CATKing apart is the small-batch attention. Daily targets and weekend strategy sessions kept me accountable through the entire 6-month grind.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 96.80%ile'
    },
    {
      initials: 'HB', name: 'Himanshu Bahekar', exam: 'CAT 2024-25',
      pct: '96.50',
      sections: [['VARC', '—', '94.16'], ['DILR', '—', '92.87'], ['Quant', '—', '94.70']],
      overall: ['—', '96.50'],
      quote: "From struggling with %tiles to walking into my dream IIM — CATKing's faculty and mock series made the journey not just possible but enjoyable.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 96.50%ile'
    },
    {
      initials: 'ST', name: 'Sahil Taneja', exam: 'CAT 2024-25',
      pct: '96.26',
      sections: [['VARC', '—', '93.13'], ['DILR', '—', '86.81'], ['Quant', '—', '97.64']],
      overall: ['—', '96.26'],
      quote: "The MICA-alumni mock interviews and SOP reviews polished my profile in ways I didn't think were possible. Truly end-to-end prep.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 96.26%ile'
    },
    {
      initials: 'PS', name: 'Prakhar Kumar Srivastava', exam: 'CAT 2024-25',
      pct: '95.78',
      sections: [['VARC', '—', '95.09'], ['DILR', '—', '97.27'], ['Quant', '—', '60.78']],
      overall: ['—', '95.78'],
      quote: "Speed-focused strategy is what I needed for CAT, and CATKing delivered. The sectional drills helped me cross 99 in DILR after months of being stuck at 90.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 95.78%ile'
    },
    {
      initials: 'SU', name: 'Sunaina', exam: 'CAT 2024-25',
      pct: '95.70',
      sections: [['VARC', '—', '85.99'], ['DILR', '—', '97.49'], ['Quant', '—', '93.63']],
      overall: ['—', '95.70'],
      quote: "CATKing's mocks were calibrated perfectly to actual exam difficulty — the wave-based launches kept me consistently challenged and improving week after week.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 95.70%ile'
    },
    {
      initials: 'UR', name: 'Udit Pragadeesh R', exam: 'CAT 2024-25',
      pct: '95.54',
      sections: [['VARC', '—', '92.59'], ['DILR', '—', '96.13'], ['Quant', '—', '87.97']],
      overall: ['—', '95.54'],
      quote: "Sumit Sir's VARC modules cracked the toughest section for me. The doubt-clearing sessions and recorded videos made all the difference in my prep.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 95.54%ile'
    },
    {
      initials: 'UA', name: 'Ujjawal Awasthi', exam: 'CAT 2024-25',
      pct: '95.50',
      sections: [['VARC', '—', '86.53'], ['DILR', '—', '45.38'], ['Quant', '—', '96.11']],
      overall: ['—', '95.50'],
      quote: "The level of mentorship at CATKing is unmatched. From doubt-clearing to interview prep, every stage was handled with precision and personal attention.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 95.50%ile'
    },
    {
      initials: 'DS', name: 'Divyanshu Kumar Singh', exam: 'CAT 2024-25',
      pct: '94.86',
      sections: [['VARC', '—', '95.47'], ['DILR', '—', '90.91'], ['Quant', '—', '82.87']],
      overall: ['—', '94.86'],
      quote: "CATKing's structured curriculum and analytics dashboard helped me identify weak areas early. The mocks felt exactly like the real CAT — no surprises on D-day.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 94.86%ile'
    },
    {
      initials: 'VS', name: 'Vaibhav Raj Sahni', exam: 'CAT 2024-25',
      pct: '99.52',
      sections: [['VARC', '—', '95.09'], ['DILR', '—', '99.21'], ['Quant', '—', '99.24']],
      overall: ['—', '99.52'],
      quote: "Daily live classes from IIM-A/B/C alumni faculty plus the self-study library gave me everything I needed. The 1-on-1 mentor calls were game-changers.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 99.52%ile'
    },
    {
      initials: 'LA', name: 'Lokesh Agarwal', exam: 'CAT 2024-25',
      pct: '99.44',
      sections: [['VARC', '—', '99.85'], ['DILR', '—', '99.13'], ['Quant', '—', '95.75']],
      overall: ['—', '99.44'],
      quote: "The 130+ LOD1 & LOD2 practice e-books built my fundamentals brick by brick. By mock 8, I was scoring 95+ consistently.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 99.44%ile'
    },
    {
      initials: 'UB', name: 'Uttarak Bansal', exam: 'CAT 2024-25',
      pct: '93.04',
      sections: [['VARC', '—', '90.64'], ['DILR', '—', '85.68'], ['Quant', '—', '92.86']],
      overall: ['—', '93.04'],
      quote: "What sets CATKing apart is the small-batch attention. Daily targets and weekend strategy sessions kept me accountable through the entire 6-month grind.",
      converts: 'Top IIMs & B-Schools', addl: 'CAT 93.04%ile'
    },
  ];

  let apiScorecards = [];

  function escapeHtml(value) {
    return String(value || '')
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#039;');
  }

  function safeImageUrl(value) {
    const url = String(value || '').trim().replace(/\\/g, '/');
    if (!url) return '';
    if (/^(https?:)?\/\//i.test(url) || url.startsWith('/') || /^data:image\//i.test(url)) return url;
    return '';
  }

  function stripTags(value) {
    const holder = document.createElement('div');
    holder.innerHTML = String(value || '');
    return holder.textContent || holder.innerText || '';
  }

  function initialsFromName(name) {
    const parts = String(name || 'Student').trim().split(/\s+/).filter(Boolean);
    return ((parts[0] && parts[0][0]) || 'S') + ((parts[1] && parts[1][0]) || '');
  }

  function normalizePercentile(value) {
    return String(value || '').replace(/%?ile/ig, '').replace(/%/g, '').trim();
  }

  function getApiAvatar(item) {
    return safeImageUrl(item.user_profile_link || (item.user && item.user.avatar_url));
  }

  function toApiScorecard(item) {
    const name = item.user_name || (item.user && item.user.name) || 'Student';
    const percentile = normalizePercentile(item.user_percentile || item.percentile || item.score);
    return {
      initials: initialsFromName(name).toUpperCase(),
      name,
      label: item.user_label || 'CATKing CAT Topper',
      exam: item.exam_label || item.exam || 'CAT 2025',
      pct: percentile || '99+',
      quote: stripTags(item.scorecard_description || item.description || ''),
      avatar: getApiAvatar(item),
      cardImage: safeImageUrl(item.scorecard_card_image || item.card_image),
      fullImage: safeImageUrl(item.scorecard_full_image || item.full_image || item.scorecard_card_image || item.card_image)
    };
  }

  function renderApiStoryCard(item, index, isDuplicate) {
    const s = toApiScorecard(item);
    const avatar = s.avatar
      ? `<img src="${escapeHtml(s.avatar)}" alt="${escapeHtml(s.name)}" class="story-avatar-img" loading="lazy" onerror="this.remove()">`
      : escapeHtml(s.initials);
    const preview = s.cardImage
      ? `<img src="${escapeHtml(s.cardImage)}" alt="${escapeHtml(s.name)} scorecard" class="story-scorecard-img" loading="lazy">`
      : `<div class="story-sections-header"><div>VARC</div><div>DILR</div><div>QA</div><div>Total</div></div><div class="story-sec-grid values"><div><span>-</span><span>-</span></div><div><span>-</span><span>-</span></div><div><span>-</span><span>-</span></div><div><span>-</span><span>${escapeHtml(s.pct)}</span></div></div>`;
    const quote = s.quote || 'Verified CATKing scorecard and success story.';

    return `
      <article class="story-card"${isDuplicate ? ' aria-hidden="true"' : ''}>
        <div class="story-head">
          <div class="story-avatar">${avatar}</div>
          <div class="story-head-info">
            <div class="story-name">${escapeHtml(s.name)}</div>
            <div class="story-sub">${escapeHtml(s.label)}</div>
          </div>
        </div>
        <div class="story-score-banner">
          <div class="story-score-pct">${escapeHtml(s.pct)}<sup>%ile</sup></div>
          <div class="story-score-lbl">CAT Percentile Score</div>
        </div>
        <div class="story-sections api-scorecard-preview">${preview}</div>
        <div class="story-quote">${escapeHtml(quote)}</div>
        <button class="story-btn" type="button" onclick="openScorecard(${index})">View scorecard</button>
      </article>`;
  }

  function setScorecardImageMode(showImage) {
    const wrap = document.getElementById('scoreImageWrap');
    const table = document.querySelector('#scoreSections')?.closest('table');
    const quote = document.getElementById('scoreQuote');
    const meta = document.querySelector('.scorecard-meta-row');
    if (wrap) wrap.hidden = !showImage;
    if (table) table.style.display = showImage ? 'none' : '';
    if (quote) quote.style.display = showImage ? 'none' : '';
    if (meta) meta.style.display = showImage ? 'none' : '';
  }

  function openApiScorecard(idx) {
    const item = apiScorecards[idx];
    if (!item) return false;
    const s = toApiScorecard(item);
    const exam = document.getElementById('scoreExam');
    const av = document.getElementById('scoreAvatar');
    const title = document.getElementById('scorecardModalTitle');
    const pct = document.getElementById('scorePct');
    const image = document.getElementById('scoreFullImage');
    const modal = document.getElementById('scorecardModal');

    if (exam) exam.textContent = 'Score Card · ' + s.exam;
    if (av) {
      av.innerHTML = s.avatar
        ? `<img src="${escapeHtml(s.avatar)}" alt="${escapeHtml(s.name)}">`
        : escapeHtml(s.initials);
    }
    if (title) title.textContent = s.name;
    if (pct) pct.innerHTML = escapeHtml(s.pct) + '<sup>%ile</sup>';
    if (image) image.src = s.fullImage || s.cardImage || '';
    setScorecardImageMode(Boolean(s.fullImage || s.cardImage));
    if (modal) {
      modal.classList.add('show');
      document.body.style.overflow = 'hidden';
    }
    return true;
  }

  window.openScorecard = function (idx) {
    if (openApiScorecard(idx)) return;
    const s = STUDENT_SCORECARDS[idx];
    if (!s) return;
    const exam = document.getElementById('scoreExam');
    const av = document.getElementById('scoreAvatar');
    const title = document.getElementById('scorecardModalTitle');
    const pct = document.getElementById('scorePct');
    const tbody = document.getElementById('scoreSections');
    const quote = document.getElementById('scoreQuote');
    const converts = document.getElementById('scoreConverts');
    const addl = document.getElementById('scoreAddl');
    const modal = document.getElementById('scorecardModal');

    if (exam) exam.textContent = 'Score Card · ' + s.exam;
    if (av) av.textContent = s.initials;
    if (title) title.textContent = s.name;
    if (pct) pct.innerHTML = s.pct + '<sup>%ile</sup>';
    if (tbody) {
      let rows = s.sections.map(r => `<tr><td>${r[0]}</td><td>${r[1]}</td><td>${r[2]}</td></tr>`).join('');
      rows += `<tr class="total"><td>Overall</td><td>${s.overall[0]}</td><td>${s.overall[1]}<sup>%ile</sup></td></tr>`;
      tbody.innerHTML = rows;
    }
    if (quote) quote.textContent = '"' + s.quote + '"';
    if (converts) converts.textContent = s.converts;
    if (addl) addl.textContent = s.addl;
    setScorecardImageMode(false);
    if (modal) {
      modal.classList.add('show');
      document.body.style.overflow = 'hidden';
    }
  };

  window.closeScorecardModal = function () {
    const modal = document.getElementById('scorecardModal');
    if (modal) modal.classList.remove('show');
    const image = document.getElementById('scoreFullImage');
    if (image) image.src = '';
    document.body.style.overflow = '';
  };

  function fetchScorecardPage(page, collected) {
    return fetch('/api/scorecards-proxy?base_course_id=56&page=' + page)
      .then(res => {
        if (!res.ok) throw new Error('Scorecards request failed');
        return res.json();
      })
      .then(response => {
        const pageData = response && response.data;
        const rows = pageData && Array.isArray(pageData.data) ? pageData.data : [];
        rows.forEach(row => collected.push(row));
        if (pageData && pageData.current_page < pageData.last_page) {
          return fetchScorecardPage(pageData.current_page + 1, collected);
        }
        return collected;
      });
  }

  function loadApiScorecards() {
    const track = document.getElementById('storiesTrack');
    if (!track) return;

    fetchScorecardPage(1, [])
      .then(items => {
        const usable = items.filter(item => {
          const s = toApiScorecard(item);
          return s.name && (s.fullImage || s.cardImage);
        });
        if (!usable.length) return;

        apiScorecards = usable;
        const cards = usable.map((item, index) => renderApiStoryCard(item, index, false)).join('');
        const duplicateCards = usable.map((item, index) => renderApiStoryCard(item, index, true)).join('');
        track.innerHTML = cards + duplicateCards;
        track.style.setProperty('--visible-cards', usable.length);
        initReveal();
      })
      .catch(err => {
        console.warn('Scorecard API unavailable; using static scorecards.', err);
      });
  }

  loadApiScorecards();

  // Click backdrop to close + Esc
  const sm = document.getElementById('scorecardModal');
  if (sm) {
    sm.addEventListener('click', function (e) {
      if (e.target === this) window.closeScorecardModal();
    });
  }
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && sm && sm.classList.contains('show')) {
      window.closeScorecardModal();
    }
  });

  // ── Enquiry Modal Auto-Show (with 5s delay) ──
  ; (function initEnquiryModal() {
    const modal = document.getElementById('enquiryModal');
    if (!modal) return;

    const form = document.getElementById('enquiryForm');
    const success = document.getElementById('enquirySuccess');
    let hasShown = false;
    let dismissed = false;

    try {
      dismissed = sessionStorage.getItem('enquiryDismissed') === '1';
    } catch (e) {
      console.warn('sessionStorage not available');
    }

    window.openEnquiryModal = function () {
      if (hasShown || dismissed) return;
      modal.classList.add('show');
      hasShown = true;
      document.body.style.overflow = 'hidden';
      if (form) form.reset();
      if (form) form.classList.remove('hidden');
      if (success) success.classList.remove('show');
    };

    window.closeEnquiryModal = function () {
      modal.classList.remove('show');
      document.body.style.overflow = '';
      try {
        sessionStorage.setItem('enquiryDismissed', '1');
      } catch (e) { }
    };

    window.submitEnquiry = function (e) {
      if (e) e.preventDefault();
      if (form) form.classList.add('hidden');
      if (success) success.classList.add('show');
      try {
        sessionStorage.setItem('enquiryDismissed', '1');
      } catch (e) { }
      setTimeout(window.closeEnquiryModal, 2800);
    };

    // Trigger after 5 seconds
    setTimeout(() => {
      if (typeof window.openEnquiryModal === 'function') {
        window.openEnquiryModal();
      }
    }, 5000);

    // Backdrop click close
    modal.addEventListener('click', (e) => {
      if (e.target === modal) window.closeEnquiryModal();
    });

    // ESC key close
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modal.classList.contains('show')) {
        window.closeEnquiryModal();
      }
    });
  })();

  // ── Stories marquee — arrow controls ──
  ; (function () {
    const track = document.getElementById('storiesTrack');
    const prev = document.getElementById('storiesPrev');
    const next = document.getElementById('storiesNext');
    if (!track || !prev || !next) return;

    const CARD_STEP = 336; // 320px card + 16px gap
    let resumeTimer = null;

    function advance(direction) {
      track.classList.add('is-paused');
      const computed = getComputedStyle(track).transform;
      let currentX = 0;
      if (computed && computed !== 'none') {
        const match = computed.match(/matrix.*\((.+)\)/);
        if (match) {
          const parts = match[1].split(',').map(Number);
          currentX = parts[parts.length - 2] || 0;
        }
      }
      const newX = currentX + (direction * CARD_STEP * -1);
      track.style.animation = 'none';
      track.style.transform = 'translateX(' + newX + 'px)';
      clearTimeout(resumeTimer);
      resumeTimer = setTimeout(() => {
        track.style.animation = '';
        track.style.transform = '';
        track.classList.remove('is-paused');
      }, 4000);
    }

    prev.addEventListener('click', () => advance(-1));
    next.addEventListener('click', () => advance(1));
  })();

  // ── Secrets marquee — arrow controls + YouTube modal ──
  ; (function () {
    const track = document.getElementById('secretsTrack');
    const prev = document.getElementById('secretsPrev');
    const next = document.getElementById('secretsNext');
    if (!track || !prev || !next) return;

    const CARD_STEP = 244; // 230px card + 14px gap
    let resumeTimer = null;

    function advance(direction) {
      track.classList.add('is-paused');
      const computed = getComputedStyle(track).transform;
      let currentX = 0;
      if (computed && computed !== 'none') {
        const match = computed.match(/matrix.*\((.+)\)/);
        if (match) {
          const parts = match[1].split(',').map(Number);
          currentX = parts[parts.length - 2] || 0;
        }
      }
      const newX = currentX + (direction * CARD_STEP * -1);
      track.style.animation = 'none';
      track.style.transform = 'translateX(' + newX + 'px)';
      clearTimeout(resumeTimer);
      resumeTimer = setTimeout(() => {
        track.style.animation = '';
        track.style.transform = '';
        track.classList.remove('is-paused');
      }, 4000);
    }

    prev.addEventListener('click', () => advance(-1));
    next.addEventListener('click', () => advance(1));

    const wrap = track.closest('.secrets-marquee-wrap');
    if (wrap) {
      wrap.addEventListener('keydown', (e) => {
        if (e.target.classList && e.target.classList.contains('secret-card')) return;
        if (e.key === 'ArrowLeft') { advance(-1); e.preventDefault(); }
        else if (e.key === 'ArrowRight') { advance(1); e.preventDefault(); }
      });
    }

    // Click-to-play YouTube modal
    function openYtModal(videoId) {
      if (!videoId) return;
      const frame = document.getElementById('ytFrame');
      const modal = document.getElementById('ytModal');
      if (frame) frame.src = 'https://www.youtube.com/embed/' + encodeURIComponent(videoId) + '?autoplay=1&rel=0';
      if (modal) modal.classList.add('show');
      document.body.style.overflow = 'hidden';
    }
    window.closeYtModal = function () {
      const frame = document.getElementById('ytFrame');
      const modal = document.getElementById('ytModal');
      if (frame) frame.src = ''; // stops the playback
      if (modal) modal.classList.remove('show');
      document.body.style.overflow = '';
    }

    // Wire up every card (including duplicates)
    document.querySelectorAll('.secret-card[data-yt]').forEach(card => {
      card.addEventListener('click', () => openYtModal(card.dataset.yt));
      card.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          openYtModal(card.dataset.yt);
        }
      });
    });

    // Click backdrop or Esc to close
    const ytm = document.getElementById('ytModal');
    if (ytm) {
      ytm.addEventListener('click', (e) => {
        if (e.target === ytm) window.closeYtModal();
      });
    }
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && ytm && ytm.classList.contains('show')) {
        window.closeYtModal();
      }
    });
  })();

  // ── Faculty marquee — arrow controls ──
  ; (function () {
    const track = document.getElementById('facultyTrack');
    const prev = document.getElementById('facultyPrev');
    const next = document.getElementById('facultyNext');
    if (!track || !prev || !next) return;

    // 230px card + 14px gap = 244px step; advance by 1 card per click
    const CARD_STEP = 244;
    let manualOffset = 0;
    let resumeTimer = null;

    function advance(direction) {
      // Pause animation, take over with transform
      track.classList.add('is-paused');
      // Get the current rendered translateX from the running animation
      const computed = getComputedStyle(track).transform;
      let currentX = 0;
      if (computed && computed !== 'none') {
        const m = computed.match(/matrix.*\((.+)\)/);
        if (m) {
          const parts = m[1].split(',').map(Number);
          // For 2D matrix: [a, b, c, d, tx, ty]
          currentX = parts[parts.length - 2] || 0;
        }
      }
      manualOffset = currentX + (direction * CARD_STEP * -1);
      track.style.animation = 'none';
      track.style.transform = 'translateX(' + manualOffset + 'px)';

      // After a delay, hand back to the auto-scroll animation
      clearTimeout(resumeTimer);
      resumeTimer = setTimeout(() => {
        track.style.animation = '';
        track.style.transform = '';
        track.classList.remove('is-paused');
      }, 4000);
    }

    prev.addEventListener('click', () => advance(-1));
    next.addEventListener('click', () => advance(1));

    // Keyboard: arrow keys when wrap is focused
    const wrap = track.closest('.faculty-marquee-wrap');
    if (wrap) {
      wrap.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') { advance(-1); e.preventDefault(); }
        else if (e.key === 'ArrowRight') { advance(1); e.preventDefault(); }
      });
    }
  })();

  // ── Mega menu — vertical category cascade ──
  ; (function () {
    const cats = document.querySelectorAll('.mega-cat');
    const panels = document.querySelectorAll('.mega-sub-panel');
    if (!cats.length || !panels.length) return;

    function activate(catKey) {
      cats.forEach(c => c.classList.toggle('active', c.dataset.cat === catKey));
      panels.forEach(p => p.classList.toggle('active', p.dataset.panel === catKey));
    }

    cats.forEach(c => {
      c.addEventListener('mouseenter', () => activate(c.dataset.cat));
      c.addEventListener('focus', () => activate(c.dataset.cat));
      c.addEventListener('click', (e) => { e.preventDefault(); activate(c.dataset.cat); });
    });
  })();

  // ── Courses section — tab switcher ──
  ; (function () {
    const tabs = document.querySelectorAll('.courses-tab');
    const panels = document.querySelectorAll('.courses-panel');
    if (!tabs.length || !panels.length) return;

    function activate(catKey) {
      tabs.forEach(t => {
        const isActive = t.dataset.cat === catKey;
        t.classList.toggle('active', isActive);
        t.setAttribute('aria-selected', isActive ? 'true' : 'false');
      });
      panels.forEach(p => p.classList.toggle('active', p.dataset.panel === catKey));
    }

    tabs.forEach(t => {
      t.addEventListener('click', (e) => { e.preventDefault(); activate(t.dataset.cat); });
    });
  })();

  // ── Courses section — View all / Show less toggle ──
  ; (function () {
    const links = document.querySelectorAll('.courses-viewall-link');
    if (!links.length) return;

    const labels = {
      cat: { collapsed: 'View all CAT courses →', expanded: '← Show less' },
      noncat: { collapsed: 'View all Non-CAT courses →', expanded: '← Show less' },
      mocks: { collapsed: 'View all Mocks →', expanded: '← Show less' }
    };

    links.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const target = link.dataset.target;
        if (!target) return;
        const panel = document.querySelector('.courses-panel[data-panel="' + target + '"]');
        if (!panel) return;
        const expanded = panel.classList.toggle('expanded');
        const lbl = labels[target];
        if (lbl) link.textContent = expanded ? lbl.expanded : lbl.collapsed;
      });
    });
  })();

  // ── Exam Spotlight: click-to-load embedded YouTube player ──
  // Each .exam-spotlight-video card holds a thumbnail facade. On click, swap
  // for a live <iframe> with autoplay. Lightweight pattern — no upfront
  // iframe cost, no Google tracking until the user actually plays.
  ; (function () {
    function loadEmbeddedPlayer(card) {
      if (card.classList.contains('is-playing')) return;
      const videoId = card.dataset.yt;
      if (!videoId) return;
      const iframe = document.createElement('iframe');
      iframe.className = 'exam-spotlight-iframe';
      iframe.src = 'https://www.youtube-nocookie.com/embed/' + videoId
        + '?autoplay=1&rel=0&modestbranding=1&playsinline=1';
      iframe.title = card.getAttribute('aria-label') || 'YouTube video player';
      iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
      iframe.referrerPolicy = 'strict-origin-when-cross-origin';
      iframe.allowFullscreen = true;
      card.appendChild(iframe);
      card.classList.add('is-playing');
    }

    document.querySelectorAll('.exam-spotlight-video').forEach(card => {
      card.addEventListener('click', (e) => {
        // Don't trigger play if user clicked the YouTube redirect button
        if (e.target.closest('.exam-spotlight-yt-link')) return;
        loadEmbeddedPlayer(card);
      });
      card.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          if (e.target.closest('.exam-spotlight-yt-link')) return;
          e.preventDefault();
          loadEmbeddedPlayer(card);
        }
      });
    });
  })();

  window.openPdfModal = function () {
    const pm = document.getElementById('pdfModal');
    if (pm) pm.classList.add('show');
    document.body.style.overflow = 'hidden';
    showPdfList();
  };
  window.closePdfModal = function () {
    const pm = document.getElementById('pdfModal');
    if (pm) pm.classList.remove('show');
    document.body.style.overflow = '';
    // reset to list state for next open
    setTimeout(() => {
      showPdfList();
      const fm = document.getElementById('formMain'); if (fm) fm.style.display = '';
      const fs = document.getElementById('formSuccess'); if (fs) fs.classList.remove('show');
      const mi = document.getElementById('mobileInput'); if (mi) mi.value = '';
      const nameI = document.getElementById('nameInput'); if (nameI) nameI.value = '';
      const emailI = document.getElementById('emailInput'); if (emailI) emailI.value = '';
    }, 200);
  };
  // ── Login / SignUp Modal ──
  window.openLoginModal = function () {
    const lm = document.getElementById('loginModal');
    if (lm) lm.classList.add('show');
    document.body.style.overflow = 'hidden';
    setTimeout(() => {
      const i = document.getElementById('loginInput');
      if (i) i.focus();
    }, 100);
  };
  window.closeLoginModal = function () {
    const lm = document.getElementById('loginModal');
    if (lm) lm.classList.remove('show');
    document.body.style.overflow = '';
  };
  // Close on backdrop click
  ; (function () {
    const lm = document.getElementById('loginModal');
    if (!lm) return;
    lm.addEventListener('click', (e) => {
      if (e.target === lm) window.closeLoginModal();
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && lm.classList.contains('show')) window.closeLoginModal();
    });
  })();
  // Close on backdrop click
  const pdfm = document.getElementById('pdfModal');
  if (pdfm) {
    pdfm.addEventListener('click', (e) => {
      if (e.target.id === 'pdfModal') window.closePdfModal();
    });
  }
  // Close on escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && pdfm && pdfm.classList.contains('show')) window.closePdfModal();
  });

  window.selectPdf = function (idx) {
    selectedPdf = PDF_LIST[idx];
    const pill = document.getElementById('selectedPdfPill');
    if (pill) pill.textContent = selectedPdf.name;
    showPdfForm();
  };

  function showPdfList() {
    const hl = document.getElementById('pdfHeaderList');
    const hf = document.getElementById('pdfHeaderForm');
    const lv = document.getElementById('pdfListView');
    const fv = document.getElementById('pdfFormView');
    const fs = document.getElementById('formSuccess');
    const fm = document.getElementById('formMain');

    if (hl) hl.style.display = '';
    if (hf) hf.style.display = 'none';
    if (lv) lv.classList.remove('hidden');
    if (fv) fv.classList.remove('active');
    if (fs) fs.classList.remove('show');
    if (fm) fm.style.display = '';
  }

  function showPdfForm() {
    const hl = document.getElementById('pdfHeaderList');
    const hf = document.getElementById('pdfHeaderForm');
    const lv = document.getElementById('pdfListView');
    const fv = document.getElementById('pdfFormView');

    if (hl) hl.style.display = 'none';
    if (hf) hf.style.display = '';
    if (lv) lv.classList.add('hidden');
    if (fv) fv.classList.add('active');
    const mi = document.getElementById('mobileInput');
    if (mi) setTimeout(() => mi.focus(), 100);
  }

  window.toggleSignMode = function () {
    signMode = signMode === 'signin' ? 'signup' : 'signin';
    const nameI = document.getElementById('nameInput');
    const emailI = document.getElementById('emailInput');
    const toggleBtn = document.getElementById('toggleBtn');
    const formToggle = document.getElementById('formToggle');
    const formTitle = document.getElementById('formTitle');
    const submitBtn = document.getElementById('formSubmitBtn');
    if (signMode === 'signup') {
      if (nameI) nameI.style.display = '';
      if (emailI) emailI.style.display = '';
      if (toggleBtn) toggleBtn.textContent = 'Sign In';
      if (formToggle) formToggle.childNodes[0].nodeValue = 'Already a member? ';
      if (formTitle) formTitle.textContent = 'Create your free account';
      if (submitBtn) submitBtn.textContent = 'Sign Up & Download';
    } else {
      if (nameI) nameI.style.display = 'none';
      if (emailI) emailI.style.display = 'none';
      if (toggleBtn) toggleBtn.textContent = 'Sign Up';
      if (formToggle) formToggle.childNodes[0].nodeValue = 'New to CATKing? ';
      if (formTitle) formTitle.textContent = 'Sign in to download';
      if (submitBtn) submitBtn.textContent = 'Download PDF';
    }
  };

  window.submitPdfForm = function () {
    const mi = document.getElementById('mobileInput');
    if (!mi) return;
    const mobile = mi.value.trim();
    if (!/^\d{10}$/.test(mobile)) {
      mi.style.borderColor = 'var(--red)';
      mi.focus();
      setTimeout(() => { mi.style.borderColor = ''; }, 1800);
      return;
    }
    if (signMode === 'signup') {
      const ni = document.getElementById('nameInput');
      const ei = document.getElementById('emailInput');
      if (!ni || !ei) return;
      const name = ni.value.trim();
      const email = ei.value.trim();
      if (!name || !/^\S+@\S+\.\S+$/.test(email)) {
        const target = !name ? ni : ei;
        target.style.borderColor = 'var(--red)';
        target.focus();
        setTimeout(() => { target.style.borderColor = ''; }, 1800);
        return;
      }
    }
    completeDownload();
  };

  window.continueWithGoogle = function () {
    // Simulated Google flow — same success state
    completeDownload(true);
  };

  function completeDownload(viaGoogle) {
    const fm = document.getElementById('formMain');
    const fs = document.getElementById('formSuccess');
    const msg = document.getElementById('successMsg');
    if (fm) fm.style.display = 'none';
    if (fs) fs.classList.add('show');
    if (msg) msg.textContent = selectedPdf
      ? `"${selectedPdf.name}" is downloading${viaGoogle ? ' (signed in via Google)' : ''}. Check your phone for the link.`
      : "Your PDF is downloading and you've been logged in.";
    // Trigger a real download (text placeholder so demo feels complete)
    if (selectedPdf) {
      const blob = new Blob([
        `CATKing — ${selectedPdf.name}\n\n` +
        `${selectedPdf.sub}\n\n` +
        `Thanks for downloading! This is a placeholder file — your real PDF will be sent to your registered mobile/email.\n\n` +
        `— CATKing Team`
      ], { type: 'text/plain' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = selectedPdf.name.replace(/\s+/g, '_') + '.txt';
      document.body.appendChild(a); a.click(); a.remove();
      setTimeout(() => URL.revokeObjectURL(url), 2000);
    }
    // Auto-close after a bit
    setTimeout(() => { window.closePdfModal(); }, 2800);
  }

  // Numeric only for mobile field
  const mi = document.getElementById('mobileInput');
  if (mi) {
    mi.addEventListener('input', (e) => {
      e.target.value = e.target.value.replace(/\D/g, '').slice(0, 10);
    });
  }

  // ── FAQ Toggling logic ──
  window.toggleFaq = function (btn) {
    const item = btn.closest('.faq-item');
    if (!item) return;
    const wasOpen = item.classList.contains('open');

    // Close other items
    document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));

    if (!wasOpen) {
      item.classList.add('open');
    }
  };

})();
