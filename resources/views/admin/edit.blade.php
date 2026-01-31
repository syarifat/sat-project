<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Project: {{ $project->name }}</title>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit Project</h2>
        <a href="{{ route('projects.index') }}" class="text-sm text-gray-500 hover:text-indigo-600">Kembali ke List</a>
    </div>

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT') <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Sistem</label>
                <input type="text" name="name" 
                       value="{{ old('name', $project->name) }}"
                       class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Kategori</label>
                <input type="text" name="category" 
                       value="{{ old('category', $project->category) }}"
                       class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">URL Gambar (Image Link)</label>
            <div class="flex gap-4 items-start">
                <div class="flex-grow">
                    <input type="url" name="image" 
                           value="{{ old('image', $project->image) }}"
                           placeholder="https://..."
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <p class="text-xs text-gray-500 mt-1">Gunakan link gambar dari Unsplash atau hosting lain.</p>
                </div>
                @if($project->image)
                    <div class="w-20 h-20 flex-shrink-0">
                        <img src="{{ $project->image }}" alt="Preview" class="w-full h-full object-cover rounded border border-gray-300">
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Tech Stack</label>
            <input type="text" name="tech_stack" 
                   value="{{ old('tech_stack', is_array($project->tech_stack) ? implode(', ', $project->tech_stack) : $project->tech_stack) }}"
                   placeholder="Contoh: Laravel, MySQL, Tailwind (Pisahkan dengan koma)"
                   class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <p class="text-xs text-gray-500 mt-1">Pisahkan teknologi dengan koma (,)</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Singkat</label>
            <textarea name="description" rows="4" 
                      class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Link Demo URL</label>
            <input type="url" name="demo_url" 
                   value="{{ old('demo_url', $project->demo_url) }}"
                   class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 bg-gray-50 p-4 rounded-lg border border-gray-200">
            <div>
                <label class="block text-gray-700 text-xs font-bold mb-1 uppercase">Demo Username/Email</label>
                <input type="text" name="demo_user" 
                       value="{{ old('demo_user', $project->demo_user) }}"
                       class="w-full px-3 py-2 border bg-white rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label class="block text-gray-700 text-xs font-bold mb-1 uppercase">Demo Password</label>
                <input type="text" name="demo_pass" 
                       value="{{ old('demo_pass', $project->demo_pass) }}"
                       class="w-full px-3 py-2 border bg-white rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="flex items-center justify-end gap-3">
            <a href="{{ route('projects.index') }}" class="text-gray-500 hover:text-gray-800 font-semibold">Batal</a>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
                Update Project
            </button>
        </div>
    </form>
</div>

</body>
</html>