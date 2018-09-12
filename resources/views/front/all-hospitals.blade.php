    
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
                        <p>Phasellus at nunc orcidonec ipsum metus, pharetra quis nunc sit amet</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @if(!empty($hospitals))
                    @foreach($hospitals as $hospital)
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="g single-hospital-area wow fadeInUp" data-wow-delay="0.2s">
                                <div class="hospital-thumbnail">
                                    <img src="{{url('uploads/hospitals/'.$hospital['image'])}}" alt="">
                                </div>
                                <div class="hospital-meta" style="align:center">
                                    <h2>{{$hospital['name']}}</h2>
                                    <h4>{{$hospital['description']}}</h4>
                                    <a href="{{url(sprintf('book-appointment?type=%s&id=%s','hospital',___encrypt($hospital['id'])))}}" class="btn btn-primary btn-large">Book Appointment</a>
                                    <div class="hospital-social-info">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
<style>
    div {
        text-align: center;
        
    }
    div .g {
       border: 1px solid white;
        border-radius: 5px;
        margin: 5px;
        padding:2px;
    }

</style>
   

  