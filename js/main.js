$(document).ready(function () {
	$(".various").fancybox({
		'transitionIn': 'none'
		, 'transitionOut': 'none'
	});
});
$(document).ready(function () {
	var scroll_start = 0;
	var startchange = $('#top-canciones');
	var offset = startchange.offset();
	if (startchange.length) {
		$(document).scroll(function () {
			scroll_start = $(this).scrollTop();
			if (scroll_start > offset.top) {
				$("#menu_top").css('display', 'block');
			}
			else {
				$('#menu_top').css('display', 'none');
			}
		});
	}
});
$(window).load(function () {
	$("#flexiselDemo3").flexisel({
		visibleItems: 3
		, animationSpeed: 1000
		, autoPlay: true
		, autoPlaySpeed: 3000
		, pauseOnHover: true
		, enableResponsiveBreakpoints: true
		, responsiveBreakpoints: {
			portrait: {
				changePoint: 480
				, visibleItems: 3
			}
			, landscape: {
				changePoint: 640
				, visibleItems: 3
			}
			, tablet: {
				changePoint: 768
				, visibleItems: 3
			}
		}
	});
});
$("span.menu").click(function () {
	$(".top-menu").slideToggle("slow", function () {});
});
jQuery(document).ready(function ($) {
	$(".scroll").click(function (event) {
		event.preventDefault();
		$('html,body').animate({
			scrollTop: $(this.hash).offset().top
		}, 1000);
	});
});
/* ---------------------------------------------- /*
		 * Smooth scroll / Scroll To Top
/* ---------------------------------------------- */
$('a[href*=#]').bind("click", function (e) {
	var anchor = $(this);
	$('html, body').stop().animate({
		scrollTop: $(anchor.attr('href')).offset().top
	}, 1000);
	e.preventDefault();
});
$(window).scroll(function () {
	if ($(this).scrollTop() > 100) {
		$('.scroll-up').fadeIn();
	}
	else {
		$('.scroll-up').fadeOut();
	}
});