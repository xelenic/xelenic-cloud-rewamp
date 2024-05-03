@extends('frontend.layouts.app')

@section('content')
    <div>
        <div style="background: #6586b7;color: white;height: 179px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card" style="margin-top: 30px;">
                            <div class="card-body">
                                <div style="text-align: center">
                                    <i class="{{$productDetails->icon}}" style="font-size: 110px;/* margin-top: 20%; */color: grey"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div style="padding: 0px;margin-top: 4%;margin-bottom: 20%;">
                            <h2 style="margin-bottom: 30px;font-size: 30px">{{$productDetails->product_name}}</h2>
                            <p style="font-size: 15px;color: white;overflow: hidden;height: 50px">{{$productDetails->short_description}}</p>
                        </div>
                        <div class="card" style="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary">Create Free Account</a>
                        <a class="btn btn-secondary">Get started with {{$productDetails->product_name}}</a>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pricing</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Documentation</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               <div class="container">
                                   <div style="margin-top: 50px">
                                       {!! $productDetails->description !!}
                                   </div>
                               </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
