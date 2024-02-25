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
        Schema::create('clientes', function (Blueprint $table){
            $table->id('id_cliente');
            $table->string('cpf', 11);
            $table->string('nome_cliente', 50);
            $table->date('data_cadastro');
            $table->unsignedBigInteger('id_login');

            $table->foreign('id_login')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
