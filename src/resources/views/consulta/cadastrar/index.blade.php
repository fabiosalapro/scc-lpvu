@extends ('template.index')

@section ('content')

    <form>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
        <h3>Informações do Veterinário</h3>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Nome Completo</label>
                <input type="text" class="form-control" id="veterinario_nome_completo" placeholder="Nome Completo" required="" autofocus="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-3">
            <div class="form-group">
                <label>CEP</label>
                <input type="text" class="form-control" id="veterinario_cep" placeholder="CEP" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>Endereço</label>
                <input type="text" class="form-control" id="veterinario_endereco" placeholder="Endereço" required="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Número</label>
                <input type="text" class="form-control" id="veterinario_numero" placeholder="Número" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <div class="form-group">
                <label>Complemento</label>
                <input type="text" class="form-control" id="veterinario_complemento" placeholder="Complemento" required="">
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control" id="veterinario_bairro" placeholder="Bairro" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" id="veterinario_cidade" placeholder="Cidade" required="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control" id="veterinario_estado" maxlength="2" placeholder="UF" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" id="veterinario_telefone" placeholder="Telefone" required="">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" id="veterinario_email" placeholder="E-mail" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>

    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
        <h3>Informações do Proprietário</h3>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Nome Completo</label>
                <input type="text" class="form-control" id="proprietario_nome_completo" placeholder="Nome Completo" required="" autofocus="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-3">
            <div class="form-group">
                <label>CEP</label>
                <input type="text" class="form-control" id="proprietario_cep" placeholder="CEP" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>Endereço</label>
                <input type="text" class="form-control" id="proprietario_endereco" placeholder="Endereço" required="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Número</label>
                <input type="text" class="form-control" id="proprietario_numero" placeholder="Número" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <div class="form-group">
                <label>Complemento</label>
                <input type="text" class="form-control" id="proprietario_complemento" placeholder="Complemento" required="">
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control" id="proprietario_bairro" placeholder="Bairro" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" id="proprietario_cidade" placeholder="Cidade" required="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control" id="proprietario_estado" maxlength="2" placeholder="UF" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" id="proprietario_telefone" placeholder="Telefone" required="">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" id="proprietario_email" placeholder="E-mail" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>

    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-10">
            <h3>Informações do Animal</h3>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" id="animal_nome" placeholder="Nome" required="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Espécie</label>
                <input type="text" class="form-control" id="animal_especie" placeholder="Espécie" required="">
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Raça</label>
                <input type="text" class="form-control" id="animal_raca" placeholder="Raça" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Sexo</label>
                <select class="form-control" id="animal_sexo" required="">
                    <option value="">Selecione</option>
                    <option value="F">Fêmea</option>
                    <option value="M">Macho</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Idade</label>
                <input type="text" class="form-control" id="animal_idade" placeholder="Idade" required="">
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
                <select class="form-control" id="amostras_histo" required="">
                    <option value="N" selected>Não</option>
                    <option value="S">Sim</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Micro</label>
                <select class="form-control" id="amostras_micro" required="">
                    <option value="N" selected>Não</option>
                    <option value="S">Sim</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Micol</label>
                <select class="form-control" id="amostras_micol" required="">
                    <option value="N" selected>Não</option>
                    <option value="S">Sim</option>
                </select>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="form-group">
                <label>Paras</label>
                <select class="form-control" id="amostras_paras" required="">
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
                <select class="form-control" id="amostras_citol" required="">
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
            <textarea class="form-control" id="epidemiologia_historia_clinica" placeholder="Epidemiologia e História Clínica" required=""></textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
            <label>Lesões Macroscópicas</label>
            <textarea class="form-control" id="lesoes_macroscopicas" placeholder="Lesões Macroscópicas" required=""></textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
            <label>Lesões Histológicas</label>
            <textarea class="form-control" id="lesoes_histologicas" placeholder="Lesões Histológicas" required=""></textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label>Diagnóstico</label>
                <input type="text" class="form-control" id="diagnostico" placeholder="Diagnóstico" required="">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
            <label>Relatório</label>
            <textarea class="form-control" id="relatorio" placeholder="Relatório" required=""></textarea>
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>

    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-1">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        <div class="col-xs-1">
            <button type="button" class="btn btn-default">Limpar</button>
        </div>
        <div class="col-xs-2"></div>
    </div>
    </form>

@endsection