<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proprietario;
use App\Models\Animal;

class AnimalController extends Controller
{
    private $proprietario;

    public function __construct(Animal $animal, Proprietario $proprietario) {
        $this->animal = $animal;
        $this->proprietario = $proprietario;
    }

    public function upperCaseConvert($data) {
        if(isset($data)) {
            $data = mb_strtoupper($data, 'UTF-8');
            return $data;
        }
    }

    public function cadastro() {
        $proprietarios = $this->proprietario->orderBy("nome_completo")->get();
        return view("animal.cadastrar.index", compact("proprietarios"));
    }

    public function cadastrar(Request $request) {
        $data_form = $request->all();
        /* UPPERCASE BEGIN */
        $data_form['nome'] = $this->upperCaseConvert($data_form['nome']);
        $data_form['especie'] = $this->upperCaseConvert($data_form['especie']);
        $data_form['raca'] = $this->upperCaseConvert($data_form['raca']);
        /* UPPERCASE END */
        $novo_animal = $this->animal->create($data_form);
        return redirect()->route("animal.cadastro")->with("message", "ANIMAL CADASTRADO COM SUCESSO!");
    }

    public function listar() {
        $animais = $this->animal->orderBy("especie")->get();
        return view("animal.listar.index", compact('animais'));
    }

    public function editar($id) {
        $proprietarios = $this->proprietario->orderBy("nome_completo")->get();
        $animal = $this->animal->find($id);
        return view("animal.editar.index", compact('animal', 'proprietarios'));
    }

    public function atualizar(Request $request, $id) {
        $data_form = $request->all();
        /* UPPERCASE BEGIN */
        $data_form['nome'] = $this->upperCaseConvert($data_form['nome']);
        $data_form['especie'] = $this->upperCaseConvert($data_form['especie']);
        $data_form['raca'] = $this->upperCaseConvert($data_form['raca']);
        /* UPPERCASE END */
        $animal = $this->animal->find($id);
        $animal->update($data_form);
        return redirect()->route("animal.listar")->with("message", "ANIMAL ATUALIZADO COM SUCESSO!");
    }

    public function ativar($id) {
        $animal = $this->animal->find($id);
        $proprietario = $this->proprietario->find($animal['proprietario_id']);
        if($proprietario['status'] === 1) {
            $animal->where('id', '=', $id)->update(['status' => 1]);
            return redirect()->route('animal.listar')->with('message', 'ANIMAL ATIVADO COM SUCESSO!');
        } else {
            return redirect()->route('animal.listar')->with('message', 'O PROPRIETÁRIO DESTE ANIMAL ESTÁ DESATIVADO!');
        }
    }

    public function desativar($id) {
        $animal = $this->animal->find($id);
        $proprietario = $this->proprietario->find($animal['proprietario_id']);
        if($proprietario['status'] === 1) {
            $animal->where('id', '=', $id)->update(['status' => 0]);
            return redirect()->route('animal.listar')->with('message', 'ANIMAL DESATIVADO COM SUCESSO!');
        } else {
            return redirect()->route('animal.listar')->with('message', 'O PROPRIETÁRIO DESTE ANIMAL ESTÁ DESATIVADO!');
        }
    }

    public function animaisPorProprietario($id) {
        $animais = $this->animal->where("proprietario_id", "=", $id)->orderBy("nome")->get();

        return response()->json([
            $animais
        ]);
    }
}