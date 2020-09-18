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
/*
Essa rota está dizendo: quando o usuário acessar via get a raiz do sistema ele vai rodar essa função vai carregar um view chamado welcome
*/
Route::get('/teste',function(){
    echo "basicão testado!";
});