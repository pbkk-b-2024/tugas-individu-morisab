<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan1;


Route::get('/', function () {
    return view('layout.home');
});

Route::fallback(function () {
    return view('components.404');
});

Route::view('/dashboard', 'layout.home');

Route::prefix('/routing')->group(function(){
    Route::get('/param', fn() => view('components.param'))->name('param');
    Route::get('/param/{param1}', [Pertemuan1::class, 'param1'])->name('param1');
    Route::get('/param/{param1}/{param2}', [Pertemuan1::class, 'param2'])->name('param2');
});

Route::prefix('/pertemuan1')->group(function(){
    Route::match(['get', 'post'], '/genapganjil', [Pertemuan1::class, 'genapGanjil'])->name('genap-ganjil');
    Route::get('/prima', [Pertemuan1::class, 'bilanganPrima'])->name('prima');
    Route::get('/fibonacci',[Pertemuan1::class,'fibonacci'])->name('fibonacci');
});

Route::redirect('/pertemuan1/ganjilgenap', '/pertemuan1/genapganjil');
