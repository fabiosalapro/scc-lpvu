<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Veterinario;
use App\Models\Proprietario;
use App\Models\Animal;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    private $veterinario;
    private $proprietario;
    private $animal;

    public function __construct(Veterinario $veterinario, Proprietario $proprietario, Animal $animal, Consulta $consulta) {
        $this->veterinario = $veterinario;
        $this->proprietario = $proprietario;
        $this->animal = $animal;
        $this->consulta = $consulta;
    }

    public function upperCaseConvert($data) {
        if(isset($data)) {
            $data = mb_strtoupper($data, 'UTF-8');
            return $data;
        }
    }

    public function formatDateInsert($data) {
        if (isset($data)) {
            $data = str_replace('/', '-', $data);
            $data = explode('-', $data);
            $data = $data[2].'-'.$data[1].'-'.$data[0];
        }
        return $data;
    }

    public function formatDateExport($data) {
        if (isset($data)) {
            $data = explode('-', $data);
            $data = $data[2].'/'.$data[1].'/'.$data[0];
        }
        return $data;
    }

    public function inicio() {
        return view('template.index');
    }

    public function cadastro() {
        $data_atual = date("d/m/Y");
        $veterinarios = $this->veterinario->orderBy("nome_completo")->get();
        $proprietarios = $this->proprietario->orderBy("nome_completo")->get();
        return view('consulta.cadastrar.index', compact('data_atual', 'veterinarios', 'proprietarios'));
    }

    public function cadastrar(Request $request) {
        $data_form = $request->all();
        /* UPPERCASE BEGIN */
        $data_form['epidemiologia_e_historia_clinica'] = $this->upperCaseConvert($data_form['epidemiologia_e_historia_clinica']);
        $data_form['lesoes_macroscopicas'] = $this->upperCaseConvert($data_form['lesoes_macroscopicas']);
        $data_form['lesoes_histologicas'] = $this->upperCaseConvert($data_form['lesoes_histologicas']);
        $data_form['diagnostico'] = $this->upperCaseConvert($data_form['diagnostico']);
        $data_form['relatorio'] = $this->upperCaseConvert($data_form['relatorio']);
        /* UPPERCASE END */
        $data_form['data'] = $this->formatDateInsert($data_form['data']);
        $nova_consulta = $this->consulta->create($data_form);
        return redirect()->route("consulta.cadastro")->with("message", "CONSULTA CADASTRADA COM SUCESSO!");
    }

    public function listar() {
        $data_atual = date("d/m/Y");
        $consultas = $this->consulta->orderBy("created_at")->get();
        foreach($consultas as $consulta) {
            $consulta['data'] = $this->formatDateExport($consulta['data']);
        }
        return view("consulta.listar.index", compact("data_atual", "consultas"));
    }

    public function filtrar(Request $request, Consulta $consulta) {
        $data_atual = date("d/m/Y");
        $data_form = $request->all();
        // dd($data_form);
        $data_form['data_inicial'] = $this->formatDateInsert($data_form['data_inicial']);
        $data_form['data_final'] = $this->formatDateInsert($data_form['data_final']);
        // dd($consultas = $consulta->filter($data_form));
        $consultas = $consulta->filter($data_form);
        foreach($consultas as $consulta) {
            $consulta['data'] = $this->formatDateExport($consulta['data']);
        }
        return view('consulta.filtrar.index', compact("data_atual", "consultas"));
    }

    public function visualizar($id) {
        $veterinarios = $this->veterinario->orderBy("nome_completo")->get();
        $proprietarios = $this->proprietario->orderBy("nome_completo")->get();
        $animais = $this->animal->orderBy("nome")->get();
        $consulta = $this->consulta->find($id)->get();
        foreach($consulta as $consulta) {
            $consulta['data'] = $this->formatDateExport($consulta['data']);
        }
        return view("consulta.visualizar.index", compact("veterinarios", "proprietarios", "animais", "consulta"));
    }

    public function pagar($id) {
        $consulta = $this->consulta->find($id);
        $consulta->where('id', '=', $id)->update(['status' => 1]);
        return redirect()->route('consulta.listar')->with('message', 'PAGAMENTO REALIZADO COM SUCESSO!');
    }
}