<?php

namespace App\Http\Controllers;

use App\Models\PaymentTokens;
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
            'credit_amount' => $request->input('purchased_credit_balance'),
        ];
        $paymentIntent = $this->stripeService->createPaymentIntent($request->input('amount'),'usd');

        $paymentDetails = new PaymentTokens;
        $paymentDetails->intent_response = $paymentIntent->client_secret;
        $paymentDetails->response = json_encode($hashDetails);
        $paymentDetails->save();

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

    public function getPaymentStatus($paymentIntentID)
    {
        $underscorePos = strpos($paymentIntentID, '_secret_');

        $extractedString = substr($paymentIntentID, 0, $underscorePos);

        $paymentIntent = $this->stripeService->retrievePaymentIntent($extractedString);
        if($paymentIntent->status == 'succeeded'){

            $paymentDetails = PaymentTokens::where('intent_response', $paymentIntentID)->first();

            if($paymentDetails)
            {
                $paymentDetails = json_decode($paymentDetails->response);
                addCreditBalance($paymentDetails->credit_amount);

            }
            return view('backend.payment.create.payment_status', [
                'paymentIntent' => $paymentIntent,
                'paymentDetails' => $paymentDetails,
            ]);
        }else{

        }
    }



}
