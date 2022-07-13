<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class viewUserController extends Controller
{
    
    public function show( $id){
      $user= User::find($id);       


      $experencia=$user->experencia;
      $educacion=$user->education;
      // $habilidadesTitle=auth()->user()->habilidades->pluck('titulo');
      $habilidades=$user->habilidades;
      $interes=$user->intere;
      $premio=$user->premio;
      return view('dashboard.show',compact('user','experencia','educacion','habilidades','interes','premio',));
    }
}
