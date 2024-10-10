<?php
/**
 * Title: Footer Eight
 * Slug: zypento/footer-eight
 * Categories: footer
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<!-- wp:group {"align":"full","className":"zypento-no-gap","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|60"}},"color":{"gradient":"linear-gradient(0deg,rgb(36,12,212) 0%,rgb(36,12,212) 37%,rgba(36,12,212,0) 37%,rgba(36,12,212,0) 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-no-gap has-background" style="background:linear-gradient(0deg,rgb(36,12,212) 0%,rgb(36,12,212) 37%,rgba(36,12,212,0) 37%,rgba(36,12,212,0) 100%);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base-2"} -->
	<div class="wp-block-columns alignwide has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
			<h4 class="wp-block-heading has-contrast-2-color has-text-color has-link-color"><?php esc_html_e( 'Get More Tips', 'zypento' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Subscribe to our newsletter', 'zypento' ); ?></h2>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:zypento/subscribe-one -->
			<div class="wp-block-zypento-subscribe-one">
				<h4>Email Address</h4>
				<p>
					<input type="text" value="" placeholder="hello@example.com"/>
					<span>Submit</span>
				</p>
			</div>
			<!-- /wp:zypento/subscribe-one -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"zypento-footer-one-logo","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-footer-one-logo has-accent-7-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:site-logo {"width":48,"shouldSyncIcon":true,"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"zypento-no-gap zypento-footer-two-bottom-nav","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"color":{"background":"#1802be"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-no-gap zypento-footer-two-bottom-nav has-background" style="background-color:#1802be;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
			<h2 class="wp-block-heading alignwide has-base-2-color has-text-color has-link-color has-small-font-size">
				<?php echo sprintf( '%1$s <a href="https://wordpress.org">%2$s</a>', esc_html__( 'Powered by', 'zypento' ), esc_html__( 'WordPress', 'zypento' ) ); ?>
			</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
			<p class="has-text-align-right has-base-2-color has-text-color has-link-color">
				<?php echo sprintf( '%1$s | <a href="%2$s">%3$s</a>', esc_html__( 'All Rights Reserved', 'zypento' ), esc_url( site_url( '/privacy-policy/', 'https' ) ), esc_html__( 'WordPress', 'zypento' ) ); ?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

