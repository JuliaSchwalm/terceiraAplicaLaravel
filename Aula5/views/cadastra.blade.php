@extends('mestre')
@section('titulo')
 Cadastra peças
@stop
@section('conteudo')
<form action = "{{route ('meuformulario')}}" method = "post">
        @csrf 
        <fieldset>
        <legend>Cadsastro de peças:</legend>   <br>
        <label>Nome da Peça:<br><input type="nome" name="nome" required maxlength="20" /></label><br>
        <label>Descrição da Peça:<br><input type="nome" name="descricao" required maxlength="20" /></label><br>
        <label>Quantidade de Peças:<br><input type="number" name="quantidade" required maxlength="20" /></label><br>
        <label>Preço Total:<br><input type="number" name="preco" required maxlength="20" /></label><br><br><br>
        <input type="submit" name="enviar" value="Enviar">  </a>

    </fieldset>
     </form>
@stop