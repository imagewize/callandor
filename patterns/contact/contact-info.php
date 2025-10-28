<?php
/**
 * Pattern: Contact Information Section
 * Category: contact
 *
 * @package Callandor
 * @since 1.0.0
 */

return array(
	'title'         => __( 'Contact Information Section', 'callandor' ),
	'description'   => __( 'Professional contact section with office hours, phone, email, and address in a modern card layout', 'callandor' ),
	'categories'    => array( 'contact' ),
	'keywords'      => array( 'contact', 'address', 'phone', 'email', 'office', 'hours', 'location' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"5xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-5-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--20)">' . __( 'Get In Touch', 'callandor' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"main-accent","fontSize":"xl"} -->
	<p class="has-text-align-center has-main-accent-color has-text-color has-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">' . __( 'We\'re here to help. Reach out and let\'s discuss how we can support your business goals.', 'callandor' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"width":"1px","color":"#ebeced","radius":"8px"}},"backgroundColor":"tertiary"} -->
		<div class="wp-block-column has-tertiary-background-color has-background" style="border-color:#ebeced;border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-3-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">' . __( 'Office Hours', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontSize":"lg"} -->
			<p class="has-lg-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><strong>' . __( 'Monday - Friday', 'callandor' ) . '</strong><br>' . __( '9:00 AM - 5:00 PM', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
			<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0">' . __( 'Weekend appointments available upon request', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"width":"1px","color":"#ebeced","radius":"8px"}},"backgroundColor":"tertiary"} -->
		<div class="wp-block-column has-tertiary-background-color has-background" style="border-color:#ebeced;border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-3-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">' . __( 'Contact Details', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontSize":"lg"} -->
			<p class="has-lg-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><strong>' . __( 'Phone:', 'callandor' ) . '</strong> <a href="tel:+1234567890">+1 (234) 567-890</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontSize":"lg"} -->
			<p class="has-lg-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><strong>' . __( 'Email:', 'callandor' ) . '</strong> <a href="mailto:hello@example.com">hello@example.com</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"lg"} -->
			<p class="has-lg-font-size" style="margin-top:0"><strong>' . __( 'Response time:', 'callandor' ) . '</strong> ' . __( 'Within 24 hours', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"border":{"width":"1px","color":"#ebeced","radius":"8px"}},"backgroundColor":"tertiary"} -->
		<div class="wp-block-column has-tertiary-background-color has-background" style="border-color:#ebeced;border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-3-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">' . __( 'Visit Us', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontSize":"lg"} -->
			<p class="has-lg-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">' . __( '123 Business Street<br>Suite 100<br>City, State 12345', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
			<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0">' . __( 'Free parking available for visitors', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:button {"backgroundColor":"primary","textColor":"base","fontSize":"lg","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-button has-custom-font-size has-lg-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">' . __( 'Schedule a Consultation', 'callandor' ) . '</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
);
