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
Route::post('/admin/category/add', [App\Http\Controllers\CategoryController::class, 'createCategory'])->middleware('auth');
Route::get('/admin/category/del/{id}', [App\Http\Controllers\CategoryController::class, 'deleteCategory'])->middleware('auth');
Route::get('/admin/category/upd/{id}', [App\Http\Controllers\CategoryController::class, 'updCategory'])->middleware('auth');
Route::post('/admin/category/upd/{id}', [App\Http\Controllers\CategoryController::class, 'updateCategory'])->middleware('auth');
Route::get('/admin/item/list', [App\Http\Controllers\ItemController::class, 'listItem'])->middleware('auth');
//item route
Route::post('/admin/item/add', [App\Http\Controllers\ItemController::class, 'createItem'])->middleware('auth');


