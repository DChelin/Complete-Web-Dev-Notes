<?php
/**
 * Plugin Name: Dev Custom Plugin
 * Description: Handles the custom functions for the website.
 * Version: 1:0:0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Devlyn Chelin
 * Author URI: https://chelin.dev/
 */
//Protect your site from malicious requests.
global $user_ID; if($user_ID) {
    if(!current_user_can('administrator')) {
        if (strlen($_SERVER['REQUEST_URI']) > 255 ||
            stripos($_SERVER['REQUEST_URI'], "eval(") ||
            stripos($_SERVER['REQUEST_URI'], "CONCAT") ||
            stripos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||
            stripos($_SERVER['REQUEST_URI'], "base64")) {
                @header("HTTP/1.1 414 Request-URI Too Long");
                @header("Status: 414 Request-URI Too Long");
                @header("Connection: Close");
                @exit;
        }
    }
}

//Paginate your site without the use of additional plugins
global $wp_query;
$total = $wp_query->max_num_pages;
// only bother with the rest if we have more than 1 page!
if ( $total > 1 )  {
     // get the current page
     if ( !$current_page = get_query_var('paged') )
          $current_page = 1;
     // structure of "format" depends on whether we're using pretty permalinks
     $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
     echo paginate_links(array(
          'base' => get_pagenum_link(1) . '%_%',
          'format' => $format,
          'current' => $current_page,
          'total' => $total,
          'mid_size' => 4,
          'type' => 'list'
     ));
}

//Display post Thumbnails in RSS feed
function wpfme_feed_post_thumbnail($content) {
    global $post;
    if(has_post_thumbnail($post->ID)) {
    $content = '' . $content;
    }
    return $content;
    }
    add_filter('the_excerpt_rss', 'wpfme_feed_post_thumbnail');
    add_filter('the_content_feed', 'wpfme_feed_post_thumbnail');

?>

