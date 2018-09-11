
    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url({{url('front/img/bg-img/hero3.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- Title -->
                        <h3 class="breadcumb-title">Services</h3>
                        <!-- Breadcumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="medica-services-area section_padding_100">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="all-services">
                        <div class="row">
                            @if(!empty($services))
                                    <div class="col-12 col-lg-6">
                                        <div class="single-service">
                                            <img src="{{url('uploads/services/'.$services['image'])}}" alt="">
                                            <h5>{{$services['title']}}</h5>
                                            <p>{{ str_limit(strip_tags($services['description']), 5) }}</p>
                                            @if (strlen(strip_tags($services['description'])) > 5)
                                            <a href="{{url('services-details?id='.___encrypt($services['id'])) }}">Read More</a>
                                            @endif
                                        </div>
                                    </div>
                            @endif
                            <!-- Single Service -->
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 