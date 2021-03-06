<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['guest', 'web'])->group(function () {
    Route::get("/", [\App\Http\Controllers\AuthController::class, 'redirectToIndex']);

    Route::get("/login", [\App\Http\Controllers\AuthController::class, 'index'])->name("Login");
    Route::get("/registration", [\App\Http\Controllers\AuthController::class, 'index'])->name("Registration");


    Route::post("/registration", [\App\Http\Controllers\AuthController::class, 'signup']);


});
