@extends('layouts.app')
@section('title', 'Jasa Joki Coding - SAT Project')

@section('content')
<div class="bg-slate-50 min-h-screen py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-12">
            <h1 class="text-3xl font-extrabold text-slate-900">Jasa Coding & Bantuan Tugas</h1>
            <p class="text-slate-500 mt-2">
                Apapun bahasa pemrogramannya, kami siap bantu. Mulai dari tugas kuliah ringan sampai skripsi full-stack.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 mb-8">
            <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                <i class="fa-solid fa-layer-group text-purple-600"></i> Tech Stack & Bahasa
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h4 class="font-bold text-slate-700 mb-3 border-b border-slate-100 pb-2">Web Development</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-slate-600">
                            <i class="fa-brands fa-laravel text-red-500 w-6"></i> Laravel (PHP)
                        </li>
                        <li class="flex items-center gap-2 text-slate-600">
                            <i class="fa-brands fa-php text-indigo-500 w-6"></i> Native PHP / CI
                        </li>
                        <li class="flex items-center gap-2 text-slate-600">
                            <i class="fa-brands fa-js text-yellow-500 w-6"></i> Javascript (Node/Vue/React)
                        </li>
                        <li class="flex items-center gap-2 text-slate-600">
                            <i class="fa-brands fa-html5 text-orange-500 w-6"></i> HTML, CSS, Tailwind, Bootstrap
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-slate-700 mb-3 border-b border-slate-100 pb-2">Mobile & Desktop</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-slate-600">
                            <i class="fa-brands fa-android text-green-500 w-6"></i> Android (Java/Kotlin)
                        </li>
                        <li class="flex items-center gap-2 text-slate-600">
                            <i class="fa-brands fa-flutter text-cyan-500 w-6"></i> Flutter (Dart)
                        </li>
                        <li class="flex items-center gap-2 text-slate-600">
                            <i class="fa-brands fa-python text-blue-500 w-6"></i> Python (Tkinter/PyQt)
                        </li>
                        <li class="flex items-center gap-2 text-slate-600">
                            <i class="fa-brands fa-java text-red-600 w-6"></i> Java Netbeans / Swing
                        </li>
                    </ul>
                </div>

                <div class="md:col-span-2">
                    <h4 class="font-bold text-slate-700 mb-3 border-b border-slate-100 pb-2">Lainnya (Tugas Kuliah/Data)</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded text-sm font-medium">C++</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded text-sm font-medium">Algoritma Dasar</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded text-sm font-medium">Struktur Data</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded text-sm font-medium">Machine Learning (Basic)</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded text-sm font-medium">Arduino / IoT Code</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded text-sm font-medium">Figma to HTML</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
            <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                <i class="fa-solid fa-list-check text-purple-600"></i> Jenis Pengerjaan
            </h3>

            <div class="space-y-4">
                <div class="flex justify-between items-center p-4 bg-slate-50 rounded-lg">
                    <div>
                        <h4 class="font-bold text-slate-900">Tugas Praktikum / Harian</h4>
                        <p class="text-xs text-slate-500">Coding sederhana, fix error ringan, flowchart.</p>
                    </div>
                    <span class="text-sm font-bold text-purple-600">Mulai 50rb</span>
                </div>
                
                <div class="flex justify-between items-center p-4 bg-slate-50 rounded-lg">
                    <div>
                        <h4 class="font-bold text-slate-900">Project UAS / Tugas Besar</h4>
                        <p class="text-xs text-slate-500">Aplikasi CRUD sederhana, Web Profile, Laporan.</p>
                    </div>
                    <span class="text-sm font-bold text-purple-600">Mulai 300rb</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-slate-50 rounded-lg">
                    <div>
                        <h4 class="font-bold text-slate-900">Skripsi / Tugas Akhir</h4>
                        <p class="text-xs text-slate-500">Full system, Database kompleks, Revisi, Deploy.</p>
                    </div>
                    <span class="text-sm font-bold text-purple-600">Mulai 1.5jt</span>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="https://wa.me/6281234567890?text=Halo%20SAT%20Project,%20mau%20konsultasi%20tugas%20coding..." target="_blank" class="inline-flex items-center justify-center bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-xl font-bold transition-all shadow-lg shadow-green-500/20 w-full md:w-auto">
                    <i class="fa-brands fa-whatsapp text-xl mr-2"></i> Konsultasi via WhatsApp
                </a>
            </div>
        </div>

    </div>
</div>
@endsection