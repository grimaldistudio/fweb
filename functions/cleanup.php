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

function my_rwd_image_sizes() {
  return array(
	'thumbnail' => array(
		array( 300, 200, true ),
	),
	'medium' => array(
		array(
			array( 640, 480 ),
			'picture' => '<source srcset="{src}" media="(min-width: 415px)">',
			'bg' => '@media (min-width: 415px)',
			'srcset' => '{w}w',
			'sizes' => '(min-width: 415px) {w}px',
		),
		'rwd-mobile' => 'inherit',
	),
	'large' => array(
		array(
			array( 1100, 800 ),
			'picture' => '<source srcset="{src}" media="(min-width: 981px)">',
			'bg' => '@media (min-width: 981px)',
			'srcset' => '{w}w',
			'sizes' => '(min-width: 981px) {w}px',
		),
		'rwd-tablet' => 'inherit',
		'rwd-mobile' => 'inherit',
	),
	'hd' => array(
		array(
			array( 1600, 1200 ),
			'picture' => '<source srcset="{src}" media="(min-width: 1281px)">',
			'bg' => '@media (min-width: 1281px)',
			'srcset' => '{w}w',
			'sizes' => '(min-width: 1281px) {w}px',
		),
		'rwd-tablet' => 'inherit',
		'rwd-laptop' => 'inherit',
		'rwd-mobile' => 'inherit',
	),
	'uhd' => array(
		'rwd-desktop' => 'inherit',
		'rwd-laptop' => 'inherit',
		'rwd-tablet' => 'inherit',
		'rwd-mobile' => 'inherit',
	),
);
}

add_filter('rwd_image_sizes', 'my_rwd_image_sizes');

