jQuery(document).ready(function($){
    $('.menu__list').each(function(index) {
      $(this).children('li').first().addClass('is-active').show();
    });
    $('.menu__list').on('click', 'li.tab-link', function(event) {
      
      console.log("clicked1");
      if (!$(this).hasClass('is-active')) {
        
        // event.preventDefault();
        var accordionTabs = $(this).closest('.menu__list');
        // accordionTabs.find('is-active').removeClass('is-active');
  
        // $(this).next().toggleClass('is-active').toggle();
        accordionTabs.find('.is-active').removeClass('is-active');
        $(this).addClass('is-active');
      } else {
        // event.preventDefault();
      }
    });
  });