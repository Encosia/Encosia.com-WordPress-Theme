if (Modernizr.mq('(min-width: 768px)')) {
    // Pre-calculate some constants.
    var MAX_Y = 130,
        MIN_Y = 60,
        DY = MAX_Y - MIN_Y,
        $logo = $('header img'),
        LOGO_HEIGHT = $logo.height(),
        $headerContainer = $('.header-container');

    $(window).scroll(function () {
        var scrollDistance = Math.min(DY, window.scrollY);

        $logo.height(LOGO_HEIGHT - scrollDistance);
        $headerContainer.height(MAX_Y - scrollDistance);

    });
}