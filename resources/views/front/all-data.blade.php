    
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
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="g single-hospital-area wow fadeInUp" data-wow-delay="0.2s">
                                <div class="hospital-thumbnail">
                                    @if($data['image']!=null)
                                    <img src="{{url('uploads/'.$data['table_name'].'/'.$data['image'])}}" alt="">
                                    @else
                                    <img src="{{url('uploads/avatar.png')}}" alt="" width="200" height="190" class="img-circle">
                                    @endif
                                </div>
                                <div class="hospital-meta">
                                    <h1>{{!empty($data['name'])?$data['name']:''}}</h1>
                                    <h2>{{!empty($data['title'])?$data['title']:''}}</h2>
                                    <h4>{{!empty($data['mobile_number'])?$data['mobile_number']:''}}</h4>
                                    <h4>{{!empty($data['country'])?$data['country']:''}}</h4>
                                    
                                    <h4>{{substr(strip_tags($data['description']),0,10)}} 
                                    {{strlen(strip_tags($data['description'])) > 10 ? '...' : ''}}</h4>
                                    <h4>{{!empty($data['qualifications'])?$data['qualifications']:''}}</h4>
                                    <a href="{{url(sprintf('book-appointment?type=%s&id=%s',
                                    rtrim($data['table_name'],'s'),___encrypt($data['id'])))}}" class="btn btn-primary">Book Appointment</a>
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
    
        margin: 5px;
        padding:2px;
        height:350px;
    }

</style>

   

   