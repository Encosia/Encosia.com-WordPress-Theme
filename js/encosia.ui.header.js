(function() {
    if (Modernizr.mq('(min-width: 768px)')) {
        // Pre-calculate some constants.
        var lastY = window.scrollY,
            DY = lastY - window.scrollY,
            $headerContainer = $('.header-container');

        $(window).scroll(function (evt) {
            clearTimeout(initTimer);

            handleScroll(evt);
        });

        var initTimer = setTimeout(2000, handleScroll);

        var handleScroll = function (evt) {
            DY = lastY - window.scrollY;

            lastY = window.scrollY;

            if (lastY > 100 && DY < 0) {
                $headerContainer.addClass('collapsed');
            } else if (lastY < 1000 && DY > 0) {
                $headerContainer.removeClass('collapsed');
            }
        };
    }
})();