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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id('id_funcionario');
            $table->string('nome', 60);
            $table->string('cpf', 11);
            $table->unsignedBigInteger('id_cargo');
            $table->unsignedBigInteger('id_departamento');

            $table->foreign('id_cargo')->references('id_cargo')->on('cargos');
            $table->foreign('id_departamento')->references('id_departamento')->on('departamentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
