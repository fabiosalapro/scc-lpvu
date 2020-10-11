@extends ('template.index')
@section ('content')

<form method="post" action="{{ route('consulta.cadastrar') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
            <h3>Visualizar de Consulta</h3>
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
                <input type="text" class="form-control" id="data" name="data" data-mask="00/00/0000" value="{{ $consulta->data }}" disabled="">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>Veterinário</label>
                <select class="form-control" id="veterinario_id" name="veterinario_id" disabled="">
                    <option value="">Selecione</option>
                    @foreach($veterinarios as $veterinario)
                        @if($veterinario->status === 1)
                            <option value="{{ $veterinario->id }}" @if ($veterinario->id === $consulta->veterinario_id) selected @endif>{{ $veterinario->nome_completo }}</option>
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
                <select class="form-control" id="proprietario_id" name="proprietario_id" disabled="">
                    <option value="">Selecione</option>
                    @foreach($proprietarios as $proprietario)
                        @if($proprietario->status === 1)
                            <option value="{{ $proprietario->id }}" @if ($proprietario->id === $consulta->proprietario_id) selected @endif>{{ $proprietario->nome_completo }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label>Animal</label>
                <select class="form-control" id="animal_id" name="animal_id" disabled="">
                    <option value="">Selecione</option>
                    @foreach($animais as $animal)
                        @if($animal->status === 1)
                            <option value="{{ $animal->id }}" @if ($animal->id === $consulta->animal_id) selected @endif>{{ $animal->nome }}</option>
                        @endif
                    @endforeach
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
                <select class="form-control" id="amostras_histo" name="amostras_histo" disabled="">
                    <option value="N" @if ('N' === $consulta->amostras_histo) selected @endif > Não </option>
                    <option value="S" @if ('S' === $consulta->amostras_histo) selected @endif > Sim </option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Micro</label>
                <select class="form-control" id="amostras_micro" name="amostras_micro" disabled="">
                    <option value="N" @if ('N' === $consulta->amostras_micro) selected @endif > Não </option>
                    <option value="S" @if ('S' === $consulta->amostras_micro) selected @endif > Sim </option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Micol</label>
                <select class="form-control" id="amostras_micol" name="amostras_micol" disabled="">
                    <option value="N" @if ('N' === $consulta->amostras_micol) selected @endif > Não </option>
                    <option value="S" @if ('S' === $consulta->amostras_micol) selected @endif > Sim </option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Paras</label>
                <select class="form-control" id="amostras_paras" name="amostras_paras" disabled="">
                    <option value="N" @if ('N' === $consulta->amostras_paras) selected @endif > Não </option>
                    <option value="S" @if ('S' === $consulta->amostras_paras) selected @endif > Sim </option>
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
                <select class="form-control" id="amostras_citol" name="amostras_citol" disabled="">
                    <option value="N" @if ('N' === $consulta->amostras_citol) selected @endif > Não </option>
                    <option value="S" @if ('S' === $consulta->amostras_citol) selected @endif > Sim </option>
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
                <textarea class="form-control" id="epidemiologia_e_historia_clinica" name="epidemiologia_e_historia_clinica" placeholder="Epidemiologia e História Clínica" disabled="">{{ $consulta->epidemiologia_e_historia_clinica }}</textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Lesões Macroscópicas</label>
                <textarea class="form-control" id="lesoes_macroscopicas" name="lesoes_macroscopicas" placeholder="Lesões Macroscópicas" disabled="">{{ $consulta->lesoes_macroscopicas }}</textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Lesões Histológicas</label>
                <textarea class="form-control" id="lesoes_histologicas" name="lesoes_histologicas" placeholder="Lesões Histológicas" disabled=""> {{ $consulta->lesoes_histologicas }}</textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Diagnóstico</label>
                <input type="text" class="form-control" id="diagnostico" name="diagnostico" placeholder="Diagnóstico" value="{{ $consulta->diagnostico }}" disabled="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Relatório</label>
                <textarea class="form-control" id="relatorio" name="relatorio" placeholder="Relatório" disabled="">{{ $consulta->relatorio }}</textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <a class="btn btn-default" href="{{ route('consulta.listar') }}" role="button">Voltar</a>
        </div>
        <div class="col-xs-2"></div>
    </div>
</form>

@endsection