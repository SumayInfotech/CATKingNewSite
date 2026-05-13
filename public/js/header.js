// ───────────────────────────────────────────────────────────────
// CATKing Header & Navigation Logic
// Handles: Mega Menus (Desktop), Mobile Drawer (Hamburger)
// ───────────────────────────────────────────────────────────────

(function () {
  "use strict";

  // ----- Top-nav Mega Menus (hover-to-open with click fallback for touch/keyboard) -----
  (function megaMenus() {
    const triggers = document.querySelectorAll('.tn .links a.has-sub');
    const panels = document.querySelectorAll('.tn .mega');
    if (!triggers.length) return;

    let closeTimer = null;
    let lastOpenedAt = 0;
    function cancelClose() { if (closeTimer) { clearTimeout(closeTimer); closeTimer = null; } }
    function closeAll() {
      cancelClose();
      panels.forEach(p => p.classList.remove('open'));
      triggers.forEach(t => t.setAttribute('aria-expanded', 'false'));
    }
    function scheduleClose() {
      cancelClose();
      closeTimer = setTimeout(closeAll, 160);
    }
    function openPanel(target) {
      cancelClose();
      panels.forEach(p => {
        const isTarget = p.dataset.menuPanel === target;
        p.classList.toggle('open', isTarget);
      });
      triggers.forEach(t => {
        t.setAttribute('aria-expanded', t.dataset.menu === target ? 'true' : 'false');
      });
      lastOpenedAt = Date.now();
    }

    triggers.forEach(t => {
      const target = t.dataset.menu;
      const panel = document.querySelector(`.tn .mega[data-menu-panel="${target}"]`);

      // HOVER opens (desktop)
      t.addEventListener('mouseenter', () => openPanel(target));
      t.addEventListener('mouseleave', scheduleClose);
      if (panel) {
        panel.addEventListener('mouseenter', cancelClose);
        panel.addEventListener('mouseleave', scheduleClose);
      }

      // CLICK toggles (touch / keyboard fallback)
      t.addEventListener('click', function (e) {
        e.preventDefault();
        const justOpenedByHover = (Date.now() - lastOpenedAt) < 350 && panel?.classList.contains('open');
        if (justOpenedByHover) return; 
        const wasOpen = panel?.classList.contains('open');
        if (wasOpen) {
          closeAll();
        } else {
          openPanel(target);
        }
      });
    });

    // Close on click outside
    document.addEventListener('click', function (e) {
      if (!e.target.closest('.tn')) closeAll();
    });
    // Close on Esc
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeAll();
    });
  })();

  // ===== MOBILE DRAWER (hamburger) =====
  (function mobileDrawer() {
    const btn = document.querySelector('.tn-hamburger');
    const drawer = document.getElementById('mobileDrawer');
    if (!btn || !drawer) return;
    const closeEls = drawer.querySelectorAll('[data-drawer-close]');

    function openDrawer() {
      drawer.classList.add('open');
      drawer.setAttribute('aria-hidden', 'false');
      btn.setAttribute('aria-expanded', 'true');
      btn.setAttribute('aria-label', 'Close navigation menu');
      document.body.classList.add('drawer-open');
    }
    function closeDrawer() {
      drawer.classList.remove('open');
      drawer.setAttribute('aria-hidden', 'true');
      btn.setAttribute('aria-expanded', 'false');
      btn.setAttribute('aria-label', 'Open navigation menu');
      document.body.classList.remove('drawer-open');
    }

    btn.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      if (drawer.classList.contains('open')) closeDrawer();
      else openDrawer();
    });

    closeEls.forEach(el => el.addEventListener('click', closeDrawer));

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && drawer.classList.contains('open')) closeDrawer();
    });

    drawer.querySelectorAll('a[href]').forEach(a => {
      a.addEventListener('click', function () {
        setTimeout(closeDrawer, 50);
      });
    });

    let mq = window.matchMedia('(min-width: 781px)');
    if (mq.addEventListener) {
        mq.addEventListener('change', function (e) {
            if (e.matches) closeDrawer();
        });
    }
  })();
})();
