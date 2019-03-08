<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area gradient-background">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="h-100 d-md-flex justify-content-between align-items-center">
                        <div class="top-header-social-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="google_translate_element"></div>
                                </div>
                                <div class="col-md-6">
                                    <h5 >Connect with us on:</h5>
                                    <a href="https://www.facebook.com/imran.sahir.50?ref=br_rs" data-toggle="tooltip" data-placement="left" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="top-header-menu">
                            <nav class="top-menu">
                                <ul>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="{{url(sprintf('book-appointment?type=%s&id=%s','booking','null'))}}">Book Appointment</a></li>
                                    <li><a href="{{url('contact')}}">Contacts</a></li>
                                    <li><a href="#">imranahmad1612@gmail.com</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <div class="logo-text">
                                <div class="row">
                                    <a class="navbar-brand" href="{{url('/')}}">
                                    
                                    <div class="side-crop col-md-6">
                                        <img src="{{url('front/img/core-img/logo.png')}}" alt="Logo">
                                    </div>
                                    <div class="col-md-6">
                                        <h1>Al-Khair Meditour</h1>
                                        <h3>Health & Medica</h3>
                                    </div>
                                    </a>
                                </div>
                                

                            </div>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medicaMenu" aria-controls="medicaMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="medicaMenu">
                                <!-- Menu Area -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item @if(Request::segment(1)=='')active @endif" >
                                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only" >(current)</span></a>
                                    </li>
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{url('/')}}">Home</a>
                                            <a class="dropdown-item" href="{{url('about-us')}}">About Us</a>
                                            <a class="dropdown-item" href="{{url('services')}}">Services</a>
                                            <a class="dropdown-item" href="{{url('hospitals')}}">Hospitals</a>
                                            <a class="dropdown-item" href="{{url('contact')}}">Contact</a>
                                            <a class="dropdown-item" href="{{url('/')}}">Elements</a>
                                        </div>
                                    </li> -->
                                    <li class="nav-item @if(Request::segment(1)=='about')active @endif">
                                        <a class="nav-link" href="{{url('about')}}">About Us</a>
                                    </li>
                                    <li class="nav-item  @if(Request::segment(1)=='services')active @endif">
                                        <a class="nav-link" href="{{url('services')}}">Services</a>
                                    </li>
                                    <li class="nav-item  @if(Request::segment(1)=='doctors')active @endif">
                                        <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
                                    </li>
                                    <li class="nav-item  @if(Request::segment(1)=='hospitals')active @endif">
                                        <a class="nav-link " href="{{url('hospitals')}}">Hospitals</a>
                                    </li>
                                     <li class="nav-item  @if(Request::segment(1)=='gallery')active @endif">
                                        <a class="nav-link " href="{{url('gallery')}}">Gallery</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="{{url('news')}}">News</a>
                                    </li> -->
                                    <li class="nav-item  @if(Request::segment(1)=='contact')active @endif">
                                        <a class="nav-link" href="{{url('contact')}}">Contact</a>
                                    </li>
                                </ul>
                                <!-- Search Form -->
                                <div class="header-search-form ml-auto">
                                    <form action="{{url('search')}}" method="GET">
                                        <input type="search" class="form-control" placeholder="Input your keyword then press enter..." id="search" name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div id="searchbtn">
                                    <i class="ti-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@section('requirejs')
    <script type="text/javascript">
 
    function triggerHtmlEvent(element, eventName) {
        
      var event;
      if(document.createEvent) {
          event = document.createEvent('HTMLEvents');
          event.initEvent(eventName, true, true);
          element.dispatchEvent(event);
      } else {
          event = document.createEventObject();
          event.eventType = eventName;
          element.fireEvent('on' + event.eventType, event);
      } 
    }

   
        

     
   
  

    triggerHtmlEvent(document.getElementById("google_translate_element"), 'change');
    
    jQuery('#google_translate_element').on('change', function() {

        var c = document.cookie.split('; '),
        cookies = {}, i, C;

        for (i = c.length - 1; i >= 0; i--) {
            C = c[i].split('=');
            cookies[C[0]] = C[1];
        }

        var language = cookies['googtrans'];


        ////Get Current Selected Language
        var selected_language = google.translate.TranslateElement().c;
        if(selected_language == 'en'){

            var ckDomain;
            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length;){
                ckDomain.shift();
            }
            ckDomain = ";domain=" + ckDomain.join(".");
            document.cookie = "googtrans=/en/en; expires=Thu, 07-Mar-2047 20:22:40 GMT; path=/" + ckDomain;
            
            document.cookie = "googtrans=/en/en; expires=Thu, 07-Mar-2047 20:22:40 GMT; path=/";
        }else if(selected_language == 'ar'){
            var ckDomain;
            for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length;){
                ckDomain.shift();
            }
            ckDomain = ";domain=" + ckDomain.join(".");
            document.cookie = "googtrans=/en/ar; expires=Thu, 07-Mar-2047 20:22:40 GMT; path=/" + ckDomain;
            
            document.cookie = "googtrans=/en/ar; expires=Thu, 07-Mar-2047 20:22:40 GMT; path=/";
        }
        //////Set Cookie Again
        /* var ckDomain;
          for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length;){
            ckDomain.shift();
          }
          ckDomain = ";domain=" + ckDomain.join(".");
        document.cookie = "googtrans=/en/ar; expires=Thu, 07-Mar-2047 20:22:40 GMT; path=/" + ckDomain;
        
        document.cookie = "googtrans=/en/ar; expires=Thu, 07-Mar-2047 20:22:40 GMT; path=/";*/

       
    });

    </script>
@endsection