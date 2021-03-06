<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--Title and Meta--}}
    <title>
        @yield('title') -    Selfless Massage
    </title>

    {{--Common App Styles--}}
    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    {{--Styles--}}
    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/ionicons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugin/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" type="text/css" />

    <!-- SLIDER REVOLUTION CSS SETTINGS -->
    <link href="{{ asset('plugin/rs-plugin/css/settings.css') }}" rel="stylesheet" type="text/css" media="screen" />

    <link href="{{ asset('css/global-custom.css') }}" rel="stylesheet" type="text/css" />

    @yield('styles')

    {{--Head--}}
    @yield('head')

</head>

<body class="">

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->
    @component('components/sidebar')

    @endcomponent
    {{--Page--}}
    <!-- Site Wraper -->
    <div class="wrapper">
        @component('components/navbarHome')

        @endcomponent

        @yield('content')
    </div>
    <!-- Site Wraper End -->
    {{--Common Scripts--}}

    @component('components/footer')

    @endcomponent
    {{--Laravel Js Variables--}}
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/plugin/jquery.easing.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/jquery.flexslider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/jquery.fitvids.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/jquery.viewportchecker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/jquery.stellar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/jquery.colorbox-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/owl.carousel.min.js') }}" type="text/javascript"></script>
    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script src="{{ asset('plugin/rs-plugin/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugin/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>
    <!-- End SLIDER REVOLUTION SCRIPTS  -->
    <script src="{{ asset('js/plugin/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/jquery.fs.tipper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugin/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/theme.js') }}" type="text/javascript"></script>

    {{--Scripts--}}
    @yield('scripts')
</body>

</html>