<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('meu_model', function (Blueprint $table) {
            $table->id();
            $table->string('nomePeca');
            $table->string('descricaoPeca');
            $table->integer('quantidadePeca');
            $table->double('precoTotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meu_model');
    }
};
