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
        return view('services.products', compact('projects'));
    }

    public function joki()
    {
        // Data langsung di view
        return view('services.joki');
    }

    public function network()
    {
        // Data langsung di view
        return view('services.network');
    }
}