<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
    <div class="post" id="post-<?php the_ID(); ?>">
    <h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<span class="post-cat"><?php the_category(', ') ?></span>
		<span class="post-calendar">By <strong><a href="/about-dave-ward/" rel="author" title="About Dave Ward">Dave Ward</a></strong> on <?php the_time('F jS, Y') ?></span>
		<div class="post-content">
			<?php the_content(''); ?>
		</div>
		
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

      <a class="delicious-button" href="http://delicious.com/save">
         <!-- {
         url:"<?php echo $sharing_url; ?>",
         title:"<?php the_title(); ?>"
         } -->
         Save on Delicious
      </a>

      <iframe src="http://www.facebook.com/plugins/like.php?app_id=157550590978658&amp;href&amp;send=false&amp;layout=box_count&amp;width=48&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=trebuchet+ms&amp;height=70" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:48px; height:70px;" allowTransparency="true"></iframe>

      <div class="g-plusone" data-size="tall" data-count="true"></div>
    </div>

    <div id="comment-guide">
        <h3>What do you think?</h3>

        <p>I appreciate all of your comments, but please try to stay on topic.
          If you have a question unrelated to this post, I recommend posting on the
          <a href="http://forums.asp.net/" rel="nofollow" target="_blank">ASP.NET forums</a> or
          <a href="http://stackoverflow.com/" rel="nofollow" target="_blank">Stack Overflow</a> instead.</p>

        <p>If you're replying to another comment, use the threading feature by clicking
          "Reply to this comment" before submitting your own.</p>
	  </div>
           
    <div id="post-commentblock">
		<?php comments_template(); ?>
	</div>
        
	<?php endwhile; else: ?>

	    <p>Sorry, no posts matched your criteria.</p>

    <?php endif; ?>

	</div><!--/post -->

  </div><!--/content -->

<?php get_sidebar(); ?>
  
<?php get_footer(); ?>

