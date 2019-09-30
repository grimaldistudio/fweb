<?php
/*
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		wp_register_style('fontawesome5', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', false, '5.8.1', null);
		wp_enqueue_style('fontawesome5');

		//wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css' );

		wp_register_style('fw', get_template_directory_uri() . '/theme/css/main.css', false, null);
		wp_enqueue_style('fw');

		// Scripts

		wp_register_script('modernizr', get_template_directory_uri() . '/theme/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_enqueue_script('jquery');

		wp_register_script('bootstrap-bundle', get_template_directory_uri() . '/theme/bootstrap/bootstrap.bundle.min.js', false, '4.3.1', true);
		wp_enqueue_script('bootstrap-bundle');
		// (The Bootstrap JS bundle contains Popper JS.)

		wp_register_script('fw', get_template_directory_uri() . '/theme/js/fw-init.js', false, null, true);
		wp_enqueue_script('fw');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);

    function ns_cookie_yes() { ?>
     <script id="cookieyes" type="text/javascript" src="https://app.cookieyes.com/client_data/d300be2d3bd3dbefffe749c9.js"></script>     
      <?php
      }
      
    add_action( 'wp_head', 'ns_cookie_yes', 110 );
