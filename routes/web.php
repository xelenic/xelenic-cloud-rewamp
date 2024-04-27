<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Start of frontend routes

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('register', [AuthController::class, 'register'])->name('register');

// products
Route::get('/xelauth', [HomeController::class, 'xelauth'])->name('xelauth');

//End of frontend routes

