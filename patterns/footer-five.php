<?php
/**
 * Title: Footer Five
 * Slug: zypento/footer-five
 * Categories: footer
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-7-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

	<!-- wp:columns {"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|accent-10","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide" style="border-bottom-color:var(--wp--preset--color--accent-10);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)">

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%"><!-- wp:site-logo {"width":48} /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">

			<!-- wp:social-links {"iconColor":"base-2","iconColorValue":"#ffffff","size":"has-large-icon-size","className":"is-style-logos-only zypento-footer-three-address-social","layout":{"type":"flex","justifyContent":"right"}} -->
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

<!-- wp:group {"align":"full","className":"zypento-no-gap zypento-footer-four-bottom","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull zypento-no-gap zypento-footer-four-bottom has-accent-7-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
			<p class="has-base-color has-text-color has-link-color"><?php esc_html_e( 'All Rights Reserved', 'zypento' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

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

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
