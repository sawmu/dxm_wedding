@php
$storys = DB::table('stories')->get();
@endphp
<section class="story-section " id="story">
    @foreach ($storys as $key => $story)
    <div class="container">
        <div class="row">
            <div class="wpo-section-title">
                <div class="section-title-icon">
                    <i class="fi flaticon-dove"></i>
                </div>
                <h2>{{ $story->SectionTitle }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="story-timeline">
                    <div class="row">
                        <div class="col offset-lg-6 col-lg-6 col-12 text-holder">
                            <span class="heart">
                                <i class="fi flaticon-balloon"></i>
                            </span>
                        </div>
                    </div>
                    <div class="story-timeline-item s1">
                        <div class="row align-items-center">
                            <div class="col col-lg-6 col-12">
                                <div class="img-holder right-align-text wow fadeInLeftSlow" data-wow-duration="1500ms">
                                    <img src="{{ $story->image1 }}" alt class="img img-responsive">
                                </div>
                            </div>
                            <div class="col col-lg-6 col-12">
                                <div class="story-text left-align-text wow fadeInRightSlow" data-wow-duration="2000ms">
                                    <h3>{{ $story->title1 }}</h3>
                                    <span class="date">{{ $story->date1 }}</span>
                                    <div class="line-shape">
                                        <div class="outer-ball">
                                            <div class="inner-ball"></div>
                                        </div>
                                     </div>
                                    <p>{{ $story->dec1 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="story-timeline-item">
                        <div class="row align-items-center">
                            <div class="col col-lg-6 col-12 order-lg-1 order-2 text-holder left-text">
                                <div class="story-text right-align-text wow fadeInLeftSlow" data-wow-duration="2000ms">
                                    <h3>{{ $story->title2 }}</h3>
                                    <span class="date">{{ $story->date2 }}</span>
                                    <div class="line-shape s2">
                                        <div class="outer-ball">
                                            <div class="inner-ball"></div>
                                        </div>
                                     </div>
                                    <p>{{ $story->dec2 }}</p>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-12 order-lg-2 order-1">
                                <div class="img-holder left-align-text">
                                    <img src="{{ $story->image2 }}" alt class="img img-responsive wow fadeInRightSlow" data-wow-duration="1500ms">
                                    <span class="heart">
                                        <i class="fi flaticon-dance"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="story-timeline-item">
                        <div class="row align-items-center">
                            <div class="col col-lg-6 col-12">
                                <div class="img-holder right-align-text left-site right-heart">
                                    <img src="{{ $story->image3 }}" alt class="img img-responsive wow fadeInLeftSlow" data-wow-duration="1500ms">
                                    <span class="heart">
                                        <i class="fi flaticon-dove"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-12">
                                <div class="story-text left-align-text wow fadeInRightSlow" data-wow-duration="2000ms">
                                    <h3>{{ $story->title3 }}</h3>
                                    <span class="date">{{ $story->date2 }}</span>
                                    <div class="line-shape">
                                        <div class="outer-ball">
                                            <div class="inner-ball"></div>
                                        </div>
                                     </div>
                                    <p>{{ $story->dec3 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
    <div class="shape-1">
        <div class="sticky-shape">
            <img src="{{asset('frontend/assets/images/rsvp/shape1.png')}}" alt="E&M">
        </div>  
    </div>
    <div class="shape-2">
        <div class="sticky-shape">
            <img src="{{asset('frontend/assets/images/rsvp/shape2.png')}}" alt="E&M">
        </div>
    </div>
    @endforeach
</section>