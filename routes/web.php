<?php

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
//Route::any('/test',[suisei::class,'test']);
Route::get('/',function(){
  return view('/layouts.master');});
//
//
//


Route::get('/test',[\App\Http\Controllers\suisei::class,'suisei']);
Route::get('/index',[\App\Http\Controllers\TodoController::class,'index']);
Route::get('/create',[\App\Http\Controllers\TodoController::class,'create']);
Route::get('/store',[\App\Http\Controllers\TodoController::class,'store'])->name('store');


