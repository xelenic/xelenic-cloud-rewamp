<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/payment/confirmation/{clientSecret}/{detailHash}', [\App\Http\Controllers\PaymentController::class, 'showPaymentConfirmation'])->name('payment.confirmation');


Route::post('/execute-command', [\App\Http\Controllers\SshController::class, 'executeCommand']);
