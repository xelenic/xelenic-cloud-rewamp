<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Payment Confirmation</div>

                <div class="card-body">
                    <h5>Payment Status: <span id="paymentStatus">Pending</span></h5>
                    <div id="card-element"></div>
                    <button id="confirmPaymentBtn" class="btn btn-primary">Confirm Payment</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var clientSecret = '{{ $clientSecret }}';

    var elements = stripe.elements();
    var cardElement = elements.create('card');

    cardElement.mount('#card-element');

    var confirmPaymentBtn = document.getElementById('confirmPaymentBtn');
    var paymentStatus = document.getElementById('paymentStatus');

    confirmPaymentBtn.addEventListener('click', function () {
        stripe.confirmCardPayment(clientSecret, {
            payment_method: {
                card: cardElement,
                billing_details: {
                    name: 'Customer Name'
                }
            }
        }).then(function (result) {
            if (result.error) {
                console.error(result.error.message);
                paymentStatus.textContent = 'Payment Failed';
            } else {
                if (result.paymentIntent.status === 'succeeded') {
                    paymentStatus.textContent = 'Payment Succeeded';
                    // Additional logic for successful payment
                } else {
                    paymentStatus.textContent = 'Payment Failed';
                }
            }
        });
    });
</script>
