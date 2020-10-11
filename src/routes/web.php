<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',                               ['as' => 'inicio',                  'uses' => 'ConsultaController@inicio']);

Route::get('/veterinario/cadastro',           ['as' => 'veterinario.cadastro',    'uses' => 'VeterinarioController@cadastro']);
Route::post('/veterinario/cadastrar',         ['as' => 'veterinario.cadastrar',   'uses' => 'VeterinarioController@cadastrar']);
Route::get('/veterinario/listar',             ['as' => 'veterinario.listar',      'uses' => 'VeterinarioController@listar']);
Route::get('/veterinario/editar/{id}',        ['as' => 'veterinario.editar',      'uses' => 'VeterinarioController@editar']);
Route::put('/veterinario/atualizar/{id}',     ['as' => 'veterinario.atualizar',   'uses' => 'VeterinarioController@atualizar']);
Route::get('/veterinario/ativar/{id}',        ['as' => 'veterinario.ativar',      'uses' => 'VeterinarioController@ativar']);
Route::get('/veterinario/desativar/{id}',     ['as' => 'veterinario.desativar',   'uses' => 'VeterinarioController@desativar']);

Route::get('/proprietario/cadastro',          ['as' => 'proprietario.cadastro',    'uses' => 'ProprietarioController@cadastro']);
Route::post('/proprietario/cadastrar',        ['as' => 'proprietario.cadastrar',   'uses' => 'ProprietarioController@cadastrar']);
Route::get('/proprietario/listar',            ['as' => 'proprietario.listar',      'uses' => 'ProprietarioController@listar']);
Route::get('/proprietario/editar/{id}',       ['as' => 'proprietario.editar',      'uses' => 'ProprietarioController@editar']);
Route::put('/proprietario/atualizar/{id}',    ['as' => 'proprietario.atualizar',   'uses' => 'ProprietarioController@atualizar']);
Route::get('/proprietario/ativar/{id}',       ['as' => 'proprietario.ativar',      'uses' => 'ProprietarioController@ativar']);
Route::get('/proprietario/desativar/{id}',    ['as' => 'proprietario.desativar',   'uses' => 'ProprietarioController@desativar']);

Route::get('/animal/cadastro',                ['as' => 'animal.cadastro',          'uses' => 'AnimalController@cadastro']);
Route::post('/animal/cadastrar',              ['as' => 'animal.cadastrar',         'uses' => 'AnimalController@cadastrar']);
Route::get('/animal/listar',                  ['as' => 'animal.listar',            'uses' => 'AnimalController@listar']);
Route::get('/animal/editar/{id}',             ['as' => 'animal.editar',            'uses' => 'AnimalController@editar']);
Route::put('/animal/atualizar/{id}',          ['as' => 'animal.atualizar',         'uses' => 'AnimalController@atualizar']);
Route::get('/animal/ativar/{id}',             ['as' => 'animal.ativar',            'uses' => 'AnimalController@ativar']);
Route::get('/animal/desativar/{id}',          ['as' => 'animal.desativar',         'uses' => 'AnimalController@desativar']);
Route::get('/animal/api/proprietario/{id}',   ['as' => 'animal.api',               'uses' => 'AnimalController@animaisPorProprietario']);

Route::get('/consulta/cadastro',              ['as' => 'consulta.cadastro',        'uses' => 'ConsultaController@cadastro']);
Route::post('/consulta/cadastrar',            ['as' => 'consulta.cadastrar',       'uses' => 'ConsultaController@cadastrar']);
Route::get('/consulta/listar',                ['as' => 'consulta.listar',          'uses' => 'ConsultaController@listar']);
Route::get('/consulta/visualizar/{id}',       ['as' => 'consulta.visualizar',      'uses' => 'ConsultaController@visualizar']);
Route::post('/consulta/filtrar',              ['as' => 'consulta.filtrar',         'uses' => 'ConsultaController@filtrar']);
Route::get('/consulta/pagamento/{id}',        ['as' => 'consulta.pagar',           'uses' => 'ConsultaController@pagar']);