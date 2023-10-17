<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeuModel extends Model
{
    protected $table = 'meu_model'; 
    protected $fillable = ['nomePeca', 'descricaoPeca', 'quantidadePeca', 'precoTotal'];
}

