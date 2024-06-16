@extends('frontend.layouts.app')

@section('content')

    @include('frontend.pages.home.components.hero')

    @include('frontend.pages.home.components.features',[
    'features'=>[
        [
            'title'=>'Serverless Architecture',
            'description'=>'Experience the freedom of running applications without the
            hassle of managing servers. Focus on your code while we handle the infrastructure
             for you.',
            'icon'=> url('home_page/img/icons/link.png'),
            'link' => 'http://www.google.com'
        ],
        [
            'title'=>'Scalable Infrastructure',
            'description'=>'Our platform offers seamless scalability, allowing you to
             expand resources effortlessly as your demands grow. No more worrying about
             outgrowing your infrastructure.',
            'icon'=> url('home_page/img/icons/usability.png'),
            'link' => 'http://www.google.com'

        ],
        [
            'title'=>'Zero Downtime Guarantee',
            'description'=>' We take pride in our 0 downtime guarantee, ensuring that
            your applications and services remain available and operational around the
            clock, minimizing disruptions.',
            'icon'=> url('home_page/img/icons/wireframes.png'),
            'link' => 'http://www.google.com'
        ]
    ]])


    <section id="cta" class="cta" style="padding: 50px;background: #3a96ff;color: white;padding-top: 120px;padding-bottom: 120px;background: url('{{url('home_page/img/wordmap.png')}}');background-position: center;background-size: cover;background-repeat: no-repeat;background-color: #3a96ff;">
        <div class="container">

            <div class="row aos-init aos-animate" data-aos="zoom-out">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Call To Action</h3>
                    <p style="color: white;"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="btn btn-primary" href="#" style="font-size: 21px;margin-top: 30px;background: #b57809;border-color: #b57809;">Call To Action</a>
                </div>
            </div>

        </div>
    </section>










    <section id="about" class="about" style="
    padding-top: 70px;
    background: white;
    padding-bottom: 40px;
    border-top: solid;
    border-width: 1px;
    border-color: #dbdbdb;
">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="https://bootstrapmade.com/demo/templates/eNno/assets/img/about.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" style="margin-top: 70px;text-align: left;padding-left: 40px;">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                    <p class="fst-italic" style="
    background: #3a96ff;
    color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul style="
    text-align: left;
    font-size: 17px;
">
                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda</li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>

        </div>
    </section>

@endsection
