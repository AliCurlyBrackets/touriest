<?php

use App\Http\Controllers\Admin_Dashboard\AdminController;
use Illuminate\Support\Facades\Route;



Route::controller(AdminController::class)->middleware('auth')->group(function(){
    Route::get('/dashboard' , 'index')->name('dashboard.index');
    Route::get('/logout' , 'Logout')->name('dashboard.logout');
});
