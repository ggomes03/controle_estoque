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
        Schema::create('produtos_das_vendas', function (Blueprint $table){
                $table->id('id');
                $table->unsignedBigInteger('id_produto');
                $table->unsignedBigInteger('id_venda');
                $table->integer('quantidade');
                $table->float('preco_unitario');
                $table->float('preco_total');

                $table->foreign('id_produto')->references('id_produto')->on('produtos');
                $table->foreign('id_venda')->references('id_venda')->on('vendas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos_das_vendas');
    }
};
