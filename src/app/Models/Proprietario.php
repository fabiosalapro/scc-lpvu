<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    protected $table = ('proprietarios');

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

    public function animais() {
        return $this->belongsTo('App\Models\Animal','id');
    }
}