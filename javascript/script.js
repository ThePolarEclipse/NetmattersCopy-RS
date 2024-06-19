$('.row-partners').slick({
	slidesToShow: 10,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
	arrows: false
});

$('#banner').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: true,
	autoplay: true,
	autoplaySpeed: 5000,
	arrows: false,
});

$(document).ready(function() {
var lastScrollTop = 0;
var header = $('header');

	$(window).scroll(function(event) {
		var st = $(this).scrollTop();
		var yAxisThreshold = 200;

		if (st > yAxisThreshold) {
			if (st < lastScrollTop) {
				// Scrolling up
				if (!header.hasClass('is-sticky')) {
					header.sticky({topSpacing: 0, zIndex: 10000});
					header.removeClass('is-hidden');
					header.addClass('is-sticky');
				} else {
					header.removeClass('is-hidden');
				}
			} else {
				// Scrolling down
				if (header.hasClass('is-sticky')) {
					header.addClass('is-hidden');
				}
			}
		}

		lastScrollTop = st;
	});
	header.addClass('is-hidden');
});
