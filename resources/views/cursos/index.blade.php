@extends('layout.plantilla')

@section('title', 'Cursos')

@section('content')

<h1>Página listas de los cursos</h1>
<a href="{{ route('cursos.create') }}">Crear Curso</a>

<ul>
    @foreach ($cursos as $curso)
        <li><a href="{{ route('cursos.show', $curso->id) }}">{{ $curso->name }}</a></li>
    @endforeach
</ul>



@endsection