/*------------------------------------------------------
	Owl Carousel
-------------------------------------------------------*/
$(document).ready(function() {
 
  $("#app-showcase-admin").owlCarousel({
    items : 2,
    itemsCustom : false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,
    autoPlay : true,
    slideSpeed : 600,
    stopOnHover : true,
    pagination : true,
    navigation : true,
    navigationText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>']
  });
  $("#app-showcase-landing").owlCarousel({
    items : 3,
    itemsCustom : false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,
    autoPlay : true,
    slideSpeed : 600,
    stopOnHover : true,
    pagination : true,
    navigation : true,
    navigationText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>']
  });
  $("#app-showcase-user").owlCarousel({
    items : 2,
    itemsCustom : false,
    itemsDesktop : [1199,2],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,
    autoPlay : true,
    slideSpeed : 600,
    stopOnHover : true,
    pagination : true,
    navigation : true,
    navigationText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>']

  });
  $("#app-showcase-business").owlCarousel({
	items : 2,
    itemsCustom : false,
    itemsDesktop : [1199,2],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,
	autoPlay : true,
	slideSpeed : 600,
	stopOnHover : true,
	pagination : true,
	navigation : true,
    navigationText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>']

  });
  
  $("#app-testimonials-landing").owlCarousel({
	items : 1,
    itemsCustom : false,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [980,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,
	autoPlay : false,
	slideSpeed : 600,
	stopOnHover : true,
	pagination : true,
	navigation :false,
  });
 
});
