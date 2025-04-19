<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [ContatoController::class, 'index'])->name('contatos.index');
Route::post('/contatos/store', [ContatoController::class, 'store'])->name('contatos.store');
Route::get('/contatos/create', [ContatoController::class, 'create'])->name('contatos.create');
Route::get('/contatos/edit/{id}', [ContatoController::class, 'edit'])->name('contatos.edit');
Route::put('/contatos/update/{contato_id}/{endereco_id}', [ContatoController::class, 'update'])->name('contatos.update');
Route::delete('/contatos/destroy/{id}', [ContatoController::class, 'destroy'])->name('contatos.destroy');
Route::get('/contatos/pesquisar', [ContatoController::class, 'pesquisar'])->name('contatos.pesquisar');


// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any', '.*');
