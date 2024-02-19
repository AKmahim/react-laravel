<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::get('/v1.0/products',[ProductController::class, 'index']);
Route::get('/v1.0/products/{id}',[ProductController::class, 'show']);
Route::post('/v1.0/products',[ProductController::class, 'store']);
Route::put('/v1.0/products/update/{id}',[ProductController::class, 'update']);
Route::delete('/v1.0/products/delete/{id}',[ProductController::class, 'destroy']);