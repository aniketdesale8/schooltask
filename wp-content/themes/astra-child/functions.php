<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'uikit', 'https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/css/uikit.min.css' );

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

    wp_enqueue_script( 'uikit', 'https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/js/uikit.min.js', array( 'jquery' ), '3.0.0.30', true );

    wp_enqueue_script( 'uikit-icons', 'https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/js/uikit-icons.min.js', array( 'jquery' ), '3.0.0.30', true );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

add_filter( 'astra_gutenberg_core_blocks_design_compatibility', '__return_true' );