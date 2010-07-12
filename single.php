<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
    <div class="post" id="post-<?php the_ID(); ?>">
        <h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<span class="post-cat"><?php the_category(', ') ?></span>
		<span class="post-calendar">By <strong><a href="/about-dave-ward/" title="About Dave Ward">Dave Ward</a></strong> on <?php the_time('F jS, Y') ?></span> 
		<div class="post-content">
			<?php the_content(''); ?>
		</div>
		
        <div id="post-similarposts">
            <h3>Similar posts</h3>
            <?php related_posts(); ?>
        </div>
        
        <div id="post-share">
            <h3>Share this post</h3>
            
            <div id="post-share-twitter">
				<script type="text/javascript">tweetmeme_source = 'Encosia'; tweetmeme_style = 'compact';</script>  
                <script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
			</div>
            
            <div id="post-share-dnk">
				<?php if ($post->ID < 52) { $kick_url = str_replace("http://encosia.com", "http://encosia.com/index.php", get_permalink()); } else { $kick_url = get_permalink(); } ?>
                <a href="http://www.dotnetkicks.com/kick/?url=<?php echo $kick_url ?>" rel="nofollow"><img border="0" width="82" height="18" alt="kick it on DotNetKicks.com" src="http://www.dotnetkicks.com/Services/Images/KickItImageGenerator.ashx?url=<?php echo $kick_url ?>"/></a>
            </div>
        </div>  
        
        <div id="comment-guide">
            <h3>What do you think?  Your comments are welcome.</h3>
            <p>I appreciate all of your comments, questions, and other feedback, but please try to stay on topic.  If you have a question 
            	unrelated to this post, I recommend posting on the <a href="http://forums.asp.net/" rel="nofollow" target="_blank">ASP.NET forums</a> instead.</p>
            <p>If you're replying to an existing comment, please use the threading feature.  To do this, click the 
            	"Reply to this" link underneath the comment you're replying to.</p>
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

