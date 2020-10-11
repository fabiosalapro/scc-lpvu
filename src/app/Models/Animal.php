<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = ('animais');

    protected $fillable = [
        'id',
        'proprietario_id',
        'nome',
        'especie',
        'raca',
        'sexo',
        'idade',
        'status',
        'proprietario_id',
    ];

    public function proprietario() {
        return $this->belongsTo('App\Models\Proprietario','proprietario_id');
    }

    public function consultas() {
        return $this->hasMany('App\Models\Consulta','animal_id');
    }
}