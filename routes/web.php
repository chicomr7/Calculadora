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
Route::get('/soma', 'App\Http\Controllers\CalculadoraController@soma');
//Route::get('/rota', ['controller@funcao]);