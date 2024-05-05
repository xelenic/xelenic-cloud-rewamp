<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Payment\StripeService;

class PaymentController extends Controller
{
    protected $stripeService;

    public function __construct(StripeService  $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    public function index()
    {
        return view('payment');
    }

    public function createPaymentIntent(Request $request)
    {
        $amount = $request->input('amount');
        $paymentIntent = $this->stripeService->createPaymentIntent($amount);

        return redirect()->route('payment.confirmation', $paymentIntent->client_secret);
    }

    public function showPaymentConfirmation($clientSecret)
    {
        return view('backend.payment.create.payment_confirmation', ['clientSecret' => $clientSecret]);
    }
}
