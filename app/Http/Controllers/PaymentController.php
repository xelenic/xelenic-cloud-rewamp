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

        $hashDetails = [
            'amount' =>  $request->input('amount'),
            'credit_amount' => $request->input('credit_price'),
        ];
        $paymentIntent = $this->stripeService->createPaymentIntent($request->input('amount'),'usd');


        return redirect()->route('payment.confirmation', [
            $paymentIntent->client_secret,
            base64_encode(json_encode($hashDetails))
            ]);
    }

    public function showPaymentConfirmation($clientSecret,$detailHash)
    {
        $hashDecode = base64_decode($detailHash);
        $hashDetails = json_decode($hashDecode, true);
        return view('backend.payment.create.payment_confirmation', [
            'clientSecret' => $clientSecret,
            'detailHash' => $hashDetails
            ]);
    }
}
