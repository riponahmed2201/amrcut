(function ($) {
    "use strict";
    // for sticky navbar
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $(".navbar-area").addClass("sticky");
        } else {
            $(".navbar-area").removeClass("sticky");
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $(".navbar-area .main-nav").addClass("sticky");
        } else {
            $(".navbar-area .main-nav").removeClass("sticky");
        }
    });

    // Mean Menu
    $(".mean-menu").meanmenu({
        meanScreenWidth: "1199",
    });

    // popup button
    $('.popup-button').click(function () {
        $('.popup').css('visibility', 'visible');
        $('.popup-content').addClass('hi');
    })
    $('#popup-close').click(function () {
        $('.popup').css('visibility', 'hidden');
        $('.popup-content').removeClass('hi');
    })
    
    $(".main-banner").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 1000,
        loop: true,
        autoplay: true,
        dots: false,
        items: 1,
        nav: true,
        navText: ['<i class="fas fa-chevron-up"></i>', '<i class="fas fa-chevron-down"></i>'],
        animateIn: 'fadeInUp',
        animateOut: 'fadeOutUp',
    });
    $(".home-banner").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 1800,
        loop: true,
        autoplay: true,
        dots: true,
        items: 1,
        nav: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
    });

    $(".project-slider-area").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 1500,
        autoplay: true,
        loop: true,
        dots: false,
        margin: 30,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          992: {
            items: 3,
          },
        },
    });


    $(".video-popup").magnificPopup({
        type: "iframe",
    });

    // language select
    $("select").niceSelect();

    // Go to Top
    $(function () {
        // Scroll Event
        $(window).on("scroll", function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $(".go-top").addClass("active");
            if (scrolled < 600) $(".go-top").removeClass("active");
        });
        // Click Event
        $(".go-top").on("click", function () {
            $("html, body").animate({ scrollTop: "0" }, 500);
        });
    });


    $(".odometer").appear(function (e) {
        var odo = $(".odometer");
        odo.each(function () {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });

    // WOW Animation JS
    if ($(".wow").length) {
        var wow = new WOW({
            mobile: false,
        });
        wow.init();
    }

})(jQuery);