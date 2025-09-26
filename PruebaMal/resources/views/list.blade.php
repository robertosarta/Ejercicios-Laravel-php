@extends('layout.main')

@section('content')
    <h1>Listado</h1>
    <ul>
        @foreach($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection