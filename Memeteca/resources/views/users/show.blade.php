@extends('layout')
@section('title', "Usuario {$user->id}")
@section('content')

    <h1>Usuarios detalle {{$user->id}}</h1>

    "Mostrando detalles de: {{$user->id}}"

    <p>Nick: {{$user->name}}</p>
    <p>E-mail: {{ $user->email }}</p>
    <p>Nombre: {{$user->Nombre_Real}}</p>
    <p>Edad: {{ $user->Edad }}</p>
    
    <p>
        <a href="{{ route('users') }}">Retacher</a>
    </p>
@endsection

@section('sidebar')
    @parent
@endsection