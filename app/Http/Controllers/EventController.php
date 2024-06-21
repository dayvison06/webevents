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

public function store(Request $request){
    $evento = new Evento;

    $evento->title = $request->title;
    $evento->city = $request->city;
    $evento->private = $request->private;
    $evento->description = $request->description;

    //image upload
    if($request-> hasFile('image') && $request->file('image')->isValid()){
        $requestImage = $request->image;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

        $requestImage->move(public_path('img/eventos'), $imageName);

        $evento->image = $imageName;
    }else{
        
        $evento->image = 'placeholder-image.svg'; 
    }

    $evento->save();

    return redirect('/')->with('msg','Evento criado com sucesso!');
}

}