<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

 Route::get('/form', 'App\Http\Controllers\Controlador@index2');

Route::post('/form', 'App\Http\Controllers\Controlador@index') -> name ('meuformulario');

Route::get('/mostra', 'App\Http\Controllers\Controlador@mostra');