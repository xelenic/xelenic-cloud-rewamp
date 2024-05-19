<?php

namespace App\Services\Payment;

use Stripe\StripeClient;

class StripeService
{
    protected $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(env('STRIPE_SECRET'));
    }

    public function createPaymentIntent($amount, $currency = 'usd')
    {
        return $this->stripe->paymentIntents->create([
            'amount' => $amount,
            'currency' => $currency,
        ]);
    }

    public function retrievePaymentIntent($paymentIntentId)
    {
        return $this->stripe->paymentIntents->retrieve($paymentIntentId);
    }





    // Other Stripe methods can be added here
}
