@extends('layouts.main')

@section('title', 'Web Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar ...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Buscando por: {{$search}}</h2>
        @else
        <h2>Próximos Eventos</h2>
        @endif
        <p class="subtitle">Veja os eventos dos próximos dias</p>

        <div id="cards-container" class="row">
            {{-- Exibe os eventos diretamente do banco de dados através do foreach --}}
            @foreach ($eventos as $evento)
                <div class="card col-md-3">
                    <img src="/img/eventos/{{ $evento->image }}" alt="{{ $evento->title }}">
                    <div class="card-body">
                        <p class="card-date">{{date('d/m/Y', strtotime($evento->date))}}</p>
                        <h5 class="card-title">{{ $evento->title }}</h5>
                        <p class="card-participantes">X Participantes</p>
                        <a href="/eventos/{{ $evento->id }}" class="btn btn-primary">Saiba mais</a>
                        {{-- <form action="{{ route('eventos-destroy', ['id' => $evento->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-trash3"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                    </svg></button>
                            </form> --}}
                    </div>
                </div>
            @endforeach
            {{-- Fim: Exibe os eventos diretamente do banco de dados através do foreach --}}
            @if (count($eventos) == 0 && $search)
            <p id="sem-eventos">Não foi possível encontrar nenhum evento com {{$search}}! <a href="/">Ver todos!</a></p>
            @elseif(count($eventos) == 0)
                <p id="sem-eventos">Não há eventos disponíveis</p>
            @endif
        </div>
    </div>

@endsection
