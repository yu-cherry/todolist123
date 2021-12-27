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
//
//
//
Route::get('/test',[\App\Http\Controllers\suisei::class,'suisei']);
Route::get('/index',[\App\Http\Controllers\TodoController::class,'index'])->name('index');
Route::get('/create',[\App\Http\Controllers\TodoController::class,'get_create_page'])->name('get_create_page');
Route::post('/create',[\App\Http\Controllers\TodoController::class,'store_create_data'])->name('store_create_data');

//刪除
Route::get('/delete', [\App\Http\Controllers\TodoController::class, 'delete_data'])
    ->name('delete_data');

//修改
Route::get('/edit', [\App\Http\Controllers\TodoController::class, 'get_edit_page'])
    ->name('get_edit_page');

Route::post('/edit', [\App\Http\Controllers\TodoController::class, 'get_edit_data'])
    ->name('get_edit_data');
