<?php
/**
 * Title: Footer Seven
 * Slug: zypento/footer-seven
 * Categories: footer
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-7-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
			<div class="wp-block-columns">

				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">

					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1.3"}},"textColor":"base"} -->
					<h3 class="wp-block-heading has-base-color has-text-color has-link-color" style="line-height:1.3"><?php esc_html_e( 'Subscribe to our', 'zypento' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:heading {"className":"zypento-no-gap","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"lineHeight":"1"},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"base-2","fontSize":"xx-large"} -->
					<h2 class="wp-block-heading zypento-no-gap has-base-2-color has-text-color has-link-color has-xx-large-font-size" style="padding-bottom:var(--wp--preset--spacing--10);line-height:1"><?php esc_html_e( 'Newsletter', 'zypento' ); ?></h2>
					<!-- /wp:heading -->

				</div>
				<!-- /wp:column -->

                <!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--10);flex-basis:60%">
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

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">

			<!-- wp:social-links {"iconColor":"base-2","iconColorValue":"#ffffff","size":"has-huge-icon-size","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex"}} -->
			<ul class="wp-block-social-links has-huge-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--10)">

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

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"padding":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"8px","width":"0px","style":"none"}},"backgroundColor":"accent-8"} -->
	<div class="wp-block-columns alignwide has-accent-8-background-color has-background" style="border-style:none;border-width:0px;border-radius:8px;margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

		<!-- wp:column {"width":"50%","className":"zypento-footer-five-address"} -->
		<div class="wp-block-column zypento-footer-five-address" style="flex-basis:50%">

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1"}},"textColor":"base"} -->
			<p class="has-base-color has-text-color has-link-color" style="line-height:1"><?php esc_html_e( 'Address', 'zypento' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"right":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.2"}},"textColor":"base-2"} -->
			<h3 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--40);line-height:1.2"><?php esc_html_e( '302 Alexander Ave, Donalsonville, Georgia(GA), 39845', 'zypento' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"zypento-icon"} -->
			<p class="zypento-icon"></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%","className":"zypento-footer-five-address-email"} -->
		<div class="wp-block-column zypento-footer-five-address-email" style="flex-basis:25%">

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1"}},"textColor":"base"} -->
			<p class="has-base-color has-text-color has-link-color" style="line-height:1"><?php esc_html_e( 'Email', 'zypento' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"lineHeight":"1.1"}},"textColor":"base-2"} -->
			<h4 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="line-height:1.1"><?php esc_html_e( 'hello@zypento.com', 'zypento' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"zypento-icon"} -->
			<p class="zypento-icon"></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%","className":"zypento-footer-five-address-phone"} -->
		<div class="wp-block-column zypento-footer-five-address-phone" style="flex-basis:25%">

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1"}},"textColor":"base"} -->
			<p class="has-base-color has-text-color has-link-color" style="line-height:1"><?php esc_html_e( 'Phone', 'zypento' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"lineHeight":"1.1"}},"textColor":"base-2"} -->
			<h4 class="wp-block-heading has-base-2-color has-text-color has-link-color" style="line-height:1.1"><?php esc_html_e( '(627) 434 2345', 'zypento' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"zypento-icon"} -->
			<p class="zypento-icon"></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--40)">

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

<!-- wp:group {"align":"full","className":"zypento-no-gap zypento-footer-six-bottom","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"accent-8","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-no-gap zypento-footer-six-bottom has-accent-8-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">

	<!-- wp:columns {"align":"wide","style":{"border":{"top":{"width":"0px","style":"none"},"right":{},"bottom":{},"left":{}},"spacing":{"padding":{"top":"0"}}}} -->
	<div class="wp-block-columns alignwide" style="border-top-style:none;border-top-width:0px;padding-top:0">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
			<p class="has-base-color has-text-color has-link-color"><?php esc_html_e( 'All Rights Reserved', 'zypento' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:list {"className":"zypento-footer-bottom-links"} -->
			<ul class="wp-block-list zypento-footer-bottom-links">

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

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
