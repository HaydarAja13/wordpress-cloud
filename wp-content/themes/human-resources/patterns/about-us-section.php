<?php
/**
 * About Us Section
 * 
 * slug: human-resources/about-us-section
 * title: About Us Section
 * categories: human-resources
 */

    return array(
        'title'      =>__( 'About Us Section', 'human-resources' ),
        'categories' => array( 'human-resources' ),
        'content'    => '<!-- wp:group {"className":"about-us-section","layout":{"type":"constrained","contentSize":"100%"}} -->
<div id="aboutus" class="wp-block-group about-us-section"><!-- wp:cover {"overlayColor":"accent","isUserOverlayColor":true,"sizeSlug":"large","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"about-us-col01 wow zoomInLeft"} -->
<div class="wp-block-column is-vertically-aligned-center about-us-col01 wow zoomInLeft"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":11,"sizeSlug":"full","linkDestination":"none","className":"about-img01","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border about-img01"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about01.png" alt="" class="wp-image-11" style="border-radius:10px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":10,"sizeSlug":"full","linkDestination":"none","align":"right","className":"about-img02","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image alignright size-full has-custom-border about-img02"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about02.png" alt="" class="wp-image-10" style="border-radius:10px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":9,"sizeSlug":"full","linkDestination":"none","className":"about-img03","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border about-img03"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about03.png" alt="" class="wp-image-9" style="border-radius:10px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"about-us-col02 wow zoomInRight","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center about-us-col02 wow zoomInRight"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|thirdaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"thirdaccent","fontSize":"upper-heading","fontFamily":"inter"} -->
<p class="has-thirdaccent-color has-text-color has-link-color has-inter-font-family has-upper-heading-font-size" style="font-style:normal;font-weight:600">'. esc_html__('About Us','human-resources').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"about-us-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"32px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"poppins"} -->
<h2 class="wp-block-heading about-us-heading has-background-color has-text-color has-link-color has-poppins-font-family" style="font-size:32px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('We want to give you the best services','human-resources').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.6"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small","fontFamily":"poppins"} -->
<p class="has-background-color has-text-color has-link-color has-poppins-font-family has-small-font-size" style="font-style:normal;font-weight:400;line-height:1.6">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','human-resources').'</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"about-col02-list","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns about-col02-list" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":8,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-icon01.png" alt="" class="wp-image-8"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"background","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-link-color has-inter-font-family" style="margin-top:var(--wp--preset--spacing--40);font-size:19px;font-style:normal;font-weight:700;text-transform:capitalize">'. esc_html__('Guaranteed Results','human-resources').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"extra-small","fontFamily":"poppins"} -->
<p class="has-background-color has-text-color has-link-color has-poppins-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400;line-height:1.5">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','human-resources').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":7,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-icon02.png" alt="" class="wp-image-7"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"19px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"background","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-link-color has-inter-font-family" style="margin-top:var(--wp--preset--spacing--40);font-size:19px;font-style:normal;font-weight:700;text-transform:capitalize">'. esc_html__('Quality Services','human-resources').'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"extra-small","fontFamily":"rubik"} -->
<p class="has-background-color has-text-color has-link-color has-rubik-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400;line-height:1.5">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','human-resources').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
    );