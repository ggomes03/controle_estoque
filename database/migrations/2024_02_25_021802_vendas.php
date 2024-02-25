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
        Schema::create('vendas', function (Blueprint $table){
            $table->id('id_venda');
            $table->unsignedBigInteger('id_caixa');
            $table->unsignedBigInteger('id_cliente');
            $table->string('cpf', 11);
            $table->datetime('data_hora');

            $table->foreign('id_caixa')->references('id_caixa')->on('caixas');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
