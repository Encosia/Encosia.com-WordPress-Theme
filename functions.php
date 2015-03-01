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

  ?><div id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
      <div class="comment-header">
        <div class="comment-author vcard"><strong><?php comment_author_link() ?></strong><?php if(comment_subscription_status()) { ?> <img src="/blog/images/comment-subscription.png" width="21" height="8" alt="Subscribed to followup comments" /><?php } ?></div>
        <div class="comment-date"><?php comment_time() ?> - <?php comment_date() ?></div>
      </div>

      <div class="comment-content"><?php comment_text() ?></div>
        <a class="comment-reply-link" href="#" rel="nofollow">Reply to this comment</a>

        <?php edit_comment_link('(edit)'); ?>
<?php
}

// Custom callback to list pings
function custom_pings($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;

  ?><li><?php comment_author_link() ?>
<?php
}

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

function get_image_attachment_link($link) {
  $the_real_id = explode('=', $link);

  $post = get_post($the_real_id[1]);

  if ($post->post_type == 'attachment') {
    return '/i/' . $post->post_name;
  }
}

add_filter('attachment_link', 'get_image_attachment_link');

function post_type_image() {
  register_post_type('image', array(
    'rewrite' => array('slug' => 'i/')
  ));
}

add_action('init', 'post_type_image');

add_action( 'wp_print_scripts', 'deregister_cf7_javascript', 100 );
function deregister_cf7_javascript() {
    if ( !is_page(12) ) {
        wp_deregister_script( 'contact-form-7' );
    }
}

function encosia_init() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
}

add_action( 'wp_print_styles', 'deregister_cf7_styles', 100 );
function deregister_cf7_styles() {
    if ( !is_page(12) ) {
        wp_deregister_style( 'contact-form-7' );
    }
}

function DequeueYarppStyle()
{
	wp_dequeue_style('yarppRelatedCss');
	wp_deregister_style('yarppRelatedCss');
}

add_action('wp_footer', 'DequeueYarppStyle');

if (!function_exists('gzopen')) {
function gzopen($filename , $mode, $use_include_path = 0 ) { return gzopen64($filename, $mode, $use_include_path); }
}

// Code to remove YARPP's injected CSS.
// https://wordpress.org/support/topic/prevent-loading-relatedcss-and-widgetcss        
function encosia_deregister_plugin_assets_header() {
  wp_dequeue_style('yarppWidgetCss');
  wp_deregister_style('yarppRelatedCss');
}
add_action( 'wp_print_styles', 'encosia_deregister_plugin_assets_header' );

function encosia_deregister_plugin_assets_footer() {
  wp_dequeue_style('yarppRelatedCss');
  wp_dequeue_style('yarppWidgetCss');
}
add_action( 'wp_footer', 'encosia_deregister_plugin_assets_footer' );
?>
