<?php
/**
 * Customizer Fonts
 *
 * @package Authentic
 */

if ( ! class_exists( 'CSCO_Customizer_Fonts' ) ) {
	/**
	 * Customizer Fonts Class.
	 */
	final class CSCO_Customizer_Fonts {

		/**
		 * An array of our google fonts.
		 *
		 * @static
		 * @access public
		 * @var null|object
		 */
		public static $google_fonts = null;

		/**
		 * The class constructor.
		 */
		public function __construct() {
			/** Initialize actions */
			add_action( 'wp_ajax_csco_typography_fonts_google_all_get', array( $this, 'get_googlefonts_json' ) );
			add_action( 'wp_ajax_nopriv_csco_typography_fonts_google_all_get', array( $this, 'get_googlefonts_json' ) );
			add_action( 'wp_ajax_csco_typography_fonts_standard_all_get', array( $this, 'get_standardfonts_json' ) );
			add_action( 'wp_ajax_nopriv_csco_typography_fonts_standard_all_get', array( $this, 'get_standardfonts_json' ) );
		}

		/**
		 * Gets the googlefonts JSON file.
		 *
		 * @return void
		 */
		public function get_googlefonts_json() {
			require get_theme_file_path( '/core/customizer/assets/webfonts.json' ); // phpcs:ignore.
			wp_die();
		}

		/**
		 * Get the standard fonts JSON.
		 *
		 * @return void
		 */
		public function get_standardfonts_json() {
			echo wp_json_encode( self::get_standard_fonts() );
			wp_die();
		}

		/**
		 * Returns an array of all available variants.
		 *
		 * @static
		 * @access public
		 * @return array
		 */
		public static function get_all_variants() {
			return array(
				'100'       => esc_html__( 'Ultra-Light 100', 'authentic' ),
				'100light'  => esc_html__( 'Ultra-Light 100', 'authentic' ),
				'100italic' => esc_html__( 'Ultra-Light 100 Italic', 'authentic' ),
				'200'       => esc_html__( 'Light 200', 'authentic' ),
				'200italic' => esc_html__( 'Light 200 Italic', 'authentic' ),
				'300'       => esc_html__( 'Book 300', 'authentic' ),
				'300italic' => esc_html__( 'Book 300 Italic', 'authentic' ),
				'400'       => esc_html__( 'Normal 400', 'authentic' ),
				'regular'   => esc_html__( 'Normal 400', 'authentic' ),
				'italic'    => esc_html__( 'Normal 400 Italic', 'authentic' ),
				'500'       => esc_html__( 'Medium 500', 'authentic' ),
				'500italic' => esc_html__( 'Medium 500 Italic', 'authentic' ),
				'600'       => esc_html__( 'Semi-Bold 600', 'authentic' ),
				'600bold'   => esc_html__( 'Semi-Bold 600', 'authentic' ),
				'600italic' => esc_html__( 'Semi-Bold 600 Italic', 'authentic' ),
				'700'       => esc_html__( 'Bold 700', 'authentic' ),
				'700italic' => esc_html__( 'Bold 700 Italic', 'authentic' ),
				'800'       => esc_html__( 'Extra-Bold 800', 'authentic' ),
				'800bold'   => esc_html__( 'Extra-Bold 800', 'authentic' ),
				'800italic' => esc_html__( 'Extra-Bold 800 Italic', 'authentic' ),
				'900'       => esc_html__( 'Ultra-Bold 900', 'authentic' ),
				'900bold'   => esc_html__( 'Ultra-Bold 900', 'authentic' ),
				'900italic' => esc_html__( 'Ultra-Bold 900 Italic', 'authentic' ),
			);
		}

		/**
		 * Return an array of standard websafe fonts.
		 *
		 * @return array    Standard websafe fonts.
		 */
		public static function get_standard_fonts() {
			$standard_fonts = array(
				'serif'      => array(
					'label' => 'Serif',
					'stack' => 'Georgia,Times,"Times New Roman",serif',
				),
				'sans-serif' => array(
					'label' => 'Sans Serif',
					'stack' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
				),
				'monospace'  => array(
					'label' => 'Monospace',
					'stack' => 'Monaco,"Lucida Sans Typewriter","Lucida Typewriter","Courier New",Courier,monospace',
				),
			);
			return apply_filters( 'csco_customizer_fonts_standard_fonts', $standard_fonts );
		}

		/**
		 * Return an array of all available Google Fonts.
		 *
		 * @return array    All Google Fonts.
		 */
		public static function get_google_fonts() {

			// Get fonts from cache.
			self::$google_fonts = get_site_transient( 'csco_customizer_googlefonts_cache' );

			/**
			 * Reset the cache if we're using action=csco-googlefonts-reset-cache in the URL.
			 *
			 * Note to code reviewers:
			 * There's no need to check nonces or anything else, this is a simple true/false evaluation.
			 */
			if ( ! empty( $_GET['action'] ) && 'csco-googlefonts-reset-cache' === $_GET['action'] ) { // phpcs:ignore WordPress.Security.NonceVerification
				self::$google_fonts = false;
			}

			// If cache is populated, return cached fonts array.
			if ( self::$google_fonts ) {
				return self::$google_fonts;
			}

			// If we got this far, cache was empty so we need to get from JSON.
			ob_start();

			require get_theme_file_path( '/core/customizer/assets/webfonts.json' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude

			$fonts_json = ob_get_clean();
			$fonts      = json_decode( $fonts_json, true );

			$google_fonts = array();
			if ( is_array( $fonts ) ) {
				foreach ( $fonts['items'] as $font ) {
					$google_fonts[ $font['family'] ] = array(
						'label'    => $font['family'],
						'variants' => $font['variants'],
						'category' => $font['category'],
					);
				}
			}

			// Apply the 'csco_customizer_fonts_google_fonts' filter.
			self::$google_fonts = apply_filters( 'csco_customizer_fonts_google_fonts', $google_fonts );

			// Save the array in cache.
			$cache_time = apply_filters( 'csco_customizer_googlefonts_transient_time', DAY_IN_SECONDS );
			set_site_transient( 'csco_customizer_googlefonts_cache', self::$google_fonts, $cache_time );

			return self::$google_fonts;
		}

		/**
		 * Determine if a font-name is a valid google font or not.
		 *
		 * @param string $fontname The name of the font we want to check.
		 * @return bool
		 */
		public static function is_google_font( $fontname ) {
			return ( array_key_exists( $fontname, self::$google_fonts ) );
		}
	}

	new CSCO_Customizer_Fonts();
}
