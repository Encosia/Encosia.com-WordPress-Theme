(function() {
    if (Modernizr.mq('(min-width: 768px)')) {
        // Pre-calculate some constants.
        var lastY = $(window).scrollTop(),
            DY = lastY - $(window).scrollTop(),
            $headerContainer = $('.header-container');

        $(window).scroll(function (evt) {
            clearTimeout(initTimer);

            handleScroll(evt);
        });

        var initTimer = setTimeout(2000, handleScroll);

        var handleScroll = function (evt) {
            DY = lastY - $(window).scrollTop();

            lastY = $(window).scrollTop();

            if (lastY > 100 && DY < 0) {
                $headerContainer.addClass('collapsed');
            } else if (lastY < 250 && DY > 0) {
                $headerContainer.removeClass('collapsed');
            }
        };
    }
})();