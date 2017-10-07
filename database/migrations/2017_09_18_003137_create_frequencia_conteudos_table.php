<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrequenciaConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencia_conteudos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('presenca',1);
            $table->string('atividade_ministrada',100);
            $table->date('data');
            $table->integer('turma_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('turmas');
            $table->integer('aluno_id')->unsigned();
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frequencia_conteudos');
    }
}
