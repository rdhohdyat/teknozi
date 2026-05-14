<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'PT Teknokrat Zamrud Integrasi')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-dark.png') }}" />
    <meta name="description"
        content="Deskripsi singkat mengenai layanan atau produk yang ditawarkan oleh Teknokrat Zamrud.">
    <meta name="keywords" content="teknokrat, zamrud, integration, software house, riau">

    <!-- Open Graph untuk Social Media (WhatsApp/Facebook) -->
    <meta property="og:title" content="Teknokrat Zamrud Integration">
    <meta property="og:description" content="Solusi integrasi sistem untuk kebutuhan bisnis Anda.">
    <meta property="og:image" content="https://teknokratzamrud.com/logo.png">
    <meta property="og:url" content="https://teknokratzamrud.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800;900&family=Fira+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        body {
            font-family: 'Fira Sans', sans-serif;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Barlow Condensed', sans-serif;
        }

        .hero-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url('{{ asset('assets/img/hero-bg.png') }}');
            background-size: cover;
            background-position: center;
        }

        .service-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url('{{ asset('assets/img/service-hero.png') }}');
            background-size: cover;
            background-position: center;
        }

        .about-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url('{{ asset('assets/img/bg-image.png') }}');
            background-size: cover;
            background-position: center;
        }

        .contact-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url('{{ asset('assets/img/contact_hero.png') }}');
            background-size: cover;
            background-position: center;
        }

        .product-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url('{{ asset('assets/img/products-hero.png') }}');
            background-size: cover;
            background-position: center;
        }

        .bg-tzi {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url('{{ asset('assets/img/bg-image.png') }}');
            background-size: cover;
            background-position: center;
        }

        .footer-bg {
            position: relative;
            background: linear-gradient(to right, rgba(10, 22, 40, 0.95) 30%, rgba(10, 22, 40, 0.4) 60%, rgba(10, 22, 40, 0.2) 100%), url('{{ asset('assets/img/bg-image.png') }}');
            background-size: cover;
            background-position: center;
        }

        .custom-shape-divider-bottom-1715243168 {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-bottom-1715243168 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 80px;
        }

        .custom-shape-divider-bottom-1715243168 .shape-fill {
            fill: #FFFFFF;
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s;
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.18);
            border-color: #3b82f6;
        }

        .service-card:hover .card-img {
            transform: scale(1.07);
        }

        .card-img {
            transition: transform 0.5s ease;
        }

        .why-card {
            transition: border-color 0.25s, box-shadow 0.25s, transform 0.25s;
        }

        .why-card:hover {
            border-color: #3b82f6;
            box-shadow: 0 8px 30px rgba(59, 130, 246, 0.14);
            transform: translateY(-4px);
        }

        .btn-transition {
            transition: transform 0.2s, box-shadow 0.2s, background-color 0.2s;
        }

        .btn-transition:hover {
            transform: translateY(-2px);
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #3b99f6;
            transition: width 0.25s;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .read-more {
            transition: gap 0.2s, color 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .read-more:hover {
            gap: 10px;
            color: #1d4ed8;
        }

        .feature-row {
            border-bottom: 1px solid rgba(255, 255, 255, 0.07);
        }

        .feature-row:last-child {
            border-bottom: none;
        }

        .custom-shape-divider-top-1715243168 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-top-1715243168 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 60px;
        }

        .custom-shape-divider-top-1715243168 .shape-fill {
            fill: #FFFFFF;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden">

    <!-- ── NAVBAR ── -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-[#0a1628]/95 backdrop-blur-md border-b border-sky-900/40">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="{{ route('tzi.home') }}" class="flex items-center gap-2.5">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                </div>
                <div class="leading-tight uppercase">
                    <p class="text-white text-sm font-bold tracking-wide text-center">Teknokrat</p>
                    <p class="text-sky-400 text-[11px] font-light tracking-wide">Zamrud Integrasi</p>
                </div>
            </a>

            <div
                class="hidden md:flex items-center gap-8 text-[11px] font-semibold uppercase tracking-widest text-slate-400">
                <a href="{{ route('tzi.home') }}"
                    class="nav-link hover:text-white transition-colors {{ request()->routeIs('tzi.home') ? 'active text-sky-400' : '' }}">{{ __('Beranda') }}</a>
                <a href="{{ route('tzi.about') }}"
                    class="nav-link hover:text-white transition-colors {{ request()->routeIs('tzi.about') ? 'active text-sky-400' : '' }}">{{ __('Tentang Kami') }}</a>
                <a href="{{ route('tzi.service') }}"
                    class="nav-link hover:text-white transition-colors {{ request()->routeIs('tzi.service') ? 'active text-sky-400' : '' }}">{{ __('Layanan') }}</a>
                <a href="{{ route('tzi.product') }}"
                    class="nav-link hover:text-white transition-colors {{ request()->routeIs('tzi.product*') ? 'active text-sky-400' : '' }}">{{ __('Produk') }}</a>
                <a href="{{ route('tzi.contact') }}"
                    class="nav-link hover:text-white transition-colors {{ request()->routeIs('tzi.contact') ? 'active text-sky-400' : '' }}">{{ __('Kontak') }}</a>
            </div>

            <div class="flex items-center gap-4">
                <div
                    class="hidden lg:flex items-center gap-1.5 bg-white/5 border border-white/10 rounded-full p-1 mr-2">
                    <a href="{{ route('lang.switch', 'id') }}"
                        class="flex items-center justify-center w-7 h-7 rounded-full {{ App::getLocale() == 'id' ? 'bg-sky-600 text-white' : 'text-slate-400 hover:text-white' }} text-[9px] font-black uppercase transition-all">ID</a>
                    <a href="{{ route('lang.switch', 'en') }}"
                        class="flex items-center justify-center w-7 h-7 rounded-full {{ App::getLocale() == 'en' ? 'bg-sky-600 text-white' : 'text-slate-400 hover:text-white' }} text-[9px] font-black uppercase transition-all">EN</a>
                </div>
                <a href="{{ route('tzi.contact') }}"
                    class="btn-transition hidden sm:inline-flex items-center gap-2 bg-sky-600 hover:bg-sky-500 text-white text-[11px] font-bold uppercase tracking-widest px-5 py-2.5 rounded-lg shadow-lg shadow-sky-900/40">
                    {{ __('Minta Penawaran') }}
                    <iconify-icon icon="solar:arrow-right-bold" class="text-sm"></iconify-icon>
                </a>
                <button id="menu-open" class="md:hidden text-white text-3xl flex items-center">
                    <iconify-icon icon="solar:hamburger-menu-bold"></iconify-icon>
                </button>
            </div>
        </div>
    </nav>

    <!-- ── MOBILE MENU ── -->
    <div id="mobile-menu"
        class="fixed inset-0 z-[60] bg-[#0a1628] translate-x-full transition-transform duration-300 md:hidden overflow-y-auto">
        <div class="p-8">
            <div class="flex items-center justify-between mb-16">
                <a href="{{ route('tzi.home') }}" class="flex items-center gap-2.5 text-left">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    </div>
                    <div class="leading-tight uppercase">
                        <p class="text-white text-base font-bold tracking-wide text-center">Teknokrat</p>
                        <p class="text-sky-400 text-[11px] font-light tracking-wide">Zamrud Integrasi</p>
                    </div>
                </a>
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-1.5 bg-white/5 border border-white/10 rounded-full p-1">
                        <a href="{{ route('lang.switch', 'id') }}"
                            class="flex items-center justify-center w-8 h-8 rounded-full {{ App::getLocale() == 'id' ? 'bg-sky-600 text-white' : 'text-slate-400 hover:text-white' }} text-[10px] font-black uppercase transition-all">ID</a>
                        <a href="{{ route('lang.switch', 'en') }}"
                            class="flex items-center justify-center w-8 h-8 rounded-full {{ App::getLocale() == 'en' ? 'bg-sky-600 text-white' : 'text-slate-400 hover:text-white' }} text-[10px] font-black uppercase transition-all">EN</a>
                    </div>
                    <button id="menu-close" class="text-white text-4xl">
                        <iconify-icon icon="solar:close-circle-bold"></iconify-icon>
                    </button>
                </div>
            </div>

            <nav class="flex flex-col gap-8 text-2xl font-black uppercase tracking-widest">
                <a href="{{ route('tzi.home') }}"
                    class="{{ request()->routeIs('tzi.home') ? 'text-sky-400' : 'text-slate-400 hover:text-white' }} flex items-center justify-between border-b border-white/5 pb-4">{{ __('Beranda') }}
                    <iconify-icon icon="solar:arrow-right-outline" class="text-white/20"></iconify-icon></a>
                <a href="{{ route('tzi.about') }}"
                    class="{{ request()->routeIs('tzi.about') ? 'text-sky-400' : 'text-slate-400 hover:text-white' }} flex items-center justify-between border-b border-white/5 pb-4">{{ __('Tentang Kami') }}
                    <iconify-icon icon="solar:arrow-right-outline" class="text-white/20"></iconify-icon></a>
                <a href="{{ route('tzi.service') }}"
                    class="{{ request()->routeIs('tzi.service') ? 'text-sky-400' : 'text-slate-400 hover:text-white' }} flex items-center justify-between border-b border-white/5 pb-4">{{ __('Layanan') }}
                    <iconify-icon icon="solar:arrow-right-outline" class="text-white/20"></iconify-icon></a>
                <a href="{{ route('tzi.product') }}"
                    class="{{ request()->routeIs('tzi.product*') ? 'text-sky-400' : 'text-slate-400 hover:text-white' }} flex items-center justify-between border-b border-white/5 pb-4">{{ __('Produk') }}
                    <iconify-icon icon="solar:arrow-right-outline" class="text-white/20"></iconify-icon></a>
                <a href="{{ route('tzi.contact') }}"
                    class="{{ request()->routeIs('tzi.contact') ? 'text-sky-400' : 'text-slate-400 hover:text-white' }} flex items-center justify-between border-b border-white/5 pb-4">{{ __('Kontak') }}
                    <iconify-icon icon="solar:arrow-right-outline" class="text-white/20"></iconify-icon></a>
            </nav>

            <div class="mt-16 pt-12 border-t border-sky-900/30">
                <p class="text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em] mb-6">{{ __('Hubungi Kami') }}
                </p>
                <div class="space-y-6">
                    <a href="tel:+6281371273367" class="flex items-center gap-4 text-white">
                        <div
                            class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center text-sky-400 text-xl">
                            <iconify-icon icon="solar:phone-bold"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest">{{ __('Telepon') }}
                            </p>
                            <p class="text-sm font-bold">0813-7127-3367</p>
                        </div>
                    </a>
                    <a href="https://wa.me/6281371273367" target="_blank" class="flex items-center gap-4 text-white">
                        <div
                            class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center text-sky-400 text-xl">
                            <iconify-icon icon="logos:whatsapp-icon"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest">{{ __('WhatsApp') }}
                            </p>
                            <p class="text-sm font-bold">0813-7127-3367</p>
                        </div>
                    </a>
                    <a href="mailto:admin@teknokratzamrud.com" class="flex items-center gap-4 text-white">
                        <div
                            class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center text-sky-400 text-xl">
                            <iconify-icon icon="solar:letter-bold"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest">{{ __('Email') }}</p>
                            <p class="text-sm font-bold">admin@teknokratzamrud.com</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- ── FOOTER ── -->
    <footer class="bg-[#0a1628] pt-24 pb-12 overflow-hidden border-t border-sky-900/30">
        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="grid md:grid-cols-4 gap-12 mb-16">
                <!-- Branding -->
                <div class="md:col-span-1">
                    <a href="{{ route('tzi.home') }}" class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        </div>
                        <div class="leading-tight uppercase">
                            <p class="text-white text-sm font-bold tracking-wide">Teknokrat</p>
                            <p class="text-sky-400 text-[10px] font-light tracking-wide">Zamrud Integrasi</p>
                        </div>
                    </a>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8">
                        {{ __('Solusi integrasi terpercaya untuk kebutuhan Elektronika, IT, HVAC, dan Furniture Kantor Anda.') }}
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-sky-600 hover:border-sky-600 transition-all">
                            <iconify-icon icon="solar:play-bold"></iconify-icon>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-sky-600 hover:border-sky-600 transition-all">
                            <iconify-icon icon="solar:camera-bold"></iconify-icon>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-black uppercase tracking-widest text-sm mb-6">{{ __('Navigasi') }}</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="{{ route('tzi.home') }}"
                                class="hover:text-sky-400 transition-colors">{{ __('Beranda') }}</a>
                        </li>
                        <li><a href="{{ route('tzi.about') }}"
                                class="hover:text-sky-400 transition-colors">{{ __('Tentang Kami') }}</a></li>
                        <li><a href="{{ route('tzi.service') }}"
                                class="hover:text-sky-400 transition-colors">{{ __('Layanan') }}</a></li>
                        <li><a href="{{ route('tzi.product') }}"
                                class="hover:text-sky-400 transition-colors">{{ __('Produk & Proyek') }}</a></li>
                        <li><a href="{{ route('tzi.contact') }}"
                                class="hover:text-sky-400 transition-colors">{{ __('Kontak') }}</a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-white font-black uppercase tracking-widest text-sm mb-6">{{ __('Layanan') }}</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="{{ route('tzi.service') }}"
                                class="hover:text-sky-400 transition-colors">{{ __('Instalasi Elektronika') }}</a></li>
                        <li><a href="{{ route('tzi.service') }}"
                                class="hover:text-sky-400 transition-colors">{{ __('Sistem HVAC (Pendingin)') }}</a>
                        </li>
                        <li><a href="{{ route('tzi.service') }}"
                                class="hover:text-sky-400 transition-colors">{{ __('Desain Interior') }}</a></li>
                        <li><a href="{{ route('tzi.service') }}"
                                class="hover:text-sky-400 transition-colors">{{ __('Infrastruktur IT') }}</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h4 class="text-white font-black uppercase tracking-widest text-sm mb-6">{{ __('Legal') }}</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-sky-400 transition-colors">{{ __('Kebijakan Privasi') }}</a>
                        </li>
                        <li><a href="#" class="hover:text-sky-400 transition-colors">{{ __('Syarat & Ketentuan') }}</a>
                        </li>
                        <li><a href="#" class="hover:text-sky-400 transition-colors">{{ __('Status Layanan') }}</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom -->
            <div
                class="pt-10 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-500 text-[10px] font-bold uppercase tracking-[0.15em]">
                <p>© {{ date('Y') }} PT. Teknokrat Zamrud Integrasi.
                    {{ __('Didirikan Maret 2023, Pekanbaru. All rights reserved.') }}</p>
                <div class="flex gap-6">
                    <a href="{{ route('tzi.home') }}" class="hover:text-white transition-colors">{{ __('Beranda') }}</a>
                    <a href="{{ route('tzi.contact') }}"
                        class="hover:text-white transition-colors">{{ __('Kontak') }}</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init({ duration: 900, once: true, offset: 80 });

        // Swiper Logic
        document.addEventListener('DOMContentLoaded', function () {
            const commonOptions = {
                spaceBetween: 0,
                centeredSlides: false,
                speed: 8000,
                loop: true,
                loopedSlides: 50,
                slidesPerView: 'auto',
                allowTouchMove: false,
            };

            // Initialize all swiper-left instances
            document.querySelectorAll('.swiper-left').forEach(el => {
                new Swiper(el, {
                    ...commonOptions,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                        reverseDirection: true,
                    },
                });
            });

            // Initialize all swiper-right instances
            document.querySelectorAll('.swiper-right').forEach(el => {
                new Swiper(el, {
                    ...commonOptions,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                });
            });
        });

        // Mobile Menu Logic
        const menuOpen = document.getElementById('menu-open');
        const menuClose = document.getElementById('menu-close');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuOpen && menuClose && mobileMenu) {
            menuOpen.addEventListener('click', () => {
                mobileMenu.classList.remove('translate-x-full');
                document.body.style.overflow = 'hidden';
            });

            menuClose.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
                document.body.style.overflow = '';
            });

            // Close on link click
            const links = mobileMenu.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('translate-x-full');
                    document.body.style.overflow = '';
                });
            });
        }
    </script>
    @stack('scripts')
</body>

</html>