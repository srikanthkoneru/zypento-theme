<?php
/**
 * Title: Hero Two
 * Slug: zypento/hero-two
 * Categories: zypento
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<!-- wp:group {"align":"full","className":"zypento-hero-two zypento-no-gap","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"accent-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-hero-two zypento-no-gap has-accent-6-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color has-xx-large-font-size">
                <?php esc_html_e( 'Manage Your Awesome Business with Ease', 'zypento' ); ?>
            </h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"base"} -->
			<p class="has-base-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
                <?php esc_html_e( 'The all-in-one CRM designed specifically for your business to handle clients, projects, bookings, and more!', 'zypento' ); ?>
            </p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"zypento-hero-two-list","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base"} -->
			<ul style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:600" class="wp-block-list zypento-hero-two-list has-base-color has-text-color has-link-color">

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Streamline client management', 'zypento' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Automate bookings and reminders', 'zypento' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Deliver great service with ease', 'zypento' ); ?></li>
				<!-- /wp:list-item -->

			</ul>
			<!-- /wp:list -->

			<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
			<h4 class="wp-block-heading has-base-color has-text-color has-link-color">
                <?php esc_html_e( 'Join the wait list...', 'zypento' ); ?>
            </h4>
			<!-- /wp:heading -->

            <!-- wp:zypento/subscribe-two -->
            <div class="wp-block-zypento-subscribe-two">
                <p class="zypento-form">
                    <input type="text" value="" placeholder="hello@example.com"/>
                    <span class="zypento-processing">Wait...</span>
                    <span class="zypento-submit">Submit</span>
                </p>
                <p class="zypento-message"></p>
            </div>
            <!-- /wp:zypento/subscribe-two -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"id":2096,"sizeSlug":"full","linkDestination":"none","className":"zypento-hero-two-image"} -->
			<figure class="wp-block-image size-full zypento-hero-two-image">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/800-900-grey.webp' ) ); ?>" alt="" class="wp-image-2096"/>
			</figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
