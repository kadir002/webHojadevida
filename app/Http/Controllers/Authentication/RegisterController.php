<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\Register;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(){
        return view('Authentication.register');
    }



    public function store(Register $request){

       

            event(new Registered($this->create($request->all())));

            if(Auth::attempt($request->only('email', 'password'))){
                request()->session()->regenerate();
            }
            return redirect('/');
    }




    private function create(array $data){
        return User::create([
        'nombre'=>$data['nombre'],
        'apellido'=>$data['apellido'],
        'email'=>$data['email'],
        'password'=>Hash::make($data['password'])
        ]);
    }

    private function validator(array $data){
        $validator = Validator::make($data,[
         'nombre'=>'required|alpha',
         'apellido'=>'required|alpha',
         'email'=>'required|email|unique:users',
         'password'=>'required|min:6',
        ]);

        return $validator->fails();
        
    }
    
}
