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



@endsection
