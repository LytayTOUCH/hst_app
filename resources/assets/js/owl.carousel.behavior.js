$(document).ready(function() {

  $("#owl-example").owlCarousel({
    
  });

  $("#owl-demo").owlCarousel({
    items:1,
    loop: true,
    autoHeight:true
  });

  $("#carousel_air_ticket").owlCarousel({

    items:1,
    loop: true,
    autoplay: 1000,
    autoplayHoverPause: true,
    autoplayTimeout:3000,    
    autoHeight:true    

  });

  $("#client_carousel").owlCarousel({
    items:7,
    center: true,
    dots: false,
    loop: true,
    margin: 5,
    autoplay: 1000,
    autoplayHoverPause: true,
    autoplayTimeout:3000,    
    autoHeight:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:5,
        }
    }
    
  });

});
