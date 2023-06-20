@extends('layouts.main')

@section('title', 'Cadastro de Periódicos')

@section('content')

<div id="periodico-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastre o seu periódico</h1>
  <form action="/periodicos" method="POST">
    @csrf
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do periódico">
    </div>
    <div class="form-group">
      <label for="editora">Editora:</label>
      <input type="text" class="form-control" id="editora" name="editora" placeholder="Editora do periódico">
    </div>
    <div class="form-group">
      <label for="valor_assinatura">Valor Assinatura:</label>
      <input type="number" step="0.01" class="form-control" id="valor_assinatura" name="valor_assinatura" placeholder="Valor da assinatura">
    </div>
    <div class="form-group">
      <label for="area_conhecimento">Área de Conhecimento:</label>
      <select name="area_conhecimento" id="area_conhecimento" class="form-control">
        <option value="Opção 1">Opção 1</option>
        <option value="Opção 2">Opção 2</option>
        <option value="Opção 3">Opção 3</option>
        <option value="Opção 4">Opção 4</option>
      </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar Periódico">
  </form>
</div>

@endsection

