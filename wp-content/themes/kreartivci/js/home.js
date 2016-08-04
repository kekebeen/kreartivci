(function($) {
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });

    // Mobile Navigation
    $('.mobile-toggle').click(function() {
        if ($('.main-header').hasClass('open-nav')) {
            $('.main-header').removeClass('open-nav');
        } else {
            $('.main-header').addClass('open-nav');
        }
    });

    $('.main_h li a').click(function() {
        if ($('.main-header').hasClass('open-nav')) {
            $('.navigation').removeClass('open-nav');
            $('.main-header').removeClass('open-nav');
        }
    });

    $('nav a').click(function(event) {
        var id = $(this).attr("href");
        var offset = 70;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
            scrollTop: target
        }, 500);
        event.preventDefault();
    });

})(jQuery);

// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.main-header').addClass('sticky');
    } else {
        $('.main-header').removeClass('sticky');
    }
});

console.log("Shoutout to unsplash.com for beautiful images");