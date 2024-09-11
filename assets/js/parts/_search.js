(function ($) {
    $('.header-search-container .search-toggle').on('click', function (e) {
        e.preventDefault();

        const searchContainer = $(this).closest('.header-search-container'),
            searchForm = searchContainer.find('.search-form-container');

        if (searchContainer.hasClass('active')) {
            searchContainer.removeClass('active');
            searchForm.slideUp();
        } else {
            searchContainer.addClass('active');
            searchForm.slideDown();
        }
    });
}(jQuery));