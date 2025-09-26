@extends('layout.main')

@section('title', 'Formulario de contacto')

@section('content')
    <div class="container-mt-5" style="padding:1rem; background-color:#1f2937; color:white; border-radious: 0.3125rem">
        <h2>Formulario</h2>

        @if(session ('success'))
            <div class="alert-success">{{session ('success')}}</div>
        @endif

        <form action="{{route ('form.make')}}" method="POST">
            @csrf {{--para proteccion csrf--}}

            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text"
                    name = "name"
                    class = "form-control"
                    value = "{{ old('name') }}"
                >
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Apellidos:</label>
                <input type="text"
                    name = "lastName"
                    class = "form-control"
                    value = "{{ old('lastName') }}"
                >
                @error('lastName')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Edad:</label>
                <input type="text"
                    name = "age"
                    class = "form-control"
                    value = "{{ old('age') }}"
                >
                @error('age')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
