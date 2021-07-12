<?php
/**
 * ITALIAN_PIZZA-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ITALIAN_PIZZA-child
 */

add_action( 'wp_enqueue_scripts', 'ITALIAN_PIZZA_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function ITALIAN_PIZZA_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'ITALIAN_PIZZA-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'ITALIAN_PIZZA-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'ITALIAN_PIZZA-style' )
	);

}
