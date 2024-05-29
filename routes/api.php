<?php

use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Console\UpCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\map;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::GET('getData/{id?}',[ProductController::class,'getData']);
Route::view('addProduct','addProduct');
Route::POST('postData',[ProductController::class,'postData']);
Route::PUT('edit',[ProductController::class,'dataEdit']);
Route::GET('delete/{id}',[ProductController::class,'delete']);
Route::GET('search/{name}',[ProductController::class,'search']);