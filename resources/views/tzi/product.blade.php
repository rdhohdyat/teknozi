@extends('layouts.tzi')

@section('title', __('Katalog Produk - PT Teknokrat Zamrud Integrasi'))
@section('meta_description', __('Lihat katalog lengkap produk dan pengadaan barang dari PT Teknokrat Zamrud Integrasi. Kami melayani pengadaan perangkat IT, Elektronika, Furnitur Kantor, hingga Alat Tulis Kantor (ATK) dengan standar tinggi.'))
@section('meta_keywords', __('katalog produk teknokrat zamrud, supplier alat tulis kantor pekanbaru, pengadaan komputer pekanbaru, supplier meja kantor, pengadaan barang dan jasa riau'))

@section('content')
    <!-- ── PAGE HERO ── -->
    <section class="product-bg min-h-[40vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-20 relative z-10 text-center md:text-left">
            <div data-aos="fade-up">
                <div class="flex items-center justify-center md:justify-start gap-3 text-sky-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500 shadow-[0_0_8px_rgba(59,130,246,0.8)]"></span>
                    <p class="text-[11px] font-bold uppercase tracking-[0.2em]">{{ __('Koleksi Produk Terbaik') }}</p>
                </div>
                <h1 class="text-5xl md:text-7xl uppercase text-white leading-tight font-black">
                    {{ __('KATALOG') }} <span class="text-sky-500">{{ __('PRODUK') }}</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-base max-w-2xl mt-4">
                    {{ __('Penyedia produk berkualitas tinggi untuk kebutuhan Elektronika, Kelistrikan, IT, hingga Interior dengan standar industri terbaik.') }}
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

    <!-- ── MAIN CONTENT ── -->
    <main class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6">

            <!-- Header Section -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12"
                data-aos="fade-up">
                <div>
                    <h2 class="text-2xl font-black text-sky-600 mb-2 uppercase">{{ __('Katalog Produk Utama') }}</h2>
                    <div class="w-12 h-1 bg-sky-600 rounded-full"></div>
                </div>
                <div class="w-full md:w-80 relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <iconify-icon icon="solar:magnifer-linear"></iconify-icon>
                    </div>
                    <input type="text" id="product-search" placeholder="{{ __('Cari produk...') }}"
                        class="w-full bg-white border border-slate-200 py-3 pl-10 pr-4 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-sky-100 transition-all">
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-10">
                <!-- Sidebar Categories -->
                <aside class="w-full lg:w-72 shrink-0" data-aos="fade-right">
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-sky-600 mb-6 ml-2">{{ __('Kategori (KBLI)') }}</p>
                    <nav class="space-y-2">
                        @php
                            $categories = [
                                ['id' => 'all', 'icon' => 'solar:widget-bold-duotone', 'label' => __('Semua Produk')],
                                ['id' => 'audio', 'icon' => 'solar:volume-loud-linear', 'label' => __('Peralatan Audio & Video')],
                                ['id' => 'furnitur', 'icon' => 'solar:armchair-linear', 'label' => __('Furnitur')],
                                ['id' => 'cctv', 'icon' => 'solar:videocamera-record-linear', 'label' => __('CCTV & Keamanan')],
                                ['id' => 'ac', 'icon' => 'solar:snowflake-linear', 'label' => __('Air Conditioner (AC)')],
                                ['id' => 'stationary', 'icon' => 'solar:pen-new-square-linear', 'label' => __('Stationary')],
                            ];
                        @endphp
                        @foreach ($categories as $cat)
                            <button
                                class="filter-btn sidebar-item {{ $cat['id'] == 'all' ? 'active' : '' }} w-full flex items-center gap-4 px-5 py-4 rounded-2xl text-sm font-bold transition-all text-left {{ $cat['id'] == 'all' ? 'bg-sky-100 text-sky-700' : 'text-slate-500 hover:bg-slate-100' }}"
                                data-filter="{{ $cat['id'] }}">
                                <iconify-icon icon="{{ $cat['icon'] }}" class="text-xl"></iconify-icon>
                                <span>{{ $cat['label'] }}</span>
                            </button>
                        @endforeach
                    </nav>
                </aside>

                <!-- Product Grid -->
                <div class="grow">
                    <div id="product-grid" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        @php
                            $products = [
                                [
                                    'id' => 'pc-desktop',
                                    'category' => 'all',
                                    'kbli' => 'KBLI 47411',
                                    'title' => __('PC Desktop & Laptop'),
                                    'desc' => __('Perdagangan eceran komputer, peralatan, aksesoris dan perlengkapannya.'),
                                    'img' => 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=800&auto=format&fit=crop&q=80',
                                    'featured' => true
                                ],
                                [
                                    'id' => 'audio-system',
                                    'category' => 'audio',
                                    'kbli' => 'KBLI 47420',
                                    'title' => __('Sistem Audio & Video'),
                                    'desc' => __('Radio, Televisi, Video Player, Audio Amplifier, dan Peralatan Stereo.'),
                                    'img' => 'https://images.unsplash.com/photo-1545454675-3531b543be5d?w=800&auto=format&fit=crop&q=80'
                                ],
                                [
                                    'id' => 'office-furniture',
                                    'category' => 'furnitur',
                                    'kbli' => 'KBLI 47591',
                                    'title' => __('Furnitur Kantor'),
                                    'desc' => __('Meja & Kursi, Lemari, Rak Buku, Bufet untuk kebutuhan kantor dan komersial.'),
                                    'img' => 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=800&auto=format&fit=crop&q=80'
                                ],
                                [
                                    'id' => 'stationary',
                                    'category' => 'stationary',
                                    'kbli' => 'KBLI 47611',
                                    'title' => __('Stationary'),
                                    'desc' => __('Penyediaan ATK lengkap untuk perkantoran dan institusi pendidikan dengan kualitas terbaik.'),
                                    'img' => 'https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?w=800&auto=format&fit=crop&q=80'
                                ],
                                [
                                    'id' => 'cctv',
                                    'category' => 'cctv',
                                    'kbli' => 'KBLI 43213',
                                    'title' => __('CCTV & Keamanan'),
                                    'desc' => __('Solusi pengawasan keamanan terpadu dengan teknologi kamera terbaru dan akses remote.'),
                                    'img' => 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?w=800&auto=format&fit=crop&q=80'
                                ],
                                [
                                    'id' => 'ac',
                                    'category' => 'ac',
                                    'kbli' => 'KBLI 43224',
                                    'title' => __('Air Conditioner (AC)'),
                                    'desc' => __('Sistem pendingin udara berkualitas tinggi untuk kenyamanan ruangan hunian dan kantor.'),
                                    'img' => 'https://plus.unsplash.com/premium_photo-1679943423706-570c6462f9a4?q=80&w=705&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
                                ],
                            ];
                        @endphp

                        @foreach ($products as $index => $product)
                            <div class="product-item product-card bg-white rounded-3xl overflow-hidden flex flex-col h-full"
                                data-category="{{ $product['category'] }}" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                                <div class="relative aspect-4/3 overflow-hidden">
                                    <img src="{{ $product['img'] }}" alt="{{ $product['title'] }}" class="w-full h-full object-cover">
                                    @if(isset($product['featured']) && $product['featured'])
                                        <div class="absolute top-4 left-4">
                                            <span class="bg-sky-600 text-white text-[9px] font-black uppercase tracking-widest px-3 py-1.5 rounded-lg shadow-lg">{{ __('Featured') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="p-6 flex flex-col grow">
                                    <p class="text-sky-500 text-[10px] font-bold mb-2">{{ $product['kbli'] }}</p>
                                    <h3 class="text-xl font-black text-slate-900 mb-2 uppercase">{{ $product['title'] }}</h3>
                                    <p class="text-slate-500 text-xs leading-relaxed mb-6 grow">
                                        {{ $product['desc'] }}
                                    </p>
                                    <a href="{{ route('tzi.product-detail', ['slug' => $product['id']]) }}"
                                        class="text-sky-600 text-xs font-bold flex items-center gap-1 hover:gap-2 transition-all">
                                        {{ __('Lihat Detail') }} <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ── PRINCIPALS & PARTNERS ── -->
    <section class="py-24 bg-white border-t border-slate-100 overflow-hidden relative">
        <div class="max-w-6xl mx-auto px-6 text-center mb-16 relative z-10">
            <div
                class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-sky-600 mb-5">
                <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
                {{ __('Kolaborasi Global & Strategis') }}
                <span class="w-6 h-0.5 bg-sky-600 inline-block"></span>
            </div>
            <h2 class="text-3xl md:text-5xl font-black uppercase text-slate-900" data-aos="fade-up">{{ __('PRINSIPAL & MITRA KAMI') }}</h2>
            <div class="w-16 h-1 bg-sky-600 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="slider-container space-y-12 md:space-y-16">
            <!-- Division 1: Air Conditioning -->
            <div class="space-y-4">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-sky-500/60 text-center px-6">{{ __('Air Conditioning Division') }}</p>
                <div class="swiper swiper-left">
                    <div class="swiper-wrapper">
                        @php
                            $acBrands = ['daikin.jpg', 'mitsubishi.svg', 'panasonic.png', 'samsung.png', 'LG.svg', 'carrier.png', 'midea.png', 'haier.png', 'hisense.png', 'gree.png', 'york.png', 'trane.png', 'aqua.png', 'polytron.png'];
                        @endphp
                        @foreach(array_merge($acBrands, $acBrands) as $brand)
                            <div class="swiper-slide w-auto! px-8">
                                <img src="{{ asset('assets/img/brands/' . $brand) }}" alt="{{ ucfirst(explode('.', $brand)[0]) }} Logo" class="m-logo h-12 grayscale hover:grayscale-0 transition-all">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Division 2: IT - Electronic -->
            <div class="space-y-4">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-sky-500/60 text-center px-6">{{ __('IT - Electronic Division') }}</p>
                <div class="swiper swiper-right">
                    <div class="swiper-wrapper">
                        @php
                            $itBrands = ['asus.png', 'acer.png', 'apple.png', 'dell.png', 'hp.png', 'lenovo.png', 'msi.png', 'cisco.png', 'epson.png', 'bosch.png', 'brother.png', 'benq.png', 'philips.png', 'axioo.png', 'axis.png', 'advan.png', 'ezviz.png', 'hikvision.png', 'LG.svg', 'microvision.png', 'newline.png', 'samsung.png', 'sennheiser.png', 'toa.png', 'viewsonic.png'];
                        @endphp
                        @foreach(array_merge($itBrands, $itBrands) as $brand)
                            <div class="swiper-slide w-auto! px-8">
                                <img src="{{ asset('assets/img/brands/' . $brand) }}" alt="{{ ucfirst(explode('.', $brand)[0]) }} Logo" class="m-logo h-10 grayscale hover:grayscale-0 transition-all">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Division 3: Furniture -->
            <div class="space-y-4">
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-sky-500/60 text-center px-6">{{ __('Furniture Division') }}</p>
                <div class="swiper swiper-left">
                    <div class="swiper-wrapper">
                        @php
                            $furnitureBrands = ['futura.jpg', 'chitose.webp', 'lion.png', 'indachi.png', 'donati.webp', 'chairman.webp', 'savello.avif', 'importa.png', 'expo.png', 'orbitrend.webp', 'vip.svg', 'gresco.webp', 'valmont.png', 'novin.png'];
                        @endphp
                        @foreach(array_merge($furnitureBrands, $furnitureBrands) as $brand)
                            <div class="swiper-slide w-auto! px-8">
                                <img src="{{ asset('assets/img/brands/' . $brand) }}" alt="{{ ucfirst(explode('.', $brand)[0]) }} Logo" class="m-logo h-12 grayscale hover:grayscale-0 transition-all">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
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

        .swiper-wrapper {
            transition-timing-function: linear !important;
        }

        @media (max-width: 768px) {
            .m-logo {
                height: 30px;
                max-width: 120px;
            }
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

        .sidebar-item.active {
            background-color: #e0f2fe;
            color: #0369a1;
        }
    </style>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Product Filtering Logic
            const filterBtns = document.querySelectorAll('.filter-btn');
            const productItems = document.querySelectorAll('.product-item');
            const searchInput = document.getElementById('product-search');

            function filterProducts() {
                const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;
                const searchTerm = searchInput.value.toLowerCase();

                productItems.forEach(item => {
                    const category = item.dataset.category;
                    const title = item.querySelector('h3').innerText.toLowerCase();
                    const desc = item.querySelector('p').innerText.toLowerCase();
                    
                    const matchesFilter = activeFilter === 'all' || category === activeFilter;
                    const matchesSearch = title.includes(searchTerm) || desc.includes(searchTerm);

                    if (matchesFilter && matchesSearch) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => {
                        b.classList.remove('active', 'bg-sky-100', 'text-sky-700');
                        b.classList.add('text-slate-500', 'hover:bg-slate-100');
                    });
                    btn.classList.add('active', 'bg-sky-100', 'text-sky-700');
                    btn.classList.remove('text-slate-500', 'hover:bg-slate-100');
                    filterProducts();
                });
            });

            searchInput.addEventListener('input', filterProducts);

            // Swiper Brands
            const swiperLeft = new Swiper('.swiper-left', {
                loop: true,
                speed: 5000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                slidesPerView: 'auto',
                spaceBetween: 0,
            });

            const swiperRight = new Swiper('.swiper-right', {
                loop: true,
                speed: 5000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                    reverseDirection: true,
                },
                slidesPerView: 'auto',
                spaceBetween: 0,
            });
        });
    </script>
@endpush
