<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class loginController extends Controller
{
    public function index(){
        return view('Authentication.login');
    }

    public function store(Request $request){
        $credencial=request(['email','password']);

        if(Auth::attempt($credencial)){
            request()->session()->regenerate();

            return redirect('/dashboard');
        }

        throw ValidationException::withMessages([
            'password'=>__('la contraseña no concinde con el correo')
            
        ]);
    }


    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
           
        $request->session()->regenerateToken();
      
        return redirect('/');
      }
}
