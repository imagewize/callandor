<?php
/**
 * Pattern: Testimonial Card
 * Category: testimonials
 *
 * @package Callandor
 * @since 1.0.0
 */

return array(
	'title'         => __( 'Client Testimonial Card', 'callandor' ),
	'description'   => __( 'Single testimonial with client quote, name, and company', 'callandor' ),
	'categories'    => array( 'testimonials' ),
	'keywords'      => array( 'testimonial', 'review', 'client', 'quote', 'social-proof' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","fontSize":"5xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-5-xl-font-size">' . __( 'What Our Clients Say', 'callandor' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"width":"1px","color":"#ebeced"}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-border-color has-base-background-color has-background" style="border-color:#ebeced;border-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"fontSize":"2xl"} -->
			<p class="has-2-xl-font-size">"' . __( 'Working with this team has transformed our approach to customer acquisition. We\'ve seen a 150% increase in qualified leads within just three months.', 'callandor' ) . '"</p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"backgroundColor":"border-light"} -->
			<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"lg"} -->
			<p class="has-primary-color has-text-color has-lg-font-size" style="font-weight:600">' . __( 'Sarah Mitchell', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"main-accent"} -->
			<p class="has-main-accent-color has-text-color">' . __( 'CEO, TechVenture Solutions', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"width":"1px","color":"#ebeced"}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-border-color has-base-background-color has-background" style="border-color:#ebeced;border-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"fontSize":"2xl"} -->
			<p class="has-2-xl-font-size">"' . __( 'The ROI speaks for itself. Professional service, strategic thinking, and genuine partnership. Couldn\'t recommend them more highly.', 'callandor' ) . '"</p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"backgroundColor":"border-light"} -->
			<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"lg"} -->
			<p class="has-primary-color has-text-color has-lg-font-size" style="font-weight:600">' . __( 'Michael Chen', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"main-accent"} -->
			<p class="has-main-accent-color has-text-color">' . __( 'Director of Marketing, Global Innovations Inc.', 'callandor' ) . '</p>
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
