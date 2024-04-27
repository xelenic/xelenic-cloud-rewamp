<!-- xelenic.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xelenic Cloud</title>
    <!-- Include the style -->
    @include('frontend.libraries.style')
</head>

<body class="antialiased">
<!-- Include the nav bar -->
@include('frontend.components.nav')



@yield('content')

<!-- Footer -->
<footer>
    <!-- Your footer content here -->
</footer>

<!-- Include the footer -->
@include('frontend.components.footer')

<!-- Include the scripts -->
@include('frontend.libraries.script')
</body>
</html>

