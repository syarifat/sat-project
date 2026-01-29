<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Halaman Depan (Public Landing Page)
    public function home()
    {
        $projects = Project::latest()->get();
        return view('welcome', compact('projects'));
    }

    // Tampilan List Admin (Read)
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    // Tampilan Form Tambah (Create)
    public function create()
    {
        return view('projects.create');
    }

    // Proses Simpan Data (Store)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        $data = $request->all();

        // Konversi string "Laravel, PHP" menjadi Array ["Laravel", "PHP"]
        if ($request->filled('tech_stack')) {
            $data['tech_stack'] = array_map('trim', explode(',', $request->tech_stack));
        } else {
            $data['tech_stack'] = [];
        }

        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Project berhasil ditambahkan!');
    }

    // Tampilan Form Edit (Edit)
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // Proses Update Data (Update)
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        $data = $request->all();

        // Konversi string "Laravel, PHP" menjadi Array ["Laravel", "PHP"]
        if ($request->filled('tech_stack')) {
            // Cek jika input berupa string (dari form), baru di-explode
            if (is_string($request->tech_stack)) {
                $data['tech_stack'] = array_map('trim', explode(',', $request->tech_stack));
            }
        } else {
            $data['tech_stack'] = [];
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project berhasil diupdate!');
    }

    // Proses Hapus (Delete)
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project dihapus.');
    }
}