$(document).ready(function(){

  (function($) {
    "use strict";

    const projectsCarousel = $("#projects-carousel");
    const projectsFullview = $("#projects-fullview");

    projectsCarousel.carousel({
      interval : 2500
    });

    $("#projects-carousel .carousel-item img").on("click" , function() {
    	$("#projects-fullview").addClass("show");
    });

    $("#projects-fullview > a.carousel-control-prev").on("click" ,function(e){
    	e.preventDefault();
    	projectsFullview.carousel("prev");
    });

    $("#projects-fullview > a.carousel-control-next").on("click" ,function(e){
    	e.preventDefault();
    	projectsFullview.carousel("next");
    });

    $("#projects-fullview .carousel-close").on("click" ,function() {
    	projectsFullview.removeClass("show");
    });
  })(jQuery);
});