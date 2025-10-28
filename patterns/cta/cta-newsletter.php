<?php
/**
 * Pattern: CTA Newsletter Signup
 * Category: cta
 *
 * @package Callandor
 * @since 1.0.0
 */

return array(
	'title'         => __( 'Newsletter Signup CTA', 'callandor' ),
	'description'   => __( 'Call-to-action block for newsletter subscription or lead capture', 'callandor' ),
	'categories'    => array( 'cta' ),
	'keywords'      => array( 'cta', 'newsletter', 'signup', 'subscribe', 'lead-generation' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","backgroundColor":"primary-accent","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-primary-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"fontSize":"4xl"} -->
			<h2 class="wp-block-heading has-4-xl-font-size">' . __( 'Get Weekly Business Growth Insights', 'callandor' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"lg"} -->
			<p class="has-lg-font-size">' . __( 'Join 5,000+ business owners receiving actionable strategies, industry trends, and exclusive resources directly to their inbox.', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","width":100,"fontSize":"lg"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-lg-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button">' . __( 'Subscribe Now', 'callandor' ) . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"align":"center","fontSize":"sm"} -->
			<p class="has-text-align-center has-sm-font-size">' . __( 'No spam. Unsubscribe anytime.', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
