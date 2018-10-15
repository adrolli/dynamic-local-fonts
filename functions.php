<?php
/**
 * Dynamic Font Loader.
 * 
 * Loading Google Fonts conditionally and locally.
 * (Copy this code into your Starter Themes or Child Themes functions.php).
 * 
 * @link https://github.com/adrolli/dynamic-local-fonts/
 */

function load_google_fonts() {

	// get current font from ACF field
	$fontload = get_field( 'font', get_queried_object() );
	$fontpath = substr($fontload, -0, strrpos($fontload, "-"));

	// load dynamic font
	if ( ! empty( $fontload ) ) {
		wp_enqueue_style( 'fonts-css', get_stylesheet_directory_uri() . '/webfonts/' . $fontpath . '/' . $fontload . '.css' );	
	}

	// load default font
	wp_enqueue_style( 'fonts-css', get_stylesheet_directory_uri() . '/webfonts/nunito-latin/nunito-latin-regular.css' );
}
add_action( 'wp_enqueue_scripts', 'load_google_fonts' );