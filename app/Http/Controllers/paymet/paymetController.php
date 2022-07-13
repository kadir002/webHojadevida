<?php

namespace App\Http\Controllers\paymet;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
class paymetController extends Controller



{

    // private $gateway;

    // public function __construct(){
    //     $this->gateway=Omnipay::create(); 
    // }
    public function index(){
        return view('dashboard.paypal');
    }

    public function store(Request $request){

        $user=User::find(auth()->user()->id);

        $user->estado="A";

        $user->update();
         
        return response()->json(true);
    }
}
