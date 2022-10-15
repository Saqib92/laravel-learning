<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){

    if(session()->has('email')){
        return redirect('profile');
    }
    return view('login');

});
Route::post('loginPost', [LoginController::class, 'loginPost']);

Route::get('/logout', function(){
    if(session()->has('email')){
        session()->pull('email', null);
    }
    return redirect('login');
});

Route::get('/profile', function(){
    if(session()->has('email')){
        return view('profile');
    }
    return redirect('login');
});


Route::view('/home', 'home');
Route::view('/about', 'about');