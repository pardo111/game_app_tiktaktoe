<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/x0', ['\public\x0\index.html'])->name('x0');


Route:: get('/ppt',['\public\ppt\index.html'])->name('ppt');
