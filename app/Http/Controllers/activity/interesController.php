<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use App\Models\intere;
use Illuminate\Http\Request;

class interesController extends Controller
{
    public function store(Request $request){

        if(!empty($request['id'])){
            $interes=intere::find($request['id']);
            $interes->descripcion=$request['descricion'];
            $interes->update();
        }else{
            $interes=new intere();
         
            $interes->user_id=auth()->user()->id;
            $interes->descripcion=$request['descricion'];
            $interes->save();
        }
       

        return redirect()->back();
    }
}
