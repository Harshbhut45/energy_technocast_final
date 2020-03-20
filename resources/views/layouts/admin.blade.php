<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap-link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <!-- Meta -->
      <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
      <meta name="author" content="ThemePixels">
   


    <title>@stack('title')</title>

   <!-- DashForge CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/dashforge.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/dashforge.demo.css') }}">
   <link rel="stylesheet" href="{{ ('/css/custom.css') }}">

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      
    <!-- toastr -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    {{-- croppie --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
  </head>
  <body>

    <header class="navbar navbar-header navbar-header-fixed">
      <a href="" id="sidebarMenuOpen" class="burger-menu"><i data-feather="arrow-left"></i></a>
      <div class="navbar-brand">
        <a href="../index.html" class="df-logo">Energy<span>Technocast</span></a>
      </div><!-- navbar-brand -->
      <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
          <a href="../index.html" class="df-logo">Energy<span>Technocast</span></a>
          <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        <ul class="nav navbar-menu">
          <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
          <li class="nav-item active"><a href="{{ route('categories.index') }}" class="nav-link"><i data-feather="box"></i> Categories</a></li>
          <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link"><i data-feather="package"></i> Products</a>
          </li>
          
         
          
        </ul>
      </div><!-- nav-wrapper -->
      <div class="navbar-right">
        <a href="" class="btn btn-buy"><i data-feather="shopping-bag"></i> <span>Buy Now</span></a>
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
          <script src="{{ ('/js/custom.js') }}"></script>

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
        ev.preventDefault();
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

      </body>
</html>
