<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

<?php /* Count the number of comments and trackbacks (or pings) */
    $ping_count = $comment_count = 0;
    foreach ( $comments as $comment )
     get_comment_type() == "comment" ? ++$comment_count : ++$ping_count;

    if ($ping_count > 0) {
?>
    <h3 id="trackbacks"><?php printf($ping_count > 1 ? '%d Mentions Elsewhere' : 'One Mention Elsewhere', $ping_count) ?></h3>

    <ol id="trackbacklist">
        <?php wp_list_comments('type=pings&style=ol&callback=custom_pings'); ?>    
    </ol>

    <?php } ?>

<?php if ($comment_count > 0) { ?>
	<h3 id="comments"><?php printf($comment_count > 1 ? '%d Comments' : 'One Comment', $comment_count) ?></h3>

	<div class="commentlist">
	<?php wp_list_comments('type=comment&style=div&callback=custom_comments'); ?>
	</div>
 <?php } ?>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">
  <h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

  <div class="cancel-comment-reply">
    <small><?php cancel_comment_reply_link(); ?></small>
  </div>

  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
  <?php else : ?>

  <form id="commentform" action="/blog/encosia-comments-post.php" method="post">

  <?php if ( is_user_logged_in() ) : ?>

    <p>Logged in as <?php echo $user_identity; ?>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

  <?php else : ?>

    <p>
        <label for="author">Your Name
            <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
        </label>
    </p>

    <p>
        <label for="email">Your Email Address (never shared)
            <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
        </label>
    </p>

    <p>Basic HTML is allowed (e.g. &lt;a&gt;, &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;).</p>

    <p>Use <code>&lt;pre lang="x"&gt;code&lt;/pre&gt;</code> to include code blocks with syntax highlighting, where x is asp, csharp, html, javascript.
        Even inside &lt;pre&gt; and &lt;code&gt; blocks, the open angle brackets in HTML and XML need to be encoded (i.e. convert any
        <code>&lt;</code> to <code>&amp;lt;</code>).</p>

  <?php endif; ?>

    <p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>

    <?php do_action('comment_form', $post->ID); ?>

    <p>
      <input name="submit" type="submit" id="addComment" tabindex="5" value="Save Comment" />
      <?php comment_id_fields(); ?>
    </p>

  </form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
