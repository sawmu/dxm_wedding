      <!-- start of hero -->
        @include('layouts.body.layout.hero')
        <!-- end of hero slider -->

        <!-- start of About Us -->
        @include('layouts.body.layout.aboutus')
        <!-- end of About Us -->
       

        <!-- start story-section -->
        <section class="story-section " id="story">
            <div class="container">
                <div class="row">
                    <div class="wpo-section-title">
                        <div class="section-title-icon">
                            <i class="fi flaticon-dove"></i>
                        </div>
                        <h2>Our Sweet Story</h2>
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
                                            <img src="{{asset('frontend/our_story/first.jpg')}}" alt class="img img-responsive">
                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-12">
                                        <div class="story-text left-align-text wow fadeInRightSlow" data-wow-duration="2000ms">
                                            <h3>First Time We Meet</h3>
                                            <span class="date">19 Jan 2015</span>
                                            <div class="line-shape">
                                                <div class="outer-ball">
                                                    <div class="inner-ball"></div>
                                                </div>
                                             </div>
                                            <p>Our love story started well before either of us were actually born. Our moms became fast and dear friends as young working professionals in Insein, and motherhood came at a similar time for them. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="story-timeline-item">
                                <div class="row align-items-center">
                                    <div class="col col-lg-6 col-12 order-lg-1 order-2 text-holder left-text">
                                        <div class="story-text right-align-text wow fadeInLeftSlow" data-wow-duration="2000ms">
                                            <h3>Our First Date</h3>
                                            <span class="date">7 October 2017</span>
                                            <div class="line-shape s2">
                                                <div class="outer-ball">
                                                    <div class="inner-ball"></div>
                                                </div>
                                             </div>
                                            <p>We had never really gone on an official date before we entered into a relationship. So I decided to take matters into my own hands. The day she said yes, I asked her over for dinner. She came home only to find me having cooked an entire meal for her that had kayin food. For us, it has always been about the little things and not the superficial grandeur that surrounds first dates!</p>
                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-12 order-lg-2 order-1">
                                        <div class="img-holder left-align-text">
                                            <img src="{{asset('frontend/our_story/date.png')}}" alt class="img img-responsive wow fadeInRightSlow" data-wow-duration="1500ms">
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
                                            <img src="{{asset('frontend/our_story/prop.jpg')}}" alt class="img img-responsive wow fadeInLeftSlow" data-wow-duration="1500ms">
                                            <span class="heart">
                                                <i class="fi flaticon-dove"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-12">
                                        <div class="story-text left-align-text wow fadeInRightSlow" data-wow-duration="2000ms">
                                            <h3>She Said Yes!</h3>
                                            <span class="date">12 September 2021</span>
                                            <div class="line-shape">
                                                <div class="outer-ball">
                                                    <div class="inner-ball"></div>
                                                </div>
                                             </div>
                                            <p>Lorem ipsum dolor sit amet, constetur adicng elit. Ultricies nulla mi tempus mcorper for praesent. Ultricies interdum volutpat morbi nam ornare neque elit leo, diam. Malesuada enim ac amurna tempor vel duis.</p>
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
        </section>


        <!-- start wpo-team-section -->
        <section class="wpo-team-section section-padding" id="RSVP">
            <div class="container">
                <div class="row">
                    <div class="wpo-section-title">
                        <div class="section-title-icon">
                            <i class="fi flaticon-dove"></i>
                        </div>
                        <h2>Bridesmaids & Groomsmen</h2>
                    </div>
                </div>
                <div class="wpo-team-wrap">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <div class="wpo-team-img-inner">
                                        <img src="{{asset('frontend/profile/wendy_pro.png')}}" alt="E&M">
                                    </div>
                                    <div class="shape-1"><img src="{{asset('frontend/assets/images/team/shape1.jpg')}}" alt="E&M"></div>
                                    <div class="shape-2"><img src="{{asset('frontend/assets/images/team/shape2.jpg')}}" alt="E&M"></div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="groom-bride.html">Wendy</a></h3>
                                    <span>Bride's Sister</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <div class="wpo-team-img-inner">
                                        <img src="{{asset('frontend/profile/say.png')}}" alt="E&M">
                                    </div>
                                    <div class="shape-1"><img src="{{asset('frontend/assets/images/team/shape1.jpg')}}" alt="E&M"></div>
                                    <div class="shape-2"><img src="{{asset('frontend/assets/images/team/shape2.jpg')}}" alt="E&M"></div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="groom-bride.html">Say Say</a></h3>
                                    <span>Bride's Best Friend</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <div class="wpo-team-img-inner">
                                        <img src="{{asset('frontend/profile/Serena.png')}}" alt="E&M">
                                    </div>
                                    <div class="shape-1"><img src="{{asset('frontend/assets/images/team/shape1.jpg')}}" alt="E&M"></div>
                                    <div class="shape-2"><img src="{{asset('frontend/assets/images/team/shape2.jpg')}}" alt="E&M"></div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="groom-bride.html">Serena</a></h3>
                                    <span>Bride's Bestie</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <div class="wpo-team-img-inner">
                                        <img src="{{asset('frontend/profile/emr.png')}}" alt="E&M">
                                    </div>
                                    <div class="shape-1"><img src="{{asset('frontend/assets/images/team/shape1.jpg')}}" alt="E&M"></div>
                                    <div class="shape-2"><img src="{{asset('frontend/assets/images/team/shape2.jpg')}}" alt="E&M"></div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="groom-bride.html">Emerald</a></h3>
                                    <span>Bride's Bestie</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-lg-3">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <div class="wpo-team-img-inner">
                                        <img src="{{asset('frontend/profile/hay.png')}}" alt="E&M">
                                    </div>
                                    <div class="shape-1"><img src="{{asset('frontend/assets/images/team/shape1.jpg')}}" alt="E&M"></div>
                                    <div class="shape-2"><img src="{{asset('frontend/assets/images/team/shape2.jpg')}}" alt="E&M"></div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="groom-bride.html">Hay Nerta Aye</a></h3>
                                    <span>Groom's Brother</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <div class="wpo-team-img-inner">
                                        <img src="{{asset('frontend/profile/st.png')}}" alt="E&M">
                                    </div>
                                    <div class="shape-1"><img src="{{asset('frontend/assets/images/team/shape1.jpg')}}" alt="E&M"></div>
                                    <div class="shape-2"><img src="{{asset('frontend/assets/images/team/shape2.jpg')}}" alt="E&M"></div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="groom-bride.html">Stephen</a></h3>
                                    <span>Best Man</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <div class="wpo-team-img-inner">
                                        <img src="{{asset('frontend/profile/erik.png')}}" alt="E&M">
                                    </div>
                                    <div class="shape-1"><img src="{{asset('frontend/assets/images/team/shape1.jpg')}}" alt="E&M"></div>
                                    <div class="shape-2"><img src="{{asset('frontend/assets/images/team/shape2.jpg')}}" alt="E&M"></div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="groom-bride.html">Erik</a></h3>
                                    <span>Best Man</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <div class="wpo-team-img-inner">
                                        <img src="{{asset('frontend/profile/sa.png')}}" alt="E&M">
                                    </div>
                                    <div class="shape-1"><img src="{{asset('frontend/assets/images/team/shape1.jpg')}}" alt="E&M"></div>
                                    <div class="shape-2"><img src="{{asset('frontend/assets/images/team/shape2.jpg')}}" alt="E&M"></div>
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="groom-bride.html">Sa Htoo</a></h3>
                                    <span>Best Man</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>
        <!-- end wpo-team-section -->

        <!-- start wpo-portfolio-section -->
        <section class="wpo-portfolio-section" id="gallery">
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
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{asset('frontend/moment/p-1.png')}}" class="fancybox"
                                            data-fancybox-group="gall-1">
                                            <img src="{{asset('frontend/moment/p-1.png')}}" alt class="img img-responsive">
                                            <div class="hover-content">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                         <a href="{{asset('frontend/moment/p-2.png')}}" class="fancybox"
                                            data-fancybox-group="gall-1">
                                            <img src="{{asset('frontend/moment/p-2.png')}}" alt class="img img-responsive">
                                            <div class="hover-content">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{asset('frontend/moment/p-3.png')}}" class="fancybox"
                                            data-fancybox-group="gall-1">
                                            <img src="{{asset('frontend/moment/p-3.png')}}" alt class="img img-responsive">
                                            <div class="hover-content">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{asset('frontend/moment/p-5.png')}}" class="fancybox"
                                            data-fancybox-group="gall-1">
                                            <img src="{{asset('frontend/moment/p-5.png')}}" alt class="img img-responsive">
                                            <div class="hover-content">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{asset('frontend/moment/p-4.png')}}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{asset('frontend/moment/p-4.png')}}" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="{{asset('frontend/moment/p-6.png')}}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{asset('frontend/moment/p-6.png')}}" alt class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>
        <!-- end wpo-portfolio-section -->

        <section class="wpo-event-section section-padding" id="event">
            <div class="container">
                <div class="row">
                    <div class="wpo-section-title-s2">
                        <div class="section-title-icon">
                            <i class="fi flaticon-dove"></i>
                        </div>
                        <h2>When & Where</h2>
                    </div>
                </div>
                <div class="wpo-event-wrap">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item">
                                <div class="wpo-event-text">
                                    <h2>The Reception</h2>
                                    <ul>
                                        <li>Thursday, 22 Dec, 2022 <br>
                                            6:00 PM – 7:00 PM</li>
                                            
                                        <li>30 Victoria St, Singapore 187996</li>
                                        <li>CHIJMES</li>

                                        <li> <a class="popup-gmaps"
                                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.228780686199!2d103.84689102671128!3d1.2899494849464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19a46f3cfc35%3A0x8043fede7e98b111!2sCHIJMES!5e0!3m2!1sen!2ssg!4v1662723739881!5m2!1sen!2ssg">See
                                                Location</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item">
                                <div class="wpo-event-text">
                                    <h2>The Ceremony</h2>
                                    <ul>
                                        <li>Thursday, 22 Dec, 2022 <br>
                                            7:00 PM – 9:00 PM</li>
                                           
                                        <li>30 Victoria St, Singapore 187996</li>
                                        <li>CHIJMES</li>

                                        <li> <a class="popup-gmaps"
                                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.228780686199!2d103.84689102671128!3d1.2899494849464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19a46f3cfc35%3A0x8043fede7e98b111!2sCHIJMES!5e0!3m2!1sen!2ssg!4v1662723739881!5m2!1sen!2ssg">See
                                                Location</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item">
                                <div class="wpo-event-text">
                                    <h2>Wedding Party</h2>
                                    <ul>
                                        <li>Thursday, 22 Dec, 2022 <br>
                                            9:00 PM – 11:00 PM</li>
                                           
                                        <li>30 Victoria St, Singapore 187996</li>
                                        <li>CHIJMES</li>

                                        <li> <a class="popup-gmaps"
                                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.228780686199!2d103.84689102671128!3d1.2899494849464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19a46f3cfc35%3A0x8043fede7e98b111!2sCHIJMES!5e0!3m2!1sen!2ssg!4v1662723739881!5m2!1sen!2ssg">See
                                                Location</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>

