
@extends('frontend.layouts.xelenic')

@section('content')

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

<section>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                    <img src="https://www.bootdey.com/image/241x362/FFB6C1/000000" class="img-fluid" alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-12">
                                <div class="mt-4 pt-2 text-right">
                                    <a href="javascript:void(0)" class="btn btn-info">Read More <i class="mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                    <img src="https://www.bootdey.com/image/337x450/87CEFA/000000" class="img-fluid" alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                    <img src="https://www.bootdey.com/image/600x401/FF7F50/000000" class="img-fluid" alt="Image" />
                                    <div class="img-overlay bg-dark"></div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->

            <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
                <div class="section-title ml-lg-5">
                    <h5 class="text-custom font-weight-normal mb-3">About Us</h5>
                    <h4 class="title mb-4">
                        Our mission is to <br />
                        make your life easier.
                    </h4>
                    <p class="text-muted mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>

                    <div class="row">
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="fa fa-play h4 mb-0 text-custom"></i>
                                <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Responsive</a></h6>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="fa fa-file-download h4 mb-0 text-custom"></i>
                                <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Free Download</a></h6>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="fa fa-user h4 mb-0 text-custom"></i>
                                <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Support</a></h6>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="media align-items-center rounded shadow p-3">
                                <i class="fa fa-image h4 mb-0 text-custom"></i>
                                <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Development</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--enr row-->
    </div>
</section>
@endsection
