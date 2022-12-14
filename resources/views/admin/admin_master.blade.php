<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Elora | Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{asset('backend/dist-assets/css/themes/lite-purple.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/dist-assets/css/plugins/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('backend/dist-assets/css/plugins/fontawesome-5.css')}}" />
    <link href="{{asset('backend/dist-assets/css/plugins/metisMenu.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('backend/dist-assets/css/plugins/datatables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/dist-assets/css/style.css')}}" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- FAVICON -->
   <link href="{{asset('backend\elora.png')}}" rel="shortcut icon" />

</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
         <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        @include('admin.body.sidebar')

        <div class="switch-overlay"></div>
        <div class="main-content-wrap mobile-menu-content bg-off-white m-0">
           
            @include('admin.body.header')
            
            <!-- ============ Body content start ============= -->
            <div class="main-content pt-4">

                @yield('admin')
              
                
                <!-- end of main-content -->
            </div>
            <div class="sidebar-overlay open"></div><!-- Footer Start -->
          
            <!-- fotter end -->
        </div>
    </div><!-- ============ Search UI Start ============= -->
    <div class="search-ui">
        <div class="search-header">
            <img src="../../dist-assets/images/logo.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>
        <input type="text" placeholder="Type here" class="search-input" autofocus>
        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>
        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> 
    <!-- ============ Search UI End ============= -->
    <script src="{{asset('backend/dist-assets/js/plugins/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/plugins/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/tooltip.script.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/script.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/script_2.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/sidebar.large.script.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/plugins/feather.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/plugins/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/layout-sidebar-vertical.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/sidebar.script.min.js')}}"></script>

    <script src="{{asset('backend/dist-assets/js/plugins/echarts.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/echart.options.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/dashboard.v4.script.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/widgets-statistics.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/plugins/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/apexSparklineChart.script.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/dashboard.v1.script.min.js')}}"></script>

    {{-- Database Table --}}
    <script src="{{asset('backend/dist-assets/js/scripts/layout-sidebar-vertical.min.js')}}"></script> 
    <script src="{{asset('backend/dist-assets/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('backend/dist-assets/js/scripts/datatables.script.min.js')}}"></script>
</body>

</html>