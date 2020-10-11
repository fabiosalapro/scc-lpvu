<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->integer('proprietario_id')->unsigned();
            $table->string('nome');
            $table->string('especie');
            $table->string('raca');
            $table->string('sexo', 1);
            $table->integer('idade');
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->foreign('proprietario_id')->references('id')->on('proprietarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animais');
    }
}
