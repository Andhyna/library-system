@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <ul>
        @foreach ($books as $book)
            <li>
                <strong>{{ $book->title }}</strong><br>
                Penulis: {{ $book->author }}<br>
                Stok: {{ $book->stock }}
            </li>
        @endforeach
    </ul>
@endsection
