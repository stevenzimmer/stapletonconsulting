<?php

	function enqueue_assets() {

		// Enqueue Theme Scripts
 		wp_deregister_script( 'jquery' );

 		wp_enqueue_script( 'Scripts', get_template_directory_uri() . '/prod/js/scripts.min.js', array(), '1.0', true );

 		// Enqueue Theme Styles
		wp_enqueue_style( 'Style', get_template_directory_uri() . '/prod/css/style.min.css', array(), '1.0' );


	}

	add_action('wp_enqueue_scripts', 'enqueue_assets');


?>