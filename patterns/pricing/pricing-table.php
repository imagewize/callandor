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
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading {"textAlign":"center","textColor":"main","fontSize":"6xl","fontFamily":"montserrat"} -->
		<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family has-6-xl-font-size">' . __( 'Simple, Transparent Pricing', 'callandor' ) . '</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","radius":"8px"}},"borderColor":"border-light","backgroundColor":"base"} -->
	<div class="wp-block-column has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"textAlign":"center","level":3,"textColor":"main","fontSize":"3xl","fontFamily":"montserrat","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
		<h3 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family has-3-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--30)">' . __( 'Starter', 'callandor' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4,"textAlign":"center","textColor":"main","fontSize":"6xl","fontFamily":"montserrat","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
		<h4 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family has-6-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">$1<span style="font-size:50%;font-weight:400;color:var(--wp--preset--color--main-accent)">/month</span></h4>
		<!-- /wp:heading -->

		<!-- wp:separator {"backgroundColor":"border-light","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
		<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"/>
		<!-- /wp:separator -->

		<!-- wp:list {"textColor":"main-accent","className":"is-style-checkmark-list","fontSize":"base","style":{"spacing":{"padding":{"left":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"typography":{"lineHeight":"2"}}} -->
		<ul class="is-style-checkmark-list has-main-accent-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);padding-left:0;line-height:2">
			<!-- wp:list-item -->
			<li>' . __( '1 Website', 'callandor' ) . '</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>' . __( 'SSL (HTTPS)', 'callandor' ) . '</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>' . __( 'SiteFast Domain', 'callandor' ) . '</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"primary","width":100,"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"8px","width":"2px"}},"borderColor":"primary","fontSize":"lg","fontFamily":"open-sans"} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-open-sans-font-family has-lg-font-size"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:2px;border-radius:8px;padding-top:1rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--50)">' . __( 'Start Now', 'callandor' ) . '</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"3px","radius":"8px"}},"borderColor":"primary","backgroundColor":"base"} -->
	<div class="wp-block-column has-border-color has-primary-border-color has-base-background-color has-background" style="border-width:3px;border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"textAlign":"center","level":3,"textColor":"main","fontSize":"3xl","fontFamily":"montserrat","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
		<h3 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family has-3-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--30)">' . __( 'Basic', 'callandor' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4,"textAlign":"center","textColor":"main","fontSize":"6xl","fontFamily":"montserrat","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
		<h4 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family has-6-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">$29<span style="font-size:50%;font-weight:400;color:var(--wp--preset--color--main-accent)">/month</span></h4>
		<!-- /wp:heading -->

		<!-- wp:separator {"backgroundColor":"primary","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
		<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"/>
		<!-- /wp:separator -->

		<!-- wp:list {"textColor":"main-accent","className":"is-style-checkmark-list","fontSize":"base","style":{"spacing":{"padding":{"left":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"typography":{"lineHeight":"2"}}} -->
		<ul class="is-style-checkmark-list has-main-accent-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);padding-left:0;line-height:2">
			<!-- wp:list-item -->
			<li>' . __( '15 Websites', 'callandor' ) . '</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>' . __( 'SSL (HTTPS)', 'callandor' ) . '</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>' . __( 'Custom Domain', 'callandor' ) . '</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>' . __( 'SiteFast Branding Removal', 'callandor' ) . '</li>
			<!-- /wp:list-item -->
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
		<!-- wp:heading {"textAlign":"center","level":3,"textColor":"main","fontSize":"3xl","fontFamily":"montserrat","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
		<h3 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family has-3-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--30)">' . __( 'Plus', 'callandor' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":4,"textAlign":"center","textColor":"main","fontSize":"6xl","fontFamily":"montserrat","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
		<h4 class="wp-block-heading has-text-align-center has-main-color has-text-color has-montserrat-font-family has-6-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">$49<span style="font-size:50%;font-weight:400;color:var(--wp--preset--color--main-accent)">/month</span></h4>
		<!-- /wp:heading -->

		<!-- wp:separator {"backgroundColor":"border-light","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
		<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"/>
		<!-- /wp:separator -->

		<!-- wp:list {"textColor":"main-accent","className":"is-style-checkmark-list","fontSize":"base","style":{"spacing":{"padding":{"left":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"typography":{"lineHeight":"2"}}} -->
		<ul class="is-style-checkmark-list has-main-accent-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);padding-left:0;line-height:2">
			<!-- wp:list-item -->
			<li>' . __( '50 Websites', 'callandor' ) . '</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>' . __( 'SSL (HTTPS)', 'callandor' ) . '</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>' . __( 'Custom Domain', 'callandor' ) . '</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>' . __( 'SiteFast Branding Removal', 'callandor' ) . '</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>' . __( 'Google Analytics', 'callandor' ) . '</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>' . __( 'Email Integration', 'callandor' ) . '</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"primary","width":100,"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"8px","width":"2px"}},"borderColor":"primary","fontSize":"lg","fontFamily":"open-sans"} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-open-sans-font-family has-lg-font-size"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:2px;border-radius:8px;padding-top:1rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--50)">' . __( 'Start Now', 'callandor' ) . '</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
