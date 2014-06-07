<?php 
/*
YARPP Template: Encosia
Author: @Encosia (Dave Ward)
Description: A related posts list after Encosia posts.
*/
?><h3>Related Posts</h3>
<?php if (have_posts()):?>
<ul>
	<?php while (have_posts()) : the_post(); ?>
	<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><!-- (<?php the_score(); ?>)--></li>
	<?php endwhile; ?>
</ul>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
