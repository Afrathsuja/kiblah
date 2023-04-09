<!DOCTYPE html>
<html lang="en_GB" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://ogp.me/ns/fb#" class="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="Kiblah, Template, eCommerce">
    <meta name="robots" content="all">
    @yield('meta')

    <title>Kiblah -Online Shopping</title>
 
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
 
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/colors/green.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}">
    
 
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
  

    @yield('link')

   

    @yield('head')

       

    @yield('css')
 
</head>

<body>

    @include('web-site.base.header')

    @yield('content') 
 
    @include('web-site.base.footer')


      
    <script src="{{asset('assets/js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-1.2.1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
    <script src="{{asset('assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/css_browser_selector.min.js')}}"></script>
    <script src="{{asset('assets/js/echo.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing-1.3.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.raty.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.prettyPhoto.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
     <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/jquery.customSelect.min.js')}}"></script>


  
    @yield('need_js')

</body>

</html>