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
        Schema::create('funcionarios_dos_caixas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_caixa');
            $table->unsignedBigInteger('id_funcionario');
            $table->datetime('data_hora_inicio');
            $table->datetime('data__hora_fechamento');

            $table->foreign('id_caixa')->references('id_caixa')->on('caixas');
            $table->foreign('id_funcionario')->references('id_funcionario')->on('funcionarios');

            $table->primary(['id_caixa', 'id_funcionario', 'data_hora_inicio']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios_dos_caixas');
    }
};
