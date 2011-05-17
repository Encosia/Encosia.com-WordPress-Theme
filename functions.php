<?php
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');

// Custom callback to list comments in the your-theme style
function custom_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
        $GLOBALS['comment_depth'] = $depth;
  ?>
        <div id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
            <div class="comment-header">
                <div class="comment-author vcard"><strong><?php comment_author_link() ?></strong><?php if(comment_subscription_status()) { ?> <img src="/blog/images/comment-subscription.png" width="21" height="8" alt="Subscribed to followup comments" /><?php } ?></div>
                <div class="comment-date"><?php comment_time() ?> - <?php comment_date() ?></div>
            </div>

            <div class="comment-content"><?php comment_text() ?></div>

            <a class="comment-reply-link" href="#" rel="nofollow"
               onclick="return addComment.moveForm('comment-<?php comment_ID() ?>', '<?php comment_ID() ?>', 'respond', '<?php the_ID() ?>')">Reply to this comment</a>

            <?php edit_comment_link('(edit)'); ?>            
<?php }
// Custom callback to list pings
function custom_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
        ?>
            <li><?php comment_author_link() ?>
<?php }

add_filter('pre_comment_content', 'pre_esc_html');

function pre_esc_html($comment) {
  return preg_replace_callback(
    '#(<pre.*?>)(.*?)(</pre>)#imsu',
    create_function(
      '$i',
      'return $i[1].esc_html($i[2]).$i[3];'
    ),
    $comment
  );
}

/* add new rewrite rule */
function attachment_rewrite( $wp_rewrite ) {
    $rule = array(
        'attachment/([0-9]+)' => 'index.php?attachment_id=' . $wp_rewrite->preg_index(1)
    );

    $wp_rewrite->rules = $rule + $wp_rewrite->rules;
}
add_filter( 'generate_rewrite_rules', 'attachment_rewrite' );
?>