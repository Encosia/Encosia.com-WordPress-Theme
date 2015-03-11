import 'matchMedia';

// Carbon Ads
(function() {
  var z = document.createElement("script");

  z.type = "text/javascript";
  z.async = true;
  z.src = "//engine.carbonads.com/z/15480/azcarbon_2_1_0_HORIZDARK";

  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(z, s);
})();

// Even developers need to eat...
$(window).on('load', () => {
  var adNag = () => {
    // If the HTML content of the #azcarbon placeholder div
    //  is anything but empty, the ad has been loaded.
    var adLoaded = $('#azcarbon').html() !== '';

    // If the ad didn't display, load a small ad nag snippet
    //  and prepend it to the first visible post (so this works
    //  on both the home page and individual post pages).
    if (!adLoaded) {
      var getAlert = $.get('/blog/wp-content/themes/encosia/carbon-alert.html');

      $.when(getAlert).done(function(alert) {
        $('#content:not(.attachment) .post-content:first').prepend(alert);
      });
    }
  };

  if (matchMedia('(min-width: 768px)')) {
    // Wait five seconds after window.load and check to make sure the ad is displayed.
    setTimeout(adNag, 5000);
  }
});

export default { };