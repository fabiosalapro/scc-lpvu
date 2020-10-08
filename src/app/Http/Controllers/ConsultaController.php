<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function main() {
        return view('consulta.cadastrar.index');
    }
}