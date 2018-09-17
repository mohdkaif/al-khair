<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url({{url('front/img/bg-img/hero2.jpg')}});">
    <div class="container">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- Title -->
                        <h3 class="breadcumb-title">About us</h3>
                        <!-- Breadcumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </section>

    <section class="medica-about-content section_padding_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                    <div class="medica-about-text">
                        <h2>Welcome to <span>Al-Khair Meditour</span> Health Center</h2>
                        <p>Al-Khair Meditour is the provider of medical healthcare  and one of the leading hospital providers in the Middle East.

Al-Khair promises to deliver the best healthcare to the patients, with care, love and effective help.

Al-Khair manages doctors, nurses, medicines,its health care objectives in an effective and cooperative way.

The advanced facilities and equipments have been added to increase the effectiveness and care provided to the patients. It takes care of everything for the present as well as the patients for their future appointments.

Al-Khair helps its patients worldwide, to receive the pleasant and cooperative medical facilities and support in the most considerate manner.  
</p>
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
                        <img src="{{url('front/img/bg-img/signature')}}.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="medica-about-thumbnail">
                        <img src="{{url('front/img/bg-img/about1')}}.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="medica-doctors-area bg-gray section_padding_100">
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
                <div class="col-12">
                    <div class="see-all-doctors text-center wow fadeInUp" data-wow-delay="1s">
                        <a href="#" class="btn medica-btn btn-2">See All Doctors</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-area section_padding_100 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta1.jpg);">
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
    </section>

    <section class="medica-department-area section_padding_100_0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <img src="{{url('front/img/icons/molecule.png')}}" alt="">
                        <h2>Our Services</h2>
                        <p>Phasellus at nunc orcidonec ipsum metus, pharetra quis nunc sit amet</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/scanner.png')}}" alt="">
                        <h6>Radiology</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/cardiogram.png')}}" alt="">
                        <h6>Cardiology</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/blood-donation')}}.png" alt="">
                        <h6>ENT</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/stomach.png')}}" alt="">
                        <h6>Gastroenterology</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/head.png')}}" alt="">
                        <h6>Neurology</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/lungs.png')}}" alt="">
                        <h6>General surgery</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/microscope.png')}}" alt="">
                        <h6>Haematology</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/mortar.png')}}" alt="">
                        <h6>Nutrition</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/ribbon.png')}}" alt="">
                        <h6>Obstetrics</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/glasses.png')}}" alt="">
                        <h6>Ophthalmology</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/stretcher.png')}}" alt="">
                        <h6>Physiotherapy</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <div class="single-department-area text-center">
                        <img src="{{url('front/img/icons/injection.png')}}" alt="">
                        <h6>Urology</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

  