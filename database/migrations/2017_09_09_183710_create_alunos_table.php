<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 20);
            $table->string('certidao_nasc',20);
            $table->string('endereco',50);
            $table->string('telefone',15);
            $table->date('data_nasc');
            $table->string('turno',7);
            $table->integer('oficina_id')->unsigned();
            $table->foreign('oficina_id')->references('id')->on('oficinas');
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
        Schema::dropIfExists('alunos');
    }
}
