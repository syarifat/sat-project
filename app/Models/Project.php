<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 
        'category', 
        'description', 
        'image',        // Tambahan
        'tech_stack',   // Tambahan
        'demo_url', 
        'demo_user', 
        'demo_pass'
    ];

    // Tambahkan casting agar tech_stack otomatis jadi Array saat diambil
    protected $casts = [
        'tech_stack' => 'array',
    ];
}
