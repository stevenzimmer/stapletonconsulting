<?php

	require get_theme_file_path('/inc/search-route.php');

	function enqueue_assets() {

		// Enqueue Theme Scripts
 		wp_deregister_script( 'jquery' );

 		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/prod/js/scripts.min.js', array(), '1.0', true );

 		// Enqueue Theme Styles
		wp_enqueue_style( 'style', get_template_directory_uri() . '/prod/css/style.min.css', array(), '1.0' );

		wp_localize_script('scripts', 'sc_data', array(
				'root_url' => get_site_url(),
			)
		);
	}

	add_action('wp_enqueue_scripts', 'enqueue_assets');

	function register_theme_support() {

		register_nav_menus(
			array(
				'primary' => __( 'Primary', 'stapleton')
			)
		);

		// Add featured image to new posts and pages in wp-admin
		add_theme_support( 'post-thumbnails' );

		// Adds title tag without header.php code
		add_theme_support( 'title-tag' );

		// Add menu functionality within wp-admin
		add_theme_support( 'menus' );

		add_post_type_support('page', 'excerpt');
	}

	add_action( 'after_setup_theme', 'register_theme_support');

	// Removes WP Emoji
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove Unused WP scripts
	function remove_wp_scripts() {
		if (!is_admin()) {
			wp_deregister_script('wp-embed');
			wp_deregister_script( 'comment-reply' );
		}
	}
	add_action('init', 'remove_wp_scripts');


	// Disable XML RPC
	add_filter('xmlrpc_enabled', '__return_false');

	// Remove Wordpress version number
	add_filter( 'the_generator', '__return_null' );


?>