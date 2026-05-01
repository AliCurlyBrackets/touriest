<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('FrontEnd.index');
});


// Auth Routes


Route::controller(RegisterController::class)->group(function(){
    Route::get('/register' , 'index')->name('register.index');
    Route::post('/registered' , 'register')->name('register.register') ;
});


Route::controller(LoginController::class)->group(function(){
    Route::get('/login' , 'index')->name('login.index');
    Route::post('/signin' , 'login')->name('login.login') ;
});
