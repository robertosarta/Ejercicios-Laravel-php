@extends('layout.main')

@section('title', 'Lista de tags')

@section('content')
    <div class="container">
        <h1 class="my-4">Lista de Tags</h1>
        <a href="{{ route('tags.create') }}" class="btn btn-primary mb-3">Agregar Tag</a>
        <a href="{{ route('juegos.index') }}" class="btn btn-primary mb-3">Lista de Juegos</a>  
        <ul class="list-group">
            @foreach($tags as $tag)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $tag->nombre }}
                    <form action="{{ route('tags.delete', $tag->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection