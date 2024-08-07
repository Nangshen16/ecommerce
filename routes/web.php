<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

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
//welcome back route
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/category/list', [App\Http\Controllers\CategoryController::class, 'listCategory'])->middleware('auth');
Route::post('/admin/category/add', [App\Http\Controllers\CategoryController::class, 'createCategory'])->middleware('auth');
Route::get('/admin/category/del/{id}', [App\Http\Controllers\CategoryController::class, 'deleteCategory'])->middleware('auth');
Route::get('/admin/category/upd/{id}', [App\Http\Controllers\CategoryController::class, 'updCategory'])->middleware('auth');
Route::post('/admin/category/upd/{id}', [App\Http\Controllers\CategoryController::class, 'updateCategory'])->middleware('auth');
Route::get('/admin/item/list', [App\Http\Controllers\ItemController::class, 'listItem'])->middleware('auth');
//item route
Route::post('/admin/item/add', [App\Http\Controllers\ItemController::class, 'createItem'])->middleware('auth');
Route::get('/admin/item/del/{id}', [App\Http\Controllers\ItemController::class, 'deleteItem'])->middleware('auth');

//update item route
Route::get('/admin/item/upd/{id}', [App\Http\Controllers\ItemController::class, 'updItem'])->middleware('auth');
Route::post('/admin/item/upd/{id}', [App\Http\Controllers\ItemController::class, 'updateItem'])->middleware('auth');

//product routes
Route::get('/admin/product/list', [App\Http\Controllers\ProductController::class, 'listProduct'])->middleware('auth');


//Product Routes
Route::post('/admin/product/add', [App\Http\Controllers\ProductController::class, 'createProduct'])->middleware('auth');
Route::get('/admin/product/del/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct'])->middleware('auth');

//404 not found
//http://127.0.0.1:8000/admin/product/upd/10
Route::get('/admin/product/upd/{id}', [App\Http\Controllers\ProductController::class, 'updProduct'])->middleware('auth');

Route::post('/admin/product/upd/{id}', [App\Http\Controllers\ProductController::class, 'updateProduct'])->middleware('auth');

//Category View for welcome page
Route::get('/product/category/view/{id}', [App\Http\Controllers\ProductController::class, 'categoryView']);
//Category View


//Detail View
Route::get('/product/detail/view/{id}', [App\Http\Controllers\ProductController::class, 'detailView']);
//Detail View