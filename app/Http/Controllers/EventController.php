<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
          
// Lógica das rotas e código para execução

public function index(){
    $numero = 10;
       
    return view('welcome',['numero' => $numero]);
}

public function create(){
    return view('eventos.criar');
}
}