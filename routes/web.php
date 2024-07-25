<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hazel', function () {
    return "Hello Quincy";
});

Route::get('/Sean', function () {
    return view('Sean');
});

Route::get('/Harvard', function () {
    return view('Harvard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/category/list', [App\Http\Controllers\CategoryController::class, 'listCategory'])->middleware('auth');
