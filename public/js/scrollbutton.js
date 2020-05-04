
jQuery(document).ready(function($){
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 600) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 1000); 
        return false; 
    }); 
});