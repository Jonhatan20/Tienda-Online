<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titulo}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset ('/inicio/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/style.css') }}" type="text/css">
</head>

<body>
    
    @include('layouts/headerIndex')

    @yield('contenedor')

    @include('layouts/footerIndex')

    <!-- Js Plugins -->
    <script src="{{ asset ('/inicio/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset ('/inicio/js/mixitup.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/main.js') }}"></script>
</body>

</html>