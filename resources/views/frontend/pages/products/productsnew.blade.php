@extends('frontend.layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <h1 class="my-4">{{$productDetails->product_name}}

        </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="https://via.placeholder.com/750x500" alt="">
            </div>

            <div class="col-md-4">
                <h3 class="my-3">Product Description</h3>
                {{ $productDetails->short_description }}

                <h3 class="my-3">Project Details</h3>
                <ul>
                    <li><strong>Price: </strong>{{ $productDetails->price }}</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <p>{!! $productDetails->description !!}</p>
            </div>
        </div>

        <hr>
        <!-- Related Projects Row -->
        <h3 class="my-4">Related Products</h3>

        <div class="row">

            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                    <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
                </a>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                    <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
                </a>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                    <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
                </a>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                    <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
