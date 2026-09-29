@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <ul>
        @foreach ($books as $book)
            <li>
                ID: {{ $book->id }}<br>
                Judul: {{ $book->title }}<br>
                Penulis: {{ $book->author }}<br>
                Tahun Terbit: {{ $book->year }}<br>
                Stok: {{ $book->stock }}
            </li>
        @endforeach
    </ul>
@endsection
