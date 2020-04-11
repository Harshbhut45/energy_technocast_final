$(document).ready(function(){
    var scrollTop = 0;
    $('.nav-item').hover(function() {
      console.log("hover");
      $(this).find('.submenu-bottom').stop(true, true).delay(500).fadeIn(1000);
      }, function() {
        $(this).find('.submenu-bottom').stop(true, true).delay(200).fadeOut(500);
    });
    $(window).scroll(function(){
      scrollTop = $(window).scrollTop();
       $('.counter').html(scrollTop);
      
      if (scrollTop >= 100) {
        $('#header-default .navbar-brand ').addClass('scrolled-nav');
        $('#header-default .nav').addClass('scrolled-nav1');
        $('#header-default .pd-r').removeClass('scrolled-nav2');
        $('#header-default .head__dropdown').addClass('head__dropdown1');
        $('#header-default .nav > .nav-btn').addClass('nav-btn1');
        $('#header-default .nav > .nav-links').addClass('nav-links1');
      } else if (scrollTop < 100) {
        $('#header-default .navbar-brand').removeClass('scrolled-nav');
        $('#header-default .nav').removeClass('scrolled-nav1');
        $('#header-default .pd-r').removeClass('scrolled-nav2');
        $('#header-default .head__dropdown').removeClass('head__dropdown1');
        $('#header-default .nav > .nav-btn').removeClass('nav-btn1');
        $('#header-default .nav > .nav-links').removeClass('nav-links1');
      } 
      
    }); 
    
  });