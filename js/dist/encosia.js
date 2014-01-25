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
;// Initialize image zooming, but limit that slow selector to links in the post area.
$('.post').find('a[rel=attachment]').colorbox({ rel: 'nofollow' });

// Uno clicko, por favor.
$('#searchform').on('submit', function(evt) {
  // If the search field is empty, bail.
  if (document.getElementById('s').value === '')
    return false;

  // Else
  var searchSubmit = document.getElementById('searchsubmit');

  // Disable the button to prevent double clicks.
  searchSubmit.disabled = true;

  // Show a "not allowed" pointer while submitting the search.
  searchSubmit.style.cursor = 'not-allowed';
});;(function($) {
  $.getJSON('http://encosia-latest-tweet.azurewebsites.net?callback=?',
    function(response) {
      // Preferably, look for the first non-reply, non-conferenceSpam tweet.
      for(var i = 0; i < response.length; i++) {
        if (response[i].in_reply_to_screen_name === null && !containsIgnoredHashtags(response[i].text)) {
          displayTwitterStatus(response[i]);

          return;
        }
      }

      // Else, if I've been particularly chatty, take the first reply instead.
      displayTwitterStatus(response[0]);
    }
  );


  function containsIgnoredHashtags(text) {
    var hashtagsToIgnore = ['#msteched', '#mix', '#mvp'];

    for (var i = 0; i < hashtagsToIgnore.length; i++) {
      if (text.indexOf(hashtagsToIgnore[i]) !== -1) {
        return true;
      }
    }

    // Else
    return false;
  }

  // Remove the awful t.co wrapper from links in my tweets.
  function deobfuscateLinks(status) {
    if (status.entities && status.entities.urls.length > 0) {
      for (var i = 0; i < status.entities.urls.length; i++) {
        // Prefer the display_url if possible, which preserves my encosia.me shortened URLs.
        if (status.entities.urls[i].display_url)
          status.text = status.text.replace(status.entities.urls[i].url, 'http://' + status.entities.urls[i].display_url);
        // If not, go with the expanded_url, but still test for the presence before using it because
        //  Twitter mistakenly marks text such as Json.NET and ASP.NET as URLs, only providing "null" as
        //  the expanded_url.
        else if (status.entities.urls[i].expanded_url)
            status.text = status.text.replace(status.entities.urls[i].url, status.entities.urls[i].expanded_url);
      }
    }

    return status;
  }

  function displayTwitterStatus(status) {
    status = deobfuscateLinks(status);

    // Linkify URLs in the status.
    status.text = status.text.replace(/(http:\/\/[A-Z0-9\/\._-]+\w)/gi, '<a href="$1" target="_blank">$1</a>');

    // Linkify Twitter handles in the status.
    status.text = status.text.replace(/(\@[a-zA-Z0-9_]+)/g, '<a href="http://twitter.com/$1" target="_blank">$1</a>');

    var $status = $('<blockquote/>', {
      'class': 'twitter-tweet',
      html: '<p>' + status.text + '</p>&mdash; ' + status.user.name + ' (@' + status.user.screen_name + ') <a href="https://twitter.com/' + status.user.screen_name + '/status/' + status.id_str + '">Tweet</a>'
    });

    $('#RSS').after($status);

    // Load the Twitter widgets script to progressively enhance this and
    //  also the Twitter button below posts.
    $.ajax({
      dataType: 'script',
      cache: true,
      url: '//platform.twitter.com/widgets.js'
    });
  }
})(jQuery);