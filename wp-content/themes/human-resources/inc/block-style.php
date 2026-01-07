<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage human-resources
 * @since human-resources 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since human-resources 1.0
	 *
	 * @return void
	 */
	function human_resources_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'human-resources-border',
				'label' => esc_html__( 'Borders', 'human-resources' ),
			)
		);

		
	}
	add_action( 'init', 'human_resources_register_block_styles' );
}