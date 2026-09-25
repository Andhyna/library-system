@extends('layouts.app')

@section('title', 'Daftar Member')

@section('content')
    <h2>Daftar Member</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member['id'] }}</td>
                    <td>{{ $member['nama'] }}</td>
                    <td>{{ $member['email'] }}</td>
                    <td>{{ $member['no_hp'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection