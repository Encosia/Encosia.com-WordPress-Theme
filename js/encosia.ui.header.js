import 'js-throttle-debounce';
import Modernizr from 'modernizr';

(function() {
    var init = function() {
        $(window).off('scroll');

        if (Modernizr.mq('(min-width: 768px)')) {
            // Pre-calculate some constants.
            var lastY = $(window).scrollTop(),
                DY = lastY - $(window).scrollTop(),
                $headerContainer = $('.header-container');

            var handleScroll = function (evt) {
                DY = lastY - $(window).scrollTop();

                if (lastY > 100 && DY <= 0) {
                    $headerContainer.addClass('collapsed');
                } else if (lastY < 250 && DY >= 0) {
                    $headerContainer.removeClass('collapsed');
                }

                lastY = $(window).scrollTop();
            };

            handleScroll();

            $(window).on('scroll', handleScroll);
        }
    };

    init();

    $(window).on('resize', init.throttle(250));
})();