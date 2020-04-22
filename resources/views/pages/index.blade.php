@extends('layouts.public')

@php($title = 'Home')
@push('title', yieldTitle($title))

@section('content-company')

<div class="Modern-Slider">
    <!-- Item -->
    <div class="item">
      <div class="img-fill">
        <img src="image/slider-img1.jpg">
        <div class="info">
        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item">
      <div class="img-fill">
        <img src="image/slider-img2.jpg">
        <div class="info">
        </div>
      </div>
    </div>
    <!-- // Item -->
</div>
    <div class="welcome-block">
		<div class="row-fluid">
			<div class="container">
				<p> More than 2500 different types of components developed for various industries. Energy Technocast is an ISO 9001 : 2008 certified company and engaged in manufacturing of Ferrous & Non-ferrous Investment Castings using Lost wax process.
          Energy Technocast is already develop of casting components with weight range of few Gms. (10Gms.) To 100kgs. Single piece casting and in minimum wall thickness up to 1.5mm
          Energy Technocast is equipped with all major Quality control equipment, such as Single spark Spectrometer for Chemical Analysis, Universal Testing Machine for testing physical properties, Hardness Testing Machine, Die penetration Test, Magnetic Particle Test machine, Impact testing machine, static and dynamic load testing machine, All Types of Measuring Instruments etc.
          </p>	
			</div>	
            	
		</div>		
    </div>
    
    {{-- second-slider --}}
    <div id="content" role="main">
        <div class="container">	
            <div class="slider-header">
                <h3 class="text-center"> <strong>Energy Technocast Pvt. Ltd.(a manufacturer of Ferrous & Non-ferrous investment casting) was established in 2013 a gold to be india's leading quality Investment Casting manufacturer through innovative and edge technologies.
                </strong></h3>
                <div class="divider plus"></div>
            </div>
            
        
        <div class="Container">
            <h3 class="Head">INDUSTRIES SERVED <span class="Arrows"></span></h3>
            <!-- Carousel Container -->
            <div class="SlickCarousel">
              @foreach($categories as $category)
              <!-- Item -->
              <div class="ProductBlock">
                <div class="Content">
                  <div class="img-fill">
                    <div class="w-portfolio-item-image">
                        <a class="w-portfolio-item-anchor" href="{{ route('products.public', ['slug' => $category->slug ]) }}" style="background-color: rgba(0,0,0,0.9);color: #ffffff;">
                          <div class="w-portfolio-item-image" style="background-image: url({{ $category->image_full_path }})">
                            
                          </div><div class="w-portfolio-item-meta"><div class="w-portfolio-item-meta-h"><h2 class="w-portfolio-item-title">{{ $category->name }}</h2> <span class="w-portfolio-item-arrow"></span></div></div> </a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <!-- Carousel Container -->
          </div>
    </div>



<div class="container row-fluid clearfix clearfix_res">
    <div class="clearfix__short">
        <h3 class="short_title bb-solid">Foundry Approvals</h3>
        <img src="image/foundry-aproval.jpg" class="clearfix__img">
    </div>
    
   
    <div class="clearfix__short">
        <h3 class="short_title bb-solid">  Why us?</h3>
      <ul class="short__title-list">
        <li>Implement Quality, Environmental, Health and Safety Management System.</li>
        <li>Exceed the customer expectations in Quality, Cost & Delivery.</li>
        <li>Achieve sustainable growth by adapting latest technology and invovations.</li>
        <li>Continually improve the processes and reduce waste through training & motivation.</li>
        <li>Implement Eco-Friendly, Healthy and Safe enviroment along with conservation of key resources.</li>

      </ul>
    </div>

  </div>

      <div class="container">
        <div class="">
            <div class="partners-carousel">
              <div class="carousel-title">ETPL Exports to</div>
                 <ul class="slides-partners clearfix">
                    <li><img class="img-responsive" src="image/f010.jpg"><p>Germany</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>Italy</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>USA</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>Spain</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>Canada</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>Denmark</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>Belgium</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>France</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>Turkey</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>U.K.</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>Sweden</p></li>
                        <li><img class="img-responsive" src="image/f010.jpg"><p>Austria</p></li>
                  </ul>
            </div>
        </div> <!-- span12 -->
    </div>
  </div>

        
@endsection