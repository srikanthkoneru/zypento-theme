<?php
/**
 * Title: Pricing One
 * Slug: zypento/pricing-one
 * Categories: zypento
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"accent-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-6-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

    <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
    <h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color"><?php esc_html_e( 'Pricing Plans', 'zypento' ); ?></h3>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
    <h2 class="wp-block-heading has-text-align-center has-base-2-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--60)">
        <?php esc_html_e( 'Choose the plan that fits your business, with flexible pricing options designed to grow with your photography studio.', 'zypento' ); ?>
    </h2>
    <!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","className":"zypento-pricing-one","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide zypento-pricing-one">

		<!-- wp:column {"className":"zypento-pricing-one-plan","backgroundColor":"base-2"} -->
		<div class="wp-block-column zypento-pricing-one-plan has-base-2-background-color has-background">

			<!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}}},"textColor":"accent-6","fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-accent-6-color has-text-color has-link-color has-x-large-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-6-color"><?php esc_html_e( 'Automation', 'zypento' ); ?></mark>
			</h3>
			<!-- /wp:heading -->

			<!-- wp:columns {"isStackedOnMobile":false,"className":"zypento-pricing-one-price"} -->
			<div class="wp-block-columns is-not-stacked-on-mobile zypento-pricing-one-price">

				<!-- wp:column -->
				<div class="wp-block-column"></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:paragraph {"align":"right","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"lineHeight":"1.1"}},"fontSize":"large","fontFamily":"heading"} -->
					<p class="has-text-align-right has-heading-font-family has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.1">
						<?php echo sprintf( '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-contrast-color">%1$s</mark><strong>%2$s</strong><strong>%3$s</strong>/%2$s', esc_html_e( '$', 'zypento' ), esc_html_e( '49', 'zypento' ), esc_html_e( '/m', 'zypento' ) ); ?>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"right","className":"zypento-pricing-one-first-sub-price","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
					<p class="has-text-align-right zypento-pricing-one-first-sub-price" style="padding-right:0;padding-left:0"><?php esc_html_e( 'plus 50c/transaction', 'zypento' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"className":"zypento-no-gap","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns zypento-no-gap" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:heading {"level":5} -->
					<h5 class="wp-block-heading"><?php esc_html_e( 'What\'s included?', 'zypento' ); ?></h5>
					<!-- /wp:heading -->

					<!-- wp:list {"className":"zypento-pricing-one-features"} -->
					<ul class="wp-block-list zypento-pricing-one-features">

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Dignissim dapibus', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Fusce parturient', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Curabitur faucibus', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Turpis ultricies', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Posuere torquent', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

					</ul>
					<!-- /wp:list -->

					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">

						<!-- wp:button {"textAlign":"center","textColor":"accent-6","width":100,"className":"is-style-outline","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}}},"fontSize":"medium"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-outline has-medium-font-size" style="font-style:normal;font-weight:700">

							<a class="wp-block-button__link has-accent-6-color has-text-color has-link-color has-text-align-center wp-element-button" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><strong><?php esc_html_e( 'Get Notified', 'zypento' ); ?></strong></a>

						</div>
						<!-- /wp:button -->

					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"zypento-pricing-one-plan","backgroundColor":"base-2"} -->
		<div class="wp-block-column zypento-pricing-one-plan has-base-2-background-color has-background">

			<!-- wp:heading {"level":3,"className":"zypento-pricing-one-name-alt","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}}},"textColor":"accent-6","fontSize":"x-large"} -->
			<h3 class="wp-block-heading zypento-pricing-one-name-alt has-accent-6-color has-text-color has-link-color has-x-large-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
				<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-6-color"><?php esc_html_e( 'Automation', 'zypento' ); ?></mark>
			</h3>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":3,"className":"zypento-no-gap","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}},"typography":{"lineHeight":"1.6"}},"textColor":"accent-6","fontSize":"x-large"} -->
			<h3 class="wp-block-heading zypento-no-gap has-accent-6-color has-text-color has-link-color has-x-large-font-size" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30);line-height:1.6">
				<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-6-color"><?php esc_html_e( 'Website', 'zypento' ); ?></mark>
			</h3>
			<!-- /wp:heading -->

			<!-- wp:columns {"isStackedOnMobile":false,"className":"zypento-pricing-one-price"} -->
			<div class="wp-block-columns is-not-stacked-on-mobile zypento-pricing-one-price">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"lineHeight":"1.1"}},"fontSize":"large","fontFamily":"heading"} -->
					<p class="has-text-align-left has-heading-font-family has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.1">
						<?php echo sprintf( '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-contrast-color">%1$s</mark><strong>%2$s</strong>', esc_html_e( '$', 'zypento' ), esc_html_e( '1500', 'zypento' ), esc_html_e( '/m', 'zypento' ) ); ?>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"left","className":"zypento-pricing-one-first-sub-price","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
					<p class="has-text-align-left zypento-pricing-one-first-sub-price" style="padding-right:0;padding-left:0"><?php esc_html_e( 'Setup Fee', 'zypento' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"zypento-pricing-one-price-icon"} -->
					<p class="zypento-pricing-one-price-icon"></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:paragraph {"align":"right","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"lineHeight":"1.1"}},"fontSize":"large","fontFamily":"heading"} -->
					<p class="has-text-align-right has-heading-font-family has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.1">
						<?php echo sprintf( '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-contrast-color">%1$s</mark><strong>%2$s</strong><strong>%3$s</strong>/%2$s', esc_html_e( '$', 'zypento' ), esc_html_e( '49', 'zypento' ), esc_html_e( '/m', 'zypento' ) ); ?>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"right","className":"zypento-pricing-one-first-sub-price","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
					<p class="has-text-align-right zypento-pricing-one-first-sub-price" style="padding-right:0;padding-left:0"><?php esc_html_e( 'plus 50c/transaction', 'zypento' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"className":"zypento-no-gap","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns zypento-no-gap" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:heading {"level":5} -->
					<h5 class="wp-block-heading"><?php esc_html_e( 'What\'s included?', 'zypento' ); ?></h5>
					<!-- /wp:heading -->

					<!-- wp:list {"className":"zypento-pricing-one-features"} -->
					<ul class="wp-block-list zypento-pricing-one-features">

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Dignissim dapibus', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Fusce parturient', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Curabitur faucibus', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Turpis ultricies', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Posuere torquent', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

					</ul>
					<!-- /wp:list -->

					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">

						<!-- wp:button {"textAlign":"center","backgroundColor":"accent-7","width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-medium-font-size" style="font-style:normal;font-weight:700">
							<a class="wp-block-button__link has-accent-7-background-color has-background has-text-align-center wp-element-button" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><strong><?php esc_html_e( 'Get Notified', 'zypento' ); ?></strong></a>
						</div>
						<!-- /wp:button -->

					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"zypento-pricing-one-plan","backgroundColor":"base-2"} -->
		<div class="wp-block-column zypento-pricing-one-plan has-base-2-background-color has-background">

			<!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}}},"textColor":"accent-6","fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-accent-6-color has-text-color has-link-color has-x-large-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-6-color"><?php esc_html_e( 'Growth', 'zypento' ); ?></mark>
			</h3>
			<!-- /wp:heading -->

			<!-- wp:columns {"isStackedOnMobile":false,"className":"zypento-pricing-one-price"} -->
			<div class="wp-block-columns is-not-stacked-on-mobile zypento-pricing-one-price">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"lineHeight":"1.1"}},"fontSize":"large","fontFamily":"heading"} -->
					<p class="has-text-align-left has-heading-font-family has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.1">
						<?php echo sprintf( '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-contrast-color">%1$s</mark><strong>%2$s</strong>', esc_html_e( '$', 'zypento' ), esc_html_e( '1500', 'zypento' ) ); ?>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"left","className":"zypento-pricing-one-first-sub-price","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
					<p class="has-text-align-left zypento-pricing-one-first-sub-price" style="padding-right:0;padding-left:0"><?php esc_html_e( 'Setup Fee', 'zypento' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"zypento-pricing-one-price-icon"} -->
					<p class="zypento-pricing-one-price-icon"></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:paragraph {"align":"right","className":"zypento-pricing-one-first-sub-price","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
					<p class="has-text-align-right zypento-pricing-one-first-sub-price" style="padding-right:0;padding-left:0"><?php esc_html_e( 'starts from', 'zypento' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"right","className":"zypento-no-gap","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"lineHeight":"1.1"}},"fontSize":"large","fontFamily":"heading"} -->
					<p class="has-text-align-right zypento-no-gap has-heading-font-family has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.1">
						<?php echo sprintf( '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-contrast-color">%1$s</mark><strong>%2$s</strong>/%3$s', esc_html_e( '$', 'zypento' ), esc_html_e( '299', 'zypento' ), esc_html_e( '/m', 'zypento' ) ); ?>
					</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"className":"zypento-no-gap","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns zypento-no-gap" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:heading {"level":5} -->
					<h5 class="wp-block-heading"><?php esc_html_e( 'What\'s included?', 'zypento' ); ?></h5>
					<!-- /wp:heading -->

					<!-- wp:list {"className":"zypento-pricing-one-features"} -->
					<ul class="wp-block-list zypento-pricing-one-features">

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Dignissim dapibus', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Fusce parturient', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Curabitur faucibus', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Turpis ultricies', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li><?php esc_html_e( 'Posuere torquent', 'zypento' ); ?></li>
						<!-- /wp:list-item -->

					</ul>
					<!-- /wp:list -->

					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">

						<!-- wp:button {"textAlign":"center","textColor":"accent-6","width":100,"className":"is-style-outline","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}}},"fontSize":"medium"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-outline has-medium-font-size" style="font-style:normal;font-weight:700">
							<a class="wp-block-button__link has-accent-6-color has-text-color has-link-color has-text-align-center wp-element-button" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
								<strong><?php esc_html_e( 'Get Notified', 'zypento' ); ?></strong></a>
						</div>
						<!-- /wp:button -->

					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
