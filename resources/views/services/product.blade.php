@extends('layouts.app')

@section('title', 'Katalog Produk Digital - SAT Project')

@section('content')
<div class="bg-slate-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <span class="text-blue-600 font-bold tracking-wider uppercase text-xs bg-blue-100 px-3 py-1 rounded-full border border-blue-200">
                Portfolio & Store
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 mt-4 mb-4">
                Showcase <span class="text-blue-600">Produk Digital</span>
            </h1>
            <p class="text-slate-500 max-w-2xl mx-auto text-lg">
                Jelajahi berbagai sistem yang telah kami kembangkan. Klik pada kartu proyek untuk melihat detail login dan demo aplikasi.
            </p>
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
                        @if(is_array($project->tech_stack) || is_object($project->tech_stack))
                            @foreach(array_slice((array)$project->tech_stack, 0, 3) as $stack)
                                <span class="text-[10px] font-bold px-2 py-1 bg-slate-100 text-slate-600 rounded-md border border-slate-200">
                                    {{ $stack }}
                                </span>
                            @endforeach
                            @if(count((array)$project->tech_stack) > 3)
                                <span class="text-[10px] font-bold px-2 py-1 bg-slate-50 text-slate-400 rounded-md">+{{ count((array)$project->tech_stack) - 3 }}</span>
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

<div id="projectModal" class="fixed inset-0 z-[60] hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                                    <code id="modalUser" class="text-slate-800 font-mono font-bold select-all text-sm">-</code>
                                    <button onclick="copyText('modalUser')" class="text-slate-400 hover:text-blue-600 transition-colors">
                                        <i class="fa-regular fa-copy"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="bg-white p-3 rounded-lg border border-slate-200 shadow-sm relative group">
                                <label class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Password</label>
                                <div class="flex justify-between items-center">
                                    <code id="modalPass" class="text-slate-800 font-mono font-bold select-all text-sm">-</code>
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
@endsection

@push('scripts')
<script>
    const modal = document.getElementById('projectModal');
    const backdrop = document.getElementById('modalBackdrop');
    const panel = document.getElementById('modalPanel');

    function openModal(data) {
        // Isi Data Text
        document.getElementById('modalTitle').innerText = data.name;
        document.getElementById('modalCategory').innerText = data.category;
        document.getElementById('modalDescription').innerText = data.description;
        
        // Isi Gambar (Pakai Placeholder jika kosong)
        const imgEl = document.getElementById('modalImage');
        if(data.image) {
            imgEl.src = data.image;
        } else {
            imgEl.src = "https://ui-avatars.com/api/?name=" + data.name + "&background=2563eb&color=fff&size=512"; 
        }

        // Isi Tech Stack
        const stackContainer = document.getElementById('modalStack');
        stackContainer.innerHTML = '';
        // Pastikan data tech_stack berupa array (jika string JSON, di-parse dulu kalau perlu, tapi biasanya Laravel cast otomatis)
        let stacks = data.tech_stack;
        if (typeof stacks === 'string') {
            try { stacks = JSON.parse(stacks); } catch(e) { stacks = []; }
        }
        
        if (Array.isArray(stacks)) {
            stacks.forEach(tech => {
                stackContainer.innerHTML += `
                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-slate-100 text-slate-700 border border-slate-200">
                        ${tech}
                    </span>`;
            });
        }

        // Isi Akses Demo
        const user = data.demo_user || '-';
        const pass = data.demo_pass || '-';
        document.getElementById('modalUser').innerText = user;
        document.getElementById('modalPass').innerText = pass;
        
        // Logic Tombol Demo
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

        // Tampilkan Modal dengan Animasi
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Matikan scroll body
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
            document.body.style.overflow = 'auto'; // Hidupkan scroll body lagi
        }, 300);
    }

    // Fungsi Copy Text (User/Pass)
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

    // Tutup modal jika klik di luar area konten (backdrop)
    modal.addEventListener('click', function(e) {
        if (e.target === backdrop) closeModal();
    });
</script>
@endpush