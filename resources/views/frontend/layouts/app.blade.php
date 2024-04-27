<!-- app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xelenic Cloud</title>

    <!-- Include the style -->
    @include('frontend.partials.styles')
</head>

<body class="antialiased">
@include('frontend.partials.nav')



@yield('content')


<!-- Include the footer -->
@include('frontend.partials.footer')

<!-- Include the scripts -->
@include('frontend.partials.scripts')
</body>
</html>


