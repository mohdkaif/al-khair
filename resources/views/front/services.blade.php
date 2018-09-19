
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
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="medica-services-sidebar-area">
                        <!-- Medica Emergency Card -->
                        <div class="medica-emergency-card">
                            <h5>For Emergencies</h5>
                            <h4>+91 9953577208<br>imranahmad1612@gmail.com</h4>
                            <p>For any emergencies, appointments, health care reach us anywhere anytime.</p>
                            <a href="{{url('contact')}}">Any Queries?</a>
                        </div>
                        <!-- Medica Doctors Card -->
                        <div class="medica-department-card">
                            <h5>Our Departments</h5>
                            <ul class="department-menu">
                                <li><a href="#">Radiology</a></li>
                                <li><a href="#">Cardiology</a></li>
                                <li><a href="#">Gastroenterology</a></li>
                                <li><a href="#">Neurology</a></li>
                                <li><a href="#">General surgery</a></li>
                                <li><a href="#">Haematology</a></li>
                                <li><a href="#">Nutrition</a></li>
                                <li><a href="#">Obstetrics</a></li>
                                <li><a href="#">Ophthalmology</a></li>
                            </ul>
                        </div>
                        <!-- Medica Appointment Card -->
                        <div class="medica-appointment-card">
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
                            <input type="hidden" name="type" value="service">
                            <input type="hidden" name="requirement" value="none">
                        </form>
                        </div>
                        <!-- Medica Appointment Card -->
                        <div class="medica-contact-card">
                            <h5>Useful Information</h5>
                            <div class="mt-50"></div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="{{url('front/img/icons/alarm-clock.png')}}" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>Monday - Friday 08:00 - 21:00 <br> Saturday and Sunday - CLOSED</p>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="{{url('front/img/icons/envelope.png')}}" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>+91 9953577208<br>imranahmad1612@gmail.com</p>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="{{url('front/img/icons/map-pin.png')}}" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>Batla House <br>Delhi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-8">
                    <div class="all-services">
                        <div class="row">
                            @if(!empty($services))
                                @foreach($services as $service)
                                    <div class="col-md-6 col-lg-6">
                                        <div class="single-service" style="height:400px">
                                            @if($service['image']!=null)
                                                <div style="height:200px">
                                                    <img src="{{url('uploads/services/'.$service['image'])}}" alt="">
                                                </div>
                                            @else
                                                <img src="{{url('uploads/avatar.png')}}" alt="" class="img-circle">
                                             @endif
                                           
                                            <h5 style="margin-top:20px">{{$service['title']}}</h5>
                                            <!-- <p>{{ str_limit(strip_tags($service['description']), 5) }}</p>
                                            @if (strlen(strip_tags($service['description'])) > 5)
                                            <a href="{{url('services-details?id='.___encrypt($service['id'])) }}">Read More</a>
                                            @endif -->
                                            <!-- <a style="color:black;align:center" href="javascript:void(0);" class="read-more">Read More</a> -->
                                            @php $desc = strlen($service['description']) > 50 ? substr($service['description'],0,50)."..." : $service['description']; @endphp
                                            <p>{{$desc}}</p>
                                            <a style="color:black;align:center" href="{{url(sprintf('detail?id=%s&type=service',___encrypt($service['id'])))}}" class="read-more">Read More</a>
                                            <div class="doctor-meta centertext">
                                                <a class="btn btn-primary custom" href="{{url(sprintf('book-appointment?type=%s&id=%s','service',___encrypt($service['id'])))}}">Book Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <!-- Single Service -->
                            
                            
                           <!--  <div class="col-12">
                                <a href="#" class="btn medica-btn btn-2">Load More</a>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    var maxLength = 80;
    $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a style="color:black;align:center" href="javascript:void(0);" class="read-more">Read More</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
    });
    $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });
});

    
</script>
<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }

    .all-services{
        text-align:center;
    }
</style>

 