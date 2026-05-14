@extends('layouts.tzi')

@section('title', __('Tentang Kami - PT Teknokrat Zamrud Integrasi'))

@section('content')
    <!-- ── PAGE HERO ── -->
    <section class="about-bg min-h-[40vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-20 relative z-10 text-center md:text-left">
            <div data-aos="fade-up">
                <div class="flex items-center justify-center md:justify-start gap-3 text-sky-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500 shadow-[0_0_8px_rgba(59,130,246,0.8)]"></span>
                    <p class="text-[11px] font-bold uppercase tracking-[0.2em]">{{ __('Profil Perusahaan') }}</p>
                </div>
                <h1 class="text-4xl md:text-7xl uppercase text-white leading-tight font-black">
                    {{ __('TENTANG') }} <span class="text-sky-500">{{ __('KAMI') }}</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-base max-w-2xl mt-4">
                    {{ __('Mengenal lebih dekat PT Teknokrat Zamrud Integrasi sebagai mitra terpercaya solusi teknologi dan integrasi sistem.') }}
                </p>
            </div>
        </div>

        <!-- Bottom Curve Shape -->
        <div class="custom-shape-divider-bottom-1715243168">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- ── PROFIL PERUSAHAAN ── -->
    <section class="py-24 bg-white overflow-hidden">
        <div>
            <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center mb-24">
                <div data-aos="fade-right">
                    <div
                        class="inline-flex items-center gap-2 text-[10px] font-bold uppercase tracking-[0.2em] text-sky-600 mb-4 bg-sky-50 px-3 py-1 rounded-full">
                        <iconify-icon icon="solar:calendar-bold-duotone"></iconify-icon>
                        {{ __('Sejak Maret 2023') }}
                    </div>
                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-5">
                        <img class="w-20 md:w-28" src="{{ asset('assets/img/logo-dark.png') }}" alt="TZI Logo">
                        <h2
                            class="text-3xl md:text-4xl font-black uppercase text-slate-900 mb-6 leading-tight text-center sm:text-left">
                            {{ __('PROFIL') }} <br>
                            <span class="text-sky-600">{{ __('PT. TEKNOKRAT ZAMRUD INTEGRASI') }}</span>
                        </h2>
                    </div>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        {{ __('PT Teknokrat Zamrud Integrasi adalah penyedia solusi terintegrasi yang mengkhususkan diri dalam sistem HVAC, teknologi informasi dan elektronik, serta solusi furniture untuk sektor komersial, institusional, dan pemerintahan.') }}
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        {{ __('Dengan komitmen terhadap kualitas, inovasi, dan layanan yang andal, kami memberikan solusi menyeluruh mulai dari pengadaan produk and instalasi sistem hingga pemeliharaan dan dukungan teknis.') }}
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        {{ __('Melayani lembaga pendidikan, instansi pemerintah, fasilitas kesehatan, perhotelan, dan perusahaan swasta, kami berkomitmen untuk menciptakan lingkungan yang efisien, modern, dan siap menghadapi masa depan.') }}
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 py-6 border-t border-slate-100">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-lg bg-[#0a1628]/95 flex items-center justify-center text-sky-600 shrink-0">
                                <iconify-icon icon="solar:cpu-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wide">TECHNOLOGY</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-lg bg-[#0a1628]/95 flex items-center justify-center text-sky-600 shrink-0">
                                <iconify-icon icon="solar:layers-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wide">INTEGRATION</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-lg bg-[#0a1628]/95 flex items-center justify-center text-sky-600 shrink-0">
                                <iconify-icon icon="solar:verified-check-bold-duotone" class="text-xl"></iconify-icon>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wide">SOLUTION</span>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <!-- Decorative blobs -->
                    <div class="absolute -top-8 -right-8 w-64 h-64 bg-sky-600/10 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute -bottom-8 -left-8 w-48 h-48 bg-slate-900/10 rounded-full blur-3xl -z-10"></div>

                    <!-- Main Image Frame -->
                    <div
                        class="relative rounded-[2rem] overflow-hidden shadow-2xl shadow-slate-900/20 border border-white/50 bg-slate-100">
                        <!-- Gradient overlay at bottom -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900/70 via-transparent to-transparent z-10">
                        </div>
                        <!-- Gradient overlay on left edge -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-slate-900/20 via-transparent to-transparent z-10">
                        </div>

                        <img src="{{ asset('assets/img/kantor-teknokrat-zamrud.png') }}" alt="Kantor PT Teknokrat Zamrud Integrasi"
                            class="w-full h-full object-cover aspect-[4/3] group-hover:scale-105 transition-transform duration-700">

                        <!-- Bottom overlay content -->
                        <div class="absolute bottom-0 left-0 right-0 z-20 p-6">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-8 h-8 rounded-lg bg-sky-600 flex items-center justify-center flex-shrink-0 shadow-lg">
                                    <iconify-icon icon="solar:buildings-bold-duotone"
                                        class="text-white text-sm"></iconify-icon>
                                </div>
                                <div>
                                    <p class="text-white font-black text-sm uppercase tracking-wide leading-none">PT.
                                        Teknokrat Zamrud Integrasi</p>
                                    <p class="text-sky-300 text-[10px] font-medium mt-0.5">Pekanbaru, Riau — Est. 2023
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating stat cards -->
                    <div
                        class="absolute -top-4 -left-4 md:-top-6 md:-left-6 bg-white rounded-2xl shadow-xl p-3 md:p-4 border border-slate-100 z-20">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-9 h-9 md:w-10 md:h-10 rounded-xl bg-sky-600 flex items-center justify-center text-white shadow-lg shadow-sky-900/30 flex-shrink-0">
                                <iconify-icon icon="solar:verified-check-bold-duotone"
                                    class="text-base md:text-lg"></iconify-icon>
                            </div>
                            <div>
                                <p class="text-[9px] text-slate-400 uppercase font-bold tracking-widest leading-none">
                                    {{ __('Legalitas') }}</p>
                                <p class="text-sm font-black text-slate-900 mt-0.5">{{ __('Terdaftar Resmi') }}</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="absolute -bottom-4 -right-4 md:-bottom-6 md:-right-6 bg-slate-900 text-white rounded-2xl shadow-xl p-3 md:p-4 border border-slate-800 z-20">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-9 h-9 md:w-10 md:h-10 rounded-xl bg-sky-500/20 border border-sky-500/30 flex items-center justify-center flex-shrink-0">
                                <iconify-icon icon="solar:stars-bold-duotone"
                                    class="text-sky-400 text-base md:text-lg"></iconify-icon>
                            </div>
                            <div>
                                <p class="text-[9px] text-slate-400 uppercase font-bold tracking-widest leading-none">
                                    {{ __('Pengalaman') }}</p>
                                <p class="text-sm font-black text-white mt-0.5">{{ __('Multi-Sektor') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── FILOSOFI NAMA ── -->
            <div class="mb-24 max-w-6xl mx-auto px-6">
                <div class="text-center mb-16" data-aos="fade-up">
                    <div
                        class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-3">
                        <span class="w-8 h-px bg-sky-600"></span>
                        Our Identity
                        <span class="w-8 h-px bg-sky-600"></span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black uppercase text-slate-900 mb-4">{{ __('FILOSOFI') }} <span
                            class="text-sky-600">{{ __('NAMA') }}</span></h2>
                    <p class="text-slate-500 text-sm max-w-xl mx-auto leading-relaxed">{{ __('Setiap kata dalam identitas kami merepresentasikan nilai, semangat, dan komitmen yang kami bawa dalam setiap solusi.') }}</p>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Teknokrat -->
                    <div class="relative rounded-[2rem] overflow-hidden group cursor-default h-[420px] shadow-xl"
                        data-aos="fade-up" data-aos-delay="0">
                        <!-- Background image -->
                        <img src="{{ asset('assets/img/pasang_ac.png') }}" alt="Teknokrat"
                            class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110">
                        <!-- Gradient overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-slate-900/20 transition-all duration-500 group-hover:from-sky-900 group-hover:via-slate-900/70 group-hover:to-slate-900/30">
                        </div>

                        <!-- Number -->
                        <div
                            class="absolute top-6 right-6 text-7xl font-black text-white/10 leading-none select-none transition-all duration-500 group-hover:text-white/20">
                            01</div>

                        <!-- Content - always visible at bottom -->
                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 transition-all duration-500 group-hover:-translate-y-2">
                            <div
                                class="w-10 h-1 bg-sky-500 rounded-full mb-4 group-hover:w-16 transition-all duration-500">
                            </div>
                            <h3 class="text-3xl font-black uppercase text-white tracking-tight mb-3">{{ __('Teknokrat') }}</h3>
                            <p
                                class="text-slate-300 text-sm leading-relaxed max-h-0 overflow-hidden opacity-0 group-hover:max-h-24 group-hover:opacity-100 transition-all duration-500">
                                {{ __('Cendekiawan yang menguasai teknik, teknologi, dan teknometrik. Merefleksikan keahlian mendalam tim kami dalam menghadirkan solusi teknis yang presisi.') }}
                            </p>
                        </div>

                        <!-- Sky tag -->
                        <div
                            class="absolute top-6 left-6 bg-sky-600/90 backdrop-blur-sm text-white text-[10px] font-black uppercase tracking-widest px-3 py-1.5 rounded-full">
                            Filosofi · 01
                        </div>
                    </div>

                    <!-- Zamrud -->
                    <div class="relative rounded-[2rem] overflow-hidden group cursor-default h-[420px] shadow-xl"
                        data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/cctv.png') }}" alt="Zamrud"
                            class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-slate-900/20 transition-all duration-500 group-hover:from-sky-950 group-hover:via-slate-900/70 group-hover:to-slate-900/30">
                        </div>

                        <div
                            class="absolute top-6 right-6 text-7xl font-black text-white/10 leading-none select-none transition-all duration-500 group-hover:text-white/20">
                            02</div>

                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 transition-all duration-500 group-hover:-translate-y-2">
                            <div
                                class="w-10 h-1 bg-sky-400 rounded-full mb-4 group-hover:w-16 transition-all duration-500">
                            </div>
                            <h3 class="text-3xl font-black uppercase text-white tracking-tight mb-3">{{ __('Zamrud') }}</h3>
                            <p
                                class="text-slate-300 text-sm leading-relaxed max-h-0 overflow-hidden opacity-0 group-hover:max-h-24 group-hover:opacity-100 transition-all duration-500">
                                {{ __('Merujuk kepada wilayah nusantara sebagai zamrud khatulistiwa. Simbol kebanggaan kami untuk berkontribusi bagi kemajuan Indonesia.') }}
                            </p>
                        </div>

                        <div
                            class="absolute top-6 left-6 bg-sky-600/90 backdrop-blur-sm text-white text-[10px] font-black uppercase tracking-widest px-3 py-1.5 rounded-full">
                            Filosofi · 02
                        </div>
                    </div>

                    <!-- Integrasi -->
                    <div class="relative rounded-[2rem] overflow-hidden group cursor-default h-[420px] shadow-xl"
                        data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('assets/img/listrik.png') }}" alt="Integrasi"
                            class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-slate-900/20 transition-all duration-500 group-hover:from-sky-900 group-hover:via-slate-900/70 group-hover:to-slate-900/30">
                        </div>

                        <div
                            class="absolute top-6 right-6 text-7xl font-black text-white/10 leading-none select-none transition-all duration-500 group-hover:text-white/20">
                            03</div>

                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 transition-all duration-500 group-hover:-translate-y-2">
                            <div
                                class="w-10 h-1 bg-sky-400 rounded-full mb-4 group-hover:w-16 transition-all duration-500">
                            </div>
                            <h3 class="text-3xl font-black uppercase text-white tracking-tight mb-3">{{ __('Integrasi') }}</h3>
                            <p
                                class="text-slate-300 text-sm leading-relaxed max-h-0 overflow-hidden opacity-0 group-hover:max-h-24 group-hover:opacity-100 transition-all duration-500">
                                {{ __('Kebulatan tekad untuk bersama-sama menjalankan satu visi dan misi. Menyatukan berbagai potensi menjadi satu solusi yang komprehensif.') }}
                            </p>
                        </div>

                        <div
                            class="absolute top-6 left-6 bg-sky-600/90 backdrop-blur-sm text-white text-[10px] font-black uppercase tracking-widest px-3 py-1.5 rounded-full">
                            Filosofi · 03
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── VISION, MISSION & CORE VALUES ── -->
            <div class="mb-24 max-w-6xl mx-auto px-6">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-6xl font-black uppercase text-slate-900 leading-tight mb-4">
                        VISION, <span class="text-sky-600">MISSION</span> & <br class="hidden md:block">
                        <span class="text-sky-600">CORE VALUES</span>
                    </h2>
                    <div class="w-16 h-1 bg-sky-600 mx-auto rounded-full"></div>
                </div>

                <!-- Vision Section -->
                <div class="relative rounded-[2.5rem] overflow-hidden mb-12 shadow-2xl min-h-[360px] md:min-h-[420px] group"
                    data-aos="fade-up">
                    <!-- Full bleed background image -->
                    <img src="{{ asset('assets/img/vision.png') }}" alt="Visi PT Teknokrat Zamrud Integrasi"
                        class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">

                    <!-- Gradient overlay: dark from left, fading right -->
                    <div class="absolute inset-0 bg-gradient-to-r from-[#0a1628]/95 via-[#0a1628]/70 to-[#0a1628]/30">
                    </div>
                    <!-- Bottom fade for extra depth -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0a1628]/60 via-transparent to-transparent">
                    </div>

                    <!-- Decorative large quote mark -->
                    <div
                        class="absolute top-6 right-8 text-[12rem] font-black text-white/5 leading-none select-none hidden md:block">
                        "</div>

                    <!-- Content -->
                    <div class="relative z-10 p-10 md:p-16 max-w-2xl flex flex-col justify-center h-full">
                        <!-- Badge -->
                        <div
                            class="inline-flex items-center gap-2 bg-sky-600/30 backdrop-blur-sm border border-sky-500/30 text-sky-300 text-[10px] font-black uppercase tracking-[0.2em] px-4 py-2 rounded-full mb-8 w-fit">
                            <iconify-icon icon="solar:telescope-bold-duotone" class="text-sm"></iconify-icon>
                            {{ __('Visi Perusahaan') }}
                        </div>

                        <!-- Title -->
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-14 h-14 rounded-2xl bg-sky-600 flex items-center justify-center text-white shadow-xl shadow-sky-900/40 flex-shrink-0">
                                <iconify-icon icon="solar:telescope-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <div>
                                <p class="text-sky-400 text-[10px] font-black uppercase tracking-widest mb-1">{{ __('Our Direction') }}</p>
                                <h3 class="text-3xl md:text-4xl font-black uppercase text-white leading-none">Vision
                                </h3>
                            </div>
                        </div>

                        <!-- Vision text -->
                        <p
                            class="text-white/85 text-base md:text-xl leading-relaxed font-medium border-l-4 border-sky-500 pl-6">
                            {{ __('Menjadi mitra solusi terintegrasi yang terpercaya dalam bidang HVAC, teknologi, elektronik, dan solusi workspace untuk mendukung lingkungan kerja modern yang efisien dan berkelanjutan.') }}
                        </p>
                    </div>

                    <!-- Bottom strip -->
                    <div
                        class="absolute bottom-0 left-0 right-0 z-10 border-t border-white/10 px-10 md:px-16 py-4 bg-white/5 backdrop-blur-sm flex items-center gap-6">
                        <div
                            class="flex items-center gap-2 text-white/60 text-[10px] font-bold uppercase tracking-wider">
                            <iconify-icon icon="solar:verified-check-bold-duotone"
                                class="text-sky-400 text-sm"></iconify-icon>
                            Terpercaya
                        </div>
                        <div class="w-px h-4 bg-white/20"></div>
                        <div
                            class="flex items-center gap-2 text-white/60 text-[10px] font-bold uppercase tracking-wider">
                            <iconify-icon icon="solar:leaf-bold-duotone" class="text-sky-400 text-sm"></iconify-icon>
                            {{ __('Berkelanjutan') }}
                        </div>
                        <div class="w-px h-4 bg-white/20"></div>
                        <div
                            class="flex items-center gap-2 text-white/60 text-[10px] font-bold uppercase tracking-wider">
                            <iconify-icon icon="solar:cpu-bold-duotone" class="text-sky-400 text-sm"></iconify-icon>
                            {{ __('Inovatif') }}
                        </div>
                    </div>
                </div>

                <!-- Mission Section -->
                <div class="mb-16">
                    <h3 class="text-2xl font-black uppercase text-slate-900 mb-8 flex items-center gap-3"
                        data-aos="fade-right">
                        <span class="w-8 h-0.5 bg-sky-600"></span> Mission
                    </h3>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Mission 1 -->
                        <div class="bg-gradient-to-br from-[#0a1628] to-[#0c1f3f] p-8 rounded-3xl border border-white/10 shadow-xl hover:shadow-sky-900/30 transition-all duration-300 relative group overflow-hidden"
                            data-aos="fade-up">
                            <div
                                class="absolute -top-8 -right-8 w-28 h-28 bg-sky-600/10 rounded-full blur-2xl group-hover:bg-sky-600/20 transition-all duration-500">
                            </div>
                            <div
                                class="w-14 h-14 rounded-2xl bg-sky-500/10 flex items-center justify-center text-sky-400 mb-6 group-hover:bg-sky-500 group-hover:text-white transition-all relative z-10">
                                <iconify-icon icon="solar:box-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <p class="text-white/80 text-sm font-medium leading-relaxed relative z-10">{{ __('Menyediakan produk dan solusi berkualitas dari brand terpercaya.') }}</p>
                        </div>
                        <!-- Mission 2 -->
                        <div class="bg-gradient-to-br from-[#0a1628] to-[#0c1f3f] p-8 rounded-3xl border border-white/10 shadow-xl hover:shadow-sky-900/30 transition-all duration-300 relative group overflow-hidden"
                            data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="absolute -top-8 -right-8 w-28 h-28 bg-sky-600/10 rounded-full blur-2xl group-hover:bg-sky-600/20 transition-all duration-500">
                            </div>
                            <div
                                class="w-14 h-14 rounded-2xl bg-sky-500/10 flex items-center justify-center text-sky-400 mb-6 group-hover:bg-sky-500 group-hover:text-white transition-all relative z-10">
                                <iconify-icon icon="solar:settings-minimalistic-bold-duotone"
                                    class="text-2xl"></iconify-icon>
                            </div>
                            <p class="text-white/80 text-sm font-medium leading-relaxed relative z-10">{{ __('Memberikan layanan profesional mulai dari konsultasi, pengadaan, instalasi, hingga dukungan teknis.') }}</p>
                        </div>
                        <!-- Mission 3 -->
                        <div class="bg-gradient-to-br from-[#0a1628] to-[#0c1f3f] p-8 rounded-3xl border border-white/10 shadow-xl hover:shadow-sky-900/30 transition-all duration-300 relative group overflow-hidden"
                            data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="absolute -top-8 -right-8 w-28 h-28 bg-sky-600/10 rounded-full blur-2xl group-hover:bg-sky-600/20 transition-all duration-500">
                            </div>
                            <div
                                class="w-14 h-14 rounded-2xl bg-sky-500/10 flex items-center justify-center text-sky-400 mb-6 group-hover:bg-sky-500 group-hover:text-white transition-all relative z-10">
                                <iconify-icon icon="solar:hand-heart-bold" class="text-2xl"></iconify-icon>
                            </div>
                            <p class="text-white/80 text-sm font-medium leading-relaxed relative z-10">{{ __('Membangun hubungan kerja sama jangka panjang melalui pelayanan yang responsif dan terpercaya.') }}</p>
                        </div>
                        <!-- Mission 4 -->
                        <div class="bg-gradient-to-br from-[#0a1628] to-[#0c1f3f] p-8 rounded-3xl border border-white/10 shadow-xl hover:shadow-sky-900/30 transition-all duration-300 relative group overflow-hidden"
                            data-aos="fade-up" data-aos-delay="300">
                            <div
                                class="absolute -top-8 -right-8 w-28 h-28 bg-sky-600/10 rounded-full blur-2xl group-hover:bg-sky-600/20 transition-all duration-500">
                            </div>
                            <div
                                class="w-14 h-14 rounded-2xl bg-sky-500/10 flex items-center justify-center text-sky-400 mb-6 group-hover:bg-sky-500 group-hover:text-white transition-all relative z-10">
                                <iconify-icon icon="solar:lightbulb-bold-duotone" class="text-2xl"></iconify-icon>
                            </div>
                            <p class="text-white/80 text-sm font-medium leading-relaxed relative z-10">{{ __('Menghadirkan solusi inovatif yang sesuai dengan kebutuhan sektor komersial, institusi, dan pemerintahan.') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Core Values Section -->
                <div class="mb-16">
                    <h3 class="text-2xl font-black uppercase text-slate-900 mb-8 flex items-center gap-3"
                        data-aos="fade-right">
                        <span class="w-8 h-0.5 bg-sky-600"></span> Core Values
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                        <!-- Value 1 -->
                        <div class="text-center group" data-aos="zoom-in" data-aos-delay="0">
                            <div
                                class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-sky-50 flex items-center justify-center text-sky-600 mx-auto mb-4 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-all shadow-sm">
                                <iconify-icon icon="solar:shield-check-bold-duotone"
                                    class="text-2xl md:text-3xl"></iconify-icon>
                            </div>
                            <h4 class="text-[12px] md:text-sm font-black uppercase text-slate-900 mb-2">Integrity</h4>
                            <p class="text-[10px] md:text-[11px] text-slate-500 leading-tight">{{ __('Menjaga kepercayaan melalui kejujuran dan profesionalisme.') }}</p>
                        </div>
                        <!-- Value 2 -->
                        <div class="text-center group" data-aos="zoom-in" data-aos-delay="100">
                            <div
                                class="w-20 h-20 rounded-full bg-sky-50 flex items-center justify-center text-sky-600 mx-auto mb-4 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-all shadow-sm">
                                <iconify-icon icon="solar:medal-star-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Quality</h4>
                            <p class="text-[11px] text-slate-500 leading-tight">{{ __('Mengutamakan kualitas produk, layanan, dan hasil kerja.') }}</p>
                        </div>
                        <!-- Value 3 -->
                        <div class="text-center group" data-aos="zoom-in" data-aos-delay="200">
                            <div
                                class="w-20 h-20 rounded-full bg-sky-50 flex items-center justify-center text-sky-600 mx-auto mb-4 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-all shadow-sm">
                                <iconify-icon icon="solar:lightbulb-minimalistic-bold-duotone"
                                    class="text-3xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Innovation</h4>
                            <p class="text-[11px] text-slate-500 leading-tight">{{ __('Terus menghadirkan solusi yang relevan dan modern.') }}</p>
                        </div>
                        <!-- Value 4 -->
                        <div class="text-center group" data-aos="zoom-in" data-aos-delay="300">
                            <div
                                class="w-20 h-20 rounded-full bg-sky-50 flex items-center justify-center text-sky-600 mx-auto mb-4 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-all shadow-sm">
                                <iconify-icon icon="solar:verified-check-bold-duotone" class="text-3xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Reliability</h4>
                            <p class="text-[11px] text-slate-500 leading-tight">{{ __('Menjadi partner yang dapat diandalkan dalam setiap project.') }}</p>
                        </div>
                        <!-- Value 5 -->
                        <div class="text-center group col-span-2 md:col-span-1" data-aos="zoom-in" data-aos-delay="400">
                            <div
                                class="w-20 h-20 rounded-full bg-sky-50 flex items-center justify-center text-sky-600 mx-auto mb-4 border border-sky-100 group-hover:bg-sky-600 group-hover:text-white transition-all shadow-sm">
                                <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"
                                    class="text-3xl"></iconify-icon>
                            </div>
                            <h4 class="text-sm font-black uppercase text-slate-900 mb-2">Collaboration</h4>
                            <p class="text-[11px] text-slate-500 leading-tight">{{ __('Membangun kerja sama yang kuat dengan klien dan partner.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── TARGET MARKET ── -->
    <section class="bg-tzi py-24">
        <div class="max-w-6xl mx-auto px-6" data-aos="fade-up">

            <div class="text-center mb-16">
                <div class="text-[10px] font-bold uppercase tracking-[0.25em] text-sky-400 mb-4">
                    {{ __('Target Market') }}
                </div>

                <h2 class="text-3xl md:text-5xl font-black uppercase text-white leading-tight">
                    {{ __('SEKTOR LAYANAN & KLIEN') }}
                </h2>

                <p class="max-w-3xl mx-auto mt-5 text-sm md:text-base text-slate-300 leading-relaxed">
                    {{ __('Solusi layanan untuk berbagai sektor seperti pendidikan, pemerintahan, kesehatan, hospitality, corporate, dan residential.') }}
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3">

                <div class="text-center px-8 py-10 border-b border-r border-blue-400/30">
                    <iconify-icon icon="solar:square-academic-cap-bold-duotone"
                        class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('Education') }}</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        {{ __('Solusi untuk universitas, sekolah, kampus, dan institusi pendidikan modern.') }}
                    </p>
                </div>

                <div class="text-center px-8 py-10 border-b lg:border-r border-blue-400/30">
                    <iconify-icon icon="solar:shield-user-bold-duotone"
                        class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('Government') }}</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        {{ __('Dukungan solusi untuk instansi pemerintah, lembaga publik, dan proyek institusional.') }}
                    </p>
                </div>

                <div class="text-center px-8 py-10 border-b sm:border-r lg:border-r-0 border-blue-400/30">
                    <iconify-icon icon="solar:hospital-bold-duotone" class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('Healthcare') }}</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        {{ __('Sistem dan infrastruktur pendukung untuk rumah sakit dan fasilitas kesehatan.') }}
                    </p>
                </div>

                <div class="text-center px-8 py-10 lg:border-r border-blue-400/30">
                    <iconify-icon icon="solar:buildings-2-bold-duotone"
                        class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('Hospitality') }}</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        {{ __('Solusi kenyamanan dan operasional untuk hotel dan hospitality.') }}
                    </p>
                </div>

                <div class="text-center px-8 py-10 border-t sm:border-t-0 sm:border-r border-blue-400/30">
                    <iconify-icon icon="solar:city-bold-duotone" class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('Corporate') }}</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        {{ __('Infrastruktur modern untuk kantor, commercial workspace, dan enterprise environment.') }}
                    </p>
                </div>

                <div class="text-center px-8 py-10 border-t lg:border-t-0 border-blue-400/30">
                    <iconify-icon icon="solar:home-2-bold-duotone" class="text-5xl text-blue-400 mb-5"></iconify-icon>
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('Residential') }}</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        {{ __('Solusi untuk kebutuhan residential premium dan private property.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white overflow-hidden">
        <!-- ── LEGAL & CORPORATE IDENTITY ── -->
        <div class="max-w-7xl mx-auto px-6 mt-24 mb-24">
            <div class="relative rounded-2xl overflow-hidden bg-white border border-slate-200 shadow-2xl">
                <!-- Section Header -->
                <div class="relative bg-slate-900 py-16 px-10 overflow-hidden">
                    <div class="absolute inset-0 opacity-20">
                        <img src="{{ asset('assets/img/bg-logo.png') }}" alt="Law Theme" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent">
                    </div>

                    <div class="relative z-10">
                        <h2 class="text-3xl md:text-6xl font-black text-white uppercase tracking-tight mb-2">
                            {{ __('LEGAL & CORPORATE IDENTITY') }}
                        </h2>
                        <div class="w-32 h-1.5 bg-sky-600 rounded-full mb-8"></div>

                        <div class="max-w-2xl">
                            <h3 class="text-sky-500 font-black uppercase tracking-widest text-sm mb-4">Legal
                                Establishment of the Company</h3>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                {{ __('PT Teknokrat Zamrud Integrasi merupakan badan usaha resmi berbentuk Perseroan Terbatas yang didirikan secara sah berdasarkan akta notaris dan telah memperoleh pengesahan dari Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia.') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-8 md:p-12">
                    <div class="grid lg:grid-cols-3 gap-10">
                        <!-- Column 1: Akta -->
                        <div class="flex flex-col h-full space-y-6" data-aos="fade-up">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[95px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-[inset_0_2px_4px_rgba(0,0,0,0.3)]">
                                    01
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">{{ __('Akta Pendirian') }} <br>
                                    <span class="text-sky-400 text-[10px] font-bold">{{ __('Perseroan Terbatas') }}</span>
                                </h4>
                            </div>

                            <div class="flex-grow flex flex-col space-y-6">
                                <div onclick="openModal('{{ asset('assets/img/surat/akta.jpg') }}')"
                                    class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-2xl hover:shadow-sky-900/10 hover:border-sky-300 transition-all duration-500 p-2">
                                    <div
                                        class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center z-10 rounded-xl m-2">
                                        <div
                                            class="bg-white/20 backdrop-blur-md text-white px-5 py-2.5 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 shadow-xl">
                                            <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                                class="text-lg"></iconify-icon>
                                            PREVIEW FULL
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/img/surat/akta.jpg') }}" alt="Akta PT TZI"
                                        class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.03] transition-transform duration-700">
                                </div>

                                <div class="grid grid-cols-1 gap-3 mt-auto">
                                    <div
                                        class="flex items-center gap-4 bg-white p-4 rounded-xl border border-slate-100 hover:border-sky-200 hover:bg-sky-50/30 transition-all duration-300">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-sky-50 flex items-center justify-center text-sky-600 flex-shrink-0">
                                            <iconify-icon icon="solar:document-bold-duotone"
                                                class="text-xl"></iconify-icon>
                                        </div>
                                        <div>
                                            <p class="text-[9px] text-slate-400 uppercase font-bold tracking-wider">
                                                {{ __('Nomor Akta') }}</p>
                                            <p class="text-sm font-black text-slate-900">41</p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center gap-4 bg-white p-4 rounded-xl border border-slate-100 hover:border-sky-200 hover:bg-sky-50/30 transition-all duration-300">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-sky-50 flex items-center justify-center text-sky-600 flex-shrink-0">
                                            <iconify-icon icon="solar:calendar-bold-duotone"
                                                class="text-xl"></iconify-icon>
                                        </div>
                                        <div>
                                            <p class="text-[9px] text-slate-400 uppercase font-bold tracking-wider">
                                                {{ __('Tanggal Pendirian') }}</p>
                                            <p class="text-sm font-black text-slate-900">{{ __('29 Maret 2023') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column 2: SK Pengesahan -->
                        <div class="flex flex-col h-full space-y-6" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[95px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-[inset_0_2px_4px_rgba(0,0,0,0.3)]">
                                    02
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">{{ __('SK Pengesahan') }} <br>
                                    <span class="text-sky-400 text-[10px] font-bold">{{ __('Kemenkumham RI') }}</span>
                                </h4>
                            </div>

                            <div class="flex-grow flex flex-col space-y-6">
                                <div onclick="openModal('{{ asset('assets/img/surat/sk-pengesahan.jpg') }}')"
                                    class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-2xl hover:shadow-sky-900/10 hover:border-sky-300 transition-all duration-500 p-2">
                                    <div
                                        class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center z-10 rounded-xl m-2">
                                        <div
                                            class="bg-white/20 backdrop-blur-md text-white px-5 py-2.5 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 shadow-xl">
                                            <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                                class="text-lg"></iconify-icon>
                                            PREVIEW FULL
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/img/surat/sk-pengesahan.jpg') }}" alt="SK Kemenkumham"
                                        class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.03] transition-transform duration-700">
                                </div>

                                <div
                                    class="flex items-center gap-4 bg-sky-50/50 p-5 rounded-2xl border border-sky-100 hover:border-sky-300 transition-all duration-300 mt-auto">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-sky-600 flex items-center justify-center text-white flex-shrink-0 shadow-lg shadow-sky-900/20">
                                        <iconify-icon icon="solar:verified-check-bold-duotone"
                                            class="text-2xl"></iconify-icon>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="text-[9px] text-sky-600 uppercase font-black tracking-widest mb-1">
                                            {{ __('Nomor SK Pengesahan') }}</p>
                                        <p class="text-[11px] font-black text-slate-900 break-all leading-tight">
                                            AHU-0025685.AH.01.01.TAHUN 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column 3: Lampiran & Summary -->
                        <div class="flex flex-col h-full space-y-6" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[95px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-[inset_0_2px_4px_rgba(0,0,0,0.3)]">
                                    03
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">{{ __('Lampiran SK') }} <br>
                                    <span class="text-sky-400 text-[10px] font-bold">{{ __('Detail Perseroan') }}</span>
                                </h4>
                            </div>

                            <div class="flex-grow flex flex-col space-y-6">
                                <div onclick="openModal('{{ asset('assets/img/surat/lampiran-sk.jpg') }}')"
                                    class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-2xl hover:shadow-sky-900/10 hover:border-sky-300 transition-all duration-500 p-2">
                                    <div
                                        class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center z-10 rounded-xl m-2">
                                        <div
                                            class="bg-white/20 backdrop-blur-md text-white px-5 py-2.5 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 shadow-xl">
                                            <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                                class="text-lg"></iconify-icon>
                                            PREVIEW FULL
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/img/surat/lampiran-sk.jpg') }}" alt="Lampiran SK"
                                        class="w-full h-full object-contain bg-white rounded-xl shadow-sm group-hover:scale-[1.03] transition-transform duration-700">
                                </div>

                                <div
                                    class="bg-slate-900 rounded-2xl p-6 text-white shadow-xl relative overflow-hidden group mt-auto">
                                    <div
                                        class="absolute top-0 right-0 w-24 h-24 bg-sky-600/10 rounded-full blur-2xl -mr-12 -mt-12 transition-all group-hover:bg-sky-600/20">
                                    </div>
                                    <h5
                                        class="text-[10px] font-black uppercase tracking-[0.2em] text-sky-400 mb-5 flex items-center gap-2">
                                        <iconify-icon icon="solar:shield-check-bold-duotone"
                                            class="text-base"></iconify-icon>
                                        {{ __('Status Legalitas') }}
                                    </h5>
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between border-b border-white/10 pb-2">
                                            <span
                                                class="text-[10px] font-bold uppercase text-slate-400">{{ __('Verifikasi') }}</span>
                                            <span
                                                class="text-[10px] font-black bg-sky-500/20 text-sky-400 px-2 py-0.5 rounded-full border border-sky-500/30">VALID
                                                & AKTIF</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-[10px] font-bold uppercase text-slate-400">{{ __('Terdaftar Sejak') }}</span>
                                            <span class="text-xs font-black">{{ __('Maret 2023') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── PUBLIC REGISTRATION & BUSINESS LICENSE ── -->
            <div class="relative rounded-[2.5rem] overflow-hidden bg-white border border-slate-200 shadow-2xl mt-16">
                <!-- Section Header -->
                <div class="relative bg-slate-900 py-16 px-10 overflow-hidden">
                    <div class="absolute inset-0 opacity-20">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=2070&auto=format&fit=crop"
                            alt="Business License Theme" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent">
                    </div>

                    <div class="relative z-10">
                        <h2 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tight mb-2">
                            {{ __('PUBLIC REGISTRATION & BUSINESS LICENSE') }}
                        </h2>
                        <div class="w-32 h-1.5 bg-sky-600 rounded-full mb-8"></div>

                        <div class="max-w-2xl">
                            <h3 class="text-sky-500 font-black uppercase tracking-widest text-sm mb-4">Business
                                Registration & Licensing</h3>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                {{ __('Legalitas operasional perusahaan telah terdaftar secara resmi melalui sistem OSS, dengan ruang lingkup usaha yang relevan untuk pengadaan, instalasi, perdagangan, dan solusi teknis multi-industri.') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-8 md:p-12">
                    <!-- Top Row: BNRI & NIB (Grid 1 and 2) -->
                    <div class="grid lg:grid-cols-2 gap-10 mb-12">
                        <!-- Column 1: BNRI -->
                        <div class="space-y-6" data-aos="fade-up">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                    01</div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">{{ __('Berita Negara') }} <br>
                                    <span class="text-sky-400 text-[10px]">{{ __('Republik Indonesia') }}</span>
                                </h4>
                            </div>
                            <div onclick="openModal('{{ asset('assets/img/surat/berita-acara.jpg') }}')"
                                class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-xl hover:border-sky-300 transition-all duration-300 p-2">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 rounded-xl m-2">
                                    <div
                                        class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                            class="text-lg"></iconify-icon> Preview Full
                                    </div>
                                </div>
                                <img src="{{ asset('assets/img/surat/berita-acara.jpg') }}" alt="Berita Negara RI"
                                    onerror="this.src='{{ asset('assets/img/surat/akta.jpg') }}'"
                                    class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>

                        <!-- Column 2: NIB -->
                        <div class="space-y-6" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                    02</div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">{{ __('Nomor Induk Berusaha') }} <br> <span class="text-sky-400 text-[10px]">({{ __('NIB') }})</span></h4>
                            </div>
                            <div onclick="openModal('{{ asset('assets/img/surat/nib.jpg') }}')"
                                class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-xl hover:border-sky-300 transition-all duration-300 p-2">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 rounded-xl m-2">
                                    <div
                                        class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                            class="text-lg"></iconify-icon> Preview Full
                                    </div>
                                </div>
                                <img src="{{ asset('assets/img/surat/nib.jpg') }}" alt="NIB"
                                    class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Row: Lampiran NIB (Landscape style with 3 grids) -->
                    <div class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                            <div
                                class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                03</div>
                            <h4 class="font-black text-sm uppercase tracking-wider leading-snug">{{ __('Lampiran NIB / KBLI') }}
                                <br> <span class="text-sky-400 text-[10px]">{{ __('Daftar Klasifikasi Baku Lapangan Usaha') }}</span>
                            </h4>
                        </div>

                        <!-- Landscape Container -->
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-2 sm:p-6 shadow-sm">
                            <div class="rounded-xl border border-slate-200 shadow-sm bg-white overflow-hidden w-full">
                                <table
                                    class="w-full table-fixed break-words text-left border-collapse text-[7px] sm:text-[9px] md:text-[11px] lg:text-xs">
                                    <thead>
                                        <tr class="bg-slate-900 text-white">
                                            <th
                                                class="p-1 sm:p-2 text-center align-middle border-r border-slate-800 w-[4%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:list-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">No.</span>
                                                </div>
                                            </th>
                                            <th
                                                class="p-1 sm:p-2 text-center align-middle border-r border-slate-800 w-[6%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:code-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">{{ __('Kode') }}<br>{{ __('KBLI') }}</span>
                                                </div>
                                            </th>
                                            <th class="p-1 sm:p-2 align-middle border-r border-slate-800 w-[17%]">
                                                <div
                                                    class="flex flex-col items-center sm:items-start text-center sm:text-left gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:tag-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">{{ __('Judul KBLI') }}</span>
                                                </div>
                                            </th>
                                            <th class="p-1 sm:p-2 align-middle border-r border-slate-800 w-[21%]">
                                                <div
                                                    class="flex flex-col items-center sm:items-start text-center sm:text-left gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:map-point-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">{{ __('Lokasi Usaha') }}</span>
                                                </div>
                                            </th>
                                            <th
                                                class="p-1 sm:p-2 text-center align-middle border-r border-slate-800 w-[9%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:danger-triangle-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">{{ __('Risiko') }}</span>
                                                </div>
                                            </th>
                                            <th
                                                class="p-1 sm:p-2 align-middle border-r border-slate-800 text-center w-[12%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:document-text-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">{{ __('Perizinan') }}</span>
                                                </div>
                                            </th>
                                            <th
                                                class="p-1 sm:p-2 text-center align-middle border-r border-slate-800 w-[6%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:ticket-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">{{ __('Jenis') }}</span>
                                                </div>
                                            </th>
                                            <th
                                                class="p-1 sm:p-2 text-center align-middle border-r border-slate-800 w-[9%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:check-circle-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">{{ __('Status') }}</span>
                                                </div>
                                            </th>
                                            <th class="p-1 sm:p-2 align-middle text-center w-[16%]">
                                                <div class="flex flex-col items-center gap-0.5 sm:gap-1">
                                                    <iconify-icon icon="solar:info-circle-bold-duotone"
                                                        class="text-sky-400 text-xs sm:text-sm"></iconify-icon>
                                                    <span class="font-bold uppercase tracking-wider">{{ __('Keterangan') }}</span>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-slate-600 divide-y divide-slate-100">
                                        @php
                                            $kbliData = [
                                                ['no' => 1, 'kode' => '47411', 'icon' => 'solar:laptop-minimalistic-bold-duotone', 'judul' => 'Perdagangan Eceran Komputer dan Perlengkapannya', 'lokasi' => 'JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim, Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285', 'risiko' => 'Rendah', 'perizinan' => 'NIB', 'jenis' => 'Terbit', 'status' => '-', 'keterangan' => '-'],
                                                ['no' => 2, 'kode' => '47420', 'icon' => 'solar:videocamera-record-bold-duotone', 'judul' => 'Perdagangan Eceran Khusus Peralatan Audio dan Video di Toko', 'lokasi' => 'JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim, Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285', 'risiko' => 'Rendah', 'perizinan' => 'NIB', 'jenis' => 'Terbit', 'status' => '-', 'keterangan' => '-'],
                                                ['no' => 3, 'kode' => '47591', 'icon' => 'solar:armchair-bold-duotone', 'judul' => 'Perdagangan Eceran Furnitur', 'lokasi' => 'JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim, Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285', 'risiko' => 'Rendah', 'perizinan' => 'NIB', 'jenis' => 'Terbit', 'status' => '-', 'keterangan' => '-'],
                                                ['no' => 4, 'kode' => '47611', 'icon' => 'solar:pen-bold-duotone', 'judul' => 'Perdagangan Eceran Alat Tulis Menulis dan Gambar', 'lokasi' => 'JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim, Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285', 'risiko' => 'Rendah', 'perizinan' => 'NIB', 'jenis' => 'Terbit', 'status' => '-', 'keterangan' => '-'],
                                                ['no' => 5, 'kode' => '47920', 'icon' => 'solar:wallet-money-bold-duotone', 'judul' => 'Perdagangan Eceran Atas Dasar Balas Jasa (Fee) atau Kontrak', 'lokasi' => 'JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim, Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285', 'risiko' => 'Rendah', 'perizinan' => 'NIB', 'jenis' => 'Terbit', 'status' => '-', 'keterangan' => '-'],
                                                ['no' => 6, 'kode' => '43213', 'icon' => 'solar:cpu-bold-duotone', 'judul' => 'Instalasi Elektronika', 'lokasi' => 'JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim, Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285', 'risiko' => 'Menengah Tinggi', 'perizinan' => 'NIB dan Sertifikat Standar', 'jenis' => 'Terbit', 'status' => 'Belum Terverifikasi', 'keterangan' => '-'],
                                                ['no' => 7, 'kode' => '43224', 'icon' => 'solar:snowflake-bold-duotone', 'judul' => 'Instalasi Pendingin dan Ventilasi Udara', 'lokasi' => 'JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim, Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285', 'risiko' => 'Menengah Tinggi', 'perizinan' => 'NIB dan Sertifikat Standar', 'jenis' => 'Terbit', 'status' => 'Belum Terverifikasi', 'keterangan' => '-'],
                                                ['no' => 8, 'kode' => '43304', 'icon' => 'solar:palette-bold-duotone', 'judul' => 'Dekorasi Interior', 'lokasi' => 'JL. Gunung Bendahara No.16 A, Desa/Kelurahan Pematangkapau, Kec. Kulim, Kota Pekanbaru, Provinsi Riau, Kode Pos: 28285', 'risiko' => 'Menengah Tinggi', 'perizinan' => 'NIB dan Sertifikat Standar', 'jenis' => 'Terbit', 'status' => 'Belum Terverifikasi', 'keterangan' => '-'],
                                            ];
                                        @endphp
                                        @foreach ($kbliData as $row)
                                            <tr class="hover:bg-sky-50 transition-colors">
                                                <td class="p-1 sm:p-2 text-center font-bold text-slate-900 border-r border-slate-100 align-top">{{ $row['no'] }}</td>
                                                <td class="p-1 sm:p-2 font-bold text-sky-600 border-r border-slate-100 align-top text-center">{{ $row['kode'] }}</td>
                                                <td class="p-1 sm:p-2 font-medium text-slate-800 border-r border-slate-100 align-top">
                                                    <div class="flex flex-col sm:flex-row sm:items-start gap-1 sm:gap-1.5">
                                                        <iconify-icon icon="{{ $row['icon'] }}" class="text-sky-500 text-sm flex-shrink-0 mt-0.5"></iconify-icon>
                                                        <span>{{ $row['judul'] }}</span>
                                                    </div>
                                                </td>
                                                <td class="p-1 sm:p-2 leading-tight border-r border-slate-100 align-top text-[6px] sm:text-[9px] md:text-[11px]">{{ $row['lokasi'] }}</td>
                                                <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                    <span class="inline-block {{ $row['risiko'] == 'Rendah' ? 'bg-green-100 text-green-700' : 'bg-orange-100 text-orange-700' }} px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">{{ $row['risiko'] }}</span>
                                                </td>
                                                <td class="p-1 sm:p-2 font-medium border-r border-slate-100 align-top text-center">{{ $row['perizinan'] }}</td>
                                                <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                    <span class="inline-block bg-blue-100 text-blue-700 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">{{ $row['jenis'] }}</span>
                                                </td>
                                                <td class="p-1 sm:p-2 text-center border-r border-slate-100 align-top">
                                                    @if ($row['status'] != '-')
                                                        <span class="inline-block bg-yellow-100 text-yellow-800 px-1 py-0.5 rounded text-[6px] sm:text-[9px] md:text-[11px] font-bold">{{ $row['status'] }}</span>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="p-1 sm:p-2 text-center text-slate-400 align-top">{{ $row['keterangan'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-6 p-5 bg-sky-50 rounded-xl border border-sky-100">
                                <h5 class="text-sm font-black uppercase text-sky-900 mb-2 flex items-center gap-2">
                                    <iconify-icon icon="solar:info-square-bold-duotone"
                                        class="text-sky-600 text-lg"></iconify-icon>
                                    {{ __('KBLI Relevan dengan Layanan Perusahaan') }}
                                </h5>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    <span class="font-bold">{{ __('Catatan:') }}</span> {{ __('Untuk kode KBLI dengan tingkat risiko Menengah Tinggi, wajib memenuhi persyaratan standar melalui sistem OSS sesuai ketentuan yang berlaku.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── TAX & FINANCIAL COMPLIANCE ── -->
            <div class="relative rounded-[2.5rem] overflow-hidden bg-white border border-slate-200 shadow-2xl mt-16">
                <!-- Section Header -->
                <div class="relative bg-slate-900 py-16 px-10 overflow-hidden">
                    <div class="absolute inset-0 opacity-20">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop"
                            alt="Finance and Tax Theme" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent">
                    </div>

                    <div class="relative z-10">
                        <h2 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tight mb-2">
                            {{ __('TAX & FINANCIAL COMPLIANCE') }}
                        </h2>
                        <div class="w-32 h-1.5 bg-sky-600 rounded-full mb-8"></div>

                        <div class="max-w-2xl">
                            <h3 class="text-sky-500 font-black uppercase tracking-widest text-sm mb-4">Tax & Banking
                                Compliance</h3>
                            <p class="text-slate-300 text-sm leading-relaxed">
                                {{ __('PT Teknokrat Zamrud Integrasi memenuhi kewajiban perpajakan dan didukung referensi perbankan resmi sebagai bentuk kesiapan dalam menjalankan transaksi bisnis profesional.') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-8 md:p-12">
                    <!-- Top Row: NPWP -->
                    <div class="mb-12" data-aos="fade-up">
                        <div class="max-w-md mx-auto space-y-6">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                    01
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">{{ __('NPWP') }} <br>
                                    <span class="text-sky-400 text-[10px]">{{ __('Perusahaan') }}</span>
                                </h4>
                            </div>

                            <div onclick="openModal('{{ asset('assets/img/surat/npwp.jpg') }}')"
                                class="relative aspect-[1.58/1] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-xl hover:border-sky-300 transition-all duration-300 p-2">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 rounded-xl m-2">
                                    <div
                                        class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                            class="text-lg"></iconify-icon> Preview Full
                                    </div>
                                </div>
                                <img src="{{ asset('assets/img/surat/npwp.jpg') }}" alt="NPWP Perusahaan"
                                    onerror="this.src='{{ asset('assets/img/surat/akta.jpg') }}'"
                                    class="w-full h-full object-contain bg-white rounded-xl shadow-sm group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Row: PKP & Referensi Bank -->
                    <div class="grid md:grid-cols-2 gap-10 mb-12 max-w-4xl mx-auto">
                        <!-- Column 1: PKP -->
                        <div class="space-y-6" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                    02
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">{{ __('Surat Pengukuhan') }}
                                    <br>
                                    <span class="text-sky-400 text-[10px]">{{ __('Pengusaha Kena Pajak (PKP)') }}</span>
                                </h4>
                            </div>

                            <div onclick="openModal('{{ asset('assets/img/surat/pkp.jpg') }}')"
                                class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-xl hover:border-sky-300 transition-all duration-300 p-2">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 rounded-xl m-2">
                                    <div
                                        class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                            class="text-lg"></iconify-icon> Preview Full
                                    </div>
                                </div>
                                <img src="{{ asset('assets/img/surat/pkp.jpg') }}" alt="Surat Pengukuhan PKP"
                                    onerror="this.src='{{ asset('assets/img/surat/akta.jpg') }}'"
                                    class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>

                        <!-- Column 2: Referensi Bank -->
                        <div class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="flex items-center gap-4 bg-slate-900 text-white p-5 rounded-2xl shadow-lg min-h-[90px]">
                                <div
                                    class="w-12 h-12 rounded-xl bg-sky-500 flex items-center justify-center text-white font-black text-xl flex-shrink-0 shadow-inner">
                                    03
                                </div>
                                <h4 class="font-black text-sm uppercase tracking-wider leading-snug">{{ __('Referensi Bank') }} <br>
                                    <span class="text-sky-400 text-[10px]">{{ __('Dukungan Finansial Resmi') }}</span>
                                </h4>
                            </div>

                            <div onclick="openModal('{{ asset('assets/img/surat/referensi-bank.jpg') }}')"
                                class="relative aspect-[3/4.2] rounded-2xl border border-slate-200 overflow-hidden shadow-sm bg-slate-50 group cursor-pointer hover:shadow-xl hover:border-sky-300 transition-all duration-300 p-2">
                                <div
                                    class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10 rounded-xl m-2">
                                    <div
                                        class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-full font-bold text-xs flex items-center gap-2 border border-white/30 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <iconify-icon icon="solar:maximize-square-minimalistic-bold-duotone"
                                            class="text-lg"></iconify-icon> Preview Full
                                    </div>
                                </div>
                                <img src="{{ asset('assets/img/surat/referensi-bank.jpg') }}" alt="Referensi Bank"
                                    onerror="this.src='{{ asset('assets/img/surat/akta.jpg') }}'"
                                    class="w-full h-full object-cover object-top bg-white rounded-xl shadow-sm group-hover:scale-[1.02] transition-transform duration-500">
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Feature Grid: Kepatuhan & Kredibilitas -->
                    <div class="pt-10 border-t border-slate-100" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-center mb-10">
                            <h3 class="text-2xl font-black uppercase text-slate-900 mb-2">{{ __('Kepatuhan &') }} <span
                                    class="text-sky-600">{{ __('Kredibilitas Keuangan') }}</span></h3>
                            <div class="w-16 h-1 bg-sky-600 mx-auto rounded-full"></div>
                        </div>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div
                                class="bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:border-sky-200 hover:shadow-md transition-all text-center group">
                                <div
                                    class="w-14 h-14 rounded-xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-sky-600 mx-auto mb-4 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                    <iconify-icon icon="solar:document-text-bold-duotone"
                                        class="text-2xl"></iconify-icon>
                                </div>
                                <h4 class="text-sm font-black uppercase text-slate-900 mb-2">{{ __('Patuh Pajak') }}</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">{{ __('Terdaftar NPWP dan dikukuhkan sebagai PKP resmi.') }}</p>
                            </div>
                            <div
                                class="bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:border-sky-200 hover:shadow-md transition-all text-center group">
                                <div
                                    class="w-14 h-14 rounded-xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-sky-600 mx-auto mb-4 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                    <iconify-icon icon="solar:shield-check-bold-duotone"
                                        class="text-2xl"></iconify-icon>
                                </div>
                                <h4 class="text-sm font-black uppercase text-slate-900 mb-2">{{ __('Legal & Resmi') }}</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">{{ __('Memenuhi seluruh ketentuan perpajakan yang berlaku.') }}</p>
                            </div>
                            <div
                                class="bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:border-sky-200 hover:shadow-md transition-all text-center group">
                                <div
                                    class="w-14 h-14 rounded-xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-sky-600 mx-auto mb-4 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                    <iconify-icon icon="solar:card-2-bold-duotone" class="text-2xl"></iconify-icon>
                                </div>
                                <h4 class="text-sm font-black uppercase text-slate-900 mb-2">{{ __('Dukungan Bank') }}</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">{{ __('Didukung referensi resmi dari bank terpercaya.') }}</p>
                            </div>
                            <div
                                class="bg-slate-50 p-6 rounded-2xl border border-slate-100 hover:border-sky-200 hover:shadow-md transition-all text-center group">
                                <div
                                    class="w-14 h-14 rounded-xl bg-white border border-slate-200 shadow-sm flex items-center justify-center text-sky-600 mx-auto mb-4 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                                    <iconify-icon icon="solar:wallet-money-bold-duotone"
                                        class="text-2xl"></iconify-icon>
                                </div>
                                <h4 class="text-sm font-black uppercase text-slate-900 mb-2">{{ __('Siap Bertransaksi') }}</h4>
                                <p class="text-xs text-slate-500 leading-relaxed">{{ __('Kesiapan dalam menjalankan transaksi bisnis profesional.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Banking & Address Highlight -->
            <div class="mt-12 grid lg:grid-cols-2 gap-8">
                <div class="bg-sky-600 p-8 rounded-[2rem] text-white shadow-xl shadow-sky-900/20" data-aos="fade-right">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                            class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20">
                            <iconify-icon icon="solar:wallet-money-bold-duotone" class="text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-black uppercase text-sm tracking-widest">{{ __('Rekening Perusahaan') }}</h4>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <p class="text-sky-200 text-[10px] uppercase font-bold tracking-widest mb-1">{{ __('Nama Bank') }}
                            </p>
                            <p class="text-lg font-bold">{{ __('Bank BRI Cabang Pekanbaru Lancang Kuning') }}</p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-6 sm:gap-12">
                            <div>
                                <p class="text-sky-200 text-[10px] uppercase font-bold tracking-widest mb-1">
                                    {{ __('Nomor Rekening') }}</p>
                                <p class="text-2xl font-black tracking-widest">1079-01-002545-56-9</p>
                            </div>
                            <div>
                                <p class="text-sky-200 text-[10px] uppercase font-bold tracking-widest mb-1">
                                    {{ __('Atas Nama') }}</p>
                                <p class="text-lg font-bold">PT. Teknokrat Zamrud Integrasi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-[2rem] border border-slate-200" data-aos="fade-left">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                            class="w-12 h-12 rounded-xl bg-sky-50 flex items-center justify-center text-sky-600 border border-sky-100">
                            <iconify-icon icon="solar:map-point-bold-duotone" class="text-2xl"></iconify-icon>
                        </div>
                        <h4 class="font-black uppercase text-sm tracking-widest text-slate-900">{{ __('Alamat Kantor') }}
                        </h4>
                    </div>
                    <p class="text-slate-500 text-lg leading-relaxed">
                        Jl. Todak No.99C Ruko Bening, Tangkerang Barat, Kec. Marpoyan Damai, Kota Pekanbaru Riau
                    </p>
                    <div class="mt-6 pt-6 border-t border-slate-100 flex gap-4">
                        <div class="flex items-center gap-2 text-sky-600 font-bold text-xs uppercase tracking-widest">
                            <iconify-icon icon="solar:mailbox-bold-duotone"></iconify-icon>
                            {{ __('Pekanbaru') }}
                        </div>
                        <div class="flex items-center gap-2 text-sky-600 font-bold text-xs uppercase tracking-widest">
                            <iconify-icon icon="solar:global-bold-duotone"></iconify-icon>
                            {{ __('Riau, Indonesia') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── MAP SECTION ── -->
    <section class="py-16 md:py-24 bg-slate-50 overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 md:px-6">
            <!-- Section Label -->
            <div class="text-center mb-12" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-3">
                    <span class="w-8 h-px bg-sky-600"></span>
                    {{ __('Temukan Kami') }}
                    <span class="w-8 h-px bg-sky-600"></span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black uppercase text-slate-900">{{ __('LOKASI') }} <span
                        class="text-sky-600">{{ __('KAMI') }}</span></h2>
            </div>

            <!-- Main Card -->
            <div class="relative rounded-[2rem] overflow-hidden bg-slate-900 shadow-2xl shadow-slate-900/20 border border-slate-800"
                data-aos="fade-up" data-aos-delay="100">
                <!-- Decorative blobs -->
                <div
                    class="absolute top-0 left-0 w-72 h-72 bg-sky-600/10 rounded-full blur-3xl -ml-32 -mt-32 pointer-events-none">
                </div>
                <div
                    class="absolute bottom-0 right-0 w-72 h-72 bg-sky-600/5 rounded-full blur-3xl -mr-32 -mb-32 pointer-events-none">
                </div>

                <div class="flex flex-col lg:flex-row relative z-10">
                    <!-- Left: Info Panel -->
                    <div class="w-full lg:w-80 xl:w-96 p-8 md:p-10 flex-shrink-0 flex flex-col justify-between">
                        <!-- Header -->
                        <div class="mb-8">
                            <div class="flex items-center gap-3 mb-6">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-sky-600 flex items-center justify-center text-white shadow-lg shadow-sky-900/30 flex-shrink-0">
                                    <iconify-icon icon="solar:map-point-bold-duotone" class="text-2xl"></iconify-icon>
                                </div>
                                <div>
                                    <p class="text-sky-400 text-[10px] font-black uppercase tracking-widest">{{ __('Kantor Pusat') }}</p>
                                    <h3 class="text-white font-black text-base uppercase leading-tight">PT. TZI</h3>
                                </div>
                            </div>
                            <div class="w-full h-px bg-white/10 mb-6"></div>

                            <!-- Address -->
                            <div class="space-y-5">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-sky-400 flex-shrink-0 mt-0.5">
                                        <iconify-icon icon="solar:home-bold-duotone" class="text-sm"></iconify-icon>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-slate-500 uppercase font-bold tracking-widest mb-1">
                                            {{ __('Alamat') }}</p>
                                        <p class="text-white/80 text-sm leading-relaxed">Jl. Todak No.99C Ruko Bening,
                                            Tangkerang Barat, Kec. Marpoyan Damai</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-sky-400 flex-shrink-0 mt-0.5">
                                        <iconify-icon icon="solar:city-bold-duotone" class="text-sm"></iconify-icon>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-slate-500 uppercase font-bold tracking-widest mb-1">
                                            {{ __('Kota') }}</p>
                                        <p class="text-white/80 text-sm">Pekanbaru, Riau</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-sky-400 flex-shrink-0 mt-0.5">
                                        <iconify-icon icon="solar:global-bold-duotone" class="text-sm"></iconify-icon>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-slate-500 uppercase font-bold tracking-widest mb-1">
                                            {{ __('Negara') }}</p>
                                        <p class="text-white/80 text-sm">Indonesia</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="space-y-3 mt-auto">
                            <a href="https://www.google.com/maps/dir/?api=1&destination=PT+Teknokrat+Zamrud+Integrasi"
                                target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-sky-600 hover:bg-sky-500 text-white font-bold text-xs uppercase tracking-widest px-5 py-3 rounded-xl transition-all duration-300 shadow-lg shadow-sky-900/30">
                                <iconify-icon icon="solar:routing-bold-duotone" class="text-base"></iconify-icon>
                                {{ __('Petunjuk Arah') }}
                            </a>
                            <a href="https://maps.google.com/?q=PT+Teknokrat+Zamrud+Integrasi" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 hover:bg-white/10 border border-white/10 hover:border-white/20 text-white/80 hover:text-white font-bold text-xs uppercase tracking-widest px-5 py-3 rounded-xl transition-all duration-300">
                                <iconify-icon icon="solar:map-bold-duotone"
                                    class="text-base text-sky-400"></iconify-icon>
                                {{ __('Buka di Google Maps') }}
                            </a>
                        </div>
                    </div>

                    <!-- Right: Map -->
                    <div class="flex-1 relative min-h-[300px] md:min-h-[480px] lg:min-h-0">
                        <!-- Map Frame Badge -->
                        <div
                            class="absolute top-4 left-4 z-20 bg-slate-900/90 backdrop-blur-sm border border-white/10 px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-lg">
                            <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                            <span class="text-white text-[10px] font-bold uppercase tracking-widest">Live Map</span>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6656877650003!2d101.42478707424073!3d0.5011711637173792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5af3a3a06227f%3A0xeb4b783da26fe737!2sPT%20Teknokrat%20Zamrud%20Integrasi!5e0!3m2!1sen!2sid!4v1778666586210!5m2!1sen!2sid"
                            width="100%" height="100%" style="border:0; min-height: 350px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full block">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── IMAGE PREVIEW MODAL ── -->
    <div id="image-modal"
        class="fixed inset-0 z-[100] bg-slate-900/95 hidden items-center justify-center opacity-0 transition-opacity duration-300 backdrop-blur-md">
        <button id="close-modal"
            class="absolute top-6 right-6 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors border border-white/20 z-50">
            <iconify-icon icon="solar:close-circle-bold" class="text-3xl"></iconify-icon>
        </button>
        <div class="max-w-4xl max-h-[90vh] w-full p-6 transform scale-95 transition-transform duration-300 flex items-center justify-center"
            id="modal-content">
            <img id="modal-image" src="" alt="Full Preview"
                class="max-w-full max-h-[85vh] object-contain rounded-xl shadow-2xl">
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Image Modal Logic
        const modal = document.getElementById('image-modal');
        const modalImg = document.getElementById('modal-image');
        const modalContent = document.getElementById('modal-content');
        const closeModal = document.getElementById('close-modal');

        function openModal(imgSrc) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalContent.classList.remove('scale-95');
                modalImg.src = imgSrc;
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            modal.classList.add('opacity-0');
            modalContent.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                modalImg.src = '';
            }, 300);
            document.body.style.overflow = '';
        }

        if (closeModal) closeModal.addEventListener('click', closeImageModal);
        if (modal) modal.addEventListener('click', (e) => {
            if (e.target === modal || e.target === modalContent) closeImageModal();
        });
    </script>
@endpush
