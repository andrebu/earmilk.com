<?php
/**
 * Load More Posts via AJAX.
 *
 * @package Authentic
 */

/**
 * Processing data query for load more
 *
 * @param string $method Processing method $wp_query.
 * @param array  $data Data array.
 */
function csco_load_more_query_data( $method = 'get', $data = array() ) {
	global $wp_query;

	$output = array();

	$vars = array(
		'in_the_loop',
		'is_single',
		'is_page',
		'is_archive',
		'is_author',
		'is_category',
		'is_tag',
		'is_tax',
		'is_home',
		'is_singular',
		'is_post_query',
	);

	if ( 'get' === $method ) {
		$output = $data;
	}

	foreach ( $vars as $variable ) {
		if ( ! isset( $wp_query->$variable ) ) {
			continue;
		}
		if ( 'get' === $method ) {
			$output[ $variable ] = $wp_query->$variable;
		}
		if ( ! isset( $data[ $variable ] ) ) {
			continue;
		}
		if ( 'init' === $method ) {
			$wp_query->$variable = $data[ $variable ];
		}
	}

	if ( 'get' === $method ) {
		$output = apply_filters( 'ajax_query_args', $output );
	}

	return wp_json_encode( $output );
}

/**
 * Get load more args.
 *
 * @param array $data       The data.
 * @param array $attributes The attributes.
 * @param array $options    The options.
 */
function csco_get_load_more_args( $data, $attributes = false, $options = false ) {
	// Ajax Type.
	$ajax_type = version_compare( get_bloginfo( 'version' ), '4.7', '>=' ) ? 'ajax_restapi' : 'ajax';

	$ajax_type = apply_filters( 'ajax_load_more_method', $ajax_type );

	$args = array(
		'type'           => $ajax_type,
		'nonce'          => wp_create_nonce(),
		'url'            => admin_url( 'admin-ajax.php' ),
		'rest_url'       => esc_url( get_rest_url( null, '/csco/v1/more-posts' ) ),
		'posts_per_page' => get_query_var( 'posts_per_page' ),
		'query_data'     => csco_load_more_query_data( 'get', $data ),
		'attributes'     => wp_json_encode( $attributes ),
		'options'        => wp_json_encode( $options ),
		'infinite_load'  => $data['infinite_load'] ? 'true' : 'false',
		'translation'    => array(
			'load_more' => esc_html__( 'Load More', 'authentic' ),
			'loading'   => esc_html__( 'Loading', 'authentic' ),
		),
	);

	return $args;
}

/**
 * Localize the main theme scripts.
 */
function csco_load_more_js() {
	global $wp_query;

	$paged = get_query_var( 'paged' );

	if ( $wp_query->max_num_pages <= 1 || $paged > 1 ) {
		return;
	}

	if ( 'ajax' === get_theme_mod( csco_get_archive_option( 'pagination_type' ), 'standard' ) ) {

		// Pagination type.
		$wp_query->infinite = get_theme_mod( csco_get_archive_option( 'infinite_load' ), false ) ? true : false;

		// Theme data.
		$data = array(
			'location'      => csco_get_archive_location(),
			'infinite_load' => $wp_query->infinite,
			'query_vars'    => $wp_query->query_vars,
		);

		$args = csco_get_load_more_args( $data );

		wp_localize_script( 'csco-scripts', 'csco_ajax_pagination', $args );
	}
}
add_action( 'wp_enqueue_scripts', 'csco_load_more_js' );

/**
 * Get More Posts
 */
function csco_load_more_posts() {

	$posts_end = false;

	// Response default.
	$response = array(
		'page'           => 2,
		'posts_per_page' => 10,
	);

	if ( wp_doing_ajax() ) {
		check_ajax_referer();
	}

	// Set response values of ajax query.
	if ( isset( $_POST['page'] ) && $_POST['page'] ) { // Input var ok.
		$response['page'] = sanitize_key( $_POST['page'] ); // Input var ok; sanitization ok.
	}
	if ( isset( $_POST['posts_per_page'] ) && $_POST['posts_per_page'] ) { // Input var ok.
		$response['posts_per_page'] = sanitize_key( $_POST['posts_per_page'] ); // Input var ok; sanitization ok.
	}
	if ( isset( $_POST['query_data'] ) && $_POST['query_data'] ) { // Input var ok.
		$response['query_data'] = $_POST['query_data']; // Input var ok; sanitization ok.
	}
	if ( isset( $_POST['attributes'] ) && $_POST['attributes'] ) { // Input var ok.
		$response['attributes'] = json_decode( stripslashes( $_POST['attributes'] ), true ); // Input var ok; sanitization ok.
	}
	if ( isset( $_POST['options'] ) && $_POST['options'] ) { // Input var ok.
		$response['options'] = json_decode( stripslashes( $_POST['options'] ), true ); // Input var ok; sanitization ok.
	}

	// Init Data.
	$query_data = json_decode( stripslashes( $response['query_data'] ), true );

	// Set Query Vars.
	$query_vars = array_merge(
		(array) $query_data['query_vars'],
		array(
			'is_post_query'  => true,
			'paged'          => (int) $response['page'],
			'posts_per_page' => (int) $response['posts_per_page'],
		)
	);

	// Suppress filtering for wp authors.
	if ( $query_data['is_author'] && $query_vars['author'] ) {
		$query_vars['suppress_filters'] = true;
	}

	// Output only publish entries.
	$query_vars['post_status'] = 'publish';

	// Get Posts.
	ob_start();

	$the_query = new WP_Query( $query_vars );

	$global_name = 'wp_query';

	$GLOBALS[ $global_name ] = $the_query;

	csco_load_more_query_data( 'init', $query_data );

	if ( $the_query->have_posts() ) :

		// Set query vars, so that we can get them across all templates.
		set_query_var( 'csco_query', $query_data );

		// Get total number of posts.
		$total = $the_query->post_count;

		while ( $the_query->have_posts() ) :
			$the_query->the_post();

			// Start counting posts.
			$current = $the_query->current_post + 1 + $query_vars['posts_per_page'] * $query_vars['paged'] - $query_vars['posts_per_page'];

			// Check End of posts.
			if ( $the_query->found_posts - $current <= 0 ) {
				$posts_end = true;
			}

			// Get content template part.
			if ( isset( $response['attributes'] ) && $response['attributes'] ) {

				$attributes = $response['attributes'];
				$options    = $response['options'];

				$options['current_post'] = $current;

				set_query_var( 'attributes', $attributes );
				set_query_var( 'options', $options );

				csco_get_block_content_template( $current );
			} else {
				csco_get_content_template( $current );
			}
		endwhile;

	endif;

	wp_reset_postdata();

	$content = ob_get_clean();

	if ( ! $content ) {
		$posts_end = true;
	}

	// Return Result.
	$result = array(
		'posts_end' => $posts_end,
		'content'   => $content,
	);

	return $result;
}

/**
 * AJAX Load More
 */
function csco_ajax_load_more() {

	// Check Nonce.
	check_ajax_referer();

	// Get Posts.
	$data = csco_load_more_posts();

	// Return Result.
	wp_send_json_success( $data );

}
add_action( 'wp_ajax_csco_ajax_load_more', 'csco_ajax_load_more' );
add_action( 'wp_ajax_nopriv_csco_ajax_load_more', 'csco_ajax_load_more' );


/**
 * More Posts API Response
 *
 * @param array $request REST API Request.
 */
function csco_more_posts_restapi( $request ) {

	// Get Data.
	$data = array(
		'success' => true,
		'data'    => csco_load_more_posts(),
	);

	// Return Result.
	return rest_ensure_response( $data );
}

/**
 * Register REST More Posts Routes
 */
function csco_register_more_posts_route() {

	register_rest_route(
		'csco/v1',
		'/more-posts',
		array(
			'methods'             => WP_REST_Server::CREATABLE,
			'callback'            => 'csco_more_posts_restapi',
			'permission_callback' => function() {
				return true;
			},
		)
	);
}
add_action( 'rest_api_init', 'csco_register_more_posts_route' );
