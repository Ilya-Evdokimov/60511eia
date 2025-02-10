<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MyFirstPageController;
Route::get('/abc', [MyFirstPageController::class, 'index']);

use App\Http\Controllers\MyHelloController;
Route::get('/hello', [MyHelloController::class, 'index']);