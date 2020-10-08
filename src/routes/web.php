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

Route::get('/',                      ['as' => 'inicio',               'uses' => 'ConsultaController@inicio']);
Route::get('/consulta/cadastro',     ['as' => 'consulta.cadastro',    'uses' => 'ConsultaController@cadastro']);
Route::post('/consulta/cadastrar',   ['as' => 'consulta.cadastrar',   'uses' => 'ConsultaController@cadastrar']);