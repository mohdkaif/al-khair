<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    
   <title>Al-Khair-Meditour - Health</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('front/img/core-img/favicon.ico')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{url('front/css/core-style.css')}}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    <link href="{{url('css/select2.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('/bower_components/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet">
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {

         /* var ckDomain;
          for (var ckDomain = window.location.hostname.split("."); 2 < ckDomain.length;){
            ckDomain.shift();
          }
          ckDomain = ";domain=" + ckDomain.join(".");
         
          document.cookie = "googtrans=/en/ar; expires=Thu, 07-Mar-2047 20:22:40 GMT; path=/" + ckDomain;
         
          document.cookie = "googtrans=/en/ar; expires=Thu, 07-Mar-2047 20:22:40 GMT; path=/";*/
          new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,ar',
            autoDisplay: false,
            layout: google.translate.TranslateElement
          }, 'google_translate_element');

          
          ////alert(google.translate.TranslateElement().a.sd);
}


    </script>
</head>
<body class="page-md login">
    
    <div id="preloader">
        <div ></div>
        <img src="{{asset('front/img/core-img/plus.png')}}" alt="logo">
    </div>
   {{--  <div id="popup" class="popup">
            <div class="loader">
                <div class="spinning">
                    <img src="{{ asset('images/loader.gif') }}" style="border-radius: 30px;"/>
                </div>
            </div>
            <div class="popup_align"></div>
    </div> --}}
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    {{-- <script src="{{asset('front/js/jquery/jquery-2.2.4.min.js')}}"></script> --}}
    <!-- Popper js -->
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('front/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('front/js/active.js')}}"></script>
    <script src="{{ asset('/bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>    
    <!-- END PAGE LEVEL SCRIPTS -->
    <script src="{{url('js/select2.full.min.js')}}" type="text/javascript"></script>

    <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

    <script src="{{asset('js/script.js')}}"></script>
    <script type="text/javascript">
   /* jQuery(document).ready(function() {     
      Metronic.init(); 
    Layout.init();
      Login.init();
      Demo.init();
        
           $.backstretch([
            "{{ asset('assets/admin/pages/media/bg/2.jpg') }}",
            ], {
              fade: 1000,
              duration: 8000
        }
        );
    });*/
   /* function triggerHtmlEvent(element, eventName) {
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

    triggerHtmlEvent(document.getElementsByClassName("goog-te-combo")[0], 'change');

    jQuery('.goog-te-combo').on('change', function() {
  alert( this.value );
});*/

    </script>
    @yield('requirejs') 

    
    <!-- END JAVASCRIPTS -->
</body>
</html>
