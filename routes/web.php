<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Controles@home');

Route::get('/pesquisa', 'Controles@pesquisa');

Route::get('/reserva', 'Controles@reserva');

Route::get('/Rpesq', 'Controles@Rpesq');

Route::get('/item/{id}', 'Controles@item');

Route::get('/reservas/{id}', 'Controles@reservas')->middleware('auth');

Route::post('/cadastro', 'UsuariosController@cadastro')->middleware('guest');

Route::post('/login', 'UsuariosController@login')->middleware('guest');

Route::get('/logout', 'UsuariosController@logout')->middleware('auth');

Route::get('/entrar', 'Controles@entrar')->middleware('guest');

Route::get('/cadastroHotel', 'Controles@cadastroHotel');

Route::get('/homeAdmin', 'Controles@homeAdmin');

Route::get('/hotel', 'Controles@hotel');

Route::get('/user', 'Controles@user');
///////////////////////////////
Route::get('/laravel', function () { return view('welcome');});
