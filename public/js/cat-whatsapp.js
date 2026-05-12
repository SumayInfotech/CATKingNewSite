// isolated WhatsApp Marquee for CAT Exam page
(function catWaMarquee() {
  const WA_CARDS = [
    { sid: "pratyasha-spjimr", img: "/whatsapp/pratyasha-spjimr.jpg", who: "Pratyasha", score: "SPJIMR Mumbai" },
    { sid: "aayush-spjimr", img: "/whatsapp/aayush-spjimr.jpg", who: "Aayush Mandal", score: "SPJIMR Mumbai" },
    { sid: "kavya-spjimr", img: "/whatsapp/kavya-spjimr.jpg", who: "Kavya", score: "SPJIMR Mumbai" },
    { sid: "paridhi-spjimr", img: "/whatsapp/paridhi-spjimr.jpg", who: "Paridhi", score: "SPJIMR Mumbai" },
    { sid: "akshat-xlri", img: "/whatsapp/akshat-xlri.jpg", who: "Akshat", score: "XLRI Jamshedpur" },
    { sid: "gurtavrein-xlri", img: "/whatsapp/gurtavrein-xlri.jpg", who: "Gurtavrein", score: "XLRI Jamshedpur" },
    { sid: "morris-xlri", img: "/whatsapp/morris-xlri.jpg", who: "Morris", score: "XLRI Jamshedpur" },
    { sid: "aayush-rathi-nmims", img: "/whatsapp/aayush-rathi-nmims.jpg", who: "Aayush Rathi", score: "NMIMS Mumbai" },
    { sid: "aditi-nmims", img: "/whatsapp/aditi-nmims.jpg", who: "Aditi Shukla", score: "NMIMS Mumbai" },
    { sid: "hardik-nmims", img: "/whatsapp/hardik-nmims.jpg", who: "Hardik", score: "NMIMS Mumbai" },
    { sid: "agastya-nmims", img: "/whatsapp/agastya-nmims.jpg", who: "Agastya", score: "NMIMS Mumbai" },
    { sid: "anamika-nmims", img: "/whatsapp/anamika-nmims.jpg", who: "Anamika", score: "NMIMS Mumbai" },
    { sid: "ashish-scmhrd", img: "/whatsapp/ashish-scmhrd.jpg", who: "Ashish Ranjan", score: "SCMHRD Pune" },
    { sid: "nandini-scmhrd", img: "/whatsapp/nandini-scmhrd.jpg", who: "Nandini", score: "SCMHRD Pune" },
    { sid: "faraz-scmhrd", img: "/whatsapp/faraz-scmhrd.jpg", who: "Faraz", score: "SCMHRD Pune" },
    { sid: "manthan-sibm", img: "/whatsapp/manthan-sibm.jpg", who: "Manthan", score: "SIBM Pune" },
    { sid: "audriza-sibm", img: "/whatsapp/audriza-sibm.jpg", who: "Audriza", score: "SIBM Pune" },
    { sid: "agnip-sibm", img: "/whatsapp/agnip-sibm.jpg", who: "Agnip", score: "SIBM Pune" },
    { sid: "pranjal-fms", img: "/whatsapp/pranjal-fms.jpg", who: "Pranjal", score: "FMS Delhi" },
    { sid: "vaishnavi-fms", img: "/whatsapp/vaishnavi-fms.jpg", who: "Vaishnavi", score: "FMS Delhi" }
  ];

  function waInstituteLabel(c) {
    var s = (c.score || '').toLowerCase();
    if (s.indexOf('spjimr') >= 0) return 'SPJIMR Convert';
    if (s.indexOf('xlri') >= 0) return 'XLRI Convert';
    if (s.indexOf('scmhrd') >= 0) return 'SCMHRD Convert';
    if (s.indexOf('sibm') >= 0) return 'SIBM Convert';
    if (s.indexOf('nmims') >= 0) return 'NMIMS Convert';
    if (s.indexOf('fms') >= 0) return 'FMS Convert';
    return 'CATKing Topper';
  }

  function buildWaStamp(c) {
    var inst = waInstituteLabel(c);
    return `<div class="wa-stamp">
      <div class="wa-stamp-outer">
        <div class="wa-stamp-top">Verified CATKing</div>
        <div class="wa-stamp-ctr">${inst}</div>
      </div>
    </div>`;
  }

  function buildPlaceholder(c) {
    var initial = (c.who || 'X').charAt(0).toUpperCase();
    var firstMsg = 'Thank you Sumit Sir, finally cracked it!';
    var s = (c.score || '').toLowerCase();
    if (s.indexOf('spjimr') >= 0) firstMsg = 'Just wanted to thank the CATking team. Converted SPJIMR!';
    else if (s.indexOf('nmims') >= 0) firstMsg = 'NMIMS Mumbai is mine. Thank you Sumit Sir 🙏';
    else if (s.indexOf('scmhrd') >= 0) firstMsg = 'Just found out that I converted SCMHRD. Couldn\'t have done without your guidance.';

    return `<div class="wa-card-img">
      <div class="ph-bar"><div class="ph-av">${initial}</div><div class="ph-name">CATKing · ${c.who}</div></div>
      <div class="ph-msg">${firstMsg}</div>
      <div class="ph-celebrate">${c.score}</div>
    </div>`;
  }

  function renderWaCard(c) {
    var stamp = buildWaStamp(c);
    var placeholderHtml = buildPlaceholder(c);
    var placeholderEscaped = placeholderHtml.replace(/'/g, "&#39;").replace(/"/g, "&quot;");
    return `<div class="wa-card" data-sid="${c.sid}">
      <div class="wa-card-img has-img" data-fallback="${placeholderEscaped}">
        <img src="${c.img}" alt="${c.who} WhatsApp message" loading="lazy" 
        onerror="(function(img){var p=img.parentElement;p.classList.remove('has-img');p.innerHTML=p.getAttribute('data-fallback');})(this)">
      </div>
      ${stamp}
      <div class="wa-card-caption">
        <b>${c.who}</b>
      </div>
    </div>`;
  }

  const row = document.getElementById('catExamsWaRow');
  if (row) {
    row.innerHTML = WA_CARDS.map(renderWaCard).join('') + WA_CARDS.map(renderWaCard).join('');
  }
})();
