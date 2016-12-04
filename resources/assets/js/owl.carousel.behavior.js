$(document).ready(function() {

  $("#owl-example").owlCarousel({
    items : 1,
    lazyLoad : true,
    navigation : false
  });

  $("#owl-demo").owlCarousel({
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      stopOnHover: true,
      autoPlay: 3000,
      autoHeight: true

  });

  $("#carousel_air_ticket").owlCarousel({

      // Most important owl features
    items : 1,
    itemsCustom : false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : true,
    itemsScaleUp : false,
 
    //Basic Speeds
    slideSpeed : 200,
    paginationSpeed : 400,
    rewindSpeed : 3000,
 
    //Autoplay
    autoPlay : 3000,
    stopOnHover : true,
 
    // Navigation
    navigation : false,
    navigationText : ["<",">"],
    rewindNav : true,
    scrollPerPage : false,
 
    //Pagination
    pagination : true,
    paginationNumbers: false,
 
    // Responsive 
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
 
    // CSS Styles
    baseClass : "owl-carousel",
    theme : "owl-theme",
 
    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
 
    //Auto height
    autoHeight : true,
 
    //JSON 
    jsonPath : false, 
    jsonSuccess : false,
 
    //Mouse Events
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,
 
    //Transitions
    transitionStyle : false,
 
    // Other
    addClassActive : false,
 
    //Callbacks
    beforeUpdate : function(){
        console.log('beforeUpdate');
    },
    afterUpdate : function(){
        console.log('afterUpdate');
    },
    beforeInit: function(){
        console.log('beforeInit');
    }, 
    afterInit: function(){
        console.log('afterInit');
    }, 
    beforeMove: function(){
        console.log('beforeMove');
    }, 
    afterMove: function(){
        console.log('afterMove');
    },
    afterAction: function(){
        console.log('afterAction');
    },
    startDragging : function(){
        console.log('startDragging');
    },
    afterLazyLoad : function(){
        console.log('afteLazyLoad');
    }

  });

});
