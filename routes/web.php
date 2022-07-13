<?php

use App\Http\Controllers\activity\awarsController;
use App\Http\Controllers\activity\educationController;
use App\Http\Controllers\activity\experenciaController;
use App\Http\Controllers\activity\interesController;
use App\Http\Controllers\activity\skillController;
use App\Http\Controllers\Authentication\loginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\dashboard\dashoboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\paymet\paymetController;
use App\Http\Controllers\paypal\paypalController;
use App\Http\Controllers\User\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/',HomeController::class)->middleware('guest');;

Route::resource('/login',loginController::class)->middleware('guest');;

Route::resource('/register',RegisterController::class)->middleware('guest');;

Route::resource('/dashboard',dashoboardController::class)->middleware('auth');

Route::resource('/user',UsuarioController::class)->middleware('auth');

Route::patch('/admin-update/{user}',[UsuarioController::class,'updateAdmin'])->name('user.adminUpdate');

Route::resource('/activity-experencia',experenciaController::class);

Route::resource('/activity-educaction',educationController::class);

Route::resource('/activity-skill',skillController::class);

Route::post('/updateTitle',[skillController::class,'updateTitle'])->name('updateTitle');

Route::resource('/intereses',interesController::class);

Route::resource('/awars',awarsController::class);

Route::resource('/paymet',paymetController::class)->middleware('auth');

Route::post('/logut',[loginController::class,'logout'])->name('logut');