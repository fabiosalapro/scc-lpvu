<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/navbar-fixed-top/">
        <title>UNESC</title>
        <link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/3.4/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="{{ url('assets/css/navbar-fixed-top.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/auto-complete-style.css') }}" rel="stylesheet">
        <script src="https://getbootstrap.com/docs/3.4/assets/js/ie-emulation-modes-warning.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">UNESC</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('inicio') }}">Início</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Veterinário <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('veterinario.cadastro') }}">Cadastro</a></li>
                                <li><a href="{{ route('veterinario.listar') }}">Listagem</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proprietário <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('proprietario.cadastro') }}">Cadastro</a></li>
                                <li><a href="{{ route('proprietario.listar') }}">Listagem</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Animal <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('animal.cadastro') }}">Cadastro</a></li>
                                <li><a href="{{ route('animal.listar') }}">Listagem</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consulta <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('consulta.cadastro') }}">Cadastro</a></li>
                                <li><a href="{{ route('consulta.listar') }}">Listagem</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nome do Usuário <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Meus Dados</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/3.4/dist/js/bootstrap.min.js"></script>
        <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
        <script src="{{ url('assets/js/zip-code-autocomplete.js') }}"></script>
        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleLabel">Informação!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <strong>
                            {{ session('message') }}
                        </strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        @if (session('message'))
            <script>
                $('#messageModal').modal('show');
            </script>
        @endif
    </body>
</html>