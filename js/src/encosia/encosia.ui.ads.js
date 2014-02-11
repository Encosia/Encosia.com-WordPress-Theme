// Carbon Ads
(function() {
  var z = document.createElement("script");

  z.type = "text/javascript";
  z.async = true;
  z.src = "http://engine.carbonads.com/z/15480/azcarbon_2_1_0_HORIZDARK";

  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(z, s);
})();

// Even developers need to eat...
$(window).on('load', function() {
  var adLoaded = $('#azcarbon').html() !== '';

  if (!adLoaded) {
    var getAlert = $.get('/blog/wp-content/themes/encosia/carbon-alert.html');

    $.when(getAlert).done(function(alert) {
      $('#content:not(.attachment) .post-content:first').prepend(alert);
    });
  }
});