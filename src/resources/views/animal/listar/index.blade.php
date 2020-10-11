@extends ('template.index')
@section ('content')
<h2>Listagem de Animais</h2>
<table class="table table-condensed">
    <thead>
        <tr>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Proprietário</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($animais as $animal)
            <tr>
                <td>{{ $animal->especie }}</td>
                <td>{{ $animal->raca }}</td>
                <td>{{ $animal->nome }}</td>
                <td>
                    @if( $animal->sexo === 'F')
                        FÊMEA
                    @else
                        MACHO
                    @endif
                </td>
                <td>{{ $animal->proprietario->nome_completo }}</td>
                <td>
                    @if($animal->status === 1)
                        <span class="badge badge-primary">ATIVO</span>
                    @else
                        <span class="badge badge-danger">INATIVO</span>
                    @endif
                </td>
                <td>
                    @if($animal->status === 1)
                        <a class="btn btn-primary" href='{{ url("/animal/editar/{$animal->id}") }}' role="button">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-danger" href='{{ url("/animal/desativar/{$animal->id}") }}' role="button">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    @else
                        <a class="btn btn-primary disabled" href='{{ url("/animal/editar/{$animal->id}") }}' role="button">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-success" href='{{ url("/animal/ativar/{$animal->id}") }}' role="button">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
      </tbody>
</table>
@endsection