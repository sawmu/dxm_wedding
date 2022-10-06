@php
$gallerys = DB::table('galleries')->get();
@endphp
        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Gallery</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="/">Home</a></li>
                                <li>Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
        <!-- start wpo-portfolio-section -->
        <section class="wpo-portfolio-section section-padding" id="gallery">
          
            <div class="container">
                <div class="row">
                    <div class="wpo-section-title">
                        <div class="section-title-icon">
                            <i class="fi flaticon-dove"></i>
                        </div>
                        <h2>Sweet Captured Moments</h2>
                    </div>
                </div>
               
             
                <div class="sortable-gallery">
                    <div class="gallery-filters"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-grids gallery-container clearfix">
                                @foreach ($gallerys as $key => $gallery)

                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{ $gallery->image }}" class="fancybox"
                                            data-fancybox-group="gall-1">
                                            <img src="{{ $gallery->image }}" alt class="img img-responsive">
                                            <div class="hover-content">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                @endforeach

                                
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>
        <!-- end wpo-portfolio-section -->