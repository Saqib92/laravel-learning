<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testApi;
use App\Http\Controllers\DeviceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('getData', [testApi::class, 'getData']);

Route::get('getList/{id?}', [DeviceController::class, 'getList']);
Route::post('saveDevice', [DeviceController::class, 'saveDevice']);
Route::delete('deleteDevice/{id}', [DeviceController::class, 'deleteDevice']);
Route::get('seaarchDevice/{name}', [DeviceController::class, 'searchDevice']);

Route::post('validate', [DeviceController::class, 'validateTest']);