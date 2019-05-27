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

Route::get('/', 'ListController@lists');

Route::get('/lists/form-adicionar', 'ListController@formAdicionar');
Route::post('/lists/adicionar', 'ListController@adicionar');
Route::get('/lists/excluir/{id}', 'ListController@excluir');
Route::get('/lists/editar/{id}', 'ListController@form_editar');
Route::post('/lists/editar', 'ListController@editar');
