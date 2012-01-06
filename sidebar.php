  <div id="sidebar">
  	<div id="SearchBlock">
      <form method="get" id="searchform" action="http://encosia.com/">
        <input type="text" class="search" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
      </form>
    </div>

    <?php if(!is_page(17)) { ?>
    <div id="About" class="sidebarBox">
      <a href="/about-dave-ward/"><img src="/blog/images/me-sidebar.jpg" alt="Dave Ward" width="150" height="173" align="right" /></a>

      <p><strong>Welcome</strong>! I hope you're in the process of finding something useful here.</p>

      <p>You can keep up with my latest updates by <a href="http://twitter.com/Encosia" target="_blank" rel="nofollow">following me on Twitter</a>
        and/or subscribing via <a href="http://feeds.encosia.com/Encosia" rel="nofollow">RSS</a> or
        <a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=654672&amp;loc=en_US" rel="nofollow">Email</a>.</p>
    </div>
    <?php } ?>

    <div id="lqdmad">
      <div class="lqm_ad" lqm_publisher="lqm.encosia.site" lqm_zone="ron" lqm_format="125x125" lqm_tags="JavaScript%2cWeb%2cHTML%205%2cjQuery%2cWeb"></div>
    </div>
    
    <div id="RSS" class="sidebarBox">
      <div class="item">
        <a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=654672&amp;loc=en_US" rel="nofollow"><img src="http://i.encosia.com/blog/images/email-icon-trans.png" alt="Subscribe via email" width="38" height="38" align="middle" /></a>
        <a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=654672&amp;loc=en_US" rel="nofollow" class="connectLink">Get email updates when I post</a><br />
      </div>

      <div class="item">
        <a href="http://feeds.encosia.com/Encosia" rel="nofollow"><img src="http://i.encosia.com/blog/images/rss-icon-trans.png" alt="Subscribe via RSS" width="38" height="38" align="middle" /></a>
        <a href="http://feeds.encosia.com/Encosia" rel="nofollow" class="connectLink">Subscribe to the RSS feed</a><br />
      </div>

<!--      <div id="fb-root" style="display: none;"></div>-->
<!--      <div class="fb-like item" data-href="https://www.facebook.com/pages/Encosia/6527548387" data-send="false" data-width="324" data-show-faces="false" data-font="trebuchet ms"></div>-->
    </div>

    <div id="Twitter" class="sidebarBox">
      <a href="http://twitter.com/Encosia" rel="nofollow" target="_blank"><img src="http://i.encosia.com/blog/images/twitter-icon-trans.png" alt="Follow me on Twitter" width="38" height="38" align="middle" /></a>
      <a href="http://twitter.com/Encosia" rel="nofollow" target="_blank" class="connectLink">Follow my updates on Twitter</a>
    </div>

    <div class="sidebarBox">
      <h3 id="MostPopular">Most Popular Posts</h3>

      <?php GoogleAnalyticsPopularPosts_view(false); ?>
    </div>
    
		<div class="sidebarBox">
			<a href="http://tekpub.com/productions/jquery?ref=encosia"><img src="/blog/images/mastering-jquery-slide.jpg" width="336" height="163" alt="Mastering jQuery at TekPub" /></a>
		</div>
  </div>