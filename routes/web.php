<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Controles@home');

Route::get('/produto', 'Controles@produto');

Route::get('/pesquisa', 'Controles@pesquisa');

Route::get('/reserva', 'Controles@reserva');

Route::get('/Rpesq', 'Controles@Rpesq');

Route::get('/item/{id}', 'Controles@item');

Route::get('/reservas/{id}', 'Controles@reservas');

Route::post('/cadastro', 'UsuariosController@store');

Route::post('/login', 'UsuariosController@login');
///////////////////////////////
Route::get('/laravel', function () { return view('welcome');});
