<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function products()
    {
        $projects = Project::latest()->get();
        // PERBAIKAN: Sesuai screenshot, nama filenya 'product.blade.php' (tanpa s)
        return view('services.product', compact('projects'));
    }

    public function joki()
    {
        return view('services.joki');
    }

    public function network()
    {
        return view('services.network');
    }
}