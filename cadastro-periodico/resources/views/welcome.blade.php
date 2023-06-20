@extends('layouts.main')

@section('title', 'Cadastro Periódico')

@section('content')

<div id="welcome-container" class="col-md-12">
    <h1>Bem-vindo(a) ao Cadastro de Periódicos!</h1>
    <p>Aqui você pode buscar e visualizar os periódicos disponíveis.</p>
</div>

<div id="search-container" class="col-md-12">
    <h2>Busque um Periódico</h2>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos Periódicos</h2>
    <p class="subtitle">Veja os periódicos dos próximos dias</p>
    
    <div id="cards-container" class="row">
        @foreach($periodicos as $periodico)
        <div class="card col-md-3">
            <img src="../../public/img/logo.png" alt="{{ $periodico->title }}">
            <div class="card-body">
                <p class="card-date">10/09/2020</p>
                <h5 class="card-title">{{ $periodico->editora }}</h5>
                <p class="card-participants">Revista publicada</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
