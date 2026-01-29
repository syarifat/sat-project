<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'name' => 'KaSiPay',
                'category' => 'Pengembangan Web',
                'image' => 'https://images.unsplash.com/photo-1647427017067-8f33ccbae493?q=80&w=870&auto=format&fit=crop',
                'description' => 'Sistem pembayaran kantin non-tunai menggunakan teknologi RFID untuk mempercepat transaksi, menyederhanakan manajemen saldo, dan meningkatkan efisiensi operasional di sekolah.',
                'tech_stack' => ["Laravel", "Javascript", "MySQL"],
                'demo_url' => 'https://kelompok3.karyabersama.online/',
                'demo_user' => null,
                'demo_pass' => null,
            ],
            [
                'name' => 'siPredi',
                'category' => 'Pengembangan Web',
                'image' => 'https://images.unsplash.com/photo-1747674148491-51f8a5c723db?q=80&w=866&auto=format&fit=crop',
                'description' => 'Sistem presensi siswa cerdas yang memanfaatkan teknologi RFID untuk pelacakan waktu nyata, terintegrasi dengan notifikasi WhatsApp otomatis bagi orang tua/wali.',
                'tech_stack' => ["Laravel", "Javascript", "MySQL"],
                'demo_url' => 'https://vercel-siprediv2.vercel.app/',
                'demo_user' => null,
                'demo_pass' => null,
            ],
            [
                'name' => 'Sistem Penggajian Otomatis',
                'category' => 'Pengembangan Web',
                'image' => 'https://images.unsplash.com/photo-1711606815631-38d32cdaec3e?q=80&w=870&auto=format&fit=crop',
                'description' => 'Sistem manajemen penggajian efisien yang secara otomatis menghitung gaji dan menerapkan potongan atas kesalahan kerja untuk menjaga standar kinerja.',
                'tech_stack' => ["Laravel", "Javascript", "MySQL"],
                'demo_url' => 'https://sistem-penggajian.vercel.app/',
                'demo_user' => null,
                'demo_pass' => null,
            ],
            [
                'name' => 'Inventory Gudang',
                'category' => 'Pengembangan Web',
                'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=870&auto=format&fit=crop',
                'description' => 'Sistem ini mengelola inventaris, transaksi barang, data pelanggan dan pemasok, satuan, jenis barang, dan peran pengguna di gudang terpusat.',
                'tech_stack' => ["Laravel", "Javascript", "MySQL"],
                'demo_url' => 'https://inventorygudang.vercel.app/',
                'demo_user' => null,
                'demo_pass' => null,
            ],
            [
                'name' => 'Proyek IoT Dummy',
                'category' => 'Pengembangan IoT',
                'image' => 'https://images.unsplash.com/photo-1614846027182-cecfee3a427b?q=80&w=870&auto=format&fit=crop',
                'description' => 'Contoh deskripsi proyek untuk pengembangan IoT dan integrasi perangkat keras.',
                'tech_stack' => ["C++", "PHP", "MySQL"],
                'demo_url' => '#',
                'demo_user' => null,
                'demo_pass' => null,
            ],
            [
                'name' => 'Aplikasi Android Dummy',
                'category' => 'Pengembangan Android',
                'image' => 'https://images.unsplash.com/photo-1480694313141-fce5e697ee25?q=80&w=870&auto=format&fit=crop',
                'description' => 'Contoh deskripsi aplikasi mobile berbasis Android menggunakan Kotlin.',
                'tech_stack' => ["Kotlin", "PHP", "MySQL"],
                'demo_url' => '#',
                'demo_user' => null,
                'demo_pass' => null,
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}