<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SAT Project - Solusi Digital Terintegrasi">
    
    <title>@yield('title', 'SAT Project')</title>
    
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg?v=1') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body { font-family: 'Outfit', sans-serif; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none;  scrollbar-width: none; }
        
        .group:hover .group-hover\:visible { visibility: visible; }
        .group:hover .group-hover\:opacity-100 { opacity: 1; }
        .group:hover .group-hover\:translate-y-0 { transform: translateY(0); }
    </style>
</head>
<body class="bg-slate-50 dark:bg-slate-900 text-slate-800 dark:text-slate-200 antialiased selection:bg-blue-600 selection:text-white flex flex-col min-h-screen transition-colors duration-300">

    <nav class="bg-white/90 dark:bg-slate-900/90 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 fixed w-full z-50 top-0 transition-colors duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                
                <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer" onclick="window.location='{{ route('home') }}'">
                    <img src="{{ asset('favicon.svg') }}" alt="Logo" class="w-10 h-10 hover:rotate-12 transition-transform duration-300 drop-shadow-sm">
                    <span class="font-bold text-2xl tracking-tight text-slate-900 dark:text-white">
                        SAT <span class="text-blue-600 dark:text-blue-500">Project</span>
                    </span>
                </div>

                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="text-sm font-bold {{ request()->routeIs('home') ? 'text-blue-600 dark:text-blue-400' : 'text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400' }} transition-colors">
                        Home
                    </a>
                    
                    <div class="relative group h-full flex items-center">
                        <button class="flex items-center gap-1 text-sm font-bold text-slate-600 dark:text-slate-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors py-2 focus:outline-none">
                            Layanan <i class="fa-solid fa-chevron-down text-[10px] ml-1 transition-transform group-hover:rotate-180"></i>
                        </button>
                        
                        <div class="absolute left-1/2 -translate-x-1/2 top-[70px] w-64 bg-white dark:bg-slate-800 rounded-2xl shadow-xl border border-slate-100 dark:border-slate-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 p-2 z-50">
                            <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white dark:bg-slate-800 border-t border-l border-slate-100 dark:border-slate-700 transform rotate-45"></div>
                            
                            <div class="relative bg-white dark:bg-slate-800 rounded-xl overflow-hidden">
                                <a href="{{ route('products') }}" class="flex items-center gap-3 px-4 py-3 hover:bg-blue-50 dark:hover:bg-slate-700/50 transition-colors group/item">
                                    <div class="w-8 h-8 rounded-lg bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fa-solid fa-box-open text-xs"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-slate-800 dark:text-slate-200">Produk Digital</h4>
                                        <p class="text-[10px] text-slate-500 dark:text-slate-400">Source code & IoT</p>
                                    </div>
                                </a>

                                <a href="{{ route('services.joki') }}" class="flex items-center gap-3 px-4 py-3 hover:bg-purple-50 dark:hover:bg-slate-700/50 transition-colors group/item">
                                    <div class="w-8 h-8 rounded-lg bg-purple-100 dark:bg-purple-900/50 text-purple-600 dark:text-purple-400 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fa-solid fa-code text-xs"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-slate-800 dark:text-slate-200">Joki Coding</h4>
                                        <p class="text-[10px] text-slate-500 dark:text-slate-400">Tugas & Skripsi</p>
                                    </div>
                                </a>

                                <a href="{{ route('services.network') }}" class="flex items-center gap-3 px-4 py-3 hover:bg-cyan-50 dark:hover:bg-slate-700/50 transition-colors group/item">
                                    <div class="w-8 h-8 rounded-lg bg-cyan-100 dark:bg-cyan-900/50 text-cyan-600 dark:text-cyan-400 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fa-solid fa-network-wired text-xs"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-slate-800 dark:text-slate-200">Jasa Jaringan</h4>
                                        <p class="text-[10px] text-slate-500 dark:text-slate-400">MikroTik & CCTV</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <button id="theme-toggle" onclick="toggleTheme()" class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-yellow-400 hover:bg-slate-200 dark:hover:bg-slate-700 transition-all flex items-center justify-center focus:outline-none">
                        <i class="fa-solid fa-sun hidden dark:block text-lg"></i>
                        <i class="fa-solid fa-moon block dark:hidden text-lg"></i>
                    </button>
                </div>

                <div class="flex items-center gap-4 md:hidden">
                    <button onclick="toggleTheme()" class="w-9 h-9 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-yellow-400 flex items-center justify-center">
                        <i class="fa-solid fa-sun hidden dark:block"></i>
                        <i class="fa-solid fa-moon block dark:hidden"></i>
                    </button>

                    <button onclick="toggleMobileMenu()" class="text-slate-600 dark:text-slate-300 hover:text-blue-600 focus:outline-none p-1">
                        <i class="fa-solid fa-bars text-2xl" id="menuIcon"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobileMenu" class="hidden md:hidden bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800 absolute w-full left-0 shadow-lg">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-3 rounded-lg text-base font-bold text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-blue-600">Home</a>
                
                <div class="px-3 py-2 text-xs font-bold text-slate-400 uppercase tracking-wider">Layanan Kami</div>
                
                <a href="{{ route('products') }}" class="flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-blue-50 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-box-open text-blue-500 w-5"></i>
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Produk Digital</span>
                </a>
                <a href="{{ route('services.joki') }}" class="flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-purple-50 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-code text-purple-500 w-5"></i>
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Joki Coding</span>
                </a>
                <a href="{{ route('services.network') }}" class="flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-cyan-50 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-network-wired text-cyan-500 w-5"></i>
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Jasa Jaringan</span>
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 mt-auto pt-16 pb-8 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <img src="{{ asset('favicon.svg') }}" alt="Logo" class="w-8 h-8 grayscale opacity-50 dark:invert">
                        <span class="font-bold text-xl text-slate-900 dark:text-white">SAT Project</span>
                    </div>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed max-w-sm mb-6">
                        Partner teknologi terpercaya untuk transformasi digital bisnis, pendidikan, dan infrastruktur jaringan Anda.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-blue-600 hover:text-white transition-all">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-blue-600 hover:text-white transition-all">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:bg-blue-600 hover:text-white transition-all">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 dark:text-white mb-4">Layanan</h4>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li><a href="{{ route('products') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Produk Digital</a></li>
                        <li><a href="{{ route('services.joki') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Joki Coding</a></li>
                        <li><a href="{{ route('services.network') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Instalasi Jaringan</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 dark:text-white mb-4">Kontak</h4>
                    <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-3">
                            <i class="fa-brands fa-whatsapp text-green-500 mt-1"></i>
                            <span>+62 878-5901-7087</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-envelope text-blue-500 mt-1"></i>
                            <span>syarifahsanit@gmail.com</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot text-red-500 mt-1"></i>
                            <span>Tulungagung, Jawa Timur</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-100 dark:border-slate-800 pt-8 text-center">
                <p class="text-slate-400 text-xs">
                    &copy; {{ date('Y') }} SAT Project. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    @stack('scripts')

    <script>
        // Toggle Mobile Menu
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

        // Toggle Dark Mode
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
        }
    </script>
</body>
</html>