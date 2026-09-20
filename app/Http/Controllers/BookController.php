<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'id' => 1,
                'judul' => 'Pemrograman Web dengan Laravel',
                'penulis' => 'Billy Ibrahim Hasbi',
                'tahun_terbit' => 2024,
                'stok' => 10,
            ],
            [
                'id' => 2,
                'judul' => 'Belajar PHP Dasar',
                'penulis' => 'Andi Wijaya',
                'tahun_terbit' => 2023,
                'stok' => 5,
            ],
            [
                'id' => 3,
                'judul' => 'Mastering JavaScript',
                'penulis' => 'Rina Marlina',
                'tahun_terbit' => 2022,
                'stok' => 0,
            ],
            [
                'id' => 4,
                'judul' => 'Database MySQL untuk Pemula',
                'penulis' => 'Dedi Pratama',
                'tahun_terbit' => 2023,
                'stok' => 3,
            ],
            [
                'id' => 5,
                'judul' => 'Algoritma dan Struktur Data',
                'penulis' => 'Siti Aminah',
                'tahun_terbit' => 2021,
                'stok' => 0,
            ],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}