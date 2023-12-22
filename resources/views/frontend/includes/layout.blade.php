<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('public/frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('public/frontend/images/favicon.ico') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF token meta tag -->

    <!-- Bootstrap -->
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/jam.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Main css -->
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    @stack('styles')
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    @include('frontend.includes.header')
    @yield('content')
    @include("frontend.includes.footer")


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('public/frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery-migrate.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('public/frontend/js/popper.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/parallax.min.js') }}"></script>

    <script src="{{ asset('public/frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('public/frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.accrue.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script src="{{ asset('public/frontend/js/script.js') }}"></script>
    <script src="{{ asset('public/frontend/sweetalert2/sweetalert2.min.js') }}"></script>
    <script type="text/javascript">
        $("textarea").each(function () {
            CKEDITOR.replace('fees_description');
            let id = $(this).attr('id');
            CKEDITOR.replace(id);
        });
        $(document).on("contextmenu", function(e) {
            e.preventDefault();
        });
    </script>
    @stack('scripts')
</body>
</html>
