<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    protected $table = ('veterinarios');

    protected $fillable = [
        'id',
        'cpf',
        'data_de_nascimento',
        'sexo',
        'nome_completo',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'celular',
        'email',
        'status'
    ];

    public function consultas() {
        return $this->hasMany('App\Models\Consulta','veterinario_id');
    }
}