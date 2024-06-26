$(document).ready(function() {
	// Check if the cookies are accepted
	if (getCookie("cookies") === "accepted") {
		$('#cookie-checker').hide();
	}

	// Show the cookie checker on button click
	$('.btn-cookies').on('click', function() {
		$('#cookie-checker').show();
	});

	// Hide the cookie checker and set the cookie when accept button is clicked
	$('.btn-accept').on('click', function() {
		$('#cookie-checker').hide();
		setCookie("cookies", "accepted", 365);
	});

	// Function to get the value of a cookie by name
	function getCookie(name) {
		let nameEQ = name + "=";
		let ca = document.cookie.split(';');
		for (let i = 0; i < ca.length; i++) {
			let c = ca[i];
			while (c.charAt(0) == ' ') c = c.substring(1, c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
		}
		return "";
	}

	// Function to set a cookie
	function setCookie(name, value, days) {
		let expires = "";
		if (days) {
			let date = new Date();
			date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
			expires = "; expires=" + date.toUTCString();
		}
		document.cookie = name + "=" + (value || "") + expires + "; path=/";
	}
});

//Carousels
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

//sticky header

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

//side menu
$('#menu').SlideOutPanel({
	bodyPush: true,
	breakpoint: "1px",
    closeBtnSize: '',
    enableEscapeKey: true,
    screenOpacity: '1',
    screenZindex:  '99998',
    showScreen: false,
    transition: 'ease',
    transitionDuration: '0.35s',
});

const slideOutPanel = $('#menu').SlideOutPanel();
$('.btn-burger').on('click', function() {
    slideOutPanel.toggle();
});