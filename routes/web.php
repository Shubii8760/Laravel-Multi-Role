<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users',UserController::class);

// Route For Register//
Route::group(['prefix' => 'register', 'as' => 'register.'], function () {
    Route::get('/', [RegisterController::class, 'view'])->name('view');
    Route::post('/store', [RegisterController::class, 'store'])->name('store');
});

