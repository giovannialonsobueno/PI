<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Controles@home');

Route::get('/pesquisa', 'Controles@pesquisa');

Route::get('/reserva', 'Controles@reserva');

Route::get('/Rpesq', 'Controles@Rpesq');

Route::get('/item/{id}', 'Controles@item');

Route::get('/reservas/{id}', 'Controles@reservas');

Route::get('/logout', 'UsuariosController@logout');

Route::get('/login', 'Controles@login');

Route::get('/cadastro', 'Controles@cadastro');

Route::get('/hotelAdmin', 'EstabelecimentosController@hotelAdmin');

Route::get('/cadastroQuartos/{id}', "Controles@cadastroQuartos");

Route::get('/homeAdmin', 'Controles@homeAdmin');

Route::get('/user', 'Controles@user');

Route::get('/perfil/{id}','Controles@perfil');

Route::post('/cadastro', 'UsuariosController@cadastro');

Route::post('/login', 'UsuariosController@login');

Route::post('/atualizar', "UsuariosController@atualizar");

Route::post('/atualizarSenha', "UsuariosController@atualizarSenha");

Route::post('/cadastroHotel', 'EstabelecimentosController@cadastroHotel');

Route::post('/cadastroQuartos', 'QuartosController@cadastrarQuarto');

Route::get('/dadosHotelAdmin/{id}','EstabelecimentosController@dadosHotelAdmin');

Route::get('/quartosAdmin/{id}','QuartosController@quartosAdmin');
///////////////////////////////
Route::get('/laravel', function () { return view('welcome');});
