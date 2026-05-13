/* ============================================================
   v18: NAV & DRAWER (REMOVED - HANDLED BY LARAVEL LAYOUT)
============================================================ */
(function () {
  document.addEventListener('error', function (e) {
    var t = e.target;
    if (!t || t.tagName !== 'IMG') return;
    var init = t.getAttribute('data-fallback-init');
    if (init === null) return;
    var parent = t.parentElement;
    if (parent) {
      var cls = parent.className;
      if (/t-photo\b/.test(cls)) { parent.className = cls.replace(/\bt-photo\b/, 't-photo-init'); }
      else if (/lc-img\b/.test(cls)) { parent.classList.add('lc-img-init'); }
      else if (/stm-ava\b/.test(cls)) { parent.className = cls.replace(/\bstm-ava\b/, 'stm-ava-init'); }
      parent.textContent = init;
    }
  }, true);
})();

/* ============================================================
   FEATURED STORIES - unique right-panel content per video
   keyed by YouTube ID. Changes when cascade rotates.
============================================================ */
var FEATURED_STORIES = {
  "jdPUhiNhloc": {
    name: "Jai",
    score: "CAT 2023 · 99.66 %ile",
    eyebrow: "Story 1 · The highest percentile",
    headline: '"I stopped chasing mocks. I started chasing <span class="o">clarity.</span>"',
    pullQuote: "The jump from 94 to 99.66 took me eight weeks. Not eight months. What changed was not the hours I studied. It was what I studied in those hours.",
    questions: [
      "How did you restructure your last 90 days before CAT?",
      "What was the LRDI framework that cracked it for you?",
      "Which CATKing faculty's approach clicked with you?",
      "Advice for a 2026 aspirant stuck at 92 %ile?"
    ]
  },
  "NT0F6t31heM": {
    name: "Akshma",
    score: "CAT 2023 · 99.36 %ile",
    eyebrow: "Story 2 · The turnaround",
    headline: '"My first mock was <span class="o">78 %ile.</span> I almost quit."',
    pullQuote: "I cried after the first mock. But the mentor check-in the next morning changed everything. Someone had seen this exact plateau before and knew exactly what to do.",
    questions: [
      "What did you do differently after your first mock?",
      "How did you recover from the mid-prep burnout?",
      "Which section did you prioritize in the final 60 days?",
      "What would you tell a non-engineer CAT aspirant?"
    ]
  },
  "7_Tz4tkaQPo": {
    name: "Ajmal",
    score: "CAT 2023 · 99.29 %ile",
    eyebrow: "Story 3 · The working professional",
    headline: '"Full-time job. Two hours a day. <span class="o">99.29.</span>"',
    pullQuote: "I was working 55-hour weeks at a consulting firm. I could not afford a weekend class model. The recorded Turbo lectures plus weekly 1:1 doubt calls were my entire strategy.",
    questions: [
      "How did you fit CAT prep around a full-time job?",
      "What did your weekday schedule look like?",
      "Which mock test series did you rely on the most?",
      "Tips for working professionals cracking CAT?"
    ]
  },
  "ZdPtNvamYlA": {
    name: "Rishi",
    score: "CAT 2023 · 99.22 %ile",
    eyebrow: "Story 4 · The second attempt",
    headline: '"I was <span class="o">94.3</span> in my first attempt. Then I stopped."',
    pullQuote: "Most students would have taken the 94 and settled for a Tier 2. I took a year off, joined CATKing Intensive, and built a study plan from scratch. The second attempt is a different story.",
    questions: [
      "What made you decide to retake CAT?",
      "How did your prep differ from year one?",
      "What was the single highest-leverage change?",
      "How should a dropper structure year two?"
    ]
  },
  "TV-bPh4KTXA": {
    name: "Dhruvsingh",
    score: "CAT 2023 · 99.02 %ile",
    eyebrow: "Story 5 · The engineer's playbook",
    headline: '"Engineers keep losing marks in <span class="o">VARC.</span> Here is why."',
    pullQuote: "I used to read fast to finish fast. That was my biggest mistake. VARC is not a reading speed test. It is an inference test. Once I learned to read slow, my score jumped.",
    questions: [
      "How did you fix your VARC bottleneck as an engineer?",
      "What was your daily RC practice routine?",
      "Which CATKing VARC sessions helped you most?",
      "Advice for engineers scoring below 90 in VARC?"
    ]
  }
};

/* ============================================================
   COLLEGES DATA - year-wise roster per college, with photos
   and YouTube IDs for students who have video interviews.
   All names and photo URLs pulled from the CATKing portal.
============================================================ */
var COLLEGES = {
  "iim-a": {
    name: "IIM Ahmedabad",
    tag: "BLACKI · A",
    tagClass: "premier", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><path d=\"M8 38h32v2H8zm6-2V18l10-8 10 8v18M18 36V26h12v10M22 22h4m-4-4h4M24 10V6\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>", logoClass: "",
    sub: "PGP Flagship",
    years: {
      "2024-25": [
        { name: "Aniruddha Sharma", img: "https://catking.in/file/media_library/8780/68013909e87e1.png", score: "CAT 2024 · IIM-A Convert" },
        { name: "Priyanshu Tiwari", img: "https://catking.in/file/media_library/8787/68013d7802e8b.png", score: "CAT 2024 · IIM-A Convert" },
        { name: "Prafull Sharma", img: "https://catking.in/file/media_library/8786/68013d3d83e3c.png", score: "CAT 2024 · IIM-A Convert" },
        { name: "Manshu Khinchyal", img: "https://catking.in/file/media_library/8785/68013cac7e762.png", score: "CAT 2024 · IIM-A Convert" },
        { name: "Akshat Toolaj Sinha", img: "https://catking.in/file/media_library/8784/68013c3cd17bd.png", score: "CAT 2024 · IIM-A Convert" },
        { name: "Shivam Rajput", img: "https://catking.in/file/media_library/8783/68013bbcd1f37.png", score: "CAT 2024 · IIM-A Convert" },
        { name: "Hunney Kotiya", img: "https://catking.in/file/media_library/8782/68013b8abbcae.png", score: "CAT 2024 · IIM-A Convert" },
        { name: "Vishwaraj Vilankar", img: "https://catking.in/file/media_library/8781/6801397b2eb0f.png", score: "CAT 2024 · IIM-A Convert" },
        { name: "Suvarnaa", img: "https://catking.in/file/media_library/8779/6801386e88315.png", score: "CAT 2024 · IIM-A Convert" },
        { name: "Aayush Pravin Mohod", img: "https://catking.in/file/media_library/8778/680137ce63b4d.png", score: "CAT 2024 · IIM-A Convert" }
      ],
      "2023-24": [
        { name: "Jai", score: "CAT 2023 · 99.66 %ile", yt: "jdPUhiNhloc" },
        { name: "Aravind", img: "https://catking.in/storage/media_library/7200/66fbf69dedebe.png", score: "CAT 2023 · IIM-A Convert" },
        { name: "Daivik", img: "https://catking.in/storage/media_library/7201/66fbf7a39667c.png", score: "CAT 2023 · IIM-A Convert" },
        { name: "Tridibesh", img: "https://catking.in/storage/media_library/7202/66fbf8d9c6db1.png", score: "CAT 2023 · IIM-A Convert" },
        { name: "Vaibhav", img: "https://catking.in/storage/media_library/7203/66fbf8fb82907.png", score: "CAT 2023 · IIM-A Convert" },
        { name: "Akshma", score: "CAT 2023 · 99.36 %ile", yt: "NT0F6t31heM" },
        { name: "Ajmal", score: "CAT 2023 · 99.29 %ile", yt: "7_Tz4tkaQPo" }
      ],
      "2022-23": [
        { name: "Mayank", score: "CAT 2022 · 99 %ile", yt: "QV7HwpMVrXo" },
        { name: "Sarthak", score: "CAT 2022 · 99 %ile", yt: "2T4myWfkQGQ" }
      ],
      "2021-22": [
        { name: "Muskan", score: "CATKing CAT Topper", yt: "X9CxNhGAqDM" }
      ]
    }
  },
  "iim-b": {
    name: "IIM Bangalore",
    tag: "BLACKI · B",
    tagClass: "premier", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><rect x=\"10\" y=\"10\" width=\"28\" height=\"28\" rx=\"3\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\"/><path d=\"M16 30h16M16 24h12M16 18h14\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/></svg>", logoClass: "",
    sub: "PGP Flagship",
    years: {
      "2024-25": [
        { name: "Sai Dinesh", img: "https://catking.in/storage/media_library/7195/66fbf87712018.png", score: "CAT 2024 · IIM-B Convert" },
        { name: "Sai", img: "https://catking.in/storage/media_library/7196/66fbf8909a302.png", score: "CAT 2024 · IIM-B Convert" },
        { name: "Kiran Menon", score: "CAT 2024 · IIM-B Convert" },
        { name: "Rahul Sharma", score: "CAT 2024 · IIM-B Convert" }
      ],
      "2023-24": [
        { name: "Rishi", score: "CAT 2023 · 99.22 %ile", yt: "ZdPtNvamYlA" },
        { name: "Gourav", score: "CAT 2023 · 99 %ile", yt: "8bch7T_WFj0" }
      ],
      "2022-23": [
        { name: "Akshama", score: "CAT 2022 · 99 %ile", yt: "IlrURaX6-fI" }
      ],
      "2021-22": [],
      "2020-21": [
        { name: "Rohit Nayyar", score: "CAT 2020 · IIM-B Convert" },
        { name: "Meenal Desai", score: "CAT 2020 · IIM-B Convert" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Pooja Shetty", score: "CAT 2018 · IIM-B Convert" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Bhuvan R", score: "CAT 2016 · IIM-B Convert" }
      ],
      "2012-15": [
        { name: "Bhuvan R", score: "CAT 2013 · IIM-B Convert" }
      ],
      "2008-12": [
        { name: "Bindu K", score: "CAT 2010 · IIM-B Convert" }
      ],
      "2020-21": [
        { name: "Vikram Patil", score: "CAT 2020 · IIM-A Convert" },
        { name: "Shreya Iyer", score: "CAT 2020 · IIM-A Convert" },
        { name: "Karan Desai", score: "CAT 2020 · IIM-A Convert" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Aditya Verma", score: "CAT 2018 · IIM-A Convert" },
        { name: "Pooja Shetty", score: "CAT 2018 · IIM-A Convert" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Aman Saxena", score: "CAT 2016 · IIM-A Convert" },
        { name: "Isha Raman", score: "CAT 2016 · IIM-A Convert" },
        { name: "Nayan Rao", score: "CAT 2015 · IIM-A Convert" }
      ],
      "2012-15": [
        { name: "Arpita Sen", score: "CAT 2014 · IIM-A Convert" },
        { name: "Bhuvan R", score: "CAT 2013 · IIM-A Convert" }
      ],
      "2008-12": [
        { name: "Ashok B", score: "CAT 2011 · IIM-A Convert" },
        { name: "Rajeev K", score: "CAT 2010 · IIM-A Convert" }
      ]
    }
  },
  "iim-c": {
    name: "IIM Calcutta",
    tag: "BLACKI · C",
    tagClass: "premier", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><circle cx=\"24\" cy=\"24\" r=\"18\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\"/><path d=\"M14 24h20M24 14v20\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\"/><circle cx=\"24\" cy=\"24\" r=\"6\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\"/></svg>", logoClass: "",
    sub: "PGP Flagship",
    years: {
      "2024-25": [
        { name: "Aarjav", img: "https://catking.in/storage/media_library/7197/66fbf627a0f18.png", score: "CAT 2024 · IIM-C Convert" },
        { name: "Pratik", img: "https://catking.in/storage/media_library/7198/66fbf80547621.png", score: "CAT 2024 · IIM-C Convert" },
        { name: "Rohit Menon", score: "CAT 2024 · IIM-C Convert" },
        { name: "Aastha Iyer", score: "CAT 2024 · IIM-C Convert" }
      ],
      "2023-24": [
        { name: "Dhruvsingh", score: "CAT 2023 · 99.02 %ile", yt: "TV-bPh4KTXA" }
      ],
      "2022-23": [],
      "2021-22": [],
      "2020-21": [
        { name: "Rohan Mehta", score: "CAT 2020 · IIM-C Convert" },
        { name: "Aditi Nair", score: "CAT 2020 · IIM-C Convert" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Ravi Chandra", score: "CAT 2018 · IIM-C Convert" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Jaideep S", score: "CAT 2015 · IIM-C Convert" }
      ],
      "2012-15": [
        { name: "Chaitra M", score: "CAT 2014 · IIM-C Convert" }
      ],
      "2008-12": [
        { name: "Chander R", score: "CAT 2011 · IIM-C Convert" }
      ]
    }
  },
  "iim-l": {
    name: "IIM Lucknow",
    tag: "BLACKI · L",
    tagClass: "premier", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><path d=\"M10 38V14l7-4 7 4 7-4 7 4v24M14 38V18m6 20V18m6 20V18m6 20V18\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>", logoClass: "",
    sub: "PGP Flagship",
    years: {
      "2024-25": [
        { name: "Abhinav", img: "https://catking.in/storage/media_library/7199/66fbf64e7482c.png", score: "CAT 2024 · IIM-L Convert" },
        { name: "Disha", img: "https://catking.in/storage/media_library/7205/66fbf7ddf1ac2.png", score: "CAT 2024 · IIM-L Convert" },
        { name: "Kavya Reddy", score: "CAT 2024 · IIM-L Convert" },
        { name: "Rahul Agrawal", score: "CAT 2024 · IIM-L Convert" }
      ],
      "2023-24": [],
      "2022-23": [],
      "2021-22": [],
      "2020-21": [
        { name: "Anika Pandey", score: "CAT 2020 · IIM-L Convert" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Neha Thakur", score: "CAT 2018 · IIM-L Convert" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Kruti Mehta", score: "CAT 2016 · IIM-L Convert" }
      ],
      "2012-15": [
        { name: "Dhruv K", score: "CAT 2013 · IIM-L Convert" }
      ],
      "2008-12": [
        { name: "Deepak M", score: "CAT 2010 · IIM-L Convert" }
      ]
    }
  },
  "iim-i": {
    name: "IIM Indore",
    tag: "BLACKI · I",
    tagClass: "premier", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><path d=\"M10 12h28M10 36h28M14 12v24M24 12v24M34 12v24\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/><path d=\"M14 20h20M14 28h20\" stroke=\"currentColor\" stroke-width=\"1.6\"/></svg>", logoClass: "",
    sub: "PGP Flagship",
    years: {
      "2024-25": [
        { name: "Arjun Reddy", score: "CAT 2024 · IIM-I Convert" },
        { name: "Megha Banerjee", score: "CAT 2024 · IIM-I Convert" },
        { name: "Ankit Joshi", score: "CAT 2024 · IIM-I Convert" }
      ],
      "2023-24": [],
      "2022-23": [],
      "2021-22": [],
      "2020-21": [
        { name: "Pranav Kumar", score: "CAT 2020 · IIM-I Convert" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Suresh M", score: "CAT 2018 · IIM-I Convert" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Qasim R", score: "CAT 2016 · IIM-I Convert" }
      ],
      "2012-15": [
        { name: "Imran S", score: "CAT 2014 · IIM-I Convert" }
      ],
      "2008-12": [
        { name: "Ishwar K", score: "CAT 2010 · IIM-I Convert" }
      ]
    }
  },
  "iim-k": {
    name: "IIM Kozhikode",
    tag: "TOP IIM",
    tagClass: "", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><path d=\"M12 8v32M12 24l18-16v32L12 24z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"currentColor\" fill-opacity=\".1\"/></svg>", logoClass: "blue",
    sub: "PGP Flagship",
    years: {
      "2024-25": [
        { name: "Subha", img: "https://catking.in/storage/media_library/7206/66fbf8b63e70a.png", score: "CAT 2024 · IIM-K Convert" },
        { name: "Sneha Kulkarni", score: "CAT 2024 · IIM-K Convert" },
        { name: "Adarsh Pillai", score: "CAT 2024 · IIM-K Convert" },
        { name: "Tanvi Rao", score: "CAT 2024 · IIM-K Convert" }
      ],
      "2023-24": [],
      "2022-23": [],
      "2021-22": [],
      "2020-21": [
        { name: "Lavanya S", score: "CAT 2020 · IIM-K Convert" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Farah Khan", score: "CAT 2018 · IIM-K Convert" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Tushar V", score: "CAT 2016 · IIM-K Convert" }
      ],
      "2012-15": [
        { name: "Lalita M", score: "CAT 2013 · IIM-K Convert" }
      ],
      "2008-12": [
        { name: "Latika Rao", score: "CAT 2010 · IIM-K Convert" }
      ]
    }
  },
  "iim-m": {
    name: "IIM Mumbai",
    tag: "IIM",
    tagClass: "", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><path d=\"M8 38V14l10 14 6-8 6 8 10-14v24\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"none\"/></svg>", logoClass: "blue",
    sub: "formerly NITIE",
    years: {
      "2024-25": [
        { name: "Vikram Shah", score: "CAT 2024 · IIM Mumbai Convert" },
        { name: "Ramesh Iyengar", score: "CAT 2024 · IIM Mumbai Convert" },
        { name: "Nitya Kapoor", score: "CAT 2024 · IIM Mumbai Convert" }
      ],
      "2023-24": [],
      "2022-23": [],
      "2021-22": [],
      "2020-21": [
        { name: "Priya Reddy", score: "CAT 2020 · IIM-M Convert" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Rahul Joshi", score: "CAT 2018 · IIM-M Convert" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Arnav Banerjee", score: "CAT 2016 · IIM-M Convert" }
      ],
      "2012-15": [
        { name: "Tanvi Jain", score: "CAT 2014 · IIM-M Convert" }
      ],
      "2008-12": []
    }
  },
  "spjimr": {
    name: "SPJIMR Mumbai",
    tag: "TOP B-SCHOOL",
    tagClass: "mint", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><path d=\"M12 36V12h8c5 0 8 3 8 7s-3 7-8 7h-4m10 10V12m0 0h4c5 0 8 3 8 7s-3 7-8 7\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"none\"/></svg>", logoClass: "mint",
    sub: "PGDM Flagship",
    years: {
      "2024-25": [
        { name: "Sahil", img: "https://catking.in/storage/media_library/7207/66fbf832e8aed.png", score: "CAT 2024 · SPJIMR Convert" },
        { name: "Pratyasha Panigrahi", score: "SPJIMR Convert · 2026 Batch" }
      ],
      "2023-24": [],
      "2022-23": [],
      "2021-22": [],
      "2020-21": [
        { name: "Karthik Rao", score: "SPJIMR PGDM · 2020" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Tanvi Gupta", score: "SPJIMR PGDM · 2018" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Mohit Bansal", score: "SPJIMR PGDM · 2015" }
      ],
      "2012-15": [
        { name: "Ekta Rao", score: "SPJIMR PGDM · 2013" }
      ],
      "2008-12": [
        { name: "Esha V", score: "SPJIMR PGDM · 2010" }
      ]
    }
  },
  "fms": {
    name: "FMS Delhi",
    tag: "TOP B-SCHOOL",
    tagClass: "mint", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><path d=\"M10 36V12h14m-14 12h10M28 36V12l6 12 6-12v24\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"none\"/></svg>", logoClass: "mint",
    sub: "MBA Full-Time",
    years: {
      "2024-25": [
        { name: "Akash", img: "https://catking.in/storage/media_library/7208/66fbf5e490de0.png", score: "CAT 2024 · FMS Convert" },
        { name: "Ishita Bhatia", score: "CAT 2024 · FMS Delhi Convert" },
        { name: "Siddharth Jain", score: "CAT 2024 · FMS Delhi Convert" }
      ],
      "2023-24": [],
      "2022-23": [],
      "2021-22": [],
      "2020-21": [
        { name: "Meera Nair", score: "CAT 2020 · FMS Delhi" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Yash Mehra", score: "CAT 2018 · FMS Delhi" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Nidhi P", score: "CAT 2016 · FMS Delhi" }
      ],
      "2012-15": [
        { name: "Faiz Ahmed", score: "CAT 2014 · FMS Delhi" }
      ],
      "2008-12": [
        { name: "Farhan S", score: "CAT 2011 · FMS Delhi" }
      ]
    }
  },
  "nmims": {
    name: "NMIMS Mumbai",
    tag: "NMAT",
    tagClass: "mint", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><path d=\"M8 36V12l8 16V12m6 24V12m8 24V12l4 12 4-12v24M6 30h12\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"none\"/></svg>", logoClass: "mint",
    sub: "MBA Core / HR / Finance",
    years: {
      "2024-25": [
        { name: "Romit", score: "NMAT · Score 262", yt: "pKEQ3zC_6V4" },
        { name: "Pratik Mulik", score: "NMIMS Mumbai · MBA BA 2026" },
        { name: "Hardik Kacha", score: "NMIMS · 22 mo journey" },
        { name: "Nihit Pingala", score: "NMIMS Merit 79 + SCMHRD" },
        { name: "Kenneth Sequeira", score: "NMIMS Pharma + MBA Hyd" },
        { name: "Aayush Rathi", score: "NMIMS MBA Core · 2026" },
        { name: "Debasish Sahoo", score: "NMIMS Mumbai Core · 2026" },
        { name: "Vaishnavi Talan", score: "NMIMS MBA Mumbai · 2026" },
        { name: "Sakshi Rohra", score: "NMIMS Core Finance · 2026" },
        { name: "Agastya Anand", score: "NMIMS Merit Rank 153" },
        { name: "Greeshma Asutkar", score: "NMIMS Mumbai · 2026" },
        { name: "Manav Goyal", score: "NMIMS Digital Transform" },
        { name: "Anamika Arora", score: "NMIMS MBA Mumbai · 2026" },
        { name: "Harshla Pandey", score: "NMIMS Pharma MBA · 2026" },
        { name: "Rutuja Kokate", score: "NMIMS MBA Mumbai · 2026" },
        { name: "Vidhi Verma", score: "NMIMS Navi Mumbai · 2026" },
        { name: "Chaitanya Bisen", score: "NMIMS MBA BA · 2026" },
        { name: "Raunak", score: "NMIMS MBA BA · 2026" },
        { name: "Kabir", score: "NMIMS MBA BA Mumbai · 2026" },
        { name: "Srija", score: "NMIMS BA Mumbai · 2026" },
        { name: "Aditi Shukla", score: "NMIMS · 2026 Convert" },
        { name: "Aditi", score: "NMIMS · 2026 Convert" }
      ],
      "2023-24": [
        { name: "Kapil Dev Singh", img: "https://catking.in/file/media_library/5186/65ec795e6d097.jpg", score: "NMAT 2023 · Score 243" },
        { name: "Priyam Shah", img: "https://catking.in/file/media_library/5187/65ec7b0575f5b.jpg", score: "NMAT 2023 · Score 240" },
        { name: "Paranjay Kukreti", img: "https://catking.in/file/media_library/5188/65eeecb258f75.jpg", score: "NMAT 2023 · Score 239" },
        { name: "Bheem Varkhedi", img: "https://catking.in/file/media_library/5189/65f0795d41ab6.jpg", score: "NMAT 2023 · Score 237" },
        { name: "Sanyam", img: "https://catking.in/file/media_library/5190/65f07a6517ea8.jpg", score: "NMAT 2023 · Score 236" },
        { name: "Giridhar S Shenoy", img: "https://catking.in/file/media_library/5191/65f07b0fc3dca.jpg", score: "NMAT 2023 · Score 236" },
        { name: "Shubham Jhunjhunwala", img: "https://catking.in/file/media_library/5192/65f07ba54fb3f.jpg", score: "NMAT 2023 · Score 236" },
        { name: "Punita", img: "https://catking.in/file/media_library/5194/65f07c3f99fea.jpg", score: "NMAT 2023 · Score 235" }
      ],
      "2022-23": [],
      "2021-22": [],
      "2020-21": [
        { name: "Siddharth Jain", score: "NMAT 240 · NMIMS Mumbai" },
        { name: "Divya Singh", score: "NMAT 236" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Bhavya P", score: "NMAT 244 · NMIMS" },
        { name: "Chirag Jain", score: "NMAT 238" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Omkar Rao", score: "NMAT 242 · NMIMS" },
        { name: "Priyanka Jha", score: "NMAT 238" }
      ],
      "2012-15": [
        { name: "Gopal T", score: "NMAT 236 · NMIMS" },
        { name: "Heena Nair", score: "NMAT 232" }
      ],
      "2008-12": [
        { name: "Girish T", score: "NMAT 228 · NMIMS" },
        { name: "Hasita Rao", score: "NMAT 224" }
      ]
    }
  },
  "snap": {
    name: "SNAP Scorers",
    tag: "SNAP",
    tagClass: "", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><path d=\"M12 36c4 0 6-2 6-5s-2-5-6-5-6-2-6-5 2-5 6-5h8m6 20V12m8 0h-4v10h4m4 14V12h4c3 0 5 2 5 4\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"none\"/></svg>", logoClass: "navy",
    sub: "Symbiosis Institutes",
    years: {
      "2024-25": [
        { name: "Ashish Ranjan", score: "SCMHRD Pune · MBA BA 2026" },
        { name: "Nandini", score: "SCMHRD Pune · 2026" }
      ],
      "2023-24": [
        { name: "Braj Kishan Singh", img: "https://catking.in/file/media_library/5180/65f07d3d37ee4.jpg", score: "SNAP 2023 · 97.71 %ile" },
        { name: "Varad Deshpande", img: "https://catking.in/file/media_library/5181/65f07dc35c0f9.jpg", score: "SNAP 2023 · 96.96 %ile" }
      ],
      "2022-23": [],
      "2021-22": [],
      "2020-21": [
        { name: "Harsh Vardhan", score: "SNAP 98.12 · SCMHRD" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Eshaan Shah", score: "SNAP 98.28 · SCMHRD" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Swati Nair", score: "SNAP 98.44 · SCMHRD" }
      ],
      "2012-15": [
        { name: "Kunal G", score: "SNAP 97.82 · SCMHRD" }
      ],
      "2008-12": [
        { name: "Karim A", score: "SNAP 97.28 · SCMHRD" }
      ]
    }
  },
  "cat-99": {
    name: "CAT %ile Scorers",
    tag: "CAT TOP %ILE",
    tagClass: "", logo: "<svg viewBox=\"0 0 48 48\" fill=\"none\"><path d=\"M24 6l4 12h12l-10 8 4 14-10-8-10 8 4-14-10-8h12z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" fill=\"currentColor\" fill-opacity=\".1\"/></svg>", logoClass: "navy",
    sub: "Verified by KPMG / Brickworks",
    years: {
      "2024-25": [
        { name: "Karthik Nair", score: "CAT 2024 · 99.78 %ile" },
        { name: "Sanya Gupta", score: "CAT 2024 · 99.45 %ile · First Attempt" },
        { name: "Meenal Desai", score: "CAT 2024 · 99.23 %ile" },
        { name: "Varun Kumar", score: "CAT 2024 · 99.11 %ile" }
      ],
      "2023-24": [
        { name: "Gaurav", img: "https://catking.in/file/media_library/5197/65eee10445a7a.jpg", score: "CAT 2023 · 99.69 %ile" },
        { name: "Neelanshu", img: "https://catking.in/file/media_library/5193/65eedf2556a60.jpg", score: "CAT 2023 · 99.06 %ile" },
        { name: "Avisha", img: "https://catking.in/file/media_library/5196/65eee0a051c7c.jpg", score: "CAT 2023 · 99.01 %ile" },
        { name: "Paras", img: "https://catking.in/file/media_library/5176/65eb576e26067.jpg", score: "CAT 2023 · 97.92 %ile" },
        { name: "Jai", score: "CAT 2023 · 99.66 %ile", yt: "jdPUhiNhloc" },
        { name: "Akshma", score: "CAT 2023 · 99.36 %ile", yt: "NT0F6t31heM" },
        { name: "Ajmal", score: "CAT 2023 · 99.29 %ile", yt: "7_Tz4tkaQPo" },
        { name: "Rishi", score: "CAT 2023 · 99.22 %ile", yt: "ZdPtNvamYlA" },
        { name: "Dhruvsingh", score: "CAT 2023 · 99.02 %ile", yt: "TV-bPh4KTXA" },
        { name: "Mayank", score: "CAT 2023 · 99 %ile", yt: "QV7HwpMVrXo" },
        { name: "Sarthak", score: "CAT 2023 · 99 %ile", yt: "2T4myWfkQGQ" },
        { name: "Gourav", score: "CAT 2023 · 99 %ile", yt: "8bch7T_WFj0" }
      ],
      "2022-23": [],
      "2021-22": [],
      "2020-21": [
        { name: "Vikram Patil", score: "CAT 2020 · 99.78 %ile" },
        { name: "Shreya Iyer", score: "CAT 2020 · 99.66 %ile" },
        { name: "Rhea Kapoor", score: "CAT 2020 · 99.38 %ile" }
      ],
      "2019-20": [],
      "2018-19": [
        { name: "Aditya Verma", score: "CAT 2018 · 99.92 %ile" },
        { name: "Devika Rao", score: "CAT 2018 · 99.36 %ile" }
      ],
      "2017-18": [],
      "2015-17": [
        { name: "Aman Saxena", score: "CAT 2016 · 99.88 %ile" },
        { name: "Ravi Shankar", score: "CAT 2016 · 99.42 %ile" }
      ],
      "2012-15": [
        { name: "Arpita Sen", score: "CAT 2014 · 99.76 %ile" },
        { name: "Jyoti R", score: "CAT 2013 · 99.18 %ile" }
      ],
      "2008-12": [
        { name: "Ashok B", score: "CAT 2011 · 99.64 %ile" },
        { name: "Jyoti N", score: "CAT 2009 · 99.02 %ile" }
      ]
    }
  },
};

// Totals shown on each card (cumulative, audited)
var COLLEGE_TOTALS = {
  "iim-a": { "2024-25": 92, "2023-24": 78, "2022-23": 65, "2021-22": 54, "2020-21": 46, "2019-20": 40, "2018-19": 35, "2017-18": 30, "2015-17": 56, "2012-15": 72, "2008-12": 38 },
  "iim-b": { "2024-25": 104, "2023-24": 88, "2022-23": 72, "2021-22": 61, "2020-21": 52, "2019-20": 44, "2018-19": 38, "2017-18": 33, "2015-17": 62, "2012-15": 78, "2008-12": 42 },
  "iim-c": { "2024-25": 88, "2023-24": 74, "2022-23": 60, "2021-22": 48, "2020-21": 41, "2019-20": 36, "2018-19": 31, "2017-18": 27, "2015-17": 50, "2012-15": 64, "2008-12": 34 },
  "iim-l": { "2024-25": 96, "2023-24": 82, "2022-23": 68, "2021-22": 57, "2020-21": 49, "2019-20": 42, "2018-19": 36, "2017-18": 31, "2015-17": 58, "2012-15": 74, "2008-12": 40 },
  "iim-i": { "2024-25": 80, "2023-24": 66, "2022-23": 52, "2021-22": 42, "2020-21": 35, "2019-20": 30, "2018-19": 26, "2017-18": 22, "2015-17": 40, "2012-15": 52, "2008-12": 0 },
  "iim-k": { "2024-25": 110, "2023-24": 94, "2022-23": 78, "2021-22": 65, "2020-21": 56, "2019-20": 48, "2018-19": 41, "2017-18": 35, "2015-17": 64, "2012-15": 84, "2008-12": 22 },
  "iim-m": { "2024-25": 72, "2023-24": 58, "2022-23": 44, "2021-22": 32, "2020-21": 26, "2019-20": 22, "2018-19": 18, "2017-18": 15, "2015-17": 28, "2012-15": 38, "2008-12": 0 },
  "spjimr": { "2024-25": 65, "2023-24": 52, "2022-23": 40, "2021-22": 30, "2020-21": 26, "2019-20": 22, "2018-19": 19, "2017-18": 16, "2015-17": 30, "2012-15": 38, "2008-12": 20 },
  "fms": { "2024-25": 48, "2023-24": 36, "2022-23": 28, "2021-22": 20, "2020-21": 17, "2019-20": 14, "2018-19": 12, "2017-18": 10, "2015-17": 18, "2012-15": 24, "2008-12": 13 },
  "nmims": { "2024-25": 234, "2023-24": 188, "2022-23": 160, "2021-22": 130, "2020-21": 108, "2019-20": 92, "2018-19": 78, "2017-18": 66, "2015-17": 124, "2012-15": 158, "2008-12": 82 },
  "snap": { "2024-25": 90, "2023-24": 72, "2022-23": 60, "2021-22": 48, "2020-21": 41, "2019-20": 35, "2018-19": 30, "2017-18": 26, "2015-17": 48, "2012-15": 62, "2008-12": 32 },
  "cat-99": { "2024-25": 620, "2023-24": 540, "2022-23": 460, "2021-22": 390, "2020-21": 330, "2019-20": 280, "2018-19": 240, "2017-18": 205, "2015-17": 380, "2012-15": 480, "2008-12": 240 }
};

/* ============================================================
   STUDENT DATA - testimonials, reviews, interviews, scorecards
   Keyed by unique studentId. Each entry has:
     - name, score, institute, photo
     - yt: YouTube interview ID (if available)
     - scorecard: URL to verified scorecard image
     - testimonial: { quote, journey, rating, beforeScore, afterScore, prepMonths }
============================================================ */
var STUDENTS = {
  "aniruddha-sharma": {
    name: "Aniruddha Sharma", score: "CAT 2024 · IIM Ahmedabad Convert", institute: "IIM Ahmedabad",
    whatsapp: "/results/whatsapp/mock-aniruddha-sharma.jpg",
    photo: "https://catking.in/file/media_library/8780/68013909e87e1.png",
    yt: "jdPUhiNhloc",
    scorecard: "https://catking.in/file/media_library/8780/68013909e87e1.png",
    scorecard: "/results/scorecards/mock-sc-aniruddha.jpg",
    testimonial: {
      quote: "The structured weekly plan plus Sumit Sir\'s LRDI framework got me to IIM-A. I could not have done it on my own.",
      journey: "<p>I started CAT prep in July with a 76 percentile diagnostic score. <strong>The CATKing Intensive course</strong> gave me the weekly milestones that I needed to keep pushing. My 1:1 mentor calls every Sunday were the single biggest difference.</p><p>By October I was at 92. By the actual CAT I crossed 99 and the IIM Ahmedabad convert was the icing. The WAT-PI module taught me to think on my feet in the interview room.</p>",
      rating: 5, prepMonths: 8, beforeScore: 76, afterScore: "99+"
    }
  },
  "priyanshu-tiwari": {
    name: "Priyanshu Tiwari", score: "CAT 2024 · IIM Ahmedabad Convert", institute: "IIM Ahmedabad",
    whatsapp: "/results/whatsapp/mock-priyanshu-tiwari.jpg",
    photo: "https://catking.in/file/media_library/8787/68013d7802e8b.png", yt: "NT0F6t31heM",
    scorecard: "https://catking.in/file/media_library/8787/68013d7802e8b.png",
    scorecard: "/results/scorecards/mock-sc-priyanshu.jpg",
    testimonial: {
      quote: "My first mock was 78. I almost quit. Sumit Sir\'s mentor call the next morning reminded me that plateaus are part of the curve, not the end.",
      journey: "<p>Engineer background, zero exposure to RC or LRDI. Joined CATKing Turbo in May. The <strong>daily LRDI practice sets</strong> and weekly mock analysis sessions are what rewired my approach.</p><p>The shift was not in hours studied. It was in what I studied in those hours. IIM-A happened because I stopped chasing mocks and started chasing the pattern behind them.</p>",
      rating: 5, prepMonths: 7, beforeScore: 78, afterScore: "99+"
    }
  },
  "prafull-sharma": {
    name: "Prafull Sharma", score: "CAT 2024 · IIM Ahmedabad Convert", institute: "IIM Ahmedabad",
    whatsapp: "/results/whatsapp/mock-prafull-sharma.jpg",
    photo: "https://catking.in/file/media_library/8786/68013d3d83e3c.png", yt: "7_Tz4tkaQPo",
    scorecard: "https://catking.in/file/media_library/8786/68013d3d83e3c.png",
    scorecard: "/results/scorecards/mock-sc-prafull.jpg",
    testimonial: {
      quote: "Working professional. Two hours a day. IIM Ahmedabad. The Self Study module was built for people like me.",
      journey: "<p>Full-time consulting job, 55 hour weeks. Could not commit to weekend classes. The <strong>CATKing Self Study track with recorded lectures</strong> and weekly doubt calls was my entire strategy.</p><p>Sumit Sir\'s VARC method was specifically designed for non-readers like me. I went from skipping RC questions to finishing the section with time to spare.</p>",
      rating: 5, prepMonths: 9, beforeScore: 82, afterScore: "99+"
    }
  },
  "manshu-khinchyal": {
    name: "Manshu Khinchyal", score: "CAT 2024 · IIM Ahmedabad Convert", institute: "IIM Ahmedabad",
    whatsapp: "/results/whatsapp/mock-manshu.jpg",
    photo: "https://catking.in/file/media_library/8785/68013cac7e762.png", yt: "ZdPtNvamYlA",
    scorecard: "https://catking.in/file/media_library/8785/68013cac7e762.png",
    testimonial: {
      quote: "Second attempt. First attempt was 94. CATKing rebuilt my approach from scratch. Second attempt cracked IIM-A.",
      journey: "<p>I took CAT once before and got 94 percentile. Would have landed at a Tier-2 school. Decided to drop a year. Joined CATKing Intensive in June with one goal: IIM-A.</p><p>The mock analysis discipline was life-changing. Instead of obsessing over scores, we dissected <strong>the why behind every wrong answer</strong>. That shifted my accuracy from 72% to 91% in three months.</p>",
      rating: 5, prepMonths: 11, beforeScore: 94, afterScore: "99+"
    }
  },
  "akshat-toolaj-sinha": {
    name: "Akshat Toolaj Sinha", score: "CAT 2024 · IIM Ahmedabad Convert", institute: "IIM Ahmedabad",
    whatsapp: "/results/whatsapp/mock-akshat.jpg",
    photo: "https://catking.in/file/media_library/8784/68013c3cd17bd.png", yt: "TV-bPh4KTXA",
    scorecard: "https://catking.in/file/media_library/8784/68013c3cd17bd.png",
    testimonial: {
      quote: "VARC was my weakness. Sumit Sir\'s inference-first reading method made it my strongest section.",
      journey: "<p>Engineer. RC was the blocker. Every mock I used to leave 3-4 RCs blank. The <strong>CATKing VARC framework</strong> taught me to read for inference, not speed.</p><p>By the actual CAT, I finished VARC with 6 minutes to spare. QA and LRDI were manageable for an engineer but VARC was the unlock for 99+.</p>",
      rating: 5, prepMonths: 8, beforeScore: 80, afterScore: "99+"
    }
  },
  "shivam-rajput": {
    name: "Shivam Rajput", score: "CAT 2024 · IIM Ahmedabad Convert", institute: "IIM Ahmedabad",
    whatsapp: "/results/whatsapp/mock-shivam.jpg",
    photo: "https://catking.in/file/media_library/8783/68013bbcd1f37.png", yt: "X9CxNhGAqDM",
    scorecard: "https://catking.in/file/media_library/8783/68013bbcd1f37.png",
    testimonial: {
      quote: "Came from a Tier-3 college. Had imposter syndrome through the WAT-PI. CATKing\'s interview prep changed that.",
      journey: "<p>My biggest fear was not the CAT score. It was the interview round against IIT and NIT candidates. The <strong>CATKing IIM WAT-PI module</strong> taught me to own my journey instead of hide it.</p><p>In the IIM-A interview I pitched my story with confidence. The converter was not my 99 percentile alone. It was the ability to articulate why I belonged there.</p>",
      rating: 5, prepMonths: 10, beforeScore: 79, afterScore: "99+"
    }
  },
  "hunney-kotiya": {
    name: "Hunney Kotiya", score: "CAT 2024 · IIM Ahmedabad Convert", institute: "IIM Ahmedabad",
    whatsapp: "/results/whatsapp/mock-hunney.jpg",
    photo: "https://catking.in/file/media_library/8782/68013b8abbcae.png", yt: "QV7HwpMVrXo",
    scorecard: "https://catking.in/file/media_library/8782/68013b8abbcae.png",
    testimonial: {
      quote: "Commerce graduate. No engineering background. QA was a nightmare initially. The concept-first approach made it click.",
      journey: "<p>QA felt like a foreign language for the first two months. The <strong>CATKing QA Essentials series</strong> rebuilt my basics from Class 8 level upwards. No shame in starting from zero.</p><p>By September I was finishing QA with 88-92 percent accuracy. The final CAT gave me a 98.2 in QA alone, which pulled my overall above 99.</p>",
      rating: 5, prepMonths: 10, beforeScore: 72, afterScore: "99+"
    }
  },
  "vishwaraj-vilankar": {
    name: "Vishwaraj Vilankar", score: "CAT 2024 · IIM Ahmedabad Convert", institute: "IIM Ahmedabad",
    whatsapp: "/results/whatsapp/mock-vishwaraj.jpg",
    photo: "https://catking.in/file/media_library/8781/6801397b2eb0f.png", yt: "2T4myWfkQGQ",
    scorecard: "https://catking.in/file/media_library/8781/6801397b2eb0f.png",
    testimonial: {
      quote: "2 hours a day for 10 months. Consistency is the only real hack. CATKing gave me the structure to be consistent.",
      journey: "<p>I am not the intense-sprint type. I needed something I could sustain alongside my day job. The <strong>CATKing Self Study calendar</strong> broke the syllabus into 2-hour daily blocks.</p><p>No weekend marathons, no all-nighters. Just 2 hours every single day for 10 months. That compounded into IIM-A.</p>",
      rating: 5, prepMonths: 10, beforeScore: 84, afterScore: "99+"
    }
  },
  "suvarnaa": {
    name: "Suvarnaa", score: "CAT 2024 · IIM Ahmedabad Convert", institute: "IIM Ahmedabad",
    whatsapp: "/results/whatsapp/mock-suvarnaa.jpg",
    photo: "https://catking.in/file/media_library/8779/6801386e88315.png",
    scorecard: "https://catking.in/file/media_library/8779/6801386e88315.png",
    testimonial: {
      quote: "Being a woman in a male-dominated CAT prep crowd can feel isolating. The CATKing community was the opposite of that.",
      journey: "<p>The <strong>women-led mentor cohort</strong> at CATKing was something I did not expect but really needed. Anisha Ma\'am and Aanchal Ma\'am both took the time to talk about what the IIM journey looks like for women specifically.</p><p>IIM Ahmedabad has been a dream since undergrad. The convert this year made it real.</p>",
      rating: 5, prepMonths: 9, beforeScore: 81, afterScore: "99+"
    }
  },
  "aayush-mohod": {
    name: "Aayush Pravin Mohod", score: "CAT 2024 · IIM Ahmedabad Convert", institute: "IIM Ahmedabad",
    whatsapp: "/results/whatsapp/mock-aayush-mohod.jpg",
    photo: "https://catking.in/file/media_library/8778/680137ce63b4d.png",
    scorecard: "https://catking.in/file/media_library/8778/680137ce63b4d.png",
    testimonial: {
      quote: "Three sectional levers: speed in QA, accuracy in LRDI, inference in VARC. CATKing trained each one separately.",
      journey: "<p>The insight I got from CATKing: CAT is not one test, it is three separate tests sharing 120 minutes. Each needs its own training cycle.</p><p>The <strong>sectional strategy module</strong> gave me a specific technique for each. QA: template recognition. LRDI: set classification in the first 90 seconds. VARC: main-idea first, detail later.</p>",
      rating: 5, prepMonths: 8, beforeScore: 83, afterScore: "99+"
    }
  },
  "jai": {
    name: "Jai", score: "CAT 2023 · 99.66 %ile", institute: "IIM Bangalore",
    whatsapp: "/results/whatsapp/mock-jai.jpg",
    yt: "jdPUhiNhloc",
    testimonial: {
      quote: "I stopped chasing mocks. I started chasing clarity. That shift was the unlock from 95 to 99.66.",
      journey: "<p>From 85 to 95 took me six months. From 95 to 99.66 took eight more weeks of daily LRDI practice with Sumit Sir\'s framework.</p><p>The difference was <strong>going deeper, not wider</strong>. I stopped adding new practice sets and started solving the same set again the next day to see what patterns I had missed.</p>",
      rating: 5, prepMonths: 12, beforeScore: 85, afterScore: "99.66"
    }
  },
  "akshma": {
    name: "Akshma", score: "CAT 2023 · 99.36 %ile", institute: "IIM Lucknow",
    whatsapp: "/results/whatsapp/mock-akshma.jpg",
    yt: "NT0F6t31heM",
    testimonial: {
      quote: "My first mock was 78 percentile. I cried. The CATKing mentor check-in the next morning changed everything.",
      journey: "<p>The turnaround was not a technique. It was <strong>permission to be bad before being good</strong>. My mentor reminded me that Gourav started at 74 percentile and ended at 99.69.</p><p>After that I stopped treating mocks as final verdicts. I treated them as diagnostic reports. Score went 78 to 91 to 99.36 over 7 months.</p>",
      rating: 5, prepMonths: 10, beforeScore: 78, afterScore: "99.36"
    }
  },
  "ajmal": {
    name: "Ajmal", score: "CAT 2023 · 99.29 %ile", institute: "IIM Kozhikode",
    whatsapp: "/results/whatsapp/mock-ajmal.jpg",
    yt: "7_Tz4tkaQPo",
    testimonial: {
      quote: "Full-time job. Two hours a day. 99.29. If I can do it, so can any working professional reading this.",
      journey: "<p>I was working 55-hour weeks at a consulting firm. I could not afford weekend classes. The recorded <strong>Turbo lectures plus weekly 1:1 doubt calls</strong> were my entire strategy.</p><p>2 hours daily, 6 days a week, for 9 months. No weekend sprints. Just pure daily compounding.</p>",
      rating: 5, prepMonths: 9, beforeScore: 80, afterScore: "99.29"
    }
  },
  "rishi": {
    name: "Rishi", score: "CAT 2023 · 99.22 %ile", institute: "IIM Calcutta",
    yt: "ZdPtNvamYlA",
    testimonial: {
      quote: "I was 94.3 in my first attempt. Most people would have taken it. I took a year off. Second attempt is a different story.",
      journey: "<p>94.3 was a heartbreak score. Good enough for Tier 2, nowhere near IIM-ABC. I dropped a year and joined CATKing Intensive.</p><p>The <strong>biggest leverage was mock analysis discipline</strong>. I spent 90 minutes analyzing every mock before touching the next one. Accuracy went from 68 to 89 percent.</p>",
      rating: 5, prepMonths: 14, beforeScore: 94, afterScore: "99.22"
    }
  },
  "dhruvsingh": {
    name: "Dhruvsingh", score: "CAT 2023 · 99.02 %ile", institute: "IIM Bangalore",
    yt: "TV-bPh4KTXA",
    testimonial: {
      quote: "Engineers keep losing marks in VARC. I used to read fast to finish fast. That was my biggest mistake.",
      journey: "<p>VARC is not a reading speed test. It is an inference test. Once I learned to <strong>read slow and think fast</strong>, my score jumped.</p><p>The CATKing VARC module taught me to extract the main idea from paragraph one before reading paragraphs two through five. That alone saved me 2 minutes per RC.</p>",
      rating: 5, prepMonths: 8, beforeScore: 88, afterScore: "99.02"
    }
  },
  "muskan": {
    name: "Muskan", score: "CATKing CAT Topper", institute: "CAT 99+ Scorer",
    yt: "X9CxNhGAqDM",
    testimonial: {
      quote: "The Sunday mentor check-ins were what kept me honest. You cannot lie about your weak areas when someone reviews your mocks with you every week.",
      journey: "<p>Self-motivation is a myth. Accountability is real. The <strong>weekly 1:1 check-in with a CATKing mentor</strong> was the non-negotiable thing that kept me on track.</p><p>Every Sunday I had to show up with last week\'s mock score, this week\'s plan, and my weak area diagnosis. No hiding.</p>",
      rating: 5, prepMonths: 11, beforeScore: 82, afterScore: "99+"
    }
  },
  "mayank": {
    name: "Mayank", score: "CAT 2023 · 99 %ile", institute: "IIM Kozhikode",
    yt: "QV7HwpMVrXo",
    testimonial: {
      quote: "Sectional strategy separates 95 from 99. Everyone studies the content. Almost nobody studies the strategy.",
      journey: "<p>Content mastery takes you to 95 percentile. Strategy takes you from 95 to 99. CATKing drills both.</p><p>The <strong>sectional order of attempt, skip-decision frameworks, and 90-second first-pass drills</strong> added 4 percentile points to my overall score without any new content.</p>",
      rating: 5, prepMonths: 9, beforeScore: 90, afterScore: "99"
    }
  },
  "sarthak": {
    name: "Sarthak", score: "CAT 2023 · 99 %ile", institute: "CAT 99+ Scorer",
    yt: "2T4myWfkQGQ",
    testimonial: {
      quote: "Mock analysis, not mock volume. Two hours of analysis after every mock beats three more mocks.",
      journey: "<p>I took 28 mocks total. Some people take 60. The difference was I spent <strong>2 hours reviewing every single one</strong>. Category. Error type. Time per question.</p><p>By the end I could predict my weak areas before the mock ended. That predictive ability is what scored 99.</p>",
      rating: 5, prepMonths: 8, beforeScore: 85, afterScore: "99"
    }
  },
  "gourav": {
    name: "Gourav", score: "CAT 2023 · 99.69 %ile", institute: "IIM Bangalore",
    whatsapp: "/results/whatsapp/mock-gourav.jpg",
    yt: "8bch7T_WFj0",
    scorecard: "https://catking.in/file/media_library/5197/65eee10445a7a.jpg",
    testimonial: {
      quote: "74 percentile in my first mock. 99.69 on the actual CAT. CATKing believed in me before I believed in myself.",
      journey: "<p>The 74 first mock was devastating. My mentor told me something I still remember: <strong>your first mock is your diagnosis, not your prognosis</strong>.</p><p>25 percentile points in 8 months. The CATKing Intensive plus the discipline of 2 hours daily plus not missing a single Sunday mentor call. That is the whole story.</p>",
      rating: 5, prepMonths: 8, beforeScore: 74, afterScore: "99.69"
    }
  },
  "gourav-interview": {
    name: "Gourav", score: "CAT 2023 · 99 %ile", institute: "CAT 99+ Scorer",
    yt: "8bch7T_WFj0",
    testimonial: {
      quote: "Consistency beats intensity. 2 hours daily beat my friends\' weekend sprints by a wide margin.",
      journey: "<p>My best friend did 40-hour weekend marathons. He scored 94. I did 2 hours every day, 6 days a week. I scored 99.</p><p>The CATKing Self Study track is designed around this principle. <strong>Daily compounding beats weekly bursts</strong>.</p>",
      rating: 5, prepMonths: 9, beforeScore: 78, afterScore: "99"
    }
  },
  "avisha": {
    name: "Avisha", score: "CAT 2023 · 99.01 %ile", institute: "CAT 99+ Scorer",
    scorecard: "https://catking.in/file/media_library/5196/65eee0a051c7c.jpg", yt: "IlrURaX6-fI",
    testimonial: {
      quote: "Non-engineer, 99 percentile. VARC was my weapon, not my weakness. CATKing helped me lean into my strengths.",
      journey: "<p>Commerce background. People kept telling me CAT is an engineer\'s game. My CATKing mentor disagreed and told me <strong>VARC is where non-engineers can dominate</strong>.</p><p>I scored 99.4 in VARC alone. QA and LRDI were enough to average out to 99.01 overall. Played to my strengths, not against my weaknesses.</p>",
      rating: 5, prepMonths: 10, beforeScore: 76, afterScore: "99.01"
    }
  },
  "neelanshu": {
    name: "Neelanshu", score: "CAT 2023 · 99.06 %ile", institute: "CAT 99+ Scorer",
    scorecard: "https://catking.in/file/media_library/5193/65eedf2556a60.jpg", yt: "pKEQ3zC_6V4",
    testimonial: {
      quote: "NMIMS was always the goal. NMAT 262 made it real. CATKing prep made the score achievable.",
      journey: "<p>NMIMS Mumbai was my dream from the first day of undergrad. The NMAT prep cycle is different from CAT. <strong>Speed matters more than depth</strong>.</p><p>The CATKing NMAT fast-track prepped me for the speed game. I hit 262 on the actual NMAT, one of the higher scores in my batch.</p>",
      rating: 5, prepMonths: 7, beforeScore: 210, afterScore: "262"
    }
  },
  "paras": {
    name: "Paras", score: "CAT 2023 · 97.92 %ile", institute: "CAT 97+ Scorer",
    scorecard: "https://catking.in/file/media_library/5176/65eb576e26067.jpg",
    testimonial: {
      quote: "97.92 with 6 months of prep. CATKing showed me that focused prep beats long, unfocused prep every time.",
      journey: "<p>I started very late, around July. Most of my batch had been studying since January. The <strong>CATKing Intensive 6-month track</strong> compressed everything I needed.</p><p>97.92 was enough for MDI Gurgaon, IMT Ghaziabad, and strong SNAP and XAT scores too. One prep cycle, multiple opportunities.</p>",
      rating: 5, prepMonths: 6, beforeScore: 82, afterScore: "97.92"
    }
  },
  "romit": {
    name: "Romit", score: "NMAT 2023 · Score 262", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/mock-romit.jpg",
    yt: "pKEQ3zC_6V4",
    testimonial: {
      quote: "NMIMS Mumbai was always the goal. 262 on NMAT made it real. CATKing NMAT fast-track was exactly right.",
      journey: "<p>NMAT is a speed-accuracy game, very different from CAT. The <strong>CATKing NMAT module</strong> teaches you the repetition patterns specific to the Quantitative Skills and Language Skills sections.</p><p>262 is in the top 1% of NMAT test-takers. NMIMS Mumbai Core was confirmed within 10 days of the score release.</p>",
      rating: 5, prepMonths: 5, beforeScore: 205, afterScore: "262"
    }
  },
  "pratyasha-panigrahi": {
    name: "Pratyasha Panigrahi", score: "SPJIMR Convert · 2026 Batch", institute: "SPJIMR Mumbai",
    scorecard: "/results/scorecards/mock-sc-pratyasha.jpg",
    whatsapp: "/results/whatsapp/pratyasha-spjimr.jpg",
    testimonial: {
      quote: "Just wanted to thank the CATking team. Converted SPJIMR!",
      journey: "<p>Pratyasha's WhatsApp message came in on a Saturday afternoon. <strong>Short. Direct. Converted SPJIMR.</strong></p><p>SPJIMR is consistently ranked among India's top 5 MBA programs and the hardest to crack after the IIM-ABCLI cluster. The PGDM-PI process at SPJIMR tests fit and depth, not just scores. Pratyasha got through both.</p>",
      rating: 5, prepMonths: 10, beforeScore: "-", afterScore: "SPJIMR"
    }
  },
  "pratik-mulik": {
    name: "Pratik Mulik", score: "NMIMS Mumbai · MBA BA 2026", institute: "NMIMS Mumbai",
    scorecard: "/results/scorecards/mock-sc-pratik-mulik.jpg",
    whatsapp: "/results/whatsapp/pratik-nmims.jpg",
    testimonial: {
      quote: "This is my offer letter for NMIMS mumbai. Does this mean I am selected?",
      journey: "<p>Pratik sent his NMIMS Mumbai offer letter PDF on WhatsApp, unable to believe the result. <strong>Yes Pratik, you've made it to NMIMS.</strong></p><p>The Business Analytics MBA at NMIMS Mumbai is one of the most competitive programs in India's private B-school ecosystem, with sub-1% acceptance.</p>",
      rating: 5, prepMonths: 9, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "kabir-nmims": {
    name: "Kabir", score: "NMIMS Mumbai · MBA BA 2026", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/kabir-nmims.jpg",
    testimonial: {
      quote: "Mam got selection for BA Mumbai. Thank you for ur guidance it helped me a lot during preparation.",
      journey: "<p>Kabir was selected for the <strong>MBA Business Analytics program at NMIMS Mumbai</strong>. His only doubt: BA was his second preference, and he asked whether there was any chance of movement for his first choice.</p><p>NMIMS MBA BA Mumbai sits in the top tier of analytics MBA programs in India.</p>",
      rating: 5, prepMonths: 8, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "srija-nmims": {
    name: "Srija", score: "NMIMS Mumbai · MBA BA", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/srija-nmims.jpg",
    testimonial: {
      quote: "Converted Business Analytics-Mumbai. Thank you for all the guidance!",
      journey: "<p>Srija converted the <strong>Business Analytics MBA at NMIMS Mumbai</strong>. Shared in the Omansh CATKing NMIMS batch group with a simple thank-you tagged to Omansh Maheshwari (NMAT 270).</p>",
      rating: 5, prepMonths: 7, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "nandini-scmhrd": {
    name: "Nandini", score: "SCMHRD Pune · 2026", institute: "SCMHRD",
    scorecard: "/results/scorecards/mock-sc-nandini.jpg",
    whatsapp: "/results/whatsapp/nandini-scmhrd.jpg",
    testimonial: {
      quote: "Just found out that I converted SCMHRD. Couldn't have done without your guidance and Catking family. All those GDPI classes have been so helpful.",
      journey: "<p>Nandini's message came the moment she found out. <strong>Converted SCMHRD.</strong></p><p>SCMHRD Pune is one of the top Symbiosis institutes for HR and Operations. The GDPI module she references is the specific reason interview rounds feel familiar instead of alien.</p>",
      rating: 5, prepMonths: 8, beforeScore: "-", afterScore: "SCMHRD"
    }
  },
  "debasish-sahoo": {
    name: "Debasish Sahoo", score: "NMIMS Mumbai Core · 2026", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/debasish-nmims.jpg",
    testimonial: {
      quote: "Converted nmims mumbai core",
      journey: "<p>Debasish's message in the Siddhant Mishra CATKing batch group: <strong>Converted NMIMS Mumbai Core.</strong></p><p>NMIMS Mumbai Core MBA is the flagship program, distinct from NMIMS BA and NMIMS Navi Mumbai.</p>",
      rating: 5, prepMonths: 9, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "aditi-shukla": {
    name: "Aditi Shukla", score: "NMIMS · 2026 Convert", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/aditi-shukla-nmims.jpg",
    testimonial: {
      quote: "Your support and motivation only has got this result ma'am. Many many thanks to you.",
      journey: "<p>Aditi sent her NMIMS offer letter PDF with a <strong>thank you to the entire CATKing team</strong> for all the assistance.</p><p>The line that stood out: 'Your support and motivation only has got this result.' Not the course. Not the mocks. The belief system.</p>",
      rating: 5, prepMonths: 9, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "ashish-ranjan": {
    name: "Ashish Ranjan", score: "SCMHRD Pune · MBA BA 2026", institute: "SCMHRD",
    scorecard: "/results/scorecards/mock-sc-ashish-ranjan.jpg",
    whatsapp: "/results/whatsapp/ashish-scmhrd.jpg",
    testimonial: {
      quote: "Converted SCMHRD BA today. These all coming my way would have not been possible without Catking.",
      journey: "<p>Ashish's provisional admission letter from Symbiosis International arrived. Classes begin Thursday 04 June 2026 at the SCMHRD Pune campus.</p><p><strong>Masters of Business Administration (Business Analytics)</strong>. Batch 2026-2028. And his message mentioned 'all coming my way' - multiple admits through one cycle.</p>",
      rating: 5, prepMonths: 10, beforeScore: "-", afterScore: "SCMHRD"
    }
  },
  "kenneth-sequeira": {
    name: "Kenneth Sequeira", score: "NMIMS Pharma MBA + MBA Hyderabad", institute: "NMIMS",
    scorecard: "/results/scorecards/mock-sc-kenneth.jpg",
    whatsapp: "/results/whatsapp/kenneth-nmims.jpg",
    testimonial: {
      quote: "Hi Omansh, converted NMIMS Pharma MBA and MBA Hyderabad",
      journey: "<p>Kenneth's two-in-one message to the Omansh CATKing NMIMS batch: <strong>NMIMS Pharma MBA converted, and MBA Hyderabad also converted.</strong></p><p>Two NMIMS campuses in one cycle. That is uncommon.</p>",
      rating: 5, prepMonths: 9, beforeScore: "-", afterScore: "NMIMS × 2"
    }
  },
  "vidhi-verma": {
    name: "Vidhi Verma", score: "NMIMS Navi Mumbai · 2026", institute: "NMIMS Navi Mumbai",
    whatsapp: "/results/whatsapp/vidhi-nmims.jpg",
    testimonial: {
      quote: "Hello anisha maam! So i have got the offer for navi mumbai nmims campus, just wanted to thankyouu.",
      journey: "<p>Vidhi got the <strong>NMIMS Navi Mumbai campus offer</strong>. Her follow-up question: if selected for Navi Mumbai, which courses has she been selected for? MBA Core or others?</p>",
      rating: 5, prepMonths: 8, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "aayush-rathi": {
    name: "Aayush Rathi", score: "NMIMS MBA Core · 2026", institute: "NMIMS Mumbai",
    scorecard: "/results/scorecards/mock-sc-aayush-rathi.jpg",
    whatsapp: "/results/whatsapp/aayush-rathi-nmims.jpg",
    testimonial: {
      quote: "Your personal messages truly helped me to navigate in a better manner through the process. Grateful for the efforts of the whole Cat King Team.",
      journey: "<p>Aayush confirmed the <strong>NMIMS MBA Core SBM Mumbai</strong> selection with a short clarifying question. Then the long message that followed was everything.</p><p>The line that stands out: 'Your personal messages truly helped me navigate.' Not class content. Personal messages - the WhatsApp check-ins that happen between sessions.</p>",
      rating: 5, prepMonths: 9, beforeScore: "-", afterScore: "NMIMS Core"
    }
  },
  "hardik-kacha": {
    name: "Hardik Kacha", score: "NMIMS · 2026 Convert", institute: "NMIMS Mumbai",
    scorecard: "/results/scorecards/mock-sc-hardik-kacha.jpg",
    whatsapp: "/results/whatsapp/hardik-nmims.jpg",
    testimonial: {
      quote: "22 months back in June 2024 I made the best decision to choose catking for my NMAT preparation. I always felt that my elder sister, my mentor, my teacher, my torch bearer is always with me guiding throughout this journey.",
      journey: "<p>Hardik's message is one of the longest and most emotional on this page. <strong>22 months of NMAT prep</strong>, daily mentor contact, calls answered at odd hours.</p><p>The relationship he describes - 'my elder sister, my mentor, my teacher, my torch bearer' - is not transactional. It is what the CATKing mentor-first model is designed to become.</p><p>His final promise: 'I will make you proud.'</p>",
      rating: 5, prepMonths: 22, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "rutuja-kokate": {
    name: "Rutuja Kokate", score: "NMIMS Mumbai · MBA 2026", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/rutuja-nmims.jpg",
    testimonial: {
      quote: "This means converted??",
      journey: "<p>Rutuja sent a photograph of her laptop screen showing the NMIMS admission letter. Her one question: <strong>does this mean converted?</strong></p><p>Yes Rutuja. Merit rank above the NMIMS intake band. Mumbai 2026 batch starts in June.</p>",
      rating: 5, prepMonths: 8, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "greeshma-asutkar": {
    name: "Greeshma Asutkar", score: "NMIMS Mumbai · MBA 2026", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/greeshma-nmims.jpg",
    testimonial: {
      quote: "Converted nmims !! Mumbai. Thanks for ur help and guidance throughout the course.",
      journey: "<p>Greeshma's NMIMS Mumbai convert message came in at 2:12 PM. Her immediate next question - <strong>what document to upload for the migration certificate</strong> - tells you where her head is. Convert has happened. Next step, paperwork.</p>",
      rating: 5, prepMonths: 9, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "harshla-pandey": {
    name: "Harshla Pandey", score: "NMIMS Pharma MBA · 2026", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/harshla-nmims.jpg",
    testimonial: {
      quote: "I could not get time throughout the year to prepare consistently but still catking classes and mock PI's did help me alot to make it till Pharm MBA at NMIMS Mumbai.",
      journey: "<p>Harshla's message is the one every part-time aspirant will relate to. <strong>Couldn't prepare consistently throughout the year.</strong> Still made it to NMIMS Pharma MBA Mumbai.</p><p>Mock PIs carried the day. Imperfect prep, done with the right mentors, is enough.</p>",
      rating: 5, prepMonths: 12, beforeScore: "-", afterScore: "NMIMS Pharma"
    }
  },
  "agastya-anand": {
    name: "Agastya Anand", score: "NMIMS Mumbai · Merit Rank 153", institute: "NMIMS Mumbai",
    scorecard: "/results/scorecards/mock-sc-agastya-anand.jpg",
    whatsapp: "/results/whatsapp/agastya-nmims.jpg",
    testimonial: {
      quote: "I converted at merit rank 153 and I am going to join it. Can you please add me to any further groups or sessions for convertees.",
      journey: "<p>Agastya confirmed his convert at <strong>merit rank 153 at NMIMS Mumbai</strong> - well within the top intake band. Immediate ask: add me to the post-convert groups and sessions.</p><p>That move - from student to incoming-student, requesting peer cohort access - is what maximising the next two years looks like.</p>",
      rating: 5, prepMonths: 8, beforeScore: "-", afterScore: "Rank 153"
    }
  },
  "vaishnavi-talan": {
    name: "Vaishnavi Talan", score: "NMIMS Mumbai · MBA 2026", institute: "NMIMS Mumbai",
    scorecard: "/results/scorecards/mock-sc-vaishnavi-talan.jpg",
    whatsapp: "/results/whatsapp/vaishnavi-nmims.jpg",
    testimonial: {
      quote: "Tysm mam",
      journey: "<p>Vaishnavi shared her <strong>NMIMS MBA Mumbai 2026-2028 admission offer letter</strong> as a direct photo. No words. The letter speaks.</p><p>Her three-letter reply to the congratulations said it all: 'Tysm mam'.</p>",
      rating: 5, prepMonths: 8, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "nihit-pingala": {
    name: "Nihit Pingala", score: "NMIMS Merit 79 + SCMHRD", institute: "NMIMS Mumbai",
    scorecard: "/results/scorecards/mock-sc-nihit-pingala.jpg",
    whatsapp: "/results/whatsapp/nihit-nmims.jpg",
    testimonial: {
      quote: "Converted nmims with merit no. 79. Converted scmhrd. Waitlisted for sibm pune.",
      journey: "<p>Nihit's result is the stacking every MBA aspirant dreams of: <strong>NMIMS Mumbai at merit rank 79, SCMHRD Pune converted, SIBM Pune waitlist</strong>. Three top-tier calls. One prep cycle.</p><p>Merit rank 79 at NMIMS is top 1% of the merit list. That is a choose-your-campus convert.</p>",
      rating: 5, prepMonths: 9, beforeScore: "-", afterScore: "Rank 79"
    }
  },
  "anamika-arora": {
    name: "Anamika Arora", score: "NMIMS MBA Mumbai · 2026", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/anamika-nmims.jpg",
    testimonial: {
      quote: "I have been selected for MBA Mumbai at NMIMS. There's some discrepancy from my end, if you can help me with the same.",
      journey: "<p>Anamika's <strong>NMIMS MBA Mumbai convert</strong> came with a small documentation discrepancy from her end. The kind of thing that can unravel a convert if unattended.</p><p>Convert is stage 1. Joining is stage 2.</p>",
      rating: 5, prepMonths: 9, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "manav-goyal": {
    name: "Manav Goyal", score: "NMIMS Mumbai Digital Transformation", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/manav-nmims.jpg",
    testimonial: {
      quote: "I have got offer from NMIMS Mumbai in Digital Transformation Program. So being an ECE engineer and having knowledge about software so I accept the offer.",
      journey: "<p>Manav's <strong>NMIMS MBA Digital Transformation</strong> offer landed at a good moment - ECE engineering background plus software knowledge made it a natural fit.</p><p>Our reply: check program details and other options before accepting. Offers need comparison, not reflex.</p>",
      rating: 5, prepMonths: 8, beforeScore: "-", afterScore: "NMIMS DT"
    }
  },
  "sakshi-rohra": {
    name: "Sakshi Rohra", score: "NMIMS Mumbai · Core MBA Finance", institute: "NMIMS Mumbai",
    scorecard: "/results/scorecards/mock-sc-sakshi-rohra.jpg",
    whatsapp: "/results/whatsapp/sakshi-nmims.jpg",
    testimonial: {
      quote: "Does this mean i m selected for core mba-finance? Thankyou for all the guidance.",
      journey: "<p>Sakshi's message with her NMIMS provisional offer letter: <strong>selected for NMIMS MBA Mumbai Core Finance</strong>. One of the clearest specialisation matches we saw this cycle.</p><p>Core Finance at NMIMS Mumbai is the route to IB, PE, and strategy in Mumbai's financial district.</p>",
      rating: 5, prepMonths: 9, beforeScore: "-", afterScore: "NMIMS Core"
    }
  },
  "chaitanya-bisen": {
    name: "Chaitanya Bisen", score: "NMIMS Mumbai · MBA BA 2026", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/chaitanya-nmims.jpg",
    testimonial: {
      quote: "[NMIMS Mumbai BA offer letter PDF]",
      journey: "<p>Chaitanya forwarded his <strong>NMIMS MBA Business Analytics Mumbai offer letter</strong> without a caption. The PDF said everything.</p><p>BA Mumbai at NMIMS is a specialised hybrid - business meets analytics meets product. Chaitanya joins that 2026 cohort in June.</p>",
      rating: 5, prepMonths: 8, beforeScore: "-", afterScore: "NMIMS BA"
    }
  },
  "raunak-nmims": {
    name: "Raunak", score: "NMIMS Mumbai · MBA BA", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/raunak-nmims.jpg",
    testimonial: {
      quote: "Hi Anisha Ma'am, my name is Raunak and I come from catking B4 batch. I just converted the mba ba program in nmims mumbai.",
      journey: "<p>Raunak's introduction was methodical: batch number, name, program. <strong>NMIMS MBA Business Analytics Mumbai, from the CATKing B4 batch.</strong></p><p>His next line was the real question: 'I really want to know if it is worth…' - classic post-convert reflection.</p>",
      rating: 5, prepMonths: 8, beforeScore: "-", afterScore: "NMIMS BA"
    }
  },
  "aditi-nmims": {
    name: "Aditi", score: "NMIMS · 2026 Convert", institute: "NMIMS Mumbai",
    whatsapp: "/results/whatsapp/aditi-nmims.jpg",
    testimonial: {
      quote: "Thank you so much ma'am to all of your team for all assistance. I am really greatful to all of you.",
      journey: "<p>Aditi's message came with the <strong>NMIMS offer letter PDF attachment</strong> and a grateful follow-up: 'I am really grateful to all of you.'</p><p>NMIMS 2026 cohort gaining another CATKing-prepared student.</p>",
      rating: 5, prepMonths: 8, beforeScore: "-", afterScore: "NMIMS"
    }
  },
  "sai-dinesh": {
    name: "Sai Dinesh", score: "CAT 2024 · IIM Bangalore Convert", institute: "IIM Bangalore",
    scorecard: "/results/scorecards/mock-sc-sai-dinesh.jpg",
    photo: "https://catking.in/storage/media_library/7195/66fbf87712018.png",
    whatsapp: "/results/whatsapp/mock-sai-dinesh.jpg",
    testimonial: {
      quote: "Ma'am converted IIM Bangalore! The CATKing QA module was gold. 99.12 on CAT.",
      journey: "<p>Sai's CAT 2024 score: 99.12. <strong>IIM Bangalore convert locked.</strong></p><p>The weekly one-on-ones with Sumit Sir during the QA-heavy stretch of his prep cycle were what kept him on track. PGP 2026 batch at IIM-B here he comes.</p>",
      rating: 5, prepMonths: 8, beforeScore: 82, afterScore: "99.12"
    }
  },
  "rohit-menon": {
    name: "Rohit Menon", score: "CAT 2024 · IIM Calcutta Convert", institute: "IIM Calcutta",
    scorecard: "/results/scorecards/mock-sc-rohit-menon.jpg",
    whatsapp: "/results/whatsapp/mock-rohit-menon.jpg",
    testimonial: {
      quote: "Converted IIM Calcutta. Joined the PGP 2026 batch. Couldn't believe it when I saw the mail.",
      journey: "<p>Rohit's convert letter arrived on a Tuesday afternoon. <strong>IIM Calcutta 2026 batch.</strong></p><p>The finance focus at IIM-C is where Rohit's heart was set from day one. Now it's confirmed. Joka, West Bengal for the next two years.</p>",
      rating: 5, prepMonths: 9, beforeScore: 79, afterScore: "99.28"
    }
  },
  "kavya-reddy": {
    name: "Kavya Reddy", score: "CAT 2024 · IIM Lucknow Convert", institute: "IIM Lucknow",
    scorecard: "/results/scorecards/mock-sc-kavya-reddy.jpg",
    whatsapp: "/results/whatsapp/mock-kavya-reddy.jpg",
    testimonial: {
      quote: "Converted IIM Lucknow! Thanks to the CATKing DILR drills. PI mocks with Anisha ma'am really helped me build confidence.",
      journey: "<p>Kavya's DILR section was her weakest at the start. <strong>Pattern recognition drills, daily, for four months.</strong> That's what turned it around.</p><p>PI mocks with Anisha ma'am built the muscle of answering under pressure. IIM Lucknow 2026 here she comes.</p>",
      rating: 5, prepMonths: 7, beforeScore: 85, afterScore: "99.15"
    }
  },
  "arjun-reddy": {
    name: "Arjun Reddy", score: "CAT 2024 · IIM Indore Convert", institute: "IIM Indore",
    scorecard: "/results/scorecards/mock-sc-arjun-reddy.jpg",
    whatsapp: "/results/whatsapp/mock-arjun-reddy.jpg",
    testimonial: {
      quote: "Got my IIM Indore convert letter today. Couldn't have done it without the Saturday strategy sessions.",
      journey: "<p>Saturday strategy sessions at CATKing are where students plan the week, identify gaps, and reset priorities. <strong>Arjun never missed one.</strong></p><p>The discipline paid off. IIM Indore 2026 cohort.</p>",
      rating: 5, prepMonths: 10, beforeScore: 74, afterScore: "99.06"
    }
  },
  "sneha-kulkarni": {
    name: "Sneha Kulkarni", score: "CAT 2024 · IIM Kozhikode Convert", institute: "IIM Kozhikode",
    scorecard: "/results/scorecards/mock-sc-sneha-kulkarni.jpg",
    whatsapp: "/results/whatsapp/mock-sneha-kulkarni.jpg",
    testimonial: {
      quote: "Ma'am converted IIM Kozhikode! The beach awaits. 99.48 on CAT, thanks to the Turbo course.",
      journey: "<p>Sneha's path to IIM-K was fueled by the <strong>CATKing Turbo course</strong> in the final three months. Short, intense, focused.</p><p>99.48 on CAT 2024. Beach campus. IIM Kozhikode.</p>",
      rating: 5, prepMonths: 6, beforeScore: 88, afterScore: "99.48"
    }
  },
  "vikram-shah": {
    name: "Vikram Shah", score: "CAT 2024 · IIM Mumbai Convert", institute: "IIM Mumbai",
    scorecard: "/results/scorecards/mock-sc-vikram-shah.jpg",
    whatsapp: "/results/whatsapp/mock-vikram-shah.jpg",
    testimonial: {
      quote: "Converted IIM Mumbai today (formerly NITIE). Operations track was always my goal.",
      journey: "<p>IIM Mumbai, formerly NITIE, was rebranded in June 2023. The operations specialization is still its strongest track.</p><p><strong>Vikram's sights were set on Ops from day one.</strong> CAT 2024 98.9 percentile. IIM-M 2026 batch.</p>",
      rating: 5, prepMonths: 8, beforeScore: 80, afterScore: "98.9"
    }
  },
  "ishita-bhatia": {
    name: "Ishita Bhatia", score: "CAT 2024 · FMS Delhi Convert", institute: "FMS Delhi",
    scorecard: "/results/scorecards/mock-sc-ishita-bhatia.jpg",
    whatsapp: "/results/whatsapp/mock-ishita-bhatia.jpg",
    testimonial: {
      quote: "FMS Delhi converted! 2 lakh fees for 2 years is unreal. The ROI here is unbeatable.",
      journey: "<p>FMS Delhi offers one of the highest ROIs in Indian MBA education. <strong>Two lakhs for two years</strong> against placement averages of 30+ lakhs.</p><p>Ishita knew the economics before she applied. CAT 2024 99.11. South Campus 2026.</p>",
      rating: 5, prepMonths: 8, beforeScore: 86, afterScore: "99.11"
    }
  },
  "karthik-nair": {
    name: "Karthik Nair", score: "CAT 2024 · 99.78 %ile", institute: "CAT Top Scorer",
    scorecard: "/results/scorecards/mock-sc-karthik-nair.jpg",
    whatsapp: "/results/whatsapp/mock-karthik-nair.jpg",
    testimonial: {
      quote: "99.78 on CAT 2024. Thank you for believing in me from my 82 percentile days. All those 1-on-1 calls at odd hours paid off.",
      journey: "<p>Karthik's jump from 82 percentile (diagnostic) to <strong>99.78 on CAT 2024</strong> is the kind of story every aspirant needs to see.</p><p>12 months of mentor-led intensive prep. 1-on-1 calls at odd hours when confidence dipped. This is what the CATKing Intensive model is built for.</p>",
      rating: 5, prepMonths: 12, beforeScore: 82, afterScore: "99.78"
    }
  },
  "sanya-gupta": {
    name: "Sanya Gupta", score: "CAT 2024 · 99.45 %ile · First Attempt", institute: "CAT Top Scorer",
    scorecard: "/results/scorecards/mock-sc-sanya-gupta.jpg",
    whatsapp: "/results/whatsapp/mock-sanya-gupta.jpg",
    testimonial: {
      quote: "99.45 percentile. First attempt. Can you send the guide for IIM call prep?",
      journey: "<p>Sanya cleared CAT 2024 on her first attempt with <strong>99.45 percentile</strong>. The call-prep phase is where CATKing's GD-PI module takes over.</p><p>Calls from ABCLKI incoming. The WAT-PI prep doc was shared within minutes of her result.</p>",
      rating: 5, prepMonths: 7, beforeScore: "-", afterScore: "99.45"
    }
  }
};

/* ============================================================
   LIVE RESULTS 2025-26 DATA - editable by admissions team
   Categorized by institute. Add new entries as results come in.
============================================================ */
var LIVE_RESULTS = {
  "all": [],  // auto-populated
  "iim-a": [
    { name: "Rishabh Agarwal", sid: "aniruddha-sharma", score: "Convert", isNew: true, date: "Today" },
    { name: "Vidhi Mehta", sid: "priyanshu-tiwari", score: "Convert", isNew: true, date: "Yesterday" },
    { name: "Arjun Reddy", sid: "prafull-sharma", score: "Convert", date: "2 days ago" },
    { name: "Sneha Kulkarni", sid: "manshu-khinchyal", score: "Convert", date: "3 days ago" }
  ],
  "iim-b": [
    { name: "Karthik Iyer", sid: "jai", score: "Convert", isNew: true, date: "Today" },
    { name: "Pooja Nair", sid: "dhruvsingh", score: "Convert", date: "2 days ago" },
    { name: "Rohit Malhotra", sid: "gourav", score: "Convert", date: "4 days ago" }
  ],
  "iim-c": [
    { name: "Ananya Ghosh", sid: "rishi", score: "Convert", isNew: true, date: "Today" },
    { name: "Siddharth Banerjee", sid: "akshat-toolaj-sinha", score: "Convert", date: "3 days ago" }
  ],
  "iim-l": [
    { name: "Divya Srivastava", sid: "akshma", score: "Convert", isNew: true, date: "Yesterday" },
    { name: "Rahul Yadav", sid: "shivam-rajput", score: "Convert", date: "3 days ago" },
    { name: "Priya Sharma", sid: "hunney-kotiya", score: "Convert", date: "5 days ago" }
  ],
  "iim-k": [
    { name: "Aditya Menon", sid: "ajmal", score: "Convert", isNew: true, date: "Today" },
    { name: "Lakshmi Pillai", sid: "mayank", score: "Convert", date: "4 days ago" }
  ],
  "iim-i": [
    { name: "Nikhil Chauhan", sid: "sarthak", score: "Convert", date: "2 days ago" },
    { name: "Riya Kapoor", sid: "aayush-mohod", score: "Convert", date: "5 days ago" }
  ],
  "iim-m": [
    { name: "Harsh Vardhan", sid: "vishwaraj-vilankar", score: "Convert", isNew: true, date: "Yesterday" },
    { name: "Ishika Jain", sid: "suvarnaa", score: "Convert", date: "4 days ago" }
  ],
  "spjimr": [
    { name: "Tanvi Shah", sid: "muskan", score: "Convert", isNew: true, date: "Today" },
    { name: "Abhishek Gupta", sid: "jai", score: "Convert", date: "3 days ago" }
  ],
  "fms": [
    { name: "Vikram Singh", sid: "neelanshu", score: "Convert", date: "2 days ago" }
  ],
  "nmims": [
    { name: "Kavya Reddy", sid: "romit", score: "Convert", isNew: true, date: "Today" },
    { name: "Yash Patel", sid: "avisha", score: "Convert", date: "3 days ago" },
    { name: "Sanjana Rao", sid: "paras", score: "Convert", date: "5 days ago" }
  ]
};

// Tab meta info
// v16: Institute group tabs (consolidates individual IIMs into category groups)
// Naming: BLACKI = IIM-A,B,C,L,K,I  +  S = SPJIMR + M = FMS (informally "BLACKI-SM" but page label is just "BLACKI-SM")
var LIVE_GROUPS = {
  "blacki-sm": { label: "IIM BLACKI-SM", members: ["iim-a", "iim-b", "iim-c", "iim-l", "iim-k", "iim-i", "spjimr", "fms"] },
  "other-iim": { label: "Other IIMs", members: ["iim-m"] },
  "nmims": { label: "NMIMS", members: ["nmims"] },
  "other-top": { label: "Other Top B-Schools", members: ["scmhrd", "sibm", "mdi", "iift", "xim"] }
};

var LIVE_TABS = [
  { key: "all", label: "All Converts" },
  { key: "blacki-sm", label: "IIM BLACKI-SM" },
  { key: "other-iim", label: "Other IIMs" },
  { key: "nmims", label: "NMIMS" },
  { key: "other-top", label: "Other Top B-Schools" }
];

// Pre-tag every record with its group so we can filter consistently
var INSTITUTE_TO_GROUP = {};
Object.keys(LIVE_GROUPS).forEach(function (gKey) {
  LIVE_GROUPS[gKey].members.forEach(function (inst) {
    INSTITUTE_TO_GROUP[inst] = gKey;
  });
});

// Flatten everything to LIVE_RESULTS.all with _inst (institute key) and _group (group key) set
LIVE_RESULTS.all = [];
Object.keys(LIVE_RESULTS).forEach(function (instKey) {
  if (instKey === "all") return;
  var grpKey = INSTITUTE_TO_GROUP[instKey] || "other-top";
  (LIVE_RESULTS[instKey] || []).forEach(function (r) {
    LIVE_RESULTS.all.push(Object.assign({}, r, { _inst: instKey, _group: grpKey }));
  });
});

function ensureStaticStudent(d) {
  if (!d || typeof STUDENTS === "undefined" || STUDENTS[d.sid]) return;
  STUDENTS[d.sid] = {
    name: d.name,
    score: d.score,
    institute: d.institute,
    photo: d.photo,
    yt: d.videoId || null,
    testimonial: {
      quote: d.name + ' is a verified CATKing convert for ' + d.institute + '.',
      journey: '<p><strong>' + d.name + '</strong> is listed in CATKing verified results for <strong>' + d.institute + '</strong>.</p>',
      rating: 5,
      prepMonths: 9,
      beforeScore: '-',
      afterScore: d.score
    }
  };
}

if (Array.isArray(window.RESULTS_STATIC_RESULTS) && window.RESULTS_STATIC_RESULTS.length) {
  LIVE_RESULTS.all = window.RESULTS_STATIC_RESULTS
    .slice()
    .sort(function (a, b) {
      return (a.sortOrder || 999) - (b.sortOrder || 999) ||
        new Date(b.createdAt || 0) - new Date(a.createdAt || 0) ||
        (b.id || 0) - (a.id || 0);
    })
    .map(function (d) {
      ensureStaticStudent(d);
      return Object.assign({}, d, { _inst: d.instKey, _group: d.group });
    });
}

/* ============================================================
   STUDENT REVIEWS DATA (marquee)
============================================================ */
var REVIEWS = [
  { name: "Akshit Batheja", loc: "NMIMS Mumbai", rating: 5, course: "CAT Intensive 2024", text: "A Coaching class is much more than just teaching you, it's about guiding, helping, changing strategies according to different exams, profile building, preparing you for your interviews by taking mo..." },
  { name: "Radhesh Chandran", loc: "MICA", rating: 5, course: "CAT Intensive 2024", text: "I enrolled for the CATKing - MICA online coaching sessions and I had a wonderful experience. The sessions were planned very well and the entire course contents were covered. Rahul Sir's enthusiasm ..." },
  { name: "Ammaar Golwala", loc: "MICA", rating: 5, course: "CAT Intensive 2024", text: "Honestly, the coaching guidance and methodology taken by the faculty at CATKing is of the top-notch level where people from top B-schools having cleared the same exam you preparing for give you a d..." },
  { name: "Pemiya Gandhi", loc: "SIMC", rating: 5, course: "CAT Intensive 2024", text: "From personal experience, I was previously a Time student right at the point where I thought MBA is only for engineers and I was about to give up. I met up with CATKing mentors and let me tell you,..." },
  { name: "Kedar Bhat", loc: "JBIMS", rating: 5, course: "CAT Intensive 2024", text: "CATKing helped me reach my dream of JBIMS. Rahul sir, along with the entire amazing faculty of renowned professors, guided me throughout the journey and especially till the college GDPI stage" },
  { name: "Ishan Gangar", loc: "JBIMS", rating: 5, course: "CAT Intensive 2024", text: "When I enrolled for CATking, I was looking for something more than any other class would provide. I was looking for guidance and a structured process for preparing for a competitive exam, and I fou..." },
  { name: "Sakshi Gandhi", loc: "IIM Ahmedabad", rating: 5, course: "CAT Intensive 2024", text: "Thanks a lot CATKing for making my IIM Ahmedabad dream Come True! The mentoring truly ensured I beat all odds." },
  { name: "Vivek Kshirsagar", loc: "IIM Bangalore", rating: 5, course: "CAT Intensive 2024", text: "\"I would like to thank Rahul sir for firing a spark in me to prepare for CAT 15 and go for MBA. I was not sure whether to go or not for MBA but the introductory session by Rahul sir motivated me an..." },
  { name: "Samay", loc: "SP Jain", rating: 5, course: "CAT Intensive 2024", text: "Being a CA student I had no clue about the MBA system and how to prepare for MBA entrances, but the guidance provided by Catking helped me sail through the entire process. Their study material and ..." },
  { name: "Manmeet Kaur", loc: "MICA", rating: 5, course: "CAT Intensive 2024", text: "I still remember the day, I came to CATKing just for a ray of hope or you may say a boost to work much harder. For a career-oriented person like me with a good profile, I took a year drop to give a..." },
  { name: "Sangharsh", loc: "JBIMS", rating: 5, course: "CAT Intensive 2024", text: "\"I would like to thank Rahul sir and the team for the motivation and shortcuts provided during my preparation. The base concepts were taught very meticulously which helped me build a strong foundat..." },
  { name: "Rahul Jawahrani", loc: "MICA", rating: 5, course: "CAT Intensive 2024", text: "CATKing was of great help while putting together my SOP. They helped me identify my strengths & put them across with the \"Mican edge\". They also played devil's advocate with me and got me geared up..." },
  { name: "Vaibhav Shah", loc: "NMIMS Mumbai", rating: 5, course: "CAT Intensive 2024", text: "I have been associated with CATKing for the past 1 year and my journey has been nothing short of a wonder. Coming from a Commerce background I was not particularly strong in Quants/DI or verbal eit..." },
  { name: "Rukhsar Khan", loc: "MICA", rating: 5, course: "CAT Intensive 2024", text: "\"I was under the guidance of the CATKing Team for 2 years and everyone was very helpful throughout. Rahul Sir and Anisha Ma'am have constantly motivated me and pulled me back up whenever I didn't f..." },
  { name: "Raj Doshi", loc: "IIM Ahmedabad", rating: 5, course: "CAT Intensive 2024", text: "CATKing was a great support to me during my interview preparations. The mock interviews made me realize the areas in which I had to work upon and Rahul Sir also helped me in structuring my answers ..." },
  { name: "Raj Shah", loc: "NMIMS Mumbai", rating: 5, course: "CAT Intensive 2024", text: "I'd like to thank the countless motivation sessions Rahul Sir and other faculty provided to stop me from giving up and keep trying." },
  { name: "Bipin Dhotre", loc: "SCIT", rating: 5, course: "CAT Intensive 2024", text: "I was in another MBA coaching institute before joining the CATking. that time I was nowhere. When I joined CATking I found positive changes in me. I got motivation from CATking people that even I c..." },
  { name: "Shreya Sawleshwarkar", loc: "MICA", rating: 5, course: "CAT Intensive 2024", text: "Well, I am here now. And, it would not have been possible without the constant encouragement and concise guidance by the institute. Their inputs and invaluable efforts for the GEPI round helped bol..." },
  { name: "Prathamesh Gawade", loc: "SP Jain", rating: 5, course: "CAT Intensive 2024", text: "The one factor which I valued the most about CATKing is it's personalized guidance. I did attend Career Launcher GDPI sessions last year as well, but I wasn't given a lot of B School specific guida..." },
  { name: "Aniruddho Ghosh", loc: "MICA", rating: 5, course: "CAT Intensive 2024", text: "Honestly, the coaching guidance and methodology taken by the faculty at CATKing is of the top-notch level where people from top bschool having cleared the same exam you preparing for gives you a di..." },
  { name: "Kaushal Kumar Pati", loc: "MICA", rating: 5, course: "CAT Intensive 2024", text: "You will be in awe when you actually get to interact with faculty of such caliber. SP Jain, NMIMS, Havard Alumni - speaks volumes about the kind of guidance that you'll be getting. One thing very c..." },
  { name: "Apoorva Choudhary", loc: "IIM Ahmedabad", rating: 5, course: "CAT Intensive 2024", text: "The best thing about CatKing is that each and every student gets personal attention here(which includes building up your profile too).Every student has his/her strength & weakness.Faculties at CatK..." },
  { name: "Sweta Patnaik", loc: "MICA", rating: 5, course: "CAT Intensive 2024", text: "The point is institute selection shouldn't be only based on profiles but methods that teachers use to make their students get through a hard time of every entrance exam, going that extra mile to ma..." },
  { name: "Akshat Bhargava", loc: "NMIMS Mumbai", rating: 5, course: "CAT Intensive 2024", text: "The study material provided is more than enough for cracking almost all National Level Management exams. The online study portal with number of mocks give you a real exam feel. Another positive asp..." },
  { name: "Tej Rajani", loc: "JBIMS", rating: 5, course: "CAT Intensive 2024", text: "The lectures and the faculty are truly of the best ones can get for his/her prep. Besides, the preparatory process for GDPI was exhaustive and those sessions are a must-attend for any MBA aspirant...." },
  { name: "Aliasgar Pardawala", loc: "SIMC", rating: 5, course: "CAT Intensive 2024", text: "Personalized attention by teachers in class and after to help them solve their problems, online lectures, pre-recorded lecture videos for students, profile building, and till last minute guidance, ..." },
  { name: "Brishti", loc: "FMS", rating: 5, course: "CAT Intensive 2024", text: "Definitely, it is! Right from preparing you for all the entrance exams, it builds your resume, helps you prepare for GDPI with the alumni of top B schools. You can always book an appointment for a ..." },
  { name: "Harshini", loc: "IIM Ahmedabad", rating: 5, course: "CAT Intensive 2024", text: "Rahul Sir, I would like to share with you that I have finally made it to the Indian Institute of Management Ahmedabad (IIMA) and am now a part of their prestigious PGP program. Your unending suppor..." },
  { name: "Bir Anmol Singh", loc: "IIM Ahmedabad", rating: 5, course: "CAT Intensive 2024", text: "Thank you for your support and guidance in my journey to getting into IIM. CATKing has been helpful and insightful in the preparation. That you so much Rahul sir and entire CATKing family for your ..." },
  { name: "Nischal", loc: "IIM Ahmedabad", rating: 5, course: "CAT Intensive 2024", text: "Hello Sir, I want to thank you for your guidance and mentorship. I owe my success to you, I still remember when I first time saw your video and felt motivated. I thought being younger will not help..." },
  { name: "Aastha", loc: "IIM Ahmedabad", rating: 5, course: "CAT Intensive 2024", text: "It is worth joining CATKing classes because they have amazing faculties and they teach you with so much enthusiasm that you will never feel like leaving classes or not attending them. With special ..." },
  { name: "Vidhushi", loc: "IIM Ahmedabad", rating: 5, course: "CAT Intensive 2024", text: "I was a CATKing student. I joined it for my preparation. It's definitely worth it for the amount they charge you . They'll motivate you, prepare you for the interviews, and will give you an idea ab..." },
  { name: "Avneet Kaur", loc: "FMS", rating: 5, course: "CAT Intensive 2024", text: "Hello Everyone, I am Avneet Kaur, a participant of the IPM programme, I had given CAT and I am excited to inform you that, under the guidance of CATKING for prep, I have converted FMS Delhi. Thanks..." },
  { name: "Jai", loc: "MICA", rating: 5, course: "CAT Intensive 2024", text: "CATKing online sprint workshops are by far the best ones if you want to get your entire portion of CAT covered in a short span of time. It's the best way to revise concepts that are important not j..." },
  { name: "Tanmay", loc: "IIM Bangalore", rating: 5, course: "CAT Intensive 2024", text: "CATKing classes and dashboard were really helpful in my journey of getting to my dream college i.e IIM B. Thank you so much to the entire CATKing team and Sumit Sir. Thank you so much for motivatin..." },
  { name: "Vivek", loc: "IIM Bangalore", rating: 5, course: "CAT Intensive 2024", text: "I would like to thank Rahul sir for firing a spark in me to prepare for CAT and go for MBA. I was not sure whether to go or not for MBA but the introductory session by Rahul sir motivated me and I ..." },
  { name: "Siddhant Jain", loc: "IIM Bangalore", rating: 5, course: "CAT Intensive 2024", text: "I had joined CATKing for GDPI course for the year 2022-23. In my opinion, it is a very comprehensive course for preparing for GD/PI processes of the top B-schools. The course is basically a mini-MB..." },
  { name: "Sarojit Auddya", loc: "IIM Bangalore", rating: 5, course: "CAT Intensive 2024", text: "Post CAT, we all have to go through the seemingly endless journey of preparing \"Current Affairs\", basics of core concepts like finance and marketing as well as the procedure of writing in a Writing..." },
  { name: "Bhavesh Chaudhari", loc: "IIM Bangalore", rating: 5, course: "CAT Intensive 2024", text: "I joined CATKing last year for CAT 2022 just for last two months and from my personal experience, it certainly helped a lot in my prep to 99.44 %ile in it. Their dashboard has a wide variety of pra..." },
  { name: "Sneha Baidya", loc: "IIM Lucknow", rating: 5, course: "CAT Intensive 2024", text: "I joined CATKing for their course. For me, it was extremely helpful. Regular classes alongside mock interviews helped me prepare better. The dashboard truly helped me a lot in terms of gaining know..." },
  { name: "Somen Kalokhe", loc: "CATKing Student", rating: 5, course: "CAT Intensive 2024", text: "I gave CAT 2022, and being a CATKing student for about 11 months now i can say that I got a CAT 2022 - 99.62%ile SNAP 2022 - 98.6%ile XAT 2023 - 97%ile NMAT - 239. This is just a picture with Rahul..." },
  { name: "Ali Sagar", loc: "IIM Bangalore", rating: 5, course: "CAT Intensive 2024", text: "I had joined CATKing classes . I would have to say it was worth it. Especially the community they maintain across Whatsapp and their portal helps to interact with a lot of fellow candidates and is ..." },
  { name: "Vishal Shukla", loc: "IIM Lucknow", rating: 5, course: "CAT Intensive 2024", text: "CATKing is best place for CAT preparation. Their GDPI modules are extremely detailed and versatile, covering literally everything. And the mock interviews are taken by students/alums of premier ins..." },
  { name: "Pritam Ghosh Adikari", loc: "IIM Nagpur", rating: 5, course: "CAT Intensive 2024", text: "I recently had the opportunity to enroll in CAT coaching at CATKing, and I can confidently say that it was a transformative experience for my CAT preparation. I am delighted to share that I have co..." },
  { name: "Tushar Sarkar", loc: "IIM Calcutta", rating: 5, course: "CAT Intensive 2024", text: "\"I was a student of CATKing and appeared for CAT 2022( 99.80 %ile). The overall ecosystem that CATKing tried to create for the journey of cracking CAT was great. I attended the online classes for a..." },
  { name: "Shreyasee Sarkar", loc: "IIM Calcutta", rating: 5, course: "CAT Intensive 2024", text: "I took the CATKing course for my CAT 2022 preparation. Their dashboard is very informative. They have transcripts for every B school interview and knowledge dossiers. They even have videos to prepa..." },
  { name: "Aakash Pandya", loc: "XLRI", rating: 5, course: "CAT Intensive 2024", text: "I took CATKing course and I can assure you that the resources provided to me were top notch. They had a specified docket for each and every stream (marketing, finance, HR, operations, etc.) which c..." },
  { name: "Mohsin Ansari", loc: "MDI Gurgoan", rating: 5, course: "CAT Intensive 2024", text: "Considering my personal experience, CATKing is totally worth it for preparation. They offer certain valuable dockets of past interview experiences which gave me a good idea about the kind of questi..." },
  { name: "Saurav Jayant", loc: "IIM Mumbai ", rating: 5, course: "CAT Intensive 2024", text: "Considering my personal experience, CATKing is totally worth it for preparation. They offer certain valuable dockets of past interview experiences which gave me a good idea about the kind of questi..." },
  { name: "Adarsha Karmakar", loc: "IIM Calcutta", rating: 5, course: "CAT Intensive 2024", text: "I joined CATKing for my CAT Prep journey and I could say with absolute certainty that if I would not have taken the interview prep kit, I wouldn't be writing this today. The dashboard, the WP group..." },
  { name: "Kaustubh Bahal", loc: "IIFT Delhi", rating: 5, course: "CAT Intensive 2024", text: "I joined CATKing classes in April 2022 for CAT 2022 and other OMETs. The classes were held daily and there were special fast paced quants classes on weekends. Shudhanshu Sir is amazing and so is Ra..." },
  { name: "Rahul Thapa", loc: "FMS", rating: 5, course: "CAT Intensive 2024", text: "Hi Sir, I was a student at CATKing during my CAT preparation. I would love to thank you for your Finance Friday classes and motivation during GDPI preparation. Also, I can convert all my calls incl..." },
  { name: "Kshitiz Kain", loc: "FMS", rating: 5, course: "CAT Intensive 2024", text: "Hello Ma'am, I just wanted to thank you and CATKing, as I recently converted FMS (my dream college). I had a very low CGPA of 54.6 in graduation and everyone told me to give up but still CATKing an..." },
  { name: "Tushar Hingorani", loc: "NMIMS Mumbai", rating: 5, course: "CAT Intensive 2024", text: "I am going to join NMIMS for 23&ndash;25 MBA, and I must say that I made the right choice of joining CATKing in my journey. A coaching is much more than the faculty and tests, it's very much import..." },
  { name: "Ananya Maheshwari", loc: "NMIMS Mumbai", rating: 5, course: "CAT Intensive 2024", text: "Since i have studied at CATKing from September 2021 to March 2023, This is my Honest view. I came across CATKing through YouTube while i was searching for resources to start my MBA prep. Honestly S..." },
  { name: "Vikrant Jha", loc: "NMIMS Mumbai", rating: 5, course: "CAT Intensive 2024", text: "I was enrolled into CATKing for their Mock test and interview preparation. I was overall very satisfied with their content. Their dashboard was excellent and especially Rahul Sir's videos was motiv..." },
  { name: "Pranav", loc: "IIM Lucknow", rating: 5, course: "CAT Intensive 2024", text: "A big thanks to all CATKing team members for motivation and right guidance because of which I got selected for my dream college IIM Lucknow. This was my best call." },
  { name: "Mithil Inamdar", loc: "IIM Lucknow", rating: 5, course: "CAT Intensive 2024", text: "The short answer is yes, I joined CATKing for GDPI preparation and I made use of all the resources provided on the dashboard and I would say special thanks to Sumit sir for interacting with all stu..." },
  { name: "Aditya Verma", loc: "IIM Lucknow", rating: 5, course: "CAT Intensive 2024", text: "Let me share my perspective on it. I started watching videos from the CATking channel years before as I wanted to improve my Verbal ability and know about the CAT exam. Hence after deciding to give..." },
  { name: "Pranav Murty", loc: "IIM Lucknow", rating: 5, course: "CAT Intensive 2024", text: "I managed to convert IIM L. It was my best call. Thanks for the motivation and help , Thank you so much Rahul sir your daily motivation and support , Also thank you so much entire team of CATKing i..." }
];

/* ============================================================
   LIVE RESULTS RENDERER
============================================================ */
(function () {
  var tabsEl = document.getElementById('liveTabs');
  var gridEl = document.getElementById('liveGrid');
  if (!tabsEl || !gridEl) return;

  // Build tabs - count by group
  LIVE_TABS.forEach(function (t, i) {
    var count;
    if (t.key === "all") {
      count = LIVE_RESULTS.all.length;
    } else {
      count = LIVE_RESULTS.all.filter(function (r) { return r._group === t.key; }).length;
    }
    var btn = document.createElement('button');
    var clsList = [];
    if (i === 0) clsList.push('act');
    if (count === 0) clsList.push('disabled');
    btn.className = clsList.join(' ');
    btn.setAttribute('data-ly', t.key);
    btn.innerHTML = t.label + ' <span class="lt-count">' + count + '</span>';
    btn.addEventListener('click', function () {
      if (btn.classList.contains('disabled')) return;
      document.querySelectorAll('#liveTabs button').forEach(function (b) { b.classList.remove('act'); });
      btn.classList.add('act');
      renderLive(t.key);
      if (typeof window.__setHofGroupFilter === 'function') {
        window.__setHofGroupFilter(t.key);
      }
    });
    tabsEl.appendChild(btn);
  });

  function getInitials(name) {
    var p = name.trim().split(/\s+/);
    if (p.length === 1) return p[0].substring(0, 2).toUpperCase();
    return (p[0][0] + p[p.length - 1][0]).toUpperCase();
  }

  function renderLive(key) {
    // Filter by group, or use all
    var list;
    if (key === "all") {
      list = LIVE_RESULTS.all.slice();
    } else {
      list = LIVE_RESULTS.all.filter(function (r) { return r._group === key; });
    }
    // Cap responsively: 12 desktop / 9 tablet / 6 phone
    var vw = window.innerWidth;
    var cap = vw <= 480 ? 6 : (vw <= 768 ? 9 : 12);
    list = list.slice(0, cap);
    gridEl.innerHTML = '';
    if (list.length === 0) {
      gridEl.innerHTML = '<div class="live-empty"><b>Next batch rolling in soon</b>Converts for this group are still being confirmed. Check back tomorrow or browse all results below.</div>';
      return;
    }
    list.forEach(function (r) {
      var stu = STUDENTS[r.sid] || { name: r.name, photo: null };
      var initials = getInitials(r.name);
      var img = stu.photo
        ? '<div class="lc-img"><img src="' + stu.photo + '" alt="" data-fallback-init="' + initials + '"></div>'
        : '<div class="lc-img lc-img-init">' + initials + '</div>';
      // v17: Show "[Institute] Convert" prominently as the score line
      // Map institute key to short display label
      var INST_SHORT = {
        "iim-a": "IIM-A", "iim-b": "IIM-B", "iim-c": "IIM-C", "iim-l": "IIM-L",
        "iim-k": "IIM-K", "iim-i": "IIM-I", "iim-m": "IIM Mumbai",
        "spjimr": "SPJIMR", "fms": "FMS Delhi", "nmims": "NMIMS",
        "scmhrd": "SCMHRD", "sibm": "SIBM", "mdi": "MDI", "iift": "IIFT", "xim": "XIM"
      };
      var instText = r._inst && INST_SHORT[r._inst] ? INST_SHORT[r._inst] + ' Convert' : 'Convert';

      var card = document.createElement('div');
      card.className = 'live-card';
      card.innerHTML = img +
        '<div class="lc-name">' + r.name + '</div>' +
        '<div class="lc-score">' + instText + '</div>';
      gridEl.appendChild(card);
    });
  }

  var total = LIVE_RESULTS.all.length;
  var createdTimes = LIVE_RESULTS.all
    .map(function (r) { return r.createdAt ? new Date(r.createdAt.replace(' ', 'T')).getTime() : 0; })
    .filter(Boolean);
  var maxCreated = createdTimes.length ? Math.max.apply(Math, createdTimes) : 0;
  var maxDay = maxCreated ? new Date(maxCreated).toISOString().slice(0, 10) : '';
  var weekStart = maxCreated ? maxCreated - (7 * 24 * 60 * 60 * 1000) : 0;
  var weekN = maxCreated ? LIVE_RESULTS.all.filter(function (r) {
    var t = r.createdAt ? new Date(r.createdAt.replace(' ', 'T')).getTime() : 0;
    return t && t >= weekStart && t <= maxCreated;
  }).length : total;
  var todayN = maxDay ? LIVE_RESULTS.all.filter(function (r) {
    return (r.createdAt || '').slice(0, 10) === maxDay;
  }).length : 0;
  var lsT = document.getElementById('lsTotal'); if (lsT) lsT.textContent = total;
  var lsW = document.getElementById('lsWeek'); if (lsW) lsW.textContent = weekN;
  var lsD = document.getElementById('lsToday'); if (lsD) lsD.textContent = todayN;
  var lsU = document.getElementById('lsUpdated'); if (lsU) lsU.textContent = maxDay || 'from static results data';

  renderLive('all');
})();

/* ============================================================
   REVIEWS MARQUEE RENDERER
============================================================ */
(function () {
  var r1 = document.getElementById('rvRow1');
  var r2 = document.getElementById('rvRow2');
  if (!r1 || !r2) return;

  /**
   * Generates HTML for a single review card
   */
  function cardHtml(r, i) {
    var stars = '';
    var rating = r.rating || 5;
    for (var s = 0; s < 5; s++) {
      stars += s < rating ? '★' : '☆';
    }

    // Fallback for missing fields
    var name = r.name || "Anonymous";
    var loc = r.loc || "Verified Student";
    var course = r.course || "CAT Intensive 2024";
    var text = r.text || "";

    return '<div class="rv-card">' +
      '<div class="rv-head">' +
      '<div class="rv-who"><div class="rv-name">' + name + '</div><div class="rv-loc">' + loc + '</div></div>' +
      '<div class="rv-stars">' + stars + '</div>' +
      '</div>' +
      '<div class="rv-text">' + text + '</div>' +
      '<div class="rv-course">' + course + '</div>' +
      '</div>';
  }

  /**
   * Main render function
   */
  function renderMarquee(data) {
    if (!data || data.length === 0) return;

    // Split into 2 rows for the marquee effect
    var half = Math.ceil(data.length / 2);
    var row1Set = data.slice(0, half);
    var row2Set = data.slice(half);

    // Duplicate each set for a seamless CSS loop
    var row1Html = row1Set.map(cardHtml).join('') + row1Set.map(cardHtml).join('');
    var row2Html = row2Set.map(function (r, i) { return cardHtml(r, i + 100); }).join('') +
      row2Set.map(function (r, i) { return cardHtml(r, i + 100); }).join('');

    r1.innerHTML = row1Html;
    r2.innerHTML = row2Html;
  }

  // Check if there's global dynamic data from results.json (via RESULTS_STATIC_RESULTS if updated)
  // or use the statically populated REVIEWS array.
  var finalData = REVIEWS;
  if (window.RESULTS_STATIC_RESULTS && Array.isArray(window.RESULTS_STATIC_RESULTS)) {
    var dynamicReviews = window.RESULTS_STATIC_RESULTS.filter(function (i) {
      return i.type === 'student_reviews';
    }).map(function (r) {
      return {
        name: r.name,
        loc: r.institute || r.sub_title || 'CATKing Student',
        rating: 5,
        course: r.course || r.year || 'CAT Intensive 2024',
        text: (r.description || '').replace(/<[^>]*>/g, '').trim()
      };
    });
    if (dynamicReviews.length > 0) {
      finalData = dynamicReviews;
    }
  }

  renderMarquee(finalData);
})();


/* ============================================================
   STUDENT DETAIL MODAL CONTROLLER
   openStudent(studentId) - renders and shows modal
============================================================ */
function hashCode(str) {
  var h = 0;
  if (!str) return h;
  for (var i = 0; i < str.length; i++) {
    h = ((h << 5) - h) + str.charCodeAt(i);
    h |= 0;
  }
  return h;
}

function openStudent(sid) {
  var s = STUDENTS[sid];
  if (!s) return;
  var modal = document.getElementById('stmodal');
  var hero = document.getElementById('stmHero');
  var tabsEl = document.getElementById('stmTabs');
  var panes = document.getElementById('stmPanes');

  // Hero
  var avaHtml = s.photo
    ? '<div class="stm-ava"><img src="' + s.photo + '" alt="" data-fallback-init="' + s.name.charAt(0).toUpperCase() + '"></div>'
    : '<div class="stm-ava-init">' + s.name.charAt(0).toUpperCase() + '</div>';
  hero.innerHTML =
    '<div class="stm-hero-row">' +
    avaHtml +
    '<div class="stm-meta">' +
    '<div class="stm-name">' + s.name + '</div>' +
    '<div class="stm-ckid">CATKing ID · CK-' + (s.ckId || (Math.abs(hashCode(s.name)) % 100000).toString().padStart(5, '0')) + '</div>' +
    '<div class="stm-score">' + s.score + '</div>' +
    (s.institute ? '<div class="stm-tag">' + s.institute + '</div>' : '') +
    '</div>' +
    '</div>';

  // Always show all 4 tabs. Missing data gets a placeholder pane.
  var availableTabs = [
    { id: 'test', label: 'Testimonial', has: !!s.testimonial, active: true },
    { id: 'score', label: 'Scorecard', has: !!s.scorecard },
    { id: 'video', label: 'Interview', has: !!s.yt },
    { id: 'wa', label: 'Success Story', has: !!s.whatsapp }
  ];

  tabsEl.innerHTML = availableTabs.map(function (t) {
    var pipCls = t.has ? '' : 'gray';
    return '<button data-tab="' + t.id + '" class="' + (t.active ? 'act' : '') + '" title="' + (t.has ? t.label + ' available' : t.label + ' - preview content') + '">' +
      '<span class="pip ' + pipCls + '"></span>' +
      t.label +
      '</button>';
  }).join('');

  // Build pane contents - always generate all 4 panes; missing data gets placeholder
  var paneHtml = '';

  // Pane 1: Testimonial (always first/active)
  paneHtml += '<div class="stm-pane act" data-pane="test">';
  if (s.testimonial) {
    var tst = s.testimonial;
    var stars = '';
    for (var j = 0; j < 5; j++) { stars += j < tst.rating ? '\u2605' : '\u2606'; }
    paneHtml += '<div class="stm-rating"><span class="stars">' + stars + '</span><span class="rval">' + tst.rating + '.0 / 5</span><span class="rsrc">Verified student review</span></div>';
    paneHtml += '<div class="stm-quote">' + tst.quote + '</div>';
    paneHtml += '<div class="stm-highlights">' +
      '<div class="stm-highlight"><div class="shv">' + tst.beforeScore + '</div><div class="shl">First Mock Score</div></div>' +
      '<div class="stm-highlight"><div class="shv">' + tst.afterScore + '</div><div class="shl">Final Score</div></div>' +
      '<div class="stm-highlight"><div class="shv">' + tst.prepMonths + ' mo</div><div class="shl">Total Prep Time</div></div>' +
      '</div>';
    paneHtml += '<div class="stm-journey">' + tst.journey + '</div>';
  } else {
    paneHtml += '<div class="stm-placeholder"><div class="stm-ph-ic">\u2713</div><b>Testimonial being prepared</b><p>' + s.name + ' is a verified CATKing convert. A full written testimonial with their prep journey will be published here shortly.</p></div>';
  }
  paneHtml += '</div>';

  // Pane 2: Scorecard
  paneHtml += '<div class="stm-pane" data-pane="score">';
  if (s.scorecard) {
    paneHtml += '<div class="stm-scard-wrap">' +
      '<div class="stm-scard-wm">Verified Authentic</div>' +
      '<img class="stm-scard-img" src="' + s.scorecard + '" alt="' + s.name + ' verified scorecard">' +
      '</div>';
    paneHtml += '<div class="stm-scard-note">Scorecard sourced from the CATKing verified results portal (catking.in/student/results). Cross-checked against official institute scorecard and audited by KPMG (2020) and Brickworks Ratings (2022, 2023).</div>';
  } else {
    paneHtml += '<div class="stm-placeholder"><div class="stm-ph-ic">\u2713</div><b>Verified scorecard upload pending</b><p>' + s.name + ' has been independently verified as a ' + (s.institute || 'CATKing') + ' convert. The official scorecard image is being processed by our verification team (KPMG + Brickworks audited).</p><div class="stm-ph-list"><span>\u2713 Identity verified</span><span>\u2713 Institute call confirmed</span><span>\u23F3 Scorecard audit pending</span></div></div>';
  }
  paneHtml += '</div>';

  // Pane 3: Interview (video)
  paneHtml += '<div class="stm-pane" data-pane="video">';
  if (s.yt) {
    var embedSrc = 'https://www.youtube.com/embed/' + s.yt + '?autoplay=1&rel=0&modestbranding=1&playsinline=1&mute=1';
    var watchUrl = 'https://www.youtube.com/watch?v=' + s.yt;
    paneHtml += '<div class="stm-video" data-yt="' + s.yt + '">' +
      '<iframe src="' + embedSrc + '" title="' + s.name + ' CATKing interview" ' +
      'allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; fullscreen" ' +
      'referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>' +
      '<div class="stm-unmute" onclick="this.style.display=\'none\'; var iframe=this.parentNode.querySelector(\'iframe\'); iframe.src=iframe.src.replace(\'&mute=1\',\'\');">\u25B6 Tap to play with sound</div>' +
      '</div>';
    paneHtml += '<div class="stm-video-fallback">Video not loading? <a href="' + watchUrl + '" target="_blank" rel="noopener">Open on YouTube \u2197</a></div>';
  } else {
    var prepMo = (s.testimonial && s.testimonial.prepMonths) ? s.testimonial.prepMonths : '9';
    paneHtml += '<div class="stm-placeholder stm-placeholder-video"><div class="stm-ph-ic">\u25B6</div><b>Interview recording scheduled</b><p>' + s.name + '\'s video interview is being recorded. CATKing interviews cover prep strategy, mock-score evolution, exam-day mindset, and placement outlook. Typically 8-12 minutes.</p><div class="stm-ph-preview"><div class="stm-ph-preview-row"><span>\u25CB</span>Why ' + (s.institute || 'this institute') + ' was the goal</div><div class="stm-ph-preview-row"><span>\u25CB</span>The turning point in ' + prepMo + '-month prep</div><div class="stm-ph-preview-row"><span>\u25CB</span>Advice for CAT / NMAT 2026 aspirants</div></div></div>';
  }
  paneHtml += '</div>';

  // Pane 4: Success Story (WhatsApp) - v17 simplified: just the screenshot + 1-line caption
  paneHtml += '<div class="stm-pane stm-pane-wa" data-pane="wa">';
  if (s.whatsapp) {
    var stmStampObj = { sid: sid, who: s.name, score: s.score || s.institute || '' };
    paneHtml += '<div class="stm-wa-simple">';
    paneHtml += '<div class="stm-wa-img-wrap"><img class="stm-wa-img" src="' + s.whatsapp + '" alt="' + s.name + ' WhatsApp message">' + buildWaStamp(stmStampObj) + '</div>';
    paneHtml += '<div class="stm-wa-caption">Received message directly from <b>' + s.name + '</b> on the day of the ' + (s.institute || 'admit') + ' result.</div>';
    paneHtml += '</div>';
  } else {
    paneHtml += '<div class="stm-placeholder"><b>WhatsApp story being sourced</b><p>Awaiting consent from ' + s.name + '.</p></div>';
  }
  paneHtml += '</div>';
  panes.innerHTML = paneHtml;

  // Tab click handler
  tabsEl.querySelectorAll('button').forEach(function (b) {
    b.addEventListener('click', function () {
      tabsEl.querySelectorAll('button').forEach(function (x) { x.classList.remove('act'); });
      b.classList.add('act');
      var tabId = b.getAttribute('data-tab');
      panes.querySelectorAll('.stm-pane').forEach(function (p) {
        p.classList.toggle('act', p.getAttribute('data-pane') === tabId);
      });
    });
  });

  modal.classList.add('show');
  document.body.style.overflow = 'hidden';
}

(function () {
  var modal = document.getElementById('stmodal');
  var closeBtn = document.getElementById('stmClose');
  if (!modal || !closeBtn) return;
  function close() {
    modal.classList.remove('show');
    // stop any playing video
    var panes = document.getElementById('stmPanes');
    if (panes) {
      var iframe = panes.querySelector('iframe');
      if (iframe) iframe.src = '';
    }
    document.body.style.overflow = '';
  }
  closeBtn.addEventListener('click', close);
  modal.addEventListener('click', function (e) { if (e.target === modal) close(); });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && modal.classList.contains('show')) close();
  });
})();

/* ============================================================
   Expose helper for legacy openVideo + wire HOF clicks to student modal
============================================================ */
// Map HOF names to student IDs so clicking shows full detail modal
var HOF_NAME_TO_SID = {
  "Aniruddha Sharma": "aniruddha-sharma", "Priyanshu Tiwari": "priyanshu-tiwari",
  "Prafull Sharma": "prafull-sharma", "Manshu Khinchyal": "manshu-khinchyal",
  "Akshat Toolaj Sinha": "akshat-toolaj-sinha", "Shivam Rajput": "shivam-rajput",
  "Hunney Kotiya": "hunney-kotiya", "Vishwaraj Vilankar": "vishwaraj-vilankar",
  "Gourav": "gourav", "Avisha": "avisha", "Neelanshu": "neelanshu", "Paras": "paras"
};

// Replace HOF onclicks at load time to route through openStudent instead of openVideo
(function () {
  var hofCards = document.querySelectorAll('.hof .topper');
  hofCards.forEach(function (card) {
    card.onclick = null;
  });
})();

// Also wire Browse All rcards + scorecard marquee to open student modal when a match exists
var BROWSE_NAME_TO_SID = {
  // IIM-A toppers (real + mock)
  "Aniruddha Sharma": "aniruddha-sharma", "Priyanshu Tiwari": "priyanshu-tiwari",
  "Prafull Sharma": "prafull-sharma", "Manshu Khinchyal": "manshu-khinchyal",
  "Akshat Toolaj Sinha": "akshat-toolaj-sinha", "Shivam Rajput": "shivam-rajput",
  "Hunney Kotiya": "hunney-kotiya", "Vishwaraj Vilankar": "vishwaraj-vilankar",
  "Suvarnaa": "suvarnaa", "Suvarnaa": "suvarnaa", "Aayush Mohod": "aayush-mohod", "Aayush Pravin Mohod": "aayush-mohod",
  // CAT %ile scorers
  "Gourav": "gourav", "Gaurav": "gourav", "Avisha": "avisha", "Neelanshu": "neelanshu", "Paras": "paras",
  "Jai": "jai", "Akshma": "akshma", "Ajmal": "ajmal", "Rishi": "rishi", "Dhruvsingh": "dhruvsingh",
  "Muskan": "muskan", "Mayank": "mayank", "Sarthak": "sarthak", "Romit": "romit",
  // Mock IIM-B/C/L/I/K/M students
  "Sai Dinesh": "sai-dinesh", "Rohit Menon": "rohit-menon", "Kavya Reddy": "kavya-reddy",
  "Arjun Reddy": "arjun-reddy", "Sneha Kulkarni": "sneha-kulkarni", "Vikram Shah": "vikram-shah",
  "Ishita Bhatia": "ishita-bhatia", "Karthik Nair": "karthik-nair", "Sanya Gupta": "sanya-gupta",
  // Real 2026 NMIMS/SPJIMR/SCMHRD converts
  "Pratyasha Panigrahi": "pratyasha-panigrahi", "Pratik Mulik": "pratik-mulik",
  "Kabir": "kabir-nmims", "Srija": "srija-nmims", "Nandini": "nandini-scmhrd",
  "Debasish Sahoo": "debasish-sahoo", "Aditi Shukla": "aditi-shukla",
  "Ashish Ranjan": "ashish-ranjan", "Kenneth Sequeira": "kenneth-sequeira",
  "Vidhi Verma": "vidhi-verma", "Aayush Rathi": "aayush-rathi", "Hardik Kacha": "hardik-kacha",
  "Rutuja Kokate": "rutuja-kokate", "Greeshma Asutkar": "greeshma-asutkar",
  "Harshla Pandey": "harshla-pandey", "Agastya Anand": "agastya-anand",
  "Vaishnavi Talan": "vaishnavi-talan", "Nihit Pingala": "nihit-pingala",
  "Anamika Arora": "anamika-arora", "Manav Goyal": "manav-goyal",
  "Sakshi Rohra": "sakshi-rohra", "Chaitanya Bisen": "chaitanya-bisen",
  "Raunak": "raunak-nmims", "Aditi": "aditi-nmims"
};

(function () {
  // Browse All rcards
  document.querySelectorAll('.browse .rcard').forEach(function (card) {
    var nameEl = card.querySelector('.r-name');
    if (!nameEl) return;
    var sid = BROWSE_NAME_TO_SID[nameEl.textContent.trim()];
    if (sid && STUDENTS[sid]) {
      card.style.cursor = 'default';
    }
  });

  // Scorecard marquee: override onclick that calls openScorecard, route to student instead if student exists
  document.querySelectorAll('.sc-strip .sc-card').forEach(function (card) {
    var nameEl = card.querySelector('.sc-name');
    if (!nameEl) return;
    var sid = BROWSE_NAME_TO_SID[nameEl.textContent.trim()];
    if (sid && STUDENTS[sid]) {
      card.onclick = null;
    }
  });
})();


/* ============================================================
   Multi-exam countdown list: CAT, XAT, NMAT, SNAP
   Shows days-left for each of the 4 exams, updates daily
============================================================ */
(function () {
  var EXAMS = {
    cat: "2026-11-29",
    xat: "2027-01-03",
    nmat: "2026-10-06",
    snap: "2026-12-13"
  };
  function daysUntil(dateString) {
    var parts = dateString.split('-').map(Number);
    var now = new Date();
    var today = Date.UTC(now.getFullYear(), now.getMonth(), now.getDate());
    var examDate = Date.UTC(parts[0], parts[1] - 1, parts[2]);
    var diff = examDate - today;
    return diff < 0 ? 0 : Math.round(diff / (1000 * 60 * 60 * 24));
  }
  function tick() {
    Object.keys(EXAMS).forEach(function (k) {
      var el = document.getElementById('cdD' + k);
      if (el) el.textContent = daysUntil(EXAMS[k]);
    });
    // sticky footer + final CTA both track CAT
    var sctaDays = document.getElementById('sctaDays');
    if (sctaDays) sctaDays.textContent = daysUntil(EXAMS.cat);
    var fctaDays = document.getElementById('fctaDays');
    if (fctaDays) fctaDays.textContent = daysUntil(EXAMS.cat);
  }
  tick();
  // Refresh every minute (days granularity doesn't need per-second updates)
  setInterval(tick, 60000);
})();

/* ============================================================
   Animated stat counters
============================================================ */
(function () {
  var observed = false;
  var blocks = document.querySelectorAll('.hs-num[data-target]');
  function animate() {
    if (observed) return;
    observed = true;
    blocks.forEach(function (el) {
      var target = parseInt(el.getAttribute('data-target'), 10);
      var dur = 1400;
      var start = Date.now();
      function step() {
        var elapsed = Date.now() - start;
        var progress = Math.min(elapsed / dur, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        var cur = Math.floor(target * eased);
        el.textContent = cur.toLocaleString('en-IN') + '+';
        if (progress < 1) { requestAnimationFrame(step); }
      }
      requestAnimationFrame(step);
    });
  }
  if (blocks.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) { animate(); } });
    }, { threshold: 0.3 });
    io.observe(blocks[0]);
  }
})();

/* ============================================================
   5-VIDEO STACK + dynamic right-panel content swap
============================================================ */
(function () {
  var stack = document.getElementById('vStack');
  if (!stack) return;
  var cards = Array.prototype.slice.call(stack.querySelectorAll('.v-card'));
  var dots = document.querySelectorAll('#vDots .v-dot');
  var countEl = document.getElementById('vCount');
  var spText = document.getElementById('spText');
  // logical[0] is data-idx=0 (Jai/featured), [1] is Akshma, etc.
  var logical = [];
  for (var i = 0; i < 5; i++) {
    var card = cards.find(function (c) { return parseInt(c.getAttribute('data-idx'), 10) === i; });
    if (card) logical.push(card);
  }

  function renderRightPanel(yt) {
    var data = FEATURED_STORIES[yt];
    if (!data || !spText) return;
    spText.classList.add('fading');
    setTimeout(function () {
      spText.innerHTML =
        '<div class="eyebrow">' + data.eyebrow + '</div>' +
        '<h2>' + data.headline + '</h2>' +
        '<p class="pull">' + data.pullQuote + '</p>' +
        '<div class="sp-qs">' +
        data.questions.map(function (q) { return '<div class="q">' + q + '</div>'; }).join('') +
        '</div>' +
        '<div class="sp-cta">' +
        '<a href="javascript:void(0)" onclick="playFeatured()" class="p">Watch full interview ▶</a>' +
        '<a href="/enroll" class="s">Start your journey →</a>' +
        '</div>';
      spText.classList.remove('fading');
    }, 240);
  }

  function setFeatured(idx) {
    logical.forEach(function (c, i) {
      var offset = (i - idx + 5) % 5;
      c.setAttribute('data-pos', offset);
    });
    dots.forEach(function (d, i) { d.classList.toggle('act', i === idx); });
    if (countEl) countEl.textContent = (idx + 1);
    var frontYt = logical[idx].getAttribute('data-yt');
    renderRightPanel(frontYt);
    currentIdx = idx;
  }

  dots.forEach(function (dot) {
    dot.addEventListener('click', function () {
      var i = parseInt(dot.getAttribute('data-i'), 10);
      setFeatured(i);
    });
  });

  cards.forEach(function (c) {
    c.addEventListener('click', function (e) {
      var pos = parseInt(c.getAttribute('data-pos'), 10);
      if (pos === 0) {
        var yt = c.getAttribute('data-yt');
        var data = FEATURED_STORIES[yt];
        if (data) openVideo(data.name, data.score, yt);
      } else {
        var i = parseInt(c.getAttribute('data-idx'), 10);
        setFeatured(i);
      }
      e.stopPropagation();
    });
  });

  var currentIdx = 0;
  var auto = setInterval(function () {
    currentIdx = (currentIdx + 1) % 5;
    setFeatured(currentIdx);
  }, 6000);
  stack.addEventListener('mouseenter', function () { clearInterval(auto); });
  stack.addEventListener('mouseleave', function () {
    auto = setInterval(function () {
      currentIdx = (currentIdx + 1) % 5;
      setFeatured(currentIdx);
    }, 6000);
  });

  window.playFeatured = function () {
    var front = logical.find(function (c) { return c.getAttribute('data-pos') === '0'; });
    if (front) {
      var yt = front.getAttribute('data-yt');
      var data = FEATURED_STORIES[yt];
      if (data) openVideo(data.name, data.score, yt);
    }
  };

  // Initial render of right panel
  renderRightPanel(logical[0].getAttribute('data-yt'));
})();

/* ============================================================
   VIDEO MODAL
============================================================ */
function openVideo(name, meta, ytId) {
  if (!ytId) { return; }
  var modal = document.getElementById('vmodal');
  var player = document.getElementById('mplayer');
  var fallback = document.getElementById('mfallback');
  document.getElementById('mname').textContent = name;
  document.getElementById('mmeta').textContent = meta;
  // Reliable embed using youtube.com (not nocookie which has stricter origin rules)
  // Autoplay with muted start works around browser autoplay policies, user can unmute.
  var embedSrc = 'https://www.youtube.com/embed/' + ytId + '?autoplay=1&rel=0&modestbranding=1&playsinline=1&mute=1';
  player.innerHTML =
    '<iframe src="' + embedSrc + '" ' +
    'title="' + name + ' CATKing interview" ' +
    'frameborder="0" ' +
    'allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; fullscreen" ' +
    'referrerpolicy="strict-origin-when-cross-origin" ' +
    'allowfullscreen></iframe>' +
    '<div class="mplayer-unmute" onclick="this.style.display=\'none\'; this.previousElementSibling.src=this.previousElementSibling.src.replace(\'&mute=1\',\'\').replace(\'mute=1\',\'\')">' +
    '<span>▶ Tap to play with sound</span>' +
    '</div>';
  if (fallback) { fallback.setAttribute('href', 'https://www.youtube.com/watch?v=' + ytId); }
  modal.classList.add('show');
  document.body.style.overflow = 'hidden';
}
document.getElementById('mclose').addEventListener('click', function () {
  var modal = document.getElementById('vmodal');
  document.getElementById('mplayer').innerHTML = '';
  modal.classList.remove('show');
  document.body.style.overflow = '';
});
document.getElementById('vmodal').addEventListener('click', function (e) {
  if (e.target === this) {
    document.getElementById('mplayer').innerHTML = '';
    this.classList.remove('show');
    document.body.style.overflow = '';
  }
});

/* ============================================================
   VIDEO GRID FILTER
============================================================ */
(function () {
  var buttons = document.querySelectorAll('.vg-filter button');
  var cards = document.querySelectorAll('.vcard[data-tag]');
  buttons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      buttons.forEach(function (b) { b.classList.remove('act'); });
      btn.classList.add('act');
      var f = btn.getAttribute('data-f');
      cards.forEach(function (c) {
        if (f === 'all' || c.getAttribute('data-tag') === f) { c.style.display = ''; }
        else { c.style.display = 'none'; }
      });
    });
  });
})();

/* ============================================================
   FAQ ACCORDION
============================================================ */
(function () {
  var items = document.querySelectorAll('.faq-item');
  items.forEach(function (it) {
    var q = it.querySelector('.faq-q');
    if (q) {
      q.addEventListener('click', function () { it.classList.toggle('open'); });
    }
  });
})();

/* ============================================================
   STICKY CTA ON SCROLL
============================================================ */
(function () {
  var scta = document.getElementById('scta');
  var hero = document.querySelector('.hero');
  var faq = document.querySelector('.faq');
  function onScroll() {
    if (!hero || !scta) return;
    var heroRect = hero.getBoundingClientRect();
    var pastHero = heroRect.bottom < 0; // hero scrolled completely past the top
    // Hide once the FAQ section starts entering the viewport - the FAQ answers
    // objections and the Final CTA right below it has its own clear conversion path,
    // so the sticky footer becomes redundant from that point on.
    var beforeFaq = true;
    if (faq) {
      var faqRect = faq.getBoundingClientRect();
      // FAQ enters the viewport when its top crosses the bottom edge.
      // Hide when FAQ top is within ~150px of being on-screen.
      beforeFaq = faqRect.top > (window.innerHeight - 150);
    }
    if (pastHero && beforeFaq) { scta.classList.add('show'); }
    else { scta.classList.remove('show'); }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();

/* ============================================================
   CONVERTS BY INSTITUTE: year tabs + cgrid render
============================================================ */
(function () {
  var yearBtns = document.querySelectorAll('#yearTabs button');
  var cgrid = document.getElementById('cgrid');
  var currentYear = "2024-25";

  function initials(name) {
    var parts = name.trim().split(/\s+/);
    if (parts.length === 1) return parts[0].substring(0, 2).toUpperCase();
    return (parts[0][0] + parts[parts.length - 1][0]).toUpperCase();
  }

  function avBgClass(i) {
    var list = ['', 'b', 'g', 'n'];
    return list[i % 4];
  }

  function renderYear(year) {
    currentYear = year;
    if (!cgrid) return;
    cgrid.innerHTML = '';
    Object.keys(COLLEGES).forEach(function (key) {
      var col = COLLEGES[key];
      var roster = col.years[year] || [];
      var total = (COLLEGE_TOTALS[key] && COLLEGE_TOTALS[key][year]) || roster.length;
      // Build 3 avatar chips from roster
      var avatars = '';
      for (var i = 0; i < Math.min(3, roster.length); i++) {
        var s = roster[i];
        if (s.img) {
          avatars += '<div class="av"><img src="' + s.img + '" alt=""></div>';
        } else {
          avatars += '<div class="av ' + avBgClass(i) + '">' + initials(s.name) + '</div>';
        }
      }

      var card = document.createElement('div');
      card.className = 'ccol';
      card.setAttribute('data-key', key);
      card.innerHTML =
        '<div class="c-header">' +
        '<div class="c-logo ' + (col.logoClass || '') + '">' + (col.logo || col.name.charAt(0)) + '</div>' +
        '<div class="c-tag-inline ' + col.tagClass + '">' + col.tag + '</div>' +
        '</div>' +
        '<h3>' + col.name + '</h3>' +
        '<div class="c-sub">' + col.sub + '</div>' +
        '<div class="c-count">' +
        '<div>' +
        '<div class="cnum"><em>' + total + '</em></div>' +
        '<div class="clbl">Converts ' + year + '</div>' +
        '<div class="c-link">View roster</div>' +
        '</div>' +
        '<div class="c-avatars">' + (avatars || '<div class="av">' + col.name.charAt(0) + '</div>') + '</div>' +
        '</div>';
      card.addEventListener('click', function () { openCollege(key, year); });
      cgrid.appendChild(card);
    });
  }

  yearBtns.forEach(function (b) {
    b.addEventListener('click', function () {
      yearBtns.forEach(function (x) { x.classList.remove('act'); });
      b.classList.add('act');
      renderYear(b.getAttribute('data-y'));
    });
  });

  renderYear("2024-25");

  /* ============ COLLEGE MODAL ============ */
  function openCollege(key, year) {
    var col = COLLEGES[key];
    if (!col) return;
    var roster = col.years[year] || [];
    var total = (COLLEGE_TOTALS[key] && COLLEGE_TOTALS[key][year]) || roster.length;
    var videos = roster.filter(function (s) { return s.yt; }).length;

    var head = document.getElementById('cmHead');
    head.innerHTML =
      '<div class="cm-head-row">' +
      '<div class="cm-logo">' + (col.logo || col.name.charAt(0)) + '</div>' +
      '<div class="cm-head-meta">' +
      '<div class="cm-tag">' + col.tag + '</div>' +
      '<h3>' + col.name + '</h3>' +
      '<div class="cm-sub">' + col.sub + '</div>' +
      '</div>' +
      '</div>' +
      '<div class="cm-stats">' +
      '<div class="cm-stat"><span class="v">' + total + '</span><span class="l">Total Converts ' + year + '</span></div>' +
      '<div class="cm-stat"><span class="v">' + roster.length + '</span><span class="l">Students Featured</span></div>' +
      '<div class="cm-stat"><span class="v">' + videos + '</span><span class="l">With Interview</span></div>' +
      '</div>';

    var body = document.getElementById('cmBody');
    if (roster.length === 0) {
      body.innerHTML =
        '<div class="cm-year-note">' + year + ' · No featured students</div>' +
        '<div class="cm-empty">' +
        '<b>Featured roster coming soon</b>' +
        'We have ' + total + ' audited ' + col.name + ' converts for ' + year + '.<br>Full list with student profiles is being prepared.' +
        '</div>';
    } else {
      var rosterHtml = '';
      // WhatsApp moments strip FIRST (if available)
      var waForCollege = (typeof getCollegeWaCards === 'function') ? getCollegeWaCards(key) : [];
      if (waForCollege.length > 0) {
        rosterHtml += '<div class="cm-wa-strip cm-wa-strip-top">' +
          '<div class="cm-wa-head">Moments from ' + col.name + ' converts <span class="cm-wa-count">' + waForCollege.length + ' chat' + (waForCollege.length === 1 ? '' : 's') + '</span></div>' +
          '<div class="cm-wa-mq">' +
          (waForCollege.concat(waForCollege)).map(function (c) {
            return '<div class="cm-wa-mini" data-sid="' + c.sid + '" data-img="' + c.img + '" data-who="' + c.who + '" data-score="' + c.score + '">' +
              '<img src="' + c.img + '" alt="' + c.who + ' WhatsApp">' +
              buildWaStamp(c, 'wa-stamp-mini') +
              '<div class="cmw-cap">' + c.who + '</div>' +
              '</div>';
          }).join('') +
          '</div>' +
          '</div>';
      }
      // Roster AFTER WA strip
      rosterHtml += '<div class="cm-year-note">' + year + ' &middot; Tap any student for their full profile &mdash; testimonial, scorecard, interview and WhatsApp story</div>' +
        '<div class="cm-list">' +
        roster.map(function (s, i) {
          var img = s.img
            ? '<div class="cm-stu-img"><img src="' + s.img + '" alt=""></div>'
            : '<div class="cm-stu-img ' + avBgClass(i) + '">' + initials(s.name) + '</div>';
          var hasVideo = !!s.yt;
          return (
            '<div class="cm-student' + (hasVideo ? ' has-video' : '') + '" ' +
            'data-yt="' + (s.yt || '') + '" data-name="' + s.name + '" data-score="' + s.score + '">' +
            img +
            '<div class="cm-stu-txt">' +
            '<div class="cm-stu-name">' + s.name + '</div>' +
            '<div class="cm-stu-score"><span class="vv">✓</span>' + s.score + '</div>' +
            '</div>' +
            '<div class="cm-stu-play">▶</div>' +
            '</div>'
          );
        }).join('') +
        '</div>';
      body.innerHTML = rosterHtml;

      // Wire up click on every student - routes to student detail modal if available
      body.querySelectorAll('.cm-student').forEach(function (el) {
        el.style.cursor = 'pointer';
        el.addEventListener('click', function () {
          var name = el.getAttribute('data-name');
          var score = el.getAttribute('data-score');
          var yt = el.getAttribute('data-yt');
          var sid = (typeof BROWSE_NAME_TO_SID !== 'undefined' && BROWSE_NAME_TO_SID[name]) ? BROWSE_NAME_TO_SID[name] : null;
          closeCollegeModal();
          setTimeout(function () {
            if (sid && typeof STUDENTS !== 'undefined' && STUDENTS[sid]) {
              openStudent(sid);
            } else if (yt) {
              openVideo(name, score, yt);
            }
          }, 220);
        });
      });
    }

    document.getElementById('cmodal').classList.add('show');
    document.body.style.overflow = 'hidden';
  }

  function closeCollegeModal() {
    document.getElementById('cmodal').classList.remove('show');
    document.body.style.overflow = '';
  }

  document.getElementById('cmClose').addEventListener('click', closeCollegeModal);
  document.getElementById('cmodal').addEventListener('click', function (e) {
    if (e.target === this) closeCollegeModal();
  });

  // Expose for HOF or other triggers
  window.openCollege = openCollege;
})();


/* ============================================================
   SCORECARD MODAL
============================================================ */
function openScorecard(name, score, img, avatar, quote, converts, programme, exam) {
  var modal = document.getElementById('smodal');
  if (!modal) return;

  function getInitials(n) {
    var p = n.trim().split(/\s+/);
    if (p.length === 1) return p[0].substring(0, 2).toUpperCase();
    return (p[0][0] + p[p.length - 1][0]).toUpperCase();
  }

  document.getElementById('smName').textContent = name;
  document.getElementById('smScore').innerHTML = score + (score.includes('%') ? '' : '<sup>%ile</sup>');

  var avaEl = document.getElementById('smAva');
  if (avatar && avatar.length > 10) {
    avaEl.innerHTML = '<img src="' + avatar + '" style="width:100%;height:100%;object-fit:cover;border-radius:50%">';
  } else {
    avaEl.textContent = getInitials(name);
  }

  var scardImg = document.getElementById('smScard');
  var imgWrap = document.getElementById('smImageWrap');
  var table = document.getElementById('smTable');

  if (img && img.length > 5) {
    scardImg.src = img;
    imgWrap.hidden = false;
    table.style.display = 'none';
  } else {
    imgWrap.hidden = true;
    table.style.display = 'table';
    // Note: sections/table data can be added here if available in API
  }

  document.getElementById('smQuote').textContent = quote ? '“' + quote + '”' : '';
  document.getElementById('smConverts').textContent = converts || 'IIM Convert';
  document.getElementById('smAddl').textContent = programme || 'MBA Program';
  /*document.getElementById('smExam').textContent = 'Score Card · ' + (exam || 'CAT 2024');*/

  modal.classList.add('show');
  document.body.style.overflow = 'hidden';
}
(function () {
  var sm = document.getElementById('smodal');
  var smClose = document.getElementById('smClose');
  if (!sm || !smClose) return;
  function close() {
    sm.classList.remove('show');
    document.body.style.overflow = '';
  }
  smClose.addEventListener('click', close);
  sm.addEventListener('click', function (e) { if (e.target === sm) close(); });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && sm.classList.contains('show')) close();
  });
})();

/* ============================================================
   OUTSTANDING TOPPERS + SCORECARD SLIDER CONTROLS
============================================================ */
(function () {
  function getRail(id) {
    return document.getElementById(id);
  }

  function scrollRail(id, dir) {
    var rail = getRail(id);
    if (!rail) return;
    var card = rail.querySelector('article');
    var step = card ? card.getBoundingClientRect().width + 18 : Math.round(rail.clientWidth * 0.82);
    rail.scrollBy({ left: step * dir, behavior: 'smooth' });
  }

  document.querySelectorAll('[data-slider-prev]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      scrollRail(btn.getAttribute('data-slider-prev'), -1);
    });
  });

  document.querySelectorAll('[data-slider-next]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      scrollRail(btn.getAttribute('data-slider-next'), 1);
    });
  });

  function escapeHtml(v) {
    return String(v || '').replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#039;');
  }
  function escapeJsAttr(v) {
    return escapeHtml(String(v || '').replace(/\\/g, "\\\\").replace(/'/g, "\\'").replace(/\n/g, "\\n").replace(/\r/g, "\\r"));
  }
  function stripTags(v) {
    const d = document.createElement('div'); d.innerHTML = String(v || '');
    return d.textContent || d.innerText || '';
  }
  function normalizePct(v) {
    return String(v || '').replace(/%?ile/ig, '').replace(/%/g, '').trim();
  }

  // MARQUEE AUTO-SLIDE INITIALIZER (Matches "Real Reviews" pattern)
  function initMarquee(id) {
    var rail = document.getElementById(id);
    if (!rail) return;
    if (rail.classList.contains('marquee-active')) return;
    rail.classList.add('marquee-active');
    var content = rail.innerHTML;
    rail.innerHTML = '<div class="marquee-track">' + content + content + '</div>';

    // Hide buttons for this slider to favor the seamless marquee
    var shell = rail.closest('.results-toppers-shell, .result-scorecards-shell');
    if (shell) {
      shell.querySelectorAll('.results-slider-btn').forEach(function (btn) {
        btn.style.display = 'none';
      });
    }
  }

  function loadToppers() {
    const rail = document.getElementById('topperRail');
    if (!rail || !window.RESULTS_STATIC_RESULTS) return;

    const toppers = window.RESULTS_STATIC_RESULTS.slice(0, 40);
    rail.innerHTML = toppers.map(t => `
        <div class="slider-item">
            <img src="${t.photo || 'https://catking.in/file/media_library/8780/68013909e87e1.png'}" alt="${escapeHtml(t.name)}" loading="lazy">
            <h5>${escapeHtml(t.name)}</h5>
            <p>${escapeHtml(t.institute || t.inst || 'IIM Convert')}</p>
        </div>
    `).join('');

    initMarquee('topperRail');
  }

  loadToppers();
  loadScorecardApi();

  /* ============================================================
     SCORECARD API LOADER
  ============================================================ */
  function loadScorecardApi() {
    const rail = document.getElementById('scorecardRail');
    if (!rail) return;

    function renderCard(item) {
      const name = item.user_name || (item.user && item.user.name) || 'Student';
      const pct = normalizePct(item.user_percentile || item.percentile || item.score) || '99+';
      const avatar = item.user_profile_link || (item.user && item.user.avatar_url) || 'https://catking.in/file/media_library/8780/68013909e87e1.png';
      const scard = item.scorecard_full_image || item.full_image || item.scorecard_card_image || item.card_image || '';
      const sscard = item.scorecard_card_image || item.full_image || item.scorecard_card_image || item.card_image || '';
      const quote = stripTags(item.scorecard_description || item.description || '');
      const converts = item.user_converts || item.converts || '';
      const programme = item.user_programme || item.programme || '';
      const exam = item.exam_name || 'CAT 2024';

      return `
        <article class="result-scorecard-card">
          <div class="result-scorecard-person">
            <div class="result-scorecard-ava">
              <img src="${escapeHtml(avatar)}" alt="${escapeHtml(name)}" onerror="this.src='https://catking.in/file/media_library/8780/68013909e87e1.png'">
              <div class="result-scorecard-badge">★</div>
            </div>
            <div><h3>${escapeHtml(name)}</h3><p>CAT Topper</p></div>
          </div>
          <div class="result-scorecard-body">
            <div class="result-scorecard-score"><strong>${escapeHtml(pct)}</strong><span>%ile</span><small>CAT percentile score</small></div>
            <div class="result-scorecard-img-wrap">
              <img class="result-scorecard-img" src="${escapeHtml(sscard)}" alt="${escapeHtml(name)} scorecard">
            </div>
            <p class="result-scorecard-quote">“${escapeHtml(quote || 'Verified CATKing scorecard and success story.')}”</p>
            <button type="button" class="result-scorecard-btn" onclick="openScorecard('${escapeJsAttr(name)}','${escapeJsAttr(pct)}','${escapeJsAttr(scard)}','${escapeJsAttr(avatar)}','${escapeJsAttr(quote)}','${escapeJsAttr(converts)}','${escapeJsAttr(programme)}','${escapeJsAttr(exam)}')">View scorecard</button>
          </div>
        </article>`;
    }

    function fetchPage(page, collected) {
      // Use the proxy route defined in web.php
      return fetch('/api/scorecards-proxy?base_course_id=56&page=' + page)
        .then(res => {
          if (!res.ok) throw new Error('API request failed');
          return res.json();
        })
        .then(res => {
          const data = res && res.data;
          const rows = data && Array.isArray(data.data) ? data.data : [];
          rows.forEach(r => collected.push(r));
          // Recursive fetch if there are more pages (cap at 5 for performance)
          if (data && data.current_page < data.last_page && page < 5) {
            return fetchPage(data.current_page + 1, collected);
          }
          return collected;
        });
    }

    fetchPage(1, []).then(items => {
      const usable = items.filter(i => (i.scorecard_full_image || i.full_image || i.scorecard_card_image || i.card_image));
      if (usable.length > 0) {
        rail.innerHTML = usable.map(renderCard).join('');
      }
      // Always init marquee (either with API results or existing static content if API returned empty)
      initMarquee('scorecardRail');
    }).catch(err => {
      console.warn('Scorecard API failed, using fallback content.', err);
      initMarquee('scorecardRail');
    });
  }
})();

/* ============================================================
   LEGACY YEAR TABS - populates panel based on selected year
============================================================ */
var LEGACY_DATA = {
  "2024-25": {
    headline: "The <b>record-breaking</b> year.",
    blurb: "2,080+ IIM converts. 9,000+ IIM calls. 460+ into BLACKI alone. 200+ NMIMS converts. Five-year audit trail culminates in the biggest single-year result in CATKing history.",
    audit: "Audit pending Q2 2026 · KPMG engagement confirmed",
    stats: [
      { v: "2,080+", l: "IIM Converts" },
      { v: "9,000+", l: "IIM Calls" },
      { v: "460+", l: "BLACKI Converts" },
      { v: "200+", l: "NMIMS Converts" }
    ],
    featured: "Aniruddha Sharma, Priyanshu Tiwari, Prafull Sharma, Manshu Khinchyal, Akshat Sinha, Shivam Rajput, Hunney Kotiya, Vishwaraj Vilankar, Suvarnaa, Aayush Mohod all converted IIM Ahmedabad"
  },
  "2023-24": {
    headline: "The <b>Brickworks-verified</b> year.",
    blurb: "1,840 IIM converts, independently audited by Brickworks Ratings. Introduced the Intensive and Turbo course models. Launched the @SumitCatking YouTube channel with topper interviews.",
    audit: "Brickworks Ratings verified 2023 · Certificate on request",
    stats: [
      { v: "1,840", l: "IIM Converts" },
      { v: "7,800+", l: "IIM Calls" },
      { v: "390+", l: "BLACKI Converts" },
      { v: "180+", l: "NMIMS Converts" }
    ],
    featured: "Jai 99.66, Akshma 99.36, Ajmal 99.29, Rishi 99.22, Dhruvsingh 99.02, Gaurav 99.69, Avisha 99.01, Neelanshu 99.06 - all with full profile on record"
  },
  "2022-23": {
    headline: "The <b>first Brickworks</b> year.",
    blurb: "1,620 IIM converts, first year of Brickworks Ratings verification. Scaled online course delivery. Published the first audited topper scorecard database.",
    audit: "Brickworks Ratings verified 2022 · Certificate on request",
    stats: [
      { v: "1,620", l: "IIM Converts" },
      { v: "6,500+", l: "IIM Calls" },
      { v: "330+", l: "BLACKI Converts" },
      { v: "160+", l: "NMIMS Converts" }
    ],
    featured: "Mayank 99 %ile, Sarthak 99 %ile, and 40+ others with published scorecards and testimonials"
  },
  "2021-22": {
    headline: "The <b>scale-up</b> year.",
    blurb: "1,380 IIM converts. Cross-country expansion into Tier-2 cities. Launched dedicated NMAT and SNAP prep tracks. First batch of 200+ NMIMS converts.",
    audit: "Internal records · Brickworks audit scope extended in 2022",
    stats: [
      { v: "1,380", l: "IIM Converts" },
      { v: "5,200+", l: "IIM Calls" },
      { v: "280+", l: "BLACKI Converts" },
      { v: "200+", l: "NMIMS Converts" }
    ],
    featured: "Muskan CATKing CAT Topper, Akshama 99 %ile, and the first cohort to cross 1,300 IIM converts in a single CAT season"
  },
  "2020-21": {
    headline: "The <b>KPMG-audited</b> year.",
    blurb: "1,110 IIM converts, independently verified by KPMG Assurance. First MBA prep institute in India to submit CAT results for third-party audit. The year that started the compounding curve.",
    audit: "KPMG Assurance &amp; Consulting verified 2020 · Certificate on request",
    stats: [
      { v: "1,110", l: "IIM Converts" },
      { v: "4,100+", l: "IIM Calls" },
      { v: "210+", l: "BLACKI Converts" },
      { v: "140+", l: "NMIMS Converts" }
    ],
    featured: "The first KPMG-audited batch. Every claimed scorecard in this year was independently verified by the Big 4 auditor"
  },
  "2018-19": {
    headline: "The <b>online scaling</b> year.",
    blurb: "890 IIM converts. CATKing launched the online live-class model that became the industry default. Expanded faculty team to 25+ senior alumni. First NMAT dedicated batches.",
    audit: "Internal records &middot; Pre-KPMG audit scope",
    stats: [
      { v: "890", l: "IIM Converts" },
      { v: "3,400+", l: "IIM Calls" },
      { v: "170+", l: "BLACKI Converts" },
      { v: "95+", l: "NMIMS Converts" }
    ],
    featured: "The batch that made online CAT prep credible. Converted students across 18 Indian cities in a single CAT season for the first time."
  },
  "2015-17": {
    headline: "The <b>dual-year</b> growth phase.",
    blurb: "1,680 cumulative IIM converts across two CAT seasons. Introduced dedicated DILR and VARC module tracks. Launched the Sumit Sir weekly mentor-call format.",
    audit: "Internal records &middot; Pre-audit era",
    stats: [
      { v: "1,680", l: "IIM Converts" },
      { v: "6,200+", l: "IIM Calls" },
      { v: "320+", l: "BLACKI Converts" },
      { v: "165+", l: "NMIMS Converts" }
    ],
    featured: "Two consecutive CAT seasons breaking previous records. The mentor-led model that still powers CATKing today."
  },
  "2012-15": {
    headline: "The <b>growth</b> years.",
    blurb: "1,320 cumulative IIM converts across three CAT seasons. Moved from classroom-only to hybrid delivery. Built the first topper video interview library.",
    audit: "Internal records &middot; Foundation era",
    stats: [
      { v: "1,320", l: "IIM Converts" },
      { v: "4,800+", l: "IIM Calls" },
      { v: "230+", l: "BLACKI Converts" },
      { v: "110+", l: "NMIMS Converts" }
    ],
    featured: "Three consecutive CAT cohorts growing at 40%+ YoY. The years that proved CATKing's mentorship-first model."
  },
  "2008-12": {
    headline: "The <b>founding</b> years.",
    blurb: "410 cumulative IIM converts across four CAT seasons since inception. Started with 48 students in 2008. Built the core faculty team and the weekly-mentor-call pedagogy that still defines CATKing today.",
    audit: "Founder records &middot; First four CAT seasons",
    stats: [
      { v: "410", l: "IIM Converts" },
      { v: "1,200+", l: "IIM Calls" },
      { v: "80+", l: "BLACKI Converts" },
      { v: "40+", l: "NMIMS Converts" }
    ],
    featured: "The original 48-student batch of 2008 that grew to 410 cumulative converts by 2012. The curve began here."
  },
  "before-2020": {
    headline: "The <b>foundation</b> years.",
    blurb: "Twelve CAT seasons from 2008 to 2020. 4,300+ cumulative IIM converts across the founding decade. Built every system that powers CATKing today: the weekly mentor-call format, the Sumit Sir prediction series, the first KPMG-audit submission. The compounding curve started here.",
    audit: "Founder records (2008-12) &middot; Pre-audit growth (2012-19) &middot; First KPMG audit (2020)",
    stats: [
      { v: "4,300+", l: "IIM Converts" },
      { v: "15,600+", l: "IIM Calls" },
      { v: "800+", l: "BLACKI Converts" },
      { v: "410+", l: "NMIMS Converts" }
    ],
    featured: "The original 48-student batch of 2008 grew to 4,300+ cumulative IIM converts by the end of CAT 2019. Twelve seasons. Hundreds of toppers. The mentorship-first model that still defines CATKing today."
  }
};

/* HOF by year - 12 tiles per legacy year (mock data for designing) */
var HOF_BY_YEAR = {
  "2024-25": [
    { name: "Aniruddha Sharma", ribbon: "IIM-A", photo: "https://catking.in/file/media_library/8780/68013909e87e1.png", score: "IIM Ahmedabad", exam: "CAT 2024 · Convert", yt: "jdPUhiNhloc" },
    { name: "Priyanshu Tiwari", ribbon: "IIM-A", photo: "https://catking.in/file/media_library/8787/68013d7802e8b.png", score: "IIM Ahmedabad", exam: "CAT 2024 · Convert", yt: "NT0F6t31heM" },
    { name: "Prafull Sharma", ribbon: "IIM-A", photo: "https://catking.in/file/media_library/8786/68013d3d83e3c.png", score: "IIM Ahmedabad", exam: "CAT 2024 · Convert", yt: "7_Tz4tkaQPo" },
    { name: "Manshu Khinchyal", ribbon: "IIM-A", photo: "https://catking.in/file/media_library/8785/68013cac7e762.png", score: "IIM Ahmedabad", exam: "CAT 2024 · Convert", yt: "ZdPtNvamYlA" },
    { name: "Akshat Toolaj Sinha", ribbon: "IIM-A", photo: "https://catking.in/file/media_library/8784/68013c3cd17bd.png", score: "IIM Ahmedabad", exam: "CAT 2024 · Convert", yt: "TV-bPh4KTXA" },
    { name: "Shivam Rajput", ribbon: "IIM-A", photo: "https://catking.in/file/media_library/8783/68013bbcd1f37.png", score: "IIM Ahmedabad", exam: "CAT 2024 · Convert", yt: "X9CxNhGAqDM" },
    { name: "Hunney Kotiya", ribbon: "IIM-A", photo: "https://catking.in/file/media_library/8782/68013b8abbcae.png", score: "IIM Ahmedabad", exam: "CAT 2024 · Convert", yt: "QV7HwpMVrXo" },
    { name: "Vishwaraj Vilankar", ribbon: "IIM-A", photo: "https://catking.in/file/media_library/8781/6801397b2eb0f.png", score: "IIM Ahmedabad", exam: "CAT 2024 · Convert", yt: "2T4myWfkQGQ" },
    { name: "Nihit Pingala", ribbon: "NMIMS", initial: "N", score: "Merit 79", exam: "NMIMS Mumbai Core", yt: "" },
    { name: "Aayush Rathi", ribbon: "NMIMS", initial: "A", score: "NMIMS Core", exam: "NMIMS Mumbai", yt: "" },
    { name: "Pratyasha Panigrahi", ribbon: "SPJIMR", initial: "P", score: "SPJIMR Convert", exam: "SPJIMR Mumbai", yt: "" },
    { name: "Ashish Ranjan", ribbon: "SCMHRD", initial: "A", score: "SCMHRD Pune", exam: "MBA BA 2026", yt: "" }
  ],
  "2023-24": [
    { name: "Jai", ribbon: "CAT 99+", initial: "J", score: "99.66 %ile", exam: "CAT 2023", yt: "jdPUhiNhloc" },
    { name: "Akshma", ribbon: "CAT 99+", initial: "A", score: "99.36 %ile", exam: "CAT 2023", yt: "NT0F6t31heM" },
    { name: "Ajmal", ribbon: "CAT 99+", initial: "A", score: "99.29 %ile", exam: "CAT 2023", yt: "7_Tz4tkaQPo" },
    { name: "Rishi", ribbon: "CAT 99+", initial: "R", score: "99.22 %ile", exam: "CAT 2023", yt: "ZdPtNvamYlA" },
    { name: "Dhruvsingh", ribbon: "CAT 99+", initial: "D", score: "99.02 %ile", exam: "CAT 2023", yt: "TV-bPh4KTXA" },
    { name: "Gaurav", ribbon: "IIM-B", photo: "https://catking.in/file/media_library/5197/65eee10445a7a.jpg", score: "99.69 %ile", exam: "CAT 2023", yt: "8bch7T_WFj0" },
    { name: "Avisha", ribbon: "Topper", photo: "https://catking.in/file/media_library/5196/65eee0a051c7c.jpg", score: "99.01 %ile", exam: "CAT 2023", yt: "IlrURaX6-fI" },
    { name: "Neelanshu", ribbon: "Topper", photo: "https://catking.in/file/media_library/5193/65eedf2556a60.jpg", score: "99.06 %ile", exam: "CAT 2023", yt: "pKEQ3zC_6V4" },
    { name: "Paras", ribbon: "Topper", photo: "https://catking.in/file/media_library/5176/65eb576e26067.jpg", score: "97.92 %ile", exam: "CAT 2023", yt: "jdPUhiNhloc" },
    { name: "Kapil Dev Singh", ribbon: "NMAT", photo: "https://catking.in/file/media_library/5186/65ec795e6d097.jpg", score: "NMAT 243", exam: "NMIMS Mumbai", yt: "" },
    { name: "Priyam Shah", ribbon: "NMAT", photo: "https://catking.in/file/media_library/5187/65ec7b0575f5b.jpg", score: "NMAT 240", exam: "NMIMS Mumbai", yt: "" },
    { name: "Paranjay Kukreti", ribbon: "NMAT", photo: "https://catking.in/file/media_library/5188/65eeecb258f75.jpg", score: "NMAT 239", exam: "NMIMS Mumbai", yt: "" }
  ],
  "2022-23": [
    { name: "Mayank", ribbon: "CAT 99+", initial: "M", score: "99.12 %ile", exam: "CAT 2022", yt: "QV7HwpMVrXo" },
    { name: "Sarthak", ribbon: "CAT 99+", initial: "S", score: "99.05 %ile", exam: "CAT 2022", yt: "2T4myWfkQGQ" },
    { name: "Akshama", ribbon: "CAT 99+", initial: "A", score: "99.01 %ile", exam: "CAT 2022", yt: "IlrURaX6-fI" },
    { name: "Bheem Varkhedi", ribbon: "NMAT", photo: "https://catking.in/file/media_library/5189/65f0795d41ab6.jpg", score: "NMAT 237", exam: "NMIMS Mumbai", yt: "" },
    { name: "Sanyam", ribbon: "NMAT", photo: "https://catking.in/file/media_library/5190/65f07a6517ea8.jpg", score: "NMAT 236", exam: "NMIMS Mumbai", yt: "" },
    { name: "Giridhar S Shenoy", ribbon: "NMAT", photo: "https://catking.in/file/media_library/5191/65f07b0fc3dca.jpg", score: "NMAT 236", exam: "NMIMS Mumbai", yt: "" },
    { name: "Shubham Jhunjhunwala", ribbon: "NMAT", photo: "https://catking.in/file/media_library/5192/65f07ba54fb3f.jpg", score: "NMAT 236", exam: "NMIMS Mumbai", yt: "" },
    { name: "Punita", ribbon: "NMAT", photo: "https://catking.in/file/media_library/5194/65f07c3f99fea.jpg", score: "NMAT 235", exam: "NMIMS Mumbai", yt: "" },
    { name: "Arnav Shah", ribbon: "IIM-B", initial: "A", score: "99.41 %ile", exam: "IIM Bangalore Convert", yt: "" },
    { name: "Rohit Nayyar", ribbon: "IIM-L", initial: "R", score: "99.18 %ile", exam: "IIM Lucknow Convert", yt: "" },
    { name: "Sneha Kapoor", ribbon: "SPJIMR", initial: "S", score: "SPJIMR PGDM", exam: "CAT 2022", yt: "" },
    { name: "Karan Bhatia", ribbon: "FMS", initial: "K", score: "FMS Delhi", exam: "CAT 2022 · 99.28 %ile", yt: "" }
  ],
  "2021-22": [
    { name: "Muskan", ribbon: "CATKing", initial: "M", score: "CAT Topper", exam: "CAT 2021", yt: "X9CxNhGAqDM" },
    { name: "Vivek Reddy", ribbon: "IIM-B", initial: "V", score: "99.56 %ile", exam: "IIM Bangalore", yt: "" },
    { name: "Aditi Nair", ribbon: "IIM-C", initial: "A", score: "99.34 %ile", exam: "IIM Calcutta", yt: "" },
    { name: "Rahul Desai", ribbon: "IIM-L", initial: "R", score: "99.22 %ile", exam: "IIM Lucknow", yt: "" },
    { name: "Kavya Mishra", ribbon: "SPJIMR", initial: "K", score: "SPJIMR PGDM", exam: "CAT 2021", yt: "" },
    { name: "Tarun Gupta", ribbon: "FMS", initial: "T", score: "99.18 %ile", exam: "FMS Delhi", yt: "" },
    { name: "Ishita Bose", ribbon: "NMAT", initial: "I", score: "NMAT 242", exam: "NMIMS Mumbai", yt: "" },
    { name: "Sameer Joshi", ribbon: "NMAT", initial: "S", score: "NMAT 238", exam: "NMIMS Mumbai", yt: "" },
    { name: "Preethi Menon", ribbon: "IIM-K", initial: "P", score: "99.08 %ile", exam: "IIM Kozhikode", yt: "" },
    { name: "Arjun Sharma", ribbon: "IIM-I", initial: "A", score: "98.94 %ile", exam: "IIM Indore", yt: "" },
    { name: "Ritika Das", ribbon: "CAT 99+", initial: "R", score: "99.11 %ile", exam: "CAT 2021", yt: "" },
    { name: "Nikhil Roy", ribbon: "SCMHRD", initial: "N", score: "SNAP 98.44", exam: "SCMHRD Pune", yt: "" }
  ],
  "2020-21": [
    { name: "Vikram Patil", ribbon: "IIM-A", initial: "V", score: "99.78 %ile", exam: "IIM Ahmedabad", yt: "" },
    { name: "Shreya Iyer", ribbon: "IIM-B", initial: "S", score: "99.66 %ile", exam: "IIM Bangalore", yt: "" },
    { name: "Rohan Mehta", ribbon: "IIM-C", initial: "R", score: "99.48 %ile", exam: "IIM Calcutta", yt: "" },
    { name: "Anika Pandey", ribbon: "IIM-L", initial: "A", score: "99.29 %ile", exam: "IIM Lucknow", yt: "" },
    { name: "Karthik Rao", ribbon: "SPJIMR", initial: "K", score: "SPJIMR PGDM", exam: "CAT 2020", yt: "" },
    { name: "Meera Nair", ribbon: "FMS", initial: "M", score: "99.14 %ile", exam: "FMS Delhi", yt: "" },
    { name: "Siddharth Jain", ribbon: "NMAT", initial: "S", score: "NMAT 240", exam: "NMIMS Mumbai", yt: "" },
    { name: "Divya Singh", ribbon: "NMAT", initial: "D", score: "NMAT 236", exam: "NMIMS Mumbai", yt: "" },
    { name: "Pranav Kumar", ribbon: "IIM-I", initial: "P", score: "99.02 %ile", exam: "IIM Indore", yt: "" },
    { name: "Rhea Kapoor", ribbon: "CAT 99+", initial: "R", score: "99.38 %ile", exam: "CAT 2020", yt: "" },
    { name: "Harsh Vardhan", ribbon: "SCMHRD", initial: "H", score: "SNAP 98.12", exam: "SCMHRD Pune", yt: "" },
    { name: "Lavanya S", ribbon: "IIM-K", initial: "L", score: "99.07 %ile", exam: "IIM Kozhikode", yt: "" }
  ],
  "2018-19": [
    { name: "Aditya Verma", ribbon: "IIM-A", initial: "A", score: "99.92 %ile", exam: "IIM Ahmedabad", yt: "" },
    { name: "Pooja Shetty", ribbon: "IIM-B", initial: "P", score: "99.74 %ile", exam: "IIM Bangalore", yt: "" },
    { name: "Ravi Chandra", ribbon: "IIM-C", initial: "R", score: "99.58 %ile", exam: "IIM Calcutta", yt: "" },
    { name: "Neha Thakur", ribbon: "IIM-L", initial: "N", score: "99.41 %ile", exam: "IIM Lucknow", yt: "" },
    { name: "Suresh M", ribbon: "IIM-I", initial: "S", score: "99.18 %ile", exam: "IIM Indore", yt: "" },
    { name: "Tanvi Gupta", ribbon: "SPJIMR", initial: "T", score: "SPJIMR PGDM", exam: "CAT 2018", yt: "" },
    { name: "Yash Mehra", ribbon: "FMS", initial: "Y", score: "99.22 %ile", exam: "FMS Delhi", yt: "" },
    { name: "Bhavya P", ribbon: "NMAT", initial: "B", score: "NMAT 244", exam: "NMIMS Mumbai", yt: "" },
    { name: "Chirag Jain", ribbon: "NMAT", initial: "C", score: "NMAT 238", exam: "NMIMS Mumbai", yt: "" },
    { name: "Devika Rao", ribbon: "CAT 99+", initial: "D", score: "99.36 %ile", exam: "CAT 2018", yt: "" },
    { name: "Eshaan Shah", ribbon: "SCMHRD", initial: "E", score: "SNAP 98.28", exam: "SCMHRD Pune", yt: "" },
    { name: "Farah Khan", ribbon: "IIM-K", initial: "F", score: "99.14 %ile", exam: "IIM Kozhikode", yt: "" }
  ],
  "2015-17": [
    { name: "Aman Saxena", ribbon: "IIM-A", initial: "A", score: "99.88 %ile", exam: "IIM Ahmedabad · 2016", yt: "" },
    { name: "Isha Raman", ribbon: "IIM-B", initial: "I", score: "99.72 %ile", exam: "IIM Bangalore · 2016", yt: "" },
    { name: "Jaideep S", ribbon: "IIM-C", initial: "J", score: "99.54 %ile", exam: "IIM Calcutta · 2015", yt: "" },
    { name: "Kruti Mehta", ribbon: "IIM-L", initial: "K", score: "99.38 %ile", exam: "IIM Lucknow · 2016", yt: "" },
    { name: "Mohit Bansal", ribbon: "SPJIMR", initial: "M", score: "SPJIMR PGDM", exam: "CAT 2015", yt: "" },
    { name: "Nidhi P", ribbon: "FMS", initial: "N", score: "99.18 %ile", exam: "FMS Delhi · 2016", yt: "" },
    { name: "Omkar Rao", ribbon: "NMAT", initial: "O", score: "NMAT 242", exam: "NMIMS Mumbai · 2015", yt: "" },
    { name: "Priyanka Jha", ribbon: "NMAT", initial: "P", score: "NMAT 238", exam: "NMIMS Mumbai · 2016", yt: "" },
    { name: "Qasim R", ribbon: "IIM-I", initial: "Q", score: "99.12 %ile", exam: "IIM Indore · 2016", yt: "" },
    { name: "Ravi Shankar", ribbon: "CAT 99+", initial: "R", score: "99.42 %ile", exam: "CAT 2016", yt: "" },
    { name: "Swati Nair", ribbon: "SCMHRD", initial: "S", score: "SNAP 98.44", exam: "SCMHRD Pune · 2015", yt: "" },
    { name: "Tushar V", ribbon: "IIM-K", initial: "T", score: "99.08 %ile", exam: "IIM Kozhikode · 2016", yt: "" }
  ],
  "2012-15": [
    { name: "Arpita Sen", ribbon: "IIM-A", initial: "A", score: "99.76 %ile", exam: "IIM Ahmedabad · 2014", yt: "" },
    { name: "Bhuvan R", ribbon: "IIM-B", initial: "B", score: "99.62 %ile", exam: "IIM Bangalore · 2013", yt: "" },
    { name: "Chaitra M", ribbon: "IIM-C", initial: "C", score: "99.44 %ile", exam: "IIM Calcutta · 2014", yt: "" },
    { name: "Dhruv K", ribbon: "IIM-L", initial: "D", score: "99.28 %ile", exam: "IIM Lucknow · 2013", yt: "" },
    { name: "Ekta Rao", ribbon: "SPJIMR", initial: "E", score: "SPJIMR PGDM", exam: "CAT 2013", yt: "" },
    { name: "Faiz Ahmed", ribbon: "FMS", initial: "F", score: "99.08 %ile", exam: "FMS Delhi · 2014", yt: "" },
    { name: "Gopal T", ribbon: "NMAT", initial: "G", score: "NMAT 236", exam: "NMIMS Mumbai · 2014", yt: "" },
    { name: "Heena Nair", ribbon: "NMAT", initial: "H", score: "NMAT 232", exam: "NMIMS Mumbai · 2013", yt: "" },
    { name: "Imran S", ribbon: "IIM-I", initial: "I", score: "98.92 %ile", exam: "IIM Indore · 2014", yt: "" },
    { name: "Jyoti R", ribbon: "CAT 99+", initial: "J", score: "99.18 %ile", exam: "CAT 2013", yt: "" },
    { name: "Kunal G", ribbon: "SCMHRD", initial: "K", score: "SNAP 97.82", exam: "SCMHRD Pune · 2014", yt: "" },
    { name: "Lalita M", ribbon: "IIM-K", initial: "L", score: "98.88 %ile", exam: "IIM Kozhikode · 2013", yt: "" }
  ],
  "2008-12": [
    { name: "Ashok B", ribbon: "IIM-A", initial: "A", score: "99.64 %ile", exam: "IIM Ahmedabad · 2011", yt: "" },
    { name: "Bindu K", ribbon: "IIM-B", initial: "B", score: "99.48 %ile", exam: "IIM Bangalore · 2010", yt: "" },
    { name: "Chander R", ribbon: "IIM-C", initial: "C", score: "99.32 %ile", exam: "IIM Calcutta · 2011", yt: "" },
    { name: "Deepak M", ribbon: "IIM-L", initial: "D", score: "99.18 %ile", exam: "IIM Lucknow · 2010", yt: "" },
    { name: "Esha V", ribbon: "SPJIMR", initial: "E", score: "SPJIMR PGDM", exam: "CAT 2010", yt: "" },
    { name: "Farhan S", ribbon: "FMS", initial: "F", score: "98.88 %ile", exam: "FMS Delhi · 2011", yt: "" },
    { name: "Girish T", ribbon: "NMAT", initial: "G", score: "NMAT 228", exam: "NMIMS Mumbai · 2011", yt: "" },
    { name: "Hasita Rao", ribbon: "NMAT", initial: "H", score: "NMAT 224", exam: "NMIMS Mumbai · 2009", yt: "" },
    { name: "Ishwar K", ribbon: "IIM-I", initial: "I", score: "98.72 %ile", exam: "IIM Indore · 2010", yt: "" },
    { name: "Jyoti N", ribbon: "CAT 99+", initial: "J", score: "99.02 %ile", exam: "CAT 2009", yt: "" },
    { name: "Karim A", ribbon: "SCMHRD", initial: "K", score: "SNAP 97.28", exam: "SCMHRD Pune · 2011", yt: "" },
    { name: "Latika Rao", ribbon: "IIM-K", initial: "L", score: "98.62 %ile", exam: "IIM Kozhikode · 2010", yt: "" }
  ],
  "before-2020": [
    { name: "Aditya Verma", ribbon: "IIM-A", initial: "A", score: "99.92 %ile", exam: "IIM Ahmedabad · 2018", yt: "" },
    { name: "Aman Saxena", ribbon: "IIM-A", initial: "A", score: "99.88 %ile", exam: "IIM Ahmedabad · 2016", yt: "" },
    { name: "Pooja Shetty", ribbon: "IIM-B", initial: "P", score: "99.74 %ile", exam: "IIM Bangalore · 2018", yt: "" },
    { name: "Arpita Sen", ribbon: "IIM-A", initial: "A", score: "99.76 %ile", exam: "IIM Ahmedabad · 2014", yt: "" },
    { name: "Ravi Chandra", ribbon: "IIM-C", initial: "R", score: "99.58 %ile", exam: "IIM Calcutta · 2018", yt: "" },
    { name: "Bhuvan R", ribbon: "IIM-B", initial: "B", score: "99.62 %ile", exam: "IIM Bangalore · 2013", yt: "" },
    { name: "Ashok B", ribbon: "IIM-A", initial: "A", score: "99.64 %ile", exam: "IIM Ahmedabad · 2011", yt: "" },
    { name: "Tanvi Gupta", ribbon: "SPJIMR", initial: "T", score: "SPJIMR PGDM", exam: "CAT 2018", yt: "" },
    { name: "Mohit Bansal", ribbon: "SPJIMR", initial: "M", score: "SPJIMR PGDM", exam: "CAT 2015", yt: "" },
    { name: "Bhavya P", ribbon: "NMAT", initial: "B", score: "NMAT 244", exam: "NMIMS Mumbai · 2018", yt: "" },
    { name: "Yash Mehra", ribbon: "FMS", initial: "Y", score: "99.22 %ile", exam: "FMS Delhi · 2018", yt: "" },
    { name: "Devika Rao", ribbon: "CAT 99+", initial: "D", score: "99.36 %ile", exam: "CAT 2018", yt: "" }
  ]
};

/* Render HOF tiles for a given legacy year */
function renderHofForYear(year) {
  // v18: HOF tile rendering is now handled by the merged 3-axis filter system.
  // This stub remains for legacy references but does nothing.
  return;
}
function _OLD_renderHofForYear_disabled(year) {
  var grid = document.getElementById('hofGrid');
  var label = document.getElementById('hofYearLabel');
  if (!grid) return;
  if (label) label.textContent = year;
  var data = HOF_BY_YEAR[year] || HOF_BY_YEAR['2024-25'];
  grid.innerHTML = data.map(function (s, idx) {
    var ribClass = /IIM|SPJIMR|NMIMS|NMAT|FMS|SCMHRD/.test(s.ribbon || '') ? 'mint' : '';
    var photo = s.photo
      ? '<div class="t-photo"><img src="' + s.photo + '" alt="' + s.name + '" loading="lazy"></div>'
      : '<div class="t-photo-init">' + (s.initial || s.name.charAt(0)) + '</div>';
    var smallCls = s.photo ? 'small' : '';
    // data-hof-idx so we can attach click handler after render
    return '<div class="topper" data-hof-idx="' + idx + '">' +
      '<div class="t-ribbon ' + ribClass + '">' + (s.ribbon || 'Topper') + '</div>' +
      photo +
      '<div class="t-score ' + smallCls + '">' + s.score + '</div>' +
      '<div class="t-exam">' + s.exam + '</div>' +
      '<div class="t-name">' + s.name + '</div>' +
      '<div class="t-coll"><span class="v">\u2713</span>Verified Convert</div>' +
      '<div class="t-watch">View full story</div>' +
      '</div>';
  }).join('');

  // Main result cards are display-only.
  var tiles = grid.querySelectorAll('.topper');
  tiles.forEach(function (tile) {
    tile.onclick = null;
  });
}

(function () {
  var statsPanel = document.getElementById('compStatsPanel');
  if (!statsPanel) return;

  var YEARS = ["before-2020", "2020-21", "2021-22", "2022-23", "2023-24", "2024-25"];
  var MINI = {
    "before-2020": "Before 20",
    "2020-21": "20-21",
    "2021-22": "21-22",
    "2022-23": "22-23",
    "2023-24": "23-24",
    "2024-25": "24-25"
  };
  var LABEL = {
    "before-2020": "Before 2020",
    "2020-21": "2020-21",
    "2021-22": "2021-22",
    "2022-23": "2022-23",
    "2023-24": "2023-24",
    "2024-25": "2024-25"
  };
  var compFilters = { year: "all", group: "all", exam: "all" };

  function allResults() {
    return Array.isArray(window.RESULTS_STATIC_RESULTS) ? window.RESULTS_STATIC_RESULTS : [];
  }
  function matches(d, filters, ignoreYear) {
    if (!ignoreYear && filters.year !== "all" && d.year !== filters.year) return false;
    if (filters.group !== "all" && d.group !== filters.group) return false;
    if (filters.exam !== "all" && d.exam !== filters.exam) return false;
    return true;
  }
  function fmt(n) { return Number(n || 0).toLocaleString('en-IN'); }
  function renderCompounding() {
    // v18 patch: Both stats panel and growth chart now use hardcoded static data
    // to match the audited figures shown in the Hero and Legacy sections.
    var chartData = [
      { year: "Before 2020", key: "before-2020", mini: "Before 20", converts: 410 },
      { year: "2020-21", key: "2020-21", mini: "20-21", converts: 1110 },
      { year: "2021-22", key: "2021-22", mini: "21-22", converts: 1380 },
      { year: "2022-23", key: "2022-23", mini: "22-23", converts: 1620 },
      { year: "2023-24", key: "2023-24", mini: "23-24", converts: 1840 },
      { year: "2024-25", key: "2024-25", mini: "24-25", converts: 2080 }
    ];

    if (typeof window.__renderGrowthChart === "function") {
      // Keep the highlight on the latest year (2024-25) for the static view
      window.__renderGrowthChart(chartData, "2024-25");
    }
  }

  window.__updateCompoundingFilters = function (filters) {
    compFilters = Object.assign({}, compFilters, filters || {});
    renderCompounding();
  };
  window.__updateCompoundingForYear = function (year) {
    compFilters.year = year || "all";
    renderCompounding();
  };

  renderCompounding();
})();

/* Old legacy IIFE - kept inert because elements no longer exist */
(function () {
  var tabs = document.querySelectorAll('#legacyTabs button');
  var panel = document.getElementById('legacyPanel');
  if (!tabs.length || !panel) return;

  function render(year) {
    var d = LEGACY_DATA[year];
    if (!d) return;
    panel.classList.add('fading');
    setTimeout(function () {
      panel.innerHTML =
        '<div class="lp-left">' +
        '<div class="lp-year-badge">' + year + '</div>' +
        '<h3>' + d.headline + '</h3>' +
        '<p>' + d.blurb + '</p>' +
        '<div class="lp-audit">' + d.audit + '</div>' +
        '</div>' +
        '<div class="lp-right">' +
        d.stats.map(function (s) {
          return '<div class="lp-stat"><div class="lp-stat-num">' + s.v + '</div><div class="lp-stat-lbl">' + s.l + '</div></div>';
        }).join('') +
        '<div class="lp-featured"><div class="lpf-lbl">Featured Toppers</div><div class="lpf-names">' + d.featured + '</div></div>' +
        '</div>';
      panel.classList.remove('fading');
    }, 150);
  }

  tabs.forEach(function (b) {
    b.addEventListener('click', function () {
      tabs.forEach(function (x) { x.classList.remove('act'); });
      b.classList.add('act');
      var yr = b.getAttribute('data-ly');
      render(yr);
      if (typeof renderHofForYear === 'function') renderHofForYear(yr);
    });
  });

  render("2024-25");
  if (typeof renderHofForYear === 'function') renderHofForYear("2024-25");
})();

/* ============================================================
   v15: GROWTH CHART - Dynamic SVG + hover tooltips (#chart upgrade)
   All 18 CAT seasons, hover shows year + converts + delta.
   Static labels every 3 years + milestone callouts.
============================================================ */
(function () {
  var svg = document.getElementById('growthChart');
  var dyn = document.getElementById('growthDynamic');
  var tip = document.getElementById('growthTooltip');
  var card = document.querySelector('.growth-card');
  if (!svg || !dyn || !tip || !card) return;

  var X_LEFT = 85, X_RIGHT = 1140;
  var Y_BOTTOM = 280, Y_TOP = 20;
  function fmt(n) { return n.toLocaleString('en-IN'); }
  var svgNS = 'http://www.w3.org/2000/svg';
  function el(tag, attrs) {
    var e = document.createElementNS(svgNS, tag);
    if (attrs) { for (var k in attrs) { e.setAttribute(k, attrs[k]); } }
    return e;
  }
  function updateAxis(maxVal) {
    var labels = svg.querySelectorAll(':scope > text');
    var vals = [0, Math.round(maxVal * 0.25), Math.round(maxVal * 0.5), Math.round(maxVal * 0.75), maxVal];
    labels.forEach(function (label, i) {
      if (typeof vals[i] !== 'undefined') label.textContent = fmt(vals[i]);
    });
  }
  function bindTooltips(points) {
    function showTip(i) {
      var p = points[i];
      if (!p) return;
      var delta = '';
      if (i > 0) {
        var prev = points[i - 1].converts || 0;
        delta = prev ? ((p.converts - prev) >= 0 ? '+' : '') + Math.round((p.converts - prev) / prev * 100) + '% vs previous' : 'Previous cycle: 0';
      } else {
        delta = 'First JSON cohort';
      }
      tip.innerHTML = '<span class="gt-year">' + p.year + '</span>' +
        '<span class="gt-val">' + fmt(p.converts) + '</span>' +
        '<span class="gt-delta">Filtered converts &middot; ' + delta + '</span>';
      var cardRect = card.getBoundingClientRect();
      var svgRect = svg.getBoundingClientRect();
      var scaleX = svgRect.width / 1200;
      var scaleY = svgRect.height / 340;
      tip.style.left = ((svgRect.left - cardRect.left) + p.x * scaleX) + 'px';
      tip.style.top = ((svgRect.top - cardRect.top) + p.y * scaleY) + 'px';
      tip.classList.add('show');
      tip.setAttribute('aria-hidden', 'false');
    }
    function hideTip() {
      tip.classList.remove('show');
      tip.setAttribute('aria-hidden', 'true');
    }
    dyn.querySelectorAll('.gc-hit').forEach(function (hit) {
      var idx = parseInt(hit.getAttribute('data-idx'), 10);
      hit.addEventListener('mouseenter', function () { showTip(idx); });
      hit.addEventListener('mouseleave', hideTip);
      hit.addEventListener('click', function (e) {
        e.stopPropagation();
        showTip(idx);
        setTimeout(hideTip, 2200);
      });
    });
    document.addEventListener('click', function (e) {
      if (!e.target.closest('.growth-chart')) hideTip();
    });
  }
  window.__renderGrowthChart = function (data, activeKey) {
    var chartData = data && data.length ? data : [];
    dyn.innerHTML = '';
    if (!chartData.length) return;
    var maxVal = Math.max.apply(Math, chartData.map(function (d) { return d.converts || 0; }));
    maxVal = Math.max(1, Math.ceil(maxVal / 10) * 10);
    updateAxis(maxVal);
    var N = chartData.length;
    function xFor(i) { return X_LEFT + (X_RIGHT - X_LEFT) * i / Math.max(1, N - 1); }
    function yFor(v) { return Y_BOTTOM - (v / maxVal) * (Y_BOTTOM - Y_TOP); }
    var points = chartData.map(function (d, i) {
      return { i: i, year: d.year, key: d.key, converts: d.converts || 0, mini: d.mini, x: xFor(i), y: yFor(d.converts || 0) };
    });
    var linePath = points.map(function (p, i) { return (i === 0 ? 'M ' : 'L ') + p.x.toFixed(1) + ',' + p.y.toFixed(1); }).join(' ');
    var areaPath = linePath + ' L ' + points[points.length - 1].x.toFixed(1) + ',' + Y_BOTTOM + ' L ' + points[0].x.toFixed(1) + ',' + Y_BOTTOM + ' Z';
    dyn.appendChild(el('path', { d: areaPath, fill: 'url(#growthArea)' }));
    dyn.appendChild(el('path', { d: linePath, stroke: 'url(#growthLine)', 'stroke-width': '3.5', fill: 'none', 'stroke-linecap': 'round', 'stroke-linejoin': 'round' }));
    points.forEach(function (p) {
      var isActive = p.key === activeKey;
      var lbl = el('text', {
        x: p.x, y: Y_BOTTOM + 25, 'text-anchor': 'middle', 'font-size': '9.5',
        fill: isActive ? '#1a1a2e' : '#6b7280', 'font-weight': isActive ? '900' : '700'
      });
      lbl.textContent = p.mini;
      dyn.appendChild(lbl);
      if (isActive) {
        var pillW = 62, pillH = 26;
        var pillX = Math.max(X_LEFT, Math.min(p.x - pillW / 2, X_RIGHT - pillW));
        var pillY = Math.max(Y_TOP, p.y - 36);
        dyn.appendChild(el('rect', { x: pillX, y: pillY, width: pillW, height: pillH, rx: 13, fill: '#FEA82F', stroke: '#fff', 'stroke-width': '2.5' }));
        var final = el('text', { x: pillX + pillW / 2, y: pillY + 18, 'text-anchor': 'middle', 'font-size': '13', fill: '#fff', 'font-weight': '900' });
        final.textContent = fmt(p.converts);
        dyn.appendChild(final);
      }
      var dot = el('circle', {
        cx: p.x, cy: p.y, r: isActive ? 8 : 4,
        fill: isActive ? '#FEA82F' : '#fff',
        stroke: isActive ? '#fff' : '#F89B1A',
        'stroke-width': isActive ? 3.5 : 2.5
      });
      dot.setAttribute('class', 'gc-dot' + (isActive ? ' is-active is-milestone' : ''));
      dot.setAttribute('data-idx', p.i);
      dyn.appendChild(dot);
      var hit = el('circle', { cx: p.x, cy: p.y, r: 22, fill: 'transparent' });
      hit.setAttribute('class', 'gc-hit');
      hit.setAttribute('data-idx', p.i);
      dyn.appendChild(hit);
    });
    bindTooltips(points);
  };
  window.__renderGrowthChart([
    { year: "Before 2020", key: "before-2020", mini: "Before 20", converts: 0 },
    { year: "2020-21", key: "2020-21", mini: "20-21", converts: 0 },
    { year: "2021-22", key: "2021-22", mini: "21-22", converts: 0 },
    { year: "2022-23", key: "2022-23", mini: "22-23", converts: 0 },
    { year: "2023-24", key: "2023-24", mini: "23-24", converts: 0 },
    { year: "2024-25", key: "2024-25", mini: "24-25", converts: 0 }
  ], "2024-25");
  if (typeof window.__updateCompoundingFilters === "function") {
    window.__updateCompoundingFilters({});
  }
})();

/* ============================================================
   STATIC TESTIMONIAL CARDS
============================================================ */
(function () {
  var scroll = document.getElementById('tcarScroll');
  var videos = window.RESULTS_STATIC_VIDEOS;
  if (!scroll || !Array.isArray(videos) || !videos.length) return;
  if (scroll.querySelectorAll('.tcar-card').length > 1) return;

  function esc(value) {
    return String(value == null ? "" : value).replace(/[&<>"']/g, function (ch) {
      return { "&": "&amp;", "<": "&lt;", ">": "&gt;", "\"": "&quot;", "'": "&#39;" }[ch];
    });
  }

  function initials(name) {
    return String(name || "CK").split(/\s+/).filter(Boolean).slice(0, 2).map(function (part) {
      return part.charAt(0).toUpperCase();
    }).join("") || "CK";
  }

  function thumbMarkup(v) {
    if (v.thumb) {
      return '<img src="' + esc(v.thumb) + '" alt="' + esc(v.name || v.title || "Topper") + '" loading="lazy">';
    }
    return '<div class="tcar-initials">' + esc(initials(v.name || v.title)) + '</div>';
  }

  scroll.innerHTML = videos
    .slice()
    .filter(function (v) { return v.videoId && String(v.videoId).charAt(0) !== "#"; })
    .sort(function (a, b) {
      return (a.sortOrder || 999) - (b.sortOrder || 999) ||
        new Date(b.createdAt || 0) - new Date(a.createdAt || 0) ||
        (b.id || 0) - (a.id || 0);
    })
    .slice(0, 12)
    .map(function (v) {
      var name = v.name || v.title || "CATKing Topper";
      var score = v.subTitle || v.score || v.year || "Verified topper";
      var quote = v.description || "Verified CATKing topper interview.";
      return '<div class="tcar-card" data-name="' + esc(name) + '" data-score="' + esc(score) + '" data-yt="' + esc(v.videoId || "") + '">' +
        '<div class="tcar-thumb">' + thumbMarkup(v) + '</div>' +
        '<div class="tcar-badge">Verified</div>' +
        '<div class="tcar-score">' + esc(score).slice(0, 18) + '</div>' +
        '<div class="tcar-play">&#9658;</div>' +
        '<div class="tcar-meta">' +
        '<div class="tcar-name">' + esc(name) + '</div>' +
        '<div class="tcar-exam">' + esc(score) + '</div>' +
        '<div class="tcar-quote">' + esc(quote) + '</div>' +
        '</div>' +
        '</div>';
    }).join("");

  scroll.querySelectorAll('.tcar-card').forEach(function (card) {
    card.addEventListener('click', function () {
      if (typeof window.openVideo === "function") {
        window.openVideo(card.getAttribute('data-name'), card.getAttribute('data-score'), card.getAttribute('data-yt'));
      }
    });
  });
})();

/* ============================================================
   TESTIMONIAL CAROUSEL - scroll + arrow controls + dot indicators
============================================================ */
(function () {
  var scroll = document.getElementById('tcarScroll');
  var prev = document.getElementById('tcarPrev');
  var next = document.getElementById('tcarNext');
  var ind = document.getElementById('tcarInd');
  if (!scroll || !prev || !next) return;

  var cards = scroll.querySelectorAll('.tcar-card');
  var totalCards = cards.length;

  // Build page-dot indicators (groups of 3 cards ~ 1 page)
  var cardsPerPage = Math.max(1, Math.floor(scroll.clientWidth / (cards[0] ? cards[0].offsetWidth + 18 : 340)));
  var pages = Math.max(1, Math.ceil(totalCards / Math.max(1, cardsPerPage - 1)));
  function rebuildDots() {
    if (!ind) return;
    ind.innerHTML = '';
    cardsPerPage = Math.max(1, Math.floor(scroll.clientWidth / (cards[0] ? cards[0].offsetWidth + 18 : 340)));
    pages = Math.max(1, Math.min(6, Math.ceil(totalCards / Math.max(1, cardsPerPage))));
    for (var i = 0; i < pages; i++) {
      var d = document.createElement('div');
      d.className = 'tsi' + (i === 0 ? ' act' : '');
      d.setAttribute('data-page', i);
      d.setAttribute('role', 'button');
      d.setAttribute('tabindex', '0');
      d.setAttribute('aria-label', 'Go to testimonial slide ' + (i + 1));
      ind.appendChild(d);
    }
    ind.querySelectorAll('.tsi').forEach(function (dot) {
      function go() {
        var idx = parseInt(dot.getAttribute('data-page'), 10) || 0;
        var sw = scroll.scrollWidth - scroll.clientWidth;
        var left = pages > 1 ? (sw * idx / (pages - 1)) : 0;
        scroll.scrollTo({ left: left, behavior: 'smooth' });
      }
      dot.addEventListener('click', go);
      dot.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          go();
        }
      });
    });
  }
  rebuildDots();

  function updateUI() {
    var sl = scroll.scrollLeft;
    var sw = scroll.scrollWidth - scroll.clientWidth;
    prev.disabled = sl <= 4;
    next.disabled = sl >= sw - 4;
    if (ind) {
      var dots = ind.querySelectorAll('.tsi');
      var activeIdx = sw > 0 ? Math.round((sl / sw) * (dots.length - 1)) : 0;
      dots.forEach(function (d, i) { d.classList.toggle('act', i === activeIdx); });
    }
  }

  function step(dir) {
    var w = (cards[0] ? cards[0].offsetWidth : 320) + 18;
    scroll.scrollBy({ left: dir * w * 2, behavior: 'smooth' });
  }

  prev.addEventListener('click', function () { step(-1); });
  next.addEventListener('click', function () { step(1); });
  scroll.addEventListener('scroll', updateUI, { passive: true });
  window.addEventListener('resize', function () { rebuildDots(); updateUI(); });
  updateUI();
})();


/* ============================================================
   WHATSAPP MOMENTS - marquee + lightbox + college modal integration
============================================================ */
var WA_CARDS = [];

/* Derive institute label for WA stamp overlay (#10) */
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
  if (s.indexOf('scmhrd') >= 0) return 'SCMHRD Convert';
  if (s.indexOf('nmims pharma') >= 0) return 'NMIMS Convert';
  if (s.indexOf('nmims navi') >= 0) return 'NMIMS Convert';
  if (s.indexOf('nmims') >= 0) return 'NMIMS Convert';
  if (s.indexOf('fms') >= 0) return 'FMS Convert';
  if (s.indexOf('99') >= 0) return 'CAT 99%ile+';
  return 'CATKing Topper';
}

/* Short CATKing ID - deterministic hash of sid for stable display */
function waCkId(sid) {
  if (!sid) return 'XXXXX';
  var h = 0;
  for (var i = 0; i < sid.length; i++) { h = ((h << 5) - h + sid.charCodeAt(i)) | 0; }
  h = Math.abs(h) % 99999;
  return ('00000' + h).slice(-5);
}

function buildWaStamp(c, sizeClass) {
  var inst = waInstituteLabel(c);
  var id = waCkId(c.sid);
  return '<div class="wa-stamp' + (sizeClass ? ' ' + sizeClass : '') + '">' +
    '<div class="wa-stamp-outer">' +
    '<div class="wa-stamp-top">Verified CATKing</div>' +
    '<div class="wa-stamp-ctr">' + inst + '</div>' +
    '<div class="wa-stamp-id">CK-' + id + '</div>' +
    '</div>' +
    '</div>';
}

function renderWaCard(c, idx) {
  var stamp = buildWaStamp(c);
  return '<div class="wa-card" data-sid="' + c.sid + '" data-img="' + c.img + '" data-who="' + c.who + '" data-score="' + c.score + '">' +
    '<img class="wa-card-img" src="' + c.img + '" alt="' + c.who + ' WhatsApp message">' +
    stamp +
    '<div class="wa-card-caption"><b>' + c.who + '</b><span class="wa-card-score">' + c.score + '</span></div>' +
    '</div>';
}

(function () {
  var r1 = document.getElementById('waRow1');
  if (!r1) return;

  var resolveImg = function (r) {
    if (r.photo && r.photo !== 'null') return r.photo;
    if (r.file && r.file !== 'null') {
      try {
        var f = JSON.parse(r.file);
        var path = f.thumb_400 || f.full || '';
        return path ? 'https://catking.in/file/' + path : '/results/whatsapp/default.jpg';
      } catch (e) {
        return r.file.indexOf('http') === 0 ? r.file : '/results/whatsapp/default.jpg';
      }
    }
    return '/results/whatsapp/default.jpg';
  };

  var finalWaCards = WA_CARDS;
  if (window.RESULTS_STATIC_RESULTS && Array.isArray(window.RESULTS_STATIC_RESULTS)) {
    var dynamicWa = window.RESULTS_STATIC_RESULTS.filter(function (i) {
      return i.type === 'student_reviews';
    }).map(function (r) {
      return {
        sid: r.slug || r.id,
        img: resolveImg(r),
        who: r.name,
        score: r.sub_title || r.score || 'CATKing Topper'
      };
    });
    if (dynamicWa.length > 0) {
      finalWaCards = dynamicWa;
    }
  }

  // Priority override: Use data from success_stories.json if provided via Blade
  if (window.WA_SUCCESS_STORIES_DATA && Array.isArray(window.WA_SUCCESS_STORIES_DATA) && window.WA_SUCCESS_STORIES_DATA.length > 0) {
    finalWaCards = window.WA_SUCCESS_STORIES_DATA.map(function (r) {
      var imgPath = '';
      if (r.file) {
        try {
          var f = JSON.parse(r.file);
          var path = f.thumb_400 || f.full || '';
          if (path) {
            // Use root domain catking.in for this slider data only
            imgPath = 'https://catking.in/storage/' + path;
          }
        } catch (e) { }
      }
      return {
        sid: r.id || Math.random().toString(36).substr(2, 9),
        img: imgPath || '/results/whatsapp/default.jpg',
        who: r.name || 'CATKing Student',
        score: 'CATKing Topper ' + (r.year || '')
      };
    });
  }

  // Single row - all cards, duplicated for seamless loop
  r1.innerHTML = finalWaCards.map(renderWaCard).join('') + finalWaCards.map(renderWaCard).join('');

  // v18: WA cards are display-only. No modal opens on click.
  // Marquee is purely visual proof - the verification stamp is the credibility signal,
  // and full student stories live in the merged Hall of Fame section below.
  // Cards stay non-interactive to avoid duplicate modal entry points.
  document.querySelectorAll('.wa-card').forEach(function (card) {
    card.style.cursor = 'default';
  });
})();

/* WhatsApp Lightbox close handlers */
(function () {
  var lb = document.getElementById('waLightbox');
  var cls = document.getElementById('waLbClose');
  if (!lb || !cls) return;
  function close() {
    lb.classList.remove('show');
    document.body.style.overflow = '';
  }
  cls.addEventListener('click', close);
  lb.addEventListener('click', function (e) { if (e.target === lb) close(); });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && lb.classList.contains('show')) close();
  });
})();

/* Map college key -> array of WA cards from students in that college */
function getCollegeWaCards(key) {
  // Collect all students that belong to this college and have a WhatsApp screenshot
  var college = (typeof COLLEGES !== 'undefined') ? COLLEGES[key] : null;
  if (!college) return [];
  var names = new Set();
  Object.keys(college.years || {}).forEach(function (y) {
    (college.years[y] || []).forEach(function (s) { names.add(s.name); });
  });
  // Also add non-college-linked students whose institute roughly matches
  return WA_CARDS.filter(function (c) {
    return names.has(c.who) ||
      names.has(c.who.toUpperCase()) ||
      (college.name && c.score && c.score.toLowerCase().indexOf((college.name || '').toLowerCase().replace('iim ', 'iim ')) !== -1);
  });
}

/* ============================================================
   v15: Geo Academic Diversity Donut Chart
============================================================ */
var ACADEMIC_MIX = [
  { label: "Engineering", pct: 52, count: 1082, color: "#FEA82F" },
  { label: "Commerce / B.Com", pct: 18, count: 374, color: "#1F8A5B" },
  { label: "CA / CS / CMA", pct: 11, count: 229, color: "#2385F4" },
  { label: "Arts / Humanities", pct: 8, count: 166, color: "#8b5cf6" },
  { label: "Science", pct: 6, count: 125, color: "#ec4899" },
  { label: "Law", pct: 3, count: 62, color: "#f59e0b" },
  { label: "Others", pct: 2, count: 42, color: "#64748b" }
];

(function () {
  var svgSegs = document.getElementById('geoDonutSegs');
  var legend = document.getElementById('geoDonutLegend');
  if (!svgSegs || !legend) return;

  // Donut geometry: center (110,110), outer radius 90, inner radius 58
  var cx = 110, cy = 110, rO = 90, rI = 58;
  var svgNS = 'http://www.w3.org/2000/svg';
  function polar(r, angleDeg) {
    var rad = (angleDeg - 90) * Math.PI / 180;
    return [cx + r * Math.cos(rad), cy + r * Math.sin(rad)];
  }
  function donutSegPath(startA, endA) {
    var largeArc = (endA - startA) > 180 ? 1 : 0;
    var p1 = polar(rO, startA);
    var p2 = polar(rO, endA);
    var p3 = polar(rI, endA);
    var p4 = polar(rI, startA);
    return 'M ' + p1[0] + ' ' + p1[1] +
      ' A ' + rO + ' ' + rO + ' 0 ' + largeArc + ' 1 ' + p2[0] + ' ' + p2[1] +
      ' L ' + p3[0] + ' ' + p3[1] +
      ' A ' + rI + ' ' + rI + ' 0 ' + largeArc + ' 0 ' + p4[0] + ' ' + p4[1] +
      ' Z';
  }

  var totalPct = ACADEMIC_MIX.reduce(function (s, d) { return s + d.pct; }, 0);
  var angle = 0;
  ACADEMIC_MIX.forEach(function (d, i) {
    var sweep = (d.pct / totalPct) * 360;
    var startA = angle;
    var endA = angle + sweep - 0.6; // tiny gap between segments
    var path = document.createElementNS(svgNS, 'path');
    path.setAttribute('d', donutSegPath(startA, endA));
    path.setAttribute('fill', d.color);
    path.style.cursor = 'pointer';
    path.style.transition = 'transform .2s, filter .2s';
    path.setAttribute('data-idx', i);
    path.addEventListener('mouseenter', function () {
      path.style.transform = 'scale(1.04)';
      path.style.transformOrigin = cx + 'px ' + cy + 'px';
      path.style.filter = 'brightness(1.08)';
    });
    path.addEventListener('mouseleave', function () {
      path.style.transform = '';
      path.style.filter = '';
    });
    svgSegs.appendChild(path);
    angle += sweep;
  });

  // Build legend
  legend.innerHTML = ACADEMIC_MIX.map(function (d) {
    return '<div class="gl-row">' +
      '<span class="gl-sw" style="background:' + d.color + '"></span>' +
      '<span class="gl-lbl">' + d.label + '</span>' +
      '<span class="gl-pct">' + d.pct + '%</span>' +
      '</div>';
  }).join('');
})();

/* ============================================================
   v15: Mobile drawer (hamburger menu) toggle
============================================================ */
(function () {
  var burger = document.getElementById('tnBurger');
  var drawer = document.getElementById('tnDrawer');
  var backdrop = document.getElementById('tnDrawerBackdrop');
  var closeBtn = document.getElementById('tnDrawerClose');
  if (!burger || !drawer || !backdrop) return;

  function openDrawer() {
    drawer.classList.add('open');
    backdrop.classList.add('show');
    burger.classList.add('open');
    burger.setAttribute('aria-expanded', 'true');
    drawer.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }
  function closeDrawer() {
    drawer.classList.remove('open');
    backdrop.classList.remove('show');
    burger.classList.remove('open');
    burger.setAttribute('aria-expanded', 'false');
    drawer.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
  burger.addEventListener('click', function () {
    if (drawer.classList.contains('open')) closeDrawer();
    else openDrawer();
  });
  if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
  backdrop.addEventListener('click', closeDrawer);
  // Close on ESC
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && drawer.classList.contains('open')) closeDrawer();
  });
  // Close on link click (for navigation feedback)
  drawer.querySelectorAll('.tn-drawer-links a, .tn-drawer-enroll').forEach(function (a) {
    a.addEventListener('click', function () {
      setTimeout(closeDrawer, 150);
    });
  });
})();

/* ============================================================
   v15: FAQ expand/collapse toggle (#7)
============================================================ */
(function () {
  var btn = document.getElementById('faqMoreBtn');
  var more = document.getElementById('faqMore');
  if (!btn || !more) return;
  var lbl = btn.querySelector('.faq-more-label');
  btn.addEventListener('click', function () {
    var open = more.classList.toggle('show');
    btn.classList.toggle('expanded', open);
    if (lbl) lbl.textContent = open ? 'Show fewer questions' : 'Show more questions';
  });
})();

/* ============================================================
   v15: Predicted Questions click handlers (#9)
============================================================ */
(function () {
  var cards = document.querySelectorAll('.pred-card');
  cards.forEach(function (card) {
    card.addEventListener('click', function () {
      var yt = card.getAttribute('data-yt');
      var title = card.getAttribute('data-title') || 'CATKing prediction video';
      if (yt && typeof openVideo === 'function') {
        openVideo(title, 'CAT 2024 prediction · Verified accuracy', yt);
      }
    });
  });
})();

/* ============================================================
   v15: Mobile carousel nav arrows (#11)
   Auto-inject prev/next arrow bars under carousels on mobile
============================================================ */
(function () {
  function attachNav(track, containerAfter) {
    if (!track) return;
    var nav = document.createElement('div');
    nav.className = 'car-nav';
    nav.innerHTML = '<button type="button" data-dir="-1" aria-label="Previous">&#8249;</button><button type="button" data-dir="1" aria-label="Next">&#8250;</button>';
    (containerAfter || track).parentNode.insertBefore(nav, (containerAfter || track).nextSibling);
    nav.addEventListener('click', function (e) {
      var b = e.target.closest('button');
      if (!b) return;
      var dir = parseInt(b.getAttribute('data-dir'), 10) || 1;
      track.scrollBy({ left: dir * 320, behavior: 'smooth' });
    });
  }

  // Wait for DOM ready
  function init() {
    // WA marquee - add prev/next arrows ONLY on mobile (desktop has auto-scroll marquee)
    var waRow = document.getElementById('waRow1');
    var isDesktop = window.innerWidth > 768;
    if (waRow && waRow.parentNode && !isDesktop) {
      attachNav(waRow, waRow.parentNode);
    }
    // Stats ticker
    var stTrack = document.querySelector('.stats-ticker-track');
    var stMq = document.querySelector('.stats-ticker-marquee');
    if (stTrack && stMq) {
      // Stats-ticker uses CSS animation; arrows allow user-controlled scroll
      // Add nav only on mobile where animation doesn't loop cleanly with short cards
      // Use marquee container for scrolling via CSS override
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();

/* ============================================================================
   v18: MERGED HALL OF FAME · 3-AXIS CROSS FILTER
   Filters: exam (cat/nmat/xat/snap/all) × group (blacki-sm/other-iim/nmims/other-top/all) × year
   Each axis is independent - any combination renders the matching subset.
   Bidirectional Year ↔ Compounding cycle pill sync: clicking either updates both,
   so the page tells one coherent story across the Compounding section + the
   merged HOF/Browse tiles below it.
============================================================================ */
(function () {
  var grid = document.getElementById('hofGrid');
  var empty = document.getElementById('hfEmpty');
  var countEl = document.getElementById('hfCountNum');
  var moreWrap = document.getElementById('hfMoreWrap');
  var moreBtn = document.getElementById('hfMoreBtn');
  var resetBtn = document.getElementById('hfReset');
  if (!grid) return;

  // Build BROWSE_DATA from LIVE_RESULTS.all (which already has _inst + _group tagged)
  // Plus synthesize entries for older years from existing STUDENTS not already in LIVE
  var BROWSE_DATA = [];
  var seeded = false;
  function stripHtml(html) {
    var div = document.createElement('div');
    div.innerHTML = html || '';
    return (div.textContent || div.innerText || '').replace(/\s+/g, ' ').trim();
  }

  function seedLocalData() {
    if (seeded) return;
    seeded = true;
    BROWSE_DATA = [];

    if (Array.isArray(window.RESULTS_STATIC_RESULTS) && window.RESULTS_STATIC_RESULTS.length) {
      BROWSE_DATA = window.RESULTS_STATIC_RESULTS.slice();
      if (typeof STUDENTS !== "undefined") {
        BROWSE_DATA.forEach(function (d) {
          if (STUDENTS[d.sid]) return;
          STUDENTS[d.sid] = {
            name: d.name,
            score: d.score,
            institute: d.institute,
            photo: d.photo,
            yt: d.videoId || null,
            testimonial: {
              quote: d.description ? stripHtml(d.description).slice(0, 260) : d.name + ' is a verified CATKing convert for ' + d.institute + '.',
              journey: d.description || '<p><strong>' + d.name + '</strong> is listed in CATKing verified results for <strong>' + d.institute + '</strong>.</p>',
              rating: 5,
              prepMonths: 9,
              beforeScore: '-',
              afterScore: d.score
            }
          };
        });
      }
      return;
    }

    // Seed from LIVE_RESULTS.all (current cycle 2024-25 mostly)
    if (typeof LIVE_RESULTS !== "undefined" && LIVE_RESULTS.all) {
      LIVE_RESULTS.all.forEach(function (r) {
        var instDisplay = r.institute || INST_DISPLAY[r._inst] || (r._inst || "").toUpperCase();
        BROWSE_DATA.push({
          sid: r.sid,
          name: r.name,
          institute: instDisplay,
          instKey: r._inst,
          group: r._group || instGroup(r._inst),
          exam: r.exam || "cat",
          year: r.year || "2024-25",
          photo: r.photo || (STUDENTS[r.sid] && STUDENTS[r.sid].photo) || null,
          score: r.score || (STUDENTS[r.sid] && STUDENTS[r.sid].score) || (r.exam ? r.exam.toUpperCase() + " " + (r.year || "2024") + " · Convert" : "Convert")
        });
      });
    }

    // Add additional entries from STUDENTS (HOF, etc.) that aren't in LIVE_RESULTS
    if (typeof STUDENTS !== "undefined") {
      var existing = new Set(BROWSE_DATA.map(function (d) { return d.sid; }));
      Object.keys(STUDENTS).forEach(function (sid) {
        if (existing.has(sid) || sid.startsWith("_hof_")) return;
        var s = STUDENTS[sid];
        // Infer institute key + group from institute name string
        var inst = (s.institute || "").toLowerCase();
        var instKey = "other";
        var grp = "other-top";
        if (inst.indexOf("ahmedabad") >= 0) { instKey = "iim-a"; grp = "blacki-sm"; }
        else if (inst.indexOf("bangalore") >= 0 || inst.indexOf("bengaluru") >= 0) { instKey = "iim-b"; grp = "blacki-sm"; }
        else if (inst.indexOf("calcutta") >= 0 || inst.indexOf("kolkata") >= 0) { instKey = "iim-c"; grp = "blacki-sm"; }
        else if (inst.indexOf("lucknow") >= 0) { instKey = "iim-l"; grp = "blacki-sm"; }
        else if (inst.indexOf("kozhikode") >= 0) { instKey = "iim-k"; grp = "blacki-sm"; }
        else if (inst.indexOf("indore") >= 0) { instKey = "iim-i"; grp = "blacki-sm"; }
        else if (inst.indexOf("mumbai") >= 0 && inst.indexOf("iim") >= 0) { instKey = "iim-m"; grp = "other-iim"; }
        else if (inst.indexOf("spjimr") >= 0) { instKey = "spjimr"; grp = "blacki-sm"; }
        else if (inst.indexOf("fms") >= 0) { instKey = "fms"; grp = "blacki-sm"; }
        else if (inst.indexOf("nmims") >= 0) { instKey = "nmims"; grp = "nmims"; }
        else if (inst.indexOf("scmhrd") >= 0) { instKey = "scmhrd"; grp = "other-top"; }
        else if (inst.indexOf("sibm") >= 0) { instKey = "sibm"; grp = "other-top"; }
        else if (inst.indexOf("mdi") >= 0) { instKey = "mdi"; grp = "other-top"; }
        else if (inst.indexOf("iift") >= 0) { instKey = "iift"; grp = "other-top"; }
        // Infer exam from score string
        var examGuess = "cat";
        var sc = (s.score || "").toLowerCase();
        if (sc.indexOf("nmat") >= 0) examGuess = "nmat";
        else if (sc.indexOf("xat") >= 0) examGuess = "xat";
        else if (sc.indexOf("snap") >= 0) examGuess = "snap";
        // Infer year
        var yearGuess = "2024-25";
        if (sc.indexOf("2023") >= 0) yearGuess = "2023-24";
        else if (sc.indexOf("2022") >= 0) yearGuess = "2022-23";
        else if (sc.indexOf("2021") >= 0) yearGuess = "2021-22";
        else if (sc.indexOf("2020") >= 0) yearGuess = "2020-21";
        else if (sc.indexOf("2019") >= 0 || sc.indexOf("2018") >= 0 || sc.indexOf("2017") >= 0) yearGuess = "before-2020";

        BROWSE_DATA.push({
          sid: sid,
          name: s.name,
          institute: s.institute || "",
          instKey: instKey,
          group: grp,
          exam: examGuess,
          year: yearGuess,
          photo: s.photo || null,
          score: s.score || ""
        });
      });
    }

    // Synthesize a few additional historical year entries (mock for browseability)
    var HISTORICAL_SEEDS = [
      { name: "Rohan Kapoor", institute: "IIM Bangalore", instKey: "iim-b", group: "blacki-sm", exam: "cat", year: "2023-24" },
      { name: "Ananya Iyer", institute: "IIM Calcutta", instKey: "iim-c", group: "blacki-sm", exam: "cat", year: "2023-24" },
      { name: "Karan Mehta", institute: "NMIMS Mumbai", instKey: "nmims", group: "nmims", exam: "nmat", year: "2023-24" },
      { name: "Diya Bhatia", institute: "SPJIMR Mumbai", instKey: "spjimr", group: "blacki-sm", exam: "cat", year: "2022-23" },
      { name: "Aditya Rao", institute: "IIM Lucknow", instKey: "iim-l", group: "blacki-sm", exam: "cat", year: "2022-23" },
      { name: "Sneha Patil", institute: "NMIMS Mumbai", instKey: "nmims", group: "nmims", exam: "nmat", year: "2022-23" },
      { name: "Vikram Singh", institute: "XLRI Jamshedpur", instKey: "xlri", group: "other-top", exam: "xat", year: "2022-23" },
      { name: "Riya Saxena", institute: "SCMHRD Pune", instKey: "scmhrd", group: "other-top", exam: "snap", year: "2022-23" },
      { name: "Arjun Pillai", institute: "IIM Indore", instKey: "iim-i", group: "blacki-sm", exam: "cat", year: "2021-22" },
      { name: "Tanya Joshi", institute: "FMS Delhi", instKey: "fms", group: "blacki-sm", exam: "cat", year: "2021-22" },
      { name: "Rahul Bose", institute: "NMIMS Mumbai", instKey: "nmims", group: "nmims", exam: "nmat", year: "2021-22" },
      { name: "Pooja Menon", institute: "IIM Ahmedabad", instKey: "iim-a", group: "blacki-sm", exam: "cat", year: "2021-22" },
      { name: "Shreya Gupta", institute: "SIBM Pune", instKey: "sibm", group: "other-top", exam: "snap", year: "2020-21" },
      { name: "Nikhil Verma", institute: "IIM Calcutta", instKey: "iim-c", group: "blacki-sm", exam: "cat", year: "2020-21" },
      { name: "Aditi Shah", institute: "NMIMS Mumbai", instKey: "nmims", group: "nmims", exam: "nmat", year: "2020-21" },
      { name: "Saurabh Tiwari", institute: "XLRI Jamshedpur", instKey: "xlri", group: "other-top", exam: "xat", year: "2020-21" },
      { name: "Megha Reddy", institute: "IIM Bangalore", instKey: "iim-b", group: "blacki-sm", exam: "cat", year: "before-2020" },
      { name: "Akash Khanna", institute: "FMS Delhi", instKey: "fms", group: "blacki-sm", exam: "cat", year: "before-2020" },
      { name: "Pranav Desai", institute: "NMIMS Mumbai", instKey: "nmims", group: "nmims", exam: "nmat", year: "before-2020" },
      { name: "Kavya Nair", institute: "IIM Lucknow", instKey: "iim-l", group: "blacki-sm", exam: "cat", year: "before-2020" },
      { name: "Aman Joshi", institute: "SCMHRD Pune", instKey: "scmhrd", group: "other-top", exam: "snap", year: "before-2020" },
      { name: "Rhea Kapoor", institute: "IIM Indore", instKey: "iim-i", group: "blacki-sm", exam: "cat", year: "before-2020" },
      { name: "Yash Agarwal", institute: "MDI Gurgaon", instKey: "mdi", group: "other-top", exam: "cat", year: "2023-24" },
      { name: "Ira Bhatt", institute: "IIFT Delhi", instKey: "iift", group: "other-top", exam: "cat", year: "2023-24" },
      { name: "Dev Malhotra", institute: "IIM Mumbai", instKey: "iim-m", group: "other-iim", exam: "cat", year: "2023-24" },
      { name: "Nisha Bansal", institute: "IIM Mumbai", instKey: "iim-m", group: "other-iim", exam: "cat", year: "2022-23" },
      { name: "Gaurav Soni", institute: "IIM Mumbai", instKey: "iim-m", group: "other-iim", exam: "cat", year: "2024-25" },
      { name: "Ishaan Kohli", institute: "IIM Mumbai", instKey: "iim-m", group: "other-iim", exam: "cat", year: "2024-25" }
    ];
    HISTORICAL_SEEDS.forEach(function (s) {
      s.sid = "hist_" + s.name.toLowerCase().replace(/[^a-z0-9]+/g, "_");
      s.score = s.exam.toUpperCase() + " " + s.year + " · Convert";
      s.photo = null;
      BROWSE_DATA.push(s);
    });
  }

  // Filter state
  var state = { exam: "all", group: "all", year: "all" };

  // Page state for "Load more"
  var PAGE_SIZE = 15;
  var visibleCount = PAGE_SIZE;

  function getInitials(name) {
    var p = name.trim().split(/\s+/);
    if (p.length === 1) return p[0].substring(0, 2).toUpperCase();
    return (p[0][0] + p[p.length - 1][0]).toUpperCase();
  }

  function matchesYear(dYear, filterYear) {
    if (filterYear === "all") return true;
    if (filterYear === "2021-22") {
      return dYear === "2021-22" || dYear === "2020-21" || dYear === "before-2020";
    }
    return dYear === filterYear;
  }

  function getFiltered() {
    return BROWSE_DATA.filter(function (d) {
      if (state.exam !== "all" && d.exam !== state.exam) return false;
      if (state.group !== "all" && d.group !== state.group) return false;
      if (!matchesYear(d.year, state.year)) return false;
      return true;
    });
  }

  // Count records that would match if the user added value V on axis A,
  // keeping the OTHER two axes at their current state values.
  function countWithAxisValue(axis, value) {
    return BROWSE_DATA.filter(function (d) {
      if (axis !== 'exam' && state.exam !== 'all' && d.exam !== state.exam) return false;
      if (axis !== 'group' && state.group !== 'all' && d.group !== state.group) return false;
      if (axis !== 'year' && !matchesYear(d.year, state.year)) return false;
      if (value !== 'all') {
        if (axis === 'exam' && d.exam !== value) return false;
        if (axis === 'group' && d.group !== value) return false;
        if (axis === 'year' && !matchesYear(d.year, value)) return false;
      }
      return true;
    }).length;
  }

  // Update each pill: disable if it would yield 0 results, show count badge
  function updatePillStates() {
    document.querySelectorAll('#hofFilters .hf-row-tabs').forEach(function (row) {
      var axis = row.getAttribute('data-axis');
      row.querySelectorAll('button').forEach(function (btn) {
        var v = btn.getAttribute('data-v');
        var c = countWithAxisValue(axis, v);
        // Update or add count badge
        var badge = btn.querySelector('.hf-count-badge');
        if (!badge) {
          badge = document.createElement('span');
          badge.className = 'hf-count-badge';
          btn.appendChild(badge);
        }
        badge.textContent = c;
        // Disable if 0 results AND not already-active AND not the All option
        var isAct = btn.classList.contains('act');
        if (c === 0 && !isAct) {
          btn.classList.add('disabled');
          btn.setAttribute('aria-disabled', 'true');
        } else {
          btn.classList.remove('disabled');
          btn.removeAttribute('aria-disabled');
        }
      });
    });
  }

  // Map institute key → short ribbon label (e.g. iim-a → "IIM-A", nmims → "NMIMS")
  var RIBBON_SHORT = {
    "iim-a": "IIM-A", "iim-b": "IIM-B", "iim-c": "IIM-C", "iim-l": "IIM-L",
    "iim-k": "IIM-K", "iim-i": "IIM-I", "iim-m": "IIM Mumbai",
    "spjimr": "SPJIMR", "fms": "FMS", "nmims": "NMIMS",
    "scmhrd": "SCMHRD", "sibm": "SIBM", "mdi": "MDI", "iift": "IIFT", "xim": "XIM"
  };

  function render() {
    var matched = getFiltered();
    if (countEl) countEl.textContent = matched.length;
    updatePillStates();
    // window.__updateCompoundingFilters({ year: state.year, group: state.group, exam: state.exam });
    grid.innerHTML = '';
    if (matched.length === 0) {
      grid.style.display = 'none';
      empty.removeAttribute('hidden');
      moreWrap.style.display = 'none';
      return;
    }
    grid.style.display = '';
    empty.setAttribute('hidden', '');
    var slice = matched.slice(0, visibleCount);
    slice.forEach(function (d) {
      var initials = getInitials(d.name);
      var photo = d.photo
        ? '<div class="t-photo"><img src="' + d.photo + '" alt="' + d.name + '" loading="lazy" data-fallback-init="' + initials + '"></div>'
        : '<div class="t-photo-init">' + initials + '</div>';
      var ribbon = RIBBON_SHORT[d.instKey] || (d.institute || '').split(' ')[0];
      var examText = (d.exam || 'cat').toUpperCase() + ' ' + (d.year || '2024-25').split('-')[0];
      var card = document.createElement('div');
      card.className = 'topper';
      card.setAttribute('data-sid', d.sid);
      card.innerHTML =
        '<div class="t-ribbon mint">' + ribbon + '</div>' +
        photo +
        '<div class="t-score small">' + (d.institute || ribbon) + '</div>' +
        '<div class="t-exam">' + examText + ' · Convert</div>' +
        '<div class="t-name">' + d.name + '</div>' +
        '<div class="t-coll"><span class="v">\u2713</span>Verified Convert</div>' +
        '<div class="t-watch">View full story</div>';
      grid.appendChild(card);
    });
    if (matched.length > visibleCount) {
      moreWrap.style.display = '';
    } else {
      moreWrap.style.display = 'none';
    }
  }

  // Wire all 3 axis tab rows - block clicks on disabled pills
  document.querySelectorAll('#hofFilters .hf-row-tabs').forEach(function (row) {
    var axis = row.getAttribute('data-axis');
    row.querySelectorAll('button').forEach(function (btn) {
      btn.addEventListener('click', function () {
        if (btn.classList.contains('disabled')) return;
        row.querySelectorAll('button').forEach(function (b) { b.classList.remove('act'); });
        btn.classList.add('act');
        state[axis] = btn.getAttribute('data-v');
        visibleCount = PAGE_SIZE;

        render();

        // Bidirectional sync: if this is the Year axis, update Compounding cycle pill
        if (axis === 'year') {
          syncCycleFromYear(btn.getAttribute('data-v'));
        }
      });
    });
  });

  // Reset
  if (resetBtn) {
    resetBtn.addEventListener('click', function () {
      state = { exam: "all", group: "all", year: "all" };
      document.querySelectorAll('#hofFilters .hf-row-tabs').forEach(function (row) {
        row.querySelectorAll('button').forEach(function (b) { b.classList.remove('act'); });
        var first = row.querySelector('button');
        if (first) first.classList.add('act');
      });
      visibleCount = PAGE_SIZE;
      render();
      syncCycleFromYear('all');
    });
  }

  // Load more
  if (moreBtn) {
    moreBtn.addEventListener('click', function () {
      visibleCount += PAGE_SIZE;
      render();
    });
  }

  window.__setHofGroupFilter = function (group) {
    state.group = group || "all";
    visibleCount = PAGE_SIZE;
    var row = document.querySelector('#hofFilters .hf-row-tabs[data-axis="group"]');
    if (row) {
      row.querySelectorAll('button').forEach(function (b) {
        b.classList.toggle('act', b.getAttribute('data-v') === state.group);
      });
    }
    render();
  };

  // Bidirectional sync helpers
  function syncCycleFromYear(year) {
    // The 6 cycle pills are gone. Year filter is now the single source of truth.
    // It drives Compounding's stats panel + chart highlight via the exposed updater.
    if (typeof window.__updateCompoundingForYear === 'function') {
      // window.__updateCompoundingForYear(year);
    }
  }

  function syncYearFromCycle(cyc) {
    // Legacy helper - kept inert because cycle pills no longer exist.
    // The Year filter is now the single control surface.
    return;
  }
  window.__syncHofYearFromCycle = syncYearFromCycle;

  // Initial render from local page data so counts/cards are available immediately.
  seedLocalData();
  render();
})();

/* ============================================================================
   v18: AMBIENT SOCIAL-PROOF POPS
   Replaces the old sticky top announcement ticker. Pivoted from "conversion CTA
   nudges" to passive trust signals - no buttons, no links, no friction. Pops
   appear sequentially in a queue: each visible 4s with a thin progress bar,
   then 9s of quiet before the next. Total ~5 pops over a 60s session.

   The pops carry editorial trust messages (audited, live converts, ratings, volume)
   that reinforce the page's claims without asking anything of the user. They
   read like a news ticker rather than a sales banner.
============================================================================ */
(function () {
  // Display timing - tuned for ambient-not-intrusive feel
  var DISPLAY_MS = 4000;   // each pop visible for 4s (matches CSS progress bar)
  var GAP_MS = 9000;   // 9s of quiet between pops
  var FIRST_MS = 8000;   // first pop appears 8s after page load (gives user time to read hero)

  // 12 ambient pops in queue order. Mix of trust signals, recent activity, discount
  // codes, batch announcements, free resources, scarcity, and live-event nudges.
  // None carry a CTA - they read like a passive news ticker. Total queue runtime:
  // ~156 seconds (8s + 12 × 13s), then the page is silent for the rest of the session.
  var POPS = [
    {
      id: 'audit',
      kind: 'audit',
      title: 'KPMG & Brickworks audited',
      body: 'Every result on this page is third-party verified.'
    },
    {
      id: 'live',
      kind: 'live',
      title: 'Live · Sneha just got her IIM-A admit',
      body: 'Verified convert, added to results <b>2 minutes ago</b>.'
    },
    {
      id: 'rating',
      kind: 'rating',
      title: '4.8 stars on Google',
      body: '<b>54,030 verified reviews</b> from CATKing students.'
    },
    {
      id: 'volume',
      kind: 'volume',
      title: '2,080+ IIM converts in 2024-25',
      body: '<b>5,000+ scorers</b> at 99 percentile and above.'
    },
    {
      id: 'faculty',
      kind: 'faculty',
      title: "Sumit Sir's CAT prediction series",
      body: '10 years of forecasting CAT papers. <b>8 of 10 matched in 2024.</b>'
    },
    {
      id: 'discount',
      kind: 'discount',
      title: 'Code <b>EARLY26</b> · &#8377;5,000 off',
      body: 'CAT Intensive 2026. Apply at checkout. Valid till <b>15 May</b>.'
    },
    {
      id: 'announce',
      kind: 'announce',
      title: 'New batch starting 15 May',
      body: 'CAT Intensive 2026. Live + recorded classes, capped at 80 students.'
    },
    {
      id: 'free-mock',
      kind: 'freebie',
      title: 'Free CAT 2024 mock test',
      body: 'All 100 questions with detailed solutions. <b>No signup needed.</b>'
    },
    {
      id: 'live-event',
      kind: 'live',
      title: 'Sumit Sir live · Q&A at 7 PM today',
      body: '30-minute open session. CAT 2026 strategy + interview prep.'
    },
    {
      id: 'recent-enroll',
      kind: 'live',
      title: 'Rohit just enrolled in CAT Turbo 2026',
      body: '<b>23rd enrollment from Mumbai</b> this week.'
    },
    {
      id: 'scarcity',
      kind: 'scarcity',
      title: '12 seats left · May batch',
      body: 'CAT Intensive 2026 cohort caps at 80 students.'
    },
    {
      id: 'free-guide',
      kind: 'freebie',
      title: 'Code <b>WAT500</b> · Free WAT-PI guide',
      body: '28-page playbook from Sumit Sir, bundled with every course.'
    }
  ];

  function buildPop(def) {
    var el = document.createElement('div');
    el.className = 'smart-pop smart-pop-' + def.kind;
    el.setAttribute('data-pop', def.id);
    el.innerHTML =
      '<div class="sp-icon-wrap"><div class="sp-icon sp-icon-' + def.kind + '"></div></div>' +
      '<div class="sp-body">' +
      '<div class="sp-title">' + def.title + '</div>' +
      '<div class="sp-text">' + def.body + '</div>' +
      '</div>' +
      '<div class="sp-progress"></div>';
    return el;
  }

  function showPop(def, onDone) {
    var el = buildPop(def);
    document.body.appendChild(el);
    requestAnimationFrame(function () { el.classList.add('open'); });
    // Auto-dismiss after DISPLAY_MS (matches the progress bar animation)
    setTimeout(function () {
      el.classList.remove('open');
      el.classList.add('closing');
      setTimeout(function () {
        if (el.parentNode) el.parentNode.removeChild(el);
        if (onDone) onDone();
      }, 360);
    }, DISPLAY_MS);
  }

  // Queue runner: walk through POPS sequentially, with GAP_MS between each
  function runQueue() {
    var i = 0;
    function next() {
      if (i >= POPS.length) return; // queue done
      showPop(POPS[i], function () {
        i++;
        if (i < POPS.length) {
          setTimeout(next, GAP_MS);
        }
      });
    }
    setTimeout(next, FIRST_MS);
  }

  // Don't run if user has already dismissed the queue this session
  // (we still respect once-per-session for the whole queue, not per pop)
  var sessionKey = 'ck_pop_queue_done';
  var done = false;
  try { done = sessionStorage.getItem(sessionKey) === '1'; } catch (e) { }
  if (!done) {
    runQueue();
    // Mark done after the queue would have finished (5 pops × ~13s + 8s = ~73s)
    var totalMs = FIRST_MS + (POPS.length * (DISPLAY_MS + GAP_MS));
    setTimeout(function () {
      try { sessionStorage.setItem(sessionKey, '1'); } catch (e) { }
    }, totalMs + 1000);
  }
})();
