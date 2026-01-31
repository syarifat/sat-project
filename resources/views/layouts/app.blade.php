<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SAT Project - Solusi Digital Terintegrasi, Jasa Coding, dan Instalasi Jaringan.">
    
    <title>@yield('title', 'SAT Project')</title>
    
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg?v=1') }}">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body { font-family: 'Outfit', sans-serif; }
        
        /* Hide Scrollbar but allow scroll */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none;  scrollbar-width: none; }
        
        /* Dropdown Animation */
        .group:hover .group-hover\:visible { visibility: visible; }
        .group:hover .group-hover\:opacity-100 { opacity: 1; }
        .group:hover .group-hover\:translate-y-0 { transform: translateY(0); }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-blue-600 selection:text-white flex flex-col min-h-screen">

    <nav class="bg-white/90 backdrop-blur-md border-b border-slate-200 fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                
                <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer" onclick="window.location='{{ route('home') }}'">
                    <img src="{{ asset('favicon.svg') }}" alt="Logo" class="w-10 h-10 hover:rotate-12 transition-transform duration-300 drop-shadow-sm">
                    <span class="font-bold text-2xl tracking-tight text-slate-900">
                        SAT <span class="text-blue-600">Project</span>
                    </span>
                </div>

                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="text-sm font-bold {{ request()->routeIs('home') ? 'text-blue-600' : 'text-slate-600 hover:text-blue-600' }} transition-colors">
                        Home
                    </a>
                    
                    <div class="relative group h-full flex items-center">
                        <button class="flex items-center gap-1 text-sm font-bold text-slate-600 group-hover:text-blue-600 transition-colors py-2 focus:outline-none">
                            Layanan <i class="fa-solid fa-chevron-down text-[10px] ml-1 transition-transform group-hover:rotate-180"></i>
                        </button>
                        
                        <div class="absolute left-1/2 -translate-x-1/2 top-[70px] w-64 bg-white rounded-2xl shadow-xl border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 p-2 z-50">
                            <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white border-t border-l border-slate-100 transform rotate-45"></div>
                            
                            <div class="relative bg-white rounded-xl overflow-hidden">
                                <a href="{{ route('products') }}" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 transition-colors group/item">
                                    <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fa-solid fa-box-open text-xs"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-slate-800">Produk Digital</h4>
                                        <p class="text-[10px] text-slate-500">Source code & IoT</p>
                                    </div>
                                </a>

                                <a href="{{ route('services.joki') }}" class="flex items-center gap-3 px-4 py-3 hover:bg-purple-50 transition-colors group/item">
                                    <div class="w-8 h-8 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fa-solid fa-code text-xs"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-slate-800">Joki Coding</h4>
                                        <p class="text-[10px] text-slate-500">Tugas & Skripsi</p>
                                    </div>
                                </a>

                                <a href="{{ route('services.network') }}" class="flex items-center gap-3 px-4 py-3 hover:bg-cyan-50 transition-colors group/item">
                                    <div class="w-8 h-8 rounded-lg bg-cyan-100 text-cyan-600 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fa-solid fa-network-wired text-xs"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-slate-800">Jasa Jaringan</h4>
                                        <p class="text-[10px] text-slate-500">MikroTik & CCTV</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('products') }}" class="px-6 py-2.5 rounded-full bg-slate-900 text-white text-sm font-bold hover:bg-slate-800 transition-all shadow-lg shadow-slate-900/20 hover:-translate-y-0.5">
                        Lihat Portfolio
                    </a>
                </div>

                <div class="flex items-center md:hidden">
                    <button onclick="toggleMobileMenu()" class="text-slate-600 hover:text-blue-600 focus:outline-none p-2">
                        <i class="fa-solid fa-bars text-2xl" id="menuIcon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-slate-100 absolute w-full left-0 shadow-lg">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-3 rounded-lg text-base font-bold text-slate-700 hover:bg-slate-50 hover:text-blue-600">Home</a>
                
                <div class="px-3 py-2 text-xs font-bold text-slate-400 uppercase tracking-wider">Layanan Kami</div>
                
                <a href="{{ route('products') }}" class="flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-blue-50">
                    <i class="fa-solid fa-box-open text-blue-500 w-5"></i>
                    <span class="text-sm font-medium text-slate-700">Produk Digital</span>
                </a>
                <a href="{{ route('services.joki') }}" class="flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-purple-50">
                    <i class="fa-solid fa-code text-purple-500 w-5"></i>
                    <span class="text-sm font-medium text-slate-700">Joki Coding</span>
                </a>
                <a href="{{ route('services.network') }}" class="flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-cyan-50">
                    <i class="fa-solid fa-network-wired text-cyan-500 w-5"></i>
                    <span class="text-sm font-medium text-slate-700">Jasa Jaringan</span>
                </a>

                <div class="pt-4 mt-2 border-t border-slate-100">
                    <a href="{{ route('products') }}" class="block text-center w-full px-4 py-3 rounded-xl bg-slate-900 text-white font-bold">
                        Lihat Portfolio
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <footer class="bg-white border-t border-slate-200 mt-auto pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <img src="{{ asset('favicon.svg') }}" alt="Logo" class="w-8 h-8 grayscale opacity-50">
                        <span class="font-bold text-xl text-slate-900">SAT Project</span>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-sm mb-6">
                        Partner teknologi terpercaya untuk transformasi digital bisnis, pendidikan, dan infrastruktur jaringan Anda.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white transition-all">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white transition-all">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white transition-all">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 mb-4">Layanan</h4>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li><a href="{{ route('products') }}" class="hover:text-blue-600 transition-colors">Produk Digital</a></li>
                        <li><a href="{{ route('services.joki') }}" class="hover:text-blue-600 transition-colors">Joki Coding</a></li>
                        <li><a href="{{ route('services.network') }}" class="hover:text-blue-600 transition-colors">Instalasi Jaringan</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 mb-4">Kontak</h4>
                    <ul class="space-y-3 text-sm text-slate-600">
                        <li class="flex items-start gap-3">
                            <i class="fa-brands fa-whatsapp text-green-500 mt-1"></i>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-envelope text-blue-500 mt-1"></i>
                            <span>hello@sat-project.me</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot text-red-500 mt-1"></i>
                            <span>Tulungagung, Jawa Timur</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-100 pt-8 text-center">
                <p class="text-slate-400 text-xs">
                    &copy; {{ date('Y') }} SAT Project. All rights reserved. Made with <i class="fa-solid fa-heart text-red-400 mx-1"></i> and Laravel.
                </p>
            </div>
        </div>
    </footer>

    @stack('scripts')

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const icon = document.getElementById('menuIcon');
            
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            } else {
                menu.classList.add('hidden');
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }
        }
    </script>
</body>
</html>