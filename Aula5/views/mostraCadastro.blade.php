@extends('mestre')
@section('titulo')
 Cadastra peças
@stop
@section('conteudo')
<h1>Peças em estoque</h1>
<div class="piece-list">
        @foreach ($pecas as $peca)
        <div class="piece-card">
            <p><strong>Nome da Peça:</strong> {{$peca -> nomePeca}}</p>
            <p><strong>Descrição:</strong> {{$peca -> descricaoPeca}}</p>
            <p><strong>Preço Unitário:</strong> {{$peca->precoUnitario}}</p>
        </div>

@endforeach
        </div>
@stop