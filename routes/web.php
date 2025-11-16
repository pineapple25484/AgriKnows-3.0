<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);


Route::get('/user-setting', function () {
    return view('user-setting');
})->name('user.setting');


Route::get('/welcome', [TestController::class, 'showHistory']);

// Logout
Route::get('/logout', [AuthController::class, 'logout']);