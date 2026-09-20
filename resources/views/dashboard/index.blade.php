@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $app['judul'] }}</h2>
    <p>{{ $app['deskripsi'] }}</p>

    <h3 style="margin-top: 30px;">Statistik</h3>
    <div class="stat-box">
        <h3>{{ $statistik['jumlah_buku'] }}</h3>
        <p>Total Buku</p>
    </div>
    <div class="stat-box">
        <h3>{{ $statistik['jumlah_kategori'] }}</h3>
        <p>Total Kategori</p>
    </div>
    <div class="stat-box">
        <h3>{{ $statistik['jumlah_member'] }}</h3>
        <p>Total Member</p>
    </div>
@endsection
