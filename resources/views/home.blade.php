<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{asset('backend\elora.png')}}">
    <title> DxM - Wedding</title>
    <link href="{{asset('frontend/assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/odometer-theme-default.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/sass/style.css')}}" rel="stylesheet">
  
</head>

<body>

    <div class="page-wrapper">

    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="{{asset('frontend/assets/images/preloader.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->
    @include('layouts.body.header')
    @include('layouts.body.body')
    @include('layouts.body.footer')
    <!-- end of header -->

    <!-- start page-wrapper -->
  
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Plugins for this template -->
    <script src="{{asset('frontend/assets/js/modernizr.custom.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.dlmenu.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-plugin-collection.js')}}"></script>
    <!-- Moving Animation -->
    <script src="{{asset('frontend/assets/js/moving-animation.js')}}"></script>
    <!-- Custom script for this template -->
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
    </div>
</body>

</html>
