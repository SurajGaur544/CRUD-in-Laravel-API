<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('getData');
});

Route::get('getData',[ProductController::class,'getData']);
Route::get('delete/{id}',[ProductController::class,'delete']);
Route::post('/editData',[ProductController::class,'editData']);
Route::get('update/{id}',[ProductController::class,'update']);
