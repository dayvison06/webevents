<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/eventos/criar', [EventController::class, 'create']);

Route::get('/sobre', function(){

    $nome = 'Dayvison';

    return view ('sobre', ['nome'=>$nome]);
});


Route::get('/produtos', function(){

    $busca = request('search');

    return view ('produtos',['busca' => $busca]);
});

// Rota produtos espera receber um ID
Route::get('/produtos/{id?}', function($id){
    return view ('produto', ['id' => $id]);
});