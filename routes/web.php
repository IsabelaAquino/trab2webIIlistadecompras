<?php

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

Route::get('/', 'GrouplistController@grouplists');

//nome das listas
Route::get('/grouplist/form-adicionar', 'GrouplistController@formAdicionar');
Route::post('/grouplist/adicionar', 'GrouplistController@adicionar');
//chama o formulario de adicionar itens depois de cadastrar do nome da lista
Route::get('/lists/form-adicionar', 'GrouplistController@adicionar');


Route::get('/grouplist/excluir/{id}', 'GrouplistController@excluir');
Route::get('/grouplist/form-editar/{id}', 'GrouplistController@form_editar');
Route::post('/grouplist/editar', 'GrouplistController@editar');

//LISTA DE COMPRAS
Route::get('/lists/lists', 'ListController@lists');
Route::get('/lists/form-adicionar/{grouplist_id}', 'ListController@formAdicionar');
Route::post('/lists/adicionar', 'ListController@adicionar');
$router->get('/grouplist/{grouplist_id}', 'ListController@groupList');
Route::post('/lists/excluir', 'ListController@excluir');
Route::get('/lists/editar/{id}', 'ListController@form_editar');
Route::get('/lists/editar/{id}', 'ListController@form_editar');
Route::post('/lists/editar', 'ListController@editar');
//rota de link do nome da lista com os itens da lista
//Route::get('/grouplist/exibir/{$grouplist_id}', 'ListController@formAdicionar');





