@extends('layouts.app')

@section('title', 'Jasa Jaringan & IT - SAT Project')

@section('content')
<div class="bg-slate-50 min-h-screen py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <span class="text-blue-600 font-bold tracking-wider uppercase text-xs bg-blue-100 px-3 py-1 rounded-full border border-blue-200">
                IT Infrastructure
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 mt-4 mb-4">
                Instalasi Jaringan & <span class="text-blue-600">Hardware</span>
            </h1>
            <p class="text-slate-500 max-w-2xl mx-auto text-lg">
                Solusi profesional untuk pemasangan, perawatan, dan perbaikan infrastruktur IT kantor, sekolah, dan rumah Anda.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="p-8 bg-slate-50/50 border-b border-slate-100">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-100 text-blue-600 rounded-lg">
                        <i class="fa-solid fa-screwdriver-wrench text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Daftar Layanan Kami</h3>
                </div>
            </div>
            
            <div class="divide-y divide-slate-100">
                <div class="p-8 flex flex-col md:flex-row md:items-center justify-between hover:bg-blue-50/30 transition-colors group">
                    <div class="flex items-start gap-5 mb-4 md:mb-0">
                        <div class="w-12 h-12 bg-cyan-100 text-cyan-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-network-wired text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-lg group-hover:text-blue-600 transition-colors">Setting MikroTik & Router</h4>
                            <p class="text-sm text-slate-500 mt-1 max-w-lg leading-relaxed">Management bandwidth anti lag, Hotspot Voucheran, Firewall, VPN, Pisah traffic game/sosmed.</p>
                        </div>
                    </div>
                    <div class="md:text-right pl-16 md:pl-0">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-cyan-100 text-cyan-700">
                            Jasa Setting
                        </span>
                    </div>
                </div>

                <div class="p-8 flex flex-col md:flex-row md:items-center justify-between hover:bg-blue-50/30 transition-colors group">
                    <div class="flex items-start gap-5 mb-4 md:mb-0">
                        <div class="w-12 h-12 bg-slate-200 text-slate-700 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-video text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-lg group-hover:text-blue-600 transition-colors">Instalasi CCTV</h4>
                            <p class="text-sm text-slate-500 mt-1 max-w-lg leading-relaxed">Pemasangan IP Camera / Analog, Setting DVR/NVR online agar bisa dipantau real-time via HP.</p>
                        </div>
                    </div>
                    <div class="md:text-right pl-16 md:pl-0">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-slate-100 text-slate-700">
                            Instalasi
                        </span>
                    </div>
                </div>

                <div class="p-8 flex flex-col md:flex-row md:items-center justify-between hover:bg-blue-50/30 transition-colors group">
                    <div class="flex items-start gap-5 mb-4 md:mb-0">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-ethernet text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-lg group-hover:text-blue-600 transition-colors">Penarikan Kabel LAN (Cabling)</h4>
                            <p class="text-sm text-slate-500 mt-1 max-w-lg leading-relaxed">Instalasi Local Area Network (LAN) yang rapi untuk lab komputer sekolah, warnet, atau kantor.</p>
                        </div>
                    </div>
                    <div class="md:text-right pl-16 md:pl-0">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700">
                            Instalasi
                        </span>
                    </div>
                </div>

                <div class="p-8 flex flex-col md:flex-row md:items-center justify-between hover:bg-blue-50/30 transition-colors group">
                    <div class="flex items-start gap-5 mb-4 md:mb-0">
                        <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-server text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-lg group-hover:text-blue-600 transition-colors">Setup Server & PC</h4>
                            <p class="text-sm text-slate-500 mt-1 max-w-lg leading-relaxed">Rakit PC, Install ulang OS, Setup Server Ujian (CBT), File Server, atau Web Server Lokal.</p>
                        </div>
                    </div>
                    <div class="md:text-right pl-16 md:pl-0">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-indigo-100 text-indigo-700">
                            Maintenance
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 bg-slate-900 rounded-3xl p-10 text-center text-white relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 left-0 w-full h-full opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
            
            <div class="relative z-10">
                <h2 class="text-2xl md:text-3xl font-extrabold mb-4">Butuh Teknisi Sekarang?</h2>
                <p class="text-slate-300 mb-8 text-lg max-w-2xl mx-auto">Konsultasikan kebutuhan jaringan atau hardware Anda sekarang. Kami melayani survei gratis untuk area terdekat.</p>
                
                <a href="https://wa.me/6281234567890?text=Halo%20SAT%20Project,%20saya%20mau%20tanya%20jasa%20jaringan..." target="_blank" class="inline-flex items-center bg-white text-slate-900 hover:bg-blue-50 px-8 py-4 rounded-xl font-bold transition-all hover:scale-105">
                    <i class="fa-brands fa-whatsapp text-2xl mr-3 text-green-600"></i> Hubungi Teknisi
                </a>
            </div>
        </div>

    </div>
</div>
@endsection