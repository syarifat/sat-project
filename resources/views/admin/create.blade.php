<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Project - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Outfit', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen">

    <div class="max-w-4xl mx-auto px-6 py-12">
        <div class="mb-6 flex items-center gap-2 text-sm text-slate-500">
            <a href="{{ route('admin.projects.index') }}" class="hover:text-indigo-600"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            <span>/</span>
            <span class="text-slate-800 font-bold">Tambah Project Baru</span>
        </div>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                        <h3 class="font-bold text-lg mb-4 text-slate-800 border-b border-slate-100 pb-2">Informasi Dasar</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Sistem / Project</label>
                                <input type="text" name="name" required placeholder="Contoh: SIPREDI - Sistem Presensi" 
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all">
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Kategori</label>
                                    <input type="text" name="category" required placeholder="Web, Mobile, IoT" 
                                        class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Tech Stack</label>
                                    <input type="text" name="tech_stack" placeholder="Laravel, MySQL, Tailwind" 
                                        class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Lengkap</label>
                                <textarea name="description" rows="5" required placeholder="Jelaskan fitur dan kegunaan sistem ini..." 
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all"></textarea>
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
                                <input type="url" name="demo_url" placeholder="https://demo-project.com" 
                                    class="w-full px-4 py-2.5 rounded-r-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wide mb-1">Username</label>
                                <input type="text" name="demo_user" placeholder="admin" 
                                    class="w-full px-3 py-2 rounded-lg border border-slate-200 bg-slate-50 focus:bg-white focus:border-indigo-500 outline-none transition-all text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wide mb-1">Password</label>
                                <input type="text" name="demo_pass" placeholder="123456" 
                                    class="w-full px-3 py-2 rounded-lg border border-slate-200 bg-slate-50 focus:bg-white focus:border-indigo-500 outline-none transition-all text-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                        <h3 class="font-bold text-lg mb-4 text-slate-800">Visual Project</h3>
                        
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">URL Gambar / Cover</label>
                            <input type="url" name="image" placeholder="https://unsplash.com/..." 
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition-all text-sm">
                            <p class="text-xs text-slate-400 mt-2">Masukkan link gambar langsung (Direct Link).</p>
                        </div>
                    </div>

                    <div class="bg-indigo-50 p-6 rounded-2xl border border-indigo-100">
                        <h3 class="font-bold text-indigo-900 mb-2">Simpan Data?</h3>
                        <p class="text-indigo-700/80 text-sm mb-4">Pastikan semua data sudah benar sebelum menyimpan.</p>
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-xl shadow-lg shadow-indigo-600/30 transition-all transform hover:-translate-y-1">
                            <i class="fa-solid fa-save mr-2"></i> Simpan Project
                        </button>
                        <a href="{{ route('admin.projects.index') }}" class="block text-center mt-3 text-sm text-indigo-600 font-semibold hover:underline">Batal</a>
                    </div>
                </div>

            </div>
        </form>
    </div>

</body>
</html>