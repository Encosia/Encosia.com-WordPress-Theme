<?php

/**
 * This is a modified version of wp-commments that comes with the Brian's Nested Comments plugin.
 * Version: 1.5.9
 * Author: Brian Meidell
 * Author URI: http://meidell.dk/blog
 */ 

if ('wp-comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

include(ABSPATH . WPINC . "/version.php");

$is_new = (isset($wp_version) && $wp_version > '1.2');

if (($is_new) or ($withcomments) or ($single)) {
        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) {  // and it doesn't match the cookie
?>
<p><?php _e("Enter your password to view comments."); ?><p>
<?php
				return;
            }
        }

 		$comment_author = (isset($_COOKIE['comment_author_'.$cookiehash])) ? trim($_COOKIE['comment_author_'.$cookiehash]) : '';
        $comment_author_email = (isset($_COOKIE['comment_author_email_'.$cookiehash])) ? trim($_COOKIE['comment_author_email_'.$cookiehash]) : '';
 		$comment_author_url = (isset($_COOKIE['comment_author_url_'.$cookiehash])) ? trim($_COOKIE['comment_author_url_'.$cookiehash]) : '';

		if(!$tablecomments && $wpdb->comments) // this makes it work in both 1.2 and 1.3
			$tablecomments = $wpdb->comments;
			$comments = $wpdb->get_results("SELECT * FROM $tablecomments WHERE comment_post_ID = '$id' AND comment_approved = '1' ORDER BY comment_date");
?>
<script type="text/javascript" src="/blog/includes/threadedcomments.min.js"></script>
<?php
$GLOBALS['threaded_comments'] = array();

function write_comment(&$c, $deepest_id = -1) {
	global $btc_cutoff_level;
	$threaded_comments = $GLOBALS['threaded_comments'];
	$odd = ($GLOBALS['__writeCommentDepth']%2? " odd" : "");
?>
			<div  id="div-comment-<?php echo $c->comment_ID ?>" class='comment<?php echo $odd?>'>
				<a name='comment-<?php echo $c->comment_ID ?>' id='comment-<?php echo $c->comment_ID ?>'></a>
				<div class="commentTitle"><?php comment_author_link() ?><a href="#comment-<?php echo $c->comment_ID ?>"></a> <?php 
						if(function_exists('comment_subscription_status')) { 
							if (comment_subscription_status()) { 
								echo "<img alt='Subscribed to comments via email' src='http://encosia.com/blog/images/comment-subscription.png' width='21' height='8' />"; 
							} 
						}
					?>
					<?php edit_comment_link(__("Edit This"), ' |'); ?>				
				</div>
                <div class='commentTimestamp'><?php comment_time('g:i a'); ?> - <?php comment_date('F j, Y'); ?></div>					
				<div class='commentBody'>
					<div class='content'>
						<?php comment_text() ?><?php 
						if(preg_match('|<trackback />|', $c->comment_content)) {
							echo "<small>Read the rest at ";
							echo comment_author_link();
							echo "</small>";
						}
						?>
					</div>
<?php if($GLOBALS['__writeCommentDepth'] < $btc_cutoff_level) { ?>
					<div class='reply'>
						<?php global $user_ID; if ( get_option("comment_registration") && !$user_ID ) echo '<a href="'.
						get_option('siteurl') . 
						'/wp-login.php?redirect_to=' . get_permalink() .
						'">Log in to Reply</a>'; else { ?> 
						<a href='#' onclick='moveAddCommentBelow("div-comment-<?php echo $c->comment_ID ?>", <?php echo $c->comment_ID ?>, true); return false;'>Reply to this comment</a>
						<? } ?>
					</div>
<?php } else if($GLOBALS['__writeCommentDepth'] == $btc_cutoff_level) { 
?>
				<small>(Comments wont nest below this level)</small>
<?php } ?>
				</div>
<?php
		if($threaded_comments[$c->comment_ID]) {
			$id = $c->comment_ID;
			foreach($threaded_comments[$id] as $c) {
				$GLOBALS['__writeCommentDepth']++;
				if($GLOBALS['__writeCommentDepth'] == $btc_cutoff_level)
					write_comment($c, $c->comment_ID);
				else
					write_comment($c, $deepest_id);
				$GLOBALS['__writeCommentDepth']--;
			}
		}
?>
<?php if($GLOBALS['__writeCommentDepth'] == $btc_cutoff_level ) { ?>

					<div class='reply'>
						<?php global $user_ID; if ( get_option("comment_registration") && !$user_ID ) echo '<a href="'.
						get_option('siteurl') . 
						'/wp-login.php?redirect_to=' . get_permalink() .
						'">Log in to Reply</a>'; else { ?> 
						<a href='#' onclick='moveAddCommentBelow("div-comment-<?php echo $deepest_id ?>", <?php echo $deepest_id ?>, false); return false;'>Reply here</a>
						<?php } ?>
					</div>
<?php } ?>					
			</div>
			<div style="height: 1px; overflow: hidden;">&nbsp;</div>
<?php
	}// end function
	
	$commentcount = 0;
	$trackbackcount = 0;
	
	if ($comments)
	{
		foreach($comments as $comment) 
		{
			if (get_comment_type() == 'comment')
				$commentcount++;
			else
				$trackbackcount++;
		}
	}
	
	if ($trackbackcount > 0) 
	{ 
?>
    
<h3 id="pingbacks">Trackbacks</h3>
<div id="trackbacklist">
	<ol>
<?php 
		foreach($comments as $comment) 
		{
			if (get_comment_type() != 'comment') 
			{
				?><li><?php comment_author_link() ?></li><?php
	  		}
		} ?>
	</ol>
</div>
<?php 
	}
?>
<div id="commentlist"><?php
	if ($commentcount > 0) : ?>
<h3 id="comments">Comments</h3>


<?php
	foreach($comments as $c)
	{
		$GLOBALS['threaded_comments'][$c->comment_parent][] = $c;
	}
	
	$GLOBALS['__writeCommentDepth'] = 0;
	
	foreach($GLOBALS['threaded_comments'][0] as $comment) 
	{
		if ( get_comment_type() == 'comment')
		{
			$GLOBALS['comment'] = &$comment;
			write_comment($GLOBALS['comment']);
		}
	}
?>
<?php else : ?>
	<h3>No comments yet.  Be the first!</h3>
<?php endif; ?>
</div>
<?php if ('open' == $post->comment_status) : ?>
<?php
 // this line is WordPress' motor, do not delete it.
$comment_author = (isset($_COOKIE['comment_author_' . COOKIEHASH])) ? trim($_COOKIE['comment_author_'. COOKIEHASH]) : '';
$comment_author_email = (isset($_COOKIE['comment_author_email_'. COOKIEHASH])) ? trim($_COOKIE['comment_author_email_'. COOKIEHASH]) : '';
$comment_author_url = (isset($_COOKIE['comment_author_url_'. COOKIEHASH])) ? trim($_COOKIE['comment_author_url_'. COOKIEHASH]) : '';

?>
<div id="addcomment" class="comment">
<form action="http://encosia.com/blog/encosia-comments-post.php" method="post" id="commentform">
<div class="add">
	<div id="reroot" style="display: none;">
		<small><a href="#" onclick="reRoot(); return false;">
			Click here to cancel "reply".
		</a></small>
	</div>
	<small>
		Name
	</small>
	<div>
		<input type="text" name="author" id="author" class="textarea" value="<?php echo $comment_author; ?>" size="28" tabindex="1" />
	</div>
	<small>
		Email (never shown publicly)
	</small>
	<div>
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="28" tabindex="2" />
	</div>
	<small>
		Website
	</small>
	<div>
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="28" tabindex="3" />	
	</div>
    <div>
        <p style="margin: 10px 0; padding: 0;">Basic HTML is allowed (e.g. &lt;a&gt;, &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;, etc).</p>
        <p>To post formatted code blocks, use &lt;pre lang="x"&gt;code&lt;/pre&gt;, where x is asp, csharp, html, javascript, or xml.</p>
    </div>
	<small>
		Your Comment (<a href="#" onclick="changeCommentSize(-80); return false;">smaller size</a> | <a href="#" onclick="changeCommentSize(80); return false;">larger size</a>)
	</small>
	<div style="width: 100%;">
		<textarea name="comment" id="comment" cols="60" rows="14" tabindex="4"></textarea><br /><br />
	</div>
	<div>
		<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" />
		<input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" />
		<input onclick="onAddComment();" name="addcommentbutton" type="button" id="addcommentbutton" value="Add Comment" />
	</div>
</div>
<?php do_action('comment_form', $post->ID); ?>
</form>
</div>
<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>
<?php } ?>