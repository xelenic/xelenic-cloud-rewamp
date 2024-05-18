<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ResearchAndDevelopmentController;

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
Route::post('register', [AuthController::class, 'register_post'])->name('register.post');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin'])->name('login.post');

// products
Route::get('/products/{slug}', [ProductPageController::class, 'show'])->name('product.show');
Route::get('products-list',[ProductPageController::class, 'index'])->name('products.list');

Route::get('dashboard/auth/redirect/login', [\App\Http\Controllers\AuthController::class, 'redirectLogin'])->name('redirectLogin');


Route::get('/payment', [\App\Http\Controllers\PaymentController::class, 'index'])->name('payment');
Route::post('/payment/create', [\App\Http\Controllers\PaymentController::class, 'createPaymentIntent'])->name('payment.create');
//End of frontend routes
Route::get('/payment/confirmation/{clientSecret}/{detailHash}', [\App\Http\Controllers\PaymentController::class, 'showPaymentConfirmation'])->name('payment.confirmation');
Route::get('/payment/payment-status/{clientSecret}', [\App\Http\Controllers\PaymentController::class, 'getPaymentStatus'])->name('payment.getPaymentStatus');



// GitHub login route
Route::get('auth/github', [\App\Http\Controllers\GitHubController::class, 'redirectToGitHub'])->name('auth.github');

// GitHub callback route
Route::get('auth/github/callback', [\App\Http\Controllers\GitHubController::class, 'handleGitHubCallback']);


