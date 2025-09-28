@extends('layout.main')

@section('title', 'Gestión de Documentos')

@section('content')
    <div class="container-mt-5">
        <h2>Gestión de Documentos</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('archivo.subir') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="archivo">
            <button type="submit" class="btn btn-primary">Subir Archivo</button>
        </form>

        <h3>Archivos Subidos</h3>
        <ul>
            @foreach ($archivos as $archivo)
                <li>
                    {{ basename($archivo) }}
                    <a href="{{ route('archivo.descargar', basename($archivo)) }}" class="btn btn-success btn-sm">Descargar</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection