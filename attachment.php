<?php get_header(); ?>
  <div id="content" class="attachment">

  <?php if (have_posts()) : ?>

    <div class="post" id="post-<?php echo $post->ID; ?>">
        <h2><a href="http://encosia.com/attachment/<?php echo $post->ID; ?>/" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<!--<span class="post-cat"><?php the_category(', ') ?></span>
		<span class="post-calendar">By <strong><a href="/about-dave-ward/" title="About Dave Ward">Dave Ward</a></strong> on <?php the_time('F jS, Y') ?></span>-->
		<div class="post-content">
      <div class="entry-attachment">
<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "medium"); $full_image = wp_get_attachment_image_src( $post->id, "full"); ?>
      <?php if($full_image[1] > 490) { ?><a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment"><?php } ?><img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>" class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a>
<?php else : ?>
      <a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>
<?php endif; ?>
      </div>
      <div class="entry-caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt() ?></div>
		</div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script type="text/javascript" src="/blog/includes/colorbox/jquery.colorbox-min.js"></script>
    <script type="text/javascript">
      $('a[rel=attachment]').colorbox();
    </script>

    <div id="post-share">
      <span class="st_sharethis_large" displayText="Share"></span>
      <span class="st_stumbleupon_large" displayText="Stumble"></span>
      <span class="st_facebook_large" displayText="Facebook"></span>
      <span class="st_twitter_large" displayText="Tweet"></span>
      <span class="st_email_large" displayText="Email"></span>
    </div>

    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">
      stLight.options({
        publisher:'d3b4c138-8ce7-48cc-8564-c98c0bcb0ff3'
      });
    </script>

		<?php else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div><!--/post -->

  </div><!--/content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>