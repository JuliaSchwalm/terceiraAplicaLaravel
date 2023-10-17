@extends('mestre')
@section('titulo')
 Home
@stop
@section('conteudo')
  <div class="button-container">
    <a href='/form'>
    <button>Cadastrar nova peça</button>
  </a>
  <a href='/mostra'>
    <button>Ver Lista de Peças</button>
  </a>
  </div>
@stop