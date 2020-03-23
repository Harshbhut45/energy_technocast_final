
      /* <![CDATA[ */
        jQuery.noConflict()(function($){
          $(document).ready(function() {
        var s = $("#header-default");
        var pos = s.position();					   
        $(window).scroll(function() {
          var windowpos = $(window).scrollTop();
          if (windowpos >= 65) {
            s.addClass("scroll-fixed");
          } else {
            s.removeClass("scroll-fixed");	
          }
        });
        });

        $(document).ready(function() {
        var s = $("#entry-wrapper");
        var pos = s.position();					   
        $(window).scroll(function() {
          var windowpos = $(window).scrollTop();
          if (windowpos >= 65) {
            s.addClass("scroll-fixed");
          } else {
            s.removeClass("scroll-fixed");	
          }
        });
        });
        });
      /* ]]> */	
      