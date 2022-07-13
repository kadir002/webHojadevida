<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\habilidade;
use Illuminate\Http\Request;

class dashoboardController extends Controller
{

    public function edit($dashboard){
         
       

    }


    public function index(){

        $experencia=auth()->user()->experencia;
        $educacion=auth()->user()->education;
        // $habilidadesTitle=auth()->user()->habilidades->pluck('titulo');
        $habilidades=auth()->user()->habilidades;
        $interes=auth()->user()->intere;
        $premio=auth()->user()->premio;
          
     
        return view('dashboard.index',compact('experencia','educacion','habilidades','interes','premio',));
    
    }
}
