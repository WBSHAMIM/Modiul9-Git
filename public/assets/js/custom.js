
$(document).ready(function(){
	
	/* ======== For Sticky Menu=============== */
	
	$(".menu").sticky({topSpacing:0});
	
	/* ======== For Typed-js=============== */
	
	$("#typed").typed({
        stringsElement: $('#typed-strings'),
        typeSpeed: 80,
        backDelay: 900,
        loop: true,
        contentType: 'html',
        loopCount: true
    });
  
  /* ======== For smooth Scroll=============== */
  
		smoothScroll.init();	
	
	/* ======== For Active Call=============== */
      
   $('#active-call').onePageNav({
	currentClass: 'active-item',
	changeHash: false,
	scrollSpeed: 150,
	scrollThreshold: 0.5,
	filter: '',
	easing: 'swing'

});

	/* ======== For carousel=============== */

	$('.owl-carousel').owlCarousel({
    loop:true,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
  
	
});

/* ======== For Mobile Menu=============== */

	function openNav() {
	  document.getElementById("mobile-sidenav").style.width = "100%";
}
	function closeNav() {
	  document.getElementById("mobile-sidenav").style.width = "0";
}





