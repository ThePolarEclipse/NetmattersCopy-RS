$(document).ready(function() {
    $(this).scrollTop(0);

    handleCookieChecker();
    initializeCarousels();
    handleStickyHeader();
    initializeSideMenu();
});

// Function to handle cookie checker logic
function handleCookieChecker() {
    
    $('#cookie-wrapper').hide();

    if (getCookie("cookies") === "accepted") {
        $('#cookie-wrapper').hide();
    } else {
        $('#cookie-wrapper').show();
        $('body').addClass('no-scroll');
    }

    $('.btn-cookies').on('click', function() {
        $('#cookie-wrapper').show();
        $('body').addClass('no-scroll');
    });

    $('.btn-accept').on('click', function() {
        $('#cookie-wrapper').hide();
        $('body').removeClass('no-scroll');
        setCookie("cookies", "accepted", 365);
    });

    function getCookie(name) {
        let nameEQ = name + "=";
        let cookieSplit = document.cookie.split(';');
        for (let i = 0; i < cookieSplit.length; i++) {
            let curCookie = cookieSplit[i];
            while (curCookie.charAt(0) == ' ') curCookie = curCookie.substring(1, curCookie.length);
            if (curCookie.indexOf(nameEQ) == 0) return curCookie.substring(nameEQ.length, curCookie.length);
        }
        return "";
    }

    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }
}

// Function to initialize carousels
function initializeCarousels() {
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
}

// Function to handle sticky header behavior
function handleStickyHeader() {
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
}

// Function to initialize side menu
function initializeSideMenu() {
    $('#menu').SlideOutPanel({
        bodyPush: true,
        breakpoint: "1px",
        closeBtnSize: '',
        enableEscapeKey: true,
        screenOpacity: '1',
        screenZindex:  '99998',
        showScreen: false,
        transition: 'ease',
        transitionDuration: '0.45s',
    });

    const slideOutPanel = $('#menu').SlideOutPanel();
    $('.btn-burger').on('click', function() {
        slideOutPanel.toggle();
        $('.hamburger-menu').toggleClass('active');
    });
}

// Function to validate email address
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

<<<<<<< Updated upstream
  // Assign the current image to an email address
$('#contact-form').on('submit', function(event) {
    
=======
// Assign the current image to an email address
$('#contact-form').on('submit', function(event) {
>>>>>>> Stashed changes
    const email = $('#emailInput').val();

    // Check for email validation
    if (!validateEmail(email)) {
        alert('Please enter a valid email address.');
        event.preventDefault();
        return;
    }
<<<<<<< Updated upstream
});
=======
});
>>>>>>> Stashed changes
