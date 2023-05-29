<?php
/**
 * The template for displaying comments
 *
 * @package Authentic
 */

if ( post_password_required() ) {
	return;
}
?>

<?php do_action( 'csco_comments_before' ); ?>

<section id="comments" class="post-comments">

	<div class="insticator-unit type-products"><div class="insticator-ads"><div id="div-insticator-ad-cmt-1"></div><div id="div-insticator-ad-cmt-2"></div><script data-cfasync="false" type="text/javascript">Insticator.ad.loadAd("div-insticator-ad-cmt-1");Insticator.ad.loadAd("div-insticator-ad-cmt-2");</script></div><div id="insticator-commenting"><div class="instiengage-comments" data-cu-uuid="bcedd2eb-21a1-4328-ab9e-14c65839c293" data-ext-page-id="<?php the_ID(); ?>"></div><script>Insticator.load('comments')</script></div><div class="insticator-ads additional"><div id="div-insticator-ad-cmt-3"></div><div id="div-insticator-ad-cmt-4"></div><script data-cfasync="false" type="text/javascript">Insticator.ad.loadAd("div-insticator-ad-cmt-3");Insticator.ad.loadAd("div-insticator-ad-cmt-4");</script></div></div>

</section><!-- .comments-area -->

<?php do_action( 'csco_comments_after' ); ?>
