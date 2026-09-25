<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create(['title' => 'Pemrograman Web dengan Laravel', 'author' => 'Billy Ibrahim Hasbi', 'year' => 2024, 'stock' => 10]);
        Book::create(['title' => 'Belajar PHP Dasar', 'author' => 'Andi Wijaya', 'year' => 2023, 'stock' => 5]);
        Book::create(['title' => 'Mastering JavaScript', 'author' => 'Rina Marlina', 'year' => 2022, 'stock' => 0]);
        Book::create(['title' => 'Database MySQL untuk Pemula', 'author' => 'Dedi Pratama', 'year' => 2023, 'stock' => 3]);
        Book::create(['title' => 'Algoritma dan Struktur Data', 'author' => 'Siti Aminah', 'year' => 2021, 'stock' => 0]);
    }
}
