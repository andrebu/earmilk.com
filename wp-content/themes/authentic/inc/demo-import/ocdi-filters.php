<?php
/**
 * One Click Demo Import Functions
 *
 * @package Authentic
 */

/**
 * Settings Page
 */
function csco_ocdi_plugin_page_setup() {

	$ocdi_data = csco_get_license_data( 'ocdi' );

	if ( $ocdi_data ) {
		add_filter( 'pt-ocdi/plugin_page_setup', function ( $default ) use ( $ocdi_data ) {
			return $ocdi_data;
		} );
	}
}
add_filter( 'init', 'csco_ocdi_plugin_page_setup', 5 );

/**
 * Demo Content
 */
function csco_ocdi_import_files() {
	return array(
		array(
			'import_file_name'       => esc_html__( 'Demo Content', 'authentic' ),
			'import_file_url'        => 'https://cloud.codesupply.co/demo-content/demo-content-2.0.xml',
			'import_widget_file_url' => 'https://cloud.codesupply.co/demo-content/widgets-2.0.json',
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'csco_ocdi_import_files' );

/**
 * Page Title
 */
function csco_ocdi_page_title() {
	return '<div class="ocdi__title-container"><h1 class="ocdi__title-container-title">' . esc_html__( 'Demo Content Import', 'authentic' ) . '</h1></div>';
}
add_filter( 'pt-ocdi/plugin_page_title', 'csco_ocdi_page_title' );

/**
 * Intro Text
 *
 * @param string $default_text Default Intro Text.
 */
function csco_ocdi_plugin_intro_text( $default_text ) {
	ob_start(); ?>
		<div class="ocdi__intro-text">
			<p class="about-description"><?php esc_html_e( 'Clicking the Import Demo Data button will import demo posts, pages, categories, comments, tags and widgets.', 'authentic' ); ?></p>
		</div>
	<?php
	$default_text = ob_get_clean();

	return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'csco_ocdi_plugin_intro_text' );

/**
 * Disable Branding
 */
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

/**
 * Menus and Frontpage
 */
function csco_ocdi_after_import_setup() {

	$main_menu = get_term_by( 'name', 'Primary', 'nav_menu' );

	set_theme_mod(
		'nav_menu_locations', array(
			'primary-menu' => $main_menu->term_id,
			'mobile-menu'  => $main_menu->term_id,
			'footer-menu'  => $main_menu->term_id,
		)
	);
}

add_action( 'pt-ocdi/after_import', 'csco_ocdi_after_import_setup' );
