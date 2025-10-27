<?php
/**
 * Pattern: Feature Grid
 * Category: features
 *
 * @package Callandor
 * @since 1.0.0
 */

return array(
	'title'         => __( '3-Column Feature Grid', 'callandor' ),
	'description'   => __( 'Showcase your key features or services in a clean three-column layout', 'callandor' ),
	'categories'    => array( 'features' ),
	'keywords'      => array( 'features', 'services', 'grid', 'columns', 'benefits' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"textAlign":"center","fontSize":"5xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-5-xl-font-size">' . __( 'Why Businesses Choose Us', 'callandor' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"lg"} -->
	<p class="has-text-align-center has-lg-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">' . __( 'We deliver results that matter to your bottom line', 'callandor' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-3-xl-font-size">' . __( 'Proven Results', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . __( 'Track record of delivering measurable ROI and business growth for our clients across diverse industries.', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-3-xl-font-size">' . __( 'Expert Team', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . __( 'Dedicated professionals with deep industry expertise committed to understanding and achieving your business goals.', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-3-xl-font-size">' . __( 'Ongoing Support', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . __( 'Continuous optimization and support to ensure your investment delivers sustained value and competitive advantage.', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
