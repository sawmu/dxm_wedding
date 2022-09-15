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
                    <li class="Ul_li--hover ">
                        <a class="" href="{{route('home.dashboard')}}"><i class="i-Bar-Chart text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Dashboard</span></a>
                    </li>
                    
                    
                    <li class="Ul_li--hover"><a class="" href="#">
                        <i class="i-Library text-20 mr-2 text-muted"></i>
                        <span class="item-name text-15 text-muted">Gust Lists</span></a>
                    </li>

                    <li class="Ul_li--hover {{ ($prefix == '/admin')?'active expand':'' }}"><a class="has-arrow" href="#"><i class="i-Suitcase text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Design</span></a>
                        <ul class="mm-collapse {{ ($prefix == '/admin')?'show':'' }}">
                            <li class="item-name"><a href="{{route('home.banner')}}"><i class="nav-icon i-Crop-2"></i><span class="item-name">Banner</span></a></li>
                            <li class="item-name"><a href="loaders.html"><i class="nav-icon i-Loading-3"></i><span class="item-name">Loaders</span></a></li>
                            <li class="item-name"><a href="ladda.button.html"><i class="nav-icon i-Loading-2"></i><span class="item-name">Ladda Buttons</span></a></li>
                            <li class="item-name"><a href="toastr.html"><i class="nav-icon i-Bell"></i><span class="item-name">Toastr</span></a></li>
                            <li class="item-name"><a href="sweet.alerts.html"><i class="nav-icon i-Approved-Window"></i><span class="item-name">Sweet Alerts</span></a></li>
                            <li class="item-name"><a href="tour.html"><i class="nav-icon i-Plane"></i><span class="item-name">User Tour</span></a></li>
                            <li class="item-name"><a href="upload.html"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Upload</span></a></li>
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Computer-Secure text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Apps</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="contact-list-table.html"><i class="nav-icon i-Business-Mens"></i><span class="item-name">contact List</span></a></li>
                            <li class="item-name"><a href="invoice.html"><i class="nav-icon i-Add-File"></i><span class="item-name">Invoice</span></a></li>
                            <li class="item-name"><a href="inbox.html"><i class="nav-icon i-Email"></i><span class="item-name">Inbox</span></a></li>
                            <li class="item-name"><a href="chat.html"><i class="nav-icon i-Speach-Bubble-3"></i><span class="item-name">Chat</span></a></li>
                            <li class="item-name"><a class="has-arrow cursor-pointer"><i class="nav-icon i-Receipt"></i><span class="item-name">Task Manager </span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="todo-list.html"><i class="nav-icon i-Receipt"></i><span class="item-name">Todo List</span></a></li>
                                    <li class="item-name"><a href="task-manager.html"><i class="nav-icon i-Receipt"></i><span class="item-name">Task manager</span></a></li>
                                    <li class="item-name"><a href="task-manager-list.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Task manager list</span></a></li>
                                    <li class="item-name"><a href="toDo.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Minimal ToDo</span></a></li>
                                </ul>
                            </li>
                            <li class="item-name"><a class="has-arrow cursor-pointer"><i class="nav-icon i-Cash-Register"></i><span class="item-name">Ecommerce </span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="product.html"><i class="nav-icon i-Shop-2"></i><span class="item-name">Products</span></a></li>
                                    <li class="item-name"><a href="product-details.html"><i class="nav-icon i-Tag-2"></i><span class="item-name">Product Details</span></a></li>
                                    <li class="item-name"><a href="cart.html"><i class="nav-icon i-Add-Cart"></i><span class="item-name">Cart</span></a></li>
                                    <li class="item-name"><a href="checkout.html"><i class="nav-icon i-Cash-register-2"></i><span class="item-name">Checkout</span></a></li>
                                </ul>
                            </li>
                            <li class="item-name"><a class="has-arrow cursor-pointer"><i class="nav-icon i-Business-ManWoman"></i><span class="item-name">Contact </span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="contact-list.html"><i class="nav-icon i-Business-Mens"></i><span class="item-name">Contact Lists</span></a></li>
                                    <li class="item-name"><a href="contact-page.html"><i class="nav-icon i-Conference"></i><span class="item-name">Contact Grid</span></a></li>
                                    <li class="item-name"><a href="contact-detail.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Contact Details</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--  <p class="main-menu-title text-muted ml-3 font-weight-700 text-13 mt-4 mb-2">UI Elements</p> -->
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Computer-Secure text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Widgets</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="widget-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget card</span></a></li>
                            <li class="item-name"><a href="widget-statistics.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget statistics</span></a></li>
                            <li class="item-name"><a href="widget-list.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget List</span></a></li>
                            <li class="item-name"><a href="widget-app.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget App </span></a></li>
                            <li class="item-name"><a href="weather-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Weather App </span></a></li>
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-File-Clipboard-File--Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Charts</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="charts.echarts.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">echarts</span></a></li>
                            <li class="item-name"><a href="charts.chartsjs.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">ChartJs</span></a></li>
                            <li class="item-name"><a class="has-arrow cursor-pointer"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Apex Charts</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="charts.apexAreaCharts.html">Area Charts</a></li>
                                    <li class="item-name"><a href="charts.apexBarCharts.html">Bar Charts</a></li>
                                    <li class="item-name"><a href="charts.apexBubbleCharts.html">Bubble Charts</a></li>
                                    <li class="item-name"><a href="charts.apexColumnCharts.html">Column Charts</a></li>
                                    <li class="item-name"><a href="charts.apexCandleStickCharts.html">CandleStick Charts</a></li>
                                    <li class="item-name"><a href="charts.apexLineCharts.html">Line Charts</a></li>
                                    <li class="item-name"><a href="charts.apexMixCharts.html">Mix Charts</a></li>
                                    <li class="item-name"><a href="charts.apexMixCharts.html">Mix Charts</a></li>
                                    <li><a href="charts.apexPieDonutCharts.html">PieDonut Charts</a></li>
                                    <li><a href="charts.apexRadarCharts.html">Radar Charts</a></li>
                                    <li><a href="charts.apexRadialBarCharts.html">RadialBar Charts</a></li>
                                    <li><a href="charts.apexScatterCharts.html">Scatter Charts</a></li>
                                    <li><a href="charts.apexSparklineCharts.html">Sparkline Charts</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-File-Clipboard-File--Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Forms</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="form.basic.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Basic Elements</span></a></li>
                            <li class="item-name"><a href="basic-action-bar.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Basic action bar </span></a></li>
                            <li class="item-name"><a href="form.layouts.html"><i class="nav-icon i-Split-Vertical"></i><span class="item-name">Form Layouts</span></a></li>
                            <li class="item-name"><a href="multi-column-forms.html"><i class="nav-icon i-Split-Vertical"></i><span class="item-name">Multi column forms</span></a></li>
                            <li class="item-name"><a href="form.input.group.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Input Groups</span></a></li>
                            <li class="item-name"><a href="form.validation.html"><i class="nav-icon i-Close-Window"></i><span class="item-name">Form Validation</span></a></li>
                            <li class="item-name"><a href="smart.wizard.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Smart Wizard</span></a></li>
                            <li class="item-name"><a href="smart.wizard.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Smart Wizard</span></a></li>
                            <li class="item-name"><a href="tag.input.html"><i class="nav-icon i-Tag-2"></i><span class="item-name">Tag Input</span></a></li>
                            <li class="item-name"><a href="editor.html"><i class="nav-icon i-Pen-2"></i><span class="item-name">Rich Editor</span></a></li>
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a href="datatables.html"><i class="i-File-Horizontal-Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Datatables</span></a></li>
                    <li class="Ul_li--hover"><a class="has-arrow"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Sessions</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="../sessions/signin.html"><i class="nav-icon i-Checked-User"></i><span class="item-name">Sign in</span></a></li>
                            <li class="item-name"><a href="../sessions/signup.html"><i class="nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
                            <li class="item-name"><a href="../sessions/forgot.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a class="has-arrow"><i class="i-Double-Tap text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Others</span></a>
                        <ul class="mm-collapse">
                            <li class="item-name"><a href="../sessions/not-found.html"><i class="nav-icon i-Error-404-Window"></i><span class="item-name">Not Found</span></a></li>
                            <li class="item-name"><a href="user.profile.html"><i class="nav-icon i-Male"></i><span class="item-name">User Profile</span></a></li>
                            <li class="item-name"><a class="open" href="blank.html"><i class="nav-icon i-File-Horizontal"></i><span class="item-name">Blank Page</span></a></li>
                        </ul>
                    </li>
                    <li class="Ul_li--hover"><a href="http://demos.ui-lib.com/gull-html-doc/"><i class="i-Safe-Box1 text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Doc</span></a></li>
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