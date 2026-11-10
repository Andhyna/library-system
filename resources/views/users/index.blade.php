@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
    <h2>Kelola Pengguna</h2>

    <ul>
        @foreach ($users as $user)
            <li>
                <strong>{{ $user->name }}</strong> ({{ $user->email }}) - Role: {{ $user->role }}
            </li>
        @endforeach
    </ul>
@endsection
