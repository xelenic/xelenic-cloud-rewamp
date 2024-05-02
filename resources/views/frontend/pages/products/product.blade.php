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

                    </div>
                    <div class="card-body">
                       {!! $productDetails->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
