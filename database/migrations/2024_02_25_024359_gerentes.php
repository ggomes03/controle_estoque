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
        Schema::create('gerentes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_departamento');
            $table->unsignedBigInteger('id_funcionario');
            $table->datetime('data_admissao');
            $table->datetime('data_exoneracao');

            $table->foreign('id_departamento')->references('id_departamento')->on('departamentos');
            $table->foreign('id_funcionario')->references('id_funcionario')->on('funcionarios');

            $table->primary(['id_departamento', 'id_funcionario', 'data_admissao']);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gerentes');
    }
};
