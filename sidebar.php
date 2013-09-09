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

    <div id="carbonads-container">
      <div class="carbonad">
        <div id="azcarbon"></div>
        <script type="text/javascript">var z = document.createElement("script"); z.type = "text/javascript"; z.async = true; z.src = "http://engine.carbonads.com/z/15480/azcarbon_2_1_0_HORIZDARK"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script>
      </div>
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
    </div>

    <div class="sidebarBox">
      <h3 id="MostPopular">Most Popular Posts</h3>

      <?php GoogleAnalyticsPopularPosts_view(false); ?>
    </div>
    
	<div id="tekpub" class="sidebarBox">
	  <a href="http://tekpub.com/productions/jquery?ref=encosia" target="_blank"><img src="/blog/images/mastering-jquery-slide.jpg" width="336" height="163" alt="Mastering jQuery at TekPub" /></a>
	</div>
  </div>