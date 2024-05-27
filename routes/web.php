<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[PostController::class,'index']);
Route::get('post',[PostController::class,'store']);
