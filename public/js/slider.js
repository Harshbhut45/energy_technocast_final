jQuery(document).ready(function($){
  
    $(".Modern-Slider").slick({
      autoplay:true,
      autoplaySpeed:10000,
      speed:600,
      slidesToShow:1,
      slidesToScroll:1,
      pauseOnHover:false,
      dots:true,
      pauseOnDotsHover:true,
      cssEase:'linear',
     // fade:true,
      draggable:false,
      prevArrow:'<button class="PrevArrow"></button>',
      nextArrow:'<button class="NextArrow"></button>', 
    });
    
  })



//   home-slider-2

jQuery(document).ready(function($){
  $(".SlickCarousel").slick({
    rtl:false, // If RTL Make it true & .slick-slide{float:right;}
    autoplay:false, 
    autoplaySpeed:5000, //  Slide Delay
    speed:800, // Transition Speed
    slidesToShow:4, // Number Of Carousel
    slidesToScroll:4, // Slide To Move 
    pauseOnHover:false,
    appendArrows:$(".Container .Head .Arrows"), // Class For Arrows Buttons
    prevArrow:'<span class="Slick-Prev"></span>',
    nextArrow:'<span class="Slick-Next"></span>',
    easing:"linear",
    responsive:[
      {breakpoint:991,settings:{
        slidesToShow:3,
        slidesToScroll:3,
      }},
      {breakpoint:641,settings:{
        slidesToShow:2,
        slidesToScroll:2,
      }},
      {breakpoint:481,settings:{
        slidesToShow:1,
        slidesToScroll:1,
      }},
    ],
  })
})

