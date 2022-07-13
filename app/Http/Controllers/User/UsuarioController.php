<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{




    public function show(User $user)
    {
        return view('dashboard.admin', compact('user'));
    }

    public function store($request)
    {

    }

    public function update(request $request, $user)
    {
        $user = User::find($user);


        if(!empty($request['direccion'])){$user->direccion = $request->input('direccion');}  
        if(!empty($request['telefono'])){$user->telefono = $request->input('telefono');}
        if(!empty($request['descripcion'])){$user->descripcion = $request->input('descripcion');}
        
        
        

        $user->update();

        return redirect('/dashboard');
        
    }
    public function updateAdmin(Request $request,$user){
        $update = User::find($user);


        if(!empty($request['direccion'])){$update->direccion = $request->input('direccion');}  
        if(!empty($request['telefono'])){$update->telefono = $request->input('telefono');}
        if(!empty($request['descripcion'])){$update->descripcion = $request->input('descripcion');}
        if(!empty($request['img_perfil'])){
            //codigo para actualizar perfil
        }
        if(!empty($request['nombre'])){$update->nombre = $request->input('nombre');}
        if(!empty($request['apellido'])){$update->apellido = $request->input('apellido');}

        if(!empty($request['facebook'])){$update->facebook = $request->input('facebook');}
        if(!empty($request['twitter'])){$update->twitter = $request->input('twitter');}
        if(!empty($request['linkedin'])){$update->linkedin = $request->input('linkedin');}
        
        if(!empty($request['file'])){
          $imagen=  $request->file('file')->store('public/imagenes');
            $update->img_perfi = Storage::url($imagen);
        
        }


        $update->update();

        return redirect('/user'.'/'.$user);
    }


    
    
}
