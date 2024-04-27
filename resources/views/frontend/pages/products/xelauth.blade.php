
@extends('frontend.layouts.xelenic')

@section('content')
{{--    <div>--}}
{{--        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">--}}
{{--            <div class="col-md-5 p-lg-5 mx-auto my-5">--}}
{{--                <h1 class="display-4 font-weight-normal">XelAuth</h1>--}}
{{--                <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>--}}
{{--                <a class="btn btn-outline-secondary" href="#">Try Now</a>--}}
{{--            </div>--}}
{{--            <div class="product-device box-shadow d-none d-md-block"></div>--}}
{{--            <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>--}}
{{--        </div>--}}
{{--    </div>--}}

<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2">Present your business in a whole new way</h1>
                    <p class="lead text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Try Now</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="py-5 border-bottom" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
    <!-- Content starts -->
    <div class="content flex">
        <p>Copyright (c) Xelenic Pvt Ltd </p>
    </div>
@endsection
