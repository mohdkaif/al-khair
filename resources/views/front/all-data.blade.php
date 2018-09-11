    
   <!--  <section class="cta-area section_padding_100 bg-img gradient-background-overlay" style="background-image: url({{url('front/img/bg-img/cta1.jpg')}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="cta-content">
                        <h2>We have the best hospitals in the country</h2>
                        <h6>Phasellus at nunc orcidonec ipsum metus, pharetra quis nunc sit amet</h6>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="cta-btn">
                        <a href="#" class="btn medica-btn">Make an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="medica-hospitals-area bg-gray section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <img src="{{url('front/img/icons/hospital.png')}}" alt="">
                        <h2>Results</h2>
                        <p>Phasellus at nunc orcidonec ipsum metus, pharetra quis nunc sit amet</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @if(!empty($searched_data))
                    @foreach($searched_data as $data)
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-hospital-area wow fadeInUp" data-wow-delay="0.2s">
                                <div class="hospital-meta">
                                    <h5>{{!empty($data['name'])?$data['name']:''}}</h5>
                                    <h5>{{!empty($data['title'])?$data['title']:''}}</h5>
                                    <h6>{{!empty($data['mobile_number'])?$data['mobile_number']:''}}</h6>
                                    <h6>{{!empty($data['country'])?$data['country']:''}}</h6>
                                    <h6>{{!empty($data['description'])?$data['description']:''}}</h6>
                                    <h6>{{!empty($data['qualifications'])?$data['qualifications']:''}}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
             <!--    <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-hospital-area wow fadeInUp" data-wow-delay="0.4s">
                        <div class="hospital-thumbnail">
                            <img src="{{url('front/img/bg-img/d2.jpg')}}" alt="">
                        </div>
                        <div class="hospital-meta">
                            <h5>Dr. Josh Henderson</h5>
                            <h6>Plastic Surgeon</h6>
                            <div class="hospital-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-hospital-area wow fadeInUp" data-wow-delay="0.6s">
                        <div class="hospital-thumbnail">
                            <img src="{{url('front/img/bg-img/d3.jpg')}}" alt="">
                        </div>
                        <div class="hospital-meta">
                            <h5>Dr. Christinne Jones</h5>
                            <h6>Pediatrist</h6>
                            <div class="hospital-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-hospital-area wow fadeInUp" data-wow-delay="0.8s">
                        <div class="hospital-thumbnail">
                            <img src="{{url('front/img/bg-img/d4.jpg')}}" alt="">
                        </div>
                        <div class="hospital-meta">
                            <h5>Dr. William Stan</h5>
                            <h6>General Practicioner</h6>
                            <div class="hospital-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-hospital-area wow fadeInUp" data-wow-delay="0.2s">
                        <div class="hospital-thumbnail">
                            <img src="{{url('front/img/bg-img/d5.jpg')}}" alt="">
                        </div>
                        <div class="hospital-meta">
                            <h5>Dr. William Parker</h5>
                            <h6>Cardiologist</h6>
                            <div class="hospital-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-hospital-area wow fadeInUp" data-wow-delay="0.4s">
                        <div class="hospital-thumbnail">
                            <img src="{{url('front/img/bg-img/d6.jpg')}}" alt="">
                        </div>
                        <div class="hospital-meta">
                            <h5>Dr. Maria Hernandez</h5>
                            <h6>Plastic Surgeon</h6>
                            <div class="hospital-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-hospital-area wow fadeInUp" data-wow-delay="0.6s">
                        <div class="hospital-thumbnail">
                            <img src="{{url('front/img/bg-img/d7.jpg')}}" alt="">
                        </div>
                        <div class="hospital-meta">
                            <h5>Dr. Stella Jones</h5>
                            <h6>Pediatrist</h6>
                            <div class="hospital-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-hospital-area wow fadeInUp" data-wow-delay="0.8s">
                        <div class="hospital-thumbnail">
                            <img src="{{url('front/img/bg-img/d8.jpg')}}" alt="">
                        </div>
                        <div class="hospital-meta">
                            <h5>Dr. Jack Gillian</h5>
                            <h6>General Practicioner</h6>
                            <div class="hospital-social-info">
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


   

   