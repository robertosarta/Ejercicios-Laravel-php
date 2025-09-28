@extends('layout.main')

@section('title','Nuevo Tag')

@section('content')
    <div class = "container">
    <h1 class = "my-4">Agregar Nuevo Tag</h1>
        <form action = "{{ route('tags.store') }}" method = "POST">
            @csrf
            <div class = "mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" 
                    name="nombre" 
                    class="form-control"
                    value="{{ old('nombre') }}">
                @error('nombre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror                
            </div>            
            <button type = "submit" class = "btn btn-success">Guardar</button>
            <a href="{{ route('tags.index') }}" class="btn bg-warning text-dark mb-3">Volver</a>
        </form>
    </div>
@endsection