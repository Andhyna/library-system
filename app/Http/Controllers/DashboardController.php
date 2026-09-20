<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $app = [
            'judul' => 'Sistem Informasi Perpustakaan',
            'deskripsi' => 'Sistem informasi untuk mengelola data buku, kategori, dan member perpustakaan secara terpusat.',
        ];

        $statistik = [
            'jumlah_buku' => 5,
            'jumlah_kategori' => 5,
            'jumlah_member' => 5,
        ];

        return view('dashboard.index', compact('app', 'statistik'));
    }
}
