$(document).ready(function(){

  (function($) {
    "use strict";

    // Initiate wow.js library
    new WOW().init();

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - 54)
          }, 1000, "easeInOutExpo");
          return false;
        }
      }
    });
    
    let bottom_pos = $('body').height() - $(window).height();
    let half_point = $('body').height() / 2;

    function changeScrollTopIcon() {
      if ($(window).scrollTop() > (half_point - $(window).height())) {
        $('.scroll-top span').addClass('icon-chevron-up').removeClass('icon-chevron-down');
      } else {
        $('.scroll-top span').addClass('icon-chevron-down').removeClass('icon-chevron-up');
      }

      /*let body_width = $('body').outerWidth();
      let scrolltop_right = (body_width / 2) - ($('.scroll-top').outerWidth() / 2);

      if ($(window).scrollTop() < 50) {
        $('.scroll-top').css({
                              right : scrolltop_right,
                              background : "transparent",
                              color : "#dc3545",
                              border : "1px solid #000",
                              padding: "1.5rem 0.65rem"
                              });
        $('.scroll-top span').css({
                                    animation : "1s linear infinite alternate upDown"
                                  });
      } else {
        $('.scroll-top').css({
                              right : "15px",
                              background : "#dc3545",
                              color : "#fff",
                              border : "none",
                              padding: "0.5rem 1.2rem"
                              });
        $('.scroll-top span').css({
          animation : "none"
        });
      }*/
    }

    changeScrollTopIcon();

    // Change to header fixed
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
          $('.navbar').addClass('header-fixed');
      } else {
          $('.navbar').removeClass('header-fixed');
      }
      changeScrollTopIcon(); 
    });

    // Back To Top Button 
    $('.scroll-top').on("click" ,function(e) {
      e.preventDefault();
      if ($(window).scrollTop() > half_point) {
        $('html, body').animate({
          scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return false;
      } else {
        $('html, body').animate({
          scrollTop: bottom_pos
        }, 1500, 'easeInOutExpo');
        return false;
      }
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
      target: '#mainNav',
      offset: 300
    });
    
  })(jQuery);
});