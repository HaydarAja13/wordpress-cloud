<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage human-resources
 * @since human-resources 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function human_resources_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Human_Resources_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Human Resources Pro', 'human-resources' ),
		'button_text'      => __( 'Upgrade Pro', 'human-resources' ),
		'url'              => 'https://www.wpradiant.net/products/hr-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'human_resources_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function human_resources_custom_control_scripts() {
	wp_enqueue_script( 'human-resources-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'human-resources-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'human_resources_custom_control_scripts' );
