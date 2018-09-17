
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide height-800 bg-img" style="background-image: url({{url('front/img/bg-img/hero1.jpg')}});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">We provide top <br>medical services</h2>
                            <h5 data-animation="fadeInUp" data-delay="400ms">More than 30 professionals</h5>
                            <div class="slide-btn-group mt-50" data-animation="fadeInUp" data-delay="700ms">
                                <a href="{{url('book-appointment?type=booking&id=null')}}" class="btn medica-btn">Make an Appointment</a>
                                <a href="#" class="btn medica-btn ml-2 btn-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide height-800 bg-img" style="background-image: url({{url('front/img/bg-img/hero1.jpg')}});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">We provide top <br>medical services</h2>
                            <h5 data-animation="fadeInUp" data-delay="400ms">More than 30 professionals</h5>
                            <div class="slide-btn-group mt-50" data-animation="fadeInUp" data-delay="700ms">
                                <a href="#" class="btn medica-btn">Make an Appointment</a>
                                <a href="#" class="btn medica-btn ml-2 btn-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide -->
        <div class="single-hero-slide height-800 bg-img" style="background-image: url({{url('front/img/bg-img/hero1.jpg')}});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">We provide top <br>medical services</h2>
                            <h5 data-animation="fadeInUp" data-delay="400ms">More than 30 professionals</h5>
                            <div class="slide-btn-group mt-50" data-animation="fadeInUp" data-delay="700ms">
                                <a href="#" class="btn medica-btn">Make an Appointment</a>
                                <a href="#" class="btn medica-btn ml-2 btn-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Contact Info Area Start ***** -->
<div class="medica-contact-info-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-contact-info d-flex align-items-center">
                    <div class="contact-icon mr-30">
                        <img src="{{url('front/img/icons/alarm-clock.png')}}" alt="">
                    </div>
                    <div class="contact-meta">
                        <p>Monday - Friday 08:00 - 21:00 <br> Saturday and Sunday - CLOSED</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-contact-info d-flex align-items-center">
                    <div class="contact-icon mr-30">
                        <img src="{{url('front/img/icons/envelope.png')}}" alt="">
                    </div>
                    <div class="contact-meta">
                        <p>0080 673 729 766 | 0080 234 5678 900 <br> contact@business.com</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-contact-info d-flex align-items-center">
                    <div class="contact-icon mr-30">
                        <img src="{{url('front/img/icons/map-pin.png')}}" alt="">
                    </div>
                    <div class="contact-meta">
                        <p>Lamas Carbajal Str, no 14-18 <br> 41770 Montellano</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Contact Info Area End ***** -->

<!-- ***** About Us Area Start ***** -->
<section class="medica-about-us-area">
    <!-- Card Area -->
    <div class="medica-card-area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="medica-emergency-card wow fadeInUp" data-wow-delay="0.2s">
                        <h5>For Emergencies</h5>
                        <h4>+0080 954 4557 884</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis id explicabo quam quo nisi nihil ducimus, possimus. Lorem ipsum dolor sit amet.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="medica-doctors-card wow fadeInUp" data-wow-delay="0.4s">
                        <h5>The Doctors</h5>
                        <p>​ every Hamad Medical Corporation staff member is committed to delivering the safest, most effective and most compassionate care to each and every one of our patients.
 
We are Qatar’s leading healthcare provider to more than two million people living and working in Qatar.
 
We are a diverse and exciting organization with more than 90 different nationalities working to deliver the best care always to our patients and the community</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="medica-appointment-card wow fadeInUp" data-wow-delay="0.6s">
                        <h5>Book an apppointment</h5>
                        <form role="add-appointment" action="{{url('add-appointment')}}" method="POST">
                             {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control text-white" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="appointment_date" placeholder="mm/dd/yyyy">
                            </div>
                                        
                            <button type="button" class="btn medica-btn mt-15" data-request="ajax-submit" data-target='[role="add-appointment"]'>Make an Appointment</button>
                            <input type="hidden" name="type" value="booking">
                            <input type="hidden" name="requirement" value="none">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Contact -->
    <div class="medica-about-content section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="medica-about-text">
                        <h2>Welcome to <span>Al-Khair Meditour</span> Health Center</h2>
                        <p>Al-Khair Meditour is the provider of medical healthcare in Gulf countries and one of the leading hospital providers there

Al-Khair promises to deliver the best healthcare to the patients, with care, love and effective help.

Al-Khair manages doctors, nurses, medicines,its health care objectives in an effective and cooperative way.

The advanced facilities and equipments have been added to increase the effectiveness and care provided to the patients. It takes care of everything for the present as well as the patients for their future appointments.

Al-Khair helps its patients worldwide, to receive the pleasant and cooperative medical facilities and support in the most considerate manner. </p>
                        <ul>
                            <li>Cardiovascular Diseases</li>
                            <li>Neonatology</li>
                            <li>Ophthalmology</li>
                            <li>Toracic Surgery</li>
                            <li>Gastroenterology</li>
                            <li>Plastic Surgery</li>
                            <li>Neurology</li>
                            <li>Ortopedy</li>
                        </ul>
                        <a href="#" class="btn medica-btn btn-2">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="medica-about-thumbnail">
                        <img src="{{url('front/img/bg-img/doctor.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Us Area End ***** -->

<!-- ***** Services Area Start ***** -->
<section class="medica-services-area section_padding_100 bg-img gradient-background-overlay" style="background-image: url({{url('front/img/bg-img/service.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading white-heading">
                    <img src="{{url('front/img/icons/hospital2.png')}}" alt="">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{url('front/img/icons/hospital.png')}}" alt="">
                    <h5>Ambulatory Care</h5>
                    <p>Phasellus at nunc orci. Donec ipsum metus, pharetr a quis nunc sit amet, maximus vehicula nibh.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{url('front/img/icons/blood.png')}}" alt="">
                    <h5>Laboratory</h5>
                    <p>Phasellus at nunc orci. Donec ipsum metus, pharetr a quis nunc sit amet, maximus vehicula nibh.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area wow fadeInUp" data-wow-delay="0.4s">
                    <img src="{{url('front/img/icons/ambulance.png')}}" alt="">
                    <h5>Ambulance Service</h5>
                    <p>Phasellus at nunc orci. Donec ipsum metus, pharetr a quis nunc sit amet, maximus vehicula nibh.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area wow fadeInUp" data-wow-delay="0.5s">
                    <img src="{{url('front/img/icons/nuclear.png')}}" alt="">
                    <h5>Radiology</h5>
                    <p>Phasellus at nunc orci. Donec ipsum metus, pharetr a quis nunc sit amet, maximus vehicula nibh.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area wow fadeInUp" data-wow-delay="0.6s">
                    <img src="{{url('front/img/icons/emergency-call.png')}}" alt="">
                    <h5>Emergency Care</h5>
                    <p>Phasellus at nunc orci. Donec ipsum metus, pharetr a quis nunc sit amet, maximus vehicula nibh.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="single-service-area">
                    <img src="{{url('front/img/icons/medicine.png')}}" alt="">
                    <h5>Pharmacy</h5>
                    <p>Phasellus at nunc orci. Donec ipsum metus, pharetr a quis nunc sit amet, maximus vehicula nibh.</p>
                </div>
            </div>

            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.9s">
                <a href="#" class="btn medica-btn">See All Services</a>
            </div>
        </div>
    </div>
</section>
<!-- ***** Services Area End ***** -->
<!-- ***** Doctors Area Start ***** -->
<section class="medica-doctors-area section_padding_100_20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading">
                    <img src="{{url('front/img/icons/doctor.png')}}" alt="">
                    <h2>Our Doctors</h2>
                    <p>Phasellus at nunc orcidonec ipsum metus, pharetra quis nunc sit amet</p>
                </div>
            </div>
        </div>

        <div class="row">
            @if(!empty($doctors))
                @foreach($doctors as $key => $doctor)
                    @if($key < 4)
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-doctor-area">
                                <div class="doctor-thumbnail">
                                    @if($doctor['image']!=null)
                                        <img src="{{url('uploads/doctors/'.$doctor['image'])}}" alt="">
                                    @else
                                        <img src="{{url('uploads/avatar.png')}}" alt="" width="200" height="190" class="img-circle">
                                    @endif
                                </div>
                                <div class="doctor-meta">
                                    <h5>Dr. {{$doctor['name']}}</h5>
                                    <h6>{{$doctor['specifications']}}</h6>
                                    <div class="doctor-social-info">
                                        <a href="{{url(sprintf('book-appointment?type=%s&id=%s','doctor',___encrypt($doctor['id'])))}}" class="btn btn-primary custom">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
        <div class="col-12">
            <div class="see-all-doctors text-center wow fadeInUp" data-wow-delay="1s">
                <a href="{{url('all-doctors')}}" class="btn medica-btn btn-2">See All Doctors</a>
            </div>
        </div>
    </div>
</section>
<!-- ***** Doctors Area End ***** -->

<!-- ***** Testimonials Area Start ***** -->
<section class="medica-testimonials-area section_padding_100 bg-img background-overlay" style="background-image: url({{url('front/img/bg-img/hero2.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading white-heading">
                    <img src="{{url('front/img/icons/stethoscope.png')}}" alt="">
                    <h2>Clients Testimonials</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials-slider owl-carousel">
        <!-- Single Testimonials Slide -->
        <div class="single-testimonial-slide">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                        <div class="testimonial-given-author-info">
                            <img src="{{url('front/img/bg-img/testimonials2.jpg')}}" alt="">
                            <h6>Julia Smith</h6>
                            <p>Pacient</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Testimonials Slide -->
        <div class="single-testimonial-slide">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                        <div class="testimonial-given-author-info">
                            <img src="{{url('front/img/bg-img/testimonials2.jpg')}}" alt="">
                            <h6>Julia Smith</h6>
                            <p>Pacient</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Testimonials Slide -->
        <div class="single-testimonial-slide">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                        <div class="testimonial-given-author-info">
                            <img src="{{url('front/img/bg-img/testimonials2.jpg')}}" alt="">
                            <h6>Julia Smith</h6>
                            <p>Pacient</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Testimonials Area End ***** -->

<!-- ***** CTA Area Start ***** -->
<section class="medica-call-to-action section_padding_50_0 gradient-background">
    <div class="container">
        <div class="row">
            <!-- Single Cool Fact-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-fact wow fadeIn" data-wow-delay="0.2s">
                    <div class="counter-area">
                        <h2><span class="counter">8723</span></h2>
                        <h6>Pacients since opening</h6>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-fact wow fadeIn" data-wow-delay="0.6s">
                    <div class="counter-area">
                        <h2><span class="counter">120</span></h2>
                        <h6>Specialist Doctors </h6>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-fact wow fadeIn" data-wow-delay="1s">
                    <div class="counter-area">
                        <h2><span class="counter">12</span></h2>
                        <h6>Years of Experience</h6>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-cool-fact wow fadeIn" data-wow-delay="1.4s">
                    <div class="counter-area">
                        <h2><span class="counter">83</span></h2>
                        <h6>Pro Bono Works</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** CTA Area End ***** -->

<!-- ***** Appointment Area Start ***** -->
<section class="medica-book-an-appointment-area section_padding_100_0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="medica-appointment-card">
                    <h5>Book an apppointment</h5>
                   <!--  -->
                    <form role="add-appointment-2" action="{{url('add-appointment')}}" method="POST">
                             {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                   <input type="text" class="form-control text-white" name="name" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    <select class="form-control drop-down" id="specialitytype"  name="specialitytype">
                                        <option value="doctor">Doctor</option>
                                        <option value="hospital">Hospital</option>
                                        <option value="service">Service</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mobile_number" id="mobile_number" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    <select class="form-control drop-down  requirementname" name="requirementname" >
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">                              
                                    <input type="date" class="form-control" name="appointment_date" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="hidden" name="reqname" id="reqname" value="">
                                <button type="button" class="btn medica-btn mt-15" data-request="ajax-submit" data-target='[role="add-appointment-2"]'>Make an Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="medica-appointment-thumb">
                    <img src="{{url('front/img/bg-img/medical1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Appointment Area End ***** -->

<!-- ***** Partners Area Start ***** -->
<div class="medica-our-partners-area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="our-partners-logo d-flex align-items-center justify-content-between">
                    <a href="#"><img src="{{url('front/img/partners-img/1.png')}}" alt=""></a>
                    <a href="#"><img src="{{url('front/img/partners-img/2.png')}}" alt=""></a>
                    <a href="#"><img src="{{url('front/img/partners-img/3.png')}}" alt=""></a>
                    <a href="#"><img src="{{url('front/img/partners-img/4.png')}}" alt=""></a>
                    <a href="#"><img src="{{url('front/img/partners-img/5.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Partners Area End ***** -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript">
   

    $('#specialitytype').on('change', function(){
        var id = $(this).val();
        $('.requirementname').select2({
               formatLoadMore   : function() {return 'Loading more...'},
               placeholder : "Select Requirement",
               allowClear : true,
               ajax: {
                   url: "{{ url('requirement-name') }}",
                   dataType: 'json',
                   data: function (params) {
                       var query = {
                           search: params.term,
                           type: 'public',
                           id: id
                       }
                       return query;
                   }
               }
           }).parent('.customSelect').addClass('select2Init');

    });
    $('#specialitytype').on('change', function(){
        $('.requirementname').on('change', function(){
            var data = JSON.stringify($('.requirementname').select2('data'));
            var stringify = JSON.parse(data);
            for (var i = 0; i < stringify.length; i++) {
                $("#reqname").val(stringify[i]['text']);
            }
            
        });
    });
  
</script>

