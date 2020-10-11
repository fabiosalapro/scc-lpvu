@extends ('template.index')
@section ('content')
<form class="m-t" role="form" method="post" action='{{ url("/animal/atualizar/{$animal->id}") }}'>
    {!! method_field('PUT') !!}
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
                            <option value="{{ $proprietario->id }}" @if ('M' === $proprietario->sexo) selected @endif>{{ $proprietario->nome_completo }}</option>
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
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="" value="{{ $animal->nome }}" autofocus="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Espécie</label>
                <input type="text" class="form-control" id="especie" name="especie" placeholder="Espécie" value="{{ $animal->especie }}" required="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Raça</label>
                <input type="text" class="form-control" id="raca" name="raca" placeholder="Raça" value="{{ $animal->raca }}" required="">
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
                    <option value="F" @if ('F' === $proprietario->sexo) selected @endif > Fêmea </option>
                    <option value="M" @if ('M' === $proprietario->sexo) selected @endif > Macho </option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Idade</label>
                <input type="text" class="form-control" id="idade" name="idade" placeholder="Idade" data-mask="00" value="{{ $animal->idade }}" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary">Atualizar Dados</button>
            <a class="btn btn-default" href="{{ route('animal.listar') }}" role="button">Voltar</a>
        </div>
        <div class="col-xs-2"></div>
    </div>
</form>
@endsection