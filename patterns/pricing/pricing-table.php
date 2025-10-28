<?php
/**
 * Pattern: Pricing Table
 * Category: pricing
 *
 * @package Callandor
 * @since 1.0.0
 */

return array(
	'title'         => __( '3-Column Pricing Table', 'callandor' ),
	'description'   => __( 'Service or product pricing comparison with three tiers', 'callandor' ),
	'categories'    => array( 'pricing' ),
	'keywords'      => array( 'pricing', 'plans', 'packages', 'comparison', 'services' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","fontSize":"5xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-5-xl-font-size">' . __( 'Choose Your Plan', 'callandor' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"lg"} -->
		<p class="has-text-align-center has-lg-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">' . __( 'Flexible packages designed to scale with your business', 'callandor' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"width":"1px"}},"borderColor":"border-light","backgroundColor":"base"} -->
		<div class="wp-block-column has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-text-align-center has-3-xl-font-size">' . __( 'Starter', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}},"fontSize":"5xl"} -->
			<p class="has-text-align-center has-5-xl-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40)"><strong>' . __( '$499', 'callandor' ) . '</strong><span style="font-size:1rem">' . __( '/month', 'callandor' ) . '</span></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-checkmark-list"} -->
			<ul class="is-style-checkmark-list">
				<li>' . __( 'Up to 10,000 monthly visitors', 'callandor' ) . '</li>
				<li>' . __( 'Basic analytics dashboard', 'callandor' ) . '</li>
				<li>' . __( 'Email support', 'callandor' ) . '</li>
				<li>' . __( '5 user accounts', 'callandor' ) . '</li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"backgroundColor":"primary","width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button">' . __( 'Get Started', 'callandor' ) . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"width":"2px"}},"borderColor":"primary","backgroundColor":"primary-accent"} -->
		<div class="wp-block-column has-border-color has-primary-border-color has-primary-accent-background-color has-background" style="border-width:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"backgroundColor":"primary","textColor":"base","fontSize":"sm"} -->
			<p class="has-text-align-center has-base-color has-primary-background-color has-text-color has-background has-sm-font-size" style="font-weight:600">' . __( 'MOST POPULAR', 'callandor' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-text-align-center has-3-xl-font-size">' . __( 'Professional', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}},"fontSize":"5xl"} -->
			<p class="has-text-align-center has-5-xl-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40)"><strong>' . __( '$999', 'callandor' ) . '</strong><span style="font-size:1rem">' . __( '/month', 'callandor' ) . '</span></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-checkmark-list"} -->
			<ul class="is-style-checkmark-list">
				<li>' . __( 'Up to 50,000 monthly visitors', 'callandor' ) . '</li>
				<li>' . __( 'Advanced analytics & reporting', 'callandor' ) . '</li>
				<li>' . __( 'Priority support', 'callandor' ) . '</li>
				<li>' . __( 'Unlimited user accounts', 'callandor' ) . '</li>
				<li>' . __( 'Custom integrations', 'callandor' ) . '</li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"backgroundColor":"primary","width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button">' . __( 'Get Started', 'callandor' ) . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"width":"1px"}},"borderColor":"border-light","backgroundColor":"base"} -->
		<div class="wp-block-column has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-text-align-center has-3-xl-font-size">' . __( 'Enterprise', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}},"fontSize":"5xl"} -->
			<p class="has-text-align-center has-5-xl-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40)"><strong>' . __( 'Custom', 'callandor' ) . '</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-checkmark-list"} -->
			<ul class="is-style-checkmark-list">
				<li>' . __( 'Unlimited monthly visitors', 'callandor' ) . '</li>
				<li>' . __( 'Enterprise analytics suite', 'callandor' ) . '</li>
				<li>' . __( 'Dedicated account manager', 'callandor' ) . '</li>
				<li>' . __( 'White-label options', 'callandor' ) . '</li>
				<li>' . __( 'SLA guarantee', 'callandor' ) . '</li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"backgroundColor":"primary","width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button">' . __( 'Contact Sales', 'callandor' ) . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
