@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h2>{{ $book->title }}</h2>
    <p>Penulis: {{ $book->author }}</p>
    <p>Tahun Terbit: {{ $book->year }}</p>
    <p>Stok: {{ $book->stock }}</p>
    <p><a href="/books">&larr; Kembali ke Daftar Buku</a></p>
@endsection
