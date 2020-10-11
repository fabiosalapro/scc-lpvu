@extends ('template.index')
@section ('content')
<h2>Listagem de Veterinários</h2>
<table class="table table-condensed">
    <thead>
        <tr>
            <th>Nome Completo</th>
            <th>Situação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($veterinarios as $veterinario)
            <tr>
                <td>{{ $veterinario->nome_completo }}</td>
                <td>
                    @if($veterinario->status === 1)
                        <span class="badge badge-primary">ATIVO</span>
                    @else
                        <span class="badge badge-danger">INATIVO</span>
                    @endif
                </td>
                <td>
                    @if($veterinario->status === 1)
                        <a class="btn btn-primary" href='{{ url("/veterinario/editar/{$veterinario->id}") }}' role="button">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-danger" href='{{ url("/veterinario/desativar/{$veterinario->id}") }}' role="button">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    @else
                        <a class="btn btn-primary disabled" href='{{ url("/veterinario/editar/{$veterinario->id}") }}' role="button">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-success" href='{{ url("/veterinario/ativar/{$veterinario->id}") }}' role="button">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
      </tbody>
</table>
@endsection