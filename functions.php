<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Yumi
 * @since 1.0
 */

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0
 *
 * @return void
 */
function yumi_support() {

		// Enqueue editor styles.
		add_editor_style( 'assets/build/css/style-editor.css' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

}
add_action( 'after_setup_theme', 'yumi_support' );

/**
 * Enqueue style.css file.
 */
if ( ! function_exists( 'yumi_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function yumi_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'yumi-style',
			get_stylesheet_directory_uri() . '/assets/build/css/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'yumi-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'yumi_styles' );

/**
 * Registers pattern categories.
 *
 * @since 1.0
 */
function yumi_register_pattern_categories() {

	$block_pattern_categories = array(
		'headers'       => array( 'label' => __( 'Headers', 'yumi' ) ),
		'footers'       => array( 'label' => __( 'Footers', 'yumi' ) ),
		'page'          => array( 'label' => __( 'Page', 'yumi' ) ),
	);

	$block_pattern_categories = apply_filters( 'yumi_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}

add_action( 'init', 'yumi_register_pattern_categories' );
