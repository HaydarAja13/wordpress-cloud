<?php
/**
 * Team Section
 * 
 * slug: human-resources/team-section
 * title: Team Section
 * categories: human-resources
 */

    return array(
        'title'      =>__( 'Team Section', 'human-resources' ),
        'categories' => array( 'human-resources' ),
        'content'    => '<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"underline"}},"textColor":"secaccent","fontSize":"medium","fontFamily":"poppins"} -->
<p class="has-text-align-center has-secaccent-color has-text-color has-link-color has-poppins-font-family has-medium-font-size" style="font-style:normal;font-weight:500;text-decoration:underline">'. esc_html__('Upskill and Transform Your Workforce','human-resources').'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"team-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"fourthaccent"} -->
<p class="has-text-align-center team-heading has-fourthaccent-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500">'. esc_html__('Customized training programs designed to enhance employee performance.','human-resources').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"team-main-section","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group team-main-section"><!-- wp:group {"className":"team-section-grid owl-carousel wow zoomIn","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group team-section-grid owl-carousel wow zoomIn" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"className":"team-box","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"%"}} -->
<div class="wp-block-group team-box"><!-- wp:group {"className":"team-box-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-box-image"><!-- wp:image {"id":84,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/employee01.png" alt="" class="wp-image-84"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-box-content","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group team-box-content" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:html -->
<i class="fa-solid fa-desktop"></i>
<!-- /wp:html -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"19px"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"fourthaccent","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-fourthaccent-color has-text-color has-link-color has-poppins-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:19px;font-style:normal;font-weight:600"><a href="#">'. esc_html__('Leadership Development Training','human-resources').'</a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#1a1a1acc"}}},"color":{"text":"#1a1a1acc"},"typography":{"lineHeight":1.6}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#1a1a1acc;line-height:1.6">'. esc_html__('Build confident, effective leaders across all departments.','human-resources').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-box","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"%"}} -->
<div class="wp-block-group team-box"><!-- wp:group {"className":"team-box-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-box-image"><!-- wp:image {"id":83,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/employee02.png" alt="" class="wp-image-83"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-box-content","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group team-box-content" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:html -->
<i class="fa-solid fa-laptop"></i>
<!-- /wp:html -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"19px"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"fourthaccent","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-fourthaccent-color has-text-color has-link-color has-poppins-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:19px;font-style:normal;font-weight:600"><a href="#">'. esc_html__('Communication & Soft Skills','human-resources').'</a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#1a1a1acc"}}},"color":{"text":"#1a1a1acc"},"typography":{"lineHeight":1.6}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#1a1a1acc;line-height:1.6">'. esc_html__('Improve teamwork, client communication, and internal collaboration.','human-resources').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-box","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"%"}} -->
<div class="wp-block-group team-box"><!-- wp:group {"className":"team-box-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-box-image"><!-- wp:image {"id":85,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/employee03.png" alt="" class="wp-image-85"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-box-content","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group team-box-content" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:html -->
<i class="fa-solid fa-computer"></i>
<!-- /wp:html -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourthaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"19px"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"fourthaccent","fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-fourthaccent-color has-text-color has-link-color has-poppins-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:19px;font-style:normal;font-weight:600"><a href="#">'. esc_html__('Workplace Productivity Training','human-resources').'</a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#1a1a1acc"}}},"color":{"text":"#1a1a1acc"},"typography":{"lineHeight":1.6}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#1a1a1acc;line-height:1.6">'. esc_html__('Equip teams with tools and habits for high performance.','human-resources').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
    );