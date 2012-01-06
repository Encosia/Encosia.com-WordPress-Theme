      <div id="footer"></div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>if (typeof jQuery == 'undefined') { document.write(unescape('%3Cscript%20src%3D%22/blog/includes/jquery-1.7.1.min.js%22%3E%3C/script%3E')); }</script>
    <script src="/blog/includes/plugins.min.js?v=1"></script>
    <script src="/blog/includes/encosia.js?v=12"></script>
    <script src="http://s1.lqcdn.com/m.min.js?dt=2.3.110104.1"></script>
    <script src="http://platform.twitter.com/widgets.js"></script>
    <script id="facebook-jssdk" src="//connect.facebook.net/en_US/all.js#appId=176723012400928&amp;xfbml=1"></script>
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