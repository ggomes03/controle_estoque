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
        Schema::create('estoque', function (Blueprint $table){
            $table->string('codigo_produto', 13);
            $table->string('lote', 15);
            $table->unsignedBigInteger('id_produto');
            $table->unsignedBigInteger('id_fornecedor');
            $table->integer('quantidade');
            $table->date('fabricacao');
            $table->date('validade');
            $table->float('preco');
            $table->integer('quantidade_inicial');
            $table->integer('quantidade_atual');

            $table->foreign('id_produto')->references('id_produto')->on('produtos');
            $table->foreign('id_fornecedor')->references('id_fornecedor')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};
