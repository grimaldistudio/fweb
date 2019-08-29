<?php
/*
 * Cleanup
 */

// Less stuff in <head>

if ( ! function_exists('b4st_cleanup_head') ) {
  function b4st_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
  }
}
add_action('init', 'b4st_cleanup_head');

// Show less info to users on failed login for security.
// (Will not let a valid username be known.)

if ( ! function_exists('show_less_login_info') ) {
  function show_less_login_info() {
    return "<strong>ERROR</strong>: Stop guessing!";
  }
}
add_filter( 'login_errors', 'show_less_login_info' );

// Do not generate and display WordPress version

if ( ! function_exists('b4st_remove_generator') ) {
  function b4st_remove_generator()  {
    return '';
  }
}
add_filter( 'the_generator', 'no_generator' );

// Remove Query Strings From Static Resources

/*if ( ! function_exists('b4st_remove_script_version') ) {
  function b4st_remove_script_version( $src ) {
    if ( current_user_can('manage_options') ) {
      return $src;
    }
    if( strpos( $src, '?ver=' ) ) {
      $src = remove_query_arg( 'ver', $src );
      return $src;
    }
  }
}
add_filter( 'script_loader_src', 'b4st_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'b4st_remove_script_version', 15, 1 );*/

add_filter('vc_shortcodes_css_class', function ($class_string, $tag) {
  $tags_to_clean = [
   'vc_row',
   'vc_column',
   'vc_row_inner',
   'vc_column_inner'
  ];
  if (in_array($tag, $tags_to_clean)) {
 
   $class_string = str_replace(' wpb_row', '', $class_string);
   $class_string = str_replace(' vc_row-fluid', '', $class_string);
   $class_string = str_replace(' vc_column_container', '', $class_string);
   $class_string = str_replace('wpb_column', '', $class_string);
   
          // replace vc_, but exclude any custom css 
          // attached via vc_custom_XXX (negative lookahead)
   $class_string = preg_replace('/vc_(?!custom)/i', '', $class_string);
          
          // replace all vc_
          // $class_string = preg_replace('/vc_/i', '', $class_string);
  }
  $class_string = preg_replace('|col-sm|', 'col-sm', $class_string);
  return $class_string;
}, 10, 2);