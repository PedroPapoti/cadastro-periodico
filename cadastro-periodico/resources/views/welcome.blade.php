@extends('layouts.main')

@section('title', 'Cadastro Priodico')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Periodico</h1>
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
                <h5 class="card-title">{{ $periodico->title }}</h5>
                <p class="card-participants"> Revista públicada</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection