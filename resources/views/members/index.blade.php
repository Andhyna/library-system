@extends('layouts.app')

@section('title', 'Daftar Member')

@section('content')
    <h2>Daftar Member</h2>
    <ul>
        @foreach ($members as $member)
            <li>
                <strong>{{ $member['nama'] }}</strong> - {{ $member['email'] }} ({{ $member['no_hp'] }})
            </li>
        @endforeach
    </ul>
@endsection