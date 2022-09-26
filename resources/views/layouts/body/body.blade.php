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
                                            <p>Lorem ipsum dolor sit amet, constetur adicng elit. Ultricies nulla mi tempus mcorper for praesent. Ultricies interdum volutpat morbi nam ornare neque elit leo, diam. Malesuada enim ac amurna tempor vel duis.</p>
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
                                            <p>Lorem ipsum dolor sit amet, constetur adicng elit. Ultricies nulla mi tempus mcorper for praesent. Ultricies interdum volutpat morbi nam ornare neque elit leo, diam. Malesuada enim ac amurna tempor vel duis.</p>
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
        <!-- end story-section -->

        <!-- start wpo-cta-section -->

        {{-- <div class="wpo-cta-section">
            <div class="conatiner-fluid">
                <div class="wpo-cta-item">
                    <h2>Lets Celebrate Your Love</h2>
                    <a class="theme-btn-s2" href="rsvp.html">Join With Us</a>
                </div>
            </div>
        </div> --}}

        <!-- end wpo-cta-section -->

        <!-- start wpo-team-section -->
        <section class="wpo-team-section section-padding">
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

        <!-- start of wpo-contact-section -->
        {{-- <section class="wpo-contact-section section-padding" id="RSVP">
            <div class="container">
                <div class="wpo-contact-section-wrapper">
                    <div class="wpo-contact-form-area">
                        <div class="wpo-section-title">
                            <div class="section-title-icon">
                                <i class="fi flaticon-dove"></i>
                            </div>
                            <h2>Are You Attending?</h2>
                        </div>
                        <form method="post" class="contact-validation-active" id="contact-form-main">
                            <div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="radio-buttons">
                                <p>
                                    <input type="radio" id="attend" name="radio-group" checked>
                                    <label for="attend">Yes, I will be there</label>
                                </p>
                                <p>
                                    <input type="radio" id="not" name="radio-group">
                                    <label for="not">Sorry, I can’t come</label>
                                </p>
                            </div>
                            <div>
                                <select name="guest" class="form-control">
                                    <option disabled="disabled" selected>Number Of Guests</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                </select>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="what" id="what"
                                    placeholder="What Will You Be Attending">
                            </div>
                            <div>
                                <select name="meal" class="form-control last">
                                    <option disabled="disabled" selected>Meal Preferences</option>
                                    <option>Chicken Soup</option>
                                    <option>Motton Kabab</option>
                                    <option>Chicken BBQ</option>
                                    <option>Mix Salad</option>
                                    <option>Beef Ribs </option>
                                </select>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn-s3">Send An Inquiry</button>
                                <div id="c-loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later.
                                </div>
                            </div>
                        </form>
                        <div class="border-style"></div>
                    </div>
                    <div class="vector-1">
                        <img src="assets/images/rsvp/flower1.png" alt="E&M">
                    </div>
                    <div class="vector-2">
                        <img src="assets/images/rsvp/flower2.png" alt="E&M">
                    </div>
                </div>
            </div>
            <div class="shape-1">
                <img src="assets/images/rsvp/shape1.png" alt="E&M">
            </div>
            <div class="shape-2">
                <img src="assets/images/rsvp/shape2.png" alt="E&M">
            </div>
        </section> --}}
        <!-- end of wpo-contact-section -->
        
        <!-- start wpo-event-section -->
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
        <!-- end wpo-event-section -->
        <!-- start wpo-partners-section -->
        {{-- <section class="footer-padding wpo-partners-section section-padding">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider owl-carousel">
                            <div class="grid">
                                <img src="{{asset('frontend/assets/images/partners/1.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('frontend/assets/images/partners/2.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('frontend/assets/images/partners/3.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('frontend/assets/images/partners/4.png')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('frontend/assets/images/partners/5.png')}}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>

        <div class="footer-padding"></div> --}}
        <!-- end wpo-partners-section-->
        <!-- start wpo-blog-section -->
        {{-- <section class="wpo-blog-section section-padding" id="blog">
            <div class="container">
                <div class="row">
                    <div class="wpo-section-title">
                        <div class="section-title-icon">
                            <i class="fi flaticon-dove"></i>
                        </div>
                        <h2>Read Our Wedding News</h2>
                    </div>
                </div>
                <div class="wpo-blog-items">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-1.jpg" alt="E&M">
                                    <div class="thumb">Decoration</div>
                                </div>
                                <div class="wpo-blog-content">
                                    <h2><a href="blog-single.html">Wedding Table Decoration!</a></h2>
                                    <ul>
                                        <li>By <a href="blog-single.html">Loura Sweety</a></li>
                                        <li>25 Sep 2022</li>
                                    </ul>
                                    <p>Consectetur adipiscing elit. Bibendum qunulla suspen sed consectetur. Donec porttitor consectetur cras squam sapien massa.</p>
                                    <a class="read-more" href="blog-single.html">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-2.jpg" alt="E&M">
                                    <div class="thumb">Wedding</div>
                                </div>
                                <div class="wpo-blog-content">
                                    <h2><a href="blog-single.html">Best Bride Bouquet</a></h2>
                                    <ul>
                                        <li>By <a href="blog-single.html">Loura Sweety</a></li>
                                        <li>25 Sep 2022</li>
                                    </ul>
                                    <p>Consectetur adipiscing elit. Bibendum qunulla suspen sed consectetur. Donec porttitor consectetur cras squam sapien massa.</p>
                                    <a class="read-more" href="blog-single.html">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-3.jpg" alt="E&M">
                                    <div class="thumb">Photography</div>
                                </div>
                                <div class="wpo-blog-content">
                                    <h2><a href="blog-single.html">Wedding Photography Idea</a></h2>
                                    <ul>
                                        <li>By <a href="blog-single.html">Loura Sweety</a></li>
                                        <li>25 Sep 2022</li>
                                    </ul>
                                    <p>Consectetur adipiscing elit. Bibendum qunulla suspen sed consectetur. Donec porttitor consectetur cras squam sapien massa.</p>
                                    <a class="read-more" href="blog-single.html">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section> --}}
        <!-- end wpo-blog-section -->