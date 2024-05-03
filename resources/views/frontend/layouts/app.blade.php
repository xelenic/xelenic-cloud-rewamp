<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xelenic Cloud</title>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6632a01b1ec1082f04e9f7ba/1hsqs2rq4';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Include the style -->
    @include('frontend.partials.styles')
    @include('frontend.partials.nav')

</head>

<body class="antialiased">



@yield('content')


<!-- Include the footer -->
@include('frontend.partials.footer')

<!-- Include the scripts -->
@include('frontend.partials.scripts')
</body>
</html>


