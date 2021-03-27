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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/soma', ['App\Http\Controllers\CalculadoraController', 'soma']);
Route::get('/soma', 'App\Http\Controllers\CalculadoraController@soma')->name ('soma');
//Route::get('/rota', ['controller@funcao]);
Route::get('/sub', 'App\Http\Controllers\CalculadoraController@sub')->name ('sub');
Route::get('/multi', 'App\Http\Controllers\CalculadoraController@Multi')->name ('multi');
Route::get('/div', 'App\Http\Controllers\CalculadoraController@Div')->name ('div');
Route::get('/menu', 'App\Http\Controllers\CalculadoraController@menu')->name ('menu');

Route::post('/calcular-soma','App\Http\Controllers\CalculadoraController@calcularSoma')->name ('somar');
Route::post('/calcular-sub','App\Http\Controllers\CalculadoraController@calcularSub')->name ('subtrair');
Route::post('/calcular-multi','App\Http\Controllers\CalculadoraController@calcularMulti')->name ('multiplicar');
Route::post('/calcular-div','App\Http\Controllers\CalculadoraController@calcularDiv')->name ('dividir');