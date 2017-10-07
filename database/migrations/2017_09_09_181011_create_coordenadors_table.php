<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordenadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordenadors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 20);
            $table->string('telefone',15);
            $table->string('rg',10);
            $table->string('email',20);
            $table->string('endereco',50);
            $table->date('data_nasc');
            $table->string('cpf',11);
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
        Schema::dropIfExists('coordenadors');
    }
}
