<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietarios', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->string('cpf', 11)->unique();
            $table->date('data_de_nascimento');
            $table->string('sexo', 1);
            $table->string('nome_completo', 100);
            $table->string('cep', 8);
            $table->string('endereco', 100);
            $table->integer('numero');
            $table->string('complemento', 100);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('estado', 2);
            $table->string('celular', 11);
            $table->string('email', 50);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('proprietarios');
    }
}
