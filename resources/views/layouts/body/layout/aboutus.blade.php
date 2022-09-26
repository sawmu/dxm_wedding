@php
$aboutus = DB::table('about_us')->get();
@endphp
 <!-- start couple-section -->
 <section class="couple-section " id="couple">
    @foreach ($aboutus as $key => $about)
    <div class="container">  
        <div class="row align-items-center justify-content-center">
            <div class="col col-lg-11">
                <div class="couple-area clearfix">
                    <div class="couple-item bride">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="couple-img">
                                    <img src="{{ $about->brideImage }}" alt="E&M">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="couple-text">
                                    <h3>{{ $about->brideName }}</h3>
                                    <p>{{ $about->brideDesc }}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="couple-item groom">
                        <div class="row align-items-center">
                            <div class="col-lg-7 order-lg-1 order-2">
                                <div class="couple-text">
                                    <h3>{{ $about->groomName }}</h3>
                                    <p>{{ $about->groomDesc }}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-2 order-1">
                                <div class="couple-img">
                                    <img src="{{ $about->groomImage }}" alt="E&M">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
    <div class="shape-1">
        <img src="{{asset('frontend/assets/images/couple/shape-1.png')}}" alt="E&M">
    </div>
    <div class="shape-2">
        <img src="{{asset('frontend/assets/images/couple/shape-2.png')}}" alt="E&M">
    </div>
    @endforeach
</section>
<!-- end couple-section -->