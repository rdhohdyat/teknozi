@extends('layouts.tzi')

@section('title', 'Layanan - PT Teknokrat Zamrud Integrasi')

@section('content')
    <!-- ── PAGE HERO ── -->
    <section class="service-bg min-h-[45vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-20 relative z-10 text-center md:text-left">
            <div data-aos="fade-up">
                <div class="flex items-center justify-center md:justify-start gap-3 text-sky-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500 shadow-[0_0_8px_rgba(14,165,233,0.8)]"></span>
                    <p class="text-[11px] font-bold uppercase tracking-[0.2em]">Our Services</p>
                </div>
                <h1 class="text-4xl md:text-7xl uppercase text-white leading-tight font-black">
                    {{ __('KUALITAS &') }} <span class="text-sky-500">{{ __('KEANDALAN') }}</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-base max-w-2xl mt-4">
                    {{ __('Layanan Integrasi Berdasarkan KBLI. Spesialis instalasi dan pemeliharaan yang didukung oleh sertifikasi industri dan teknisi berpengalaman.') }}
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

    <!-- ── AC DIVISION ── -->
    <section id="ac-division" class="py-16 bg-white overflow-hidden relative">
        <!-- Decoration -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-sky-50 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 opacity-50">
        </div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 items-center mb-20">
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div class="flex items-center gap-3 text-sky-600 mb-6">
                        <span class="w-12 h-0.5 bg-sky-600"></span>
                        <p class="text-[11px] font-bold uppercase tracking-[0.25em]">Division 01</p>
                    </div>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black uppercase text-slate-900 leading-[1.1] mb-8">
                        {{ __('AIR') }} <br> <span class="text-sky-600">{{ __('CONDITIONING') }}</span> <br> {{ __('DIVISION') }}
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        {{ __('Solusi pendingin udara terintegrasi untuk kebutuhan komersial, institusi, hospitality, healthcare, dan residential.') }}
                    </p>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        {{ __('PT Teknokrat Zamrud Integrasi menyediakan solusi air conditioning yang mencakup pengadaan unit, instalasi profesional, preventive maintenance, hingga dukungan teknis untuk berbagai skala kebutuhan.') }}
                    </p>
                </div>
                <div class="w-full lg:w-1/2 relative" data-aos="fade-left">
                    <div class="rounded-2xl overflow-hidden  relative z-10">
                        <img src="{{ asset('assets/img/layanan/ac/ac_service.webp') }}" alt="AC Division"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-8 -right-8 w-64 h-64 bg-sky-600/10 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Sub Service Cards -->
                @php
                    $acServices = [
                        ['icon' => 'solar:box-bold-duotone', 'title' => __('Supply AC Units'), 'desc' => __('Pengadaan unit AC berkualitas dari berbagai brand terkemuka.')],
                        ['icon' => 'solar:settings-bold-duotone', 'title' => __('Installation & Commissioning'), 'desc' => __('Instalasi profesional sesuai standar untuk performa optimal dan efisien.')],
                        ['icon' => 'solar:calendar-bold-duotone', 'title' => __('Preventive Maintenance'), 'desc' => __('Perawatan berkala untuk menjaga keandalan dan umur peralatan lebih lama.')],
                        ['icon' => 'solar:sledgehammer-bold-duotone', 'title' => __('Repair & Troubleshooting'), 'desc' => __('Perbaikan cepat dan tepat untuk berbagai masalah pada sistem AC.')],
                        ['icon' => 'solar:shield-star-bold-duotone', 'title' => __('HVAC Project Support'), 'desc' => __('Dukungan teknis dan manajemen proyek untuk kebutuhan skala besar.')],
                        ['icon' => 'solar:buildings-bold-duotone', 'title' => __('Commercial Cooling Solutions'), 'desc' => __('Solusi pendinginan terintegrasi untuk berbagai sektor komersial.')],
                    ];
                @endphp
                @foreach ($acServices as $index => $service)
                    <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                        data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div
                            class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                            <iconify-icon icon="{{ $service['icon'] }}" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-lg font-black uppercase text-slate-900 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Brand Partners AC -->
            <div class="pt-12 border-t border-slate-100">
                <p class="text-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 mb-10">{{ __('Brand Partners') }}</p>
                <div
                    class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
                    @php
                        $acBrands = ['daikin.jpg', 'mitsubishi.svg', 'panasonic.png', 'samsung.png', 'LG.svg', 'carrier.png', 'midea.png', 'haier.png', 'hisense.png', 'gree.png', 'york.png', 'trane.png', 'aqua.png', 'polytron.png'];
                    @endphp
                    @foreach ($acBrands as $brand)
                        <img src="{{ asset('assets/img/brands/' . $brand) }}" alt="" class="h-6 md:h-8 w-auto object-contain">
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ── IT & ELECTRONIC DIVISION ── -->
    <section id="it-division" class="py-24 bg-slate-50 overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row-reverse gap-16 items-center mb-20">
                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <div class="flex items-center gap-3 text-sky-600 mb-6">
                        <span class="w-12 h-0.5 bg-sky-600"></span>
                        <p class="text-[11px] font-bold uppercase tracking-[0.25em]">Division 02</p>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black uppercase text-slate-900 leading-tight mb-8">
                        {{ __('IT &') }} <br> <span class="text-sky-600">{{ __('ELECTRONIC') }}</span> <br> {{ __('DIVISION') }}
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        {{ __('Solusi teknologi informasi dan elektronik terintegrasi untuk mendukung produktivitas, keamanan, dan efisiensi operasional Anda.') }}
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 bg-white p-4 rounded-2xl border border-slate-200">
                            <iconify-icon icon="solar:monitor-bold-duotone" class="text-sky-600 text-xl"></iconify-icon>
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-700">{{ __('Produk Berkualitas') }}</span>
                        </div>
                        <div class="flex items-center gap-3 bg-white p-4 rounded-2xl border border-slate-200">
                            <iconify-icon icon="solar:shield-up-bold-duotone"
                                class="text-sky-600 text-xl"></iconify-icon>
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-700">{{ __('Teknologi Terkini') }}</span>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 relative" data-aos="fade-right">
                    <div class="rounded-2xl overflow-hidden  relative z-10">
                        <img src="{{ asset('assets/img/layanan/elektronik/elektronik-service.webp') }}" alt="IT Division"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -top-8 -left-8 w-64 h-64 bg-sky-600/10 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Sub Service Cards -->
                @php
                    $itServices = [
                        ['icon' => 'solar:laptop-bold-duotone', 'title' => __('Computer & Peripheral'), 'desc' => __('Pengadaan perangkat komputer, laptop, printer, dan peripheral berkualitas dari brand ternama.')],
                        ['icon' => 'solar:server-bold-duotone', 'title' => __('Server & Storage'), 'desc' => __('Solusi server, storage, dan sistem jaringan untuk kinerja dan keamanan data yang optimal.')],
                        ['icon' => 'solar:videocamera-record-bold-duotone', 'title' => __('Security & Surveillance'), 'desc' => __('Sistem keamanan CCTV dan akses kontrol untuk perlindungan area dan aset Anda.')],
                        ['icon' => 'solar:globus-bold-duotone', 'title' => __('Network Solution'), 'desc' => __('Infrastruktur jaringan yang stabil, cepat, dan terintegrasi untuk kebutuhan bisnis.')],
                        ['icon' => 'solar:play-bold-duotone', 'title' => __('Audio Visual & Multimedia'), 'desc' => __('Solusi audio visual, display, LED, dan multimedia untuk komunikasi yang lebih efektif.')],
                        ['icon' => 'solar:cpu-bold-duotone', 'title' => __('Electronic Solution'), 'desc' => __('Berbagai perangkat elektronik pendukung untuk kebutuhan institusi, komersial, dan industri.')],
                    ];
                @endphp
                @foreach ($itServices as $index => $service)
                    <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                        data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div
                            class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                            <iconify-icon icon="{{ $service['icon'] }}" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-lg font-black uppercase text-slate-900 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Brand Partners IT -->
            <div class="pt-12 border-t border-slate-200">
                <p class="text-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 mb-10">{{ __('Brand Partners') }}</p>
                <div
                    class="flex flex-wrap justify-center gap-8 md:gap-12 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
                    @php
                        $itBrands = ['asus.png', 'acer.png', 'apple.png', 'dell.png', 'hp.png', 'lenovo.png', 'msi.png', 'cisco.png', 'epson.png', 'bosch.png', 'brother.png', 'benq.png', 'philips.png', 'axioo.png', 'axis.png', 'advan.png', 'ezviz.png', 'hikvision.png', 'LG.svg', 'microvision.png', 'newline.png', 'samsung.png', 'sennheiser.png', 'toa.png', 'viewsonic.png'];
                    @endphp
                    @foreach ($itBrands as $brand)
                        <img src="{{ asset('assets/img/brands/' . $brand) }}" alt="" class="h-5 md:h-6 w-auto object-contain">
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ── FURNITURE DIVISION ── -->
    <section id="furniture-division" class="py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16 items-center mb-20">
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div class="flex items-center gap-3 text-sky-600 mb-6">
                        <span class="w-12 h-0.5 bg-sky-600"></span>
                        <p class="text-[11px] font-bold uppercase tracking-[0.25em]">Division 03</p>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black uppercase text-slate-900 leading-tight mb-8">
                        {{ __('FURNITURE') }} <br> <span class="text-sky-600">{{ __('DIVISION') }}</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        {{ __('Solusi furniture modern untuk kebutuhan kantor, institusi pendidikan, hospitality, fasilitas publik, dan ruang komersial.') }}
                    </p>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        {{ __('PT Teknokrat Zamrud Integrasi menghadirkan solusi furniture berkualitas untuk menciptakan ruang kerja dan lingkungan institusional yang nyaman, fungsional, dan profesional.') }}
                    </p>
                </div>
                <div class="w-full lg:w-1/2 relative" data-aos="fade-left">
                    <div class="rounded-2xl overflow-hidden  relative z-10">
                        <img src="{{ asset('assets/img/layanan/furniture/furniture.webp') }}" alt="Furniture Division"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-8 -right-8 w-64 h-64 bg-sky-600/10 rounded-full blur-3xl -z-10"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Sub Service Cards -->
                @php
                    $furnitureServices = [
                        ['icon' => 'solar:chair-bold-duotone', 'title' => __('Office Furniture Solutions'), 'desc' => __('Penyediaan meja, kursi, dan sistem penyimpanan kantor yang ergonomis.')],
                        ['icon' => 'solar:square-academic-cap-bold-duotone', 'title' => __('Educational Furniture'), 'desc' => __('Furniture khusus untuk ruang kelas, perpustakaan, dan fasilitas pendidikan.')],
                        ['icon' => 'solar:bed-bold-duotone', 'title' => __('Hospitality Furniture'), 'desc' => __('Solusi furniture untuk hotel, lobby, dan area publik yang estetis dan tahan lama.')],
                        ['icon' => 'solar:users-group-two-rounded-bold-duotone', 'title' => __('Public Area Seating'), 'desc' => __('Sistem tempat duduk untuk fasilitas publik, bandara, dan area tunggu.')],
                        ['icon' => 'solar:layers-bold-duotone', 'title' => __('Workspace Setup & Layout'), 'desc' => __('Dukungan teknis untuk pengaturan ruang dan tata letak furniture yang efisien.')],
                        ['icon' => 'solar:home-2-bold-duotone', 'title' => __('Commercial Interior Furnishing'), 'desc' => __('Solusi interior lengkap untuk berbagai kebutuhan ruang komersial modern.')],
                    ];
                @endphp
                @foreach ($furnitureServices as $index => $service)
                    <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:border-sky-400 hover:shadow-xl transition-all group"
                        data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div
                            class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sky-600 shadow-sm mb-6 group-hover:bg-sky-600 group-hover:text-white transition-all">
                            <iconify-icon icon="{{ $service['icon'] }}" class="text-2xl"></iconify-icon>
                        </div>
                        <h3 class="text-lg font-black uppercase text-slate-900 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Brand Partners Furniture -->
            <div class="pt-12 border-t border-slate-100">
                <p class="text-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 mb-10">{{ __('Brand Partners') }}</p>
                <div
                    class="flex flex-wrap justify-center gap-8 md:gap-12 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
                    @php
                        $furnitureBrands = ['futura.jpg', 'chitose.webp', 'lion.png', 'indachi.png', 'donati.webp', 'chairman.webp', 'savello.avif', 'importa.png', 'expo.png', 'orbitrend.webp', 'vip.svg', 'gresco.webp', 'valmont.png', 'novin.png'];
                    @endphp
                    @foreach ($furnitureBrands as $brand)
                        <img src="{{ asset('assets/img/brands/' . $brand) }}" alt="" class="h-5 md:h-6 w-auto object-contain">
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ── STATS SECTION ── -->
    <section class="py-24 bg-white relative">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 bg-[#0a1628] p-12 rounded-[2.5rem] md:rounded-[4rem] text-center shadow-2xl shadow-sky-900/20"
                data-aos="zoom-in">
                <div class="space-y-2 md:border-r border-white/10 last:border-none">
                    <p class="text-4xl md:text-5xl font-black text-sky-400">99.9%</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">{{ __('Uptime Layanan') }}</p>
                </div>
                <div class="space-y-2 md:border-r border-white/10 last:border-none">
                    <p class="text-4xl md:text-5xl font-black text-sky-400">50+</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">{{ __('Teknisi Ahli') }}</p>
                </div>
                <div class="space-y-2 md:border-r border-white/10 last:border-none">
                    <p class="text-4xl md:text-5xl font-black text-sky-400">100%</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">{{ __('KBLI Terdaftar') }}</p>
                </div>
                <div class="space-y-2 last:border-none">
                    <p class="text-4xl md:text-5xl font-black text-sky-400">24/7</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400">{{ __('Dukungan Teknis') }}</p>
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
                    Jejak Rekam
                    <span class="w-8 h-px bg-sky-600"></span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900 leading-tight">
                    {{ __('KLIEN & KOLABORASI') }}
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
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-40.86,82.39-15.3,168.19-14.33,250.45.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="max-w-3xl mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-6xl font-black uppercase text-white leading-none mb-5">
                {{ __('Siap memulai') }} <span class="text-sky-400">{{ __('proyek Anda?') }}</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-xl mx-auto mb-10">
                {{ __('Hubungi para ahli kami untuk konsultasi komprehensif dan solusi yang disesuaikan dengan kebutuhan infrastruktur Anda.') }}
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('tzi.contact') }}"
                    class="btn-transition inline-flex items-center gap-2 bg-sky-600 hover:bg-sky-500 text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg shadow-xl shadow-sky-900/50">
                    <iconify-icon icon="solar:letter-bold"></iconify-icon>
                    {{ __('Hubungi Kami') }}
                </a>
                <a href="{{ route('tzi.product') }}"
                    class="btn-transition inline-flex items-center gap-2 border-2 border-sky-700 hover:border-sky-400 hover:bg-sky-900/30 text-sky-300 hover:text-white text-xs font-bold uppercase tracking-widest px-8 py-4 rounded-lg">
                    <iconify-icon icon="solar:box-bold-duotone"></iconify-icon>
                    {{ __('Lihat Produk') }}
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Client Data Implementation
        const educationClients = [
            "Universitas Riau", "UIN Suska Riau", "Universitas Muhammadiyah Riau",
            "Politeknik Negeri Bengkalis", "STIE Indragiri", "Universitas Pahlawan",
            "Universitas Islam Riau", "Politeknik Caltex Riau"
        ];

        const governmentClients = [
            "Kementerian Agama RI", "Kementerian Keuangan RI", "Pemerintah Provinsi Riau",
            "Dinas Pendidikan Riau", "Dinas Kesehatan Riau", "Sekretariat Daerah",
            "Bappeda Riau", "DPRD Provinsi Riau"
        ];

        const hospitalityClients = [
            "Labersa Grand Hotel", "The Premiere Hotel", "RSUD Arifin Achmad",
            "RS Prima Pekanbaru", "RS Eka Hospital", "Grand Zuri Hotel",
            "Swiss-Belinn Pekanbaru", "Aulia Hospital"
        ];

        function renderGrid(containerId, clients) {
            const container = document.getElementById(containerId);
            if (!container) return;
            clients.forEach(client => {
                const badge = document.createElement('div');
                badge.className = "px-5 py-3 bg-slate-50 border border-slate-100 rounded-xl text-[10px] sm:text-xs font-black uppercase tracking-widest text-slate-700 hover:bg-sky-600 hover:text-white hover:border-sky-600 transition-all cursor-default shadow-sm";
                badge.innerText = client;
                container.appendChild(badge);
            });
        }

        renderGrid('edu-grid', educationClients);
        renderGrid('gov-grid', governmentClients);
        renderGrid('hosp-grid', hospitalityClients);
    </script>
@endpush
