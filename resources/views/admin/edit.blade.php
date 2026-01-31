<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Outfit', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen">

    <div class="max-w-4xl mx-auto px-6 py-12">
        <div class="mb-6 flex items-center justify-between">
            <div class="flex items-center gap-2 text-sm text-slate-500">
                <a href="{{ route('admin.projects.index') }}" class="hover:text-indigo-600"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                <span>/</span>
                <span class="text-slate-800 font-bold">Edit Project</span>
            </div>
            
            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Hapus project ini?');">
                @csrf @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-bold bg-red-50 px-3 py-1.5 rounded-lg border border-red-100 transition-colors">
                    <i class="fa-solid fa-trash mr-1"></i> Hapus
                </button>
            </form>
        </div>

        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                        <h3 class="font-bold text-lg mb-4 text-slate-800 border-b border-slate-100 pb-2">Edit Informasi</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Sistem / Project</label>
                                <input type="text" name="name" required value="{{ old('name', $project->name) }}"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all">
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Kategori</label>
                                    <input type="text" name="category" required value="{{ old('category', $project->category) }}"
                                        class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Tech Stack</label>
                                    <input type="text" name="tech_stack" value="{{ old('tech_stack', is_array($project->tech_stack) ? implode(', ', $project->tech_stack) : $project->tech_stack) }}"
                                        class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Lengkap</label>
                                <textarea name="description" rows="5" required
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all">{{ old('description', $project->description) }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                        <h3 class="font-bold text-lg mb-4 text-slate-800 border-b border-slate-100 pb-2">Akses & Demo</h3>
                        
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Link Demo URL</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 rounded-l-xl border border-r-0 border-slate-300 bg-slate-50 text-slate-500 text-sm">
                                    <i class="fa-solid fa-link"></i>
                                </span>
                                <input type="url" name="demo_url" value="{{ old('demo_url', $project->demo_url) }}"
                                    class="w-full px-4 py-2.5 rounded-r-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wide mb-1">Username</label>
                                <input type="text" name="demo_user" value="{{ old('demo_user', $project->demo_user) }}"
                                    class="w-full px-3 py-2 rounded-lg border border-slate-200 bg-slate-50 focus:bg-white focus:border-indigo-500 outline-none transition-all text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wide mb-1">Password</label>
                                <input type="text" name="demo_pass" value="{{ old('demo_pass', $project->demo_pass) }}"
                                    class="w-full px-3 py-2 rounded-lg border border-slate-200 bg-slate-50 focus:bg-white focus:border-indigo-500 outline-none transition-all text-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                        <h3 class="font-bold text-lg mb-4 text-slate-800">Visual Project</h3>
                        
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-slate-700 mb-2">URL Gambar</label>
                            <input type="url" name="image" value="{{ old('image', $project->image) }}"
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all text-sm">
                        </div>

                        @if($project->image)
                            <div class="rounded-xl overflow-hidden border border-slate-200 relative group">
                                <img src="{{ $project->image }}" class="w-full h-40 object-cover">
                                <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-xs font-bold">Preview Saat Ini</span>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="bg-indigo-50 p-6 rounded-2xl border border-indigo-100 sticky top-6">
                        <h3 class="font-bold text-indigo-900 mb-2">Simpan Perubahan?</h3>
                        <p class="text-indigo-700/80 text-sm mb-4">Data akan langsung terupdate di halaman portfolio.</p>
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-xl shadow-lg shadow-indigo-600/30 transition-all transform hover:-translate-y-1">
                            <i class="fa-solid fa-floppy-disk mr-2"></i> Update Project
                        </button>
                        <a href="{{ route('admin.projects.index') }}" class="block text-center mt-3 text-sm text-indigo-600 font-semibold hover:underline">Batal</a>
                    </div>
                </div>

            </div>
        </form>
    </div>

</body>
</html>