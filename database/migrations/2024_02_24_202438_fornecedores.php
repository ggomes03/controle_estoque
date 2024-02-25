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
        Schema::create('fornecedores',function (Blueprint $table){
            $table->id('id_fornecedor');
            $table->string('nome_forncedor', 60);
            $table->string('email_fornecedor', 45);
            $table->string('telefone_fornecedor', 11);
            $table->string('descricao_fornecedor', 255);
            $table->date('data_cadastro');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedores');
    }
};
