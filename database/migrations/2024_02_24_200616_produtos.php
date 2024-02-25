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
        Schema::create('produtos',  function (Blueprint $table){
                $table->id('id_produto');
                $table->string('nome_produto', 60);
                $table->string('descricao_produto',100);
                $table->unsignedBigInteger('id_categoria');

                $table->foreign('id_categoria')->references('id_categoria')->on('categorias');

            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
