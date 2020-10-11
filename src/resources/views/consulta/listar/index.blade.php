@extends ('template.index')
@section ('content')
<h2>Listagem de Consultas</h2>

<form method="post" action="{{ route('consulta.filtrar') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-xs-2">
            <div class="form-group">
                <label>Data Inicial</label>
                 <input type="text" class="form-control" id="data_inicial" name="data_inicial" data-mask="00/00/0000" placeholder="00/00/0000" value="01/01/2020">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Data Final</label>
                <input type="text" class="form-control" id="data_final" name="data_final" data-mask="00/00/0000" placeholder="00/00/0000" value="{{ $data_atual }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2">
            <div class="form-group">
                <label>Diagnóstico</label>
                <input type="text" class="form-control" id="diagnostico" name="diagnostico" placeholder="Diagnóstico">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Espécie</label>
                <input type="text" class="form-control" id="especie" name="especie" placeholder="Espécie">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Sexo</label>
                <select class="form-control" id="sexo" name="sexo">
                    <option value="">Selecione</option>
                    <option value="F">Fêmea</option>
                    <option value="M">Macho</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Raça</label>
                <input type="text" class="form-control" id="raca" name="raca" placeholder="Raça">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Idade</label>
                <input type="text" class="form-control" id="idade" name="idade" data-mask="00" placeholder="Idade">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-1">
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </div>
    </div>
</form>
<h1></h1>
<table class="table table-condensed">
    <thead>
        <tr>
            <th>Data</th>
            <th>Proprietário</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Sexo</th>
            <th>Financeiro</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($consultas as $consulta)
            <tr>
                <td>{{ $consulta->data }}</td>
                <td>{{ $consulta->proprietario->nome_completo }}</td>
                <td>{{ $consulta->animal->nome }}</td>
                <td>{{ $consulta->animal->especie }}</td>
                <td>{{ $consulta->animal->raca }}</td>
                <td>
                    @if( $consulta->animal->sexo === 'F')
                        FÊMEA
                    @else
                        MACHO
                    @endif
                </td>
                <td>
                    @if($consulta->status === 1)
                        <span class="badge badge-primary">PAGO</span>
                    @else
                        <span class="badge badge-danger">EM ABERTO</span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-primary" href='{{ url("/consulta/visualizar/{$consulta->id}") }}' role="button">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                    @if($consulta->status === 0)
                        <a class="btn btn-success" href='{{ url("/consulta/pagamento/{$consulta->id}") }}' role="button">
                            <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
      </tbody>
</table>

@endsection