      <!-- start wpo-page-title -->
      <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>R.S.V.P</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="/">Home</a></li>
                            <li>RSVP</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->
    <!-- start of wpo-contact-section -->
    @if (session('success'))
                            <div class="alert alert-primary" role="alert">
                                {{ session('success')}}
                            </div>   
     @endif
    <section class="wpo-contact-section section-padding pt-200" id="RSVP">
        <div class="container">
            <div class="wpo-contact-section-wrapper">
                <div class="wpo-contact-form-area">
                    <div class="wpo-section-title">
                        <div class="section-title-icon">
                            <i class="fi flaticon-dove"></i>
                        </div>
                        <h2>Are You Attending?</h2>
                        
                    </div>
                    <form action="{{ route('store.gustList') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input type="text" class="form-control"  name="fullname" id="name" placeholder="Full Name" required>
                        </div>
                        <div>
                            <input type="text" class="form-control"name="phone" id="phone" placeholder="Phone" required >
                        </div>
                        
                        <div>
                            <select name="knowus" class="form-control"  required="required">
                                <option disabled="disabled" selected>How do you know us?</option>
                                <option>Church</option>
                                <option>Work</option>
                                <option>Bride's Relatives</option>
                                <option>Groom's Relatives</option>
                            </select>
                        </div>
                    
                        <div>
                            <select name="attending" class="form-control"  required="required">
                                <option disabled="disabled" selected>Attending</option>
                                <option>Yes</option>
                                <option>Join Live Stream</option>
                            </select>
                        </div>
                       
                        <div>
                            <select name="no_guests" class="form-control last"  required="required">
                                <option disabled="disabled" selected>Meal Preferences</option>
                                <option>Classic Beef A La Bourguignon</option>
                                <option>Baked Miso Salmon</option>
                                <option>HALAL</option>
                            </select>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn-s3">Send </button>

                        </div>
                       
                    </form>
                    <div class="border-style"></div>
                </div>
                <div class="vector-1">
                    <img src="{{asset('frontend/assets/images/rsvp/flower1.png')}}" alt="">
                </div>
                <div class="vector-2">
                    <img src="{{asset('frontend/assets/images/rsvp/flower2.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="shape-1">
            <img src="{{asset('frontend/assets/images/rsvp/shape1.png')}}" alt="">
        </div>
        <div class="shape-2">
            <img src="{{asset('frontend/assets/images/rsvp/shape2.png')}}" alt="">
        </div>
    </section>
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
    <!--  start wpo-contact-map -->
    <section class="wpo-contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="wpo-contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.228780686199!2d103.84689102671128!3d1.2899494849464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19a46f3cfc35%3A0x8043fede7e98b111!2sCHIJMES!5e0!3m2!1sen!2ssg!4v1662723739881!5m2!1sen!2ssg" allowfullscreen></iframe>
        </div>
    </section>
    <!-- end wpo-contact-map -->

