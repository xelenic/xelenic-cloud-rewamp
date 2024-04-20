<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{url('vendor/open-admin/open-admin.min.css?id=70b9c0f02db63754c914a2300f687107"')}}" rel="stylesheet" />
        <script src="{{url('vendor/open-admin/open-admin.min.js?id=aba41f8e0c214a92ed04a5698c830083')}}"></script>
        <link href="{{url('home_page/style.css')}}" rel="stylesheet" />

        <header class="custom-navbar navbar navbar-light bg-white p-0 align-items-stretch">
            <a class="navbar-brand menu-width container-md bg-semi-dark text-center" href="http://localhost:8000/dashboard">
                <span class="short"><b>Xe</b></span><span class="long"><b>Xelenic</b> Cloud</span>
            </a>
            <div class="d-flex flex-fill flex-wrap header-items">
                <ul class="nav navbar-nav hidden-sm visible-lg-block">
                    Home
                </ul>
                <ul class="nav navbar-nav hidden-sm visible-lg-block">
                    Products
                </ul>
                <ul class="nav navbar-nav hidden-sm visible-lg-block">
                    Services
                </ul>
                <ul class="nav navbar-nav hidden-sm visible-lg-block">
                    Solutions
                </ul>
                <ul class="nav navbar-nav hidden-sm visible-lg-block">
                    Partnership
                </ul>
                <ul class="nav navbar-nav hidden-sm visible-lg-block">
                    About
                </ul>
            </div>
        </header>

        <style>
            .dropdown-menu .col-md-3:hover {
                background-color: #f8f9fa; /* Change to your desired hover color */
            }
        </style>







    </head>



    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">
            <!--Just the logo.. Don't mind this-->
            <h1>Xelenic Cloud</h1>
        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
    <!--Header ends-->



    <!--Content starts-->
    <div class="content flex">
        <p>Copyright (c) Xelenic Pvt Ltd </p>
    </div>



    <body class="antialiased">




    </body>
</html>
