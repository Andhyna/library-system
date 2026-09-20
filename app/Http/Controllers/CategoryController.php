<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            ['id' => 1, 'nama' => 'Teknologi Informasi', 'deskripsi' => 'Buku seputar pemrograman dan komputer.'],
            ['id' => 2, 'nama' => 'Sains', 'deskripsi' => 'Buku tentang ilmu pengetahuan alam.'],
            ['id' => 3, 'nama' => 'Sastra', 'deskripsi' => 'Karya sastra dan novel.'],
            ['id' => 4, 'nama' => 'Sejarah', 'deskripsi' => 'Buku tentang peristiwa sejarah.'],
            ['id' => 5, 'nama' => 'Biografi', 'deskripsi' => 'Kisah hidup tokoh terkenal.'],
        ];

        return view('categories.index', compact('categories'));
    }
}