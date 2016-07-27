$( document ).ready(function() {
// HOME PAGE SLIDER	
	$('.owl-carousel').owlCarousel({
		navigation : false, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		autoPlay : true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,	
		autoHeight:false,
		autoplaySpeed:1000,
  });
// FEATURED STORE
	$('.featureSlide').owlCarousel({
		items : 6,
        itemsCustom : false,
        itemsDesktop : [1199, 6],
        itemsDesktopSmall : [979, 5],
        itemsTablet : [768, 5],
        itemsTabletSmall : [768, 4],
        itemsMobile : [479, 3],
		lazyLoad : true,
		navigation : false,
  });
//STORE DETAIL BANNER
$('.storedetail').owlCarousel({
		items:1,
		loop:true,   
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,	
		autoHeight:false,
		autoplaySpeed:1000,	
	})
//COUPONS TAB
$(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
})

/*Js For Show More Button by Yasar 27-July-2016*/

$("#next-button").click(function () {

	$("#hide-text-block").show("slow");

	$("#next-button").hide();

	$("#prev-button").show();

});

$("#prev-button").click(function () {

	$("#hide-text-block").hide();

	$("#prev-button").hide();

	$("#next-button").show();

});

function next_button(showmore_id){
	$("#hide-text-block"+showmore_id.trim()).show("slow");
	$("#next-button"+showmore_id.trim()).hide();
	$("#prev-button"+showmore_id.trim()).show();
}

function prev_button(showmore_id){
	$("#hide-text-block"+showmore_id.trim()).hide();
	$("#prev-button"+showmore_id.trim()).hide();
	$("#next-button"+showmore_id.trim()).show();

}