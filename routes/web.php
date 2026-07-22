<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.Homepage');
});

Route::get('/register', [RegisterUserController::class,'open']);
Route::post('/register', [RegisterUserController::class,'register']);


Route::get('/login', [SessionController::class,'open']);
Route::post('/login', [SessionController::class,'store']);
