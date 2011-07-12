      <div id="footer"></div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="/blog/includes/colorbox/jquery.colorbox-min.js"></script>
    <script>
      $('a[rel=attachment]').colorbox();
    </script>
    <script src="/blog/includes/encosia.min.js?v=7"></script>
    <script src='http://cdn1.lakequincy.com/m.min.js?dt=2.3.110104.1'></script>
    <script> if($.LqmAds){$.LqmAds();$('#lqdmrd').hide();}</script>
    <script src="http://platform.twitter.com/widgets.js"></script>
    <script src="https://apis.google.com/js/plusone.js"></script>
<?php if(!current_user_can("manage_options")) { ?>
    <!-- Clicky -->
    <script type="text/javascript">
    function clicky_get_cookie( name ) {
      var ca = document.cookie.split(';');
      for( var i in ca ) { if( ca[i].indexOf( name+'=' ) > -1 ) return decodeURIComponent( ca[i].split('=')[1] ); }
      return '';
    }
    var clicky_custom_session = { username: clicky_get_cookie('comment_author_f0a237db1cb71445787d907e54df6077'), email: clicky_get_cookie('comment_author_email_f0a237db1cb71445787d907e54df6077') };
    </script>

    <script src="http://static.getclicky.com/js" type="text/javascript"></script>
    <script type="text/javascript">clicky.init(34742);</script>
    <noscript><p><img alt="Clicky" width="1" height="1" src="http://in.getclicky.com/34742ns.gif" /></p></noscript>

    <!-- Google Analytics -->
    <script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
    <script type="text/javascript">var pageTracker = _gat._getTracker("UA-1170191-1");pageTracker._initData();pageTracker._trackPageview();</script>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>