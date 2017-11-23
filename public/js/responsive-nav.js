
var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	});
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".nav").toggle();
	});

	$(".toggleSideMenu").click(function(e) {
		e.preventDefault();
		$(".SideNav").toggle();
		content_handler();
	});
	adjustMenu();
	sidemenu_handler();
	content_handler();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
	sidemenu_handler();
	content_handler();
});

var adjustMenu = function() {
	if (ww < 800) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".nav").hide();
		} else {
			$(".nav").show();
		}
		$(".nav li").unbind('mouseenter mouseleave');
		$(".nav li a.parent").unbind('click').bind('click', function(e) {
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
		$(".profile_details").hide();
	} 
	else if (ww >= 800) {
		$(".toggleMenu").css("display", "none");
		$(".nav").hide();
		$(".nav li").removeClass("hover");
		$(".nav li a").unbind('click');
		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	$(this).toggleClass('hover');
		});
		$(".profile_details").show();
	}
}

var sidemenu_handler = function(){
	if (ww < 800) {
		$(".SideNav").css("width","100%");
	} 
	else if (ww >= 800) {
		$(".SideNav").css("width","300px");
	}
}

var content_handler = function(){
	if (ww < 800) {
		$(".content").css("margin-left","0px");
	} 
	else if (ww >= 800) {
		if($(".SideNav").is(":visible")){
			$(".content").css("margin-left","310px");
		}
		else{
			$(".content").css("margin-left","0px");
		}
	}
}