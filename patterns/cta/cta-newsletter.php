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
	'content'       => '<!-- wp:group {"align":"full","backgroundColor":"primary-accent","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-primary-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"textColor":"main","fontSize":"5xl","fontFamily":"open-sans","style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}}} -->
			<h2 class="wp-block-heading has-main-color has-text-color has-link-color has-open-sans-font-family has-5-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--40);line-height:1.2">' . __( 'Get Weekly Business Growth Insights', 'callandor' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"lg","fontFamily":"open-sans","textColor":"main-accent","style":{"spacing":{"margin":{"bottom":"0"}},"typography":{"lineHeight":"1.6"}}} -->
			<p class="has-main-accent-color has-text-color has-open-sans-font-family has-lg-font-size" style="margin-bottom:0;line-height:1.6">' . __( 'Join 5,000+ business owners receiving actionable strategies, industry trends, and exclusive resources directly to their inbox.', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"8px"}},"fontSize":"lg","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-open-sans-font-family has-lg-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">' . __( 'Subscribe Now', 'callandor' ) . '</a></div>
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
