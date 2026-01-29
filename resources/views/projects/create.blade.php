<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah Project Baru</title>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-8">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Project Baru</h2>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Sistem</label>
                <input type="text" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Contoh: SIPREDI">
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Kategori</label>
                <input type="text" name="category" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Contoh: IoT, Fintech">
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Singkat</label>
            <textarea name="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Link Demo URL</label>
            <input type="url" name="demo_url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="https://...">
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6 bg-gray-50 p-4 rounded-lg border border-gray-200">
            <div>
                <label class="block text-gray-700 text-xs font-bold mb-1 uppercase">Demo Username/Email</label>
                <input type="text" name="demo_user" class="w-full px-3 py-2 border bg-white rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label class="block text-gray-700 text-xs font-bold mb-1 uppercase">Demo Password</label>
                <input type="text" name="demo_pass" class="w-full px-3 py-2 border bg-white rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="flex items-center justify-end gap-3">
            <a href="{{ route('projects.index') }}" class="text-gray-500 hover:text-gray-800 font-semibold">Batal</a>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
                Simpan Project
            </button>
        </div>
    </form>
</div>

</body>
</html>