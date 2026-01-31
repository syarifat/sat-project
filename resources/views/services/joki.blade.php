@extends('layouts.app')

@section('title', 'Jasa Coding & Joki - SAT Project')

@section('content')
<div class="bg-slate-50 dark:bg-slate-900 min-h-screen py-16 transition-colors duration-300">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <span class="text-purple-600 dark:text-purple-300 font-bold tracking-wider uppercase text-xs bg-purple-100 dark:bg-purple-900/50 px-3 py-1 rounded-full border border-purple-200 dark:border-purple-700">
                Coding Assistance
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white mt-4 mb-4">
                Joki Tugas & <span class="text-purple-600 dark:text-purple-400">Solusi Coding</span>
            </h1>
            <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-lg">
                Apapun bahasa pemrogramannya, kami siap bantu. Mulai dari tugas kuliah ringan sampai skripsi full-stack.
            </p>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 p-8 mb-12 transition-colors duration-300">
            <div class="flex items-center gap-3 mb-8 pb-4 border-b border-slate-100 dark:border-slate-700">
                <div class="p-2 bg-purple-100 dark:bg-purple-900/50 text-purple-600 dark:text-purple-400 rounded-lg">
                    <i class="fa-solid fa-layer-group text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Tech Stack & Bahasa</h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <h4 class="font-bold text-slate-700 dark:text-slate-200 mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-globe text-slate-400 dark:text-slate-500"></i> Web Development
                    </h4>
                    <ul class="space-y-3">
                        <li class="flex items-center p-3 bg-slate-50 dark:bg-slate-700/30 rounded-xl hover:bg-white dark:hover:bg-slate-700 hover:shadow-md transition-all border border-transparent hover:border-slate-100 dark:hover:border-slate-600">
                            <i class="fa-brands fa-laravel text-red-500 text-2xl w-10"></i> 
                            <span class="font-medium text-slate-700 dark:text-slate-200">Laravel (PHP)</span>
                        </li>
                        <li class="flex items-center p-3 bg-slate-50 dark:bg-slate-700/30 rounded-xl hover:bg-white dark:hover:bg-slate-700 hover:shadow-md transition-all border border-transparent hover:border-slate-100 dark:hover:border-slate-600">
                            <i class="fa-brands fa-php text-indigo-500 text-2xl w-10"></i> 
                            <span class="font-medium text-slate-700 dark:text-slate-200">Native PHP / CI</span>
                        </li>
                        <li class="flex items-center p-3 bg-slate-50 dark:bg-slate-700/30 rounded-xl hover:bg-white dark:hover:bg-slate-700 hover:shadow-md transition-all border border-transparent hover:border-slate-100 dark:hover:border-slate-600">
                            <i class="fa-brands fa-js text-yellow-500 text-2xl w-10"></i> 
                            <span class="font-medium text-slate-700 dark:text-slate-200">Javascript (Node/Vue/React)</span>
                        </li>
                        <li class="flex items-center p-3 bg-slate-50 dark:bg-slate-700/30 rounded-xl hover:bg-white dark:hover:bg-slate-700 hover:shadow-md transition-all border border-transparent hover:border-slate-100 dark:hover:border-slate-600">
                            <i class="fa-brands fa-html5 text-orange-500 text-2xl w-10"></i> 
                            <span class="font-medium text-slate-700 dark:text-slate-200">HTML, CSS, Tailwind</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-slate-700 dark:text-slate-200 mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-mobile-screen text-slate-400 dark:text-slate-500"></i> Mobile & Desktop
                    </h4>
                    <ul class="space-y-3">
                        <li class="flex items-center p-3 bg-slate-50 dark:bg-slate-700/30 rounded-xl hover:bg-white dark:hover:bg-slate-700 hover:shadow-md transition-all border border-transparent hover:border-slate-100 dark:hover:border-slate-600">
                            <i class="fa-brands fa-android text-green-500 text-2xl w-10"></i> 
                            <span class="font-medium text-slate-700 dark:text-slate-200">Android (Java/Kotlin)</span>
                        </li>
                        <li class="flex items-center p-3 bg-slate-50 dark:bg-slate-700/30 rounded-xl hover:bg-white dark:hover:bg-slate-700 hover:shadow-md transition-all border border-transparent hover:border-slate-100 dark:hover:border-slate-600">
                            <i class="fa-brands fa-flutter text-cyan-500 text-2xl w-10"></i> 
                            <span class="font-medium text-slate-700 dark:text-slate-200">Flutter (Dart)</span>
                        </li>
                        <li class="flex items-center p-3 bg-slate-50 dark:bg-slate-700/30 rounded-xl hover:bg-white dark:hover:bg-slate-700 hover:shadow-md transition-all border border-transparent hover:border-slate-100 dark:hover:border-slate-600">
                            <i class="fa-brands fa-python text-blue-500 text-2xl w-10"></i> 
                            <span class="font-medium text-slate-700 dark:text-slate-200">Python (Tkinter/PyQt)</span>
                        </li>
                        <li class="flex items-center p-3 bg-slate-50 dark:bg-slate-700/30 rounded-xl hover:bg-white dark:hover:bg-slate-700 hover:shadow-md transition-all border border-transparent hover:border-slate-100 dark:hover:border-slate-600">
                            <i class="fa-brands fa-java text-red-600 text-2xl w-10"></i> 
                            <span class="font-medium text-slate-700 dark:text-slate-200">Java Netbeans / Swing</span>
                        </li>
                    </ul>
                </div>

                <div class="md:col-span-2 mt-2">
                    <h4 class="font-bold text-slate-700 dark:text-slate-200 mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-ellipsis text-slate-400 dark:text-slate-500"></i> Lainnya (Algoritma & Data)
                    </h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 rounded-lg text-sm font-bold hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors cursor-default">C++</span>
                        <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 rounded-lg text-sm font-bold hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors cursor-default">Algoritma Dasar</span>
                        <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 rounded-lg text-sm font-bold hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors cursor-default">Struktur Data</span>
                        <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 rounded-lg text-sm font-bold hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors cursor-default">Machine Learning (Basic)</span>
                        <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 rounded-lg text-sm font-bold hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors cursor-default">Arduino / IoT Code</span>
                        <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 rounded-lg text-sm font-bold hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors cursor-default">Figma to HTML</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 p-8 transition-colors duration-300">
            <div class="flex items-center gap-3 mb-8 pb-4 border-b border-slate-100 dark:border-slate-700">
                <div class="p-2 bg-purple-100 dark:bg-purple-900/50 text-purple-600 dark:text-purple-400 rounded-lg">
                    <i class="fa-solid fa-list-check text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Jenis Pengerjaan</h3>
            </div>

            <div class="space-y-4">
                <div class="flex flex-col sm:flex-row justify-between items-center p-5 bg-slate-50 dark:bg-slate-700/30 rounded-xl border border-transparent hover:border-purple-200 dark:hover:border-purple-500 hover:bg-purple-50/30 dark:hover:bg-purple-900/20 transition-all">
                    <div class="mb-3 sm:mb-0 text-center sm:text-left">
                        <h4 class="font-bold text-slate-900 dark:text-white text-lg">Tugas Praktikum / Harian</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Coding sederhana, fix error ringan, flowchart, dan laporan singkat.</p>
                    </div>
                    <div class="text-center">
                        <span class="block text-xs text-slate-400 dark:text-slate-500 uppercase font-bold mb-1">Mulai Dari</span>
                        <span class="text-xl font-extrabold text-purple-600 dark:text-purple-400">Rp 50.000</span>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row justify-between items-center p-5 bg-slate-50 dark:bg-slate-700/30 rounded-xl border border-transparent hover:border-purple-200 dark:hover:border-purple-500 hover:bg-purple-50/30 dark:hover:bg-purple-900/20 transition-all">
                    <div class="mb-3 sm:mb-0 text-center sm:text-left">
                        <h4 class="font-bold text-slate-900 dark:text-white text-lg">Project UAS / Tugas Besar</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Aplikasi CRUD sederhana, Web Profile, Laporan bab 1-3.</p>
                    </div>
                    <div class="text-center">
                        <span class="block text-xs text-slate-400 dark:text-slate-500 uppercase font-bold mb-1">Mulai Dari</span>
                        <span class="text-xl font-extrabold text-purple-600 dark:text-purple-400">Rp 300.000</span>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row justify-between items-center p-5 bg-slate-50 dark:bg-slate-700/30 rounded-xl border border-transparent hover:border-purple-200 dark:hover:border-purple-500 hover:bg-purple-50/30 dark:hover:bg-purple-900/20 transition-all">
                    <div class="mb-3 sm:mb-0 text-center sm:text-left">
                        <h4 class="font-bold text-slate-900 dark:text-white text-lg">Skripsi / Tugas Akhir</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Full system, Database kompleks, Revisi, Deploy Hosting/VPS.</p>
                    </div>
                    <div class="text-center">
                        <span class="block text-xs text-slate-400 dark:text-slate-500 uppercase font-bold mb-1">Mulai Dari</span>
                        <span class="text-xl font-extrabold text-purple-600 dark:text-purple-400">Rp 1.500.000</span>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center">
                <p class="text-slate-500 dark:text-slate-400 mb-4 text-sm">Butuh penawaran khusus? Hubungi kami langsung.</p>
                <a href="https://wa.me/6281234567890?text=Halo%20SAT%20Project,%20mau%20konsultasi%20tugas%20coding..." target="_blank" class="inline-flex items-center justify-center bg-green-500 hover:bg-green-600 text-white px-8 py-4 rounded-xl font-bold transition-all shadow-lg shadow-green-500/20 hover:-translate-y-1">
                    <i class="fa-brands fa-whatsapp text-2xl mr-3"></i> Konsultasi via WhatsApp
                </a>
            </div>
        </div>

    </div>
</div>
@endsection