var $input_cep = document.getElementById('cep');
var $input_endereco = document.getElementById('endereco');
var $input_complemento = document.getElementById('complemento');
var $input_bairro = document.getElementById('bairro');
var $input_cidade = document.getElementById('cidade');
var $input_estado = document.getElementById('estado');

var $ajax = new XMLHttpRequest();

function zipCodeConsult() {
    function stateChange() {
        if (requestSuccess()) {
            $api_data = JSON.parse($ajax.responseText);

            $input_endereco.value = $api_data.logradouro.toUpperCase();
            $input_complemento.value = $api_data.complemento.toUpperCase();
            $input_bairro.value = $api_data.bairro.toUpperCase();
            $input_cidade.value = $api_data.localidade.toUpperCase();
            $input_estado.value = $api_data.uf.toUpperCase();
        }
    }

    function requestSuccess() {
        return $ajax.readyState === 4 && $ajax.status === 200;
    }

    function cleanData($data) {
        return $data.replace(/[^\d]+/g,'');
    }

    var $proxy_url = 'https://cors-anywhere.herokuapp.com/';
    var $api_url = "https://viacep.com.br/ws/"+cleanData($input_cep.value)+"/json/";

    $ajax.open("GET", $proxy_url+$api_url);
    $ajax.send();
    $ajax.addEventListener('readystatechange', stateChange);
}

$input_cep.addEventListener('change', zipCodeConsult);