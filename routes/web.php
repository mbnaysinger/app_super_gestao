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

Route::get("/", [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get("/contato", [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get("/sobrenos", [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; })->name('site.clientes');
    Route::get('/fornecedores', function() { return 'Fornecedores'; })->name('site.fornecedores');
    Route::get('/produtos', function() { return 'Produtos'; })->name('site.produtos');
});

Route::get('/rota1', function() { echo 'Rota 1'; })->name('site.rota1');
Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::get("/teste/{nome}/{idade}", function(string $nome, string $idade) {
    echo 'Estamos aqui: '.$nome.' - Idade: '.$idade.' Anos';
});

Route::get('/laravel', function () {
    return view('welcome');
})->name('laravel.index');

Route::fallback(function() {
    echo 'A rota acessada não existe.
    <a href="'.route('site.index').'">Clique aqui</a> para acessar a página incial.';
});