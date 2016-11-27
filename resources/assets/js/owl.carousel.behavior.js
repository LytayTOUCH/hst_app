$(document).ready(function() {

  $("#owl-example").owlCarousel({
    items : 1,
    lazyLoad : true,
    navigation : false
  });

  $("#owl-demo").owlCarousel({

      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoHeight : true

      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

  });

});
