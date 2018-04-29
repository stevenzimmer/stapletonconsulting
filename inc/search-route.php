<?php

function sc_register_search() {
	register_rest_route('sc/v1', 'search', array(
			'methods' => WP_REST_SERVER::READABLE,
			'callback' => 'sc_search_results'
		)
	);
}

add_action('rest_api_init', 'sc_register_search');

function sc_search_results($data) {

	$sc_posts = new WP_Query( array(
			'post_type' => array('articles','post', 'page', 'services', 'case-studies'),
			'posts_per_page' => -1,
			's' => sanitize_text_field($data['term'])
		)
	);

	$results = array();

	while( $sc_posts->have_posts() ) :
		$sc_posts->the_post();
		array_push( $results, array(
				'title' => get_the_title(),
				'permalink' => get_the_permalink(),
				'post_type' => get_post_type()
			)
		);
	endwhile;

	return $results;
}

?>