@extends('layouts.main')

@section('title', 'Cadastro de Periódicos')

@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
       
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $periodico->title }}</h1>
        <p class="periodico-editora"><ion-icon name="location-outline"></ion-icon> {{ $periodico->editora}}</p>
        <a href="#" class="btn btn-primary" id="event-submit">Confirmar Publicação</a>
      </div>
      <div class="col-md-12" id="description-container">
        <h3>Sobre o Periodico:</h3>
        <p class="event-description">{{ $periodico->description }}</p>
      </div>
    </div>
  </div>

@endsection