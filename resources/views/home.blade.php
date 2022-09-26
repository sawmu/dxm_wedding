<!DOCTYPE html>
<html lang="en">
 <!-- start Head -->
    @include('layouts.body.head')
 <!-- end Head -->

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{asset('frontend/assets/images/preloader.png')}}" alt="E&M">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        @include('layouts.body.header')
        <!-- end of header -->

         <!-- Start Body -->
         @include('layouts.body.body')
         <!-- end of Body -->

        <!-- start of wpo-site-footer-section -->
        @include('layouts.body.footer')
        <!-- end of wpo-site-footer-section -->

    </div>
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
</body>

</html>