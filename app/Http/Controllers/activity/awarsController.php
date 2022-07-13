<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use App\Models\premio;
use Illuminate\Http\Request;

class awarsController extends Controller
{
    public function store(Request $request){
        if(!empty($request['id'])){
            $interes=premio::find($request['id']);
            $interes->descripcion=$request['descricion'];
            $interes->update();
        }else{
            $interes=new premio();
         
            $interes->user_id=auth()->user()->id;
            $interes->descripcion=$request['descricion'];
            $interes->save();
        }
       

        return redirect()->back();

    }
}
