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
    <script src="/blog/wp-content/themes/encosia/js/vendor/jquery-1.9.1.min.js"></script>
    <script>var jQueryType = 'Local';</script>
    <?php } ?>
    <script>var jQueryLoadTime = new Date().getTime() - jQueryLoadStart;</script>

    <!-- build:js /blog/wp-content/themes/encosia/js/vendor.min.js -->
    <script src="/blog/wp-content/themes/encosia/js/vendor/colorbox-1.4.3.min.js"></script>
    <script src="/blog/wp-content/themes/encosia/js/vendor/comment-reply.min.js"></script>
    <script src="/blog/wp-content/themes/encosia/js/vendor/jquery.easings.js"></script>
    <script src="/blog/wp-content/themes/encosia/js/vendor/modernizr.custom.02494.js"></script>
    <!-- bower:js -->
    <script src="/blog/wp-content/themes/encosia/bower_components/autosize/dest/autosize.js"></script>
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:js /blog/wp-content/themes/encosia/js/encosia.min.js -->
      <script src="/blog/wp-content/themes/encosia/js/encosia.analytics.js"></script>
      <script src="/blog/wp-content/themes/encosia/js/encosia.ui.js"></script>
      <script src="/blog/wp-content/themes/encosia/js/encosia.ui.sidebar.js"></script>
      <script src="/blog/wp-content/themes/encosia/js/encosia.ui.twitter.js"></script>
      <script src="/blog/wp-content/themes/encosia/js/encosia.ui.ads.js"></script>
    <!-- endbuild -->

    <script>
      var s = document.createElement('script');
      s.src = '//s7.addthis.com/js/300/addthis_widget.js#pubid=gt1329a';
      document.getElementsByTagName('head')[0].appendChild(s);
    </script>

    <script src="https://apis.google.com/js/plusone.js"></script>

    <noscript><p><img alt="Clicky" width="1" height="1" src="http://in.getclicky.com/34742ns.gif" /></p></noscript>
<?php wp_footer(); ?>
</body>
</html>
