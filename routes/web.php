<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/x0', ['\public\x0\index.html'])->name('x0');
Auth::routes();


Route:: get('/ppt',['\public\ppt\index.php'])->name('ppt');
