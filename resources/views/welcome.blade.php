<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Portofolio Rizqullah') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=bebas-neue:400|manrope:400,500,600,700|playfair-display:500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    
        <style>
  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
  }

  @keyframes ring-pulse {
    0% { box-shadow: 0 0 0 0 rgba(251, 191, 36, 0.2); }
    70% { box-shadow: 0 0 0 18px rgba(251, 191, 36, 0); }
    100% { box-shadow: 0 0 0 0 rgba(251, 191, 36, 0); }
  }
  @keyframes ring-sheen {
    0% { transform: translateX(-65%) rotate(18deg); opacity: 0; }
    35% { opacity: 0.35; }
    70% { opacity: 0; }
    100% { transform: translateX(65%) rotate(18deg); opacity: 0; }
  }

  @keyframes sectionGlow {
    0% { transform: translateY(0); opacity: 0.45; }
    50% { transform: translateY(-10px); opacity: 0.75; }
    100% { transform: translateY(0); opacity: 0.45; }
  }

  /* Loader */
  @keyframes loaderSpin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }
  @keyframes loaderSpinReverse {
    from { transform: rotate(0deg); }
    to { transform: rotate(-360deg); }
  }
  @keyframes loaderPulse {
    0%, 100% { transform: scale(0.98); opacity: 0.8; }
    50% { transform: scale(1.06); opacity: 1; }
  }
  .loader-orb {
    position: relative;
    width: 110px;
    height: 110px;
  }
  .loader-orb::before {
    content: "";
    position: absolute;
    inset: -12px;
    border-radius: 999px;
    background: radial-gradient(circle, rgba(251, 191, 36, 0.25) 0%, transparent 60%);
    filter: blur(6px);
    opacity: 0.8;
  }
  .loader-orb svg {
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100%;
    filter: drop-shadow(0 0 18px rgba(251, 191, 36, 0.35));
  }
  .loader-spin {
    animation: loaderSpin 2.6s linear infinite;
    transform-origin: 50% 50%;
  }
  .loader-spin-slow {
    animation: loaderSpinReverse 5.2s linear infinite;
    transform-origin: 50% 50%;
  }
  .loader-core {
    animation: loaderPulse 1.8s ease-in-out infinite;
    transform-origin: 50% 50%;
  }

  /* Section reveal */
  .section-reveal {
    opacity: 0;
    transform: translateY(26px) scale(0.97);
    filter: blur(6px);
    transition: opacity 720ms cubic-bezier(0.22, 1, 0.36, 1),
                transform 720ms cubic-bezier(0.22, 1, 0.36, 1),
                filter 720ms cubic-bezier(0.22, 1, 0.36, 1);
    will-change: opacity, transform, filter;
  }
  .section-reveal.is-visible {
    opacity: 1;
    transform: translateY(0) scale(1);
    filter: blur(0);
  }
  .section-reveal.is-exit {
    opacity: 0;
    transform: translateY(14px) scale(0.985);
    filter: blur(4px);
  }
  .section-reveal > * {
    opacity: 0;
    transform: translateY(12px);
    filter: blur(2px);
    transition: opacity 520ms ease, transform 620ms ease, filter 620ms ease;
    transition-delay: var(--reveal-delay, 0ms);
  }
  .section-reveal.is-visible > * {
    opacity: 1;
    transform: translateY(0);
    filter: blur(0);
  }
  .section-reveal.is-exit > * {
    opacity: 0;
    transform: translateY(8px);
    filter: blur(2px);
    transition-delay: 0ms;
  }

  /* Button glow + sweep */
  .btn-animate {
    position: relative;
    overflow: hidden;
    transition: transform 180ms ease, box-shadow 220ms ease, filter 220ms ease;
    will-change: transform, box-shadow, filter;
  }
  .btn-animate.absolute { position: absolute; }
  .btn-animate.fixed { position: fixed; }
  .btn-animate::after {
    content: "";
    position: absolute;
    top: -120%;
    left: -120%;
    width: 240%;
    height: 240%;
    background: linear-gradient(120deg, transparent 0%, rgba(251, 191, 36, 0.35) 45%, transparent 70%);
    transform: translateX(-35%) rotate(18deg);
    opacity: 0;
    transition: opacity 220ms ease, transform 700ms ease;
    pointer-events: none;
  }
  .btn-animate:hover {
    transform: translateY(-2px) scale(1.01);
    filter: saturate(1.08);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
  }
  .btn-animate:hover::after {
    opacity: 0.7;
    transform: translateX(35%) rotate(18deg);
  }
  .btn-animate:active {
    transform: translateY(0) scale(0.98);
    filter: saturate(1.02);
  }

  /* ====== COMMON ====== */
  .about-detail { text-align: justify; text-justify: inter-word; }

  .hero-badge {
    color: #f7e3b4;
    text-shadow: 0 0 10px rgba(245, 158, 11, 0.25);
  }
  .hero-title {
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #fbbf24;
    text-shadow: 0 0 12px rgba(245, 158, 11, 0.45), 0 0 28px rgba(245, 158, 11, 0.3);
    font-family: "Bebas Neue", ui-sans-serif, system-ui, sans-serif;
  }
  .hero-title span {
    color: #fcd34d;
    text-shadow: 0 0 14px rgba(251, 191, 36, 0.55), 0 0 30px rgba(245, 158, 11, 0.35);
  }
  .hero-subtitle {
    font-family: "Manrope", ui-sans-serif, system-ui, sans-serif;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #f5d97b;
  }
  .about-title .intro {
    display: block;
    font-size: clamp(1rem, 2vw, 1.6rem);
    color: #ffffff;
    text-shadow: 0 0 6px rgba(255, 255, 255, 0.2);
    font-family: "Manrope", ui-sans-serif, system-ui, sans-serif;
    letter-spacing: 0.25em;
  }
  .about-title .name {
    display: block;
    max-width: 22ch;
    margin-top: 0.3rem;
    font-size: clamp(1.55rem, 3.2vw, 2.5rem);
    line-height: 1.1;
    background: linear-gradient(120deg, #f6d365 0%, #fbbf24 40%, #f59e0b 70%, #fde68a 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 0 6px 16px rgba(245, 158, 11, 0.25);
    -webkit-text-stroke: 1px rgba(18, 12, 6, 0.35);
    word-break: keep-all;
    font-family: "Playfair Display", ui-serif, Georgia, serif;
  }
  .social-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 999px;
    border: 1px solid rgba(255, 255, 255, 0.08);
    background: rgba(15, 23, 42, 0.6);
    color: #f8fafc;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.35);
    transition: transform 180ms ease, color 180ms ease, border-color 180ms ease, box-shadow 180ms ease;
  }
  .social-btn--ig{
    color: #f8fafc;
    border-color: rgba(255, 255, 255, 0.18);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.35);
  }
  .social-btn:hover{
    color: #fbbf24;
    border-color: rgba(251, 191, 36, 0.6);
    box-shadow: 0 0 14px rgba(251, 191, 36, 0.25);
    transform: translateY(-2px);
  }
  .social-btn:active{
    transform: translateY(0) scale(0.96);
  }

/* HEADER tetap seperti punya kamu */
.site-header{
  position: fixed;
  top: 0; left: 0;
  width: 100%;
  z-index: 50;
  overflow: visible;
  background: rgba(0, 0, 0, 0.35);
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  box-shadow: 0 10px 30px rgba(0,0,0,0.35);
  transition: background 220ms ease, backdrop-filter 220ms ease, border-color 220ms ease, box-shadow 220ms ease;
  will-change: backdrop-filter, background;
}

/* blur aktif setelah discroll */
.site-header.is-scrolled{
  background: rgba(2, 6, 23, 0.62);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border-bottom-color: rgba(251,191,36,0.22);
  box-shadow: 0 14px 40px rgba(0,0,0,0.5);
}

@supports not ((backdrop-filter: blur(1px)) or (-webkit-backdrop-filter: blur(1px))){
  .site-header.is-scrolled{ background: rgba(2, 6, 23, 0.92); }
}

/* ============================
   SVG LINE (zigzag) - GOLD
   ============================ */
/* matikan notch/garis lama biar gak dobel */
.site-header::after{ content:none !important; }

/* NAV LINK */
.nav-link{
  font-size: 0.95rem;
  letter-spacing: 0.08em;
  transition: transform 180ms ease, color 180ms ease, text-shadow 180ms ease;
}
.nav-link::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-10px;
  width:100%;
  height:2px;
  opacity:0.6;
  transform:scaleX(0);
  transform-origin:center;
  transition:transform 250ms ease;
  background: linear-gradient(90deg, transparent 0%, rgba(251,191,36,0.95) 50%, transparent 100%);
}
.nav-link:hover::after{ transform:scaleX(1); }
.nav-link:hover{
  color:#fbbf24;
  text-shadow:0 0 10px rgba(251,191,36,0.35);
  transform:translateY(-1px);
}
.nav-link:active{
  transform:translateY(0) scale(0.96);
  text-shadow:0 0 12px rgba(251,191,36,0.5);
}

/* WRAPPER garis */
.header-line-wrap{
  position: absolute;
  left: 0;
  right: 0;
  bottom: -12px;
  height: 26px;              /* lebih tinggi biar lekukan kebaca */
  z-index: 1;
  pointer-events: none;
}

.header-line{
  width: 100%;
  height: 100%;
  display: block;
}

/* garis utama tipis */
.header-line .line-main{
  fill: none;
  stroke: url(#lineGradient);
  stroke-width: 3;
  stroke-linecap: round;
  stroke-linejoin: round;
}

/* glow halus */
.header-line .line-glow{
  fill: none;
  stroke: rgba(251, 191, 36, 0.5);
  stroke-width: 10;
  stroke-linecap: round;
  stroke-linejoin: round;
  filter: blur(2.2px);
  opacity: 0.9;
}
.header-line .line-main--mobile,
.header-line .line-glow--mobile{
  display: none;
}

/* mobile tetap sama (skalanya ikut SVG) */
@media (max-width: 767px){
  .header-line-wrap{ height: 22px; }
  .header-line .line-main{ stroke-width: 2.5; }
  .header-line .line-main--desktop,
  .header-line .line-glow--desktop{
    display: none;
  }
  .header-line .line-main--mobile,
  .header-line .line-glow--mobile{
    display: block;
  }
}

/* mobile nav single row + button feel */
.mobile-menu{
  flex-wrap: nowrap;
  gap: 10px;
  overflow: hidden;
}
.mobile-link{
  color: #e2e8f0;
  padding: 2px 4px;
  font-size: 12px;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  white-space: nowrap;
  transition: transform 180ms ease, color 180ms ease, text-shadow 180ms ease;
}
.mobile-link:hover{
  color: #fbbf24;
  text-shadow: 0 0 8px rgba(251, 191, 36, 0.4);
  transform: translateY(-1px);
}
.mobile-link:active{
  transform: translateY(0) scale(0.96);
}
.mobile-toggle{
  position: relative;
}
.menu-bars{
  position: relative;
  width: 18px;
  height: 12px;
  display: inline-block;
}
.menu-bars::before,
.menu-bars::after,
.menu-bars span{
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 2px;
  border-radius: 999px;
  background: rgba(251, 191, 36, 0.95);
  box-shadow: 0 0 6px rgba(251, 191, 36, 0.35);
}
.menu-bars::before{
  top: 0;
}
.menu-bars span{
  top: 5px;
}
.menu-bars::after{
  bottom: 0;
}

</style>

<script>
  const header = document.querySelector('.site-header');

  const setHeaderState = () => {
    if (!header) return;
    header.classList.toggle('is-scrolled', window.scrollY > 10);
  };

  const syncHeaderHeight = () => {
    if (!header) return;
    const h = header.getBoundingClientRect().height;
    document.documentElement.style.setProperty('--header-h', `${Math.ceil(h)}px`);
  };

  setHeaderState();
  syncHeaderHeight();

  window.addEventListener('scroll', setHeaderState, { passive: true });
  window.addEventListener('resize', syncHeaderHeight, { passive: true });
</script>


    </head>
    <body class="bg-[#0b0f16] text-slate-100 antialiased selection:bg-amber-400 selection:text-slate-900 font-['Manrope',_ui-sans-serif,_system-ui,_sans-serif] overflow-hidden">
        <div id="loadingScreen" class="fixed inset-0 z-[999] flex items-center justify-center overflow-hidden bg-[#0b0f16] transition-opacity duration-700">
            <div class="pointer-events-none absolute inset-0">
                <div class="absolute -left-24 top-10 h-80 w-80 rounded-full bg-amber-500/20 blur-3xl"></div>
                <div class="absolute right-[-6rem] top-24 h-96 w-96 rounded-full bg-indigo-500/10 blur-3xl"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,_rgba(226,232,240,0.06)_1px,_transparent_0)] bg-[length:24px_24px]"></div>
            </div>
            <div class="flex flex-col items-center gap-4 text-center">
                <div class="loader-orb" aria-hidden="true">
                    <svg viewBox="0 0 120 120" role="img" aria-label="Loading">
                        <defs>
                            <linearGradient id="loaderGradient" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="#fde68a" />
                                <stop offset="50%" stop-color="#fbbf24" />
                                <stop offset="100%" stop-color="#f59e0b" />
                            </linearGradient>
                            <linearGradient id="loaderCool" x1="1" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#38bdf8" />
                                <stop offset="100%" stop-color="#0ea5e9" />
                            </linearGradient>
                        </defs>
                        <circle class="loader-spin" cx="60" cy="60" r="46" fill="none" stroke="url(#loaderGradient)" stroke-width="6" stroke-linecap="round" stroke-dasharray="180 60" />
                        <circle class="loader-spin-slow" cx="60" cy="60" r="34" fill="none" stroke="url(#loaderCool)" stroke-width="4" stroke-linecap="round" stroke-dasharray="140 40" />
                        <circle class="loader-core" cx="60" cy="60" r="14" fill="url(#loaderGradient)" />
                        <circle class="loader-core" cx="60" cy="60" r="7" fill="#0b0f16" opacity="0.9" />
                    </svg>
                </div>
                <p class="text-2xl font-semibold uppercase tracking-[0.4em] sm:text-4xl md:text-5xl font-['Bebas_Neue',_ui-sans-serif,_system-ui]" style="background:linear-gradient(120deg,#fcd34d 0%,#f59e0b 45%,#fbbf24 70%,#fde68a 100%);-webkit-background-clip:text;background-clip:text;color:transparent;text-shadow:0 8px 24px rgba(245,158,11,0.25);">RIZQULLAH DAFA NUSA</p>
                <p id="loaderUrl" class="text-xs font-semibold text-slate-300 sm:text-sm">www.rizqullahdafanusa.com</p>
            </div>
        </div>
        <div class="relative">
            <div class="pointer-events-none absolute inset-0 -z-10">
                <div class="absolute -left-32 top-10 h-80 w-80 rounded-full bg-amber-500/20 blur-3xl motion-safe:animate-pulse"></div>
                <div class="absolute right-[-6rem] top-24 h-96 w-96 rounded-full bg-slate-800/60 blur-3xl motion-safe:animate-pulse"></div>
                <div class="absolute left-1/2 top-[-8rem] h-64 w-64 -translate-x-1/2 rounded-full bg-amber-400/20 blur-3xl motion-safe:animate-pulse"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,_rgba(226,232,240,0.05)_1px,_transparent_0)] bg-[length:26px_26px]"></div>
            </div>

            <header class="site-header fixed top-0 left-0 z-50 w-full border-b border-white/10 bg-black/60 shadow-sm shadow-black/40 backdrop-blur">
                <nav class="mx-auto grid w-full max-w-6xl grid-cols-1 items-center gap-4 px-6 py-4 md:grid-cols-[1fr_auto_1fr]">
                    <div class="hidden items-center gap-8 text-sm font-semibold text-slate-200 md:flex">
                        <a class="nav-link relative text-slate-200 transition hover:text-white" href="#home">Home</a>
                        <a class="nav-link relative text-slate-200 transition hover:text-white" href="#about">About</a>
                    </div>
                    <div class="flex w-full items-center justify-between md:justify-center md:gap-8">
                        <div class="flex flex-col items-start gap-1 md:items-center">
                            <a href="#home" class="brand flex items-center gap-3 text-lg font-semibold tracking-tight text-white">
                                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-slate-900 text-amber-300 shadow-lg shadow-amber-500/20">R</span>
                                <span class="text-sm font-semibold uppercase tracking-[0.2em] text-slate-200">Rizqullah Dafa Nusa</span>
                            </a>
                            <span class="brand-sub text-[10px] font-semibold uppercase tracking-[0.3em] text-amber-200">Let's see the awesome experience</span>
                        </div>
                        <button id="mobileMenuToggle" class="mobile-toggle inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 p-2 text-amber-200 transition md:hidden" type="button" aria-expanded="false" aria-controls="mobileMenu">
                            <span class="sr-only">Open menu</span>
                            <span class="menu-bars"><span></span></span>
                        </button>
                    </div>
                    <div class="hidden items-center justify-end gap-8 text-sm font-semibold text-slate-200 md:flex">
                        <a class="nav-link relative text-slate-200 transition hover:text-white" href="#portofolio">Portofolio</a>
                        <a class="nav-link relative text-slate-200 transition hover:text-white" href="#contact">Contact</a>
                    </div>
                    <div id="mobileMenu" class="mobile-menu hidden w-full flex flex-wrap items-center justify-center gap-4 rounded-2xl border border-white/10 bg-slate-950/80 px-5 py-4 text-sm font-semibold text-slate-200 shadow-lg md:hidden">
                        <a class="mobile-link px-2 py-1 transition" href="#home">Home</a>
                        <a class="mobile-link px-2 py-1 transition" href="#about">About</a>
                        <a class="mobile-link px-2 py-1 transition" href="#portofolio">Portofolio</a>
                        <a class="mobile-link px-2 py-1 transition" href="#contact">Contact</a>
                    </div>
                </nav>
                <div class="header-line-wrap" aria-hidden="true">
                  <svg class="header-line" viewBox="0 0 1200 60" preserveAspectRatio="none">
                    <defs>
                      <linearGradient id="lineGradient" x1="0" x2="1" y1="0" y2="0">
                        <stop offset="0%" stop-color="rgba(251,191,36,0)" />
                        <stop offset="15%" stop-color="#fcd34d" />
                        <stop offset="50%" stop-color="#f59e0b" />
                        <stop offset="85%" stop-color="#fcd34d" />
                        <stop offset="100%" stop-color="rgba(251,191,36,0)" />
                      </linearGradient>
                    </defs>
                    <!-- glow -->
                    <path class="line-glow line-glow--desktop"
                      d="M0 20
                         L280 20
                         L420 20
                         L520 46
                         L680 46
                         L820 20
                         L1200 20" />
                    <path class="line-glow line-glow--mobile"
                      d="M0 20
                         L180 20
                         L360 20
                         L520 46
                         L680 46
                         L840 20
                         L1020 20
                         L1200 20" />
                    <!-- main line -->
                    <path class="line-main line-main--desktop"
                      d="M0 20
                         L280 20
                         L420 20
                         L520 46
                         L680 46
                         L820 20
                         L1200 20" />
                    <path class="line-main line-main--mobile"
                      d="M0 20
                         L180 20
                         L360 20
                         L520 46
                         L680 46
                         L840 20
                         L1020 20
                         L1200 20" />
                  </svg>
                </div>
            </header>

            <main class="mx-auto flex w-full max-w-6xl flex-col gap-20 px-6 pb-24 pt-32 md:pt-36">
                <section id="home" class="grid items-center gap-10 rounded-[32px] border border-white/10 bg-gradient-to-br from-slate-900/80 via-slate-950/90 to-black px-6 py-10 shadow-2xl shadow-black/60 md:grid-cols-[1.1fr_0.9fr] md:px-10 md:py-14">
                    <div class="space-y-6 text-center md:text-left">
                        <p class="hero-badge inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em]">
                            Informatics Engineering
                        </p>
                        <h1 class="hero-title text-4xl font-semibold leading-tight md:text-5xl">
                            Welcome to my
                            <span class="block">portofolio</span>
                        </h1>
                        <p class="hero-subtitle text-base md:text-lg">
                            <span id="heroTyping" data-text="Amatir Developer">Amatir Developer</span>
                        </p>
                        <p class="text-base text-slate-300 md:text-lg">
                            Hi, saya Dafa, mahasiswa Informatika dengan minat pada pengembangan aplikasi, website, desain, dan pengelolaan data.
                        </p>
                        <div class="flex flex-wrap items-center justify-center gap-4 md:justify-start">
                            <a href="#portofolio" class="rounded-full bg-amber-400 px-6 py-3 text-sm font-semibold text-slate-900 shadow-lg shadow-amber-500/40 transition hover:-translate-y-1 hover:bg-amber-300 hover:shadow-xl">Lihat Portofolio</a>
                            <a href="#contact" class="rounded-full border border-white/10 bg-white/5 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-1 hover:border-white/20 hover:bg-white/10 hover:shadow-lg">Kontak Saya</a>
                        </div>
                        <div class="flex items-center justify-center gap-3 md:justify-start">
                            <a href="https://github.com/dafanusa" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="GitHub">
                                <svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor" aria-hidden="true">
                                    <path d="M12 2c-5.52 0-10 4.48-10 10 0 4.42 2.87 8.17 6.84 9.5.5.09.66-.22.66-.48 0-.24-.01-.87-.01-1.71-2.78.6-3.37-1.34-3.37-1.34-.45-1.15-1.11-1.46-1.11-1.46-.91-.62.07-.61.07-.61 1 .07 1.53 1.03 1.53 1.03 .9 1.54 2.36 1.1 2.94.84.09-.65.35-1.1.63-1.35-2.22-.25-4.56-1.11-4.56-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02.8-.22 1.66-.33 2.51-.33.85 0 1.71.11 2.51.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.35 4.69-4.59 4.93.36.31.68.93.68 1.87 0 1.35-.01 2.44-.01 2.77 0 .26.16.58.67.48 3.97-1.33 6.84-5.08 6.84-9.5 0-5.52-4.48-10-10-10Z"></path>
                                </svg>
                            </a>
                            <a href="https://instagram.com/dafa.nusa" target="_blank" rel="noopener noreferrer" class="social-btn social-btn--ig" aria-label="Instagram">
                                <svg viewBox="0 0 24 24" class="h-7 w-7" fill="currentColor" aria-hidden="true">
                                    <path d="M12 7.35A4.65 4.65 0 1 0 12 16.65 4.65 4.65 0 0 0 12 7.35Zm0 7.67A3.02 3.02 0 1 1 12 9a3.02 3.02 0 0 1 0 6.04Zm5.92-7.78a1.08 1.08 0 1 1-1.08-1.08 1.08 1.08 0 0 1 1.08 1.08ZM20 8.38c-.04-.82-.22-1.55-.82-2.15s-1.33-.78-2.15-.82c-.85-.05-3.41-.05-4.26-.05s-3.41 0-4.26.05c-.82.04-1.55.22-2.15.82s-.78 1.33-.82 2.15c-.05.85-.05 3.41-.05 4.26s0 3.41.05 4.26c.04.82.22 1.55.82 2.15s1.33.78 2.15.82c.85.05 3.41.05 4.26.05s3.41 0 4.26-.05c.82-.04 1.55-.22 2.15-.82s.78-1.33.82-2.15c.05-.85.05-3.41-.05-4.26s0-3.41-.05-4.26Zm-1.95 8.56a2.27 2.27 0 0 1-1.28 1.28c-.88.35-2.98.27-4.77.27s-3.89.08-4.77-.27a2.27 2.27 0 0 1-1.28-1.28c-.35-.88-.27-2.98-.27-4.77s-.08-3.89.27-4.77a2.27 2.27 0 0 1 1.28-1.28c.88-.35 2.98-.27 4.77-.27s3.89-.08 4.77.27a2.27 2.27 0 0 1 1.28 1.28c.35.88.27 2.98.27 4.77s.08 3.89-.27 4.77Z"></path>
                                </svg>
                            </a>
                            <a href="https://linkedin.com/in/rizqullah-dafa-nusa" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="LinkedIn">
                                <svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor" aria-hidden="true">
                                    <path d="M20.45 20.45h-3.56v-5.6c0-1.34-.03-3.06-1.86-3.06-1.86 0-2.15 1.45-2.15 2.96v5.7H9.32V9h3.42v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28ZM5.34 7.43a2.07 2.07 0 1 1 0-4.14 2.07 2.07 0 0 1 0 4.14Zm-1.78 13.02h3.56V9H3.56v11.45Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="relative group hidden md:block">
                        <div class="relative overflow-hidden rounded-[32px] border border-white/10 bg-slate-900/70 shadow-2xl shadow-black/60 transition duration-500 group-hover:-translate-y-2 group-hover:shadow-[0_40px_80px_rgba(0,0,0,0.55)] group-active:translate-y-0 group-active:scale-[0.99]">
                            <img class="h-[520px] w-full object-cover object-center transition duration-700 group-hover:scale-[1.03] group-active:scale-[1.01]" src="{{ asset('assets/home/fixhome.png') }}" alt="Foto profil" loading="lazy" decoding="async" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>
                            <div class="absolute left-6 right-6 top-6">
                                <p class="text-2xl font-semibold text-white/90">Rizqullah Dafa Nusa</p>
                                <p class="text-xs uppercase tracking-[0.3em] text-white/60">Informatics Engineering</p>
                            </div>
                            <div class="absolute bottom-6 left-6 right-6 flex items-center justify-between gap-3 rounded-2xl border border-white/10 bg-black/50 px-4 py-3 text-xs text-white/70 shadow-lg">
                                <div class="flex items-center gap-3">
                                    <img class="h-8 w-8 rounded-full border border-white/10 object-cover" src="{{ asset('assets/home/avatar.png') }}" alt="Avatar Dafa" loading="lazy" decoding="async" />
                                    <div class="leading-tight">
                                        <span class="block text-[12px] font-medium tracking-[0.08em] text-white/80">@dafa.nusa</span>
                                        <span class="block text-[10px] text-amber-300">Online</span>
                                    </div>
                                </div>
                                <a href="#contact" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.2em] text-amber-300 transition hover:border-amber-300/60 hover:text-amber-200">
                                    Contact Me
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="about" class="section-ambient flex flex-col items-center gap-8 text-center">
                    <div class="space-y-2">
                        <p class="text-2xl font-semibold uppercase tracking-[0.3em] text-amber-300 sm:text-4xl md:text-5xl">About Me</p>
                        <p class="text-sm font-semibold text-slate-300 md:text-base">Kenali saya lebih dekat dan perjalanan saya.</p>
                    </div>
                    <div class="grid w-full items-center gap-10 md:grid-cols-[0.9fr_1.1fr] md:text-left">
                        <div class="relative flex justify-center md:justify-start">
                            <button type="button" class="group reveal-on-scroll relative h-72 w-72 rounded-full focus:outline-none sm:h-80 sm:w-80 md:h-[420px] md:w-[420px] lg:h-[480px] lg:w-[480px]" aria-label="Foto tentang saya">
                                <span class="pointer-events-none absolute -inset-6 rounded-full bg-gradient-to-tr from-amber-500/10 via-transparent to-amber-300/15 blur-2xl transition duration-300 group-hover:opacity-100"></span>
                                <span class="pointer-events-none absolute inset-0 rounded-full border border-white/15 transition duration-300 group-hover:border-amber-300/60"></span>
                                <span class="pointer-events-none absolute inset-0 rounded-full transition duration-300 group-hover:shadow-[0_0_50px_rgba(251,191,36,0.25)] group-active:shadow-[0_0_70px_rgba(251,191,36,0.45)]"></span>
                                <span class="pointer-events-none absolute inset-0 rounded-full opacity-0 transition duration-300 group-hover:opacity-100 group-active:opacity-100 motion-safe:animate-[ring-pulse_2.6s_ease-out_infinite]"></span>
                                <span class="pointer-events-none absolute inset-0 rounded-full overflow-hidden">
                                    <span class="absolute -left-1/2 top-0 h-full w-1/2 bg-gradient-to-r from-transparent via-white/20 to-transparent opacity-0 transition duration-300 group-hover:opacity-100 group-active:opacity-100 motion-safe:animate-[ring-sheen_6.5s_ease-in-out_infinite]"></span>
                                </span>
                                <img class="absolute inset-0 h-full w-full rounded-full object-cover object-center shadow-2xl shadow-black/40 transition duration-300 group-hover:scale-[1.01] group-active:scale-[0.99]" src="{{ asset('assets/about/aboutme.jpg') }}" alt="Foto tentang saya" loading="lazy" decoding="async" />
                            </button>
                        </div>
                        <div class="space-y-4">
                            <h2 class="about-title text-xl font-semibold text-white sm:text-4xl md:text-5xl font-['Playfair_Display',_ui-serif,_Georgia,_serif]">
                                <span class="intro">HELLO, I'M</span>
                                <span class="name">RIZQULLAH ATSIR<br>DAFA CHILDYASA NUSA</span>
                            </h2>
                            <p class="about-detail text-base text-slate-300 md:text-lg">
                                I'm Informatics student at the University of Muhammadiyah Malang. I am interested in learning about data analysis and data science. I have basic skills in using Microsoft Office, as well as experience in editing and design. In addition, I enjoy developing mobile applications and building websites. I also like exploring new technologies and implementing data management to continuously improve my skills.
                            </p>
                            <div class="grid w-full gap-4 sm:grid-cols-2">
                                <div class="rounded-2xl border border-white/10 bg-slate-900/70 p-4 shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <p class="text-sm font-semibold text-white">1+ Tahun</p>
                                    <p class="text-xs text-slate-400">Pengalaman membangun UI</p>
                                </div>
                                <div class="rounded-2xl border border-white/10 bg-slate-900/70 p-4 shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <p class="text-sm font-semibold text-white">10+ Proyek</p>
                                    <p class="text-xs text-slate-400">Web dan design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="portofolio" class="section-ambient space-y-8">
                    <div class="flex flex-col items-center gap-4 text-center">
                        <div class="space-y-2">
                            <p class="text-2xl font-semibold uppercase tracking-[0.3em] text-amber-300 sm:text-4xl md:text-5xl">Portofolio</p>
                            <p class="text-sm font-semibold text-slate-300 md:text-base">Explore my journey through projects, certifications, and skills.</p>
                        </div>
                        <div class="portofolio-tabs grid w-full grid-cols-3 gap-3 sm:flex sm:flex-wrap sm:justify-center sm:gap-4">
                            <button class="group flex w-full flex-col items-center gap-2 rounded-2xl border border-white/10 bg-slate-900/60 px-4 py-4 text-sm font-semibold text-slate-300 shadow-lg shadow-black/40 transition data-[active=true]:bg-amber-400 data-[active=true]:text-slate-900 data-[active=true]:shadow-xl sm:w-52 md:w-64" data-tab="projects" data-active="true">
                                <span class="grid h-9 w-9 place-items-center rounded-full bg-white/5 text-amber-300 transition group-data-[active=true]:bg-slate-900 group-data-[active=true]:text-amber-300">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M4 7h16M4 12h16M4 17h10"></path>
                                    </svg>
                                </span>
                                Projects
                            </button>
                            <button class="group flex w-full flex-col items-center gap-2 rounded-2xl border border-white/10 bg-slate-900/60 px-4 py-4 text-sm font-semibold text-slate-300 shadow-lg shadow-black/40 transition data-[active=true]:bg-amber-400 data-[active=true]:text-slate-900 data-[active=true]:shadow-xl sm:w-52 md:w-64" data-tab="certificates" data-active="false">
                                <span class="grid h-9 w-9 place-items-center rounded-full bg-white/5 text-amber-300 transition group-data-[active=true]:bg-slate-900 group-data-[active=true]:text-amber-300">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 3l3 6 6 .9-4.5 4.4 1 6.2L12 17l-5.5 3.5 1-6.2L3 9.9 9 9z"></path>
                                    </svg>
                                </span>
                                Certificates
                            </button>
                            <button class="group flex w-full flex-col items-center gap-2 rounded-2xl border border-white/10 bg-slate-900/60 px-4 py-4 text-sm font-semibold text-slate-300 shadow-lg shadow-black/40 transition data-[active=true]:bg-amber-400 data-[active=true]:text-slate-900 data-[active=true]:shadow-xl sm:w-52 md:w-64" data-tab="skills" data-active="false">
                                <span class="grid h-9 w-9 place-items-center rounded-full bg-white/5 text-amber-300 transition group-data-[active=true]:bg-slate-900 group-data-[active=true]:text-amber-300">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M4 13l4 4L20 5"></path>
                                    </svg>
                                </span>
                                Skills
                            </button>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div data-tab-panel="projects" class="space-y-6">
                            <div class="flex w-full justify-center">
                                <div class="flex flex-wrap gap-3 rounded-full border border-white/10 bg-slate-900/60 p-3 text-sm font-semibold text-slate-300 shadow-lg shadow-black/40">
                                    <button class="rounded-full px-5 py-2 transition data-[active=true]:bg-amber-400 data-[active=true]:text-slate-900 data-[active=true]:shadow-md data-[active=false]:text-slate-300" data-filter="project" data-active="true">Project</button>
                                    <button class="rounded-full px-5 py-2 transition data-[active=true]:bg-amber-400 data-[active=true]:text-slate-900 data-[active=true]:shadow-md data-[active=false]:text-slate-300" data-filter="design" data-active="false">Design</button>
                                </div>
                            </div>
                            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="project" data-portfolio-item="project" data-detail-title="Website UMKM Modern" data-detail-desc="Landing page dengan CTA jelas, layout bersih, dan animasi masuk halus." data-detail-image="{{ asset('assets/projects/mvbtummaplikasi.png') }}" data-detail-link="https://drive.google.com/drive/folders/1bDY2UAT5Pe3dOaeTAqu5e2a697DPNeTm?usp=drive_link" data-detail-link-label="Lihat Project" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/projects/mvbtummaplikasi.png') }}" alt="Project website" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Website UMKM Modern</h3>
                                        <p class="text-sm text-slate-300">Landing page dengan CTA jelas, layout bersih, dan animasi masuk halus.</p>
                                    </div>
                                </article>
                                <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="project" data-portfolio-item="project" data-detail-title="Portofolio Kreatif" data-detail-desc="Section highlight, timeline, dan showcase project yang rapi." data-detail-image="{{ asset('assets/portofolio/project-2.jpg') }}" data-detail-link="#" data-detail-link-label="Kunjungi Website" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/portofolio/project-2.jpg') }}" alt="Project portofolio" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Portofolio Kreatif</h3>
                                        <p class="text-sm text-slate-300">Section highlight, timeline, dan showcase project yang rapi.</p>
                                    </div>
                                </article>
                                    <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="project" data-portfolio-item="project" data-detail-title="Portofolio Kreatif" data-detail-desc="Section highlight, timeline, dan showcase project yang rapi." data-detail-image="{{ asset('assets/portofolio/project-2.jpg') }}" data-detail-link="#" data-detail-link-label="Kunjungi Website" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/portofolio/project-2.jpg') }}" alt="Project portofolio" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Portofolio Kreatif</h3>
                                        <p class="text-sm text-slate-300">Section highlight, timeline, dan showcase project yang rapi.</p>
                                    </div>
                                </article>
                                    <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="project" data-portfolio-item="project" data-detail-title="Portofolio Kreatif" data-detail-desc="Section highlight, timeline, dan showcase project yang rapi." data-detail-image="{{ asset('assets/portofolio/project-2.jpg') }}" data-detail-link="#" data-detail-link-label="Kunjungi Website" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/portofolio/project-2.jpg') }}" alt="Project portofolio" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Portofolio Kreatif</h3>
                                        <p class="text-sm text-slate-300">Section highlight, timeline, dan showcase project yang rapi.</p>
                                    </div>
                                </article>
                                    <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="project" data-portfolio-item="project" data-detail-title="Portofolio Kreatif" data-detail-desc="Section highlight, timeline, dan showcase project yang rapi." data-detail-image="{{ asset('assets/portofolio/project-2.jpg') }}" data-detail-link="#" data-detail-link-label="Kunjungi Website" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/portofolio/project-2.jpg') }}" alt="Project portofolio" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Portofolio Kreatif</h3>
                                        <p class="text-sm text-slate-300">Section highlight, timeline, dan showcase project yang rapi.</p>
                                    </div>
                                </article>
                                    <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="project" data-portfolio-item="project" data-detail-title="Portofolio Kreatif" data-detail-desc="Section highlight, timeline, dan showcase project yang rapi." data-detail-image="{{ asset('assets/portofolio/project-2.jpg') }}" data-detail-link="#" data-detail-link-label="Kunjungi Website" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/portofolio/project-2.jpg') }}" alt="Project portofolio" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Portofolio Kreatif</h3>
                                        <p class="text-sm text-slate-300">Section highlight, timeline, dan showcase project yang rapi.</p>
                                    </div>
                                </article>
                                    <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="project" data-portfolio-item="project" data-detail-title="Portofolio Kreatif" data-detail-desc="Section highlight, timeline, dan showcase project yang rapi." data-detail-image="{{ asset('assets/portofolio/project-2.jpg') }}" data-detail-link="#" data-detail-link-label="Kunjungi Website" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/portofolio/project-2.jpg') }}" alt="Project portofolio" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Portofolio Kreatif</h3>
                                        <p class="text-sm text-slate-300">Section highlight, timeline, dan showcase project yang rapi.</p>
                                    </div>
                                </article>

                                <!-- DESIGN (pemisah kode) -->

                                <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="design" data-portfolio-item="design" data-detail-title="Poster Aplikasi MVBT Activity Manager" data-detail-desc="" data-detail-image="{{ asset('assets/design/postermobile.png') }}" data-detail-link="#" data-detail-link-label="Lihat Design" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/design/postermobile.png') }}" alt="Design mobile" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Poster Aplikasi MVBT Activity Manager</h3>
                                        <p class="text-sm text-slate-300">Poster ini menampilkan rancangan aplikasi MVBT Activity Manager dengan fokus pada eksplorasi warna, penggunaan card UI, serta komponen interaktif. Desain disusun untuk menonjolkan alur fitur aplikasi, kemudahan navigasi, dan tampilan mobile-friendly yang modern serta informatif.</p>
                                    </div>
                                </article>
                                <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="design" data-portfolio-item="design" data-detail-title="Poster Platform Katalis" data-detail-desc="" data-detail-image="{{ asset('assets/design/posterkatalis.jpeg') }}" data-detail-link="#" data-detail-link-label="Lihat Behance" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/design/posterkatalis.jpeg') }}" alt="Design dashboard" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Poster Platform Katalis</h3>
                                        <p class="text-sm text-slate-300">Poster Platform Katalis dirancang untuk menyajikan informasi secara ringkas dan mudah dipahami dengan penekanan pada hierarchy visual. Tata letak ikon, ilustrasi, dan teks membantu audiens memahami fitur unggulan, metode pembayaran, serta keunggulan platform secara cepat dan efektif.</p>
                                    </div>
                                </article>
                                    <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="design" data-portfolio-item="design" data-detail-title="Poster IOT Smart-Pass" data-detail-desc="" data-detail-image="{{ asset('assets/design/postersmartpass.png') }}" data-detail-link="#" data-detail-link-label="Lihat Behance" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/design/postersmartpass.png') }}" alt="Design dashboard" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Poster IOT Smart-Pass</h3>
                                        <p class="text-sm text-slate-300">Poster ini menggambarkan konsep IoT Smart-Pass dengan visual yang terstruktur dan sistematis. Desain berfokus pada penyampaian tujuan, manfaat, dan komponen alat IoT, sehingga informasi teknis dapat dipahami dengan lebih jelas melalui pendekatan visual yang rapi dan terorganisir.</p>
                                    </div>
                                </article>
                                    <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="design" data-portfolio-item="design" data-detail-title="Poster Metode Penelitian" data-detail-desc="" data-detail-image="{{ asset('assets/design/postermetpen.png') }}" data-detail-link="#" data-detail-link-label="Lihat Behance" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/design/postermetpen.png') }}" alt="Design dashboard" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Poster Metode Penelitian</h3>
                                        <p class="text-sm text-slate-300">Poster Metode Penelitian dibuat untuk memvisualisasikan alur penelitian secara informatif dan akademis. Penggunaan ilustrasi, warna, dan pembagian section membantu menjelaskan latar belakang, metode, serta kesimpulan penelitian dengan tampilan yang menarik namun tetap formal.</p>
                                    </div>
                                </article>
                                    <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="design" data-portfolio-item="design" data-detail-title="Design Menu Makanan Nusantara Restaurant" data-detail-desc="" data-detail-image="{{ asset('assets/design/menumakanan.png') }}" data-detail-link="#" data-detail-link-label="Lihat Behance" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/design/menumakanan.png') }}" alt="Design dashboard" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Design Menu Makanan Nusantara Restaurant</h3>
                                        <p class="text-sm text-slate-300">Desain menu ini mengangkat kekayaan kuliner Nusantara dengan nuansa tradisional yang kuat. Pemilihan warna, tipografi, dan ikon daerah dirancang untuk memperkuat identitas budaya sekaligus memudahkan pengunjung dalam membaca daftar menu dan harga.</p>
                                    </div>
                                </article>
                                    <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="design" data-portfolio-item="design" data-detail-title="Logo Nusantara Restaurant" data-detail-desc="" data-detail-image="{{ asset('assets/design/logonr.png') }}" data-detail-link="#" data-detail-link-label="Lihat Behance" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/design/logonr.png') }}" alt="Design dashboard" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Logo Nusantara Restaurant</h3>
                                        <p class="text-sm text-slate-300">Logo Nusantara Restaurant mengusung konsep budaya lokal dengan elemen ornamen khas Indonesia. Desain logo menonjolkan kesan tradisional, elegan, dan berkarakter, sehingga mampu merepresentasikan identitas restoran yang berfokus pada cita rasa dan warisan kuliner Nusantara.</p>
                                    </div>
                                </article>
                                                                    <article class="group grid cursor-pointer gap-4 rounded-3xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-category="design" data-portfolio-item="design" data-detail-title="Design Menu Minuman Nusantara Restaurant" data-detail-desc="" data-detail-image="{{ asset('assets/design/menuminuman.png') }}" data-detail-link="#" data-detail-link-label="Lihat Behance" role="button" tabindex="0">
                                    <img class="h-48 w-full rounded-2xl border border-white/5 object-cover transition duration-500 group-hover:scale-[1.02] sm:h-52" src="{{ asset('assets/design/menuminuman.png') }}" alt="Design dashboard" loading="lazy" decoding="async" />
                                    <div class="space-y-2">
                                        <h3 class="text-xl font-semibold text-amber-300 font-['Playfair_Display',_ui-serif,_Georgia,_serif]">Design Menu Minuman Nusantara Restaurant</h3>
                                        <p class="text-sm text-slate-300">Desain menu ini mengangkat kekayaan kuliner Nusantara dengan nuansa tradisional yang kuat. Pemilihan warna, tipografi, dan ikon daerah dirancang untuk memperkuat identitas budaya sekaligus memudahkan pengunjung dalam membaca daftar menu dan harga.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="flex justify-center">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                <button class="portfolio-show-more hidden rounded-full border border-white/10 bg-white/5 px-6 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-amber-200 transition hover:bg-white/10" data-portfolio-show="filtered">Show more</button>
                                <button class="portfolio-show-less hidden rounded-full border border-white/10 bg-white/5 px-6 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-amber-200 transition hover:bg-white/10" data-portfolio-hide="filtered">Show less</button>
                            </div>
                        </div>

                        <div data-tab-panel="certificates" class="hidden space-y-6">
                            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3" data-portfolio-grid="certificates">
                                <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat Ethical Hacking Essentials (EHE)" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat Ethical Hacking.png') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">EC-Council</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Jun 2023</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Ethical Hacking.png') }}" alt="Sertifikat Ethical Hacking Essentials (EHE)" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat Ethical Hacking Essentials (EHE)</p>
                                </button>
                                <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat Leadership" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat Leadership.jpg') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">YEF2023</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Dec 2023</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Leadership.jpg') }}" alt="Sertifikat Leadership" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat Leadership</p>
                                </button>
                                <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat Komputer" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat Komputer.png') }}" data-cert-pdf="{{ url('/download/certificate/Sertifikat Komputer.pdf') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">LCTC STIE JB Mimika</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Jun 2023</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Komputer.png') }}" alt="Sertifikat Komputer" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat Komputer</p>
                                </button>
                                    <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat Data Visualization" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat Data Visualization.png') }}" data-cert-pdf="{{ url('/download/certificate/Sertifikat Data Visualization.pdf') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">MySkill</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Jun 2023</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Data Visualization.png') }}" alt="Sertifikat Data Visualization" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat Data Visualization</p>
                                </button>
                                    <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat Cisco Networking" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat Cisco.png') }}" data-cert-pdf="{{ url('/download/certificate/Sertifikat Cisco.pdf') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">CCNA</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Feb 2025</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Cisco.png') }}" alt="Sertifikat Cisco Networking" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat Cisco Networking</p>
                                </button>
                                    <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat Senat Taruna" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat Senat Taruna.png') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">SMAT Wira Bhakti</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Dec 2022</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Senat Taruna.png') }}" alt="Sertifikat Senat Taruna" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat Senat Taruna</p>
                                </button>
                                    <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat Public Speaking" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat Public Speaking.jpg') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">YEF2023</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Dec 2023</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Public Speaking.jpg') }}" alt="Sertifikat Public Speaking" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat Public Speaking</p>
                                </button>
                                    <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat Speak Up 2" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat Speak Up 2.png') }}" data-cert-pdf="{{ url('/download/certificate/Sertifikat Speak Up 2.pdf') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">Mr BOb Course</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Feb 2024</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Speak Up 2.png') }}" alt="Sertifikat Speak Up 2" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat Speak Up 2</p>
                                </button>
                                    <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat Tahfizh" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat Tahfizh.jpg') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">Daarul Qur'an</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Okt 2020</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Tahfizh.jpg') }}" alt="Sertifikat Tahfizh" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat Tahfizh</p>
                                </button>
                                    <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat TicTalk Class" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat TicTalk Class.png') }}" data-cert-pdf="{{ url('/download/certificate/Sertifikat TicTalk Class.pdf') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">Mr BOb Course</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Jan 2024</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Speak Up 2.png') }}" alt="Sertifikat TicTalk Class" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat TicTalk Class</p>
                                </button>
                                    <button class="grid gap-3 rounded-3xl border border-white/10 bg-slate-900/70 p-4 text-left shadow-lg shadow-black/40 transition hover:-translate-y-2 hover:shadow-2xl" data-cert-title="Sertifikat Young Entrepreneur Summit" data-portfolio-item="certificates" data-cert-src="{{ asset('assets/certificate/Sertifikat Young Entrepreneur Summit.jpg') }}">
                                    <div class="relative overflow-hidden rounded-2xl border border-white/5 bg-slate-950/40">
                                        <div class="pointer-events-none absolute left-3 top-3 z-10 inline-flex items-center rounded-full border border-amber-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-amber-100 shadow-lg shadow-black/40">YEF2024</div>
                                        <div class="pointer-events-none absolute right-3 top-3 z-10 inline-flex items-center rounded-full border border-emerald-200/70 bg-slate-950/90 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.18em] text-emerald-100 shadow-lg shadow-black/40">Jan 2024</div>
                                        <img class="relative z-0 h-52 w-full object-cover transition duration-500 hover:scale-[1.02] sm:h-60" src="{{ asset('assets/certificate/Sertifikat Young Entrepreneur Summit.jpg') }}" alt="Sertifikat Young Entrepreneur Summit" loading="lazy" decoding="async" />
                                    </div>
                                    <p class="text-sm font-semibold text-white">Sertifikat Young Entrepreneur Summit</p>
                                </button>
                            </div>
                            <div class="flex justify-center">
                                <button class="portfolio-show-more hidden rounded-full border border-white/10 bg-white/5 px-6 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-amber-200 transition hover:bg-white/10" data-portfolio-show="certificates">Show more</button>
                                <button class="portfolio-show-less hidden rounded-full border border-white/10 bg-white/5 px-6 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-amber-200 transition hover:bg-white/10" data-portfolio-hide="certificates">Show less</button>
                            </div>
                        </div>

                        <div data-tab-panel="skills" class="hidden">
                            <div class="grid gap-4 grid-cols-2 sm:grid-cols-3 lg:grid-cols-6">
                                <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/flutter.png') }}" alt="Logo Canva" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">Flutter</p>
                                </div>
                                <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/laravel.png') }}" alt="Logo HTML" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">Laravel</p>
                                </div>
                                <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/html.jpg') }}" alt="Logo CSS" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">HTML</p>
                                </div>
                                <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/css.jpg') }}" alt="Logo PHP" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">CSS</p>
                                </div>
                                <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/javascript.jpg') }}" alt="Logo PHP" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">JavaScript</p>
                                </div>
                                    <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/php.png') }}" alt="Logo PHP" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">PHP</p>
                                </div>
                                    <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/python.png') }}" alt="Logo PHP" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">Python</p>
                                </div>
                                    <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/supabase.png') }}" alt="Logo PHP" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">Supabase</p>
                                </div>
                                    <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/mysql.png') }}" alt="Logo PHP" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">MySql</p>
                                </div>
                                    <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/tailwind.png') }}" alt="Logo PHP" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">Tailwind CSS</p>
                                </div>
                                    <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/figma.png') }}" alt="Logo PHP" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">Figma</p>
                                </div>
                                    <div class="grid place-items-center gap-3 rounded-2xl border border-white/10 bg-slate-900/70 p-4 text-center shadow-lg shadow-black/40 transition hover:-translate-y-1 hover:shadow-xl">
                                    <img class="h-10 w-10 rounded-xl object-contain" src="{{ asset('assets/skills/canva.png') }}" alt="Logo PHP" loading="lazy" decoding="async" />
                                    <p class="text-xs font-semibold text-white">Canva</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="contact" class="section-ambient space-y-8">
                    <div class="space-y-4 text-center">
                        <p class="text-2xl font-semibold uppercase tracking-[0.3em] text-amber-300 sm:text-4xl md:text-5xl">Contact</p>
                        <p class="text-base text-slate-300 md:text-lg">Terbuka untuk diskusi, kolaborasi, maupun pertanyaan. Hubungi saya melalui WhatsApp.</p>
                    </div>
                    <div class="grid gap-6 md:grid-cols-[1.1fr_0.9fr]">
                        <div class="rounded-3xl border border-amber-300/10 bg-gradient-to-br from-slate-950/80 via-slate-900/70 to-black/70 p-6 shadow-2xl shadow-black/50">
                            <div class="mb-5 space-y-1 text-center">
                                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-amber-200">Message Form</p>
                                <p class="text-lg font-semibold text-white">Kirim Pesan Cepat</p>
                            </div>
                            <form id="contactForm" class="grid gap-4" data-wa="6281247889969">
                                <div class="grid gap-2">
                                    <label class="text-xs font-semibold uppercase tracking-[0.2em] text-amber-200" for="contactName">Nama</label>
                                    <input id="contactName" name="name" type="text" placeholder="Nama kamu" class="w-full rounded-2xl border border-white/10 bg-slate-950/70 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-amber-300/60 focus:outline-none focus:ring-2 focus:ring-amber-300/20" required />
                                </div>
                                <div class="grid gap-2">
                                    <label class="text-xs font-semibold uppercase tracking-[0.2em] text-amber-200" for="contactPhone">Nomor HP</label>
                                    <input id="contactPhone" name="phone" type="tel" inputmode="tel" placeholder="08xx-xxxx-xxxx" class="w-full rounded-2xl border border-white/10 bg-slate-950/70 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-amber-300/60 focus:outline-none focus:ring-2 focus:ring-amber-300/20" />
                                </div>
                                <div class="grid gap-2">
                                    <label class="text-xs font-semibold uppercase tracking-[0.2em] text-amber-200" for="contactMessage">Pesan</label>
                                    <textarea id="contactMessage" name="message" rows="6" placeholder="Tulis pesan kamu di sini" class="w-full resize-none rounded-2xl border border-white/10 bg-slate-950/70 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-amber-300/60 focus:outline-none focus:ring-2 focus:ring-amber-300/20" required></textarea>
                                </div>
                                <button type="submit" class="inline-flex items-center justify-center gap-2 rounded-full bg-amber-400 px-6 py-3 text-sm font-semibold text-slate-900 shadow-lg shadow-amber-500/40 transition hover:-translate-y-1 hover:bg-amber-300 hover:shadow-xl">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                                        <path d="M2.3 12.3 20.5 4a1 1 0 0 1 1.36 1.36L13.6 23.6a1 1 0 0 1-1.82-.26l-1.5-6.6-6.6-1.5a1 1 0 0 1-.26-1.82Z"></path>
                                    </svg>
                                    Kirim via WhatsApp
                                </button>
                                <p class="text-xs text-slate-400">Pesan akan terbuka di WhatsApp dan bisa kamu edit sebelum dikirim.</p>
                            </form>
                        </div>
                        <div class="rounded-3xl border border-white/10 bg-slate-900/60 p-6 shadow-lg shadow-black/40">
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-amber-200">Connect With Me</p>
                            <div class="mt-4 grid gap-3">
                                <a class="group flex items-center justify-between rounded-2xl border border-white/10 bg-gradient-to-r from-slate-900/80 to-slate-800/80 px-4 py-3 text-white transition hover:-translate-y-1 hover:border-amber-300/40" href="https://github.com/dafanusa" target="_blank" rel="noopener noreferrer">
                                    <span class="flex items-center gap-3">
                                        <span class="grid h-10 w-10 place-items-center rounded-full bg-white/5 text-amber-200">
                                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                                                <path d="M12 2c-5.52 0-10 4.48-10 10 0 4.42 2.87 8.17 6.84 9.5.5.09.66-.22.66-.48 0-.24-.01-.87-.01-1.71-2.78.6-3.37-1.34-3.37-1.34-.45-1.15-1.11-1.46-1.11-1.46-.91-.62.07-.61.07-.61 1 .07 1.53 1.03 1.53 1.03 .9 1.54 2.36 1.1 2.94.84.09-.65.35-1.1.63-1.35-2.22-.25-4.56-1.11-4.56-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02.8-.22 1.66-.33 2.51-.33.85 0 1.71.11 2.51.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.35 4.69-4.59 4.93.36.31.68.93.68 1.87 0 1.35-.01 2.44-.01 2.77 0 .26.16.58.67.48 3.97-1.33 6.84-5.08 6.84-9.5 0-5.52-4.48-10-10-10Z"></path>
                                            </svg>
                                        </span>
                                        <span>
                                            <span class="block text-sm font-semibold">GitHub</span>
                                            <span class="block text-xs text-slate-400">Follow my code</span>
                                        </span>
                                    </span>
                                    <svg viewBox="0 0 24 24" class="h-4 w-4 text-amber-200 transition group-hover:translate-x-1" fill="currentColor" aria-hidden="true">
                                        <path d="M13 5l7 7-7 7-1.4-1.4 4.6-4.6H4v-2h12.2l-4.6-4.6L13 5Z"></path>
                                    </svg>
                                </a>
                                <a class="group flex items-center justify-between rounded-2xl border border-white/10 bg-gradient-to-r from-rose-500/30 to-orange-500/30 px-4 py-3 text-white transition hover:-translate-y-1 hover:border-rose-300/40" href="https://instagram.com/dafa.nusa" target="_blank" rel="noopener noreferrer">
                                    <span class="flex items-center gap-3">
                                        <span class="grid h-10 w-10 place-items-center rounded-full bg-white/5 text-white">
                                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                                                <path d="M12 7.35A4.65 4.65 0 1 0 12 16.65 4.65 4.65 0 0 0 12 7.35Zm0 7.67A3.02 3.02 0 1 1 12 9a3.02 3.02 0 0 1 0 6.04Zm5.92-7.78a1.08 1.08 0 1 1-1.08-1.08 1.08 1.08 0 0 1 1.08 1.08ZM20 8.38c-.04-.82-.22-1.55-.82-2.15s-1.33-.78-2.15-.82c-.85-.05-3.41-.05-4.26-.05s-3.41 0-4.26.05c-.82.04-1.55.22-2.15.82s-.78 1.33-.82 2.15c-.05.85-.05 3.41-.05 4.26s0 3.41.05 4.26c.04.82.22 1.55.82 2.15s1.33.78 2.15.82c.85.05 3.41.05 4.26.05s3.41 0 4.26-.05c.82-.04 1.55-.22 2.15-.82s.78-1.33.82-2.15c.05-.85.05-3.41-.05-4.26s0-3.41-.05-4.26Zm-1.95 8.56a2.27 2.27 0 0 1-1.28 1.28c-.88.35-2.98.27-4.77.27s-3.89.08-4.77-.27a2.27 2.27 0 0 1-1.28-1.28c-.35-.88-.27-2.98-.27-4.77s-.08-3.89.27-4.77a2.27 2.27 0 0 1 1.28-1.28c.88-.35 2.98-.27 4.77-.27s3.89-.08 4.77.27a2.27 2.27 0 0 1 1.28 1.28c.35.88.27 2.98.27 4.77s.08 3.89-.27 4.77Z"></path>
                                            </svg>
                                        </span>
                                        <span>
                                            <span class="block text-sm font-semibold">Instagram</span>
                                            <span class="block text-xs text-slate-100/80">Follow my updates</span>
                                        </span>
                                    </span>
                                    <svg viewBox="0 0 24 24" class="h-4 w-4 text-white transition group-hover:translate-x-1" fill="currentColor" aria-hidden="true">
                                        <path d="M13 5l7 7-7 7-1.4-1.4 4.6-4.6H4v-2h12.2l-4.6-4.6L13 5Z"></path>
                                    </svg>
                                </a>
                                <a class="group flex items-center justify-between rounded-2xl border border-white/10 bg-gradient-to-r from-emerald-500/30 to-emerald-600/30 px-4 py-3 text-white transition hover:-translate-y-1 hover:border-emerald-300/40" href="https://wa.me/6281247889969" target="_blank" rel="noopener noreferrer">
                                    <span class="flex items-center gap-3">
                                        <span class="grid h-10 w-10 place-items-center rounded-full bg-white/5 text-white">
                                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                                                <path d="M12 2a10 10 0 0 0-8.84 14.69L2 22l5.44-1.12A10 10 0 1 0 12 2Zm5.8 14.42c-.25.7-1.45 1.35-2 1.44-.5.08-1.13.12-1.82-.11-.42-.14-.97-.31-1.67-.62-2.93-1.28-4.84-4.2-4.99-4.4-.15-.2-1.19-1.59-1.19-3.04 0-1.45.76-2.16 1.03-2.46.27-.3.59-.38.78-.38h.56c.18 0 .43-.07.67.51.24.59.82 2.03.89 2.17.07.14.12.32.02.52-.1.2-.15.32-.3.5-.15.18-.32.4-.46.54-.15.15-.31.32-.13.63.18.31.8 1.32 1.71 2.14 1.18 1.05 2.17 1.38 2.48 1.53.31.15.5.13.68-.08.18-.21.78-.9 1-1.21.22-.31.43-.26.71-.16.28.1 1.76.83 2.06.98.3.15.5.23.57.36.07.13.07.75-.18 1.45Z"></path>
                                            </svg>
                                        </span>
                                        <span>
                                            <span class="block text-sm font-semibold">WhatsApp</span>
                                            <span class="block text-xs text-slate-100/80">Instant chat</span>
                                        </span>
                                    </span>
                                    <svg viewBox="0 0 24 24" class="h-4 w-4 text-white transition group-hover:translate-x-1" fill="currentColor" aria-hidden="true">
                                        <path d="M13 5l7 7-7 7-1.4-1.4 4.6-4.6H4v-2h12.2l-4.6-4.6L13 5Z"></path>
                                    </svg>
                                </a>
                                <a class="group flex items-center justify-between rounded-2xl border border-white/10 bg-gradient-to-r from-red-500/25 to-amber-500/25 px-4 py-3 text-white transition hover:-translate-y-1 hover:border-red-300/40" href="mailto:yourname@gmail.com" target="_blank" rel="noopener noreferrer">
                                    <span class="flex items-center gap-3">
                                        <span class="grid h-10 w-10 place-items-center rounded-full bg-white/5 text-white">
                                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                                                <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4-8 5-8-5V6l8 5 8-5v2Z"></path>
                                            </svg>
                                        </span>
                                        <span>
                                            <span class="block text-sm font-semibold">Gmail</span>
                                            <span class="block text-xs text-slate-100/80">Send me an email</span>
                                        </span>
                                    </span>
                                    <svg viewBox="0 0 24 24" class="h-4 w-4 text-white transition group-hover:translate-x-1" fill="currentColor" aria-hidden="true">
                                        <path d="M13 5l7 7-7 7-1.4-1.4 4.6-4.6H4v-2h12.2l-4.6-4.6L13 5Z"></path>
                                    </svg>
                                </a>
                                <a class="group flex items-center justify-between rounded-2xl border border-white/10 bg-gradient-to-r from-sky-500/30 to-blue-600/30 px-4 py-3 text-white transition hover:-translate-y-1 hover:border-sky-300/40" href="https://linkedin.com/in/rizqullah-dafa-nusa" target="_blank" rel="noopener noreferrer">
                                    <span class="flex items-center gap-3">
                                        <span class="grid h-10 w-10 place-items-center rounded-full bg-white/5 text-white">
                                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                                                <path d="M6.94 6.5A1.94 1.94 0 1 1 7 2.62a1.94 1.94 0 0 1-.06 3.88ZM4 8.5h5v13H4v-13Zm7.5 0H16v1.78h.07c.62-1.1 2.14-2.28 4.4-2.28C23 8 24 9.52 24 12.8V21.5h-5V13.5c0-1.91-.04-4.36-2.66-4.36-2.66 0-3.07 2.08-3.07 4.22V21.5h-5v-13Z"></path>
                                            </svg>
                                        </span>
                                        <span>
                                            <span class="block text-sm font-semibold">LinkedIn</span>
                                            <span class="block text-xs text-slate-100/80">Professional profile</span>
                                        </span>
                                    </span>
                                    <svg viewBox="0 0 24 24" class="h-4 w-4 text-white transition group-hover:translate-x-1" fill="currentColor" aria-hidden="true">
                                        <path d="M13 5l7 7-7 7-1.4-1.4 4.6-4.6H4v-2h12.2l-4.6-4.6L13 5Z"></path>
                                    </svg>
                                </a>
                                <a class="group flex items-center justify-between rounded-2xl border border-white/10 bg-gradient-to-r from-slate-900/80 to-slate-950/80 px-4 py-3 text-white transition hover:-translate-y-1 hover:border-white/30" href="https://tiktok.com/@rznusa" target="_blank" rel="noopener noreferrer">
                                    <span class="flex items-center gap-3">
                                        <span class="grid h-10 w-10 place-items-center rounded-full bg-white/5 text-white">
                                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                                                <path d="M16.6 5.82a4.05 4.05 0 0 0 2.87 1.2V3.9a4.1 4.1 0 0 1-2.47-.86A4.07 4.07 0 0 1 15.37 0H12.3v13.02a2.64 2.64 0 1 1-2.64-2.64c.24 0 .48.03.7.1V7.33a5.73 5.73 0 0 0-1-.08 5.74 5.74 0 1 0 5.74 5.77V8.62a7.08 7.08 0 0 0 4.07 1.3V7.02a4.06 4.06 0 0 1-2.57-1.2Z"></path>
                                            </svg>
                                        </span>
                                        <span>
                                            <span class="block text-sm font-semibold">TikTok</span>
                                            <span class="block text-xs text-slate-100/80">Creative clips</span>
                                        </span>
                                    </span>
                                    <svg viewBox="0 0 24 24" class="h-4 w-4 text-white transition group-hover:translate-x-1" fill="currentColor" aria-hidden="true">
                                        <path d="M13 5l7 7-7 7-1.4-1.4 4.6-4.6H4v-2h12.2l-4.6-4.6L13 5Z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="border-t border-white/10 bg-gradient-to-b from-black/60 via-slate-950/80 to-black">
                <div class="mx-auto w-full max-w-6xl px-6 py-10">
                    <div class="grid gap-8 md:grid-cols-[1.2fr_0.8fr]">
                        <div class="space-y-3">
                            <p class="text-lg font-semibold text-white">Rizqullah Atsir Dafa Childyasa Nusa</p>
                            <p class="text-sm text-slate-400">Building clean interfaces, mobile apps, and meaningful digital experiences.</p>
                            <div class="flex flex-wrap items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-amber-200">
                                <span class="rounded-full border border-amber-300/20 bg-amber-400/10 px-3 py-1">UI/UX</span>
                                <span class="rounded-full border border-amber-300/20 bg-amber-400/10 px-3 py-1">Mobile</span>
                                <span class="rounded-full border border-amber-300/20 bg-amber-400/10 px-3 py-1">Web</span>
                                <span class="rounded-full border border-amber-300/20 bg-amber-400/10 px-3 py-1">Data Analyst</span>
                            </div>
                        </div>
                        <div class="grid gap-3 text-sm text-slate-300">
                            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-amber-200">Let’s Build Something</p>
                            <p class="text-sm text-slate-400">Open for collaboration, freelance, and internships.</p>
                        </div>
                    </div>
                    <div class="mt-8 flex flex-col items-center justify-between gap-3 border-t border-white/10 pt-4 text-xs text-slate-500 md:flex-row">
                        <p>2026 Rizqullah Portofolio. All rights reserved.</p>
                        <p class="text-slate-400">Crafted with care in Malang.</p>
                    </div>
                </div>
            </footer>
        </div>

        <dialog id="certificateModal" class="fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rounded-[28px] border border-white/10 bg-slate-950/95 p-0 shadow-2xl backdrop:bg-black/70 backdrop:backdrop-blur-sm w-[min(90vw,980px)] h-[80vh] overflow-hidden">
            <div class="flex h-full min-h-0 flex-col">
                <div class="relative px-6 pb-2 pt-5 text-center">
                    <div class="mx-auto w-full max-w-3xl space-y-2">
                        <p id="certificateTitle" class="text-lg font-semibold text-white sm:text-xl">Certificate</p>
                        <div class="flex flex-wrap items-center justify-center gap-2">
                            <span class="rounded-full border border-amber-300/30 bg-amber-400/10 px-3 py-1 text-xs font-semibold text-amber-200">Certificate</span>
                            <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs font-semibold text-slate-200">Preview</span>
                        </div>
                    </div>
                    <button id="certificateClose" class="absolute right-3 top-3 flex h-9 w-9 items-center justify-center rounded-full border border-amber-300/30 bg-amber-400/10 text-amber-200 transition hover:border-amber-200 hover:bg-amber-400/20 sm:right-6 sm:top-5" aria-label="Close">
                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                            <path d="M18.3 5.7a1 1 0 0 0-1.4 0L12 10.6 7.1 5.7A1 1 0 1 0 5.7 7.1L10.6 12l-4.9 4.9a1 1 0 0 0 1.4 1.4L12 13.4l4.9 4.9a1 1 0 0 0 1.4-1.4L13.4 12l4.9-4.9a1 1 0 0 0 0-1.4Z"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 min-h-0 px-6 pb-4">
                    <div class="flex h-full w-full items-center justify-center rounded-2xl border border-white/5 bg-gradient-to-br from-white/5 via-slate-900/40 to-black/40 p-4 sm:p-6">
                        <img id="certificateImage" class="hidden max-h-[92%] w-auto max-w-[92%] object-contain" alt="Certificate preview" src="" />
                        <iframe id="certificatePdf" class="hidden h-full w-full rounded-2xl border border-white/10 bg-black/20" title="Certificate PDF preview"></iframe>
                    </div>
                </div>
                <div class="border-t border-white/10 px-6 py-4">
                    <div class="flex justify-center">
                        <a id="certificateDownload" class="inline-flex items-center gap-2 rounded-full bg-amber-400 px-6 py-3 text-sm font-semibold text-slate-900 shadow-lg shadow-amber-500/40 transition hover:-translate-y-1 hover:bg-amber-300 hover:shadow-xl" href="#" download>
                            <svg viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                                <path d="M12 3a1 1 0 0 1 1 1v8.59l2.3-2.3a1 1 0 1 1 1.4 1.42l-4.01 4a1 1 0 0 1-1.4 0l-4.01-4a1 1 0 1 1 1.4-1.42L11 12.59V4a1 1 0 0 1 1-1Zm-7 13a1 1 0 0 1 1 1v2h12v-2a1 1 0 1 1 2 0v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2a1 1 0 0 1 1-1Z"></path>
                            </svg>
                            Download Certificate
                        </a>
                    </div>
                </div>
            </div>
        </dialog>
        <dialog id="projectModal" class="fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rounded-[28px] border border-white/10 bg-slate-950/95 p-0 shadow-2xl backdrop:bg-black/70 backdrop:backdrop-blur-sm w-[min(92vw,920px)] h-[90vh] md:h-[96vh] overflow-hidden">
            <div class="flex h-full min-h-0 flex-col">
                <div class="relative px-3 pb-1 pt-2 text-center sm:px-4 sm:pt-3">
                    <div class="mx-auto w-full max-w-3xl space-y-2">
                        <p id="projectTitle" class="text-lg font-semibold text-white sm:text-xl">Project</p>
                        <p id="projectSubtitle" class="text-xs font-semibold uppercase tracking-[0.25em] text-amber-200">Detail</p>
                    </div>
                    <button id="projectClose" class="absolute right-3 top-3 flex h-9 w-9 items-center justify-center rounded-full border border-amber-300/30 bg-amber-400/10 text-amber-200 transition hover:border-amber-200 hover:bg-amber-400/20 sm:right-6 sm:top-5" aria-label="Close">
                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                            <path d="M18.3 5.7a1 1 0 0 0-1.4 0L12 10.6 7.1 5.7A1 1 0 1 0 5.7 7.1L10.6 12l-4.9 4.9a1 1 0 0 0 1.4 1.4L12 13.4l4.9 4.9a1 1 0 0 0 1.4-1.4L13.4 12l4.9-4.9a1 1 0 0 0 0-1.4Z"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 min-h-0 px-3 pb-2 sm:px-4 sm:pb-3">
                    <div class="flex h-full w-full flex-col gap-2 overflow-hidden rounded-2xl bg-gradient-to-br from-white/5 via-slate-900/40 to-black/40 p-1 sm:p-2">
                        <div id="projectImageWrap" class="relative flex flex-1 items-center justify-center overflow-hidden rounded-2xl">
                            <img id="projectImage" class="max-h-full w-auto max-w-full object-contain" alt="Project preview" src="" />
                        </div>
                        <div id="projectDescWrap" class="flex-1 overflow-auto">
                            <p id="projectDesc" class="text-sm text-slate-200 sm:text-base"></p>
                        </div>
                    </div>
                </div>
                <div id="projectFooter" class="border-t border-white/10 px-6 py-4">
                    <div id="projectLinkWrap" class="flex justify-center">
                        <a id="projectLink" class="inline-flex items-center gap-2 rounded-full bg-amber-400 px-6 py-3 text-sm font-semibold text-slate-900 shadow-lg shadow-amber-500/40 transition hover:-translate-y-1 hover:bg-amber-300 hover:shadow-xl" href="#" target="_blank" rel="noopener noreferrer">
                            <svg viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                                <path d="M14 3h7v7h-2V6.41l-9.29 9.3-1.42-1.42 9.3-9.29H14V3ZM5 5h6v2H6.99v10h10v-4h2v6H5V5Z"></path>
                            </svg>
                            <span id="projectLinkLabel">Lihat Project</span>
                        </a>
                    </div>
                </div>
            </div>
        </dialog>
    
        
        
        <script>
            
            const revealTargets = document.querySelectorAll('.reveal-on-scroll');
            if (revealTargets.length) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.35 });

                revealTargets.forEach((target) => observer.observe(target));
            }

            const sectionTargets = document.querySelectorAll('main > section, footer');
            if (sectionTargets.length) {
                sectionTargets.forEach((section) => {
                    section.classList.add('section-reveal', 'is-exit');
                    Array.from(section.children).forEach((child, index) => {
                        const delay = Math.min(index, 6) * 80;
                        child.style.setProperty('--reveal-delay', `${delay}ms`);
                    });
                });

                const sectionObserver = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            entry.target.classList.remove('is-exit');
                        } else {
                            entry.target.classList.remove('is-visible');
                            entry.target.classList.add('is-exit');
                        }
                    });
                }, { threshold: 0.22 });

                sectionTargets.forEach((section) => sectionObserver.observe(section));
            }

            const buttonTargets = document.querySelectorAll('button, [role="button"], main a[class*="rounded"], main a[class*="inline-flex"], dialog a, dialog button');
            buttonTargets.forEach((button) => {
                button.classList.add('btn-animate');
            });

            const runHeroTyping = () => {
                const target = document.getElementById('heroTyping');
                if (!target || target.getAttribute('data-typing') === 'true') return;
                target.setAttribute('data-typing', 'true');
                const fullText = target.getAttribute('data-text') || target.textContent || '';
                let index = 0;
                let forward = true;
                const typeSpeed = 90;
                const pauseDelay = 1200;

                const tick = () => {
                    if (forward) {
                        index += 1;
                        if (index >= fullText.length) {
                            forward = false;
                            target.textContent = fullText;
                            setTimeout(tick, pauseDelay);
                            return;
                        }
                    } else {
                        index -= 1;
                        if (index <= 0) {
                            forward = true;
                            target.textContent = '';
                            setTimeout(tick, 500);
                            return;
                        }
                    }
                    target.textContent = fullText.slice(0, index);
                    setTimeout(tick, typeSpeed);
                };

                target.textContent = '';
                setTimeout(tick, 400);
            };

            runHeroTyping();

            const mobileToggle = document.getElementById('mobileMenuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            if (mobileToggle && mobileMenu) {
                mobileToggle.addEventListener('click', () => {
                    const isOpen = mobileMenu.classList.toggle('hidden') === false;
                    mobileToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                });
            }

            const portfolioLimit = 6;
            const expandedState = {
                project: false,
                design: false,
                certificates: false,
            };

            const applyPortofolioLimit = (type) => {
                const items = document.querySelectorAll(`[data-portfolio-item="${type}"]`);
                const expanded = expandedState[type];
                items.forEach((item, index) => {
                    item.classList.toggle('hidden', !expanded && index >= portfolioLimit);
                });
            };

            const setActiveFilter = (type) => {
                document.querySelectorAll('[data-filter]').forEach((button) => {
                    const isActive = button.getAttribute('data-filter') == type;
                    button.setAttribute('data-active', isActive ? 'true' : 'false');
                });
            };

            const applyPortfolioFilter = (type) => {
                const items = Array.from(document.querySelectorAll('[data-portfolio-item="project"], [data-portfolio-item="design"]'));
                let visibleIndex = 0;
                items.forEach((item) => {
                    const itemType = item.getAttribute('data-portfolio-item');
                    if (itemType != type) {
                        item.classList.add('hidden');
                        return;
                    }
                    const shouldHide = !expandedState[type] && visibleIndex >= portfolioLimit;
                    item.classList.toggle('hidden', shouldHide);
                    visibleIndex += 1;
                });
            };

            const getActiveFilter = () => {
                const active = document.querySelector('[data-filter][data-active="true"]');
                return active ? active.getAttribute('data-filter') : 'project';
            };

            const syncFilteredButtons = () => {
                const type = getActiveFilter();
                const items = document.querySelectorAll(`[data-portfolio-item="${type}"]`);
                const showButton = document.querySelector('[data-portfolio-show="filtered"]');
                const hideButton = document.querySelector('[data-portfolio-hide="filtered"]');
                if (!showButton || !hideButton) {
                    return;
                }
                if (items.length <= portfolioLimit) {
                    showButton.classList.add('hidden');
                    hideButton.classList.add('hidden');
                    return;
                }
                showButton.classList.toggle('hidden', expandedState[type]);
                hideButton.classList.toggle('hidden', !expandedState[type]);
            };

            const syncCertificateButtons = () => {
                const certItems = document.querySelectorAll('[data-portfolio-item="certificates"]');
                const certShow = document.querySelector('[data-portfolio-show="certificates"]');
                const certHide = document.querySelector('[data-portfolio-hide="certificates"]');
                if (!certShow || !certHide) {
                    return;
                }
                if (certItems.length <= portfolioLimit) {
                    certShow.classList.add('hidden');
                    certHide.classList.add('hidden');
                    return;
                }
                certShow.classList.toggle('hidden', expandedState.certificates);
                certHide.classList.toggle('hidden', !expandedState.certificates);
            };

            const initialFilter = getActiveFilter();
            setActiveFilter(initialFilter);
            applyPortfolioFilter(initialFilter);
            applyPortofolioLimit('certificates');
            syncFilteredButtons();
            syncCertificateButtons();

            document.querySelectorAll('[data-filter]').forEach((button) => {
                button.addEventListener('click', () => {
                    const type = button.getAttribute('data-filter');
                    setActiveFilter(type);
                    applyPortfolioFilter(type);
                    syncFilteredButtons();
                });
            });

            const filteredShow = document.querySelector('[data-portfolio-show="filtered"]');
            const filteredHide = document.querySelector('[data-portfolio-hide="filtered"]');

            if (filteredShow && filteredHide) {
                filteredShow.addEventListener('click', () => {
                    const type = getActiveFilter();
                    expandedState[type] = true;
                    applyPortfolioFilter(type);
                    syncFilteredButtons();
                });

                filteredHide.addEventListener('click', () => {
                    const type = getActiveFilter();
                    expandedState[type] = false;
                    applyPortfolioFilter(type);
                    syncFilteredButtons();
                });
            }

            const certShow = document.querySelector('[data-portfolio-show="certificates"]');
            const certHide = document.querySelector('[data-portfolio-hide="certificates"]');
            if (certShow && certHide) {
                certShow.addEventListener('click', () => {
                    expandedState.certificates = true;
                    applyPortofolioLimit('certificates');
                    syncCertificateButtons();
                });

                certHide.addEventListener('click', () => {
                    expandedState.certificates = false;
                    applyPortofolioLimit('certificates');
                    syncCertificateButtons();
                });
            }

            const certModal = document.getElementById('certificateModal');
            const certTitle = document.getElementById('certificateTitle');
            const certImage = document.getElementById('certificateImage');
            const certPdf = document.getElementById('certificatePdf');
            const certDownload = document.getElementById('certificateDownload');
            const certClose = document.getElementById('certificateClose');

            const getCertExtension = (src) => {
                if (!src) return 'jpg';
                const cleanSrc = src.split('?')[0].toLowerCase();
                const parts = cleanSrc.split('.');
                return parts.length > 1 ? parts[parts.length - 1] : 'jpg';
            };

            const normalizeAssetUrl = (src) => {
                if (!src) return src;
                try {
                    const url = new URL(src, window.location.origin);
                    if (url.origin !== window.location.origin) {
                        return encodeURI(`${window.location.origin}${url.pathname}`);
                    }
                    return encodeURI(url.toString());
                } catch (error) {
                    return encodeURI(src);
                }
            };

            const updateCertificatePreview = (previewSrc, fileSrc, title) => {
                if (!certModal || !certDownload || !certImage || !certPdf) return;
                const previewUrl = normalizeAssetUrl(previewSrc);
                const fileUrl = normalizeAssetUrl(fileSrc || previewSrc);
                const previewExt = getCertExtension(previewUrl);
                const fileExt = getCertExtension(fileUrl || previewUrl);
                const isPdfPreview = previewExt === 'pdf';
                const downloadName = `${(title || 'certificate').replace(/\s+/g, '-').toLowerCase()}.${fileExt}`;

                certTitle.textContent = title || 'Certificate';
                certDownload.href = fileUrl || previewUrl || '#';
                if (fileExt === 'pdf') {
                    certDownload.removeAttribute('download');
                } else {
                    certDownload.setAttribute('download', downloadName);
                }

                if (isPdfPreview) {
                    certImage.classList.add('hidden');
                    certImage.src = '';
                    certPdf.src = fileUrl || previewUrl || '';
                    certPdf.classList.remove('hidden');
                } else {
                    certPdf.classList.add('hidden');
                    certPdf.src = '';
                    certImage.src = previewUrl || '';
                    certImage.classList.remove('hidden');
                }
            };

            const forceDownload = async (url, filename) => {
                try {
                    const response = await fetch(url, { credentials: 'same-origin' });
                    if (!response.ok) {
                        return false;
                    }
                    const blob = await response.blob();
                    const objectUrl = URL.createObjectURL(blob);
                    const link = document.createElement('a');
                    link.href = objectUrl;
                    if (filename) {
                        link.download = filename;
                    }
                    document.body.appendChild(link);
                    link.click();
                    link.remove();
                    URL.revokeObjectURL(objectUrl);
                    return true;
                } catch (error) {
                    return false;
                }
            };

            const bindCertificateDownload = () => {
                if (!certDownload || certDownload.getAttribute('data-bound') === 'true') return;
                certDownload.setAttribute('data-bound', 'true');
                certDownload.addEventListener('click', async (event) => {
                    if (!certDownload.href || certDownload.href === '#') return;
                    if (certDownload.hasAttribute('download')) {
                        event.preventDefault();
                        const filename = certDownload.getAttribute('download') || '';
                        const ok = await forceDownload(certDownload.href, filename);
                        if (!ok) {
                            window.location.assign(certDownload.href);
                        }
                        return;
                    }
                    event.preventDefault();
                    window.location.assign(certDownload.href);
                });
            };

            document.querySelectorAll('[data-cert-src]').forEach((card) => {
                card.addEventListener('click', () => {
                    const src = card.getAttribute('data-cert-src');
                    const fileSrc = card.getAttribute('data-cert-pdf') || src;
                    const previewSrc = card.getAttribute('data-cert-preview') || src;
                    const title = card.getAttribute('data-cert-title') || 'Certificate';
                    updateCertificatePreview(previewSrc, fileSrc, title);
                    if (certModal?.showModal) {
                        certModal.showModal();
                    } else {
                        certModal?.setAttribute('open', 'true');
                    }
                });
            });
            bindCertificateDownload();

            if (certModal) {
                certModal.addEventListener('click', (event) => {
                    if (event.target === certModal) {
                        certModal.close();
                    }
                });
            }

            if (certClose && certModal) {
                certClose.addEventListener('click', () => {
                    certModal.close();
                });
            }

            const projectModal = document.getElementById('projectModal');
            const projectTitle = document.getElementById('projectTitle');
            const projectSubtitle = document.getElementById('projectSubtitle');
            const projectImage = document.getElementById('projectImage');
            const projectDesc = document.getElementById('projectDesc');
            const projectDescWrap = document.getElementById('projectDescWrap');
            const projectLink = document.getElementById('projectLink');
            const projectLinkLabel = document.getElementById('projectLinkLabel');
            const projectLinkWrap = document.getElementById('projectLinkWrap');
            const projectClose = document.getElementById('projectClose');
            const projectFooter = document.getElementById('projectFooter');
            const projectImageWrap = document.getElementById('projectImageWrap');

            const openProjectModal = (card) => {
                if (!projectModal || !card) return;
                projectTitle.textContent = card.getAttribute('data-detail-title') || 'Project';
                const category = card.getAttribute('data-category') || 'Detail';
                projectSubtitle.textContent = category;
                projectDesc.textContent = card.getAttribute('data-detail-desc') || '';
                projectImage.src = card.getAttribute('data-detail-image') || '';
                projectImage.alt = projectTitle.textContent || 'Project preview';
                const link = card.getAttribute('data-detail-link') || '#';
                const label = card.getAttribute('data-detail-link-label') || 'Lihat Project';
                projectLink.href = link;
                projectLinkLabel.textContent = label;
                const isDesign = category.toLowerCase() === 'design';
                const isProject = category.toLowerCase() === 'project';
                if (projectDescWrap) {
                    projectDescWrap.classList.toggle('hidden', isDesign || isProject || projectDesc.textContent.trim() === '');
                }
                if (projectLinkWrap) {
                    projectLinkWrap.classList.toggle('hidden', isDesign);
                }
                if (projectFooter) {
                    projectFooter.classList.toggle('hidden', isDesign);
                }
                projectModal.showModal ? projectModal.showModal() : projectModal.setAttribute('open', 'true');
            };

            document.querySelectorAll('[data-detail-title]').forEach((card) => {
                card.addEventListener('click', () => openProjectModal(card));
                card.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        openProjectModal(card);
                    }
                });
            });

            if (projectModal) {
                projectModal.addEventListener('click', (event) => {
                    if (event.target === projectModal) {
                        projectModal.close();
                    }
                });
            }

            if (projectClose && projectModal) {
                projectClose.addEventListener('click', () => {
                    projectModal.close();
                });
            }

            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', (event) => {
                    event.preventDefault();
                    const formData = new FormData(contactForm);
                    const name = formData.get('name')?.toString().trim() || '';
                    const phoneInput = formData.get('phone')?.toString().trim() || '';
                    const message = formData.get('message')?.toString().trim() || '';
                    const phone = contactForm.getAttribute('data-wa') || '';
                    const lines = [
                        'Halo, saya ingin menghubungi Anda.',
                        name ? `Nama: ${name}` : '',
                        phoneInput ? `Nomor HP: ${phoneInput}` : '',
                        message ? `Pesan: ${message}` : '',
                    ].filter(Boolean);
                    const text = encodeURIComponent(lines.join('\n'));
                    const waUrl = `https://wa.me/${phone}?text=${text}`;
                    window.open(waUrl, '_blank', 'noopener');
                });
            }
        </script>


    </body>
</html>

