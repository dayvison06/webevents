@extends('layouts.main')

@section('title', 'Web Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar ...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        
            <div id="cards-container" class="row">
                {{-- Exibe os eventos diretamente do banco de dados através do foreach --}}
                @foreach ($eventos as $evento)
                    <div class="card col-md-3">
                        <img src="/img/placeholder-image.svg" alt="{{ $evento->title }}">
                        <div class="card-body">
                            <p class="card-date">10/09/2024</p>
                            <h5 class="card-title">{{ $evento->title }}</h5>
                            <p class="card-participantes">X Participantes</p>
                            <a href="#" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>
                @endforeach
                {{-- Fim: Exibe os eventos diretamente do banco de dados através do foreach --}}
            </div>
        
    </div>

@endsection
