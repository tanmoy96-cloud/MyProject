<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::view('user-form','userForm');
Route::post('addUser',[userController::class,'addUser'])->name('bapan') ;
// Route::post('bapan',[userController::class,'addUser']);
