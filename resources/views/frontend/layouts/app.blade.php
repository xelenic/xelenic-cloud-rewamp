<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('meta')
        <meta name="description" content="Xelenic Cloud">
        <meta name="keywords" content="Xelenic Cloud">

        <title>@yield('title', 'Xelenic Cloud')</title>

        <!-- Bootstrap 5 CSS -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'>
        <!-- Google Fonts -->
        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&amp;display=swap'>
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ url('/frontend/assets/css/styles.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <link href="{{ url('/frontend/home_page/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="/frontend/home_page/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="/frontend/home_page/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="/frontend/home_page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/frontend/home_page/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/frontend/home_page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="/frontend/home_page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="/frontend/home_page/assets/css/style.css" rel="stylesheet">



        @stack('push_head_script')
        <script type="text/javascript">
            // <!--Start of Tawk.to Script-->
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/6632a01b1ec1082f04e9f7ba/1hsqs2rq4';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
            // <!--End of Tawk.to Script-->
        </script>
        @section('head_script')

        @endsection
    </head>
    <body style="background: white">
        @include('frontend.partials.nav')
        <div id="app">
            @yield('content')
        </div>

{{--        <a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>--}}
        @include('frontend.partials.footer')
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
        <script>
            document.addEventListener('click',function(e){
                // Hamburger menu
                if(e.target.classList.contains('hamburger-toggle')){
                    e.target.children[0].classList.toggle('active');
                }
            })
        </script>
    </body>
</html>


