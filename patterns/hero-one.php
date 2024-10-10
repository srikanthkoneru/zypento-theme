<?php
/**
 * Title: Hero One
 * Slug: zypento/hero-one
 * Categories: zypento
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<!-- wp:group {"align":"full","className":"zypento-hero-one zypento-no-gap","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"0"}}},"backgroundColor":"accent-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-hero-one zypento-no-gap has-accent-6-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:0">

	<!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"35%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","right":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);flex-basis:35%">

			<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-base-2-color has-text-color has-link-color has-xx-large-font-size">
                <?php esc_html_e( 'Manage Your Photography Business with Ease', 'zypento' ); ?>
            </h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"base"} -->
			<p class="has-base-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
                <?php esc_html_e( 'The all-in-one CRM designed specifically for photographers to handle clients, projects, bookings, and more!', 'zypento' ); ?>
            </p>
			<!-- /wp:paragraph -->

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

		<!-- wp:column {"verticalAlignment":"bottom","width":"65%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:65%">

			<!-- wp:image {"id":2096,"width":"837px","height":"600px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"right"} -->
			<figure class="wp-block-image alignright size-full is-resized">
				<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/900-600-20.webp' ) ); ?>" alt="" class="wp-image-2096" style="object-fit:cover;width:837px;height:600px"/>
			</figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
