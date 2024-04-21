<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [\App\Http\Controllers\UserAuthController::class,'getLogin'])->name('login');
Route::post('/login-post', [\App\Http\Controllers\UserAuthController::class,'postLogin'])->name('login.post');
