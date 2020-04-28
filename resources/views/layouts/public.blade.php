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
  
    <!-- Navbar-CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600%2C400%7CRoboto:500" rel="stylesheet" property="stylesheet" type="text/css" media="all">

   <!-- slider-CSS -->
   <link href="https://googledrive.com/host/0B1RR6fhjI2QROGt0MTFoVkhMdUk/fonts.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">

   <!-- header-dropdown-CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <!-- CSS -->
    <link rel="stylesheet" href="{{ ('/css/energy_custom.css') }}">
</head>
    <body>
      <div id="entry-wrapper" >
     <header id="header-default">
				<div class="entry-top">	
        <nav class="navbar-light" id="menu-main-menu">
            {{-- <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
              &#9776;
            </button> --}}
            <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                <div class="container">
                 <div class="row">
                  <div class="col-sm-9 col-xs-12">
                    <ul class="list-inline helpdesk">
                      <li><a><img src="/image/email.png" style="height:15px;width:15px;margin-right:10px;">info@energytechnocast.net</a></li>
                      <li><a><span class="fa fa-phone" style="color:#d65d27;height:15px;width:15px;"></span> +91 7575880001</a></li>                                        
                      <li><img src="/image/EnergyTechnocastISO.png" style="height:15px;width:15px;margin-right:10px;">ISO 9001:2008 CERTIFICATE</a></li>
                  </ul>
                  </div>
                  <div class="col-sm-3 col-xs-12">
                    <ul class="navbar-nav nav-flex-icons pull-sm-right m-b-0">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                 </div>
                 </div>
                </div>
            </div>
          </nav>
        </div>
        <div class="topheader">
          {{-- <div class="nav"> --}}
        <div class="nav navbar1 bg-faded">
          
           <input type="checkbox" id="nav-check"> 
         
          <div class="nav-header">
            <div class="nav-title">
            <a class="navbar-brand"  href="/"><img src="/image/logo.png"></a>
            </div>
          </div>
          <div class="nav-btn">
            <label for="nav-check">
              <span></span>
              <span></span>
              <span></span>
            </label>
          </div>
        

          <div class="nav-links navbar-toggleable-x  " id="topheader">
              <ul class="nav navbar-nav">
                <li class="nav-item nav-item1 {{ (\Request::is('*') ? 'active' : '') }}"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item nav-item1 {{ (\Request::is('abouts-us*') ? 'active' : '') }}"><a class="nav-link " href="/abouts-us">About Us</a></li>
                <li class="nav-item nav-item1 {{ (\Request::is('technical-capabilities*') ? 'active' : '') }}"><a class="nav-link" href="/technical-capabilities">Technical Capabilities</a></li>
                <li class="nav-item nav-item1 {{ (\Request::is('process*') ? 'active' : '') }}"><a class="nav-link" href="/process">Process</a></li>
                <li class="nav-item nav-item1 {{ (\Request::is('quality*') ? 'active' : '') }}"><a class="nav-link" href="/quality">Quality</a></li>
                <li class="nav-item nav-item1 {{ (\Request::is('industries-servied*') ? 'active' : '') }}"><a class="nav-link" href="/industries-servied">Industries Served</a>
              
              <ul class="submenu-bottom">
                <div class="row head__dropdown">
                  @foreach($categories as $category)
                    <div class="pro-cat-list column menu__list" id="select-box">
                      <ul class="dropdown__list">
                        <li>
                          <a href="{{ url('industries-servied-valves',['id' => $category->name ])}}" class="tab-link">{{ $category->name }}</a>
                        </li>
                      </ul>
                    </div>
                  @endforeach 
              </ul>
          </li>
            <li class="nav-item nav-item1 {{ (\Request::is('career*') ? 'active' : '') }}"><a class="nav-link" href="/career">Career</a></li>
            <li class="nav-item nav-item1 {{ (\Request::is('contact-us*') ? 'active' : '') }}"><a class="nav-link" href="/contact-us">Contact Us</a></li>
        </ul>
      </div>
    </div>
    
</div>
        </div>
        </div>
 </header>
 
 
        <div class="">
            @yield('content-company')
            <a href="#" id="scroll" title="Back to top" aria-hidden="true" style="display: none;"></a>
        </div>
           @include('includes.footer')

     
     <!-- Navbar-js -->  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
    
      <!-- Dropdown-js --> 
      <script src="{{ asset('js/dropdown.js') }}"></script>
     
      <!-- Scrolltop-js --> 
      <script src="{{ asset('js/scrolltop.js') }}"></script>
      <!-- slider-js --> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
      <!-- slider-js -->
      <script src="{{ asset('js/slider.js') }}"></script>
      <!-- active-js -->
      <script src="{{ asset('js/active.js') }}"></script>
      <!-- scrolled-js -->
      <script src="{{ asset('js/scrolled.js') }}"></script>
      <!-- Scrollbutton-js --> 
      <script src="{{ asset('js/scrollbutton.js') }}"></script>

   
   <script>
      $(document).ready(function(){
          $(".dropdown1").hover(       
               
              function() {
                // console.log("hover");
                  $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("800");
                  $(this).toggleClass('open');        
              },
              function() {
                  $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("800");
                  $(this).toggleClass('open');       
              }
          );
      });
   </script>


<script>
  $("#menu-features li a").click(function() {
      $(this).parent().addClass('active').siblings().removeClass('active');

  });
</script>

  </body>

  </html>