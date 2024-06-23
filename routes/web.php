<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// Página inicial
Route::get('/', [EventController::class, 'index']);
// Criar um evento
Route::get('/eventos/criar', [EventController::class, 'create']);
// Rota para mostrar um dado especifico
Route::get('eventos/{id}', [EventController::class, 'show']);
// Rota para armazenar o evento cadastrado com base na documentação do laravel
Route::post('/eventos', [EventController::class, 'store']);
//Rota para deletar evento
Route::delete('/eventos/{id}',[EventController::class,'destroy'])->where('id', '[0-9]+')->name('eventos-destroy');;
Route::get('/sobre', function(){
    return view ('sobre');
});
