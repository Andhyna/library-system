@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h2>Detail Buku - ID: {{ $id }}</h2>
    <p><a href="/books">&larr; Kembali ke Daftar Buku</a></p>
@endsection
