<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      <h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

      <span class="post-cat"><?php the_category(', ') ?></span>
      <span class="post-calendar">By <strong><a href="/about-dave-ward/" rel="author" title="About Dave Ward">Dave Ward</a></strong>.

      <?php if(get_the_modified_date() == get_the_date()) { ?>
      Posted <?php the_date() ?>
      <?php } else { ?>
      Updated <?php the_modified_date() ?>
      <?php } ?></span>

      <div class="post-content content">
        <?php if (get_post_meta(get_the_ID(), 'jQueryForASPNET', true) == 'true') { ?>
        <div class="aside">
          <p>Note: This post is part of a long-running series of posts covering the union of jQuery and ASP.NET:
            <a href="/jquery-for-the-asp-net-developer/">jQuery for the ASP.NET Developer</a>.</p>
                
            <p>Topics in this series range all the way from using jQuery to enhance UpdatePanels to using jQuery up to
              completely manage rendering and interaction in the browser with ASP.NET only acting as a backend API. If the
              post you're viewing now is something that interests you, be sure to check out the rest of the posts in this series.</p>
        </div>
        <?php } ?>

			  <?php the_content(''); ?>
		  </div> <!-- END post-content -->
		
      <div id="post-similarposts">
        <h3>Similar posts</h3>

        <?php related_posts(); ?>
      </div>

      <div id="post-share">
        <h3>Share this</h3>

        <?php
          // Changed URL structure from /yyyy/mm/dd/slug to /slug on 5/28/2011.
          //  This ensures older posts still present the old URLs to sharing
          //  services so that share counts are maintained.
          // If this needs to change to an ID test later, the last post under
          //  the the old URLs was #1111.
          $post_date = strtotime(get_the_date());
          $url_change_date = strtotime("5/28/2011");

          $sharing_url = get_permalink();

          if ($post_date < $url_change_date) {
            $url_date_prefix = "/" . date("Y", $post_date) .
                               "/" . date("m", $post_date) .
                               "/" . date("d", $post_date);

            $sharing_url = str_replace("://encosia.com",
                                       "://encosia.com" . $url_date_prefix,
                                       $sharing_url);
          }
        ?>

        <div id="post-share-twitter">
          <a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="Encosia" data-url="<?php echo $sharing_url; ?>">Tweet</a>
        </div>

        <iframe src="//www.facebook.com/plugins/like.php?app_id=121134371309217&amp;href=<?php echo $sharing_url ?>&amp;=false&amp;layout=box_count&amp;width=48&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=trebuchet+ms&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:48px; height:70px;" allowTransparency="true"></iframe>

        <div class="g-plusone" data-size="tall" data-count="true"></div>
      </div>

      <div id="comment-guide">
        <h3>Your turn. What do you think?</h3>

        <p>A blog isn't a blog without comments, but do try to stay on topic.
          If you have a question unrelated to this post, you're better off posting it on
          <a href="http://stackoverflow.com/" rel="nofollow" target="_blank">Stack Overflow</a> instead of commenting here.
          Tweet or email me a link to your question there and I'll try to help if I can.</p>
      </div>
           
      <div id="post-commentblock">
        <?php comments_template(); ?>
      </div> <!-- END post-commentblock -->

    </div><!-- END post -->
	<?php endwhile; else: ?>

	  <p>Sorry, no posts matched your criteria.</p>

  <?php endif; ?>


  </div><!-- END content -->

<?php get_sidebar(); ?>
  
<?php get_footer(); ?>