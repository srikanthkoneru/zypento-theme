<?php
/**
 * Title: Footer Two
 * Slug: zypento/footer-two
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



<!-- wp:group {"align":"full","className":"zypento-no-gap","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","top":"var:preset|spacing|50"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-no-gap has-accent-7-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"20%","className":"zypento-footer-two-logo"} -->
		<div class="wp-block-column zypento-footer-two-logo" style="flex-basis:20%">
			<!-- wp:site-logo {"width":48,"shouldSyncIcon":true} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","className":"zypento-footer-two-links"} -->
		<div class="wp-block-column zypento-footer-two-links" style="flex-basis:50%">
			<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns is-not-stacked-on-mobile" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
					<h3 class="wp-block-heading has-base-2-color has-text-color has-link-color"><?php esc_html_e( 'Links', 'zypento' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:list {"className":"zypento-footer-two-menu","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
					<ul class="wp-block-list zypento-footer-two-menu has-base-color has-text-color has-link-color">
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'About Us', 'zypento' ); ?></a></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Our Team', 'zypento' ); ?></a></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Case Studies', 'zypento' ); ?></a></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Careers', 'zypento' ); ?></a></li>
						<!-- /wp:list-item -->

					</ul>
					<!-- /wp:list -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
					<h3 class="wp-block-heading has-base-2-color has-text-color has-link-color"><?php esc_html_e( 'Resources', 'zypento' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:list {"className":"zypento-footer-two-menu","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
					<ul class="wp-block-list zypento-footer-two-menu has-base-color has-text-color has-link-color">
						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'About Us', 'zypento' ); ?></a></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Our Team', 'zypento' ); ?></a></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Case Studies', 'zypento' ); ?></a></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><a href="#"><?php esc_html_e( 'Careers', 'zypento' ); ?></a></li>
						<!-- /wp:list-item -->

					</ul>
					<!-- /wp:list -->

				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%","className":"zypento-footer-two-address"} -->
		<div class="wp-block-column zypento-footer-two-address" style="flex-basis:30%">
			<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
			<h3 class="wp-block-heading has-base-2-color has-text-color has-link-color"><?php esc_html_e( 'Address', 'zypento' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
			<p class="has-base-color has-text-color has-link-color"><?php esc_html_e( '737 E Crawford St', 'zypento' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
			<p class="has-base-color has-text-color has-link-color"><?php esc_html_e( 'Salina, Kansas(KS), 67401', 'zypento' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"zypento-footer-two-email","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base"} -->
			<p class="zypento-footer-two-email has-base-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e( '(610) 447-0216', 'zypento' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
			<p class="has-base-color has-text-color has-link-color"><?php esc_html_e( 'contact@company.com', 'zypento' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"className":"is-style-logos-only zypento-footer-two-address-social"} -->
			<ul class="wp-block-social-links is-style-logos-only zypento-footer-two-address-social">
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"youtube"} /-->
			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

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

