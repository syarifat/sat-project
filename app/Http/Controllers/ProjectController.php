<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Tampilan List Admin (Read)
    public function index()
    {
        $projects = Project::latest()->get();
        // PERBAIKAN: Arahkan ke folder views/admin/index.blade.php
        return view('admin.index', compact('projects'));
    }

    // Tampilan Form Tambah (Create)
    public function create()
    {
        // PERBAIKAN: Arahkan ke folder views/admin/create.blade.php
        return view('admin.create');
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

        // Konversi string "Laravel, PHP" menjadi Array
        if ($request->filled('tech_stack')) {
            $data['tech_stack'] = array_map('trim', explode(',', $request->tech_stack));
        } else {
            $data['tech_stack'] = [];
        }

        Project::create($data);

        // Redirect ke route admin index
        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan!');
    }

    // Tampilan Form Edit (Edit)
    public function edit(Project $project)
    {
        // PERBAIKAN: Arahkan ke folder views/admin/edit.blade.php
        return view('admin.edit', compact('project'));
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

        if ($request->filled('tech_stack')) {
            if (is_string($request->tech_stack)) {
                $data['tech_stack'] = array_map('trim', explode(',', $request->tech_stack));
            }
        } else {
            $data['tech_stack'] = [];
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diupdate!');
    }

    // Proses Hapus (Delete)
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project dihapus.');
    }
}