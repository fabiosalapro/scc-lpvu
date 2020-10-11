<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->date('data');
            $table->integer('veterinario_id')->unsigned();
            $table->integer('proprietario_id')->unsigned();
            $table->integer('animal_id')->unsigned();
            $table->string('amostras_histo', 1);
            $table->string('amostras_micro', 1);
            $table->string('amostras_micol', 1);
            $table->string('amostras_paras', 1);
            $table->string('amostras_citol', 1);
            $table->string('epidemiologia_e_historia_clinica');
            $table->string('lesoes_macroscopicas');
            $table->string('lesoes_histologicas');
            $table->string('diagnostico');
            $table->string('relatorio');
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->foreign('veterinario_id')->references('id')->on('veterinarios');
            $table->foreign('proprietario_id')->references('id')->on('proprietarios');
            $table->foreign('animal_id')->references('id')->on('animais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
