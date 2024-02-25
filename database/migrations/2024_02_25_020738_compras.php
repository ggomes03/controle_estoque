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
        Schema::create('compras', function (Blueprint $table){
            $table->id('id_compra');
            $table->date('data_compra');
            $table->unsignedBigInteger('id_fornecedor');

            $table->foreign('id_fornecedor')->references('id_fornecedor')->on('fornecedores');
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
