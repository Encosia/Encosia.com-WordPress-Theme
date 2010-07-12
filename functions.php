<?php
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'wp_generator');
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

            <?php comment_reply_link(array_merge($args, array(
                    'reply_text' => 'Reply to this',
                    'depth' => $depth
                  )));
            ?>
            <?php edit_comment_link('(edit)'); ?>            
<?php } // end custom_comments
// Custom callback to list pings
function custom_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
        ?>
            <li><?php comment_author_link() ?>
<?php } ?>