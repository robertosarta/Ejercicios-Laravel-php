@extends('layout.main')

@section('content')
<h1>Sobre mí</h1>
<p>Mi nombre es {{ $name }} y el último libro que leí fue "{{ $lastBook }}".</p>
@endsection