<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {
    Route::get('/login', function (){return view('Auth.login');});
    Route::get('/register', function (){return view('Auth.register');});
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});


Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class,'index']);
    Route::post('/', [HomeController::class, 'store']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
