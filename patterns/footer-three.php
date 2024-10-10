<?php
/**
 * Title: Footer Three
 * Slug: zypento/footer-three
 * Categories: footer
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<!-- wp:group {"align":"full","className":"zypento-no-gap","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|60"}}},"gradient":"zypento-12","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-no-gap has-zypento-12-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
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

<!-- wp:group {"align":"full","className":"zypento-no-gap","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70","top":"var:preset|spacing|40"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-no-gap has-accent-7-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
			<h3 class="wp-block-heading has-base-2-color has-text-color has-link-color"><?php esc_html_e( 'Products', 'zypento' ); ?></h3>
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
			<h3 class="wp-block-heading has-base-2-color has-text-color has-link-color"><?php esc_html_e( 'Services', 'zypento' ); ?></h3>
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
			<h3 class="wp-block-heading has-base-2-color has-text-color has-link-color"><?php esc_html_e( 'Store', 'zypento' ); ?></h3>
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
			<h3 class="wp-block-heading has-base-2-color has-text-color has-link-color"><?php esc_html_e( 'Company', 'zypento' ); ?></h3>
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
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"zypento-no-gap zypento-footer-two-bottom","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"accent-8","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-no-gap zypento-footer-two-bottom has-accent-8-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">

	<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top">

		<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
            <!-- wp:site-logo {"width":48} /-->
        </div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%">

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
			<p class="has-text-align-center has-base-2-color has-text-color has-link-color"><?php esc_html_e( 'All Rights Reserved', 'zypento' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"zypento-footer-three-bottom-nav"} -->
			<ul class="wp-block-list zypento-footer-three-bottom-nav">

				<!-- wp:list-item -->
				<li><a href="#"><?php esc_html_e( 'Terms of Use', 'zypento' ); ?></a></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><a href="#"><?php esc_html_e( 'Privacy Policy', 'zypento' ); ?></a></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><a href="#"><?php esc_html_e( 'Sitemap', 'zypento' ); ?></a></li>
				<!-- /wp:list-item -->

			</ul>
			<!-- /wp:list -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">

			<!-- wp:social-links {"iconColor":"base-2","iconColorValue":"#ffffff","size":"has-large-icon-size","className":"is-style-logos-only zypento-footer-three-address-social"} -->
			<ul class="wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only zypento-footer-three-address-social">

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
