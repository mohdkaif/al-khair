<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url({{url('front/img/bg-img/hero2.jpg')}});">
    <div class="container">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- Title -->
                        <h3 class="breadcumb-title">{{ucfirst(rtrim($type,"s"))}} Details</h3>
                        <!-- Breadcumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Details</li>
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
                        <h2>{{!empty($title)?$title:''}}</h2>
                        <h3>{{!empty($address)?$address:''}}</h3>
                        <p>{{!empty($description)?$description:''}}
</p>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="medica-about-thumbnail">
                         @if(!empty($image))
                            <div style="height:200px">
                                <img src="{{url('uploads/'.$type.'/'.$image)}}" alt="">
                            </div>
                        @else
                            <img src="{{url('uploads/avatar.png')}}" alt="" class="img-circle">
                         @endif
                         
                    </div>
                    <div class="doctor-meta centertext">
                        @if($type!='gallery')
                            <a href="{{url(sprintf('book-appointment?type=%s&id=%s',rtrim($type,'s'),___encrypt($id)))}}" class="btn btn-primary custom" style="margin-left:130px">Book Appointment</a>
                        @endif
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
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="cta-btn">
                        <a href="{{url('book-appointment?type=doctor&id=null')}}" class="btn medica-btn">Make an Appointment</a>
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
                        <p>We provide Laboratory,Ambulance Service,Radiology,Emergency Care,Pharmacy,etc

                        </p>

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

  