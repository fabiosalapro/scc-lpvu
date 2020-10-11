@extends ('template.index')
@section ('content')
<form class="m-t" role="form" method="post" action='{{ url("/proprietario/atualizar/{$proprietario->id}") }}'>
    {!! method_field('PUT') !!}
    {{ csrf_field() }}
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
            <h2>Cadastro de Veterinário</h2>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-3">
            <div class="form-group">
                <label>CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" data-mask="000.000.000-00" value="{{$proprietario->cpf}}" required="" autofocus="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="text" class="form-control" id="data_de_nascimento" name="data_de_nascimento" placeholder="Data de Nascimento" data-mask="00/00/0000" value="{{$proprietario->data_de_nascimento}}" required="">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <label>Sexo</label>
                <select class="form-control" id="sexo" name="sexo" required="">
                    <option value="">Sexo</option>
                    <option value="F" @if ('F' === $proprietario->sexo) selected @endif > Feminino </option>
                    <option value="M" @if ('M' === $proprietario->sexo) selected @endif > Masculino </option>
                </select>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Nome Completo</label>
                <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Nome Completo" value="{{$proprietario->nome_completo}}" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-3">
            <div class="form-group">
                <label>CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" data-mask="00.000-000" value="{{$proprietario->cep}}" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" value="{{$proprietario->endereco}}" required="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Número</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" data-mask="00000" value="{{$proprietario->numero}}" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <div class="form-group">
                <label>Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" value="{{$proprietario->complemento}}" required="">
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="{{$proprietario->bairro}}" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="{{$proprietario->cidade}}" required="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" maxlength="2" placeholder="UF" value="{{$proprietario->estado}}" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" data-mask="(00) 0 0000-0000" value="{{$proprietario->celular}}" required="">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="{{$proprietario->email}}" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary">Atualizar Dados</button>
            <a class="btn btn-default" href="{{ route('proprietario.listar') }}" role="button">Voltar</a>
        </div>
        <div class="col-xs-2"></div>
    </div>
</form>
@endsection