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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', 'Controles@home');

Route::get('/cadastro', 'Controles@cadastro');

Route::get('/favoritos', 'Controles@favoritos');

Route::get('/login', 'Controles@login');

Route::get('/produto', 'Controles@produto');

Route::get('/item', 'Controles@item');
///////////////////////////////
Route::get('/laravel', function () {
    return view('welcome');
});
