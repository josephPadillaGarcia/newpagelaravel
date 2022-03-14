@extends('layout.plantilla')

@section('title', 'Cursos')

@section('content')

<h1>Página listas de los cursos</h1>

<ul>
    <li><a href="{{ route('cursos.create') }}">Crear Curso</a></li>
</ul>

@endsection