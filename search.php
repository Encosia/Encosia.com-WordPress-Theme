<?php get_header(); ?>
  <div id="content">
	<!--<h2>Search Results for: <?php echo($s) ?></h2>-->
  
  <?php if (have_posts()) : ?>
			  
	<?php while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
	
		  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
      
		  <?php the_excerpt(); ?>
      
      <a href="<?php the_permalink() ?>" class="more-link" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Click here to read the entire post &raquo;</a>
	</div>
	<?php endwhile; ?>
  
  <div class="navigation">
	   <?php wp_pagebar(array("prev"=>"&laquo;&nbsp;Previous", "next"=>"Next&nbsp;&raquo;")); ?>
	</div>
	
  <?php else : ?>
  	<h3>Sorry, nothing found.</h3>
    <?php endif; ?>
  </div><!--/content -->
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>