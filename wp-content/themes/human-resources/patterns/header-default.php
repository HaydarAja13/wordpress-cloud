<?php
/**
 * Header Default
 * 
 * slug: human-resources/header-default
 * title: Header Default
 * categories: human-resources
 */

return array(
    'title'      =>__( 'Header Default', 'human-resources' ),
    'categories' => array( 'human-resources' ),
    'content'    => '<!-- wp:group {"className":"main-header","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group main-header" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"top-header-main","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group top-header-main"><!-- wp:paragraph {"className":"top-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<p class="top-header" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-box-upper","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20","right":"0","left":"0"}}},"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-box-upper has-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize","fontSize":"24px","lineHeight":"1.3"},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"poppins"} /-->

<!-- wp:navigation {"textColor":"background","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-head-menu","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"capitalize"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"medium","fontFamily":"poppins","layout":{"type":"flex","justifyContent":"left"}} --><!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#aboutus","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Industries","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Get Pro","type":"","url":"https://www.wpradiant.net/products/hr-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"getpro"} /-->


<!-- /wp:navigation -->

<!-- wp:buttons {"className":"contact-button","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons contact-button" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textColor":"background","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"color":{"background":"#ffffff00"},"border":{"color":"#fff","radius":"13px"}},"fontSize":"medium"} -->
<div class="wp-block-button is-style-outline"><a href="#" class="wp-block-button__link has-background-color has-text-color has-background has-link-color has-border-color has-medium-font-size has-custom-font-size wp-element-button" style="border-color:#fff;border-radius:13px;background-color:#ffffff00">'. esc_html__('Contact Us','human-resources').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);