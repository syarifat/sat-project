@extends('layouts.app')

@section('title', 'SAT Project - Solusi Digital Terintegrasi')

@section('content')
    <div class="relative bg-white border-b border-slate-200 overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#444 1px, transparent 1px); background-size: 24px 24px;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-24 text-center lg:pt-32 relative z-10">
            <span class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-wide mb-6 border border-blue-100">
                <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                Partner IT Terpercaya
            </span>
            
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-6 leading-tight">
                Solusi IT Lengkap <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Dalam Satu Pintu</span>
            </h1>
            
            <p class="mt-4 max-w-2xl mx-auto text-xl text-slate-500 leading-relaxed">
                Dari pembuatan aplikasi profesional, bantuan tugas coding (Joki), hingga instalasi infrastruktur jaringan. SAT Project hadir untuk menyelesaikan masalah digital Anda.
            </p>
            
            <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#services" class="px-8 py-3.5 rounded-xl bg-slate-900 text-white font-bold hover:bg-slate-800 transition-all shadow-lg shadow-slate-900/30">
                    Jelajahi Layanan
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" class="px-8 py-3.5 rounded-xl bg-white text-slate-700 border border-slate-200 font-bold hover:bg-slate-50 transition-all flex items-center justify-center gap-2">
                    <i class="fa-brands fa-whatsapp text-green-500 text-lg"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </div>

    <div id="services" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900">Layanan Unggulan</h2>
                <p class="text-slate-500 mt-2">Pilih kategori layanan yang sesuai dengan kebutuhan Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group cursor-pointer" onclick="window.location='{{ route('products') }}'">
                    <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">Produk Digital</h3>
                    <p class="text-slate-500 mb-8 leading-relaxed">
                        Kumpulan source code website, sistem IoT, dan aplikasi mobile siap pakai untuk kebutuhan bisnis atau referensi belajar.
                    </p>
                    <span class="text-blue-600 font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
                        Lihat Katalog <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group cursor-pointer" onclick="window.location='{{ route('services.joki') }}'">
                    <div class="w-16 h-16 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-purple-600 transition-colors">Joki Coding</h3>
                    <p class="text-slate-500 mb-8 leading-relaxed">
                        Bantuan pengerjaan tugas kuliah IT, skripsi, error fixing, hingga privat mentoring. Privasi aman, coding rapi.
                    </p>
                    <span class="text-purple-600 font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
                        Cek Harga <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group cursor-pointer" onclick="window.location='{{ route('services.network') }}'">
                    <div class="w-16 h-16 bg-cyan-100 text-cyan-600 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-cyan-600 transition-colors">Jasa Jaringan</h3>
                    <p class="text-slate-500 mb-8 leading-relaxed">
                        Instalasi CCTV, setting MikroTik, penarikan kabel LAN kantor, hingga maintenance server sekolah/instansi.
                    </p>
                    <span class="text-cyan-600 font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
                        Lihat Layanan <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>

            </div>
        </div>
    </div>

    <div class="py-20 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold text-slate-900 mb-6">Kenapa Memilih <span class="text-blue-600">SAT Project?</span></h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                                <i class="fa-solid fa-check text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900">Profesional & Berpengalaman</h4>
                                <p class="text-slate-500 text-sm">Tim kami terdiri dari praktisi IT yang ahli di bidang Web, Mobile, IoT, dan Network.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center">
                                <i class="fa-solid fa-bolt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900">Pengerjaan Cepat & Tepat</h4>
                                <p class="text-slate-500 text-sm">Kami menghargai waktu Anda. Setiap proyek dikerjakan sesuai deadline yang disepakati.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                                <i class="fa-solid fa-headset text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-slate-900">Support & Garansi</h4>
                                <p class="text-slate-500 text-sm">Layanan purna jual yang responsif. Kami memberikan garansi bug fixing dan maintenance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-slate-100 rounded-3xl p-8 h-96 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-cyan-500 opacity-10"></div>
                    <div class="text-center relative z-10">
                        <i class="fa-solid fa-rocket text-8xl text-blue-200 mb-4 animate-bounce"></i>
                        <p class="font-bold text-slate-400">SAT Project Ecosystem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 px-4">
        <div class="max-w-5xl mx-auto bg-slate-900 rounded-3xl p-10 md:p-16 text-center relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 left-0 w-64 h-64 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 translate-x-1/2 translate-y-1/2"></div>

            <div class="relative z-10">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6">Siap Digitalisasi Bisnis Anda?</h2>
                <p class="text-slate-300 text-lg mb-8 max-w-2xl mx-auto">
                    Konsultasikan kebutuhan Anda sekarang. Gratis diskusi untuk menentukan solusi terbaik bagi masalah Anda.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="https://wa.me/6281234567890" target="_blank" class="px-8 py-4 bg-green-500 hover:bg-green-600 text-white rounded-xl font-bold transition-all flex items-center justify-center gap-2 shadow-lg shadow-green-500/20">
                        <i class="fa-brands fa-whatsapp text-xl"></i> Chat WhatsApp
                    </a>
                    <a href="{{ route('products') }}" class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur text-white border border-white/20 rounded-xl font-bold transition-all">
                        Lihat Portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection