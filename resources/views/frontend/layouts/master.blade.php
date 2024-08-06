<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Printfix - Printing Services Company HTML5 Template</title>
    <meta name="description" content="">
    <meta name="author" content="soukhinkhan">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/logo/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/custom-font.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/toastr.min.css') }}">

    <style>
        .product-gallery {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .product-gallery-item {
            margin: 0 10px;
        }

        .product-gallery-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .product-gallery-item img:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

    <!-- preloader start -->
    {{-- @include('frontend.layouts.preloader') --}}
    <!-- preloader start -->

    <!-- Backtotop start -->
    @include('frontend.layouts.backtotop')
    <!-- Backtotop end -->

    <!-- Offcanvas area start -->
    @include('frontend.layouts.offcanvas')
    <!-- Offcanvas area start -->

    <!-- Header area start -->
    @include('frontend.layouts.header')
    <!-- Header area end -->

    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
            </form>
            <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
        </div>
    </div>

    <!-- /#popup-search-box -->
    <!-- Body main wrapper start -->
    <main>

        @yield('content')

    </main>



    <!-- Footer area start -->
    @include('frontend.layouts.footer')
    <!-- Footer area end -->



    <!-- JS here -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/type.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/parallax-scroll.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/isotope-docs.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- toastr -->
    <script src="{{ asset('frontend/assets/js/toastr.min.js') }}"></script>


    <script>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif

        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
    </script>

    @stack('scripts')

</body>

</html>