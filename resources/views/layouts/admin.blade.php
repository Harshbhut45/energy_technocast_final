<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <title>@stack('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:600%2C400%7CRoboto:500" rel="stylesheet" property="stylesheet" type="text/css" media="all">

    <!-- bootstrap-link -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashforge.demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
      
    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    
    {{-- croppie --}}
    <link rel="stylesheet" href="{{ asset('css/croppie.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- slider-CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">   
  </head>
  <body>
    <header class="navbar navbar-header navbar-header-fixed">
      <a href="" id="sidebarMenuOpen" class="burger-menu"><i data-feather="arrow-left"></i></a>
      <div class="navbar-brand">
        <a href="{{ route('home') }}" class="df-logo">Energy<span>Technocast</span></a>
      </div><!-- navbar-brand -->
      <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
          <a href="../index.html" class="df-logo">Energy<span>Technocast</span></a>
          <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        <ul class="nav navbar-menu">
          <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
          <li class="nav-item {{ (\Request::is('products*') || \Request::is('home') ? 'active' : '') }}">
            <a href="{{ route('home') }}" class="nav-link"><i data-feather="package"></i> Products</a>
          </li>
          <li class="nav-item {{ (\Request::is('categories*') ? 'active' : '') }}"><a href="{{ route('categories.index') }}" class="nav-link"><i data-feather="box"></i> Categories</a></li>
        </ul>
      </div><!-- nav-wrapper -->
      <div class="navbar-right">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span><i data-feather="log-out"></i> {{ __('Sign Out') }}</span></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div><!-- az-header-right -->
    </header>

          <div class="content @stack('content-class') pd-20">
            <div class="@stack('container-class') pd-x-0 pd-lg-x-10 pd-xl-x-0">
              @yield('breadcrumb')
              @yield('content')
             </div>
          </div>
           
          <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
          <script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
          <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
         
          <script src="{{ asset('assets/js/dashforge.js') }}"></script>
          <!-- <script src="{{ ('/js/custom.js') }}"></script> -->

        <!-- toastr -->
          <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
          <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
          {!! Toastr::message() !!} 

          <script>
            $(function(){
              'use strict'

            });
          </script>
        <!-- Select2 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        {{-- <script src="../assets/js/select2.js"></script> --}}

        {{-- croppie-image --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>

       
  
        <script type="text/javascript">
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            
            
            $uploadCrop = $('#upload-demo').croppie({
              url : $('#upload-demo-image').val(),
                enableExif: true,
                enableOrientation: true,    
                viewport: { // Default { width: 100, height: 100, type: 'square' } 
                    width: 200,
                    height: 200,
                    type: 'circle' //square
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });
            
            
            $('#image').on('change', function () {
              var reader = new FileReader();
                reader.onload = function (e) {
                  $uploadCrop.croppie('bind', {
                    url: e.target.result
                  }).then(function(data){
                    console.log('jQuery bind complete',data);
                  });
                }
                reader.readAsDataURL(this.files[0]);
            });
            
            
            $('.user-form').on('click', function (ev) {
              // ev.preventDefault();
              $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
              }).then(function (base64) {
                console.log(base64)
                $('#profile_picture').val(base64);
                  $('.user-form').unbind().submit();
          
            
              });
            });
        </script>

      <!-- Dropdown-js --> 
      <script src="{{ asset('js/dropdown.js') }}"></script>
      <!-- Scrolltop-js --> 
      <script src="{{ asset('js/scrolltop.js') }}"></script>
      <!-- slider-js --> 
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/slick.min.js') }}"></script>
      <script src="{{ asset('js/slider.js') }}"></script>

      </body>
</html>
