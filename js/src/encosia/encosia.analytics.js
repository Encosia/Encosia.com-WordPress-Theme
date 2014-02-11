// Clicky
(function() {
  // Push WordPress usernames and emails into Clicky.
  function clicky_get_cookie( name ) {
    var ca = document.cookie.split(';');

    for (var i in ca ) {
      if (ca[i].indexOf( name+'=' ) > -1 ) {
        return decodeURIComponent( ca[i].split('=')[1] );
      }
    }

    // Else
    return '';
  }

  window.clicky_custom_session = {
    username: clicky_get_cookie('comment_author_f0a237db1cb71445787d907e54df6077'),
    email: clicky_get_cookie('comment_author_email_f0a237db1cb71445787d907e54df6077')
  };

  window.clicky_site_ids = [34742];

  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = '//static.getclicky.com/js';
  ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
})();

// Google Analytics
(function() {
  window._gaq = window._gaq || [];
  window._gaq.push(['_setAccount', 'UA-1170191-1']);
  window._gaq.push(['_trackTiming', 'jQuery', 'Load Time', jQueryLoadTime, jQueryType, 100]);
  window._gaq.push(['_trackPageview']);

  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
