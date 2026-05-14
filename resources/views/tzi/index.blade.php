@extends('layouts.tzi')

@section('title', __('PT Teknokrat Zamrud Integrasi - Beranda'))

@section('content')
    <!-- ── HERO ── -->
    <section class="hero-bg min-h-[90vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-20 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left text -->
                <div data-aos="fade-right">
                    <div class="flex items-center gap-3 text-sky-400 mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-500 shadow-[0_0_8px_rgba(59,130,246,0.8)]"></span>
                        <p class="text-[11px] font-bold uppercase tracking-[0.2em]">{{ __('Let\'s get to work') }}</p>
                    </div>

                    <div class="relative mb-6">
                        <div
                            class="absolute -left-6 top-0 bottom-0 w-1 bg-red-600 rounded-full shadow-[0_0_15px_rgba(220,38,38,0.5)]">
                        </div>
                        <h1
                            class="text-3xl sm:text-4xl md:text-7xl uppercase text-white leading-tight md:leading-[0.9] tracking-tight">
                            {{ __('Solusi Teknologi') }} <span class="hidden md:inline">&</span> <br class="md:hidden">
                            <span class="text-sky-500">{{ __('Integrasi') }}</span> <br class="hidden md:block">
                            {{ __('untuk Kebutuhan Anda') }}
                        </h1>
                    </div>

                    <div class="flex gap-4 mb-10">
                        <div class="w-0.5 bg-slate-700/50 self-stretch"></div>
                        <p class="text-slate-400 text-sm leading-relaxed max-w-sm">
                            {{ __('PT. Teknokrat Zamrud Integrasi - Penyedia dan instalasi produk Elektronika, Kelistrikan, Teknologi Informatika, Audio Video, Dekorasi Interior, Furnitur & Alat Tulis Kantor.') }}
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-6 mb-12">
                        <a href="{{ route('tzi.contact') }}"
                            class="btn-transition inline-flex items-center gap-3 bg-red-600 hover:bg-red-700 text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg shadow-xl shadow-red-900/30">
                            {{ __('Mulai Sekarang') }}
                            <iconify-icon icon="solar:arrow-right-bold" class="text-sm"></iconify-icon>
                        </a>
                        <a href="{{ route('tzi.contact') }}"
                            class="btn-transition inline-flex items-center gap-3 border border-white/20 hover:bg-white/5 text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg">
                            {{ __('Hubungi Kami') }}
                        </a>
                    </div>
                </div>

                <!-- Right side -->
                <div class="hidden md:block relative">
                    <div class="absolute -bottom-20 right-0 bg-red-600 text-white rounded-2xl p-5 shadow-2xl flex items-center gap-4"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
                            <iconify-icon icon="solar:phone-bold" class="text-white text-xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-widest font-medium opacity-80">{{ __('Hubungi Kapan Saja') }}
                            </p>
                            <p class="text-lg font-bold">0813-7127-3367</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Curve Shape -->
        <div class="custom-shape-divider-bottom-1715243168">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- ── TENTANG ── -->
    <section id="tentang" class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6 flex flex-col-reverse md:grid md:grid-cols-2 gap-16 items-center">
            <!-- Image collage -->
            <div class="relative" data-aos="fade-right">
                <div class="grid grid-cols-2 gap-2">
                    <img src="{{ asset('assets/img/pasang_ac.png') }}" alt="Modern Office Technology"
                        class="rounded-xl h-52 w-full object-cover col-span-2 shadow-md" />
                    <img src="{{ asset('assets/img/listrik.png') }}" alt="Instalasi Elektronika Kelistrikan"
                        class="rounded-xl h-44 w-full object-cover shadow-md" />
                    <img src="{{ asset('assets/img/cctv.png') }}" alt="Audio Video System"
                        class="rounded-xl h-44 w-full object-cover shadow-md" />
                </div>
            </div>

            <!-- Text -->
            <div data-aos="fade-left">
                <div class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-3">
                    <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                    {{ __('Tentang Kami') }}
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-none mb-5">
                    {{ __('SOLUSI') }} <span class="text-sky-600">{{ __('INTEGRASI') }}</span> {{ __('ANDAL UNTUK BISNIS ANDA') }}
                </h2>
                <p class="text-slate-500 text-sm leading-relaxed mb-7">
                    {{ __('PT. Teknokrat Zamrud Integrasi merupakan perusahaan yang bergerak di bidang jasa penyedia dan instalasi produk Elektronika, Kelistrikan, Teknologi Informatika, Audio Video, Dekorasi Interior, Furnitur serta Alat Tulis Kantor.') }}
                </p>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-4 py-6 border-y border-slate-100 mb-6">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 mb-3">
                            <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="text-3xl"></iconify-icon>
                        </div>
                        <p class="text-slate-700 text-[10px] font-bold uppercase tracking-wider leading-tight">{{ __('Tim Ahli') }}
                            <br> {{ __('Berpengalaman') }}
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 mb-3">
                            <iconify-icon icon="solar:verified-check-bold-duotone" class="text-3xl"></iconify-icon>
                        </div>
                        <p class="text-slate-700 text-[10px] font-bold uppercase tracking-wider leading-tight">{{ __('Kualitas') }}
                            <br> {{ __('Produk Terjamin') }}
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 mb-3">
                            <iconify-icon icon="solar:shield-check-bold-duotone" class="text-3xl"></iconify-icon>
                        </div>
                        <p class="text-slate-700 text-[10px] font-bold uppercase tracking-wider leading-tight">{{ __('Instalasi') }}
                            <br> {{ __('Profesional') }}
                        </p>
                    </div>
                </div>

                <a href="{{ route('tzi.service') }}"
                    class="btn-transition inline-flex items-center gap-2 bg-[#0a1628] hover:bg-sky-700 text-white text-xs font-bold uppercase tracking-widest px-7 py-4 rounded-lg">
                    {{ __('Lihat Layanan') }} <iconify-icon icon="solar:arrow-right-bold"></iconify-icon>
                </a>
            </div>
        </div>
    </section>

    <!-- ── STATS BAR ── -->
    <section class="relative py-24 overflow-hidden bg-sky-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bg-image.png') }}" alt="Stats Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-sky-900/85 backdrop-blur-[2px]"></div>
        </div>

        <div class="absolute -top-24 -right-24 w-96 h-96 bg-sky-500/20 rounded-full blur-[100px] animate-pulse z-0"></div>
        <div class="absolute -bottom-24 -left-24 w-[500px] h-[500px] bg-sky-600/10 rounded-full blur-[120px] z-0"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-y-12 gap-x-4 md:gap-0">
                <!-- Stat 1 -->
                <div class="group flex flex-col items-center text-center px-4 transition-all duration-500 hover:-translate-y-2 border-r border-white/10 md:border-r-0"
                    data-aos="fade-up" data-aos-delay="0">
                    <div class="relative mb-8">
                        <div
                            class="absolute inset-0 bg-sky-400/30 blur-2xl rounded-full scale-0 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div
                            class="relative w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-xl flex items-center justify-center text-white border border-white/20 shadow-2xl group-hover:border-sky-400/50 group-hover:bg-sky-500/20 transition-all duration-300">
                            <iconify-icon icon="solar:calendar-bold-duotone"
                                class="text-3xl sm:text-4xl text-sky-300 group-hover:text-white transition-colors"></iconify-icon>
                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-4xl md:text-6xl font-black text-white leading-none mb-3 tracking-tighter drop-shadow-2xl"
                            style="font-family:'Barlow Condensed',sans-serif;">2023</p>
                        <div
                            class="w-8 h-1 bg-sky-500 mx-auto rounded-full mb-3 transform origin-left group-hover:w-full transition-all duration-500">
                        </div>
                        <p
                            class="text-[11px] font-bold uppercase tracking-[0.3em] text-sky-200 group-hover:text-sky-100 transition-colors">
                            {{ __('Tahun Berdiri') }}</p>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="group flex flex-col items-center text-center px-4 transition-all duration-500 hover:-translate-y-2 md:border-x border-white/10"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="relative mb-8">
                        <div
                            class="absolute inset-0 bg-sky-400/30 blur-2xl rounded-full scale-0 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div
                            class="relative w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-xl flex items-center justify-center text-white border border-white/20 shadow-2xl group-hover:border-sky-400/50 group-hover:bg-sky-500/20 transition-all duration-300">
                            <iconify-icon icon="solar:buildings-bold-duotone"
                                class="text-3xl sm:text-4xl text-sky-300 group-hover:text-white transition-colors"></iconify-icon>
                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-4xl md:text-6xl font-black text-white leading-none mb-3 tracking-tighter drop-shadow-2xl"
                            style="font-family:'Barlow Condensed',sans-serif;">3+</p>
                        <div
                            class="w-8 h-1 bg-sky-500 mx-auto rounded-full mb-3 transform origin-left group-hover:w-full transition-all duration-500">
                        </div>
                        <p
                            class="text-[11px] font-bold uppercase tracking-[0.3em] text-sky-200 group-hover:text-sky-100 transition-colors">
                            {{ __('Bidang Usaha') }}</p>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="group flex flex-col items-center text-center px-4 transition-all duration-500 hover:-translate-y-2 border-r border-white/10 md:border-r-0"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="relative mb-8">
                        <div
                            class="absolute inset-0 bg-sky-400/30 blur-2xl rounded-full scale-0 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div
                            class="relative w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-xl flex items-center justify-center text-white border border-white/20 shadow-2xl group-hover:border-sky-400/50 group-hover:bg-sky-500/20 transition-all duration-300">
                            <iconify-icon icon="solar:globus-bold-duotone"
                                class="text-3xl sm:text-4xl text-sky-300 group-hover:text-white transition-colors"></iconify-icon>
                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-4xl md:text-6xl font-black text-white leading-none mb-3 tracking-tighter drop-shadow-2xl"
                            style="font-family:'Barlow Condensed',sans-serif;">6+</p>
                        <div
                            class="w-8 h-1 bg-sky-500 mx-auto rounded-full mb-3 transform origin-left group-hover:w-full transition-all duration-500">
                        </div>
                        <p
                            class="text-[11px] font-bold uppercase tracking-[0.3em] text-sky-200 group-hover:text-sky-100 transition-colors">
                            {{ __('Sektor Industri') }}</p>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="group flex flex-col items-center text-center px-4 transition-all duration-500 hover:-translate-y-2 md:border-x border-white/10"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="relative mb-8">
                        <div
                            class="absolute inset-0 bg-sky-400/30 blur-2xl rounded-full scale-0 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div
                            class="relative w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-xl flex items-center justify-center text-white border border-white/20 shadow-2xl group-hover:border-sky-400/50 group-hover:bg-sky-500/20 transition-all duration-300">
                            <iconify-icon icon="solar:box-bold-duotone"
                                class="text-3xl sm:text-4xl text-sky-300 group-hover:text-white transition-colors"></iconify-icon>
                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-4xl md:text-6xl font-black text-white leading-none mb-3 tracking-tighter drop-shadow-2xl"
                            style="font-family:'Barlow Condensed',sans-serif;">40+</p>
                        <div
                            class="w-8 h-1 bg-sky-500 mx-auto rounded-full mb-3 transform origin-left group-hover:w-full transition-all duration-500">
                        </div>
                        <p
                            class="text-[11px] font-bold uppercase tracking-[0.3em] text-sky-200 group-hover:text-sky-100 transition-colors">
                            {{ __('Solusi Bermerek') }}</p>
                    </div>
                </div>

                <!-- Stat 5 -->
                <div class="group flex flex-col items-center text-center px-4 transition-all duration-500 hover:-translate-y-2 col-span-2 md:col-span-1 pt-8 md:pt-0 border-t border-white/10 md:border-t-0"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="relative mb-8">
                        <div
                            class="absolute inset-0 bg-sky-400/30 blur-2xl rounded-full scale-0 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div
                            class="relative w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-xl flex items-center justify-center text-white border border-white/20 shadow-2xl group-hover:border-sky-400/50 group-hover:bg-sky-500/20 transition-all duration-300">
                            <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"
                                class="text-3xl sm:text-4xl text-sky-300 group-hover:text-white transition-colors"></iconify-icon>
                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-4xl md:text-6xl font-black text-white leading-none mb-3 tracking-tighter drop-shadow-2xl"
                            style="font-family:'Barlow Condensed',sans-serif;">30+</p>
                        <div
                            class="w-8 h-1 bg-sky-500 mx-auto rounded-full mb-3 transform origin-left group-hover:w-full transition-all duration-500">
                        </div>
                        <p
                            class="text-[11px] font-bold uppercase tracking-[0.3em] text-sky-200 group-hover:text-sky-100 transition-colors">
                            {{ __('Klien Terpercaya') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── LAYANAN ── -->
    <section id="layanan" class="py-24 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
                <div data-aos="fade-right">
                    <div class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-3">
                        <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                        {{ __('Layanan Unggulan') }}
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-none">
                        {{ __('BIDANG USAHA UTAMA') }}<br /><span class="text-sky-600">{{ __('KAMI') }}</span>
                    </h2>
                </div>
                <p class="text-slate-500 text-sm leading-relaxed md:max-w-xs" data-aos="fade-left">
                    {{ __('Kami menyediakan ekosistem solusi lengkap untuk mendukung efisiensi dan estetika ruang kerja maupun komersial Anda.') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: SOLUSI HVAC -->
                <div class="relative group bg-white rounded-tl-4xl rounded-tr-4xl rounded-br-4xl p-8 border border-slate-100 shadow-xl overflow-hidden h-full"
                    data-aos="fade-up">
                    <div class="absolute top-0 right-0 w-2/3 h-full overflow-hidden">
                        <img src="{{ asset('assets/img/ac.webp') }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                            alt="HVAC">
                        <div class="absolute inset-0 bg-linear-to-r from-white via-white/80 to-transparent"></div>
                    </div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-16 h-16 rounded-full bg-sky-600 flex items-center justify-center text-white shadow-lg shadow-sky-200">
                                <iconify-icon icon="solar:snowflake-bold-duotone" class="text-4xl"></iconify-icon>
                            </div>
                            <h3 class="text-2xl font-black text-sky-900 leading-tight uppercase">{{ __('SOLUSI') }} <br> {{ __('HVAC') }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed max-w-[200px] mb-8">
                            {{ __('Sistem pendingin udara (AC) berkualitas untuk kenyamanan ruang hunian dan kantor.') }}
                        </p>
                        <div class="w-16 h-1 bg-sky-600 rounded-full mt-auto"></div>
                    </div>
                </div>

                <!-- Card 2: SOLUSI IT & ELEKTRONIK -->
                <div class="relative group bg-white rounded-tl-[2rem] rounded-tr-[2rem] rounded-br-[2rem] p-8 border border-slate-100 shadow-xl overflow-hidden h-full"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-0 right-0 w-2/3 h-full overflow-hidden">
                        <img src="{{ asset('assets/img/elektronik.png') }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                            alt="IT & Elektronik">
                        <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 to-transparent"></div>
                    </div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-16 h-16 rounded-full bg-sky-600 flex items-center justify-center text-white shadow-lg shadow-sky-200">
                                <iconify-icon icon="solar:monitor-bold-duotone" class="text-4xl"></iconify-icon>
                            </div>
                            <h3 class="text-2xl font-black text-sky-900 leading-tight uppercase">{{ __('INFRASTRUKTUR') }} <br> {{ __('IT') }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed max-w-[200px] mb-8">
                            {{ __('Solusi jaringan, hardware, dan sistem keamanan terpadu untuk bisnis modern.') }}
                        </p>
                        <div class="w-16 h-1 bg-sky-600 rounded-full mt-auto"></div>
                    </div>
                </div>

                <!-- Card 3: SOLUSI FURNITURE -->
                <div class="relative group bg-white rounded-tl-[2rem] rounded-tr-[2rem] rounded-br-[2rem] p-8 border border-slate-100 shadow-xl overflow-hidden h-full"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 right-0 w-2/3 h-full overflow-hidden">
                        <img src="{{ asset('assets/img/furniture.png') }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                            alt="Interior & Furniture">
                        <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 to-transparent"></div>
                    </div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-16 h-16 rounded-full bg-sky-600 flex items-center justify-center text-white shadow-lg shadow-sky-200">
                                <iconify-icon icon="solar:armchair-bold-duotone" class="text-4xl"></iconify-icon>
                            </div>
                            <h3 class="text-2xl font-black text-sky-900 leading-tight uppercase">{{ __('INTERIOR &') }} <br> {{ __('FURNITUR') }}</h3>
                        </div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed max-w-[200px] mb-8">
                            {{ __('Desain ruang kerja ergonomis dan furnitur kantor berkualitas tinggi.') }}
                        </p>
                        <div class="w-16 h-1 bg-sky-600 rounded-full mt-auto"></div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a href="{{ route('tzi.service') }}"
                    class="btn-transition inline-flex items-center gap-2 bg-[#0a1628] hover:bg-sky-700 text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg">
                    {{ __('Lihat Semua Layanan') }} <iconify-icon icon="solar:arrow-right-bold"></iconify-icon>
                </a>
            </div>
        </div>
    </section>

    <!-- ── FEATURE DARK SECTION ── -->
    <section class="py-24 bg-[#0a1628] relative overflow-hidden"
        style="background: radial-gradient(ellipse 60% 60% at 80% 50%, rgba(37,99,235,0.15) 0%, transparent 70%), linear-gradient(rgba(10, 22, 40, 0.85), rgba(10, 22, 40, 0.85)), url('{{ asset('assets/img/ac.png') }}'); background-size: cover; background-position: center;">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-400 mb-3">
                    <span class="w-6 h-0.5 bg-sky-400 inline-block"></span>
                    {{ __('Keunggulan Teknis') }}
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-white leading-none mb-5">
                    {{ __('MENGAPA MEMILIH') }} <span class="text-sky-400">{{ __('LAYANAN KAMI?') }}</span>
                </h2>
                <p class="text-slate-400 text-sm leading-relaxed mb-8">
                    {{ __('Kami menggabungkan keahlian teknis dengan manajemen proyek yang efisien untuk menghadirkan solusi integrasi yang andal, aman, dan berstandar industri.') }}
                </p>
                <a href="{{ route('tzi.contact') }}"
                    class="btn-transition inline-flex items-center gap-2 bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold uppercase tracking-widest px-7 py-4 rounded-lg">
                    {{ __('Konsultasi Gratis') }} <iconify-icon icon="solar:chat-round-dots-bold"></iconify-icon>
                </a>
            </div>

            <div data-aos="fade-left" class="space-y-0">
                <div class="feature-row flex items-start gap-5 py-6">
                    <div
                        class="w-11 h-11 rounded-xl bg-sky-900 border border-sky-800 flex items-center justify-center flex-shrink-0">
                        <iconify-icon icon="solar:globus-bold-duotone" class="text-white text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="text-white font-black uppercase text-sm mb-1">{{ __('Integrasi Ekosistem Penuh') }}</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ __('Solusi satu atap yang mengintegrasikan sistem Elektronika, HVAC, dan Interior secara harmonis.') }}</p>
                    </div>
                </div>
                <div class="feature-row flex items-start gap-5 py-6">
                    <div
                        class="w-11 h-11 rounded-xl bg-sky-900 border border-sky-800 flex items-center justify-center flex-shrink-0">
                        <iconify-icon icon="solar:diploma-verified-bold-duotone" class="text-white text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="text-white font-black uppercase text-sm mb-1">{{ __('Kepatuhan KBLI & Standar Resmi') }}</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ __('Seluruh pekerjaan kami didasarkan pada klasifikasi KBLI resmi dan sertifikasi industri yang sah.') }}</p>
                    </div>
                </div>
                <div class="feature-row flex items-start gap-5 pt-6">
                    <div
                        class="w-11 h-11 rounded-xl bg-sky-900 border border-sky-800 flex items-center justify-center flex-shrink-0">
                        <iconify-icon icon="solar:settings-minimalistic-bold-duotone"
                            class="text-white text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="text-white font-black uppercase text-sm mb-1">{{ __('Pemeliharaan & Dukungan 24/7') }}</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ __('Layanan purna jual yang sigap untuk memastikan sistem Anda selalu beroperasi tanpa gangguan.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── KEUNGGULAN CARDS ── -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-14" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-3">
                    <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                    {{ __('Keunggulan Kami') }}
                    <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-none">
                    {{ __('ALASAN MEMILIH') }} <span class="text-sky-600">{{ __('KAMI') }}</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Card 1 -->
                <div class="group relative bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:border-sky-200 transition-all duration-500 overflow-hidden"
                    data-aos="fade-up">
                    <div class="flex items-start gap-5 relative z-10">
                        <div
                            class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-sky-700 flex items-center justify-center text-white shadow-lg shadow-sky-900/20 group-hover:scale-110 transition-transform duration-500">
                            <iconify-icon icon="solar:buildings-bold-duotone" class="text-3xl md:text-4xl"></iconify-icon>
                        </div>
                        <div class="flex-grow pt-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-2xl md:text-3xl font-black text-sky-700 leading-none">01</span>
                                <div class="w-0.5 h-8 bg-sky-600"></div>
                                <h3 class="text-sm md:text-base font-black uppercase text-slate-900 leading-tight">
                                    Trusted by <br>Government Institutions</h3>
                            </div>
                            <p class="text-slate-500 text-xs md:text-sm leading-relaxed">
                                {{ __('Dipercaya oleh instansi pemerintah, lembaga pendidikan, sektor kesehatan, hospitality, dan berbagai institusi profesional.') }}
                            </p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0 w-10 h-10 bg-sky-600"
                        style="clip-path: polygon(100% 0, 0 100%, 100% 100%);"></div>
                </div>

                <!-- Card 2 -->
                <div class="group relative bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:border-sky-200 transition-all duration-500 overflow-hidden"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start gap-5 relative z-10">
                        <div
                            class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-sky-700 flex items-center justify-center text-white shadow-lg shadow-sky-900/20 group-hover:scale-110 transition-transform duration-500">
                            <iconify-icon icon="solar:widget-3-bold-duotone" class="text-3xl md:text-4xl"></iconify-icon>
                        </div>
                        <div class="flex-grow pt-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-2xl md:text-3xl font-black text-sky-700 leading-none">02</span>
                                <div class="w-0.5 h-8 bg-sky-600"></div>
                                <h3 class="text-sm md:text-base font-black uppercase text-slate-900 leading-tight">Multi
                                    Division <br>Integrated Solution</h3>
                            </div>
                            <p class="text-slate-500 text-xs md:text-sm leading-relaxed">
                                {{ __('Solusi terintegrasi dalam HVAC, IT & elektronik, serta furniture untuk kebutuhan komersial dan institusional.') }}
                            </p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0 w-10 h-10 bg-sky-600"
                        style="clip-path: polygon(100% 0, 0 100%, 100% 100%);"></div>
                </div>

                <!-- Card 3 -->
                <div class="group relative bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:border-sky-200 transition-all duration-500 overflow-hidden"
                    data-aos="fade-up">
                    <div class="flex items-start gap-5 relative z-10">
                        <div
                            class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-sky-700 flex items-center justify-center text-white shadow-lg shadow-sky-900/20 group-hover:scale-110 transition-transform duration-500">
                            <iconify-icon icon="solar:medal-ribbon-bold-duotone"
                                class="text-3xl md:text-4xl"></iconify-icon>
                        </div>
                        <div class="flex-grow pt-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-2xl md:text-3xl font-black text-sky-700 leading-none">03</span>
                                <div class="w-0.5 h-8 bg-sky-600"></div>
                                <h3 class="text-sm md:text-base font-black uppercase text-slate-900 leading-tight">
                                    Leading Brand <br>Partnerships</h3>
                            </div>
                            <p class="text-slate-500 text-xs md:text-sm leading-relaxed">
                                {{ __('Menghadirkan produk dan solusi dari berbagai brand terkemuka untuk menjamin kualitas dan performa terbaik.') }}
                            </p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0 w-10 h-10 bg-sky-600"
                        style="clip-path: polygon(100% 0, 0 100%, 100% 100%);"></div>
                </div>

                <!-- Card 4 -->
                <div class="group relative bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:border-sky-200 transition-all duration-500 overflow-hidden"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start gap-5 relative z-10">
                        <div
                            class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-sky-700 flex items-center justify-center text-white shadow-lg shadow-sky-900/20 group-hover:scale-110 transition-transform duration-500">
                            <iconify-icon icon="solar:settings-minimalistic-bold-duotone"
                                class="text-3xl md:text-4xl"></iconify-icon>
                        </div>
                        <div class="flex-grow pt-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-2xl md:text-3xl font-black text-sky-700 leading-none">04</span>
                                <div class="w-0.5 h-8 bg-sky-600"></div>
                                <h3 class="text-sm md:text-base font-black uppercase text-slate-900 leading-tight">
                                    Professional <br>Installation Team</h3>
                            </div>
                            <p class="text-slate-500 text-xs md:text-sm leading-relaxed">
                                {{ __('Didukung tim teknis profesional untuk instalasi, implementasi, dan dukungan proyek secara optimal.') }}
                            </p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0 w-10 h-10 bg-sky-600"
                        style="clip-path: polygon(100% 0, 0 100%, 100% 100%);"></div>
                </div>

                <!-- Card 5 -->
                <div class="group relative bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:border-sky-200 transition-all duration-500 overflow-hidden"
                    data-aos="fade-up">
                    <div class="flex items-start gap-5 relative z-10">
                        <div
                            class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-sky-700 flex items-center justify-center text-white shadow-lg shadow-sky-900/20 group-hover:scale-110 transition-transform duration-500">
                            <iconify-icon icon="solar:globus-bold-duotone" class="text-3xl md:text-4xl"></iconify-icon>
                        </div>
                        <div class="flex-grow pt-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-2xl md:text-3xl font-black text-sky-700 leading-none">05</span>
                                <div class="w-0.5 h-8 bg-sky-600"></div>
                                <h3 class="text-sm md:text-base font-black uppercase text-slate-900 leading-tight">
                                    Nationwide <br>Project Capability</h3>
                            </div>
                            <p class="text-slate-500 text-xs md:text-sm leading-relaxed">
                                {{ __('Mampu menangani kebutuhan proyek untuk berbagai wilayah dan sektor dengan pendekatan profesional.') }}
                            </p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0 w-10 h-10 bg-sky-600"
                        style="clip-path: polygon(100% 0, 0 100%, 100% 100%);"></div>
                </div>

                <!-- Card 6 -->
                <div class="group relative bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:border-sky-200 transition-all duration-500 overflow-hidden"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start gap-5 relative z-10">
                        <div
                            class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-full bg-sky-700 flex items-center justify-center text-white shadow-lg shadow-sky-900/20 group-hover:scale-110 transition-transform duration-500">
                            <iconify-icon icon="solar:headphones-round-bold-duotone"
                                class="text-3xl md:text-4xl"></iconify-icon>
                        </div>
                        <div class="flex-grow pt-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-2xl md:text-3xl font-black text-sky-700 leading-none">06</span>
                                <div class="w-0.5 h-8 bg-sky-600"></div>
                                <h3 class="text-sm md:text-base font-black uppercase text-slate-900 leading-tight">
                                    Responsive <br>After Sales Support</h3>
                            </div>
                            <p class="text-slate-500 text-xs md:text-sm leading-relaxed">
                                {{ __('Layanan after-sales yang cepat, responsif, dan siap mendukung keberlangsungan operasional klien.') }}
                            </p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0 w-10 h-10 bg-sky-600"
                        style="clip-path: polygon(100% 0, 0 100%, 100% 100%);"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── PRINCIPALS & PARTNERS ── -->
    <section class="py-24 bg-white border-t border-slate-100 overflow-hidden relative">
        <div class="max-w-6xl mx-auto px-6 text-center mb-16 relative z-10">
            <div class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-5">
                <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                {{ __('Kolaborasi Global & Strategis') }}
                <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
            </div>
            <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900" data-aos="fade-up">{{ __('PRINSIPAL & MITRA KAMI') }}</h2>
            <div class="w-16 h-1 bg-sky-600 mx-auto mt-6 rounded-full"></div>
        </div>

        <style>
            .principals-slider .swiper-wrapper {
                transition-timing-function: linear !important;
            }

            .m-logo {
                height: 45px;
                width: auto;
                max-width: 180px;
                object-fit: contain;
                filter: grayscale(100%) brightness(0.6) opacity(0.5);
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .swiper-slide:hover .m-logo {
                filter: grayscale(0%) brightness(1) opacity(1);
                transform: scale(1.1);
            }

            .slider-container::before,
            .slider-container::after {
                content: '';
                position: absolute;
                top: 0;
                width: 150px;
                height: 100%;
                z-index: 10;
                pointer-events: none;
            }

            .slider-container::before {
                left: 0;
                background: linear-gradient(to right, white, transparent);
            }

            .slider-container::after {
                right: 0;
                background: linear-gradient(to left, white, transparent);
            }
        </style>

        <div class="slider-container space-y-12 md:space-y-16">
            <!-- Division 1: Air Conditioning -->
            <div class="space-y-4">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-sky-500/60 text-center px-6">Air
                    Conditioning Division</p>
                <div class="swiper swiper-left">
                    <div class="swiper-wrapper">
                        @foreach (['daikin.jpg', 'mitsubishi.svg', 'panasonic.png', 'samsung.png', 'LG.svg', 'carrier.png', 'midea.png', 'haier.png', 'hisense.png', 'gree.png', 'york.png', 'trane.png', 'aqua.png', 'polytron.png'] as $brand)
                            <div class="swiper-slide !w-auto px-8"><img src="{{ asset('assets/img/brands/' . $brand) }}" alt=""
                                    class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        @endforeach
                        {{-- Duplicate for seamless loop --}}
                        @foreach (['daikin.jpg', 'mitsubishi.svg', 'panasonic.png', 'samsung.png', 'LG.svg', 'carrier.png', 'midea.png', 'haier.png', 'hisense.png', 'gree.png', 'york.png', 'trane.png', 'aqua.png', 'polytron.png'] as $brand)
                            <div class="swiper-slide !w-auto px-8"><img src="{{ asset('assets/img/brands/' . $brand) }}" alt=""
                                    class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Division 2: IT - Electronic -->
            <div class="space-y-4">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-sky-500/60 text-center px-6">IT -
                    Electronic Division</p>
                <div class="swiper swiper-right">
                    <div class="swiper-wrapper">
                        @foreach (['asus.png', 'acer.png', 'apple.png', 'dell.png', 'hp.png', 'lenovo.png', 'msi.png', 'cisco.png', 'epson.png', 'bosch.png', 'brother.png', 'benq.png', 'philips.png', 'axioo.png', 'axis.png', 'advan.png', 'ezviz.png', 'hikvision.png', 'LG.svg', 'microvision.png', 'newline.png', 'samsung.png', 'sennheiser.png', 'toa.png', 'viewsonic.png'] as $brand)
                            <div class="swiper-slide !w-auto px-8"><img src="{{ asset('assets/img/brands/' . $brand) }}" alt=""
                                    class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        @endforeach
                        {{-- Duplicate --}}
                        @foreach (['asus.png', 'acer.png', 'apple.png', 'dell.png', 'hp.png', 'lenovo.png', 'msi.png', 'cisco.png', 'epson.png', 'bosch.png', 'brother.png', 'benq.png', 'philips.png', 'axioo.png', 'axis.png', 'advan.png', 'ezviz.png', 'hikvision.png', 'LG.svg', 'microvision.png', 'newline.png', 'samsung.png', 'sennheiser.png', 'toa.png', 'viewsonic.png'] as $brand)
                            <div class="swiper-slide !w-auto px-8"><img src="{{ asset('assets/img/brands/' . $brand) }}" alt=""
                                    class="m-logo h-10 grayscale hover:grayscale-0 transition-all"></div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Division 3: Furniture -->
            <div class="space-y-4">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-sky-500/60 text-center px-6">Furniture
                    Division</p>
                <div class="swiper swiper-left">
                    <div class="swiper-wrapper">
                        @foreach (['futura.jpg', 'chitose.webp', 'lion.png', 'indachi.png', 'donati.webp', 'chairman.webp', 'savello.avif', 'importa.png', 'expo.png', 'orbitrend.webp', 'vip.svg', 'gresco.webp', 'valmont.png', 'novin.png'] as $brand)
                            <div class="swiper-slide !w-auto px-8"><img src="{{ asset('assets/img/brands/' . $brand) }}" alt=""
                                    class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        @endforeach
                        {{-- Duplicate --}}
                        @foreach (['futura.jpg', 'chitose.webp', 'lion.png', 'indachi.png', 'donati.webp', 'chairman.webp', 'savello.avif', 'importa.png', 'expo.png', 'orbitrend.webp', 'vip.svg', 'gresco.webp', 'valmont.png', 'novin.png'] as $brand)
                            <div class="swiper-slide !w-auto px-8"><img src="{{ asset('assets/img/brands/' . $brand) }}" alt=""
                                    class="m-logo h-12 grayscale hover:grayscale-0 transition-all"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── OUR CLIENTS ── -->
    <section class="py-24 bg-white relative overflow-hidden border-t border-slate-100">
        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-4">
                    <span class="w-8 h-px bg-sky-600"></span>
                    {{ __('Jejak Rekam') }}
                    <span class="w-8 h-px bg-sky-600"></span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-tight">
                    {{ __('KLIEN &') }} <span class="text-sky-600">{{ __('KOLABORASI') }}</span>
                </h2>
                <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto mt-4">
                    {{ __('Dedikasi kami terhadap kualitas telah membangun kepercayaan dari berbagai institusi bergengsi di Indonesia.') }}
                </p>
            </div>

            <div class="space-y-12 md:space-y-16">
                <!-- Pendidikan -->
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center lg:items-start" data-aos="fade-up">
                    <div class="w-full lg:w-1/4 flex-shrink-0 text-center lg:text-left">
                        <div
                            class="w-16 h-16 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 text-3xl mb-6 mx-auto lg:mx-0">
                            <iconify-icon icon="solar:globus-bold-duotone"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-3">{{ __('Sektor Pendidikan') }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">{{ __('Mendukung fasilitas dan operasional teknologi di berbagai perguruan tinggi serta sekolah unggulan.') }}</p>
                    </div>
                    <div class="w-full lg:w-3/4">
                        <div id="edu-grid" class="flex flex-wrap justify-center lg:justify-start gap-3 sm:gap-4"></div>
                    </div>
                </div>

                <div class="w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

                <!-- Pemerintahan -->
                <div class="flex flex-col lg:flex-row-reverse gap-8 lg:gap-16 items-center lg:items-start"
                    data-aos="fade-up">
                    <div class="w-full lg:w-1/4 flex-shrink-0 text-center lg:text-right">
                        <div
                            class="w-16 h-16 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 text-3xl mb-6 mx-auto lg:mx-0 lg:ml-auto">
                            <iconify-icon icon="solar:case-minimalistic-bold-duotone"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-3">{{ __('Pemerintahan') }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">{{ __('Penyedia terpercaya untuk pengadaan dan instalasi di kementerian serta lembaga negara.') }}</p>
                    </div>
                    <div class="w-full lg:w-3/4">
                        <div id="gov-grid" class="flex flex-wrap justify-center lg:justify-end gap-3 sm:gap-4"></div>
                    </div>
                </div>

                <div class="w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

                <!-- Hospitality -->
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center lg:items-start" data-aos="fade-up">
                    <div class="w-full lg:w-1/4 flex-shrink-0 text-center lg:text-left">
                        <div
                            class="w-16 h-16 rounded-2xl bg-sky-50 flex items-center justify-center text-sky-600 text-3xl mb-6 mx-auto lg:mx-0">
                            <iconify-icon icon="solar:bed-bold-duotone"></iconify-icon>
                        </div>
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-3">{{ __('Hospitality & Medis') }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">{{ __('Integrasi sistem cerdas untuk hotel, rumah sakit, dan fasilitas publik modern.') }}</p>
                    </div>
                    <div class="w-full lg:w-3/4">
                        <div id="hosp-grid" class="flex flex-wrap justify-center lg:justify-start gap-3 sm:gap-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA / KONTAK ── -->
    <section id="kontak" class="py-28 bg-[#0a1628] relative"
        style="background-image: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(37,99,235,0.15) 0%, transparent 70%);">
        <div class="custom-shape-divider-top-1715243168">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-40.86,82.39-15.3,168.19-14.33,250.45.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="max-w-3xl mx-auto px-6 text-center pt-10" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-400 mb-5">
                <span class="w-6 h-0.5 bg-sky-400 inline-block"></span>
                {{ __('Hubungi Kami') }}
                <span class="w-6 h-0.5 bg-sky-400 inline-block"></span>
            </div>
            <h2 class="text-3xl md:text-6xl font-black uppercase text-white leading-none mb-5">
                {{ __('Siap Mengintegrasikan') }} <span class="text-sky-400">{{ __('Kebutuhan Anda?') }}</span>
            </h2>
            <p class="text-slate-400 text-base max-w-xl mx-auto mb-10">
                {{ __('Konsultasikan kebutuhan teknologi dan infrastruktur Anda dengan tim ahli kami secara gratis.') }}
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="mailto:admin@teknokratzamrud.com"
                    class="btn-transition inline-flex items-center gap-2 bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg shadow-xl shadow-sky-900/50">
                    <iconify-icon icon="solar:letter-bold"></iconify-icon>
                    {{ __('Kirim Email') }}
                </a>
                <a href="tel:081371273367"
                    class="btn-transition inline-flex items-center gap-2 border-2 border-sky-700 hover:border-sky-400 hover:bg-sky-900/30 text-sky-300 hover:text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg">
                    <iconify-icon icon="solar:phone-bold"></iconify-icon>
                    0813-7127-3367
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Client Logos Data
        const eduClients = [
            { name: "Politeknik Negeri Bengkalis", abbr: "PNB", url: "{{ asset('assets/img/clients/pnb.png') }}" },
            { name: "Politeknik Caltex Riau", abbr: "PCR", url: "{{ asset('assets/img/clients/pcr.png') }}" },
            { name: "Universitas Riau", abbr: "UNRI", url: "{{ asset('assets/img/clients/unri.png') }}" },
            { name: "Universitas Islam Riau", abbr: "UIR", url: "{{ asset('assets/img/clients/uir.png') }}" },
            { name: "UIN Sultan Syarif Kasim", abbr: "UIN", url: "{{ asset('assets/img/clients/uin.png') }}" },
            { name: "Universitas Andalas", abbr: "UNAND", url: "{{ asset('assets/img/clients/unand.png') }}" },
            { name: "Universitas Negeri Padang", abbr: "UNP", url: "{{ asset('assets/img/clients/unp.png') }}" },
            { name: "UNISI Kuantan Singingi", abbr: "UNISI", url: "{{ asset('assets/img/clients/unisi.png') }}" },
            { name: "Univ. Maritim Raja Ali Haji", abbr: "UMRAH", url: "{{ asset('assets/img/clients/umrah.png') }}" },
            { name: "IAIN Sultan Abdurrahman", abbr: "IAIN", url: "{{ asset('assets/img/clients/iain.webp') }}" },
            { name: "Universitas Lancang Kuning", abbr: "UNILAK", url: "{{ asset('assets/img/clients/unilak.png') }}" },
            { name: "Universitas AwalBros", abbr: "UAB", url: "{{ asset('assets/img/clients/uab.png') }}" },
        ];

        const govClients = [
            { name: "Kementrian Pendidikan Tinggi", abbr: "DIKTI", url: "{{ asset('assets/img/clients/dikti.png') }}" },
            { name: "Kementrian Agama", abbr: "KEMENAG", url: "{{ asset('assets/img/clients/kemenag.png') }}" },
            { name: "Kejaksaan Agung", abbr: "KEJAGUNG", url: "{{ asset('assets/img/clients/kejagung.png') }}" },
            { name: "Kejaksaan Tinggi Riau", abbr: "KEJATI", url: "{{ asset('assets/img/clients/kejatiri.png') }}" },
            { name: "Pengadilan Tinggi Kepri", abbr: "PT KEPRI", url: "{{ asset('assets/img/clients/ptkepri.png') }}" },
            { name: "PTA Pekanbaru", abbr: "PTA PKU", url: "{{ asset('assets/img/clients/ptapku.png') }}" },
            { name: "PTA Kepulauan Riau", abbr: "PTA KEPRI", url: "{{ asset('assets/img/clients/ptakepri.png') }}" },
            { name: "Dinas PU Provinsi Riau", abbr: "PUPR RIAU", url: "{{ asset('assets/img/clients/pupr.png') }}" },
            { name: "Dinas PU Kepri", abbr: "PU KEPRI", url: "{{ asset('assets/img/clients/pukepri.png') }}" },
            { name: "Ditjen Pajak", abbr: "DJP", url: "{{ asset('assets/img/clients/djp.svg') }}" },
            { name: "Kementrian Perhubungan", abbr: "KEMENHUB", url: "{{ asset('assets/img/clients/kemenhub.png') }}" },
            { name: "Kementrian BKKBN", abbr: "BKKBN", url: "{{ asset('assets/img/clients/bkkbn.png') }}" },
            { name: "BVP & Produktivitas", abbr: "BVP", url: "{{ asset('assets/img/clients/bvp.webp') }}" },
            { name: "Kementrian Kesehatan", abbr: "KEMENKES", url: "{{ asset('assets/img/clients/kemenkes.png') }}" },
            { name: "Angkasa Pura", abbr: "AP", url: "{{ asset('assets/img/clients/angkasapura.png') }}" },
            { name: "Agrinas Palm Nusantara", abbr: "AGRINAS", url: "{{ asset('assets/img/clients/agrinas.png') }}" },
            { name: "Telkomsel", abbr: "TSEL", url: "{{ asset('assets/img/clients/telkomsel.png') }}" },
        ];

        const hospClients = [
            { name: "Cititel Group", abbr: "CITITEL", url: "{{ asset('assets/img/clients/cititel.webp') }}" },
            { name: "Hotel New Hollywood", abbr: "NEW HWD", url: "{{ asset('assets/img/clients/newhwd.jpg') }}" },
            { name: "Swissbell in Hotel", abbr: "SWISSBELL", url: "{{ asset('assets/img/clients/swissbell.png') }}" },
            { name: "Prime Park Hotel", abbr: "PRIME PARK", url: "{{ asset('assets/img/clients/primepark.png') }}" },
            { name: "Archipelago Hotel Group", abbr: "ARCHIPELAGO", url: "{{ asset('assets/img/clients/archipelago.jpg') }}" },
            { name: "RS AwalBros", abbr: "AWALBROS", url: "{{ asset('assets/img/clients/awalbros.png') }}" },
            { name: "RSIA Andini", abbr: "ANDINI", url: "{{ asset('assets/img/clients/rsia.png') }}" },
            { name: "Aulia Hospital", abbr: "AULIA", url: "{{ asset('assets/img/clients/auliahospital.png') }}" },
            { name: "RS Prima", abbr: "RS PRIMA", url: "{{ asset('assets/img/clients/rsprima.png') }}" },
        ];

        function renderClientGrid(data, containerId) {
            const grid = document.getElementById(containerId);
            if (!grid) return;
            data.forEach(item => {
                const wrap = document.createElement('div');
                wrap.className = 'group flex items-center gap-3 bg-white border border-slate-200 pr-5 pl-2 py-2 rounded-full hover:border-sky-400 hover:shadow-md hover:shadow-sky-100 transition-all duration-300 cursor-pointer hover:-translate-y-1';
                wrap.title = item.name;

                const box = document.createElement('div');
                box.className = 'w-10 h-10 rounded-full bg-slate-50 flex-shrink-0 flex items-center justify-center p-1.5 border border-slate-100 group-hover:bg-white group-hover:border-sky-100 transition-colors';

                if (item.url) {
                    const img = document.createElement('img');
                    img.src = item.url;
                    img.alt = item.name;
                    img.loading = 'lazy';
                    img.className = 'max-w-full max-h-full object-contain filter grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300';
                    img.onerror = function () {
                        box.innerHTML = `<span class="text-[10px] font-black text-slate-400 text-center leading-tight">${item.abbr}</span>`;
                    };
                    box.appendChild(img);
                } else {
                    box.innerHTML = `<span class="text-[10px] font-black text-slate-400 text-center leading-tight">${item.abbr}</span>`;
                }

                const label = document.createElement('span');
                label.className = 'text-xs font-bold text-slate-600 group-hover:text-sky-600 transition-colors max-w-[140px] truncate';
                label.textContent = item.name;

                wrap.appendChild(box);
                wrap.appendChild(label);
                grid.appendChild(wrap);
            });
        }

        renderClientGrid(eduClients, 'edu-grid');
        renderClientGrid(govClients, 'gov-grid');
        renderClientGrid(hospClients, 'hosp-grid');
    </script>
@endpush