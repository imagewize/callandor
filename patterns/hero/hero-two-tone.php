<?php
/**
 * Pattern: Hero Two-Tone
 * Category: hero
 *
 * @package Callandor
 * @since 1.0.0
 */

return array(
	'title'         => __( 'Hero Section Two-Tone', 'callandor' ),
	'description'   => __( 'Modern hero section with two-tone heading, dual CTA buttons, and optional image - responsive design with proper spacing', 'callandor' ),
	'categories'    => array( 'hero', 'cta' ),
	'keywords'      => array( 'hero', 'call-to-action', 'landing', 'business', 'header', 'two-tone', 'modern' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"4.5rem","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontFamily":"open-sans"} -->
			<h1 class="wp-block-heading has-open-sans-font-family" style="margin-bottom:var(--wp--preset--spacing--40);font-size:4.5rem;line-height:1.1">' . __( 'Hero ', 'callandor' ) . '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">' . __( 'Section', 'callandor' ) . '</mark> ' . __( '2.0', 'callandor' ) . '</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"typography":{"fontSize":"1.125rem","lineHeight":"1.6"}},"textColor":"main-accent","fontFamily":"open-sans"} -->
			<p class="has-main-accent-color has-text-color has-open-sans-font-family" style="margin-bottom:var(--wp--preset--spacing--50);font-size:1.125rem;line-height:1.6">' . __( 'Transform your business with proven strategies that deliver measurable results. Our solutions are designed for ambitious companies ready to scale.', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"8px"}},"fontSize":"lg","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-font-size has-open-sans-font-family has-lg-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">' . __( 'Getting started', 'callandor' ) . '</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"tertiary","textColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"8px"}},"fontSize":"lg","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-font-size has-open-sans-font-family has-lg-font-size"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">' . __( 'Contribute', 'callandor' ) . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=1200" alt="' . esc_attr__( 'Hero background', 'callandor' ) . '" style="border-radius:12px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
