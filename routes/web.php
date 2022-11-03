<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\fileuploadController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AddmemberController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\AggregateController;


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
    $data[0]['title'] = '"Welcome 2D Jungle" Leaf Wall Art';
    $data[0]['image'] = 'assets/imgs/home-products/product1.webp';
    $data[0]['price'] = '$100';

    $data[1]['title'] = 'Products 2';
    $data[1]['image'] = 'assets/imgs/home-slider/slider1.jpg';
    $data[1]['price'] = '$200';

    $data[2]['title'] = 'Products 3';
    $data[2]['image'] = 'assets/imgs/home-slider/slider2.jpg';
    $data[2]['price'] = '$300';

    $data[3]['title'] = 'Products 4';
    $data[3]['image'] = 'assets/imgs/home-slider/slider3.jpg';
    $data[3]['price'] = '$300';

    $data[4]['title'] = 'Products 4';
    $data[4]['image'] = 'assets/imgs/home-slider/slider3.jpg';
    $data[4]['price'] = '$300';

    return view('home', ['products' =>$data]);
});

Route::view('/about', 'about');

Route::controller(SignupController::class)->group(function(){ 
    Route::get('signup', 'index');
    Route::post('signupPost', 'registerUser');
});

Route::get('/login', function(){
    if(session()->has('email')){
        return redirect('profile');
    }
    return view('login');
})->name('login');


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

Route::view('/fileupload', 'fileupload');
Route::post('/uploadFile', [fileuploadController::class, 'index']);

Route::get('/list', [ListController::class, 'show']);
Route::get('/delete/{id}', [ListController::class, 'delete']);
Route::get('/edit/{id}', [ListController::class, 'edit']);
Route::POST('/saveMember', [ListController::class, 'saveMember']);


Route::view('/addmember', 'addmember');
Route::post('/addMemberData', [AddmemberController::class, 'addData']);


Route::get('query', [QueryController::class, 'operations']);

Route::get('aggregate', [AggregateController::class, 'operations']);