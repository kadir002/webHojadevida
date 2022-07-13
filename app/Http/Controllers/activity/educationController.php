<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use App\Models\educations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class educationController extends Controller
{

 public function show(educations $activity_educaction){
    return response()->json($activity_educaction);
 }



    public function store(Request $request){
        if ($this->validacion($request->all())->fails()) {
            return response()->json(["ok" => false, "errors" => $this->validacion($request->all())->errors()]);
        }
        if(!empty($request['id'])){
            $educacion= educations::find($request['id']);
            $educacion->titulo = $request['titulo'];
            $educacion->nombre_centro = $request['nombre_centro'];
            $educacion->detalle = $request['detalle'];
            $educacion->fecha_inicial = $request['fecha_inicial'];
            $educacion->fecha_final = $request['fecha_final'];
            $educacion->update();

            return response()->json(["ok"=>true,"message"=>"se han agregado los datos"]);
        }else{
            $educacion= new educations();
            $educacion->user_id = auth()->user()->id;
            $educacion->titulo = $request['titulo'];
            $educacion->nombre_centro = $request['nombre_centro'];
            $educacion->detalle = $request['detalle'];
            $educacion->fecha_inicial = $request['fecha_inicial'];
            $educacion->fecha_final = $request['fecha_final'];
            $educacion->save();

            return response()->json(["ok"=>true,"message"=>"se han agregado los datos"]);
        }
    }


 




    public function validacion(array $data)
    {

        return  Validator::make($data, [
            'titulo' => 'required',
            'nombre_centro' => 'required',
            'detalle' => 'required',
            'fecha_inicial' => 'required',
            'fecha_final' => 'required'
        ]);
    }
}
