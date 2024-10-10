<?php
/**
 * Title: Post navigation
 * Slug: zypento/hidden-post-navigation
 * Categories: services
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<?php

	global $post;
	$previous_post = get_previous_post();
	$next_post     = get_next_post();

?>

<!-- wp:group {"className":"zypento-single-content-nav-container","align":"full","layout":{"type":"constrained"},"typography":{"fontStyle":"normal","fontWeight":"700"}} -->
<div class="wp-block-group alignfull zypento-single-content-nav-container" style="font-style:normal;font-weight:700;">

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"className":"zypento-single-content-column zypento-single-content-nav"} -->
		<div class="wp-block-column zypento-single-content-column zypento-single-content-nav">

			<?php if ( $previous_post ) : ?>
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"4px","width":"2px"}},"borderColor":"accent-6","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group has-border-color has-accent-6-border-color" style="border-width:2px;border-radius:4px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);">
				<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"chevron"} /-->
			</div>
			<!-- /wp:group -->
			<?php endif; ?>

			<?php if ( $next_post ) : ?>
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"4px","width":"2px"}},"borderColor":"accent-6","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
			<div class="wp-block-group has-border-color has-accent-6-border-color" style="border-width:2px;border-radius:4px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:post-navigation-link {"showTitle":true,"arrow":"chevron"} /-->
			</div>
			<!-- /wp:group -->
			<?php endif; ?>

		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
