<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>CAT 2026 Coaching · CATKing · Live Lectures · 99%ile Faculty · 9,000+ IIM Calls (Lifetime)</title>
<meta name="description" content="Crack CAT 2026 with CATKing. Live lectures by Sumit Sir, 130+ eBooks, full mocks. 2,080+ IIM converts in 2024-25 cycle, 9,000+ IIM calls lifetime. CAT Self Study ₹9,999 | Turbo ₹19,999 | Intensive ₹24,999.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,400;1,500;1,600;1,700&family=DM+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cat-exam-landing.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    @stack('styles')
</head>
<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/header.js') }}" defer></script>
    @unless(request()->routeIs('results'))
    <script src="{{ asset('js/cat-exam-landing.js') }}" defer></script>
    @endunless
    @stack('scripts')




<!-- ============ SMART ANNOUNCEMENT TOASTS (bottom-left, auto-dismissing) ============ -->

<div class="toast-stack" id="toastStack" aria-live="polite" aria-atomic="false"></div>

    @include('layouts.modals')

<script>
document.addEventListener('DOMContentLoaded', function(){
  var footerLogo = document.querySelector('.foot-brand > img');
  if(!footerLogo) return;
  footerLogo.style.cursor = 'pointer';
  footerLogo.setAttribute('role', 'link');
  footerLogo.setAttribute('tabindex', '0');
  footerLogo.setAttribute('aria-label', 'CATKing - Home');
  function goHome(){ window.location.href = '{{ url('/') }}'; }
  footerLogo.addEventListener('click', goHome);
  footerLogo.addEventListener('keydown', function(e){
    if(e.key === 'Enter' || e.key === ' '){
      e.preventDefault();
      goHome();
    }
  });
});
</script>

<!-- ============ STICKY MOBILE BAR ============ -->
<div class="sticky-mobile">
  <a class="workshop" href="javascript:void(0)" onclick="openEnquiryModal()">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
    <span>Free Workshop</span>
  </a>
  <a class="mock" href="https://courses.catking.in/courses/cat-advance-mocks" target="_blank" rel="noopener">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 11H7v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-9h-2v9H9v-9zm6.5-7L14 2h-4l-1.5 2H5v2h14V4z"/><path d="M11 12.5V18h2v-5.5l1.5 1.5L16 12.5 12 8.5 8 12.5l1.5 1.5z"/></svg>
    <span>Take Mock</span>
  </a>
  <a class="whatsapp" href="https://wa.me/918999118999" target="_blank" rel="noopener">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163a11.867 11.867 0 0 1-1.587-5.946C.16 5.335 5.495 0 12.05 0a11.817 11.817 0 0 1 8.413 3.488 11.824 11.824 0 0 1 3.48 8.414c-.003 6.557-5.338 11.892-11.893 11.892a11.9 11.9 0 0 1-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884a9.86 9.86 0 0 0 1.51 5.26l.6.95-1 3.65 3.747-.974-.368-.585zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.149-.173.198-.297.297-.495.099-.198.05-.371-.025-.52-.074-.149-.669-1.611-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.371-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z"/></svg>
    <span>WhatsApp</span>
  </a>
</div>

<!-- ============ V6 PRODUCTION SCRIPTS: Modal, Mega Menus, Smooth scroll ============ -->

</body>
</html>
