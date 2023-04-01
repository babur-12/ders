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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',function (){
    return view('home');
})->name('home');
Route::get('/about',function (){
    return view('about');
})->name('about');
Route::get('/contact',function (){
   return view('contact');
})->name('contact');
Route::prefix('admin',)->group(function (){
    Route::get('/user',[\App\Http\Controllers\userController::class,'index'])->name('admin_index');
    Route::get('/show',[\App\Http\Controllers\userController::class,'show'])->name('admin_show');
    Route::get('/create',[\App\Http\Controllers\userController::class,'create'])->name('admin_creat');
});
