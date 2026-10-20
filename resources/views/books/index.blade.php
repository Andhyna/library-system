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
                ID: {{ $book->id }}<br>
                Judul: {{ $book->title }}<br>
                Penulis: {{ $book->author }}<br>
                Tahun Terbit: {{ $book->year }}<br>
                Stok: {{ $book->stock }}<br>
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
