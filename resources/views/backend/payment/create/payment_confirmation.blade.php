@extends('frontend.layouts.app')

@section('content')
    <style>
        #card-element{
            margin: 0px !important;
            padding: 0px !important;
            border: none !important;
            display: block !important;
            background: transparent !important;
            position: relative !important;
            opacity: 1 !important;
            padding: 10px !important;
            margin-bottom: 10px !important;
            background: #edede8 !important;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 m-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div style="height: 470px;overflow-y: scroll;border: 1px solid #ccc;padding: 10px;">
                                    <h3>Credit Purchase and Top-Up License Agreement</h3>
                                    <p>This Credit Purchase and Top-Up License Agreement ("Agreement") is entered into as
                                        of [Date] by and between [Your Company Name], a [Your Company Type] ("Licensor"),
                                        and the purchaser ("Licensee").</p>

                                    <h3>1. License Grant</h3>
                                    <p>Licensor grants Licensee a non-exclusive, non-transferable license to use purchased
                                        credits or top-ups ("Credits") solely for the purpose of accessing and utilizing
                                        Licensor's services or products as outlined in the purchase agreement.</p>

                                    <h3>2. Restrictions</h3>
                                    <p>Licensee shall not sell, transfer, sublicense, or distribute Credits to any third
                                        party without prior written consent from Licensor. Credits are for internal use by
                                        Licensee only and may not be used for illegal or unauthorized purposes.</p>

                                    <h3>3. Ownership</h3>
                                    <p>Licensor retains all rights, title, and interest in and to the Credits, including all
                                        intellectual property rights. This Agreement does not transfer ownership of the
                                        Credits to Licensee.</p>

                                    <h3>4. Payment</h3>
                                    <p> Licensee agrees to pay the specified fees for the purchase of Credits as outlined
                                        in the purchase agreement. Failure to pay may result in suspension or termination
                                        of the license.</p>

                                    <h3>5. Term and Termination</h3>

                                    <p> This Agreement shall remain in effect until terminated by either party. Licensor
                                        may terminate the license immediately upon breach of any terms. Upon termination,
                                        Licensee must cease all use of the Credits.</p>

                                    <h3>6. Warranty Disclaimer</h3>
                                    <p> Licensor makes no warranties, express or implied, regarding the Credits,
                                        including but not limited to their fitness for a particular purpose.
                                        Licensee assumes all risk and responsibility for the use of Credits.</p>

                                    <h3>7. Limitation of Liability</h3>

                                    <p>In no event shall Licensor be liable for any damages, including but not limited
                                        to direct, indirect, incidental, or consequential damages arising out of
                                        the use or inability to use Credits.</p>

                                    <h3>8. Governing Law</h3>

                                    <p> This Agreement shall be governed by and construed in accordance with the laws
                                        of [Your Jurisdiction]. Any disputes arising under this Agreement shall be
                                        resolved in the courts of [Your Jurisdiction].</p>

                                    <h3>9. Entire Agreement</h3>

                                    <p> This Agreement constitutes the entire agreement between the parties regarding
                                        the purchase and use of Credits and supersedes all prior agreements and
                                        understandings, whether written or oral.</p>
                                </div>
                                <br><br>
                                <label for="agreeCheckbox">
                                    <input type="checkbox" id="agreeCheckbox" onchange="toggleAgreementBtn()"> I agree to the terms and conditions
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                   <di class="card-body">
                                       <p>Price</p>
                                       <h4>LKR {{number_format($detailHash['amount'], 2)}}</h4>
                                   </di>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <di class="card-body">
                                        <p>Purchased Credits</p>
                                        <h4>LKR {{$detailHash['credit_amount']}}</h4>
                                    </di>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p style="font-size: 14px;">Our card payment page provides a secure and convenient way for you to complete your
                                    transaction. Safeguarded by industry-standard encryption, your card details are
                                    protected throughout the payment process.</p>


                                <div style="background: url('{{url('home_page/img/images.png')}}');height:100px;background-position: center;background-size: contain;margin-top: 20px;background-repeat: no-repeat;margin-top: 21px;margin-bottom: 20px;"></div>

                                <div id="card-element"></div>

                                <br>
                                <button id="confirmPaymentBtn" class="btn btn-primary">Confirm Payment</button>
                            </div>
                        </div>
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

        confirmPaymentBtn.addEventListener('click', function () {
            stripe.confirmCardPayment(clientSecret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: '{{Admin::user()->name}}',
                    }
                }
            }).then(function (result) {
                if (result.error) {
                    console.error('343434');
                    window.location.href = "{{url('dashboard/payment-histories')}}";
                } else {
                    if (result.paymentIntent.status === 'succeeded') {
                       $('#confirmPaymentBtn').attr('disabled', true);
                        // Additional logic for successful payment
                    } else {

                    }
                }
            });
        });
    </script>


@endsection






