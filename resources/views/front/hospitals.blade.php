    
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
                        <h2>Our hospitals</h2>
                        <p>We have number of hospitals at different locations to provide health care to people in different regions.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @if(!empty($hospitals))
                    @foreach($hospitals as $key => $hospital)
                            <div style="margin-top:60px;margin-bottom:80px" class="col-12 col-sm-6 col-lg-4">
                                <div class="centertext single-hospital-area wow fadeInUp" data-wow-delay="0.2s" height="400px">
                                    <div class="doctor-thumbnail centertext" height="300px">
                                        @if($hospital['image']!=null)
                                        <img src="{{url('uploads/hospitals/'.$hospital['image'])}}" alt="" style="height: 170px">
                                        @else
                                        <img src="{{url('uploads/avatar.png')}}" alt="" width="200" height="190" class="img-circle">
                                        @endif
                                    </div>
                                    <div class="doctor-meta centertext" style="align:center">
                                        <h2><b>{{$hospital['name']}}</b></h2>
                                         @php $desc = strlen($hospital['description']) > 50 ? substr($hospital['description'],0,50)."..." : $hospital['description']; @endphp

                                        <h6>{{$desc}}</h6>

                                    <a style="color:black;align:center;margin-bottom:15px" href="{{url(sprintf('detail?id=%s&type=hospital',___encrypt($hospital['id'])))}}" class="read-more custom">Read More...</a>

                                        <a href="{{url(sprintf('book-appointment?type=%s&id=%s','hospital',___encrypt($hospital['id'])))}}" class="btn btn-primary custom">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
