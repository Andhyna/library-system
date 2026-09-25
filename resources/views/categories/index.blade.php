@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
    <h2>Daftar Kategori</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['nama'] }}</td>
                    <td>{{ $category['deskripsi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection