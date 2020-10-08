<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function inicio() {
        return view('template.index');
    }

    public function cadastro() {
        return view('consulta.cadastrar.index');
    }
}