@extends('layout.main')

@section('title', 'Lista de juegos')

@section('content')
    <div class="container">
        <h1 class="my-4">Lista de Juegos</h1>
        <a href="{{ route('juegos.create') }}" class="btn btn-primary mb-3">Agregar Juego</a>
        <a href="{{ route('tags.index') }}" class="btn btn-primary mb-3">Lista de Tags</a>        
        <ul class="list-group">
            @foreach($juegos as $juego)
                <li class="list-group-item">
                    {{ $juego -> titulo }} - {{ $juego -> descripcion }}
                    <ul>
                        {{-- @foreach($juego -> tags() as $tag)
                            <li>{{ $tag -> nombre }}</li>                   Lo comente porque con esto no funcionaba
                        @endforeach --}}
                    </ul>
                    <form action="{{ route('juegos.delete', $juego->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection