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
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"6xl"} -->
	<h1 class="wp-block-heading has-text-align-center has-6-xl-font-size">' . __( 'Transform Your Business with Professional Solutions', 'callandor' ) . '</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"xl"} -->
	<p class="has-text-align-center has-xl-font-size">' . __( 'Deliver measurable results and drive growth with our proven strategies designed for ambitious SME businesses', 'callandor' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:button {"backgroundColor":"base","textColor":"primary","fontSize":"lg"} -->
		<div class="wp-block-button has-custom-font-size has-lg-font-size"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button">' . __( 'Get Started Today', 'callandor' ) . '</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"backgroundColor":"primary-dark","fontSize":"lg"} -->
		<div class="wp-block-button has-custom-font-size has-lg-font-size"><a class="wp-block-button__link has-primary-dark-background-color has-background wp-element-button">' . __( 'Learn More', 'callandor' ) . '</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
);
