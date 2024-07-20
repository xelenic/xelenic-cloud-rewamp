@extends('frontend.layouts.app')

@section('content')

    @include('frontend.pages.home.home_styles.home_styles')
    @include('frontend.pages.home.components.hero')

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5"  style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="RotateMoveLeft">
                        <img src="/home_page/images/about-1.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="mb-1 text-primary">About Us</h4>
                    <h1 class="display-5 mb-4">Get Started Easily With a Personalized Product Tour</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, suscipit itaque quaerat dicta porro illum, autem, molestias ut animi ab aspernatur dolorum officia nam dolore. Voluptatibus aliquam earum labore atque.
                    </p>
                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid feature overflow-hidden py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Our Feature</h4>
                <h1 class="display-5 mb-4">Important Features For Email Marketing</h1>
                <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                </p>
            </div>
            <div class="row g-4 justify-content-center text-center mb-5">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4">
                            <i class="icon-envelope" style="font-size: 50px;"></i>
                        </div>
                        <div class="feature-content">
                            <a href="#" class="h4">Email Marketing <i class="icon-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i class="icon-mail-bulk" style="font-size: 50px;"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Email Builder <i class="icon-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center rounded p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i class="icon-sitemap" style="font-size: 50px;"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Customer Builder <i class="icon-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="text-center rounded p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i class="icon-tasks" style="font-size: 50px;"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Campaign Manager <i class="icon-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="my-3">
                        <a href="#" class="btn btn-primary d-inline rounded-pill px-5 py-3">More Features</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    <!-- FAQ Start -->
    <div class="container-fluid FAQ bg-light overflow-hidden py-5">
        <div class="container py-5">
            <h4 class="text-primary">FAQs</h4>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseTOne">
                                    Why did you choose Our Email Services?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit, sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio hic fuga odio excepturi ducimus sequi at. Doloribus, non aspernatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Are there any hidden charges?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit, sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio hic fuga odio excepturi ducimus sequi at. Doloribus, non aspernatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are the key challenges of email marketing?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit, sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio hic fuga odio excepturi ducimus sequi at. Doloribus, non aspernatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="FAQ-img RotateMoveRight rounded">
                        <img src="/home_page/images/about-1.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->


    <!-- Pricing Start -->
    <div class="container-fluid price py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Pricing Plan</h4>
                <h1 class="display-5 mb-4">Not Sure Which Plan Is For You?</h1>
                <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                </p>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="price-item bg-light rounded text-center">
                        <div class="text-center text-dark border-bottom d-flex flex-column justify-content-center p-4" style="width: 100%; height: 160px;">
                            <p class="fs-2 fw-bold text-uppercase mb-0">BASIC</p>
                            <div class="d-flex justify-content-center">
                                <strong class="align-self-start">$</strong>
                                <p class="mb-0"><span class="display-5">00</span>/mo</p>
                            </div>
                        </div>
                        <div class="text-start p-5">
                            <p><i class="icon-check text-success"></i> Limited Acess Library</p>
                            <p><i class="icon-check text-success"></i> Customer Support</p>
                            <p><i class="icon-check text-success"></i> Pre-built Email Templates</p>
                            <p><i class="icon-check text-success"></i> Reporting & Analytics</p>
                            <p><i class="icon-check text-success"></i> Forms & Landing Pages</p>
                            <p><i class="icon-check text-success"></i> A/B Testing</p>
                            <p><i class="icon-check text-success"></i> Email Scheduling</p>
                            <p><i class="icon-check text-success"></i> Automated Customer Journeys</p>
                            <p><i class="icon-times text-danger me-1"></i> Creative Assistant</p>
                            <p class="mb-4"><i class="icon-times text-danger me-1"></i> Role-based Access</p>
                            <button class="btn btn-light rounded-pill py-2 px-5" type="button">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="price-item bg-light rounded text-center">
                        <div class="pice-item-offer">Popular</div>
                        <div class="text-center text-primary border-bottom d-flex flex-column justify-content-center p-4" style="width: 100%; height: 160px;">
                            <p class="fs-2 fw-bold text-uppercase mb-0">Standard</p>
                            <div class="d-flex justify-content-center">
                                <strong class="align-self-start">$</strong>
                                <p class="mb-0"><span class="display-5">23</span>/mo</p>
                            </div>
                        </div>
                        <div class="text-start p-5">
                            <p><i class="icon-check text-success"></i> Limited Acess Library</p>
                            <p><i class="icon-check text-success"></i> Customer Support</p>
                            <p><i class="icon-check text-success"></i> Pre-built Email Templates</p>
                            <p><i class="icon-check text-success"></i> Reporting & Analytics</p>
                            <p><i class="icon-check text-success"></i> Forms & Landing Pages</p>
                            <p><i class="icon-check text-success"></i> A/B Testing</p>
                            <p><i class="icon-check text-success"></i> Email Scheduling</p>
                            <p><i class="icon-check text-success"></i> Automated Customer Journeys</p>
                            <p><i class="icon-times text-danger me-1"></i> Creative Assistant</p>
                            <p class="mb-4"><i class="icon-times text-danger me-1"></i> Role-based Access</p>
                            <button class="btn btn-light rounded-pill py-2 px-5" type="button">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item bg-light rounded text-center">
                        <div class="text-center text-secondary border-bottom d-flex flex-column justify-content-center p-4" style="width: 100%; height: 160px;">
                            <p class="fs-2 fw-bold text-uppercase mb-0">Premium</p>
                            <div class="d-flex justify-content-center">
                                <strong class="align-self-start">$</strong>
                                <p class="mb-0"><span class="display-5">49</span>/mo</p>
                            </div>
                        </div>
                        <div class="text-start p-5">
                            <p><i class="icon-check text-success"></i> Limited Acess Library</p>
                            <p><i class="icon-check text-success"></i> Customer Support</p>
                            <p><i class="icon-check text-success"></i> Pre-built Email Templates</p>
                            <p><i class="icon-check text-success"></i> Reporting & Analytics</p>
                            <p><i class="icon-check text-success"></i> Forms & Landing Pages</p>
                            <p><i class="icon-check text-success"></i> A/B Testing</p>
                            <p><i class="icon-check text-success"></i> Email Scheduling</p>
                            <p><i class="icon-check text-success"></i> Automated Customer Journeys</p>
                            <p><i class="icon-times fas fa-times text-danger me-1"></i> Creative Assistant</p>
                            <p class="mb-4"><i class="icon-times fas fa-times text-danger me-1"></i>Role-based Access</p>
                            <button class="btn btn-light rounded-pill py-2 px-5" type="button">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Our Blog</h4>
                <h1 class="display-5 mb-4">Join Us For New Blog</h1>
                <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/home_page/images/blog-1.png" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="icon-comment"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-dark border p-4 ">
                            <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/home_page/images/blog-2.png" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-dark border p-4 ">
                            <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/home_page/images/blog-3.png" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-dark border p-4 ">
                            <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/home_page/images/blog-4.png" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-dark border p-4 ">
                            <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Testimonial</h4>
                <h1 class="display-5 mb-4">What Our Client Say About Us</h1>
                <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                </p>
            </div>
            <div class="testimonial-carousel owl-carousel wow zoomInDown" data-wow-delay="0.2s">
                <div class="testimonial-item" data-dot="<img class='img-fluid' src='img/testimonial-img-1.jpg' alt=''>">
                    <div class="testimonial-inner text-center p-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px; border-radius: 50%;">
                                <img src="/home_page/images/testimonial-img-1.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-0">New York, USA</p>
                            </div>
                        </div>
                        <p class="fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                        </p>
                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item" data-dot="<img class='img-fluid' src='img/testimonial-img-2.jpg' alt=''>">
                    <div class="testimonial-inner text-center p-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px; border-radius: 50%;">
                                <img src="/home_page/images/testimonial-img-2.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-0">New York, USA</p>
                            </div>
                        </div>
                        <p class="fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                        </p>
                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item" data-dot="<img class='img-fluid' src='/home_page/images/testimonial-img-3.jpg' alt=''>">
                    <div class="testimonial-inner text-center p-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px; border-radius: 50%;">
                                <img src="/home_page/images/testimonial-img-3.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-0">New York, USA</p>
                            </div>
                        </div>
                        <p class="fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                        </p>
                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

{{--    @include('frontend.pages.home.components.features',[--}}
{{--    'features'=>[--}}
{{--        [--}}
{{--            'title'=>'Serverless Architecture',--}}
{{--            'description'=>'Experience the freedom of running applications without the--}}
{{--            hassle of managing servers. Focus on your code while we handle the infrastructure--}}
{{--             for you.',--}}
{{--            'icon'=> url('home_page/img/icons/link.png'),--}}
{{--            'link' => 'http://www.google.com'--}}
{{--        ],--}}
{{--        [--}}
{{--            'title'=>'Scalable Infrastructure',--}}
{{--            'description'=>'Our platform offers seamless scalability, allowing you to--}}
{{--             expand resources effortlessly as your demands grow. No more worrying about--}}
{{--             outgrowing your infrastructure.',--}}
{{--            'icon'=> url('home_page/img/icons/usability.png'),--}}
{{--            'link' => 'http://www.google.com'--}}

{{--        ],--}}
{{--        [--}}
{{--            'title'=>'Zero Downtime Guarantee',--}}
{{--            'description'=>' We take pride in our 0 downtime guarantee, ensuring that--}}
{{--            your applications and services remain available and operational around the--}}
{{--            clock, minimizing disruptions.',--}}
{{--            'icon'=> url('home_page/img/icons/wireframes.png'),--}}
{{--            'link' => 'http://www.google.com'--}}
{{--        ]--}}
{{--    ]])--}}


    <section id="cta" class="cta" style="padding: 50px;background: #3a96ff;color: white;padding-top: 120px;padding-bottom: 120px;background: url('{{url('home_page/img/wordmap.png')}}');background-position: center;background-size: cover;background-repeat: no-repeat;background-color: #3a96ff;">
        <div class="container">
            <div class="row aos-init aos-animate" data-aos="zoom-out">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Call To Action</h3>
                    <p style="color: white;"> Test Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="btn btn-primary" href="#" style="font-size: 21px;margin-top: 30px;background: #b57809;border-color: #b57809;">Call To Action</a>
                </div>
            </div>
        </div>
    </section>


{{--    <section id="about" class="about" style="--}}
{{--    padding-top: 70px;--}}
{{--    background: white;--}}
{{--    padding-bottom: 40px;--}}
{{--    border-top: solid;--}}
{{--    border-width: 1px;--}}
{{--    border-color: #dbdbdb;--}}
{{--">--}}
{{--        <div class="container">--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <img src="https://bootstrapmade.com/demo/templates/eNno/assets/img/about.png" class="img-fluid" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 pt-4 pt-lg-0 content" style="margin-top: 70px;text-align: left;padding-left: 40px;">--}}
{{--                    <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>--}}
{{--                    <p class="fst-italic" style="--}}
{{--    background: #3a96ff;--}}
{{--    color: white;--}}
{{--    padding: 20px;--}}
{{--    border-radius: 10px;--}}
{{--    text-align: center;--}}
{{--">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                        magna aliqua.--}}
{{--                    </p>--}}
{{--                    <ul style="--}}
{{--    text-align: left;--}}
{{--    font-size: 17px;--}}
{{--">--}}
{{--                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>--}}
{{--                        <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>--}}
{{--                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda</li>--}}
{{--                    </ul>--}}
{{--                    <p>--}}
{{--                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                        velit esse cillum dolore eu fugiat nulla pariatur.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection
