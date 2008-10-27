  <div id="footer">
  </div><!--/footer -->
</div><!--/page -->
<?php if(!current_user_can("manage_options")) { ?>
<script type='text/javascript'>
function clicky_get_cookie( name ) {
  var ca = document.cookie.split(';');
  for( var i in ca ) {
    if( ca[i].indexOf( name+'=' ) > -1 ) return decodeURIComponent( ca[i].split('=')[1] );
  }
  return '';
}
var clicky_custom_session = { username: clicky_get_cookie('comment_author_f0a237db1cb71445787d907e54df6077'), email: clicky_get_cookie('comment_author_email_f0a237db1cb71445787d907e54df6077') };
</script>

<!-- Clicky Tracking Code -->
<script src="http://static.getclicky.com/34742.js" type="text/javascript"></script>
<noscript><p><img alt="Clicky" src="http://in.getclicky.com/34742-db5.gif" /></p></noscript>
<!-- /Clicky Tracking Code -->

<!-- Google Analytics Code -->
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1170191-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!-- /Google Analytics Code -->
<?php } ?>
<?php wp_footer(); ?>
<!-- <?php echo(get_num_queries()); ?> queries -->
</body>
</html>