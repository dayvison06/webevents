@extends('layouts.main')

@section('title', 'Web Events')

@section('content')

    <h1>Eventos Online</h1>
    <img src="/img/webevents.jpg">

    @if($numero >= 10)
        <p>Número é maior ou igual a 10!</p>
    @elseif($numero <= 5)
        <p>Número menor ou igual a 5!</p>
    @else
        <p>Número fora do escopo</p>
    @endif

@endsection