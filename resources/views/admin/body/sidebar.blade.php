@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp

<div class="sidebar-panel bg-white">
    <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center"><img class="pl-3" src="{{asset('backend/dist-assets/images/logo.png')}}" alt="Logo" />
        <!--  <span class=" item-name text-20 text-primary font-weight-700">GULL</span> -->
        <div class="sidebar-compact-switch ml-auto"><span></span></div>
    </div>
    <!--  user -->
    <div class="scroll-nav ps ps--active-y" data-perfect-scrollbar="data-perfect-scrollbar" data-suppress-scroll-x="true">
        <div class="side-nav">
            <div class="main-menu">
                <ul class="metismenu" id="menu">
                    <li class="Ul_li--hover {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                        <a class="" href="{{route('home.dashboard')}}"><i class="fa-solid fa-chart-pie pr-2 fa-lg"></i><span class="item-name text-15 text-muted">Dashboard</span></a>
                    </li>
                    
                    
                    <li class="Ul_li--hover {{ (request()->is('admin/gust-list')) ? 'active' : '' }}"><a class="" href="{{route('home.gustList')}}">
                        <i class="fa-regular fa-rectangle-list pr-2 fa-lg"></i>
                        
                        <span class="item-name text-15 text-muted">Gust Lists</span></a>
                    </li>

                    <li class="Ul_li--hover {{ (request()->is('admin/gallery')) ? 'active' : '' }}">
                        <a class="" href="{{route('home.gallery')}}"><i class="fa-solid fa-images pr-2 fa-lg"></i><span class="item-name text-15 text-muted">Gallery</span></a>
                    </li>

                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="fa-regular fa-pen-to-square pr-2 fa-lg"></i><span class="item-name text-15 text-muted">Design</span></a>
                        <ul class="mm-collapse {{ ($prefix == '/admin/design')?'mm-show':'' }}">
                            <li class="item-name {{ (request()->segment(3) == 'banner') ? 'active' : '' }}"><a href="{{ url('admin/design/banner/edit/1') }}"><i class="fa-solid fa-chevron-right pr-2"></i><span class="item-name">Banner</span></a></li>
                            <li class="item-name {{ (request()->segment(3) == 'aboutus') ? 'active' : '' }}"><a href="{{ url('admin/design/aboutus/edit/2') }}"><i class="fa-solid fa-chevron-right pr-2"></i><span class="item-name">About Us</span></a></li>
                            <li class="item-name {{ (request()->segment(3) == 'story') ? 'active' : '' }}"><a href="{{ url('admin/design/story/edit/1') }}"><i class="fa-solid fa-chevron-right pr-2"></i><span class="item-name">Our Story</span></a></li>
                            <li class="item-name"><a href="toastr.html"><i class="fa-solid fa-chevron-right pr-2"></i><span class="item-name">Bridal Group</span></a></li>
                            <li class="item-name"><a href="sweet.alerts.html"><i class="fa-solid fa-chevron-right pr-2"></i><span class="item-name">Place</span></a></li>
                            <li class="item-name"><a href="tour.html"><i class="fa-solid fa-chevron-right pr-2"></i><span class="item-name">User Tour</span></a></li>
                        </ul>
                    </li>

                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="fa-solid fa-barcode pr-2 fa-lg"></i><span class="item-name text-15 text-muted">Events</span></a>
                        <ul class="mm-collapse {{ ($prefix == '/admin')?'show':'' }}">
                            <li class="item-name"><a href="widget-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget card</span></a></li>
                            <li class="item-name"><a href="widget-statistics.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget statistics</span></a></li>
                            <li class="item-name"><a href="widget-list.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget List</span></a></li>
                            <li class="item-name"><a href="widget-app.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget App </span></a></li>
                            <li class="item-name"><a href="weather-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Weather App </span></a></li>
                        </ul>
                    </li>

                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="fa-solid fa-square-poll-vertical pr-2 fa-lg"></i><span class="item-name text-15 text-muted">Report</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="widget-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget card</span></a></li>
                            <li class="item-name"><a href="widget-statistics.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget statistics</span></a></li>
                            <li class="item-name"><a href="widget-list.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget List</span></a></li>
                            <li class="item-name"><a href="widget-app.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget App </span></a></li>
                            <li class="item-name"><a href="weather-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Weather App </span></a></li>
                        </ul>
                    </li>

                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="fa-solid fa-gear pr-2 fa-lg"></i><span class="item-name text-15 text-muted">Settings</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="widget-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget card</span></a></li>
                            <li class="item-name"><a href="widget-statistics.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget statistics</span></a></li>
                            <li class="item-name"><a href="widget-list.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget List</span></a></li>
                            <li class="item-name"><a href="widget-app.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget App </span></a></li>
                            <li class="item-name"><a href="weather-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Weather App </span></a></li>
                        </ul>
                    </li>

                    <li class="Ul_li--hover"><a href="http://demos.ui-lib.com/gull-html-doc/"><i class="fa-solid fa-book pr-2 fa-lg"></i><span class="item-name text-15 text-muted">Doc</span></a></li>
                   
                  
                   

                </ul>
            </div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
        </div>
    </div>
    <!--  side-nav-close -->
</div>