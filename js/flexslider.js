// Can also be used with $(document).ready()
/*$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});*/

$(document).ready(function() {
	$('.flexslider').flexslider ({
    	animation: "fade",		// efekt animace
    	animationSpeed: 1000,	// rychlost animace
    	//slideshowSpeed: 5000,	// prodleva mezi snímky
    	pauseOnHover: true,		// zastaví při najetí myši
    	pauseOnAction: true,	// zastaví přehrávání při kliknutí
    	touch: true,			// ovládání na doty. zařízení
    	//controlNav: false,		// odstraní/přidá ovládací tlačítka
    	//directionNav: false		// odstraní/přidá směrové šipky
	});
});