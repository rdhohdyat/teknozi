@extends('layouts.tzi')

@section('title', __('Kontak - PT Teknokrat Zamrud Integrasi'))
@section('meta_description', __('Hubungi PT Teknokrat Zamrud Integrasi hari ini untuk konsultasi dan solusi bisnis Anda. Kami siap melayani kebutuhan IT, Elektronika, HVAC, dan Interior Kantor di wilayah Pekanbaru dan sekitarnya.'))
@section('meta_keywords', __('kontak teknokrat zamrud integrasi, alamat teknokrat zamrud, nomor telepon teknokrat zamrud, email pt teknokrat zamrud, hubungi kontraktor pekanbaru'))

@section('content')
    <!-- ── PAGE HERO ── -->
    <section class="contact-bg min-h-[40vh] flex items-center pt-20 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 w-full py-20 relative z-10 text-center md:text-left">
            <div data-aos="fade-up">
                <div class="flex items-center justify-center md:justify-start gap-3 text-sky-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500 shadow-[0_0_8px_rgba(59,130,246,0.8)]"></span>
                    <p class="text-[11px] font-bold uppercase tracking-[0.2em]">Contact Us</p>
                </div>
                <h1 class="text-4xl md:text-7xl uppercase text-white leading-tight font-black">
                    {{ __('HUBUNGI') }} <span class="text-sky-500">{{ __('KAMI') }}</span>
                </h1>
                <p class="text-slate-400 text-sm md:text-base max-w-2xl mt-4">
                    {{ __('Konsultasikan kebutuhan teknologi dan integrasi Anda dengan kami. Tim kami siap membantu memberikan solusi terbaik.') }}
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

    <!-- ── CONTENT ── -->
    <section class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid lg:grid-cols-3 gap-16">
                <!-- Contact Info -->
                <div class="space-y-10" data-aos="fade-right">
                    <div>
                        <h2 class="text-3xl font-black uppercase text-slate-900 mb-6">{{ __('Informasi') }} <span
                                class="text-sky-600">{{ __('Kontak') }}</span></h2>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8">{{ __('Jangan ragu untuk menghubungi kami melalui saluran di bawah ini. Tim kami akan segera merespon Anda.') }}</p>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-sky-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <iconify-icon icon="solar:map-point-bold-duotone"
                                class="text-sky-600 text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="text-lg font-black uppercase text-slate-900 mb-1">{{ __('Alamat Kantor') }}</h4>
                            <p class="text-slate-500 text-sm">Jl. Todak No.99C Ruko Bening, Tangkerang Barat, Kec.
                                Marpoyan Damai, Kota Pekanbaru Riau</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-sky-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <iconify-icon icon="solar:letter-bold-duotone" class="text-sky-600 text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="text-lg font-black uppercase text-slate-900 mb-1">{{ __('Email Kami') }}</h4>
                            <p class="text-slate-500 text-sm">admin@teknokratzamrud.com</p>
                            <p class="text-slate-500 text-sm">sales@teknokratzamrud.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-sky-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <iconify-icon icon="solar:phone-bold-duotone" class="text-sky-600 text-2xl"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="text-lg font-black uppercase text-slate-900 mb-1">{{ __('Telepon/Whatsapp') }}</h4>
                            <p class="text-slate-500 text-sm mb-4">0813-7127-3367</p>
                            <a href="https://wa.me/6281371273367" target="_blank"
                                class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#128C7E] text-white text-xs font-bold uppercase tracking-widest px-5 py-3 rounded-xl transition-all shadow-lg shadow-green-500/20">
                                <iconify-icon icon="logos:whatsapp-icon" class="text-lg"></iconify-icon>
                                {{ __('Chat via WhatsApp') }}
                            </a>
                        </div>
                    </div>

                    <!-- Map inside Left Column -->
                    <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-xl" data-aos="zoom-in">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6656877650003!2d101.42478707424073!3d0.5011711637173792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5af3a3a06227f%3A0xeb4b783da26fe737!2sPT%20Teknokrat%20Zamrud%20Integrasi!5e0!3m2!1sen!2sid!4v1778666586210!5m2!1sen!2sid"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-2 bg-slate-50 p-3 sm:p-6 md:p-10 sm:rounded-3xl border border-slate-100 h-fit"
                    data-aos="fade-left">
                    <h2 class="text-2xl md:text-3xl font-black uppercase text-slate-900 mb-6 md:mb-8">{{ __('Kirim') }} <span
                            class="text-sky-600">{{ __('Pesan') }}</span></h2>
                    <form id="contactFormEmail" action="#" class="grid md:grid-cols-2 gap-4 md:gap-6">
                        <div class="space-y-1.5 md:space-y-2">
                            <label
                                class="text-[9px] md:text-[10px] uppercase tracking-widest font-bold text-slate-400 ml-1">{{ __('Nama Lengkap') }}</label>
                            <input type="text" id="contactName" placeholder="{{ __('Masukkan nama Anda') }}" required
                                class="w-full bg-white border border-slate-200 p-3.5 md:p-4 rounded-xl text-sm input-focus">
                        </div>
                        <div class="space-y-1.5 md:space-y-2">
                            <label
                                class="text-[9px] md:text-[10px] uppercase tracking-widest font-bold text-slate-400 ml-1">{{ __('Alamat Email') }}</label>
                            <input type="email" id="contactEmail" placeholder="email@perusahaan.com" required
                                class="w-full bg-white border border-slate-200 p-3.5 md:p-4 rounded-xl text-sm input-focus">
                        </div>
                        <div class="space-y-1.5 md:space-y-2 md:col-span-2">
                            <label
                                class="text-[9px] md:text-[10px] uppercase tracking-widest font-bold text-slate-400 ml-1">{{ __('Subjek Pesan') }}</label>
                            <input type="text" id="contactSubject" placeholder="{{ __('Apa yang bisa kami bantu?') }}" required
                                class="w-full bg-white border border-slate-200 p-3.5 md:p-4 rounded-xl text-sm input-focus">
                        </div>
                        <div class="space-y-1.5 md:space-y-2 md:col-span-2">
                            <label
                                class="text-[9px] md:text-[10px] uppercase tracking-widest font-bold text-slate-400 ml-1">{{ __('Isi Pesan') }}</label>
                            <textarea id="contactMessage" rows="4" placeholder="{{ __('Tuliskan pesan Anda di sini...') }}" required
                                class="w-full bg-white border border-slate-200 p-3.5 md:p-4 rounded-xl text-sm input-focus resize-none"></textarea>
                        </div>
                        <div class="md:col-span-2 pt-2 md:pt-4">
                            <button type="submit"
                                class="btn-transition w-full bg-sky-600 hover:bg-sky-700 text-white font-bold uppercase tracking-widest py-3.5 md:py-4 rounded-xl shadow-xl shadow-sky-900/20">
                                {{ __('Kirim Via Email') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
        .input-focus {
            transition: all 0.3s ease;
        }

        .input-focus:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
            outline: none;
        }
    </style>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactFormEmail');
            if(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const name = document.getElementById('contactName').value;
                    const email = document.getElementById('contactEmail').value;
                    const subject = document.getElementById('contactSubject').value;
                    const message = document.getElementById('contactMessage').value;
                    
                    const emailTo = "admin@teknokratzamrud.com";
                    
                    // Format isi body email
                    const emailBody = `Nama: ${name}\nEmail: ${email}\n\nPesan:\n${message}`;
                    
                    // Buat link dan buka Web Gmail di tab baru
                    const gmailUrl = `https://mail.google.com/mail/?view=cm&fs=1&to=${emailTo}&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(emailBody)}`;
                    window.open(gmailUrl, '_blank');
                });
            }
        });
    </script>
    @endpush
@endsection
