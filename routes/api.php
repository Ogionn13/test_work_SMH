<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
Route::name('product.')
    ->prefix('/product')
    ->group(function (){
        Route::get("/upload/{title}", [ProductController::class, 'upload'])->name('upload');
        Route::post('/', [ProductController::class, 'store'])->name('store');
    });


