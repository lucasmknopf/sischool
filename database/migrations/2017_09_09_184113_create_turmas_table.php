<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vagas',3);
            $table->date('data_limite');
            $table->integer('oficina_id')->unsigned();
            $table->foreign('oficina_id')->references('id')->on('oficinas');
            $table->string('horario_id')->unsigned();
            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->string('dia_id')->unsigned();
            $table->foreign('dia_id')->references('id')->on('dias');
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
        Schema::dropIfExists('turmas');
    }
}
