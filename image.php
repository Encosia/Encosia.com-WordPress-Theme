<?php get_header(); ?>
  <div id="content" class="attachment">

  <?php if (have_posts()) { ?>

      <div class="post" id="post-<?php echo $post->ID; ?>">
        <h2><a href="http://encosia.com/attachment/<?php echo $post->ID; ?>/" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
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
            <a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>
          <?php } ?>
          </div>
          <div class="entry-caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt() ?></div>
        </div>

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

        <div class="previous-image">
          <span class="previous-image-link"><?php previous_image_link('thumbnail', '&laquo; Previous Image'); ?></span>

          <?php previous_image_link() ?>
        </div>

        <div class="next-image">
          <span class="next-image-link"><?php next_image_link('thumbnail', 'Next Image &raquo;'); ?></span>

          <?php next_image_link(); ?>
        </div>

      <?php } else { ?>
        <p>Sorry, no posts matched your criteria.</p>
      <?php } ?>

    </div>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>