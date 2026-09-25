@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <ul>
        @foreach ($books as $book)
            <li>
                <strong>{{ $book->title }}</strong> - {{ $book->author }} ({{ $book->year }}) |
                Stok: {{ $book->stock }}
                [{{ $book->stock > 0 ? 'Tersedia' : 'Stok Habis' }}]
            </li>
        @endforeach
    </ul>
@endsection
