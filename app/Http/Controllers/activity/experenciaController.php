<?php

namespace App\Http\Controllers\activity;

use App\Http\Controllers\Controller;
use App\Models\experiencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class experenciaController extends Controller
{
   
   public function show(experiencia $activity_experencium){

    return response()->json($activity_experencium);
   }



    public function store(Request $request)
    {

        if ($this->validacion($request->all())->fails()) {
            return response()->json(["ok" => false, "errors" => $this->validacion($request->all())->errors()]);
        }
        if(!empty($request['id'])){
          
          

        
        $experiencia = experiencia::find($request['id']);
        $experiencia->titulo = $request['titulo'];
        $experiencia->lugar_experiencia = $request['lugar_experiencia'];
        $experiencia->descripcion = $request['descripcion'];
        $experiencia->fecha_inicial = $request['fecha_inicial'];
        $experiencia->fecha_final = $request['fecha_final'];

        $experiencia->update();
        return response()->json(["ok"=>true,"message"=>"se han actualizado los datos"]);

      
        }else{

            $experiencia = new experiencia();

            $experiencia->user_id = auth()->user()->id;
            $experiencia->titulo = $request['titulo'];
            $experiencia->lugar_experiencia = $request['lugar_experiencia'];
            $experiencia->descripcion = $request['descripcion'];
            $experiencia->fecha_inicial = $request['fecha_inicial'];
            $experiencia->fecha_final = $request['fecha_final'];
            $experiencia->save();
            return response()->json(["ok"=>true,"message"=>"se han agregado los datos"]);
        }
        

        
    }

  

    public function validacion(array $data)
    {

        return  Validator::make($data, [
            'titulo' => 'required',
            'lugar_experiencia' => 'required',
            'descripcion' => 'required',
            'fecha_inicial' => 'required',
            'fecha_final' => 'required'
        ]);
    }
}
