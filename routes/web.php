<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/',[HomeController::class,'home'])->name('home');

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerPost'])->name('registerPost');
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'loginPost'])->name('loginPost');
});


Route::group(['middleware'=>'auth'], function(){
Route::get('/dashboard',[HomeController::class,'index']);
Route::delete('/logout',[AuthController::class,'logout'])->name('logout');
});
