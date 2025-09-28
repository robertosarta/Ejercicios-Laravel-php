@extends('layout.main')

@section('title','Nuevo Juego')

@section('content')
    <div class = "container">
    <h1 class = "my-4">Agregar Nuevo Juego</h1>
        <form action = "{{ route('juegos.store') }}" method = "POST">
            @csrf
            <div class = "mb-3">
                <label class="form-label">Título</label>
                <input type="text" 
                    name="titulo" 
                    class="form-control"
                    value="{{ old('titulo') }}">
                @error('titulo')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" 
                    class="form-control"
                    value="{{ old('descripcion') }}">
                </textarea>
                @error('descripcion')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Año de lanzamiento</label>
                <input type="number" 
                    name="anio_lanzamiento" 
                    class="form-control"
                    value="{{ old('anio_lanzamiento') }}">
                @error('anio_lanzamiento')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tags</label>
                <select name="tags[]" 
                    class="form-control" 
                    multiple>
                    @foreach($tags as $tag)
                        <option value = "{{ $tag -> _id }}">
                            {{ $tag -> nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('juegos.index') }}" class="btn bg-warning text-dark mb-3">Volver</a>
        </form>
    </div>
@endsection