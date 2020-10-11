@extends ('template.index')
@section ('content')

<form method="post" action="{{ route('consulta.cadastrar') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
            <h3>Cadastro de Consulta</h3>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
            <h3>Informações Básicas</h3>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Data</label>
                <input type="text" class="form-control" id="data" name="data" data-mask="00/00/0000" placeholder="00/00/0000" value="{{ $data_atual }}" required="">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>Veterinário</label>
                <select class="form-control" id="veterinario_id" name="veterinario_id" required="">
                    <option value="">Selecione</option>
                    @foreach($veterinarios as $veterinario)
                        @if($veterinario->status === 1)
                            <option value="{{ $veterinario->id }}">{{ $veterinario->nome_completo }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-5">
            <div class="form-group">
                <label>Proprietário</label>
                <select class="form-control" id="proprietario_id" name="proprietario_id" required="">
                    <option value="">Selecione</option>
                    @foreach($proprietarios as $proprietario)
                        @if($proprietario->status === 1)
                            <option value="{{ $proprietario->id }}">{{ $proprietario->nome_completo }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label>Animal</label>
                <select class="form-control" id="animal_id" name="animal_id" required="">
                    <option value="">Selecione</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
            <h3>Amostras Para Laboratórios</h3>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Histo</label>
                <select class="form-control" id="amostras_histo" name="amostras_histo" required="">
                    <option value="N" selected>Não</option>
                    <option value="S">Sim</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Micro</label>
                <select class="form-control" id="amostras_micro" name="amostras_micro" required="">
                    <option value="N" selected>Não</option>
                    <option value="S">Sim</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Micol</label>
                <select class="form-control" id="amostras_micol" name="amostras_micol" required="">
                    <option value="N" selected>Não</option>
                    <option value="S">Sim</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Paras</label>
                <select class="form-control" id="amostras_paras" name="amostras_paras" required="">
                    <option value="N" selected>Não</option>
                    <option value="S">Sim</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Citol</label>
                <select class="form-control" id="amostras_citol" name="amostras_citol" required="">
                    <option value="N" selected>Não</option>
                    <option value="S">Sim</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
            <h3>Outras Informações</h3>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Epidemiologia e História Clínica</label>
                <textarea class="form-control" id="epidemiologia_e_historia_clinica" name="epidemiologia_e_historia_clinica" placeholder="Epidemiologia e História Clínica" required=""></textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Lesões Macroscópicas</label>
                <textarea class="form-control" id="lesoes_macroscopicas" name="lesoes_macroscopicas" placeholder="Lesões Macroscópicas" required=""></textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Lesões Histológicas</label>
                <textarea class="form-control" id="lesoes_histologicas" name="lesoes_histologicas" placeholder="Lesões Histológicas" required=""></textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Diagnóstico</label>
                <input type="text" class="form-control" id="diagnostico" name="diagnostico" placeholder="Diagnóstico" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Relatório</label>
                <textarea class="form-control" id="relatorio" name="relatorio" placeholder="Relatório" required=""></textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-1">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        <div class="col-xs-2"></div>
    </div>
</form>

<script>
    var $select_proprietario = document.getElementById("proprietario_id");
    var $select_options = document.getElementsByTagName("option");
    var $select_animal = document.getElementById("animal_id");

    var $ajax = new XMLHttpRequest();

    function consultaAnimal() {
        var $index = $select_proprietario.options.selectedIndex;
        var $proprietario_id = $select_proprietario.options[$index].value;

        function stateChange() {
            if (requestSuccess()) {
                var $api_data = JSON.parse($ajax.responseText);

                for($i = 0; $i < $api_data[0].length + 1; $i++) {
                    $select_animal.remove($select_options);
                }

                var $option = document.createElement("option");
                    $option.setAttribute("value", "");
                    var $value = document.createTextNode("Selecione"); 
                    $option.appendChild($value); 
                    $select_animal.appendChild($option);

                for($i = 0; $i < $api_data[0].length; $i++) {
                    var $option = document.createElement("option");
                    $option.setAttribute("value", $api_data[0][$i].id);
                    var $value = document.createTextNode($api_data[0][$i].nome); 
                    $option.appendChild($value); 
                    $select_animal.appendChild($option);
                }

                $ajax.abort();
            }
        }

        function requestSuccess() {
            return $ajax.readyState === 4 && $ajax.status === 200;
        }

        var $url = '/animal/api/proprietario/'+$proprietario_id+'/';

        $ajax.open("GET", $url);
        $ajax.send();
        $ajax.addEventListener('readystatechange', stateChange);
    }

    $select_proprietario.addEventListener('change', consultaAnimal);
</script>


@endsection