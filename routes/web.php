<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.Homepage');
});

Route::middleware('guest')->group(function () {
Route::get('/register', [RegisterUserController::class,'open']);
Route::post('/register', [RegisterUserController::class,'register']);

Route::get('/login', [SessionController::class,'open']);
Route::post('/login', [SessionController::class,'store']);
});

Route::delete('/logout', [SessionController::class,'logout'])->middleware('auth');

Route::middleware('auth')->group(function(){

Route::get('/notes', [NoteController::class,'index']);
Route::get('/notes/create', [NoteController::class,'create']);
Route::post('/notes/create', [NoteController::class,'store']);
Route::get('/notes/{note}', [NoteController::class,'show']);
Route::get('/notes/{note}/edit', [NoteController::class, 'edit']);
Route::patch('/notes/{note}/edit', [NoteController::class,'update']);
Route::delete('/notes/{note}', [NoteController::class,'destroy']);
});
