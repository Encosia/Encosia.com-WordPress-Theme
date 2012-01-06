<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="post" id="post-<?php the_ID(); ?>">
        <div class="page-content">
        	<?php if ( is_child('downloads') && !is_page('downloads') ) { ?>
          <h2><?php the_title(); ?></h2>
		    	<?php } ?>
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        </div>
    </div>
	
  <?php endwhile; endif; ?>
  
  <?php if ( is_child(18) && !is_page('downloads') ) { comments_template(); } ?>
  <?php if (is_page(1216)) { comments_template(); } ?>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>