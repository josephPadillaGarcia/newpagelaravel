@extends('layout.plantilla')

@section('title', 'Curso '.$curso->name)

@section('content')

<h1>Bienvenido a la página de {{ $curso->name }}</h1>
<p><strong>Categoria:</strong> {{ $curso->categoria }}</p>
<p><strong>Descripcion:</strong> {{ $curso->descripcion }}</p>

@endsection
