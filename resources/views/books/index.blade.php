@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <p><a href="{{ route('books.create') }}">Tambah Buku</a></p>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($books as $book)
            <li>
                <h3>{{ $book->title }}</h3>
                <p>ID: {{ $book->id }}</p>
                <p>Penulis: {{ $book->author }}</p>
                <p>Kategori: {{ $book->category?->name ?? 'Belum ada kategori' }}</p>
                <p>Tahun Terbit: {{ $book->year }}</p>
                <p>Stok: {{ $book->stock }}</p>
                <a href="{{ route('books.edit', $book) }}">Edit Buku</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus Buku</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
