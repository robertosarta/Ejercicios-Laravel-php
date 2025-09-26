@extends('layout.main')

@section('title', 'Gestion de Documentos')

@section('content')
    <div class="container-mt-5" style="background-color:darkgray">
        <h2>Gestion de Documentos</h2>
            
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('documentos.subir') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="archivo" required>
                <button type="submit" class="btn btn-primary">Subir Documento</button>
            </form>

            <h3>Documentos Subidos</h3>
            <ul>
                @foreach($archivos as $archivo)
                    <li style="padding: 0.2rem">
                        {{ basename($archivo) }}
                        <a href="{{ route('documentos.descargar', basename($archivo)) }}" class="btn btn-success btn-sm">Descargar</a>

                        <form action="{{ route('documentos.borrar', basename($archivo)) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas borrar el archivo?')">
                                Borrar
                            </button>
                    </li>
                @endforeach
            </ul>
    </div>
@endsection