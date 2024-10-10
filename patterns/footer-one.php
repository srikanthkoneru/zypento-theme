<?php
/**
 * Title: Footer One
 * Slug: zypento/footer-one
 * Categories: footer
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<!-- wp:group {"align":"full","className":"zypento-footer-one-logo","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-footer-one-logo has-accent-7-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:site-logo {"width":48,"shouldSyncIcon":true,"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"zypento-no-gap","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"color":{"background":"#1802be"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-no-gap has-background" style="background-color:#1802be;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
            <!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
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
