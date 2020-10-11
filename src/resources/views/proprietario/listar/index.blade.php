@extends ('template.index')
@section ('content')
<h2>Listagem de Proprietários</h2>
<table class="table table-condensed">
    <thead>
        <tr>
            <th>Nome Completo</th>
            <th>Situação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proprietarios as $proprietario)
            <tr>
                <td>{{ $proprietario->nome_completo }}</td>
                <td>
                    @if($proprietario->status === 1)
                        <span class="badge badge-primary">ATIVO</span>
                    @else
                        <span class="badge badge-danger">INATIVO</span>
                    @endif
                </td>
                <td>
                    @if($proprietario->status === 1)
                        <a class="btn btn-primary" href='{{ url("/proprietario/editar/{$proprietario->id}") }}' role="button">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-danger" href='{{ url("/proprietario/desativar/{$proprietario->id}") }}' role="button">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    @else
                        <a class="btn btn-primary disabled" href='{{ url("/proprietario/editar/{$proprietario->id}") }}' role="button">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-success" href='{{ url("/proprietario/ativar/{$proprietario->id}") }}' role="button">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
      </tbody>
</table>
@endsection