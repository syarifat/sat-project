@extends('layouts.app')
@section('title', 'Jasa Jaringan & IT - SAT Project')

@section('content')
<div class="bg-slate-50 min-h-screen py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-12">
            <h1 class="text-3xl font-extrabold text-slate-900">Jasa Instalasi Jaringan & Hardware</h1>
            <p class="text-slate-500 mt-2">
                Melayani pemasangan dan maintenance infrastruktur IT untuk kantor, sekolah, dan rumah.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="p-6 bg-blue-50 border-b border-blue-100">
                <h3 class="font-bold text-blue-800 flex items-center gap-2">
                    <i class="fa-solid fa-screwdriver-wrench"></i> Daftar Layanan Kami
                </h3>
            </div>
            
            <div class="divide-y divide-slate-100">
                <div class="p-6 flex flex-col md:flex-row md:items-center justify-between hover:bg-slate-50 transition-colors">
                    <div class="flex items-start gap-4 mb-4 md:mb-0">
                        <div class="w-10 h-10 bg-cyan-100 text-cyan-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Setting MikroTik & Router</h4>
                            <p class="text-sm text-slate-500 mt-1 max-w-md">Management bandwidth, Hotspot Voucheran, Firewall, VPN, Pisah traffic game/sosmed.</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="inline-block bg-slate-100 text-slate-600 text-xs font-bold px-2 py-1 rounded">Jasa Setting</span>
                    </div>
                </div>

                <div class="p-6 flex flex-col md:flex-row md:items-center justify-between hover:bg-slate-50 transition-colors">
                    <div class="flex items-start gap-4 mb-4 md:mb-0">
                        <div class="w-10 h-10 bg-slate-200 text-slate-700 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-video"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Instalasi CCTV</h4>
                            <p class="text-sm text-slate-500 mt-1 max-w-md">Pemasangan IP Camera / Analog, Setting DVR/NVR online agar bisa dipantau di HP.</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="inline-block bg-slate-100 text-slate-600 text-xs font-bold px-2 py-1 rounded">Instalasi</span>
                    </div>
                </div>

                <div class="p-6 flex flex-col md:flex-row md:items-center justify-between hover:bg-slate-50 transition-colors">
                    <div class="flex items-start gap-4 mb-4 md:mb-0">
                        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-ethernet"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Penarikan Kabel LAN (Cabling)</h4>
                            <p class="text-sm text-slate-500 mt-1 max-w-md">Instalasi Local Area Network (LAN) untuk lab komputer sekolah, warnet, atau kantor.</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="inline-block bg-slate-100 text-slate-600 text-xs font-bold px-2 py-1 rounded">Instalasi</span>
                    </div>
                </div>

                <div class="p-6 flex flex-col md:flex-row md:items-center justify-between hover:bg-slate-50 transition-colors">
                    <div class="flex items-start gap-4 mb-4 md:mb-0">
                        <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-server"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">Setup Server & PC</h4>
                            <p class="text-sm text-slate-500 mt-1 max-w-md">Rakit PC, Install ulang OS, Setup Server Ujian (CBT), File Server.</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="inline-block bg-slate-100 text-slate-600 text-xs font-bold px-2 py-1 rounded">Maintenance</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 bg-blue-900 rounded-2xl p-8 text-center text-white">
            <h2 class="text-2xl font-bold mb-2">Butuh Teknisi?</h2>
            <p class="text-blue-200 mb-6">Konsultasikan kebutuhan jaringan atau hardware Anda sekarang. Gratis survei untuk area terdekat.</p>
            <a href="https://wa.me/6281234567890?text=Halo%20SAT%20Project,%20saya%20mau%20tanya%20jasa%20jaringan..." target="_blank" class="inline-flex items-center bg-white text-blue-900 hover:bg-blue-50 px-6 py-3 rounded-xl font-bold transition-colors">
                <i class="fa-brands fa-whatsapp text-lg mr-2"></i> Hubungi Teknisi
            </a>
        </div>

    </div>
</div>
@endsection