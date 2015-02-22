<?php get_header(); ?>
  <div id="content">
  
  <?php if (have_posts()) : ?>
  
  	<?php while (have_posts()) : the_post(); ?>
  
    <div class="post" id="post-<?php the_ID(); ?>">
	  <div class="entry">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<span class="post-cat"><?php the_category(', ') ?></span> 
    <span class="post-calendar">By <strong><a href="/about-dave-ward/" rel="author" title="About Dave Ward">Dave Ward</a></strong>.
    <?php if(get_the_modified_date() == get_the_date()) { ?>
      Posted <?php the_date() ?>
    <?php } else { ?>
      Updated <?php the_modified_date() ?>
    <?php } ?></span>
		<div class="post-content content">
			<?php the_content('Click here to read the rest of this post &raquo;'); ?>
		</div>
	  </div>
	</div>
	
	<?php endwhile; ?>
	
	<div class="navigation">
	   <?php wp_pagebar(array("prev"=>"&laquo;&nbsp;Previous", "next"=>"Next&nbsp;&raquo;")); ?>
	</div>
	
	<?php else : ?>
	
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		
  <?php endif; ?>
	
  </div>
  
<?php get_sidebar(); ?>

<?php get_footer(); ?>
