  <div id="sidebar">
  	<div id="SearchBlock">
      <form method="get" id="searchform" action="http://encosia.com/">
        <input type="text" class="search" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
      </form>
    </div>
    
    <div class="sidebarBox">
      <h3 id="MostPopular">Most Popular Posts</h3>
      
      <ul>
      	<li><a href="http://encosia.com/2007/07/13/easily-refresh-an-updatepanel-using-javascript/">Easily Refresh an UpdatePanel using JavaScript</a></li>
        <li><a href="http://encosia.com/2007/07/11/why-aspnet-ajax-updatepanels-are-dangerous/">Why ASP.NET AJAX UpdatePanels are dangerous</a></li>
        <li><a href="http://encosia.com/2008/03/27/using-jquery-to-consume-aspnet-json-web-services/">Using jQuery to Consume ASP.NET JSON Web Services</a></li>
        <li><a href="http://encosia.com/2008/02/05/boost-aspnet-performance-with-deferred-content-loading/">Boost ASP.NET performance with deferred content loading</a></li>
        <li><a href="http://encosia.com/2007/10/24/are-you-making-these-3-common-aspnet-ajax-mistakes/">Are you making these 3 common ASP.NET AJAX mistakes</a></li>        
        <li><a href="http://encosia.com/2008/01/09/4-aspnet-ajax-javascript-ui-functions-you-should-learn/">4 ASP.NET AJAX JavaScript UI methods you should learn</a></li>
        <li><a href="http://encosia.com/2007/07/25/display-data-updates-in-real-time-with-ajax/">Display data updates in real-time with AJAX</a></li>        
      </ul>
    </div>
    
    <div class="sidebarBox">
    	<h3 id="Sponsor">Sponsor</h3>
      
			<script type="text/javascript">lqm_channel=1; lqm_publisher=199; lqm_zone=1; lqm_format=7;</script>
      <script type="text/javascript" src="http://a.lakequincy.com/s.js"></script>
    </div>
    
    <?php if (is_single()) { ?>
    <div class="sidebarBox">
      <h3 id="SimilarPosts">Similar Posts</h3>
      
      <?php similar_posts('limit=7'); ?> 
    </div>
    <?php } ?>
    
    <div class="sidebarBox">
      <h3 id="Categories">Categories</h3>
      
      <ul>
      <?php wp_list_categories('orderby=count&order=desc&title_li=&show_count=1&number=6'); ?>
      </ul>
    </div>
    
    <?php if (is_home()) { ?>   
    <div class="sidebarBox">
      <h3 id="Blogroll">Recommended .NET blogs:</h3>       
      <ul>
        <li><a href="http://weblogs.asp.net/scottgu/" target="_blank">Scott Guthrie</a></li>      
        <li><a href="http://misfitgeek.com" title="Joe Stagner" target="_blank">Joe Stagner</a></li>
        <li><a href="http://mattberseth.com/" target="_blank">Matt Berseth</a></li>
        <li><a href="http://www.west-wind.com/WebLog/" target="_blank">Rick Strahl</a></li>        
        <li><a href="http://www.codethinked.com/" target="_blank">Justin Etheredge</a></li>
        <li><a href="http://stevenharman.net/blog/Default.aspx" target="_blank">Steven Harman</a></li>
      </ul>
    </div>
    <?php } ?>
  </div>