<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Authentic
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php csco_site_scheme(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script data-cfasync="false" type="text/javascript">(function (a, c, s, u){'Insticator'in a || (a.Insticator={ad:{loadAd: function (b){Insticator.ad.q.push(b)}, q: []}, helper:{}, embed:{}, version: "4.0", q: [], load: function (t, o){Insticator.q.push({t: t, o: o})}}); var b=c.createElement(s); b.src=u; b.async=!0; var d=c.getElementsByTagName(s)[0]; d.parentNode.insertBefore(b, d)})(window, document, 'script', 'https://d3lcz8vpax4lo2.cloudfront.net/ads-code/9f21ce07-229c-4679-9775-29347b798776.js')</script><script async type="text/javascript" src="https://product.instiengage.com/product-loader-code/9f21ce07-229c-4679-9775-29347b798776.js"></script>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) { ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php } ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'csco_body_start' ); ?>

<div id="page" class="site">

	<?php do_action( 'csco_site_start' ); ?>

	<div class="site-inner">

		<?php do_action( 'csco_header_before' ); ?>

		<?php $class = sprintf( 'page-header-type-%s', csco_get_page_header_type() ); ?>

		<header id="masthead" class="site-header <?php echo esc_attr( $class ); ?>" role="banner">

			<?php do_action( 'csco_header_start' ); ?>

			<?php do_action( 'csco_header' ); ?>

			<?php do_action( 'csco_header_end' ); ?>

		</header>

		<?php do_action( 'csco_header_after' ); ?>

		<?php do_action( 'csco_site_content_before' ); ?>

		<div <?php csco_site_content_class(); ?>>

			<?php do_action( 'csco_site_content_start' ); ?>

			<div class="cs-container">

				<?php do_action( 'csco_main_content_before' ); ?>

				<div id="content" class="main-content">

					<?php do_action( 'csco_main_content_start' ); ?>

					<?php 
					//echo "<div hidden template-file>" . get_theme_file_path() . " - " . get_page_template() . " - " . get_post_type( $post->ID ) . " - is_archive? " . is_archive() . "</div>"; 
					?> 
