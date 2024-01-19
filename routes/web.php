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


Route::middleware('custom_middleware')->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\Controller::class,'Dashboard'])->name('dash');//needs styling
    Route::post('/uploadProfilePics',[\App\Http\Controllers\uploadController::class,'save_pics_path'])->name('pics');
});
Route::get('/', function () {
    return view('welcome');//needs styling;
});//1
Route::get('/Register',[\App\Http\Controllers\Controller::class,'getRegister']);//needs styling//22a
Route::post('/Register',[\App\Http\Controllers\Controller::class,'Register'])->name('register');//33a
Route::get('/login',[\App\Http\Controllers\Controller::class,'getLogin'])->name('login');//22b,,needs styling
Route::post('/loginpost',[\App\Http\Controllers\Controller::class,'Login'])->name('loginpost');//33b
