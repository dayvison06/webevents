<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/eventos/criar', [EventController::class, 'create']);
Route::post('/eventos', [EventController::class, 'store']);

Route::get('/sobre', function(){
    return view ('sobre');
});
