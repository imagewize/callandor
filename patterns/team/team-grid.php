<?php
/**
 * Pattern: Team Member Grid
 * Category: team
 *
 * @package Callandor
 * @since 1.0.0
 */

return array(
	'title'         => __( 'Team Member Grid', 'callandor' ),
	'description'   => __( 'Showcase your team with professional profiles in a clean three-column grid layout', 'callandor' ),
	'categories'    => array( 'team' ),
	'keywords'      => array( 'team', 'staff', 'people', 'about', 'employees', 'members', 'profiles' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"5xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-5-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--20)">' . __( 'Meet Our Team', 'callandor' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"main-accent","fontSize":"xl"} -->
		<p class="has-text-align-center has-main-accent-color has-text-color has-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">' . __( 'Dedicated professionals committed to delivering exceptional results for your business', 'callandor' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="' . CALLANDOR_PLUGIN_URL . 'assets/images/patterns/team-member-1.jpg" alt="' . esc_attr__( 'Team member photo', 'callandor' ) . '" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"main","fontSize":"2xl"} -->
				<h3 class="wp-block-heading has-main-color has-text-color has-2-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">' . __( 'Sarah Johnson', 'callandor' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"base"} -->
				<p class="has-primary-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><strong>' . __( 'Chief Executive Officer', 'callandor' ) . '</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
				<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0">' . __( 'With 15+ years of industry experience, Sarah leads our strategic vision and drives innovation across all operations.', 'callandor' ) . '</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="' . CALLANDOR_PLUGIN_URL . 'assets/images/patterns/team-member-2.jpg" alt="' . esc_attr__( 'Team member photo', 'callandor' ) . '" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"main","fontSize":"2xl"} -->
				<h3 class="wp-block-heading has-main-color has-text-color has-2-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">' . __( 'Michael Chen', 'callandor' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"base"} -->
				<p class="has-primary-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><strong>' . __( 'Head of Operations', 'callandor' ) . '</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
				<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0">' . __( 'Michael ensures seamless execution and operational excellence, bringing efficiency and quality to every project.', 'callandor' ) . '</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="' . CALLANDOR_PLUGIN_URL . 'assets/images/patterns/team-member-3.jpg" alt="' . esc_attr__( 'Team member photo', 'callandor' ) . '" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"main","fontSize":"2xl"} -->
				<h3 class="wp-block-heading has-main-color has-text-color has-2-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">' . __( 'Emily Rodriguez', 'callandor' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"base"} -->
				<p class="has-primary-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><strong>' . __( 'Client Success Director', 'callandor' ) . '</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
				<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0">' . __( 'Emily builds lasting client relationships and ensures every partnership delivers exceptional value and measurable success.', 'callandor' ) . '</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
