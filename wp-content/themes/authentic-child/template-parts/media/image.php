<?php
/**
 * Media: Image
 *
 * @package Authentic
 */

$filter      = current_filter();
$page_wide   = csco_is_wide_container();
$layout      = csco_get_page_layout();
$page_header = csco_get_page_header_type();

if ( 'csco_main_content_before' === $filter ) {
	if ( $page_wide ) {
		$size = '1920';
	} else {
		$size = '1160';
	}
} else {
	if ( $page_wide && 'layout-fullwidth' === $layout ) {
		$size = '1920';
	} elseif ( $page_wide && 'layout-fullwidth' !== $layout ) {
		$size = '1160';
	} elseif ( ! $page_wide && 'layout-fullwidth' === $layout ) {
		$size = '1160';
	} else {
		$size = '800';
	}
}

$thumbnail = 'csco-' . $size;

if ( is_single() && 'simple' === $page_header ) {
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );	
	?>
	<section class="post-media">
		<figure>
			<a href="<?php echo esc_url( $thumb[0] ); ?>">
				<?php the_post_thumbnail( $thumbnail ); ?>
			</a>
			<?php if ( get_the_post_thumbnail_caption() ) { ?>
			<figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
			<?php } ?>
		</figure><?php 
	
	if ( get_post_type( $post->ID ) == "album_review" ) { 

		$artist_name = get_field('artist_name');
		$album_name = get_field('album_name');
		$release_type = get_field('release_type');
		$date = get_field('release_date');
		$date_human = date("F j, Y", strtotime($date)); 
		$date_iso = date("c", strtotime($date)); 
		$record_label_name = get_field('labels')[0]['label_name'] ?? "--"; 
		$record_label_location = get_field('labels')[0]['label_location'] ?? "--"; 
		$record_label_url = get_field('labels')[0]['label_url']; 
		$review_rating = get_field('review_rating');
		$review_links = get_field('links');
		$post_modified_date_human = get_the_modified_date("F j, Y");
		$post_modified_date_iso = get_the_modified_date("c");
		$post_tags_array = wp_get_post_tags($post->ID);
		$post_kyewords = '';
		foreach( $post_tags_array as $tag ) {
			if ( $post_kyewords == '' ) { $post_kyewords .= $tag->name; } 
			else { $post_kyewords .= ', ' . $tag->name; };
		};
		$post_categories_array = wp_get_post_categories($post->ID);
		$post_sections = ''; 
		foreach( $post_categories_array as $cats ) {
			$cat = get_category( $cats );
			if ( $post_sections == '' ) { $post_sections .= $cat->name; } 
			else { $post_sections .= ', ' . $cat->name; };
		};		
		
		?><div class="earmilk-album-review">

		<span hidden itemprop="hasPart" itemscope itemtype="http://schema.org/MusicAlbum">
			<meta itemprop="name" content="<?php echo $album_name; ?>" />
			<meta itemprop="mainEntityOfPage" content="<?php the_permalink(); ?>" />
			<meta itemprop="albumReleaseType" content="<?php echo $release_type; ?>" />
			<span itemprop="byArtist" itemscope itemtype="http://schema.org/MusicGroup">
				<meta itemprop="name" content="<?php echo $artist_name; ?>" />
			</span>
			<meta itemprop="dateCreated" content="<?php echo $date_iso ?>" />
			<meta itemprop="url" content="<?php the_permalink(); ?>" />
			<span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
				<meta itemprop="url" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>">
				<meta itemprop="width" content="950">
				<meta itemprop="height" content="950">
			</span>
			<span itemprop="sourceOrganization" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="<?php echo $record_label_name; ?>">
				<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<meta itemprop="addressLocality addressRegion" content="<?php echo $record_label_location; ?>" />
				</span>
				<meta itemprop="url" content="<?php echo $record_label_url; ?>" />
			</span>
			<meta itemprop="keywords" content="<?php echo $post_kyewords; ?>" />
		</span>
		
						<meta itemprop="name" content="EARMILK Review of <?php the_title(); ?>" />
						<meta itemprop="about" content="<?php the_title(); ?>" />
						<?php 
							if ( class_exists('WPSEO_Frontend') ) { 
				 				$wp_seo_object = WPSEO_Frontend::get_instance();
				 				$post_description = htmlentities( $wp_seo_object->metadesc( false ) ); 
								echo '<meta itemprop="description" content="' . $post_description . '" />'; }
						?>
						<meta itemprop="keywords" content="<?php echo $post_sections . ', ' . $post_kyewords; ?>" />
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th colspan="10">Detail's of EARMILK <?php the_title(); ?></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" colspan="2">Artist Name:</th>
									<td colspan="3">
										<div class="earmilk-review-artist">
											<?php echo $artist_name; ?>
										</div>
									</td>
									<th colspan="2">Album Name:</th>
									<td colspan="3">
										<div class="earmilk-review-album">
											<span><?php echo $album_name; ?></span>
											<?php the_post_thumbnail( array( 18, 18 ) ); ?>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row" colspan="2">Release Type:</th>
									<td colspan="3">
										<div class="earmilk-review-release">
											<?php echo $release_type; ?>
										</div>
									</td>
									<th colspan="2">Release Date:</th>
									<td colspan="3">
										<div class="earmilk-review-album-release-date">
											<time datetime="<?php echo $date_iso ?>">
												<?php echo $date_human; ?>
											</time>
										</div>
									</td>
								</tr>
								<tr class="earmilk-review-label" itemprop="sourceOrganization" itemscope itemtype="http://schema.org/Organization">
									<th scope="row" colspan="2">Record Label:</th>
									<td colspan="3">
										<div class="earmilk-review-label-name" itemprop="name">
											<a class="earmilk-review-label-url" href="<?php echo $record_label_url; ?>" itemprop="url">
												<?php echo $record_label_name; ?>
											</a>
										</div>
									</td>
									<th colspan="2">Label Location:</th>
									<td colspan="3">
										<div class="earmilk-review-label-location" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
											<span itemprop="addressLocality addressRegion">
												<?php echo $record_label_location; ?>
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row" colspan="2">Review Author:</th>
									<td colspan="3">
										<div class="earmilk-review-author" itemprop="author" itemscope itemtype="http://schema.org/Person">
											<meta itemprop="url" content="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" />
											<meta itemprop="image" content="<?php echo get_avatar_url( get_the_author_meta( 'user_email' ) ); ?>" />
							                <a class="author-photo" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
												<span itemprop="name"><?php echo get_the_author_meta( 'display_name' ); ?></span>
								                <?php echo get_avatar( get_the_author_meta( 'user_email' ), 18 ); ?>
								            </a>
										</div>
									</td>
									<th colspan="2">Review Date:</th>
									<td colspan="3">
										<div class="earmilk-review-created-time">
											<time itemprop="dateCreated" datetime="<?php echo get_the_date('c'); ?>">
												<?php echo get_the_date('F j, Y'); ?>
											</time>
											<meta itemprop="dateModified" content="<?php echo $post_modified_date_iso ?>" />
										</div>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<?php 
									if ( $review_links !== NULL ) { 
										foreach ( $review_links as $review_link ) { ?>
											<tr class="earmilk-review-links" style="display:none;">
												<th colspan=""><?php echo $review_link['link_display_text']; ?></th>
												<td colspan="3">
													<a href="<?php echo $review_link['link_url']; ?>" 
														title="<?php echo $artist_name . ' on ' . $review_link['link_display_text']; ?>">
														<?php echo $review_link['link_url']; ?>
													</a>
												</td>
											</tr>
								<?php 
										};
									}; ?>
								<tr class="earmilk-review-rating-row">
									<th colspan="5">EM Review Rating:</th>
									<td colspan="5">
										<div class="earmilk-review-rating" 
											itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
											<meta itemprop="name" content="EARMILK Rating">
											<meta itemprop="bestRating" content="10">
											<meta itemprop="worstRating" content="1">
				                        	<div itemprop="ratingValue">
												<div class="album-review-number"><?php echo $review_rating; ?></div>
					                        	<?php
						                        	$rating_int = ( (float)$review_rating ) / 2;
						                        	$subtractor = 0;
													for($x=1; $x<=$rating_int; $x++) {
														echo '<i class="fa fa-star filled-star"></i>';
														$subtractor++;
													}
													$raminder = $rating_int - $subtractor;
													if ( $raminder == 0.25 ) {
														echo '<i class="fa fa-star quarter-star"></i>';
														$x++;
													} elseif ( $raminder == 0.50 ) {
														echo '<i class="fa fa-star half-star"></i>';
														$x++;
													} elseif ( $raminder == 0.75 ) {
														echo '<i class="fa fa-star three-quarters-star"></i>';
														$x++;
													}
													while ($x<=5) {
														echo '<i class="fa fa-star"></i>';
														$x++;
													}
												?>
				                        	</div>
										</div>
									</td>
								</tr>
							</tfoot>
						</table>
		            </div>		
		
		<?php } ?>
		
		
		
	</section>
<?php } else { ?>
	<section class="post-media">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( $thumbnail ); ?>
		</a>
		<?php if ( get_post_type( $post->ID ) == "album_review" ) { ?>
							
		<?php $review_rating = get_field('review_rating'); ?>
		<div class="earmilk-rating-bottle rating-<?php echo round($review_rating); ?>">
			<i class="earmilk-rating-<?php echo round($review_rating); ?>"><?php echo $review_rating; ?></i>
		</div>

		<?php } ?>
</section>
<?php
}
