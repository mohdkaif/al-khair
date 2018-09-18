    
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
                        <p>You can see all the doctors,hospitals and services provided by Al-Khair</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @if(!empty($searched_data))
                    @foreach($searched_data as $data)
                        <div class="col-12 col-sm-6 col-lg-4"   style="margin-top:60px;margin-bottom:80px">
                            <div class="centertext single-hospital-area wow fadeInUp" data-wow-delay="0.2s" height="400px">
                                <div class="doctor-thumbnail centertext" style="height:300px">
                                    @if($data['image']!=null)
                                    <img src="{{url('uploads/'.$data['table_name'].'/'.$data['image'])}}" alt="">
                                    @else
                                    <img src="{{url('uploads/avatar.png')}}" alt="" width="200" height="190" class="img-circle">
                                    @endif
                                </div>
                                <div class="doctor-meta centertext" style="align:center" >
                                    <h1>{{!empty($data['name'])?$data['name']:''}}</h1>
                                    <h2>{{!empty($data['title'])?$data['title']:''}}</h2>
                                    
                                    <!-- <h4>{{substr(strip_tags($data['description']),0,100)}} 
                                    {{strlen(strip_tags($data['description'])) > 100 ? '...' : ''}}</h4> -->
                                    <h4>{{!empty($data['description'])?wordwrap($data['description'], 10, "\n", true):''}}</h4>
                                    <h4>{{!empty($data['qualifications'])?wordwrap($data['qualifications'], 10, "\n", true):''}}</h4>
                                    <a href="{{url(sprintf('book-appointment?type=%s&id=%s',
                                    rtrim($data['table_name'],'s'),___encrypt($data['id'])))}}" class="btn btn-primary custom">Book Appointment</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
             
            </div>
        </div>
    </section>


   

   