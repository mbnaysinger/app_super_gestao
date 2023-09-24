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

Route::get("/", [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get("/teste/{nome}/{idade}", function(string $nome, string $idade) {
    echo 'Estamos aqui: '.$nome.' - Idade: '.$idade.' Anos';
});

Route::get('/teste', function () {
    return view('welcome');
});
