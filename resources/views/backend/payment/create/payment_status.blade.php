@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align: center">Thank You for Topping Up Your Xelenic Credits!</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Dear <b>{{\OpenAdmin\Admin\Facades\Admin::user()->name}},</b></p>
                                        <p>Thank you for your recent purchase of $ {{$paymentDetails->credit_amount}} credits. Your transaction has been successfully processed.</p>
                                        <p><strong>Account Summary:</strong></p>
                                        <ul>
                                            <li><strong>Credits Purchased:</strong> $ {{$paymentDetails->credit_amount}}</li>
                                            <li><strong>Total Credits Available:</strong> $ {{number_format(getCreditBalance(), 2)}} </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <p>Your credits can be used to access a variety of services within the Xelenic Cloud Platform. Each service will deduct the corresponding credits from your account balance as you use them.</p>
                                <p>If you have any questions or need assistance, please do not hesitate to contact our support team.</p>
                                <p>To start using your credits, simply log in to your account and select the services you need.</p>
                                <p>Thank you for choosing Xelenic Cloud Platform.</p>

                                <a href="{{url('dashboard/payment-histories')}}" class="btn btn-primary"> View Billing</a>
                                <a href="{{url('dashboard')}}" class="btn btn-primary"> Dashboard</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection






