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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','Home')->name('Home');

Route::post('/guardar','ControladorForm@guardar');
Route::post('/cargar','ControladorForm@cargar');
Route::post('/index','ControladorForm@index');
