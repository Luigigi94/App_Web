@extends('layout')
@section('title', "Usuario {$id}")
@section('content')

        <h1>Usuarios detalle {{$id}}</h1>

        "Mostrando detalles de: {{$id}}"
@endsection

@section('sidebar')
@parent
@endsection