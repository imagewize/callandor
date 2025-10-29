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
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","textColor":"main","style":{"typography":{"fontSize":"4.5rem","lineHeight":"1.1","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontFamily":"montserrat"} -->
		<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-link-color has-montserrat-font-family" style="margin-bottom:var(--wp--preset--spacing--60);font-size:4.5rem;font-weight:700;line-height:1.1">' . __( 'Simple, Transparent Pricing', 'callandor' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","radius":"8px"}},"borderColor":"border-light","backgroundColor":"base"} -->
		<div class="wp-block-column has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"2.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"main","fontFamily":"montserrat"} -->
			<h3 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family" style="margin-bottom:var(--wp--preset--spacing--30);font-size:2.25rem;font-weight:700">' . __( 'Starter', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"typography":{"lineHeight":"1"}},"textColor":"main"} -->
			<p class="has-text-align-center has-main-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);line-height:1"><span style="font-size:1.5rem;font-weight:600">$</span><strong style="font-size:5rem;font-weight:700">1</strong><span style="font-size:1.125rem;font-weight:400;color:#465166">/ month</span></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"typography":{"fontSize":"1.125rem","lineHeight":"2"}},"textColor":"main-accent","className":"is-style-checkmark-list"} -->
			<ul class="is-style-checkmark-list has-main-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);padding-left:0;font-size:1.125rem;line-height:2">
				<li>' . __( '1 Website', 'callandor' ) . '</li>
				<li>' . __( 'SSL (HTTPS)', 'callandor' ) . '</li>
				<li>' . __( 'SiteFast Domain', 'callandor' ) . '</li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"primary","width":100,"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"8px","width":"2px"},"color":{"background":"#ffffff"}},"borderColor":"primary","fontSize":"lg","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-open-sans-font-family has-lg-font-size"><a class="wp-block-button__link has-primary-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:2px;border-radius:8px;background-color:#ffffff;padding-top:1rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--50)">' . __( 'Start Now', 'callandor' ) . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"3px","radius":"8px"}},"borderColor":"primary","backgroundColor":"base"} -->
		<div class="wp-block-column has-border-color has-primary-border-color has-base-background-color has-background" style="border-width:3px;border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"2.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"main","fontFamily":"montserrat"} -->
			<h3 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family" style="margin-bottom:var(--wp--preset--spacing--30);font-size:2.25rem;font-weight:700">' . __( 'Basic', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"typography":{"lineHeight":"1"}},"textColor":"main"} -->
			<p class="has-text-align-center has-main-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);line-height:1"><span style="font-size:1.5rem;font-weight:600">$</span><strong style="font-size:5rem;font-weight:700">29</strong><span style="font-size:1.125rem;font-weight:400;color:#465166">/ month</span></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"typography":{"fontSize":"1.125rem","lineHeight":"2"}},"textColor":"main-accent","className":"is-style-checkmark-list"} -->
			<ul class="is-style-checkmark-list has-main-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);padding-left:0;font-size:1.125rem;line-height:2">
				<li>' . __( '15 Websites', 'callandor' ) . '</li>
				<li>' . __( 'SSL (HTTPS)', 'callandor' ) . '</li>
				<li>' . __( 'Custom Domain', 'callandor' ) . '</li>
				<li>' . __( 'SiteFast Branding Removal', 'callandor' ) . '</li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","width":100,"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"8px"}},"fontSize":"lg","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-open-sans-font-family has-lg-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:1rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--50)">' . __( 'Start Now', 'callandor' ) . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","radius":"8px"}},"borderColor":"border-light","backgroundColor":"base"} -->
		<div class="wp-block-column has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"2.25rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"main","fontFamily":"montserrat"} -->
			<h3 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family" style="margin-bottom:var(--wp--preset--spacing--30);font-size:2.25rem;font-weight:700">' . __( 'Plus', 'callandor' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"typography":{"lineHeight":"1"}},"textColor":"main"} -->
			<p class="has-text-align-center has-main-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);line-height:1"><span style="font-size:1.5rem;font-weight:600">$</span><strong style="font-size:5rem;font-weight:700">49</strong><span style="font-size:1.125rem;font-weight:400;color:#465166">/ month</span></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"typography":{"fontSize":"1.125rem","lineHeight":"2"}},"textColor":"main-accent","className":"is-style-checkmark-list"} -->
			<ul class="is-style-checkmark-list has-main-accent-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);padding-left:0;font-size:1.125rem;line-height:2">
				<li>' . __( '50 Websites', 'callandor' ) . '</li>
				<li>' . __( 'SSL (HTTPS)', 'callandor' ) . '</li>
				<li>' . __( 'Custom Domain', 'callandor' ) . '</li>
				<li>' . __( 'SiteFast Branding Removal', 'callandor' ) . '</li>
				<li>' . __( 'Google Analytics', 'callandor' ) . '</li>
				<li>' . __( 'Email Integration', 'callandor' ) . '</li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"primary","width":100,"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"8px","width":"2px"},"color":{"background":"#ffffff"}},"borderColor":"primary","fontSize":"lg","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-open-sans-font-family has-lg-font-size"><a class="wp-block-button__link has-primary-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:2px;border-radius:8px;background-color:#ffffff;padding-top:1rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--50)">' . __( 'Start Now', 'callandor' ) . '</a></div>
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
