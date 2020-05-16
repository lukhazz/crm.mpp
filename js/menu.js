$(document).ready(function() {
	$('.dropdown').hover(function() {
		$(this).children('.sub-togg').slideToggle(500);
	});
});

$(document).ready(function() {
	$("#nav-toggle").click(function() {
		$('.top').slideToggle(400);
		$('.submenu').slideToggle(400);
		$(this).children('.submenu').slideToggle(500);
		$("li").removeClass("dropdown");
		$("ul").removeClass("sub-togg");
		$("ul ul").addClass("sub-design");
		

	});
});

//$(document).ready(function() {
//	$("#nav-toggle-dropdown").click(function() {
//		$('.dropdown').slideToggle(400);
//	});
//});

//$('ul.nav li.dropdown').hover(function() {
//  $(this).find('.submenu').stop(true, true).delay(200).fadeIn(500);
//}, function() {
//  $(this).find('.submenu').stop(true, true).delay(200).fadeOut(500);
//});