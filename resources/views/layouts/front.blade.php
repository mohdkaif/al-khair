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
    
   <title>Medica - Health &amp; Medical Template | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{url('front/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{url('front/css/core-style.css')}}">
    <link rel="stylesheet" href="{{url('front/css/style.css')}}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('front/css/responsive.css')}}">
</head>
<body class="page-md login">
    <div id="app">
       

        <main class="py-4">
            @yield('content')
        </main>
    </div>
   
     <script src="{{asset('front/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('front/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('front/js/active.js')}}"></script>

    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
    jQuery(document).ready(function() {     
      Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
      Login.init();
      Demo.init();
           // init background slide images
           $.backstretch([
            "{{ asset('assets/admin/pages/media/bg/2.jpg') }}",
            ], {
              fade: 1000,
              duration: 8000
        }
        );
    });
    </script>
    <!-- END JAVASCRIPTS -->
</body>
</html>
