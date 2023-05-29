<?php
/**
 * Include Theme Functions
 *
 * @package Authentic Child Theme
 * @subpackage Functions
 * @version 1.0.0
 */

/**
 * Setup Child Theme
 */
function csco_setup_child_theme() {
	// Add Child Theme Text Domain.
	load_child_theme_textdomain( 'authentic', get_stylesheet_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'csco_setup_child_theme', 99 );

/**
 * Enqueue Child Theme Assets
 */
function csco_child_assets() {
	if ( ! is_admin() ) {
		$version = wp_get_theme()->get( 'Version' );
		wp_enqueue_style( 'csco_child_css', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(), $version, 'all' );
	}
}

add_action( 'wp_enqueue_scripts', 'csco_child_assets', 99 );

/**
 * Add your custom code below this comment.
 */

// Add pending numbers to post types on admin menu
function show_pending_number($menu) {    
    $types = array("post", "page", "album_review", "gear-reviews", "news", "opinion", "phosts_post");
    $status = "pending";
    foreach($types as $type) {
        $num_posts = wp_count_posts($type, 'readable');
        $pending_count = 0;
        if (!empty($num_posts->$status)) $pending_count = $num_posts->$status;

        if ($type == 'post') {
            $menu_str = 'edit.php';
        } else {
            $menu_str = 'edit.php?post_type=' . $type;
        }

        foreach( $menu as $menu_key => $menu_data ) {
            if( $menu_str != $menu_data[2] )
                continue;
            $menu[$menu_key][0] .= " <span class='update-plugins count-$pending_count'><span class='plugin-count'>" . number_format_i18n($pending_count) . '</span></span>';
            }
        }
    return $menu;
}
add_filter('add_menu_classes', 'show_pending_number');


/*
// This function can be used to create a new file in the child theme
// REPLACE: my-file.php with desired filename and extension 
add_action('after_setup_theme', function() {
	$file = get_stylesheet_directory() . '/my-file.php';
//	$file = get_stylesheet_directory() . '/template-parts/media/image.php';
	if(!file_exists($file)) {
		include_once ABSPATH . 'wp-admin/includes/file.php';
		\WP_Filesystem();
		global $wp_filesystem;
//		$wp_filesystem->mkdir( get_stylesheet_directory() . '/template-parts' );
//		$wp_filesystem->mkdir( get_stylesheet_directory() . '/template-parts/media' );
		$wp_filesystem->put_contents($file, '', FS_CHMOD_FILE);
	}
});
*/

/*
// This function can be used to delete a file in the child theme
// REPLACE: page.php with desired filename and extension 
add_action('after_setup_theme', function() {
	$file = get_stylesheet_directory() . '/my-file.php';
	if(file_exists($file)) {
		include_once ABSPATH . 'wp-admin/includes/file.php';
		\WP_Filesystem();
		global $wp_filesystem;
		$wp_filesystem->delete($file);
	}
});
*/