@extends('layouts.main')

@section('title', $evento->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/eventos/{{$evento->image}}" class="img-fluid" alt="{{$evento->title}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $evento->title }}</h1>
                <p class="event-date"><ion-icon name="today-outline"></ion-icon> Data do evento: {{date('d/m/Y', strtotime($evento->date))}}</p>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{$evento->city}}</p>
                <p class="events-participants"><ion-icon name="people-outline"></ion-icon> X Participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Direção do evento: {{$donoEvento['name']}}</p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach($evento->items as $item)
                    <li><ion-icon name="play-outline"></ion-icon><span></span>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{$evento->description}}</p>
            </div>
        </div>
    </div>

@endsection
