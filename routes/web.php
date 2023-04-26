<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// use App\Http\Controllers\ProductController;

// Route::get('tes', [testController::class, 'index'])->name('tes.index');
// Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('products', [ProductController::class, 'store'])->name('products.store');
// Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');



Route::get('/hai', function () {
    return view('welcome');
});

Route::get('/test', [tesController::class, 'index']);
Route::get('/test/create', [tesController::class, 'create']);
Route::post('/test/store', [tesController::class, 'store']);
Route::delete('/test/{id}', [tesController::class, 'destroy']);

Route::get('/test/edit/{data}', [tesController::class, 'edit']);
Route::patch('/test/update/{data}', [tesController::class, 'update']);
 




// Route::get('/test/create','tesController@create')->name('test.create');
