<?php
/**
 * Pattern: Hero with CTA
 * Category: hero
 *
 * @package Callandor
 * @since 1.0.0
 */

return array(
	'title'         => __( 'Hero Section with Call to Action', 'callandor' ),
	'description'   => __( 'Business-focused hero section with headline, description, and prominent call-to-action button', 'callandor' ),
	'categories'    => array( 'hero', 'cta' ),
	'keywords'      => array( 'hero', 'call-to-action', 'landing', 'business', 'header' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"textColor":"main","fontSize":"5xl","fontFamily":"open-sans"} -->
		<h1 class="wp-block-heading has-text-align-center has-main-color has-text-color has-open-sans-font-family has-5-xl-font-size">' . __( 'Launch your idea with confidence', 'callandor' ) . '</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontSize":"lg","fontFamily":"open-sans"} -->
		<p class="has-text-align-center has-main-accent-color has-text-color has-open-sans-font-family has-lg-font-size">' . __( 'Build your product, attract users, and grow faster with our powerful tools designed for startups.', 'callandor' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:button {"backgroundColor":"main","textColor":"base","fontSize":"base"} -->
		<div class="wp-block-button has-custom-font-size has-base-font-size"><a class="wp-block-button__link has-base-color has-main-background-color has-text-color has-background wp-element-button">' . __( 'Get Started', 'callandor' ) . '</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"backgroundColor":"base","textColor":"primary","style":{"border":{"width":"2px"}},"borderColor":"main","className":"is-style-outline","fontSize":"base"} -->
		<div class="wp-block-button has-custom-font-size has-base-font-size is-style-outline"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background has-border-color has-main-border-color wp-element-button" style="border-width:2px">' . __( 'Learn More', 'callandor' ) . '</a></div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
