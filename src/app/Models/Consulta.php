<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = ('consultas');

    protected $fillable = [
        'id',
        'data',
        'veterinario_id',
        'proprietario_id',
        'animal_id',
        'amostras_histo',
        'amostras_micro',
        'amostras_micol',
        'amostras_paras',
        'amostras_citol',
        'epidemiologia_e_historia_clinica',
        'lesoes_macroscopicas',
        'lesoes_histologicas',
        'diagnostico',
        'relatorio',
        'status',
    ];

    public function veterinario() {
        return $this->belongsTo('App\Models\Veterinario','veterinario_id');
    }

    public function proprietario() {
        return $this->belongsTo('App\Models\Proprietario','proprietario_id');
    }

    public function animal() {
        return $this->belongsTo('App\Models\Animal','animal_id');
    }

    public function filter($data) {
        return $this->where(function($query) use ($data) {
            if(isset($data['data_inicial']) && isset($data['data_final'])) {
                $query->whereBetween('data', [$data['data_inicial'], $data['data_final']]);
            }
            if(isset($data['diagnostico'])) {
                $query->where('diagnostico', '=', $data['diagnostico']);
            }
            if(isset($data['especie'])) {
                $query->where('animais.especie', '=', $data['especie']);
            }
            if(isset($data['sexo'])) {
                $query->where('animais.sexo', '=', $data['sexo']);
            }
            if(isset($data['raca'])) {
                $query->where('animais.raca', '=', $data['raca']);
            }
            if(isset($data['idade'])) {
                $query->where('animais.idade', '=', $data['idade']);
            }
            if(isset($data['cidade'])) {
                $query->where('proprietarios.cidade', '=', $data['cidade']);
            }
        })
        ->join('animais', 'consultas.animal_id', '=', 'animais.id')
        ->join('proprietarios', 'consultas.proprietario_id', '=', 'proprietarios.id')
        // ->toSql();
        ->get();
    }
}