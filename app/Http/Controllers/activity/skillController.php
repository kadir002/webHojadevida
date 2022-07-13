<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use App\Models\habilidade;
use Illuminate\Http\Request;

class skillController extends Controller
{
    public function store(Request $request){
           $skil= new habilidade();
           $skil->user_id=auth()->user()->id;
           $skil->titulo=$request['titulo'];
           $skil->descripcion=$request['descripcion'];

           $skil->save();

           return redirect()->back();
    }

    public function updateTitle(Request $request){
        $skill=habilidade::find($request->input('id'));

        if(!empty($request['titulo'])){
            $skill->titulo=$request->input('titulo');
        }elseif(!empty($request['descripcion'])){
            $skill->descripcion=$request['descripcion'];
        };
    

        $skill->update();

        return redirect()->back();
     
        
    }
}
