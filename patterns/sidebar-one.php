<?php
/**
 * Title: Sidebar One
 * Slug: zypento/sidebar-one
 * Categories: zypento
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<!-- wp:group {"className":"tektangle-sidebar-recent","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"base-3","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group tektangle-sidebar-recent has-base-3-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

    <!-- wp:search {"label":"Search","buttonText":"Search","className":"zypento-sidebar-search"} /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"tektangle-sidebar-recent","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"base-3","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group tektangle-sidebar-recent has-base-3-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

	<!-- wp:heading {"className":"tektangle-sidebar-recent-heading","fontSize":"large"} -->
	<h2 class="wp-block-heading tektangle-sidebar-recent-heading has-large-font-size"><?php esc_html_e( 'Recent Posts', 'zypento' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":31,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-small-posts","name":"Small image and title"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

		<!-- wp:columns {"verticalAlignment":"top","className":"tektangle-sidebar-recent-item"} -->
		<div class="wp-block-columns are-vertically-aligned-top tektangle-sidebar-recent-item">

			<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
                <!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"6px"}}} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%">
				<!-- wp:post-date {"format":"M j, Y"} /-->
				<!-- wp:post-title {"level":4,"isLink":true,"className":"zypento-no-gap"} /-->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"zypento-sidebar-categories","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"base-3","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group zypento-sidebar-categories has-base-3-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

	<!-- wp:heading {"className":"tektangle-sidebar-recent-heading","fontSize":"large"} -->
	<h2 class="wp-block-heading tektangle-sidebar-recent-heading has-large-font-size"><?php esc_html_e( 'Categories', 'zypento' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:categories {"showOnlyTopLevel":true} /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"zypento-sidebar-tag-cloud","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"base-3","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group zypento-sidebar-tag-cloud has-base-3-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

	<!-- wp:heading {"className":"tektangle-sidebar-recent-heading","fontSize":"large"} -->
	<h2 class="wp-block-heading tektangle-sidebar-recent-heading has-large-font-size"><?php esc_html_e( 'Tags', 'zypento' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:tag-cloud /-->

</div>
<!-- /wp:group -->

