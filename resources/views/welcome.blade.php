<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAT Project - Digital Solutions</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg?v=1') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body { font-family: 'Outfit', sans-serif; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none;  scrollbar-width: none; }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-blue-600 selection:text-white">

    <nav class="bg-white/80 backdrop-blur-md border-b border-slate-200 fixed w-full z-40 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('favicon.svg') }}" alt="Logo SAT Project" class="w-10 h-10 hover:scale-110 transition-transform duration-300 drop-shadow-md">
                    </a>
                    
                    <span class="font-bold text-xl tracking-tight text-slate-900">
                        SAT <span class="text-blue-600">Project</span>
                    </span>
                </div>
                <div class="flex items-center">
                    <a href="#portfolio" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors">Portfolio</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative bg-white pt-32 pb-16 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-blue-50 text-blue-700 text-sm font-semibold mb-6 border border-blue-100">
                <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                Innovation & Technology
            </span>
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-6 leading-tight">
                Membangun Ekosistem <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Digital Terintegrasi</span>
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-slate-500 leading-relaxed">
                <span class="font-bold text-slate-700">SAT Project</span> menghadirkan solusi perangkat lunak mulai dari IoT, Web System, hingga Mobile Apps untuk efisiensi bisnis Anda.
            </p>
            
            <div class="mt-8 flex justify-center gap-4">
                <a href="#portfolio" class="px-8 py-3 rounded-xl bg-slate-900 text-white font-semibold hover:bg-slate-800 transition-all shadow-lg shadow-slate-900/20">
                    Lihat Produk
                </a>
            </div>
        </div>
    </div>

    <div id="portfolio" class="py-20 px-4 sm:px-6 lg:px-8 bg-slate-50">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-end justify-between mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900">Showcase Produk</h2>
                    <p class="text-slate-500 mt-2">Daftar sistem yang telah kami kembangkan.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div onclick="openModal({{ json_encode($project) }})" 
                     class="group bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 cursor-pointer flex flex-col h-full ring-1 ring-slate-900/5">
                    
                    <div class="h-52 w-full bg-slate-100 relative overflow-hidden">
                        @if($project->image)
                            <img src="{{ $project->image }}" alt="{{ $project->name }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-500 to-indigo-600 text-white">
                                <i class="fa-solid fa-layer-group text-5xl opacity-40"></i>
                            </div>
                        @endif
                        
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/95 backdrop-blur text-xs font-bold text-blue-700 rounded-lg shadow-sm tracking-wide uppercase border border-blue-100">
                                {{ $project->category }}
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">
                            {{ $project->name }}
                        </h3>

                        <div class="flex flex-wrap gap-2 mb-4">
                            @if(is_array($project->tech_stack))
                                @foreach(array_slice($project->tech_stack, 0, 3) as $stack)
                                    <span class="text-[10px] font-bold px-2 py-1 bg-slate-100 text-slate-600 rounded-md border border-slate-200">
                                        {{ $stack }}
                                    </span>
                                @endforeach
                                @if(count($project->tech_stack) > 3)
                                    <span class="text-[10px] font-bold px-2 py-1 bg-slate-50 text-slate-400 rounded-md">+{{ count($project->tech_stack) - 3 }}</span>
                                @endif
                            @endif
                        </div>

                        <p class="text-slate-600 text-sm line-clamp-2 mb-6 leading-relaxed">
                            {{ $project->description }}
                        </p>

                        <div class="mt-auto pt-4 border-t border-slate-100 flex items-center justify-between">
                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500">
                                <span class="w-2 h-2 rounded-full {{ $project->demo_url && $project->demo_url != '#' ? 'bg-green-500' : 'bg-amber-500' }}"></span>
                                {{ $project->demo_url && $project->demo_url != '#' ? 'Live Demo' : 'Development' }}
                            </div>
                            <span class="text-blue-600 text-sm font-semibold group-hover:translate-x-1 transition-transform flex items-center gap-1">
                                Detail <i class="fa-solid fa-chevron-right text-xs"></i>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="projectModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm transition-opacity opacity-0" id="modalBackdrop"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                
                <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" id="modalPanel">
                    
                    <button onclick="closeModal()" class="absolute top-4 right-4 z-20 p-2 bg-black/20 hover:bg-black/40 rounded-full text-white transition-all backdrop-blur">
                        <i class="fa-solid fa-xmark w-6 h-6 flex items-center justify-center"></i>
                    </button>

                    <div class="h-64 w-full bg-slate-800 relative group">
                        <img id="modalImage" src="" alt="" class="w-full h-full object-cover opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                        <div class="absolute bottom-6 left-8 text-white">
                            <span id="modalCategory" class="px-2 py-1 bg-blue-600 rounded text-[10px] font-bold uppercase tracking-wider mb-2 inline-block shadow-lg shadow-blue-600/20">Category</span>
                            <h3 id="modalTitle" class="text-3xl font-bold tracking-tight">Project Title</h3>
                        </div>
                    </div>

                    <div class="px-8 py-8">
                        
                        <div id="modalStack" class="flex flex-wrap gap-2 mb-6"></div>

                        <div class="prose prose-slate prose-sm max-w-none mb-8">
                            <p id="modalDescription" class="leading-relaxed text-slate-600 text-base"></p>
                        </div>

                        <div class="bg-blue-50/50 rounded-xl p-6 border border-blue-100 mb-8">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="p-1.5 bg-blue-100 rounded text-blue-600">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wide">Akses Demo</h4>
                            </div>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="bg-white p-3 rounded-lg border border-slate-200 shadow-sm relative group">
                                    <label class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Username / Email</label>
                                    <div class="flex justify-between items-center">
                                        <code id="modalUser" class="text-slate-800 font-mono font-bold select-all text-sm">admin</code>
                                        <button onclick="copyText('modalUser')" class="text-slate-400 hover:text-blue-600 transition-colors">
                                            <i class="fa-regular fa-copy"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="bg-white p-3 rounded-lg border border-slate-200 shadow-sm relative group">
                                    <label class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Password</label>
                                    <div class="flex justify-between items-center">
                                        <code id="modalPass" class="text-slate-800 font-mono font-bold select-all text-sm">123456</code>
                                        <button onclick="copyText('modalPass')" class="text-slate-400 hover:text-blue-600 transition-colors">
                                            <i class="fa-regular fa-copy"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a id="modalLink" href="#" target="_blank" class="flex items-center justify-center w-full py-3.5 px-4 rounded-xl shadow-lg shadow-blue-600/20 bg-blue-600 text-white font-bold hover:bg-blue-700 transition-all transform hover:-translate-y-0.5 gap-2">
                            Buka Sistem <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white border-t border-slate-200 mt-12 py-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="mb-4 flex justify-center items-center gap-2">
                <div class="w-6 h-6 bg-slate-900 rounded flex items-center justify-center text-white text-xs font-bold">S</div>
                <span class="font-bold text-lg text-slate-900">SAT Project</span>
            </div>
            <p class="text-slate-500 text-sm">
                &copy; 2026 SAT Project. All rights reserved. <br>
                <span class="text-xs text-slate-400">Kediri, East Java, Indonesia</span>
            </p>
        </div>
    </footer>

    <script>
        const modal = document.getElementById('projectModal');
        const backdrop = document.getElementById('modalBackdrop');
        const panel = document.getElementById('modalPanel');

        function openModal(data) {
            document.getElementById('modalTitle').innerText = data.name;
            document.getElementById('modalCategory').innerText = data.category;
            document.getElementById('modalDescription').innerText = data.description;
            
            const imgEl = document.getElementById('modalImage');
            if(data.image) {
                imgEl.src = data.image;
            } else {
                imgEl.src = "https://ui-avatars.com/api/?name=" + data.name + "&background=2563eb&color=fff&size=512"; 
            }

            const stackContainer = document.getElementById('modalStack');
            stackContainer.innerHTML = '';
            if (data.tech_stack && Array.isArray(data.tech_stack)) {
                data.tech_stack.forEach(tech => {
                    stackContainer.innerHTML += `
                        <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-slate-100 text-slate-700 border border-slate-200">
                            ${tech}
                        </span>`;
                });
            }

            const user = data.demo_user || '-';
            const pass = data.demo_pass || '-';
            document.getElementById('modalUser').innerText = user;
            document.getElementById('modalPass').innerText = pass;
            
            const btnLink = document.getElementById('modalLink');
            if(data.demo_url && data.demo_url !== '#') {
                btnLink.href = data.demo_url;
                btnLink.classList.remove('opacity-50', 'pointer-events-none', 'bg-slate-400');
                btnLink.classList.add('bg-blue-600', 'hover:bg-blue-700');
                btnLink.innerHTML = 'Buka Sistem <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>';
            } else {
                btnLink.href = '#';
                btnLink.classList.remove('bg-blue-600', 'hover:bg-blue-700');
                btnLink.classList.add('opacity-50', 'pointer-events-none', 'bg-slate-400');
                btnLink.innerHTML = 'Demo Belum Tersedia';
            }

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent background scroll
            setTimeout(() => {
                backdrop.classList.remove('opacity-0');
                panel.classList.remove('opacity-0', 'translate-y-4', 'sm:translate-y-0', 'sm:scale-95');
                panel.classList.add('opacity-100', 'translate-y-0', 'sm:scale-100');
            }, 10);
        }

        function closeModal() {
            backdrop.classList.add('opacity-0');
            panel.classList.remove('opacity-100', 'translate-y-0', 'sm:scale-100');
            panel.classList.add('opacity-0', 'translate-y-4', 'sm:translate-y-0', 'sm:scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Restore scroll
            }, 300);
        }

        function copyText(elementId) {
            const text = document.getElementById(elementId).innerText;
            if(text === '-' || text === '') return;

            navigator.clipboard.writeText(text).then(() => {
                const btn = document.getElementById(elementId).nextElementSibling;
                const originalIcon = btn.innerHTML;
                
                btn.innerHTML = '<i class="fa-solid fa-check text-green-500"></i>';
                setTimeout(() => {
                    btn.innerHTML = originalIcon;
                }, 1500);
            });
        }

        modal.addEventListener('click', function(e) {
            if (e.target === backdrop) closeModal();
        });
    </script>
</body>
</html>