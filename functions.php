<?php
/**
 * Dynamic Font Loader.
 * 
 * Loading Google Fonts conditionally and locally.
 * (Copy this code into your Starter Themes or Child Themes functions.php).
 * 
 * @link https://github.com/adrolli/dynamic-local-fonts/blob/master/README.md
 */
function load_google_fonts() {

	// load dynamic font
	$fontload = get_field( 'font', get_queried_object() );	
	if ( ! empty( $fontload ) ) {
		wp_enqueue_style( 'fonts-css', get_stylesheet_directory_uri() . '/fonts/' . $fontload . '/load.css' );	
	}

	// load default font
	wp_enqueue_style( 'fonts-css', get_stylesheet_directory_uri() . '/fonts/nunito-latin/load.css' );	
}
add_action( 'wp_enqueue_scripts', 'load_google_fonts' );
