<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventController extends Controller
{
          
// Lógica das rotas e código para execução

public function index(){
    
    $search = request('search');

    if($search){
        $eventos = Evento::where([
            ['title', 'like','%'.$search.'%']
        ])->get();
    }else{
        $eventos = Evento::all();
    }  
       
    return view('home',['eventos' => $eventos, 'search' => $search]);
}

public function create(){
    return view('eventos.criar');
}

public function store(Request $request){
    $evento = new Evento;

    $evento->title = $request->title;
    $evento->date = $request->date;
    $evento->city = $request->city;
    $evento->private = $request->private;
    $evento->description = $request->description;
    $evento->items = $request->items;

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


public function show($id){
    $evento = Evento::findOrFail($id);

    return view('eventos.show', ['evento' => $evento]);
}

public function destroy($id){
    Evento::where('id', $id)->delete();
    return redirect('/')->with('msg','Jogo excluído com sucesso!');
}
}