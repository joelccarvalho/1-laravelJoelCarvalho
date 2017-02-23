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


Route::post("/adicionarNotificacao", "NotificacoesController@store");

Route::get('/adicionarNotificacao', function () {
    return view('adicionarNotificacao');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get("delete&{id}", "NotificacoesController@destroy");

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
