<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('layout.home');
});

Route::fallback(function () {
    return view('components.404');
});

Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
