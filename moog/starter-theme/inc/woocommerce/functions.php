<?php
/**
 * Woocommerce functions
 *
 * @package ainoblocks
 * @since 1.0
 */

add_theme_support( 'woocommerce');

// Register WooCommerce theme features.
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_theme_support('woocommerce', array(
	'thumbnail_image_width' => 600,
	'single_image_width'    => 1400,
	)
);

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );