<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MeuModel;

class Controlador extends Controller
{
    

   public function index(Request $request){

    $db = new MeuModel();
      MeuModel::create([
     'nomePeca' => $request->input('nome'),
     'descricaoPeca' => $request->input('descricao'),
     'quantidadePeca' => $request->input('quantidade'),
     'precoTotal' => $request->input('preco')
    ]);
      return view('cadastra');
   }

   public function index2(){
    return view('cadastra');
}

   public function mostra(){

    $pecas = MeuModel::all();

    foreach ($pecas as $peca) {
        $peca->precoUnitario = $peca->precoTotal / $peca->quantidadePeca;
    }

    $pecas = $pecas->sortByDesc('precoUnitario');

    return view('mostraCadastro') -> with('pecas', $pecas);
}



}