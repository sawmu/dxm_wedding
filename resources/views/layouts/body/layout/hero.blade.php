@php
$banners = DB::table('banners')->get();
@endphp
<section class="static-hero">
    @foreach ($banners as $key => $banner)
    <div class="hero-container">
        <div class="hero-inner">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-6 col-12">
                        <div class="wpo-static-hero-inner">
                            <div class="shape-1"><img src="{{asset('frontend/assets/images/slider/shape.svg')}}" alt="E&M"></div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>{{ $banner->title_one }} <span>{{ $banner->sign }}</span>{{ $banner->title_two }}</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>{{ $banner->subtitle }}</p>
                            </div>
                            <div class="wpo-wedding-date">
                                <div class="clock-grids">
                                    <div id="clock"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="static-hero-right">
        <div class="static-hero-img">
            <div class="static-hero-img-inner">
                <img src="{{ $banner->image }}" alt="E&M">
            </div>
            <div class="static-hero-shape-1 floating-item"><img src="{{asset('frontend/assets/images/slider/flower1.png')}}" alt="E&M"></div>
            <div class="static-hero-shape-2 floating-item"><img src="{{asset('frontend/assets/images/slider/flower2.png')}}" alt="E&M"></div>
        </div>
    </div>
    @endforeach
</section>