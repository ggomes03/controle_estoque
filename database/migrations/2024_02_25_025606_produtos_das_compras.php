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
        Schema::create('produtos_das_compras', function (Blueprint $table) {
            $table->unsignedBigInteger('id_compra');
            $table->unsignedBigInteger('id_produto');
            $table->integer('quantidade');
            $table->float('preco_lote');
            $table->float('preco_atacado');
            $table->float('preco_varejo');

            $table->foreign('id_compra')->references('id_compra')->on('compras');
            $table->foreign('id_produto')->references('id_produto')->on('produtos');

            $table->primary(['id_compra','id_produto']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos_das_comprass');
    }
};
