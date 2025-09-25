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
                <input type="file" name="archivo">
                <button type="submit" class="btn btn-primary">Subir Documento</button>
            </form>

            <h3>Documentos Subidos</h3>
            <ul>
                @foreach($archivos as $archivo)
                    <li>
                        {{ basename($archivo) }}
                        <a href="{{ route('documentos.descargar', basename($archivo)) }}" class="btn btn-success btn-sm">Descargar</a>
                    </li>
                @endforeach
            </ul>
    </div>
@endsection