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
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\adminorderController;
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

// Route::get('/', function () {
    

//     return view('home', ['products' =>$data]);
// });


Route::controller(ProductsController::class)->group(function(){ 
    Route::get('/', 'index');
    Route::get('product/{id}', 'getSingleProduct');


    // for Admin Use
    Route::get('/addproduct', 'getAddProduct');
    Route::post('addProduct', 'addProduct');

});

Route::view('/about', 'about');

Route::controller(SignupController::class)->group(function(){ 
    Route::get('signup', 'index');
    Route::post('signupPost', 'registerUser');
});

Route::controller(LoginController::class)->group(function(){ 
    Route::get('login', 'index');
    Route::post('loginPost', 'loginUser');
});

// Route::get('/login', function(){
//     if(session()->has('email')){
//         return redirect('profile');
//     }
//     return view('login');
// })->name('login');
// Route::post('loginPost', [LoginController::class, 'loginPost']);

Route::get('/logout', function(){
    if(session()->has('email') || session()->has('is_admin')){
        session()->pull('email', null);
        session()->put('is_admin', false);
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


//Route::get('query', [QueryController::class, 'operations']);
//Route::get('aggregate', [AggregateController::class, 'operations']);


Route::controller(CartController::class)->group(function(){ 
    Route::get('/cart', 'getCartItems');
    Route::post('addToCart', 'addToCart');
});

Route::controller(OrdersController::class)->group(function(){ 
    Route::post('/checkOut', 'checkOut');    
});

//Admin Routes and Controller

Route::controller(AdminUserController::class)->group(function(){ 
    Route::view('/adminlogin', 'admin.adminlogin');
    Route::get('adminlogin', 'index');
    Route::post('login', 'adminLogin');
});

Route::controller(adminorderController::class)->group(function(){
    Route::get('/adminorders', 'index');
});