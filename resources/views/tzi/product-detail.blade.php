@extends('layouts.tzi')

@php
    $products = [
        'pc-desktop' => [
            'title' => __('PC Desktop & Laptop'),
            'kbli' => 'KBLI 47411',
            'description' => __('Kami menyediakan berbagai unit komputer desktop (PC) dan laptop untuk kebutuhan bisnis, desain profesional, hingga kebutuhan server. Produk kami didukung oleh brand-brand terpercaya untuk menjamin performa dan durabilitas tinggi.'),
            'image' => 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=800&auto=format&fit=crop&q=80',
            'brands' => [
                ['name' => 'HP', 'img' => 'hp.png'],
                ['name' => 'Dell', 'img' => 'dell.png'],
                ['name' => 'Asus', 'img' => 'asus.png'],
                ['name' => 'Lenovo', 'img' => 'lenovo.png'],
                ['name' => 'Acer', 'img' => 'acer.png'],
                ['name' => 'Apple', 'img' => 'apple.png'],
                ['name' => 'MSI', 'img' => 'msi.png'],
                ['name' => 'Axioo', 'img' => 'axioo.png'],
                ['name' => 'Advan', 'img' => 'advan.png']
            ]
        ],
        'audio-system' => [
            'title' => __('Sistem Audio & Video'),
            'kbli' => 'KBLI 47420',
            'description' => __('Solusi perangkat audio visual profesional untuk ruang rapat, auditorium, studio, dan tempat ibadah. Meliputi speaker system, amplifier, mixer, hingga display multimedia berkualitas tinggi.'),
            'image' => 'https://images.unsplash.com/photo-1545454675-3531b543be5d?w=800&auto=format&fit=crop&q=80',
            'brands' => [
                ['name' => 'TOA', 'img' => 'toa.png'],
                ['name' => 'Bosch', 'img' => 'bosch.png'],
                ['name' => 'Sennheiser', 'img' => 'sennheiser.png'],
                ['name' => 'Philips', 'img' => 'philips.png'],
                ['name' => 'LG', 'img' => 'LG.svg'],
                ['name' => 'Samsung', 'img' => 'samsung.png']
            ]
        ],
        'office-furniture' => [
            'title' => __('Furnitur Kantor'),
            'kbli' => 'KBLI 47591',
            'description' => __('Layanan penyediaan mebel dan furnitur kantor yang ergonomis dan estetis. Fokus pada kenyamanan kerja dengan produk-produk dari prinsipal furnitur terbaik di Indonesia.'),
            'image' => 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=800&auto=format&fit=crop&q=80',
            'brands' => [
                ['name' => 'Futura', 'img' => 'futura.jpg'],
                ['name' => 'Chitose', 'img' => 'chitose.webp'],
                ['name' => 'Lion', 'img' => 'lion.png'],
                ['name' => 'Indachi', 'img' => 'indachi.png'],
                ['name' => 'Donati', 'img' => 'donati.webp'],
                ['name' => 'Chairman', 'img' => 'chairman.webp'],
                ['name' => 'Savello', 'img' => 'savello.avif'],
                ['name' => 'Importa', 'img' => 'importa.png'],
                ['name' => 'Expo', 'img' => 'expo.png'],
                ['name' => 'Orbitrend', 'img' => 'orbitrend.webp'],
                ['name' => 'VIP', 'img' => 'vip.svg'],
                ['name' => 'Gresco', 'img' => 'gresco.webp'],
                ['name' => 'Valmont', 'img' => 'valmont.png'],
                ['name' => 'Novin', 'img' => 'novin.png']
            ]
        ],
        'stationary' => [
            'title' => __('Stationary'),
            'kbli' => 'KBLI 47611',
            'description' => __('Penyediaan Alat Tulis Kantor (ATK) secara lengkap dan grosir untuk instansi pemerintah maupun swasta. Kami menjamin ketersediaan stok dan kualitas produk stationary yang unggul.'),
            'image' => 'https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?w=800&auto=format&fit=crop&q=80',
            'brands' => [
                ['name' => 'Epson', 'img' => 'epson.png'],
                ['name' => 'Brother', 'img' => 'brother.png'],
                ['name' => 'HP', 'img' => 'hp.png']
            ]
        ],
        'cctv' => [
            'title' => __('CCTV & Keamanan'),
            'kbli' => 'KBLI 43213',
            'description' => __('Sistem pengawasan keamanan (CCTV) modern dengan integrasi jaringan. Kami menyediakan kamera IP, DVR/NVR, hingga sistem monitoring terpadu untuk keamanan aset Anda selama 24/7.'),
            'image' => 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?w=800&auto=format&fit=crop&q=80',
            'brands' => [
                ['name' => 'Hikvision', 'img' => 'hikvision.png'],
                ['name' => 'Ezviz', 'img' => 'ezviz.png'],
                ['name' => 'Bosch', 'img' => 'bosch.png'],
                ['name' => 'Cisco', 'img' => 'cisco.png']
            ]
        ],
        'ac' => [
            'title' => __('Air Conditioner (AC)'),
            'kbli' => 'KBLI 43224',
            'description' => __('Unit pendingin udara (AC) untuk berbagai skala ruangan. Mulai dari AC Split untuk hunian, hingga sistem AC Central/VRF untuk gedung perkantoran dan fasilitas industri.'),
            'image' => 'https://plus.unsplash.com/premium_photo-1679943423706-570c6462f9a4?q=80&w=705&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'brands' => [
                ['name' => 'Daikin', 'img' => 'daikin.jpg'],
                ['name' => 'Mitsubishi', 'img' => 'mitsubishi.svg'],
                ['name' => 'Panasonic', 'img' => 'panasonic.png'],
                ['name' => 'Samsung', 'img' => 'samsung.png'],
                ['name' => 'LG', 'img' => 'LG.svg'],
                ['name' => 'Carrier', 'img' => 'carrier.png'],
                ['name' => 'Midea', 'img' => 'midea.png'],
                ['name' => 'Haier', 'img' => 'haier.png'],
                ['name' => 'Hisense', 'img' => 'hisense.png'],
                ['name' => 'Gree', 'img' => 'gree.png'],
                ['name' => 'York', 'img' => 'york.png'],
                ['name' => 'Trane', 'img' => 'trane.png'],
                ['name' => 'Aqua', 'img' => 'aqua.png'],
                ['name' => 'Polytron', 'img' => 'polytron.png']
            ]
        ]
    ];

    $slug = request()->segment(count(request()->segments()));
    $product = $products[$slug] ?? $products['pc-desktop'];
@endphp

@section('title', $product['title'] . ' - PT Teknokrat Zamrud Integrasi')
@section('meta_description', $product['description'])
@section('meta_keywords', strtolower($product['title']) . ', pengadaan barang pekanbaru, pt teknokrat zamrud integrasi, katalog produk')
@section('og_image', $product['image'])

@section('content')
    <!-- ── PAGE HERO ── -->
    <section class="hero-bg min-h-[30vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-16 relative z-10">
            <div data-aos="fade-up">
                <div class="flex items-center gap-2 text-sky-400 mb-4">
                    <a href="{{ route('tzi.product') }}" class="hover:underline">{{ __('Produk') }}</a>
                    <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xs"></iconify-icon>
                    <span class="text-white/60">{{ $product['title'] }}</span>
                </div>
                <h1 class="text-4xl md:text-6xl uppercase text-white leading-tight font-black">
                    {{ __('DETAIL') }} <span class="text-sky-500">{{ __('PRODUK') }}</span>
                </h1>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1715243168">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- ── CONTENT ── -->
    <main class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <!-- Left: Image Gallery -->
                <div data-aos="fade-right">
                    <div
                        class="rounded-[2.5rem] overflow-hidden shadow-2xl border border-slate-200 aspect-[4/3] bg-white">
                        <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right: Details -->
                <div class="space-y-10" data-aos="fade-left">
                    <div>
                        <span
                            class="text-[10px] font-black uppercase tracking-widest text-sky-600 bg-sky-50 px-3 py-1 rounded-full mb-4 inline-block">{{ $product['kbli'] }}</span>
                        <h2 class="text-4xl md:text-5xl font-black text-slate-900 uppercase leading-none mb-6">{{ $product['title'] }}</h2>
                        <p class="text-slate-600 leading-relaxed text-lg">
                            {{ $product['description'] }}
                        </p>
                    </div>

                    <!-- Brands Involved -->
                    <div class="pt-8 border-t border-slate-100">
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-400 mb-6">{{ __('Brands & Partners') }}</p>
                        <div class="flex flex-wrap gap-6 items-center">
                            @foreach ($product['brands'] as $brand)
                                <div class="w-24 h-12 md:w-28 md:h-14 bg-white border border-slate-200 rounded-lg flex items-center justify-center p-2 shadow-sm hover:border-sky-300 transition-colors">
                                    <img src="{{ asset('assets/img/brands/' . $brand['img']) }}" alt="{{ $brand['name'] }}" title="{{ $brand['name'] }}" class="max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        @php
                            $waMsg = urlencode("Halo, saya tertarik dengan produk {$product['title']}. Bisa minta informasi lebih lanjut?");
                        @endphp
                        <a href="https://wa.me/6281371273367?text={{ $waMsg }}" target="_blank"
                            class="btn-transition flex-1 flex items-center justify-center gap-3 bg-[#25D366] hover:bg-[#128C7E] text-white font-bold uppercase tracking-widest py-5 rounded-2xl shadow-xl shadow-green-500/20">
                            <iconify-icon icon="logos:whatsapp-icon" class="text-2xl"></iconify-icon>
                            {{ __('Tanya via WhatsApp') }}
                        </a>
                        <a href="mailto:admin@teknokratzamrud.com"
                            class="btn-transition flex-1 flex items-center justify-center gap-3 bg-slate-900 hover:bg-slate-800 text-white font-bold uppercase tracking-widest py-5 rounded-2xl shadow-xl shadow-slate-900/20">
                            <iconify-icon icon="solar:letter-bold" class="text-2xl text-sky-400"></iconify-icon>
                            {{ __('Kirim Email') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        .hero-bg {
            background: linear-gradient(rgba(10, 22, 40, 0.8), rgba(10, 22, 40, 0.8)),
                url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1600&auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
@endsection
