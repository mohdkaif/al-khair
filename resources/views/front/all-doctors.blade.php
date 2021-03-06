   
    <section class="cta-area section_padding_100 bg-img gradient-background-overlay" style="background-image: url({{url('front/img/bg-img/cta1.jpg')}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="cta-content">
                        <h2>We have the best doctors in the country</h2>
                        
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="cta-btn">
                        <a href="#" class="btn medica-btn">Make an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="medica-hospitals-area bg-gray section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <img src="{{url('front/img/icons/doctor.png')}}" alt="">
                        <h2>Our Doctors</h2>
                        <p>We have numerous doctors with different areas of expertise and professional knowledge to help diagnose patients in the most effective way.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @if(!empty($doctors))
                    @foreach($doctors as $doctor)

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="centertext single-hospital-area wow fadeInUp" data-wow-delay="0.2s" height="400px">
                                <div class="doctor-thumbnail centertext" height="300px">
                                    @if($doctor['image']!=null)
                                        <img src="{{url('uploads/doctors/'.$doctor['image'])}}" alt="">
                                    @else
                                        <img src="{{url('uploads/avatar.png')}}" alt="" width="200" height="190" class="img-circle">
                                    @endif
                                </div>
                                <div class="doctor-meta centertext" style="align:center">
                                    <h5>{{$doctor['name']}}</h5>
                                    <h6>{{$doctor['specifications']}}</h6>
                                        <a href="{{url(sprintf('book-appointment?type=%s&id=%s','doctor',___encrypt($doctor['id'])))}}" class="btn btn-primary custom">Book Appointment</a>
                                    <div class="doctor-social-info">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
              <!--   <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area wow fadeInUp" data-wow-delay="0.4s">
                        <div class="doctor-thumbnail">
                            <img src="{{url('front/img/bg-img/d2.jpg')}}" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. Josh Henderson</h5>
                            <h6>Plastic Surgeon</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area wow fadeInUp" data-wow-delay="0.6s">
                        <div class="doctor-thumbnail">
                            <img src="{{url('front/img/bg-img/d3.jpg')}}" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. Christinne Jones</h5>
                            <h6>Pediatrist</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area wow fadeInUp" data-wow-delay="0.8s">
                        <div class="doctor-thumbnail">
                            <img src="{{url('front/img/bg-img/d4.jpg')}}" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. William Stan</h5>
                            <h6>General Practicioner</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area wow fadeInUp" data-wow-delay="0.2s">
                        <div class="doctor-thumbnail">
                            <img src="{{url('front/img/bg-img/d5.jpg')}}" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. William Parker</h5>
                            <h6>Cardiologist</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area wow fadeInUp" data-wow-delay="0.4s">
                        <div class="doctor-thumbnail">
                            <img src="{{url('front/img/bg-img/d6.jpg')}}" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. Maria Hernandez</h5>
                            <h6>Plastic Surgeon</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area wow fadeInUp" data-wow-delay="0.6s">
                        <div class="doctor-thumbnail">
                            <img src="{{url('front/img/bg-img/d7.jpg')}}" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. Stella Jones</h5>
                            <h6>Pediatrist</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area wow fadeInUp" data-wow-delay="0.8s">
                        <div class="doctor-thumbnail">
                            <img src="{{url('front/img/bg-img/d8.jpg')}}" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. Jack Gillian</h5>
                            <h6>General Practicioner</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>


   

  