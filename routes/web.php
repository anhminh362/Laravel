<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome',function (){
   return 'Chào mừng các bạn đã đến với PNV';
});
Route::get('my-controller',[\App\Http\Controllers\MyController::class,'index']);
Route::post('my-controller',[\App\Http\Controllers\MyController::class,'store']);
