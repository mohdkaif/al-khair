
    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url({{('front/img/bg-img/hero5.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- Title -->
                        <h3 class="breadcumb-title">Contact</h3>
                        <!-- Breadcumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="medica-contact-area section_padding_100">
            <div class="container">
                <div class="row">
                    <!-- Contact Form Area -->
                    <div class="col-12 col-lg-8">
                        <div class="contact-form">
                            <h2 class="mb-50">Get in touch</h2>

                            <form role="add-contact" action="{{url('contact-us')}}" method="POST" class="horizontal-form">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Phone">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" data-request="ajax-submit" data-target='[role="add-contact"]' class="btn medica-btn btn-3 mt-3"><i class="fa fa-check"></i> Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="content-sidebar">
                            <!-- Medica Emergency Card -->
                            <div class="medica-emergency-card mb-4">
                                <h5>For Emergencies</h5>
                                <h4>+91 9953577208</h4>
                                <p class="mb-0">For any emergencies, appointments, health care reach us anywhere anytime.</p>
                            </div>
                            <!-- Medica Appointment Card -->
                            <div class="medica-contact-card">
                                <h5>Useful Information</h5>
                                <div class="mt-50"></div>
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="contact-icon mr-30">
                                        <img src="{{asset('front/img/icons/alarm-clock.png')}}" alt="">
                                    </div>
                                    <div class="contact-meta">
                                        <p>Monday - Friday 08:00 - 21:00 <br> Saturday and Sunday - CLOSED</p>
                                    </div>
                                </div>
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="contact-icon mr-30">
                                        <img src="{{asset('front/img/icons/envelope.png')}}" alt="">
                                    </div>
                                    <div class="contact-meta">
                                        <p>+91 9953577208<br>imranahmad1612@gmail.com</p>
                                    </div>
                                </div>
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="contact-icon mr-30">
                                        <img src="{{asset('front/img/icons/map-pin.png')}}" alt="">
                                    </div>
                                    <div class="contact-meta">
                                        <p>Batla House<br> Delhi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="googleMap" class="googleMap"></div>
                </div>
            </div>
        </div>
    </div>
