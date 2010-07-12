  <div id="sidebar">
  	<div id="SearchBlock">
      <form method="get" id="searchform" action="http://encosia.com/">
        <input type="text" class="search" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
      </form>
    </div>
    
    <div id="RSS" class="sidebarBox">
      <div>
          <a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=654672&amp;loc=en_US" rel="nofollow"><img src="http://i.encosia.com/blog/images/email-icon-trans.png" alt="Subscribe via email" width="38" height="38" align="middle" /></a>
          <a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=654672&amp;loc=en_US" rel="nofollow" class="connectLink">Get free email updates</a><br />
      </div>
      
      <div>
        <a href="http://feeds.encosia.com/Encosia" rel="nofollow"><img src="http://i.encosia.com/blog/images/rss-icon-trans.png" alt="Subscribe via RSS" width="38" height="38" align="middle" /></a>
        <a href="http://feeds.encosia.com/Encosia" rel="nofollow" class="connectLink">Subscribe to the RSS feed</a><br />
      </div>
    </div>

    <div id="Twitter" class="sidebarBox">
      <a href="http://twitter.com/Encosia" rel="nofollow" target="_blank"><img src="http://i.encosia.com/blog/images/twitter-icon-trans.png" alt="Follow me on Twitter" width="38" height="38" align="middle" /></a>
      <a href="http://twitter.com/Encosia" rel="nofollow" target="_blank" class="connectLink">Follow my updates on Twitter</a>
    </div>

    <div id="adzerk" class="sidebarBox">
        <div id="adzerk_ad_div"></div>
        <p id="adzerk_by"><a href="http://theloungenet.com">Ads by The Lounge</a></p>
    </div>

    <div class="sidebarBox">
      <h3 id="MostPopular">Most Popular Posts</h3>
      
      <ul>
        <li><a href="http://encosia.com/2008/03/27/using-jquery-to-consume-aspnet-json-web-services/">Using jQuery to Consume ASP.NET JSON Web Services</a></li>
        <li><a href="http://encosia.com/2008/05/29/using-jquery-to-directly-call-aspnet-ajax-page-methods/">Using jQuery to directly call ASP.NET AJAX page methods</a></li>
        <li><a href="http://encosia.com/2008/12/10/3-reasons-why-you-should-let-google-host-jquery-for-you/">3 reasons why you should let Google host jQuery for you</a></li> 
        <li><a href="http://encosia.com/2007/07/11/why-aspnet-ajax-updatepanels-are-dangerous/">Why ASP.NET AJAX UpdatePanels are dangerous</a></li>
        <li><a href="http://encosia.com/2008/06/05/3-mistakes-to-avoid-when-using-jquery-with-aspnet-ajax/">3 mistakes to avoid when using jQuery with ASP.NET AJAX</a></li>
		    <li><a href="http://encosia.com/2009/09/21/updated-see-how-i-used-firebug-to-learn-jquery/">Updated: See how I used Firebug to learn jQuery</a></li>
        <li><a href="http://encosia.com/2009/07/21/simplify-calling-asp-net-ajax-services-from-jquery/">Simplify calling ASP.NET AJAX services from jQuery</a></li>
      </ul>
    </div>
    
		<div class="sidebarBox">
			<a href="http://tekpub.com/view/jquery/1?ref=encosia"><img src="/blog/images/mastering-jquery-slide.jpg" width="336" height="163" alt="Mastering jQuery at TekPub" /></a>
		</div>
		
		<?php if (is_single()) { ?>	
    <div class="sidebarBox">
      <h3 id="SimilarPosts">Similar Posts</h3>
      
      <?php similar_posts('limit=7'); ?> 
    </div>
    <?php } ?>
  </div>