
@extends('frontend.layouts.xelenic')

@section('content')
<style>
    .text-custom{
        color: #0062ff !important;
    }
    ul.i-list {
        padding-left: 0;
        list-style: none;
    }

    ul.i-list .list-title {
        display: inline-block;
        position: absolute;
    }

    ul.i-list li {
        padding: 2px 0px;
    }

    ul.i-list i.fa {
        margin-right: 7px;
    }

    ul.i-list .list-item {
        margin-top: 3px;
        display: inline-block;
    }

    ul.i-list.filled i.fa {
        color: white;
        font-size: 9px;
        padding: 5px;
        border-radius: 50%;
    }

    ul.e-icon-list.filled li {
        padding: 2px 0px;
        line-height: 24px;
    }

    ul.i-list.underline li {
        padding: 6px 0px;
        border-bottom: 1px solid #eee;
    }

    ul.i-list.medium li {
        padding-bottom: 25px;
        position: relative;
    }

    ul.i-list.medium .icon {
        margin-right: 25px;
        color: white;
        font-size: 25px;
        text-align: center;
        line-height: 68px;
        width: 68px;
        height: 68px;
        border-radius: 50%;
        box-shadow: 0 5px 16px rgba(0,0,0,.28);
        position: relative;
        z-index: 1;
        /*background-image: url(../img/crease.svg) !important;
        -moz-background-size: 100% 100% !important;
        background-size: 100% 100% !important;
        background-position: center center !important;*/
    }

    ul.i-list.medium .icon i.fa {
        margin: 0;
    }

    ul.i-list.medium.bordered .icon {
        background: white;
        color: inherit;
        border: 2px solid #8fc135;
        font-size: 26px;
        color: #8fc135;
        position: relative;
        z-index: 1;
        box-shadow: 0 8px 22px rgba(0,0,0,.28);
    }

    ul.i-list.medium .list-item {
        text-transform: uppercase;
    }

    ul.i-list.large .icon {
        margin-right: 30px;
        background: #d0d0d0;
        color: white;
        font-size: 30px;
        text-align: center;
        line-height: 80px;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        box-shadow: 0 8px 22px rgba(0,0,0,.28);
    }

    ul.i-list.large .icon i.fa {
        margin: 0;
    }

    ul.i-list.large.bordered .icon {
        background: inherit;
        color: inherit;
        border: 2px solid #8fc135;
        font-size: 30px;
        color: #8fc135;
    }

    ul.i-list.large .list-item {
        text-transform: uppercase;
    }

    ul.i-list .icon {
        float: left;
    }

    ul.i-list.right {
        text-align: right;
    }

    ul.i-list.right .icon {
        float: right;
    }

    ul.i-list.right .icon {
        float: right;
        margin-right: 0;
        margin-left: 25px;
    }

    ul.i-list.large.right .icon {
        float: right;
        margin-right: 0;
        margin-left: 30px;
    }

    ul.i-list.large li {
        margin-bottom: 25px;
    }

    ul.i-list .icon-content {
        overflow: hidden;
    }

    ul.i-list .icon-content .title {
        margin-top: 5px;
        margin-bottom: 10px;
    }

    .left-line .iconlist-timeline {
        left: auto;
        right: 35px;
    }

    .iconlist-timeline {
        position: absolute;
        top: 1%;
        left: 32px;
        width: 1px;
        height: 99%;
        border-right-width: 1px;
        border-right-style: dashed;
        height: 100%;
        border-color: #ccc;
    }
    .icon{
        background-color: #0cb4ce;
    }
    separator, .testimonial-two, .exp-separator-inner {
        border-color: #0cb4ce;
    }
    .exp-separator {
        border-color: #0cb4ce;
        border-top-width: 2px;
        margin-top: 10px;
        margin-bottom: 2px;
        width: 100%;
        max-width: 55px;
        border-top-style: solid;
        height: auto;
        clear: both;
        position: relative;
        z-index: 11;
    }
    .section-sub-title {
        font-size: 18px;
        margin-bottom: 20px;
        font-weight: 400;
        font-family: Poppins;
    }
    .section-title {
        font-size: 32px;
        font-weight: 600;
        margin-top: 0.45em;
        margin-bottom: 0.35em;
        color: #303133;
        font-family: Poppins;
        letter-spacing: -0.02em;
    }
    .pb-20 {
        padding-bottom: 20px !important;
    }
    .text-center {
        text-align: center!important;
    }
    .center-separator .exp-separator-inner, .center-separator.exp-separator {
        margin-left: auto;
        margin-right: auto;
    }
</style>
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

<section class="py-5 border-bottom" id="features" style="background-color: white">
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

<section class="p-5 mt-4">
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

<section class="section-big mt-6" style="background-color: white" >
    <div class="container">

        <div class="row">
            <div class="col-md-12 pb-20 text-center">
                <h2 class="section-title mb-10"><span> Some <strong class="primary-color">Vertex</strong> Core Featuress </span></h2>
                <p class="section-sub-title">
                    We are a passionate digital design agency that specializes in beautiful and easy-to- <br>
                    use digital design &amp; web development services.
                </p>
                <div class="exp-separator center-separator">
                    <div class="exp-separator-inner">
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <ul class="i-list medium">
                    <li class="i-list-item">
                        <div class="icon"> <i class="fa fa-desktop"></i> </div>

                        <div class="icon-content">
                            <h3 class="title">Fully Responsive Design</h3>
                            <p class="sub-title">
                                Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim ante, dapibus in.
                            </p>
                        </div>
                        <div class="iconlist-timeline"></div>
                    </li>
                    <li class="i-list-item">
                        <div class="icon"> <i class="fa fa-code"></i> </div>

                        <div class="icon-content">
                            <h3 class="title">Easy &amp; Clean Code</h3>
                            <p>
                                Aenean vulputate tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.
                            </p>
                        </div>
                        <div class="iconlist-timeline"></div>
                    </li>
                    <li class="i-list-item">
                        <div class="icon"> <i class="fa fa-paper-plane"></i> </div>

                        <div class="icon-content">
                            <h3 class="title">24/7 Customer Support</h3>
                            <p>
                                Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat, eleifend ac, enim lorem ante, dapibus in.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="i-list medium">
                    <li class="i-list-item">
                        <div class="icon"> <i class="fa fa-diamond"></i> </div>
                        <div class="icon-content">
                            <h3 class="title">Endless Possibilites</h3>
                            <p class="sub-title">
                                Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend Aliquam lorem ante, dapibus in.
                            </p>
                        </div>
                        <div class="iconlist-timeline"></div>
                    </li>
                    <li class="i-list-item">
                        <div class="icon"> <i class="fa fa-recycle"></i> </div>
                        <div class="icon-content">
                            <h3 class="title">Free Lifetime Updates</h3>
                            <p>
                                Aenean eleifend tellus. Aenean leo ligula, porttitor eu
                                consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.
                            </p>
                        </div>
                        <div class="iconlist-timeline"></div>
                    </li>
                    <li class="i-list-item">
                        <div class="icon"> <i class="fa fa-check"></i> </div>
                        <div class="icon-content">
                            <h3 class="title">Clean &amp; Modern Design</h3>
                            <p>
                                Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend enim lorem ante, dapibus in.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="i-list medium">
                    <li class="i-list-item">
                        <div class="icon"> <i class="fa fa-codepen"></i> </div>
                        <div class="icon-content">
                            <h3 class="title">Useful Shortcodes</h3>
                            <p class="sub-title">
                                Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim. Aliquam lorem ante.
                            </p>
                        </div>
                        <div class="iconlist-timeline"></div>
                    </li>
                    <li class="i-list-item">
                        <div class="icon"> <i class="fa fa-newspaper-o"></i> </div>
                        <div class="icon-content">
                            <h3 class="title">Multipurpose Concept</h3>
                            <p>
                                Aenean vulputate eleifend tellus ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.
                            </p>
                        </div>
                        <div class="iconlist-timeline"></div>
                    </li>
                    <li class="i-list-item">
                        <div class="icon"> <i class="fa fa-heart-o"></i> </div>
                        <div class="icon-content">
                            <h3 class="title">Crafted With Love</h3>
                            <p>
                                Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac lorem ante, dapibus in.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
