<?php
  // Set this before displaying the header so I can add a twitter:image meta tag
  //  so that links to image attachments display nice cards in Twitter timelines.
  global $twitter_image;

  $twitter_image = wp_get_attachment_image_src( $post->id, "full");

  add_filter('wpseo_twitter_card_type', 'image_attachment_twitter_card_type', 20);

  function image_attachment_twitter_card_type() {
    return 'photo';
  }

  get_header();
?>
  <div id="content" class="attachment">

  <?php
  if (have_posts()) {
    remove_filter('the_excerpt', 'dd_hook_wp_content');
    remove_filter('the_content', 'dd_hook_wp_content');
  ?>

      <div class="post" id="post-<?php echo $post->ID; ?>">
        <h2><?php the_title(); ?></h2>
        <div class="post-content">

          <div class="entry-attachment">
          <?php
            $att_image = wp_get_attachment_image_src( $post->id, "medium");
            $full_image = wp_get_attachment_image_src( $post->id, "full");

            if($full_image[1] > 490 || $full_image[2] > 1000) { ?>
            <a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment">
              <img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>" class="attachment-medium" alt="<?php $post->post_excerpt; ?>" />
            </a>
          <?php } else { ?>
            <img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>" class="attachment-medium" alt="<?php $post->post_excerpt; ?>" />
          <?php } ?>
          </div>
          <div class="entry-caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt() ?></div>
        </div>

        <div class="previous-image">
          <span class="previous-image-link"><?php previous_image_link('thumbnail', '&laquo; Previous Image'); ?></span>

          <?php previous_image_link() ?>
        </div>

        <div class="next-image">
          <span class="next-image-link"><?php next_image_link('thumbnail', 'Next Image &raquo;'); ?></span>

          <?php next_image_link(); ?>
        </div>

        <div id="post-commentblock">
  		  <?php comments_template(); ?>
        </div>

      <?php } else { ?>
        <p>Sorry, no posts matched your criteria.</p>
      <?php } ?>

    </div>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>