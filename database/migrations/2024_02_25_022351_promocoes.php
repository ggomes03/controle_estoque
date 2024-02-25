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
        Schema::create('promocoes', function (Blueprint $table){
            $table->id('id_promocao');
            $table->string('descricao_promocao', 100);
            $table->datetime('data_hora_inicio');
            $table->datetime('data_hora_fim');
            $table->float('preco');
            $table->unsignedBigInteger('id_produto');

            $table->foreign('id_produto')->references('id_produto')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promocoes');
    }
};
