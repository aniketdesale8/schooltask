<?php
/**
 * Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Child
 * @since 1.0.0
 *

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css');

	wp_enqueue_style( 'uikit', 'https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/css/uikit.min.css' );

    wp_enqueue_script( 'uikit', 'https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/js/uikit.min.js', array( 'jquery' ), '3.0.0.30', true );

    wp_enqueue_script( 'uikit-icons', 'https://cdn.jsdelivr.net/npm/uikit@3.6.20/dist/js/uikit-icons.min.js', array( 'jquery' ), '3.0.0.30', true );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );