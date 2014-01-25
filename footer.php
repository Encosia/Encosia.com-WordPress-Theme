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

    <script src="/blog/wp-content/themes/encosia/js/dist/plugins.min.js?v=3"></script>
    <?php if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) { ?>
    <script src="/blog/wp-content/themes/encosia/js/dist/encosia.js?v=19"></script>
    <?php } else { ?>
    <script src="/blog/wp-content/themes/encosia/js/dist/encosia.min.js?v=19"></script>
    <?php } ?>

    <script src="//apis.google.com/js/plusone.js"></script>

    <noscript><p><img alt="Clicky" width="1" height="1" src="http://in.getclicky.com/34742ns.gif" /></p></noscript>

    <!-- Testing webhook deploy. -->
<?php wp_footer(); ?>
</body>
</html>