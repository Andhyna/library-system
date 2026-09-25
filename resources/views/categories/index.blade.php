@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
    <h2>Daftar Kategori</h2>
    <ul>
        @foreach ($categories as $category)
            <li>
                <strong>{{ $category['nama'] }}</strong>: {{ $category['deskripsi'] }}
            </li>
        @endforeach
    </ul>
@endsection