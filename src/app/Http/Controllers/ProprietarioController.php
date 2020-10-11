<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proprietario;
use App\Models\Animal;

class ProprietarioController extends Controller
{
    private $proprietario;

    public function __construct(Proprietario $proprietario, Animal $animal) {
        $this->proprietario = $proprietario;
        $this->animal = $animal;
    }

    public function upperCaseConvert($data) {
        if(isset($data)) {
            $data = mb_strtoupper($data, 'UTF-8');
            return $data;
        }
    }

    public function cleanData($data) {
        if (isset($data)) {
            $data = str_replace(' ', '', $data);
            $data = str_replace('.', '', $data);
            $data = str_replace('/', '', $data);
            $data = str_replace('-', '', $data);
            $data = str_replace('(', '', $data);
            $data = str_replace(')', '', $data);
        }
        return $data;
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
            $data = $data[2].'-'.$data[1].'-'.$data[0];
        }
        return $data;
    }

    public function cpfVerify($data) {
        if (isset($data)) {
            $data = $this->cleanData($data);
            $query = $this->proprietario->where('cpf', '=', $data)->count();
        }
        return $query;
    }

    public function cadastro() {
        return view("proprietario.cadastrar.index");
    }

    public function cadastrar(Request $request) {
        $data_form = $request->all();
        $verify = $this->cpfVerify($data_form['cpf']);
        if($verify >= 1) {
            return redirect()->route('proprietario.cadastro')->with('message', 'ESTE CPF JÁ ESTÁ CADASTRADO!');
        } else {
            /* UPPERCASE BEGIN */
            $data_form['nome_completo'] = $this->upperCaseConvert($data_form['nome_completo']);
            $data_form['endereco'] = $this->upperCaseConvert($data_form['endereco']);
            $data_form['complemento'] = $this->upperCaseConvert($data_form['complemento']);
            $data_form['bairro'] = $this->upperCaseConvert($data_form['bairro']);
            $data_form['cidade'] = $this->upperCaseConvert($data_form['cidade']);
            $data_form['estado'] = $this->upperCaseConvert($data_form['estado']);
            $data_form['email'] = $this->upperCaseConvert($data_form['email']);
            /* UPPERCASE END */
            $data_form['data_de_nascimento'] = $this->formatDateInsert($data_form['data_de_nascimento']);
            $data_form['cpf'] = $this->cleanData($data_form['cpf']);
            $data_form['cep'] = $this->cleanData($data_form['cep']);
            $data_form['celular'] = $this->cleanData($data_form['celular']);
            $novo_proprietario = $this->proprietario->create($data_form);
            return redirect()->route("proprietario.cadastro")->with("message", "PROPRIETÁRIO CADASTRADO COM SUCESSO!");
        }
    }

    public function listar() {
        $proprietarios = $this->proprietario->orderBy("nome_completo")->get();
        return view("proprietario.listar.index", compact('proprietarios'));
    }

    public function editar($id) {
        $proprietario = $this->proprietario->find($id);
        $proprietario['data_de_nascimento'] = $this->formatDateInsert($proprietario['data_de_nascimento']);
        return view("proprietario.editar.index", compact('proprietario'));
    }

    public function atualizar(Request $request, $id) {
        $data_form = $request->all();
        /* UPPERCASE BEGIN */
        $data_form['nome_completo'] = $this->upperCaseConvert($data_form['nome_completo']);
        $data_form['endereco'] = $this->upperCaseConvert($data_form['endereco']);
        $data_form['complemento'] = $this->upperCaseConvert($data_form['complemento']);
        $data_form['bairro'] = $this->upperCaseConvert($data_form['bairro']);
        $data_form['cidade'] = $this->upperCaseConvert($data_form['cidade']);
        $data_form['estado'] = $this->upperCaseConvert($data_form['estado']);
        $data_form['email'] = $this->upperCaseConvert($data_form['email']);
        /* UPPERCASE END */
        $data_form['data_de_nascimento'] = $this->formatDateInsert($data_form['data_de_nascimento']);
        $data_form['cpf'] = $this->cleanData($data_form['cpf']);
        $data_form['cep'] = $this->cleanData($data_form['cep']);
        $data_form['celular'] = $this->cleanData($data_form['celular']);
        $proprietario = $this->proprietario->find($id);
        $proprietario->update($data_form);
        return redirect()->route("proprietario.listar")->with("message", "CADASTRO ATUALIZADO COM SUCESSO!");
    }

    public function ativar($id) {
        $proprietario = $this->proprietario->find($id);
        $proprietario->where('id', '=', $id)->update(['status' => 1]);
        $animais = $this->animal->where("proprietario_id", "=", $id)->update(['status' => 1]);
        return redirect()->route('proprietario.listar')->with('message', 'PROPRIETÁRIO E SEUS ANIMAIS ATIVADOS COM SUCESSO!');
    }

    public function desativar($id) {
        $proprietario = $this->proprietario->find($id);
        $proprietario->where('id', '=', $id)->update(['status' => 0]);
        $animais = $this->animal->where("proprietario_id", "=", $id)->update(['status' => 0]);
        return redirect()->route('proprietario.listar')->with('message', 'PROPRIETÁRIO E SEUS ANIMAIS DESATIVADOS COM SUCESSO!');
    }
}