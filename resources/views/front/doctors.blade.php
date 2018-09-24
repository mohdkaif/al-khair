   <!--  <section class="cta-area section_padding_100 bg-img gradient-background-overlay" style="background-image: url({{url('front/img/bg-img/cta1.jpg')}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="cta-content">
                        <h2>We have the best doctors in the country</h2>
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
    <section class="medica-doctors-area bg-gray section_padding_100">
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
                                        <img src="{{url('uploads/doctors/'.$doctor['image'])}}" alt="" style="height: 170px">
                                    @else
                                        <img src="{{url('uploads/avatar.png')}}" alt="" width="200" height="190" class="img-circle">
                                    @endif
                                </div>
                                <div class="doctor-meta centertext" style="align:center">
                                    <h5> {{$doctor['name']}}</h5>
                                    @php if(!empty($doctor['qualifications'])){
                                            $desc = strlen($doctor['qualifications']) > 50 ? substr($doctor['qualifications'],0,50)."..." : $doctor['qualifications'];
                                        }
                                        else{
                                            $desc = '';
                                        }
                                    @endphp

                                        <h6>{{!empty($desc)?$desc:''}}</h6>

                                    <a style="color:black;align:center;margin-bottom:15px" href="{{url(sprintf('detail?id=%s&type=doctor',___encrypt($doctor['id'])))}}" class="read-more custom">Read More...</a>

                                    <a href="{{url(sprintf('book-appointment?type=%s&id=%s','doctor',___encrypt($doctor['id'])))}}" class="btn btn-primary custom">Book Appointment</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
               
            </div>
        </div>
    </section>

  