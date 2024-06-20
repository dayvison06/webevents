<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventController extends Controller
{
          
// Lógica das rotas e código para execução

public function index(){
    
    $eventos = Evento::all();
       
    return view('home',['eventos' => $eventos]);
}

public function create(){
    return view('eventos.criar');
}
}