@extends ('template.index')
@section ('content')
<form method="post" action="{{ route('animal.cadastrar') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
            <h2>Cadastro do Animal</h2>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
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
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="" autofocus="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Espécie</label>
                <input type="text" class="form-control" id="especie" name="especie" placeholder="Espécie" required="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Raça</label>
                <input type="text" class="form-control" id="raca" name="raca" placeholder="Raça" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Sexo</label>
                <select class="form-control" id="sexo" name="sexo" required="">
                    <option value="">Selecione</option>
                    <option value="F">Fêmea</option>
                    <option value="M">Macho</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Idade</label>
                <input type="text" class="form-control" id="idade" name="idade" placeholder="Idade" data-mask="00" required="">
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
@endsection