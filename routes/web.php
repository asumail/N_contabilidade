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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/admin', 'HomeController@admin')->name('admin');

Auth::routes();

Route::resource('/empresas', 'SubEmpresaController');

Auth::routes();

Route::resource('/docspredefinidos', 'DocumentoPredefinidoController');

Auth::routes();

Route::resource('/diarios', 'DiarioController');

Auth::routes();

Route::resource('/lancamentos', 'LancamentoController');

Auth::routes();

Route::resource('/planocontas', 'PlanoContaController');

Auth::routes();

Route::resource('/superempresa', 'EmpresaController');

Auth::routes();

Route::resource('/perfil', 'PerfilController');