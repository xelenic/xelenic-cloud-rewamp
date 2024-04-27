<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>-->

        <!-- Fonts 
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


                <ul class="nav navbar-nav hidden-sm visible-lg-block" id="products" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Products
                </ul>
                <ul class="dropdown-menu dropdown-menu-hover" aria-labelledby="products">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div style="padding: 20px;margin-top: 10%;margin-bottom: 20%;">
                                    <h2 style="margin-bottom: 30px;font-size: 30px">Accelerate your digital transformation</h2>
                                    <p style="font-size: 20px">Whether your business is early in its journey or well on its way to digital transformation,
                                        Google Cloud can help solve your toughest challenges.</p></div>


                            </div>
                            <div class="col-md-6" style="border-style: solid;border-bottom: none;border-right: none;border-top: none;border-width: 1px;border-color: #e7e7e7;">
                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                            <h2 style="font-size: 26px;">Why use Xelenic Cloud</h2>
                                            <p>Top Reason business choose us</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                        <h2 style="font-size: 26px;">Research and Development</h2>
                                        <p>Whether your business is early in its journey or well on its way to
                                            digital transformation, Google Cloud can help solve your toughest challenges.</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                        <h2 style="font-size: 26px;">Multi Cloud Handler</h2>
                                        <p>Whether your business is early in its journey or well on its way to
                                            digital transformation, Google Cloud can help solve your toughest challenges.</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                        <h2 style="font-size: 26px;">High Secure Cloud</h2>
                                        <p>Whether your business is early in its journey or well on its way to
                                            digital transformation, Google Cloud can help solve your toughest challenges.</p>
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                        <h2 style="font-size: 26px;">Student Packages</h2>
                                        <p>Whether your business is early in its journey or well on its way to
                                            digital transformation, Google Cloud can help solve your toughest challenges.</p>
                                    </a>
                                </li>

                            </div>
                        </div>
                    </div>

                </ul>

                <ul class="nav navbar-nav hidden-sm visible-lg-block" id="support" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    Support
                </ul>
                <ul class="dropdown-menu dropdown-menu-hover" aria-labelledby="support">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div style="padding: 20px;margin-top: 10%;margin-bottom: 20%;">
                                    <h2 style="margin-bottom: 30px;font-size: 30px">Accelerate your digital transformation</h2>
                                    <p style="font-size: 20px">Whether your business is early in its journey or well on its way to digital transformation,
                                        Google Cloud can help solve your toughest challenges.</p></div>


                            </div>
                            <div class="col-md-6" style="border-style: solid;border-bottom: none;border-right: none;border-top: none;border-width: 1px;border-color: #e7e7e7;">
                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                        <h2 style="font-size: 26px;">Why use Xelenic Cloud</h2>
                                        <p>Top Reason business choose us</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                        <h2 style="font-size: 26px;">Research and Development</h2>
                                        <p>Whether your business is early in its journey or well on its way to
                                            digital transformation, Google Cloud can help solve your toughest challenges.</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                        <h2 style="font-size: 26px;">Multi Cloud Handler</h2>
                                        <p>Whether your business is early in its journey or well on its way to
                                            digital transformation, Google Cloud can help solve your toughest challenges.</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                        <h2 style="font-size: 26px;">High Secure Cloud</h2>
                                        <p>Whether your business is early in its journey or well on its way to
                                            digital transformation, Google Cloud can help solve your toughest challenges.</p>
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: inherit !important;color: #797979;">
                                        <h2 style="font-size: 26px;">Student Packages</h2>
                                        <p>Whether your business is early in its journey or well on its way to
                                            digital transformation, Google Cloud can help solve your toughest challenges.</p>
                                    </a>
                                </li>

                            </div>
                        </div>
                    </div>

                </ul>




            </div>
        </header>

        <style>
            .dropdown-menu .col-md-3:hover {
                background-color: #f8f9fa; /* Change to your desired hover color */
            }

            .dropdown-menu-hover {
                display: none; /* Hide the dropdown menu by default */
            }

            .navbar-nav li:hover .dropdown-menu-hover {
                display: block; /* Show the dropdown menu on hover */
            }
        </style>







    </head> -->



     <!--<div class="header">

        Content before waves
        <div class="inner-header flex">-->
            <!--Just the logo.. Don't mind this-->
           <!-- <h1>Xelenic Cloud</h1>
        </div>-->

        <!--Waves Container-->
        <!--<div>
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
        </div>-->
        <!--Waves end-->

   <!-- </div>-->
    <!--Header ends-->



    <!--Content starts-->
    <!--<div class="content flex">
        <p>Copyright (c) Xelenic Pvt Ltd </p>
    </div>



    <body class="antialiased">




    </body>
</html>-->
