<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SAT Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Outfit', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800">

    <nav class="bg-white border-b border-slate-200 px-8 py-4 flex justify-between items-center sticky top-0 z-30">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center text-white font-bold">A</div>
            <span class="font-bold text-xl tracking-tight">Admin<span class="text-indigo-600">Panel</span></span>
        </div>
        <div class="flex items-center gap-4">
            <a href="{{ route('home') }}" class="text-sm font-medium text-slate-500 hover:text-indigo-600 transition-colors">
                <i class="fa-solid fa-globe mr-1"></i> Lihat Website
            </a>
            <div class="w-8 h-8 rounded-full bg-slate-200 overflow-hidden border border-slate-300">
                <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="Admin" class="w-full h-full">
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-8 py-10">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Manajemen Project</h1>
                <p class="text-slate-500 text-sm mt-1">Kelola portofolio dan produk digital Anda.</p>
            </div>
            <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 px-5 rounded-xl shadow-lg shadow-indigo-600/20 transition-all transform hover:-translate-y-0.5">
                <i class="fa-solid fa-plus mr-2"></i> Tambah Project
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6 flex items-center gap-3">
                <i class="fa-solid fa-circle-check text-xl"></i>
                <div>
                    <span class="font-bold">Berhasil!</span> {{ $message }}
                </div>
            </div>
        @endif

        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200 text-xs uppercase text-slate-500 font-bold tracking-wider">
                            <th class="px-6 py-4">Nama Project</th>
                            <th class="px-6 py-4">Kategori</th>
                            <th class="px-6 py-4">Tech Stack</th>
                            <th class="px-6 py-4">Status Demo</th>
                            <th class="px-6 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($projects as $project)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-slate-100 overflow-hidden flex-shrink-0 border border-slate-200">
                                        @if($project->image)
                                            <img src="{{ $project->image }}" class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center text-slate-400"><i class="fa-solid fa-image"></i></div>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="font-bold text-slate-900">{{ $project->name }}</div>
                                        <div class="text-xs text-slate-400 truncate max-w-[150px]">{{ Str::limit($project->description, 30) }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 rounded-md text-xs font-bold bg-blue-50 text-blue-600 border border-blue-100">
                                    {{ $project->category }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-wrap gap-1">
                                    @if(is_array($project->tech_stack))
                                        @foreach(array_slice($project->tech_stack, 0, 2) as $stack)
                                            <span class="text-[10px] bg-slate-100 text-slate-600 px-2 py-0.5 rounded border border-slate-200">{{ $stack }}</span>
                                        @endforeach
                                        @if(count($project->tech_stack) > 2)
                                            <span class="text-[10px] text-slate-400">+{{ count($project->tech_stack) - 2 }}</span>
                                        @endif
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @if($project->demo_url && $project->demo_url != '#')
                                    <a href="{{ $project->demo_url }}" target="_blank" class="text-xs font-semibold text-green-600 hover:text-green-700 flex items-center gap-1">
                                        <i class="fa-solid fa-link"></i> Active
                                    </a>
                                @else
                                    <span class="text-xs font-semibold text-slate-400 flex items-center gap-1">
                                        <i class="fa-solid fa-lock"></i> No Link
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 hover:bg-amber-100 flex items-center justify-center transition-colors" title="Edit">
                                        <i class="fa-solid fa-pen text-sm"></i>
                                    </a>
                                    
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-100 flex items-center justify-center transition-colors" title="Hapus">
                                            <i class="fa-solid fa-trash text-sm"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 text-center text-slate-500">
                                <div class="flex flex-col items-center justify-center">
                                    <i class="fa-regular fa-folder-open text-4xl mb-3 text-slate-300"></i>
                                    <p>Belum ada project yang ditambahkan.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>