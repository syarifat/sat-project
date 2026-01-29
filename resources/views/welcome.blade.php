<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Startup Portfolio & Demos</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32 pt-20 px-4 sm:px-6 lg:px-8">
                <main class="mt-10 mx-auto max-w-7xl sm:mt-12 md:mt-16 lg:mt-20 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-slate-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Solusi Digital untuk</span>
                            <span class="block text-indigo-600">Bisnis Masa Depan</span>
                        </h1>
                        <p class="mt-3 text-base text-slate-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Kami membangun sistem terintegrasi mulai dari IoT, Fintech, hingga Manajemen Jaringan. Silakan coba demo aplikasi kami di bawah ini.
                        </p>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 bg-slate-100 flex items-center justify-center">
            <svg class="w-full h-64 text-slate-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z"/>
            </svg>
        </div>
    </div>

    <div id="demos" class="bg-slate-50 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Portfolio</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                    Akses Demo Sistem
                </p>
                <p class="mt-4 max-w-2xl text-xl text-slate-500 lg:mx-auto">
                    Gunakan kredensial yang tersedia di setiap kartu untuk masuk ke dalam sistem.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @foreach($projects as $project)
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border border-slate-100 flex flex-col">
                    
                    <div class="px-6 py-5 bg-gradient-to-r from-slate-50 to-white border-b border-slate-100 flex justify-between items-center">
                        <h3 class="text-lg leading-6 font-bold text-slate-900">
                            {{ $project->name }}
                        </h3>
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                            {{ $project->category }}
                        </span>
                    </div>

                    <div class="px-6 py-6 flex-grow">
                        <p class="text-slate-600 text-sm mb-6 h-20 line-clamp-3">
                            {{ $project->description }}
                        </p>

                        <div class="bg-slate-50 rounded-lg p-4 border border-slate-200">
                            <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Kredensial Demo</p>
                            
                            <div class="flex justify-between items-center mb-2 group">
                                <span class="text-sm font-medium text-slate-600">User:</span>
                                <div class="flex items-center bg-white border border-slate-200 rounded px-2 py-1">
                                    <code class="text-xs font-mono text-indigo-600 select-all" id="user-{{ $project->id }}">{{ $project->demo_user }}</code>
                                    <button onclick="copyToClipboard('user-{{ $project->id }}')" class="ml-2 text-slate-400 hover:text-indigo-600 transition-colors" title="Copy">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                    </button>
                                </div>
                            </div>

                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-slate-600">Pass:</span>
                                <div class="flex items-center bg-white border border-slate-200 rounded px-2 py-1">
                                    <code class="text-xs font-mono text-indigo-600 select-all" id="pass-{{ $project->id }}">{{ $project->demo_pass }}</code>
                                    <button onclick="copyToClipboard('pass-{{ $project->id }}')" class="ml-2 text-slate-400 hover:text-indigo-600 transition-colors" title="Copy">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 py-4 bg-slate-50 border-t border-slate-100">
                        <a href="{{ $project->demo_url }}" target="_blank" class="w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all transform hover:-translate-y-0.5">
                            Buka Demo
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <footer class="bg-white border-t border-slate-200 mt-12 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center text-slate-400 text-sm">
            &copy; 2026 Startup Anda. All rights reserved. Built with Laravel v{{ Illuminate\Foundation\Application::VERSION }}.
        </div>
    </footer>

    <script>
        function copyToClipboard(elementId) {
            var text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(function() {
                alert('Copied: ' + text); // Bisa diganti dengan toast notification yang lebih cantik
            }, function(err) {
                console.error('Could not copy text: ', err);
            });
        }
    </script>
</body>
</html>