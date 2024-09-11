(function ($) {
    $('.header-nav .open-nav-btn').on('click', function (e) {
        e.preventDefault();

        const navIcon = $(e.target),
            navContainer = navIcon.closest('.header-nav').find('.nav-container');

        if (navIcon.hasClass('active')) {
            navIcon.removeClass('active');
            navContainer.slideUp();
        } else {
            navIcon.addClass('active');
            navContainer.slideDown();
        }
    });
}(jQuery));