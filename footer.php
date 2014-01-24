      <div id="footer"></div>
    </div>

    <script>var jQueryLoadStart = new Date().getTime();</script>
    <?php if (rand(1, 100) > 50) { ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
      if (typeof jQuery === 'undefined') {
        document.write(unescape('%3Cscript%20src%3D%22/blog/wp-content/themes/encosia/js/dist/jquery-1.9.1.min.js%22%3E%3C/script%3E'));
        var jQueryType = 'Google CDN Fallback';
      } else {
        var jQueryType = 'Google CDN';
      }
    </script>
    <?php } else { ?>
    <script src="/blog/wp-content/themes/encosia/js/dist/jquery-1.9.1.min.js"></script>
    <script>var jQueryType = 'Local';</script>
    <?php } ?>
    <script>var jQueryLoadTime = new Date().getTime() - jQueryLoadStart;</script>

    <script src="/blog/wp-content/themes/encosia/js/dist/plugins.min.js?v=2"></script>
    <script src="/blog/wp-content/themes/encosia/js/dist/encosia.js?v=17"></script>
    <script src="https://apis.google.com/js/plusone.js"></script>

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

<?php if(!current_user_can("manage_options")) { ?>
    <!-- Google Analytics -->
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-1170191-1']);
      _gaq.push(['_trackTiming', 'jQuery', 'Load Time', jQueryLoadTime, jQueryType, 100]);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>