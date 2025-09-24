@extends('layout.main')

@section('content')
    <h1>Listado de Deportes</h1>
    <ul>
        @foreach($sports as $sport)
            <li>{{ $sport }}</li>
        @endforeach
    </ul>
@endsection