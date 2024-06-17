<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
       

    $numero = 10;

    return view('welcome',['numero' => $numero]);
});

Route::get('/sobre', function(){

    $nome = 'Dayvison';

    return view ('sobre', ['nome'=>$nome]);
});

Route::get('/produtos', function(){
    return view ('produtos');
});