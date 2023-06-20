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
        <p class="periodico-nome"><ion-icon name="location-outline">Nome:</ion-icon> {{ $periodico->nome}}</p>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi eveniet cupiditate dolor, cum ut ex libero, laborum architecto, excepturi molestiae similique deserunt ipsa soluta odio doloribus numquam incidunt veniam. Tenetur.</p>
      </div>
    </div>
  </div>

@endsection