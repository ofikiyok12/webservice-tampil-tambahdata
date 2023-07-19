<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biaya019Controller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function(){

    Route::get('/Cost', [Biaya019Controller::class, 'index']);
    Route::get('/Cost/{id}', [Biaya019Controller::class, 'show']);
    Route::post('/Cost/', [Biaya019Controller::class, 'store']);
    Route::delete('/Cost/{id}', [Biaya019Controller::class, 'destroy']);
    Route::patch('Cost/{id}', [Biaya019Controller::class, 'update']);
    Route::delete('Cost/{id}', [Biaya019Controller::class, 'delete']);
});