@extends('layout')
@section('title','Usuarios')
@section('content')
    <h1>{{ $title }}</h1>

    <ul>
        @forelse($users as $user)
            <li>{{ $user }}</li>
        @empty
            <li>No hay usuarios Registrados</li>
        @endforelse
    </ul>
@endsection

@section('sidebar')
    @parent
    <h2>Orales</h2>
    <p>Utilizando el parametro "@paren,t" para escribir: orales</p>
@endsection